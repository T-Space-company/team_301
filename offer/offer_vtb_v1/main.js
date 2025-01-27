document.addEventListener("DOMContentLoaded", () => {
  const modalButton = document.querySelector(".main__button");

  const openModal = () => {
    modal.classList.remove("hidden");
  };

  modalButton.addEventListener("click", openModal);

  window.addEventListener("click", (event) => {
    if (event.target === modal) {
      modal.classList.add("hidden");
    }
  });
});
