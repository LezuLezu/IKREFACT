console.log("loaded");

const navbar = document.querySelector(".navbar");
console.log(navbar);
const menuToggle = document.querySelector(".menu-toggle");
console.log(menuToggle);
menuToggle.addEventListener("click", () => {
  navbar.classList.toggle("open");
});