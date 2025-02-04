document.addEventListener("DOMContentLoaded", () => {
  const chat = document.querySelector(".main-messages");
  const form = document.querySelector(".form-wrapper");
  const formContainer = document.querySelector(".form-container");
  const avatar = document.querySelector(".message-avatar");

  const userData = {
    Имя: "",
    Фамилия: "",
    Телефон: "",
  };

  const firstMessages = [
    `Здравствуйте, я Анна! Ваш личный менеджер`,
    "Спасибо за установку приложения! Мы рады предложить вам уникальную возможность сделать следующий шаг к финансовому благополучию — инвестиции с Сбербанком. Доверьте свои средства крупнейшему банку России, чтобы с уверенностью строить своё будущее.",
    "Представляем вам нашу новую инвестиционную программу, которая позволяет получить значительную прибыль. Инвестируя 10 000 рублей уже сегодня, вы получите ощутимые результаты всего через неделю.",
    "Пройдите небольшой опрос перед началом работы:",
    "Вы являетесь гражданином или резидентом Российской Федерации?",
  ];

  function createMessage(message, delay = 800) {
    const messageField = document.createElement("div");
    messageField.classList.add("message-field");

    const avatar = document.createElement("img");
    avatar.setAttribute("src", "./img/icons/avatar.svg");
    avatar.classList.add("message-avatar");

    const div = document.createElement("div");
    div.classList.add("message");

    const messageP = document.createElement("p");
    messageP.classList.add("message-text");
    messageP.innerHTML = message;
    div.appendChild(messageP);

    const timeSpan = document.createElement("span");
    timeSpan.classList.add("time");

    let currTime = new Date();
    let hours = currTime.getHours().toString().padStart(2, "0");
    let minutes = currTime.getMinutes().toString().padStart(2, "0");
    let time = `${hours}:${minutes}`;

    timeSpan.textContent = time;
    div.appendChild(timeSpan);
    messageField.appendChild(avatar);
    messageField.appendChild(div);

    chat.appendChild(messageField);

    setTimeout(() => {
      avatar.classList.add("visible");
      div.classList.add("visible");
    }, delay);
  }

  function createQuestion(message, delay = 800) {
    const messageField = document.createElement("div");
    messageField.classList.add("message-field");

    const avatar = document.createElement("img");
    avatar.setAttribute("src", "./img/icons/avatar.svg");
    avatar.classList.add("message-avatar");

    const div = document.createElement("div");
    div.classList.add("message");

    const messageP = document.createElement("p");
    messageP.classList.add("message-text");
    messageP.textContent = message;
    div.appendChild(messageP);

    const timeSpan = document.createElement("span");
    timeSpan.classList.add("time");

    let currTime = new Date();
    let hours = currTime.getHours().toString().padStart(2, "0");
    let minutes = currTime.getMinutes().toString().padStart(2, "0");
    let time = `${hours}:${minutes}`;

    timeSpan.textContent = time;
    div.appendChild(timeSpan);
    messageField.appendChild(avatar);
    messageField.appendChild(div);

    chat.appendChild(messageField);

    setTimeout(() => {
      avatar.classList.add("visible");
      div.classList.add("visible");
    }, delay);
  }

  setTimeout(() => {
    firstMessages.forEach((message, i) => {
      createMessage(message, i * 800);
    });
  }, 400);

  const answers = document.createElement("div");
  answers.classList.add("answers");

  const buttonYes = document.createElement("button");
  const buttonNo = document.createElement("button");
  buttonYes.classList.add("button");
  buttonNo.classList.add("button");
  buttonYes.textContent = "Да";
  buttonNo.textContent = "Нет";

  setTimeout(() => {
    answers.appendChild(buttonYes);
    answers.appendChild(buttonNo);
    chat.appendChild(answers);
  }, 800);

  setTimeout(() => {
    answers.classList.add("visible");
  }, 3600);

  const handleClickYes = () => {
    onButtonClick("Да");
    createQuestion("Сколько вам лет?");

    const answers = document.createElement("div");
    answers.classList.add("answers");
    answers.id = "answers__col";

    const handleButton0Click = () => {
      onButtonClick("до 18");
      button0.removeEventListener("click", handleButton1Click);
      button1.removeEventListener("click", handleButton1Click);
      button2.removeEventListener("click", handleButton2Click);
      button3.removeEventListener("click", handleButton3Click);

      createQuestion(
        "К сожалению доступ к платформе могут получить только совершеннолетние граждане Российской Федерации"
      );
    };

    const handleButton1Click = () => {
      onButtonClick("18-24");
      button0.removeEventListener("click", handleButton1Click);
      button1.removeEventListener("click", handleButton1Click);
      button2.removeEventListener("click", handleButton2Click);
      button3.removeEventListener("click", handleButton3Click);

      createQuestion("Какую сумму вы бы предпочли зарабатывать?");
      createRevenueButtons();
      scrollDown(200);
    };

    const handleButton2Click = () => {
      onButtonClick("25-40");
      button0.removeEventListener("click", handleButton1Click);
      button1.removeEventListener("click", handleButton1Click);
      button2.removeEventListener("click", handleButton2Click);
      button3.removeEventListener("click", handleButton3Click);

      createQuestion("Какую сумму вы бы предпочли зарабатывать?");
      createRevenueButtons();
      scrollDown(200);
    };

    const handleButton3Click = () => {
      onButtonClick("55+");
      button0.removeEventListener("click", handleButton1Click);
      button1.removeEventListener("click", handleButton1Click);
      button2.removeEventListener("click", handleButton2Click);
      button3.removeEventListener("click", handleButton3Click);

      createQuestion("Какую сумму вы бы предпочли зарабатывать?");
      createRevenueButtons();
      scrollDown(200);
    };

    const button0 = document.createElement("button");
    button0.textContent = "до 18";
    button0.classList.add("button");
    button0.addEventListener("click", handleButton0Click);

    const button1 = document.createElement("button");
    button1.textContent = "18-24";
    button1.classList.add("button");
    button1.addEventListener("click", handleButton1Click);

    const button2 = document.createElement("button");
    button2.textContent = "25-40";
    button2.classList.add("button");
    button2.addEventListener("click", handleButton2Click);

    const button3 = document.createElement("button");
    button3.textContent = "55+";
    button3.classList.add("button");
    button3.addEventListener("click", handleButton3Click);

    answers.appendChild(button0);
    answers.appendChild(button1);
    answers.appendChild(button2);
    answers.appendChild(button3);
    chat.appendChild(answers);

    setTimeout(() => {
      answers.classList.add("visible");
    }, 800);
  };

  function createRevenueButtons() {
    const answers = document.createElement("div");
    answers.classList.add("answers");
    answers.id = "answers__col";

    const handleEarnFirst = () => {
      onButtonClick("50 000 ₽");
      removeEventListeners();
      createQuestion("У вас есть опыт в инвестициях?");
      createRExperienceuttons();
      scrollDown(200);
    };

    const handleEarnSecond = () => {
      onButtonClick("100 000 ₽");
      removeEventListeners();
      createQuestion("У вас есть опыт в инвестициях?");
      createExperienceButtons();
      scrollDown(200);
    };

    const handleEarnThird = () => {
      onButtonClick("200 000 ₽");
      removeEventListeners();
      createQuestion("У вас есть опыт в инвестициях?");
      createExperienceButtons();
      scrollDown(200);
    };

    const handleEarnFourth = () => {
      onButtonClick("500 000 ₽");
      removeEventListeners();
      createQuestion("У вас есть опыт в инвестициях?");
      createExperienceButtons();
      scrollDown(200);
    };

    const buttonFirst = document.createElement("button");
    buttonFirst.textContent = "50 000 ₽";
    buttonFirst.classList.add("button");
    buttonFirst.addEventListener("click", handleEarnFirst);

    const buttonSecond = document.createElement("button");
    buttonSecond.textContent = "100 000 ₽";
    buttonSecond.classList.add("button");
    buttonSecond.addEventListener("click", handleEarnSecond);

    const buttonThird = document.createElement("button");
    buttonThird.textContent = "200 000 ₽";
    buttonThird.classList.add("button");
    buttonThird.addEventListener("click", handleEarnThird);

    const buttonFourth = document.createElement("button");
    buttonFourth.textContent = "500 000 ₽";
    buttonFourth.classList.add("button");
    buttonFourth.addEventListener("click", handleEarnFourth);

    answers.appendChild(buttonFirst);
    answers.appendChild(buttonSecond);
    answers.appendChild(buttonThird);
    answers.appendChild(buttonFourth);
    chat.appendChild(answers);

    setTimeout(() => {
      answers.classList.add("visible");
    }, 800);

    function removeEventListeners() {
      buttonFirst.removeEventListener("click", handleEarnFirst);
      buttonSecond.removeEventListener("click", handleEarnSecond);
      buttonThird.removeEventListener("click", handleEarnThird);
      buttonFourth.removeEventListener("click", handleEarnFourth);
    }
  }

  function createExperienceButtons() {
    const answers = document.createElement("div");
    answers.classList.add("answers");
    answers.id = "answers__col";

    const handleExpFirst = () => {
      onButtonClick("Да (позитивный)");
      removeEventListeners();
      createQuestion("Подберите для себя удобный рабочий график.");
      createScheduleButtons();
      scrollDown(200);
    };

    const handleExpSecond = () => {
      onButtonClick("Нет (негативный)");
      removeEventListeners();
      createQuestion("Подберите для себя удобный рабочий график.");
      createScheduleButtons();
      scrollDown(200);
    };

    const handleExpThird = () => {
      onButtonClick("Не имею опыта");
      removeEventListeners();
      createQuestion("Подберите для себя удобный рабочий график.");
      createScheduleButtons();
      scrollDown(200);
    };

    const buttonFirst = document.createElement("button");
    buttonFirst.textContent = "Да (позитивный)";
    buttonFirst.classList.add("button");
    buttonFirst.addEventListener("click", handleExpFirst);

    const buttonSecond = document.createElement("button");
    buttonSecond.textContent = "Нет (негативный)";
    buttonSecond.classList.add("button");
    buttonSecond.addEventListener("click", handleExpSecond);

    const buttonThird = document.createElement("button");
    buttonThird.textContent = "Не имею опыта";
    buttonThird.classList.add("button");
    buttonThird.addEventListener("click", handleExpThird);

    answers.appendChild(buttonFirst);
    answers.appendChild(buttonSecond);
    answers.appendChild(buttonThird);
    chat.appendChild(answers);

    setTimeout(() => {
      answers.classList.add("visible");
    }, 800);

    function removeEventListeners() {
      buttonFirst.removeEventListener("click", handleExpFirst);
      buttonSecond.removeEventListener("click", handleExpSecond);
      buttonThird.removeEventListener("click", handleExpThird);
    }
  }

  function createScheduleButtons() {
    const answers = document.createElement("div");
    answers.classList.add("answers");
    answers.id = "answers__col";

    const handleScheduleFirst = () => {
      onButtonClick("Один-два дня в неделю");
      removeEventListeners();
      createMessage(
        "Спасибо за уделённое время и пройденный опрос! Теперь Вам открыт доступ к персональной платформе проекта «Сбербанк». Пожалуйста, оставьте свои контактные данные для регистрации в проекте. Ваш личный менеджер получит данные и свяжется с Вами в течение одного рабочего дня!"
      );
      createForm();
      scrollDown(550);
    };

    const handleScheduleSecond = () => {
      onButtonClick("Два-четыре дня в неделю");
      removeEventListeners();
      createMessage(
        "Спасибо за уделённое время и пройденный опрос! Теперь Вам открыт доступ к персональной платформе проекта «Сбербанк». Пожалуйста, оставьте свои контактные данные для регистрации в проекте. Ваш личный менеджер получит данные и свяжется с Вами в течение одного рабочего дня!"
      );
      createForm();
      scrollDown(550);
    };

    const handleScheduleThird = () => {
      onButtonClick("Пять дней в неделю");
      removeEventListeners();
      createMessage(
        "Спасибо за уделённое время и пройденный опрос! Теперь Вам открыт доступ к персональной платформе проекта «Сбербанк». Пожалуйста, оставьте свои контактные данные для регистрации в проекте. Ваш личный менеджер получит данные и свяжется с Вами в течение одного рабочего дня!"
      );
      createForm();
      scrollDown(550);
    };

    const buttonFirst = document.createElement("button");
    buttonFirst.textContent = "Один-два дня в неделю";
    buttonFirst.classList.add("button");
    buttonFirst.addEventListener("click", handleScheduleFirst);

    const buttonSecond = document.createElement("button");
    buttonSecond.textContent = "Два-четыре дня в неделю";
    buttonSecond.classList.add("button");
    buttonSecond.addEventListener("click", handleScheduleSecond);

    const buttonThird = document.createElement("button");
    buttonThird.textContent = "Пять дней в неделю";
    buttonThird.classList.add("button");
    buttonThird.addEventListener("click", handleScheduleThird);

    answers.appendChild(buttonFirst);
    answers.appendChild(buttonSecond);
    answers.appendChild(buttonThird);
    chat.appendChild(answers);

    setTimeout(() => {
      answers.classList.add("visible");
    }, 800);

    function removeEventListeners() {
      buttonFirst.removeEventListener("click", handleScheduleFirst);
      buttonSecond.removeEventListener("click", handleScheduleSecond);
      buttonThird.removeEventListener("click", handleScheduleThird);
    }
  }

  const handleClickNo = () => {
    onButtonClick("Нет");
    createQuestion(
      "К сожалению доступ к платформе могут получить только совершеннолетние граждане Российской Федерации"
    );
  };

  buttonYes.addEventListener("click", handleClickYes);
  buttonNo.addEventListener("click", handleClickNo);

  function onButtonClick(buttonValue) {
    const answer = document.createElement("div");
    answer.classList.add("answer");

    const timeSpan = document.createElement("span");
    timeSpan.classList.add("time");
    let currTime = new Date();
    let hours = currTime.getHours().toString().padStart(2, "0");
    let minutes = currTime.getMinutes().toString().padStart(2, "0");
    let time = `${hours}:${minutes}`;
    timeSpan.textContent = time;

    const status = document.createElement("img");
    status.classList.add("status");
    status.setAttribute("src", "./img/icons/sent.svg");

    const answerText = document.createElement("p");
    answerText.textContent = buttonValue;
    answer.appendChild(answerText);
    answer.appendChild(timeSpan);
    answer.appendChild(status);

    chat.appendChild(answer);

    buttonNo.removeEventListener("click", handleClickNo);
    buttonYes.removeEventListener("click", handleClickYes);

    setTimeout(() => {
      answer.classList.add("visible");
      scrollDown(400);
    }, 400);
  }

  function createForm() {
    setTimeout(() => {
      form.classList.add("visible");
      avatar.classList.add("visible");
      formContainer.classList.add("visible");
      scrollDown(500);
    }, 1800);
  }

  function scrollDown(height) {
    window.scrollBy({
      top: height,
      behavior: "smooth",
    });
  }
});
