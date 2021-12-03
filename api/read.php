<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once('../core/initialize.php');

$post = new Post($db);

$result = $post->read();
$num = $result->rowCount();

if($num > 0){
    $post_arr = array();
    $post_arr['userAllergy'] = array();

    while($row = $result->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $post_item = array(
            'id' => $id,
            'inAllergy' => $inAllergy,
            'product' => $product,
            'symptoms' => $symptoms
        );
        array_push($post_arr['userAllergy'], $post_item);
    }
    echo json_encode($post_arr);
}else{
    echo json_encode(array('message' => 'Nothing found'));
}
?>