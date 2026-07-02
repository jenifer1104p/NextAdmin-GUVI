<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Settings</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<link rel="stylesheet" href="css/theme.css">
<link rel="stylesheet" href="css/profile.css">

</head>

<body>

<div class="container mt-5">

<div class="d-flex justify-content-between align-items-center mb-4">

<div>

<h2>⚙️ Settings</h2>

<p class="text-muted mb-0">
Manage your application settings
</p>

</div>

<a href="dashboard.php" class="btn btn-outline-primary">

<i class="bi bi-arrow-left"></i>

Dashboard

</a>

</div>

<div class="row">

<div class="col-lg-6 mb-4">

<div class="card shadow">

<div class="card-body">

<h4>

🎨 Theme

</h4>

<hr>

<button id="themeToggle" class="btn btn-dark">
    🌙 Dark Mode
</button>

</div>

</div>

</div>

<div class="col-lg-6 mb-4">

<div class="card shadow">

<div class="card-body">

<h4>

💾 Database Status

</h4>

<hr>

<p class="text-success">

✅ MySQL Connected

</p>

<p class="text-success">

🍃 MongoDB Connected

</p>

<p class="text-success">

⚡ Redis Running

</p>

</div>

</div>

</div>

</div>

<div class="card shadow">

<div class="card-body">

<h4>

ℹ️ About NexAdmin

</h4>

<hr>

<table class="table">

<tr>

<th>Project</th>

<td>NexAdmin</td>

</tr>

<tr>

<th>Backend</th>

<td>PHP + AJAX</td>

</tr>

<tr>

<th>Database</th>

<td>MySQL + MongoDB + Redis</td>

</tr>

<tr>

<th>Frontend</th>

<td>Bootstrap 5 + jQuery</td>

</tr>

<tr>

<th>Version</th>

<td>2.0</td>

</tr>

</table>

</div>

</div>

</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script src="js/settings.js"></script>
<script src="js/theme.js"></script>
</body>

</html>