<?php
include("connection.php");

$id = $_POST['id'];
$model_number = $_POST['model_number'];
$model_case = $_POST['model_case'];
$water_resistance = $_POST['water_resistance'];
$movement = $_POST['movement'];
$caliber = $_POST['caliber'];
$power_reserve = $_POST['power_reserve'];
$bracelet = $_POST['bracelet'];
$dial = $_POST['dial'];
$large_title = $_POST['large_title'];
$description = $_POST['description'];
$price =  $_POST['price'];


if(isset($_POST)) {

    $sql = "UPDATE $tbl_name SET
    `model_number`='$model_number',
    `model_case`='$model_case', 
    `water_resistance`='$water_resistance',
    `movement`='$movement',
    `caliber`='$caliber',
    `power_reserve`='$power_reserve',
    `bracelet`='$bracelet',
    `dial`='$dial',
    `large_title`='$large_title',
    `description`='$description',
    `price`='$price'
    WHERE id='$id'
    ";

    if (mysqli_query($connection, $sql)) {
        echo json_encode(array("statusCode"=>200));
    } 
    else {
        echo json_encode(array("statusCode"=>201));
    }
    mysqli_close($connection);

} 



?>