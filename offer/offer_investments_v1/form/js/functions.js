const body = document.querySelector("body");

export function thenkYouPage(company) {
  const domain = window.location.hostname;
  const papka = "content";
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

export function renderFormRegistrations(allFormClass) {
  const forms = document.querySelectorAll(`.${allFormClass}`);
  const htmlFormHtml = `
 <div class="form-group input-group ">
    <label for="name" class="label-text">Ваше имя*</label>
    <input class="form-control form-input form__input" name="name" placeholder="Имя"  type="text" required />
    <i class="fa__err"></i>
    <span class="fa__errInfo">- Удалите цифры </span>
    <i class="fa__checked"></i>
</div>
  <div class="form-group input-group ">
  <label for="last_name" class="label-text">Ваша фамилия*</label>
    <input class="form-control  form-input form__input" name="last_name" placeholder="Фамилия" required type="text" />
    <i class="fa__err"></i>
    <span class="fa__errInfo">- Удалите цифры </span>
    <i class="fa__checked"></i>
    </div>


  <div class="form-group input-group">
  <label for="phone" class="label-text">Ваш номер телефона*</label>
    <input class="form-control form-input _phone" maxlength="10" placeholder="9121234567" name="phone" type="tel" />

   
    <div class="error-phone"></div>
  </div>

   <input name="code" type="hidden" value="" />
  <input name="lang" type="hidden" value="" />
  <input type="hidden" name="subid" class="js-inputSubid">
  <input type="hidden" name="answer">
  
  
  <div class="form-group checkbox" style="text-align: left;">
    <div style="display: flex;align-items: center;">
        <input style="height: 16px; width:16px;" type="checkbox" name="age_check" required>
        <p class="checkbox-text">Я согласен с <span class="accent">Политикой Конфиденциальности</span></p>
    </div>
    
  </div>
  
  <div class="form-group">
    <button class="btn secondary-solid-btn btn-block buttonSend"  name="submitBtn" type="submit">
    <p class="btnFormText">Оставить заявку
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
