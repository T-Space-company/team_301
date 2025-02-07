document.addEventListener("DOMContentLoaded", () => {
  const startScreen = document.getElementById("start-screen");
  const quizScreen = document.getElementById("quiz-screen");
  const formScreen = document.getElementById("form-screen");
  const startButton = document.getElementById("start-button");
  const questionNumber = document.getElementById("question-number");
  const questionTitle = document.getElementById("question-title");
  const answerButtons = document.getElementById("answer-buttons");
  const questionBlock = document.getElementById("question-block");
  const quizAttentionBlock = document.querySelector(".quiz-attention-block");
  const quizForm = document.getElementById("form-block");

  const questions = [
    {
      question:
        "Считаете ли Вы, что каждый житель России должен получать доход с торговли ресурсами страны?",
      answers: ["А: Да", "Б: Нет"],
    },
    {
      question:
        "Какой суммы в месяц Вам было бы достаточно для исполнения своих желаний?",
      answers: [
        "А: 100 тыс рублей",
        "Б: 250 тыс рублей",
        "В: 400 тыс рублей",
        "Г: больше 500 тыс",
      ],
    },
    {
      question: "Готовы ли вы к новым начинаниям в жизни?",
      answers: ["А: Да", "Б: Нужно подумать"],
    },
    {
      question:
        "Хотели бы вы получать пассивный доход уделяя час времени в день?",
      answers: ["A: Да", "Б: Нету времени"],
    },
  ];

  let currentQuestionIndex = 0;

  startButton.addEventListener("click", () => {
    startScreen.style.display = "none";
    quizScreen.style.display = "flex";
    showQuestion();
  });

  function showQuestion() {
    const currentQuestion = questions[currentQuestionIndex];

    questionBlock.classList.remove("show");
    answerButtons.classList.remove("show");

    setTimeout(() => {
      questionNumber.textContent = `Вопрос №${currentQuestionIndex + 1}`;
      questionTitle.textContent = currentQuestion.question;
      answerButtons.innerHTML = "";

      currentQuestion.answers.forEach((answer, index) => {
        const button = document.createElement("button");
        button.classList.add("quiz-button", "hidden-answer");
        button.textContent = answer;
        button.addEventListener("click", handleAnswerClick);
        answerButtons.appendChild(button);

        setTimeout(() => {
          button.classList.remove("hidden-answer");
          button.classList.add("show");
        }, 100 * (index + 1));
      });

      setTimeout(() => {
        questionBlock.classList.add("show");
        answerButtons.classList.add("show");
      }, 50);
    }, 300);
  }

  function handleAnswerClick() {
    currentQuestionIndex++;
    if (currentQuestionIndex < questions.length) {
      showQuestion();
    } else {
      quizScreen.style.display = "none";
      formScreen.style.display = "flex";

      setTimeout(() => {
        quizAttentionBlock.classList.add("show");
      }, 100);

      setTimeout(() => {
        quizForm.classList.add("show");
      }, 300);
    }
  }
});
