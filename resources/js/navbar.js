//method untuk humburger menu
document.addEventListener("DOMContentLoaded", function () {
    const toggle = document.getElementById("menu-toggle");
    const menu = document.getElementById("menu");

    if (toggle && menu) {
        toggle.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
    }
});

//method untuk shadow navbar
window.addEventListener("scroll", function () {
    const navbar = document.getElementById("navbar");
    if (window.scrollY > 10) {
        navbar.classList.add("shadow-md");
    } else {
        navbar.classList.remove("shadow-md");
    }
});
