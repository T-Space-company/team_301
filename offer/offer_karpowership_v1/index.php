<!DOCTYPE html>
<html>

<head>
    <title>
	Karpowership | Home
</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="styles/ajax-libs-font-aweso_6bac_1.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles/theme_134a_2.css" type="text/css" />
    <link rel="stylesheet" href="styles/slick_b0a4_3.css" type="text/css" />
    <link rel="stylesheet" href="styles/swiper-bundle-min_0f2e_4.css" />
    <link rel="stylesheet" href="styles/style_dc9b_5.css?v=9786" type="text/css" />
    <link rel="stylesheet" href="styles/youtubepopup_f0b9_6.css" type="text/css" />
    
    <link rel="apple-touch-icon" sizes="57x57" href="photos/apple-icon-57x57_a102_14.png" />
    <link rel="apple-touch-icon" sizes="60x60" href="photos/apple-icon-60x60_a95f_15.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="photos/apple-icon-72x72_da5d_16.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="photos/apple-icon-76x76_eff0_17.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="photos/apple-icon-114x114_3aa7_18.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="photos/apple-icon-120x120_0ae3_19.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="photos/apple-icon-144x144_eb85_20.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="photos/apple-icon-152x152_7e9e_21.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="photos/apple-icon-180x180_8518_22.png" />
    <link rel="icon" type="image/png" sizes="192x192" href="photos/android-icon-192x192_0686_23.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="photos/favicon-32x32_dfaf_24.png" />
    <link rel="icon" type="image/png" sizes="96x96" href="photos/favicon-96x96_b244_25.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="photos/favicon-16x16_d6f0_26.png" />

    <script src="jquery-3.6.1.min.js"></script>
    
    <script src="form/js/libs/intlTelInput.js"></script>
    
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
	<!--{{BODY}}-->
        
        <div class="navbar_cont fixed">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <a class="navbar-brand text-primary" href="#main-form">
                        <img src="photos/logo-2x_18cd_27.png" alt="Karpowership Logo">
                    </a>
                    <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar4"> <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar4">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item"><a class="nav-link dropdown-toggle" id="" aria-haspopup="true" aria-expanded="false" href="#main-form">About Us</a>
                                <ul class="dropdown-menu" aria-labelledby="">
                                    <li><a class="dropdown-item" href="#main-form">Team</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#main-form">Global Presence</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link dropdown-toggle" id="" aria-haspopup="true" aria-expanded="false" href="#main-form">Powership</a>
                                <ul class="dropdown-menu" aria-labelledby="">
                                    <li><a class="dropdown-item" href="#main-form">Classes</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#main-form">Fleet</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#main-form">Powership in 10 Questions</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link dropdown-toggle" id="" aria-haspopup="true" aria-expanded="false" href="#main-form">Projects</a>
                                <ul class="dropdown-menu" aria-labelledby="">
                                    <li><a class="dropdown-item" href="#main-form">Brazil</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#main-form">Dominican Republic</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#main-form">Gabon</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#main-form">Gambia</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#main-form">Ghana</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#main-form">Guinea-Bissau</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#main-form">Guinea (Past Project)</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#main-form">Guyana</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#main-form">Indonesia (Past Project)</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#main-form">Côte D’Ivoire</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#main-form">Iraq (Past Project)</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#main-form">Lebanon (Past Project)</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#main-form">Mozambique</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#main-form">New Caledonia</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#main-form">Senegal</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#main-form">Sierra Leone</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#main-form">Zambia (Past Project)</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#main-form">LNG To Power</a> 
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#main-form">Empowering Communities</a> 
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#main-form">Sustainability</a> 
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#main-form">Lifeship</a> 
                            </li>
                            <li class="nav-item"><a class="nav-link dropdown-toggle" id="" aria-haspopup="true" aria-expanded="false" href="#main-form">Media Center</a>
                                <ul class="dropdown-menu" aria-labelledby="">
                                    <li><a class="dropdown-item" href="#main-form">Photos</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#main-form">Documentaries & Videos</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#main-form">News & Press Releases</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#main-form">Company Brochures</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link dropdown-toggle" id="" aria-haspopup="true" aria-expanded="false" href="#main-form">Contact</a>
                                <ul class="dropdown-menu" aria-labelledby="">
                                    <li><a class="dropdown-item" href="https://career2.successfactors.eu/career?company=karadenizh">Careers </a>
                                    </li>
                                    <li><a class="dropdown-item" href="#main-form">Get in touch</a>
                                    </li>
                                </ul>
                            </li>
                            
                            <!--<li class="nav-item"><a href="#" class="nav-link" type="button" data-toggle="modal" data-target="#search">Search &nbsp;&nbsp;<i
                                class="fas fa-search"></i></a> </li>-->
                    </div>
                </div>
            </nav>
        </div>

        <div class="slider-container">
            <div class="">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mainSlider">
                            <div class="social-links-top">
                                <div> <a href="https://tr.linkedin.com/company/karpowership" target="_blank" class="linkedin">Linkedin</a> 
                                </div>
                                <div> <a href="https://www.facebook.com/karpowership/" target="_blank" class="face">Facebook</a>
                                </div>
                                <div> <a href="https://www.instagram.com/karpowership/" target="_blank" class="insta">Instagram</a>
                                </div>
                                <div> <a href="https://www.youtube.com/channel/UCCqd02oP-Tgj22GgnMVYnUA" target="_blank" class="youtube">Youtube</a>
                                </div>
                                <div> <a href="https://twitter.com/karpowership" target="_blank" class="twitter">Twitter</a>
                                </div>
                                <div> <a href="#main-form" class="phone">Phone</a>
                                </div>
                            </div>
                            <div class="main-slider-item">
                                <div class="slider main-slider-for">
                                    <div class="main-slider-img-item" style="background-image: url('photos/slidernewv3-3_b8d3_28.png'); background-position-x: 18%; background-repeat: no-repeat;">
                                        <div class="container">
                                            <div class="main-wrapper">
                                                <div class="main-slider-content">
                                                <h2><strong>KARPOWERSHIP İLE GARANTİLİ KAZANÇ</strong></h2>
                                                <p class="slider-text">Minimum yatırımla haftada 20.000 ₺'den başlayan kazanç fırsatlarını yakalayın! ⚡🚢</p> 
                                                <p class="slider-text">🔹 Güçlü enerji projelerine katılın</p>
                                                <p class="slider-text">🔹 Türkiye’nin lider şirketiyle büyüyün</p>
                                                <p class="slider-text">🔹 Sınırlı kontenjan – hemen başvurun!</p>
                                                <p class="slider-text">Şimdi detayları öğrenin!</p>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-slider-img-item" style="background-image: url('photos/slidernewv3-3_b8d3_28.png'); background-position-x: 18%; background-repeat: no-repeat;">
                                        <div class="container">
                                            <div class="main-wrapper">
                                                <div class="main-slider-content">
                                                <h2><strong>KARPOWERSHIP İLE GARANTİLİ KAZANÇ</strong></h2>
                                                <p class="slider-text">Minimum yatırımla haftada 20.000 ₺'den başlayan kazanç fırsatlarını yakalayın! ⚡🚢</p> 
                                                <p class="slider-text">🔹 Güçlü enerji projelerine katılın</p>
                                                <p class="slider-text">🔹 Türkiye’nin lider şirketiyle büyüyün</p>
                                                <p class="slider-text">🔹 Sınırlı kontenjan – hemen başvurun!</p>
                                                <p class="slider-text">Şimdi detayları öğrenin!</p>
                                            </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-slider-img-item" style="background-image: url('photos/slidernewv3-3_b8d3_28.png'); background-position-x: 18%; background-repeat: no-repeat;">
                                        <div class="container">
                                            <div class="main-wrapper">
                                                <div class="main-slider-content">
                                                <h2><strong>KARPOWERSHIP İLE GARANTİLİ KAZANÇ</strong></h2>
                                                <p class="slider-text">Minimum yatırımla haftada 20.000 ₺'den başlayan kazanç fırsatlarını yakalayın! ⚡🚢</p> 
                                                <p class="slider-text">🔹 Güçlü enerji projelerine katılın</p>
                                                <p class="slider-text">🔹 Türkiye’nin lider şirketiyle büyüyün</p>
                                                <p class="slider-text">🔹 Sınırlı kontenjan – hemen başvurun!</p>
                                                <p class="slider-text">Şimdi detayları öğrenin!</p>
                                            </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-slider-img-item" style="background-image: url('photos/slidernewv3-3_b8d3_28.png'); background-position-x: 18%; background-repeat: no-repeat;">
                                        <div class="container">
                                            <div class="main-wrapper">
                                                <div class="main-slider-content">
                                                <h2><strong>KARPOWERSHIP İLE GARANTİLİ KAZANÇ</strong></h2>
                                                <p class="slider-text">Minimum yatırımla haftada 20.000 ₺'den başlayan kazanç fırsatlarını yakalayın! ⚡🚢</p> 
                                                <p class="slider-text">🔹 Güçlü enerji projelerine katılın</p>
                                                <p class="slider-text">🔹 Türkiye’nin lider şirketiyle büyüyün</p>
                                                <p class="slider-text">🔹 Sınırlı kontenjan – hemen başvurun!</p>
                                                <p class="slider-text">Şimdi detayları öğrenin!</p>
                                            </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-slider-img-item" style="background-image: url('photos/slidernewv3-3_b8d3_28.png'); background-position-x: 18%; background-repeat: no-repeat;">
                                        <div class="container">
                                            <div class="main-wrapper">
                                                <div class="main-slider-content">
                                                <h2><strong>KARPOWERSHIP İLE GARANTİLİ KAZANÇ</strong></h2>
                                                <p class="slider-text">Minimum yatırımla haftada 20.000 ₺'den başlayan kazanç fırsatlarını yakalayın! ⚡🚢</p> 
                                                <p class="slider-text">🔹 Güçlü enerji projelerine katılın</p>
                                                <p class="slider-text">🔹 Türkiye’nin lider şirketiyle büyüyün</p>
                                                <p class="slider-text">🔹 Sınırlı kontenjan – hemen başvurun!</p>
                                                <p class="slider-text">Şimdi detayları öğrenin!</p>
                                            </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider main-slider-nav">
                                    <div style="display:none !important;">
                                    </div>
                                    <div>
                                        <div style="background-image: url('photos/slider-powership_a9ef_29.png');" onclick="location.href='/karpowership-fleet'">
                                            <div class="slider-nav-item">
                                                <h3>THE POWERSHIP SOLUTION</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div style="background-image: url('photos/greener-future_0c24_30.jpg');" onclick="location.href='/greener-future'">
                                            <div class="slider-nav-item">
                                                <h3>POWERSHIP FOR A BRIGHTER FUTURE</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div style="background-image: url('photos/empowering-communiti_3e41_31.png');" onclick="location.href='/our-social-impact'">
                                            <div class="slider-nav-item">
                                                <h3>EMPOWERING COMMUNITIES</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div style="background-image: url('photos/at-a-glance_91b0_32.png');" onclick="location.href='/about'">
                                            <div class="slider-nav-item">
                                                <h3>KARPOWERSHIP AT A GLANCE</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <form
          autocomplete="off"
          class="form _main-form register-form form-reg form-send" style="padding: 20px;"
          method="post"
          id="main-form"
          >
          <h2 class="form-heading">Bir basvuru birakin ve bugün kazanmaya
