<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once('../core/initialize.php');

$post = new Users($db);

$post->id = isset($_GET['id']) ? $_GET['id'] : die();
$post->read_single();

$post_arr = array(
    'id' => $post->id,
    'userName' => $post->userName,
    'email' => $post->email,
    'password' => $post->password,
    'confirmPass' => $post->confirmPass
);

print_r(json_encode($post_arr));
?>