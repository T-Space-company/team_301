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
    <title>Автоматическая торговая система</title>
    <link rel="stylesheet" href="./assets/css/styles.css" />
    <link
      rel="shortcut icon"
      href="./assets/img/logo_app.svg"
      type="image/x-icon"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-chart-financial"></script>
    <script src="https://cdn.jsdelivr.net/npm/moment"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-moment"></script>

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
  <body class="body">
    <main class="main">
      <section id="screen1" class="screen intro">
        <div class="intro__wrapper">
          <div class="intro__head">
            <h1 class="intro__heading">
              Автоматическая торговая система под контролем ведущих финансовых
              структур России
            </h1>
            <div class="intro__icons">
              <img src="./assets/img/logo_sb.svg" alt="Logo" />
              <img src="./assets/img/logo_mf.svg" alt="Logo" />
              <img src="./assets/img/logo_app.svg" alt="Logo" />
              <img src="./assets/img/logo_sbrf.svg" alt="Logo" />
            </div>
          </div>
          <video
            src="./assets/img/main_vid.mp4"
            controls
            class="intro__video mobile"
            poster="./assets/img/main.png"
          ></video>
          <ul class="intro__list">
            <li class="intro__item">
              Запустите алгоритм – система зарабатывает за вас без риска
            </li>
            <li class="intro__item">Подойдет людям без опыта</li>
            <li class="intro__item">
              Первые пользователи уже вывели от 100 000₽! Программа доступна
              ограниченному числу участников
            </li>
          </ul>
          <button type="button" class="intro__button" id="start-btn">
            Активировать автоматическую торговлю
          </button>
        </div>
        <video
          src="./assets/img/main_vid.mp4"
          controls
          class="intro__video desktop"
          poster="./assets/img/main.png"
        ></video>
      </section>
      <section id="screen2" class="screen trading hidden">
        <div class="intro__icons">
          <img src="./assets/img/logo_sb.svg" alt="Logo" />
          <img src="./assets/img/logo_mf.svg" alt="Logo" />
          <img src="./assets/img/logo_app.svg" alt="Logo" />
          <img src="./assets/img/logo_sbrf.svg" alt="Logo" />
        </div>
        <div class="trading__main">
          <button
            type="button"
            class="trading__button-desktop hidden"
            id="trading-btn-desktop"
          >
            Забрать доход
          </button>
          <div class="trading__headings">
            <h2 class="trading__heading" id="heading1">
              Подключение к системе
            </h2>
            <h2 class="trading__heading" id="heading2">Проверка ID</h2>
          </div>
          <h2 class="trading__profit hidden" id="profit"></h2>
          <div class="trading__chart" id="main-chart">
            <canvas id="chartCanvas"></canvas>
          </div>
          <button
            type="button"
            class="trading__button hidden mobile"
            id="trading-btn"
          >
            Забрать доход
          </button>
        </div>
      </section>
      <!--------- QUESTION 1 --------->
      <div id="modal-1" class="modal hidden">
        <div class="modal__content">
          <span class="modal__preheading"
            >Проверка соответствия перед выводом средств</span
          >
          <h2 class="modal__question">Вы гражданин РФ?</h2>
          <div class="modal__actions">
            <button
              class="modal__button modal__button--first modal__button--yes"
            >
              Да
            </button>
            <button
              class="modal__button modal__button--first modal__button--no"
            >
              <a href="err.html">Нет</a>
            </button>
          </div>
        </div>
      </div>
      <!--------- QUESTION 2 --------->
      <div id="modal-2" class="modal hidden">
        <div class="modal__content">
          <span class="modal__preheading"
            >Проверка соответствия перед выводом средств</span
          >
          <h2 class="modal__question">Выберите ваш возраст</h2>
          <div class="modal__actions">
            <button
              class="modal__button modal__button--second modal__button--18"
            >
              <a href="err.html"> до 18 лет </a>
            </button>
            <button
              class="modal__button modal__button--second modal__button--25"
            >
              18-25 лет
            </button>
            <button
              class="modal__button modal__button--second modal__button--40"
            >
              25-40 лет
            </button>
            <button
              class="modal__button modal__button--second modal__button--55"
            >
              40-55 лет
            </button>
            <button
              class="modal__button modal__button--second modal__button--55+"
            >
              55+ лет
            </button>
          </div>
        </div>
      </div>
      <!--------- QUESTION 3 --------->
      <div id="modal-3" class="modal hidden">
        <div class="modal__content">
          <span class="modal__preheading"
            >Проверка соответствия перед выводом средств</span
          >
          <h2 class="modal__question">Есть ли у вас опыт инвестиций?</h2>
          <div class="modal__actions">
            <button
              class="modal__button modal__button--third modal__button--yes"
            >
              Да, я инвестировал ранее
            </button>
            <button
              class="modal__button modal__button--third modal__button--no"
            >
              Нет, но хочу разобраться
            </button>
          </div>
        </div>
      </div>
      <!--------- QUESTION 4 --------->
      <div id="modal-4" class="modal hidden">
        <div class="modal__content">
          <span class="modal__preheading"
            >Проверка соответствия перед выводом средств</span
          >
          <h2 class="modal__question">Какой доход вас интересует?</h2>
          <div class="modal__actions">
            <button class="modal__button modal__button--fourth">
              50 000 - 100 000₽
            </button>
            <button class="modal__button modal__button--fourth">
              от 100 000₽
            </button>
            <button class="modal__button modal__button--fourth">
              Хочу увеличить свои накопления
            </button>
          </div>
        </div>
      </div>
      <!--------- QUESTION 5 --------->
      <div id="modal-5" class="modal hidden">
        <div class="modal__content">
          <span class="modal__preheading"
            >Проверка соответствия перед выводом средств</span
          >
          <h2 class="modal__question">
            Как бы вы хотели использовать прибыть 104 728₽?
          </h2>
          <div class="modal__actions">
            <button class="modal__button modal__button--fifth">
              Потратить на нужды
            </button>
            <button class="modal__button modal__button--fifth">
              Инвестировать часть прибыли
            </button>
            <button class="modal__button modal__button--fifth">
              Оставить в системе, для пассивного дохода
            </button>
          </div>
        </div>
      </div>
      <!--------- QUESTION 6 --------->
      <div id="modal-6" class="modal hidden">
        <div class="modal__content">
          <span class="modal__preheading"
            >Проверка соответствия перед выводом средств</span
          >
          <h2 class="modal__question">
            Какую сумму инвестиций вы готовы рассмотреть для стабильного
            пассивного дохода?
          </h2>
          <div class="modal__actions">
            <button class="modal__button modal__button--sixth">
              Минимальный старт – 10 000₽
            </button>
            <button class="modal__button modal__button--sixth">
              Я готов внести больше (30 000₽+)
            </button>
            <button class="modal__button modal__button--sixth">
              Я пока не думал, но хочу узнать подробнее 
            </button>
          </div>
        </div>
      </div>
      <!--------- FORM --------->
      <div id="modal-form" class="modal hidden">
        <div class="modal__content">
          <div class="form-wrapper">
            <form
              class="form _main-form contact-form freg thin rounded"
              id="main-form"
              method="post"
            >
              <div class="text-block-6">
                <h2 class="form-heading" style="text-align: center">
                  <span class="heading-accent">Оставьте заявку</span>
                  <br />
                  для вывода средств
                </h2>
              </div>
              <input type="hidden" id="utm_medium" value='<?= $_GET['utm_medium'] ?>'>
              <input type="hidden" id="campaing_id" value='<?= $_GET['campaing_id'] ?>'>
              <input type="hidden" id="slug" value='<?= $_GET['slug'] ?>'>
              <input type="hidden" id="bge" value='<?= $_GET['bge'] ?>'> <input
              type="hidden" id="source" value='<?= $_GET['source'] ?>'>
            </form>
          </div>
        </div>
      </div>
    </main>
    <script type="module" src="./assets/js/main.js"></script>
    <script src="loadAssets.js?v=321"></script>

    <script>
      window.onload = function () {
        var err = localStorage.getItem("unsuitable");
        var thx = localStorage.getItem("thanks");
        if (err && err === "false") {
          const fileErr = "err.html";
          window.location.href = `${fileErr}${window.location.search}`;
        } else if (thx && thx === "true") {
          const fileThx = "thanks-page.php";
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
          const fileThx = "thanks-page.php";
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
