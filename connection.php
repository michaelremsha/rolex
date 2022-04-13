<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "programmer22_maindb";
$tbl_name = "products";

$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error){
   die("Failed to connect" . $connection->connect_error);
}


?>