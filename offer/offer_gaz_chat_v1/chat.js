document.addEventListener("DOMContentLoaded", () => {
  const chat = document.querySelector(".main-messages");
  const form = document.querySelector(".form-wrapper");
  const formContainer = document.querySelector(".form-container");

  localStorage.removeItem("answers");

  function saveAnswer(question, answer) {
    let answers = JSON.parse(localStorage.getItem("answers")) || [];
    answers.push(`${question}: ${answer}`);
    localStorage.setItem("answers", JSON.stringify(answers));
  }

  const userData = {
    Имя: "",
    Фамилия: "",
    Телефон: "",
  };

  const firstMessages = [
    `Здравствуйте! Меня зовут Мария, я Ваш персональный помощник по программе «Т-Банк»`,
    "Поздравляю! Теперь от Т-Банк для Вас открыта возможность зарабатывать на акциях российских и зарубежных компаний и получать от 93 000 ₽ уже с первых недель!",
    "Пожалуйста, ответьте на следующие вопросы, чтобы я смогла оказать Вам помощь и приступить к работе:",
    "Являетесь ли вы гражданином или резидентом Российской Федерации?",
  ];

  function showTypingIndicator(callback, message, delay = 400) {
    const messageField = document.createElement("div");
    messageField.classList.add("message-field");

    const avatar = document.createElement("img");
    avatar.setAttribute("src", "./img/icons/avatar.png");
    avatar.classList.add("message-avatar");

    const typingDiv = document.createElement("div");
    typingDiv.classList.add("message", "typing-visible");

    typingDiv.innerHTML = `
      <div class="typing">
        <span></span>
        <span></span>
        <span></span>
      </div>
    `;

    messageField.appendChild(avatar);
    messageField.appendChild(typingDiv);
    chat.appendChild(messageField);

    setTimeout(() => {
      typingDiv.classList.add("visible");
      avatar.classList.add("visible");
    }, 100);

    setTimeout(() => {
      typingDiv.innerHTML = "";
      callback(typingDiv, message, delay);
    }, 800);
  }

  function createMessage(messageContainer, message, delay = 800) {
    messageContainer.classList.remove("typing-visible");
    messageContainer.classList.add("message");

    const sender = document.createElement("span");
    sender.textContent = "Т-Инвестиции";
    sender.classList.add("message-sender");
    messageContainer.appendChild(sender);

    const messageP = document.createElement("p");
    messageP.classList.add("message-text");
    messageP.innerHTML = message;
    messageContainer.appendChild(messageP);

    const timeSpan = document.createElement("span");
    timeSpan.classList.add("time");

    let currTime = new Date();
    let hours = currTime.getHours().toString().padStart(2, "0");
    let minutes = currTime.getMinutes().toString().padStart(2, "0");
    let time = `${hours}:${minutes}`;

    timeSpan.textContent = time;
    messageContainer.appendChild(timeSpan);

    setTimeout(() => {
      messageContainer.classList.add("visible");
    }, delay);
  }

  function createQuestion(message, delay = 1000) {
    showTypingIndicator(
      (msg, d) => {
        createMessage(msg, d);
      },
      message,
      delay
    );
  }

  setTimeout(() => {
    firstMessages.forEach((message, i) => {
      setTimeout(() => {
        showTypingIndicator(createMessage, message, 400);
      }, i * 1000);
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
  }, 4200);

  setTimeout(() => {
    answers.classList.add("visible");
  }, 4600);

  const handleClickYes = () => {
    saveAnswer(
      "Являетесь ли вы гражданином или резидентом Российской Федерации?",
      "Да"
    );

    onButtonClick("Да", 1000);
    createQuestion(
      `Благодарим за скачивание нашего приложения! Пройдите короткий опрос и получите персональное предложение! <br><br><b>Сколько вам лет?</b>`
    );

    const answers = document.createElement("div");
    answers.classList.add("answers");
    answers.id = "answers__col";

    const handleButton0Click = () => {
      onButtonClick("до 18");
      saveAnswer("Сколько вам лет?", "до 18");
      button0.removeEventListener("click", handleButton0Click);
      button1.removeEventListener("click", handleButton1Click);
      button2.removeEventListener("click", handleButton2Click);
      button3.removeEventListener("click", handleButton3Click);
      button4.removeEventListener("click", handleButton4Click);

      createQuestion(
        "Извините, чтобы участвовать в программе Вы должны быть совершеннолетним гражданином или резидентом РФ"
      );
      localStorage.setItem("unsuitable", false);
    };

    const handleButton1Click = () => {
      onButtonClick("18-24");
      saveAnswer("Сколько вам лет?", "18-24");
      button0.removeEventListener("click", handleButton0Click);
      button1.removeEventListener("click", handleButton1Click);
      button2.removeEventListener("click", handleButton2Click);
      button3.removeEventListener("click", handleButton3Click);
      button4.removeEventListener("click", handleButton4Click);

      createQuestion(`Откуда Вы узнали о проекте «Т-Инвестиции»?`);
      createRevenueButtons();
      scrollDown(200);
    };

    const handleButton2Click = () => {
      saveAnswer("Сколько вам лет?", "25-40");
      onButtonClick("25-40");
      button0.removeEventListener("click", handleButton0Click);
      button1.removeEventListener("click", handleButton1Click);
      button2.removeEventListener("click", handleButton2Click);
      button3.removeEventListener("click", handleButton3Click);
      button4.removeEventListener("click", handleButton4Click);

      createQuestion(`Откуда Вы узнали о проекте «Т-Инвестиции»?`);
      createRevenueButtons();
      scrollDown(200);
    };

    const handleButton4Click = () => {
      saveAnswer("Сколько вам лет?", "40-55");
      onButtonClick("40-55");
      button0.removeEventListener("click", handleButton0Click);
      button1.removeEventListener("click", handleButton1Click);
      button2.removeEventListener("click", handleButton2Click);
      button3.removeEventListener("click", handleButton3Click);
      button4.removeEventListener("click", handleButton4Click);

      createQuestion(`Откуда Вы узнали о проекте «Т-Инвестиции»?`);
      createRevenueButtons();
      scrollDown(200);
    };
    const handleButton3Click = () => {
      saveAnswer("Сколько вам лет?", "55+");
      onButtonClick("55+");
      button0.removeEventListener("click", handleButton0Click);
      button1.removeEventListener("click", handleButton1Click);
      button2.removeEventListener("click", handleButton2Click);
      button3.removeEventListener("click", handleButton3Click);
      button4.removeEventListener("click", handleButton4Click);

      createQuestion(`Откуда Вы узнали о проекте «Т-Инвестиции»?`);
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

    const button4 = document.createElement("button");
    button4.textContent = "40-55";
    button4.classList.add("button");
    button4.addEventListener("click", handleButton4Click);

    const button3 = document.createElement("button");
    button3.textContent = "55+";
    button3.classList.add("button");
    button3.addEventListener("click", handleButton3Click);

    answers.appendChild(button0);
    answers.appendChild(button1);
    answers.appendChild(button2);
    answers.appendChild(button4);
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
      onButtonClick("Наружная реклама");
      removeEventListeners();
      createQuestion(
        `На какую ежемесячную прибыль Вы хотели бы выйти с нашей платформой?`
      );
      createProfitButtons();
      scrollDown(200);
    };

    const handleEarnSecond = () => {
      onButtonClick("Реклама в интернете ");
      removeEventListeners();
      createQuestion(
        `На какую ежемесячную прибыль Вы хотели бы выйти с нашей платформой?`
      );
      createProfitButtons();
      scrollDown(200);
    };

    const handleEarnThird = () => {
      onButtonClick("Рекомендация знакомых ");
      removeEventListeners();
      createQuestion(
        `На какую ежемесячную прибыль Вы хотели бы выйти с нашей платформой?`
      );
      createProfitButtons();
      scrollDown(200);
    };

    const handleEarnFourth = () => {
      onButtonClick("Поисковые платформы ");
      removeEventListeners();
      createQuestion(
        `На какую ежемесячную прибыль Вы хотели бы выйти с нашей платформой?`
      );
      createProfitButtons();
      scrollDown(200);
    };

    const buttonFirst = document.createElement("button");
    buttonFirst.textContent = "Наружная реклама";
    buttonFirst.classList.add("button");
    buttonFirst.addEventListener("click", handleEarnFirst);

    const buttonSecond = document.createElement("button");
    buttonSecond.textContent = "Реклама в интернете";
    buttonSecond.classList.add("button");
    buttonSecond.addEventListener("click", handleEarnSecond);

    const buttonThird = document.createElement("button");
    buttonThird.textContent = "Рекомендация знакомых";
    buttonThird.classList.add("button");
    buttonThird.addEventListener("click", handleEarnThird);

    const buttonFourth = document.createElement("button");
    buttonFourth.textContent = "Поисковые платформы";
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

  function createProfitButtons() {
    const answers = document.createElement("div");
    answers.classList.add("answers");
    answers.id = "answers__col";

    const handleEarnFirst = () => {
      onButtonClick("До 50 000 рублей");
      removeEventListeners();
      createQuestion(
        `Сколько времени в неделю Вы готовы уделять для комфортной работы?`
      );
      createTimeButtons();
      scrollDown(200);
    };

    const handleEarnSecond = () => {
      onButtonClick("До 80 000 рублей");
      removeEventListeners();
      createQuestion(
        `Сколько времени в неделю Вы готовы уделять для комфортной работы?`
      );
      createTimeButtons();
      scrollDown(200);
    };

    const handleEarnThird = () => {
      onButtonClick("от 150 000 рублей");
      removeEventListeners();
      createQuestion(
        `Сколько времени в неделю Вы готовы уделять для комфортной работы?`
      );
      createTimeButtons();
      scrollDown(200);
    };

    const handleEarnFourth = () => {
      onButtonClick("от 300 000 рублей");
      removeEventListeners();
      createQuestion(
        `Сколько времени в неделю Вы готовы уделять для комфортной работы?`
      );
      createTimeButtons();
      scrollDown(200);
    };

    const buttonFirst = document.createElement("button");
    buttonFirst.textContent = "До 50 000 рублей";
    buttonFirst.classList.add("button");
    buttonFirst.addEventListener("click", handleEarnFirst);

    const buttonSecond = document.createElement("button");
    buttonSecond.textContent = "До 80 000 рублей";
    buttonSecond.classList.add("button");
    buttonSecond.addEventListener("click", handleEarnSecond);

    const buttonThird = document.createElement("button");
    buttonThird.textContent = "от 150 000 рублей";
    buttonThird.classList.add("button");
    buttonThird.addEventListener("click", handleEarnThird);

    const buttonFourth = document.createElement("button");
    buttonFourth.textContent = "от 300 000 рублей";
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

  function createTimeButtons() {
    const answers = document.createElement("div");
    answers.classList.add("answers");
    answers.id = "answers__col";

    const handleEarnFirst = () => {
      onButtonClick("До часу");
      removeEventListeners();
      createForm();
      scrollDown(550);
    };

    const handleEarnSecond = () => {
      onButtonClick("Пару часов");
      removeEventListeners();
      createForm();
      scrollDown(550);
    };

    const handleEarnThird = () => {
      onButtonClick("Свыше трех часов");
      removeEventListeners();
      createForm();
      scrollDown(550);
    };

    const handleEarnFourth = () => {
      onButtonClick("Другое");
      removeEventListeners();
      createForm();
      scrollDown(550);
    };

    const buttonFirst = document.createElement("button");
    buttonFirst.textContent = "До часу";
    buttonFirst.classList.add("button");
    buttonFirst.addEventListener("click", handleEarnFirst);

    const buttonSecond = document.createElement("button");
    buttonSecond.textContent = "Пару часов";
    buttonSecond.classList.add("button");
    buttonSecond.addEventListener("click", handleEarnSecond);

    const buttonThird = document.createElement("button");
    buttonThird.textContent = "Свыше трех часов";
    buttonThird.classList.add("button");
    buttonThird.addEventListener("click", handleEarnThird);

    const buttonFourth = document.createElement("button");
    buttonFourth.textContent = "Другое";
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

  const handleClickNo = () => {
    saveAnswer(
      "Являетесь ли вы гражданином или резидентом Российской Федерации?",
      "Нет"
    );

    onButtonClick("Нет", 1000);
    createQuestion(
      "Извините, чтобы участвовать  в программе Вы должны быть совершеннолетним гражданином или резидентом РФ"
    );
    localStorage.setItem("unsuitable", false);
  };

  buttonYes.addEventListener("click", handleClickYes);
  buttonNo.addEventListener("click", handleClickNo);

  function onButtonClick(buttonValue, delay = 200) {
    const answer = document.createElement("div");
    answer.classList.add("answer");

    const timeSpan = document.createElement("span");
    timeSpan.classList.add("time");
    timeSpan.classList.add("answ");
    let currTime = new Date();
    let hours = currTime.getHours().toString().padStart(2, "0");
    let minutes = currTime.getMinutes().toString().padStart(2, "0");
    let time = `${hours}:${minutes}`;
    timeSpan.textContent = time;

    const status = document.createElement("img");
    status.classList.add("status");
    status.setAttribute("src", "./img/icons/sent1.svg");

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
    }, delay);
  }

  function createForm() {
    setTimeout(() => {
      form.classList.add("visible");
      formContainer.classList.add("visible");
      scrollDown(500);
    }, 800);
  }

  function scrollDown(height) {
    window.scrollBy({
      top: height,
      behavior: "smooth",
    });
  }
});
