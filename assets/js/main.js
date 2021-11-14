/* Button Menu */
$(document).ready(function () {
  $("#toggle-button").click(function () {
    $(this).toggleClass("button-open");
    $("#inner-sidebar").toggleClass("open");
  });
});


let isOpen = false;
const menuButton = document.getElementById("toggle-button");

const timeline = gsap.timeline({
  defaults: { ease: "easeInOut", duration: 0.3 },
});

const animateShowMenu = () => {
  timeline
    .to(".inner-sidebar", { x: 0 })
    .to(".navbar-menu ul", { opacity: 1 })
    .to(".navbar-menu li", { opacity: 1, y: 0, stagger: 0.1 })
    .to(".footer-navbar", { opacity: 1, y: 0, duration: 0.5 });
};

const animateHideMenu = () => {
  timeline
    
    .to(".footer-navbar", { opacity: 0, y: 200, duration: 0.5 })
    .to(".navbar-menu li", { opacity: 0, y: 100, stagger: 0.1, reversed: true })
    .to(".navbar-menu ul", { opacity: 0 })
    .to(".inner-sidebar", { x: "-100%" });
};

menuButton.addEventListener("click", () => {
  isOpen = !isOpen;

  isOpen ? animateShowMenu() : animateHideMenu();
});
