<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
</head>
<body>

<div id="det" class="show_details">
</div>

<div class="container-fluid my-5">
       <div id="grid" class="col-md-12">
           <div class="row show_grid">
               
           </div>
       </div>
</div>

    <script type="text/javascript">
        $(document).ready(function(pid){
            load_data();

        })
           function load_data(pid){
            document.getElementById("det").style.visibility = "hidden";
            document.getElementById("grid").style.visibility = "visible";
            console.log("det hidden");
           	$.ajax({
               url: "load_main.php",
               method: "POST",
               dataType:"JSON",
               data:({pid:pid}),
               success:function(data){
                    // console.log(data.output);
                    $(".show_grid").html(data.output);
               }
           	});
           }
           function details(id) {
            $(document).ready(function(){
            document.getElementById("grid").style.visibility = "hidden";
            document.getElementById("det").style.visibility = "visible";
            console.log("grid hidden");
            console.log(id);
            $.ajax({
                url: "load_details.php",
                method: "POST",
                dataType:"JSON",
                data:({id:id}),
                
                success:function(data) {
                    // console.log(data.output);
                    $(".show_details").html(data.output);
                }

            });
            })

            }
        

        


    </script>
</body>
</html>