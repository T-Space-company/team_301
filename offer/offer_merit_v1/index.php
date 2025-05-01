<?php
if (!isset($rawClick) && !isset($click)) {
  die();
}
?>
<?php

include_once dirname(__FILE__) . '/config.php';

?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>MeritMotiveaiz - MeritMotiveaiz: شريكك الموثوق في استشارات تكنولوجيا المعلومات</title>
      <meta property="og:title" content="MeritMotiveaiz - MeritMotiveaiz: Ihr zuverlässiger IT-Beratungspartner">
      <meta property="og:image" content="product-images/consulting-2024-09-28-1.webp">

      <meta property="og:description" content="Bei MeritMotiveaiz sind wir darauf spezialisiert, hochmoderne IT-Beratungsdienstleistungen anzubieten, die auf die.">
      <meta name="description" content="Bei MeritMotiveaiz sind wir darauf spezialisiert, hochmoderne IT-Beratungsdienstleistungen anzubieten, die auf die.">

      <link rel="shortcut icon" href="page/ar1/brand-identity.svg" type="image/x-icon">
      <link rel="stylesheet" href="page/ar1/main-style.css?ver=4.9&hash=d424a">
      
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
      <header>
         <div class="container">
            <nav class="navbar">
               <div class="logo">
                 <a class="logo-thumb-lp" href="./">
                    <div class="logo-img-lp">
                       <img src="page/ar1/brand-identity.svg" alt="">
                    </div>
                    MeritMotiveaiz
                 </a>
               </div>
               <div class="menu-toggle" id="mobile-menu">
                   <span class="bar"></span>
                   <span class="bar"></span>
                   <span class="bar"></span>
               </div>
               <ul class="nav-list">
                   <li><a href="#main-form">الصفحة الرئيسية</a></li>
                   <li><a href="#main-form">معلومات عنا</a></li>
                   <li><a href="#main-form" >خدمات</a></li>
                   <li><a href="#main-form">اتصل بنا</a></li>
               </ul>
           </nav>
         </div>
     </header>
     <section class="section-hero-lp">
      <div class="bg-section-hero">

      </div>
      <div class="container">
      <div class="box-hero-text-all-lp">
         <h1 class="hero-title-lp element">
         مرحبًا بك في MeritMotiveaiz، حيث يبدأ مستقبلك المالي اليوم. نحن فخورون بمرافقتك في هذه الرحلة المثيرة
         </h1>
         <p class="sub-title-lp element1">نحن منتبهون، أكفاء، مستقرون...</p>

         <div class="thumb-btn-hero-lp">
            <a class="btn-5 element2" href="#main-form">نصيحة مختصة</a>
         </div>

      </div>
      </div>
      <div class="container ">
        <div class="thumb-img-hero-lp element3">
         <div class="box-img-hero-lp">
            <img src="page/ar1/graphics/gallery_2024-10-03_13-12-400.webp" alt="">
         </div>
        </div>

      </div>
     </section>

     <section class="marquee-partners-lp">
      <div class="marquee-container">
         <div class="marquee">
            <div class="thumb-marquee-lp">
               <div class="box-partners-lp inventory__iconcd">
                  <img src="page/ar1/graphics/technology_partner_XZX90.png" alt="">
               </div>
               <div class="box-partners-lp">
                  <img src="page/ar1/graphics/technology_partner_XZX91.png" alt="">
               </div>
               <div class="box-partners-lp">
                  <img src="page/ar1/graphics/technology_partner_XZX92.png" alt="">
               </div>
               <div class="box-partners-lp">
                  <img src="page/ar1/graphics/technology_partner_XZX93.png" alt="">
               </div>
               <div class="box-partners-lp">
                  <img src="page/ar1/graphics/technology_partner_XZX94.png" alt="">
               </div>
               <div class="box-partners-lp">
                  <img src="page/ar1/graphics/technology_partner_XZX90.png" alt="">
               </div>
               <div class="box-partners-lp">
                  <img src="page/ar1/graphics/technology_partner_XZX91.png" alt="">
               </div>
               <div class="box-partners-lp">
                  <img src="page/ar1/graphics/technology_partner_XZX92.png" alt="">
               </div>
               <div class="box-partners-lp">
                  <img src="page/ar1/graphics/technology_partner_XZX93.png" alt="">
               </div>
               <div class="box-partners-lp">
                  <img src="page/ar1/graphics/technology_partner_XZX94.png" alt="">
               </div>
               <div class="box-partners-lp">
                  <img src="page/ar1/graphics/technology_partner_XZX90.png" alt="">
               </div>
               <div class="box-partners-lp">
                  <img src="page/ar1/graphics/technology_partner_XZX91.png" alt="">
               </div>
               <div class="box-partners-lp">
                  <img src="page/ar1/graphics/technology_partner_XZX92.png" alt="">
               </div>
               <div class="box-partners-lp">
                  <img src="page/ar1/graphics/technology_partner_XZX93.png" alt="">
               </div>
               <div class="box-partners-lp">
                  <img src="page/ar1/graphics/technology_partner_XZX94.png" alt="">
               </div>
            </div>

         </div>
     </div>
     </section>

     <section class="section-reasons-howwork-lp">
      <div class="container">
         <h2 class="title-lp">
         الأسباب التي دفعتك إلى اختيار موقعنا
         </h2>
         <div class="thumb-reasons-lp">
            <div class="box-reasons-lp box-reasons-style-lp">
               <div class="thumb-svg-reasons-lp">
                  <div class="box-svg-resons-lp">
                     <svg viewbox="0 0 25 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.125 34.25H15.625M5.91667 22.8125H18.8333M1 13.125C1 6.84277 6.09277 1.75 12.375 1.75C18.6572 1.75 23.75 6.84277 23.75 13.125C23.75 16.9904 21.8219 20.3878 18.875 22.4434L17.9946 26.6131C17.7533 28.2014 16.3879 29.375 14.7815 29.375H9.96854C8.3621 29.375 6.99669 28.2014 6.75538 26.6131L5.875 22.4611C2.92809 20.4057 1 16.9904 1 13.125Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>

                  </div>
               </div>
               <div class="txt-reasons-lp">
                  <p>كنت تبحث عن شركة مالية مختصة</p>
               </div>

            </div>
            <div class="box-reasons-lp box-reasons-style-lp1">
              <div class="thumb-svg-reasons-lp">
               <div class="box-svg-resons-lp">
                  <svg viewbox="0 0 27 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M1 28.8889H26M13.5 1.11108V21.9444M13.5 21.9444L3.77778 12.2222M13.5 21.9444L23.2222 12.2222" stroke="white" stroke-width="1.85185" stroke-linecap="round" stroke-linejoin="round"></path>
                     </svg>
               </div>
              </div>
               <div class="txt-reasons-lp">
                  <p>أنت تخطط للتحضير للتقاعد مقدمًا وتبحث عن معلومات حول خطط التقاعد</p>
               </div>

            </div>
            <div class="box-reasons-lp box-reasons-style-lp2 box-reasons-lp-50">
             <div class="thumb-svg-reasons-lp">
               <div class="box-svg-resons-lp">
                  <svg viewbox="0 0 29 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M13 29.3334C13.8016 30.2241 15.1984 30.2241 16 29.3334M4.9 12.187V10.6C4.9 5.29807 9.19807 1 14.5 1C19.8019 1 24.1 5.29805 24.1 10.6V12.187C24.1 15.6374 25.0974 19.0144 26.9719 21.9114L28 23.5H1L2.02808 21.9112C3.90268 19.0144 4.9 15.6374 4.9 12.187Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                     </svg>

               </div>
             </div>
               <div class="txt-reasons-lp">
                  <p>تريد تحسين فهمك للأسواق المالية</p>
               </div>

            </div>

         </div>

      </div>
      <div class="container">
         <div class="thumb-howwork-lp">
            <div class="box-left-howwork-lp">
               <div class="thumb-howwork-box-lp">
                  <div class="box-howwork-lp box-reasons-style-lp2">
                     <div class="thumb-svg-reasons-lp">
                        <div class="box-svg-resons-lp">
                           <div class="box-svg-resons-lp-1">
                              <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor"><path d="M16 16C17.6569 16 19 17.3431 19 19C19 20.6569 17.6569 22 16 22C14.3431 22 13 20.6569 13 19C13 17.3431 14.3431 16 16 16ZM6 12C8.20914 12 10 13.7909 10 16C10 18.2091 8.20914 20 6 20C3.79086 20 2 18.2091 2 16C2 13.7909 3.79086 12 6 12ZM16 18C15.4477 18 15 18.4477 15 19C15 19.5523 15.4477 20 16 20C16.5523 20 17 19.5523 17 19C17 18.4477 16.5523 18 16 18ZM6 14C4.89543 14 4 14.8954 4 16C4 17.1046 4.89543 18 6 18C7.10457 18 8 17.1046 8 16C8 14.8954 7.10457 14 6 14ZM14.5 2C17.5376 2 20 4.46243 20 7.5C20 10.5376 17.5376 13 14.5 13C11.4624 13 9 10.5376 9 7.5C9 4.46243 11.4624 2 14.5 2ZM14.5 4C12.567 4 11 5.567 11 7.5C11 9.433 12.567 11 14.5 11C16.433 11 18 9.433 18 7.5C18 5.567 16.433 4 14.5 4Z"></path></svg>

                           </div>

                        </div>
                      </div>
                     <p class="txt-howwork-lp">
                     المشورة الاستثمارية - مشورة الخبراء بشأن إنشاء وإدارة محفظة استثمارية
                     </p>

                  </div>
                  <div class="box-howwork-lp box-reasons-style-lp">
                     <div class="thumb-svg-reasons-lp">
                        <div class="box-svg-resons-lp-1">
                           <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor"><path d="M22.1034 19L12.8659 3.00017C12.7782 2.84815 12.6519 2.72191 12.4999 2.63414C12.0216 2.358 11.41 2.52187 11.1339 3.00017L1.89638 19H1V21C8.33333 21 15.6667 21 23 21V19H22.1034ZM7.59991 19.0002H4.20568L11.9999 5.50017L19.7941 19.0002H16.4001L12 11L7.59991 19.0002ZM12 15.1501L14.1175 19H9.88254L12 15.1501Z"></path></svg>

                        </div>
                      </div>
                     <p class="txt-howwork-lp">
                     إدارة الأصول - الإدارة المهنية لمحفظة الأسهم والسندات والأوراق المالية الأخرى
                     </p>

                  </div>

               </div>
               <div class="thumb-howwork-box-lp">

                  <div class="box-howwork-lp box-reasons-style-lp1">
                     <div class="thumb-svg-reasons-lp">
                        <div class="box-svg-resons-lp-1">
                           <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor"><path d="M9 19H12V12.9416L8 9.45402L4 12.9416V19H7V15H9V19ZM21 21H3C2.44772 21 2 20.5523 2 20V12.4868C2 12.1978 2.12501 11.9229 2.34282 11.733L6 8.54435V4C6 3.44772 6.44772 3 7 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21ZM16 11V13H18V11H16ZM16 15V17H18V15H16ZM16 7V9H18V7H16ZM12 7V9H14V7H12Z"></path></svg>

                        </div>
                      </div>
                     <p class="txt-howwork-lp">
                     تحليل السوق - تقديم مراجعات وأبحاث تحليلية للأسواق المالية
                     </p>

                  </div>

               </div>

            </div>
            <div class="box-right-howwork-lp ">
               <div class="box-howwork-lp-right">
                  <div class="thumb-svg-reasons-lp-3">
                  <div class="box-svg-resons-lp-3">
                     <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor"><path d="M9 19H12V12.9416L8 9.45402L4 12.9416V19H7V15H9V19ZM21 21H3C2.44772 21 2 20.5523 2 20V12.4868C2 12.1978 2.12501 11.9229 2.34282 11.733L6 8.54435V4C6 3.44772 6.44772 3 7 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21ZM16 11V13H18V11H16ZM16 15V17H18V15H16ZM16 7V9H18V7H16ZM12 7V9H14V7H12Z"></path></svg>

                  </div>
               </div>
                  <div class="img-figure-lp">
                     <img src="page/ar1/imgs.png" alt="">
                  </div>

                  <p class="txt-howwork-lp">
                  التخطيط المالي – المساعدة في وضع خطة مالية شاملة لتحقيق الأهداف طويلة المدى
                  </p>

               </div>
            </div>

         </div>

      </div>
     </section>

     <section class="section-benefic-lp">
      <div class="container">
         <h2 class="title-lp">
         مزايانا
         </h2>
         <div class="thumb-benefic-lp">
            <div class="box-benefic-lp">
               <div class="item-benefic-lp">
                  <div class="benefic-svg-lp">
                     <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor"><path d="M19.1642 12L12.9571 5.79291L11.5429 7.20712L16.3358 12L11.5429 16.7929L12.9571 18.2071L19.1642 12ZM13.5143 12L7.30722 5.79291L5.89301 7.20712L10.6859 12L5.89301 16.7929L7.30722 18.2071L13.5143 12Z"></path></svg>
                  </div>
                  <div>
                     <p class="txt-benefic-lp"> فعاليات استثمارية حصرية: ننظم بانتظام فعاليات حصرية لعملائنا، مثل الاجتماعات الخاصة مع كبار خبراء السوق، والمؤتمرات والندوات الاستثمارية، حتى يتمكنوا من توسيع معارفهم وشبكاتهم المهنية</p>
                  </div>
               </div>
               <div class="item-benefic-lp">
                  <div class="benefic-svg-lp">
                     <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor"><path d="M19.1642 12L12.9571 5.79291L11.5429 7.20712L16.3358 12L11.5429 16.7929L12.9571 18.2071L19.1642 12ZM13.5143 12L7.30722 5.79291L5.89301 7.20712L10.6859 12L5.89301 16.7929L7.30722 18.2071L13.5143 12Z"></path></svg>
                  </div>
                  <div>
                     <p class="txt-benefic-lp"> الدعم في جميع مراحل عملية الاستثمار: بدءًا من التحليل الأولي والتخطيط وحتى تنفيذ استراتيجية الاستثمار وإدارة المحافظ اللاحقة، نحن ندعم عملائنا في كل خطوة</p>
                  </div>
               </div>
               <div class="item-benefic-lp">
                  <div class="benefic-svg-lp">
                     <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor"><path d="M19.1642 12L12.9571 5.79291L11.5429 7.20712L16.3358 12L11.5429 16.7929L12.9571 18.2071L19.1642 12ZM13.5143 12L7.30722 5.79291L5.89301 7.20712L10.6859 12L5.89301 16.7929L7.30722 18.2071L13.5143 12Z"></path></svg>
                  </div>
                  <div>
                     <p class="txt-benefic-lp"> الوصول إلى الاستثمارات الحصرية: نحن نقدم لعملائنا إمكانية الوصول إلى فرص الاستثمار التي غالبًا ما لا تكون متاحة لعامة الناس، بما في ذلك الأسهم الخاصة وتمويل رأس المال الاستثماري والصناديق المتخصصة</p>
                  </div>
               </div>
               <div class="item-benefic-lp">
                  <div class="benefic-svg-lp">
                     <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor"><path d="M19.1642 12L12.9571 5.79291L11.5429 7.20712L16.3358 12L11.5429 16.7929L12.9571 18.2071L19.1642 12ZM13.5143 12L7.30722 5.79291L5.89301 7.20712L10.6859 12L5.89301 16.7929L7.30722 18.2071L13.5143 12Z"></path></svg>
                  </div>
                  <div>
                     <p class="txt-benefic-lp"> النهج الفردي: كل عميل فريد بالنسبة لنا. نقوم بتطوير استراتيجيات استثمار مخصصة مع الأخذ في الاعتبار الأهداف الفردية لعملائنا وأفق الاستثمار ومستوى المخاطر</p>
                  </div>
               </div>
            </div>
            <div class="box-benefic-lp">
               <div class="box-benefic-img-lp">
                     <img src="page/ar1/graphics/gallery_2024-10-03_13-12-401.webp" alt="">
               </div>

            </div>

         </div>

      </div>
     </section>

     <section class="section-benefic-lp">
      <div class="container">
         <h2 class="title-lp">
         الشفافية عند كل منعطف: طريقك إلى الاستثمار
         </h2>
         <div class="thumb-benefic-lp">
            <div class="box-benefic-lp">
               <div class="box-benefic-img-lp">
                     <img src="page/ar1/graphics/gallery_2024-10-03_13-12-402.webp" alt="">
               </div>

            </div>
            <div class="box-benefic-lp">
               <div class="item-benefic-lp">
                  <div class="benefic-svg-lp">
                     <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor"><path d="M19.1642 12L12.9571 5.79291L11.5429 7.20712L16.3358 12L11.5429 16.7929L12.9571 18.2071L19.1642 12ZM13.5143 12L7.30722 5.79291L5.89301 7.20712L10.6859 12L5.89301 16.7929L7.30722 18.2071L13.5143 12Z"></path></svg>
                  </div>
                  <div>
                     <p class="txt-benefic-lp"> نبدأ بمناقشة شاملة لأهدافك المالية وتحليل أصولك الحالية</p>
                  </div>
               </div>
               <div class="item-benefic-lp">
                  <div class="benefic-svg-lp">
                     <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor"><path d="M19.1642 12L12.9571 5.79291L11.5429 7.20712L16.3358 12L11.5429 16.7929L12.9571 18.2071L19.1642 12ZM13.5143 12L7.30722 5.79291L5.89301 7.20712L10.6859 12L5.89301 16.7929L7.30722 18.2071L13.5143 12Z"></path></svg>
                  </div>
                  <div>
                     <p class="txt-benefic-lp"> نحن نضع خطة لمساعدتك على تحقيق العافية المالية وتحقيق أهدافك الاستثمارية</p>
                  </div>
               </div>
               <div class="item-benefic-lp">
                  <div class="benefic-svg-lp">
                     <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor"><path d="M19.1642 12L12.9571 5.79291L11.5429 7.20712L16.3358 12L11.5429 16.7929L12.9571 18.2071L19.1642 12ZM13.5143 12L7.30722 5.79291L5.89301 7.20712L10.6859 12L5.89301 16.7929L7.30722 18.2071L13.5143 12Z"></path></svg>
                  </div>
                  <div>
                     <p class="txt-benefic-lp"> نحن ننفذ الإستراتيجية من خلال إدارة الأصول الخاصة بك بشكل استباقي واستخدام خبرتنا لتحقيق النتائج المثلى</p>
                  </div>
               </div>


               <div class="thumb-btn-benefic-lp">
                  <a class="btn-5 element2" href="#main-form" >نصيحة مختصة</a>
               </div>
            </div>

            </div>
         </div>
      
     </section>

     <section class="section-main-lp" id="main">
      <div class="container bg-border-mm">
         <div class="title-box">
            <h2 class="title-lp-main shippingaz__header">MeritMotiveaiz: شريكك الموثوق في استشارات تكنولوجيا المعلومات</h2>
         </div>
         <div class="center-img-main-lp">
            <div class="thumb-main-box-mm">
               <div class="main-box-lp ">
                  <div class="main-images-lp"> <img class="main-img" src="page/ar1/product-images/consulting-2024-09-28-1.webp" alt="MeritMotiveaiz: شريكك الموثوق في استشارات تكنولوجيا المعلومات"></div>
                  </div>
               </div>
          </div>
            <div class="main-content-lp-main"> <p>في MeritMotiveaiz، نحن متخصصون في تقديم خدمات استشارية متطورة في مجال تكنولوجيا المعلومات مصممة خصيصًا لتلبية الاحتياجات الفريدة للشركات في مشهد رقمي سريع التطور. يمكن لفريق الخبراء لدينا مساعدتك في مواجهة تحديات تكنولوجيا المعلومات المعقدة وتحسين العمليات ودفع النمو من خلال التكنولوجيا. سواء كنت شركة ناشئة تتطلع إلى بناء أساس متين لتكنولوجيا المعلومات أو شركة راسخة تتطلع إلى تحسين البنية الأساسية لديك، فنحن هنا لإرشادك في كل خطوة على الطريق.</p>
