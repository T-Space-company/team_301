const menuItem = document.querySelector(".header__menu-item--dropdown");
const dropdown = document.querySelector(".header__dropdown");
const vnzh = document.getElementById("vnzh");
const arrow = document.getElementById("vnzh-arrow");

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

document.addEventListener("click", (event) => {
  if (!menuItem.contains(event.target)) {
    dropdown.classList.remove("open");
    vnzh.classList.remove("active");
    arrow.classList.remove("active");
  }
});

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
