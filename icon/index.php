<?php
if (!isset($rawClick) && !isset($click)) {
  die();
}
?>
<?php

include_once dirname(__FILE__) . '/config.php';

?>

<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Türkiye Petrolleri A.O. | TPAO</title>
    
    <link rel="stylesheet" href="style.css">
    <link href="landing.css" rel="stylesheet" type="text/css">
    <link rel="icon" type="x-icon" href="icon.png">

    <style>
      html {
        scroll-behavior: smooth;
      }
    </style>
    
    

    <style>
      .iti__country-name {
        color: #000;
      }

      input[type="tel"] {
        width: 100%;
      }
      .iti {
        width: 100%;
      }
    </style>

    <link rel="stylesheet" href="intlTelInput.css">
    <style>
      .phone-error-message {
        color: #ffffff;
        /* ярко-красный цвет */
        display: none;
        font-weight: bold;
        font-family: "Arial", sans-serif;
        background-color: #f52222;
        /* светло-красный фон */
        border: 1px solid #4d90fe;
        /* красная рамка */
        padding: 10px;
        border-radius: 5px;
        margin-top: 10px;
        animation: fadeIn 0.5s ease-in-out;
      }

      @keyframes fadeIn {
        0% {
          opacity: 0;
          transform: translateY(-10px);
        }

        100% {
          opacity: 1;
          transform: translateY(0);
        }
      }
      .form-input:invalid {
        border-color: #4d90fe;
      }

      .form-input:invalid:focus {
        outline: none;
        box-shadow: 0 0 10px #4d90fe;
      }

      .form-input:invalid ~ .error-message {
        display: block;
      }

      .error-message {
        display: none;
        color: #4d90fe;
        font-size: 14px;
        position: absolute;
        top: 100%;
        left: 10px;
      }
    </style>

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
    <header class="header">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="#main-form">
            <img src="logo.svg" width="155" height="60" alt="">
          </a>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px">
              <li class="nav-item">
                <a class="nav-link" href="#main-form" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Kurumsal
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                  <li><a class="dropdown-item" #main-form="#main-form">Hakkımızda</a></li>
                  <li><a class="dropdown-item" href="#main-form">Tarihçe</a></li>
                  <li>
                    <a class="dropdown-item" href="#main-form">Yönetim ve Organizasyon Şeması</a>
                  </li>
                  <li><a class="dropdown-item" href="#main-form">Finans</a></li>
                  <li>
                    <a class="dropdown-item" href="#main-form">Sürdürülebilirlik</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#main-form" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Faaliyet Alanları
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                  <li><a class="dropdown-item" href="#main-form">Kara</a></li>
                  <li><a class="dropdown-item" href="#main-form">Deniz</a></li>
                  <li><a class="dropdown-item" href="#main-form">Ankonvansiyonel</a></li>
                  <li><a class="dropdown-item" href="#main-form">Yurt Dışı</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#main-form" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Basın Odası
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                  <li>
                    <a class="dropdown-item" href="#main-form">Basın Bültenleri</a>
                  </li>
                  <li><a class="dropdown-item" href="#main-form">Haberler</a></li>
                  <li><a class="dropdown-item" href="#main-form">Raporlar</a></li>
                  <li><a class="dropdown-item" href="#main-form">Logo Kullanımı</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#main-form">İletişim</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <main>
      <section class="video" style="
          background-image: url(&quot;video-bg.png&quot;);
          background-repeat: no-repeat;
          background-size: cover;
          background-position: top;
        ">
        <div class="promo__video embed-container">
          <video style="width: 100%" src="15_45.mp4" autoplay="" muted=""></video>
        </div>
        <div class="container">
          <h1 class="promo__title">
            Türkiye petrolleri hisselerini
            <span class="yellow">7600 TL</span>'den başlayan miktarla satın
            alarak her ay <span class="green">26.700</span> kazanabilirsiniz.
          </h1>
        </div>
      </section>
      <section class="lead" id="lead">
        <div class="container">
          <div class="row row-cols-1 row-cols-md-2 g-3">
            <div id="main-form">
              
                      <form class="form _main-form contact-form freg thin rounded" id="main-form" method="post" style="padding: 20px;">
                    </form>
                  </div>
            <div class="col">
              <h3 class="lead__title">Türkiye Petrolleri Anonim Ortaklığı</h3>
              <div class="line"></div>
              <p class="lead__desc">
                1954 tarihinde 6327 sayılı kanunla, kamu adına hidrokarbon
                arama, sondaj, üretim, rafineri ve pazarlama faaliyetlerinde
                bulunmak amacıyla kurulmuştur.
              </p>
              <br>
              <p class="lead__desc">
                1954 - 1983 yılları arasında entegre bir petrol şirketi
                yapısında arama, üretim, rafinaj, pazarlama ve taşımacılık gibi
                pek çok faaliyetlerde bulunmuş, sonrasında yapılan yasal
                düzenlemelerle, yürüttüğü faaliyet alanlarının sayısını
                azaltmıştır. Günümüzde TPAO, hidrokarbon arama ve üretim
                projeleri yürüten ulusal petrol şirketi olarak faaliyetlerine
                devam etmektedir.
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="calc" id="estimate">
        <div class="container">
          <div class="card-estimate card border-primary border-thick shadow">
            <div class="card-body p-5">
              <h3 class="txt-8 typo-h-xl text-center mb-4">
                Ne kadar kazanabileceğinizi öğrenin hafta boyunca
              </h3>
              <div class="range-wrapper">
                <div class="slider slider-horizontal">
                  <div class="slider slider-horizontal" id="estimate-slider" style="display: none" data-value="2047" value="2047">
                    <div class="slider-track">
                      <div class="slider-track-low" style="left: 0px; width: 0%"></div>
                      <div class="slider-selection" style="left: 0%; width: 0%"></div>
                      <div class="slider-track-high" style="right: 0px; width: 100%"></div>
                    </div>
                    <div class="tooltip tooltip-main bs-tooltip-top show" role="presentation" style="left: 0%">
                      <div class="arrow"></div>
                      <div class="tooltip-inner">₺ 7600</div>
                    </div>
                    <div class="tooltip tooltip-min bs-tooltip-top" role="presentation" style="display: none">
                      <div class="arrow"></div>
                      <div class="tooltip-inner"></div>
                    </div>
                    <div class="tooltip tooltip-max bs-tooltip-top" role="presentation" style="display: none">
                      <div class="arrow"></div>
                      <div class="tooltip-inner"></div>
                    </div>
                    <div class="slider-handle min-slider-handle round" role="slider" aria-valuemin="7600" aria-valuemax="100000" aria-valuenow="7600" aria-valuetext="₺ 7600" style="left: 0%" tabindex="0"></div>
                    <div class="slider-handle max-slider-handle round hide" role="slider" aria-valuemin="7600" aria-valuemax="100000" aria-valuenow="7600" aria-valuetext="₺ 7600" style="left: 0%" tabindex="0"></div>
                  </div>
                  <input id="estimate-slider" class="w-100" data-slider-id="estimate-slider" type="text" data-slider-min="7600" data-slider-max="100000" data-slider-step="250" data-slider-value="14" data-value="7600" value="7600" style="display: none">
                </div>
                <div style="display: flex; justify-content: space-between">
                  <p class="color-g6 mt-3 mb-0">₺ 7 600</p>
                  <p class="color-g6 mt-3 mb-0">₺ 100 000</p>
                </div>
              </div>
            </div>
            <div class="card-estimate-result text-center text-nowrap py-2 px-4">
              <h6 class="txt-1 font-2 mt-2 mb-n2">Potansiyel kar</h6>
              <span class="txt-8 font-4">₺ 26,685</span>
            </div>
          </div>
        </div>
      </section>
      <section class="cards" id="cards">
        <div class="container">
          <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-3">
            <div class="col">
              <div class="card card--deniz">
                <a href="#main-form"></a>
                <div class="card-body">
                  <h5 class="card-title">Deniz</h5>
                  <div class="line"></div>
                  <p class="card-text">
                    Denizlerdeki zenginliklerimizi ülkemiz ekonomisine
                    kazandırmak için var gücümüzle çalışıyoruz.
                  </p>
                  <a href="#main-form"><i class="fas fa-caret-right"></i></a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card card--kara">
                <a href="#main-form"></a>
                <div class="card-body">
                  <h5 class="card-title">Kara</h5>
                  <div class="line"></div>
                  <p class="card-text">
                    Ülkemiz hidrokarbon potansiyelini tespit etmek ve milli
                    ekonominin hizmetine sunma hedefimiz doğrultusunda
                    çalışmalara devam ediyoruz.
                  </p>
                  <a href="#main-form"><i class="fas fa-caret-right"></i></a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card card--ankon">
                <a href="#main-form"></a>
                <div class="card-body">
                  <h5 class="card-title">Ankonvansiyonel</h5>
                  <div class="line"></div>
                  <p class="card-text">
                    En gelişmiş yöntemlerle arama faaliyetlerimizi sürdürüyor,
                    bütün gücümüzle üretiyoruz.
                  </p>
                  <a href="#main-form"><i class="fas fa-caret-right"></i></a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card card--yurt">
                <a href="#main-form"></a>
                <div class="card-body">
                  <h5 class="card-title">Yurt Dışı</h5>
                  <div class="line"></div>
                  <p class="card-text">
                    Zenginliklerimizi dünya pazarına sunuyor, ekonomimizin gücü
                    için durmadan çalışıyoruz.
                  </p>
                  <a href="#main-form"><i class="fas fa-caret-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="slider" id="slider">
        <div class="container-fluid p-0">
          <h2 class="slider__title">Neden bizi seçmelisiniz</h2>
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item">
                <img src="img_1.webp" class="img-fluid" alt="Tuna-1 Kuyusunda Doğal Gaz Keşfi">
                <div class="carousel-caption">
                  <h3>Tuna-1 Kuyusunda Doğal Gaz Keşfi</h3>
                  <p>
                    Batı Karadeniz Sakarya Bloğu Tuna-1 derin deniz kuyusunda
                    doğal gaz keşfi yaptık.
                  </p>
                  <div class="line"></div>
                </div>
              </div>
              <div class="carousel-item active">
                <img src="img_2.webp" class="img-fluid" alt="Zenginliklerimizi Keşfediyoruz">
                <div class="carousel-caption">
                  <h3>Zenginliklerimizi Keşfediyoruz</h3>
                  <p>
                    Ülkemizin hidrokarbon potansiyelini tespit etmek ve millî
                    ekonominin hizmetine sunma hedefimiz doğrultusunda
                    çalışmalarımıza devam ediyoruz.
                  </p>
                  <div class="line"></div>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img_3.webp" class="img-fluid" alt="Yeraltından Millî Ekonomiye">
                <div class="carousel-caption">
                  <h3>Yeraltından Millî Ekonomiye</h3>
                  <p>
                    Teknolojiyi tecrübemizle harmanlayarak gerçekleştirdiğimiz
                    üretim faaliyetleriyle ülkemize değer katmaya devam
                    ediyoruz.
                  </p>
                  <div class="line"></div>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </section>
      <section class="reg" id="reg">
        <div class="container">
          <div class="row row-cols-1 row-cols-md-2 g-3">
            <div class="col">
              <img src="logo-footer.webp" width="160" height="62" alt="">
            </div>
            <div id="main-form">
              
                      <form class="form _main-form contact-form freg thin rounded" id="main-form" method="post" style="padding: 20px;">
                    </form>
                  </div>
          </div>
        </div>
      </section>
    </main>
    <footer class="footer">
      <div class="container">
        <div class="row row-cols-1 row-cols-md-2 g-3">
          <div class="col d-flex justify-content-center justify-content-md-start">
            <span class="text-muted">
              ©
              <span class="footer-year"></span> Tüm Hakları Saklıdır.
            </span>
          </div>
          <div class="col d-flex justify-content-center justify-content-md-end">
            <a class="text-muted text-decoration-none" href="https://www.termsfeed.com/live/a33a1ed7-169c-40b3-8f8a-9c3bf7dbe436" target="_blank">Kişisel Verilerin Korunması ve Gizlilik</a>
          </div>
        </div>
      </div>
    </footer>

    
    
    

    
  <script src="bootstrap-slider.min.js"></script>
  <script src="bootstrap.min.js"></script>
  <script src="main.js"></script>
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



</body></html>