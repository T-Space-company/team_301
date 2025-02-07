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
    <title>Как Стать Миллионером</title>
    <link rel="stylesheet" href="./assets/css/styles.css" />
    <link
      rel="shortcut icon"
      href="./assets/img/logo.png"
      type="image/x-icon"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />

    <script src="form/js/libs/intlTelInput.js"></script>

    <script type="application/javascript" src="track.js?v=21238"></script>

    <script>
      function getCookie(name) {
        let matches = document.cookie.match(
          new RegExp(
            "(?:^|; )" +
              name.replace(/([.$?*|{}()[]\/+^])/g, "\\$1") +
              "=([^;]*)"
          )
        );
        return matches ? decodeURIComponent(matches[1]) : undefined;
      }

      // Получаем значение 'subid' из куки
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
        info: "{info}",
      };
    </script>

    <script type="application/javascript" src="parse_url.js?v=19"></script>

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
    <div id="start-screen" class="quiz-container active">
      <img src="./assets/img/logo.png" alt="Logo" class="quiz-img" />
      <div class="quiz-block">
        <div class="quiz-logos">
          <img src="./assets/img/mf.svg" alt="Logo" class="quiz-logo" />
          <img src="./assets/img/sb.svg" alt="Logo" class="quiz-logo" />
        </div>
        <p class="quiz-heading">
          Как стать миллионером за 30 дней со СБЕРБАНК Эксклюзивная финансовая
          методика, разработанная "МИНФИН"
        </p>
      </div>
      <button id="start-button" class="quiz-button">Начать</button>
    </div>

    <div id="quiz-screen" class="quiz-container">
      <img src="./assets/img/logo.png" alt="Logo" class="quiz-img" />
      <div id="question-block" class="quiz-block">
        <p id="question-number" class="quiz-question-number"></p>
        <p id="question-title" class="quiz-question-title"></p>
      </div>
      <div id="answer-buttons" class="quiz-answers"></div>
    </div>

    <div id="form-screen" class="quiz-container">
      <img src="./assets/img/logo.png" alt="Logo" class="quiz-img" />
      <div class="quiz-attention-block">
        <p class="quiz-attention-text">Осталось менее 100 мест</p>
      </div>
      <div class="quiz-block" id="form-block">
        <form class="form _main-form contact-form" id="main-form" method="post">
          <h2 class="form-heading">
            Чтобы начать - оставьте заявку, заполнив форму
          </h2>
        </form>
      </div>
    </div>
    <script src="./assets/js/main.js"></script>

    <script src="loadAssets.js?v=357525"></script>

    <script>
      window.onload = function () {
        var thx = localStorage.getItem("thanks");
        if (thx && thx === "true") {
          const fileThx = "thanks-page.php";
          window.location.href = `${fileThx}${window.location.search}`;
        }
      };

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
