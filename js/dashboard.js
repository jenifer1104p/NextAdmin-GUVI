$(document).ready(function () {

    // ==========================
    // Check Login
    // ==========================

    let username = localStorage.getItem("username");

    if (!username) {

        window.location.href = "login.php";

        return;

    }

    $("#username").text(username);

    // ==========================
    // Load Dashboard Statistics
    // ==========================

    loadDashboardStats();

    function loadDashboardStats() {

        $.ajax({

            url: "ajax/dashboard_stats.php",

            type: "GET",

            dataType: "json",

            success: function (data) {

                $("#totalUsers").text(data.totalUsers);
                $("#totalProfiles").text(data.totalProfiles);

            },

            error: function () {

                $("#totalUsers").text("0");
                $("#totalProfiles").text("0");

            }

        });

    }

    // ==========================
    // Dark / Light Mode
    // ==========================

    if (localStorage.getItem("theme") === "dark") {

        $("body").addClass("dark-mode");

        $("#themeToggle").html("☀️ Light Mode");

    }

    $("#themeToggle").click(function () {

        $("body").toggleClass("dark-mode");

        if ($("body").hasClass("dark-mode")) {

            localStorage.setItem("theme", "dark");

            $(this).html("☀️ Light Mode");

        } else {

            localStorage.setItem("theme", "light");

            $(this).html("🌙 Dark Mode");

        }

    });
    /* ===========================
   DARK MODE
=========================== */

if(localStorage.getItem("theme")=="dark"){

    $("body").addClass("dark-mode");

    $("#themeToggle").html("☀️ Light Mode");

}

$("#themeToggle").click(function(){

    $("body").toggleClass("dark-mode");

    if($("body").hasClass("dark-mode")){

        localStorage.setItem("theme","dark");

        $(this).html("☀️ Light Mode");

    }else{

        localStorage.setItem("theme","light");

        $(this).html("🌙 Dark Mode");

    }

});

    // ==========================
    // Logout Function
    // ==========================

    function logoutUser() {

        $.ajax({

            url: "ajax/logout.php",

            type: "POST",

            data: {

                username: username

            },

            dataType: "json",

            success: function () {

                localStorage.removeItem("username");

                window.location.href = "login.php";

            },

            error: function () {

                alert("Logout Failed");

            }

        });

    }

    $("#logoutBtn").click(function () {

        logoutUser();

    });

    $("#logoutBtn2").click(function () {

        logoutUser();

    });
    const ctx = document.getElementById('dashboardChart');

if(ctx){

new Chart(ctx,{

type:'bar',

data:{

labels:['Users','Profiles'],

datasets:[{

label:'Statistics',

data:[

Number($("#totalUsers").text()) || 0,

Number($("#totalProfiles").text()) || 0

]

}]

}

});

}
setInterval(function(){

let now=new Date();

$("#clock").text(now.toLocaleTimeString());

},1000);
});