<?php

require "../config/database.php";
require "../config/mongodb.php";

header("Content-Type: application/json");

try {

    // Total Users (MySQL)
    $stmt = $conn->query("SELECT COUNT(*) AS total FROM users");
    $totalUsers = (int) $stmt->fetch(PDO::FETCH_ASSOC)['total'];

    // Total Profiles (MongoDB)
    $totalProfiles = $profilesCollection->countDocuments();

    echo json_encode([
        "totalUsers" => $totalUsers,
        "totalProfiles" => $totalProfiles
    ]);

} catch (Exception $e) {

    echo json_encode([
        "totalUsers" => 0,
        "totalProfiles" => 0,
        "error" => $e->getMessage()
    ]);

}

?>