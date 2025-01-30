document.addEventListener("DOMContentLoaded", () => {
  const body = document.querySelector("body");
  const modal = document.getElementById("modal");
  const openModalBtns = document.querySelectorAll(".modal-button");

  openModalBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
      modal.classList.remove("hidden");
      body.style.overflow = "hidden";
    });
  });

  window.addEventListener("click", (event) => {
    if (event.target === modal) {
      modal.classList.add("hidden");
      body.style.overflow = "auto";
    }
  });
});
