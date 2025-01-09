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

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
  <title>TürkDoğa Yatırım</title>
  <link rel="shortcut icon" href="favicon.png" type="image/png">
  <link rel="stylesheet" href="main.css">

<script src="jquery-3.6.1.min.js"></script>


    <script type="application/javascript">
      function getCookie(name) {
      var v = document.cookie.match('(^|;) ?' + name + '=([^;]*)(;|$)');
      return v ? v[2] : null;
      }
  
      function setCookie(name, value, days) {
      var d = new Date;
      d.setTime(d.getTime() + 24 * 60 * 60 * 1000 * days);
      document.cookie = name + "=" + value + ";path=/;expires=" + d.toGMTString();
      }
  
      function getSubId() {
      var params = new URLSearchParams(document.location.search.substr(1));
      if (!'{subid}'.match('{')) {
          return '{subid}';
      }
      var clientSubid = '<?php echo isset($client) ? $client->getSubid() : "" ?>';
      if (!clientSubid.match('>')) {
          return clientSubid;
      }
      if (params.get('_subid')) {
          return params.get('_subid')
      }
      if (params.get('subid')) {
          return params.get('subid')
      }
      if (getCookie('subid')) {
          return getCookie('subid');
      }
      }
  
      function getToken() {
      var params = new URLSearchParams(document.location.search.substr(1));
      if (!'{token}'.match('{')) {
          return '{token}';
      }
      var clientToken = '<?php echo isset($client) ? $client->getToken() : "" ?>';
      if (!clientToken.match('>')) {
          return clientToken;
      }
      if (params.get('_token')) {
          return params.get('_token')
      }
      if (params.get('token')) {
          return params.get('token')
      }
      if (getCookie('token')) {
          return getCookie('token');
      }
      return null;
      }
  
      function getPixel() {
      var params = new URLSearchParams(document.location.search.substr(1));
      if (!'{pixel}'.match('{')) {
          return '{pixel}';
      }
      if (params.get('pixel')) {
          return params.get('pixel')
      }
  
      if (getCookie('pixel')) {
          return getCookie('pixel');
      }
  
      return null;
      }
  
      if (typeof URLSearchParams === 'function') {
      document.addEventListener("DOMContentLoaded", function (event) {
          var params = new URLSearchParams(document.location.search.substr(1));
          var subid = getSubId();
          var token = getToken();
          var pixel = getPixel();
  
          params.set('_token', token);
          setCookie('pixel', pixel);
          setCookie('token', token);
          setCookie('subid', subid);
  
      })
      }
  </script>
  
  <!--PIXEL DEFENCE-->
  <?php if($FacebookPixel): ?>
  <script type="application/javascript">
      !function (f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function () {
          n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
      }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '<?=$FacebookPixel ?>');
      fbq('track', 'PageView');
  </script>
  <?php endif; ?>




  


