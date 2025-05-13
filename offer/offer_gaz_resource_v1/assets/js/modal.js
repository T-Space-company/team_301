document.addEventListener("DOMContentLoaded", () => {
  const body = document.querySelector("body");
  const modal1 = document.getElementById("modal-1");
  const modal2 = document.getElementById("modal-2");
  const modal3 = document.getElementById("modal-3");
  const btnYes1 = document.querySelector(".modal__button--first.yes");
  const btnYes2 = document.querySelector(".modal__button--second.yes");
  const btnYes3 = document.querySelector(".modal__button--third.yes");

  localStorage.removeItem("answers");

  function saveAnswer(question, answer) {
    let answers = JSON.parse(localStorage.getItem("answers")) || [];
    answers.push(`${question}: ${answer}`);
    localStorage.setItem("answers", JSON.stringify(answers));
  }

  body.style.overflow = "hidden";
  modal1.classList.remove("hidden");

  btnYes1.addEventListener("click", () => {
    saveAnswer("Вам более 25 лет?", "Да");
    modal1.classList.add("hidden");
    modal2.classList.remove("hidden");
  });

  btnYes2.addEventListener("click", () => {
    saveAnswer(
      "Вы являетесь гражданином или резидентом Российской Федерации?",
      "Да"
    );
    modal2.classList.add("hidden");
    modal3.classList.remove("hidden");
  });

  btnYes3.addEventListener("click", () => {
    saveAnswer("Есть ли у вас проблемы с банками?", "Нет");
    modal3.classList.add("hidden");
    body.style.overflow = "auto";
  });
});
