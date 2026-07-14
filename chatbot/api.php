<?php
include('../config.php');

$data = json_decode(file_get_contents("php://input"), true);
$userMessage = strtolower(trim($data['message']));
$sessionId = $data['session_id'] ?? 'default';

// =====================
// LOAD KNOWLEDGE (YOUR DATA)
// =====================
$knowledge = json_decode(file_get_contents("data.json"), true);

// 🔥 USE FULL DATA AS CONTEXT (IMPORTANT CHANGE)
$fullContext = "";
foreach ($knowledge as $key => $value) {
    $fullContext .= $value . ". ";
}

// =====================
// LOAD MEMORY (LAST 5 MESSAGES)
// =====================
$history = [];

$stmt = $conn->prepare("SELECT user_message, bot_reply FROM chats WHERE session_id=? ORDER BY id DESC LIMIT 5");
$stmt->bind_param("s", $sessionId);
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    $history[] = ["role"=>"user","content"=>$row['user_message']];
    $history[] = ["role"=>"assistant","content"=>$row['bot_reply']];
}

$history = array_reverse($history);

// =====================
// ALWAYS USE AI WITH CONTEXT (NO WRONG MATCHES)
// =====================
$reply = callGroqWithMemory($userMessage, $history, $fullContext);

// =====================
// SAVE CHAT
// =====================
$stmt = $conn->prepare("INSERT INTO chats (user_message, bot_reply, session_id) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $userMessage, $reply, $sessionId);
$stmt->execute();

echo json_encode(["reply"=>$reply]);


// =====================
// 🤖 GROQ WITH MEMORY + FULL CONTEXT
// =====================
function callGroqWithMemory($message, $history = [], $context = "") {

    $apiKey = GROQ_API_KEY;

    $messages = [
        [
            "role"=>"system",
            "content"=>"You are Ankit Rohilla, a freelance web developer. Answer in first person like a human, not like an AI. Keep answers SHORT (2-4 lines max). Do NOT use tables, bullet points, or long explanations. Focus on services, skills, and helping convert the user into a client. Speak naturally and professionally."
        ]
    ];

    // 🔥 FULL WEBSITE CONTEXT
    if(!empty($context)){
        $messages[] = [
            "role"=>"system",
            "content"=>"Website Data: ".$context
        ];
    }

    // MEMORY
    foreach($history as $msg){
        $messages[] = $msg;
    }

    // USER MESSAGE
    $messages[] = [
        "role"=>"user",
        "content"=>$message
    ];

    $data = [
        "model"=>"openai/gpt-oss-120b",
        "messages"=>$messages,
        "temperature"=>0.4,
        "max_tokens"=>150
    ];

    return groqRequest($data, $apiKey);
}


// =====================
// 🔗 GROQ REQUEST HANDLER
// =====================
function groqRequest($data, $apiKey){

    $ch = curl_init("https://api.groq.com/openai/v1/chat/completions");

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Authorization: Bearer ".$apiKey,
        "Content-Type: application/json"
    ]);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

    $response = curl_exec($ch);

    // CURL ERROR
    if(curl_errno($ch)){
        return "Connection error. Please try again.";
    }

    unset($ch);

    $res = json_decode($response, true);

    // GROQ ERROR
    if(isset($res['error'])){
        return "AI is temporarily unavailable.";
    }

    // INVALID RESPONSE
    if(!isset($res['choices'][0]['message']['content'])){
        return "I couldn’t process that properly. Try again.";
    }

    return trim($res['choices'][0]['message']['content']);
}