document.addEventListener("DOMContentLoaded", function () {
  const menu = document.getElementById("mobileMenu");
  const openBtn = document.querySelector(".mob-menu.mobile");
  const closeBtn = document.getElementById("closeMenu");

  openBtn.addEventListener("click", () => {
    menu.classList.add("active");
  });

  closeBtn.addEventListener("click", () => {
    menu.classList.remove("active");
  });

  document.querySelectorAll(".menu-links a").forEach((link) => {
    link.addEventListener("click", () => {
      menu.classList.remove("active");
    });
  });
});
