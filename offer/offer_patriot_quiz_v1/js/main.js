document.addEventListener("DOMContentLoaded", () => {
  const modal1 = document.getElementById("modal");
  const modal2 = document.getElementById("modal-2");
  const btnYes1 = document.querySelector(
    ".modal__button--first.modal__button--yes"
  );
  const btnYes2 = document.querySelector(
    ".modal__button--second.modal__button--yes"
  );

  // Show the first modal when the page loads
  modal1.classList.remove("hidden");

  // First "Да" - Show second modal
  btnYes1.addEventListener("click", () => {
    modal1.classList.add("hidden");
    modal2.classList.remove("hidden");
  });

  // Second "Да" - Close all modals
  btnYes2.addEventListener("click", () => {
    modal2.classList.add("hidden");
  });
});
