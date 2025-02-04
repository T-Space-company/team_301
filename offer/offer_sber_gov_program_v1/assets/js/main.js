document.addEventListener("DOMContentLoaded", () => {
  const body = document.querySelector("body");
  const quizBtn = document.getElementById("open-quiz-btn");
  const modal = document.getElementById("modal");
  const nextQuestionBtn = document.getElementById("quiz-btn");
  const questionText = document.querySelector(".quiz__text-wrapper");
  const answerButtons = document.querySelector(".quiz__buttons");
  const form = document.querySelector(".quiz__form");

  quizBtn.addEventListener("click", () => {
    modal.classList.remove("hidden");
    body.style.overflow = "hidden";
  });

  const quizSteps = [
    {
      text: `<span class="quiz__text">Поздравляю! Теперь от Сбербанк для Вас открыта возможность зарабатывать на акциях российских и зарубежных компаний и получать от 50 000₽ уже с первых недель! Пожалуйста, ответьте на следующие вопросы:</span>`,
      buttons: `<button id="quiz-btn" class="quiz__button" type="button">Далее</button>`,
    },
    {
      text: `<span class="quiz__text">Вы являетесь гражданином Российской Федерации (есть ли у Вас Российское гражданство)?</span>`,
      buttons: `<button id="quiz-btn" class="quiz__button secondary" type="button">Да</button>
                <button id="quiz-btn" class="quiz__button secondary f" type="button">Нет</button>`,
    },
    {
      text: `<span class="quiz__text question"><b>Сколько вам лет?</b></span>`,
      buttons: `<button id="quiz-btn" class="quiz__button secondary f" type="button">до 18</button>
                <button id="quiz-btn" class="quiz__button secondary" type="button">18-24</button>
                <button id="quiz-btn" class="quiz__button secondary" type="button">25-40</button>
                <button id="quiz-btn" class="quiz__button secondary" type="button">40-55</button>
                <button id="quiz-btn" class="quiz__button secondary" type="button">55+</button>`,
    },
    {
      text: `<span class="quiz__text question">С какой целью Вы хотите увеличить достаток?</span>`,
      buttons: `<button id="quiz-btn" class="quiz__button secondary" type="button">Хочу обезопасить себя от кризиса</button>
                <button id="quiz-btn" class="quiz__button secondary" type="button">Хочу получать дополнительный доход</button>
                <button id="quiz-btn" class="quiz__button secondary" type="button">Планирую развивать бизнес</button>
                <button id="quiz-btn" class="quiz__button secondary" type="button">Хочу чтобы моя семья ни в чем не нуждалась</button>`,
    },
    {
      text: `<span class="quiz__text question">Имеете ли Вы опыт в инвестировании?</span>`,
      buttons: `<button id="quiz-btn" class="quiz__button secondary" type="button">Да, успешно инвестирую по сей день</button>
                <button id="quiz-btn" class="quiz__button secondary" type="button">Инвестировал ранее 
но сейчас не уделяю этому времени</button>
                <button id="quiz-btn" class="quiz__button secondary" type="button">Нет, никогда прежде 
не инвестировал</button>`,
    },
    {
      text: `<span class="quiz__text question">Средний доход в программе от "Сбербанк Россия" начинается от 150 000₽ и может достигать более 1 000 000₽. Сколько Вы хотите зарабатывать?</span>`,
      buttons: `<button id="quiz-btn" class="quiz__button secondary" type="button">150 000 рублей</button>
                <button id="quiz-btn" class="quiz__button secondary" type="button">300 000 рублей</button>
                <button id="quiz-btn" class="quiz__button secondary" type="button">1 000 000 рублей</button>`,
    },
    {
      text: `<span class="quiz__text question">Спасибо за уделённое время и пройденный опрос! Теперь Вам открыт доступ 
к персональной платформе проекта «Сбербанк Инвестиции»</span>`,
      buttons: `<button id="quiz-btn" class="quiz__button" type="button">Далее</button>`,
    },
    {
      text: `<span class="quiz__text question final">Пожалуйста, оставьте свои контактные данные для регистрации в проекте. Ваш личный менеджер получит данные и свяжется с Вами в течении одного рабочего дня!</span>`,
      buttons: ``,
    },
  ];

  let currentStep = 0;

  function updateQuizContent() {
    questionText.innerHTML = quizSteps[currentStep].text;
    answerButtons.innerHTML = quizSteps[currentStep].buttons;

    if (
      quizSteps[currentStep].text ===
      `<span class="quiz__text question final">Пожалуйста, оставьте свои контактные данные для регистрации в проекте. Ваш личный менеджер получит данные и свяжется с Вами в течении одного рабочего дня!</span>`
    ) {
      form.classList.remove("hidden");
    }
    document.querySelectorAll(".quiz__button").forEach((button) => {
      button.addEventListener("click", handleQuizStep);
    });
  }

  function handleQuizStep(event) {
    if (event.target.classList.contains("f")) {
      window.location.href = "err.html";
      return;
    }

    currentStep++;
    if (currentStep < quizSteps.length) {
      updateQuizContent();
    }
  }

  nextQuestionBtn.addEventListener("click", handleQuizStep);
});
