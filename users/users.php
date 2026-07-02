<?php include "../includes/header.php"; ?>
<?php include "../includes/sidebar.php"; ?>

<div class="main-content">

    <div class="topbar d-flex justify-content-between align-items-center">

    <div>

        <h3>User Management</h3>

        <small class="text-muted">
            Manage all registered users
        </small>

    </div>

    <a href="../dashboard.php" class="btn btn-outline-primary">
        <i class="bi bi-arrow-left"></i>
        Dashboard
    </a>

</div>

    <div id="message"></div>

    <!-- Add User -->

    <div class="card shadow border-0 mb-4">

        <div class="card-header bg-primary text-white">

            <h5 class="mb-0">

                Add New User

            </h5>

        </div>

        <div class="card-body">

            <form id="addUserForm">

                <div class="row">

                    <div class="col-md-4 mb-3">

                        <input
                            type="text"
                            class="form-control"
                            name="username"
                            placeholder="Username"
                            required>

                    </div>

                    <div class="col-md-4 mb-3">

                        <input
                            type="email"
                            class="form-control"
                            name="email"
                            placeholder="Email"
                            required>

                    </div>

                    <div class="col-md-4 mb-3">

                        <input
                            type="password"
                            class="form-control"
                            name="password"
                            placeholder="Password"
                            required>

                    </div>

                </div>

                <button class="btn btn-primary">

                    <i class="bi bi-person-plus-fill"></i>

                    Add User

                </button>

            </form>

        </div>

    </div>

    <!-- Search -->

    <div class="card shadow border-0 mb-4">

        <div class="card-body">

            <input
                type="text"
                id="searchUser"
                class="form-control"
                placeholder="🔍 Search User">

        </div>

    </div>

    <!-- User Table -->

    <div class="card shadow border-0">

        <div class="card-header bg-dark text-white">

            Registered Users

        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-hover align-middle">

                    <thead class="table-light">

                        <tr>

                            <th>ID</th>

                            <th>Username</th>

                            <th>Email</th>

                            <th width="180">

                                Action

                            </th>

                        </tr>

                    </thead>

                    <tbody id="userTable">

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>
<!-- Edit User Modal -->

<div class="modal fade" id="editUserModal" tabindex="-1">

<div class="modal-dialog">

<div class="modal-content">

<div class="modal-header bg-primary text-white">

<h5>Edit User</h5>

<button
type="button"
class="btn-close"
data-bs-dismiss="modal">
</button>

</div>

<div class="modal-body">

<input
type="hidden"
id="edit_id">

<div class="mb-3">

<label>Username</label>

<input
type="text"
id="edit_username"
class="form-control">

</div>

<div class="mb-3">

<label>Email</label>

<input
type="email"
id="edit_email"
class="form-control">

</div>

</div>

<div class="modal-footer">

<button
class="btn btn-secondary"
data-bs-dismiss="modal">

Cancel

</button>

<button
class="btn btn-primary"
id="saveEdit">

Update User

</button>

</div>

</div>

</div>

</div>
<?php include "../includes/footer.php"; ?>

<script src="../js/users.js"></script>
<script src="../js/theme.js"></script>