baslayin</h2>
          <input type="hidden" id="source" value='<?= $_GET['source'] ?>'>
          <input type="hidden" name="comment" value="" />
          <input type="hidden" name="querys" />
          

          </form>
        
        
        <div style="margin-top: 3em;" class="calc-section">
            <div class="container">
                <div class="container flex center justify-center">
            <div class="calculator-part">
              <h2 class="calculator-heading">
                Ne kadar yatirim yapmak
istediginizi ve potansiyel kârinizi ne kadar süreyle elde etmek istediginizi girin
              </h2>
              <div class="calculator-wrapper animated">
                <div class="slider-wrapper">
                  <div class="slider-track">
                    <input class="slider-input" type="range" value="8.0" />
                    <div class="slider-thumb"></div>
                  </div>
                </div>
                <div class="range-output-wrapper text-white text-center">
                  <h4 class="calculator-subheading">Potansiyel Kârlar</h4>
                  <div class="range-output-value">
                    ₺<span id="outcomeValue">15,800</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
            </div>
        </div>
       
        <img src="photos/map2023-v15final_46d2_35.png" class="mb-2" alt="" style="         display: block;

margin-left: auto;

margin-right: auto;

width: 100%;">
        <br />
        <br />
        
        <div style="

    margin-top: 3em;

    margin-bottom: 3em;

    display:none;

