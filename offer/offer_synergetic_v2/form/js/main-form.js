import {
  regValitatorInputText,
  thenkYouPage,
  generationsModalErrors,
  renderFormRegistrations,
  validEmail,
  addLoader,
  removeLoader,
} from "./functions.js?v=2132227";

renderFormRegistrations("_main-form");
generationsModalErrors();

const settingObjForm = {
  postParams: {
    first_name: null,
    last_name: null,
    phone: null,
    country_code: null,
    utm_medium: null,
    landing: null,
    slug: null,
    source: null,
    campaing_id: null,

    _setParams: function (answers) {
      const getDataMask = document.querySelector(".iti__selected-dial-code");
      this.first_name = document.querySelector('input[name="name"]').value;
      this.last_name = document.querySelector('input[name="last_name"]').value;
      this.country_code = document.querySelector('input[name="code"]').value;
      this.landing = "Sber";
      this.slug = "301";
      this.source = "bigo";
      this.utm_medium = "69a3095c-2419-4b39-93a7-e2799ff93147";
      this.campaing_id = "Sber";
    },
  },
};

// Geo input Flags
const inputsPhone = document.querySelectorAll("._phone");

inputsPhone.forEach((phone) => {
  const iti = window.intlTelInput(phone, {
    allowDropdown: false, // Отключает выпадающий список стран
    formatOnDisplay: true,
    initialCountry: "RU", // Устанавливает Россию как начальную страну
    placeholderNumberType: "MOBILE",
    separateDialCode: true,
  });

  // Удаляем символ "+" при вводе
  phone.addEventListener("input", () => {
    phone.value = phone.value.replace("+", ""); // Убираем знак "+" из номера
  });

  // Добавляем обработчик countrychange для предотвращения смены страны
  phone.addEventListener("countrychange", () => {
    const selectedCountryCode = iti.getSelectedCountryData().iso2;
    if (selectedCountryCode !== "ru") {
      iti.setCountry("ru"); // Возвращаем Россию, если пытаются выбрать другую страну
    }
  });
});

function validPhoneNumber(inputArr) {
  const errorMap = [
    "Неверный номер",
    "Неверный код страны",
    "Слишком короткий номер телефона",
    "Слишком длинный номер телефона",
    "Неверный номер телефона",
  ];

  inputArr.forEach((item) => {
    const phoneInput = item;
    const phoneInt = window.intlTelInputGlobals.getInstance(phoneInput);

    if (phoneInt) {
      const errorContainer = phoneInput
        .closest(".form-group")
        .querySelector(".error-phone");

      if (!phoneInt.isValidNumber()) {
        const errorIndex = phoneInt.getValidationError();
        const errorMessage = errorMap[errorIndex] || "Пустое поле";
        console.log(errorMessage);

        errorContainer.innerText = errorMessage;
        errorContainer.style.display = "block";
        phoneInput.classList.add("isInvalid");
        phoneInput.classList.remove("valid");
      } else {
        phoneInput.classList.add("valid");
        phoneInput.classList.remove("isInvalid");
        errorContainer.innerText = "";
        errorContainer.style.display = "none";
      }
    }
  });
}

const modalError = document.querySelector(".modal-errors");

const formName = document.querySelectorAll('input[name="name"]');
const formLastName = document.querySelectorAll('input[name="last_name"]');
const formEmail = document.querySelectorAll('input[name="email"]');

//messageErrorsModal
const closeModal = document.querySelector(".modal-errors__close");
const modal_errors__content = document.querySelector(".modal-errors__content");
closeModal.addEventListener("click", () =>
  modalError.classList.remove("active")
);
//End messageErrorsModal

formName.forEach((input) => {
  input.addEventListener("input", function (e) {
    for (let i = 0; i < formName.length; i++) {
      formName[i].value = e.target.value;
    }
    formName.value = e.target.value;
  });
});

formLastName.forEach((input) => {
  input.addEventListener("input", function (e) {
    for (let i = 0; i < formLastName.length; i++) {
      formLastName[i].value = e.target.value;
    }
    formLastName.value = e.target.value;
  });
});

formEmail.forEach((input) => {
  input.addEventListener("input", function (e) {
    for (let i = 0; i < formEmail.length; i++) {
      formEmail[i].value = e.target.value;
    }
    formEmail.value = e.target.value;
  });
});

const allArraysInputs = [
  ...document.querySelectorAll('input[name="last_name"]'),
  ...document.querySelectorAll('input[name="name"]'),
  //   ...document.querySelectorAll('input[name="phone"]'),
  ...document.querySelectorAll('input[name="email"]'),
];
const allPhoneInput = document.querySelectorAll('input[name="phone"]');
let phonPlasholder = allPhoneInput.placeholder;

//Post data form
const allBtnSubmit = document.querySelectorAll(".buttonSend");
const btnFormText = document.querySelectorAll(".btnFormText");

const postData = async (data) => {
  addLoader(allBtnSubmit, btnFormText);
  thenkYouPage();
};


// Обработчик отправки формы
document.querySelectorAll("._main-form").forEach((form) => {
  form.addEventListener("submit", async (e) => {
    e.preventDefault();

    const inputs = form.querySelectorAll(
      'input[name="name"], input[name="last_name"], input[name="email"], ._phone'
    );
    const formErrorContent = form.querySelector(".fa__errInfo");

    const maskForm = form.querySelector(".iti__selected-dial-code");

    console.log(maskForm);
    const valuePhone = form.querySelector("._phone");

    settingObjForm.postParams.phone = `${maskForm.textContent}${valuePhone.value}`;

    // Вызов функций валидации для каждого поля
    regValitatorInputText(form.querySelectorAll('input[name="name"]'));
    regValitatorInputText(form.querySelectorAll('input[name="last_name"]'));
    validEmail(form.querySelectorAll('input[name="email"]'));
    validPhoneNumber([form.querySelector("._phone")]);

    // Проверяем, все ли поля валидны
    const isValidForm = Array.from(inputs).every((input) =>
      input.classList.contains("valid")
    );

    if (isValidForm) {
      addLoader(
        form.querySelectorAll(".buttonSend"),
        form.querySelectorAll(".btnFormText")
      );
      settingObjForm.postParams._setParams(); // Установка параметров
      await postData(settingObjForm.postParams); // Отправка данных
      removeLoader(
        form.querySelectorAll(".buttonSend"),
        form.querySelectorAll(".btnFormText")
      );
      formErrorContent.classList.remove("active"); // Скрываем сообщения об ошибке
    } else {
      formErrorContent.classList.add("active"); // Показываем сообщение об ошибке
    }

    // Обновление классов после проверки
    inputs.forEach((input) => {
      if (!input.classList.contains("valid")) {
        input.classList.add("isValid");
        input.classList.remove("valid");
      } else {
        input.classList.remove("isValid");
      }
    });
  });
});
