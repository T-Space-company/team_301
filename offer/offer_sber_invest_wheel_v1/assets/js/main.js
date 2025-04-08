document.addEventListener("DOMContentLoaded", () => {
  const wheel = document.querySelector(".main__wheel");
  const wheelContent = document.querySelector(".wheel__segments");
  const wheelBtn = document.querySelector(".wheel__button");
  const segments = document.querySelectorAll(".segment");
  const question = document.querySelector(".main__question h2");
  const totalSegments = segments.length;
  const degreesPerSegment = 360 / totalSegments;
  let i = 0;
  let answers = [];

  localStorage.removeItem("answers");

  function saveAnswer(question, answer) {
    let answers = JSON.parse(localStorage.getItem("answers")) || [];
    answers.push(`${question}: ${answer}`);
    localStorage.setItem("answers", JSON.stringify(answers));
  }

  wheel.classList.add("wheel__animated");

  segments.forEach((segment, index) => {
    segment.addEventListener("click", () => {
      wheelBtn.classList.add("active");
      wheel.classList.remove("wheel__animated");
      segments.forEach((s) => s.classList.remove("active"));
      segment.classList.add("active");

      const rotateToTop = 360 - index * degreesPerSegment;
      wheelContent.style.transform = `rotate(${rotateToTop}deg)`;
    });
  });

  wheelBtn.addEventListener("click", () => {
    if (
      wheelBtn.classList.contains("active") &&
      Array.from(segments).some((s) => s.classList.contains("active"))
    ) {
      const activeSegment = Array.from(segments).find((s) =>
        s.classList.contains("active")
      );
      const currQuestion = question.textContent.trim();
      const answer = activeSegment.querySelector("span").textContent.trim();
      console.log(currQuestion, answer);
      saveAnswer(currQuestion, answer);
      i++;
      changeQuestion();
    }
    return;
  });

  function changeQuestion() {
    switch (i) {
      case 1:
        answers = [
          "Создание пассивного дохода",
          "Инвестиции в будущее",
          "Другое",
          "Помощь<br> близким",
          "Финансовая независимость",
        ];
        question.textContent = "С какой целью Вы хотите увеличить достаток?";
        segments.forEach((segment, index) => {
          const span = segment.querySelector("span");
          if (span && answers[index]) {
            span.innerHTML = answers[index];
          }
        });
        break;
      case 2:
        answers = [
          "30 000 ₽",
          "50 000 ₽",
          "80 000 ₽",
          "120 000 ₽",
          "150 000 ₽",
        ];
        question.textContent = `Средний доход в программе от "Сбербанк России" начинается от 30 000 ₽ и может достигать 1 245 000 ₽ Сколько Вы хотите зарабатывать?`;
        segments.forEach((segment, index) => {
          const span = segment.querySelector("span");
          if (span && answers[index]) {
            span.innerHTML = answers[index];
          }
        });
        break;
      case 3:
        answers = [
          "30 000 ₽",
          "50 000 ₽",
          "80 000 ₽",
          "120 000 ₽",
          "150 000 ₽",
        ];
        question.textContent = "С какой целью Вы хотите увеличить достаток?";
        segments.forEach((segment, index) => {
          const span = segment.querySelector("span");
          if (span && answers[index]) {
            span.innerHTML = answers[index];
          }
        });
        break;
    }
  }
});
