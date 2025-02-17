document.addEventListener("DOMContentLoaded", () => {
  const modal = document.getElementById("modal");
  const body = document.querySelector("body");
  const mainButton = document.querySelector(".main__button");
  const modalQuestion = document.querySelector(".modal-question");
  const questionText = document.querySelector(".question");
  const answerButtons = document.querySelector(".answer-buttons");
  const form = document.getElementById("main-form");
  const btnYes = document.getElementById("btn-yes");
  const btnNo = document.getElementById("btn-no");

  mainButton.addEventListener("click", () => {
    modal.classList.remove("hidden");
    body.style.overflow = "hidden";
  });

  function redirectToErr() {
    window.location.href = "err.html";
  }

  function showForm() {
    modalQuestion.style.display = "none";
    answerButtons.style.display = "none";
    form.classList.remove("hidden");
  }

  btnNo.addEventListener("click", redirectToErr);

  btnYes.addEventListener("click", () => {
    questionText.textContent = "Вам более 18 лет?";

    btnYes.replaceWith(btnYes.cloneNode(true));
    btnNo.replaceWith(btnNo.cloneNode(true));

    const newBtnYes = document.getElementById("btn-yes");
    const newBtnNo = document.getElementById("btn-no");

    newBtnYes.addEventListener("click", showForm);
    newBtnNo.addEventListener("click", redirectToErr);
  });
});
