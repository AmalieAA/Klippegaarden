
document.addEventListener("DOMContentLoaded", function() {
    const scrollThreshold = 150;
    const nav = document.querySelector("#MainNav");

    window.addEventListener("scroll", function() {
        let scrollPosition = window.scrollY;

        if(scrollPosition > scrollThreshold/2) {
            nav.classList.add("nav-fixed");
        }
        else {
            nav.classList.remove("nav-fixed");
        }

        if(scrollPosition > scrollThreshold) {
            nav.classList.add("nav-shown");
        }
        else {
            nav.classList.remove("nav-shown")
        }
    });
});