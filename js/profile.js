$(document).ready(function () {

    // ==========================
    // Check Login
    // ==========================

    let username = localStorage.getItem("username");

    if (!username) {

        window.location.href = "login.php";
        return;

    }

    // Set Username
    $("#username").val(username);
    $("#profileUsername").text(username);

    // ==========================
    // Load Profile from MongoDB
    // ==========================

    loadProfile();

    function loadProfile() {

        $.ajax({

            url: "ajax/get_profile.php",

            type: "GET",

            data: {
                username: username
            },

            dataType: "json",

            success: function (data) {

                if (data.status === "success") {

                    $("input[name='full_name']").val(data.full_name);
                    $("input[name='phone']").val(data.phone);
                    $("input[name='department']").val(data.department);
                    $("input[name='address']").val(data.address);

                }

            },

            error: function () {

                console.log("Unable to load profile.");

            }

        });

    }

    // ==========================
    // Save Profile
    // ==========================

    $("#profileForm").submit(function (e) {

        e.preventDefault();

        $.ajax({

            url: "ajax/save_profile.php",

            type: "POST",

            data: $(this).serialize(),

            success: function () {

                $("#message").html(`
                    <div class="alert alert-success alert-dismissible fade show">
                        ✅ Profile Saved Successfully
                        <button class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                `);

                // Reload profile after saving
                loadProfile();

            },

            error: function () {

                $("#message").html(`
                    <div class="alert alert-danger alert-dismissible fade show">
                        ❌ Unable to Save Profile
                        <button class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                `);

            }

        });

    });

});