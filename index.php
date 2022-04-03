<?php

    include("header.php");
    // require 'connection.php';

    // function redirect() {
    //     header('Location: index.php');
    //     exit();
    // }
    // echo ("$tbl_name")


    // $data = $res->fetch_all();
    // $jdata = json_encode($data);
    // var_dump($data);
    // echo ($data[])


    // foreach ($data as $product){
    //     // echo ($product);
    //     $modeln = $product[1];
    //     $title = $product [2];

    //     echo $modeln;
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
</head>
<body>
    <div class="container-fluid my-5">
   
        </div>
            <div class="col-md-12">
                <div class="row show_data">
                    
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            load_data();
            function load_data(){


           	$.ajax({
               url: "load_main.php",
               method: "POST",
               dataType:"JSON",
               success:function(data){
                $(".show_data").html(data.output);
               }
           	});
           }

        })
    </script>
</body>
</html>