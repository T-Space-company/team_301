document.addEventListener("DOMContentLoaded", () => {
  const body = document.querySelector("body");
  const modal = document.getElementById("modal");
  const closeModalButton = document.querySelector(".modal-close");
  const formButtons = document.querySelectorAll(".form-button");
  const startListButton = document.querySelector(".start-list-btn");

  formButtons.forEach((btn) => {
    btn.addEventListener("click", () => {
      modal.classList.remove("hidden");
      body.style.overflow = "hidden";
    });
  });

  window.addEventListener("click", (event) => {
    if (event.target === modal) {
      modal.classList.add("hidden");
      body.style.overflow = "auto";
    }
  });

  closeModalButton.addEventListener("click", () => {
    modal.classList.add("hidden");
    body.style.overflow = "auto";
  });

  function updateButtonText() {
    if (window.innerWidth < 1024) {
      startListButton.textContent = "Регистрация";
    } else {
      startListButton.textContent = "Открыть счет";
    }
  }

  updateButtonText();

  function initializeSection(sectionSelector, contentData, mobileImages) {
    const section = document.querySelector(sectionSelector);
    if (!section) return;

    const buttons = section.querySelectorAll(".start__list-item button");
    const contentWrapper = section.querySelector(".start__content");
    const heading = section.querySelector(".start__content-heading");
    const text = section.querySelector(".start__content-text");
    const listItems = section.querySelectorAll(".start__list-item");
    const imageElement = section.querySelector("img");

    const isMobile = window.innerWidth <= 1024;

    function updateContent(index) {
      listItems.forEach((item) => item.classList.remove("active"));

      listItems[index].classList.add("active");

      if (isMobile && imageElement) {
        imageElement.src = mobileImages[index];
      } else {
        contentWrapper.style.backgroundImage = contentData[index].bgImage;
      }

      heading.textContent = contentData[index].heading;
      text.textContent = contentData[index].text;
    }

    buttons.forEach((button, index) => {
      button.addEventListener("click", () => updateContent(index));
    });
  }

  const startContentData = [
    {
      bgImage: "url(./assets/img/bg_start.png)",
      heading:
        "При открытии счета, новым пользователям, предоставляется личный менеджер!",
      text: "Ваш персональный менеджер проведет с вами первые 50 сделок – бесплатно! При депозите от 20000 рублей – первые 100 сделок бесплатные!",
    },
    {
      bgImage: "url('./assets/img/bg_start-2.jpeg')",
      heading: "Инвестируйте в популярные акции и облигации РФ",
      text: "Добавьте в портфель надежные ценные бумаги ведущих российских компаний стоимостью всего от 1000 ₽, которые заслужили доверие инвесторов и пользуются высоким спросом",
    },
    {
      bgImage: "url('./assets/img/bg_start-3.png')",
      heading: "Патриот AI-скринер",
      text: "Инвестируйте в самые перспективные бумаги на основе рекомендаций и детальной аналитики от искусственного интеллекта",
    },
  ];

  const startMobileImages = [
    "./assets/img/mobile/start_mob.png",
    "./assets/img/mobile/start_mob-2.png",
    "./assets/img/mobile/start_mob-3.png",
  ];

  const accessContentData = [
    {
      bgImage: "url('./assets/img/bg_access.png')",
      heading: "Счет для торговли на русских биржах",
      text: "Получите прямой доступ к биржам РФ и торгуйте отечественными ценными бумагами. Активы надежно хранятся у отечественного кастодиана",
    },
    {
      bgImage: "url('./assets/img/bg_access-2.png')",
      heading: "Опционы РФ: баланс между риском и прибылью",
      text: "Зарабатывайте как на растущем, так и на снижающемся рынке. Разрабатывайте собственные стратегии, которые позволяют застраховать себя от лишних рисков и максимизировать свою прибыль",
    },
  ];

  const accessMobileImages = [
    "./assets/img/mobile/access_mob.png",
    "./assets/img/mobile/access_mob-2.png",
  ];

  initializeSection(".section.start", startContentData, startMobileImages);
  initializeSection(".section.access", accessContentData, accessMobileImages);
});
