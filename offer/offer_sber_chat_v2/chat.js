document.addEventListener("DOMContentLoaded", () => {
  const chat = document.querySelector(".main-messages");
  const input = document.getElementById("chat-input");
  const sendButton = document.getElementById("chat-send");
  const sendIcon = document.getElementById("send-icon");
  const form = document.querySelector(".form-wrapper");
  const formContainer = document.querySelector(".form-container");

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
    "Пройдите официальный тест от ПАО «СБЕРБАНК РОССИЯ» и получите доступ к платформе!",
    "Поздравляю! Теперь от Сбер Банк для Вас открыта возможность зарабатывать на акциях российских и зарубежных компаний и получать от 87 000 ₽ уже с первых недель!",
    "Пожалуйста, ответьте на следующие вопросы:",
    "Вы являетесь гражданином Российской Федерации (есть ли у вас Российское гражданство)?",
  ];

  function showTypingIndicator(callback, message, delay = 400) {
    const messageField = document.createElement("div");
    messageField.classList.add("message-field");

    const avatar = document.createElement("img");
    avatar.setAttribute("src", "./img/icons/avatar.svg");
    avatar.classList.add("message-avatar");

    const typingDiv = document.createElement("div");
    typingDiv.classList.add("message", "typing-visible"); // Ensure visibility

    // Add typing animation
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
    }, 200);

    setTimeout(() => {
      typingDiv.innerHTML = "";
      callback(typingDiv, message, delay);
    }, 800);
  }

  function createMessage(messageContainer, message, delay = 800) {
    messageContainer.classList.remove("typing-visible");
    messageContainer.classList.add("message");

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

  function handleSendAnswer() {
    let message = input.value.trim();
    if (message === "") return;

    onButtonClick(message);
    disableChatInput();

    if (input.dataset.validation === "age") {
      saveAnswer("Сколько вам лет?", message);
      if (parseInt(message, 10) < 24) {
        createQuestion(
          "К сожалению, доступ к платформе могут получить только совершеннолетние граждане Российской Федерации"
        );
        localStorage.setItem("unsuitable", "false");
        return;
      }

      setTimeout(() => {
        createQuestion("С какого вы города?");
        enableChatInput("city");
        scrollDown(600);
      }, 200);
    } else if (input.dataset.validation === "city") {
      saveAnswer("С какого вы города?", message);

      setTimeout(() => {
        createQuestion("Был ли у вас опыт в инвестициях?");
        createExperienceButtons();
        scrollDown(600);
      }, 200);
    } else if (input.dataset.validation === "sum") {
      saveAnswer(
        "От какой суммы в месяц вы хотите зарабатывать на пассивном доходе?",
        message
      );
      setTimeout(() => {
        createQuestion("Откуда вы узнали о нашей платформе?");
        createInfoButtons();
        scrollDown(600);
      }, 200);
    }
  }

  function enableChatInput(validationType) {
    input.removeAttribute("disabled");
    input.focus();

    input.dataset.validation = validationType;
    input.removeEventListener("input", validateInput);
    input.addEventListener("input", validateInput);

    sendButton.removeEventListener("click", handleSendAnswer);
    sendButton.addEventListener("click", handleSendAnswer);
    sendButton.classList.add("pulse");
    sendIcon.style.fill = "#006012";
  }

  function disableChatInput() {
    input.setAttribute("disabled", "");
    input.removeEventListener("input", validateInput);
    sendButton.removeEventListener("click", handleSendAnswer);
    sendButton.classList.remove("pulse");
    sendIcon.style.fill = "#808080";
    input.value = "";
  }

  function validateInput(event) {
    let value = event.target.value.trim();

    switch (event.target.dataset.validation) {
      case "age":
        event.target.value = value
          .replace(/\D/g, "")
          .replace(/^0+/, "")
          .slice(0, 2);
        break;
      case "city":
        event.target.value = value
          .replace(/[^а-яА-ЯёЁ\s-]/g, "")
          .replace(/\s{2,}/g, " ")
          .slice(0, 20);
        break;
      case "sum":
        event.target.value = value
          .replace(/\D/g, "")
          .replace(/^0+/, "")
          .slice(0, 8);
        break;
    }
  }

  const handleClickYes = () => {
    onButtonClick("Да");
    saveAnswer("Вы являетесь гражданином Российской Федерации?", "Да");
    createQuestion("Сколько вам лет?");
    enableChatInput("age");
  };

  const handleClickNo = () => {
    onButtonClick("Нет");
    createQuestion(
      "К сожалению, доступ к платформе могут получить только совершеннолетние граждане Российской Федерации."
    );
    localStorage.setItem("unsuitable", "false");
  };

  function createInfoButtons() {
    const answers = document.createElement("div");
    answers.classList.add("answers");
    answers.id = "answers__col";

    const handleEarnFirst = () => {
      saveAnswer("Откуда вы узнали о нашей платформе?", "Реклама в интернете");
      onButtonClick("Реклама в интернете");
      removeEventListeners();
      createQuestion("С какой периодичностью вы планируете выводить средства?");
      createScheduleButtons();
      scrollDown(600);
    };

    const handleEarnSecond = () => {
      saveAnswer("Откуда вы узнали о нашей платформе?", "От друзей");
      onButtonClick("От друзей");
      removeEventListeners();
      createQuestion("С какой периодичностью вы планируете выводить средства?");
      createScheduleButtons();
      scrollDown(600);
    };

    const handleEarnThird = () => {
      saveAnswer("Откуда вы узнали о нашей платформе?", "Реклама в играх");
      onButtonClick("Реклама в играх");
      removeEventListeners();
      createQuestion("С какой периодичностью вы планируете выводить средства?");
      createScheduleButtons();
      scrollDown(600);
    };

    const buttonFirst = document.createElement("button");
    buttonFirst.textContent = "Реклама в интернете";
    buttonFirst.classList.add("button");
    buttonFirst.addEventListener("click", handleEarnFirst);

    const buttonSecond = document.createElement("button");
    buttonSecond.textContent = "От друзей";
    buttonSecond.classList.add("button");
    buttonSecond.addEventListener("click", handleEarnSecond);

    const buttonThird = document.createElement("button");
    buttonThird.textContent = "Реклама в играх";
    buttonThird.classList.add("button");
    buttonThird.addEventListener("click", handleEarnThird);

    answers.appendChild(buttonFirst);
    answers.appendChild(buttonSecond);
    answers.appendChild(buttonThird);
    chat.appendChild(answers);

    setTimeout(() => {
      answers.classList.add("visible");
    }, 800);

    function removeEventListeners() {
      buttonFirst.removeEventListener("click", handleEarnFirst);
      buttonSecond.removeEventListener("click", handleEarnSecond);
      buttonThird.removeEventListener("click", handleEarnThird);
    }
  }

  function createExperienceButtons() {
    const answers = document.createElement("div");
    answers.classList.add("answers");
    answers.id = "answers__col";

    const handleExpFirst = () => {
      saveAnswer("Был ли у вас опыт в инвестициях?", "Был успешный");
      onButtonClick("Был успешный");
      removeEventListeners();
      createQuestion(
        "От какой суммы в месяц вы хотите зарабатывать на пассивном доходе?"
      );
      enableChatInput("sum");
      scrollDown(600);
    };

    const handleExpSecond = () => {
      saveAnswer("Был ли у вас опыт в инвестициях?", "Был неудачный");
      onButtonClick("Был неудачный");
      removeEventListeners();
      createQuestion(
        "От какой суммы в месяц вы хотите зарабатывать на пассивном доходе?"
      );
      enableChatInput("sum");
      scrollDown(600);
    };

    const handleExpThird = () => {
      saveAnswer("Был ли у вас опыт в инвестициях?", "Не было");
      onButtonClick("Не было");
      removeEventListeners();
      createQuestion(
        "От какой суммы в месяц вы хотите зарабатывать на пассивном доходе?"
      );
      enableChatInput("sum");
      scrollDown(600);
    };

    const buttonFirst = document.createElement("button");
    buttonFirst.textContent = "Был успешный";
    buttonFirst.classList.add("button");
    buttonFirst.addEventListener("click", handleExpFirst);

    const buttonSecond = document.createElement("button");
    buttonSecond.textContent = "Был неудачный";
    buttonSecond.classList.add("button");
    buttonSecond.addEventListener("click", handleExpSecond);

    const buttonThird = document.createElement("button");
    buttonThird.textContent = "Не было";
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

  function createFinalButtons() {
    const answers = document.createElement("div");
    answers.classList.add("answers");
    answers.id = "answers__col";

    const handleExpFirst = () => {
      saveAnswer(
        "Хотите ли использовать личного помощника?",
        "Хочу разобраться сам"
      );
      onButtonClick(
        "Хочу разобраться сам, но понимаю, что буду зарабатывать меньше"
      );
      removeEventListeners();
      createForm();
      scrollDown(1000);
    };

    const handleExpSecond = () => {
      saveAnswer(
        "Хотите ли использовать личного помощника?",
        "Готов воспользоваться"
      );
      onButtonClick(
        "Готов воспользоваться советами специалиста, чтобы улучшить свои результаты"
      );
      removeEventListeners();
      createForm();
      scrollDown(1000);
    };

    const buttonFirst = document.createElement("button");
    buttonFirst.textContent =
      "Хочу разобраться сам, но понимаю, что буду зарабатывать меньше";
    buttonFirst.classList.add("button");
    buttonFirst.addEventListener("click", handleExpFirst);

    const buttonSecond = document.createElement("button");
    buttonSecond.textContent =
      "Готов воспользоваться советами специалиста, чтобы улучшить свои результаты";
    buttonSecond.classList.add("button");
    buttonSecond.addEventListener("click", handleExpSecond);

    answers.appendChild(buttonFirst);
    answers.appendChild(buttonSecond);
    chat.appendChild(answers);

    setTimeout(() => {
      answers.classList.add("visible");
    }, 800);

    function removeEventListeners() {
      buttonFirst.removeEventListener("click", handleExpFirst);
      buttonSecond.removeEventListener("click", handleExpSecond);
    }
  }

  function createScheduleButtons() {
    const answers = document.createElement("div");
    answers.classList.add("answers");
    answers.id = "answers__col";

    const handleSchedule = (schedule) => {
      saveAnswer(
        "С какой периодичностью вы планируете выводить средства?",
        schedule
      );
      onButtonClick(schedule);
      showTypingIndicator(
        createMessage,
        "Согласно нашей статистике, клиенты, использующие бесплатного личного помощника, увеличивают доходность своих инвестиций на 83,3% по сравнению с теми, кто действует самостоятельно."
      );
      createFinalButtons();
      scrollDown(600);
    };

    const schedules = ["Раз в неделю", "Раз в месяц", "Раз в квартал"];

    schedules.forEach((schedule) => {
      const button = document.createElement("button");
      button.textContent = schedule;
      button.classList.add("button");
      button.addEventListener("click", () => handleSchedule(schedule));
      answers.appendChild(button);
    });

    chat.appendChild(answers);
    setTimeout(() => {
      answers.classList.add("visible");
    }, 800);
  }

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
      scrollDown(800);
    }, 600);
  }

  function createForm() {
    setTimeout(() => {
      form.classList.add("visible");
      formContainer.classList.add("visible");
      scrollDown(700);
    }, 1400);
  }

  function scrollDown(height) {
    setTimeout(() => {
      window.scrollBy({
        top: height,
        behavior: "smooth",
      });
    }, 410);
  }
});
