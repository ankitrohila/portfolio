<?php
include('../config.php');

$directory = "../";
$contentData = "";

$files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory));

foreach ($files as $file) {

    if ($file->isFile()) {

        $path = $file->getRealPath();

        if (preg_match('/\.(php|html)$/', $path)) {

            $html = file_get_contents($path);

            // REMOVE TAGS
            $text = strip_tags($html);

            // CLEAN
            $text = preg_replace('/\s+/', ' ', $text);

            $contentData .= $text . " ";
        }
    }
}

// SAVE TO FILE
file_put_contents("knowledge.txt", substr($contentData, 0, 20000));

echo "Training completed!";