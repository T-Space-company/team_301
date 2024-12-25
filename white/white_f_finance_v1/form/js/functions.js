let htmlLang = document.documentElement.lang;
console.log(htmlLang);

const body = document.querySelector("body");

export function getParramUtm(value) {
  let params = new URLSearchParams(document.location.search);
  return params.get(value);
}

export function commentVal(answers) {
  let locationHr = window.location.href;
  let commentOffer = locationHr.split("?")[0];
  if (answers) {
    return `Offer: ${commentOffer}  ${answers}`;
  } else {
    return `Offer: ${commentOffer}`;
  }
}

export function thenkYouPage(company) {
  const domain = window.location.hostname;
  const papka = "content";
  const nameCompany = getParramUtm("nameCompany");
  const fileThenk = "thankyou-page.php";

  window.location.href = `${fileThenk}${window.location.search}`;
}

export function fbqLead(e) {
  fbq("track", "Lead");
}

export function validationForms(arrElemForm) {}

/**
 *
 * @param value поле имя и фамилия
 * @returns {boolean}
 */
export function regValitatorInputText(inputArr) {
  // const reg = /^([aA-zZ]{1,}\s[a-z]{1,23}|[аА-яЯ]{1,}\s?[а-я]{1,23})$/;
  // const reg = /^([aA-zZ]{2,}\s?[a-z]{1,23}|[аА-яЯ]{2,}\s?[а-я]{1,23})$/;
  const reg = /^[A-Za-zа-яёА-ЯЁЩЬЮЯҐЄІЇа-щьюяґєі \s]+$/;
  const formName = document.querySelector('input[name="name"]');
  const formLastName = document.querySelector('input[name="last_name"]');

  inputArr.forEach((item) => {
    if (reg.test(item.value)) {
      /*  console.log(reg.test(item.value)) */
      const nameValueSplitArr = formName.value.split(" ");
      const lastNameValueSplitArr = formLastName.value.split(" ");
      /*       debugger */
      /*  console.log(lastNameValueSplitArr[0]) */
      if (nameValueSplitArr.length === 2) {
        if (nameValueSplitArr[0] === nameValueSplitArr[1]) {
          item.classList.add("isValid");
          item.classList.remove("valid");
          return;
        }
      }
      for (let i = 0; i < nameValueSplitArr.length; i++) {
        for (let y = 0; y < lastNameValueSplitArr.length; y++) {
          if (nameValueSplitArr[i] === lastNameValueSplitArr[y]) {
            /*     console.log(nameValueSplitArr[i],lastNameValueSplitArr[y]) */
            item.classList.remove("valid");
            item.classList.add("isValid");
            return false;
          } else {
            item.classList.add("valid");
            item.classList.remove("isValid");
          }
        }
      }
    } else {
      item.classList.add("isValid");
      item.classList.remove("valid");
    }
  });
  // return reg.test(input.value)
}

export function validEmail(inputArr) {
  const reg = /^.*@([a-z0-9-]+\.)+[a-z]{2,4}\s?$/;

  inputArr.forEach((item) => {
    if (reg.test(item.value)) {
      item.classList.add("valid");
      item.classList.remove("isValid");
    } else {
      item.classList.add("isValid");
      item.classList.remove("valid");
    }
  });
}

export const generationsCustomPassword = () => {
  const chars =
    "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
  const passwordLength = 9;
  let password = "";
  let num = Math.floor(Math.random() * 10);
  console.log(num);
  for (let i = 0; i < passwordLength; i++) {
    const randomNumber = Math.floor(Math.random() * chars.length);
    password += chars.substring(randomNumber, randomNumber + 1);
  }
  return password + num;
};

