<?php
$conn = new mysqli("localhost", "root", "", "portfolio");

if ($conn->connect_error) {
    die("Database failed");
}

define("GROQ_API_KEY", getenv("GROQ_API_KEY") ?: "");
?>