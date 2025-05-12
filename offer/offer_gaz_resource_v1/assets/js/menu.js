document.addEventListener("DOMContentLoaded", () => {
  const menuBtn = document.querySelector(".header__menu.mobile");
  const mobileMenu = document.getElementById("mobileMenu");
  const overlay = document.getElementById("mobileMenuOverlay");
  const closeBtn = document.getElementById("mobileMenuClose");
  const navLinks = document.querySelectorAll(".mobile-menu__nav a");

  function openMenu() {
    mobileMenu.classList.add("mobile-menu--active");
    overlay.classList.add("mobile-menu__overlay--active");
    document.body.style.overflow = "hidden";
  }

  function closeMenu() {
    mobileMenu.classList.remove("mobile-menu--active");
    overlay.classList.remove("mobile-menu__overlay--active");
    document.body.style.overflow = "";
  }

  menuBtn.addEventListener("click", openMenu);
  closeBtn.addEventListener("click", closeMenu);
  overlay.addEventListener("click", closeMenu);

  navLinks.forEach((link) => {
    link.addEventListener("click", (e) => {
      const href = link.getAttribute("href");
      if (href.startsWith("#")) {
        e.preventDefault();
        const target = document.querySelector(href);
        if (target) {
          const offset = 80;
          const top =
            target.getBoundingClientRect().top + window.pageYOffset - offset;
          window.scrollTo({
            top,
            behavior: "smooth",
          });
        }
        closeMenu();
      }
    });
  });
});
