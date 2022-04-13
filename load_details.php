
<?php
include("connection.php");

if (isset($_POST['id'])) {
    $id = $_POST['id'];
}

$res = mysqli_query($connection,"SELECT * FROM $tbl_name WHERE type='item' AND model_number='$id'");

$output = "";

if (mysqli_num_rows($res) == 1){
    while ($row = mysqli_fetch_assoc($res)){

               


        $output     = "
        <div class='details_container'>
            <div class='row flex-lg-row-reverse'>
                <div class='details_img column-md-5 column-sm-9'>
                    <img class='img-responsive' src='Assets/Product Images/".$row['model_number'].".png' class='col-md-12' style='width:100%;'>
                </div>
                <form class='details_form column-md-5 column-sm-9' id='form' method='post' action='update_details.php'>
                    <input type='hidden' id='db_loc' name='id' class='form-control-sm' value='".$row['id']."'>
                    <div class='details_section form-group'>
                        <label class='section_title'>MODEL NUMBER:</label>
                        <input type='text' name='model_number' class='row form-control-s' value='".$row['model_number']."'>
                    </div>
                    <div class='details_section form-group'>
                        <label class='section_title'>NAME:</label>
                        <input type='text' name='large_title' class='row form-control-sm' value='".$row['large_title']."'>
                    </div>
                    <div class='details_section form-group'>
                        <label class='section_title'>MODEL CASE:</label>
                        <input type='text' name='model_case' class='row form-control-sm' value='".$row['model_case']."'>
                    </div>
                    <div class='details_section form-group'>
                        <label class='section_title'>WATER RESISTANCE:</label>
                        <input type='text' name='water_resistance' class='row form-control-sm' value='".$row['water_resistance']."'>
                    </div>
                    <div class='details_section form-group'>
                        <label class='section_title'>MOVEMENT:</label>
                        <input type='text' name='movement' class='row form-control-sm' value='".$row['movement']."'>
                    </div>
                    <div class='details_section form-group'>
                        <label class='section_title'>CALIBER:</label>
                        <input type='text' name='caliber' class='row form-control-sm' value='".$row['caliber']."'>
                    </div>
                    <div class='details_section form-group'>
                        <label class='section_title'>POWER RESERVE:</label>
                        <input type='text' name='power_reserve' class='row form-control-sm' value='".$row['power_reserve']."'>
                    </div>
                    <div class='details_section form-group'>
                        <label class='section_title'>BRACELET:</label>
                        <input type='text' name='bracelet' class='row form-control-sm' value='".$row['bracelet']."'>
                    </div>
                    <div class='details_section form-group'>
                        <label class='section_title'>DIAL:</label>
                        <input type='text' name='dial' class='row form-control-sm' value='".$row['dial']."'>
                    </div>
                    <div class='details_section form-group'>
                        <label class='section_title'>DESCRIPTION:</label>
                        <input type='text' name='description' class='row form-control-sm' value='".$row['description']."'>
                    </div>  
                    <div class='details_section form-group'>
                        <label class='section_title'>PRICE:</label>
                        <input type='text' name='price' class='row form-control-sm' value='".$row['price']."'>
                    </div>

                    <button type='button' id='UpdateSubmit'>Update</button>

                </form>
            </div>
        </div      
        ";
    }
}


$data['output'] = $output;
echo json_encode($data)

?>