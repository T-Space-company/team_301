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
        <div class="hero--top">
          <span class="hero__subheading desktop"
            >Комплект курсов. По живому обучению тредингу
          </span>
          <h1 class="hero__heading">От 0 до результата в трейдинге</h1>
          <span class="hero__subheading mobile"
            >Комплект курсов. По живому обучению тредингу
          </span>
          <div class="hero__image-wrapper">
            <img src="./assets/img/hero.png" alt="Image" class="hero__image" />
          </div>
          <div class="hero__timer">
            <span class="timer__heading mobile">До конца акции</span>
            <div class="timer" id="countdown"></div>
          </div>
          <div class="hero__discount">
            <span class="discount__old">42 000 ₽</span>
            <span class="discount__new">10 000 ₽</span>
          </div>
          <a href="#main-form" class="hero__button mobile"
            >Записаться со скидкой</a
          >
          <a href="#main-form-d" class="hero__button desktop"
            >Записаться со скидкой</a
          >
          <div class="hero__list desktop">
            <div class="hero__item">
              <span class="item__heading">С нуля</span>
              <span class="item__descr"
                >От инструментов финансовых рынков до блокчейна</span
              >
            </div>
            <div class="hero__item">
              <span class="item__heading">На практике</span>
              <span class="item__descr"
                >Тесты и домашние задания после каждой темы</span
              >
            </div>
            <div class="hero__item">
              <span class="item__heading"
                >С готовыми инструментами от экспертов</span
              >
              <span class="item__descr">Чек-листы, планы, шаблоны</span>
            </div>
            <div class="hero__item accent">
              <span class="item__heading">-40%</span>
              <span class="item__descr"
                >Скидка  действует 2 дня <span id="countdown-hero"></span
              ></span>
            </div>
          </div>
        </div>
        <div class="hero--bottom mobile">
          <div class="hero__list">
            <div class="hero__item">
              <span class="item__heading">С нуля</span>
              <span class="item__descr"
                >От инструментов финансовых рынков до блокчейна</span
              >
            </div>
            <div class="hero__item">
              <span class="item__heading">На практике</span>
              <span class="item__descr"
                >Тесты и домашние задания после каждой темы</span
              >
            </div>
            <div class="hero__item">
              <span class="item__heading"
                >С готовыми инструментами от экспертов</span
              >
              <span class="item__descr">Чек-листы, планы, шаблоны</span>
            </div>
          </div>
        </div>
      </section>
      <section class="section intro">
        <div class="intro__descr-wrapper">
          <h2 class="intro__heading">Практика с первых дней курса</h2>
          <p class="intro__descr">
            С сопровождением наших опытных аналитиков и трейдеров вы сможете
            заработать на трейдинге в первые дни обучения. Мы гарантируем
            сохранность и безопастность как вашых данных, так и средств
          </p>
        </div>
        <div class="intro__image-wrapper">
          <img src="./assets/img/intro.png" alt="Image" class="intro__image" />
        </div>
      </section>
      <section class="section practice">
        <h2 class="practice__heading">На практике разберётесь, как:</h2>
        <div class="practice__content-wrapper">
          <img
            src="./assets/img/practice.png"
            alt="Image"
            class="card__image desktop"
          />
          <div class="practice__content">
            <div class="practice__card--active">
              <h3 class="card__heading">Принимать решения</h3>
              <p class="card__descr">
                Поймёте, на что обращать внимание при выборе ценных бумаг
                и криптоактивов. Научитесь техническому, новостному
                и фундаментальному анализу инструментов.
              </p>
              <img
                src="./assets/img/practice.png"
                alt="Image"
                class="card__image mobile"
              />
            </div>
            <div class="practice__card">
              <h2 class="card__heading">Рассчитывать риски</h2>
              <img
                src="./assets/img/icons/plus.svg"
                alt="Icon"
                class="mobile"
              />
            </div>
            <div class="practice__card">
              <h2 class="card__heading">Применять топовые инструменты</h2>
              <img
                src="./assets/img/icons/plus.svg"
                alt="Icon"
                class="mobile"
              />
            </div>
          </div>
        </div>
      </section>
      <section class="section markets">
        <div class="markets__content-wrapper">
          <div class="markets__image">
            <img src="./assets/img/markets.png" alt="Image" />
          </div>
          <div class="markets__content">
            <h2 class="markets__heading">💥 Разные рынки</h2>
            <p class="markets__text">
              По мере прохождения курса, наши менторы помогут вам попробовать
              свои силы в трейдинге на 4 основных направлениях: Фондовом,
              Валютном, Криптовалютном, Товарно-сырьевом рынках
            </p>
            <a href="#main-form" class="markets__button">Записаться на курс</a>
          </div>
        </div>
      </section>
      <section class="section feedback mobile">
        <div class="feedback__content-wrapper">
          <div class="feedback__content">
            <div class="feedback__timer">
              <span class="timer__heading">До конца акции</span>
              <div class="timer" id="countdown-2"></div>
            </div>
            <div class="feedback__discount">
              <span class="discount__old">42 000 ₽</span>
              <span class="discount__new">10 000 ₽</span>
            </div>
          </div>
          <div class="feedback__form">
            <h3 class="form__heading">
              Записаться на курс или получить бесплатную консультацию
            </h3>
            <form
              class="form _main-form contact-form freg thin rounded"
              id="main-form"
              method="post"
            >
              <input type="hidden" id="utm_medium" value='<?= $_GET['utm_medium'] ?>'>
              <input type="hidden" id="campaing_id" value='<?= $_GET['campaing_id'] ?>'>
              <input type="hidden" id="slug" value='<?= $_GET['slug'] ?>'>
              <input type="hidden" id="bge" value='<?= $_GET['bge'] ?>'> <input
              type="hidden" id="source" value='<?= $_GET['source'] ?>'>
            </form>
          </div>
        </div>
      </section>
      <section class="section experts">
        <h2 class="experts__heading">
          Учитесь у топовых инвесторов и экспертов
        </h2>
        <div class="experts__slider">
          <div class="experts__list">
            <div class="experts__item">
              <img
                src="./assets/img/e1.png"
                alt="Image"
                class="experts__image"
              />
              <span class="experts__name">Олег Иванов</span>
              <span class="experts__position">Венчурный инвестор</span>
              <img
                src="./assets/img/icons/info.svg"
                alt="Icon"
                class="experts__info mobile"
              />
            </div>
            <div class="experts__item">
              <img
                src="./assets/img/e2.png"
                alt="Image"
                class="experts__image"
              />
              <span class="experts__name">Дмитрий Мишунин</span>
              <span class="experts__position">Генеральный директор HashEx</span>
              <img
                src="./assets/img/icons/info.svg"
                alt="Icon"
                class="experts__info mobile"
              />
            </div>
            <div class="experts__item">
              <img
                src="./assets/img/e3.png"
                alt="Image"
                class="experts__image"
              />
              <span class="experts__name">Валерий Скотников</span>
              <span class="experts__position"
                >Начальник управления по развитию сегмента розничных клиентов на
                Московской бирже</span
              >
              <img
                src="./assets/img/icons/info.svg"
                alt="Icon"
                class="experts__info mobile"
              />
            </div>
            <div class="experts__item">
              <img
                src="./assets/img/e4.png"
                alt="Image"
                class="experts__image"
              />
              <span class="experts__name">Никита Карташёв</span>
              <span class="experts__position"
                >Финансовый консультант частных и корпоративных клиентов в «БКС
                Премьер». Ведущий эксперт Школы Московской биржи</span
              >
              <img
                src="./assets/img/icons/info.svg"
                alt="Icon"
                class="experts__info mobile"
              />
            </div>
          </div>
        </div>
      </section>
      <section class="section feedback desktop">
        <div class="feedback__content-wrapper">
          <div class="feedback__content">
            <h2 class="feedback__heading">Записаться на курс</h2>
            <div class="feedback__timer">
              <span class="timer__heading">До конца акции</span>
              <div class="timer" id="countdown-form"></div>
            </div>
            <div class="feedback__discount">
              <span class="discount__old">42 000 ₽</span>
              <span class="discount__new">10 000 ₽</span>
            </div>
          </div>
          <div class="feedback__form" id="main-form-d">
            <form
              class="form _main-form contact-form freg thin rounded"
              id="main-form"
              method="post"
            >
              <input type="hidden" id="utm_medium" value='<?= $_GET['utm_medium'] ?>'>
              <input type="hidden" id="campaing_id" value='<?= $_GET['campaing_id'] ?>'>
              <input type="hidden" id="slug" value='<?= $_GET['slug'] ?>'>
              <input type="hidden" id="bge" value='<?= $_GET['bge'] ?>'> <input
              type="hidden" id="source" value='<?= $_GET['source'] ?>'>
            </form>
          </div>
        </div>
      </section>
      <section class="section support desktop">
        <h2 class="experts__heading">Команда поддержки будет рядом</h2>
        <div class="support__content">
          <div class="support__card">
            <img
              src="./assets/img/icons/plus_round.svg"
              alt="Icon"
              class="support__plus"
            />
            <h3 class="support__position">Куратор-эксперт</h3>
            <span class="support__descr"
              >Подробно разбирает домашние задания, помогает сделать их
              лучше</span
            >
          </div>
          <div class="support__card">
            <img
              src="./assets/img/icons/plus_round.svg"
              alt="Icon"
              class="support__plus"
            />
            <h3 class="support__position">HR-консультант</h3>
            <span class="support__descr"
              >Помогает в поиске работы: от плана действий до
              собеседований</span
            >
          </div>
          <div class="support__card">
            <img
              src="./assets/img/icons/plus_round.svg"
              alt="Icon"
              class="support__plus"
            />
            <h3 class="support__position">Служба заботы</h3>
            <span class="support__descr"
              >Помогает с вопросами по платформе и прохождению курса</span
            >
          </div>
        </div>
      </section>
      <section class="section countdown">
        <div class="countdown__content">
          <div class="countdown--top">
            <h2 class="countdown__heading desktop">Стоимость курса</h2>
            <div class="countdown__dates">
              <span>Набор <span class="accent">открыт</span></span>
              <span>Осталось: <span class="accent">25 мест</span></span>
            </div>
          </div>
          <div class="countdown__timer mobile">
            <span class="timer__heading">До конца акции</span>
            <div class="timer" id="countdown-3"></div>
          </div>
          <h2 class="countdown__heading mobile">Стоимость курса</h2>
          <div class="countdown__price">
            <div class="price--top">
              <img src="./assets/img/icons/percent.png" alt="Icon" />
              <div class="price__descr">
                Скидка 40% действует 2 дня
                <span class="price__timer" id="countdown-4"></span>
              </div>
            </div>
            <div class="price--bottom">
              <div class="price__old">
                <div class="price__num"><span>42 000</span>₽</div>
                <div class="price__discount">-40%</div>
              </div>
              <span class="price__total">10 000 ₽</span>
            </div>
          </div>
          <div class="countdown__timer desktop">
            <span class="timer__heading">До конца акции</span>
            <div class="timer" id="countdown-5"></div>
          </div>
          <ul class="countdown__list">
            <li class="countdown__item">
              Торговля будет производится в 4х сегментов рынка: Фондовом,
              Валютном, Криптовалютном, Товарно-сырьевом
            </li>
            <li class="countdown__item">Доступ к материалам курса навсегда</li>
            <li class="countdown__item">
              Полное сопровождение от опытных аналитикиов и трейдеров
            </li>
            <li class="countdown__item">Зароботок уже с первых дней курса</li>
          </ul>
        </div>
        <div class="countdown__form">
          <h3 class="form__heading mobile">
            Записаться на консультацию или оплатить на сайте
          </h3>
          <h3 class="form__heading desktop">
            Заполните форму и наши специалисты свяжутся с вами
          </h3>
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
      <section class="section ticker">
        <div class="ticker-container">
          <div class="ticker-row reverse">
            <div class="ticker-content first">
              <span><span class="accent">• </span>Санкт-Петербург</span>
              <span><span class="accent">• </span> Казань</span>
              <span><span class="accent">• </span> Уфа</span>
              <span><span class="accent">• </span> Брянск</span>
              <span><span class="accent">• </span> Тверь</span>
              <span><span class="accent">• </span> Челябинск</span>

              <span><span class="accent">• </span> Санкт-Петербург</span>
              <span><span class="accent">• </span> Казань</span>
              <span><span class="accent">• </span> Уфа</span>
              <span><span class="accent">• </span> Брянск</span>
              <span><span class="accent">• </span> Тверь</span>
              <span><span class="accent">• </span> Челябинск</span>
            </div>
          </div>

          <div class="ticker-row">
            <div class="ticker-content second">
              <span><span class="accent">• </span> Воронеж</span>
              <span><span class="accent">• </span> Волгоград</span>
              <span><span class="accent">• </span> Пермь</span>
              <span><span class="accent">• </span> Ижевск</span>
              <span><span class="accent">• </span> Калуга</span>

              <span><span class="accent">• </span> Воронеж</span>
              <span><span class="accent">• </span> Волгоград</span>
              <span><span class="accent">• </span> Пермь</span>
              <span><span class="accent">• </span> Ижевск</span>
              <span><span class="accent">• </span> Калуга</span>
            </div>
          </div>

          <div class="ticker-row reverse">
            <div class="ticker-content third">
              <span><span class="accent">• </span> Орёл</span>
              <span><span class="accent">• </span> Томск</span>
              <span><span class="accent">• </span> Вологда</span>
              <span><span class="accent">• </span> Гомель</span>
              <span><span class="accent">• </span> Белгород</span>
              <span><span class="accent">• </span> Омск</span>
              <span><span class="accent">• </span> Астрахань</span>

              <span><span class="accent">• </span> Орёл</span>
              <span><span class="accent">• </span> Томск</span>
              <span><span class="accent">• </span> Вологда</span>
              <span><span class="accent">• </span> Гомель</span>
              <span><span class="accent">• </span> Белгород</span>
              <span><span class="accent">• </span> Омск</span>
              <span><span class="accent">• </span> Астрахань</span>
            </div>
          </div>
        </div>
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
        <p class="modal__question">
          Вы являетесь гражданином или резидентом Российской Федерации?
        </p>
        <div class="modal__actions">
          <a class="modal__button--first" href="err.html">Нет</a>
          <button class="modal__button--first yes">Да</button>
        </div>
      </div>
    </div>
    <!--------- QUESTION 2 --------->
    <div id="modal-2" class="modal hidden">
      <div class="modal__content">
        <p class="modal__question">Сколько вам лет?</p>
        <div class="modal__actions vertical">
          <a class="modal__button--second" href="err.html">До 20</a>
          <button class="modal__button--second yes">21-35</button>
          <button class="modal__button--second yes">36-50</button>
          <button class="modal__button--second yes">51-70</button>
          <a class="modal__button--second" href="err.html">71+</a>
        </div>
      </div>
    </div>

    <script src="./assets/js/timer.js"></script>
    <script src="./assets/js/ticker.js"></script>
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
      scrollToElement("#main-form-d", 'a[href="#main-form-d"]');
    </script>
  </body>
</html>
