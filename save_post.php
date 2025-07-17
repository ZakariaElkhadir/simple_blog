<?php
require 'functions.php';
session_start();

$title = trim($_POST['title']);
$content = trim($_POST['content']);

if (!$title || !$content) {
    die('Title and content are required!');
}

setcookie('author', 'Anonymous', time() + 86400 * 30); // Remember author
$_SESSION['post_count']++;

try {
    savePost($title, $content);
    header('Location: index.php');
    exit;
} catch (Exception $e) {
    echo "Error saving post: " . $e->getMessage();
}
