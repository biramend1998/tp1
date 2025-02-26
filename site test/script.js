document.addEventListener("DOMContentLoaded", function () {
    // Menu déroulant
    const menuToggle = document.getElementById("menu-toggle");
    const menu = document.getElementById("menu");

    menuToggle.addEventListener("click", function () {
        menu.classList.toggle("open");
    });

    // Effet dynamique sur le bouton de réservation
    const reservationBtn = document.querySelector(".reservation-btn");
    reservationBtn.addEventListener("mouseover", function () {
        this.style.transform = "scale(1.1)";
    });
    reservationBtn.addEventListener("mouseout", function () {
        this.style.transform = "scale(1)";
    });
});
