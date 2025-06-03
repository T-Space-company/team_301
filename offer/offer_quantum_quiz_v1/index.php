<?php
if (!isset($rawClick) && !isset($click)) {
  die();
}
?>
<?php

include_once dirname(__FILE__) . '/config.php';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Quantum AI Quiz</title>
    <link rel="stylesheet" href="./assets/css/styles.css" />

    <script src="jquery-3.6.1.min.js"></script>
    <script src="form/js/libs/intlTelInput.js"></script>

    <script src="form/js/libs/jquery.maskedinput.js"></script>
    <script src="form/js/libs/utils.js"></script>

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

    <!--PIXEL DEFENCE-->
    <?php if($FacebookPixel): ?>
    <script type="application/javascript">
      !(function (f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function () {
          n.callMethod
            ? n.callMethod.apply(n, arguments)
            : n.queue.push(arguments);
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = "2.0";
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s);
      })(
        window,
        document,
        "script",
        "https://connect.facebook.net/en_US/fbevents.js"
      );
      fbq("init", "<?=$FacebookPixel ?>");
      fbq("track", "PageView");
    </script>
    <?php endif; ?>
  </head>
  <body>
    <div id="quiz-container" class="quiz">
      <div class="step active" id="step-1">
        <div
          class="bg"
          style="background-image: url('./assets/main.png')"
        ></div>
        <div class="overlay">
          <div>
            <h1>QUANTUM AI</h1>
            <p>
              I will give you tesla model 3 for free, If you don't become a
              millionaire in 6 months
            </p>
            <button class="btn" id="btn-step-1">GET STARTED</button>
            <div class="links">Terms of use and Privacy policy</div>
          </div>
        </div>
      </div>

      <div class="step" id="step-2">
        <h2>
          ONLY RESIDENTS OF EUROPE ARE ELIGIBLE TO PARTICIPATE IN THE PROJECT
        </h2>
        <div class="options">
          <button class="btn-step">Yes, I am a resident of Europe</button>
          <button class="btn-step">No, I am not a resident of Europe</button>
        </div>
      </div>

      <div class="step" id="step-3">
        <h2>HOW OLD ARE YOU?</h2>
        <div class="options">
          <button class="btn-step">18 - 25</button>
          <button class="btn-step">25 - 35</button>
          <button class="btn-step">35 - 45</button>
          <button class="btn-step">45+</button>
        </div>
      </div>

      <div class="step" id="step-4">
        <h2>WHAT IS YOUR FINANCIAL GOAL?</h2>
        <div class="options">
          <button class="btn-step">Provide for yourself and your family</button>
          <button class="btn-step">
            Create a financial cushion for a rainy day
          </button>
          <button class="btn-step">Renovate/buy a house</button>
          <button class="btn-step">Financial independence</button>
        </div>
      </div>

      <div class="step" id="step-5">
        <h2>WHERE DO YOU THINK YOU WILL SPEND THE FIRST PROFIT?</h2>
        <div class="options">
          <button class="btn-step">Paying off a loan/mortgage/debt</button>
          <button class="btn-step">On my dreams</button>
          <button class="btn-step">Travelling</button>
          <button class="btn-step">
            I will invest it again to increase capital
          </button>
        </div>
      </div>

      <div class="step" id="step-6">
        <h2>HOW MUCH TIME ARE YOU WILLING TO DEDICATE TO TRADING?</h2>
        <div class="options">
          <button class="btn-step">A few hours per day</button>
          <button class="btn-step">All day</button>
          <button class="btn-step">Once a week</button>
          <button class="btn-step">Once a month</button>
        </div>
      </div>

      <div class="step" id="step-7">
        <h2>CHOOSE THE AMOUNT FOR YOUR FIRST INVESTMENT:</h2>
        <div class="options">
          <button class="btn-step">250 EUR</button>
          <button class="btn-step">350 EUR</button>
          <button class="btn-step">500 EUR</button>
        </div>
      </div>

      <div class="step" id="step-8">
        <h2>
          CONGRATULATIONS! YOU HAVE RECEIVED FREE ACCESS TO THE QUANTUM AI
          PLATFORM!
        </h2>
        <p>Leave your contact details to get access.</p>
        <form
          autocomplete="off"
          class="form _main-form register-form form-reg form-send"
          method="post"
          id="main-form"
        ></form>
        <div class="links">Terms of use and Privacy policy</div>
      </div>
    </div>

    <script src="./assets/js/main.js" type="module"></script>
    <script src="loadAssets.js?v=4564"></script>

    <script type="application/javascript">
      function getSubId() {
        if (!"{subid}".match("{")) {
          localStorage.setItem("subid", "{subid}");
          return "{subid}";
        }
      }
      getSubId();
    </script>

    <script>
      window.onload = function () {
        var thx = localStorage.getItem("thanks");
        if (thx && thx === "true") {
          const fileThx = "confirm.php";
          window.location.href = `${fileThx}${window.location.search}`;
        }
      };

      window.onpageshow = function () {
        var thx = localStorage.getItem("thanks");
        if (thx && thx === "true") {
          const fileThx = "confirm.php";
          window.location.href = `${fileThx}${window.location.search}`;
        }
      };
    </script>
  </body>
</html>
