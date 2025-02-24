<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Спасибо за регистрацию!</title>
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
    <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="./css/thanks-page.css">
  <link href="css/quiz-sber-phone.webflow.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <header class="header active">
      <img style="width: 200px" src="./images/logo-1.png" alt="Logo" />
    </header>
    <main class="main-thankyou">
      <div class="main-thankyou__block">
        <h2>Спасибо за регистрацию!</h2>
        <span>Наш менеджер свяжется с вами в течении 5 минут</span>
        <div class="timer"></div>
      </div>
      <div class="main-image thanks">
        <img src="./images/phone.svg" alt="Background" id="phone" />
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
