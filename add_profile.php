<?php

require "config/mongodb.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){

$profiles->insertOne([

"name"=>$_POST["name"],

"email"=>$_POST["email"],

"phone"=>$_POST["phone"],

"department"=>$_POST["department"]

]);

echo "Profile Added";

}

?>

<!DOCTYPE html>

<html>

<head>

<title>Add Profile</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<form method="POST">

<input class="form-control mb-3" name="name" placeholder="Name">

<input class="form-control mb-3" name="email" placeholder="Email">

<input class="form-control mb-3" name="phone" placeholder="Phone">

<input class="form-control mb-3" name="department" placeholder="Department">

<button class="btn btn-primary">

Save Profile

</button>

</form>

</div>

</body>

</html>