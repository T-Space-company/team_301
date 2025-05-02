<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Спасибо за регистрацию!</title>
    <link rel="stylesheet" href="./assets/css/normalize.css" />
    <link rel="stylesheet" href="./assets/css/styles.css" />
    <link rel="stylesheet" href="./assets/css/calc.css">
    <link rel="shortcut icon" href="./assets/img/fav.svg" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <header class="header">
      <img src="./assets/img/logo.png" alt="Logo" />
    </header>
    <main class="main thanks">
      <div class="screen main__thanks">
        <div class="modal__content thanks">
          <div class="thanks__heading-wrapper">
            <h2 class="thanks__heading">Спасибо за регистрацию!</h2>
            <span class="thanks__text">Ожидайте звонка в ближайшее время</span>
            <span class="thanks__text accent"
              >Не пропустите звонок - без подтверждения бонус аннулируется</span
            >
          </div>
          <div class="thanks__code">
            <span class="code__text">Ваш код для бонуса в 50USD₮</span>
            <span class="code__num">1Ah320</span>
          </div>
        </div>
        <span class="thanks__guarantee"
          >Мы гарантируем безопасность и сохранность Ваших данных</span
        >
        <div class="calculator__wrapper">
          <h2 class="calculator__heading">Расчитайте свою прибыль</h2>
          <div class="calculator">
      <div class="section">
        <div class="label">Сумма инвестиций</div>
        <div class="value" id="investmentValue">300 000 ₽</div>
        <input type="range" id="investmentRange" min="12000" max="500000" value="300000" step="1000" />
        <div class="range-labels">
          <span>12 000</span>
          <span>500 000</span>
        </div>
      </div>
  
      <div class="section">
        <div class="label">Срок</div>
        <div class="value" id="durationValue">3 месяца</div>
        <input type="range" id="durationRange" min="1" max="6" value="3" step="1" />
        <div class="range-labels">
          <span>Месяц</span>
          <span>6 месяцев</span>
        </div>
      </div>
  
      <div class="result">
        <div class="result-title">ПРИБЫЛЬ</div>
        <div class="result-value" id="profitValue">927 000 ₽</div>
      </div>
    </div>
        </div>
        <div class="main-thankyou__testimonials">
                    <h2 class="testimonials__heading">Что наши клиенты говорят о нас</h2>
          <div class="main__section__content">
          <div class="main__section-content-reviews">
            <div class="main__section-content-review">
              <p>
                С <b>BYBIT</b> я наконец-то начал разбираться в инвестициях!
                Доходность превышает все мои ожидания, и это еще больше
                мотивирует.
              </p>
              <div class="main__section-content-review-avatar">
                <img src="./assets/img/avatars/Pic-1.png" width="30px" alt="" />
                <div class="main__section-content-review-avatar-name">
                  <span>Сергей Кузнецов</span>
                  <img src="./assets/img/icons/stars.svg" alt="Stars" />
                </div>
              </div>
            </div>
            <div class="main__section-content-review">
              <p>
                Искал надежного партнера для долгосрочных вложений, и
                <b>BYBIT</b> полностью оправдал мои ожидания.
              </p>
              <div class="main__section-content-review-avatar">
                <img src="./assets/img/avatars/Pic-2.png" width="30px" alt="" />
                <div class="main__section-content-review-avatar-name">
                  <span>Алексей Смирнов</span>
                  <img src="./assets/img/icons/stars.svg" alt="Stars" />
                </div>
              </div>
            </div>
            <div class="main__section-content-review">
              <p>
                Я работаю с <b>BYBIT</b> уже больше года, и это одно из лучших
                финансовых решений, что я когда-либо принимал.
              </p>
              <div class="main__section-content-review-avatar">
                <img src="./assets/img/avatars/Pic-3.png" width="30px" alt="" />
                <div class="main__section-content-review-avatar-name">
                  <span>Андрей Морозов</span>
                  <img src="./assets/img/icons/stars.svg" alt="Stars" />
                </div>
              </div>
            </div>
            <div class="main__section-content-review">
              <p>
                <b>BYBIT</b> — это находка для тех, кто хочет пассивный доход и
                при этом минимальные риски.
              </p>
              <div class="main__section-content-review-avatar">
                <img src="./assets/img/avatars/Pic-4.png" width="30px" alt="" />
                <div class="main__section-content-review-avatar-name">
                  <span>Михаил Соколов</span>
                  <img src="./assets/img/icons/stars.svg" alt="Stars" />
                </div>
              </div>
            </div>
            <div class="main__section-content-review">
              <p>
                Здесь помогли выбрать оптимальную стратегию, и с первого дня я
                начала видеть реальную отдачу от инвестиций.
              </p>
              <div class="main__section-content-review-avatar">
                <img src="./assets/img/avatars/Pic-5.png" width="30px" alt="" />
                <div class="main__section-content-review-avatar-name">
                  <span>Мария Киселева</span>
                  <img src="./assets/img/icons/stars.svg" alt="Stars" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <script src="./assets/js/calc.js"></script>
  </body>
</html>
