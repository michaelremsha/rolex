<?php
include("connection.php");

if (isset($_POST['pid'])) {
    $pid = $_POST['pid'];
    $ccat = $pid;


    $children = mysqli_query($connection,"SELECT * FROM $tbl_name WHERE type='cat' AND pid='$pid'");
    $row = mysqli_fetch_assoc($children);
    
    if(isset($row)){
        if( $row['pid'] != 1 and $row['pid'] != 0){
            $ccat = $row['id'];
        }
    }


    $res = mysqli_query($connection,"SELECT * FROM $tbl_name WHERE type='item' AND pid='$pid' OR pid='$ccat'");


}else{
    $res = mysqli_query($connection,"SELECT * FROM $tbl_name WHERE type='item'");
}


    
$output ="";


if (mysqli_num_rows($res) > 0){

    $output .= "


    <div class='grid container'>
        <div class='row justify-content-center'>

    ";

    while ($row = mysqli_fetch_assoc($res)){
        
        $output .= "
        
        <div class='cell col-sm-6 col-md-4'>
            <a class='link' onclick='details(".$row['model_number'].")'>
            <div class class='cell_image'>
                <img src='Assets/Product Images/".$row['model_number'].".png' width='100%' height='100%'>
            </div>
            <div class='cell_text'>
                <h3 class='subtitle text-center'>Rolex</h3>
                <h3 class='small_title text-center'>".$row['large_title']."</h3>
                <h3 class='small_description text-center'>".$row['description']."</h3>

            </div>
            </a>
        </div>

        ";
    }

    $output .= "
           
        </div>
    </div>

    ";
} 

$data['output'] = $output;
echo json_encode($data)

?>