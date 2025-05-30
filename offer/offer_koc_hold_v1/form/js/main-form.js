import {
  generationsCustomPassword,
  validPhoneNumber,
  getParramUtm,
  commentVal,
  regValitatorInputText,
  thenkYouPage,
  generationsModalErrors,
  renderFormRegistrations,
  validEmail,
  preloaderFormSend,
  addLoader,
  removeLoader,
} from "./functions.js?v=54645";

renderFormRegistrations("_main-form");
generationsModalErrors();

var url_string = window.location.href;
var url = new URL(url_string);
var affc = url.searchParams.get("affc");
var bxc = url.searchParams.get("bxc");
var key = url.searchParams.get("key");
var subId_a = url.searchParams.get("c_group") || "";

const settingObjForm = {
  postParams: {
    first_name: null,
    last_name: null,
    email: null,
    phone: null,
    password: null,
    country_code: null,
    landing: null,
    affc: null,
    bxc: null,
    key: null,
    subId_a: null,

    _setParams: function (answers) {
      const getDataMask = document.querySelector(".iti__selected-dial-code");
      this.first_name = document.querySelector('input[name="name"]').value;
      this.last_name = document.querySelector('input[name="last_name"]').value;
      this.email = document.querySelector('input[name="email"]').value;
      this.country_code = document.querySelector('input[name="code"]').value;
      this.landing = "kocholding";
      this.password = generationsCustomPassword();
      this.affc = affc;
      this.bxc = bxc;
      this.key = key;
      this.subId_a = subId_a;
    },
  },
};

//Geo input Flags
const inputsPhone = document.querySelectorAll("._phone");

inputsPhone.forEach((phone) => {
  window.intlTelInput(phone, {
    allowDropdown: false,
    formatOnDisplay: true,
    geoIpLookup: function (callback) {
      $.get(
        "https://ipinfo.io/json?token=0eae9fa3bf1674",
        function () {},
        "jsonp"
      ).always(function (resp) {
        const countryCode = resp && resp.country ? resp.country : "";
        document
          .querySelectorAll('input[name="code"]')
          .forEach((item) => (item.value = countryCode.toLocaleUpperCase()));
        callback(countryCode);
      });
    },
    initialCountry: "TR",
    placeholderNumberType: "MOBILE",
    separateDialCode: true,
  });
});
//Geo input Flags

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

  try {
    const response = await fetch("order.php", {
      method: "POST",
      body: JSON.stringify(data),
    });

    const result = await response.json();

    function leadTrack() {
      fbq("track", "Lead");
    }
    leadTrack();

    if (result?.success === true) {
      localStorage.setItem("thanks", true);

      window.location.href = result.redirectUrl;
    } else if (result?.success === false) {
      thenkYouPage();
    }
  } catch (error) {
    console.error("Ошибка:", error);
  }
};

const allForm = document.querySelectorAll("._main-form");
allForm.forEach((form) => {
  form.addEventListener("submit", (e) => {
    //PHONE VALIDATION
    const currentForm = e.target.closest("form");
    const phoneNumberCurrent = currentForm.querySelector(
      'input[name="phone"]'
    ).value;
    const mnc = currentForm.querySelector(
      ".iti__selected-dial-code"
    ).textContent;
    const formErrorContent = currentForm.querySelector(".form-error-content");

    const inputLanguage = currentForm.querySelector('input[name="lang"]');
    const lang = document.querySelector("html").getAttribute("lang");
    inputLanguage.value = lang;
    // console.log(formErrorContent)

    const maskForm = currentForm.querySelector(".iti__selected-dial-code");
    const valuePhone = currentForm.querySelector("._phone");
    const answerssValue = currentForm.querySelector('input[name="answer"]');

    settingObjForm.postParams.phone = `${maskForm.textContent}${valuePhone.value}`;
    e.preventDefault();
    regValitatorInputText(formName);
    regValitatorInputText(formLastName);
    validEmail(formEmail);

    validPhoneNumber(allPhoneInput, phonPlasholder);

    const validForm = allArraysInputs.every((item) => {
      return item.classList.contains("valid");
    });
    const validFormPhone = valuePhone.classList.contains("valid");

    if (validForm && validFormPhone) {
      addLoader(allBtnSubmit, btnFormText);
      //PHONE VALIDATION
      $.getJSON(
        `https://phonevalidation.abstractapi.com/v1/?api_key=4eecc1211a4b4ca2b0e56c03ac7addb5&phone=${mnc}${phoneNumberCurrent}`,
        function (data) {}
      ).then((data) => {
        if (data.valid) {
          settingObjForm.postParams._setParams(answerssValue.value);
          postData(settingObjForm.postParams);
          formErrorContent.classList.remove("active");
        } else if (!data.valid) {
          removeLoader(allBtnSubmit, btnFormText);
          formErrorContent.classList.add("active");
        }
      });
      for (let i = 0; i < allArraysInputs.length; i++) {
        allArraysInputs[i].classList.remove("valid");
      }
    }
  });
});

function messageErrorsModal() {
  modalError.classList.add("active");
}

//Рекапча

const inpuMaskFun = () => {
  $(function () {
    const inputPlacholder = document.querySelector("._phone");
    let result = "";
    for (let i = 0; i < inputPlacholder.placeholder.length; i++) {
      if (
        inputPlacholder.placeholder[i] !== " " &&
        inputPlacholder.placeholder[i] !== "-"
      ) {
        result += 9;
      }
    }
    phonPlasholder = result;
    inputPlacholder.value = "";
    $.mask.definitions["~"] = "[+-]";

    $("._phone").mask(`${result}`);
  });
};
const itiPhoneClick = document.querySelectorAll("._phone");
itiPhoneClick.forEach((element) => {
  element.addEventListener("click", () => {
    inpuMaskFun();
  });
});
//Mask Phone

const test = document.querySelectorAll(".iti__flag-container");
test.forEach((element) => {
  element.addEventListener("click", () => {
    // const countryList = document.querySelector(".iti__country-list");
    // countryList.addEventListener("click", () => {
    //   inpuMaskFun();
    // });
    inpuMaskFun();
  });
});
