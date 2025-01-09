<!DOCTYPE html>
<!--  This site was created in Webflow. https://webflow.com  --><!--  Last Published: Thu Jan 09 2025 11:22:57 GMT+0000 (Coordinated Universal Time)  -->
<html
  data-wf-page="656da83b0ed44885e4f1a3b4"
  data-wf-site="656da83b0ed44885e4f1a3ae"
>
  <head>
    <meta charset="utf-8" />
    <title>Test Sber</title>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Webflow" name="generator" />
    <link href="css/normalize.css" rel="stylesheet" type="text/css" />
    <link href="css/webflow.css" rel="stylesheet" type="text/css" />
    <link href="css/test-sber.webflow.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link
      href="https://fonts.gstatic.com"
      rel="preconnect"
      crossorigin="anonymous"
    />
    <script src="jquery-3.6.1.min.js"></script>

    <script
      src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"
      type="text/javascript"
    ></script>
    <script type="text/javascript">
      WebFont.load({
        google: {
          families: [
            "Droid Sans:400,700",
            "Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic",
          ],
        },
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
    <section class="section">
      <div class="div-block">
        <img
          src="images/Frame-1000003409.svg"
          loading="lazy"
          alt=""
          class="image-5"
        />
        <div class="div-block-2">
          <div class="text-block">
            Новое приложение для заработка от СБЕРБАНК!
          </div>
        </div>
      </div>
      <div class="div-block-4">
        <div class="div-block-3">
          <div class="text-block-2">
            Узнайте больше про работу приложения и начните зарабатывать деньги
            на крупнейших частных компаниях!
          </div>
          <div class="div-block-15">
            <div
              style="padding-top: 56.27659574468085%"
              class="video w-video w-embed"
            >
              <iframe
                class="embedly-embed"
                src="https://cdn.embedly.com/widgets/media.html?src=https%3A%2F%2Fplayer.vimeo.com%2Fvideo%2F891391828%3Fapp_id%3D122963&dntp=1&display_name=Vimeo&url=https%3A%2F%2Fvimeo.com%2F891391828&image=https%3A%2F%2Fi.vimeocdn.com%2Fvideo%2F1764041730-cda251526f4113ba5f113d0ce1aa9787ef3500a9eb5cc247c0e54e774a213bbe-d_1280&key=96f1f04c5f4143bcb0f2e68c87d65feb&type=text%2Fhtml&schema=vimeo"
                width="940"
                height="529"
                scrolling="no"
                allowfullscreen=""
                title="Sber Invest"
              ></iframe>
            </div>
          </div>
          <a
            data-w-id="adacda93-0f05-7737-81ec-dd5372e74c7b"
            href="#"
            class="button-2 w-button"
            >Начать тест</a
          >
        </div>
        <div class="question-1">
          <div class="div-block-7">
            <div class="text-block-5">Вопрос №1</div>
            <div class="text-block-6">
              Вы являетесь совершеннолетним гражданином или резидентом РФ?
            </div>
          </div>
          <div class="div-block-6">
            <a
              data-w-id="0038af3f-a592-c760-aa65-b054d6fb46ae"
              href="#"
              class="button w-button"
              >Да</a
            >
            <a
              data-w-id="90edcc1f-85d0-b66c-d6dc-ab95b771ba8e"
              href="#"
              class="button w-button"
              >Нет</a
            >
          </div>
        </div>
        <div class="question-2">
          <div class="div-block-7">
            <div class="text-block-5">Вопрос №2</div>
            <div class="text-block-6">
              С какой целью Вы хотите увеличить достаток?
            </div>
          </div>
          <div class="div-block-6">
            <a
              data-w-id="88341820-0b85-c74b-bc7f-6ef0e86c7be7"
              href="#"
              class="button w-button"
              >Хочу обезопасить себя от кризиса</a
            >
            <a
              data-w-id="88341820-0b85-c74b-bc7f-6ef0e86c7be9"
              href="#"
              class="button w-button"
              >Хочу получать дополнительный доход</a
            >
            <a
              data-w-id="fddeebb1-aa43-e090-872f-621cd1f52a43"
              href="#"
              class="button w-button"
              >Планирую развивать бизнес</a
            >
            <a
              data-w-id="d2a014fb-0375-75e0-f654-44e8c8f8b8e5"
              href="#"
              class="button w-button"
              >Хочу, чтобы моя семья не в чем не нуждалась</a
            >
          </div>
        </div>
        <div class="question-3">
          <div class="div-block-7">
            <div class="text-block-5">Вопрос №3</div>
            <div class="text-block-6">Имеете ли Вы опыт в инвестировании?</div>
          </div>
          <div class="div-block-6">
            <a
              data-w-id="24810636-75a4-2b6d-6324-d493566f7f0c"
              href="#"
              class="button w-button"
              >Да, успешно инвестирую по сей день</a
            >
            <a
              data-w-id="24810636-75a4-2b6d-6324-d493566f7f0e"
              href="#"
              class="button w-button"
              >Инвестировал ранее, но сейчас не уделяю этому времени</a
            >
            <a
              data-w-id="24810636-75a4-2b6d-6324-d493566f7f10"
              href="#"
              class="button w-button"
              >Нет, никогда прежде не инвестировал</a
            >
          </div>
        </div>
        <div class="question-4">
          <div class="div-block-7">
            <div class="text-block-5">Вопрос №4</div>
            <div class="text-block-6">
              Средний доход в программе от &quot;Сбербанк России&quot;
              начинается от 150 000 рублей и может достигать 1 245 000 рублей
              Сколько Вы хотите зарабатывать?
            </div>
          </div>
          <div class="div-block-6">
            <a
              data-w-id="822bcfd1-079c-95b1-386f-0955dba1675e"
              href="#"
              class="button w-button"
              >от 150 000 рублей</a
            >
            <a
              data-w-id="822bcfd1-079c-95b1-386f-0955dba16760"
              href="#"
              class="button w-button"
              >от 330 000 рублей</a
            >
            <a
              data-w-id="822bcfd1-079c-95b1-386f-0955dba16762"
              href="#"
              class="button w-button"
              >от 1 000 000 рублей</a
            >
          </div>
        </div>
        <div class="question-5">
          <div class="div-block-7">
            <div class="text-block-5">Вопрос №5</div>
            <div class="text-block-6">
              Как вы планируете распорядиться заработанными на платформе
              средствами?
            </div>
          </div>
          <div class="div-block-6">
            <a
              data-w-id="ead53c07-a332-369d-daa1-05a16c8813b0"
              href="#"
              class="button w-button"
              >Куплю недвижимость/автомобиль</a
            >
            <a
              data-w-id="ead53c07-a332-369d-daa1-05a16c8813b2"
              href="#"
              class="button w-button"
              >Куплю то, что давно хотел</a
            >
            <a
              data-w-id="ead53c07-a332-369d-daa1-05a16c8813b4"
              href="#"
              class="button w-button"
              >Буду вкладывать далее, чтобы средства приумножались и далее</a
            >
            <a
              data-w-id="ead53c07-a332-369d-daa1-05a16c8813b6"
              href="#"
              class="button w-button"
              >Еще не решил/решила</a
            >
          </div>
        </div>
        <div class="form">            
            <form
              class=" _main-form contact-form freg thin rounded"
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
      <div class="div-block-8">
        <div class="text-block-7">
          Инвестируйте при поддержке “Сбербанк России” и начните зарабатывать.
          Новый инвестиционный проект от компании Сбербанк. В тройке крупнейших
          инвестиционных проектов Восточной Европы. При поддержке таких компаний
          как: Московский Фондовый Центр, Газпромбанк Управление Активами, Qiwi
          и другие. Эксклюзивный проект, который гарантированно улучшит ваше
          благосостояние. С нами каждый гражданин России будет жить в достатке!
        </div>
      </div>
    </section>
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
