document.addEventListener("DOMContentLoaded", () => {
  const chat = document.querySelector(".main-messages");

  const userData = {
    Имя: "",
    Фамилия: "",
    Телефон: "",
  };

  localStorage.removeItem("answers");

  function saveAnswer(question, answer) {
    let answers = JSON.parse(localStorage.getItem("answers")) || [];
    answers.push(`${question}: ${answer}`);
    localStorage.setItem("answers", JSON.stringify(answers));
  }

  const firstMessages = [
    `Пройдите официальный тест от ОАО "BYBIT" и получите доступ к выплате`,
    "Также для Вас открыта возможность зарабатывать на акциях российских и зарубежных компаний и получать от 100 000Р уже в первую неделю!",
    "Пожалуйста, ответьте на следующие вопросы:",
    "Являетесь ли вы гражданином или резидентом Российской Федерации?",
  ];

  function createMessage(message, delay = 800) {
    const messageField = document.createElement("div");
    messageField.classList.add("message-field");

    const avatar = document.createElement("img");
    avatar.setAttribute("src", "img/icons/logo.svg");
    avatar.classList.add("message-avatar");

    const div = document.createElement("div");
    div.classList.add("message");

    const sender = document.createElement("span");
    sender.textContent = "BYBIT";
    sender.classList.add("message-sender");
    div.appendChild(sender);

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

  function createQuestion(message, delay = 800) {
    const messageField = document.createElement("div");
    messageField.classList.add("message-field");

    const avatar = document.createElement("img");
    avatar.setAttribute("src", "img/icons/logo.svg");
    avatar.classList.add("message-avatar");

    const div = document.createElement("div");
    div.classList.add("message");

    const sender = document.createElement("span");
    sender.textContent = "СБЕР ИНВЕСТИЦИИ";
    sender.classList.add("message-sender");
    div.appendChild(sender);

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

  firstMessages.forEach((message, i) => {
    createMessage(message, i * 800);
  });

  const answers = document.createElement("div");
  answers.classList.add("answers");

  const buttonYes = document.createElement("button");
  const buttonNo = document.createElement("button");
  buttonYes.textContent = "Да";
  buttonNo.textContent = "Нет";

  answers.appendChild(buttonYes);
  answers.appendChild(buttonNo);
  chat.appendChild(answers);

  setTimeout(() => {
    answers.classList.add("visible");
  }, 2400);

  const handleClickYes = () => {
    saveAnswer(
      "Являетесь ли вы гражданином или резидентом Российской Федерации?",
      "Да"
    );
    onButtonClick("Да");
    createQuestion("Сколько вам лет?");

    const answers = document.createElement("div");
    answers.classList.add("answers");

    const handleButton0Click = () => {
      onButtonClick("до 18");
      button0.removeEventListener("click", handleButton1Click);
      button1.removeEventListener("click", handleButton1Click);
      button2.removeEventListener("click", handleButton2Click);
      button3.removeEventListener("click", handleButton3Click);
      button4.removeEventListener("click", handleButton4Click);

      localStorage.setItem("unsuitable", "false");
      createQuestion(
        "Извините, чтобы участвовать в программе Вы должны быть совершеннолетним гражданином или резидентом РФ"
      );
    };

    const handleButton1Click = () => {
      saveAnswer("Сколько вам лет?", "18-24");
      onButtonClick("18-24");
      button0.removeEventListener("click", handleButton1Click);
      button1.removeEventListener("click", handleButton1Click);
      button2.removeEventListener("click", handleButton2Click);
      button3.removeEventListener("click", handleButton3Click);
      button4.removeEventListener("click", handleButton4Click);

      createQuestion("С какой целью Вы хотите увеличить достаток?");
      createGoalButtons();
      scrollDown(200);
    };

    const handleButton2Click = () => {
      saveAnswer("Сколько вам лет?", "25-40");
      onButtonClick("25-40");
      button0.removeEventListener("click", handleButton1Click);
      button1.removeEventListener("click", handleButton1Click);
      button2.removeEventListener("click", handleButton2Click);
      button3.removeEventListener("click", handleButton3Click);
      button4.removeEventListener("click", handleButton4Click);

      createQuestion("С какой целью Вы хотите увеличить достаток?");
      createGoalButtons();
      scrollDown(200);
    };

    const handleButton3Click = () => {
      saveAnswer("Сколько вам лет?", "40-45");
      onButtonClick("40-45");
      button0.removeEventListener("click", handleButton1Click);
      button1.removeEventListener("click", handleButton1Click);
      button2.removeEventListener("click", handleButton2Click);
      button3.removeEventListener("click", handleButton3Click);
      button4.removeEventListener("click", handleButton4Click);

      createQuestion("С какой целью Вы хотите увеличить достаток?");
      createGoalButtons();
      scrollDown(200);
    };

    const handleButton4Click = () => {
      saveAnswer("Сколько вам лет?", "55+");
      onButtonClick("55+");
      button0.removeEventListener("click", handleButton1Click);
      button1.removeEventListener("click", handleButton1Click);
      button2.removeEventListener("click", handleButton2Click);
      button3.removeEventListener("click", handleButton3Click);
      button4.removeEventListener("click", handleButton4Click);

      createQuestion("С какой целью Вы хотите увеличить достаток?");
      createGoalButtons();
      scrollDown(200);
    };

    const button0 = document.createElement("button");
    button0.textContent = "до 18";
    button0.addEventListener("click", handleButton0Click);

    const button1 = document.createElement("button");
    button1.textContent = "18-24";
    button1.addEventListener("click", handleButton1Click);

    const button2 = document.createElement("button");
    button2.textContent = "25-40";
    button2.addEventListener("click", handleButton2Click);

    const button3 = document.createElement("button");
    button3.textContent = "40-45";
    button3.addEventListener("click", handleButton3Click);

    const button4 = document.createElement("button");
    button4.textContent = "55+";
    button4.addEventListener("click", handleButton4Click);

    answers.appendChild(button0);
    answers.appendChild(button1);
    answers.appendChild(button2);
    answers.appendChild(button3);
    answers.appendChild(button4);
    chat.appendChild(answers);

    setTimeout(() => {
      answers.classList.add("visible");
    }, 800);
  };

  function createGoalButtons() {
    const answers = document.createElement("div");
    answers.classList.add("answers");

    const handle1Click = () => {
      saveAnswer(
        "С какой целью Вы хотите увеличить достаток?",
        "Хочу обезопасить себя от кризиса"
      );
      onButtonClick("Хочу обезопасить себя от кризиса");
      removeEventListeners();
      createQuestion("Имеете ли вы опыт в инвестировании?");
      createExpButtons();
      scrollDown(250);
    };

    const handle2Click = () => {
      saveAnswer(
        "С какой целью Вы хотите увеличить достаток?",
        "Хочу получать дополнительный доход"
      );
      onButtonClick("Хочу получать дополнительный доход");
      removeEventListeners();
      createQuestion("Имеете ли вы опыт в инвестировании?");
      createExpButtons();
      scrollDown(250);
    };

    const handle3Click = () => {
      saveAnswer(
        "С какой целью Вы хотите увеличить достаток?",
        "Планирую развивать бизнес"
      );
      onButtonClick("Планирую развивать бизнес");
      removeEventListeners();
      createQuestion("Имеете ли вы опыт в инвестировании?");
      createExpButtons();
      scrollDown(250);
    };

    const handle4Click = () => {
      saveAnswer(
        "С какой целью Вы хотите увеличить достаток?",
        "Хочу, чтобы моя семья ни в чем не нуждалась"
      );
      onButtonClick("Хочу, чтобы моя семья ни в чем не нуждалась");
      removeEventListeners();
      createQuestion("Имеете ли вы опыт в инвестировании?");
      createExpButtons();
      scrollDown(250);
    };

    const buttonFirst = document.createElement("button");
    buttonFirst.textContent = "Хочу обезопасить себя от кризиса";
    buttonFirst.addEventListener("click", handle1Click);

    const buttonSecond = document.createElement("button");
    buttonSecond.textContent = "Хочу получать дополнительный доход";
    buttonSecond.addEventListener("click", handle2Click);

    const buttonThird = document.createElement("button");
    buttonThird.textContent = "Планирую развивать бизнес";
    buttonThird.addEventListener("click", handle3Click);

    const buttonFourth = document.createElement("button");
    buttonFourth.textContent = "Хочу, чтобы моя семья ни в чем не нуждалась";
    buttonFourth.addEventListener("click", handle4Click);

    answers.appendChild(buttonFirst);
    answers.appendChild(buttonSecond);
    answers.appendChild(buttonThird);
    answers.appendChild(buttonFourth);
    chat.appendChild(answers);

    setTimeout(() => {
      answers.classList.add("visible");
    }, 800);

    function removeEventListeners() {
      buttonFirst.removeEventListener("click", handle1Click);
      buttonSecond.removeEventListener("click", handle2Click);
      buttonThird.removeEventListener("click", handle3Click);
      buttonFourth.removeEventListener("click", handle4Click);
    }
  }

  function createExpButtons() {
    const answers = document.createElement("div");
    answers.classList.add("answers");

    const handle1Click = () => {
      saveAnswer(
        "Имеете ли вы опыт в инвестировании?",
        "Да, успешно инвестирую по сей день"
      );
      onButtonClick("Да, успешно инвестирую по сей день");
      removeEventListeners();
      createQuestion(
        "Средний доход в программе от «BYBIT» начинается от 100 000 ₽ и может достигать боле 1 500 000 ₽ в месяц. <b>Сколько вы хотите зарабатывать?</b>"
      );
      createRevenueButtons();
      scrollDown(250);
    };

    const handle2Click = () => {
      saveAnswer(
        "Имеете ли вы опыт в инвестировании?",
        "Инвестировал ранее, но сейчас не уделяю этому времени"
      );
      onButtonClick("Инвестировал ранее, но сейчас не уделяю этому времени");
      removeEventListeners();
      createQuestion(
        "Средний доход в программе от «BYBIT» начинается от 100 000 ₽ и может достигать боле 1 500 000 ₽ в месяц. <b>Сколько вы хотите зарабатывать?</b>"
      );
      createRevenueButtons();
      scrollDown(250);
    };

    const handle3Click = () => {
      saveAnswer(
        "Имеете ли вы опыт в инвестировании?",
        "Нет, никогда прежде не инвестировал"
      );
      onButtonClick("Нет, никогда прежде не инвестировал");
      removeEventListeners();
      createQuestion(
        "Средний доход в программе от «BYBIT» начинается от 100 000 ₽ и может достигать боле 1 500 000 ₽ в месяц. <b>Сколько вы хотите зарабатывать?</b>"
      );
      createRevenueButtons();
      scrollDown(250);
    };

    const buttonFirst = document.createElement("button");
    buttonFirst.textContent = "Да, успешно инвестирую по сей день";
    buttonFirst.addEventListener("click", handle1Click);

    const buttonSecond = document.createElement("button");
    buttonSecond.textContent =
      "Инвестировал ранее, но сейчас не уделяю этому времени";
    buttonSecond.addEventListener("click", handle2Click);

    const buttonThird = document.createElement("button");
    buttonThird.textContent = "Нет, никогда прежде не инвестировал";
    buttonThird.addEventListener("click", handle3Click);

    answers.appendChild(buttonFirst);
    answers.appendChild(buttonSecond);
    answers.appendChild(buttonThird);
    chat.appendChild(answers);

    setTimeout(() => {
      answers.classList.add("visible");
    }, 800);

    function removeEventListeners() {
      buttonFirst.removeEventListener("click", handle1Click);
      buttonSecond.removeEventListener("click", handle2Click);
      buttonThird.removeEventListener("click", handle3Click);
    }
  }

  function createRevenueButtons() {
    const answers = document.createElement("div");
    answers.classList.add("answers");

    const handle100Click = () => {
      saveAnswer("Сколько вы хотите зарабатывать?", "от 100 000 ₽");
      onButtonClick("от 100 000 ₽");
      removeEventListeners();

      createForm();
      scrollDown(550);
    };

    const handle250Click = () => {
      saveAnswer("Сколько вы хотите зарабатывать?", "250 000 ₽");
      onButtonClick("250 000 ₽");
      removeEventListeners();
      createForm();
      scrollDown(550);
    };

    const handle500Click = () => {
      saveAnswer("Сколько вы хотите зарабатывать?", "от 500 000 ₽");
      onButtonClick("от 500 000 ₽");
      removeEventListeners();
      createForm();
      scrollDown(550);
    };

    const buttonFirst = document.createElement("button");
    buttonFirst.textContent = "от 100 000 ₽";
    buttonFirst.addEventListener("click", handle100Click);

    const buttonSecond = document.createElement("button");
    buttonSecond.textContent = "250 000 ₽";
    buttonSecond.addEventListener("click", handle250Click);

    const buttonThird = document.createElement("button");
    buttonThird.textContent = "от 500 000 ₽";
    buttonThird.addEventListener("click", handle500Click);

    answers.appendChild(buttonFirst);
    answers.appendChild(buttonSecond);
    answers.appendChild(buttonThird);
    chat.appendChild(answers);

    setTimeout(() => {
      answers.classList.add("visible");
    }, 800);

    function removeEventListeners() {
      buttonFirst.removeEventListener("click", handle100Click);
      buttonSecond.removeEventListener("click", handle250Click);
      buttonThird.removeEventListener("click", handle500Click);
    }
  }

  const handleClickNo = () => {
    onButtonClick("Нет");
    createQuestion(
      "Извините, чтобы участвовать в программе Вы должны быть совершеннолетним гражданином или резидентом РФ"
    );
    localStorage.setItem("unsuitable", "false");
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
    status.setAttribute("src", "img/icons/sent-status.svg");

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
    const formDisplay = document.getElementById("main-form");
    formDisplay.style.display = "block";
  }

  function scrollDown(height) {
    window.scrollBy({
      top: height,
      behavior: "smooth",
    });
  }
});
