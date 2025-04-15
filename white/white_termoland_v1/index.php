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
    <title>Termoland</title>
    <link rel="stylesheet" href="./assets/css/normalize.css" />
    <link rel="stylesheet" href="./assets/css/styles.css" />
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
      <a href="#" class="header__logo">
        <img src="./assets/img/logo_mob.png" alt="Logo" />
      </a>
      <a class="header__location desktop" href="#main-form">
        <img src="./assets/img/icons/point.svg" alt="Icon" />
        Печатиники
        <img src="./assets/img/icons/arr.svg" alt="Icon" />
      </a>
      <nav class="header__menu desktop">
        <div class="menu__list">
          <a href="#main-form">Стоимость</a>
          <a href="#main-form">Услуги</a>
          <a href="#main-form">Spa</a>
          <a href="#main-form">Сертификаты</a>
          <a href="#main-form">Акции</a>
          <a href="#main-form">Новости</a>
          <a href="#main-form">Инвесторам</a>
        </div>
      </nav>
      <div class="header__btns">
        <a href="#main-form">
          <img src="./assets/img/icons/search.svg" alt="Icon" />
        </a>
        <a href="#main-form">
          <img src="./assets/img/icons/user.svg" alt="Icon" />
        </a>
        <a href="#main-form" class="header__button desktop">Купить билеты</a>
        <a href="#main-form">
          <img src="./assets/img/icons/menu.svg" alt="Icon" />
        </a>
      </div>
    </header>
    <main class="main">
      <section class="section hero">
        <div class="hero__banner">
          <!-- <img src="./assets/img/main.jpeg" alt="Image" /> -->
          <div class="banner__overlay"></div>
          <div class="banner__items desktop">
            <a href="#main-form" class="banner__item">Стоимость</a>
            <a href="#main-form" class="banner__item">Акции</a>
            <a href="#main-form" class="banner__item">Расписание</a>
            <a href="#main-form" class="banner__item">Услуги</a>
            <a href="#main-form" class="banner__item">Правила</a>
            <a href="#main-form" class="banner__item">Контакты</a>
          </div>
        </div>
        <div class="hero__info">
          <div class="info__top desktop">
            <div class="hero__img desktop">
              <img src="./assets/img/svg.svg" alt="Image" />
            </div>
          </div>
          <div class="info__bottom">
            <div class="info__more">
              <img src="./assets/img/icons/more.svg" alt="Icon" />
            </div>
            <div class="info__contacts">
              <span class="contacts__heading"
                >Есть вопросы? <br />
                Напишите нам в чат</span
              >
              <div class="contacts__socials">
                <a href="#main-form" class="contacts__social">
                  <img src="./assets/img/icons/tg.svg" alt="Icon" />
                </a>
                <a href="#main-form" class="contacts__social">
                  <img src="./assets/img/icons/wa.svg" alt="Icon" />
                </a>
                <a href="#main-form" class="contacts__social">
                  <img src="./assets/img/icons/vk.svg" alt="Icon" />
                </a>
              </div>
              <a href="#main-form" class="contacts__button"> Схема проезда </a>
            </div>
          </div>
        </div>
      </section>
      <section class="section includes">
        <h2 class="includes__heading">В посещение включено</h2>
        <div class="includes__items">
          <div class="includes__item">
            <div class="includes__img first">
              <img src="./assets/img/icons/a1.svg" alt="Icon" />
            </div>
            <span class="includes__text">
              Анимация и мастер-классы, фитнес
            </span>
            <a href="#main-form" class="includes__btn mobile">Подробнее</a>
          </div>
          <div class="includes__item">
            <div class="includes__img second">
              <img src="./assets/img/icons/a2.svg" alt="Icon" />
            </div>
            <span class="includes__text"> Открытый бассейн </span>
            <a href="#main-form" class="includes__btn mobile">Подробнее</a>
          </div>
          <div class="includes__item">
            <div class="includes__img third">
              <img src="./assets/img/icons/a3.svg" alt="Icon" />
            </div>
            <span class="includes__text"> Сервис и забота </span>
            <a href="#main-form" class="includes__btn mobile">Подробнее</a>
          </div>
          <div class="includes__item">
            <div class="includes__img fourth">
              <img src="./assets/img/icons/a4.svg" alt="Icon" />
            </div>
            <span class="includes__text"> Парения </span>
            <a href="#main-form" class="includes__btn mobile">Подробнее</a>
          </div>
        </div>
      </section>
      <section class="section complex mobile">
        <h2 class="complex__heading">Что ждет в комплексе</h2>
        <div class="complex__content">
          <img src="./assets/img/complex.png" alt="Image" />
          <div class="content__overlay"></div>
          <span class="content__descr">Морская купель</span>
        </div>
      </section>
      <section class="section map mobile">
        <div class="map__content">
          <iframe
            src="https://www.google.com/maps?q=г. Москва, ул. Полбина вл.33А&output=embed"
            width="100%"
            height="400"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
          <div class="map__info">
            <h3 class="map__heading">Termoland Печатники</h3>
            <div class="map__address">
              <div class="address__descr">
                <img src="./assets/img/icons/point.svg" alt="Icon" />
                г. Москва, ул. Полбина вл.33А
              </div>
              <div class="address__descr">
                <img src="./assets/img/icons/metro.svg" alt="Icon" />
                Печатники
                <span class="address__dist">2,37 км</span>
              </div>
            </div>
            <a href="#main-form" class="address__button">Построить маршрут</a>
          </div>
        </div>
      </section>
      <section class="section opening">
        <div class="opening__wrapper">
          <div class="opening__text">
            <h2 class="opening__heading">Скоро открытие!</h2>
            <p class="opening__descr">
              Оставьте свои контакты, чтобы узнать про открытие первым
            </p>
          </div>
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
      </section>
    </main>
    <footer class="footer">
      <div class="footer__logo desktop">
        <img src="./assets/img/logo.png" alt="Image" />
      </div>
      <div class="footer__menu desktop">
        <div class="menu__items">
          <ul class="menu__list--footer">
            <a href="#main-form">Комплексы</a>
            <a href="#main-form">О нас</a>
            <a href="#main-form">Услуги</a>
            <a href="#main-form">Цены</a>
            <a href="#main-form">Акции</a>
          </ul>
          <ul class="menu__list--footer">
            <a href="#main-form">Корпоративным клиентам</a>
            <a href="#main-form">Партнерам</a>
            <a href="#main-form">Инвесторам</a>
            <a href="#main-form">Тендеры</a>
            <a href="#main-form">Вакансии</a>
          </ul>
          <ul class="menu__list--footer">
            <a href="#main-form">Новости</a>
            <a href="#main-form">Галерея</a>
            <a href="#main-form">Контакты</a>
            <a href="#main-form">Карта сайта</a>
          </ul>
        </div>
      </div>
      <div class="footer__contacts">
        <div class="contacts__mail desktop">
          <a href="#main-form">pcht@termoland.ru</a>
        </div>
        <a href="#main-form" class="contacts__item mobile">
          <div class="contacts__content">
            <img src="./assets/img/icons/phone.svg" alt="Icon" />
            <span>+79125673421</span>
          </div>
          <img src="./assets/img/icons/copy.svg" alt="Icon" />
        </a>
        <a href="#main-form" class="contacts__item mobile">
          <div class="contacts__content">
            <img src="./assets/img/icons/mail.svg" alt="Icon" />
            <span>pcht@termoland.ru</span>
          </div>
          <img src="./assets/img/icons/copy.svg" alt="Icon" />
        </a>
        <div class="contacts__wrap">
          <a href="#main-form" class="contacts__item">
            <img src="./assets/img/icons/f-tg.svg" alt="Icon" />
            <span>Telegram чат</span>
          </a>
          <a href="#main-form" class="contacts__item">
            <img src="./assets/img/icons/f-wa.svg" alt="Icon" />
            <span>WhatsApp чат</span>
          </a>
        </div>
      </div>
    </footer>
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