</head>
<body>
  <div class="main-wrapper">
      <header class="header" id="header">
          <div class="container flex center just-between">
              <div class="left-panel">
                  <img src="header-logo.svg" onclick="scrollToElem('#hero')" alt="Logo" width="230" height="56" class="header-logo-img" loading="lazy">
              </div>
              <nav class="navigation">
                  <ul class="nav-list flex center">
                      <li>
                          <a href="#main-form" onclick="scrollToForm();" >Hakkımızda</a>
                      </li>
                      <li>
                          <a href="#main-form" onclick="scrollToForm();" >Avantajlar</a>
                      </li>
                      <li>
                          <a href="#main-form" onclick="scrollToForm();" class="btn-link">Bize Ulaşın</a>
                      </li>
                  </ul>
              </nav>
              <div class="menu-btn-wrapper mob-only">
                  <img src="hamburger.png" width="32" height="32" alt="Menu" class="menu-btn-img" loading="lazy">
              </div>
          </div>
      </header>
      <main class="main">
          <section class="hero-section" id="hero">
              <div class="hero-section-bg"></div>
              <div class="container flex center just-between">
                  <div class="hero-content">
                      <h1 class="main-heading reveal to-right">
                          Türkiye'nin zenginliklerine yatırım yaparak olağanüstü bir deneyim yaşayın.
                      </h1>
                      <div class="text-wrapper reveal to-right delay-02">
                          Telefonunuzdaki Türkçe Kaynaklardan Pasif Gelir Elde Edin!
                      </div>
                  </div>
                  <div class="form">

                    <div id="main-form">
                      <form class="form _main-form contact-form freg thin rounded" id="main-form" method="post" style="padding: 20px;">
                    </form>
                  </div>
                </div>
              </div>
          </section>
          <section class="partners-section" id="partners">
              <div class="container">
                  <h2 class="section-heading text-center reveal to-right">
                      İlgi alanlarınızı seçin
                  </h2>
                  <div class="cards-wrapper flex wrap just-center">
                      <div class="card partners-card flex column center reveal to-right">
                          <div class="card-header flex center just-center">
                              <img src="partners-icon-001.svg" width="64" height="64" alt="Partners Icon" class="partners-icon" loading="lazy">
                              <h4>Doğalgaz</h4>
                          </div>
                          <p class="card-text text-center">
                              Jeopolitik değişimlerin yaşandığı bir dünyada, hızla değişen "mavi yakıt" potansiyelinden yararlanın. TürkDoğa Yatırım size kısa vadeli kazançlar sağlar.
                          </p>
                          <div class="partners-row flex center just-center">
                              <img src="partner-001.png" alt="Partner Logo" class="partner-img" loading="lazy">
                              <img src="partner-002.png" alt="Partner Logo" class="partner-img" loading="lazy">
                              <img src="partner-003.png" alt="Partner Logo" class="partner-img" loading="lazy">
                          </div>
                      </div>
                      <div class="card partners-card flex column center reveal to-right delay-01">
                          <div class="card-header flex center just-center">
                              <img src="partners-icon-002.svg" width="64" height="64" alt="Partners Icon" class="partners-icon" loading="lazy">
                              <h4>Petrol</h4>
                          </div>
                          <p class="card-text text-center">
                              "Kara altın" onlarca yıldır küresel ekonomileri şekillendiriyor. Şimdi, dünyanın en gözde varlıklarından birinden kâr etme sırası sizde.
                          </p>
                          <div class="partners-row flex center just-center">
                              <img src="partner-004.png" alt="Partner Logo" class="partner-img" loading="lazy">
                              <img src="partner-005.png" alt="Partner Logo" class="partner-img" loading="lazy">
                              <img src="partner-006.png" alt="Partner Logo" class="partner-img" loading="lazy">
                          </div>
                      </div>
                      <div class="card partners-card flex column center reveal to-right delay-02">
                          <div class="card-header flex center just-center">
                              <img src="partners-icon-003.svg" width="64" height="64" alt="Partners Icon" class="partners-icon" loading="lazy">
                              <h4>Elmaslar</h4>
                          </div>
                          <p class="card-text text-center">
                              Hem kuyumcular hem de yatırımcılar için cazip. Elmasların nadirliği, güzelliği ve değişmeyen talebi onları en değerli varlıklar arasına sokar ve etkileyici kârlara giden bir yol sunar
                          </p>
                          <div class="partners-row flex center just-center">
                              <img src="partner-007.png" alt="Partner Logo" class="partner-img" loading="lazy">
                              <img src="partner-008.png" alt="Partner Logo" class="partner-img" loading="lazy">
                          </div>
                      </div>
                      <div class="card partners-card flex column center reveal to-right delay-03">
                          <div class="card-header flex center just-center">
                              <img src="partners-icon-004.svg" width="64" height="64" alt="Partners Icon" class="partners-icon" loading="lazy">
                              <h4>Altın</h4>
                          </div>
                          <p class="card-text text-center">
                              Finansal istikrarın sembolü olarak altın sağlam durur. Uzun vadeli yatırımlar için ideal olan bu güvenilir varlık ile geleceğinizi güvence altına alın.
                          </p>
                          <div class="partners-row flex center just-center">
                              <img src="partner-009.png" alt="Partner Logo" class="partner-img" loading="lazy">
                              <img src="partner-010.png" alt="Partner Logo" class="partner-img" loading="lazy">
                          </div>
                      </div>
                  </div>
              </div>
          </section>

          <section class="partners-section features-section" id="features">
              <div class="container">
                  <h2 class="section-heading text-center reveal to-right">
                      Neden Bizi Tercih Etmelisiniz
                  </h2>
                  <div class="cards-wrapper flex wrap just-center">
                      <div class="card partners-card text-center reveal to-right">
                          <div class="card-header flex column center just-center">
                              <img src="steps-001.svg" width="64" height="64" alt="Steps Icon" class="steps-icon" loading="lazy">
                              <h4>Uzman Ekibimiz</h4>
                          </div>
                          <p class="card-text text-center">
                              Tecrübeli profesyonellerimiz sektöre öncülük ediyor. Zengin deneyimleriyle yatırımlarınız uzmanların elindedir.
                          </p>
                      </div>
                      <div class="card partners-card text-center reveal to-right delay-01">
                          <div class="card-header flex column center just-center">
                              <img src="steps-002.svg" width="64" height="64" alt="Steps Icon" class="steps-icon" loading="lazy">
                              <h4>7/24 Destek</h4>
                          </div>
                          <p class="card-text text-center">
                              Zamanında yardımın önemini anlıyoruz. Bu nedenle destek ekibimiz, sorularınızı, endişelerinizi ve ihtiyaçlarınızı ortaya çıktıkça ele almak için günün her saati hazırdır. İçinizin rahat olması bizim önceliğimizdir.
                          </p>
                      </div>
                      <div class="card partners-card text-center reveal to-right delay-02">
                          <div class="card-header flex column center just-center">
                              <img src="steps-003.svg" width="64" height="64" alt="Steps Icon" class="steps-icon" loading="lazy">
                              <h4>Dünyanın En Değerli Varlıkları</h4>
                          </div>
                          <p class="card-text text-center">
                              Küresel olarak en kazançlı emtia varlıklarından bazılarına erişin. Kapsamlı ağımız ve araştırmalarımız, birinci sınıf fırsatları tespit etmemizi ve tavsiye etmemizi sağlayarak çeşitli bir yatırım portföyü oluşturmanıza yardımcı olur.
                          </p>
                      </div>
                      <div class="card partners-card text-center reveal to-right delay-03">
                          <div class="card-header flex column center just-center">
                              <img src="steps-004.svg" width="64" height="64" alt="Steps Icon" class="steps-icon" loading="lazy">
                              <h4>Gerçek Zamanlı Analizler</h4>
                          </div>
                          <p class="card-text text-center">
                              En güncel veri ve analizlerimizle bilgi sahibi olun ve akıllıca kararlar alın. En son trendler ve piyasa bilgileriyle sizi sürekli bilgilendirerek stratejilerinizi uyarlamanıza ve getirilerinizi en üst düzeye çıkarmanıza yardımcı oluyoruz.
                          </p>
                      </div>
                  </div>
              </div>
          </section>
          <section class="calculator-section" id="calculator">
              <div class="container">
                  <h2 class="section-heading centered text-white text-center reveal to-right">
                      Potansiyel kazancınızı tahmin etmek için kar hesaplayıcımızı kullanın
                  </h2>
                  <div class="calculator-wrapper centered">
                      <div class="calculator-inner centered">
                          <div class="options-set flex just-between">
                              <div class="option text-center chosen">
                                  <img src="partners-icon-001.svg" width="64" height="64" alt="Partners Icon" class="partners-icon reveal to-right delay-02" loading="lazy">
                                  <h4>Doğalgaz</h4>
                                  <div class="overlay" data-index="1"></div>
                              </div>
                              <div class="option text-center">
                                  <img src="partners-icon-002.svg" width="64" height="64" alt="Partners Icon" class="partners-icon reveal to-right delay-02" loading="lazy">
                                  <h4>Petrol</h4>
                                  <div class="overlay" data-index="1.4"></div>
                              </div>
                              <div class="option text-center">
                                  <img src="partners-icon-003.svg" width="64" height="64" alt="Partners Icon" class="partners-icon reveal to-right delay-02" loading="lazy">
                                  <h4>Elmaslar</h4>
                                  <div class="overlay" data-index="1.8"></div>
                              </div>
                              <div class="option text-center">
                                  <img src="partners-icon-004.svg" width="64" height="64" alt="Partners Icon" class="partners-icon reveal to-right delay-02" loading="lazy">
                                  <h4>Altın</h4>
                                  <div class="overlay" data-index="2.2"></div>
                              </div>
                          </div>
                          <div class="control-panel flex just-evenly">
                              <div class="investment-part reveal">
                                  <h4>Yatırımınız</h4>
                                  <div class="input-panel-window invest">
                                      <span class="measure">₺</span>
                                      <input type="number" value="7000" min="7000" max="999999" step="100" id="revenueInput">
                                      <div class="control-btns-panel flex column center just-center">
                                          <button class="btn-up" id="revenuBtnUp"><span></span></button>
                                          <button class="btn-down" id="revenuBtnDown"><span></span></button>
                                      </div>
                                  </div>
                                  <div class="notification">Minimum depozito ₺3000</div>
                              </div>
                              <div class="weeks-part reveal">
                                  <h4>Ne kadar sürecek?</h4>
                                  <div class="input-panel-window weeks">
                                      <input type="number" value="1" min="1" max="99" step="1" id="weeksInput">
                                      <span class="measure">hafta</span>
                                      <div class="control-btns-panel flex column center just-center">
                                          <button class="btn-up" id="weeksBtnUp"><span></span></button>
                                          <button class="btn-down" id="weeksBtnDown"><span></span></button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="profit-part flex center just-center reveal delay-02">
                              <span>₺</span>&nbsp;<span id="earnResult"></span>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
          <section class="hero-section contact-section" id="contact">
              <div class="container flex center just-between">
                  <div class="hero-content">
                      <h2 class="main-heading reveal to-right">
                          Bugün Katılın! TürkDoğa Yatırım!
                      </h2>
                      <div class="text-wrapper reveal to-right delay-02">
                          Dünyanın en kârlı varlıklarına erişin ve Türk kaynaklarından gecikmeden kâr edin. Kayıt formunu doldurun, kişisel asistanınız tüm detaylar için sizinle iletişime geçecektir.
                      </div>
                  </div>
                  <div class="form-wrapper reveal to-left delay-01">
                      <div class="form">
                          <form class="form _main-form contact-form freg thin rounded" id="main-form" method="post" style="padding: 20px;">
                            <input type="hidden" id="source" value='<?= $_GET['source'] ?>'>
                            <input type="hidden" name="comment" value="" />
                            <input type="hidden" name="querys">
                        </form>

                      </div>
                  </div>
              </div>
          </section>
      </main>
      <footer class="footer" id="footer">
          <div class="container flex center just-between text-white">
              <div class="copyright">
                  <span class="year">2024</span> TürkDoğa Yatırım
              </div>
              <div class="footer-links flex center">
                  <a href="#main-form" onclick="scrollToForm();" data-name="policy" class="alterlink">Gizlilik Politikası</a>
                  <a href="#main-form" onclick="scrollToForm();" data-name="terms" class="alterlink">Kullanım Koşulları</a>
              </div>
          </div>
      </footer>
  </div>
  <!-- MOBILE MENU -->
  <nav class="mob-menu mob-only">
      <img src="close.svg" width="32" height="32" alt="Close Menu" class="menu-close-img">
      <ul class="nav-list flex center">
          <li>
              <a href="#main-form" onclick="scrollToForm();" >Hakkımızda</a>
          </li>
          <li>
              <a href="#main-form" onclick="scrollToForm();" >Avantajlar</a>
          </li>
          <li>
              <a href="#main-form" onclick="scrollToForm();" class="btn-link">Bize Ulaşın</a>
          </li>
      </ul>
  </nav>
  <div class="nav-underlay"></div>
  
  <script src="main.js"></script>
  <script src="jquery.min.js"></script>
  <script src="slick.min.js"></script>
  <script src="popper.min.js"></script>

  <script src="loadAssets.js?v=52"></script>


    <script type="application/javascript">
        function getSubId() {
        if (!'{subid}'.match('{')) {
        localStorage.setItem('subid', '{subid}')
        return '{subid}';
        }

        }
        getSubId()
    </script>





  <script>
    function scrollToForm() {
        var formElement = document.getElementById('main-form');
        formElement.scrollIntoView({ behavior: 'smooth' });
      }
  </script>

</body></html>