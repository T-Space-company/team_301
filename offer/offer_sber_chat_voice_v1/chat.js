document.addEventListener("DOMContentLoaded", () => {
  const startBtn = document.getElementById("start-btn");
  const startBlock = document.getElementById("start-block");
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
    `Пройдите официальный тест 
от ПАО «СБЕРБАНК РОССИЯ» 
и получите доступ к платформе!`,
    "Поздравляю! Теперь от Сбер Банк для Вас открыта возможность зарабатывать на акциях российских и зарубежных компаний и получать от 87 000 ₽ уже с первых недель!",
    "Пожалуйста, ответьте на следующие вопросы:",
    "Вы являетесь гражданином или резидентом Российской Федерации?",
  ];

  function showTypingIndicator(callback, message, delay = 400) {
    const messageField = document.createElement("div");
    messageField.classList.add("message-field");

    const avatar = document.createElement("img");
    avatar.setAttribute("src", "./img/icons/avatar.svg");
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

  const buttonYes = document.createElement("button");
  const buttonNo = document.createElement("button");
  buttonYes.classList.add("button");
  buttonNo.classList.add("button");
  buttonYes.textContent = "Да";
  buttonNo.textContent = "Нет";

  const handleClickYes = () => {
    saveAnswer(
      "Являетесь ли вы гражданином или резидентом Российской Федерации?",
      "Да"
    );

    onButtonClick("Да", 1000);
    stopAllAudio();
    const audio = new Audio("./audio/4.mp3");
    setTimeout(() => {
      audio.play();
    }, 400);
    createQuestion(`Сколько вам лет?`);

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
      setTimeout(() => {
        audioProfit.play();
      }, 400);
      createQuestion(`С какой целью Вы хотите увеличить достаток?`);
      createRevenueButtons();
      scrollDown(400);
    };

    const handleButton2Click = () => {
      saveAnswer("Сколько вам лет?", "25-40");
      onButtonClick("25-40");
      button0.removeEventListener("click", handleButton0Click);
      button1.removeEventListener("click", handleButton1Click);
      button2.removeEventListener("click", handleButton2Click);
      button3.removeEventListener("click", handleButton3Click);
      button4.removeEventListener("click", handleButton4Click);
      setTimeout(() => {
        audioProfit.play();
      }, 400);
      createQuestion(`С какой целью Вы хотите увеличить достаток?`);
      createRevenueButtons();
      scrollDown(400);
    };

    const handleButton4Click = () => {
      saveAnswer("Сколько вам лет?", "40-55");
      onButtonClick("40-55");
      button0.removeEventListener("click", handleButton0Click);
      button1.removeEventListener("click", handleButton1Click);
      button2.removeEventListener("click", handleButton2Click);
      button3.removeEventListener("click", handleButton3Click);
      button4.removeEventListener("click", handleButton4Click);
      setTimeout(() => {
        audioProfit.play();
      }, 400);
      createQuestion(`С какой целью Вы хотите увеличить достаток?`);
      createRevenueButtons();
      scrollDown(400);
    };
    const handleButton3Click = () => {
      saveAnswer("Сколько вам лет?", "55+");
      onButtonClick("55+");
      button0.removeEventListener("click", handleButton0Click);
      button1.removeEventListener("click", handleButton1Click);
      button2.removeEventListener("click", handleButton2Click);
      button3.removeEventListener("click", handleButton3Click);
      button4.removeEventListener("click", handleButton4Click);
      setTimeout(() => {
        audioProfit.play();
      }, 400);
      createQuestion(`С какой целью Вы хотите увеличить достаток?`);
      createRevenueButtons();
      scrollDown(400);
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
      onButtonClick("Хочу обезопасить себя от кризиса");
      audioProfit.pause();
      audioProfit.currentTime = 0;
      setTimeout(() => {
        audioExp.play();
      }, 400);
      removeEventListeners();
      createQuestion(`Имеете ли Вы опыт в инвестировании?`);
      createProfitButtons();
      scrollDown(400);
    };

    const handleEarnSecond = () => {
      onButtonClick("Хочу получать дополнительный доход");
      audioProfit.pause();
      audioProfit.currentTime = 0;
      setTimeout(() => {
        audioExp.play();
      }, 400);
      removeEventListeners();
      createQuestion(`Имеете ли Вы опыт в инвестировании?`);
      createProfitButtons();
      scrollDown(400);
    };

    const handleEarnThird = () => {
      onButtonClick("Планирую развивать бизнес");
      audioProfit.pause();
      audioProfit.currentTime = 0;
      setTimeout(() => {
        audioExp.play();
      }, 400);
      removeEventListeners();
      createQuestion(`Имеете ли Вы опыт в инвестировании?`);
      createProfitButtons();
      scrollDown(400);
    };

    const handleEarnFourth = () => {
      onButtonClick("Хочу, чтобы моя семья не в чем не нуждалась");
      audioProfit.pause();
      audioProfit.currentTime = 0;
      setTimeout(() => {
        audioExp.play();
      }, 400);
      removeEventListeners();
      createQuestion(`Имеете ли Вы опыт в инвестировании?`);
      createProfitButtons();
      scrollDown(400);
    };

    const buttonFirst = document.createElement("button");
    buttonFirst.textContent = "Хочу обезопасить себя от кризиса";
    buttonFirst.classList.add("button");
    buttonFirst.addEventListener("click", handleEarnFirst);

    const buttonSecond = document.createElement("button");
    buttonSecond.textContent = "Хочу получать дополнительный доход";
    buttonSecond.classList.add("button");
    buttonSecond.addEventListener("click", handleEarnSecond);

    const buttonThird = document.createElement("button");
    buttonThird.textContent = "Планирую развивать бизнес";
    buttonThird.classList.add("button");
    buttonThird.addEventListener("click", handleEarnThird);

    const buttonFourth = document.createElement("button");
    buttonFourth.textContent = "Хочу, чтобы моя семья не в чем не нуждалась";
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

  const audioProfit = new Audio("./audio/7.mp3");
  const audioExp = new Audio("./audio/8.mp3");
  const audioTime = new Audio("./audio/9.mp3");
  const audioSpend = new Audio("./audio/10.mp3");
  const audioStat = new Audio("./audio/11.mp3");
  const audioFinal = new Audio("./audio/12.mp3");

  function createProfitButtons() {
    const answers = document.createElement("div");
    answers.classList.add("answers");
    answers.id = "answers__col";

    const handleEarnFirst = () => {
      onButtonClick("Да, успешно инвестирую по сей день");
      audioExp.pause();
      audioExp.currentTime = 0;
      setTimeout(() => {
        audioTime.play();
      }, 400);
      removeEventListeners();
      createQuestion(
        `Средний доход в программе от "Сбербанк России" начинается от 30 000 рублей и может достигать 1 245 000 ₽ Сколько Вы хотите зарабатывать?`
      );
      createTimeButtons();
      scrollDown(400);
    };

    const handleEarnSecond = () => {
      onButtonClick("Инвестировал ранее, но сейчас не уделяю этому времени");
      audioExp.pause();
      audioExp.currentTime = 0;
      setTimeout(() => {
        audioTime.play();
      }, 400);
      removeEventListeners();
      createQuestion(
        `Средний доход в программе от "Сбербанк России" начинается от 30 000 рублей и может достигать 1 245 000 ₽ Сколько Вы хотите зарабатывать?`
      );
      createTimeButtons();
      scrollDown(400);
    };

    const handleEarnThird = () => {
      onButtonClick("Нет, никогда прежде не инвестировал");
      audioExp.pause();
      audioExp.currentTime = 0;
      setTimeout(() => {
        audioTime.play();
      }, 400);
      removeEventListeners();
      createQuestion(
        `Средний доход в программе от "Сбербанк России" начинается от 30 000 рублей и может достигать 1 245 000 ₽ Сколько Вы хотите зарабатывать?`
      );
      createTimeButtons();
      scrollDown(400);
    };

    const buttonFirst = document.createElement("button");
    buttonFirst.textContent = "Да, успешно инвестирую по сей день";
    buttonFirst.classList.add("button");
    buttonFirst.addEventListener("click", handleEarnFirst);

    const buttonSecond = document.createElement("button");
    buttonSecond.textContent =
      "Инвестировал ранее, но сейчас не уделяю этому времени";
    buttonSecond.classList.add("button");
    buttonSecond.addEventListener("click", handleEarnSecond);

    const buttonThird = document.createElement("button");
    buttonThird.textContent = "Нет, никогда прежде не инвестировал";
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

  function createTimeButtons() {
    const answers = document.createElement("div");
    answers.classList.add("answers");
    answers.id = "answers__col";

    const handleEarnFirst = () => {
      onButtonClick("150 000 рублей");
      audioTime.pause();
      audioTime.currentTime = 0;
      setTimeout(() => {
        audioSpend.play();
      }, 400);
      removeEventListeners();
      createQuestion(
        `Как вы планируете распорядиться заработанными на платформе средствами?`
      );
      createSpendButtons();
      scrollDown(450);
    };

    const handleEarnSecond = () => {
      onButtonClick("330 000 рублей");
      audioTime.pause();
      audioTime.currentTime = 0;
      setTimeout(() => {
        audioSpend.play();
      }, 400);
      removeEventListeners();
      createQuestion(
        `Как вы планируете распорядиться заработанными на платформе средствами?`
      );
      createSpendButtons();

      scrollDown(450);
    };

    const handleEarnThird = () => {
      onButtonClick("1 000 000 рублей");
      audioTime.pause();
      audioTime.currentTime = 0;
      setTimeout(() => {
        audioSpend.play();
      }, 400);
      removeEventListeners();
      createQuestion(
        `Как вы планируете распорядиться заработанными на платформе средствами?`
      );
      createSpendButtons();
      scrollDown(450);
    };

    const buttonFirst = document.createElement("button");
    buttonFirst.textContent = "150 000 рублей";
    buttonFirst.classList.add("button");
    buttonFirst.addEventListener("click", handleEarnFirst);

    const buttonSecond = document.createElement("button");
    buttonSecond.textContent = "330 000 рублей";
    buttonSecond.classList.add("button");
    buttonSecond.addEventListener("click", handleEarnSecond);

    const buttonThird = document.createElement("button");
    buttonThird.textContent = "1 000 000 рублей";
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

  function createSpendButtons() {
    const answers = document.createElement("div");
    answers.classList.add("answers");
    answers.id = "answers__col";

    const handleEarnFirst = () => {
      onButtonClick("Куплю недвижимость/автомобиль");
      audioSpend.pause();
      audioSpend.currentTime = 0;
      setTimeout(() => {
        audioStat.play();
      }, 400);
      removeEventListeners();
      createQuestion(
        `Согласно нашей статистике, клиенты, использующие бесплатного личного помощника, увеличивают доходность своих инвестиций на 87,3% по сравнению с теми, кто действует самостоятельно`
      );
      createStatButtons();
      scrollDown(700);
    };

    const handleEarnSecond = () => {
      onButtonClick("Куплю то, что давно хотел");
      audioSpend.pause();
      audioSpend.currentTime = 0;
      setTimeout(() => {
        audioStat.play();
      }, 400);
      removeEventListeners();
      createQuestion(
        `Согласно нашей статистике, клиенты, использующие бесплатного личного помощника, увеличивают доходность своих инвестиций на 87,3% по сравнению с теми, кто действует самостоятельно`
      );
      createStatButtons();
      scrollDown(700);
    };

    const handleEarnThird = () => {
      onButtonClick("Планирую развивать бизнес");
      audioSpend.pause();
      audioSpend.currentTime = 0;
      setTimeout(() => {
        audioStat.play();
      }, 400);
      removeEventListeners();
      createQuestion(
        `Согласно нашей статистике, клиенты, использующие бесплатного личного помощника, увеличивают доходность своих инвестиций на 87,3% по сравнению с теми, кто действует самостоятельно`
      );
      createStatButtons();
      scrollDown(700);
    };

    const handleEarnFourth = () => {
      onButtonClick("Еще не решил/решила");
      audioSpend.pause();
      audioSpend.currentTime = 0;
      setTimeout(() => {
        audioStat.play();
      }, 400);
      removeEventListeners();
      createQuestion(
        `Согласно нашей статистике, клиенты, использующие бесплатного личного помощника, увеличивают доходность своих инвестиций на 87,3% по сравнению с теми, кто действует самостоятельно`
      );
      createStatButtons();
      scrollDown(700);
    };

    const buttonFirst = document.createElement("button");
    buttonFirst.textContent = "Куплю недвижимость/автомобиль";
    buttonFirst.classList.add("button");
    buttonFirst.addEventListener("click", handleEarnFirst);

    const buttonSecond = document.createElement("button");
    buttonSecond.textContent = "Куплю то, что давно хотел";
    buttonSecond.classList.add("button");
    buttonSecond.addEventListener("click", handleEarnSecond);

    const buttonThird = document.createElement("button");
    buttonThird.textContent =
      "Буду вкладывать далее, чтобы средства приумножались";
    buttonThird.classList.add("button");
    buttonThird.addEventListener("click", handleEarnThird);

    const buttonFourth = document.createElement("button");
    buttonFourth.textContent = "Еще не решил/решила";
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

  function createStatButtons() {
    const answers = document.createElement("div");
    answers.classList.add("answers");
    answers.id = "answers__col";

    const handleEarnFirst = () => {
      onButtonClick(
        "Хочу разобраться сам, но понимаю, что буду зарабатывать меньше"
      );
      audioStat.pause();
      audioStat.currentTime = 0;
      setTimeout(() => {
        audioFinal.play();
      }, 400);
      removeEventListeners();
      createQuestion(
        `Спасибо за уделённое время и пройденный опрос! Теперь Вам открыт доступ к персональной платформе проекта «Сбербанк Инвестиции». Пожалуйста, оставьте свои контактные данные для регистрации в проекте. Ваш личный менеджер получит данные и свяжется с Вами в течении одного рабочего дня!`
      );
      createForm();
      scrollDown(800);
    };

    const handleEarnSecond = () => {
      onButtonClick(
        "Готов воспользоваться советами специалиста, чтобы улучшить свои результаты"
      );
      audioStat.pause();
      audioStat.currentTime = 0;
      setTimeout(() => {
        audioFinal.play();
      }, 400);
      removeEventListeners();
      createQuestion(
        `Спасибо за уделённое время и пройденный опрос! Теперь Вам открыт доступ к персональной платформе проекта «Сбербанк Инвестиции». Пожалуйста, оставьте свои контактные данные для регистрации в проекте. Ваш личный менеджер получит данные и свяжется с Вами в течении одного рабочего дня!`
      );
      createForm();
      scrollDown(800);
    };

    const buttonFirst = document.createElement("button");
    buttonFirst.textContent =
      "Хочу разобраться сам, но понимаю, что буду зарабатывать меньше";
    buttonFirst.classList.add("button");
    buttonFirst.addEventListener("click", handleEarnFirst);

    const buttonSecond = document.createElement("button");
    buttonSecond.textContent =
      "Готов воспользоваться советами специалиста, чтобы улучшить свои результаты";
    buttonSecond.classList.add("button");
    buttonSecond.addEventListener("click", handleEarnSecond);

    answers.appendChild(buttonFirst);
    answers.appendChild(buttonSecond);
    chat.appendChild(answers);

    setTimeout(() => {
      answers.classList.add("visible");
    }, 800);

    function removeEventListeners() {
      buttonFirst.removeEventListener("click", handleEarnFirst);
      buttonSecond.removeEventListener("click", handleEarnSecond);
    }
  }

  const handleClickNo = () => {
    saveAnswer(
      "Являетесь ли вы гражданином или резидентом Российской Федерации?",
      "Нет"
    );
    stopAllAudio();

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

    const tail = document.createElement("img");
    tail.setAttribute("src", "./img/icons/avatar2.svg");
    tail.classList.add("answer-tail");

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
    answer.appendChild(tail);

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

  function startChat() {
    startBlock.classList.add("hidden");
    setTimeout(() => {
      startPlaylist();
      firstMessages.forEach((message, i) => {
        setTimeout(() => {
          showTypingIndicator(createMessage, message, 4000);
        }, i * 4000);
      });
    }, 400);

    const answers = document.createElement("div");
    answers.classList.add("answers");

    setTimeout(() => {
      answers.appendChild(buttonYes);
      answers.appendChild(buttonNo);
      chat.appendChild(answers);
    }, 16200);

    setTimeout(() => {
      answers.classList.add("visible");
    }, 16600);
  }

  startBtn.addEventListener("click", startChat);

  const tracks = [
    "./audio/1.mp3",
    "./audio/2.mp3",
    "./audio/3.mp3",
    "./audio/6.mp3",
  ];

  let currentTrack = 0;
  const audio = new Audio(tracks[currentTrack]);

  audio.addEventListener("ended", () => {
    currentTrack++;
    if (currentTrack < tracks.length) {
      audio.src = tracks[currentTrack];
      audio.play();
    }
  });

  // Function to start playing from the beginning
  function startPlaylist() {
    currentTrack = 0;
    audio.src = tracks[currentTrack];
    audio.play();
  }

  // Function to stop playback and reset
  function stopAllAudio() {
    audio.pause();
    audio.currentTime = 0;
  }
});
