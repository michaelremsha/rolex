    function details(id) {
     console.log("retard");
     $.ajax({
         url: "details.php",
         method: "POST",
         data:{id},
         dataType:"JSON",
         success:function(data) {
             $('.show_grid').hide()
             $('.show_details').show()
             $(".show_grid").html(data.output);
         }

     });
     }