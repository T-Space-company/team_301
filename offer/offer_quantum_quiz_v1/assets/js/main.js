document.addEventListener("DOMContentLoaded", () => {
  let currentStep = 1;
  const totalSteps = 8;

  localStorage.removeItem("answers");

  const questions = {
    2: "Are you a resident of Europe?",
    3: "How old are you?",
    4: "What is your financial goal?",
    5: "Where do you think you will spend the first profit?",
    6: "How much time are you willing to dedicate to trading?",
    7: "Choose the amount for your first investment",
  };

  function goToNextStep(answerText) {
    if (questions[currentStep]) {
      saveAnswer(questions[currentStep], answerText);
    }

    const current = document.getElementById(`step-${currentStep}`);
    const next = document.getElementById(`step-${currentStep + 1}`);

    if (current && next) {
      current.classList.remove("active");
      next.classList.add("active");
      currentStep++;
    }
  }

  function saveAnswer(question, answer) {
    let answers = JSON.parse(localStorage.getItem("answers")) || [];
    answers.push(`${question}: ${answer}`);
    localStorage.setItem("answers", JSON.stringify(answers));
  }

  const startBtn = document.getElementById("btn-step-1");
  if (startBtn) {
    startBtn.addEventListener("click", () => goToNextStep("Started"));
  }

  const stepButtons = document.querySelectorAll(".btn-step");
  stepButtons.forEach((btn) => {
    btn.addEventListener("click", () => {
      const answerText = btn.textContent.trim();
      goToNextStep(answerText);
    });
  });
});
