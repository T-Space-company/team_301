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
  const fileThenk = "confirm.php";

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
  const reg = /^[A-Za-zА-Яа-яЁёҐЄІЇґєі]+(?:\s[A-Za-zА-Яа-яЁёҐЄІЇґєі]+)*$/; // Only letters and spaces
  inputArr.forEach((item) => {
    const trimmedValue = item.value.trim(); // Remove extra spaces

    if (reg.test(trimmedValue) && trimmedValue.length >= 3) {
      item.classList.add("valid");
      item.classList.remove("isValid");
    } else {
      item.classList.add("isValid");
      item.classList.remove("valid");
    }
  });
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

export function validPhoneNumber(inputArr) {
  const reg = /^\+?[0-9]{7,14}$/;

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
 <div class="input--wrapper form-input-main form-group input-group wrap-input100 m-b-26">
    <input class="form--input input100 form-control form-input form__input" name="name" placeholder="First Name" required type="text" />
    <i class="fa__err"></i>
    <span class="fa__errInfo">- Remove spaces and numbers <br> - Surname and first name must not be the same</span>
    <i class="fa__checked"></i>
    <span class="focus-input100"></span>
</div>
  <div class="input--wrapper form-input-main form-group input-group wrap-input100 m-b-26">
    <input class="form--input input100 form-control  form-input form__input" name="last_name" placeholder="Last Name" required type="text" />
    <i class="fa__err"></i>
    <span class="fa__errInfo">- Remove spaces and numbers <br> - Surname and first name must not be the same</span>
    <i class="fa__checked"></i>
    <span class="focus-input100"></span>
  </div>
  
  <div class="input--wrapper form-input-main form-group input-group wrap-input100 m-b-26">
    <input class="form--input input100 form-control  form-input form__input" name="email" placeholder="Email" required type="text" />
    <i class="fa__err"></i>
    <span class="fa__errInfo">- format test@gmail.com</span>
    <i class="fa__checked"></i>
    <span class="focus-input100"></span>
  </div>
  
  <div class="input--wrapper form-input-main form-group input-group wrap-input100 m-b-26">
    <input class="form--input input100 form-control form-input _phone"  name="phone" type="tel" style="width: 100%" required/>
    <span class="focus-input100"></span>
  </div>

  <span class="form-error-content">Invalid phone number</span>
  <input name="code" type="hidden" value="" />
  <input name="lang" type="hidden" value="" />
  <input type="hidden" name="subid" class="js-inputSubid">
  <input type="hidden" name="answer">
  

  <div class=" form-group container-login100-form-btn form-group-btn">
    <button class="btn form--btn secondary-solid-btn btn-block buttonSend login100-form-btn"  name="submitBtn" type="submit">
    <p class="leadSubmit button form__btn btnFormText" style="text-transform: uppercase;">Register
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

//  Получение language и записывание в  инпут

// END Получение SUB_ID и записывание в инпут
