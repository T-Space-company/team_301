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
    <title>Prostov Cash</title>
    <link rel="stylesheet" href="./assets/css/styles.css" />
    <link
      rel="shortcut icon"
      href="./assets/img/logo.svg"
      type="image/x-icon"
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
      <img src="./assets/img/logo.svg" alt="Icon" />
    </header>
    <main class="main">
      <p class="main__heading">
        Доверьтесь профессионалам и сделайте первый шаг к финансовой свободе!
      </p>
      <p class="main__descr mobile">
        Выбирай специалиста и начните сотрудничество уже сегодня!
      </p>
      <div class="main__people-wrapper">
        <div class="main__people">
          <div class="people__card">
            <div class="card__photo">
              <img src="./assets/img/p1.png" alt="Image" />
            </div>
            <div class="card__info">
              <span class="info__name">Виктор</span>
              <div class="info__points">
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
              </div>
              <span class="info__type">Доходность (%)</span>
              <div class="info__points">
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img
                  src="./assets/img/point.svg"
                  alt="Icon"
                  class="point inactive"
                />
                <img
                  src="./assets/img/point.svg"
                  alt="Icon"
                  class="point inactive"
                />
              </div>
              <span class="info__type">Месячный прирост</span>
              <div class="info__points">
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
              </div>
              <span class="info__type">Риск-менеджмент</span>
              <div class="info__count">
                <span class="count__num plus">283</span>
                <span class="count__num">/</span>
                <span class="count__num min">20</span>
              </div>
              <span class="info__type">Прибыльные сделки (мес.)</span>
            </div>
          </div>
          <div class="people__card">
            <div class="card__photo">
              <img src="./assets/img/p2.png" alt="Image" />
            </div>
            <div class="card__info">
              <span class="info__name">Алексей</span>
              <div class="info__points">
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img
                  src="./assets/img/point.svg"
                  alt="Icon"
                  class="point inactive"
                />
                <img
                  src="./assets/img/point.svg"
                  alt="Icon"
                  class="point inactive"
                />
              </div>
              <span class="info__type">Доходность (%)</span>
              <div class="info__points">
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
              </div>
              <span class="info__type">Месячный прирост</span>
              <div class="info__points">
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img
                  src="./assets/img/point.svg"
                  alt="Icon"
                  class="point inactive"
                />
                <img
                  src="./assets/img/point.svg"
                  alt="Icon"
                  class="point inactive"
                />
              </div>
              <span class="info__type">Риск-менеджмент</span>
              <div class="info__count">
                <span class="count__num plus">300</span>
                <span class="count__num">/</span>
                <span class="count__num min">42</span>
              </div>
              <span class="info__type">Прибыльные сделки (мес.)</span>
            </div>
          </div>
          <div class="people__card">
            <div class="card__photo">
              <img src="./assets/img/p3.png" alt="Image" />
            </div>
            <div class="card__info">
              <span class="info__name">Мария</span>
              <div class="info__points">
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img
                  src="./assets/img/point.svg"
                  alt="Icon"
                  class="point inactive"
                />
              </div>
              <span class="info__type">Доходность (%)</span>
              <div class="info__points">
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img
                  src="./assets/img/point.svg"
                  alt="Icon"
                  class="point inactive"
                />
                <img
                  src="./assets/img/point.svg"
                  alt="Icon"
                  class="point inactive"
                />
              </div>
              <span class="info__type">Месячный прирост</span>
              <div class="info__points">
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
              </div>
              <span class="info__type">Риск-менеджмент</span>
              <div class="info__count">
                <span class="count__num plus">249</span>
                <span class="count__num">/</span>
                <span class="count__num min">23</span>
              </div>
              <span class="info__type">Прибыльные сделки (мес.)</span>
            </div>
          </div>
          <div class="people__card">
            <div class="card__photo">
              <img src="./assets/img/p4.png" alt="Image" />
            </div>
            <div class="card__info">
              <span class="info__name">Михаил</span>
              <div class="info__points">
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img
                  src="./assets/img/point.svg"
                  alt="Icon"
                  class="point inactive"
                />
              </div>
              <span class="info__type">Доходность (%)</span>
              <div class="info__points">
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img
                  src="./assets/img/point.svg"
                  alt="Icon"
                  class="point inactive"
                />
              </div>
              <span class="info__type">Месячный прирост</span>
              <div class="info__points">
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img
                  src="./assets/img/point.svg"
                  alt="Icon"
                  class="point inactive"
                />
              </div>
              <span class="info__type">Риск-менеджмент</span>
              <div class="info__count">
                <span class="count__num plus">340</span>
                <span class="count__num">/</span>
                <span class="count__num min">30</span>
              </div>
              <span class="info__type">Прибыльные сделки (мес.)</span>
            </div>
          </div>
          <div class="people__card">
            <div class="card__photo">
              <img src="./assets/img/p5.png" alt="Image" />
            </div>
            <div class="card__info">
              <span class="info__name">Александр</span>
              <div class="info__points">
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img
                  src="./assets/img/point.svg"
                  alt="Icon"
                  class="point inactive"
                />
              </div>
              <span class="info__type">Доходность (%)</span>
              <div class="info__points">
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img
                  src="./assets/img/point.svg"
                  alt="Icon"
                  class="point inactive"
                />
              </div>
              <span class="info__type">Месячный прирост</span>
              <div class="info__points">
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img
                  src="./assets/img/point.svg"
                  alt="Icon"
                  class="point inactive"
                />
                <img
                  src="./assets/img/point.svg"
                  alt="Icon"
                  class="point inactive"
                />
              </div>
              <span class="info__type">Риск-менеджмент</span>
              <div class="info__count">
                <span class="count__num plus">134</span>
                <span class="count__num">/</span>
                <span class="count__num min">10</span>
              </div>
              <span class="info__type">Прибыльные сделки (мес.)</span>
            </div>
          </div>
          <div class="people__card">
            <div class="card__photo">
              <img src="./assets/img/p6.png" alt="Image" />
            </div>
            <div class="card__info">
              <span class="info__name">Наталья</span>
              <div class="info__points">
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img
                  src="./assets/img/point.svg"
                  alt="Icon"
                  class="point inactive"
                />
              </div>
              <span class="info__type">Доходность (%)</span>
              <div class="info__points">
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
              </div>
              <span class="info__type">Месячный прирост</span>
              <div class="info__points">
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img src="./assets/img/point.svg" alt="Icon" class="point" />
                <img
                  src="./assets/img/point.svg"
                  alt="Icon"
                  class="point inactive"
                />
              </div>
              <span class="info__type">Риск-менеджмент</span>
              <div class="info__count">
                <span class="count__num plus">305</span>
                <span class="count__num">/</span>
                <span class="count__num min">40</span>
              </div>
              <span class="info__type">Прибыльные сделки (мес.)</span>
            </div>
          </div>
        </div>
        <div class="scrollbar">
          <div class="scrollbar-thumb"></div>
        </div>
      </div>
      <button type="button" class="main__btn" id="choose-btn">
        Выбрать специалиста
      </button>
      <p class="main__heading">Вас ждет:</p>
      <div class="main__plan">
        <div class="plan__item first">
          <div class="plan__item-content">
            <span class="plan__item-heading">Пошаговый план действий</span>
            <span class="plan__item-text"
              >Чёткие инструкции для быстрого результата</span
            >
          </div>
        </div>
        <div class="plan__item second">
          <div class="plan__item-content">
            <span class="plan__item-heading">Поддержка экспертов</span>
            <span class="plan__item-text"
              >Возможность задать вопросы и получить разбор ошибок</span
            >
          </div>
        </div>
        <div class="plan__item third">
          <div class="plan__item-content">
            <span class="plan__item-heading"
              >Доступ к закрытому сообществу</span
            >
            <span class="plan__item-text"
              >Обмен опытом с единомышленниками</span
            >
          </div>
        </div>
        <div class="plan__item fourth">
          <div class="plan__item-content">
            <span class="plan__item-heading">Практические знания</span>
            <span class="plan__item-text"
              >Реальные кейсы и рабочие стратегии</span
            >
          </div>
        </div>
      </div>
      <!--------- QUESTION 1 --------->
      <div id="modal-1" class="modal hidden">
        <div class="modal__content">
          <p class="modal__question">Вам исполнился 21 год?</p>
          <div class="modal__actions">
            <button class="modal__button--first" id="modal-btn-1">Да</button>
            <a href="err.html" class="modal__button--first">Нет</a>
          </div>
        </div>
      </div>
      <!--------- QUESTION 2 --------->
      <div id="modal-2" class="modal hidden">
        <div class="modal__content">
          <p class="modal__question">Вы являетесь гражданином РФ?</p>
          <div class="modal__actions">
            <button class="modal__button--first" id="modal-btn-2">Да</button>
            <a href="err.html" class="modal__button--first">Нет</a>
          </div>
        </div>
      </div>
      <!--------- FORM --------->
      <div id="modal-form" class="modal hidden">
        <div class="modal__content form">
          <div class="form-wrapper">
            <form
              class="form _main-form contact-form freg thin rounded"
              id="main-form"
              method="post"
            >
              <div class="text-block-6">
                <h2 class="form-heading">
                  Минимальный депозит — ощутимый результат! <br />
                  Начните с 100$  и убедитесь, как ваш капитал начинает расти
                  под руководством наших экспертов
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
    <footer class="footer">
      <div class="footer__logo">
        <img src="./assets/img/logo.svg" alt="Icon" />
      </div>
      <span class="footer__text">©2017-2025, <br />Prostovcash.com</span>
    </footer>
    <script src="./assets/js/main.js"></script>
    <script>
      localStorage.removeItem("answers");
    </script>
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
