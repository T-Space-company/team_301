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
    <title>BingX</title>
    <link rel="stylesheet" href="./assets/styles/normalize.css" />
    <link rel="stylesheet" href="./assets/styles/styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
      rel="stylesheet"
    />

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
      <div class="header__logo">
        <img src="./assets/img/logo.svg" alt="Image" />
      </div>
    </header>
    <main class="main">
      <div class="main__content">
        <h1 class="content__heading">
          Начни зарабатывать без опыта и сложностей – уже сегодня!
        </h1>

        <p class="content__text">
          Минимальный депозит в 10 000₽ дает первый доход уже в день
          регистрации!
        </p>
        <p class="content__text bottom">
          Мгновенный вывод – деньги работают на тебя, а не наоборот!
        </p>
        <button type="button" class="content__button" id="button-start">
          Начать зарабатывать
        </button>
      </div>
      <video
        src="./assets/img/vid-mob.mov"
        class="content__vid"
        autoplay
        muted
        loop
      ></video>
      <ul class="content__list">
        <li class="list__item">btc/usdt (+2.07%)</li>
        <li class="list__item">eth/usdt (+2.19%)</li>
        <li class="list__item">xrp/usdt (+1.12%)</li>
        <li class="list__item">sol/usdt (+1.79%)</li>
        <li class="list__item">ton/usdt (+3.14%)</li>
        <li class="list__item">trx/usdt (+0.97%)</li>
        <li class="list__item">btc/usdt (+2.07%)</li>
        <li class="list__item">eth/usdt (+2.19%)</li>
        <li class="list__item">xrp/usdt (+1.12%)</li>
        <li class="list__item">sol/usdt (+1.79%)</li>
        <li class="list__item">ton/usdt (+3.14%)</li>
        <li class="list__item">trx/usdt (+0.97%)</li>
        <li class="list__item">btc/usdt (+2.07%)</li>
        <li class="list__item">eth/usdt (+2.19%)</li>
        <li class="list__item">xrp/usdt (+1.12%)</li>
        <li class="list__item">sol/usdt (+1.79%)</li>
        <li class="list__item">ton/usdt (+3.14%)</li>
        <li class="list__item">trx/usdt (+0.97%)</li>
        <li class="list__item">btc/usdt (+2.07%)</li>
        <li class="list__item">eth/usdt (+2.19%)</li>
        <li class="list__item">xrp/usdt (+1.12%)</li>
        <li class="list__item">sol/usdt (+1.79%)</li>
        <li class="list__item">ton/usdt (+3.14%)</li>
        <li class="list__item">trx/usdt (+0.97%)</li>
      </ul>
      <!--------- QUESTION 1 --------->
      <div id="modal-1" class="modal hidden">
        <div class="modal__content">
          <p class="modal__question">Сколько вам лет?</p>
          <div class="modal__actions">
            <a href="err.html" class="modal__button--second">До 18 лет</a>
            <button class="modal__button--second modal1__btn" id="modal1-btn">
              18-24 года
            </button>
            <button class="modal__button--second modal1__btn" id="modal1-btn">
              40-55 года
            </button>
            <button class="modal__button--second modal1__btn" id="modal1-btn">
              55+ года
            </button>
          </div>
        </div>
      </div>
      <!--------- QUESTION 2 --------->
      <div id="modal-2" class="modal hidden">
        <div class="modal__content">
          <p class="modal__question">Вы гражданин РФ?</p>
          <div class="modal__actions horizontal">
            <button
              class="modal__button--second modal__button--yes"
              id="modal2-btn"
            >
              Да
            </button>
            <a href="err.html" class="modal__button--second">Нет</a>
          </div>
        </div>
      </div>
      <!--------- QUESTION 3 --------->
      <div id="modal-3" class="modal hidden">
        <div class="modal__content">
          <p class="modal__question">
            С какой суммы вы готовы начать на BingX?
          </p>
          <div class="modal__actions">
            <button class="modal__button--second modal3__btn">
              10 000₽-20 000₽
            </button>
            <button class="modal__button--second modal3__btn">
              20 000₽-50 000₽
            </button>
            <button class="modal__button--second modal3__btn">
              50 000₽-100 000₽
            </button>
            <button class="modal__button--second modal3__btn">100 000₽+</button>
          </div>
        </div>
      </div>
      <!--------- QUESTION 4 --------->
      <div id="modal-4" class="modal hidden">
        <div class="modal__content">
          <p class="modal__question">
            Cогласно нашей статистике, клиенты, использующие бесплатного личного
            помощника, увеличивают доходность своих инвестиций на 83,3% по
            сравнению с теми, кто действует самостоятельно
          </p>
          <div class="modal__actions">
            <button class="modal__button--second modal4__btn">
              Хочу разобраться сам, но понимаю, что буду зарабатывать меньше
            </button>
            <button class="modal__button--second modal4__btn">
              Готов воспользоваться советами специалиста, чтобы улучшить свои
              результаты
            </button>
          </div>
        </div>
      </div>
      <!--------- QUESTION 5 --------->
      <div id="modal-5" class="modal hidden">
        <div class="modal__content">
          <p class="modal__question">
            Как лучше связаться с вами? выберите один вариант
          </p>
          <div class="modal__actions">
            <button class="modal__button--second modal5__btn">WhatsUp</button>
            <button class="modal__button--second modal5__btn">Telegram</button>
            <button class="modal__button--second modal5__btn">
              Мобильный телефон
            </button>
          </div>
        </div>
      </div>
      <!--------- FORM --------->
      <div id="modal-form" class="modal hidden">
        <div class="modal__content">
          <form
            class="form _main-form contact-form freg thin rounded"
            id="main-form"
            method="post"
          >
            <div class="text-block-6">
              <h2 class="form-heading" style="text-align: center">
                Заполните форму
              </h2>
            </div>
            <input type="hidden" id="utm_medium" value='<?= $_GET['utm_medium'] ?>'>
            <input type="hidden" id="campaing_id" value='<?= $_GET['campaing_id'] ?>'>
            <input type="hidden" id="slug" value='<?= $_GET['slug'] ?>'> <input
            type="hidden" id="bge" value='<?= $_GET['bge'] ?>'> <input
            type="hidden" id="source" value='<?= $_GET['source'] ?>'>
          </form>
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
