document.addEventListener("DOMContentLoaded", () => {
  let currentQuestion = 1;
  const totalQuestions = 3;

  const nextBtn = document.getElementById("next-btn");
  const backBtn = document.getElementById("back-btn");
  const currentQuestionSpan = document.getElementById("current-question");
  const closeBtn = document.querySelector(".close-btn");
  const quizContainer = document.querySelector("#quiz");
  const completion_slide = document.querySelector(".completion-slide");
  const open_quiz = document.querySelectorAll(".open_quiz");

  open_quiz.forEach((btn) => {
    btn.addEventListener("click", () => {
      quizContainer.classList.add("active");
    });
  });

  function updateNavigation() {
    currentQuestionSpan.textContent = currentQuestion;
    backBtn.classList.toggle("disabled", currentQuestion === 1);

    if (currentQuestion === totalQuestions) {
      nextBtn.textContent = "ЗАВЕРШИТЬ →";
    } else {
      nextBtn.textContent = "ДАЛЕЕ →";
    }

    const currentRadio = document.querySelector(
      `input[name="question${currentQuestion}"]:checked`
    );
    nextBtn.classList.toggle("active", currentRadio !== null);
  }

  function showQuestion(questionNumber) {
    document.querySelectorAll(".question-slide").forEach((slide) => {
      slide.style.display = "none";
    });
    document.querySelector(
      `.question-slide[data-question="${questionNumber}"]`
    ).style.display = "block";
    updateNavigation();
  }

  function showCompletion() {
    document.querySelectorAll(".question-slide").forEach((slide) => {
      slide.style.display = "none";
    });
    document.querySelector(".completion-slide").style.display = "block";
    document.querySelector(".quiz-footer").style.display = "none";
  }

  nextBtn.addEventListener("click", () => {
    const currentRadio = document.querySelector(
      `input[name="question${currentQuestion}"]:checked`
    );
    if (!currentRadio) return;

    if (currentQuestion < totalQuestions) {
      currentQuestion++;
      showQuestion(currentQuestion);
    } else {
      showCompletion();
    }
  });

  backBtn.addEventListener("click", () => {
    if (currentQuestion > 1) {
      currentQuestion--;
      showQuestion(currentQuestion);
    }
  });

  closeBtn.addEventListener("click", () => {
    quizContainer.classList.remove("active");
    completion_slide.style.display = "none";
    document.querySelector(".quiz-footer").style.display = "block";
    currentQuestion = 1;
    showQuestion(currentQuestion);
  });

  // Add change event listeners to all radio buttons
  document.querySelectorAll('input[type="radio"]').forEach((radio) => {
    radio.addEventListener("change", updateNavigation);
  });

  // Initialize the quiz
  showQuestion(1);
});
