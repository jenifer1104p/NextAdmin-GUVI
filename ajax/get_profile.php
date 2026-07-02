<?php

require "../config/mongodb.php";

header("Content-Type: application/json");

if(isset($_GET["username"])){

    $username=$_GET["username"];

    $profile=$profilesCollection->findOne([
        "username"=>$username
    ]);

    if($profile){

        echo json_encode([
            "status"=>"success",
            "full_name"=>$profile["full_name"] ?? "",
            "phone"=>$profile["phone"] ?? "",
            "department"=>$profile["department"] ?? "",
            "address"=>$profile["address"] ?? ""
        ]);

    }else{

        echo json_encode([
            "status"=>"empty"
        ]);

    }

}