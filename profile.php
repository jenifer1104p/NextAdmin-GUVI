<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>My Profile</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<link rel="stylesheet" href="css/profile.css">

</head>

<body>

<div class="container mt-5">

    <!-- Top Bar -->

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h2>👤 My Profile</h2>

            <p class="text-muted mb-0">
                Manage your profile information
            </p>

        </div>

        <a href="dashboard.php" class="btn btn-outline-primary">

            <i class="bi bi-arrow-left"></i>

            Dashboard

        </a>

    </div>

    <div class="card shadow-lg border-0">

        <div class="card-body p-5">

            <!-- Avatar -->

            <div class="text-center mb-4">

                <img
                src="https://ui-avatars.com/api/?name=User&background=0D6EFD&color=fff&size=150"
                class="rounded-circle shadow"
                width="130"
                height="130">

                <h4 class="mt-3" id="profileUsername"></h4>

                <small class="text-muted">

                    NexAdmin User

                </small>

            </div>

            <div id="message"></div>

            <form id="profileForm">

                <input
                type="hidden"
                id="username"
                name="username">

                <div class="row">

                    <div class="col-md-6 mb-3">

                        <label class="form-label">

                            Full Name

                        </label>

                        <input
                        type="text"
                        class="form-control"
                        name="full_name"
                        placeholder="Enter Full Name"
                        required>

                    </div>

                    <div class="col-md-6 mb-3">

                        <label class="form-label">

                            Phone Number

                        </label>

                        <input
                        type="text"
                        class="form-control"
                        name="phone"
                        placeholder="Enter Phone Number">

                    </div>

                    <div class="col-md-6 mb-3">

                        <label class="form-label">

                            Department

                        </label>

                        <input
                        type="text"
                        class="form-control"
                        name="department"
                        placeholder="Enter Department">

                    </div>

                    <div class="col-md-6 mb-3">

                        <label class="form-label">

                            Address

                        </label>

                        <input
                        type="text"
                        class="form-control"
                        name="address"
                        placeholder="Enter Address">

                    </div>

                </div>

                <div class="d-grid gap-2 mt-4">

                    <button
                    type="submit"
                    class="btn btn-success btn-lg">

                        💾 Save Profile

                    </button>

                    <a
                    href="dashboard.php"
                    class="btn btn-outline-primary btn-lg">

                        🏠 Back to Dashboard

                    </a>

                </div>

            </form>

        </div>

    </div>

</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script src="js/profile.js"></script>
<script src="js/theme.js"></script>
</body>

</html>