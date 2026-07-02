<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>NexAdmin Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<link rel="stylesheet" href="css/theme.css">
<link rel="stylesheet" href="css/dashboard.css">

</head>

<body>

<!-- Navbar -->

<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">

<div class="container">

<a class="navbar-brand fw-bold" href="#">
<i class="bi bi-shield-lock-fill"></i>
NexAdmin
</a>

<button
class="navbar-toggler"
type="button"
data-bs-toggle="collapse"
data-bs-target="#navbarNav">

<span class="navbar-toggler-icon"></span>

</button>

<div class="collapse navbar-collapse" id="navbarNav">

<ul class="navbar-nav me-auto">

<li class="nav-item">
<a class="nav-link active" href="dashboard.php">
<i class="bi bi-house-fill"></i>
Dashboard
</a>
</li>

<li class="nav-item">
<a class="nav-link" href="users/users.php">
<i class="bi bi-people-fill"></i>
Users
</a>
</li>

<li class="nav-item">
<a class="nav-link" href="profile.php">
<i class="bi bi-person-fill"></i>
Profile
</a>
</li>

<li class="nav-item">
<a class="nav-link" href="settings.php">
<i class="bi bi-gear-fill"></i>
Settings
</a>
</li>

</ul>

<div class="d-flex align-items-center">

<span id="clock" class="text-white fw-bold me-3"></span>

<button
id="themeToggle"
class="btn btn-outline-light me-2">

🌙 Dark

</button>

<button
id="logoutBtn"
class="btn btn-danger">

Logout

</button>

</div>

</div>

</div>

</nav>

<!-- Dashboard -->

<div class="container py-5">

<div class="mb-4">

<h2>

Welcome,

<span id="username" class="text-primary"></span>

👋

</h2>

<p class="text-muted">

Manage your NexAdmin Dashboard

</p>

</div>

<!-- Statistics -->

<div class="row g-4">

<div class="col-lg-4">

<div class="card dashboard-card">

<div class="card-body text-center">

<i class="bi bi-people-fill display-3 text-primary"></i>

<h4 class="mt-3">

Total Users

</h4>

<h1 id="totalUsers">

0

</h1>

</div>

</div>

</div>

<div class="col-lg-4">

<div class="card dashboard-card">

<div class="card-body text-center">

<i class="bi bi-person-vcard-fill display-3 text-success"></i>

<h4 class="mt-3">

Profiles

</h4>

<h1 id="totalProfiles">

0

</h1>

</div>

</div>

</div>

<div class="col-lg-4">

<div class="card dashboard-card">

<div class="card-body text-center">

<i class="bi bi-check-circle-fill display-3 text-warning"></i>

<h4 class="mt-3">

System Status

</h4>

<h2 class="text-success">

Active

</h2>

</div>

</div>

</div>

</div>

<hr class="my-5">

<!-- Quick Actions -->
 <div class="row g-4">

    <div class="col-md-4">

        <a href="users/users.php" class="text-decoration-none">

            <div class="card action-card">

                <div class="card-body text-center">

                    <i class="bi bi-person-plus-fill display-4 text-primary"></i>

                    <h4 class="mt-3">
                        Manage Users
                    </h4>

                    <p class="text-muted">
                        Add, Edit, Delete and Search Users
                    </p>

                </div>

            </div>

        </a>

    </div>

    <div class="col-md-4">

        <a href="profile.php" class="text-decoration-none">

            <div class="card action-card">

                <div class="card-body text-center">

                    <i class="bi bi-person-circle display-4 text-success"></i>

                    <h4 class="mt-3">
                        My Profile
                    </h4>

                    <p class="text-muted">
                        Manage your MongoDB profile
                    </p>

                </div>

            </div>

        </a>

    </div>

    <div class="col-md-4">

        <a href="settings.php" class="text-decoration-none">

            <div class="card action-card">

                <div class="card-body text-center">

                    <i class="bi bi-gear-fill display-4 text-warning"></i>

                    <h4 class="mt-3">
                        Settings
                    </h4>

                    <p class="text-muted">
                        Theme, Redis and Database Settings
                    </p>

                </div>

            </div>

        </a>

    </div>

</div>

<hr class="my-5">

<!-- Dashboard Analytics -->

<div class="card dashboard-card">

    <div class="card-header bg-primary text-white">

        <h4 class="mb-0">

            📊 Dashboard Analytics

        </h4>

    </div>

    <div class="card-body">

        <canvas id="dashboardChart" height="100"></canvas>

    </div>

</div>

<footer class="text-center mt-5 mb-3 text-muted">

<hr>

© 2026 NexAdmin Dashboard

</footer>

</div>

<!-- Loading Modal -->

<div class="modal fade" id="loadingModal" tabindex="-1">

<div class="modal-dialog modal-dialog-centered">

<div class="modal-content">

<div class="modal-body text-center">

<div class="spinner-border text-primary"></div>

<p class="mt-3">

Loading...

</p>

</div>

</div>

</div>

</div>

<!-- Scripts -->

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script src="js/theme.js"></script>

<script src="js/dashboard.js"></script>

</body>

</html>