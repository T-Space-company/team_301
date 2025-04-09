document.addEventListener("DOMContentLoaded", () => {
  const menuBtn = document.getElementById("menu-btn");
  const menu = document.getElementById("mob-menu");
  const menuCloseBtn = document.querySelector(".menu__close");
  const modalForm = document.getElementById("modal-form");
  const contactBtn = document.querySelector(".menu__button.second");

  menuBtn.addEventListener("click", () => {
    menu.classList.toggle("hidden");
  });
  menuCloseBtn.addEventListener("click", () => {
    menu.classList.add("hidden");
  });
  contactBtn.addEventListener("click", () => {
    modalForm.classList.remove("hidden");
  });
});
