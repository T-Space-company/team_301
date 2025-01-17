const menuItem = document.querySelector(".header__menu-item--dropdown");
const dropdown = document.querySelector(".header__dropdown");
const vnzh = document.getElementById("vnzh");
const arrow = document.getElementById("vnzh-arrow");
const modalBtns = document.querySelectorAll(".button-form");
const modal = document.getElementById("modal");
const overlay = document.getElementById("overlay");
const burgerBtn = document.querySelector(".header__burger-btn");
const mobileMenu = document.querySelector(".mobile-menu");
const body = document.body;

function toggleMenu() {
  mobileMenu.classList.toggle("active");
  body.classList.toggle("no-scroll");
}

burgerBtn.addEventListener("click", toggleMenu);

// vnzh.addEventListener("click", (event) => {
//     event.preventDefault();

//   const isOpen = dropdown.classList.contains("open");

//   if (isOpen) {
//     dropdown.classList.remove("open");
//     vnzh.classList.remove("active");
//     arrow.classList.remove("active");
//   } else {
//     dropdown.classList.add("open");
//     vnzh.classList.add("active");
//     arrow.classList.add("active");
//   }
// });

// document.addEventListener("click", (event) => {
//   if (!menuItem.contains(event.target)) {
//     dropdown.classList.remove("open");
//     vnzh.classList.remove("active");
//     arrow.classList.remove("active");
//   }
// });

menuItem.addEventListener("mouseenter", () => {
  dropdown.classList.add("open");
  vnzh.classList.add("active");
  arrow.classList.add("active");
});

menuItem.addEventListener("mouseleave", () => {
  setTimeout(() => {
    if (!dropdown.matches(":hover")) {
      dropdown.classList.remove("open");
      vnzh.classList.remove("active");
      arrow.classList.remove("active");
    }
  }, 200);
});

dropdown.addEventListener("mouseleave", () => {
  dropdown.classList.remove("open");
  vnzh.classList.remove("active");
  arrow.classList.remove("active");
});

modalBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    modal.style.display = "block";
    overlay.style.display = "block";
  });
});
overlay.addEventListener("click", () => {
  modal.style.display = "none";
  overlay.style.display = "none";
});
