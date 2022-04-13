<?php
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> 
    <link rel="stylesheet" href="styles.css">
    <title></title>
</head>
<body>
<div class="main">
    <div class='banner_container'>
        <img class='banner' src='Assets/assets_landscape/banner-xs_datejust-36_portrait.jpg'>
    </div>
    <div class='text_component justify-content-center'>
        <h5> Experience a Rolex </h5>
        <h2> ROLEX WATCHES </h2>
        <p> Rolex watches are crafted from the finest materials and assembled with attention to detail. Every component is designed, developed and produced to the most exacting standards. </p>
    </div>
</div>
<div class="show_content"></div>

<script type="text/javascript">
    $(document).ready(function(pid){
        load_data();
        $('.main').css('display','block');

    })
        function load_data(pid){
            $('.main').css('display','none');
            $.ajax({
                url: "load_main.php",
                method: "POST",
                dataType:"JSON",
                data:({pid:pid}),
                success:function(data){
                    $(".show_content").html(data.output);
                }
            });
        }
        function details(id) {
        $(document).ready(function(){
            $('.main').css('display','none');
            $.ajax({
                url: "load_details.php",
                method: "POST",
                dataType:"JSON",
                data:({id:id}),
                
                success:function(data) {
                    $(".show_content").html(data.output);
                }

            });})

        }

        
        $(document).on("click","#UpdateSubmit", function(e) {
            e.preventDefault();
            let form = $('#form')
            udata = form.serialize()
            $.ajax({
                type: "POST",
                url: "/update.php",
                data: udata,
                dataType : 'JSON',
                success: function(data) {         
                    alert('form was submitted');
                    

                }
            });
        })

</script>
</body>
</html>