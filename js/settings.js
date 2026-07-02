$(document).ready(function () {

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

});