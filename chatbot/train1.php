<?php
include('../config.php');

$directory = "../"; // root folder
$files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory));

foreach ($files as $file) {

    if ($file->isFile()) {

        $path = $file->getRealPath();

        // Only scan these files
        if (preg_match('/\.(php|html)$/', $path)) {

            $content = file_get_contents($path);

            // REMOVE HTML TAGS
            $cleanText = strip_tags($content);

            // CLEAN SPACES
            $cleanText = preg_replace('/\s+/', ' ', $cleanText);

            // SAVE TO DB
            $stmt = $conn->prepare("INSERT INTO knowledge (source, content) VALUES (?, ?)");
            $stmt->bind_param("ss", $path, $cleanText);
            $stmt->execute();

            echo "Indexed: " . $path . "<br>";
        }
    }
}

echo "Training completed!";