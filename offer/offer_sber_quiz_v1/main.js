document.addEventListener("DOMContentLoaded", () => {
  const quizNum = document.querySelector(".quiz__num");
  const quizQuestion = document.querySelector(".quiz__question");
  const quizButtonsContainer = document.querySelector(".quiz__buttons");
  const formBlock = document.getElementById("form-block");

  const questions = [
    {
      question:
        " Считаете ли Вы, что каждый житель России должен получать доход с торговли ресурсами страны?",
      answers: ["Да", "Нет"],
    },
    {
      question:
        "Какой суммы в месяц Вам было бы достаточно для исполнения своих желаний?",
      answers: ["100 000 ₽", "250 000 ₽", "400 000 ₽", "от 500 000 ₽"],
    },
    {
      question: "Через сколько времени вы хотели бы получить первую прибыль?",
      answers: ["В течении 3-х дней", "Через неделю", "Без разницы"],
    },
    {
      question: "Каким способом вам было бы удобнее получать выплаты?",
      answers: ["Наличными в кассе банка", "Получать выплату на карту"],
    },
  ];

  let currentQuestionIndex = 0;

  function loadQuestion(index) {
    if (index < questions.length) {
      const currentQuestion = questions[index];

      quizNum.textContent = `Вопрос №${index + 1}`;
      quizQuestion.textContent = currentQuestion.question;

      quizButtonsContainer.innerHTML = "";

      currentQuestion.answers.forEach((answer) => {
        const button = document.createElement("button");
        button.classList.add("quiz__button");
        button.textContent = answer;
        button.addEventListener("click", () => {
          currentQuestionIndex++;
          loadQuestion(currentQuestionIndex);
        });
        quizButtonsContainer.appendChild(button);
      });
    } else {
      quizNum.style.display = "none";
      quizQuestion.style.display = "none";
      quizButtonsContainer.style.display = "none";
      formBlock.style.display = "block";
    }
  }

  formBlock.style.display = "none";

  loadQuestion(0);
});
