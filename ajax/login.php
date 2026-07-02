<?php

require "../config/database.php";
require "../config/redis.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = trim($_POST["username"]);
    $password = $_POST["password"];

    $sql = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $sql->execute([$username]);

    $user = $sql->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user["password"])) {

        // Store session in Redis
        $redis->set(
            "session_" . $user["username"],
            json_encode([
                "user_id"    => $user["id"],
                "username"   => $user["username"],
                "login_time" => date("Y-m-d H:i:s")
            ])
        );

        echo json_encode([
            "status"   => "success",
            "username" => $user["username"]
        ]);

    } else {

        echo json_encode([
            "status"  => "error",
            "message" => "Invalid Username or Password"
        ]);

    }

}
?>