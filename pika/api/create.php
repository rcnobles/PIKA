<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization, X-Requested-With');

include_once('../core/initialize.php');

$post = new Users($db);

$data = json_decode(file_get_contents("php://input"));

$post->userName = $data->userName;
$post->email = $data->email;
$post->password = $data->password;
$post->confirmPass = $data->confirmPass;

if($post->create()){
    echo json_encode(
        array('message' => 'User created.')
    );
}else{
    echo json_encode(
        array('message' => 'User not created')
    );
}
?>