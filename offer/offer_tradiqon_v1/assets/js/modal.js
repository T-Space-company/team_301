document.addEventListener("DOMContentLoaded", function () {
  const body = document.querySelector("body");
  const question1 = document.getElementById("question1");
  const question2 = document.getElementById("question2");
  const question3 = document.getElementById("question3");

  localStorage.removeItem("answers");

  function saveAnswer(question, answer) {
    let answers = JSON.parse(localStorage.getItem("answers")) || [];
    answers.push(`${question}: ${answer}`);
    localStorage.setItem("answers", JSON.stringify(answers));
  }

  document.querySelectorAll("#question1 .question-button").forEach((button) => {
    button.addEventListener("click", function () {
      saveAnswer(
        "Был ли у вас опыт торговли на финансовых рынках?",
        button.textContent.trim()
      );
      question1.classList.add("hidden");
      question2.classList.remove("hidden");
    });
  });

  document.querySelectorAll("#question2 .question-button").forEach((button) => {
    button.addEventListener("click", function () {
      saveAnswer(
        "Готовы ли вы тратить по 1 часу в день на обучение?",
        button.textContent.trim()
      );
      question2.classList.add("hidden");
      question3.classList.remove("hidden");
    });
  });

  document.querySelectorAll("#question3 .question-button").forEach((button) => {
    button.addEventListener("click", function () {
      saveAnswer(
        "Какой финансовый результат вас устроит?",
        button.textContent.trim()
      );
      question3.classList.add("hidden");
    });
  });
});