<p style="text-align: center;"><strong>قائمة الخدمات:</strong></p>
<ol>
<li><strong>تحسين البنية التحتية لتكنولوجيا المعلومات:</strong> نقوم بتقييم إعداد تكنولوجيا المعلومات الحالي لديك ونقدم حلولًا مخصصة لتحسين الأداء والأمان وقابلية التوسع، مما يضمن أن أنظمتك مقاومة للمستقبل.</li>
<li><strong>حلول الحوسبة السحابية:</strong> تساعد خدماتنا الاستشارية السحابية المؤسسات على ترحيل البيئات السحابية ودمجها وإدارتها بكفاءة، مما يتيح توفير التكاليف وتحسين المرونة.</li>
<li><strong>خدمات الأمن السيبراني:</strong> نحن نقدم حلول أمنية شاملة، بدءًا من تقييمات المخاطر وحتى تنفيذ الدفاعات المتقدمة التي تحمي عملك من التهديدات السيبرانية الجديدة.</li>
<li><strong>استمرارية الأعمال والتعافي من الكوارث:</strong> نقوم بتطوير استراتيجيات لحماية بياناتك الهامة والتأكد من أن عملك يمكنه الاستمرار في العمل بسلاسة حتى أثناء الاضطرابات غير المتوقعة.</li>
</ol>
<p style="text-align: center;"><strong>نهجنا:</strong></p>
<p>في MeritMotiveaiz، نحن نؤمن بالنهج الذي يركز على العملاء. نبدأ باستشارة مفصلة لفهم احتياجاتك وتحدياتك المحددة. يقوم خبراؤنا بعد ذلك بتطوير إستراتيجيات تكنولوجيا المعلومات المخصصة لتناسب أهداف عملك. نحن نركز على تحقيق النتائج التي لا تحل المشكلات المباشرة فحسب، بل تمهد الطريق أيضًا للنجاح على المدى الطويل. التعاون والشفافية والتحسين المستمر هي في صميم نهجنا.</p>
<p style="text-align: center;"><strong>لماذا تختارنا:</strong></p>
<p>عندما تختار MeritMotiveaiz، فإنك تختار شريكًا ملتزمًا بنجاحك. مع سنوات من الخبرة في الصناعة، والفهم العميق للتقنيات الجديدة والشغف لحل مشكلات تكنولوجيا المعلومات المعقدة، فإننا نقدم حلولًا مبتكرة وعملية في نفس الوقت. إن تركيزنا على بناء شراكات دائمة مع عملائنا هو ما يميزنا.</p></div>

      </div>
   
   </section>

     <section class="section-tarif-lp" id="our-tarif">
      <div class="container">
         <h2 class="title-lp">أسعارنا</h2>
         <div class="thumb-tarif-lp">
            <div class="box-tarif-lp shippingaz__header">
               <p class="price-lp">27.6€</p>
               <p class="price-plan-lp">شهر</p>
               <p class="price-plan-lp">التعريفة الأساسية</p>
               <ul>
                  <li class="item-box-tarif-lp">
                     <div class="box-svg-tarif-check-lp">
                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor"><path d="M9.9997 15.1709L19.1921 5.97852L20.6063 7.39273L9.9997 17.9993L3.63574 11.6354L5.04996 10.2212L9.9997 15.1709Z"></path></svg>
                     </div>
                     <div>
                     الوصول إلى المحتوى الرئيسي للموقع
                     </div>
                  </li>
                  <li class="item-box-tarif-lp">
                     <div class="box-svg-tarif-check-lp">
                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor"><path d="M9.9997 15.1709L19.1921 5.97852L20.6063 7.39273L9.9997 17.9993L3.63574 11.6354L5.04996 10.2212L9.9997 15.1709Z"></path></svg>
                     </div>
                     <div>
                     دعم العملاء القياسي
                     </div>
                  </li>
                  <li class="item-box-tarif-lp">
                     <div class="box-svg-tarif-check-lp">
                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor"><path d="M9.9997 15.1709L19.1921 5.97852L20.6063 7.39273L9.9997 17.9993L3.63574 11.6354L5.04996 10.2212L9.9997 15.1709Z"></path></svg>
                     </div>
                     <div>
                     دعم البريد الإلكتروني
                     </div>
                  </li>
                  <li class="item-box-tarif-lp">
                     <div class="box-svg-tarif-check-lp">
                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor"><path d="M9.9997 15.1709L19.1921 5.97852L20.6063 7.39273L9.9997 17.9993L3.63574 11.6354L5.04996 10.2212L9.9997 15.1709Z"></path></svg>
                     </div>
                     <div>
                     الاشتراك في النشرة الشهرية
                     </div>
                  </li>
               </ul>
               <div class="btn-pos-tariff-lp">

					<a class="btn-5 " href="#main-form" >يختار</a>

               </div>
            </div>
            <div class="box-tarif-lp color-tarif-lp">
               <p class="price-lp-color">110.4€</p>
               <p class="price-plan-lp-color">شهر</p>
               <p class="price-plan-lp-color">التعرفة المميزة</p>
               <ul>
                  <li class="item-box-tarif-lp">
                     <div class="box-svg-tarif-check-lp">
                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor"><path d="M9.9997 15.1709L19.1921 5.97852L20.6063 7.39273L9.9997 17.9993L3.63574 11.6354L5.04996 10.2212L9.9997 15.1709Z"></path></svg>
                     </div>
                     <div class="txt-tarif-lp">
                     كل شيء مدرج في الخطط السابقة بالإضافة إلى:
                     </div>
                  </li>
                  <li class="item-box-tarif-lp">
                     <div class="box-svg-tarif-check-lp">
                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor"><path d="M9.9997 15.1709L19.1921 5.97852L20.6063 7.39273L9.9997 17.9993L3.63574 11.6354L5.04996 10.2212L9.9997 15.1709Z"></path></svg>
                     </div>
                     <div class="txt-tarif-lp">
                     مدير فردي أو مستشار لشركتك.
                     </div>
                  </li>
                  <li class="item-box-tarif-lp">
                     <div class="box-svg-tarif-check-lp">
                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor"><path d="M9.9997 15.1709L19.1921 5.97852L20.6063 7.39273L9.9997 17.9993L3.63574 11.6354L5.04996 10.2212L9.9997 15.1709Z"></path></svg>
                     </div>
                     <div class="txt-tarif-lp">
                     مدير الدعم الشخصي
                     </div>
                  </li>
                  <li class="item-box-tarif-lp">
                     <div class="box-svg-tarif-check-lp">
                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor"><path d="M9.9997 15.1709L19.1921 5.97852L20.6063 7.39273L9.9997 17.9993L3.63574 11.6354L5.04996 10.2212L9.9997 15.1709Z"></path></svg>
                     </div>
                     <div class="txt-tarif-lp">
                     الوصول إلى المنصة 24/7
                     </div>
                  </li>
                  <li class="item-box-tarif-lp">
                     <div class="box-svg-tarif-check-lp">
                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor"><path d="M9.9997 15.1709L19.1921 5.97852L20.6063 7.39273L9.9997 17.9993L3.63574 11.6354L5.04996 10.2212L9.9997 15.1709Z"></path></svg>
                     </div>
                     <div class="txt-tarif-lp">
                     إدارة حسابات مخصصة
                     </div>
                  </li>
                  <li class="item-box-tarif-lp">
                     <div class="box-svg-tarif-check-lp">
                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor"><path d="M9.9997 15.1709L19.1921 5.97852L20.6063 7.39273L9.9997 17.9993L3.63574 11.6354L5.04996 10.2212L9.9997 15.1709Z"></path></svg>
                     </div>
                     <div class="txt-tarif-lp">
                     استشارات شخصية أسبوعية
                     </div>
                  </li>
                  <li class="item-box-tarif-lp">
                     <div class="box-svg-tarif-check-lp">
                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor"><path d="M9.9997 15.1709L19.1921 5.97852L20.6063 7.39273L9.9997 17.9993L3.63574 11.6354L5.04996 10.2212L9.9997 15.1709Z"></path></svg>
                     </div>
                     <div class="txt-tarif-lp">
                     توصيات ودورات شخصية
                     </div>
                  </li>
                  <li class="item-box-tarif-lp">
                     <div class="box-svg-tarif-check-lp">
                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor"><path d="M9.9997 15.1709L19.1921 5.97852L20.6063 7.39273L9.9997 17.9993L3.63574 11.6354L5.04996 10.2212L9.9997 15.1709Z"></path></svg>
                     </div>
                     <div class="txt-tarif-lp">
                     إعطاء الأولوية لتصحيح الأخطاء وحلها.
                     </div>
                  </li>
               </ul>
               <div class="btn-pos-tariff-lp">

					<a class="btn-5 color-btn-tarif-lp" href="#main-form" >يختار</a>

               </div>
            </div>
            <div class="box-tarif-lp">
               <p class="price-lp">55.2€</p>
               <p class="price-plan-lp">شهر</p>
               <p class="price-plan-lp">التعريفة الموسعة</p>
               <ul>
                  <li class="item-box-tarif-lp">
                     <div class="box-svg-tarif-check-lp">
                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor"><path d="M9.9997 15.1709L19.1921 5.97852L20.6063 7.39273L9.9997 17.9993L3.63574 11.6354L5.04996 10.2212L9.9997 15.1709Z"></path></svg>
                     </div>
                     <div>
                     كل ما هو مدرج في التعريفة السابقة بالإضافة إلى:
                     </div>
                  </li>
                  <li class="item-box-tarif-lp">
                     <div class="box-svg-tarif-check-lp">
                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor"><path d="M9.9997 15.1709L19.1921 5.97852L20.6063 7.39273L9.9997 17.9993L3.63574 11.6354L5.04996 10.2212L9.9997 15.1709Z"></path></svg>
                     </div>
                     <div>
                     الوصول إلى ندوات عبر الإنترنت أو أحداث عبر الإنترنت حصرية
                     </div>
                  </li>
                  <li class="item-box-tarif-lp">
                     <div class="box-svg-tarif-check-lp">
                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor"><path d="M9.9997 15.1709L19.1921 5.97852L20.6063 7.39273L9.9997 17.9993L3.63574 11.6354L5.04996 10.2212L9.9997 15.1709Z"></path></svg>
                     </div>
                     <div>
                     الوثائق القياسية وأدلة المستخدم.
                     </div>
                  </li>
                  <li class="item-box-tarif-lp">
                     <div class="box-svg-tarif-check-lp">
                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor"><path d="M9.9997 15.1709L19.1921 5.97852L20.6063 7.39273L9.9997 17.9993L3.63574 11.6354L5.04996 10.2212L9.9997 15.1709Z"></path></svg>
                     </div>
                     <div>
                     خصومات متكررة أو عروض خاصة
                     </div>
                  </li>
                  <li class="item-box-tarif-lp">
                     <div class="box-svg-tarif-check-lp">
                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor"><path d="M9.9997 15.1709L19.1921 5.97852L20.6063 7.39273L9.9997 17.9993L3.63574 11.6354L5.04996 10.2212L9.9997 15.1709Z"></path></svg>
                     </div>
                     <div>
                     دعم الأولوية عبر البريد الإلكتروني أو رسول
                     </div>
                  </li>
                  <li class="item-box-tarif-lp">
                     <div class="box-svg-tarif-check-lp">
                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor"><path d="M9.9997 15.1709L19.1921 5.97852L20.6063 7.39273L9.9997 17.9993L3.63574 11.6354L5.04996 10.2212L9.9997 15.1709Z"></path></svg>
                     </div>
                     <div>
                     تنزيلات غير محدودة أو الوصول إلى الموارد
                     </div>
                  </li>
               </ul>
               <div class="btn-pos-tariff-lp">

					<a class="btn-5 " href="#main-form" >يختار</a>

               </div>
            </div>

         </div>

      </div>
     </section>

     <section class="section-banner-lp">
      <div class="container">
         <div class="banner-contact-lp">
            <div class="box-banner-contact-lp">
               <p>
               يمكنك استخدام خدماتنا عن طريق الكتابة أو الاتصال بنا. سنكون سعداء بالإجابة على أي أسئلة ومساعدتك في طلب الخدمات!
               </p>
            </div>
            <div class="box-banner-contact-lp-btn">
               <a class="btn-5" href="#main-form">اتصل بنا</a>

            </div>
         </div>

      </div>
     </section>

     <section class="section-services-lp" id="menu-type">
      <div class="container">
         <h2 class="title-lp banner__menurj">
         خدمات
         </h2>
         <div class="thumb-services-lp">

            <a class="box-services-lp box-services-lp-style-lp" href="#main-form">
            <div>

              <div class="thumb-svg-services-lp">
               <div class="box-svg-services-lp ">
                  <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor"><path d="M3 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3ZM11.126 12H4V19H20V12H18.874C18.4299 13.7252 16.8638 15 15 15C13.1362 15 11.5701 13.7252 11.126 12ZM11.126 10C11.5701 8.27477 13.1362 7 15 7C16.8638 7 18.4299 8.27477 18.874 10H20V5H4V10H11.126ZM15 13C16.1046 13 17 12.1046 17 11C17 9.89543 16.1046 9 15 9C13.8954 9 13 9.89543 13 11C13 12.1046 13.8954 13 15 13ZM6 15H8V17H6V15Z"></path></svg>

               </div>
              </div>
              <div>

                    <p class=" title-services-lp">تحسين البنية التحتية لتكنولوجيا المعلومات: حلول مستقبلية</p>

                 <div>
                  <p class="sub-txt-services-lp">في MeritMotiveaiz، نحن متخصصون في تحسين البنية التحتية لتكنولوجيا المعلومات ونركز على تحويل بيئة تكنولوجيا المعلومات الحالية لديك إلى نظام أكثر كفاءة وأمانًا وقابلية للتطوير. يبدأ فريق الخبراء لدينا بإجراء تقييم شامل لإعداداتك الحالية...</p>
                 </div>
              </div>

            </div>
         </a>

            <a class="box-services-lp box-services-lp-style-lp" href="#main-form">
            <div>

              <div class="thumb-svg-services-lp">
               <div class="box-svg-services-lp ">
                  <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor"><path d="M10.5199 19.8634C10.5955 18.6615 10.8833 17.5172 11.3463 16.4676C9.81124 16.3252 8.41864 15.6867 7.33309 14.7151L8.66691 13.2248C9.55217 14.0172 10.7188 14.4978 12 14.4978C12.1763 14.4978 12.3501 14.4887 12.5211 14.471C14.227 12.2169 16.8661 10.7083 19.8634 10.5199C19.1692 6.80877 15.9126 4 12 4C7.58172 4 4 7.58172 4 12C4 15.9126 6.80877 19.1692 10.5199 19.8634ZM19.0233 12.636C15.7891 13.2396 13.2396 15.7891 12.636 19.0233L19.0233 12.636ZM22 12C22 12.1677 21.9959 12.3344 21.9877 12.5L12.5 21.9877C12.3344 21.9959 12.1677 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM10 10C10 10.8284 9.32843 11.5 8.5 11.5C7.67157 11.5 7 10.8284 7 10C7 9.17157 7.67157 8.5 8.5 8.5C9.32843 8.5 10 9.17157 10 10ZM17 10C17 10.8284 16.3284 11.5 15.5 11.5C14.6716 11.5 14 10.8284 14 10C14 9.17157 14.6716 8.5 15.5 8.5C16.3284 8.5 17 9.17157 17 10Z"></path></svg>
               </div>
              </div>
              <div>

                    <p class=" title-services-lp">حلول الحوسبة السحابية للشركات الحديثة</p>

                 <div>
                  <p class="sub-txt-services-lp">في MeritMotiveaiz، نحن متخصصون في تقديم حلول الحوسبة السحابية المصممة خصيصًا لتلبية الاحتياجات المتطورة للشركات. تساعد خدماتنا الاستشارية السحابية الشركات على الانتقال بكفاءة إلى السحابة وضمان...</p>
                 </div>
              </div>

            </div>
         </a>

            <a class="box-services-lp box-services-lp-style-lp1" href="#main-form">
            <div>

              <div class="thumb-svg-services-lp">
               <div class="box-svg-services-lp ">
                  <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor"><path d="M12 2.99988C14.2091 2.99988 16 4.79074 16 6.99988C16 7.54431 15.8917 8.06177 15.6958 8.53327C14.0548 8.70904 12.5038 9.5584 11.4804 10.9666C10.2212 10.8033 9.14476 10.0545 8.53417 8.99859C8.19462 8.41137 7.99998 7.72986 7.99998 6.99988C7.99998 4.79074 9.79084 2.99988 12 2.99988ZM17.7635 8.67236C17.9175 8.14099 18 7.57964 18 6.99988C18 3.68617 15.3137 0.999879 12 0.999878C8.68627 0.999877 5.99998 3.68617 5.99998 6.99988C5.99998 7.57966 6.08247 8.14104 6.23647 8.67242C5.69935 8.80476 5.172 9.01399 4.66995 9.30385C1.80019 10.9607 0.81694 14.6302 2.47379 17.5C4.13065 20.3698 7.80019 21.353 10.6699 19.6962C11.172 19.4063 11.6169 19.0542 12 18.6552C12.3832 19.0542 12.828 19.4062 13.33 19.6961C16.1998 21.3529 19.8693 20.3697 21.5262 17.4999C23.183 14.6302 22.1998 10.9606 19.33 9.30377C18.828 9.01392 18.3006 8.80469 17.7635 8.67236ZM13.1543 16.9342C13.8227 15.4251 13.8627 13.6571 13.1549 12.0667C13.9259 11.0577 15.1125 10.4999 16.3322 10.4991C17.0104 10.4987 17.6979 10.6709 18.33 11.0358C20.2432 12.1404 20.8987 14.5868 19.7941 16.4999C18.6895 18.4131 16.2432 19.0686 14.33 17.964C13.8586 17.6919 13.4647 17.3395 13.1543 16.9342ZM11.3649 12.9668C11.8532 14.139 11.7429 15.4456 11.1337 16.5023C10.7949 17.0899 10.3021 17.5991 9.66995 17.9641C7.75678 19.0687 5.31042 18.4132 4.20585 16.5C3.10128 14.5868 3.75678 12.1405 5.66995 11.0359C6.14142 10.7637 6.64366 10.5987 7.1499 10.5326C8.12267 11.8659 9.63373 12.7845 11.3649 12.9668Z"></path></svg>
               </div>
              </div>
              <div>

                    <p class=" title-services-lp">حلول الأمن السيبراني الشاملة لعملك</p>

                 <div>
                  <p class="sub-txt-services-lp">في المشهد الرقمي اليوم، لا يعد الأمن السيبراني مجرد خيار، بل ضرورة. في MeritMotiveaiz، نحن نفهم التعقيدات والتهديدات المتزايدة التي تواجه المؤسسات من جميع الأحجام. تم تصميم خدمات الأمن السيبراني لدينا...</p>
                 </div>
              </div>

            </div>
         </a>

            <a class="box-services-lp box-services-lp-style-lp2" href="#main-form">
            <div>

              <div class="thumb-svg-services-lp">
               <div class="box-svg-services-lp ">
                  <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor"><path d="M15.1986 9.94447C14.7649 9.5337 14.4859 8.98613 14.4085 8.39384L14.0056 5.31138L11.275 6.79724C10.7503 7.08274 10.1433 7.17888 9.55608 7.06948L6.49998 6.50015L7.06931 9.55625C7.17871 10.1435 7.08257 10.7505 6.79707 11.2751L5.31121 14.0057L8.39367 14.4086C8.98596 14.4861 9.53353 14.7651 9.94431 15.1987L12.0821 17.4557L13.4178 14.6486C13.6745 14.1092 14.109 13.6747 14.6484 13.418L17.4555 12.0823L15.1986 9.94447ZM15.2238 15.5079L13.0111 20.1581C12.8687 20.4573 12.5107 20.5844 12.2115 20.442C12.1448 20.4103 12.0845 20.3665 12.0337 20.3129L8.49229 16.5741C8.39749 16.474 8.27113 16.4096 8.13445 16.3918L3.02816 15.7243C2.69958 15.6814 2.46804 15.3802 2.51099 15.0516C2.52056 14.9784 2.54359 14.9075 2.5789 14.8426L5.04031 10.3192C5.1062 10.1981 5.12839 10.058 5.10314 9.92253L4.16 4.85991C4.09931 4.53414 4.3142 4.22086 4.63997 4.16017C4.7126 4.14664 4.78711 4.14664 4.85974 4.16017L9.92237 5.10331C10.0579 5.12855 10.198 5.10637 10.319 5.04048L14.8424 2.57907C15.1335 2.42068 15.4979 2.52825 15.6562 2.81931C15.6916 2.88421 15.7146 2.95507 15.7241 3.02833L16.3916 8.13462C16.4095 8.2713 16.4739 8.39766 16.5739 8.49245L20.3127 12.0338C20.5533 12.2617 20.5636 12.6415 20.3357 12.8821C20.2849 12.9357 20.2246 12.9795 20.1579 13.0112L15.5078 15.224C15.3833 15.2832 15.283 15.3835 15.2238 15.5079ZM16.0206 17.435L17.4348 16.0208L21.6775 20.2634L20.2633 21.6776L16.0206 17.435Z"></path></svg>
               </div>
              </div>
              <div>

                    <p class=" title-services-lp">استمرارية الأعمال والتعافي من الكوارث</p>

                 <div>
                  <p class="sub-txt-services-lp">في العصر الرقمي الحالي، يرتبط استقرار عمليات الشركة ارتباطًا وثيقًا بأمن بياناتها. في MeritMotiveaiz، نحن متخصصون في تقديم حلول شاملة لاستمرارية الأعمال والتعافي من الكوارث (BCDR) التي تحمي...</p>
                 </div>
              </div>

            </div>
         </a>

         </div>

      </div>
     </section>

     <section class="section-accordion-lp">
      <div class="container">
         <div class="container">
            <h2 class="title-lp">الأسئلة المتداولة</h2>
            <div class="accordion">
           <div class="box-acordion-lp">
            <div class="accordion-item">
               <button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">هل يمكنك المساعدة في التخطيط للتقاعد؟</span><span class="icon" aria-hidden="true"></span></button>
               <div class="accordion-content">
                 <p>نعم، يمكن لخبرائنا مساعدتك في تطوير استراتيجية التقاعد التي تأخذ في الاعتبار أهدافك المالية طويلة المدى ووضعك المالي الحالي.</p>
               </div>
             </div>
             <div class="accordion-item">
               <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">ما هي التقنيات التي تستخدمها لتحليل السوق؟</span><span class="icon" aria-hidden="true"></span></button>
               <div class="accordion-content">
                 <p>نحن نستخدم مجموعة متنوعة من الأدوات التحليلية المتقدمة وبرامج تحليل السوق، بما في ذلك الذكاء الاصطناعي والتعلم الآلي، للتنبؤ باتجاهات السوق.</p>
               </div>
             </div>
           </div>
             <div class="box-acordion-lp">
               <div class="accordion-item">
                  <button id="accordion-button-3" aria-expanded="false"><span class="accordion-title">هل يمكنني إلغاء خدماتك في أي وقت؟</span><span class="icon" aria-hidden="true"></span></button>
                  <div class="accordion-content">
                    <p>نعم، يمكنك إلغاء الاشتراك في خدماتنا في أي وقت. نحن نسعى جاهدين لتحقيق المرونة والشفافية في علاقاتنا مع العملاء.</p>
                  </div>
                </div>
                <div class="accordion-item">
                  <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title">ما هي التدابير الأمنية التي تستخدمها لحماية بياناتي؟</span><span class="icon" aria-hidden="true"></span></button>
                  <div class="accordion-content">
                    <p>نحن نولي أهمية كبيرة لأمن وسرية بيانات عملائنا. بفضل تقنية التشفير المتقدمة وبروتوكولات الأمان الصارمة، نضمن أن بياناتك آمنة.</p>
                  </div>
                </div>
             </div>

            </div>
          </div>

      </div>
     </section>

   <section class="section-form-lp" id="form">
      <div class="container">
         <h2 class="title-lp">نموذج الطلب</h2>

         <div class="form-container-lp box-services-lp-style-lp2">
                  <form
                  autocomplete="off"
                  class="main_form form _main-form register-form form-reg form-send"
                  method="post"
                  id="main-form"
                  ></form>
               </div>
            </div>
            

         </div>
      
   </section>

   <footer class="section-footer">
      <div class="container">
        <div class="thumb-logo-about-lp">
         <div>
            <a class="box-logo-footer-lp" href="#main-form">
               <div class="img-footer-logo-lp">
             <img src="page/ar1/brand-identity.svg" alt="">

             </div>
             <p>MeritMotiveaiz</p>
          </a>
         </div>
         <div class="o-nas-footer-lp">
            <p>
            نحن، فريق خبراء من الأشخاص ذوي التفكير المماثل، مستعدون دائمًا لمساعدتك. قصة نجاحنا تتحدث عن نفسها. توفير مجموعة واسعة من الخدمات. نحن نجذب المهنيين المؤهلين الذين يمكنهم المساعدة في خلق مستقبل أفضل.
            </p>
         </div>
        </div>
         <div class="thumb-footer-lp">
            <div class="box-footer-lp">

                  <ul>
                     <li class="box-link-footer-tovar-lp">
                        <div class="benefic-svg-lp footer-svg-lp">
                           <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor"><path d="M19.1642 12L12.9571 5.79291L11.5429 7.20712L16.3358 12L11.5429 16.7929L12.9571 18.2071L19.1642 12ZM13.5143 12L7.30722 5.79291L5.89301 7.20712L10.6859 12L5.89301 16.7929L7.30722 18.2071L13.5143 12Z"></path></svg>
                        </div>
                        <div>
                           <a class="link-footer-tovar-lp" href="#main-form">تحسين البنية التحتية لتكنولوجيا المعلومات: حلول مستقبلية</a>
                        </div>
                     </li>
                     <li class="box-link-footer-tovar-lp">
                        <div class="benefic-svg-lp footer-svg-lp">
                           <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor"><path d="M19.1642 12L12.9571 5.79291L11.5429 7.20712L16.3358 12L11.5429 16.7929L12.9571 18.2071L19.1642 12ZM13.5143 12L7.30722 5.79291L5.89301 7.20712L10.6859 12L5.89301 16.7929L7.30722 18.2071L13.5143 12Z"></path></svg>
                        </div>
                        <div>
                           <a class="link-footer-tovar-lp" href="#main-form">حلول الحوسبة السحابية للشركات الحديثة</a>
                        </div>
                     </li>
                     <li class="box-link-footer-tovar-lp">
                        <div class="benefic-svg-lp footer-svg-lp">
                           <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor"><path d="M19.1642 12L12.9571 5.79291L11.5429 7.20712L16.3358 12L11.5429 16.7929L12.9571 18.2071L19.1642 12ZM13.5143 12L7.30722 5.79291L5.89301 7.20712L10.6859 12L5.89301 16.7929L7.30722 18.2071L13.5143 12Z"></path></svg>
                        </div>
                        <div>
                           <a class="link-footer-tovar-lp" href="#main-form">حلول الأمن السيبراني الشاملة لعملك</a>
                        </div>
                     </li>
                     <li class="box-link-footer-tovar-lp">
                        <div class="benefic-svg-lp footer-svg-lp">
                           <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor"><path d="M19.1642 12L12.9571 5.79291L11.5429 7.20712L16.3358 12L11.5429 16.7929L12.9571 18.2071L19.1642 12ZM13.5143 12L7.30722 5.79291L5.89301 7.20712L10.6859 12L5.89301 16.7929L7.30722 18.2071L13.5143 12Z"></path></svg>
                        </div>
                        <div>
                           <a class="link-footer-tovar-lp" href="#main-form">استمرارية الأعمال والتعافي من الكوارث</a>
                        </div>
                     </li>
                  </ul>

            </div>
            <div class="box-footer-lp box-center-lp">
              <ul>
               <li><a class="link-footer-tovar-lp" href="./" >الصفحة الرئيسية</a></li>
               <li><a class="link-footer-tovar-lp" href="#main-form">معلومات عنا</a></li>
               <li><a class="link-footer-tovar-lp" href="#menu-type" >خدمات</a></li>
               <li><a class="link-footer-tovar-lp" href="#main-form">اتصل بنا</a></li>
                <li><a class="link-footer-tovar-lp" href="#our-tarif" > أسعارنا</a></li>
              </ul>
            </div>
            <div class="box-footer-lp box-center-lp">

                <ul>
                <li>
                  <a class="link-footer-tovar-lp" href="#main-form">
                  سياسة الخصوصية
                 </a>
                </li>
              <li>
               <a class="link-footer-tovar-lp" href="#main-form">
               الشروط والأحكام العامة للأعمال
              </a>
              </li>
               <li>
                  <a class="link-footer-tovar-lp" href="#main-form">
                  إخلاء المسؤولية
                  </a>
               </li>

                </ul>


            </div>

         </div>


         <div class="copy-thumb-lp">
            <p class="txt-copy-lp"> حقوق الطبع والنشر ©<span> 2024</span> MeritMotiveaiz</p>
         </div>
      </div>

   </footer>





   <script>
      document.addEventListener('DOMContentLoaded', () => {
    const mobileMenu = document.getElementById('mobile-menu');
    const navList = document.querySelector('.nav-list');

    mobileMenu.addEventListener('click', () => {
        if (navList.classList.contains('active')) {
            navList.style.transform = 'translateY(-100%)';
            navList.style.opacity = '0';
            setTimeout(() => {
                navList.classList.remove('active');
                navList.style.visibility = 'hidden';
            }, 500);
        } else {
            navList.classList.add('active');
            navList.style.visibility = 'visible';
            navList.style.transform = 'translateY(0)';
            navList.style.opacity = '1';
        }
    });
});

   </script>




      <script>
         const items = document.querySelectorAll(".accordion button");

