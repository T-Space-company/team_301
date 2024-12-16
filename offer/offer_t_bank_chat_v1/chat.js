document.addEventListener("DOMContentLoaded", () => {
  const chat = document.querySelector(".main-messages");

  const userData = {
    Имя: "",
    Фамилия: "",
    Телефон: "",
  };

  const firstMessages = [
    `Пройдите официальный тест от ОАО “Т-Банк” и получите доступ к платформе!`,
    "Поздравляю! Теперь от Т-Банк для Вас открыта возможность зарабатывать на акциях российских и зарубежных компаний и получать от 87 000 ₽ уже с первых недель!",
    "Пожалуйста, ответьте на следующие вопросы:",
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

      createQuestion(
        "Как вы планируете распорядиться заработанными на платформе средствами?"
      );
      createRevenueButtons();
      scrollDown(200);
    };

    const handleButton2Click = () => {
      onButtonClick("25-40");
      button0.removeEventListener("click", handleButton1Click);
      button1.removeEventListener("click", handleButton1Click);
      button2.removeEventListener("click", handleButton2Click);
      button3.removeEventListener("click", handleButton3Click);

      createQuestion(
        "Как вы планируете распорядиться заработанными на платформе средствами?"
      );
      createRevenueButtons();
      scrollDown(200);
    };

    const handleButton3Click = () => {
      onButtonClick("55+");
      button0.removeEventListener("click", handleButton1Click);
      button1.removeEventListener("click", handleButton1Click);
      button2.removeEventListener("click", handleButton2Click);
      button3.removeEventListener("click", handleButton3Click);

      createQuestion(
        "Как вы планируете распорядиться заработанными на платформе средствами?"
      );
      createRevenueButtons();
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
    button3.textContent = "55+";
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
      onButtonClick("Куплю недвижимость/автомобиль");
      removeEventListeners();
      createMessage(
        "Спасибо за уделённое время и пройденный опрос! Теперь Вам открыт доступ к персональной платформе проекта “Т-Банк”"
      );
      createMessage(
        `Пожалуйста, <b>оставьте свои контактные данные для регистрации.</b>`,
        1600
      );
      createForm();
      scrollDown(550);
    };

    const handleEarnSecond = () => {
      onButtonClick("Куплю то, что давно хотел");
      removeEventListeners();
      createMessage(
        "Спасибо за уделённое время и пройденный опрос! Теперь Вам открыт доступ к персональной платформе проекта “Т-Банк”"
      );
      createMessage(
        `Пожалуйста, <b>оставьте свои контактные данные для регистрации.</b>`,
        1600
      );
      createForm();
      scrollDown(550);
    };

    const handleEarnThird = () => {
      onButtonClick("Буду инвестировать");
      removeEventListeners();
      createMessage(
        "Спасибо за уделённое время и пройденный опрос! Теперь Вам открыт доступ к персональной платформе проекта “Т-Банк”"
      );
      createMessage(
        `Пожалуйста, <b>оставьте свои контактные данные для регистрации.</b>`,
        1600
      );
      createForm();
      scrollDown(550);
    };

    const handleEarnFourth = () => {
      onButtonClick("Еще не решил");
      removeEventListeners();

      createMessage(
        "Спасибо за уделённое время и пройденный опрос! Теперь Вам открыт доступ к персональной платформе проекта “Т-Банк”"
      );
      createMessage(
        `Пожалуйста, <b>оставьте свои контактные данные для регистрации.</b>`,
        1600
      );
      createForm();
      scrollDown(550);
    };

    const buttonFirst = document.createElement("button");
    buttonFirst.textContent = "Куплю недвижимость/автомобиль";
    buttonFirst.addEventListener("click", handleEarnFirst);

    const buttonSecond = document.createElement("button");
    buttonSecond.textContent = "Куплю то, что давно хотел";
    buttonSecond.addEventListener("click", handleEarnSecond);

    const buttonThird = document.createElement("button");
    buttonThird.textContent = "Буду инвестировать";
    buttonThird.addEventListener("click", handleEarnThird);

    const buttonFourth = document.createElement("button");
    buttonFourth.textContent = "Еще не решил";
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
    const formWrapper = document.createElement("div");
    formWrapper.classList.add("form-wrapper");

    const formContainer = document.createElement("div");
    formContainer.classList.add("form-container");

    const avatar = document.createElement("img");
    avatar.setAttribute("src", "./img/icons/avatar.svg");
    avatar.classList.add("message-avatar");

    const formHeading = document.createElement("img");
    formHeading.setAttribute("src", "./img/chat_logo.svg");
    formHeading.classList.add("form-heading");

    const form = document.createElement("form");
    form.classList.add("form");

    function createFormField(label, inputType, name) {
      const fieldWrapper = document.createElement("div");
      fieldWrapper.classList.add("form-field");

      const input = document.createElement("input");
      input.type = inputType;
      input.name = name;
      input.id = name;
      input.required = true;
      input.placeholder = label;

      fieldWrapper.appendChild(input);

      return fieldWrapper;
    }
    form.appendChild(formHeading);
    form.appendChild(createFormField("Имя", "text", "firstName"));
    form.appendChild(createFormField("Фамилия", "text", "lastName"));
    form.appendChild(createFormField("+7 (921) 345-67-89", "tel", "phone"));

    const submitButton = document.createElement("button");
    submitButton.type = "submit";
    submitButton.textContent = "Завершить регистрацию";
    form.appendChild(submitButton);
    // form.appendChild(formRules);

    form.addEventListener("submit", (event) => {
      event.preventDefault();
      const formData = new FormData(form);
      const formValues = {};
      formData.forEach((value, key) => {
        formValues[key] = value;
      });

      const validationErrors = [];
      if (!formValues.firstName) {
        validationErrors.push("Имя не может быть пустым");
      }
      if (!formValues.lastName) {
        validationErrors.push("Фамилия не может быть пустой");
      }
      if (!formValues.phone || !/^\+?\d{10,15}$/.test(formValues.phone)) {
        validationErrors.push(
          "Неверный формат телефона. Пример: +7(921)3456789"
        );
      }

      if (validationErrors.length > 0) {
        alert("Ошибки валидации:\n" + validationErrors.join("\n"));
      } else {
        alert("Форма успешно отправлена!");
        userData["Имя"] = formValues.firstName;
        userData["Фамилия"] = formValues.lastName;
        userData["Телефон"] = formValues.phone;
        form.reset();
        localStorage.setItem("userData", JSON.stringify(userData));
        window.location.href = "../thankYou/thankyou.html";
      }
    });
    formContainer.appendChild(form);

    formWrapper.appendChild(avatar);
    formWrapper.appendChild(formContainer);
    chat.appendChild(formWrapper);

    setTimeout(() => {
      avatar.classList.add("visible");

      formContainer.classList.add("visible");
    }, 2400);
  }

  function scrollDown(height) {
    window.scrollBy({
      top: height,
      behavior: "smooth",
    });
  }
});
