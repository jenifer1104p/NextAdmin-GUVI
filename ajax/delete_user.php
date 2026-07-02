<?php

require "../config/database.php";

if(isset($_POST["id"])){

    $id = $_POST["id"];

    $sql = $conn->prepare("DELETE FROM users WHERE id=?");

    $sql->execute([$id]);

    echo "success";

}

?>