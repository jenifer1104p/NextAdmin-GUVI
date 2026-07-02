$(function(){

$("#loginForm").submit(function(e){

e.preventDefault();

$.ajax({

url:"ajax/login.php",

type:"POST",

data:$(this).serialize(),

success:function(response){

let data=JSON.parse(response);

if(data.status=="success"){

localStorage.setItem("username",data.username);

window.location="dashboard.php";

}else{

$("#message").html(

"<div class='alert alert-danger'>"+data.message+"</div>"

);

}

}

});

});

});