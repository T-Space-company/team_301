<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Crypto Bot</title>
    <link rel="stylesheet" href="./styles/styles.css" />
    <link rel="shortcut icon" href="./logo_sb.svg" type="image/x-icon" />
  </head>
  <body>
    <header class="header active">
      <img style="width: 70px" src="patr.svg" alt="Logo" />
      <div class="header__text">
        <span
          >Государственная<br />
          Структура</span
        >
      </div>
    </header>
    <main class="main-thankyou">
      <div class="main-thankyou__block">
        <h2>Спасибо за регистрацию!</h2>
        <span>Наш менеджер свяжется с вами в течении 5 минут</span>
        <div class="timer"></div>
      </div>
      <div class="main-image thanks">
        <img src="./img/phone.svg" alt="Background" id="phone" />
      </div>
    </main>
    <script>
      document.addEventListener("DOMContentLoaded", () => {
        const timerElement = document.querySelector(".timer");
        let timeLeft = 5 * 60;

        function updateTimer() {
          let minutes = Math.floor(timeLeft / 60);
          let seconds = timeLeft % 60;

          timerElement.textContent = `${String(minutes).padStart(
            2,
            "0"
          )} : ${String(seconds).padStart(2, "0")}`;

          if (timeLeft > 0) {
            timeLeft--;
            setTimeout(updateTimer, 1000);
          }
        }

        updateTimer();
      });
    </script>
  </body>
</html>
