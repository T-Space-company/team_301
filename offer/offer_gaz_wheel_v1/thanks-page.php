<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Спасибо за регистрацию!</title>
    <link rel="stylesheet" href="./assets/css/styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>
    <div class="main__thanks" id="thanks-screen">
      <img src="./assets/img/logo_thanks.svg" alt="Icon" />
      <span class="thanks__heading">Спасибо!</span>
      <p class="thanks__text">
        Ваша заявка принята! Специалист ГазпромИнвест уже готовится к звонку.
      </p>
      <div class="thanks__block">
        <span class="thanks__subheading">Что дальше?</span>
        <ul class="thanks__list">
          <li class="thanks__item">✔️Ожидайте на звонок в ближайшее время</li>
          <li class="thanks__item">
            ✔️Не пропустите звонок - без подтверждения выплата анулируется
          </li>
        </ul>
        <p class="thanks__time">
          🕛 Среднее время ожидания
          <span class="accent">15-30 минут с 09:00 - 18:00 в будние дни</span>
        </p>
        <p class="thanks__safe">
          🔒 Ваши данные переданы в обработку и находятся
          <span class="accent">под защитой</span>
        </p>
      </div>
      <p class="thanks__text bottom">
        Мы гарантируем безопастность и сохраность ваших данных
      </p>
    </div>
    <script>
      const screen = document.getElementById("thanks-screen");
      if (window.innerHeight >= 690) {
        screen.style.height = "100vh";
      }
    </script>
  </body>
</html>
