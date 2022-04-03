<?php
$servername = "host.ishowcasedc10.com";
$username = "programmer22_test123";
$password = "test123";
$dbname = "programmer22_test123";
$tbl_name = "products";

$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error){
   die("Failed to connect" . $connection->connect_error);
}

// Host: ishowcasedc10.com
// Username: programmer22
// Password: 22oY[52.;z&*@0

//-u programmer22_test123 -h host.ishowcasedc10.com --password=test123

?>