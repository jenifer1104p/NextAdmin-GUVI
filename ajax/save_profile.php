<?php

require "../config/mongodb.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = trim($_POST["username"]);
    $full_name = trim($_POST["full_name"]);
    $phone = trim($_POST["phone"]);
    $department = trim($_POST["department"]);
    $address = trim($_POST["address"]);

    $profilesCollection->updateOne(

        ["username" => $username],

        [
            '$set' => [
                "username" => $username,
                "full_name" => $full_name,
                "phone" => $phone,
                "department" => $department,
                "address" => $address
            ]
        ],

        ["upsert" => true]

    );

    echo "<div class='alert alert-success'>
            Profile Saved Successfully
          </div>";

}
?>