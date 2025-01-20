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
  const fileThenk = "thanks-page.php";

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
 <div class="form-group input-group ">
    <label class="input-label">
    <span>Ваше имя</span>
    <input class="form__input form-control form-input form__input text-field w-input" name="name" placeholder="Brian"  type="text" required />
    <i class="fa__err"></i>
    <span class="fa__errInfo">- Удалите пробелы и/или цифры <br>- Поле не может быть пустым <br> - Имя и фамилия не должны совпадать</span>
    <i class="fa__checked"></i>
    </label>
</div>
<div class="form-group input-group ">
    <label class="input-label">
    <span>Ваша фамилия</span>
    <input class="form__input form-control  form-input form__input text-field w-input" name="last_name" placeholder="Clark" required type="text" />
    <i class="fa__err"></i>
    <span class="fa__errInfo">- Удалите пробелы и/или цифры <br>- Поле не может быть пустым <br> - Имя и фамилия не должны совпадать</span>
    <i class="fa__checked"></i>
    </label>
    </div>


  <div class="form-group input-group">
    <label class="input-label">
    <span>Номер телефона</span>
    <input class="form__input form-control form-input _phone" maxlength="10" placeholder="(123) 456 - 7890" name="phone" type="tel" />
    <div class="error-phone"></div>
    </label>
  </div>

 <div class="socials-phone form-group input-group">
    <label class="input-label--second">
    <span>Пожалуйста, введите номер, привязанный к WhatsApp, Telegram или другому мессенджеру для удобной связи</span>
    <input class="form__input form-control form-input _phone" maxlength="10" placeholder="(123) 456 - 7890" name="phone" type="tel" />
    <div class="error-phone"></div>
    </label>
  </div>
  <div class="form-contacts header__contact--right" id="form-contacts">
            <a href=""
              ><svg
                class="icon"
                width="10"
                height="18"
                viewBox="0 0 10 18"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M8.79325 8.99833H6.3228V18H2.95216V8.99833H0.705078V5.89776H2.95216V4.07409C2.95216 1.53362 3.63895 0 6.6195 0H9.10664V3.10391H7.55301C6.39613 3.10391 6.32611 3.54399 6.32611 4.34081V5.89443H9.12664L8.79325 8.99833Z"
                  fill="currentColor"
                />
              </svg>
            </a>
            <a href="">
              <svg
                class="icon"
                width="19"
                height="18"
                viewBox="0 0 19 18"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M5.88267 0H13.9493C15.2663 0.000882984 16.5291 0.524439 17.4603 1.45568C18.3916 2.38692 18.9151 3.6497 18.916 4.96667V13.0333C18.9142 14.35 18.3904 15.6123 17.4594 16.5433C16.5283 17.4744 15.266 17.9982 13.9493 18H5.88267C4.56597 17.9982 3.30371 17.4744 2.37266 16.5433C1.44161 15.6123 0.917779 14.35 0.916016 13.0333V4.96667C0.917779 3.64997 1.44161 2.3877 2.37266 1.45665C3.30371 0.525604 4.56597 0.00176383 5.88267 0ZM16.3313 15.4153C16.9631 14.7835 17.3184 13.9268 17.3193 13.0333V4.96667C17.3193 4.07289 16.9643 3.21571 16.3323 2.58372C15.7003 1.95172 14.8431 1.59667 13.9493 1.59667H5.88267C4.98916 1.59755 4.13252 1.95288 3.50071 2.58469C2.86891 3.2165 2.51356 4.07316 2.51267 4.96667V13.0333C2.51444 13.9266 2.87005 14.7827 3.50167 15.4143C4.13328 16.046 4.98943 16.4016 5.88267 16.4033H13.9493C14.8428 16.4024 15.6995 16.0471 16.3313 15.4153ZM14.7494 3.00667C14.4394 3.00755 14.1423 3.1311 13.9231 3.35033C13.7038 3.56956 13.5803 3.86664 13.5794 4.17667C13.5798 4.36883 13.6274 4.55795 13.7182 4.72732C13.809 4.89669 13.9401 5.04109 14.0999 5.14777C14.2597 5.25445 14.4434 5.32012 14.6346 5.33898C14.8258 5.35783 15.0188 5.3293 15.1963 5.2559C15.3739 5.1825 15.5307 5.06648 15.6528 4.91811C15.7749 4.76973 15.8586 4.59357 15.8965 4.40518C15.9343 4.21678 15.9252 4.02197 15.8699 3.83793C15.8146 3.6539 15.7149 3.48632 15.5794 3.35001C15.359 3.13031 15.0606 3.00686 14.7494 3.00667ZM9.91604 4.36003C8.99834 4.36003 8.10125 4.63216 7.3382 5.142C6.57516 5.65185 5.98043 6.37652 5.62924 7.22437C5.27805 8.07222 5.18617 9.00517 5.3652 9.90524C5.54424 10.8053 5.98614 11.6321 6.63506 12.281C7.28397 12.9299 8.11076 13.3718 9.01083 13.5509C9.9109 13.7299 10.8438 13.638 11.6917 13.2868C12.5395 12.9356 13.2642 12.3409 13.7741 11.5779C14.2839 10.8148 14.556 9.91773 14.556 9.00002C14.5552 7.76969 14.066 6.59 13.196 5.72003C12.3261 4.85005 11.1464 4.36091 9.91604 4.36003ZM9.91604 12.0267C9.31399 12.0267 8.72545 11.8481 8.2249 11.5136C7.72436 11.179 7.3343 10.7035 7.10405 10.1472C6.87381 9.59093 6.81373 8.97885 6.93142 8.38841C7.04912 7.79797 7.33931 7.2557 7.76526 6.83022C8.19122 6.40473 8.7338 6.11515 9.32437 5.9981C9.91494 5.88105 10.527 5.94179 11.083 6.17264C11.639 6.4035 12.1141 6.79409 12.4481 7.295C12.7821 7.79591 12.96 8.38463 12.9594 8.98669C12.9607 9.38719 12.8829 9.78401 12.7306 10.1544C12.5782 10.5248 12.3543 10.8615 12.0715 11.1451C11.7888 11.4288 11.4529 11.6538 11.083 11.8074C10.7131 11.961 10.3165 12.04 9.91604 12.04V12.0267Z"
                  fill="currentColor"
                />
              </svg>
            </a>
            <a href=""
              ><svg
                class="icon"
                width="19"
                height="18"
                viewBox="0 0 19 18"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M11.4546 7.56493L17.9307 0H16.4157L10.7553 6.56604L6.21039 0.00333035H0.91626L7.78863 10.0089L0.91626 18H2.52783L8.48455 11.0411L13.2626 18H18.6532L11.4546 7.56493ZM14.0384 16.7614L6.86965 6.39956L3.28367 1.20533H5.54779L7.94182 4.69478L16.216 16.7481H14.0384V16.7614Z"
                  fill="currentColor"
                />
              </svg>
            </a>
            <a href="">
              <svg
                class="icon"
                width="19"
                height="18"
                viewBox="0 0 19 18"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M13.1349 2.15784C12.1055 1.65172 10.9736 1.38901 9.82654 1.39H9.8232C8.49472 1.39014 7.19022 1.74393 6.0437 2.41503C4.89719 3.08613 3.94998 4.05035 3.2994 5.20863C2.64882 6.36691 2.31832 7.67751 2.34184 9.00578C2.36535 10.3341 2.74202 11.6321 3.43319 12.7667L3.76652 13.3333L3.54655 13.9567L2.87988 15.8833L5.02319 15.2433L5.59318 15.07L6.1132 15.3667C7.10851 15.9368 8.22159 16.2706 9.36641 16.3421C10.5112 16.4136 11.6572 16.221 12.7157 15.7791C13.7742 15.3373 14.717 14.658 15.4712 13.7937C16.2254 12.9295 16.7709 11.9034 17.0654 10.7948C17.36 9.68625 17.3957 8.52478 17.1699 7.40017C16.9441 6.27555 16.4628 5.2179 15.7631 4.30892C15.0635 3.39994 14.1642 2.66396 13.1349 2.15784ZM5.34013 1.21523C6.70008 0.419283 8.24745 -0.000165736 9.8232 5.40132e-07H9.82654C11.1864 -0.000473905 12.5282 0.311618 13.7483 0.912171C14.9684 1.51272 16.0341 2.38567 16.8632 3.4636C17.6922 4.54152 18.2625 5.79558 18.5298 7.12892C18.7972 8.46226 18.7545 9.83921 18.405 11.1534C18.0556 12.4676 17.4087 13.684 16.5145 14.7085C15.6202 15.7329 14.5025 16.5382 13.2475 17.062C11.9926 17.5858 10.634 17.8142 9.27677 17.7294C7.91953 17.6447 6.59994 17.2491 5.41988 16.5733L0.653198 18L2.24654 13.4933C1.42611 12.148 0.97871 10.6085 0.950358 9.03298C0.922007 7.45749 1.31371 5.90286 2.0852 4.52889C2.8567 3.15492 3.98018 2.01118 5.34013 1.21523ZM8.03296 11.0833C9.24629 12.1433 11.7063 13.2167 12.8829 13.1433C12.8829 13.1433 14.5863 11.8567 14.5496 11.27C14.5129 10.6833 12.6396 9.02335 12.0863 9.65001C11.8747 9.88967 11.7499 10.1235 11.6434 10.3229C11.4714 10.645 11.3473 10.8774 10.9829 10.9C10.3929 10.9367 9.75961 10.3867 9.14294 9.83335C9.13358 9.82494 9.12421 9.81654 9.11484 9.80814C8.50728 9.2631 7.89573 8.71449 7.85962 8.14001C7.83695 7.77934 8.05385 7.6251 8.35275 7.41257C8.53727 7.28136 8.75303 7.12794 8.96297 6.89001C9.51297 6.26668 7.65294 4.61335 7.05294 4.65001C6.45294 4.68668 5.38627 6.52335 5.38627 6.52335C5.4596 7.69668 6.81962 10.0233 8.03296 11.0833Z"
                  fill="currentColor"
                />
              </svg>
            </a>
            <a href="">
              <svg
                class="icon"
                width="19"
                height="16"
                viewBox="0 0 19 16"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M18.656 0.873402C18.6396 0.809075 18.607 0.750022 18.5613 0.701905C18.5156 0.653788 18.4583 0.618221 18.3949 0.598611C18.1584 0.551847 17.9137 0.568917 17.6859 0.648071C17.6859 0.648071 1.92666 6.31427 1.02534 6.94079C0.830241 7.07544 0.767056 7.15513 0.734081 7.24581C0.57745 7.69372 1.06382 7.89156 1.06382 7.89156L5.12524 9.21331C5.19294 9.22985 5.26363 9.22985 5.33133 9.21331C6.25463 8.628 14.6275 3.34103 15.1111 3.16791C15.1881 3.14592 15.2431 3.16791 15.2293 3.22561C15.0342 3.9016 7.76323 10.3702 7.76323 10.3702C7.74488 10.3931 7.72923 10.4179 7.71653 10.4444L7.33732 14.4756C7.33732 14.4756 7.17792 15.7094 8.41448 14.4756C9.28282 13.6045 10.1264 12.8763 10.5496 12.5218C11.9456 13.4836 13.4487 14.5525 14.0972 15.1103C14.2063 15.2157 14.3356 15.2979 14.4772 15.3522C14.6188 15.4065 14.77 15.4317 14.9215 15.4263C15.5371 15.4044 15.7102 14.7284 15.7102 14.7284C15.7102 14.7284 18.5817 3.16791 18.6779 1.62083C18.6779 1.46695 18.6999 1.37077 18.7027 1.26635C18.7055 1.13383 18.6898 1.00156 18.656 0.873402Z"
                  fill="currentColor"
                />
              </svg>
            </a>
          </div>

  <div class="custom-checkbox-container form-group input-group group-checkbox">
  
  <label class="switch input-label--switch custom-checkbox">
  <input class="form-control form-input form-checkbox custom-checkbox__input" type="checkbox" style="width: 40px; height: 40px" required>
      <svg
      class="custom-checkbox__svg"
      xmlns="http://www.w3.org/2000/svg"
      viewBox="0 0 24 24"
    >
      <rect
        class="custom-checkbox__box"
        x="2"
        y="2"
        width="20"
        height="20"
        rx="4"
        ry="4"
        fill="white"
        stroke="#17384B"
        stroke-width="2"
      ></rect>
      <path
        class="custom-checkbox__arrow"
        d="M6 12l4 4 8-8"
        stroke="transparent"
        stroke-width="3"
        fill="none"
        stroke-linecap="round"
        stroke-linejoin="round"
      ></path>
    </svg>
</label>
  <span class="custom-checkbox__text">
    Я согласен с Политикой конфиденциальности Move Visa. Подробную информацию о том, как мы обрабатываем ваши персональные данные, можно найти
    <a href="#">здесь*</a>
  </span>
  </div>

  <div class="form-group">
    <button class="contact__button btn secondary-solid-btn btn-block buttonSend submit-button"  name="submitBtn" type="submit">
    <p class="btnFormText">Отправить
    </p>
    </button>
  </div>



   <input name="code" type="hidden" value="" />
  <input name="lang" type="hidden" value="" />
  <input type="hidden" name="subid" class="js-inputSubid">
  <input type="hidden" name="answer">
  
  


  

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
