<?php
    function getAllPosts(){
        $json = file_get_contents('data/posts.json');
        return json_decode($json, true);
    }
function savePost($title, $content) {
    $posts = getAllPosts();
    $posts[] = [
        'title' => $title,
        'content' => $content,
        'date' => date('Y-m-d')
    ];
    file_put_contents('data/posts.json', json_encode($posts, JSON_PRETTY_PRINT));
}
function getPost($id) {
    $posts = getAllPosts();
    return $posts[$id] ?? null;
}