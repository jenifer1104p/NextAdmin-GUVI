<?php

require "../config/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST["id"];
    $username = trim($_POST["username"]);
    $email = trim($_POST["email"]);

    // Check duplicate username
    $check = $conn->prepare("SELECT id FROM users WHERE username = ? AND id != ?");
    $check->execute([$username, $id]);

    if ($check->rowCount() > 0) {
        echo "Username already exists";
        exit();
    }

    // Check duplicate email
    $check = $conn->prepare("SELECT id FROM users WHERE email = ? AND id != ?");
    $check->execute([$email, $id]);

    if ($check->rowCount() > 0) {
        echo "Email already exists";
        exit();
    }

    $sql = $conn->prepare("
        UPDATE users
        SET username = ?, email = ?
        WHERE id = ?
    ");

    if ($sql->execute([$username, $email, $id])) {
        echo "success";
    } else {
        echo "Update failed";
    }
}
?>