
<?php
include("connection.php");

// $id = 100001;

if (isset($_POST['id'])) {
    $id = $_POST['id'];
}
// echo 'console.log('.$id.');';

$res = mysqli_query($connection,"SELECT * FROM $tbl_name WHERE type='item' AND model_number='$id'");


if (mysqli_num_rows($res) == 1){
    while ($row = mysqli_fetch_assoc($res)){

        // echo 'console.log("onedata")';

        $output     = "
        <div>
            <img src='Assets/Product Images/".$row['model_number'].".png' class='col-md-12' height='200px'>
            <h3 class='mx-3 text-center'>".$row['large_title']."</h3>
            <h3 class='mx-3 text-center'>$".$row['price']."</h3>  
        </div      
        ";
    }
}


$data['output'] = $output;
echo json_encode($data)

?>