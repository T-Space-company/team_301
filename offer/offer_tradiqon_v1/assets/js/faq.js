document.addEventListener("DOMContentLoaded", function () {
  const container = document.querySelector(".div-3");

  function createCard(questionText) {
    const card = document.createElement("div");
    card.className = "card";
    card.innerHTML = `
        <div class="heading-9">${questionText}</div>
        <img class="img-2" src="https://c.animaapp.com/mb56iw47WclffO/img/chevron-up.svg" />
      `;
    return card;
  }

  function createCard2(questionText, answerText) {
    const card2 = document.createElement("div");
    card2.className = "card-2";
    card2.innerHTML = `
        <div class="container-2">
          <div class="heading-10">${questionText}</div>
        </div>
        <div class="sub-container">
          <p class="heading-10">${answerText}</p>
          <img class="img-2" src="https://c.animaapp.com/mb56iw47WclffO/img/chevron-up-2.svg" />
        </div>
      `;
    return card2;
  }

  const faqData = [
    {
      question: "Нужен ли опыт?",
      answer: "Нет, опыт не требуется. Всё необходимое вы узнаете в процессе.",
    },
    {
      question: "Будет ли запись?",
      answer:
        "Да, мы отправим запись всем зарегистрированным участникам. Даже если не сможете присутствовать онлайн, вы ничего не пропустите.",
    },
    {
      question: "Это действительно бесплатно?",
      answer:
        "Да, участие полностью бесплатное для всех зарегистрированных пользователей.",
    },
  ];
  function renderInitial() {
    container.innerHTML = "";
    faqData.forEach((faq, index) => {
      const card = createCard(faq.question);

      // Entire .card is clickable
      card.addEventListener("click", () => openCard(index));

      container.appendChild(card);
    });
  }

  function openCard(openIndex) {
    container.innerHTML = "";
    faqData.forEach((faq, index) => {
      if (index === openIndex) {
        const card2 = createCard2(faq.question, faq.answer);

        // .sub-container click will close
        const subContainer = card2.querySelector(".sub-container");
        if (subContainer) {
          subContainer.addEventListener("click", () => renderInitial());
        }

        container.appendChild(card2);
      } else {
        const card = createCard(faq.question);

        // .card click to open
        card.addEventListener("click", () => openCard(index));

        container.appendChild(card);
      }
    });
  }

  renderInitial(); // Setup
});
