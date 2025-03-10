document.addEventListener("DOMContentLoaded", () => {
  const main = document.querySelector("main");
  const quiz1 = document.getElementById("modal");
  const quiz2 = document.getElementById("modal-2");
  const quiz3 = document.getElementById("modal-3");
  const quiz4 = document.getElementById("modal-4");
  const quiz1Button = document.getElementById("quiz1-btn");
  const quiz2Button = document.getElementById("quiz2-btn");
  const quiz3Button = document.getElementById("quiz3-btn");
  const quiz4Button = document.getElementById("quiz4-btn");
  const mainScreen = document.getElementById("main-section");

  function saveAnswer(question, answer) {
    let answers = JSON.parse(localStorage.getItem("answers")) || [];
    answers.push(`${question}: ${answer}`);
    localStorage.setItem("answers", JSON.stringify(answers));
  }

  quiz1Button.addEventListener("click", () => {
    saveAnswer("Вам есть 21 год?", "Да");
    quiz1.classList.add("hidden");
    quiz2.classList.remove("hidden");
  });

  quiz2Button.addEventListener("click", () => {
    saveAnswer("Являетесь ли вы гражданином РФ?", "Да");
    quiz2.classList.add("hidden");
    quiz3.classList.remove("hidden");
  });

  quiz3Button.addEventListener("click", () => {
    saveAnswer("Готовы вложить 10 000 ₽?", "Да");
    quiz3.classList.add("hidden");
    quiz4.classList.remove("hidden");
  });

  quiz4Button.addEventListener("click", () => {
    quiz4.classList.add("hidden");
    mainScreen.classList.remove("hidden");
    main.classList.remove("first");
  });
});
