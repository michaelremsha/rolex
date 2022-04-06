<?php
include("connection.php");

if (isset($_POST['pid'])) {
    $pid = $_POST['pid'];
    $res = mysqli_query($connection,"SELECT * FROM $tbl_name WHERE type='item' AND pid='$pid'");
}else{
    $res = mysqli_query($connection,"SELECT * FROM $tbl_name WHERE type='item'");
}


    



if (mysqli_num_rows($res) > 1){
    while ($row = mysqli_fetch_assoc($res)){
        
        // echo 'console.log("alldata")';
        $output .= "
        
        <div class='col-md-3 shadow-sm rounded bg-white d-flex justify-content-center'>
        <a class='link' onclick='details(".$row['model_number'].")'>
        <div>
                <img src='Assets/Product Images/".$row['model_number'].".png' href='details.php?id=".$row['model_number']."' class='col-md-12' height='200px'>
                <h3 class='mx-3 text-center'>".$row['large_title']."</h3>
                <h3 class='mx-3 text-center'>$".$row['price']."</h3>

            </div>
        </div>

        ";
    }
} 

$data['output'] = $output;
echo json_encode($data)

?>