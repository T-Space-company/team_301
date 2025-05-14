document.addEventListener("DOMContentLoaded", () => {
  const body = document.querySelector("body");
  const modal1 = document.getElementById("modal-1");
  const modal2 = document.getElementById("modal-2");
  const modal3 = document.getElementById("modal-3");
  const modal4 = document.getElementById("modal-4");
  const btnYes1 = document.querySelectorAll(".modal__button--first.yes");
  const btnYes2 = document.querySelector(".modal__button--second.yes");
  const btn3 = document.querySelector(".modal__button--third");
  const btn4 = document.querySelectorAll(".modal__button--fourth");

  localStorage.removeItem("answers");

  function saveAnswer(question, answer) {
    let answers = JSON.parse(localStorage.getItem("answers")) || [];
    answers.push(`${question}: ${answer}`);
    localStorage.setItem("answers", JSON.stringify(answers));
  }

  body.style.overflow = "hidden";
  modal1.classList.remove("hidden");

  btnYes1.forEach((btn) => {
    btn.addEventListener("click", () => {
      saveAnswer("Сколько вам лет?", btn.textContent.trim());
      modal1.classList.add("hidden");
      modal2.classList.remove("hidden");
    });
  });

  btnYes2.addEventListener("click", () => {
    saveAnswer(
      "Вы являетесь гражданином или резидентом Российской Федерации?",
      "Да"
    );
    modal2.classList.add("hidden");
    modal3.classList.remove("hidden");
  });

  btn3.addEventListener("click", () => {
    modal3.classList.add("hidden");
    modal4.classList.remove("hidden");
  });

  btn4.forEach((btn) => {
    btn.addEventListener("click", () => {
      saveAnswer("Сколько Вы хотите зарабатывать?", btn.textContent.trim());
      modal4.classList.add("hidden");
      body.style.overflow = "auto";
    });
  });
});
