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
    <link href="images/webclip.png" rel="apple-touch-icon" />

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
  <body class="body">
    <section class="section-3">
      <div class="div-block-33">
        <img
          src="images/сбер-инвест.png"
          loading="lazy"
          sizes="(max-width: 479px) 150px, (max-width: 767px) 24vw, (max-width: 991px) 18vw, 15vw"
          srcset="
            images/сбер-инвест-p-500.png 500w,
            images/сбер-инвест.png       607w
          "
          alt=""
          class="image-5"
        />
        <div class="div-block-57">
          <div class="div-block-16">
            <div class="text-block-6">Спасибо! Ваша заявка получена!</div>
            <div class="form-block w-form">
              <form
                class="form _main-form contact-form freg thin rounded"
                id="main-form"
                method="post"
              ></form>
            </div>
          </div>
          <div class="div-block-39">
            <div class="div-block-52">
              <h3 class="text-block-2">Поздравляем!</h3>
              <div class="text-block-23">
                У Вас отличное понимание рынка: будь это настоящие сделки, Вы бы
                заработали <span class="text-span-5">62 500руб.</span>
              </div>
            </div>
            <div class="div-block-35">
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

    <script src="js/webflow.js" type="text/javascript"></script>
    <script src="loadAssets.js?v=3444371"></script>

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
