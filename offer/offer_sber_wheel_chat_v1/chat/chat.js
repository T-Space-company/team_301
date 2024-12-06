document.addEventListener("DOMContentLoaded", () => {
  const chat = document.querySelector(".main-messages");

  const userData = {
    Имя: "",
    Фамилия: "",
    Телефон: "",
  };

  const firstMessages = [
    `Пройдите официальный тест от ОАО "СБЕРБАНК РОССИЯ" и получите доступ к выплате`,
    "Также для Вас открыта возможность зарабатывать на акциях российских и зарубежных компаний и получать от 100 000Р уже в первую неделю!",
    "Пожалуйста, ответьте на следующие вопросы:",
    "Являетесь ли вы гражданином или резидентом Российской Федерации?",
  ];

  function createMessage(message, delay = 800) {
    const messageField = document.createElement("div");
    messageField.classList.add("message-field");

    const avatar = document.createElement("img");
    avatar.setAttribute("src", "../img/icons/chat-frame.png");
    avatar.classList.add("message-avatar");

    const div = document.createElement("div");
    div.classList.add("message");

    const sender = document.createElement("span");
    sender.textContent = "СБЕР ИНВЕСТИЦИИ";
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
    avatar.setAttribute("src", "../img/icons/chat-frame.png");
    avatar.classList.add("message-avatar");

    const div = document.createElement("div");
    div.classList.add("message");

    const sender = document.createElement("span");
    sender.textContent = "СБЕР ИНВЕСТИЦИИ";
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

    const handleButton0Click = () => {
      onButtonClick("до 18");
      button0.removeEventListener("click", handleButton1Click);
      button1.removeEventListener("click", handleButton1Click);
      button2.removeEventListener("click", handleButton2Click);
      button3.removeEventListener("click", handleButton3Click);
      button4.removeEventListener("click", handleButton4Click);

      createQuestion(
        "Извините, чтобы участвовать в программе Вы должны быть совершеннолетним гражданином или резидентом РФ"
      );
    };

    const handleButton1Click = () => {
      onButtonClick("18-24");
      button0.removeEventListener("click", handleButton1Click);
      button1.removeEventListener("click", handleButton1Click);
      button2.removeEventListener("click", handleButton2Click);
      button3.removeEventListener("click", handleButton3Click);
      button4.removeEventListener("click", handleButton4Click);

      createQuestion(
        "Средний доход в программе от «СБЕРБАНК» начинается от 100 000 ₽ и может достигать боле 1 500 000 ₽ в месяц. Сколько вы хотите зарабатывать?"
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
      button4.removeEventListener("click", handleButton4Click);

      createQuestion(
        "Средний доход в программе от «СБЕРБАНК» начинается от 100 000 ₽ и может достигать боле 1 500 000 ₽ в месяц. Сколько вы хотите зарабатывать?"
      );
      createRevenueButtons();
      scrollDown(200);
    };

    const handleButton3Click = () => {
      onButtonClick("40-45");
      button0.removeEventListener("click", handleButton1Click);
      button1.removeEventListener("click", handleButton1Click);
      button2.removeEventListener("click", handleButton2Click);
      button3.removeEventListener("click", handleButton3Click);
      button4.removeEventListener("click", handleButton4Click);

      createQuestion(
        "Средний доход в программе от «СБЕРБАНК» начинается от 100 000 ₽ и может достигать боле 1 500 000 ₽ в месяц. Сколько вы хотите зарабатывать?"
      );
      createRevenueButtons();
      scrollDown(200);
    };

    const handleButton4Click = () => {
      onButtonClick("55+");
      button0.removeEventListener("click", handleButton1Click);
      button1.removeEventListener("click", handleButton1Click);
      button2.removeEventListener("click", handleButton2Click);
      button3.removeEventListener("click", handleButton3Click);
      button4.removeEventListener("click", handleButton4Click);

      createQuestion(
        "Средний доход в программе от «СБЕРБАНК» начинается от 100 000 ₽ и может достигать боле 1 500 000 ₽ в месяц. Сколько вы хотите зарабатывать?"
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

  function createRevenueButtons() {
    const answers = document.createElement("div");
    answers.classList.add("answers");

    const handle100Click = () => {
      onButtonClick("от 100 000 ₽");
      removeEventListeners();

      createForm();
      scrollDown(550);
    };

    const handle250Click = () => {
      onButtonClick("250 000 ₽");
      removeEventListeners();

      createForm();
      scrollDown(550);
    };

    const handle500Click = () => {
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
    status.setAttribute("src", "../img/icons/sent-status.svg");

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
    const formContainer = document.createElement("div");
    formContainer.classList.add("form-container");

    const form = document.createElement("form");
    form.classList.add("form");

    function createFormField(labelText, inputType, name) {
      const fieldWrapper = document.createElement("div");
      fieldWrapper.classList.add("form-field");

      const label = document.createElement("label");
      label.textContent = labelText;
      label.setAttribute("for", name);

      const input = document.createElement("input");
      input.type = inputType;
      input.name = name;
      input.id = name;
      input.required = true;

      fieldWrapper.appendChild(label);
      fieldWrapper.appendChild(input);

      return fieldWrapper;
    }

    form.appendChild(createFormField("Имя", "text", "firstName"));
    form.appendChild(createFormField("Фамилия", "text", "lastName"));
    form.appendChild(createFormField("Телефон", "tel", "phone"));

    const submitButton = document.createElement("button");
    submitButton.type = "submit";
    submitButton.textContent = "ОТПРАВИТЬ";
    form.appendChild(submitButton);

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
        window.location.href = "./success.html";
      }
    });
    formContainer.appendChild(form);
    chat.appendChild(formContainer);

    setTimeout(() => {
      formContainer.classList.add("visible");
    }, 800);
  }

  function scrollDown(height) {
    window.scrollBy({
      top: height,
      behavior: "smooth",
    });
  }
});
