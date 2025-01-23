document.addEventListener("DOMContentLoaded", function () {
  const formHeading = document.getElementById("main-form__heading");
  const footerBtn = document.querySelector(".footer__toggle-button");

  if (window.matchMedia("(max-width: 1024px)").matches) {
    formHeading.textContent = "Откройте торговый счет";
  }

  function toggleFooter() {
    const footer = document.querySelector(".footer");
    const button = document.querySelector(".footer__toggle-button");

    if (footer.classList.contains("hidden")) {
      footer.classList.remove("hidden");
      button.textContent = "Свернуть";
    } else {
      footer.classList.add("hidden");
      button.textContent = "Развернуть";
    }
  }

  footerBtn.addEventListener("click", toggleFooter);
});
