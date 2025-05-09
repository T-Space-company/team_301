document.addEventListener("DOMContentLoaded", () => {
  const body = document.querySelector("body");
  const modal1 = document.getElementById("modal-1");
  const modal2 = document.getElementById("modal-2");
  const btnYes1 = document.querySelector(".modal__button--first.yes");
  const btnYes2 = document.querySelectorAll(".modal__button--second.yes");

  localStorage.removeItem("answers");

  function saveAnswer(question, answer) {
    let answers = JSON.parse(localStorage.getItem("answers")) || [];
    answers.push(`${question}: ${answer}`);
    localStorage.setItem("answers", JSON.stringify(answers));
  }

  body.style.overflow = "hidden";
  modal1.classList.remove("hidden");

  btnYes1.addEventListener("click", () => {
    saveAnswer(
      "Вы являетесь гражданином или резидентом Российской Федерации?",
      "Да"
    );
    modal1.classList.add("hidden");
    modal2.classList.remove("hidden");
  });

  btnYes2.forEach((btn) => {
    btn.addEventListener("click", () => {
      saveAnswer("Сколько вам лет?", btn.textContent.trim());
      modal2.classList.add("hidden");
      body.style.overflow = "auto";
    });
  });
});
