<?php
$con = mysqli_connect("localhost", "root", "", "allergyweb");
$response = array();
if($con){
    $sql = "select * from allergy";
    $result = mysqli_query($con,$sql);
    if($result){
        header("Content-Type: JSON");
        $i=0;
        while($row = mysqli_fetch_assoc($result)){
            $response[$i]['id'] = $row ['id'];
            $response[$i]['inAllergy'] = $row ['inAllergy'];
            $response[$i]['product'] = $row ['product'];
            $response[$i]['symptoms'] = $row ['symptoms'];
            $i++;
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
}
else{
    echo "Database connection failed";
}
?>