export function renderFormRegistrations(allFormClass) {
  const forms = document.querySelectorAll(`.${allFormClass}`);
  const htmlFormHtml = `
    <div class="form-group input-group margin-top">
    <input class="form-control form-input form__input" name="name" placeholder=""  type="text" required />
    <i class="fa__err"></i>
    <span class="fa__errInfo">- Удалите пробелы и/или цифры <br>- Поле не может быть пустым <br> - Имя и фамилия не должны совпадать</span>
    <i class="fa__checked"></i>
    </div>
    <div class="form-group input-group margin-top">
    <input class="form-control  form-input form__input" name="last_name" placeholder="" required type="text" />
    <i class="fa__err"></i>
    <span class="fa__errInfo">- Удалите пробелы и/или цифры <br>- Поле не может быть пустым <br> - Имя и фамилия не должны совпадать</span>
    <i class="fa__checked"></i>
    </div>
    
    
    <div class="form-group input-group margin-top">
    <input class="form-control form-input _phone" maxlength="10" placeholder="9121234567" name="phone" type="tel" />
    <div class="error-phone"></div>
    </div>
    
    <div class="form-group input-group group-checkbox">
    <label class="switch">
    <input class="form-control form-input form-checkbox" type="checkbox" required>
    <span class="slider round"></span>
    </label>
    <span class="checkbox-text" id="checkbox-text"></span>
    </div>
    
    <input name="code" type="hidden" value="" />
    <input name="lang" type="hidden" value="" />
    <input type="hidden" name="subid" class="js-inputSubid">
    <input type="hidden" name="answer">
    
    
    <div class="form-group">
    
    <button class="btn secondary-solid-btn btn-block buttonSend button--primary form__section__btn"  name="submitBtn" type="submit">
    <p class="btnFormText" id="btnFormText" style="color:white; font-weight: 800;">
    </p>
    </button>
    </div>
    
    
    
    
    `;
  forms.forEach((form, index) => {
    form.insertAdjacentHTML("beforeend", htmlFormHtml);
  });
}

export function generationsModalErrors() {
  const html = `
    <div class="modal-errors">
    <div class="modal-errors__block">
    <button class="modal-errors__close">
    <svg width="30" height="30" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" d="M5.646 5.646a.5.5 0 000 .708l8 8a.5.5 0 00.708-.708l-8-8a.5.5 0 00-.708 0z"
    clip-rule="evenodd" />
    <path fill-rule="evenodd" d="M14.354 5.646a.5.5 0 010 .708l-8 8a.5.5 0 01-.708-.708l8-8a.5.5 0 01.708 0z"
    clip-rule="evenodd" />
    </svg>
    </button>
    <div class="modal-errors__content">
    <div class="wrapper">
    <div class="bloc">
    <div class="wrapperAlert">
    
    <div class="contentAlert">
    
    <div class="topHalf">
    
    <p><svg viewBox="0 0 512 512" width="100" title="check-circle">
    <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
    </svg></p>
    <h1>Congratulations</h1>
    
    <ul class="bg-bubbles">
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    </ul>
    </div>
    <div class="bottomHalf">
    <h2>
    Thank you for registering! <br>
    Expect a call from our experts!
    </h2>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    </div>
    </div>
    </div>
    `;

  body.insertAdjacentHTML("afterbegin", html);
}

export function preloaderFormSend() {
  const preloader = `
    <div class="preloaderWrapperForm">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    </div>
    `;
  body.insertAdjacentHTML("afterbegin", preloader);
}

export function addLoader(allBtnSubmit, btnFormText) {
  allBtnSubmit.forEach((btn) => {
    const loadingForm = document.createElement("img");
    loadingForm.src = "./form/img/spinner.gif";
    loadingForm.classList.add("loadBtn");
    btnFormText.forEach((element) => {
      element.style.opacity = "0";
    });
    btn.appendChild(loadingForm);
    btn.disabled = true;
  });
}

export function removeLoader(allBtnSubmit, btnFormText) {
  allBtnSubmit.forEach((btn) => {
    const loadingForm = document.querySelectorAll(".loadBtn");

    loadingForm.forEach((element) => {
      element.style.display = "none";
    });
    btnFormText.forEach((element) => {
      element.style.opacity = "1";
      btn.disabled = false;
    });
  });
}

setTimeout(() => {
  let formName = document.querySelector('input[name="name"]');

  let formLastName = document.querySelector('input[name="last_name"]');

  let formCheckboxText = document.getElementById("checkbox-text");

  let formButtonText = document.getElementById("btnFormText");

  if (htmlLang === "ru") {
    formName.placeholder = "Имя";
    formLastName.placeholder = "Фамилия";
    formButtonText.textContent = "Зарегистрироваться";
    formCheckboxText.innerHTML = `Даю согласие на обработку персональных данных в соответствии c <span class="policy-privacy">Политикой конфиденциальности</span>`;
  } else if (htmlLang === "en") {
    formName.placeholder = "Name";
    formLastName.placeholder = "Last name";
    formButtonText.textContent = "Sign up";
    formCheckboxText.innerHTML = `I consent to the processing of my personal data in accordance with the <span class="policy-privacy">Privacy Policy</span>`;
  }
}, 100);

//  Получение language и записывание в  инпут

// END Получение SUB_ID и записывание в инпут
