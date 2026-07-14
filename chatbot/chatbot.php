<!-- CHATBOT TOGGLE -->
<div id="chatbot-toggle">💬</div>

<!-- CHATBOX -->
<div id="chatbot-box">

    <div id="chat-header">AI Agent</div>

    <div id="chatbox"></div>

    <div id="chat-input-area">
        <input type="text" id="userInput" placeholder="Type your message..." />
        <button id="sendBtn">➤</button>
    </div>

</div>

<style>
/* Chatbot structure only (NO z-index here) */

#chatbot-toggle {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background: #5544FF;
    color: white;
    padding: 14px;
    border-radius: 50%;
    cursor: pointer;
}

#chatbot-box {
    display: none;
    position: fixed;
    bottom: 70px;
    right: 20px;
    width: 340px;
    height: 460px;
    background: #fff;
    border-radius: 15px;
    overflow: hidden;
}

#chat-header {
    background: #5544FF;
    color: white;
    padding: 12px;
}

#chatbox {
    font-size: 13px;
    height: 320px;
    padding: 10px;
    overflow-y: auto;

    display: flex;
    flex-direction: column;
    gap: 10px; /* spacing fix */
}

.user-msg { text-align: right; }
.bot-msg { text-align: left; }

.bubble {
    padding: 10px;
    border-radius: 12px;
    max-width: 75%;
    display: inline-block;
    line-height: 1.5;
}

.user-msg .bubble {
    background: #5544FF;
    color: white;
}

.bot-msg .bubble {
    background: #eee;
}

#chat-input-area {
    display: flex;
    padding: 10px;
}

#chat-input-area input {
    flex: 1;
    padding: 10px;
    font-size: 13px;
    margin-right: 5px;
}

.overlay-screen {
    pointer-events: none !important;
}
</style>

<script>
document.addEventListener("DOMContentLoaded", function(){

    const toggle = document.getElementById("chatbot-toggle");
    const box = document.getElementById("chatbot-box");
    const input = document.getElementById("userInput");
    const sendBtn = document.getElementById("sendBtn");

    // SAFE SESSION (NO DUPLICATE ERROR)
    if (!window.sessionId) {
        window.sessionId = localStorage.getItem("chat_session");

        if (!window.sessionId) {
            window.sessionId = "sess_" + Math.random().toString(36).substr(2, 9);
            localStorage.setItem("chat_session", window.sessionId);
        }
    }

    // TOGGLE
//     if(toggle && box){
//         toggle.onclick = function(){
//             box.style.display = (box.style.display === "block") ? "none" : "block";
//         };
//         toggle.addEventListener("click", function(){
//             box.style.display = (box.style.display === "block") ? "none" : "block";
// });
//     }

    // SEND BUTTON
    if(sendBtn){
        sendBtn.onclick = sendMessage;
    }

    // ENTER KEY
    if(input){
        input.addEventListener("keypress", function(e){
            if(e.key === "Enter"){
                sendMessage();
            }
        });
    }

    // SEND FUNCTION
    function sendMessage(){

        let message = input.value.trim();
        if(message === "") return;

        const chatbox = document.getElementById("chatbox");

        chatbox.innerHTML += `<div class="user-msg"><div class="bubble">${message}</div></div>`;

        chatbox.innerHTML += `<div class="bot-msg" id="loader"><div class="bubble">Typing...</div></div>`;

        // IMPORTANT FIX (ABSOLUTE PATH)
        fetch("chatbot/api.php", {
            method: "POST",
            headers: {"Content-Type": "application/json"},
            body: JSON.stringify({
                message: message,
                session_id: window.sessionId
            })
        })
        .then(res => res.json())
        .then(data => {

            const loader = document.getElementById("loader");
            if(loader) loader.remove();

            chatbox.innerHTML += `<div class="bot-msg"><div class="bubble">${data.reply}</div></div>`;

            chatbox.scrollTop = chatbox.scrollHeight;
        })
        .catch(err => {
            chatbox.innerHTML += `<div class="bot-msg"><div class="bubble">Server error</div></div>`;
        });

        input.value = "";
    }

});
</script>