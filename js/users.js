$(document).ready(function () {

    loadUsers();

    // ==========================
    // Toast Notification
    // ==========================
    function showToast(message, type = "success") {

        let toast = $("#liveToast");

        toast.removeClass("text-bg-success text-bg-danger text-bg-warning");

        if (type === "success") {
            toast.addClass("text-bg-success");
        } else if (type === "danger") {
            toast.addClass("text-bg-danger");
        } else {
            toast.addClass("text-bg-warning");
        }

        $("#toastMessage").text(message);

        new bootstrap.Toast(document.getElementById("liveToast")).show();
    }

    // ==========================
    // Load Users
    // ==========================
    function loadUsers() {

        $.ajax({

            url: "../ajax/get_users.php",

            type: "GET",

            success: function (data) {

                $("#userTable").html(data);

            }

        });

    }

    // ==========================
    // Add User
    // ==========================
    $("#addUserForm").submit(function (e) {

        e.preventDefault();

        $.ajax({

            url: "../ajax/add_user.php",

            type: "POST",

            data: $(this).serialize(),

            success: function (response) {

                $("#addUserForm")[0].reset();

                loadUsers();

                showToast("User added successfully");

            },

            error: function () {

                showToast("Failed to add user", "danger");

            }

        });

    });

    // ==========================
    // Open Edit Modal
    // ==========================
    // Open Edit Modal

$(document).on("click",".editBtn",function(){

$("#edit_id").val($(this).data("id"));

$("#edit_username").val($(this).data("username"));

$("#edit_email").val($(this).data("email"));

new bootstrap.Modal(
document.getElementById("editUserModal")
).show();

});

// Update User

$("#saveEdit").click(function(){

$.ajax({

url:"../ajax/update_user.php",

type:"POST",

data:{

id:$("#edit_id").val(),

username:$("#edit_username").val(),

email:$("#edit_email").val()

},

success:function(){

bootstrap.Modal.getInstance(
document.getElementById("editUserModal")
).hide();

showToast("User Updated Successfully");

loadUsers();

}

});

});

    // ==========================
    // Update User
    // ==========================
    $("#editUserForm").submit(function (e) {

        e.preventDefault();

        $.ajax({

            url: "../ajax/update_user.php",

            type: "POST",

            data: $(this).serialize(),

            success: function (response) {

                if (response.trim() === "success") {

                    bootstrap.Modal.getInstance(
                        document.getElementById("editUserModal")
                    ).hide();

                    loadUsers();

                    showToast("User updated successfully");

                } else {

                    showToast(response, "danger");

                }

            },

            error: function () {

                showToast("Update failed", "danger");

            }

        });

    });

    // ==========================
    // Open Delete Modal
    // ==========================
    $(document).on("click", ".deleteBtn", function () {

        $("#delete_id").val($(this).data("id"));

        const modal = new bootstrap.Modal(
            document.getElementById("deleteUserModal")
        );

        modal.show();

    });
    // Live Search

$("#searchUser").on("keyup", function () {

    let value = $(this).val().toLowerCase();

    $("#userTable tr").filter(function () {

        $(this).toggle(

            $(this).text().toLowerCase().indexOf(value) > -1

        );

    });

});

    // ==========================
    // Delete User
    // ==========================
    $("#confirmDelete").click(function () {

        let id = $("#delete_id").val();

        $.ajax({

            url: "../ajax/delete_user.php",

            type: "POST",

            data: {
                id: id
            },

            success: function () {

                bootstrap.Modal.getInstance(
                    document.getElementById("deleteUserModal")
                ).hide();

                loadUsers();

                showToast("User deleted successfully", "warning");

            },

            error: function () {

                showToast("Delete failed", "danger");

            }

        });

    });

});