$(document).ready(function(){

    $("#registerForm").submit(function(e){

        e.preventDefault();

        $.ajax({

            url:"ajax/register.php",

            type:"POST",

            data:$(this).serialize(),

            success:function(response){

                $("#message").html(response);

                $("#registerForm")[0].reset();

            }

        });

    });

});