function toggleAccordion() {
  const itemToggle = this.getAttribute('aria-expanded');

  for (i = 0; i < items.length; i++) {
    items[i].setAttribute('aria-expanded', 'false');
  }

  if (itemToggle == 'false') {
    this.setAttribute('aria-expanded', 'true');
  }
}

items.forEach(item => item.addEventListener('click', toggleAccordion));

document.addEventListener("DOMContentLoaded", function() {
    const marquee = document.querySelector(".marquee");
    const marqueeContainer = document.querySelector(".marquee-container");

    function setMarqueeAnimation() {
        const marqueeWidth = marquee.offsetWidth;
        const containerWidth = marqueeContainer.offsetWidth;
        const animationDuration = (marqueeWidth + containerWidth) / 100;

        marquee.style.animationDuration = `${animationDuration}s`;
    }

    setMarqueeAnimation();
    window.addEventListener("resize", setMarqueeAnimation);
});

      </script>
       <script src="loadAssets.js?v=135153"></script>
    
    <script>
        window.onload = function() {
        var thx = localStorage.getItem('thanks');
        if (thx && thx === "true") {
        const fileThx = 'confirm.php';
        window.location.href = `${fileThx}${window.location.search}`;
        }
    }
    
    window.onpageshow = function() {
        var thx = localStorage.getItem('thanks');
        if (thx && thx === "true") {
        const fileThx = 'confirm.php';
        window.location.href = `${fileThx}${window.location.search}`;
        }
    }
    </script>

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
    
    
    <script>
        window.onload = function() {
        var thx = localStorage.getItem('thanks');
        if (thx && thx === "true") {
        const fileThx = 'confirm.php';
        window.location.href = `${fileThx}${window.location.search}`;
        }
    }
    
    window.onpageshow = function() {
        var thx = localStorage.getItem('thanks');
        if (thx && thx === "true") {
        const fileThx = 'confirm.php';
        window.location.href = `${fileThx}${window.location.search}`;
        }
    }
    </script>
   </body>
</html>
