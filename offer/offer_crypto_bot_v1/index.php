<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Crypto Bot</title>
    <link rel="stylesheet" href="./styles/styles.css" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-chart-financial"></script>
    <script src="https://cdn.jsdelivr.net/npm/moment"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-moment"></script>
    <script src="jquery-3.6.1.min.js"></script>

    <!-- <script>
      window.bgdataLayer = window.bgdataLayer || [];

      function bge() {
          bgdataLayer.push(arguments);
      }
      bge('init', '<?= $_GET['bge'] ?>');
    </script> -->
    <script
      async
      src="https://api.imotech.video/ad/events.js?pixel_id=<?= $_GET['bge'] ?>"
    ></script>

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
      <img src="./img/logo.svg" alt="Logo" />
      <div class="header__text">
        <span>CRYPTO</span>
        <span>BOT</span>
      </div>
    </header>
    <main class="main">
      <!--------- SCREEN 1 --------->
      <div id="screen-1" class="screen active">
        <div class="main-entry">
          <span class="main-entry__heading"
            >Попробуйте себя в трейдинге вместе с нашим AI ботом</span
          >
          <p class="main-entry__descr">
            Вам предоставлен демо счет, на котором вы можете провести свои
            первые сделки и посмотреть сколько вы сможете заработать
          </p>
          <button type="button" class="main-entry__button" id="entry-button">
            Начать торговлю
          </button>
        </div>
        <div class="main-image">
        <img src="./img/bg-main.png" alt="Background">
        </div>
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
            <p class="modal__question">Вы совершеннолетний гражданин РФ?</p>
            <div class="modal__actions">
              <button class="modal__button--first modal__button--yes">
                Да
              </button>
              <button class="modal__button--first modal__button--no">
                <a href="./sorry-page.php">Нет</a>
              </button>
            </div>
          </div>
        </div>
        <!--------- QUESTION 1 --------->
        <div id="modal-2" class="modal hidden">
          <div class="modal__content">
            <p class="modal__question">Выберите сумму для тестовой торговли</p>
            <div class="modal__actions">
              <button class="modal__button--second modal__button--5">
                5000 ₽
              </button>
              <button class="modal__button--second modal__button--10">
                10 000 ₽
              </button>
              <button class="modal__button--second modal__button--50">
                50 000 ₽
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
        Возможности платформы доступны только совершеннолетним пользователям 18+
        согласно "Трудовому кодексу Российской Федерации" от 30.12.2001 №197-ФЗ
        (ред. от 13.06.2023, с изм. от 27.06.2023).
      </p>
    </footer>
    <script src="./js/main.js"></script>
    <script src="./js/timer.js"></script>
    <script src="./js/chart.js"></script>
    <script src="loadAssets.js?v=3444371"></script>

 <script>
      window.onload = function () {
        var thx = localStorage.getItem("thanks");
        if (thx && thx === "true") {
          const fileThx = "thankyou-page.php";
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