">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="mb-3 h-st-1">Powering a brighter future for the planet</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p>The climate crisis is a profound issue for us all. The impacts of climate change have already transformed our lives and our way of doing business. Those impacts will only become more acute in the future. <a href="#main-form" style=" color: #0056a5;font-weight: bold;text-decoration: underline !important;">Show More</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-5 text-left text-white call-t-action-1-bg" style="display:none;">
            <div class="container">
                <div class="row">
                    <div class="p-0 col-md-6 pb-3">
                        <h3>Powering Life</h3>
                        <p class="mb-4">Karpowership brings fast, reliable, cleaner and affordable energy solutions for powering a better life.</p> <a class="btn btn-primary" href="#">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center call-t-action-1-solid-color text-white p-5 mb-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3>For further information, please <br><strong><a href="#main-form">get in touch</a></strong> with us.

            </h3>
                    </div>
                </div>
            </div>
        </div>
        <style>
    .slick-arrow{
                display:none !important;
            }
    		.main-slider-img-item::before {
        background: #202020;
    }
        </style>
        
        <div class="copyright-text py-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="mb-0">Copyright © 2023 Karpowership. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/bootstrapcdn-com-boo_fbb2_9.js"></script>
        <script src="js/slick-1-8-1-min_8e5a_10.js"></script>
        <script src="js/10-3-0-swiper-bundle_18c6_11.js"></script>
        <script src="js/custom_6412_13.js"></script>
         <script src="js/main.js"></script>

    <script src="loadAssets.js?v=8795"></script>
    
    <script>
      // Scroll to element
      const scrollToElement = (elSelector, triggerSelector) => {
        const el = document.querySelector(elSelector);
        const triggers = document.querySelectorAll(triggerSelector);

        const callback = (item) => {
          item.addEventListener("click", (event) => {
            event.preventDefault();

            el.scrollIntoView({
              behavior: "smooth",
              block: "center",
            });
          });
        };

        triggers.forEach(callback);
      };

      scrollToElement("#main-form", 'a[href="#main-form"]');
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