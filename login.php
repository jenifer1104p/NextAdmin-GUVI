<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>NexAdmin Login</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/theme.css">
<link rel="stylesheet" href="css/login.css">

</head>

<body>

<div class="container mt-5">

<div class="card login-card shadow">

<div class="card-header bg-primary text-white">
<h3>Login</h3>
</div>

<div class="card-body">

<div id="message"></div>

<form id="loginForm">

<div class="mb-3">
<label>Username</label>
<input type="text" class="form-control" name="username" required>
</div>

<div class="mb-3">
<label>Password</label>
<input type="password" class="form-control" name="password" required>
</div>

<button class="btn btn-primary w-100">
Login
</button>

</form>

</div>

</div>

</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script src="js/login.js"></script>
<script src="js/theme.js"></script>

</body>
</html>
