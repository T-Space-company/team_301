<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Спасибо за регистрацию!</title>
    <link rel="stylesheet" href="./assets/css/styles.css" />
  </head>

  <body>
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }
      body {
        height: 100vh;
        display: flex;
        font-size: 14px;
        text-align: center;
        justify-content: center;
      }
    </style>
    <div class="prize__wrapper" id="second-screen">
      <div class="prize__top thanks">
        <div class="prize__logo">
          <img src="./assets/img/t-logo.svg" alt="" />
        </div>
      </div>
      <div class="thanks-wrapper">
        <div class="thanks-phone">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="150"
            height="150"
            viewBox="0 0 150 150"
            fill="none"
          >
            <path
              d="M137.78 109.5C133.683 106.064 109.655 90.8484 105.661 91.5469C103.786 91.8797 102.352 93.4781 98.5125 98.0578C96.7371 100.312 94.7874 102.423 92.6812 104.372C88.8224 103.44 85.0872 102.055 81.5531 100.247C67.6935 93.4992 56.4967 82.2991 49.7531 68.4375C47.9449 64.9034 46.5603 61.1682 45.6281 57.3094C47.5769 55.2033 49.688 53.2535 51.9422 51.4781C56.5172 47.6391 58.1203 46.2141 58.4531 44.3297C59.1516 40.3266 43.9219 16.3078 40.5 12.2109C39.0656 10.5141 37.7625 9.375 36.0938 9.375C31.2562 9.375 9.375 36.4313 9.375 39.9375C9.375 40.2234 9.84375 68.3906 45.4172 104.583C81.6094 140.156 109.777 140.625 110.062 140.625C113.569 140.625 140.625 118.744 140.625 113.906C140.625 112.237 139.486 110.934 137.78 109.5Z"
              fill="#333333"
            />
            <path
              d="M107.812 70.3125H117.188C117.176 60.3703 113.222 50.8385 106.192 43.8083C99.1615 36.7781 89.6297 32.8237 79.6875 32.8125V42.1875C87.1444 42.1949 94.2938 45.1605 99.5667 50.4333C104.84 55.7062 107.805 62.8556 107.812 70.3125Z"
              fill="#333333"
            />
            <path
              d="M131.25 70.3125H140.625C140.606 54.1566 134.18 38.6677 122.756 27.2437C111.332 15.8198 95.8434 9.39361 79.6875 9.375V18.75C93.3578 18.7661 106.464 24.2038 116.13 33.8701C125.796 43.5365 131.234 56.6422 131.25 70.3125Z"
              fill="#333333"
            />
          </svg>
        </div>
        <h1 class="thanks-heading">Спасибо за заявку!</h1>
        <span class="thanks-text"> наш менеджер свяжется с вами </span>
        <div class="timer">
          <div class="digit-container">
            <div class="digit" id="hour1">0</div>
            <div class="digit" id="hour2">0</div>
            <div class="colon">:</div>
            <div class="digit" id="minute1">0</div>
            <div class="digit" id="minute2">0</div>
            <div class="colon">:</div>
            <div class="digit" id="second1">0</div>
            <div class="digit" id="second2">0</div>
          </div>
        </div>
      </div>
    </div>
    <script>
      document.addEventListener("DOMContentLoaded", () => {
        let totalSeconds = 30 * 60; // 30 minutes in seconds

        function updateTime() {
          if (totalSeconds <= 0) {
            clearInterval(timerInterval); // Stop when reaching 00:00:00
            return;
          }

          totalSeconds--; // Decrease time

          let minutes = Math.floor(totalSeconds / 60);
          let seconds = totalSeconds % 60;

          let minuteStr = String(minutes).padStart(2, "0");
          let secondStr = String(seconds).padStart(2, "0");

          // Update digits
          document.getElementById("minute1").textContent = minuteStr[0];
          document.getElementById("minute2").textContent = minuteStr[1];
          document.getElementById("second1").textContent = secondStr[0];
          document.getElementById("second2").textContent = secondStr[1];
        }

        // Initial display
        updateTime();

        // Start countdown
        let timerInterval = setInterval(updateTime, 1000);
      });
    </script>
  </body>
</html>
