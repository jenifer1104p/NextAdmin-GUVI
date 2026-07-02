<?php

require "../config/database.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $username=trim($_POST["username"]);
    $email=trim($_POST["email"]);
    $password=password_hash($_POST["password"],PASSWORD_DEFAULT);

    $check=$conn->prepare("SELECT id FROM users WHERE email=?");

    $check->execute([$email]);

    if($check->rowCount()>0){

        echo "<div class='alert alert-danger'>
                Email already exists
              </div>";

        exit();
    }

    $sql=$conn->prepare("
        INSERT INTO users
        (username,email,password)
        VALUES(?,?,?)
    ");

    if($sql->execute([$username,$email,$password])){

        echo "<div class='alert alert-success'>
                Registration Successful
              </div>";

    }else{

        echo "<div class='alert alert-danger'>
                Registration Failed
              </div>";

    }

}
?>