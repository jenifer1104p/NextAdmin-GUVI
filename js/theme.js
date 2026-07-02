$(document).ready(function () {

    // Apply saved theme on every page
    if (localStorage.getItem("theme") === "dark") {
        $("body").addClass("dark-mode");
    }

    // Theme toggle
    $(document).on("click", "#themeToggle", function () {

        $("body").toggleClass("dark-mode");

        if ($("body").hasClass("dark-mode")) {

            localStorage.setItem("theme", "dark");
            $("#themeToggle").html("☀️ Light Mode");

        } else {

            localStorage.setItem("theme", "light");
            $("#themeToggle").html("🌙 Dark Mode");

        }

    });

});