<?php
if(!isset($_SESSION['admin_gmail'])){
    header("Location: ../../");
}
?>
<script>
    // for inserting category
$(document).ready(function(){

    function errormessage(msg){
            $("#error-message").css({'padding':'15px','margin-bottom':'20px','border':'1px solid transparent','border-radius':'4px','color':'#a94442','background-color':'#f2dede','border-color':'#ebccd1','border-top-color':'#c9e2b3'}).html(msg).slideDown();
            $("#success-message").slideUp();
        }
        function successmessage(msg){
            $("#success-message").css({'padding':'15px','margin-bottom':'20px','border':'1px solid transparent','border-radius':'4px','color':'#3c763d','background-color':'#dff0d8','border-color':'#d6e9c6','border-top-color':'#c9e2b3'}).html(msg).slideDown();
            $("#error-message").slideUp();
        }
  $("#save-button").on("click",function(e){
     e.preventDefault();

        var cname=$("#cname").val();
        // checking whether the fields are filled or not
        if(cname == ""){
            var msg="All fields are required";
            errormessage(msg);
            
        }else{
            // Using ajax the data is posted to any other page
      
            $.ajax({
                url:"insert_ajax.php",
                type:"POST",
                data:{cat_name:cname},
                success : function(data){
                    if(data == 1){
                        $("#addform").trigger("reset");
                    var msg="Data is inserted successfully";
                    successmessage(msg);
                   
                    }else{
                         // For showing error messages 
                    var msg="Can't insert record";
                    errormessage(msg);
                    
                    }
                }
            });
        }

     });


    // Post insert code
   
    $("#PostForm").on("submit",function(e){
     e.preventDefault();

           var formData = new FormData(this);
        // checking whether the fields are filled or not
      
            $.ajax({
                url:"insert_ajax.php",
                type:'POST',
                data:formData,
                contentType: false,
                processData:false,
                success : function(data){
                    if(data == 1){
                    console.log(data);
                    $("#PostForm").trigger("reset");
                    var msg="Post Is Inserted Successfully";
                    successmessage(msg);
                    }else{
                        console.log(data);
                         // For showing error messages 
                    var msg="Post Can't Be Inserted";
                    errormessage(msg);
                    
                    }
                }
            });

     });


 });


</script>
