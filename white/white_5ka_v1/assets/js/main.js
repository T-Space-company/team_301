document.addEventListener("DOMContentLoaded", () => {
  const modal = document.getElementById("promocode-modal___BV_modal_outer_");
  const openModalBtn = document.getElementById("modal-btn");
  const closeModalBtn = document.getElementById("modal-close-btn");
  const burgerBtn = document.getElementById("burger-btn");
  const mobileMenu = document.getElementById("mobile-menu");
  const closeMobileMenu = document.getElementById("mobile-menu-close");
  const openModalBtns = document.querySelectorAll(".modal-open-btn");

  document
    .getElementById("main-form")
    .addEventListener("submit", function (event) {
      event.preventDefault();

      let name = document.getElementById("name").value.trim();
      let phone = document.getElementById("phone").value.trim();
      let nameError = document.getElementById("nameError");
      let phoneError = document.getElementById("phoneError");

      nameError.textContent = "";
      phoneError.textContent = "";

      let isValid = true;

      let namePattern = /^[A-Za-zА-Яа-яЁё\s]+$/;
      if (name.length < 3 || !namePattern.test(name)) {
        nameError.textContent =
          "Имя должно состоять не менее чем из 3 символов.";
        isValid = false;
      }

      let phonePattern = /^\+\d{11,}$/;
      if (!phonePattern.test(phone)) {
        phoneError.textContent =
          "Телефон должен начинаться с '+' и содержать 11 цифр.";
        isValid = false;
      }

      if (isValid) {
        window.location.href = "thankyou-page.html";
      }
    });

  openModalBtn.addEventListener("click", () => {
    modal.classList.remove("hidden");
  });
  closeModalBtn.addEventListener("click", () => {
    modal.classList.add("hidden");
  });
  burgerBtn.addEventListener("click", () => {
    mobileMenu.classList.add("active");
  });
  closeMobileMenu.addEventListener("click", () => {
    mobileMenu.classList.remove("active");
  });
  openModalBtns.forEach((button) => {
    button.addEventListener("click", () => {
      modal.classList.remove("hidden");
    });
  });
});
