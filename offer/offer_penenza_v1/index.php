<?php
if (!isset($rawClick) && !isset($click)) {
  die();
}
?>
<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8" />
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>
    Инвестиции в бизнес проекты в России - Платформа для инвестиций онлайн
  </title>
  <meta
    content="Penenza — надежная инвестиционная платформа ✓ Доходность 16-20% годовых ✓ Включены в реестр ЦБ РФ ✓ Высокий уровень защиты ПО"
    name="description" />
  <meta content="заём, краудлендинг, инвестиции, скоринг, кредит, диверсификация портфеля, доходность, реестр ЦБ, "
    name="keywords" />
  <meta content="Инвестиции с Penenza" property="og:title" />
  <meta content="Инвестиции в краткосрочные займы с высоким кредитным рейтингом." property="og:description" />
  <meta content="website" property="og:type" />
  <meta content="images/Group_1_3.png" property="og:image" />
  <meta content="telephone=no" name="format-detection" />
  <meta content="on" http-equiv="x-dns-prefetch-control" />
  <link href="https://ws.tildacdn.com" rel="dns-prefetch" />
  <link href="https://static.tildacdn.com" rel="dns-prefetch" />
  <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
  <link href="images/152.png" rel="apple-touch-icon" />
  <link href="images/152.png" rel="apple-touch-icon" sizes="76x76" />
  <link href="images/152.png" rel="apple-touch-icon" sizes="152x152" />
  <link href="https://static.tildacdn.com/tild3439-6234-4031-b433-306336653661/152.png"
    rel="apple-touch-startup-image" />
  <meta content="#000000" name="msapplication-TileColor" />
  <meta content="https://static.tildacdn.com/tild6336-3138-4636-b265-373039653430/270.png"
    name="msapplication-TileImage" />
  <!-- Assets -->
  <script async="" id="tildastatscript" src="js/tilda-stat-1.0.min.js" type="text/javascript"></script>
  <script async="" charset="utf-8" src="js/tilda-fallback-1.0.min.js"></script>
  <link href="css/tilda-grid-3.0.min.css" media="all" onerror="this.loaderr='y';" rel="stylesheet" type="text/css" />
  <link href="css/tilda-blocks-page31234550.min.css" media="all" onerror="this.loaderr='y';" rel="stylesheet"
    type="text/css" />
  <link href="https://fonts.gstatic.com" rel="preconnect" />
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&amp;family=Open+Sans:wght@300;400;500;600;700&amp;subset=latin,cyrillic"
    rel="stylesheet" />
  <link href="css/tilda-animation-2.0.min.css" media="all" onerror="this.loaderr='y';" rel="stylesheet"
    type="text/css" />
  <link href="css/tilda-popup-1.1.min.css" media="print" onerror="this.loaderr='y';" onload="this.media='all';"
    rel="stylesheet" type="text/css" />
  <noscript>
    <link href="https://static.tildacdn.com/css/tilda-popup-1.1.min.css" media="all" rel="stylesheet" type="text/css" />
  </noscript>
  <link href="css/highlight.min.css" media="all" onerror="this.loaderr='y';" rel="stylesheet" type="text/css" />
  <script charset="utf-8" nomodule="" src="js/tilda-polyfill-1.0.min.js"></script>
  <script type="text/javascript">
    function t_onReady(func) {
      if (document.readyState != "loading") {
        func();
      } else {
        document.addEventListener("DOMContentLoaded", func);
      }
    }
    function t_onFuncLoad(funcName, okFunc, time) {
      if (typeof window[funcName] === "function") {
        okFunc();
      } else {
        setTimeout(function () {
          t_onFuncLoad(funcName, okFunc, time);
        }, time || 100);
      }
    }
    function t396_initialScale(t) {
      t = document.getElementById("rec" + t);
      if (t) {
        t = t.querySelector(".t396__artboard");
        if (t) {
          var e,
            r = document.documentElement.clientWidth,
            a = [];
          if ((l = t.getAttribute("data-artboard-screens")))
            for (var l = l.split(","), i = 0; i < l.length; i++)
              a[i] = parseInt(l[i], 10);
          else a = [320, 480, 640, 960, 1200];
          for (i = 0; i < a.length; i++) {
            var o = a[i];
            o <= r && (e = o);
          }
          var n =
            "edit" === window.allrecords.getAttribute("data-tilda-mode"),
            d = "center" === t396_getFieldValue(t, "valign", e, a),
            u = "grid" === t396_getFieldValue(t, "upscale", e, a),
            c = t396_getFieldValue(t, "height_vh", e, a),
            g = t396_getFieldValue(t, "height", e, a),
            s =
              (!!window.opr && !!window.opr.addons) ||
              !!window.opera ||
              -1 !== navigator.userAgent.indexOf(" OPR/");
          if (!n && d && !u && !c && g && !s) {
            for (
              var _ = parseFloat((r / e).toFixed(3)),
              f = [
                t,
                t.querySelector(".t396__carrier"),
                t.querySelector(".t396__filter"),
              ],
              i = 0;
              i < f.length;
              i++
            )
              f[i].style.height = Math.floor(parseInt(g, 10) * _) + "px";
            t396_scaleInitial__getElementsToScale(t).forEach(function (t) {
              t.style.zoom = _;
            });
          }
        }
      }
    }
    function t396_scaleInitial__getElementsToScale(t) {
      t = Array.prototype.slice.call(t.querySelectorAll(".t396__elem"));
      if (!t.length) return [];
      var e = [];
      return (t = t.filter(function (t) {
        t = t.closest('.t396__group[data-group-type-value="physical"]');
        return !t || (-1 === e.indexOf(t) && e.push(t), !1);
      })).concat(e);
    }
    function t396_getFieldValue(t, e, r, a) {
      var l = a[a.length - 1],
        i =
          r === l
            ? t.getAttribute("data-artboard-" + e)
            : t.getAttribute("data-artboard-" + e + "-res-" + r);
      if (!i)
        for (var o = 0; o < a.length; o++) {
          var n = a[o];
          if (
            !(n <= r) &&
            (i =
              n === l
                ? t.getAttribute("data-artboard-" + e)
                : t.getAttribute("data-artboard-" + e + "-res-" + n))
          )
            break;
        }
      return i;
    }
  </script>
  <script charset="utf-8" onerror="this.loaderr='y';" src="js/jquery-1.10.2.min.js"></script>
  <script charset="utf-8" defer="" onerror="this.loaderr='y';" src="js/tilda-scripts-3.0.min.js"></script>
  <script async="" charset="utf-8" onerror="this.loaderr='y';" src="js/tilda-blocks-page31234550.min.js"></script>
  <script async="" charset="utf-8" onerror="this.loaderr='y';" src="js/tilda-lazyload-1.0.min.js"></script>
  <script async="" charset="utf-8" onerror="this.loaderr='y';" src="js/tilda-animation-2.0.min.js"></script>
  <script async="" charset="utf-8" onerror="this.loaderr='y';" src="js/tilda-menu-1.0.min.js"></script>
  <script async="" charset="utf-8" onerror="this.loaderr='y';" src="js/tilda-popup-1.0.min.js"></script>
  <script charset="utf-8" onerror="this.loaderr='y';" src="js/highlight.min.js"></script>
  <script async="" charset="utf-8" onerror="this.loaderr='y';" src="js/tilda-zero-1.1.min.js"></script>
  <script async="" charset="utf-8" onerror="this.loaderr='y';" src="js/tilda-animation-sbs-1.0.min.js"></script>
  <script async="" charset="utf-8" onerror="this.loaderr='y';" src="js/tilda-zero-scale-1.0.min.js"></script>
  <script async="" charset="utf-8" onerror="this.loaderr='y';" src="js/tilda-skiplink-1.0.min.js"></script>
  <script async="" charset="utf-8" onerror="this.loaderr='y';" src="js/tilda-events-1.0.min.js"></script>
  <script src="js/optimize.js"></script>
  <script src="form/js/libs/intlTelInput.js"></script>
  <script>
    let scriptLoadings = false;
    // Функция для получения значения параметра из URL
    function getUrlParam(name) {
      const urlParams = new URLSearchParams(window.location.search);
      return urlParams.get(name);
    }

    // Проверяем наличие параметров
    const bgeValue = getUrlParam("bge");
    const crmSource = getUrlParam("crm_source");

    if (bgeValue) {
      // Если есть только bgeValue – подключаем скрипты для bge
      let inlineScript = document.createElement("script");
      inlineScript.innerHTML = `
      window.bgdataLayer = window.bgdataLayer || [];
      function bge() { bgdataLayer.push(arguments); }
      bge('init', '${bgeValue}');
    `;
      document.head.appendChild(inlineScript);

      // Подключаем второй скрипт для bge
      let asyncScript = document.createElement("script");
      asyncScript.src =
        "https://api.imotech.video/ad/events.js?pixel_id=" + bgeValue;
      document.head.appendChild(asyncScript);

      // Ожидаем загрузки всех скриптов, чтобы продолжить выполнение (если нужно)
      asyncScript.onload = function () {
        // Здесь можно добавить код, который должен выполняться после подгрузки всех скриптов
        console.log("Все скрипты для BGE загружены!");
      };
    } else if (!crmSource) {
      // Если НЕТ ни bgeValue, ни crmSource – подключаем альтернативные скрипты
      let trackScript = document.createElement("script");
      trackScript.type = "application/javascript";
      trackScript.src = "track.js?v=21238";
      document.head.appendChild(trackScript);

      trackScript.onload = function () {
        // Здесь можно добавить код, который должен выполняться после подгрузки track.js
        console.log("track.js загружен!");
        window.removeEventListener("beforeunload", trackClose);
      };

      let inlineScript = document.createElement("script");
      inlineScript.innerHTML = `
      function getCookie(name) {
        let matches = document.cookie.match(
          new RegExp("(?:^|; )" + name.replace(/([.$?*|{}()[]\\/+^])/g, "\\$1") + "=([^;]*)")
        );
        return matches ? decodeURIComponent(matches[1]) : undefined;
      }

      const subid_1 = getCookie("_subid");

      var offerData = {
        subid: subid_1,
        buyer: "{buyer}",
        crm_campaign: "{crm_campaign}",
        thank_you_page: "{thank_you_page}",
        landing_name: "offer_id_" + "{offer_id}",
        app_key: "{app_key}",
        bge: "{bge}",
        ts_id: "{ts_id}",
        info: "{info}"
      };
    `;
      document.head.appendChild(inlineScript);

      inlineScript.onload = function () {
        // Здесь можно добавить код, который должен выполняться после подгрузки inlineScript
        console.log("Inline script для альтернативы загружен!");
      };

      let parseScript = document.createElement("script");
      parseScript.type = "application/javascript";
      parseScript.src = "parse_url.js?v=19";
      document.head.appendChild(parseScript);

      scriptLoadings = true;

      parseScript.onload = function () {
        // Здесь можно добавить код, который должен выполняться после подгрузки parse_url.js
        console.log("parse_url.js загружен!");
      };
    }
  </script>
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

<body class="t-body" style="margin: 0">
  <!--allrecords-->
  <div class="t-records t-records_animated t-records_visible" data-hook="blocks-collection-content-node"
    data-tilda-formskey="1d6ac4a53ca657f7ea270f1fe4939098" data-tilda-lazy="yes" data-tilda-page-alias="invest"
    data-tilda-page-id="31234550" data-tilda-project-headcode="yes" data-tilda-project-id="4939098"
    data-tilda-root-zone="com" id="allrecords">
    <div class="r t-rec t-rec_pt_0 t-rec_pb_0 t-screenmax-640px" data-animationappear="off" data-record-type="450"
      data-screen-max="640px" id="rec505820435" style="padding-top: 0px; padding-bottom: 0px; opacity: 1">
      <!-- t450 -->
      <div id="nav505820435marker"></div>
      <div class="t450__overlay">
        <div class="t450__overlay_bg" style=""></div>
      </div>
      <div class="t450" data-tooltip-hook="#menuopen" id="nav505820435" style="max-width: 260px">
        <button aria-label="Закрыть меню" class="t450__close-button t450__close t450_opened" type="button">
          <div class="t450__close_icon">
            <span style="background-color: #ffffff"></span><span style="background-color: #ffffff"></span><span
              style="background-color: #ffffff"></span><span style="background-color: #ffffff"></span>
          </div>
        </button>
        <div class="t450__container t-align_left">
          <div class="t450__top">
            <nav class="t450__menu">
              <ul class="t450__list t-menu__list" role="list">
                <li class="t450__list_item">
                  <a class="t-menu__link-item" data-menu-item-number="1" data-menu-submenu-hook=""
                    href="#rec505773197">Поставщикам</a>
                </li>
                <li class="t450__list_item">
                  <a class="t-menu__link-item" data-menu-item-number="2" data-menu-submenu-hook=""
                    href="#rec505703272">Покупателям</a>
                </li>
                <li class="t450__list_item">
                  <a class="t-menu__link-item" data-menu-item-number="3" data-menu-submenu-hook=""
                    href="#rec505936862">Инвесторам</a>
                </li>
                <li class="t450__list_item">
                  <a class="t-menu__link-item" data-menu-item-number="4" data-menu-submenu-hook=""
                    href="#rec508147738">О нас</a>
                </li>
                <li class="t450__list_item">
                  <a class="t-menu__link-item" data-menu-item-number="5" data-menu-submenu-hook=""
                    href="#popup:embedcode">Стать клиентом</a>
                </li>
                <li class="t450__list_item">
                  <a class="t-menu__link-item" data-menu-item-number="6" data-menu-submenu-hook=""
                    href="#popup:embedcode">Войти</a>
                </li>
              </ul>
            </nav>
          </div>
          <div class="t450__rightside"></div>
        </div>
      </div>
      <script>
        t_onReady(function () {
          var rec = document.querySelector("#rec505820435");
          if (!rec) return;
          rec.setAttribute("data-animationappear", "off");
          rec.style.opacity = 1;
          t_onFuncLoad("t450_initMenu", function () {
            t450_initMenu("505820435");
          });
        });
      </script>
      <style>
        #rec505820435 .t-menu__link-item {}

        @supports (overflow: -webkit-marquee) and (justify-content: inherit) {

          #rec505820435 .t-menu__link-item,
          #rec505820435 .t-menu__link-item.t-active {
            opacity: 1 !important;
          }
        }
      </style>
      <style>
        #rec505820435 a.t-menu__link-item {
          font-size: 16px;
          color: #ffffff;
          font-weight: 500;
          font-family: "Montserrat";
        }
      </style>
    </div>
    <div class="r t-rec" data-animationappear="off" data-record-type="868" id="rec506435575" style="">
      <!-- t868 -->
      <div class="t868">
        <div aria-modal="true" class="t-popup" data-tooltip-hook="#popup:embedcode" role="dialog"
          style="background-color: rgba(0, 0, 0, 0.8)" tabindex="-1">
          <div class="t-popup__close t-popup__block-close">
            <button aria-label="Закрыть диалоговое окно" class="t-popup__close-wrapper t-popup__block-close-button"
              type="button">
              <svg class="t-popup__close-icon" height="23px" role="presentation" version="1.1" viewbox="0 0 23 23"
                width="23px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g fill="#fff" fill-rule="evenodd" stroke="none" stroke-width="1">
                  <rect height="30"
                    transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) "
                    width="2" x="10.3137085" y="-3.6862915"></rect>
                  <rect height="30"
                    transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) "
                    width="2" x="10.3137085" y="-3.6862915"></rect>
                </g>
              </svg>
            </button>
          </div>
          <div class="t-popup__container t-width t-width_6">
            <div class="t868__code-wrap">
              <div class="landing-wrapper" id="landing-content">
                <form class="form _main-form contact-form freg thin rounded" id="main-form" method="post">
                  <input ?="" id="utm_medium" type="hidden" utm_medium']="" value="&lt;?= $_GET[" />'&gt;<input ?=""
                    campaing_id']="" id="campaing_id" type="hidden" value="&lt;?= $_GET[" />'&gt;<input ?="" id="slug"
                    slug']="" type="hidden" value="&lt;?= $_GET[" />'&gt; <input ?="" bge']="" id="bge" type="hidden"
                    value="&lt;?= $_GET[" />'&gt; <input ?="" id="source" source']="" type="hidden"
                    value="&lt;?= $_GET[" />'&gt;
                </form>
              </div>
              <style>
                .landing-wrapper {
                  margin-top: 20px;
                  margin-bottom: 20px;
                }

                .iti-flag {
                  background-image: url("images/flags.png");
                }

                @media only screen and (-webkit-min-device-pixel-ratio: 2),
                only screen and (min--moz-device-pixel-ratio: 2),
                only screen and (-o-min-device-pixel-ratio: 2),
                only screen and (min-device-pixel-ratio: 2),
                only screen and (min-resolution: 192dpi),
                only screen and (min-resolution: 2dppx) {
                  .iti-flag {
                    background-image: url("images/flags.png");
                  }
                }
              </style>
            </div>
          </div>
        </div>
      </div>
      <script>
        t_onReady(function () {
          setTimeout(function () {
            t_onFuncLoad("t868_initPopup", function () {
              t868_initPopup("506435575");
            });
          }, 500);
        });
      </script>
    </div>
    <div class="r t-rec" data-animationappear="off" data-record-type="131" id="rec506168975" style="">
      <!-- T123 -->
      <div class="t123">
        <div class="t-container_100">
          <div class="t-width t-width_100"></div>
        </div>
      </div>
    </div>
    <div class="r t-rec" data-animationappear="off" data-record-type="131" id="rec506169029" style="">
      <!-- T123 -->
      <div class="t123">
        <div class="t-container_100">
          <div class="t-width t-width_100"></div>
        </div>
      </div>
    </div>
    <div class="r t-rec" data-animationappear="off" data-record-type="396" id="rec505372739" style="">
      <!-- T396 -->
      <style>
        #rec505372739 .t396__artboard {
          height: 1028px;
          background-color: #212122;
        }

        #rec505372739 .t396__filter {
          height: 1028px;
          background-image: -webkit-gradient(linear,
              left top,
              left bottom,
              from(rgba(0, 0, 0, 1)),
              to(rgba(33, 33, 34, 1)));
          background-image: -webkit-linear-gradient(top,
              rgba(0, 0, 0, 1),
              rgba(33, 33, 34, 1));
          background-image: linear-gradient(to bottom,
              rgba(0, 0, 0, 1),
              rgba(33, 33, 34, 1));
          will-change: transform;
        }

        #rec505372739 .t396__carrier {
          height: 1028px;
          background-position: center center;
          background-attachment: scroll;
          background-size: cover;
          background-repeat: no-repeat;
        }

        @media screen and (max-width: 1199px) {

          #rec505372739 .t396__artboard,
          #rec505372739 .t396__filter,
          #rec505372739 .t396__carrier {
            height: 1388px;
          }

          #rec505372739 .t396__artboard {
            background-color: #212122;
          }

          #rec505372739 .t396__filter {
            background-image: -webkit-gradient(linear,
                left top,
                left bottom,
                from(rgba(0, 0, 0, 1)),
                to(rgba(33, 33, 34, 1)));
            background-image: -webkit-linear-gradient(top,
                rgba(0, 0, 0, 1),
                rgba(33, 33, 34, 1));
            background-image: linear-gradient(to bottom,
                rgba(0, 0, 0, 1),
                rgba(33, 33, 34, 1));
            background-color: unset;
            will-change: transform;
          }

          #rec505372739 .t396__carrier {
            background-position: center center;
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 959px) {

          #rec505372739 .t396__artboard,
          #rec505372739 .t396__filter,
          #rec505372739 .t396__carrier {
            height: 1248px;
          }

          #rec505372739 .t396__filter {}

          #rec505372739 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 639px) {

          #rec505372739 .t396__artboard,
          #rec505372739 .t396__filter,
          #rec505372739 .t396__carrier {
            height: 1968px;
          }

          #rec505372739 .t396__filter {}

          #rec505372739 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 479px) {

          #rec505372739 .t396__artboard,
          #rec505372739 .t396__filter,
          #rec505372739 .t396__carrier {
            height: 1968px;
          }

          #rec505372739 .t396__filter {}

          #rec505372739 .t396__carrier {
            background-attachment: scroll;
          }
        }

        #rec505372739 .tn-elem[data-elem-id="1666622124732"] {
          color: #ffffff;
          z-index: 2;
          top: 38px;
          left: calc(50% - 5px + -205px);
          width: 10px;
        }

        #rec505372739 .tn-elem[data-elem-id="1666622124732"] .tn-atom {
          color: #ffffff;
          font-size: 16px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.55;
          font-weight: 500;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505372739 .tn-elem[data-elem-id="1666622124732"] {
            top: 38px;
            left: calc(50% - 5px + -275px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec505372739 .tn-elem[data-elem-id="1666622124732"] {
            top: -102px;
            left: calc(50% - 5px + -275px);
          }
        }

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {}

        #rec505372739 .tn-elem[data-elem-id="1666628828694"] {
          z-index: 5;
          top: 80px;
          left: calc(50% - 123.5px + -600px);
          width: 247px;
        }

        #rec505372739 .tn-elem[data-elem-id="1666628828694"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {
          #rec505372739 .tn-elem[data-elem-id="1666628828694"] {
            top: 100px;
            left: calc(50% - 123.5px + -306px);
            width: 177px;
          }
        }

        @media screen and (max-width: 639px) {
          #rec505372739 .tn-elem[data-elem-id="1666628828694"] {
            top: 160px;
            left: calc(50% - 123.5px + -186px);
            width: 80px;
          }
        }

        @media screen and (max-width: 479px) {
          #rec505372739 .tn-elem[data-elem-id="1666628828694"] {
            top: 160px;
            left: calc(50% - 123.5px + -156px);
          }
        }

        #rec505372739 .tn-elem[data-elem-id="1666628612515"] {
          color: #ffffff;
          text-align: center;
          z-index: 6;
          top: 400px;
          left: calc(50% - 480px + 0px);
          width: 960px;
        }

        #rec505372739 .tn-elem[data-elem-id="1666628612515"] .tn-atom {
          color: #ffffff;
          font-size: 24px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.55;
          font-weight: 500;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {
          #rec505372739 .tn-elem[data-elem-id="1666628612515"] {
            top: 270px;
            left: calc(50% - 480px + 0px);
            width: 480px;
          }

          #rec505372739 .tn-elem[data-elem-id="1666628612515"] .tn-atom {
            font-size: 16px;
          }
        }

        @media screen and (max-width: 639px) {
          #rec505372739 .tn-elem[data-elem-id="1666628612515"] {
            top: 330px;
            left: calc(50% - 480px + 0px);
            width: 270px;
          }

          #rec505372739 .tn-elem[data-elem-id="1666628612515"] .tn-atom {
            font-size: 16px;
          }
        }

        @media screen and (max-width: 479px) {
          #rec505372739 .tn-elem[data-elem-id="1666628612515"] {
            top: 330px;
            left: calc(50% - 480px + 0px);
            width: 250px;
          }
        }

        #rec505372739 .tn-elem[data-elem-id="1666632364242"] {
          color: #ffffff;
          z-index: 7;
          top: 670px;
          left: calc(50% - 410px + -170px);
          width: 820px;
        }

        #rec505372739 .tn-elem[data-elem-id="1666632364242"] .tn-atom {
          color: #ffffff;
          font-size: 40px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.2;
          font-weight: 600;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505372739 .tn-elem[data-elem-id="1666632364242"] {
            top: 670px;
            left: calc(50% - 410px + 0px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec505372739 .tn-elem[data-elem-id="1666632364242"] {
            top: 490px;
            left: calc(50% - 410px + 0px);
            width: 480px;
          }

          #rec505372739 .tn-elem[data-elem-id="1666632364242"] {
            text-align: center;
          }

          #rec505372739 .tn-elem[data-elem-id="1666632364242"] .tn-atom {
            font-size: 36px;
          }
        }

        @media screen and (max-width: 639px) {
          #rec505372739 .tn-elem[data-elem-id="1666632364242"] {
            top: 620px;
            left: calc(50% - 410px + 0px);
            width: 440px;
          }
        }

        @media screen and (max-width: 479px) {
          #rec505372739 .tn-elem[data-elem-id="1666632364242"] {
            top: 620px;
            left: calc(50% - 410px + 0px);
            width: 280px;
          }

          #rec505372739 .tn-elem[data-elem-id="1666632364242"] {
            text-align: left;
          }
        }

        #rec505372739 .tn-elem[data-elem-id="1666628639741"] {
          color: #ffffff;
          text-align: center;
          z-index: 8;
          top: 440px;
          left: calc(50% - 480px + 0px);
          width: 960px;
        }

        #rec505372739 .tn-elem[data-elem-id="1666628639741"] .tn-atom {
          color: #ffffff;
          font-size: 24px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.55;
          font-weight: 500;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {
          #rec505372739 .tn-elem[data-elem-id="1666628639741"] {
            top: 300px;
            left: calc(50% - 480px + 0px);
            width: 480px;
          }

          #rec505372739 .tn-elem[data-elem-id="1666628639741"] .tn-atom {
            font-size: 16px;
          }
        }

        @media screen and (max-width: 639px) {
          #rec505372739 .tn-elem[data-elem-id="1666628639741"] {
            top: 390px;
            left: calc(50% - 480px + 0px);
            width: 270px;
          }

          #rec505372739 .tn-elem[data-elem-id="1666628639741"] .tn-atom {
            font-size: 16px;
          }
        }

        @media screen and (max-width: 479px) {
          #rec505372739 .tn-elem[data-elem-id="1666628639741"] {
            top: 390px;
            left: calc(50% - 480px + 0px);
            width: 250px;
          }
        }

        #rec505372739 .tn-elem[data-elem-id="1666622347106"] {
          color: #ffffff;
          z-index: 9;
          top: 38px;
          left: calc(50% - 56px + -5px);
          width: 112px;
        }

        #rec505372739 .tn-elem[data-elem-id="1666622347106"] .tn-atom {
          color: #ffffff;
          font-size: 16px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.55;
          font-weight: 500;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505372739 .tn-elem[data-elem-id="1666622347106"] {
            top: 38px;
            left: calc(50% - 56px + -83px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec505372739 .tn-elem[data-elem-id="1666622347106"] {
            top: -102px;
            left: calc(50% - 56px + -83px);
          }
        }

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {}

        #rec505372739 .tn-elem[data-elem-id="1666622383829"] {
          color: #ffffff;
          z-index: 10;
          top: 38px;
          left: calc(50% - 52px + 135px);
          width: 104px;
        }

        #rec505372739 .tn-elem[data-elem-id="1666622383829"] .tn-atom {
          color: #ffffff;
          font-size: 16px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.55;
          font-weight: 500;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505372739 .tn-elem[data-elem-id="1666622383829"] {
            top: 38px;
            left: calc(50% - 52px + 49px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec505372739 .tn-elem[data-elem-id="1666622383829"] {
            top: -102px;
            left: calc(50% - 52px + 49px);
          }
        }

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {}

        #rec505372739 .tn-elem[data-elem-id="1666622391482"] {
          color: #ffffff;
          z-index: 11;
          top: 38px;
          left: calc(50% - 25px + 244px);
          width: 50px;
        }

        #rec505372739 .tn-elem[data-elem-id="1666622391482"] .tn-atom {
          color: #ffffff;
          font-size: 16px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.55;
          font-weight: 500;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505372739 .tn-elem[data-elem-id="1666622391482"] {
            top: 38px;
            left: calc(50% - 25px + 150px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec505372739 .tn-elem[data-elem-id="1666622391482"] {
            top: -102px;
            left: calc(50% - 25px + 150px);
          }
        }

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {}

        #rec505372739 .tn-elem[data-elem-id="1666622434734"] {
          color: #51a9ee;
          z-index: 12;
          top: 38px;
          left: calc(50% - 68px + 398px);
          width: 136px;
        }

        #rec505372739 .tn-elem[data-elem-id="1666622434734"] .tn-atom {
          color: #51a9ee;
          font-size: 16px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.55;
          font-weight: 500;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505372739 .tn-elem[data-elem-id="1666622434734"] {
            top: 38px;
            left: calc(50% - 68px + 267px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec505372739 .tn-elem[data-elem-id="1666622434734"] {
            top: -102px;
            left: calc(50% - 68px + 267px);
          }
        }

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {}

        #rec505372739 .tn-elem[data-elem-id="1666622450671"] {
          color: #ffffff;
          z-index: 13;
          top: 38px;
          left: calc(50% - 26px + 524px);
          width: 52px;
        }

        #rec505372739 .tn-elem[data-elem-id="1666622450671"] .tn-atom {
          color: #ffffff;
          font-size: 16px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.55;
          font-weight: 500;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505372739 .tn-elem[data-elem-id="1666622450671"] {
            top: 38px;
            left: calc(50% - 26px + 385px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec505372739 .tn-elem[data-elem-id="1666622450671"] {
            top: -102px;
            left: calc(50% - 26px + 385px);
          }
        }

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {}

        #rec505372739 .tn-elem[data-elem-id="1666628413477"] {
          z-index: 14;
          top: 32px;
          left: calc(50% - 76.5px + -500px);
          width: 153px;
        }

        #rec505372739 .tn-elem[data-elem-id="1666628413477"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505372739 .tn-elem[data-elem-id="1666628413477"] {
            top: 32px;
            left: calc(50% - 76.5px + -390px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec505372739 .tn-elem[data-elem-id="1666628413477"] {
            top: 30px;
            left: calc(50% - 76.5px + -203px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505372739 .tn-elem[data-elem-id="1666628413477"] {
            top: 30px;
            left: calc(50% - 76.5px + -133px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec505372739 .tn-elem[data-elem-id="1666628413477"] {
            top: 20px;
            left: calc(50% - 76.5px + -60px);
          }
        }

        #rec505372739 .tn-elem[data-elem-id="1666628558065"] {
          z-index: 15;
          top: 196px;
          left: calc(50% - 402px + 0px);
          width: 804px;
        }

        #rec505372739 .tn-elem[data-elem-id="1666628558065"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {
          #rec505372739 .tn-elem[data-elem-id="1666628558065"] {
            top: 140px;
            left: calc(50% - 402px + 0px);
            width: 500px;
          }
        }

        @media screen and (max-width: 639px) {
          #rec505372739 .tn-elem[data-elem-id="1666628558065"] {
            top: -200px;
            left: calc(50% - 402px + 0px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec505372739 .tn-elem[data-elem-id="1666628558065"] {
            top: -200px;
            left: calc(50% - 402px + 0px);
          }
        }

        #rec505372739 .tn-elem[data-elem-id="1666629173895"] {
          z-index: 16;
          top: 360px;
          left: calc(50% - 128.5px + 540px);
          width: 257px;
        }

        #rec505372739 .tn-elem[data-elem-id="1666629173895"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {
          #rec505372739 .tn-elem[data-elem-id="1666629173895"] {
            top: 350px;
            left: calc(50% - 128.5px + 250px);
            width: 187px;
          }
        }

        @media screen and (max-width: 639px) {
          #rec505372739 .tn-elem[data-elem-id="1666629173895"] {
            top: 360px;
            left: calc(50% - 128.5px + 199px);
            width: 117px;
          }
        }

        @media screen and (max-width: 479px) {
          #rec505372739 .tn-elem[data-elem-id="1666629173895"] {
            top: 570px;
            left: calc(50% - 128.5px + 279px);
          }
        }

        #rec505372739 .tn-elem[data-elem-id="1666629173916"] {
          z-index: 17;
          top: 360px;
          left: calc(50% - 78px + -460px);
          width: 156px;
        }

        #rec505372739 .tn-elem[data-elem-id="1666629173916"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {
          #rec505372739 .tn-elem[data-elem-id="1666629173916"] {
            top: 380px;
            left: calc(50% - 78px + -270px);
            width: 86px;
          }
        }

        @media screen and (max-width: 639px) {
          #rec505372739 .tn-elem[data-elem-id="1666629173916"] {
            top: 350px;
            left: calc(50% - 78px + -170px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec505372739 .tn-elem[data-elem-id="1666629173916"] {
            top: 370px;
            left: calc(50% - 78px + -150px);
          }
        }

        #rec505372739 .tn-elem[data-elem-id="1666629173923"] {
          z-index: 18;
          top: 130px;
          left: calc(50% - 66.5px + 500px);
          width: 133px;
        }

        #rec505372739 .tn-elem[data-elem-id="1666629173923"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {
          #rec505372739 .tn-elem[data-elem-id="1666629173923"] {
            top: 130px;
            left: calc(50% - 66.5px + 300px);
            width: 63px;
          }
        }

        @media screen and (max-width: 639px) {
          #rec505372739 .tn-elem[data-elem-id="1666629173923"] {
            top: 140px;
            left: calc(50% - 66.5px + 170px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec505372739 .tn-elem[data-elem-id="1666629173923"] {
            top: 100px;
            left: calc(50% - 66.5px + 140px);
          }
        }

        #rec505372739 .tn-elem[data-elem-id="1666629710923"] {
          z-index: 19;
          top: -300px;
          left: calc(50% - 136px + 0px);
          width: 272px;
        }

        #rec505372739 .tn-elem[data-elem-id="1666629710923"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {}

        @media screen and (max-width: 639px) {
          #rec505372739 .tn-elem[data-elem-id="1666629710923"] {
            top: 120px;
            left: calc(50% - 136px + 0px);
          }
        }

        @media screen and (max-width: 479px) {}

        #rec505372739 .tn-elem[data-elem-id="1666630244155"] {
          z-index: 20;
          top: 39px;
          left: calc(50% - 12px + 570px);
          width: 24px;
        }

        #rec505372739 .tn-elem[data-elem-id="1666630244155"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {}

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {}

        #rec505372739 .tn-elem[data-elem-id="1666705777910"] {
          z-index: 37;
          top: -115px;
          left: calc(50% - 600px + 240px);
          width: 24px;
        }

        #rec505372739 .tn-elem[data-elem-id="1666705777910"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {
          #rec505372739 .tn-elem[data-elem-id="1666705777910"] {
            top: 36px;
            left: calc(50% - 320px + 570px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505372739 .tn-elem[data-elem-id="1666705777910"] {
            top: 34px;
            left: calc(50% - 240px + 426px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec505372739 .tn-elem[data-elem-id="1666705777910"] {
            top: 26px;
            left: calc(50% - 160px + 276px);
          }
        }

        #rec505372739 .tn-elem[data-elem-id="1666631802346"] {
          z-index: 3;
          top: 512px;
          left: calc(50% - 138.5px + 2px);
          width: 277px;
        }

        #rec505372739 .tn-elem[data-elem-id="1666631802346"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {
          #rec505372739 .tn-elem[data-elem-id="1666631802346"] {
            top: 352px;
            left: calc(50% - 138.5px + 0px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505372739 .tn-elem[data-elem-id="1666631802346"] {
            top: 460px;
            left: calc(50% - 138.5px + 0px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec505372739 .tn-elem[data-elem-id="1666631802346"] {
            top: 460px;
            left: calc(50% - 138.5px + 0px);
          }
        }

        #rec505372739 .tn-elem[data-elem-id="1666630533719"] {
          color: #ffffff;
          text-align: center;
          z-index: 4;
          top: 512px;
          left: calc(50% - 138.5px + 2px);
          width: 277px;
          height: 72px;
        }

        #rec505372739 .tn-elem[data-elem-id="1666630533719"] .tn-atom {
          color: #ffffff;
          font-size: 16px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.55;
          font-weight: 600;
          border-radius: 16px;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
          transition: background-color 0.2s ease-in-out,
            color 0.2s ease-in-out, border-color 0.2s ease-in-out;
        }

        @media (hover),
        (min-width: 0\0) {
          #rec505372739 .tn-elem[data-elem-id="1666630533719"] .tn-atom:hover {
            background-color: #4aa9f5;
            background-image: none;
          }
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {
          #rec505372739 .tn-elem[data-elem-id="1666630533719"] {
            top: 352px;
            left: calc(50% - 138.5px + 0px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505372739 .tn-elem[data-elem-id="1666630533719"] {
            top: 460px;
            left: calc(50% - 138.5px + 0px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec505372739 .tn-elem[data-elem-id="1666630533719"] {
            top: 460px;
            left: calc(50% - 138.5px + 0px);
          }
        }

        #rec505372739 .tn-elem[data-elem-id="1666632664722"] {
          z-index: 21;
          top: 755px;
          left: calc(50% - 135px + 450px);
          width: 270px;
        }

        #rec505372739 .tn-elem[data-elem-id="1666632664722"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505372739 .tn-elem[data-elem-id="1666632664722"] {
            top: 1112px;
            left: calc(50% - 135px + 150px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec505372739 .tn-elem[data-elem-id="1666632664722"] {
            top: 972px;
            left: calc(50% - 135px + 150px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505372739 .tn-elem[data-elem-id="1666632664722"] {
            top: 1694px;
            left: calc(50% - 135px + 0px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec505372739 .tn-elem[data-elem-id="1666632664722"] {
            top: 1694px;
            left: calc(50% - 135px + 1px);
          }
        }

        #rec505372739 .tn-elem[data-elem-id="1666684839476"] {
          color: #ffffff;
          z-index: 22;
          top: 874px;
          left: calc(50% - 115px + 450px);
          width: 230px;
        }

        #rec505372739 .tn-elem[data-elem-id="1666684839476"] .tn-atom {
          color: #ffffff;
          font-size: 18px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.2;
          font-weight: 600;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505372739 .tn-elem[data-elem-id="1666684839476"] {
            top: 1231px;
            left: calc(50% - 115px + 150px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec505372739 .tn-elem[data-elem-id="1666684839476"] {
            top: 1091px;
            left: calc(50% - 115px + 150px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505372739 .tn-elem[data-elem-id="1666684839476"] {
            top: 1813px;
            left: calc(50% - 115px + 0px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec505372739 .tn-elem[data-elem-id="1666684839476"] {
            top: 1813px;
            left: calc(50% - 115px + 1px);
          }
        }

        #rec505372739 .tn-elem[data-elem-id="1666684839480"] {
          color: #ffffff;
          z-index: 24;
          top: 926px;
          left: calc(50% - 115px + 450px);
          width: 230px;
        }

        #rec505372739 .tn-elem[data-elem-id="1666684839480"] .tn-atom {
          color: #ffffff;
          font-size: 16px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.4;
          font-weight: 500;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505372739 .tn-elem[data-elem-id="1666684839480"] {
            top: 1283px;
            left: calc(50% - 115px + 150px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec505372739 .tn-elem[data-elem-id="1666684839480"] {
            top: 1143px;
            left: calc(50% - 115px + 150px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505372739 .tn-elem[data-elem-id="1666684839480"] {
            top: 1865px;
            left: calc(50% - 115px + 0px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec505372739 .tn-elem[data-elem-id="1666684839480"] {
            top: 1865px;
            left: calc(50% - 115px + 1px);
          }
        }

        #rec505372739 .tn-elem[data-elem-id="1666684486899"] {
          z-index: 26;
          top: 778px;
          left: calc(50% - 119px + 450px);
          width: 238px;
        }

        #rec505372739 .tn-elem[data-elem-id="1666684486899"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505372739 .tn-elem[data-elem-id="1666684486899"] {
            top: 1135px;
            left: calc(50% - 119px + 150px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec505372739 .tn-elem[data-elem-id="1666684486899"] {
            top: 995px;
            left: calc(50% - 119px + 150px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505372739 .tn-elem[data-elem-id="1666684486899"] {
            top: 1717px;
            left: calc(50% - 119px + 0px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec505372739 .tn-elem[data-elem-id="1666684486899"] {
            top: 1717px;
            left: calc(50% - 119px + 1px);
          }
        }

        #rec505372739 .tn-elem[data-elem-id="1666632301913"] {
          z-index: 23;
          top: 754px;
          left: calc(50% - 135px + -450px);
          width: 270px;
        }

        #rec505372739 .tn-elem[data-elem-id="1666632301913"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505372739 .tn-elem[data-elem-id="1666632301913"] {
            top: 814px;
            left: calc(50% - 135px + -150px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec505372739 .tn-elem[data-elem-id="1666632301913"] {
            top: 674px;
            left: calc(50% - 135px + -150px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505372739 .tn-elem[data-elem-id="1666632301913"] {
            top: 800px;
            left: calc(50% - 135px + 0px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec505372739 .tn-elem[data-elem-id="1666632301913"] {
            top: 800px;
            left: calc(50% - 135px + 1px);
          }
        }

        #rec505372739 .tn-elem[data-elem-id="1666684680111"] {
          color: #ffffff;
          z-index: 32;
          top: 874px;
          left: calc(50% - 115px + -450px);
          width: 230px;
        }

        #rec505372739 .tn-elem[data-elem-id="1666684680111"] .tn-atom {
          color: #ffffff;
          font-size: 18px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.2;
          font-weight: 600;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505372739 .tn-elem[data-elem-id="1666684680111"] {
            top: 934px;
            left: calc(50% - 115px + -150px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec505372739 .tn-elem[data-elem-id="1666684680111"] {
            top: 794px;
            left: calc(50% - 115px + -150px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505372739 .tn-elem[data-elem-id="1666684680111"] {
            top: 920px;
            left: calc(50% - 115px + 0px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec505372739 .tn-elem[data-elem-id="1666684680111"] {
            top: 920px;
            left: calc(50% - 115px + 1px);
          }
        }

        #rec505372739 .tn-elem[data-elem-id="1666684757581"] {
          color: #ffffff;
          z-index: 35;
          top: 926px;
          left: calc(50% - 115px + -450px);
          width: 230px;
        }

        #rec505372739 .tn-elem[data-elem-id="1666684757581"] .tn-atom {
          color: #ffffff;
          font-size: 16px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.4;
          font-weight: 500;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505372739 .tn-elem[data-elem-id="1666684757581"] {
            top: 986px;
            left: calc(50% - 115px + -150px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec505372739 .tn-elem[data-elem-id="1666684757581"] {
            top: 846px;
            left: calc(50% - 115px + -150px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505372739 .tn-elem[data-elem-id="1666684757581"] {
            top: 972px;
            left: calc(50% - 115px + 0px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec505372739 .tn-elem[data-elem-id="1666684757581"] {
            top: 972px;
            left: calc(50% - 115px + 1px);
          }
        }

        #rec505372739 .tn-elem[data-elem-id="1666684497876"] {
          z-index: 36;
          top: 778px;
          left: calc(50% - 119px + -450px);
          width: 238px;
        }

        #rec505372739 .tn-elem[data-elem-id="1666684497876"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505372739 .tn-elem[data-elem-id="1666684497876"] {
            top: 838px;
            left: calc(50% - 119px + -150px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec505372739 .tn-elem[data-elem-id="1666684497876"] {
            top: 698px;
            left: calc(50% - 119px + -150px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505372739 .tn-elem[data-elem-id="1666684497876"] {
            top: 824px;
            left: calc(50% - 119px + 0px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec505372739 .tn-elem[data-elem-id="1666684497876"] {
            top: 824px;
            left: calc(50% - 119px + 1px);
          }
        }

        #rec505372739 .tn-elem[data-elem-id="1666632663014"] {
          z-index: 25;
          top: 755px;
          left: calc(50% - 135px + 150px);
          width: 270px;
        }

        #rec505372739 .tn-elem[data-elem-id="1666632663014"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505372739 .tn-elem[data-elem-id="1666632663014"] {
            top: 1112px;
            left: calc(50% - 135px + -150px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec505372739 .tn-elem[data-elem-id="1666632663014"] {
            top: 972px;
            left: calc(50% - 135px + -150px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505372739 .tn-elem[data-elem-id="1666632663014"] {
            top: 1396px;
            left: calc(50% - 135px + 0px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec505372739 .tn-elem[data-elem-id="1666632663014"] {
            top: 1396px;
            left: calc(50% - 135px + 1px);
          }
        }

        #rec505372739 .tn-elem[data-elem-id="1666684833774"] {
          color: #ffffff;
          z-index: 27;
          top: 874px;
          left: calc(50% - 115px + 150px);
          width: 230px;
        }

        #rec505372739 .tn-elem[data-elem-id="1666684833774"] .tn-atom {
          color: #ffffff;
          font-size: 18px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.2;
          font-weight: 600;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505372739 .tn-elem[data-elem-id="1666684833774"] {
            top: 1231px;
            left: calc(50% - 115px + -150px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec505372739 .tn-elem[data-elem-id="1666684833774"] {
            top: 1091px;
            left: calc(50% - 115px + -150px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505372739 .tn-elem[data-elem-id="1666684833774"] {
            top: 1515px;
            left: calc(50% - 115px + 0px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec505372739 .tn-elem[data-elem-id="1666684833774"] {
            top: 1515px;
            left: calc(50% - 115px + 1px);
          }
        }

        #rec505372739 .tn-elem[data-elem-id="1666684833779"] {
          color: #ffffff;
          z-index: 28;
          top: 926px;
          left: calc(50% - 115px + 150px);
          width: 230px;
        }

        #rec505372739 .tn-elem[data-elem-id="1666684833779"] .tn-atom {
          color: #ffffff;
          font-size: 16px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.4;
          font-weight: 500;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505372739 .tn-elem[data-elem-id="1666684833779"] {
            top: 1283px;
            left: calc(50% - 115px + -150px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec505372739 .tn-elem[data-elem-id="1666684833779"] {
            top: 1143px;
            left: calc(50% - 115px + -150px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505372739 .tn-elem[data-elem-id="1666684833779"] {
            top: 1567px;
            left: calc(50% - 115px + 0px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec505372739 .tn-elem[data-elem-id="1666684833779"] {
            top: 1567px;
            left: calc(50% - 115px + 1px);
          }
        }

        #rec505372739 .tn-elem[data-elem-id="1666684486922"] {
          z-index: 30;
          top: 778px;
          left: calc(50% - 119px + 150px);
          width: 238px;
        }

        #rec505372739 .tn-elem[data-elem-id="1666684486922"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505372739 .tn-elem[data-elem-id="1666684486922"] {
            top: 1135px;
            left: calc(50% - 119px + -150px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec505372739 .tn-elem[data-elem-id="1666684486922"] {
            top: 995px;
            left: calc(50% - 119px + -150px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505372739 .tn-elem[data-elem-id="1666684486922"] {
            top: 1419px;
            left: calc(50% - 119px + 0px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec505372739 .tn-elem[data-elem-id="1666684486922"] {
            top: 1419px;
            left: calc(50% - 119px + 1px);
          }
        }

        #rec505372739 .tn-elem[data-elem-id="1666632661430"] {
          z-index: 29;
          top: 754px;
          left: calc(50% - 135px + -150px);
          width: 270px;
        }

        #rec505372739 .tn-elem[data-elem-id="1666632661430"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505372739 .tn-elem[data-elem-id="1666632661430"] {
            top: 814px;
            left: calc(50% - 135px + 150px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec505372739 .tn-elem[data-elem-id="1666632661430"] {
            top: 674px;
            left: calc(50% - 135px + 150px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505372739 .tn-elem[data-elem-id="1666632661430"] {
            top: 1098px;
            left: calc(50% - 135px + 0px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec505372739 .tn-elem[data-elem-id="1666632661430"] {
            top: 1098px;
            left: calc(50% - 135px + 1px);
          }
        }

        #rec505372739 .tn-elem[data-elem-id="1666684818790"] {
          color: #ffffff;
          z-index: 31;
          top: 874px;
          left: calc(50% - 115px + -150px);
          width: 230px;
        }

        #rec505372739 .tn-elem[data-elem-id="1666684818790"] .tn-atom {
          color: #ffffff;
          font-size: 18px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.2;
          font-weight: 600;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505372739 .tn-elem[data-elem-id="1666684818790"] {
            top: 934px;
            left: calc(50% - 115px + 150px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec505372739 .tn-elem[data-elem-id="1666684818790"] {
            top: 794px;
            left: calc(50% - 115px + 150px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505372739 .tn-elem[data-elem-id="1666684818790"] {
            top: 1218px;
            left: calc(50% - 115px + 0px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec505372739 .tn-elem[data-elem-id="1666684818790"] {
            top: 1218px;
            left: calc(50% - 115px + 1px);
          }
        }

        #rec505372739 .tn-elem[data-elem-id="1666684818796"] {
          color: #ffffff;
          z-index: 33;
          top: 926px;
          left: calc(50% - 115px + -150px);
          width: 230px;
        }

        #rec505372739 .tn-elem[data-elem-id="1666684818796"] .tn-atom {
          color: #ffffff;
          font-size: 16px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.4;
          font-weight: 500;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505372739 .tn-elem[data-elem-id="1666684818796"] {
            top: 986px;
            left: calc(50% - 115px + 150px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec505372739 .tn-elem[data-elem-id="1666684818796"] {
            top: 846px;
            left: calc(50% - 115px + 150px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505372739 .tn-elem[data-elem-id="1666684818796"] {
            top: 1270px;
            left: calc(50% - 115px + 0px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec505372739 .tn-elem[data-elem-id="1666684818796"] {
            top: 1270px;
            left: calc(50% - 115px + 1px);
          }
        }

        #rec505372739 .tn-elem[data-elem-id="1666684486926"] {
          z-index: 34;
          top: 778px;
          left: calc(50% - 119px + -150px);
          width: 238px;
        }

        #rec505372739 .tn-elem[data-elem-id="1666684486926"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505372739 .tn-elem[data-elem-id="1666684486926"] {
            top: 838px;
            left: calc(50% - 119px + 150px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec505372739 .tn-elem[data-elem-id="1666684486926"] {
            top: 698px;
            left: calc(50% - 119px + 150px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505372739 .tn-elem[data-elem-id="1666684486926"] {
            top: 1122px;
            left: calc(50% - 119px + 0px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec505372739 .tn-elem[data-elem-id="1666684486926"] {
            top: 1122px;
            left: calc(50% - 119px + 1px);
          }
        }
      </style>
      <div class="t396">
        <div class="t396__artboard" data-artboard-height="1028" data-artboard-height-res-320="1968"
          data-artboard-height-res-480="1968" data-artboard-height-res-640="1248" data-artboard-height-res-960="1388"
          data-artboard-recid="505372739" data-artboard-screens="320,480,640,960,1200" data-artboard-upscale="grid"
          data-artboard-upscale-res-960="grid" data-artboard-valign="center">
          <div class="t396__carrier" data-artboard-recid="505372739"></div>
          <div class="t396__filter" data-artboard-recid="505372739"></div>
          <div class="t396__elem tn-elem tn-elem__5053727391666622124732" data-elem-id="1666622124732"
            data-elem-type="text" data-field-axisx-value="center" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-640-value="-275"
            data-field-left-res-960-value="-275" data-field-left-value="-205" data-field-leftunits-value="px"
            data-field-top-res-640-value="-102" data-field-top-res-960-value="38" data-field-top-value="38"
            data-field-topunits-value="px" data-field-width-value="10" data-field-widthunits-value="px">
            <div class="tn-atom">
              <a href="#rec505773197" style="color: inherit">Поставщикам</a>
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5053727391666628828694" data-elem-id="1666628828694"
            data-elem-type="image" data-field-axisx-value="center" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-fileheight-value="234" data-field-filewidth-value="247"
            data-field-heightunits-value="" data-field-left-res-320-value="-156" data-field-left-res-480-value="-186"
            data-field-left-res-640-value="-306" data-field-left-value="-600" data-field-leftunits-value="px"
            data-field-top-res-320-value="160" data-field-top-res-480-value="160" data-field-top-res-640-value="100"
            data-field-top-value="80" data-field-topunits-value="px" data-field-width-res-480-value="80"
            data-field-width-res-640-value="177" data-field-width-value="247" data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img t-img" data-original="images/img_8.png" imgfield="tn_img_1666628828694" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5053727391666628612515" data-elem-id="1666628612515"
            data-elem-type="text" data-field-axisx-value="center" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="0"
            data-field-left-res-480-value="0" data-field-left-res-640-value="0" data-field-left-value="0"
            data-field-leftunits-value="px" data-field-top-res-320-value="330" data-field-top-res-480-value="330"
            data-field-top-res-640-value="270" data-field-top-value="400" data-field-topunits-value="px"
            data-field-width-res-320-value="250" data-field-width-res-480-value="270"
            data-field-width-res-640-value="480" data-field-width-value="960" data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666628612515">
              Инвестируйте в реальный бизнес через Penenza
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5053727391666632364242" data-elem-id="1666632364242"
            data-elem-type="text" data-field-axisx-value="center" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="0"
            data-field-left-res-480-value="0" data-field-left-res-640-value="0" data-field-left-res-960-value="0"
            data-field-left-value="-170" data-field-leftunits-value="px" data-field-top-res-320-value="620"
            data-field-top-res-480-value="620" data-field-top-res-640-value="490" data-field-top-res-960-value="670"
            data-field-top-value="670" data-field-topunits-value="px" data-field-width-res-320-value="280"
            data-field-width-res-480-value="440" data-field-width-res-640-value="480" data-field-width-value="820"
            data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666632364242">
              Минимальная инвестиция – 50 000 ₽
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5053727391666628639741" data-elem-id="1666628639741"
            data-elem-type="text" data-field-axisx-value="center" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="0"
            data-field-left-res-480-value="0" data-field-left-res-640-value="0" data-field-left-value="0"
            data-field-leftunits-value="px" data-field-top-res-320-value="390" data-field-top-res-480-value="390"
            data-field-top-res-640-value="300" data-field-top-value="440" data-field-topunits-value="px"
            data-field-width-res-320-value="250" data-field-width-res-480-value="270"
            data-field-width-res-640-value="480" data-field-width-value="960" data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666628639741">
              С нами уже более 13 000 инвесторов
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5053727391666622347106" data-elem-id="1666622347106"
            data-elem-type="text" data-field-axisx-value="center" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-640-value="-83"
            data-field-left-res-960-value="-83" data-field-left-value="-5" data-field-leftunits-value="px"
            data-field-top-res-640-value="-102" data-field-top-res-960-value="38" data-field-top-value="38"
            data-field-topunits-value="px" data-field-width-value="112" data-field-widthunits-value="px">
            <div class="tn-atom">
              <a href="#rec505703272" style="color: inherit">Покупателям</a>
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5053727391666622383829" data-elem-id="1666622383829"
            data-elem-type="text" data-field-axisx-value="center" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-640-value="49"
            data-field-left-res-960-value="49" data-field-left-value="135" data-field-leftunits-value="px"
            data-field-top-res-640-value="-102" data-field-top-res-960-value="38" data-field-top-value="38"
            data-field-topunits-value="px" data-field-width-value="104" data-field-widthunits-value="px">
            <div class="tn-atom">
              <a href="#rec505936862" style="color: inherit">Инвесторам</a>
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5053727391666622391482" data-elem-id="1666622391482"
            data-elem-type="text" data-field-axisx-value="center" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-640-value="150"
            data-field-left-res-960-value="150" data-field-left-value="244" data-field-leftunits-value="px"
            data-field-top-res-640-value="-102" data-field-top-res-960-value="38" data-field-top-value="38"
            data-field-topunits-value="px" data-field-width-value="50" data-field-widthunits-value="px">
            <div class="tn-atom">
              <a href="#rec508147738" style="color: inherit">О нас</a>
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5053727391666622434734" data-elem-id="1666622434734"
            data-elem-type="text" data-field-axisx-value="center" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-640-value="267"
            data-field-left-res-960-value="267" data-field-left-value="398" data-field-leftunits-value="px"
            data-field-top-res-640-value="-102" data-field-top-res-960-value="38" data-field-top-value="38"
            data-field-topunits-value="px" data-field-width-value="136" data-field-widthunits-value="px">
            <div class="tn-atom">
              <a href="#popup:embedcode" style="color: inherit">Стать клиентом</a>
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5053727391666622450671" data-elem-id="1666622450671"
            data-elem-type="text" data-field-axisx-value="center" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-640-value="385"
            data-field-left-res-960-value="385" data-field-left-value="524" data-field-leftunits-value="px"
            data-field-top-res-640-value="-102" data-field-top-res-960-value="38" data-field-top-value="38"
            data-field-topunits-value="px" data-field-width-value="52" data-field-widthunits-value="px">
            <div class="tn-atom">
              <a href="#popup:embedcode" style="color: inherit">Войти</a>
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5053727391666628413477" data-elem-id="1666628413477"
            data-elem-type="image" data-field-axisx-value="center" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-fileheight-value="36" data-field-filewidth-value="153"
            data-field-heightunits-value="" data-field-left-res-320-value="-60" data-field-left-res-480-value="-133"
            data-field-left-res-640-value="-203" data-field-left-res-960-value="-390" data-field-left-value="-500"
            data-field-leftunits-value="px" data-field-top-res-320-value="20" data-field-top-res-480-value="30"
            data-field-top-res-640-value="30" data-field-top-res-960-value="32" data-field-top-value="32"
            data-field-topunits-value="px" data-field-width-value="153" data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img t-img" data-original="images/Logo.svg" imgfield="tn_img_1666628413477" />
            </div>
          </div>
         <div
              class="t396__elem tn-elem tn-elem__5053727391666628558065"
              data-elem-id="1666628558065"
              data-elem-type="image"
              data-field-top-value="196"
              data-field-left-value="0"
              data-field-width-value="804"
              data-field-axisy-value="top"
              data-field-axisx-value="center"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-field-filewidth-value="804"
              data-field-fileheight-value="173"
              data-field-top-res-320-value="-200"
              data-field-left-res-320-value="0"
              data-field-top-res-480-value="-200"
              data-field-left-res-480-value="0"
              data-field-top-res-640-value="140"
              data-field-left-res-640-value="0"
              data-field-width-res-640-value="500"
            >
              <div class="tn-atom">
                <img
                  class="tn-atom__img t-img"
                  data-original="https://static.tildacdn.com/tild6664-6638-4039-b931-653037656631/______30_.svg"
                  alt=""
                  imgfield="tn_img_1666628558065"
                />
              </div>
            </div>
          <div class="t396__elem tn-elem tn-elem__5053727391666629173895" data-elem-id="1666629173895"
            data-elem-type="image" data-field-axisx-value="center" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-fileheight-value="263" data-field-filewidth-value="257"
            data-field-heightunits-value="" data-field-left-res-320-value="279" data-field-left-res-480-value="199"
            data-field-left-res-640-value="250" data-field-left-value="540" data-field-leftunits-value="px"
            data-field-top-res-320-value="570" data-field-top-res-480-value="360" data-field-top-res-640-value="350"
            data-field-top-value="360" data-field-topunits-value="px" data-field-width-res-480-value="117"
            data-field-width-res-640-value="187" data-field-width-value="257" data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img t-img" data-original="images/img_4.png" imgfield="tn_img_1666629173895" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5053727391666629173916" data-elem-id="1666629173916"
            data-elem-type="image" data-field-axisx-value="center" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-fileheight-value="159" data-field-filewidth-value="156"
            data-field-heightunits-value="" data-field-left-res-320-value="-150" data-field-left-res-480-value="-170"
            data-field-left-res-640-value="-270" data-field-left-value="-460" data-field-leftunits-value="px"
            data-field-top-res-320-value="370" data-field-top-res-480-value="350" data-field-top-res-640-value="380"
            data-field-top-value="360" data-field-topunits-value="px" data-field-width-res-640-value="86"
            data-field-width-value="156" data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img t-img" data-original="images/img_7.png" imgfield="tn_img_1666629173916" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5053727391666629173923" data-elem-id="1666629173923"
            data-elem-type="image" data-field-axisx-value="center" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-fileheight-value="136" data-field-filewidth-value="133"
            data-field-heightunits-value="" data-field-left-res-320-value="140" data-field-left-res-480-value="170"
            data-field-left-res-640-value="300" data-field-left-value="500" data-field-leftunits-value="px"
            data-field-top-res-320-value="100" data-field-top-res-480-value="140" data-field-top-res-640-value="130"
            data-field-top-value="130" data-field-topunits-value="px" data-field-width-res-640-value="63"
            data-field-width-value="133" data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img t-img" data-original="images/img_5.png" imgfield="tn_img_1666629173923" />
            </div>
          </div>
         <div
              class="t396__elem tn-elem tn-elem__5053727391666629710923"
              data-elem-id="1666629710923"
              data-elem-type="image"
              data-field-top-value="-300"
              data-field-left-value="0"
              data-field-width-value="272"
              data-field-axisy-value="top"
              data-field-axisx-value="center"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-field-filewidth-value="272"
              data-field-fileheight-value="185"
              data-field-top-res-480-value="120"
              data-field-left-res-480-value="0"
            >
              <div class="tn-atom">
                <img
                  class="tn-atom__img t-img"
                  data-original="https://static.tildacdn.com/tild3236-3962-4664-b832-373761316532/______30_.svg"
                  alt=""
                  imgfield="tn_img_1666629710923"
                />
              </div>
            </div>
          <div class="t396__elem tn-elem tn-elem__5053727391666630244155" data-elem-id="1666630244155"
            data-elem-type="image" data-field-axisx-value="center" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-fileheight-value="24" data-field-filewidth-value="24"
            data-field-heightunits-value="" data-field-left-value="570" data-field-leftunits-value="px"
            data-field-top-value="39" data-field-topunits-value="px" data-field-width-value="24"
            data-field-widthunits-value="px">
            <a class="tn-atom" href="#popup:embedcode"><img alt="" class="tn-atom__img t-img"
                data-original="images/log-in.svg" imgfield="tn_img_1666630244155" /></a>
          </div>
          <div class="t396__elem tn-elem tn-elem__5053727391666705777910" data-elem-id="1666705777910"
            data-elem-type="image" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-fileheight-value="24" data-field-filewidth-value="24"
            data-field-heightunits-value="" data-field-left-res-320-value="276" data-field-left-res-480-value="426"
            data-field-left-res-640-value="570" data-field-left-value="240" data-field-leftunits-value="px"
            data-field-top-res-320-value="26" data-field-top-res-480-value="34" data-field-top-res-640-value="36"
            data-field-top-value="-115" data-field-topunits-value="px" data-field-width-value="24"
            data-field-widthunits-value="px">
            <a class="tn-atom" href="#menuopen"><img alt="" class="tn-atom__img t-img" data-original="images/Burger.svg"
                imgfield="tn_img_1666705777910" /></a>
          </div>
          <div class="t396__elem tn-elem tn-elem__5053727391666631802346" data-elem-id="1666631802346"
            data-elem-type="image" data-field-axisx-value="center" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-fileheight-value="72" data-field-filewidth-value="277"
            data-field-heightunits-value="" data-field-left-res-320-value="0" data-field-left-res-480-value="0"
            data-field-left-res-640-value="0" data-field-left-value="2" data-field-leftunits-value="px"
            data-field-top-res-320-value="460" data-field-top-res-480-value="460" data-field-top-res-640-value="352"
            data-field-top-value="512" data-field-topunits-value="px" data-field-width-value="277"
            data-field-widthunits-value="px">
            <a class="tn-atom" href="#popup:embedcode"><img alt="" class="tn-atom__img t-img"
                data-original="images/Button.svg" imgfield="tn_img_1666631802346" /></a>
          </div>
          <div class="t396__elem tn-elem tn-elem__5053727391666630533719" data-elem-id="1666630533719"
            data-elem-type="button" data-field-axisx-value="center" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-height-value="72" data-field-heightunits-value="px"
            data-field-left-res-320-value="0" data-field-left-res-480-value="0" data-field-left-res-640-value="0"
            data-field-left-value="2" data-field-leftunits-value="px" data-field-top-res-320-value="460"
            data-field-top-res-480-value="460" data-field-top-res-640-value="352" data-field-top-value="512"
            data-field-topunits-value="px" data-field-width-value="277" data-field-widthunits-value="px">
            <a class="tn-atom" href="#popup:embedcode">Хочу инвестировать</a>
          </div>
          <div class="t396__elem tn-elem tn-elem__5053727391666632664722" data-elem-id="1666632664722"
            data-elem-type="image" data-field-axisx-value="center" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-fileheight-value="268" data-field-filewidth-value="270"
            data-field-heightunits-value="" data-field-left-res-320-value="1" data-field-left-res-480-value="0"
            data-field-left-res-640-value="150" data-field-left-res-960-value="150" data-field-left-value="450"
            data-field-leftunits-value="px" data-field-top-res-320-value="1694" data-field-top-res-480-value="1694"
            data-field-top-res-640-value="972" data-field-top-res-960-value="1112" data-field-top-value="755"
            data-field-topunits-value="px" data-field-width-value="270" data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img t-img" data-original="images/block.svg" imgfield="tn_img_1666632664722" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5053727391666684839476" data-elem-id="1666684839476"
            data-elem-type="text" data-field-axisx-value="center" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="1"
            data-field-left-res-480-value="0" data-field-left-res-640-value="150" data-field-left-res-960-value="150"
            data-field-left-value="450" data-field-leftunits-value="px" data-field-top-res-320-value="1813"
            data-field-top-res-480-value="1813" data-field-top-res-640-value="1091" data-field-top-res-960-value="1231"
            data-field-top-value="874" data-field-topunits-value="px" data-field-width-value="230"
            data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666684839476">
              Без комиссий <br />и скрытых платежей
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5053727391666684839480" data-elem-id="1666684839480"
            data-elem-type="text" data-field-axisx-value="center" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="1"
            data-field-left-res-480-value="0" data-field-left-res-640-value="150" data-field-left-res-960-value="150"
            data-field-left-value="450" data-field-leftunits-value="px" data-field-top-res-320-value="1865"
            data-field-top-res-480-value="1865" data-field-top-res-640-value="1143" data-field-top-res-960-value="1283"
            data-field-top-value="926" data-field-topunits-value="px" data-field-width-value="230"
            data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666684839480">
              Отсутствие комиссий на ввод и вывод средств для легкого старта
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5053727391666684486899" data-elem-id="1666684486899"
            data-elem-type="image" data-field-axisx-value="center" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-fileheight-value="80" data-field-filewidth-value="238"
            data-field-heightunits-value="" data-field-left-res-320-value="1" data-field-left-res-480-value="0"
            data-field-left-res-640-value="150" data-field-left-res-960-value="150" data-field-left-value="450"
            data-field-leftunits-value="px" data-field-top-res-320-value="1717" data-field-top-res-480-value="1717"
            data-field-top-res-640-value="995" data-field-top-res-960-value="1135" data-field-top-value="778"
            data-field-topunits-value="px" data-field-width-value="238" data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img t-img" data-original="images/Symbol_4.png"
                imgfield="tn_img_1666684486899" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5053727391666632301913" data-elem-id="1666632301913"
            data-elem-type="image" data-field-axisx-value="center" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-fileheight-value="268" data-field-filewidth-value="270"
            data-field-heightunits-value="" data-field-left-res-320-value="1" data-field-left-res-480-value="0"
            data-field-left-res-640-value="-150" data-field-left-res-960-value="-150" data-field-left-value="-450"
            data-field-leftunits-value="px" data-field-top-res-320-value="800" data-field-top-res-480-value="800"
            data-field-top-res-640-value="674" data-field-top-res-960-value="814" data-field-top-value="754"
            data-field-topunits-value="px" data-field-width-value="270" data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img t-img" data-original="images/block.svg" imgfield="tn_img_1666632301913" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5053727391666684680111" data-elem-id="1666684680111"
            data-elem-type="text" data-field-axisx-value="center" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="1"
            data-field-left-res-480-value="0" data-field-left-res-640-value="-150" data-field-left-res-960-value="-150"
            data-field-left-value="-450" data-field-leftunits-value="px" data-field-top-res-320-value="920"
            data-field-top-res-480-value="920" data-field-top-res-640-value="794" data-field-top-res-960-value="934"
            data-field-top-value="874" data-field-topunits-value="px" data-field-width-value="230"
            data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666684680111">
              Доходность <br />до 30% годовых
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5053727391666684757581" data-elem-id="1666684757581"
            data-elem-type="text" data-field-axisx-value="center" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="1"
            data-field-left-res-480-value="0" data-field-left-res-640-value="-150" data-field-left-res-960-value="-150"
            data-field-left-value="-450" data-field-leftunits-value="px" data-field-top-res-320-value="972"
            data-field-top-res-480-value="972" data-field-top-res-640-value="846" data-field-top-res-960-value="986"
            data-field-top-value="926" data-field-topunits-value="px" data-field-width-value="230"
            data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666684757581">
              Выгодная альтернатива банковским вкладам и рынку ценных бумаг
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5053727391666684497876" data-elem-id="1666684497876"
            data-elem-type="image" data-field-axisx-value="center" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-fileheight-value="80" data-field-filewidth-value="238"
            data-field-heightunits-value="" data-field-left-res-320-value="1" data-field-left-res-480-value="0"
            data-field-left-res-640-value="-150" data-field-left-res-960-value="-150" data-field-left-value="-450"
            data-field-leftunits-value="px" data-field-top-res-320-value="824" data-field-top-res-480-value="824"
            data-field-top-res-640-value="698" data-field-top-res-960-value="838" data-field-top-value="778"
            data-field-topunits-value="px" data-field-width-value="238" data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img t-img" data-original="images/Symbol_1.png"
                imgfield="tn_img_1666684497876" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5053727391666632663014" data-elem-id="1666632663014"
            data-elem-type="image" data-field-axisx-value="center" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-fileheight-value="268" data-field-filewidth-value="270"
            data-field-heightunits-value="" data-field-left-res-320-value="1" data-field-left-res-480-value="0"
            data-field-left-res-640-value="-150" data-field-left-res-960-value="-150" data-field-left-value="150"
            data-field-leftunits-value="px" data-field-top-res-320-value="1396" data-field-top-res-480-value="1396"
            data-field-top-res-640-value="972" data-field-top-res-960-value="1112" data-field-top-value="755"
            data-field-topunits-value="px" data-field-width-value="270" data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img t-img" data-original="images/block.svg" imgfield="tn_img_1666632663014" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5053727391666684833774" data-elem-id="1666684833774"
            data-elem-type="text" data-field-axisx-value="center" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="1"
            data-field-left-res-480-value="0" data-field-left-res-640-value="-150" data-field-left-res-960-value="-150"
            data-field-left-value="150" data-field-leftunits-value="px" data-field-top-res-320-value="1515"
            data-field-top-res-480-value="1515" data-field-top-res-640-value="1091" data-field-top-res-960-value="1231"
            data-field-top-value="874" data-field-topunits-value="px" data-field-width-value="230"
            data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666684833774">
              Автоматическая защита капитала
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5053727391666684833779" data-elem-id="1666684833779"
            data-elem-type="text" data-field-axisx-value="center" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="1"
            data-field-left-res-480-value="0" data-field-left-res-640-value="-150" data-field-left-res-960-value="-150"
            data-field-left-value="150" data-field-leftunits-value="px" data-field-top-res-320-value="1567"
            data-field-top-res-480-value="1567" data-field-top-res-640-value="1143" data-field-top-res-960-value="1283"
            data-field-top-value="926" data-field-topunits-value="px" data-field-width-value="230"
            data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666684833779">
              Умное распределение по компаниям из разных отраслей
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5053727391666684486922" data-elem-id="1666684486922"
            data-elem-type="image" data-field-axisx-value="center" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-fileheight-value="80" data-field-filewidth-value="238"
            data-field-heightunits-value="" data-field-left-res-320-value="1" data-field-left-res-480-value="0"
            data-field-left-res-640-value="-150" data-field-left-res-960-value="-150" data-field-left-value="150"
            data-field-leftunits-value="px" data-field-top-res-320-value="1419" data-field-top-res-480-value="1419"
            data-field-top-res-640-value="995" data-field-top-res-960-value="1135" data-field-top-value="778"
            data-field-topunits-value="px" data-field-width-value="238" data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img t-img" data-original="images/Symbol_3.png"
                imgfield="tn_img_1666684486922" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5053727391666632661430" data-elem-id="1666632661430"
            data-elem-type="image" data-field-axisx-value="center" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-fileheight-value="268" data-field-filewidth-value="270"
            data-field-heightunits-value="" data-field-left-res-320-value="1" data-field-left-res-480-value="0"
            data-field-left-res-640-value="150" data-field-left-res-960-value="150" data-field-left-value="-150"
            data-field-leftunits-value="px" data-field-top-res-320-value="1098" data-field-top-res-480-value="1098"
            data-field-top-res-640-value="674" data-field-top-res-960-value="814" data-field-top-value="754"
            data-field-topunits-value="px" data-field-width-value="270" data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img t-img" data-original="images/block.svg" imgfield="tn_img_1666632661430" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5053727391666684818790" data-elem-id="1666684818790"
            data-elem-type="text" data-field-axisx-value="center" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="1"
            data-field-left-res-480-value="0" data-field-left-res-640-value="150" data-field-left-res-960-value="150"
            data-field-left-value="-150" data-field-leftunits-value="px" data-field-top-res-320-value="1218"
            data-field-top-res-480-value="1218" data-field-top-res-640-value="794" data-field-top-res-960-value="934"
            data-field-top-value="874" data-field-topunits-value="px" data-field-width-value="230"
            data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666684818790">
              Ежемесячный пассивный доход
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5053727391666684818796" data-elem-id="1666684818796"
            data-elem-type="text" data-field-axisx-value="center" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="1"
            data-field-left-res-480-value="0" data-field-left-res-640-value="150" data-field-left-res-960-value="150"
            data-field-left-value="-150" data-field-leftunits-value="px" data-field-top-res-320-value="1270"
            data-field-top-res-480-value="1270" data-field-top-res-640-value="846" data-field-top-res-960-value="986"
            data-field-top-value="926" data-field-topunits-value="px" data-field-width-value="230"
            data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666684818796">
              Реинвестируйте или выводите через любой банк России
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5053727391666684486926" data-elem-id="1666684486926"
            data-elem-type="image" data-field-axisx-value="center" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-fileheight-value="80" data-field-filewidth-value="238"
            data-field-heightunits-value="" data-field-left-res-320-value="1" data-field-left-res-480-value="0"
            data-field-left-res-640-value="150" data-field-left-res-960-value="150" data-field-left-value="-150"
            data-field-leftunits-value="px" data-field-top-res-320-value="1122" data-field-top-res-480-value="1122"
            data-field-top-res-640-value="698" data-field-top-res-960-value="838" data-field-top-value="778"
            data-field-topunits-value="px" data-field-width-value="238" data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img t-img" data-original="images/Symbol_2.png"
                imgfield="tn_img_1666684486926" />
            </div>
          </div>
        </div>
      </div>
      <script>
        t_onReady(function () {
          t_onFuncLoad("t396_init", function () {
            t396_init("505372739");
          });
        });
      </script>
      <!-- /T396 -->
    </div>
    <div class="r t-rec" data-animationappear="off" data-bg-color="#212122" data-record-type="396" id="rec505703707"
      style="background-color: #212122">
      <!-- T396 -->
      <style>
        #rec505703707 .t396__artboard {
          height: 96px;
        }

        #rec505703707 .t396__filter {
          height: 96px;
        }

        #rec505703707 .t396__carrier {
          height: 96px;
          background-position: center center;
          background-attachment: scroll;
          background-size: cover;
          background-repeat: no-repeat;
        }

        @media screen and (max-width: 1199px) {

          #rec505703707 .t396__artboard,
          #rec505703707 .t396__filter,
          #rec505703707 .t396__carrier {}

          #rec505703707 .t396__filter {}

          #rec505703707 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 959px) {

          #rec505703707 .t396__artboard,
          #rec505703707 .t396__filter,
          #rec505703707 .t396__carrier {
            height: 72px;
          }

          #rec505703707 .t396__filter {}

          #rec505703707 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 639px) {

          #rec505703707 .t396__artboard,
          #rec505703707 .t396__filter,
          #rec505703707 .t396__carrier {}

          #rec505703707 .t396__filter {}

          #rec505703707 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 479px) {

          #rec505703707 .t396__artboard,
          #rec505703707 .t396__filter,
          #rec505703707 .t396__carrier {}

          #rec505703707 .t396__filter {}

          #rec505703707 .t396__carrier {
            background-attachment: scroll;
          }
        }
      </style>
      <div class="t396">
        <div class="t396__artboard" data-artboard-height="96" data-artboard-height-res-640="72"
          data-artboard-recid="505703707" data-artboard-screens="320,480,640,960,1200" data-artboard-upscale="grid"
          data-artboard-valign="center">
          <div class="t396__carrier" data-artboard-recid="505703707"></div>
          <div class="t396__filter" data-artboard-recid="505703707"></div>
        </div>
      </div>
      <script>
        t_onReady(function () {
          t_onFuncLoad("t396_init", function () {
            t396_init("505703707");
          });
        });
      </script>
      <!-- /T396 -->
    </div>
    <div class="r t-rec" data-animationappear="off" data-record-type="396" id="rec508101334" style="">
      <!-- T396 -->
      <style>
        #rec508101334 .t396__artboard {
          height: 580px;
          background-color: #ffffff;
        }

        #rec508101334 .t396__filter {
          height: 580px;
        }

        #rec508101334 .t396__carrier {
          height: 580px;
          background-position: center center;
          background-attachment: scroll;
          background-size: cover;
          background-repeat: no-repeat;
        }

        @media screen and (max-width: 1199px) {

          #rec508101334 .t396__artboard,
          #rec508101334 .t396__filter,
          #rec508101334 .t396__carrier {}

          #rec508101334 .t396__artboard {
            background-color: #ffffff;
          }

          #rec508101334 .t396__filter {}

          #rec508101334 .t396__carrier {
            background-position: center center;
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 959px) {

          #rec508101334 .t396__artboard,
          #rec508101334 .t396__filter,
          #rec508101334 .t396__carrier {
            height: 580px;
          }

          #rec508101334 .t396__filter {}

          #rec508101334 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 639px) {

          #rec508101334 .t396__artboard,
          #rec508101334 .t396__filter,
          #rec508101334 .t396__carrier {}

          #rec508101334 .t396__filter {}

          #rec508101334 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 479px) {

          #rec508101334 .t396__artboard,
          #rec508101334 .t396__filter,
          #rec508101334 .t396__carrier {}

          #rec508101334 .t396__filter {}

          #rec508101334 .t396__carrier {
            background-position: center center;
            background-attachment: scroll;
          }
        }

        #rec508101334 .tn-elem[data-elem-id="1666699726848"] {
          color: #000000;
          z-index: 3;
          top: 100px;
          left: calc(50% - 600px + 20px);
          width: 1061px;
        }

        #rec508101334 .tn-elem[data-elem-id="1666699726848"] .tn-atom {
          color: #000000;
          font-size: 40px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.2;
          font-weight: 600;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec508101334 .tn-elem[data-elem-id="1666699726848"] {
            left: calc(50% - 480px + 20px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec508101334 .tn-elem[data-elem-id="1666699726848"] {
            top: 70px;
            left: calc(50% - 320px + 20px);
            width: 508px;
          }

          #rec508101334 .tn-elem[data-elem-id="1666699726848"] .tn-atom {
            font-size: 32px;
          }
        }

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec508101334 .tn-elem[data-elem-id="1666699726848"] {
            top: -175px;
            left: calc(50% - 160px + 20px);
            width: 271px;
          }
        }

        #rec508101334 .tn-elem[data-elem-id="1666949163129"] {
          color: #000000;
          z-index: 4;
          top: -100px;
          left: calc(50% - 600px + 20px);
          width: 1061px;
        }

        #rec508101334 .tn-elem[data-elem-id="1666949163129"] .tn-atom {
          color: #000000;
          font-size: 40px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.2;
          font-weight: 600;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec508101334 .tn-elem[data-elem-id="1666949163129"] {
            top: -60px;
            left: calc(50% - 480px + 20px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec508101334 .tn-elem[data-elem-id="1666949163129"] .tn-atom {
            font-size: 32px;
          }
        }

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec508101334 .tn-elem[data-elem-id="1666949163129"] {
            top: 70px;
            left: calc(50% - 160px + 20px);
            width: 271px;
          }
        }

        #rec508101334 .tn-elem[data-elem-id="1667044504171"] {
          z-index: 27;
          top: 190px;
          left: calc(50% - 600px + 20px);
          width: 270px;
        }

        #rec508101334 .tn-elem.t396__elem--anim-hidden[data-elem-id="1667044504171"] {
          opacity: 0;
        }

        #rec508101334 .tn-elem[data-elem-id="1667044504171"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec508101334 .tn-elem[data-elem-id="1667044504171"] {
            top: 190px;
            left: calc(50% - 480px + 20px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec508101334 .tn-elem[data-elem-id="1667044504171"] {
            top: 220px;
            left: calc(50% - 320px + 20px);
          }
        }

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {}

        #rec508101334 .tn-elem[data-elem-id="1667044532813"] {
          z-index: 74;
          top: 190px;
          left: calc(50% - 600px + 320px);
          width: 270px;
        }

        #rec508101334 .tn-elem.t396__elem--anim-hidden[data-elem-id="1667044532813"] {
          opacity: 0;
        }

        #rec508101334 .tn-elem[data-elem-id="1667044532813"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec508101334 .tn-elem[data-elem-id="1667044532813"] {
            top: 190px;
            left: calc(50% - 480px + 320px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec508101334 .tn-elem[data-elem-id="1667044532813"] {
            top: 220px;
            left: calc(50% - 320px + 320px);
          }
        }

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec508101334 .tn-elem[data-elem-id="1667044532813"] {
            top: 220px;
            left: calc(50% - 160px + 300px);
          }
        }

        #rec508101334 .tn-elem[data-elem-id="1667044603226"] {
          z-index: 38;
          top: 190px;
          left: calc(50% - 600px + 620px);
          width: 270px;
        }

        #rec508101334 .tn-elem.t396__elem--anim-hidden[data-elem-id="1667044603226"] {
          opacity: 0;
        }

        #rec508101334 .tn-elem[data-elem-id="1667044603226"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec508101334 .tn-elem[data-elem-id="1667044603226"] {
            top: 190px;
            left: calc(50% - 480px + 620px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec508101334 .tn-elem[data-elem-id="1667044603226"] {
            top: 220px;
            left: calc(50% - 320px + 620px);
          }
        }

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec508101334 .tn-elem[data-elem-id="1667044603226"] {
            top: 220px;
            left: calc(50% - 160px + 580px);
          }
        }

        #rec508101334 .tn-elem[data-elem-id="1667044603230"] {
          z-index: 85;
          top: 190px;
          left: calc(50% - 600px + 920px);
          width: 270px;
        }

        #rec508101334 .tn-elem.t396__elem--anim-hidden[data-elem-id="1667044603230"] {
          opacity: 0;
        }

        #rec508101334 .tn-elem[data-elem-id="1667044603230"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec508101334 .tn-elem[data-elem-id="1667044603230"] {
            top: 190px;
            left: calc(50% - 480px + 920px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec508101334 .tn-elem[data-elem-id="1667044603230"] {
            top: 220px;
            left: calc(50% - 320px + 920px);
          }
        }

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec508101334 .tn-elem[data-elem-id="1667044603230"] {
            top: 220px;
            left: calc(50% - 160px + 860px);
          }
        }

        #rec508101334 .tn-elem[data-elem-id="1667044605995"] {
          z-index: 49;
          top: 190px;
          left: calc(50% - 600px + 1220px);
          width: 270px;
        }

        #rec508101334 .tn-elem.t396__elem--anim-hidden[data-elem-id="1667044605995"] {
          opacity: 0;
        }

        #rec508101334 .tn-elem[data-elem-id="1667044605995"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec508101334 .tn-elem[data-elem-id="1667044605995"] {
            top: 190px;
            left: calc(50% - 480px + 1220px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec508101334 .tn-elem[data-elem-id="1667044605995"] {
            top: 220px;
            left: calc(50% - 320px + 1220px);
          }
        }

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec508101334 .tn-elem[data-elem-id="1667044605995"] {
            top: 220px;
            left: calc(50% - 160px + 1140px);
          }
        }

        #rec508101334 .tn-elem[data-elem-id="1667044606002"] {
          z-index: 96;
          top: 190px;
          left: calc(50% - 600px + 1520px);
          width: 270px;
        }

        #rec508101334 .tn-elem.t396__elem--anim-hidden[data-elem-id="1667044606002"] {
          opacity: 0;
        }

        #rec508101334 .tn-elem[data-elem-id="1667044606002"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec508101334 .tn-elem[data-elem-id="1667044606002"] {
            top: 190px;
            left: calc(50% - 480px + 1520px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec508101334 .tn-elem[data-elem-id="1667044606002"] {
            top: 220px;
            left: calc(50% - 320px + 1520px);
          }
        }

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec508101334 .tn-elem[data-elem-id="1667044606002"] {
            top: 220px;
            left: calc(50% - 160px + 1420px);
          }
        }

        #rec508101334 .tn-elem[data-elem-id="1667044608928"] {
          z-index: 60;
          top: 190px;
          left: calc(50% - 600px + 1820px);
          width: 270px;
        }

        #rec508101334 .tn-elem.t396__elem--anim-hidden[data-elem-id="1667044608928"] {
          opacity: 0;
        }

        #rec508101334 .tn-elem[data-elem-id="1667044608928"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec508101334 .tn-elem[data-elem-id="1667044608928"] {
            top: 190px;
            left: calc(50% - 480px + 1820px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec508101334 .tn-elem[data-elem-id="1667044608928"] {
            top: 220px;
            left: calc(50% - 320px + 1820px);
          }
        }

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec508101334 .tn-elem[data-elem-id="1667044608928"] {
            top: 220px;
            left: calc(50% - 160px + 1700px);
          }
        }

        #rec508101334 .tn-elem[data-elem-id="1667044608932"] {
          z-index: 107;
          top: 190px;
          left: calc(50% - 600px + 2120px);
          width: 270px;
        }

        #rec508101334 .tn-elem.t396__elem--anim-hidden[data-elem-id="1667044608932"] {
          opacity: 0;
        }

        #rec508101334 .tn-elem[data-elem-id="1667044608932"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec508101334 .tn-elem[data-elem-id="1667044608932"] {
            top: 190px;
            left: calc(50% - 480px + 2120px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec508101334 .tn-elem[data-elem-id="1667044608932"] {
            top: 220px;
            left: calc(50% - 320px + 2120px);
          }
        }

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec508101334 .tn-elem[data-elem-id="1667044608932"] {
            top: 220px;
            left: calc(50% - 160px + 1980px);
          }
        }

        #rec508101334 .tn-elem[data-elem-id="1667044626677"] {
          z-index: 32;
          top: 190px;
          left: calc(50% - 600px + 2420px);
          width: 270px;
        }

        #rec508101334 .tn-elem.t396__elem--anim-hidden[data-elem-id="1667044626677"] {
          opacity: 0;
        }

        #rec508101334 .tn-elem[data-elem-id="1667044626677"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec508101334 .tn-elem[data-elem-id="1667044626677"] {
            top: 190px;
            left: calc(50% - 480px + 2420px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec508101334 .tn-elem[data-elem-id="1667044626677"] {
            top: 220px;
            left: calc(50% - 320px + 2420px);
          }
        }

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec508101334 .tn-elem[data-elem-id="1667044626677"] {
            top: 220px;
            left: calc(50% - 160px + 2260px);
          }
        }

        #rec508101334 .tn-elem[data-elem-id="1667044626682"] {
          z-index: 79;
          top: 190px;
          left: calc(50% - 600px + 2720px);
          width: 270px;
        }

        #rec508101334 .tn-elem.t396__elem--anim-hidden[data-elem-id="1667044626682"] {
          opacity: 0;
        }

        #rec508101334 .tn-elem[data-elem-id="1667044626682"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec508101334 .tn-elem[data-elem-id="1667044626682"] {
            top: 190px;
            left: calc(50% - 480px + 2720px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec508101334 .tn-elem[data-elem-id="1667044626682"] {
            top: 220px;
            left: calc(50% - 320px + 2720px);
          }
        }

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec508101334 .tn-elem[data-elem-id="1667044626682"] {
            top: 220px;
            left: calc(50% - 160px + 2540px);
          }
        }

        #rec508101334 .tn-elem[data-elem-id="1667044626687"] {
          z-index: 43;
          top: 190px;
          left: calc(50% - 600px + 3020px);
          width: 270px;
        }

        #rec508101334 .tn-elem.t396__elem--anim-hidden[data-elem-id="1667044626687"] {
          opacity: 0;
        }

        #rec508101334 .tn-elem[data-elem-id="1667044626687"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec508101334 .tn-elem[data-elem-id="1667044626687"] {
            top: 190px;
            left: calc(50% - 480px + 3020px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec508101334 .tn-elem[data-elem-id="1667044626687"] {
            top: 220px;
            left: calc(50% - 320px + 3020px);
          }
        }

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec508101334 .tn-elem[data-elem-id="1667044626687"] {
            top: 220px;
            left: calc(50% - 160px + 2820px);
          }
        }

        #rec508101334 .tn-elem[data-elem-id="1667044626690"] {
          z-index: 90;
          top: 190px;
          left: calc(50% - 600px + 3320px);
          width: 270px;
        }

        #rec508101334 .tn-elem.t396__elem--anim-hidden[data-elem-id="1667044626690"] {
          opacity: 0;
        }

        #rec508101334 .tn-elem[data-elem-id="1667044626690"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec508101334 .tn-elem[data-elem-id="1667044626690"] {
            top: 190px;
            left: calc(50% - 480px + 3320px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec508101334 .tn-elem[data-elem-id="1667044626690"] {
            top: 220px;
            left: calc(50% - 320px + 3320px);
          }
        }

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec508101334 .tn-elem[data-elem-id="1667044626690"] {
            top: 220px;
            left: calc(50% - 160px + 3100px);
          }
        }

        #rec508101334 .tn-elem[data-elem-id="1667044626694"] {
          z-index: 54;
          top: 190px;
          left: calc(50% - 600px + 3620px);
          width: 270px;
        }

        #rec508101334 .tn-elem.t396__elem--anim-hidden[data-elem-id="1667044626694"] {
          opacity: 0;
        }

        #rec508101334 .tn-elem[data-elem-id="1667044626694"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec508101334 .tn-elem[data-elem-id="1667044626694"] {
            top: 190px;
            left: calc(50% - 480px + 3620px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec508101334 .tn-elem[data-elem-id="1667044626694"] {
            top: 220px;
            left: calc(50% - 320px + 3620px);
          }
        }

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec508101334 .tn-elem[data-elem-id="1667044626694"] {
            top: 220px;
            left: calc(50% - 160px + 3380px);
          }
        }

        #rec508101334 .tn-elem[data-elem-id="1667044626697"] {
          z-index: 101;
          top: 190px;
          left: calc(50% - 600px + 3920px);
          width: 270px;
        }

        #rec508101334 .tn-elem.t396__elem--anim-hidden[data-elem-id="1667044626697"] {
          opacity: 0;
        }

        #rec508101334 .tn-elem[data-elem-id="1667044626697"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec508101334 .tn-elem[data-elem-id="1667044626697"] {
            top: 190px;
            left: calc(50% - 480px + 3920px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec508101334 .tn-elem[data-elem-id="1667044626697"] {
            top: 220px;
            left: calc(50% - 320px + 3920px);
          }
        }

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec508101334 .tn-elem[data-elem-id="1667044626697"] {
            top: 220px;
            left: calc(50% - 160px + 3660px);
          }
        }

        #rec508101334 .tn-elem[data-elem-id="1667044626701"] {
          z-index: 65;
          top: 190px;
          left: calc(50% - 600px + 4220px);
          width: 270px;
        }

        #rec508101334 .tn-elem.t396__elem--anim-hidden[data-elem-id="1667044626701"] {
          opacity: 0;
        }

        #rec508101334 .tn-elem[data-elem-id="1667044626701"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec508101334 .tn-elem[data-elem-id="1667044626701"] {
            top: 190px;
            left: calc(50% - 480px + 4220px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec508101334 .tn-elem[data-elem-id="1667044626701"] {
            top: 220px;
            left: calc(50% - 320px + 4220px);
          }
        }

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec508101334 .tn-elem[data-elem-id="1667044626701"] {
            top: 220px;
            left: calc(50% - 160px + 3940px);
          }
        }

        #rec508101334 .tn-elem[data-elem-id="1667044626705"] {
          z-index: 112;
          top: 190px;
          left: calc(50% - 600px + 4520px);
          width: 270px;
        }

        #rec508101334 .tn-elem.t396__elem--anim-hidden[data-elem-id="1667044626705"] {
          opacity: 0;
        }

        #rec508101334 .tn-elem[data-elem-id="1667044626705"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec508101334 .tn-elem[data-elem-id="1667044626705"] {
            top: 190px;
            left: calc(50% - 480px + 4520px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec508101334 .tn-elem[data-elem-id="1667044626705"] {
            top: 220px;
            left: calc(50% - 320px + 4520px);
          }
        }

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec508101334 .tn-elem[data-elem-id="1667044626705"] {
            top: 220px;
            left: calc(50% - 160px + 4220px);
          }
        }

        #rec508101334 .tn-elem[data-elem-id="1667044651865"] {
          z-index: 117;
          top: 188px;
          left: calc(50% - 600px + 4820px);
          width: 270px;
        }

        #rec508101334 .tn-elem.t396__elem--anim-hidden[data-elem-id="1667044651865"] {
          opacity: 0;
        }

        #rec508101334 .tn-elem[data-elem-id="1667044651865"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec508101334 .tn-elem[data-elem-id="1667044651865"] {
            top: 188px;
            left: calc(50% - 480px + 4820px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec508101334 .tn-elem[data-elem-id="1667044651865"] {
            top: 218px;
            left: calc(50% - 320px + 4820px);
          }
        }

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec508101334 .tn-elem[data-elem-id="1667044651865"] {
            top: 218px;
            left: calc(50% - 160px + 4780px);
          }
        }

        #rec508101334 .tn-elem[data-elem-id="1667212894073"] {
          z-index: 28;
          top: 188px;
          left: calc(50% - 600px + 5120px);
          width: 270px;
        }

        #rec508101334 .tn-elem.t396__elem--anim-hidden[data-elem-id="1667212894073"] {
          opacity: 0;
        }

        #rec508101334 .tn-elem[data-elem-id="1667212894073"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec508101334 .tn-elem[data-elem-id="1667212894073"] {
            top: 188px;
            left: calc(50% - 480px + 5118px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec508101334 .tn-elem[data-elem-id="1667212894073"] {
            top: 218px;
            left: calc(50% - 320px + 5120px);
          }
        }

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec508101334 .tn-elem[data-elem-id="1667212894073"] {
            top: 216px;
            left: calc(50% - 160px + 9541px);
          }
        }

        #rec508101334 .tn-elem[data-elem-id="1667212894078"] {
          z-index: 75;
          top: 188px;
          left: calc(50% - 600px + 5420px);
          width: 270px;
        }

        #rec508101334 .tn-elem.t396__elem--anim-hidden[data-elem-id="1667212894078"] {
          opacity: 0;
        }

        #rec508101334 .tn-elem[data-elem-id="1667212894078"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec508101334 .tn-elem[data-elem-id="1667212894078"] {
            top: 188px;
            left: calc(50% - 480px + 5418px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec508101334 .tn-elem[data-elem-id="1667212894078"] {
            top: 218px;
            left: calc(50% - 320px + 5420px);
          }
        }

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec508101334 .tn-elem[data-elem-id="1667212894078"] {
            top: 218px;
            left: calc(50% - 160px + 5061px);
          }
        }

        #rec508101334 .tn-elem[data-elem-id="1667212894082"] {
          z-index: 39;
          top: 188px;
          left: calc(50% - 600px + 5720px);
          width: 270px;
        }

        #rec508101334 .tn-elem.t396__elem--anim-hidden[data-elem-id="1667212894082"] {
          opacity: 0;
        }

        #rec508101334 .tn-elem[data-elem-id="1667212894082"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec508101334 .tn-elem[data-elem-id="1667212894082"] {
            top: 188px;
            left: calc(50% - 480px + 5718px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec508101334 .tn-elem[data-elem-id="1667212894082"] {
            top: 218px;
            left: calc(50% - 320px + 5720px);
          }
        }

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec508101334 .tn-elem[data-elem-id="1667212894082"] {
            top: 218px;
            left: calc(50% - 160px + 5341px);
          }
        }

        #rec508101334 .tn-elem[data-elem-id="1667212894085"] {
          z-index: 86;
          top: 188px;
          left: calc(50% - 600px + 6020px);
          width: 270px;
        }

        #rec508101334 .tn-elem.t396__elem--anim-hidden[data-elem-id="1667212894085"] {
          opacity: 0;
        }

        #rec508101334 .tn-elem[data-elem-id="1667212894085"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec508101334 .tn-elem[data-elem-id="1667212894085"] {
            top: 188px;
            left: calc(50% - 480px + 6018px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec508101334 .tn-elem[data-elem-id="1667212894085"] {
            top: 218px;
            left: calc(50% - 320px + 6020px);
          }
        }

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec508101334 .tn-elem[data-elem-id="1667212894085"] {
            top: 218px;
            left: calc(50% - 160px + 5621px);
          }
        }

        #rec508101334 .tn-elem[data-elem-id="1667212894090"] {
          z-index: 50;
          top: 188px;
          left: calc(50% - 600px + 6320px);
          width: 270px;
        }

        #rec508101334 .tn-elem.t396__elem--anim-hidden[data-elem-id="1667212894090"] {
          opacity: 0;
        }

        #rec508101334 .tn-elem[data-elem-id="1667212894090"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec508101334 .tn-elem[data-elem-id="1667212894090"] {
            top: 188px;
            left: calc(50% - 480px + 6318px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec508101334 .tn-elem[data-elem-id="1667212894090"] {
            top: 218px;
            left: calc(50% - 320px + 6320px);
          }
        }

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec508101334 .tn-elem[data-elem-id="1667212894090"] {
            top: 218px;
            left: calc(50% - 160px + 5901px);
          }
        }

        #rec508101334 .tn-elem[data-elem-id="1667212894094"] {
          z-index: 97;
          top: 188px;
          left: calc(50% - 600px + 6620px);
          width: 270px;
        }

        #rec508101334 .tn-elem.t396__elem--anim-hidden[data-elem-id="1667212894094"] {
          opacity: 0;
        }

        #rec508101334 .tn-elem[data-elem-id="1667212894094"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec508101334 .tn-elem[data-elem-id="1667212894094"] {
            top: 188px;
            left: calc(50% - 480px + 6618px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec508101334 .tn-elem[data-elem-id="1667212894094"] {
            top: 218px;
            left: calc(50% - 320px + 6620px);
          }
        }

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec508101334 .tn-elem[data-elem-id="1667212894094"] {
            top: 218px;
            left: calc(50% - 160px + 6181px);
          }
        }

        #rec508101334 .tn-elem[data-elem-id="1667212894098"] {
          z-index: 61;
          top: 188px;
          left: calc(50% - 600px + 6920px);
          width: 270px;
        }

        #rec508101334 .tn-elem.t396__elem--anim-hidden[data-elem-id="1667212894098"] {
          opacity: 0;
        }

        #rec508101334 .tn-elem[data-elem-id="1667212894098"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec508101334 .tn-elem[data-elem-id="1667212894098"] {
            top: 188px;
            left: calc(50% - 480px + 6918px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec508101334 .tn-elem[data-elem-id="1667212894098"] {
            top: 218px;
            left: calc(50% - 320px + 6920px);
          }
        }

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec508101334 .tn-elem[data-elem-id="1667212894098"] {
            top: 218px;
            left: calc(50% - 160px + 6461px);
          }
        }

        #rec508101334 .tn-elem[data-elem-id="1667212894102"] {
          z-index: 108;
          top: 188px;
          left: calc(50% - 600px + 7220px);
          width: 270px;
        }

        #rec508101334 .tn-elem.t396__elem--anim-hidden[data-elem-id="1667212894102"] {
          opacity: 0;
        }

        #rec508101334 .tn-elem[data-elem-id="1667212894102"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec508101334 .tn-elem[data-elem-id="1667212894102"] {
            top: 188px;
            left: calc(50% - 480px + 7218px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec508101334 .tn-elem[data-elem-id="1667212894102"] {
            top: 218px;
            left: calc(50% - 320px + 7220px);
          }
        }

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec508101334 .tn-elem[data-elem-id="1667212894102"] {
            top: 218px;
            left: calc(50% - 160px + 6741px);
          }
        }

        #rec508101334 .tn-elem[data-elem-id="1667212894107"] {
          z-index: 33;
          top: 188px;
          left: calc(50% - 600px + 7520px);
          width: 270px;
        }

        #rec508101334 .tn-elem.t396__elem--anim-hidden[data-elem-id="1667212894107"] {
          opacity: 0;
        }

        #rec508101334 .tn-elem[data-elem-id="1667212894107"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec508101334 .tn-elem[data-elem-id="1667212894107"] {
            top: 188px;
            left: calc(50% - 480px + 7518px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec508101334 .tn-elem[data-elem-id="1667212894107"] {
            top: 218px;
            left: calc(50% - 320px + 7520px);
          }
        }

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec508101334 .tn-elem[data-elem-id="1667212894107"] {
            top: 218px;
            left: calc(50% - 160px + 7021px);
          }
        }

        #rec508101334 .tn-elem[data-elem-id="1667212894112"] {
          z-index: 80;
          top: 188px;
          left: calc(50% - 600px + 7820px);
          width: 270px;
        }

        #rec508101334 .tn-elem.t396__elem--anim-hidden[data-elem-id="1667212894112"] {
          opacity: 0;
        }

        #rec508101334 .tn-elem[data-elem-id="1667212894112"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec508101334 .tn-elem[data-elem-id="1667212894112"] {
            top: 188px;
            left: calc(50% - 480px + 7818px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec508101334 .tn-elem[data-elem-id="1667212894112"] {
            top: 218px;
            left: calc(50% - 320px + 7820px);
          }
        }

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec508101334 .tn-elem[data-elem-id="1667212894112"] {
            top: 218px;
            left: calc(50% - 160px + 7301px);
          }
        }

        #rec508101334 .tn-elem[data-elem-id="1667212894115"] {
          z-index: 44;
          top: 188px;
          left: calc(50% - 600px + 8120px);
          width: 270px;
        }

        #rec508101334 .tn-elem.t396__elem--anim-hidden[data-elem-id="1667212894115"] {
          opacity: 0;
        }

        #rec508101334 .tn-elem[data-elem-id="1667212894115"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec508101334 .tn-elem[data-elem-id="1667212894115"] {
            top: 188px;
            left: calc(50% - 480px + 8118px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec508101334 .tn-elem[data-elem-id="1667212894115"] {
            top: 218px;
            left: calc(50% - 320px + 8120px);
          }
        }

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec508101334 .tn-elem[data-elem-id="1667212894115"] {
            top: 218px;
            left: calc(50% - 160px + 7581px);
          }
        }

        #rec508101334 .tn-elem[data-elem-id="1667212894119"] {
          z-index: 91;
          top: 188px;
          left: calc(50% - 600px + 8420px);
          width: 270px;
        }

        #rec508101334 .tn-elem.t396__elem--anim-hidden[data-elem-id="1667212894119"] {
          opacity: 0;
        }

        #rec508101334 .tn-elem[data-elem-id="1667212894119"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec508101334 .tn-elem[data-elem-id="1667212894119"] {
            top: 188px;
            left: calc(50% - 480px + 8418px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec508101334 .tn-elem[data-elem-id="1667212894119"] {
            top: 218px;
            left: calc(50% - 320px + 8420px);
          }
        }

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec508101334 .tn-elem[data-elem-id="1667212894119"] {
            top: 218px;
            left: calc(50% - 160px + 7861px);
          }
        }

        #rec508101334 .tn-elem[data-elem-id="1667212894123"] {
          z-index: 55;
          top: 188px;
          left: calc(50% - 600px + 8720px);
          width: 270px;
        }

        #rec508101334 .tn-elem.t396__elem--anim-hidden[data-elem-id="1667212894123"] {
          opacity: 0;
        }

        #rec508101334 .tn-elem[data-elem-id="1667212894123"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec508101334 .tn-elem[data-elem-id="1667212894123"] {
            top: 188px;
            left: calc(50% - 480px + 8718px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec508101334 .tn-elem[data-elem-id="1667212894123"] {
            top: 218px;
            left: calc(50% - 320px + 8720px);
          }
        }

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec508101334 .tn-elem[data-elem-id="1667212894123"] {
            top: 218px;
            left: calc(50% - 160px + 8141px);
          }
        }

        #rec508101334 .tn-elem[data-elem-id="1667212894127"] {
          z-index: 102;
          top: 188px;
          left: calc(50% - 600px + 9020px);
          width: 270px;
        }

        #rec508101334 .tn-elem.t396__elem--anim-hidden[data-elem-id="1667212894127"] {
          opacity: 0;
        }

        #rec508101334 .tn-elem[data-elem-id="1667212894127"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec508101334 .tn-elem[data-elem-id="1667212894127"] {
            top: 188px;
            left: calc(50% - 480px + 9018px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec508101334 .tn-elem[data-elem-id="1667212894127"] {
            top: 218px;
            left: calc(50% - 320px + 9020px);
          }
        }

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec508101334 .tn-elem[data-elem-id="1667212894127"] {
            top: 218px;
            left: calc(50% - 160px + 8421px);
          }
        }

        #rec508101334 .tn-elem[data-elem-id="1667212894131"] {
          z-index: 66;
          top: 188px;
          left: calc(50% - 600px + 9320px);
          width: 270px;
        }

        #rec508101334 .tn-elem.t396__elem--anim-hidden[data-elem-id="1667212894131"] {
          opacity: 0;
        }

        #rec508101334 .tn-elem[data-elem-id="1667212894131"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec508101334 .tn-elem[data-elem-id="1667212894131"] {
            top: 188px;
            left: calc(50% - 480px + 9318px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec508101334 .tn-elem[data-elem-id="1667212894131"] {
            top: 218px;
            left: calc(50% - 320px + 9320px);
          }
        }

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec508101334 .tn-elem[data-elem-id="1667212894131"] {
            top: 218px;
            left: calc(50% - 160px + 8701px);
          }
        }

        #rec508101334 .tn-elem[data-elem-id="1667212894135"] {
          z-index: 113;
          top: 188px;
          left: calc(50% - 600px + 9620px);
          width: 270px;
        }

        #rec508101334 .tn-elem.t396__elem--anim-hidden[data-elem-id="1667212894135"] {
          opacity: 0;
        }

        #rec508101334 .tn-elem[data-elem-id="1667212894135"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec508101334 .tn-elem[data-elem-id="1667212894135"] {
            top: 188px;
            left: calc(50% - 480px + 9618px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec508101334 .tn-elem[data-elem-id="1667212894135"] {
            top: 218px;
            left: calc(50% - 320px + 9620px);
          }
        }

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec508101334 .tn-elem[data-elem-id="1667212894135"] {
            top: 218px;
            left: calc(50% - 160px + 8981px);
          }
        }

        #rec508101334 .tn-elem[data-elem-id="1667212894138"] {
          z-index: 118;
          top: 186px;
          left: calc(50% - 600px + 9920px);
          width: 270px;
        }

        #rec508101334 .tn-elem.t396__elem--anim-hidden[data-elem-id="1667212894138"] {
          opacity: 0;
        }

        #rec508101334 .tn-elem[data-elem-id="1667212894138"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec508101334 .tn-elem[data-elem-id="1667212894138"] {
            top: 186px;
            left: calc(50% - 480px + 9918px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec508101334 .tn-elem[data-elem-id="1667212894138"] {
            top: 216px;
            left: calc(50% - 320px + 9920px);
          }
        }

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec508101334 .tn-elem[data-elem-id="1667212894138"] {
            top: 216px;
            left: calc(50% - 160px + 9261px);
          }
        }

        #rec508101334 .tn-elem[data-elem-id="1667299556284"] {
          z-index: 29;
          top: 186px;
          left: calc(50% - 600px + 10220px);
          width: 270px;
        }

        #rec508101334 .tn-elem.t396__elem--anim-hidden[data-elem-id="1667299556284"] {
          opacity: 0;
        }

        #rec508101334 .tn-elem[data-elem-id="1667299556284"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556284"] {
            top: 186px;
            left: calc(50% - 480px + 10218px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556284"] {
            top: 216px;
            left: calc(50% - 320px + 10218px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556284"] {
            top: 216px;
            left: calc(50% - 240px + 10218px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556284"] {
            top: 220px;
            left: calc(50% - 160px + 4500px);
          }
        }

        #rec508101334 .tn-elem[data-elem-id="1667299556289"] {
          z-index: 76;
          top: 186px;
          left: calc(50% - 600px + 10520px);
          width: 270px;
        }

        #rec508101334 .tn-elem.t396__elem--anim-hidden[data-elem-id="1667299556289"] {
          opacity: 0;
        }

        #rec508101334 .tn-elem[data-elem-id="1667299556289"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556289"] {
            top: 186px;
            left: calc(50% - 480px + 10518px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556289"] {
            top: 216px;
            left: calc(50% - 320px + 10518px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556289"] {
            top: 216px;
            left: calc(50% - 240px + 10518px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556289"] {
            top: 216px;
            left: calc(50% - 160px + 9821px);
          }
        }

        #rec508101334 .tn-elem[data-elem-id="1667299556293"] {
          z-index: 40;
          top: 186px;
          left: calc(50% - 600px + 10820px);
          width: 270px;
        }

        #rec508101334 .tn-elem.t396__elem--anim-hidden[data-elem-id="1667299556293"] {
          opacity: 0;
        }

        #rec508101334 .tn-elem[data-elem-id="1667299556293"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556293"] {
            top: 186px;
            left: calc(50% - 480px + 10818px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556293"] {
            top: 216px;
            left: calc(50% - 320px + 10818px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556293"] {
            top: 216px;
            left: calc(50% - 240px + 10818px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556293"] {
            top: 216px;
            left: calc(50% - 160px + 10101px);
          }
        }

        #rec508101334 .tn-elem[data-elem-id="1667299556298"] {
          z-index: 87;
          top: 186px;
          left: calc(50% - 600px + 11120px);
          width: 270px;
        }

        #rec508101334 .tn-elem.t396__elem--anim-hidden[data-elem-id="1667299556298"] {
          opacity: 0;
        }

        #rec508101334 .tn-elem[data-elem-id="1667299556298"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556298"] {
            top: 186px;
            left: calc(50% - 480px + 11118px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556298"] {
            top: 216px;
            left: calc(50% - 320px + 11118px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556298"] {
            top: 216px;
            left: calc(50% - 240px + 11118px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556298"] {
            top: 216px;
            left: calc(50% - 160px + 10381px);
          }
        }

        #rec508101334 .tn-elem[data-elem-id="1667299556305"] {
          z-index: 51;
          top: 186px;
          left: calc(50% - 600px + 11420px);
          width: 270px;
        }

        #rec508101334 .tn-elem.t396__elem--anim-hidden[data-elem-id="1667299556305"] {
          opacity: 0;
        }

        #rec508101334 .tn-elem[data-elem-id="1667299556305"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556305"] {
            top: 186px;
            left: calc(50% - 480px + 11418px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556305"] {
            top: 216px;
            left: calc(50% - 320px + 11418px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556305"] {
            top: 216px;
            left: calc(50% - 240px + 11418px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556305"] {
            top: 216px;
            left: calc(50% - 160px + 10661px);
          }
        }

        #rec508101334 .tn-elem[data-elem-id="1667299556310"] {
          z-index: 98;
          top: 186px;
          left: calc(50% - 600px + 11720px);
          width: 270px;
        }

        #rec508101334 .tn-elem.t396__elem--anim-hidden[data-elem-id="1667299556310"] {
          opacity: 0;
        }

        #rec508101334 .tn-elem[data-elem-id="1667299556310"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556310"] {
            top: 186px;
            left: calc(50% - 480px + 11718px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556310"] {
            top: 216px;
            left: calc(50% - 320px + 11718px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556310"] {
            top: 216px;
            left: calc(50% - 240px + 11718px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556310"] {
            top: 216px;
            left: calc(50% - 160px + 10941px);
          }
        }

        #rec508101334 .tn-elem[data-elem-id="1667299556314"] {
          z-index: 62;
          top: 186px;
          left: calc(50% - 600px + 12020px);
          width: 270px;
        }

        #rec508101334 .tn-elem.t396__elem--anim-hidden[data-elem-id="1667299556314"] {
          opacity: 0;
        }

        #rec508101334 .tn-elem[data-elem-id="1667299556314"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556314"] {
            top: 186px;
            left: calc(50% - 480px + 12018px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556314"] {
            top: 216px;
            left: calc(50% - 320px + 12018px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556314"] {
            top: 216px;
            left: calc(50% - 240px + 12018px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556314"] {
            top: 216px;
            left: calc(50% - 160px + 11221px);
          }
        }

        #rec508101334 .tn-elem[data-elem-id="1667299556318"] {
          z-index: 109;
          top: 186px;
          left: calc(50% - 600px + 12320px);
          width: 270px;
        }

        #rec508101334 .tn-elem.t396__elem--anim-hidden[data-elem-id="1667299556318"] {
          opacity: 0;
        }

        #rec508101334 .tn-elem[data-elem-id="1667299556318"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556318"] {
            top: 186px;
            left: calc(50% - 480px + 12318px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556318"] {
            top: 216px;
            left: calc(50% - 320px + 12318px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556318"] {
            top: 216px;
            left: calc(50% - 240px + 12318px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556318"] {
            top: 216px;
            left: calc(50% - 160px + 11501px);
          }
        }

        #rec508101334 .tn-elem[data-elem-id="1667299556322"] {
          z-index: 34;
          top: 186px;
          left: calc(50% - 600px + 12620px);
          width: 270px;
        }

        #rec508101334 .tn-elem.t396__elem--anim-hidden[data-elem-id="1667299556322"] {
          opacity: 0;
        }

        #rec508101334 .tn-elem[data-elem-id="1667299556322"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556322"] {
            top: 186px;
            left: calc(50% - 480px + 12618px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556322"] {
            top: 216px;
            left: calc(50% - 320px + 12618px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556322"] {
            top: 216px;
            left: calc(50% - 240px + 12618px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556322"] {
            top: 216px;
            left: calc(50% - 160px + 11781px);
          }
        }

        #rec508101334 .tn-elem[data-elem-id="1667299556326"] {
          z-index: 81;
          top: 186px;
          left: calc(50% - 600px + 12920px);
          width: 270px;
        }

        #rec508101334 .tn-elem.t396__elem--anim-hidden[data-elem-id="1667299556326"] {
          opacity: 0;
        }

        #rec508101334 .tn-elem[data-elem-id="1667299556326"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556326"] {
            top: 186px;
            left: calc(50% - 480px + 12918px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556326"] {
            top: 216px;
            left: calc(50% - 320px + 12918px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556326"] {
            top: 216px;
            left: calc(50% - 240px + 12918px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556326"] {
            top: 216px;
            left: calc(50% - 160px + 12061px);
          }
        }

        #rec508101334 .tn-elem[data-elem-id="1667299556330"] {
          z-index: 45;
          top: 186px;
          left: calc(50% - 600px + 13220px);
          width: 270px;
        }

        #rec508101334 .tn-elem.t396__elem--anim-hidden[data-elem-id="1667299556330"] {
          opacity: 0;
        }

        #rec508101334 .tn-elem[data-elem-id="1667299556330"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556330"] {
            top: 186px;
            left: calc(50% - 480px + 13218px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556330"] {
            top: 216px;
            left: calc(50% - 320px + 13218px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556330"] {
            top: 216px;
            left: calc(50% - 240px + 13218px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556330"] {
            top: 216px;
            left: calc(50% - 160px + 12341px);
          }
        }

        #rec508101334 .tn-elem[data-elem-id="1667299556334"] {
          z-index: 92;
          top: 186px;
          left: calc(50% - 600px + 13520px);
          width: 270px;
        }

        #rec508101334 .tn-elem.t396__elem--anim-hidden[data-elem-id="1667299556334"] {
          opacity: 0;
        }

        #rec508101334 .tn-elem[data-elem-id="1667299556334"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556334"] {
            top: 186px;
            left: calc(50% - 480px + 13518px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556334"] {
            top: 216px;
            left: calc(50% - 320px + 13518px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556334"] {
            top: 216px;
            left: calc(50% - 240px + 13518px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556334"] {
            top: 216px;
            left: calc(50% - 160px + 12621px);
          }
        }

        #rec508101334 .tn-elem[data-elem-id="1667299556338"] {
          z-index: 56;
          top: 186px;
          left: calc(50% - 600px + 13820px);
          width: 270px;
        }

        #rec508101334 .tn-elem.t396__elem--anim-hidden[data-elem-id="1667299556338"] {
          opacity: 0;
        }

        #rec508101334 .tn-elem[data-elem-id="1667299556338"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556338"] {
            top: 186px;
            left: calc(50% - 480px + 13818px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556338"] {
            top: 216px;
            left: calc(50% - 320px + 13818px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556338"] {
            top: 216px;
            left: calc(50% - 240px + 13818px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556338"] {
            top: 216px;
            left: calc(50% - 160px + 12901px);
          }
        }

        #rec508101334 .tn-elem[data-elem-id="1667299556343"] {
          z-index: 103;
          top: 186px;
          left: calc(50% - 600px + 14120px);
          width: 270px;
        }

        #rec508101334 .tn-elem.t396__elem--anim-hidden[data-elem-id="1667299556343"] {
          opacity: 0;
        }

        #rec508101334 .tn-elem[data-elem-id="1667299556343"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556343"] {
            top: 186px;
            left: calc(50% - 480px + 14118px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556343"] {
            top: 216px;
            left: calc(50% - 320px + 14118px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556343"] {
            top: 216px;
            left: calc(50% - 240px + 14118px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556343"] {
            top: 216px;
            left: calc(50% - 160px + 13181px);
          }
        }

        #rec508101334 .tn-elem[data-elem-id="1667299556347"] {
          z-index: 67;
          top: 186px;
          left: calc(50% - 600px + 14420px);
          width: 270px;
        }

        #rec508101334 .tn-elem.t396__elem--anim-hidden[data-elem-id="1667299556347"] {
          opacity: 0;
        }

        #rec508101334 .tn-elem[data-elem-id="1667299556347"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556347"] {
            top: 186px;
            left: calc(50% - 480px + 14418px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556347"] {
            top: 216px;
            left: calc(50% - 320px + 14418px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556347"] {
            top: 216px;
            left: calc(50% - 240px + 14418px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556347"] {
            top: 216px;
            left: calc(50% - 160px + 13461px);
          }
        }

        #rec508101334 .tn-elem[data-elem-id="1667299556351"] {
          z-index: 114;
          top: 186px;
          left: calc(50% - 600px + 14720px);
          width: 270px;
        }

        #rec508101334 .tn-elem.t396__elem--anim-hidden[data-elem-id="1667299556351"] {
          opacity: 0;
        }

        #rec508101334 .tn-elem[data-elem-id="1667299556351"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556351"] {
            top: 186px;
            left: calc(50% - 480px + 14718px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556351"] {
            top: 216px;
            left: calc(50% - 320px + 14718px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556351"] {
            top: 216px;
            left: calc(50% - 240px + 14718px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556351"] {
            top: 216px;
            left: calc(50% - 160px + 13741px);
          }
        }

        #rec508101334 .tn-elem[data-elem-id="1667299556355"] {
          z-index: 119;
          top: 184px;
          left: calc(50% - 600px + 15020px);
          width: 270px;
        }

        #rec508101334 .tn-elem.t396__elem--anim-hidden[data-elem-id="1667299556355"] {
          opacity: 0;
        }

        #rec508101334 .tn-elem[data-elem-id="1667299556355"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556355"] {
            top: 184px;
            left: calc(50% - 480px + 15018px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556355"] {
            top: 214px;
            left: calc(50% - 320px + 15018px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556355"] {
            top: 214px;
            left: calc(50% - 240px + 15018px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec508101334 .tn-elem[data-elem-id="1667299556355"] {
            top: 214px;
            left: calc(50% - 160px + 14021px);
          }
        }
      </style>
      <div class="t396">
        <div class="t396__artboard" data-artboard-height="580" data-artboard-height-res-640="580"
          data-artboard-recid="508101334" data-artboard-screens="320,480,640,960,1200" data-artboard-upscale="grid"
          data-artboard-upscale-res-320="grid" data-artboard-upscale-res-960="grid" data-artboard-valign="stretch">
          <div class="t396__carrier" data-artboard-recid="508101334"></div>
          <div class="t396__filter" data-artboard-recid="508101334"></div>
          <div class="t396__elem tn-elem tn-elem__5081013341666699726848" data-elem-id="1666699726848"
            data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="20"
            data-field-left-res-640-value="20" data-field-left-res-960-value="20" data-field-left-value="20"
            data-field-leftunits-value="px" data-field-top-res-320-value="-175" data-field-top-res-640-value="70"
            data-field-top-value="100" data-field-topunits-value="px" data-field-width-res-320-value="271"
            data-field-width-res-640-value="508" data-field-width-value="1061" data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666699726848">
              Недавно проинвестированные сделки
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081013341666949163129" data-elem-id="1666949163129"
            data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="20"
            data-field-left-res-960-value="20" data-field-left-value="20" data-field-leftunits-value="px"
            data-field-top-res-320-value="70" data-field-top-res-960-value="-60" data-field-top-value="-100"
            data-field-topunits-value="px" data-field-width-res-320-value="271" data-field-width-value="1061"
            data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666949163129">
              Недавно проинвестиро–ванные сделки
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081013341667044504171" data-animate-mobile="y"
            data-animate-sbs-event="intoview"
            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500000,'mx':-20000,'my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
            data-animate-sbs-trg="1" data-animate-sbs-trgofst="0" data-elem-id="1667044504171" data-elem-type="image"
            data-field-axisx-value="left" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-fileheight-value="282" data-field-filewidth-value="270" data-field-heightunits-value=""
            data-field-lazyoff-value="y" data-field-left-res-640-value="20" data-field-left-res-960-value="20"
            data-field-left-value="20" data-field-leftunits-value="px" data-field-top-res-640-value="220"
            data-field-top-res-960-value="190" data-field-top-value="190" data-field-topunits-value="px"
            data-field-width-value="270" data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img" imgfield="tn_img_1667044504171" src="images/01.svg" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081013341667044532813" data-animate-mobile="y"
            data-animate-sbs-event="intoview"
            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500000,'mx':-20000,'my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
            data-animate-sbs-trg="1" data-animate-sbs-trgofst="0" data-elem-id="1667044532813" data-elem-type="image"
            data-field-axisx-value="left" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-fileheight-value="282" data-field-filewidth-value="270" data-field-heightunits-value=""
            data-field-lazyoff-value="y" data-field-left-res-320-value="300" data-field-left-res-640-value="320"
            data-field-left-res-960-value="320" data-field-left-value="320" data-field-leftunits-value="px"
            data-field-top-res-320-value="220" data-field-top-res-640-value="220" data-field-top-res-960-value="190"
            data-field-top-value="190" data-field-topunits-value="px" data-field-width-value="270"
            data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img" imgfield="tn_img_1667044532813" src="images/02.svg" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081013341667044603226" data-animate-mobile="y"
            data-animate-sbs-event="intoview"
            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500000,'mx':-20000,'my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
            data-animate-sbs-trg="1" data-animate-sbs-trgofst="0" data-elem-id="1667044603226" data-elem-type="image"
            data-field-axisx-value="left" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-fileheight-value="282" data-field-filewidth-value="270" data-field-heightunits-value=""
            data-field-lazyoff-value="y" data-field-left-res-320-value="580" data-field-left-res-640-value="620"
            data-field-left-res-960-value="620" data-field-left-value="620" data-field-leftunits-value="px"
            data-field-top-res-320-value="220" data-field-top-res-640-value="220" data-field-top-res-960-value="190"
            data-field-top-value="190" data-field-topunits-value="px" data-field-width-value="270"
            data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img" imgfield="tn_img_1667044603226" src="images/03.svg" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081013341667044603230" data-animate-mobile="y"
            data-animate-sbs-event="intoview"
            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500000,'mx':-20000,'my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
            data-animate-sbs-trg="1" data-animate-sbs-trgofst="0" data-elem-id="1667044603230" data-elem-type="image"
            data-field-axisx-value="left" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-fileheight-value="282" data-field-filewidth-value="270" data-field-heightunits-value=""
            data-field-lazyoff-value="y" data-field-left-res-320-value="860" data-field-left-res-640-value="920"
            data-field-left-res-960-value="920" data-field-left-value="920" data-field-leftunits-value="px"
            data-field-top-res-320-value="220" data-field-top-res-640-value="220" data-field-top-res-960-value="190"
            data-field-top-value="190" data-field-topunits-value="px" data-field-width-value="270"
            data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img" imgfield="tn_img_1667044603230" src="images/04.svg" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081013341667044605995" data-animate-mobile="y"
            data-animate-sbs-event="intoview"
            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500000,'mx':-20000,'my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
            data-animate-sbs-trg="1" data-animate-sbs-trgofst="0" data-elem-id="1667044605995" data-elem-type="image"
            data-field-axisx-value="left" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-fileheight-value="282" data-field-filewidth-value="270" data-field-heightunits-value=""
            data-field-lazyoff-value="y" data-field-left-res-320-value="1140" data-field-left-res-640-value="1220"
            data-field-left-res-960-value="1220" data-field-left-value="1220" data-field-leftunits-value="px"
            data-field-top-res-320-value="220" data-field-top-res-640-value="220" data-field-top-res-960-value="190"
            data-field-top-value="190" data-field-topunits-value="px" data-field-width-value="270"
            data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img" imgfield="tn_img_1667044605995" src="images/05.svg" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081013341667044606002" data-animate-mobile="y"
            data-animate-sbs-event="intoview"
            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500000,'mx':-20000,'my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
            data-animate-sbs-trg="1" data-animate-sbs-trgofst="0" data-elem-id="1667044606002" data-elem-type="image"
            data-field-axisx-value="left" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-fileheight-value="282" data-field-filewidth-value="270" data-field-heightunits-value=""
            data-field-lazyoff-value="y" data-field-left-res-320-value="1420" data-field-left-res-640-value="1520"
            data-field-left-res-960-value="1520" data-field-left-value="1520" data-field-leftunits-value="px"
            data-field-top-res-320-value="220" data-field-top-res-640-value="220" data-field-top-res-960-value="190"
            data-field-top-value="190" data-field-topunits-value="px" data-field-width-value="270"
            data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img" imgfield="tn_img_1667044606002" src="images/06.svg" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081013341667044608928" data-animate-mobile="y"
            data-animate-sbs-event="intoview"
            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500000,'mx':-20000,'my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
            data-animate-sbs-trg="1" data-animate-sbs-trgofst="0" data-elem-id="1667044608928" data-elem-type="image"
            data-field-axisx-value="left" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-fileheight-value="282" data-field-filewidth-value="270" data-field-heightunits-value=""
            data-field-lazyoff-value="y" data-field-left-res-320-value="1700" data-field-left-res-640-value="1820"
            data-field-left-res-960-value="1820" data-field-left-value="1820" data-field-leftunits-value="px"
            data-field-top-res-320-value="220" data-field-top-res-640-value="220" data-field-top-res-960-value="190"
            data-field-top-value="190" data-field-topunits-value="px" data-field-width-value="270"
            data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img" imgfield="tn_img_1667044608928" src="images/07.svg" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081013341667044608932" data-animate-mobile="y"
            data-animate-sbs-event="intoview"
            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500000,'mx':-20000,'my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
            data-animate-sbs-trg="1" data-animate-sbs-trgofst="0" data-elem-id="1667044608932" data-elem-type="image"
            data-field-axisx-value="left" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-fileheight-value="282" data-field-filewidth-value="270" data-field-heightunits-value=""
            data-field-lazyoff-value="y" data-field-left-res-320-value="1980" data-field-left-res-640-value="2120"
            data-field-left-res-960-value="2120" data-field-left-value="2120" data-field-leftunits-value="px"
            data-field-top-res-320-value="220" data-field-top-res-640-value="220" data-field-top-res-960-value="190"
            data-field-top-value="190" data-field-topunits-value="px" data-field-width-value="270"
            data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img" imgfield="tn_img_1667044608932" src="images/08.svg" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081013341667044626677" data-animate-mobile="y"
            data-animate-sbs-event="intoview"
            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500000,'mx':-20000,'my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
            data-animate-sbs-trg="1" data-animate-sbs-trgofst="0" data-elem-id="1667044626677" data-elem-type="image"
            data-field-axisx-value="left" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-fileheight-value="282" data-field-filewidth-value="270" data-field-heightunits-value=""
            data-field-lazyoff-value="y" data-field-left-res-320-value="2260" data-field-left-res-640-value="2420"
            data-field-left-res-960-value="2420" data-field-left-value="2420" data-field-leftunits-value="px"
            data-field-top-res-320-value="220" data-field-top-res-640-value="220" data-field-top-res-960-value="190"
            data-field-top-value="190" data-field-topunits-value="px" data-field-width-value="270"
            data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img" imgfield="tn_img_1667044626677" src="images/09.svg" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081013341667044626682" data-animate-mobile="y"
            data-animate-sbs-event="intoview"
            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500000,'mx':-20000,'my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
            data-animate-sbs-trg="1" data-animate-sbs-trgofst="0" data-elem-id="1667044626682" data-elem-type="image"
            data-field-axisx-value="left" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-fileheight-value="282" data-field-filewidth-value="270" data-field-heightunits-value=""
            data-field-lazyoff-value="y" data-field-left-res-320-value="2540" data-field-left-res-640-value="2720"
            data-field-left-res-960-value="2720" data-field-left-value="2720" data-field-leftunits-value="px"
            data-field-top-res-320-value="220" data-field-top-res-640-value="220" data-field-top-res-960-value="190"
            data-field-top-value="190" data-field-topunits-value="px" data-field-width-value="270"
            data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img" imgfield="tn_img_1667044626682" src="images/10.svg" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081013341667044626687" data-animate-mobile="y"
            data-animate-sbs-event="intoview"
            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500000,'mx':-20000,'my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
            data-animate-sbs-trg="1" data-animate-sbs-trgofst="0" data-elem-id="1667044626687" data-elem-type="image"
            data-field-axisx-value="left" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-fileheight-value="282" data-field-filewidth-value="270" data-field-heightunits-value=""
            data-field-lazyoff-value="y" data-field-left-res-320-value="2820" data-field-left-res-640-value="3020"
            data-field-left-res-960-value="3020" data-field-left-value="3020" data-field-leftunits-value="px"
            data-field-top-res-320-value="220" data-field-top-res-640-value="220" data-field-top-res-960-value="190"
            data-field-top-value="190" data-field-topunits-value="px" data-field-width-value="270"
            data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img" imgfield="tn_img_1667044626687" src="images/11.svg" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081013341667044626690" data-animate-mobile="y"
            data-animate-sbs-event="intoview"
            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500000,'mx':-20000,'my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
            data-animate-sbs-trg="1" data-animate-sbs-trgofst="0" data-elem-id="1667044626690" data-elem-type="image"
            data-field-axisx-value="left" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-fileheight-value="282" data-field-filewidth-value="270" data-field-heightunits-value=""
            data-field-lazyoff-value="y" data-field-left-res-320-value="3100" data-field-left-res-640-value="3320"
            data-field-left-res-960-value="3320" data-field-left-value="3320" data-field-leftunits-value="px"
            data-field-top-res-320-value="220" data-field-top-res-640-value="220" data-field-top-res-960-value="190"
            data-field-top-value="190" data-field-topunits-value="px" data-field-width-value="270"
            data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img" imgfield="tn_img_1667044626690" src="images/12.svg" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081013341667044626694" data-animate-mobile="y"
            data-animate-sbs-event="intoview"
            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500000,'mx':-20000,'my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
            data-animate-sbs-trg="1" data-animate-sbs-trgofst="0" data-elem-id="1667044626694" data-elem-type="image"
            data-field-axisx-value="left" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-fileheight-value="282" data-field-filewidth-value="270" data-field-heightunits-value=""
            data-field-lazyoff-value="y" data-field-left-res-320-value="3380" data-field-left-res-640-value="3620"
            data-field-left-res-960-value="3620" data-field-left-value="3620" data-field-leftunits-value="px"
            data-field-top-res-320-value="220" data-field-top-res-640-value="220" data-field-top-res-960-value="190"
            data-field-top-value="190" data-field-topunits-value="px" data-field-width-value="270"
            data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img" imgfield="tn_img_1667044626694" src="images/13.svg" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081013341667044626697" data-animate-mobile="y"
            data-animate-sbs-event="intoview"
            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500000,'mx':-20000,'my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
            data-animate-sbs-trg="1" data-animate-sbs-trgofst="0" data-elem-id="1667044626697" data-elem-type="image"
            data-field-axisx-value="left" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-fileheight-value="282" data-field-filewidth-value="270" data-field-heightunits-value=""
            data-field-lazyoff-value="y" data-field-left-res-320-value="3660" data-field-left-res-640-value="3920"
            data-field-left-res-960-value="3920" data-field-left-value="3920" data-field-leftunits-value="px"
            data-field-top-res-320-value="220" data-field-top-res-640-value="220" data-field-top-res-960-value="190"
            data-field-top-value="190" data-field-topunits-value="px" data-field-width-value="270"
            data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img" imgfield="tn_img_1667044626697" src="images/14.svg" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081013341667044626701" data-animate-mobile="y"
            data-animate-sbs-event="intoview"
            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500000,'mx':-20000,'my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
            data-animate-sbs-trg="1" data-animate-sbs-trgofst="0" data-elem-id="1667044626701" data-elem-type="image"
            data-field-axisx-value="left" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-fileheight-value="282" data-field-filewidth-value="270" data-field-heightunits-value=""
            data-field-lazyoff-value="y" data-field-left-res-320-value="3940" data-field-left-res-640-value="4220"
            data-field-left-res-960-value="4220" data-field-left-value="4220" data-field-leftunits-value="px"
            data-field-top-res-320-value="220" data-field-top-res-640-value="220" data-field-top-res-960-value="190"
            data-field-top-value="190" data-field-topunits-value="px" data-field-width-value="270"
            data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img" imgfield="tn_img_1667044626701" src="images/15.svg" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081013341667044626705" data-animate-mobile="y"
            data-animate-sbs-event="intoview"
            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500000,'mx':-20000,'my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
            data-animate-sbs-trg="1" data-animate-sbs-trgofst="0" data-elem-id="1667044626705" data-elem-type="image"
            data-field-axisx-value="left" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-fileheight-value="282" data-field-filewidth-value="270" data-field-heightunits-value=""
            data-field-lazyoff-value="y" data-field-left-res-320-value="4220" data-field-left-res-640-value="4520"
            data-field-left-res-960-value="4520" data-field-left-value="4520" data-field-leftunits-value="px"
            data-field-top-res-320-value="220" data-field-top-res-640-value="220" data-field-top-res-960-value="190"
            data-field-top-value="190" data-field-topunits-value="px" data-field-width-value="270"
            data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img" imgfield="tn_img_1667044626705" src="images/16.svg" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081013341667044651865" data-animate-mobile="y"
            data-animate-sbs-event="intoview"
            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500000,'mx':-20000,'my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
            data-animate-sbs-trg="1" data-animate-sbs-trgofst="0" data-elem-id="1667044651865" data-elem-type="image"
            data-field-axisx-value="left" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-fileheight-value="282" data-field-filewidth-value="270" data-field-heightunits-value=""
            data-field-lazyoff-value="y" data-field-left-res-320-value="4780" data-field-left-res-640-value="4820"
            data-field-left-res-960-value="4820" data-field-left-value="4820" data-field-leftunits-value="px"
            data-field-top-res-320-value="218" data-field-top-res-640-value="218" data-field-top-res-960-value="188"
            data-field-top-value="188" data-field-topunits-value="px" data-field-width-value="270"
            data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img" imgfield="tn_img_1667044651865" src="images/17.svg" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081013341667212894073" data-animate-mobile="y"
            data-animate-sbs-event="intoview"
            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500000,'mx':-20000,'my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
            data-animate-sbs-trg="1" data-animate-sbs-trgofst="0" data-elem-id="1667212894073" data-elem-type="image"
            data-field-axisx-value="left" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-fileheight-value="282" data-field-filewidth-value="270" data-field-heightunits-value=""
            data-field-lazyoff-value="y" data-field-left-res-320-value="9541" data-field-left-res-640-value="5120"
            data-field-left-res-960-value="5118" data-field-left-value="5120" data-field-leftunits-value="px"
            data-field-top-res-320-value="216" data-field-top-res-640-value="218" data-field-top-res-960-value="188"
            data-field-top-value="188" data-field-topunits-value="px" data-field-width-value="270"
            data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img" imgfield="tn_img_1667212894073" src="images/01_1.svg" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081013341667212894078" data-animate-mobile="y"
            data-animate-sbs-event="intoview"
            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500000,'mx':-20000,'my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
            data-animate-sbs-trg="1" data-animate-sbs-trgofst="0" data-elem-id="1667212894078" data-elem-type="image"
            data-field-axisx-value="left" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-fileheight-value="282" data-field-filewidth-value="270" data-field-heightunits-value=""
            data-field-lazyoff-value="y" data-field-left-res-320-value="5061" data-field-left-res-640-value="5420"
            data-field-left-res-960-value="5418" data-field-left-value="5420" data-field-leftunits-value="px"
            data-field-top-res-320-value="218" data-field-top-res-640-value="218" data-field-top-res-960-value="188"
            data-field-top-value="188" data-field-topunits-value="px" data-field-width-value="270"
            data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img" imgfield="tn_img_1667212894078" src="images/02_1.svg" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081013341667212894082" data-animate-mobile="y"
            data-animate-sbs-event="intoview"
            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500000,'mx':-20000,'my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
            data-animate-sbs-trg="1" data-animate-sbs-trgofst="0" data-elem-id="1667212894082" data-elem-type="image"
            data-field-axisx-value="left" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-fileheight-value="282" data-field-filewidth-value="270" data-field-heightunits-value=""
            data-field-lazyoff-value="y" data-field-left-res-320-value="5341" data-field-left-res-640-value="5720"
            data-field-left-res-960-value="5718" data-field-left-value="5720" data-field-leftunits-value="px"
            data-field-top-res-320-value="218" data-field-top-res-640-value="218" data-field-top-res-960-value="188"
            data-field-top-value="188" data-field-topunits-value="px" data-field-width-value="270"
            data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img" imgfield="tn_img_1667212894082" src="images/03_1.svg" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081013341667212894085" data-animate-mobile="y"
            data-animate-sbs-event="intoview"
            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500000,'mx':-20000,'my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
            data-animate-sbs-trg="1" data-animate-sbs-trgofst="0" data-elem-id="1667212894085" data-elem-type="image"
            data-field-axisx-value="left" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-fileheight-value="282" data-field-filewidth-value="270" data-field-heightunits-value=""
            data-field-lazyoff-value="y" data-field-left-res-320-value="5621" data-field-left-res-640-value="6020"
            data-field-left-res-960-value="6018" data-field-left-value="6020" data-field-leftunits-value="px"
            data-field-top-res-320-value="218" data-field-top-res-640-value="218" data-field-top-res-960-value="188"
            data-field-top-value="188" data-field-topunits-value="px" data-field-width-value="270"
            data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img" imgfield="tn_img_1667212894085" src="images/04_1.svg" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081013341667212894090" data-animate-mobile="y"
            data-animate-sbs-event="intoview"
            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500000,'mx':-20000,'my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
            data-animate-sbs-trg="1" data-animate-sbs-trgofst="0" data-elem-id="1667212894090" data-elem-type="image"
            data-field-axisx-value="left" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-fileheight-value="282" data-field-filewidth-value="270" data-field-heightunits-value=""
            data-field-lazyoff-value="y" data-field-left-res-320-value="5901" data-field-left-res-640-value="6320"
            data-field-left-res-960-value="6318" data-field-left-value="6320" data-field-leftunits-value="px"
            data-field-top-res-320-value="218" data-field-top-res-640-value="218" data-field-top-res-960-value="188"
            data-field-top-value="188" data-field-topunits-value="px" data-field-width-value="270"
            data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img" imgfield="tn_img_1667212894090" src="images/05_1.svg" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081013341667212894094" data-animate-mobile="y"
            data-animate-sbs-event="intoview"
            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500000,'mx':-20000,'my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
            data-animate-sbs-trg="1" data-animate-sbs-trgofst="0" data-elem-id="1667212894094" data-elem-type="image"
            data-field-axisx-value="left" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-fileheight-value="282" data-field-filewidth-value="270" data-field-heightunits-value=""
            data-field-lazyoff-value="y" data-field-left-res-320-value="6181" data-field-left-res-640-value="6620"
            data-field-left-res-960-value="6618" data-field-left-value="6620" data-field-leftunits-value="px"
            data-field-top-res-320-value="218" data-field-top-res-640-value="218" data-field-top-res-960-value="188"
            data-field-top-value="188" data-field-topunits-value="px" data-field-width-value="270"
            data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img" imgfield="tn_img_1667212894094" src="images/06.svg" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081013341667212894098" data-animate-mobile="y"
            data-animate-sbs-event="intoview"
            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500000,'mx':-20000,'my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
            data-animate-sbs-trg="1" data-animate-sbs-trgofst="0" data-elem-id="1667212894098" data-elem-type="image"
            data-field-axisx-value="left" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-fileheight-value="282" data-field-filewidth-value="270" data-field-heightunits-value=""
            data-field-lazyoff-value="y" data-field-left-res-320-value="6461" data-field-left-res-640-value="6920"
            data-field-left-res-960-value="6918" data-field-left-value="6920" data-field-leftunits-value="px"
            data-field-top-res-320-value="218" data-field-top-res-640-value="218" data-field-top-res-960-value="188"
            data-field-top-value="188" data-field-topunits-value="px" data-field-width-value="270"
            data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img" imgfield="tn_img_1667212894098" src="images/07.svg" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081013341667212894102" data-animate-mobile="y"
            data-animate-sbs-event="intoview"
            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500000,'mx':-20000,'my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
            data-animate-sbs-trg="1" data-animate-sbs-trgofst="0" data-elem-id="1667212894102" data-elem-type="image"
            data-field-axisx-value="left" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-fileheight-value="282" data-field-filewidth-value="270" data-field-heightunits-value=""
            data-field-lazyoff-value="y" data-field-left-res-320-value="6741" data-field-left-res-640-value="7220"
            data-field-left-res-960-value="7218" data-field-left-value="7220" data-field-leftunits-value="px"
            data-field-top-res-320-value="218" data-field-top-res-640-value="218" data-field-top-res-960-value="188"
            data-field-top-value="188" data-field-topunits-value="px" data-field-width-value="270"
            data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img" imgfield="tn_img_1667212894102" src="images/08.svg" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081013341667212894107" data-animate-mobile="y"
            data-animate-sbs-event="intoview"
            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500000,'mx':-20000,'my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
            data-animate-sbs-trg="1" data-animate-sbs-trgofst="0" data-elem-id="1667212894107" data-elem-type="image"
            data-field-axisx-value="left" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-fileheight-value="282" data-field-filewidth-value="270" data-field-heightunits-value=""
            data-field-lazyoff-value="y" data-field-left-res-320-value="7021" data-field-left-res-640-value="7520"
            data-field-left-res-960-value="7518" data-field-left-value="7520" data-field-leftunits-value="px"
            data-field-top-res-320-value="218" data-field-top-res-640-value="218" data-field-top-res-960-value="188"
            data-field-top-value="188" data-field-topunits-value="px" data-field-width-value="270"
            data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img" imgfield="tn_img_1667212894107" src="images/09.svg" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081013341667212894112" data-animate-mobile="y"
            data-animate-sbs-event="intoview"
            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500000,'mx':-20000,'my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
            data-animate-sbs-trg="1" data-animate-sbs-trgofst="0" data-elem-id="1667212894112" data-elem-type="image"
            data-field-axisx-value="left" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-fileheight-value="282" data-field-filewidth-value="270" data-field-heightunits-value=""
            data-field-lazyoff-value="y" data-field-left-res-320-value="7301" data-field-left-res-640-value="7820"
            data-field-left-res-960-value="7818" data-field-left-value="7820" data-field-leftunits-value="px"
            data-field-top-res-320-value="218" data-field-top-res-640-value="218" data-field-top-res-960-value="188"
            data-field-top-value="188" data-field-topunits-value="px" data-field-width-value="270"
            data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img" imgfield="tn_img_1667212894112" src="images/10.svg" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081013341667212894115" data-animate-mobile="y"
            data-animate-sbs-event="intoview"
            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500000,'mx':-20000,'my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
            data-animate-sbs-trg="1" data-animate-sbs-trgofst="0" data-elem-id="1667212894115" data-elem-type="image"
            data-field-axisx-value="left" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-fileheight-value="282" data-field-filewidth-value="270" data-field-heightunits-value=""
            data-field-lazyoff-value="y" data-field-left-res-320-value="7581" data-field-left-res-640-value="8120"
            data-field-left-res-960-value="8118" data-field-left-value="8120" data-field-leftunits-value="px"
            data-field-top-res-320-value="218" data-field-top-res-640-value="218" data-field-top-res-960-value="188"
            data-field-top-value="188" data-field-topunits-value="px" data-field-width-value="270"
            data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img" imgfield="tn_img_1667212894115" src="images/11.svg" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081013341667212894119" data-animate-mobile="y"
            data-animate-sbs-event="intoview"
            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500000,'mx':-20000,'my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
            data-animate-sbs-trg="1" data-animate-sbs-trgofst="0" data-elem-id="1667212894119" data-elem-type="image"
            data-field-axisx-value="left" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-fileheight-value="282" data-field-filewidth-value="270" data-field-heightunits-value=""
            data-field-lazyoff-value="y" data-field-left-res-320-value="7861" data-field-left-res-640-value="8420"
            data-field-left-res-960-value="8418" data-field-left-value="8420" data-field-leftunits-value="px"
            data-field-top-res-320-value="218" data-field-top-res-640-value="218" data-field-top-res-960-value="188"
            data-field-top-value="188" data-field-topunits-value="px" data-field-width-value="270"
            data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img" imgfield="tn_img_1667212894119" src="images/12.svg" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081013341667212894123" data-animate-mobile="y"
            data-animate-sbs-event="intoview"
            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500000,'mx':-20000,'my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
            data-animate-sbs-trg="1" data-animate-sbs-trgofst="0" data-elem-id="1667212894123" data-elem-type="image"
            data-field-axisx-value="left" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-fileheight-value="282" data-field-filewidth-value="270" data-field-heightunits-value=""
            data-field-lazyoff-value="y" data-field-left-res-320-value="8141" data-field-left-res-640-value="8720"
            data-field-left-res-960-value="8718" data-field-left-value="8720" data-field-leftunits-value="px"
            data-field-top-res-320-value="218" data-field-top-res-640-value="218" data-field-top-res-960-value="188"
            data-field-top-value="188" data-field-topunits-value="px" data-field-width-value="270"
            data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img" imgfield="tn_img_1667212894123" src="images/13.svg" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081013341667212894127" data-animate-mobile="y"
            data-animate-sbs-event="intoview"
            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500000,'mx':-20000,'my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
            data-animate-sbs-trg="1" data-animate-sbs-trgofst="0" data-elem-id="1667212894127" data-elem-type="image"
            data-field-axisx-value="left" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-fileheight-value="282" data-field-filewidth-value="270" data-field-heightunits-value=""
            data-field-lazyoff-value="y" data-field-left-res-320-value="8421" data-field-left-res-640-value="9020"
            data-field-left-res-960-value="9018" data-field-left-value="9020" data-field-leftunits-value="px"
            data-field-top-res-320-value="218" data-field-top-res-640-value="218" data-field-top-res-960-value="188"
            data-field-top-value="188" data-field-topunits-value="px" data-field-width-value="270"
            data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img" imgfield="tn_img_1667212894127" src="images/14.svg" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081013341667212894131" data-animate-mobile="y"
            data-animate-sbs-event="intoview"
            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500000,'mx':-20000,'my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
            data-animate-sbs-trg="1" data-animate-sbs-trgofst="0" data-elem-id="1667212894131" data-elem-type="image"
            data-field-axisx-value="left" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-fileheight-value="282" data-field-filewidth-value="270" data-field-heightunits-value=""
            data-field-lazyoff-value="y" data-field-left-res-320-value="8701" data-field-left-res-640-value="9320"
            data-field-left-res-960-value="9318" data-field-left-value="9320" data-field-leftunits-value="px"
            data-field-top-res-320-value="218" data-field-top-res-640-value="218" data-field-top-res-960-value="188"
            data-field-top-value="188" data-field-topunits-value="px" data-field-width-value="270"
            data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img" imgfield="tn_img_1667212894131" src="images/15.svg" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081013341667212894135" data-animate-mobile="y"
            data-animate-sbs-event="intoview"
            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500000,'mx':-20000,'my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
            data-animate-sbs-trg="1" data-animate-sbs-trgofst="0" data-elem-id="1667212894135" data-elem-type="image"
            data-field-axisx-value="left" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-fileheight-value="282" data-field-filewidth-value="270" data-field-heightunits-value=""
            data-field-lazyoff-value="y" data-field-left-res-320-value="8981" data-field-left-res-640-value="9620"
            data-field-left-res-960-value="9618" data-field-left-value="9620" data-field-leftunits-value="px"
            data-field-top-res-320-value="218" data-field-top-res-640-value="218" data-field-top-res-960-value="188"
            data-field-top-value="188" data-field-topunits-value="px" data-field-width-value="270"
            data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img" imgfield="tn_img_1667212894135" src="images/16.svg" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081013341667212894138" data-animate-mobile="y"
            data-animate-sbs-event="intoview"
            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500000,'mx':-20000,'my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
            data-animate-sbs-trg="1" data-animate-sbs-trgofst="0" data-elem-id="1667212894138" data-elem-type="image"
            data-field-axisx-value="left" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-fileheight-value="282" data-field-filewidth-value="270" data-field-heightunits-value=""
            data-field-lazyoff-value="y" data-field-left-res-320-value="9261" data-field-left-res-640-value="9920"
            data-field-left-res-960-value="9918" data-field-left-value="9920" data-field-leftunits-value="px"
            data-field-top-res-320-value="216" data-field-top-res-640-value="216" data-field-top-res-960-value="186"
            data-field-top-value="186" data-field-topunits-value="px" data-field-width-value="270"
            data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img" imgfield="tn_img_1667212894138" src="images/17.svg" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081013341667299556284" data-animate-mobile="y"
            data-animate-sbs-event="intoview"
            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500000,'mx':-20000,'my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
            data-animate-sbs-trg="1" data-animate-sbs-trgofst="0" data-elem-id="1667299556284" data-elem-type="image"
            data-field-axisx-value="left" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-fileheight-value="282" data-field-filewidth-value="270" data-field-heightunits-value=""
            data-field-lazyoff-value="y" data-field-left-res-320-value="4500" data-field-left-res-480-value="10218"
            data-field-left-res-640-value="10218" data-field-left-res-960-value="10218" data-field-left-value="10220"
            data-field-leftunits-value="px" data-field-top-res-320-value="220" data-field-top-res-480-value="216"
            data-field-top-res-640-value="216" data-field-top-res-960-value="186" data-field-top-value="186"
            data-field-topunits-value="px" data-field-width-value="270" data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img" imgfield="tn_img_1667299556284" src="images/01_1.svg" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081013341667299556289" data-animate-mobile="y"
            data-animate-sbs-event="intoview"
            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500000,'mx':-20000,'my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
            data-animate-sbs-trg="1" data-animate-sbs-trgofst="0" data-elem-id="1667299556289" data-elem-type="image"
            data-field-axisx-value="left" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-fileheight-value="282" data-field-filewidth-value="270" data-field-heightunits-value=""
            data-field-lazyoff-value="y" data-field-left-res-320-value="9821" data-field-left-res-480-value="10518"
            data-field-left-res-640-value="10518" data-field-left-res-960-value="10518" data-field-left-value="10520"
            data-field-leftunits-value="px" data-field-top-res-320-value="216" data-field-top-res-480-value="216"
            data-field-top-res-640-value="216" data-field-top-res-960-value="186" data-field-top-value="186"
            data-field-topunits-value="px" data-field-width-value="270" data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img" imgfield="tn_img_1667299556289" src="images/02_1.svg" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081013341667299556293" data-animate-mobile="y"
            data-animate-sbs-event="intoview"
            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500000,'mx':-20000,'my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
            data-animate-sbs-trg="1" data-animate-sbs-trgofst="0" data-elem-id="1667299556293" data-elem-type="image"
            data-field-axisx-value="left" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-fileheight-value="282" data-field-filewidth-value="270" data-field-heightunits-value=""
            data-field-lazyoff-value="y" data-field-left-res-320-value="10101" data-field-left-res-480-value="10818"
            data-field-left-res-640-value="10818" data-field-left-res-960-value="10818" data-field-left-value="10820"
            data-field-leftunits-value="px" data-field-top-res-320-value="216" data-field-top-res-480-value="216"
            data-field-top-res-640-value="216" data-field-top-res-960-value="186" data-field-top-value="186"
            data-field-topunits-value="px" data-field-width-value="270" data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img" imgfield="tn_img_1667299556293" src="images/03_1.svg" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081013341667299556298" data-animate-mobile="y"
            data-animate-sbs-event="intoview"
            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500000,'mx':-20000,'my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
            data-animate-sbs-trg="1" data-animate-sbs-trgofst="0" data-elem-id="1667299556298" data-elem-type="image"
            data-field-axisx-value="left" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-fileheight-value="282" data-field-filewidth-value="270" data-field-heightunits-value=""
            data-field-lazyoff-value="y" data-field-left-res-320-value="10381" data-field-left-res-480-value="11118"
            data-field-left-res-640-value="11118" data-field-left-res-960-value="11118" data-field-left-value="11120"
            data-field-leftunits-value="px" data-field-top-res-320-value="216" data-field-top-res-480-value="216"
            data-field-top-res-640-value="216" data-field-top-res-960-value="186" data-field-top-value="186"
            data-field-topunits-value="px" data-field-width-value="270" data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img" imgfield="tn_img_1667299556298" src="images/04_1.svg" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081013341667299556305" data-animate-mobile="y"
            data-animate-sbs-event="intoview"
            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500000,'mx':-20000,'my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
            data-animate-sbs-trg="1" data-animate-sbs-trgofst="0" data-elem-id="1667299556305" data-elem-type="image"
            data-field-axisx-value="left" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-fileheight-value="282" data-field-filewidth-value="270" data-field-heightunits-value=""
            data-field-lazyoff-value="y" data-field-left-res-320-value="10661" data-field-left-res-480-value="11418"
            data-field-left-res-640-value="11418" data-field-left-res-960-value="11418" data-field-left-value="11420"
            data-field-leftunits-value="px" data-field-top-res-320-value="216" data-field-top-res-480-value="216"
            data-field-top-res-640-value="216" data-field-top-res-960-value="186" data-field-top-value="186"
            data-field-topunits-value="px" data-field-width-value="270" data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img" imgfield="tn_img_1667299556305" src="images/05_1.svg" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081013341667299556310" data-animate-mobile="y"
            data-animate-sbs-event="intoview"
            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500000,'mx':-20000,'my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
            data-animate-sbs-trg="1" data-animate-sbs-trgofst="0" data-elem-id="1667299556310" data-elem-type="image"
            data-field-axisx-value="left" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-fileheight-value="282" data-field-filewidth-value="270" data-field-heightunits-value=""
            data-field-lazyoff-value="y" data-field-left-res-320-value="10941" data-field-left-res-480-value="11718"
            data-field-left-res-640-value="11718" data-field-left-res-960-value="11718" data-field-left-value="11720"
            data-field-leftunits-value="px" data-field-top-res-320-value="216" data-field-top-res-480-value="216"
            data-field-top-res-640-value="216" data-field-top-res-960-value="186" data-field-top-value="186"
            data-field-topunits-value="px" data-field-width-value="270" data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img" imgfield="tn_img_1667299556310" src="images/06.svg" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081013341667299556314" data-animate-mobile="y"
            data-animate-sbs-event="intoview"
            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500000,'mx':-20000,'my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
            data-animate-sbs-trg="1" data-animate-sbs-trgofst="0" data-elem-id="1667299556314" data-elem-type="image"
            data-field-axisx-value="left" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-fileheight-value="282" data-field-filewidth-value="270" data-field-heightunits-value=""
            data-field-lazyoff-value="y" data-field-left-res-320-value="11221" data-field-left-res-480-value="12018"
            data-field-left-res-640-value="12018" data-field-left-res-960-value="12018" data-field-left-value="12020"
            data-field-leftunits-value="px" data-field-top-res-320-value="216" data-field-top-res-480-value="216"
            data-field-top-res-640-value="216" data-field-top-res-960-value="186" data-field-top-value="186"
            data-field-topunits-value="px" data-field-width-value="270" data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img" imgfield="tn_img_1667299556314" src="images/07.svg" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081013341667299556318" data-animate-mobile="y"
            data-animate-sbs-event="intoview"
            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500000,'mx':-20000,'my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
            data-animate-sbs-trg="1" data-animate-sbs-trgofst="0" data-elem-id="1667299556318" data-elem-type="image"
            data-field-axisx-value="left" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-fileheight-value="282" data-field-filewidth-value="270" data-field-heightunits-value=""
            data-field-lazyoff-value="y" data-field-left-res-320-value="11501" data-field-left-res-480-value="12318"
            data-field-left-res-640-value="12318" data-field-left-res-960-value="12318" data-field-left-value="12320"
            data-field-leftunits-value="px" data-field-top-res-320-value="216" data-field-top-res-480-value="216"
            data-field-top-res-640-value="216" data-field-top-res-960-value="186" data-field-top-value="186"
            data-field-topunits-value="px" data-field-width-value="270" data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img" imgfield="tn_img_1667299556318" src="images/08.svg" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081013341667299556322" data-animate-mobile="y"
            data-animate-sbs-event="intoview"
            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500000,'mx':-20000,'my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
            data-animate-sbs-trg="1" data-animate-sbs-trgofst="0" data-elem-id="1667299556322" data-elem-type="image"
            data-field-axisx-value="left" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-fileheight-value="282" data-field-filewidth-value="270" data-field-heightunits-value=""
            data-field-lazyoff-value="y" data-field-left-res-320-value="11781" data-field-left-res-480-value="12618"
            data-field-left-res-640-value="12618" data-field-left-res-960-value="12618" data-field-left-value="12620"
            data-field-leftunits-value="px" data-field-top-res-320-value="216" data-field-top-res-480-value="216"
            data-field-top-res-640-value="216" data-field-top-res-960-value="186" data-field-top-value="186"
            data-field-topunits-value="px" data-field-width-value="270" data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img" imgfield="tn_img_1667299556322" src="images/09.svg" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081013341667299556326" data-animate-mobile="y"
            data-animate-sbs-event="intoview"
            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500000,'mx':-20000,'my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
            data-animate-sbs-trg="1" data-animate-sbs-trgofst="0" data-elem-id="1667299556326" data-elem-type="image"
            data-field-axisx-value="left" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-fileheight-value="282" data-field-filewidth-value="270" data-field-heightunits-value=""
            data-field-lazyoff-value="y" data-field-left-res-320-value="12061" data-field-left-res-480-value="12918"
            data-field-left-res-640-value="12918" data-field-left-res-960-value="12918" data-field-left-value="12920"
            data-field-leftunits-value="px" data-field-top-res-320-value="216" data-field-top-res-480-value="216"
            data-field-top-res-640-value="216" data-field-top-res-960-value="186" data-field-top-value="186"
            data-field-topunits-value="px" data-field-width-value="270" data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img" imgfield="tn_img_1667299556326" src="images/10.svg" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081013341667299556330" data-animate-mobile="y"
            data-animate-sbs-event="intoview"
            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500000,'mx':-20000,'my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
            data-animate-sbs-trg="1" data-animate-sbs-trgofst="0" data-elem-id="1667299556330" data-elem-type="image"
            data-field-axisx-value="left" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-fileheight-value="282" data-field-filewidth-value="270" data-field-heightunits-value=""
            data-field-lazyoff-value="y" data-field-left-res-320-value="12341" data-field-left-res-480-value="13218"
            data-field-left-res-640-value="13218" data-field-left-res-960-value="13218" data-field-left-value="13220"
            data-field-leftunits-value="px" data-field-top-res-320-value="216" data-field-top-res-480-value="216"
            data-field-top-res-640-value="216" data-field-top-res-960-value="186" data-field-top-value="186"
            data-field-topunits-value="px" data-field-width-value="270" data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img" imgfield="tn_img_1667299556330" src="images/11.svg" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081013341667299556334" data-animate-mobile="y"
            data-animate-sbs-event="intoview"
            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500000,'mx':-20000,'my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
            data-animate-sbs-trg="1" data-animate-sbs-trgofst="0" data-elem-id="1667299556334" data-elem-type="image"
            data-field-axisx-value="left" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-fileheight-value="282" data-field-filewidth-value="270" data-field-heightunits-value=""
            data-field-lazyoff-value="y" data-field-left-res-320-value="12621" data-field-left-res-480-value="13518"
            data-field-left-res-640-value="13518" data-field-left-res-960-value="13518" data-field-left-value="13520"
            data-field-leftunits-value="px" data-field-top-res-320-value="216" data-field-top-res-480-value="216"
            data-field-top-res-640-value="216" data-field-top-res-960-value="186" data-field-top-value="186"
            data-field-topunits-value="px" data-field-width-value="270" data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img" imgfield="tn_img_1667299556334" src="images/12.svg" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081013341667299556338" data-animate-mobile="y"
            data-animate-sbs-event="intoview"
            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500000,'mx':-20000,'my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
            data-animate-sbs-trg="1" data-animate-sbs-trgofst="0" data-elem-id="1667299556338" data-elem-type="image"
            data-field-axisx-value="left" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-fileheight-value="282" data-field-filewidth-value="270" data-field-heightunits-value=""
            data-field-lazyoff-value="y" data-field-left-res-320-value="12901" data-field-left-res-480-value="13818"
            data-field-left-res-640-value="13818" data-field-left-res-960-value="13818" data-field-left-value="13820"
            data-field-leftunits-value="px" data-field-top-res-320-value="216" data-field-top-res-480-value="216"
            data-field-top-res-640-value="216" data-field-top-res-960-value="186" data-field-top-value="186"
            data-field-topunits-value="px" data-field-width-value="270" data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img" imgfield="tn_img_1667299556338" src="images/13.svg" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081013341667299556343" data-animate-mobile="y"
            data-animate-sbs-event="intoview"
            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500000,'mx':-20000,'my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
            data-animate-sbs-trg="1" data-animate-sbs-trgofst="0" data-elem-id="1667299556343" data-elem-type="image"
            data-field-axisx-value="left" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-fileheight-value="282" data-field-filewidth-value="270" data-field-heightunits-value=""
            data-field-lazyoff-value="y" data-field-left-res-320-value="13181" data-field-left-res-480-value="14118"
            data-field-left-res-640-value="14118" data-field-left-res-960-value="14118" data-field-left-value="14120"
            data-field-leftunits-value="px" data-field-top-res-320-value="216" data-field-top-res-480-value="216"
            data-field-top-res-640-value="216" data-field-top-res-960-value="186" data-field-top-value="186"
            data-field-topunits-value="px" data-field-width-value="270" data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img" imgfield="tn_img_1667299556343" src="images/14.svg" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081013341667299556347" data-animate-mobile="y"
            data-animate-sbs-event="intoview"
            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500000,'mx':-20000,'my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
            data-animate-sbs-trg="1" data-animate-sbs-trgofst="0" data-elem-id="1667299556347" data-elem-type="image"
            data-field-axisx-value="left" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-fileheight-value="282" data-field-filewidth-value="270" data-field-heightunits-value=""
            data-field-lazyoff-value="y" data-field-left-res-320-value="13461" data-field-left-res-480-value="14418"
            data-field-left-res-640-value="14418" data-field-left-res-960-value="14418" data-field-left-value="14420"
            data-field-leftunits-value="px" data-field-top-res-320-value="216" data-field-top-res-480-value="216"
            data-field-top-res-640-value="216" data-field-top-res-960-value="186" data-field-top-value="186"
            data-field-topunits-value="px" data-field-width-value="270" data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img" imgfield="tn_img_1667299556347" src="images/15.svg" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081013341667299556351" data-animate-mobile="y"
            data-animate-sbs-event="intoview"
            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500000,'mx':-20000,'my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
            data-animate-sbs-trg="1" data-animate-sbs-trgofst="0" data-elem-id="1667299556351" data-elem-type="image"
            data-field-axisx-value="left" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-fileheight-value="282" data-field-filewidth-value="270" data-field-heightunits-value=""
            data-field-lazyoff-value="y" data-field-left-res-320-value="13741" data-field-left-res-480-value="14718"
            data-field-left-res-640-value="14718" data-field-left-res-960-value="14718" data-field-left-value="14720"
            data-field-leftunits-value="px" data-field-top-res-320-value="216" data-field-top-res-480-value="216"
            data-field-top-res-640-value="216" data-field-top-res-960-value="186" data-field-top-value="186"
            data-field-topunits-value="px" data-field-width-value="270" data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img" imgfield="tn_img_1667299556351" src="images/16.svg" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081013341667299556355" data-animate-mobile="y"
            data-animate-sbs-event="intoview"
            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500000,'mx':-20000,'my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
            data-animate-sbs-trg="1" data-animate-sbs-trgofst="0" data-elem-id="1667299556355" data-elem-type="image"
            data-field-axisx-value="left" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-fileheight-value="282" data-field-filewidth-value="270" data-field-heightunits-value=""
            data-field-lazyoff-value="y" data-field-left-res-320-value="14021" data-field-left-res-480-value="15018"
            data-field-left-res-640-value="15018" data-field-left-res-960-value="15018" data-field-left-value="15020"
            data-field-leftunits-value="px" data-field-top-res-320-value="214" data-field-top-res-480-value="214"
            data-field-top-res-640-value="214" data-field-top-res-960-value="184" data-field-top-value="184"
            data-field-topunits-value="px" data-field-width-value="270" data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img" imgfield="tn_img_1667299556355" src="images/17.svg" />
            </div>
          </div>
        </div>
      </div>
      <script>
        t_onReady(function () {
          t_onFuncLoad("t396_init", function () {
            t396_init("508101334");
          });
        });
      </script>
      <!-- /T396 -->
    </div>
    <div class="r t-rec" data-animationappear="off" data-bg-color="#212122" data-record-type="121" id="rec505703707"
      style="background-color: #212122">
      <!-- T396 -->
      <style>
        #rec505703707 .t396__artboard {
          height: 96px;
        }

        #rec505703707 .t396__filter {
          height: 96px;
        }

        #rec505703707 .t396__carrier {
          height: 96px;
          background-position: center center;
          background-attachment: scroll;
          background-size: cover;
          background-repeat: no-repeat;
        }

        @media screen and (max-width: 1199px) {

          #rec505703707 .t396__artboard,
          #rec505703707 .t396__filter,
          #rec505703707 .t396__carrier {}

          #rec505703707 .t396__filter {}

          #rec505703707 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 959px) {

          #rec505703707 .t396__artboard,
          #rec505703707 .t396__filter,
          #rec505703707 .t396__carrier {
            height: 72px;
          }

          #rec505703707 .t396__filter {}

          #rec505703707 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 639px) {

          #rec505703707 .t396__artboard,
          #rec505703707 .t396__filter,
          #rec505703707 .t396__carrier {}

          #rec505703707 .t396__filter {}

          #rec505703707 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 479px) {

          #rec505703707 .t396__artboard,
          #rec505703707 .t396__filter,
          #rec505703707 .t396__carrier {}

          #rec505703707 .t396__filter {}

          #rec505703707 .t396__carrier {
            background-attachment: scroll;
          }
        }
      </style>
      <div class="t396">
        <div class="t396__artboard" data-artboard-height="96" data-artboard-height-res-640="72"
          data-artboard-recid="505703707" data-artboard-screens="320,480,640,960,1200" data-artboard-upscale="grid"
          data-artboard-valign="center">
          <div class="t396__carrier" data-artboard-recid="505703707"></div>
          <div class="t396__filter" data-artboard-recid="505703707"></div>
        </div>
      </div>
      <script>
        t_onReady(function () {
          t_onFuncLoad("t396_init", function () {
            t396_init("505703707");
          });
        });
      </script>
      <!-- /T396 -->
    </div>
    <div class="r t-rec" data-animationappear="off" data-record-type="396" id="rec505703272" style="">
      <!-- T396 -->
      <style>
        #rec505703272 .t396__artboard {
          height: 436px;
          background-color: #212122;
        }

        #rec505703272 .t396__filter {
          height: 436px;
        }

        #rec505703272 .t396__carrier {
          height: 436px;
          background-position: center center;
          background-attachment: scroll;
          background-size: cover;
          background-repeat: no-repeat;
        }

        @media screen and (max-width: 1199px) {

          #rec505703272 .t396__artboard,
          #rec505703272 .t396__filter,
          #rec505703272 .t396__carrier {}

          #rec505703272 .t396__filter {}

          #rec505703272 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 959px) {

          #rec505703272 .t396__artboard,
          #rec505703272 .t396__filter,
          #rec505703272 .t396__carrier {
            height: 656px;
          }

          #rec505703272 .t396__filter {}

          #rec505703272 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 639px) {

          #rec505703272 .t396__artboard,
          #rec505703272 .t396__filter,
          #rec505703272 .t396__carrier {
            height: 556px;
          }

          #rec505703272 .t396__filter {}

          #rec505703272 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 479px) {

          #rec505703272 .t396__artboard,
          #rec505703272 .t396__filter,
          #rec505703272 .t396__carrier {
            height: 466px;
          }

          #rec505703272 .t396__filter {}

          #rec505703272 .t396__carrier {
            background-attachment: scroll;
          }
        }

        #rec505703272 .tn-elem[data-elem-id="1666685061273"] {
          color: #ffffff;
          z-index: 25;
          top: 46px;
          left: calc(50% - 600px + 18px);
          width: 470px;
        }

        #rec505703272 .tn-elem[data-elem-id="1666685061273"] .tn-atom {
          color: #ffffff;
          font-size: 48px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.1;
          font-weight: 600;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505703272 .tn-elem[data-elem-id="1666685061273"] {
            top: 46px;
            left: calc(50% - 480px + 18px);
            width: 306px;
          }

          #rec505703272 .tn-elem[data-elem-id="1666685061273"] .tn-atom {
            font-size: 32px;
          }
        }

        @media screen and (max-width: 959px) {
          #rec505703272 .tn-elem[data-elem-id="1666685061273"] {
            top: 0px;
            left: calc(50% - 320px + 18px);
          }

          #rec505703272 .tn-elem[data-elem-id="1666685061273"] .tn-atom {
            font-size: 32px;
          }
        }

        @media screen and (max-width: 639px) {
          #rec505703272 .tn-elem[data-elem-id="1666685061273"] {
            top: 0px;
            left: calc(50% - 240px + 20px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec505703272 .tn-elem[data-elem-id="1666685061273"] {
            top: 0px;
            left: calc(50% - 160px + 20px);
            width: 294px;
          }
        }

        #rec505703272 .tn-elem[data-elem-id="1666698618137"] {
          z-index: 32;
          top: 0px;
          left: calc(50% - 600px + 510px);
          width: 670px;
        }

        #rec505703272 .tn-elem.t396__elem--anim-hidden[data-elem-id="1666698618137"] {
          opacity: 0;
        }

        #rec505703272 .tn-elem[data-elem-id="1666698618137"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505703272 .tn-elem[data-elem-id="1666698618137"] {
            top: 0px;
            left: calc(50% - 480px + 320px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec505703272 .tn-elem[data-elem-id="1666698618137"] {
            top: 260px;
            left: calc(50% - 320px + 20px);
            width: 590px;
          }
        }

        @media screen and (max-width: 639px) {
          #rec505703272 .tn-elem[data-elem-id="1666698618137"] {
            top: 260px;
            left: calc(50% - 240px + 20px);
            width: 440px;
          }
        }

        @media screen and (max-width: 479px) {
          #rec505703272 .tn-elem[data-elem-id="1666698618137"] {
            top: 274px;
            left: calc(50% - 160px + 20px);
            width: 280px;
          }
        }

        #rec505703272 .tn-elem[data-elem-id="1666694109528"] {
          z-index: 28;
          top: 0px;
          left: calc(50% - 600px + 510px);
          width: 670px;
        }

        #rec505703272 .tn-elem[data-elem-id="1666694109528"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505703272 .tn-elem[data-elem-id="1666694109528"] {
            top: 0px;
            left: calc(50% - 480px + 320px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec505703272 .tn-elem[data-elem-id="1666694109528"] {
            top: 260px;
            left: calc(50% - 320px + 20px);
            width: 590px;
          }
        }

        @media screen and (max-width: 639px) {
          #rec505703272 .tn-elem[data-elem-id="1666694109528"] {
            top: 260px;
            left: calc(50% - 240px + 20px);
            width: 440px;
          }
        }

        @media screen and (max-width: 479px) {
          #rec505703272 .tn-elem[data-elem-id="1666694109528"] {
            top: 274px;
            left: calc(50% - 160px + 20px);
            width: 280px;
          }
        }

        #rec505703272 .tn-elem[data-elem-id="1666694187331"] {
          color: #ffffff;
          text-align: center;
          z-index: 30;
          top: 298px;
          left: calc(50% - 138.5px + -443px);
          width: 277px;
          height: 72px;
        }

        #rec505703272 .tn-elem[data-elem-id="1666694187331"] .tn-atom {
          color: #ffffff;
          font-size: 16px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.55;
          font-weight: 600;
          border-radius: 16px;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
          transition: background-color 0.2s ease-in-out,
            color 0.2s ease-in-out, border-color 0.2s ease-in-out;
        }

        @media (hover),
        (min-width: 0\0) {
          #rec505703272 .tn-elem[data-elem-id="1666694187331"] .tn-atom:hover {
            background-color: #4aa9f5;
            background-image: none;
          }
        }

        @media screen and (max-width: 1199px) {
          #rec505703272 .tn-elem[data-elem-id="1666694187331"] {
            top: 298px;
            left: calc(50% - 138.5px + -323px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec505703272 .tn-elem[data-elem-id="1666694187331"] {
            top: 160px;
            left: calc(50% - 138.5px + -161px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505703272 .tn-elem[data-elem-id="1666694187331"] {
            top: 160px;
            left: calc(50% - 138.5px + -81px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec505703272 .tn-elem[data-elem-id="1666694187331"] {
            top: 170px;
            left: calc(50% - 138.5px + -1px);
          }
        }

        #rec505703272 .tn-elem[data-elem-id="1666694187327"] {
          z-index: 27;
          top: 298px;
          left: calc(50% - 138.5px + -443px);
          width: 277px;
        }

        #rec505703272 .tn-elem[data-elem-id="1666694187327"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505703272 .tn-elem[data-elem-id="1666694187327"] {
            top: 298px;
            left: calc(50% - 138.5px + -323px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec505703272 .tn-elem[data-elem-id="1666694187327"] {
            top: 160px;
            left: calc(50% - 138.5px + -161px);
            width: 277px;
          }
        }

        @media screen and (max-width: 639px) {
          #rec505703272 .tn-elem[data-elem-id="1666694187327"] {
            top: 160px;
            left: calc(50% - 138.5px + -81px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec505703272 .tn-elem[data-elem-id="1666694187327"] {
            top: 170px;
            left: calc(50% - 138.5px + -1px);
          }
        }
      </style>
      <div class="t396">
        <div class="t396__artboard" data-artboard-height="436" data-artboard-height-res-320="466"
          data-artboard-height-res-480="556" data-artboard-height-res-640="656" data-artboard-recid="505703272"
          data-artboard-screens="320,480,640,960,1200" data-artboard-upscale="grid" data-artboard-valign="center">
          <div class="t396__carrier" data-artboard-recid="505703272"></div>
          <div class="t396__filter" data-artboard-recid="505703272"></div>
          <div class="t396__elem tn-elem tn-elem__5057032721666685061273" data-elem-id="1666685061273"
            data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="20"
            data-field-left-res-480-value="20" data-field-left-res-640-value="18" data-field-left-res-960-value="18"
            data-field-left-value="18" data-field-leftunits-value="px" data-field-top-res-320-value="0"
            data-field-top-res-480-value="0" data-field-top-res-640-value="0" data-field-top-res-960-value="46"
            data-field-top-value="46" data-field-topunits-value="px" data-field-width-res-320-value="294"
            data-field-width-res-960-value="306" data-field-width-value="470" data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666685061273">
              Сравнение с другими финансовыми инструментами
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5057032721666698618137" data-animate-mobile="y"
            data-animate-sbs-event="intoview"
            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':5000,'mx':'0','my':'0','sx':'1','sy':'1','op':0,'ro':'0','bl':'0','ea':'','dt':'0'}]"
            data-animate-sbs-trg="1" data-animate-sbs-trgofst="0" data-elem-id="1666698618137" data-elem-type="image"
            data-field-axisx-value="left" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-fileheight-value="434" data-field-filewidth-value="670" data-field-heightunits-value=""
            data-field-left-res-320-value="20" data-field-left-res-480-value="20" data-field-left-res-640-value="20"
            data-field-left-res-960-value="320" data-field-left-value="510" data-field-leftunits-value="px"
            data-field-top-res-320-value="274" data-field-top-res-480-value="260" data-field-top-res-640-value="260"
            data-field-top-res-960-value="0" data-field-top-value="0" data-field-topunits-value="px"
            data-field-width-res-320-value="280" data-field-width-res-480-value="440"
            data-field-width-res-640-value="590" data-field-width-value="670" data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img t-img" data-original="images/BW.svg" imgfield="tn_img_1666698618137" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5057032721666694109528" data-elem-id="1666694109528"
            data-elem-type="image" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-fileheight-value="434" data-field-filewidth-value="670"
            data-field-heightunits-value="" data-field-left-res-320-value="20" data-field-left-res-480-value="20"
            data-field-left-res-640-value="20" data-field-left-res-960-value="320" data-field-left-value="510"
            data-field-leftunits-value="px" data-field-top-res-320-value="274" data-field-top-res-480-value="260"
            data-field-top-res-640-value="260" data-field-top-res-960-value="0" data-field-top-value="0"
            data-field-topunits-value="px" data-field-width-res-320-value="280" data-field-width-res-480-value="440"
            data-field-width-res-640-value="590" data-field-width-value="670" data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img t-img" data-original="images/img.svg" imgfield="tn_img_1666694109528" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5057032721666694187331" data-elem-id="1666694187331"
            data-elem-type="button" data-field-axisx-value="center" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-height-value="72" data-field-heightunits-value=""
            data-field-left-res-320-value="-1" data-field-left-res-480-value="-81" data-field-left-res-640-value="-161"
            data-field-left-res-960-value="-323" data-field-left-value="-443" data-field-leftunits-value="px"
            data-field-top-res-320-value="170" data-field-top-res-480-value="160" data-field-top-res-640-value="160"
            data-field-top-res-960-value="298" data-field-top-value="298" data-field-topunits-value="px"
            data-field-width-value="277" data-field-widthunits-value="">
            <a class="tn-atom" href="#popup:embedcode">Хочу инвестировать</a>
          </div>
          <div class="t396__elem tn-elem tn-elem__5057032721666694187327" data-elem-id="1666694187327"
            data-elem-type="image" data-field-axisx-value="center" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-fileheight-value="72" data-field-filewidth-value="277"
            data-field-heightunits-value="" data-field-left-res-320-value="-1" data-field-left-res-480-value="-81"
            data-field-left-res-640-value="-161" data-field-left-res-960-value="-323" data-field-left-value="-443"
            data-field-leftunits-value="px" data-field-top-res-320-value="170" data-field-top-res-480-value="160"
            data-field-top-res-640-value="160" data-field-top-res-960-value="298" data-field-top-value="298"
            data-field-topunits-value="px" data-field-width-res-640-value="277" data-field-width-value="277"
            data-field-widthunits-value="px">
            <a class="tn-atom" href="#popup:embedcode"><img alt="" class="tn-atom__img t-img"
                data-original="images/Button.svg" imgfield="tn_img_1666694187327" /></a>
          </div>
        </div>
      </div>
      <script>
        t_onReady(function () {
          t_onFuncLoad("t396_init", function () {
            t396_init("505703272");
          });
        });
      </script>
      <!-- /T396 -->
    </div>
    <div class="r t-rec" data-animationappear="off" data-bg-color="#212122" data-record-type="121" id="rec505703707"
      style="background-color: #212122">
      <!-- T396 -->
      <style>
        #rec505703707 .t396__artboard {
          height: 96px;
        }

        #rec505703707 .t396__filter {
          height: 96px;
        }

        #rec505703707 .t396__carrier {
          height: 96px;
          background-position: center center;
          background-attachment: scroll;
          background-size: cover;
          background-repeat: no-repeat;
        }

        @media screen and (max-width: 1199px) {

          #rec505703707 .t396__artboard,
          #rec505703707 .t396__filter,
          #rec505703707 .t396__carrier {}

          #rec505703707 .t396__filter {}

          #rec505703707 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 959px) {

          #rec505703707 .t396__artboard,
          #rec505703707 .t396__filter,
          #rec505703707 .t396__carrier {
            height: 72px;
          }

          #rec505703707 .t396__filter {}

          #rec505703707 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 639px) {

          #rec505703707 .t396__artboard,
          #rec505703707 .t396__filter,
          #rec505703707 .t396__carrier {}

          #rec505703707 .t396__filter {}

          #rec505703707 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 479px) {

          #rec505703707 .t396__artboard,
          #rec505703707 .t396__filter,
          #rec505703707 .t396__carrier {}

          #rec505703707 .t396__filter {}

          #rec505703707 .t396__carrier {
            background-attachment: scroll;
          }
        }
      </style>
      <div class="t396">
        <div class="t396__artboard" data-artboard-height="96" data-artboard-height-res-640="72"
          data-artboard-recid="505703707" data-artboard-screens="320,480,640,960,1200" data-artboard-upscale="grid"
          data-artboard-valign="center">
          <div class="t396__carrier" data-artboard-recid="505703707"></div>
          <div class="t396__filter" data-artboard-recid="505703707"></div>
        </div>
      </div>
      <script>
        t_onReady(function () {
          t_onFuncLoad("t396_init", function () {
            t396_init("505703707");
          });
        });
      </script>
      <!-- /T396 -->
    </div>
    <div class="r t-rec" data-animationappear="off" data-bg-color="#000000" data-record-type="396" id="rec505773785"
      style="background-color: #000000">
      <!-- T396 -->
      <style>
        #rec505773785 .t396__artboard {
          height: 96px;
        }

        #rec505773785 .t396__filter {
          height: 96px;
        }

        #rec505773785 .t396__carrier {
          height: 96px;
          background-position: center center;
          background-attachment: scroll;
          background-size: cover;
          background-repeat: no-repeat;
        }

        @media screen and (max-width: 1199px) {

          #rec505773785 .t396__artboard,
          #rec505773785 .t396__filter,
          #rec505773785 .t396__carrier {}

          #rec505773785 .t396__filter {}

          #rec505773785 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 959px) {

          #rec505773785 .t396__artboard,
          #rec505773785 .t396__filter,
          #rec505773785 .t396__carrier {}

          #rec505773785 .t396__filter {}

          #rec505773785 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 639px) {

          #rec505773785 .t396__artboard,
          #rec505773785 .t396__filter,
          #rec505773785 .t396__carrier {}

          #rec505773785 .t396__filter {}

          #rec505773785 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 479px) {

          #rec505773785 .t396__artboard,
          #rec505773785 .t396__filter,
          #rec505773785 .t396__carrier {}

          #rec505773785 .t396__filter {}

          #rec505773785 .t396__carrier {
            background-attachment: scroll;
          }
        }
      </style>
      <div class="t396">
        <div class="t396__artboard" data-artboard-height="96" data-artboard-recid="505773785"
          data-artboard-screens="320,480,640,960,1200" data-artboard-upscale="grid" data-artboard-valign="center">
          <div class="t396__carrier" data-artboard-recid="505773785"></div>
          <div class="t396__filter" data-artboard-recid="505773785"></div>
        </div>
      </div>
      <script>
        t_onReady(function () {
          t_onFuncLoad("t396_init", function () {
            t396_init("505773785");
          });
        });
      </script>
      <!-- /T396 -->
    </div>
    <div class="r t-rec" data-animationappear="off" data-record-type="396" id="rec505773197" style="">
      <!-- T396 -->
      <style>
        #rec505773197 .t396__artboard {
          height: 616px;
          background-color: #000000;
        }

        #rec505773197 .t396__filter {
          height: 616px;
        }

        #rec505773197 .t396__carrier {
          height: 616px;
          background-position: center center;
          background-attachment: scroll;
          background-size: cover;
          background-repeat: no-repeat;
        }

        @media screen and (max-width: 1199px) {

          #rec505773197 .t396__artboard,
          #rec505773197 .t396__filter,
          #rec505773197 .t396__carrier {}

          #rec505773197 .t396__filter {}

          #rec505773197 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 959px) {

          #rec505773197 .t396__artboard,
          #rec505773197 .t396__filter,
          #rec505773197 .t396__carrier {
            height: 906px;
          }

          #rec505773197 .t396__filter {}

          #rec505773197 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 639px) {

          #rec505773197 .t396__artboard,
          #rec505773197 .t396__filter,
          #rec505773197 .t396__carrier {
            height: 806px;
          }

          #rec505773197 .t396__filter {}

          #rec505773197 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 479px) {

          #rec505773197 .t396__artboard,
          #rec505773197 .t396__filter,
          #rec505773197 .t396__carrier {
            height: 1256px;
          }

          #rec505773197 .t396__artboard {
            background-color: #000000;
          }

          #rec505773197 .t396__filter {}

          #rec505773197 .t396__carrier {
            background-position: center center;
            background-attachment: scroll;
          }
        }

        #rec505773197 .tn-elem[data-elem-id="1666699726848"] {
          color: #ffffff;
          z-index: 6;
          top: 0px;
          left: calc(50% - 600px + 20px);
          width: 1087px;
        }

        #rec505773197 .tn-elem[data-elem-id="1666699726848"] .tn-atom {
          color: #ffffff;
          font-size: 48px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.2;
          font-weight: 600;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505773197 .tn-elem[data-elem-id="1666699726848"] {
            top: 0px;
            width: 953px;
          }
        }

        @media screen and (max-width: 959px) {
          #rec505773197 .tn-elem[data-elem-id="1666699726848"] {
            top: 0px;
            left: calc(50% - 320px + 20px);
            width: 590px;
          }

          #rec505773197 .tn-elem[data-elem-id="1666699726848"] .tn-atom {
            font-size: 32px;
          }
        }

        @media screen and (max-width: 639px) {
          #rec505773197 .tn-elem[data-elem-id="1666699726848"] {
            top: 0px;
            left: calc(50% - 240px + 20px);
            width: 460px;
          }
        }

        @media screen and (max-width: 479px) {
          #rec505773197 .tn-elem[data-elem-id="1666699726848"] {
            top: 0px;
            left: calc(50% - 160px + 20px);
            width: 271px;
          }
        }

        #rec505773197 .tn-elem[data-elem-id="1666701252179"] {
          z-index: 1;
          top: calc(616px + 60px);
          left: calc(50% - 600px + 740px);
          width: 495px;
        }

        #rec505773197 .tn-elem[data-elem-id="1666701252179"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {}

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec505773197 .tn-elem[data-elem-id="1666701252179"] {
            top: calc(616px + -1438px);
            left: calc(50% - 160px + 120px);
            width: 109px;
          }
        }

        #rec505773197 .tn-elem[data-elem-id="1666701408578"] {
          z-index: 29;
          top: 168px;
          left: calc(50% - 600px + 20px);
          width: 56px;
        }

        #rec505773197 .tn-elem[data-elem-id="1666701408578"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {
          #rec505773197 .tn-elem[data-elem-id="1666701408578"] {
            top: 118px;
            left: calc(50% - 320px + 20px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505773197 .tn-elem[data-elem-id="1666701408578"] {
            top: 148px;
            left: calc(50% - 240px + 20px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec505773197 .tn-elem[data-elem-id="1666701408578"] {
            top: 262px;
            left: calc(50% - 160px + 20px);
          }
        }

        #rec505773197 .tn-elem[data-elem-id="1666699836009"] {
          color: #ffffff;
          z-index: 18;
          top: 200px;
          left: calc(50% - 600px + 92px);
          width: 300px;
        }

        #rec505773197 .tn-elem[data-elem-id="1666699836009"] .tn-atom {
          color: #ffffff;
          font-size: 14px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.55;
          font-weight: 400;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {
          #rec505773197 .tn-elem[data-elem-id="1666699836009"] {
            top: 150px;
            left: calc(50% - 320px + 92px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505773197 .tn-elem[data-elem-id="1666699836009"] {
            top: 180px;
            left: calc(50% - 240px + 92px);
          }

          #rec505773197 .tn-elem[data-elem-id="1666699836009"] .tn-atom {
            line-height: 1.3;
          }
        }

        @media screen and (max-width: 479px) {
          #rec505773197 .tn-elem[data-elem-id="1666699836009"] {
            top: 294px;
            left: calc(50% - 160px + 92px);
            width: 189px;
          }
        }

        #rec505773197 .tn-elem[data-elem-id="1666699821019"] {
          color: #ffffff;
          z-index: 7;
          top: 168px;
          left: calc(50% - 600px + 92px);
          width: 300px;
        }

        #rec505773197 .tn-elem[data-elem-id="1666699821019"] .tn-atom {
          color: #ffffff;
          font-size: 18px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.55;
          font-weight: 600;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {
          #rec505773197 .tn-elem[data-elem-id="1666699821019"] {
            top: 118px;
            left: calc(50% - 320px + 92px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505773197 .tn-elem[data-elem-id="1666699821019"] {
            top: 148px;
            left: calc(50% - 240px + 92px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec505773197 .tn-elem[data-elem-id="1666699821019"] {
            top: 262px;
            left: calc(50% - 160px + 92px);
          }
        }

        #rec505773197 .tn-elem[data-elem-id="1666701512908"] {
          z-index: 32;
          top: 314px;
          left: calc(50% - 600px + 20px);
          width: 56px;
        }

        #rec505773197 .tn-elem[data-elem-id="1666701512908"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {
          #rec505773197 .tn-elem[data-elem-id="1666701512908"] {
            top: 245px;
            left: calc(50% - 320px + 20px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505773197 .tn-elem[data-elem-id="1666701512908"] {
            top: 254px;
            left: calc(50% - 240px + 20px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec505773197 .tn-elem[data-elem-id="1666701512908"] {
            top: 434px;
            left: calc(50% - 160px + 20px);
          }
        }

        #rec505773197 .tn-elem[data-elem-id="1666701512913"] {
          color: #ffffff;
          z-index: 21;
          top: 346px;
          left: calc(50% - 600px + 92px);
          width: 300px;
        }

        #rec505773197 .tn-elem[data-elem-id="1666701512913"] .tn-atom {
          color: #ffffff;
          font-size: 14px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.55;
          font-weight: 400;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {
          #rec505773197 .tn-elem[data-elem-id="1666701512913"] {
            top: 277px;
            left: calc(50% - 320px + 92px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505773197 .tn-elem[data-elem-id="1666701512913"] {
            top: 286px;
            left: calc(50% - 240px + 92px);
          }

          #rec505773197 .tn-elem[data-elem-id="1666701512913"] .tn-atom {
            line-height: 1.3;
          }
        }

        @media screen and (max-width: 479px) {
          #rec505773197 .tn-elem[data-elem-id="1666701512913"] {
            top: 466px;
            left: calc(50% - 160px + 92px);
            width: 214px;
          }
        }

        #rec505773197 .tn-elem[data-elem-id="1666701512918"] {
          color: #ffffff;
          z-index: 10;
          top: 314px;
          left: calc(50% - 600px + 92px);
          width: 300px;
        }

        #rec505773197 .tn-elem[data-elem-id="1666701512918"] .tn-atom {
          color: #ffffff;
          font-size: 18px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.55;
          font-weight: 600;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {
          #rec505773197 .tn-elem[data-elem-id="1666701512918"] {
            top: 245px;
            left: calc(50% - 320px + 92px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505773197 .tn-elem[data-elem-id="1666701512918"] {
            top: 254px;
            left: calc(50% - 240px + 92px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec505773197 .tn-elem[data-elem-id="1666701512918"] {
            top: 434px;
            left: calc(50% - 160px + 92px);
          }
        }

        #rec505773197 .tn-elem[data-elem-id="1666701522320"] {
          z-index: 30;
          top: 168px;
          left: calc(50% - 600px + 422px);
          width: 56px;
        }

        #rec505773197 .tn-elem[data-elem-id="1666701522320"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {
          #rec505773197 .tn-elem[data-elem-id="1666701522320"] {
            top: 543px;
            left: calc(50% - 320px + 20px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505773197 .tn-elem[data-elem-id="1666701522320"] {
            top: 502px;
            left: calc(50% - 240px + 13px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec505773197 .tn-elem[data-elem-id="1666701522320"] {
            top: 760px;
            left: calc(50% - 160px + 20px);
          }
        }

        #rec505773197 .tn-elem[data-elem-id="1666701522324"] {
          color: #ffffff;
          z-index: 19;
          top: 200px;
          left: calc(50% - 600px + 494px);
          width: 282px;
        }

        #rec505773197 .tn-elem[data-elem-id="1666701522324"] .tn-atom {
          color: #ffffff;
          font-size: 14px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.55;
          font-weight: 400;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {
          #rec505773197 .tn-elem[data-elem-id="1666701522324"] {
            top: 575px;
            left: calc(50% - 320px + 92px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505773197 .tn-elem[data-elem-id="1666701522324"] {
            top: 534px;
            left: calc(50% - 240px + 85px);
          }

          #rec505773197 .tn-elem[data-elem-id="1666701522324"] .tn-atom {
            line-height: 1.3;
          }
        }

        @media screen and (max-width: 479px) {
          #rec505773197 .tn-elem[data-elem-id="1666701522324"] {
            top: 792px;
            left: calc(50% - 160px + 92px);
            width: 161px;
          }
        }

        #rec505773197 .tn-elem[data-elem-id="1666701522328"] {
          color: #ffffff;
          z-index: 8;
          top: 168px;
          left: calc(50% - 600px + 494px);
          width: 300px;
        }

        #rec505773197 .tn-elem[data-elem-id="1666701522328"] .tn-atom {
          color: #ffffff;
          font-size: 18px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.55;
          font-weight: 600;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {
          #rec505773197 .tn-elem[data-elem-id="1666701522328"] {
            top: 543px;
            left: calc(50% - 320px + 92px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505773197 .tn-elem[data-elem-id="1666701522328"] {
            top: 502px;
            left: calc(50% - 240px + 85px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec505773197 .tn-elem[data-elem-id="1666701522328"] {
            top: 760px;
            left: calc(50% - 160px + 92px);
          }
        }

        #rec505773197 .tn-elem[data-elem-id="1666701539288"] {
          z-index: 35;
          top: 314px;
          left: calc(50% - 600px + 422px);
          width: 56px;
        }

        #rec505773197 .tn-elem[data-elem-id="1666701539288"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {
          #rec505773197 .tn-elem[data-elem-id="1666701539288"] {
            top: 670px;
            left: calc(50% - 320px + 20px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505773197 .tn-elem[data-elem-id="1666701539288"] {
            top: 608px;
            left: calc(50% - 240px + 13px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec505773197 .tn-elem[data-elem-id="1666701539288"] {
            top: 932px;
            left: calc(50% - 160px + 20px);
          }
        }

        #rec505773197 .tn-elem[data-elem-id="1666701539294"] {
          color: #ffffff;
          z-index: 24;
          top: 346px;
          left: calc(50% - 600px + 494px);
          width: 233px;
        }

        #rec505773197 .tn-elem[data-elem-id="1666701539294"] .tn-atom {
          color: #ffffff;
          font-size: 14px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.55;
          font-weight: 400;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {
          #rec505773197 .tn-elem[data-elem-id="1666701539294"] {
            top: 702px;
            left: calc(50% - 320px + 92px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505773197 .tn-elem[data-elem-id="1666701539294"] {
            top: 640px;
            left: calc(50% - 240px + 85px);
          }

          #rec505773197 .tn-elem[data-elem-id="1666701539294"] .tn-atom {
            line-height: 1.3;
          }
        }

        @media screen and (max-width: 479px) {
          #rec505773197 .tn-elem[data-elem-id="1666701539294"] {
            top: 964px;
            left: calc(50% - 160px + 92px);
            width: 169px;
          }
        }

        #rec505773197 .tn-elem[data-elem-id="1666701539296"] {
          color: #ffffff;
          z-index: 13;
          top: 314px;
          left: calc(50% - 600px + 494px);
          width: 300px;
        }

        #rec505773197 .tn-elem[data-elem-id="1666701539296"] .tn-atom {
          color: #ffffff;
          font-size: 18px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.55;
          font-weight: 600;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {
          #rec505773197 .tn-elem[data-elem-id="1666701539296"] {
            top: 670px;
            left: calc(50% - 320px + 92px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505773197 .tn-elem[data-elem-id="1666701539296"] {
            top: 608px;
            left: calc(50% - 240px + 85px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec505773197 .tn-elem[data-elem-id="1666701539296"] {
            top: 932px;
            left: calc(50% - 160px + 92px);
          }
        }

        #rec505773197 .tn-elem[data-elem-id="1666701548623"] {
          z-index: 33;
          top: 504px;
          left: calc(50% - 600px + 20px);
          width: 56px;
        }

        #rec505773197 .tn-elem[data-elem-id="1666701548623"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {
          #rec505773197 .tn-elem[data-elem-id="1666701548623"] {
            top: 416px;
            left: calc(50% - 320px + 20px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505773197 .tn-elem[data-elem-id="1666701548623"] {
            top: 396px;
            left: calc(50% - 240px + 20px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec505773197 .tn-elem[data-elem-id="1666701548623"] {
            top: 642px;
            left: calc(50% - 160px + 20px);
          }
        }

        #rec505773197 .tn-elem[data-elem-id="1666701548630"] {
          color: #ffffff;
          z-index: 22;
          top: 536px;
          left: calc(50% - 600px + 92px);
          width: 300px;
        }

        #rec505773197 .tn-elem[data-elem-id="1666701548630"] .tn-atom {
          color: #ffffff;
          font-size: 14px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.55;
          font-weight: 400;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {
          #rec505773197 .tn-elem[data-elem-id="1666701548630"] {
            top: 448px;
            left: calc(50% - 320px + 92px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505773197 .tn-elem[data-elem-id="1666701548630"] {
            top: 428px;
            left: calc(50% - 240px + 92px);
          }

          #rec505773197 .tn-elem[data-elem-id="1666701548630"] .tn-atom {
            line-height: 1.3;
          }
        }

        @media screen and (max-width: 479px) {
          #rec505773197 .tn-elem[data-elem-id="1666701548630"] {
            top: 674px;
            left: calc(50% - 160px + 92px);
            width: 238px;
          }
        }

        #rec505773197 .tn-elem[data-elem-id="1666701548634"] {
          color: #ffffff;
          z-index: 11;
          top: 504px;
          left: calc(50% - 600px + 92px);
          width: 300px;
        }

        #rec505773197 .tn-elem[data-elem-id="1666701548634"] .tn-atom {
          color: #ffffff;
          font-size: 18px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.55;
          font-weight: 600;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {
          #rec505773197 .tn-elem[data-elem-id="1666701548634"] {
            top: 416px;
            left: calc(50% - 320px + 92px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505773197 .tn-elem[data-elem-id="1666701548634"] {
            top: 396px;
            left: calc(50% - 240px + 92px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec505773197 .tn-elem[data-elem-id="1666701548634"] {
            top: 642px;
            left: calc(50% - 160px + 92px);
          }
        }

        #rec505773197 .tn-elem[data-elem-id="1666701548641"] {
          z-index: 36;
          top: 504px;
          left: calc(50% - 600px + 422px);
          width: 56px;
        }

        #rec505773197 .tn-elem[data-elem-id="1666701548641"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {
          #rec505773197 .tn-elem[data-elem-id="1666701548641"] {
            top: 797px;
            left: calc(50% - 320px + 20px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505773197 .tn-elem[data-elem-id="1666701548641"] {
            top: 714px;
            left: calc(50% - 240px + 13px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec505773197 .tn-elem[data-elem-id="1666701548641"] {
            top: 1104px;
            left: calc(50% - 160px + 20px);
          }
        }

        #rec505773197 .tn-elem[data-elem-id="1666701548646"] {
          color: #ffffff;
          z-index: 25;
          top: 536px;
          left: calc(50% - 600px + 494px);
          width: 300px;
        }

        #rec505773197 .tn-elem[data-elem-id="1666701548646"] .tn-atom {
          color: #ffffff;
          font-size: 14px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.55;
          font-weight: 400;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {
          #rec505773197 .tn-elem[data-elem-id="1666701548646"] {
            top: 829px;
            left: calc(50% - 320px + 92px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505773197 .tn-elem[data-elem-id="1666701548646"] {
            top: 746px;
            left: calc(50% - 240px + 85px);
          }

          #rec505773197 .tn-elem[data-elem-id="1666701548646"] .tn-atom {
            line-height: 1.3;
          }
        }

        @media screen and (max-width: 479px) {
          #rec505773197 .tn-elem[data-elem-id="1666701548646"] {
            top: 1154px;
            left: calc(50% - 160px + 92px);
            width: 196px;
          }
        }

        #rec505773197 .tn-elem[data-elem-id="1666701548650"] {
          color: #ffffff;
          z-index: 14;
          top: 504px;
          left: calc(50% - 600px + 494px);
          width: 300px;
        }

        #rec505773197 .tn-elem[data-elem-id="1666701548650"] .tn-atom {
          color: #ffffff;
          font-size: 18px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.55;
          font-weight: 600;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {
          #rec505773197 .tn-elem[data-elem-id="1666701548650"] {
            top: 797px;
            left: calc(50% - 320px + 92px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505773197 .tn-elem[data-elem-id="1666701548650"] {
            top: 714px;
            left: calc(50% - 240px + 85px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec505773197 .tn-elem[data-elem-id="1666701548650"] {
            top: 1104px;
            left: calc(50% - 160px + 92px);
            width: 196px;
          }

          #rec505773197 .tn-elem[data-elem-id="1666701548650"] .tn-atom {
            line-height: 1.3;
          }
        }
      </style>
      <div class="t396">
        <div class="t396__artboard" data-artboard-height="616" data-artboard-height-res-320="1256"
          data-artboard-height-res-480="806" data-artboard-height-res-640="906" data-artboard-recid="505773197"
          data-artboard-screens="320,480,640,960,1200" data-artboard-upscale="grid" data-artboard-upscale-res-320="grid"
          data-artboard-valign="center">
          <div class="t396__carrier" data-artboard-recid="505773197"></div>
          <div class="t396__filter" data-artboard-recid="505773197"></div>
          <div class="t396__elem tn-elem tn-elem__5057731971666699726848" data-elem-id="1666699726848"
            data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="20"
            data-field-left-res-480-value="20" data-field-left-res-640-value="20" data-field-left-value="20"
            data-field-leftunits-value="px" data-field-top-res-320-value="0" data-field-top-res-480-value="0"
            data-field-top-res-640-value="0" data-field-top-res-960-value="0" data-field-top-value="0"
            data-field-topunits-value="px" data-field-width-res-320-value="271" data-field-width-res-480-value="460"
            data-field-width-res-640-value="590" data-field-width-res-960-value="953" data-field-width-value="1087"
            data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666699726848">
              Для кого подойдут инвестиции через платформу
              <span style="color: rgb(81, 169, 238)">Penenza</span>
            </div>
          </div>
          <div
              class="t396__elem tn-elem tn-elem__5057731971666701252179"
              data-elem-id="1666701252179"
              data-elem-type="image"
              data-field-top-value="60"
              data-field-left-value="740"
              data-field-width-value="495"
              data-field-axisy-value="bottom"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-field-filewidth-value="495"
              data-field-fileheight-value="670"
              data-field-top-res-320-value="-1438"
              data-field-left-res-320-value="120"
              data-field-width-res-320-value="109"
            >
              <div class="tn-atom">
                <img
                  class="tn-atom__img t-img"
                  data-original="https://static.tildacdn.com/tild3363-3266-4533-a530-326363373866/Photo.png"
                  alt=""
                  imgfield="tn_img_1666701252179"
                />
              </div>
            </div>
          <div class="t396__elem tn-elem tn-elem__5057731971666701408578" data-elem-id="1666701408578"
            data-elem-type="image" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="20"
            data-field-left-res-480-value="20" data-field-left-res-640-value="20" data-field-left-value="20"
            data-field-leftunits-value="px" data-field-top-res-320-value="262" data-field-top-res-480-value="148"
            data-field-top-res-640-value="118" data-field-top-value="168" data-field-topunits-value="px"
            data-field-width-value="56" data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img t-img" data-original="images/icon_1.svg"
                imgfield="tn_img_1666701408578" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5057731971666699836009" data-elem-id="1666699836009"
            data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="92"
            data-field-left-res-480-value="92" data-field-left-res-640-value="92" data-field-left-value="92"
            data-field-leftunits-value="px" data-field-top-res-320-value="294" data-field-top-res-480-value="180"
            data-field-top-res-640-value="150" data-field-top-value="200" data-field-topunits-value="px"
            data-field-width-res-320-value="189" data-field-width-value="300" data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666699836009">
              Хотите наладить пассивный доход <br />и получать до 30 % годовых
              на надежных финансовых инструментах
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5057731971666699821019" data-elem-id="1666699821019"
            data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="92"
            data-field-left-res-480-value="92" data-field-left-res-640-value="92" data-field-left-value="92"
            data-field-leftunits-value="px" data-field-top-res-320-value="262" data-field-top-res-480-value="148"
            data-field-top-res-640-value="118" data-field-top-value="168" data-field-topunits-value="px"
            data-field-width-value="300" data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666699821019">
              Пассивный доход
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5057731971666701512908" data-elem-id="1666701512908"
            data-elem-type="image" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="20"
            data-field-left-res-480-value="20" data-field-left-res-640-value="20" data-field-left-value="20"
            data-field-leftunits-value="px" data-field-top-res-320-value="434" data-field-top-res-480-value="254"
            data-field-top-res-640-value="245" data-field-top-value="314" data-field-topunits-value="px"
            data-field-width-value="56" data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img t-img" data-original="images/icon_2.svg"
                imgfield="tn_img_1666701512908" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5057731971666701512913" data-elem-id="1666701512913"
            data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="92"
            data-field-left-res-480-value="92" data-field-left-res-640-value="92" data-field-left-value="92"
            data-field-leftunits-value="px" data-field-top-res-320-value="466" data-field-top-res-480-value="286"
            data-field-top-res-640-value="277" data-field-top-value="346" data-field-topunits-value="px"
            data-field-width-res-320-value="214" data-field-width-value="300" data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666701512913">
              Инвестиции на Penenza подойдут, как новичку в инвестициях,
              который боится ошибиться и потерять деньги, так и опытному
              инвестору для диверсификации своего портфеля
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5057731971666701512918" data-elem-id="1666701512918"
            data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="92"
            data-field-left-res-480-value="92" data-field-left-res-640-value="92" data-field-left-value="92"
            data-field-leftunits-value="px" data-field-top-res-320-value="434" data-field-top-res-480-value="254"
            data-field-top-res-640-value="245" data-field-top-value="314" data-field-topunits-value="px"
            data-field-width-value="300" data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666701512918">
              Новичок или опытный
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5057731971666701522320" data-elem-id="1666701522320"
            data-elem-type="image" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="20"
            data-field-left-res-480-value="13" data-field-left-res-640-value="20" data-field-left-value="422"
            data-field-leftunits-value="px" data-field-top-res-320-value="760" data-field-top-res-480-value="502"
            data-field-top-res-640-value="543" data-field-top-value="168" data-field-topunits-value="px"
            data-field-width-value="56" data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img t-img" data-original="images/icon_4.svg"
                imgfield="tn_img_1666701522320" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5057731971666701522324" data-elem-id="1666701522324"
            data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="92"
            data-field-left-res-480-value="85" data-field-left-res-640-value="92" data-field-left-value="494"
            data-field-leftunits-value="px" data-field-top-res-320-value="792" data-field-top-res-480-value="534"
            data-field-top-res-640-value="575" data-field-top-value="200" data-field-topunits-value="px"
            data-field-width-res-320-value="161" data-field-width-value="282" data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666701522324">
              Вам некогда вникать в детали, изучать отчетности компаний и
              тонкости стратегий инвестирования
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5057731971666701522328" data-elem-id="1666701522328"
            data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="92"
            data-field-left-res-480-value="85" data-field-left-res-640-value="92" data-field-left-value="494"
            data-field-leftunits-value="px" data-field-top-res-320-value="760" data-field-top-res-480-value="502"
            data-field-top-res-640-value="543" data-field-top-value="168" data-field-topunits-value="px"
            data-field-width-value="300" data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666701522328">
              Нет времени
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5057731971666701539288" data-elem-id="1666701539288"
            data-elem-type="image" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="20"
            data-field-left-res-480-value="13" data-field-left-res-640-value="20" data-field-left-value="422"
            data-field-leftunits-value="px" data-field-top-res-320-value="932" data-field-top-res-480-value="608"
            data-field-top-res-640-value="670" data-field-top-value="314" data-field-topunits-value="px"
            data-field-width-value="56" data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img t-img" data-original="images/icon_5.svg"
                imgfield="tn_img_1666701539288" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5057731971666701539294" data-elem-id="1666701539294"
            data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="92"
            data-field-left-res-480-value="85" data-field-left-res-640-value="92" data-field-left-value="494"
            data-field-leftunits-value="px" data-field-top-res-320-value="964" data-field-top-res-480-value="640"
            data-field-top-res-640-value="702" data-field-top-value="346" data-field-topunits-value="px"
            data-field-width-res-320-value="169" data-field-width-value="233" data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666701539294">
              Вас не устраивают проценты по вкладам или уровень риска <br />на
              рынке ценных бумаг
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5057731971666701539296" data-elem-id="1666701539296"
            data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="92"
            data-field-left-res-480-value="85" data-field-left-res-640-value="92" data-field-left-value="494"
            data-field-leftunits-value="px" data-field-top-res-320-value="932" data-field-top-res-480-value="608"
            data-field-top-res-640-value="670" data-field-top-value="314" data-field-topunits-value="px"
            data-field-width-value="300" data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666701539296">
              Ищете альтернативу
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5057731971666701548623" data-elem-id="1666701548623"
            data-elem-type="image" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="20"
            data-field-left-res-480-value="20" data-field-left-res-640-value="20" data-field-left-value="20"
            data-field-leftunits-value="px" data-field-top-res-320-value="642" data-field-top-res-480-value="396"
            data-field-top-res-640-value="416" data-field-top-value="504" data-field-topunits-value="px"
            data-field-width-value="56" data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img t-img" data-original="images/icon_3.svg"
                imgfield="tn_img_1666701548623" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5057731971666701548630" data-elem-id="1666701548630"
            data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="92"
            data-field-left-res-480-value="92" data-field-left-res-640-value="92" data-field-left-value="92"
            data-field-leftunits-value="px" data-field-top-res-320-value="674" data-field-top-res-480-value="428"
            data-field-top-res-640-value="448" data-field-top-value="536" data-field-topunits-value="px"
            data-field-width-res-320-value="238" data-field-width-value="300" data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666701548630">
              Ищете инвестиции с низким порогом входа, где не нужны миллионы
              для старта
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5057731971666701548634" data-elem-id="1666701548634"
            data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="92"
            data-field-left-res-480-value="92" data-field-left-res-640-value="92" data-field-left-value="92"
            data-field-leftunits-value="px" data-field-top-res-320-value="642" data-field-top-res-480-value="396"
            data-field-top-res-640-value="416" data-field-top-value="504" data-field-topunits-value="px"
            data-field-width-value="300" data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666701548634">
              Низкий порог
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5057731971666701548641" data-elem-id="1666701548641"
            data-elem-type="image" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="20"
            data-field-left-res-480-value="13" data-field-left-res-640-value="20" data-field-left-value="422"
            data-field-leftunits-value="px" data-field-top-res-320-value="1104" data-field-top-res-480-value="714"
            data-field-top-res-640-value="797" data-field-top-value="504" data-field-topunits-value="px"
            data-field-width-value="56" data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img t-img" data-original="images/icon_6.svg"
                imgfield="tn_img_1666701548641" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5057731971666701548646" data-elem-id="1666701548646"
            data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="92"
            data-field-left-res-480-value="85" data-field-left-res-640-value="92" data-field-left-value="494"
            data-field-leftunits-value="px" data-field-top-res-320-value="1154" data-field-top-res-480-value="746"
            data-field-top-res-640-value="829" data-field-top-value="536" data-field-topunits-value="px"
            data-field-width-res-320-value="196" data-field-width-value="300" data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666701548646">
              Хотите иметь возможность легко и быстро вывести деньги, не
              потеряв начисленные проценты
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5057731971666701548650" data-elem-id="1666701548650"
            data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="92"
            data-field-left-res-480-value="85" data-field-left-res-640-value="92" data-field-left-value="494"
            data-field-leftunits-value="px" data-field-top-res-320-value="1104" data-field-top-res-480-value="714"
            data-field-top-res-640-value="797" data-field-top-value="504" data-field-topunits-value="px"
            data-field-width-res-320-value="196" data-field-width-value="300" data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666701548650">
              Легкий вывод средств
            </div>
          </div>
        </div>
      </div>
      <script>
        t_onReady(function () {
          t_onFuncLoad("t396_init", function () {
            t396_init("505773197");
          });
        });
      </script>
      <!-- /T396 -->
    </div>
    <div class="r t-rec" data-animationappear="off" data-bg-color="#000000" data-record-type="121" id="rec505773785"
      style="background-color: #000000">
      <!-- T396 -->
      <style>
        #rec505773785 .t396__artboard {
          height: 96px;
        }

        #rec505773785 .t396__filter {
          height: 96px;
        }

        #rec505773785 .t396__carrier {
          height: 96px;
          background-position: center center;
          background-attachment: scroll;
          background-size: cover;
          background-repeat: no-repeat;
        }

        @media screen and (max-width: 1199px) {

          #rec505773785 .t396__artboard,
          #rec505773785 .t396__filter,
          #rec505773785 .t396__carrier {}

          #rec505773785 .t396__filter {}

          #rec505773785 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 959px) {

          #rec505773785 .t396__artboard,
          #rec505773785 .t396__filter,
          #rec505773785 .t396__carrier {}

          #rec505773785 .t396__filter {}

          #rec505773785 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 639px) {

          #rec505773785 .t396__artboard,
          #rec505773785 .t396__filter,
          #rec505773785 .t396__carrier {}

          #rec505773785 .t396__filter {}

          #rec505773785 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 479px) {

          #rec505773785 .t396__artboard,
          #rec505773785 .t396__filter,
          #rec505773785 .t396__carrier {}

          #rec505773785 .t396__filter {}

          #rec505773785 .t396__carrier {
            background-attachment: scroll;
          }
        }
      </style>
      <div class="t396">
        <div class="t396__artboard" data-artboard-height="96" data-artboard-recid="505773785"
          data-artboard-screens="320,480,640,960,1200" data-artboard-upscale="grid" data-artboard-valign="center">
          <div class="t396__carrier" data-artboard-recid="505773785"></div>
          <div class="t396__filter" data-artboard-recid="505773785"></div>
        </div>
      </div>
      <script>
        t_onReady(function () {
          t_onFuncLoad("t396_init", function () {
            t396_init("505773785");
          });
        });
      </script>
      <!-- /T396 -->
    </div>
    <div class="r t-rec" data-animationappear="off" data-bg-color="#fafafa" data-record-type="396" id="rec505941482"
      style="background-color: #fafafa">
      <!-- T396 -->
      <style>
        #rec505941482 .t396__artboard {
          height: 96px;
        }

        #rec505941482 .t396__filter {
          height: 96px;
        }

        #rec505941482 .t396__carrier {
          height: 96px;
          background-position: center center;
          background-attachment: scroll;
          background-size: cover;
          background-repeat: no-repeat;
        }

        @media screen and (max-width: 1199px) {

          #rec505941482 .t396__artboard,
          #rec505941482 .t396__filter,
          #rec505941482 .t396__carrier {}

          #rec505941482 .t396__filter {}

          #rec505941482 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 959px) {

          #rec505941482 .t396__artboard,
          #rec505941482 .t396__filter,
          #rec505941482 .t396__carrier {}

          #rec505941482 .t396__filter {}

          #rec505941482 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 639px) {

          #rec505941482 .t396__artboard,
          #rec505941482 .t396__filter,
          #rec505941482 .t396__carrier {}

          #rec505941482 .t396__filter {}

          #rec505941482 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 479px) {

          #rec505941482 .t396__artboard,
          #rec505941482 .t396__filter,
          #rec505941482 .t396__carrier {}

          #rec505941482 .t396__filter {}

          #rec505941482 .t396__carrier {
            background-attachment: scroll;
          }
        }
      </style>
      <div class="t396">
        <div class="t396__artboard" data-artboard-height="96" data-artboard-recid="505941482"
          data-artboard-screens="320,480,640,960,1200" data-artboard-upscale="grid" data-artboard-valign="center">
          <div class="t396__carrier" data-artboard-recid="505941482"></div>
          <div class="t396__filter" data-artboard-recid="505941482"></div>
        </div>
      </div>
      <script>
        t_onReady(function () {
          t_onFuncLoad("t396_init", function () {
            t396_init("505941482");
          });
        });
      </script>
      <!-- /T396 -->
    </div>
    <div class="r t-rec" data-animationappear="off" data-record-type="396" id="rec505936862" style="">
      <!-- T396 -->
      <style>
        #rec505936862 .t396__artboard {
          height: 756px;
          background-color: #fafafa;
        }

        #rec505936862 .t396__filter {
          height: 756px;
        }

        #rec505936862 .t396__carrier {
          height: 756px;
          background-position: center center;
          background-attachment: scroll;
          background-size: cover;
          background-repeat: no-repeat;
        }

        @media screen and (max-width: 1199px) {

          #rec505936862 .t396__artboard,
          #rec505936862 .t396__filter,
          #rec505936862 .t396__carrier {
            height: 1066px;
          }

          #rec505936862 .t396__filter {}

          #rec505936862 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 959px) {

          #rec505936862 .t396__artboard,
          #rec505936862 .t396__filter,
          #rec505936862 .t396__carrier {
            height: 1346px;
          }

          #rec505936862 .t396__filter {}

          #rec505936862 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 639px) {

          #rec505936862 .t396__artboard,
          #rec505936862 .t396__filter,
          #rec505936862 .t396__carrier {
            height: 1766px;
          }

          #rec505936862 .t396__filter {}

          #rec505936862 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 479px) {

          #rec505936862 .t396__artboard,
          #rec505936862 .t396__filter,
          #rec505936862 .t396__carrier {
            height: 2066px;
          }

          #rec505936862 .t396__filter {}

          #rec505936862 .t396__carrier {
            background-position: center center;
            background-attachment: scroll;
          }
        }

        #rec505936862 .tn-elem[data-elem-id="1666699726848"] {
          color: #000000;
          z-index: 6;
          top: 0px;
          left: calc(50% - 600px + 20px);
          width: 780px;
        }

        #rec505936862 .tn-elem[data-elem-id="1666699726848"] .tn-atom {
          color: #000000;
          font-size: 48px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.2;
          font-weight: 600;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505936862 .tn-elem[data-elem-id="1666699726848"] {
            top: 0px;
            left: calc(50% - 480px + 10px);
            width: 873px;
          }
        }

        @media screen and (max-width: 959px) {
          #rec505936862 .tn-elem[data-elem-id="1666699726848"] {
            top: 0px;
            left: calc(50% - 320px + 10px);
            width: 545px;
          }

          #rec505936862 .tn-elem[data-elem-id="1666699726848"] .tn-atom {
            font-size: 32px;
          }
        }

        @media screen and (max-width: 639px) {
          #rec505936862 .tn-elem[data-elem-id="1666699726848"] {
            top: 0px;
            left: calc(50% - 240px + 20px);
            width: 462px;
          }
        }

        @media screen and (max-width: 479px) {
          #rec505936862 .tn-elem[data-elem-id="1666699726848"] {
            top: 0px;
            left: calc(50% - 160px + 20px);
            width: 271px;
          }
        }

        #rec505936862 .tn-elem[data-elem-id="1666721364892"] {
          z-index: 54;
          top: 172px;
          left: calc(50% - 600px + 20px);
          width: 50px;
        }

        #rec505936862 .tn-elem[data-elem-id="1666721364892"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505936862 .tn-elem[data-elem-id="1666721364892"] {
            top: 172px;
            left: calc(50% - 480px + 10px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec505936862 .tn-elem[data-elem-id="1666721364892"] {
            top: 140px;
            left: calc(50% - 320px + 10px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505936862 .tn-elem[data-elem-id="1666721364892"] {
            top: 144px;
            left: calc(50% - 240px + 20px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec505936862 .tn-elem[data-elem-id="1666721364892"] {
            top: 144px;
            left: calc(50% - 160px + 20px);
          }
        }

        #rec505936862 .tn-elem[data-elem-id="1666699836009"] {
          color: #000000;
          z-index: 51;
          top: 276px;
          left: calc(50% - 600px + 20px);
          width: 260px;
        }

        #rec505936862 .tn-elem[data-elem-id="1666699836009"] .tn-atom {
          color: #000000;
          font-size: 14px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.55;
          font-weight: 400;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505936862 .tn-elem[data-elem-id="1666699836009"] {
            top: 276px;
            left: calc(50% - 480px + 10px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec505936862 .tn-elem[data-elem-id="1666699836009"] {
            top: 244px;
            left: calc(50% - 320px + 10px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505936862 .tn-elem[data-elem-id="1666699836009"] {
            top: 248px;
            left: calc(50% - 240px + 20px);
            width: 423px;
          }

          #rec505936862 .tn-elem[data-elem-id="1666699836009"] .tn-atom {
            line-height: 1.3;
          }
        }

        @media screen and (max-width: 479px) {
          #rec505936862 .tn-elem[data-elem-id="1666699836009"] {
            top: 248px;
            left: calc(50% - 160px + 20px);
            width: 278px;
          }
        }

        #rec505936862 .tn-elem[data-elem-id="1666699821019"] {
          color: #000000;
          z-index: 49;
          top: 246px;
          left: calc(50% - 600px + 20px);
          width: 270px;
        }

        #rec505936862 .tn-elem[data-elem-id="1666699821019"] .tn-atom {
          color: #000000;
          font-size: 16px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.4;
          font-weight: 500;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505936862 .tn-elem[data-elem-id="1666699821019"] {
            top: 246px;
            left: calc(50% - 480px + 10px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec505936862 .tn-elem[data-elem-id="1666699821019"] {
            top: 214px;
            left: calc(50% - 320px + 10px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505936862 .tn-elem[data-elem-id="1666699821019"] {
            top: 218px;
            left: calc(50% - 240px + 20px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec505936862 .tn-elem[data-elem-id="1666699821019"] {
            top: 218px;
            left: calc(50% - 160px + 20px);
          }
        }

        #rec505936862 .tn-elem[data-elem-id="1666761704256"] {
          z-index: 57;
          top: 172px;
          left: calc(50% - 600px + 320px);
          width: 50px;
        }

        #rec505936862 .tn-elem[data-elem-id="1666761704256"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505936862 .tn-elem[data-elem-id="1666761704256"] {
            top: 172px;
            left: calc(50% - 480px + 310px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec505936862 .tn-elem[data-elem-id="1666761704256"] {
            top: 140px;
            left: calc(50% - 320px + 310px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505936862 .tn-elem[data-elem-id="1666761704256"] {
            top: 332px;
            left: calc(50% - 240px + 20px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec505936862 .tn-elem[data-elem-id="1666761704256"] {
            top: 368px;
            left: calc(50% - 160px + 20px);
          }
        }

        #rec505936862 .tn-elem[data-elem-id="1666761704265"] {
          color: #000000;
          z-index: 53;
          top: 276px;
          left: calc(50% - 600px + 320px);
          width: 260px;
        }

        #rec505936862 .tn-elem[data-elem-id="1666761704265"] .tn-atom {
          color: #000000;
          font-size: 14px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.55;
          font-weight: 400;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505936862 .tn-elem[data-elem-id="1666761704265"] {
            top: 276px;
            left: calc(50% - 480px + 310px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec505936862 .tn-elem[data-elem-id="1666761704265"] {
            top: 244px;
            left: calc(50% - 320px + 310px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505936862 .tn-elem[data-elem-id="1666761704265"] {
            top: 436px;
            left: calc(50% - 240px + 20px);
            width: 426px;
          }

          #rec505936862 .tn-elem[data-elem-id="1666761704265"] .tn-atom {
            line-height: 1.3;
          }
        }

        @media screen and (max-width: 479px) {
          #rec505936862 .tn-elem[data-elem-id="1666761704265"] {
            top: 472px;
            left: calc(50% - 160px + 20px);
            width: 270px;
          }
        }

        #rec505936862 .tn-elem[data-elem-id="1666761704268"] {
          color: #000000;
          z-index: 50;
          top: 246px;
          left: calc(50% - 600px + 320px);
          width: 270px;
        }

        #rec505936862 .tn-elem[data-elem-id="1666761704268"] .tn-atom {
          color: #000000;
          font-size: 16px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.4;
          font-weight: 500;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505936862 .tn-elem[data-elem-id="1666761704268"] {
            top: 246px;
            left: calc(50% - 480px + 310px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec505936862 .tn-elem[data-elem-id="1666761704268"] {
            top: 214px;
            left: calc(50% - 320px + 310px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505936862 .tn-elem[data-elem-id="1666761704268"] {
            top: 406px;
            left: calc(50% - 240px + 20px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec505936862 .tn-elem[data-elem-id="1666761704268"] {
            top: 442px;
            left: calc(50% - 160px + 20px);
          }
        }

        #rec505936862 .tn-elem[data-elem-id="1666761709359"] {
          z-index: 60;
          top: 172px;
          left: calc(50% - 600px + 620px);
          width: 50px;
        }

        #rec505936862 .tn-elem[data-elem-id="1666761709359"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505936862 .tn-elem[data-elem-id="1666761709359"] {
            top: 172px;
            left: calc(50% - 480px + 630px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec505936862 .tn-elem[data-elem-id="1666761709359"] {
            top: 432px;
            left: calc(50% - 320px + 310px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505936862 .tn-elem[data-elem-id="1666761709359"] {
            top: 538px;
            left: calc(50% - 240px + 20px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec505936862 .tn-elem[data-elem-id="1666761709359"] {
            top: 610px;
            left: calc(50% - 160px + 20px);
          }
        }

        #rec505936862 .tn-elem[data-elem-id="1666761709363"] {
          color: #000000;
          z-index: 56;
          top: 276px;
          left: calc(50% - 600px + 620px);
          width: 260px;
        }

        #rec505936862 .tn-elem[data-elem-id="1666761709363"] .tn-atom {
          color: #000000;
          font-size: 14px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.55;
          font-weight: 400;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505936862 .tn-elem[data-elem-id="1666761709363"] {
            top: 276px;
            left: calc(50% - 480px + 630px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec505936862 .tn-elem[data-elem-id="1666761709363"] {
            top: 536px;
            left: calc(50% - 320px + 310px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505936862 .tn-elem[data-elem-id="1666761709363"] {
            top: 642px;
            left: calc(50% - 240px + 20px);
            width: 413px;
          }

          #rec505936862 .tn-elem[data-elem-id="1666761709363"] .tn-atom {
            line-height: 1.3;
          }
        }

        @media screen and (max-width: 479px) {
          #rec505936862 .tn-elem[data-elem-id="1666761709363"] {
            top: 714px;
            left: calc(50% - 160px + 20px);
            width: 245px;
          }
        }

        #rec505936862 .tn-elem[data-elem-id="1666761709366"] {
          color: #000000;
          z-index: 55;
          top: 246px;
          left: calc(50% - 600px + 620px);
          width: 270px;
        }

        #rec505936862 .tn-elem[data-elem-id="1666761709366"] .tn-atom {
          color: #000000;
          font-size: 16px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.4;
          font-weight: 500;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505936862 .tn-elem[data-elem-id="1666761709366"] {
            top: 246px;
            left: calc(50% - 480px + 630px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec505936862 .tn-elem[data-elem-id="1666761709366"] {
            top: 506px;
            left: calc(50% - 320px + 310px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505936862 .tn-elem[data-elem-id="1666761709366"] {
            top: 612px;
            left: calc(50% - 240px + 20px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec505936862 .tn-elem[data-elem-id="1666761709366"] {
            top: 684px;
            left: calc(50% - 160px + 20px);
          }
        }

        #rec505936862 .tn-elem[data-elem-id="1666761716308"] {
          z-index: 62;
          top: 172px;
          left: calc(50% - 600px + 920px);
          width: 50px;
        }

        #rec505936862 .tn-elem[data-elem-id="1666761716308"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505936862 .tn-elem[data-elem-id="1666761716308"] {
            top: 456px;
            left: calc(50% - 480px + 10px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec505936862 .tn-elem[data-elem-id="1666761716308"] {
            top: 432px;
            left: calc(50% - 320px + 10px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505936862 .tn-elem[data-elem-id="1666761716308"] {
            top: 708px;
            left: calc(50% - 240px + 20px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec505936862 .tn-elem[data-elem-id="1666761716308"] {
            top: 816px;
            left: calc(50% - 160px + 20px);
          }
        }

        #rec505936862 .tn-elem[data-elem-id="1666761716313"] {
          color: #000000;
          z-index: 59;
          top: 276px;
          left: calc(50% - 600px + 920px);
          width: 260px;
        }

        #rec505936862 .tn-elem[data-elem-id="1666761716313"] .tn-atom {
          color: #000000;
          font-size: 14px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.55;
          font-weight: 400;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505936862 .tn-elem[data-elem-id="1666761716313"] {
            top: 560px;
            left: calc(50% - 480px + 10px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec505936862 .tn-elem[data-elem-id="1666761716313"] {
            top: 536px;
            left: calc(50% - 320px + 10px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505936862 .tn-elem[data-elem-id="1666761716313"] {
            top: 812px;
            left: calc(50% - 240px + 20px);
            width: 429px;
          }

          #rec505936862 .tn-elem[data-elem-id="1666761716313"] .tn-atom {
            line-height: 1.3;
          }
        }

        @media screen and (max-width: 479px) {
          #rec505936862 .tn-elem[data-elem-id="1666761716313"] {
            top: 920px;
            left: calc(50% - 160px + 20px);
            width: 287px;
          }
        }

        #rec505936862 .tn-elem[data-elem-id="1666761716315"] {
          color: #000000;
          z-index: 58;
          top: 246px;
          left: calc(50% - 600px + 920px);
          width: 270px;
        }

        #rec505936862 .tn-elem[data-elem-id="1666761716315"] .tn-atom {
          color: #000000;
          font-size: 16px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.4;
          font-weight: 500;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505936862 .tn-elem[data-elem-id="1666761716315"] {
            top: 530px;
            left: calc(50% - 480px + 10px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec505936862 .tn-elem[data-elem-id="1666761716315"] {
            top: 506px;
            left: calc(50% - 320px + 10px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505936862 .tn-elem[data-elem-id="1666761716315"] {
            top: 782px;
            left: calc(50% - 240px + 20px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec505936862 .tn-elem[data-elem-id="1666761716315"] {
            top: 890px;
            left: calc(50% - 160px + 20px);
          }
        }

        #rec505936862 .tn-elem[data-elem-id="1666761884476"] {
          z-index: 98;
          top: 456px;
          left: calc(50% - 600px + 20px);
          width: 50px;
        }

        #rec505936862 .tn-elem[data-elem-id="1666761884476"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505936862 .tn-elem[data-elem-id="1666761884476"] {
            top: 456px;
            left: calc(50% - 480px + 310px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec505936862 .tn-elem[data-elem-id="1666761884476"] {
            top: 724px;
            left: calc(50% - 320px + 10px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505936862 .tn-elem[data-elem-id="1666761884476"] {
            top: 896px;
            left: calc(50% - 240px + 20px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec505936862 .tn-elem[data-elem-id="1666761884476"] {
            top: 1058px;
            left: calc(50% - 160px + 20px);
          }
        }

        #rec505936862 .tn-elem[data-elem-id="1666761884461"] {
          color: #000000;
          z-index: 94;
          top: 604px;
          left: calc(50% - 600px + 20px);
          width: 260px;
        }

        #rec505936862 .tn-elem[data-elem-id="1666761884461"] .tn-atom {
          color: #000000;
          font-size: 14px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.55;
          font-weight: 400;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505936862 .tn-elem[data-elem-id="1666761884461"] {
            top: 604px;
            left: calc(50% - 480px + 310px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec505936862 .tn-elem[data-elem-id="1666761884461"] {
            top: 872px;
            left: calc(50% - 320px + 10px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505936862 .tn-elem[data-elem-id="1666761884461"] {
            top: 1044px;
            left: calc(50% - 240px + 20px);
            width: 440px;
          }

          #rec505936862 .tn-elem[data-elem-id="1666761884461"] .tn-atom {
            line-height: 1.3;
          }
        }

        @media screen and (max-width: 479px) {
          #rec505936862 .tn-elem[data-elem-id="1666761884461"] {
            top: 1228px;
            left: calc(50% - 160px + 20px);
            width: 261px;
          }
        }

        #rec505936862 .tn-elem[data-elem-id="1666761884446"] {
          color: #000000;
          z-index: 91;
          top: 530px;
          left: calc(50% - 600px + 20px);
          width: 270px;
        }

        #rec505936862 .tn-elem[data-elem-id="1666761884446"] .tn-atom {
          color: #000000;
          font-size: 16px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.4;
          font-weight: 500;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505936862 .tn-elem[data-elem-id="1666761884446"] {
            top: 530px;
            left: calc(50% - 480px + 310px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec505936862 .tn-elem[data-elem-id="1666761884446"] {
            top: 798px;
            left: calc(50% - 320px + 10px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505936862 .tn-elem[data-elem-id="1666761884446"] {
            top: 970px;
            left: calc(50% - 240px + 20px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec505936862 .tn-elem[data-elem-id="1666761884446"] {
            top: 1132px;
            left: calc(50% - 160px + 20px);
            width: 244px;
          }
        }

        #rec505936862 .tn-elem[data-elem-id="1666761884482"] {
          z-index: 101;
          top: 456px;
          left: calc(50% - 600px + 320px);
          width: 50px;
        }

        #rec505936862 .tn-elem[data-elem-id="1666761884482"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505936862 .tn-elem[data-elem-id="1666761884482"] {
            top: 456px;
            left: calc(50% - 480px + 630px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec505936862 .tn-elem[data-elem-id="1666761884482"] {
            top: 724px;
            left: calc(50% - 320px + 310px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505936862 .tn-elem[data-elem-id="1666761884482"] {
            top: 1128px;
            left: calc(50% - 240px + 20px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec505936862 .tn-elem[data-elem-id="1666761884482"] {
            top: 1330px;
            left: calc(50% - 160px + 20px);
          }
        }

        #rec505936862 .tn-elem[data-elem-id="1666761884464"] {
          color: #000000;
          z-index: 97;
          top: 560px;
          left: calc(50% - 600px + 320px);
          width: 260px;
        }

        #rec505936862 .tn-elem[data-elem-id="1666761884464"] .tn-atom {
          color: #000000;
          font-size: 14px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.55;
          font-weight: 400;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505936862 .tn-elem[data-elem-id="1666761884464"] {
            top: 560px;
            left: calc(50% - 480px + 630px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec505936862 .tn-elem[data-elem-id="1666761884464"] {
            top: 828px;
            left: calc(50% - 320px + 310px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505936862 .tn-elem[data-elem-id="1666761884464"] {
            top: 1232px;
            left: calc(50% - 240px + 20px);
            width: 423px;
          }

          #rec505936862 .tn-elem[data-elem-id="1666761884464"] .tn-atom {
            line-height: 1.3;
          }
        }

        @media screen and (max-width: 479px) {
          #rec505936862 .tn-elem[data-elem-id="1666761884464"] {
            top: 1434px;
            left: calc(50% - 160px + 20px);
            width: 275px;
          }
        }

        #rec505936862 .tn-elem[data-elem-id="1666761884450"] {
          color: #000000;
          z-index: 96;
          top: 530px;
          left: calc(50% - 600px + 320px);
          width: 270px;
        }

        #rec505936862 .tn-elem[data-elem-id="1666761884450"] .tn-atom {
          color: #000000;
          font-size: 16px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.4;
          font-weight: 500;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505936862 .tn-elem[data-elem-id="1666761884450"] {
            top: 530px;
            left: calc(50% - 480px + 630px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec505936862 .tn-elem[data-elem-id="1666761884450"] {
            top: 798px;
            left: calc(50% - 320px + 310px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505936862 .tn-elem[data-elem-id="1666761884450"] {
            top: 1202px;
            left: calc(50% - 240px + 20px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec505936862 .tn-elem[data-elem-id="1666761884450"] {
            top: 1404px;
            left: calc(50% - 160px + 20px);
          }
        }

        #rec505936862 .tn-elem[data-elem-id="1666761884490"] {
          z-index: 104;
          top: 456px;
          left: calc(50% - 600px + 620px);
          width: 50px;
        }

        #rec505936862 .tn-elem[data-elem-id="1666761884490"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505936862 .tn-elem[data-elem-id="1666761884490"] {
            top: 762px;
            left: calc(50% - 480px + 10px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec505936862 .tn-elem[data-elem-id="1666761884490"] {
            top: 1038px;
            left: calc(50% - 320px + 10px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505936862 .tn-elem[data-elem-id="1666761884490"] {
            top: 1334px;
            left: calc(50% - 240px + 20px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec505936862 .tn-elem[data-elem-id="1666761884490"] {
            top: 1572px;
            left: calc(50% - 160px + 20px);
          }
        }

        #rec505936862 .tn-elem[data-elem-id="1666761884468"] {
          color: #000000;
          z-index: 100;
          top: 560px;
          left: calc(50% - 600px + 620px);
          width: 260px;
        }

        #rec505936862 .tn-elem[data-elem-id="1666761884468"] .tn-atom {
          color: #000000;
          font-size: 14px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.55;
          font-weight: 400;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505936862 .tn-elem[data-elem-id="1666761884468"] {
            top: 866px;
            left: calc(50% - 480px + 10px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec505936862 .tn-elem[data-elem-id="1666761884468"] {
            top: 1142px;
            left: calc(50% - 320px + 10px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505936862 .tn-elem[data-elem-id="1666761884468"] {
            top: 1438px;
            left: calc(50% - 240px + 20px);
            width: 437px;
          }

          #rec505936862 .tn-elem[data-elem-id="1666761884468"] .tn-atom {
            line-height: 1.3;
          }
        }

        @media screen and (max-width: 479px) {
          #rec505936862 .tn-elem[data-elem-id="1666761884468"] {
            top: 1676px;
            left: calc(50% - 160px + 20px);
            width: 283px;
          }
        }

        #rec505936862 .tn-elem[data-elem-id="1666761884455"] {
          color: #000000;
          z-index: 99;
          top: 530px;
          left: calc(50% - 600px + 620px);
          width: 270px;
        }

        #rec505936862 .tn-elem[data-elem-id="1666761884455"] .tn-atom {
          color: #000000;
          font-size: 16px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.4;
          font-weight: 500;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505936862 .tn-elem[data-elem-id="1666761884455"] {
            top: 836px;
            left: calc(50% - 480px + 10px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec505936862 .tn-elem[data-elem-id="1666761884455"] {
            top: 1112px;
            left: calc(50% - 320px + 10px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505936862 .tn-elem[data-elem-id="1666761884455"] {
            top: 1408px;
            left: calc(50% - 240px + 20px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec505936862 .tn-elem[data-elem-id="1666761884455"] {
            top: 1646px;
            left: calc(50% - 160px + 20px);
          }
        }

        #rec505936862 .tn-elem[data-elem-id="1666761884494"] {
          z-index: 106;
          top: 456px;
          left: calc(50% - 600px + 920px);
          width: 50px;
        }

        #rec505936862 .tn-elem[data-elem-id="1666761884494"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505936862 .tn-elem[data-elem-id="1666761884494"] {
            top: 762px;
            left: calc(50% - 480px + 310px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec505936862 .tn-elem[data-elem-id="1666761884494"] {
            top: 1038px;
            left: calc(50% - 320px + 310px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505936862 .tn-elem[data-elem-id="1666761884494"] {
            top: 1540px;
            left: calc(50% - 240px + 20px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec505936862 .tn-elem[data-elem-id="1666761884494"] {
            top: 1814px;
            left: calc(50% - 160px + 20px);
          }
        }

        #rec505936862 .tn-elem[data-elem-id="1666761884472"] {
          color: #000000;
          z-index: 103;
          top: 560px;
          left: calc(50% - 600px + 920px);
          width: 260px;
        }

        #rec505936862 .tn-elem[data-elem-id="1666761884472"] .tn-atom {
          color: #000000;
          font-size: 14px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.55;
          font-weight: 400;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505936862 .tn-elem[data-elem-id="1666761884472"] {
            top: 866px;
            left: calc(50% - 480px + 310px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec505936862 .tn-elem[data-elem-id="1666761884472"] {
            top: 1142px;
            left: calc(50% - 320px + 310px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505936862 .tn-elem[data-elem-id="1666761884472"] {
            top: 1672px;
            left: calc(50% - 240px + 20px);
            width: 432px;
          }

          #rec505936862 .tn-elem[data-elem-id="1666761884472"] .tn-atom {
            line-height: 1.3;
          }
        }

        @media screen and (max-width: 479px) {
          #rec505936862 .tn-elem[data-elem-id="1666761884472"] {
            top: 1918px;
            left: calc(50% - 160px + 20px);
            width: 275px;
          }
        }

        #rec505936862 .tn-elem[data-elem-id="1666761884458"] {
          color: #000000;
          z-index: 102;
          top: 530px;
          left: calc(50% - 600px + 920px);
          width: 270px;
        }

        #rec505936862 .tn-elem[data-elem-id="1666761884458"] .tn-atom {
          color: #000000;
          font-size: 16px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.4;
          font-weight: 500;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505936862 .tn-elem[data-elem-id="1666761884458"] {
            top: 836px;
            left: calc(50% - 480px + 310px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec505936862 .tn-elem[data-elem-id="1666761884458"] {
            top: 1112px;
            left: calc(50% - 320px + 310px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505936862 .tn-elem[data-elem-id="1666761884458"] {
            top: 1620px;
            left: calc(50% - 240px + 20px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec505936862 .tn-elem[data-elem-id="1666761884458"] {
            top: 1888px;
            left: calc(50% - 160px + 20px);
          }
        }
      </style>
      <div class="t396">
        <div class="t396__artboard" data-artboard-height="756" data-artboard-height-res-320="2066"
          data-artboard-height-res-480="1766" data-artboard-height-res-640="1346" data-artboard-height-res-960="1066"
          data-artboard-recid="505936862" data-artboard-screens="320,480,640,960,1200" data-artboard-upscale="grid"
          data-artboard-upscale-res-320="grid" data-artboard-valign="center">
          <div class="t396__carrier" data-artboard-recid="505936862"></div>
          <div class="t396__filter" data-artboard-recid="505936862"></div>
          <div class="t396__elem tn-elem tn-elem__5059368621666699726848" data-elem-id="1666699726848"
            data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="20"
            data-field-left-res-480-value="20" data-field-left-res-640-value="10" data-field-left-res-960-value="10"
            data-field-left-value="20" data-field-leftunits-value="px" data-field-top-res-320-value="0"
            data-field-top-res-480-value="0" data-field-top-res-640-value="0" data-field-top-res-960-value="0"
            data-field-top-value="0" data-field-topunits-value="px" data-field-width-res-320-value="271"
            data-field-width-res-480-value="462" data-field-width-res-640-value="545"
            data-field-width-res-960-value="873" data-field-width-value="780" data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666699726848">
              Почему стоит инвестировать через
              <span style="color: rgb(81, 169, 238)">Penenza</span>
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5059368621666721364892" data-elem-id="1666721364892"
            data-elem-type="image" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-fileheight-value="50" data-field-filewidth-value="50"
            data-field-heightunits-value="" data-field-left-res-320-value="20" data-field-left-res-480-value="20"
            data-field-left-res-640-value="10" data-field-left-res-960-value="10" data-field-left-value="20"
            data-field-leftunits-value="px" data-field-top-res-320-value="144" data-field-top-res-480-value="144"
            data-field-top-res-640-value="140" data-field-top-res-960-value="172" data-field-top-value="172"
            data-field-topunits-value="px" data-field-width-value="50" data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img t-img" data-original="images/Number_1.svg"
                imgfield="tn_img_1666721364892" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5059368621666699836009" data-elem-id="1666699836009"
            data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="20"
            data-field-left-res-480-value="20" data-field-left-res-640-value="10" data-field-left-res-960-value="10"
            data-field-left-value="20" data-field-leftunits-value="px" data-field-top-res-320-value="248"
            data-field-top-res-480-value="248" data-field-top-res-640-value="244" data-field-top-res-960-value="276"
            data-field-top-value="276" data-field-topunits-value="px" data-field-width-res-320-value="278"
            data-field-width-res-480-value="423" data-field-width-value="260" data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666699836009">
              Инвестиции в бизнес — самая эффективная и доступная стратегия на
              сегодняшний день. Бизнес наиболее быстро приспосабливается к
              росту инфляции
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5059368621666699821019" data-elem-id="1666699821019"
            data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="20"
            data-field-left-res-480-value="20" data-field-left-res-640-value="10" data-field-left-res-960-value="10"
            data-field-left-value="20" data-field-leftunits-value="px" data-field-top-res-320-value="218"
            data-field-top-res-480-value="218" data-field-top-res-640-value="214" data-field-top-res-960-value="246"
            data-field-top-value="246" data-field-topunits-value="px" data-field-width-value="270"
            data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666699821019">
              Почему бизнес?
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5059368621666761704256" data-elem-id="1666761704256"
            data-elem-type="image" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-fileheight-value="50" data-field-filewidth-value="50"
            data-field-heightunits-value="" data-field-left-res-320-value="20" data-field-left-res-480-value="20"
            data-field-left-res-640-value="310" data-field-left-res-960-value="310" data-field-left-value="320"
            data-field-leftunits-value="px" data-field-top-res-320-value="368" data-field-top-res-480-value="332"
            data-field-top-res-640-value="140" data-field-top-res-960-value="172" data-field-top-value="172"
            data-field-topunits-value="px" data-field-width-value="50" data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img t-img" data-original="images/Number_2.svg"
                imgfield="tn_img_1666761704256" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5059368621666761704265" data-elem-id="1666761704265"
            data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="20"
            data-field-left-res-480-value="20" data-field-left-res-640-value="310" data-field-left-res-960-value="310"
            data-field-left-value="320" data-field-leftunits-value="px" data-field-top-res-320-value="472"
            data-field-top-res-480-value="436" data-field-top-res-640-value="244" data-field-top-res-960-value="276"
            data-field-top-value="276" data-field-topunits-value="px" data-field-width-res-320-value="270"
            data-field-width-res-480-value="426" data-field-width-value="260" data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666761704265">
              Благодаря модели краудлендинга установлен низкий порог входа —
              ваша стартовая инвестиция может составить от 50 000 руб., а
              последующие пополнения —<br />от 1 000 руб.
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5059368621666761704268" data-elem-id="1666761704268"
            data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="20"
            data-field-left-res-480-value="20" data-field-left-res-640-value="310" data-field-left-res-960-value="310"
            data-field-left-value="320" data-field-leftunits-value="px" data-field-top-res-320-value="442"
            data-field-top-res-480-value="406" data-field-top-res-640-value="214" data-field-top-res-960-value="246"
            data-field-top-value="246" data-field-topunits-value="px" data-field-width-value="270"
            data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666761704268">
              Какой порог входа?
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5059368621666761709359" data-elem-id="1666761709359"
            data-elem-type="image" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-fileheight-value="50" data-field-filewidth-value="50"
            data-field-heightunits-value="" data-field-left-res-320-value="20" data-field-left-res-480-value="20"
            data-field-left-res-640-value="310" data-field-left-res-960-value="630" data-field-left-value="620"
            data-field-leftunits-value="px" data-field-top-res-320-value="610" data-field-top-res-480-value="538"
            data-field-top-res-640-value="432" data-field-top-res-960-value="172" data-field-top-value="172"
            data-field-topunits-value="px" data-field-width-value="50" data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img t-img" data-original="images/Number_3.svg"
                imgfield="tn_img_1666761709359" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5059368621666761709363" data-elem-id="1666761709363"
            data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="20"
            data-field-left-res-480-value="20" data-field-left-res-640-value="310" data-field-left-res-960-value="630"
            data-field-left-value="620" data-field-leftunits-value="px" data-field-top-res-320-value="714"
            data-field-top-res-480-value="642" data-field-top-res-640-value="536" data-field-top-res-960-value="276"
            data-field-top-value="276" data-field-topunits-value="px" data-field-width-res-320-value="245"
            data-field-width-res-480-value="413" data-field-width-value="260" data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666761709363">
              Все можно сделать онлайн: инвестировать через сайт Penenza, а
              выводить деньги через любой банк России
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5059368621666761709366" data-elem-id="1666761709366"
            data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="20"
            data-field-left-res-480-value="20" data-field-left-res-640-value="310" data-field-left-res-960-value="630"
            data-field-left-value="620" data-field-leftunits-value="px" data-field-top-res-320-value="684"
            data-field-top-res-480-value="612" data-field-top-res-640-value="506" data-field-top-res-960-value="246"
            data-field-top-value="246" data-field-topunits-value="px" data-field-width-value="270"
            data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666761709366">
              Нужно ехать в офис?
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5059368621666761716308" data-elem-id="1666761716308"
            data-elem-type="image" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-fileheight-value="50" data-field-filewidth-value="50"
            data-field-heightunits-value="" data-field-left-res-320-value="20" data-field-left-res-480-value="20"
            data-field-left-res-640-value="10" data-field-left-res-960-value="10" data-field-left-value="920"
            data-field-leftunits-value="px" data-field-top-res-320-value="816" data-field-top-res-480-value="708"
            data-field-top-res-640-value="432" data-field-top-res-960-value="456" data-field-top-value="172"
            data-field-topunits-value="px" data-field-width-value="50" data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img t-img" data-original="images/Number_4.svg"
                imgfield="tn_img_1666761716308" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5059368621666761716313" data-elem-id="1666761716313"
            data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="20"
            data-field-left-res-480-value="20" data-field-left-res-640-value="10" data-field-left-res-960-value="10"
            data-field-left-value="920" data-field-leftunits-value="px" data-field-top-res-320-value="920"
            data-field-top-res-480-value="812" data-field-top-res-640-value="536" data-field-top-res-960-value="560"
            data-field-top-value="276" data-field-topunits-value="px" data-field-width-res-320-value="287"
            data-field-width-res-480-value="429" data-field-width-value="260" data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666761716313">
              Не нужно вникать в детали и разбираться в бизнесе —<br />для вас
              работает готовый алгоритм мощного скоринга Penenza, который
              отслеживает 286 параметров компаний
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5059368621666761716315" data-elem-id="1666761716315"
            data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="20"
            data-field-left-res-480-value="20" data-field-left-res-640-value="10" data-field-left-res-960-value="10"
            data-field-left-value="920" data-field-leftunits-value="px" data-field-top-res-320-value="890"
            data-field-top-res-480-value="782" data-field-top-res-640-value="506" data-field-top-res-960-value="530"
            data-field-top-value="246" data-field-topunits-value="px" data-field-width-value="270"
            data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666761716315">
              Это сложно?
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5059368621666761884476" data-elem-id="1666761884476"
            data-elem-type="image" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-fileheight-value="50" data-field-filewidth-value="50"
            data-field-heightunits-value="" data-field-left-res-320-value="20" data-field-left-res-480-value="20"
            data-field-left-res-640-value="10" data-field-left-res-960-value="310" data-field-left-value="20"
            data-field-leftunits-value="px" data-field-top-res-320-value="1058" data-field-top-res-480-value="896"
            data-field-top-res-640-value="724" data-field-top-res-960-value="456" data-field-top-value="456"
            data-field-topunits-value="px" data-field-width-value="50" data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img t-img" data-original="images/Number_5.svg"
                imgfield="tn_img_1666761884476" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5059368621666761884461" data-elem-id="1666761884461"
            data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="20"
            data-field-left-res-480-value="20" data-field-left-res-640-value="10" data-field-left-res-960-value="310"
            data-field-left-value="20" data-field-leftunits-value="px" data-field-top-res-320-value="1228"
            data-field-top-res-480-value="1044" data-field-top-res-640-value="872" data-field-top-res-960-value="604"
            data-field-top-value="604" data-field-topunits-value="px" data-field-width-res-320-value="261"
            data-field-width-res-480-value="440" data-field-width-value="260" data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666761884461">
              Вы можете тратить на инвестиции всего пару минут в месяц,
              подключив автоинвестирование по готовой стратегии
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5059368621666761884446" data-elem-id="1666761884446"
            data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="20"
            data-field-left-res-480-value="20" data-field-left-res-640-value="10" data-field-left-res-960-value="310"
            data-field-left-value="20" data-field-leftunits-value="px" data-field-top-res-320-value="1132"
            data-field-top-res-480-value="970" data-field-top-res-640-value="798" data-field-top-res-960-value="530"
            data-field-top-value="530" data-field-topunits-value="px" data-field-width-res-320-value="244"
            data-field-width-value="270" data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666761884446">
              Сколько времени мне нужно уделять инвестированию на Penenza?
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5059368621666761884482" data-elem-id="1666761884482"
            data-elem-type="image" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-fileheight-value="50" data-field-filewidth-value="50"
            data-field-heightunits-value="" data-field-left-res-320-value="20" data-field-left-res-480-value="20"
            data-field-left-res-640-value="310" data-field-left-res-960-value="630" data-field-left-value="320"
            data-field-leftunits-value="px" data-field-top-res-320-value="1330" data-field-top-res-480-value="1128"
            data-field-top-res-640-value="724" data-field-top-res-960-value="456" data-field-top-value="456"
            data-field-topunits-value="px" data-field-width-value="50" data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img t-img" data-original="images/Number_6.svg"
                imgfield="tn_img_1666761884482" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5059368621666761884464" data-elem-id="1666761884464"
            data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="20"
            data-field-left-res-480-value="20" data-field-left-res-640-value="310" data-field-left-res-960-value="630"
            data-field-left-value="320" data-field-leftunits-value="px" data-field-top-res-320-value="1434"
            data-field-top-res-480-value="1232" data-field-top-res-640-value="828" data-field-top-res-960-value="560"
            data-field-top-value="560" data-field-topunits-value="px" data-field-width-res-320-value="275"
            data-field-width-res-480-value="423" data-field-width-value="260" data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666761884464">
              Риски распределяются автоматически: умный робот направляет не
              более 10 % в один проект и выбирает представителей бизнеса
              разных отраслей для диверсификации портфеля
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5059368621666761884450" data-elem-id="1666761884450"
            data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="20"
            data-field-left-res-480-value="20" data-field-left-res-640-value="310" data-field-left-res-960-value="630"
            data-field-left-value="320" data-field-leftunits-value="px" data-field-top-res-320-value="1404"
            data-field-top-res-480-value="1202" data-field-top-res-640-value="798" data-field-top-res-960-value="530"
            data-field-top-value="530" data-field-topunits-value="px" data-field-width-value="270"
            data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666761884450">
              Как мне уменьшить риски?
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5059368621666761884490" data-elem-id="1666761884490"
            data-elem-type="image" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-fileheight-value="50" data-field-filewidth-value="50"
            data-field-heightunits-value="" data-field-left-res-320-value="20" data-field-left-res-480-value="20"
            data-field-left-res-640-value="10" data-field-left-res-960-value="10" data-field-left-value="620"
            data-field-leftunits-value="px" data-field-top-res-320-value="1572" data-field-top-res-480-value="1334"
            data-field-top-res-640-value="1038" data-field-top-res-960-value="762" data-field-top-value="456"
            data-field-topunits-value="px" data-field-width-value="50" data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img t-img" data-original="images/Number_7.svg"
                imgfield="tn_img_1666761884490" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5059368621666761884468" data-elem-id="1666761884468"
            data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="20"
            data-field-left-res-480-value="20" data-field-left-res-640-value="10" data-field-left-res-960-value="10"
            data-field-left-value="620" data-field-leftunits-value="px" data-field-top-res-320-value="1676"
            data-field-top-res-480-value="1438" data-field-top-res-640-value="1142" data-field-top-res-960-value="866"
            data-field-top-value="560" data-field-topunits-value="px" data-field-width-res-320-value="283"
            data-field-width-res-480-value="437" data-field-width-value="260" data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666761884468">
              Доход начисляется ежемесячно: направляйте его снова в
              инвестиции, чтобы быстрее наращивать капитал. Автоматическое
              реинвестирование прибыли позволит увеличить доходность на 4.5%
              годовых
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5059368621666761884455" data-elem-id="1666761884455"
            data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="20"
            data-field-left-res-480-value="20" data-field-left-res-640-value="10" data-field-left-res-960-value="10"
            data-field-left-value="620" data-field-leftunits-value="px" data-field-top-res-320-value="1646"
            data-field-top-res-480-value="1408" data-field-top-res-640-value="1112" data-field-top-res-960-value="836"
            data-field-top-value="530" data-field-topunits-value="px" data-field-width-value="270"
            data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666761884455">
              Как увеличить доходность?
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5059368621666761884494" data-elem-id="1666761884494"
            data-elem-type="image" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-fileheight-value="50" data-field-filewidth-value="50"
            data-field-heightunits-value="" data-field-left-res-320-value="20" data-field-left-res-480-value="20"
            data-field-left-res-640-value="310" data-field-left-res-960-value="310" data-field-left-value="920"
            data-field-leftunits-value="px" data-field-top-res-320-value="1814" data-field-top-res-480-value="1540"
            data-field-top-res-640-value="1038" data-field-top-res-960-value="762" data-field-top-value="456"
            data-field-topunits-value="px" data-field-width-value="50" data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img t-img" data-original="images/Number_8.svg"
                imgfield="tn_img_1666761884494" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5059368621666761884472" data-elem-id="1666761884472"
            data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="20"
            data-field-left-res-480-value="20" data-field-left-res-640-value="310" data-field-left-res-960-value="310"
            data-field-left-value="920" data-field-leftunits-value="px" data-field-top-res-320-value="1918"
            data-field-top-res-480-value="1672" data-field-top-res-640-value="1142" data-field-top-res-960-value="866"
            data-field-top-value="560" data-field-topunits-value="px" data-field-width-res-320-value="275"
            data-field-width-res-480-value="432" data-field-width-value="260" data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666761884472">
              Платформа Penenza включена в реестр инвестиционных платформ ЦБ
              РФ с соответствующей лицензией. Высокое качество и надежность
              подтверждены аудитом и сертификатом о высоком уровне защиты
              программного обеспечения и данных
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5059368621666761884458" data-elem-id="1666761884458"
            data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="20"
            data-field-left-res-480-value="20" data-field-left-res-640-value="310" data-field-left-res-960-value="310"
            data-field-left-value="920" data-field-leftunits-value="px" data-field-top-res-320-value="1888"
            data-field-top-res-480-value="1620" data-field-top-res-640-value="1112" data-field-top-res-960-value="836"
            data-field-top-value="530" data-field-topunits-value="px" data-field-width-value="270"
            data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666761884458">
              Это законно?
            </div>
          </div>
        </div>
      </div>
      <script>
        t_onReady(function () {
          t_onFuncLoad("t396_init", function () {
            t396_init("505936862");
          });
        });
      </script>
      <!-- /T396 -->
    </div>
    <div class="r t-rec" data-animationappear="off" data-bg-color="#fafafa" data-record-type="121" id="rec505941482"
      style="background-color: #fafafa">
      <!-- T396 -->
      <style>
        #rec505941482 .t396__artboard {
          height: 96px;
        }

        #rec505941482 .t396__filter {
          height: 96px;
        }

        #rec505941482 .t396__carrier {
          height: 96px;
          background-position: center center;
          background-attachment: scroll;
          background-size: cover;
          background-repeat: no-repeat;
        }

        @media screen and (max-width: 1199px) {

          #rec505941482 .t396__artboard,
          #rec505941482 .t396__filter,
          #rec505941482 .t396__carrier {}

          #rec505941482 .t396__filter {}

          #rec505941482 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 959px) {

          #rec505941482 .t396__artboard,
          #rec505941482 .t396__filter,
          #rec505941482 .t396__carrier {}

          #rec505941482 .t396__filter {}

          #rec505941482 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 639px) {

          #rec505941482 .t396__artboard,
          #rec505941482 .t396__filter,
          #rec505941482 .t396__carrier {}

          #rec505941482 .t396__filter {}

          #rec505941482 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 479px) {

          #rec505941482 .t396__artboard,
          #rec505941482 .t396__filter,
          #rec505941482 .t396__carrier {}

          #rec505941482 .t396__filter {}

          #rec505941482 .t396__carrier {
            background-attachment: scroll;
          }
        }
      </style>
      <div class="t396">
        <div class="t396__artboard" data-artboard-height="96" data-artboard-recid="505941482"
          data-artboard-screens="320,480,640,960,1200" data-artboard-upscale="grid" data-artboard-valign="center">
          <div class="t396__carrier" data-artboard-recid="505941482"></div>
          <div class="t396__filter" data-artboard-recid="505941482"></div>
        </div>
      </div>
      <script>
        t_onReady(function () {
          t_onFuncLoad("t396_init", function () {
            t396_init("505941482");
          });
        });
      </script>
      <!-- /T396 -->
    </div>
    <div class="r t-rec" data-animationappear="off" data-record-type="396" id="rec508147738" style="">
      <!-- T396 -->
      <style>
        #rec508147738 .t396__artboard {
          height: 2340px;
          background-color: #000000;
          overflow: visible;
        }

        #rec508147738 .t396__filter {
          height: 2340px;
        }

        #rec508147738 .t396__carrier {
          height: 2340px;
          background-position: center center;
          background-attachment: scroll;
          background-size: cover;
          background-repeat: no-repeat;
        }

        @media screen and (max-width: 1199px) {

          #rec508147738 .t396__artboard,
          #rec508147738 .t396__filter,
          #rec508147738 .t396__carrier {}

          #rec508147738 .t396__filter {}

          #rec508147738 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 959px) {

          #rec508147738 .t396__artboard,
          #rec508147738 .t396__filter,
          #rec508147738 .t396__carrier {}

          #rec508147738 .t396__filter {}

          #rec508147738 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 639px) {

          #rec508147738 .t396__artboard,
          #rec508147738 .t396__filter,
          #rec508147738 .t396__carrier {
            height: 2240px;
          }

          #rec508147738 .t396__filter {}

          #rec508147738 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 479px) {

          #rec508147738 .t396__artboard,
          #rec508147738 .t396__filter,
          #rec508147738 .t396__carrier {
            height: 2040px;
          }

          #rec508147738 .t396__filter {}

          #rec508147738 .t396__carrier {
            background-position: center center;
            background-attachment: scroll;
          }
        }

        #rec508147738 .tn-elem[data-elem-id="1666699726848"] {
          color: #ffffff;
          z-index: 2;
          top: 80px;
          left: calc(50% - 600px + 20px);
          width: 800px;
        }

        #rec508147738 .tn-elem.t396__elem--anim-hidden[data-elem-id="1666699726848"] {
          opacity: 0;
        }

        #rec508147738 .tn-elem[data-elem-id="1666699726848"] .tn-atom {
          color: #ffffff;
          font-size: 48px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.2;
          font-weight: 600;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {
          #rec508147738 .tn-elem[data-elem-id="1666699726848"] {
            top: 80px;
            left: calc(50% - 320px + 20px);
            width: 487px;
          }

          #rec508147738 .tn-elem[data-elem-id="1666699726848"] .tn-atom {
            font-size: 32px;
          }
        }

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec508147738 .tn-elem[data-elem-id="1666699726848"] {
            top: 80px;
            left: calc(50% - 160px + 20px);
            width: 271px;
          }
        }

        #rec508147738 .tn-elem[data-elem-id="1666723356240"] {
          z-index: 3;
          top: 240px;
          left: calc(50% - 600px + 1220px);
          width: 270px;
        }

        #rec508147738 .tn-elem.t396__elem--anim-hidden[data-elem-id="1666723356240"] {
          opacity: 0;
        }

        #rec508147738 .tn-elem[data-elem-id="1666723356240"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {}

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec508147738 .tn-elem[data-elem-id="1666723356240"] {
            top: 240px;
            left: calc(50% - 160px + 1220px);
          }
        }

        #rec508147738 .tn-elem[data-elem-id="1666723356246"] {
          z-index: 4;
          top: 240px;
          left: calc(50% - 600px + 920px);
          width: 270px;
        }

        #rec508147738 .tn-elem.t396__elem--anim-hidden[data-elem-id="1666723356246"] {
          opacity: 0;
        }

        #rec508147738 .tn-elem[data-elem-id="1666723356246"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {}

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec508147738 .tn-elem[data-elem-id="1666723356246"] {
            top: 240px;
            left: calc(50% - 160px + 920px);
          }
        }

        #rec508147738 .tn-elem[data-elem-id="1666723356251"] {
          z-index: 5;
          top: 240px;
          left: calc(50% - 600px + 620px);
          width: 270px;
        }

        #rec508147738 .tn-elem.t396__elem--anim-hidden[data-elem-id="1666723356251"] {
          opacity: 0;
        }

        #rec508147738 .tn-elem[data-elem-id="1666723356251"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {}

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec508147738 .tn-elem[data-elem-id="1666723356251"] {
            top: 240px;
            left: calc(50% - 160px + 620px);
          }
        }

        #rec508147738 .tn-elem[data-elem-id="1666723356254"] {
          z-index: 6;
          top: 240px;
          left: calc(50% - 600px + 320px);
          width: 270px;
        }

        #rec508147738 .tn-elem.t396__elem--anim-hidden[data-elem-id="1666723356254"] {
          opacity: 0;
        }

        #rec508147738 .tn-elem[data-elem-id="1666723356254"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {}

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec508147738 .tn-elem[data-elem-id="1666723356254"] {
            top: 240px;
            left: calc(50% - 160px + 320px);
          }
        }

        #rec508147738 .tn-elem[data-elem-id="1666723356260"] {
          z-index: 7;
          top: 240px;
          left: calc(50% - 600px + 20px);
          width: 270px;
        }

        #rec508147738 .tn-elem.t396__elem--anim-hidden[data-elem-id="1666723356260"] {
          opacity: 0;
        }

        #rec508147738 .tn-elem[data-elem-id="1666723356260"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {}

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec508147738 .tn-elem[data-elem-id="1666723356260"] {
            top: 240px;
            left: calc(50% - 160px + 20px);
          }
        }

        #rec508147738 .tn-elem[data-elem-id="1667211636579"] {
          z-index: 8;
          top: 690px;
          left: calc(50% - 580px + 0px);
          width: 1160px;
          height: 340px;
        }

        #rec508147738 .tn-elem.t396__elem--anim-hidden[data-elem-id="1667211636579"] {
          opacity: 0;
        }

        #rec508147738 .tn-elem[data-elem-id="1667211636579"] .tn-atom {
          border-radius: 40px;
          background-color: #b6dbe3;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec508147738 .tn-elem[data-elem-id="1667211636579"] {
            top: 690px;
            left: calc(50% - 580px + 0px);
            width: 960px;
            height: 340px;
          }
        }

        @media screen and (max-width: 959px) {
          #rec508147738 .tn-elem[data-elem-id="1667211636579"] {
            top: 660px;
            left: calc(50% - 580px + 0px);
            width: 620px;
            height: 420px;
          }
        }

        @media screen and (max-width: 639px) {
          #rec508147738 .tn-elem[data-elem-id="1667211636579"] {
            top: 656px;
            left: calc(50% - 580px + 0px);
            width: 460px;
            height: 380px;
          }
        }

        @media screen and (max-width: 479px) {
          #rec508147738 .tn-elem[data-elem-id="1667211636579"] {
            top: 634px;
            left: calc(50% - 580px + 0px);
            width: 320px;
            height: 420px;
            border-radius: 16px;
          }

          #rec508147738 .tn-elem[data-elem-id="1667211636579"] .tn-atom {
            border-radius: 16px;
          }
        }

        #rec508147738 .tn-elem[data-elem-id="1667211636584"] {
          color: #000000;
          text-align: center;
          z-index: 9;
          top: 754px;
          left: calc(50% - 430px + 0px);
          width: 860px;
        }

        #rec508147738 .tn-elem.t396__elem--anim-hidden[data-elem-id="1667211636584"] {
          opacity: 0;
        }

        #rec508147738 .tn-elem[data-elem-id="1667211636584"] .tn-atom {
          color: #000000;
          font-size: 32px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.2;
          font-weight: 600;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {
          #rec508147738 .tn-elem[data-elem-id="1667211636584"] {
            top: 730px;
            left: calc(50% - 430px + 0px);
            width: 460px;
          }
        }

        @media screen and (max-width: 639px) {
          #rec508147738 .tn-elem[data-elem-id="1667211636584"] {
            top: 712px;
            left: calc(50% - 430px + -4px);
            width: 330px;
          }

          #rec508147738 .tn-elem[data-elem-id="1667211636584"] .tn-atom {
            font-size: 24px;
          }
        }

        @media screen and (max-width: 479px) {
          #rec508147738 .tn-elem[data-elem-id="1667211636584"] {
            top: 678px;
            left: calc(50% - 430px + 1px);
            width: 253px;
          }

          #rec508147738 .tn-elem[data-elem-id="1667211636584"] .tn-atom {
            font-size: 24px;
          }
        }

        #rec508147738 .tn-elem[data-elem-id="1667211636588"] {
          color: #000000;
          text-align: center;
          z-index: 10;
          top: 842px;
          left: calc(50% - 430px + 0px);
          width: 860px;
        }

        #rec508147738 .tn-elem.t396__elem--anim-hidden[data-elem-id="1667211636588"] {
          opacity: 0;
        }

        #rec508147738 .tn-elem[data-elem-id="1667211636588"] .tn-atom {
          color: #000000;
          font-size: 16px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.2;
          font-weight: 500;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {
          #rec508147738 .tn-elem[data-elem-id="1667211636588"] {
            top: 901px;
            left: calc(50% - 430px + 0px);
            width: 408px;
          }
        }

        @media screen and (max-width: 639px) {
          #rec508147738 .tn-elem[data-elem-id="1667211636588"] {
            top: 847px;
            left: calc(50% - 430px + 1px);
            width: 217px;
          }
        }

        @media screen and (max-width: 479px) {
          #rec508147738 .tn-elem[data-elem-id="1667211636588"] {
            top: 868px;
            left: calc(50% - 430px + 0px);
            width: 228px;
          }

          #rec508147738 .tn-elem[data-elem-id="1667211636588"] {
            color: #49494f;
          }

          #rec508147738 .tn-elem[data-elem-id="1667211636588"] .tn-atom {
            color: #49494f;
          }
        }

        #rec508147738 .tn-elem[data-elem-id="1667216938603"] {
          z-index: 11;
          top: 884px;
          left: calc(50% - 138.5px + 1px);
          width: 277px;
        }

        #rec508147738 .tn-elem.t396__elem--anim-hidden[data-elem-id="1667216938603"] {
          opacity: 0;
        }

        #rec508147738 .tn-elem[data-elem-id="1667216938603"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {
          #rec508147738 .tn-elem[data-elem-id="1667216938603"] {
            top: 944px;
            left: calc(50% - 138.5px + 0px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec508147738 .tn-elem[data-elem-id="1667216938603"] {
            top: 910px;
            left: calc(50% - 138.5px + 0px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec508147738 .tn-elem[data-elem-id="1667216938603"] {
            top: 924px;
            left: calc(50% - 138.5px + 0px);
          }
        }

        #rec508147738 .tn-elem[data-elem-id="1667211636600"] {
          color: #ffffff;
          text-align: center;
          z-index: 12;
          top: 884px;
          left: calc(50% - 138.5px + 1px);
          width: 277px;
          height: 72px;
        }

        #rec508147738 .tn-elem.t396__elem--anim-hidden[data-elem-id="1667211636600"] {
          opacity: 0;
        }

        #rec508147738 .tn-elem[data-elem-id="1667211636600"] .tn-atom {
          color: #ffffff;
          font-size: 16px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.55;
          font-weight: 600;
          border-radius: 16px;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
          transition: background-color 0.2s ease-in-out,
            color 0.2s ease-in-out, border-color 0.2s ease-in-out;
        }

        @media (hover),
        (min-width: 0\0) {
          #rec508147738 .tn-elem[data-elem-id="1667211636600"] .tn-atom:hover {
            background-color: #4aa9f5;
            background-image: none;
          }
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {
          #rec508147738 .tn-elem[data-elem-id="1667211636600"] {
            top: 944px;
            left: calc(50% - 138.5px + 0px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec508147738 .tn-elem[data-elem-id="1667211636600"] {
            top: 910px;
            left: calc(50% - 138.5px + 0px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec508147738 .tn-elem[data-elem-id="1667211636600"] {
            top: 924px;
            left: calc(50% - 138.5px + 0px);
          }
        }
      </style>
      <div class="t396">
        <div class="t396__artboard" data-artboard-height="2340" data-artboard-height-res-320="2040"
          data-artboard-height-res-480="2240" data-artboard-ovrflw="visible" data-artboard-recid="508147738"
          data-artboard-screens="320,480,640,960,1200" data-artboard-upscale="grid" data-artboard-upscale-res-320="grid"
          data-artboard-valign="stretch">
          <div class="t396__carrier" data-artboard-recid="508147738"></div>
          <div class="t396__filter" data-artboard-recid="508147738"></div>
          <div class="t396__elem tn-elem tn-elem__5081477381666699726848" data-animate-mobile="y"
            data-animate-sbs-event="scroll"
            data-animate-sbs-opts="[{'di':'0','mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'','dd':'0'},{'di':1200,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'fixed','dd':'0'}]"
            data-animate-sbs-opts-res-320="[{'di':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','fi':'','dd':'0'},{'di':1000,'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','fi':'fixed','dd':'0'}]"
            data-animate-sbs-trg="0" data-animate-sbs-trgofst="80" data-elem-id="1666699726848" data-elem-type="text"
            data-field-axisx-value="left" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-heightunits-value="" data-field-left-res-320-value="20" data-field-left-res-640-value="20"
            data-field-left-value="20" data-field-leftunits-value="px" data-field-top-res-320-value="80"
            data-field-top-res-640-value="80" data-field-top-value="80" data-field-topunits-value="px"
            data-field-width-res-320-value="271" data-field-width-res-640-value="487" data-field-width-value="800"
            data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666699726848">
              Как работает инвестирование через
              <span style="color: rgb(81, 169, 238)">Penenza</span>
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081477381666723356240" data-animate-mobile="y"
            data-animate-sbs-event="scroll"
            data-animate-sbs-opts="[{'di':'0','mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'','dd':'0'},{'di':1200,'mx':-300,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'fixed','dd':'0'}]"
            data-animate-sbs-opts-res-320="[{'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','di':'0'},{'mx':-1200,'my':0,'sx':'1','sy':'1','op':'1','ro':'0','bl':'0','di':1000,'fi':'fixed'}]"
            data-animate-sbs-trg="0" data-animate-sbs-trgofst="240" data-elem-id="1666723356240" data-elem-type="image"
            data-field-axisx-value="left" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-fileheight-value="1392" data-field-filewidth-value="1080" data-field-heightunits-value=""
            data-field-left-res-320-value="1220" data-field-left-value="1220" data-field-leftunits-value="px"
            data-field-top-res-320-value="240" data-field-top-value="240" data-field-topunits-value="px"
            data-field-width-value="270" data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img t-img" data-original="images/block-4.png"
                imgfield="tn_img_1666723356240" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081477381666723356246" data-animate-mobile="y"
            data-animate-sbs-event="scroll"
            data-animate-sbs-opts="[{'di':'0','mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'','dd':'0'},{'di':1200,'mx':-300,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'fixed','dd':'0'}]"
            data-animate-sbs-opts-res-320="[{'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','di':'0'},{'mx':-1200,'my':0,'sx':'1','sy':'1','op':'1','ro':'0','bl':'0','di':1000,'fi':'fixed'}]"
            data-animate-sbs-trg="0" data-animate-sbs-trgofst="240" data-elem-id="1666723356246" data-elem-type="image"
            data-field-axisx-value="left" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-fileheight-value="1392" data-field-filewidth-value="1080" data-field-heightunits-value=""
            data-field-left-res-320-value="920" data-field-left-value="920" data-field-leftunits-value="px"
            data-field-top-res-320-value="240" data-field-top-value="240" data-field-topunits-value="px"
            data-field-width-value="270" data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img t-img" data-original="images/block-3.png"
                imgfield="tn_img_1666723356246" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081477381666723356251" data-animate-mobile="y"
            data-animate-sbs-event="scroll"
            data-animate-sbs-opts="[{'di':'0','mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'','dd':'0'},{'di':1200,'mx':-300,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'fixed','dd':'0'}]"
            data-animate-sbs-opts-res-320="[{'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','di':'0'},{'mx':-1200,'my':0,'sx':'1','sy':'1','op':'1','ro':'0','bl':'0','di':1000,'fi':'fixed'}]"
            data-animate-sbs-trg="0" data-animate-sbs-trgofst="240" data-elem-id="1666723356251" data-elem-type="image"
            data-field-axisx-value="left" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-fileheight-value="1392" data-field-filewidth-value="1080" data-field-heightunits-value=""
            data-field-left-res-320-value="620" data-field-left-value="620" data-field-leftunits-value="px"
            data-field-top-res-320-value="240" data-field-top-value="240" data-field-topunits-value="px"
            data-field-width-value="270" data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img t-img" data-original="images/block-2.png"
                imgfield="tn_img_1666723356251" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081477381666723356254" data-animate-mobile="y"
            data-animate-sbs-event="scroll"
            data-animate-sbs-opts="[{'di':'0','mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'','dd':'0'},{'di':1200,'mx':-300,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'fixed','dd':'0'}]"
            data-animate-sbs-opts-res-320="[{'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','di':'0'},{'mx':-1200,'my':0,'sx':'1','sy':'1','op':'1','ro':'0','bl':'0','di':1000,'fi':'fixed'}]"
            data-animate-sbs-trg="0" data-animate-sbs-trgofst="240" data-elem-id="1666723356254" data-elem-type="image"
            data-field-axisx-value="left" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-fileheight-value="1392" data-field-filewidth-value="1080" data-field-heightunits-value=""
            data-field-left-res-320-value="320" data-field-left-value="320" data-field-leftunits-value="px"
            data-field-top-res-320-value="240" data-field-top-value="240" data-field-topunits-value="px"
            data-field-width-value="270" data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img t-img" data-original="images/block-1.png"
                imgfield="tn_img_1666723356254" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081477381666723356260" data-animate-mobile="y"
            data-animate-sbs-event="scroll"
            data-animate-sbs-opts="[{'di':'0','mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'','dd':'0'},{'di':1200,'mx':-300,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'fixed','dd':'0'}]"
            data-animate-sbs-opts-res-320="[{'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','di':'0'},{'mx':-1200,'my':0,'sx':'1','sy':'1','op':'1','ro':'0','bl':'0','di':1000,'fi':'fixed'}]"
            data-animate-sbs-trg="0" data-animate-sbs-trgofst="240" data-elem-id="1666723356260" data-elem-type="image"
            data-field-axisx-value="left" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-fileheight-value="348" data-field-filewidth-value="270" data-field-heightunits-value=""
            data-field-left-res-320-value="20" data-field-left-value="20" data-field-leftunits-value="px"
            data-field-top-res-320-value="240" data-field-top-value="240" data-field-topunits-value="px"
            data-field-width-value="270" data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img t-img" data-original="images/photo.png" imgfield="tn_img_1666723356260" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081477381667211636579" data-animate-mobile="y"
            data-animate-sbs-event="scroll"
            data-animate-sbs-opts="[{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','di':'0'},{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','di':1200,'fi':'fixed'}]"
            data-animate-sbs-opts-res-320="[{'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','di':'0'},{'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','di':1000,'fi':'fixed'}]"
            data-animate-sbs-trg="0" data-animate-sbs-trgofst="690" data-elem-id="1667211636579" data-elem-type="shape"
            data-field-axisx-value="center" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-height-res-320-value="420" data-field-height-res-480-value="380"
            data-field-height-res-640-value="420" data-field-height-res-960-value="340" data-field-height-value="340"
            data-field-heightunits-res-320-value="px" data-field-heightunits-value="px"
            data-field-left-res-320-value="0" data-field-left-res-480-value="0" data-field-left-res-640-value="0"
            data-field-left-res-960-value="0" data-field-left-value="0" data-field-leftunits-value="px"
            data-field-top-res-320-value="634" data-field-top-res-480-value="656" data-field-top-res-640-value="660"
            data-field-top-res-960-value="690" data-field-top-value="690" data-field-topunits-value="px"
            data-field-width-res-320-value="320" data-field-width-res-480-value="460"
            data-field-width-res-640-value="620" data-field-width-res-960-value="960" data-field-width-value="1160"
            data-field-widthunits-value="px">
            <div class="tn-atom"></div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081477381667211636584" data-animate-mobile="y"
            data-animate-sbs-event="scroll"
            data-animate-sbs-opts="[{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','di':'0'},{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','di':1200,'fi':'fixed'}]"
            data-animate-sbs-opts-res-320="[{'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','di':'0'},{'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','di':1000,'fi':'fixed'}]"
            data-animate-sbs-trg="0" data-animate-sbs-trgofst="754" data-elem-id="1667211636584" data-elem-type="text"
            data-field-axisx-value="center" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-heightunits-value="" data-field-left-res-320-value="1" data-field-left-res-480-value="-4"
            data-field-left-res-640-value="0" data-field-left-value="0" data-field-leftunits-value="px"
            data-field-top-res-320-value="678" data-field-top-res-480-value="712" data-field-top-res-640-value="730"
            data-field-top-value="754" data-field-topunits-value="px" data-field-width-res-320-value="253"
            data-field-width-res-480-value="330" data-field-width-res-640-value="460" data-field-width-value="860"
            data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1667211636584">
              Присоединяйтесь к более чем 13 000 инвесторов, получающих
              высокую доходность
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081477381667211636588" data-animate-mobile="y"
            data-animate-sbs-event="scroll"
            data-animate-sbs-opts="[{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','di':'0'},{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','di':1200,'fi':'fixed'}]"
            data-animate-sbs-opts-res-320="[{'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','di':'0'},{'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','di':1000,'fi':'fixed'}]"
            data-animate-sbs-trg="0" data-animate-sbs-trgofst="842" data-elem-id="1667211636588" data-elem-type="text"
            data-field-axisx-value="center" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-heightunits-value="" data-field-left-res-320-value="0" data-field-left-res-480-value="1"
            data-field-left-res-640-value="0" data-field-left-value="0" data-field-leftunits-value="px"
            data-field-top-res-320-value="868" data-field-top-res-480-value="847" data-field-top-res-640-value="901"
            data-field-top-value="842" data-field-topunits-value="px" data-field-width-res-320-value="228"
            data-field-width-res-480-value="217" data-field-width-res-640-value="408" data-field-width-value="860"
            data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1667211636588">
              Начните инвестировать с Penenza сегодня!
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081477381667216938603" data-animate-mobile="y"
            data-animate-sbs-event="scroll"
            data-animate-sbs-opts="[{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','di':'0'},{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','di':1200,'fi':'fixed'}]"
            data-animate-sbs-opts-res-320="[{'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','di':'0'},{'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','di':1000,'fi':'fixed'}]"
            data-animate-sbs-trg="0" data-animate-sbs-trgofst="884" data-elem-id="1667216938603" data-elem-type="image"
            data-field-axisx-value="center" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-fileheight-value="72" data-field-filewidth-value="277" data-field-heightunits-value=""
            data-field-left-res-320-value="0" data-field-left-res-480-value="0" data-field-left-res-640-value="0"
            data-field-left-value="1" data-field-leftunits-value="px" data-field-top-res-320-value="924"
            data-field-top-res-480-value="910" data-field-top-res-640-value="944" data-field-top-value="884"
            data-field-topunits-value="px" data-field-width-value="277" data-field-widthunits-value="px">
            <a class="tn-atom" href="#popup:embedcode"><img alt="" class="tn-atom__img t-img"
                data-original="images/Button.svg" imgfield="tn_img_1667216938603" /></a>
          </div>
          <div class="t396__elem tn-elem tn-elem__5081477381667211636600" data-animate-mobile="y"
            data-animate-sbs-event="scroll"
            data-animate-sbs-opts="[{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','di':'0'},{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','di':1200,'fi':'fixed'}]"
            data-animate-sbs-opts-res-320="[{'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','di':'0'},{'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','di':1000,'fi':'fixed'}]"
            data-animate-sbs-trg="0" data-animate-sbs-trgofst="884" data-elem-id="1667211636600" data-elem-type="button"
            data-field-axisx-value="center" data-field-axisy-value="top" data-field-container-value="grid"
            data-field-height-value="72" data-field-heightunits-value="px" data-field-left-res-320-value="0"
            data-field-left-res-480-value="0" data-field-left-res-640-value="0" data-field-left-value="1"
            data-field-leftunits-value="px" data-field-top-res-320-value="924" data-field-top-res-480-value="910"
            data-field-top-res-640-value="944" data-field-top-value="884" data-field-topunits-value="px"
            data-field-width-value="277" data-field-widthunits-value="px">
            <a class="tn-atom" href="#popup:embedcode">Хочу инвестировать</a>
          </div>
        </div>
      </div>
      <script>
        t_onReady(function () {
          t_onFuncLoad("t396_init", function () {
            t396_init("508147738");
          });
        });
      </script>
      <!-- /T396 -->
    </div>
    <div class="r t-rec" data-record-type="215" id="rec505940465" style="">
      <a name="invest" style="font-size: 0"></a>
    </div>
    <div class="r t-rec" data-record-type="270" id="rec505940492" style="">
      <div class="t270"></div>
      <script>
        t_onReady(function () {
          var hash = window.location.hash;
          t_onFuncLoad("t270_scroll", function () {
            t270_scroll(hash, -3);
          });
          setTimeout(function () {
            var curPath = window.location.pathname;
            var curFullPath = window.location.origin + curPath;
            var recs = document.querySelectorAll(".r");
            Array.prototype.forEach.call(recs, function (rec) {
              var selects =
                'a[href^="#"]\
:not([href="#"])\
:not(.carousel-control)\
:not(.t-carousel__control)\
:not([href^="#price"])\
:not([href^="#submenu"])\
:not([href^="#popup"])\
:not([href*="#zeropopup"])\
:not([href*="#closepopup"])\
:not([href*="#closeallpopup"])\
:not([href^="#prodpopup"])\
:not([href^="#order"])\
:not([href^="#!"])\
:not([target="_blank"]),' +
                'a[href^="' +
                curPath +
                '#"]\
:not([href*="#!/tfeeds/"])\
:not([href*="#!/tproduct/"])\
:not([href*="#!/tab/"])\
:not([href*="#popup"])\
:not([href*="#zeropopup"])\
:not([href*="#closepopup"])\
:not([href*="#closeallpopup"])\
:not([target="_blank"]),' +
                'a[href^="' +
                curFullPath +
                '#"]\
:not([href*="#!/tfeeds/"])\
:not([href*="#!/tproduct/"])\
:not([href*="#!/tab/"])\
:not([href*="#popup"])\
:not([href*="#zeropopup"])\
:not([href*="#closepopup"])\
:not([href*="#closeallpopup"])\
:not([target="_blank"])';
              var elements = rec.querySelectorAll(selects);
              Array.prototype.forEach.call(elements, function (element) {
                element.addEventListener("click", function (event) {
                  event.preventDefault();
                  var hash = this.hash.trim();
                  t_onFuncLoad("t270_scroll", function () {
                    t270_scroll(hash, -3);
                  });
                });
              });
            });
            if (
              document.querySelectorAll(".js-store").length > 0 ||
              document.querySelectorAll(".js-feed").length > 0
            ) {
              t_onFuncLoad("t270_scroll", function () {
                t270_scroll(hash, -3, 1);
              });
            }
          }, 500);
          setTimeout(function () {
            var hash = window.location.hash;
            if (
              hash &&
              document.querySelectorAll('a[name="' + hash.slice(1) + '"]')
                .length > 0
            ) {
              if (window.isMobile) {
                t_onFuncLoad("t270_scroll", function () {
                  t270_scroll(hash, 0);
                });
              } else {
                t_onFuncLoad("t270_scroll", function () {
                  t270_scroll(hash, 0);
                });
              }
            }
          }, 1000);
          window.addEventListener("popstate", function () {
            var hash = window.location.hash;
            if (
              hash &&
              document.querySelectorAll('a[name="' + hash.slice(1) + '"]')
                .length > 0
            ) {
              if (window.isMobile) {
                t_onFuncLoad("t270_scroll", function () {
                  t270_scroll(hash, 0);
                });
              } else {
                t_onFuncLoad("t270_scroll", function () {
                  t270_scroll(hash, 0);
                });
              }
            }
          });
        });
      </script>
    </div>
    <div class="r t-rec" data-animationappear="off" data-record-type="131" id="rec506413774" style="">
      <!-- T123 -->
      <div class="t123">
        <div class="t-container_100">
          <div class="t-width t-width_100">
            <!-- AnKu Zero block slider with Owl carousel plugin-->
            <!--
Подключаем плагин
Советую использовать только на тех страницах,
где предполагается карусель, чтобы не грузить
лишние скрипты и стили на остальных страницах.
-->
            <link href="css/owl.carousel.min.css" rel="stylesheet" />
            <link href="css/owl.theme.default.min.css" rel="stylesheet" />
            <script src="js/owl.carousel.min.js"></script>
            <!-- Скрипт для размещения карусели в области shape -->
            <script>
              $(document).ready(function () {
                var block = $("#rec505955539"); // id Zero block
                var wrap = $(".anku-slider"); // область карусели
                //- этот класс добавляем к шейпу, если на странице планируется 2 карусели,
                //то класс второй должен отличаться, чтобы не заморачиваться,
                //добавьте порядковое число к классай, не делая пробела
                var slides = $("#rec506418473, #rec506422710, #rec506422715"); // id Zero block слайдов

                var box = wrap.find(".tn-atom");
                box.append('<div class="owl-carousel owl-theme"></div>');
                slides.appendTo(block.find(".owl-carousel"));
                var owl = wrap.find(".owl-carousel").owlCarousel({
                  // настройки карусели, больше на официальном сайте плагина, их более 60шт., я добавил стоковые.
                  // просто берете настройки из документации и добавляете в этот список, соблюдайте синтаксис, иначе перестанет работать.
                  loop: true, // true/false - бесконечная прокрутка
                  center: false, // true/false - центрирование
                  dots: true, // true/false - точки под слайдами
                  nav: false, // true/false - стандартная навигация
                  margin: 30, // any value in px - внешний отступ сежду слайдами в пикселях
                  items: 3, // кол-во слайдов
                  responsive: {
                    // количиство отображаемых слайдов в зависимости от разрешения дисплея
                    0: {
                      items: 1,
                    },
                    640: {
                      items: 3,
                    },
                    1000: {
                      items: 3,
                    },
                  },
                });

                block.find("[href='#anku_left']").click(function (e) {
                  // добавьте эту ссылку к кнопке, отвечающей за прокрутку влево (назад)
                  e.preventDefault();
                  owl.trigger("prev.owl.carousel");
                });
                block.find("[href='#anku_right']").click(function (e) {
                  // добавьте эту ссылку к кнопке, отвечающей за прокрутку вправо (вперед)
                  e.preventDefault();
                  owl.trigger("next.owl.carousel");
                });
              });
            </script>
            <style>
              /* Добавьте высоту слайдов на разных разрешениях дисплея */

              /* xl */
              .anku-slider .t-rec .t396__artboard {
                width: 100% !important;
                height: 420px !important;
                word-break: normal !important;
                background: transparent !important;
              }

              /* lg */
              @media screen and (max-width: 1199px) {
                .anku-slider .t-rec .t396__artboard {
                  height: 420px !important;
                }
              }

              /* md */
              @media screen and (max-width: 959px) {
                .anku-slider .t-rec .t396__artboard {
                  height: 420px !important;
                }
              }

              /* sm */
              @media screen and (max-width: 639px) {
                .anku-slider .t-rec .t396__artboard {
                  height: 580px !important;
                }
              }

              /*
  @media screen and (max-width: 479px) {
    .anku-slider .t-rec .t396__artboard {
      height: 580px !important;
    }
  }
*/
              .anku-slider {
                display: flex;
                flex-flow: row nowrap;
                justify-content: center;
                align-items: stretch;
                align-content: stretch;
              }

              .anku-slider .t-rec,
              .anku-slider .t396__artboard {
                overflow: hidden !important;
              }

              /* hide filters */
              .anku-slider .t-rec .t396__artboard>.t396__carrier,
              .anku-slider .t-rec .t396__artboard>.t396__filter {
                display: none !important;
              }
            </style>
          </div>
        </div>
      </div>
    </div>
    <div class="r t-rec" data-animationappear="off" data-bg-color="#212122" data-record-type="121" id="rec505703707"
      style="background-color: #212122">
      <!-- T396 -->
      <style>
        #rec505703707 .t396__artboard {
          height: 96px;
        }

        #rec505703707 .t396__filter {
          height: 96px;
        }

        #rec505703707 .t396__carrier {
          height: 96px;
          background-position: center center;
          background-attachment: scroll;
          background-size: cover;
          background-repeat: no-repeat;
        }

        @media screen and (max-width: 1199px) {

          #rec505703707 .t396__artboard,
          #rec505703707 .t396__filter,
          #rec505703707 .t396__carrier {}

          #rec505703707 .t396__filter {}

          #rec505703707 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 959px) {

          #rec505703707 .t396__artboard,
          #rec505703707 .t396__filter,
          #rec505703707 .t396__carrier {
            height: 72px;
          }

          #rec505703707 .t396__filter {}

          #rec505703707 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 639px) {

          #rec505703707 .t396__artboard,
          #rec505703707 .t396__filter,
          #rec505703707 .t396__carrier {}

          #rec505703707 .t396__filter {}

          #rec505703707 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 479px) {

          #rec505703707 .t396__artboard,
          #rec505703707 .t396__filter,
          #rec505703707 .t396__carrier {}

          #rec505703707 .t396__filter {}

          #rec505703707 .t396__carrier {
            background-attachment: scroll;
          }
        }
      </style>
      <div class="t396">
        <div class="t396__artboard" data-artboard-height="96" data-artboard-height-res-640="72"
          data-artboard-recid="505703707" data-artboard-screens="320,480,640,960,1200" data-artboard-upscale="grid"
          data-artboard-valign="center">
          <div class="t396__carrier" data-artboard-recid="505703707"></div>
          <div class="t396__filter" data-artboard-recid="505703707"></div>
        </div>
      </div>
      <script>
        t_onReady(function () {
          t_onFuncLoad("t396_init", function () {
            t396_init("505703707");
          });
        });
      </script>
      <!-- /T396 -->
    </div>
    <div class="r t-rec" data-animationappear="off" data-record-type="396" id="rec505955539" style="">
      <!-- T396 -->
      <style>
        #rec505955539 .t396__artboard {
          height: 580px;
          background-color: #212122;
        }

        #rec505955539 .t396__filter {
          height: 580px;
        }

        #rec505955539 .t396__carrier {
          height: 580px;
          background-position: center center;
          background-attachment: scroll;
          background-size: cover;
          background-repeat: no-repeat;
        }

        @media screen and (max-width: 1199px) {

          #rec505955539 .t396__artboard,
          #rec505955539 .t396__filter,
          #rec505955539 .t396__carrier {}

          #rec505955539 .t396__filter {}

          #rec505955539 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 959px) {

          #rec505955539 .t396__artboard,
          #rec505955539 .t396__filter,
          #rec505955539 .t396__carrier {}

          #rec505955539 .t396__filter {}

          #rec505955539 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 639px) {

          #rec505955539 .t396__artboard,
          #rec505955539 .t396__filter,
          #rec505955539 .t396__carrier {
            height: 580px;
          }

          #rec505955539 .t396__filter {}

          #rec505955539 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 479px) {

          #rec505955539 .t396__artboard,
          #rec505955539 .t396__filter,
          #rec505955539 .t396__carrier {
            height: 786px;
          }

          #rec505955539 .t396__artboard {
            background-color: #212122;
          }

          #rec505955539 .t396__filter {}

          #rec505955539 .t396__carrier {
            background-position: center center;
            background-attachment: scroll;
          }
        }

        #rec505955539 .tn-elem[data-elem-id="1666723583938"] {
          color: #ffffff;
          text-align: center;
          z-index: 1;
          top: 70px;
          left: calc(50% - 405px + 0px);
          width: 810px;
        }

        #rec505955539 .tn-elem[data-elem-id="1666723583938"] .tn-atom {
          color: #ffffff;
          font-size: 24px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.2;
          font-weight: 500;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {}

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec505955539 .tn-elem[data-elem-id="1666723583938"] {
            top: 45px;
            left: calc(50% - 405px + 0px);
            width: 270px;
          }
        }

        #rec505955539 .tn-elem[data-elem-id="1666726297834"] {
          z-index: 2;
          top: 0px;
          left: calc(50% - 600px + 491px);
          width: 219px;
        }

        #rec505955539 .tn-elem[data-elem-id="1666726297834"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505955539 .tn-elem[data-elem-id="1666726297834"] {
            top: 0px;
            left: calc(50% - 480px + 371px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec505955539 .tn-elem[data-elem-id="1666726297834"] {
            top: 0px;
            left: calc(50% - 320px + 211px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505955539 .tn-elem[data-elem-id="1666726297834"] {
            top: 0px;
            left: calc(50% - 240px + 131px);
          }
        }

        @media screen and (max-width: 479px) {
          #rec505955539 .tn-elem[data-elem-id="1666726297834"] {
            top: 0px;
            left: calc(50% - 160px + 71px);
            width: 179px;
          }
        }

        #rec505955539 .tn-elem[data-elem-id="1666807448097"] {
          z-index: 3;
          top: 154px;
          left: calc(50% - 600px + 0px);
          width: 1200px;
          height: 420px;
        }

        #rec505955539 .tn-elem[data-elem-id="1666807448097"] .tn-atom {
          border-radius: 32px;
          background-color: #212122;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505955539 .tn-elem[data-elem-id="1666807448097"] {
            top: 154px;
            left: calc(50% - 600px + 0px);
            height: 420px;
          }
        }

        @media screen and (max-width: 959px) {
          #rec505955539 .tn-elem[data-elem-id="1666807448097"] {
            top: 154px;
            left: calc(50% - 600px + 0px);
            height: 420px;
          }
        }

        @media screen and (max-width: 639px) {
          #rec505955539 .tn-elem[data-elem-id="1666807448097"] {
            top: 154px;
            left: calc(50% - 600px + 410px);
            height: 420px;
          }
        }

        @media screen and (max-width: 479px) {
          #rec505955539 .tn-elem[data-elem-id="1666807448097"] {
            top: 155px;
            left: calc(50% - 600px + 0px);
            width: 320px;
            height: 580px;
          }
        }

        #rec505955539 .tn-elem[data-elem-id="1666808284450"] {
          z-index: 6;
          top: 154px;
          left: calc(50% - 190px + -410px);
          width: 380px;
          height: 420px;
        }

        #rec505955539 .tn-elem[data-elem-id="1666808284450"] .tn-atom {
          border-radius: 32px;
          opacity: 0.4;
          background-color: #000000;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505955539 .tn-elem[data-elem-id="1666808284450"] {
            top: 154px;
            left: calc(50% - 190px + -410px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec505955539 .tn-elem[data-elem-id="1666808284450"] {
            top: 154px;
            left: calc(50% - 190px + -410px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505955539 .tn-elem[data-elem-id="1666808284450"] {
            top: 154px;
            left: calc(50% - 190px + -400px);
          }

          #rec505955539 .tn-elem[data-elem-id="1666808284450"] .tn-atom {
            opacity: 1;
          }
        }

        @media screen and (max-width: 479px) {
          #rec505955539 .tn-elem[data-elem-id="1666808284450"] {
            top: 154px;
            left: calc(50% - 190px + -300px);
          }

          #rec505955539 .tn-elem[data-elem-id="1666808284450"] .tn-atom {
            background-color: #000000;
            opacity: 0.01;
          }
        }

        #rec505955539 .tn-elem[data-elem-id="1666808329598"] {
          z-index: 7;
          top: 154px;
          left: calc(50% - 190px + 410px);
          width: 380px;
          height: 420px;
        }

        #rec505955539 .tn-elem[data-elem-id="1666808329598"] .tn-atom {
          border-radius: 32px;
          opacity: 0.4;
          background-color: #000000;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505955539 .tn-elem[data-elem-id="1666808329598"] {
            top: 154px;
            left: calc(50% - 190px + 410px);
          }
        }

        @media screen and (max-width: 959px) {
          #rec505955539 .tn-elem[data-elem-id="1666808329598"] {
            top: 154px;
            left: calc(50% - 190px + 410px);
          }
        }

        @media screen and (max-width: 639px) {
          #rec505955539 .tn-elem[data-elem-id="1666808329598"] {
            top: 154px;
            left: calc(50% - 190px + 400px);
          }

          #rec505955539 .tn-elem[data-elem-id="1666808329598"] .tn-atom {
            opacity: 1;
          }
        }

        @media screen and (max-width: 479px) {
          #rec505955539 .tn-elem[data-elem-id="1666808329598"] {
            top: 154px;
            left: calc(50% - 190px + 300px);
          }

          #rec505955539 .tn-elem[data-elem-id="1666808329598"] .tn-atom {
            background-color: #000000;
            opacity: 0.01;
          }
        }

        #rec505955539 .tn-elem[data-elem-id="1667310338796"] {
          z-index: 5;
          top: -85px;
          left: calc(50% - 600px + 5px);
          width: 53px;
        }

        #rec505955539 .tn-elem[data-elem-id="1667310338796"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {}

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec505955539 .tn-elem[data-elem-id="1667310338796"] {
            top: 339px;
            left: calc(50% - 160px + 164px);
            width: 33px;
          }
        }

        #rec505955539 .tn-elem[data-elem-id="1667310338801"] {
          z-index: 4;
          top: -85px;
          left: calc(50% - 600px + 5px);
          width: 53px;
        }

        #rec505955539 .tn-elem[data-elem-id="1667310338801"] .tn-atom {
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {}

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec505955539 .tn-elem[data-elem-id="1667310338801"] {
            top: 339px;
            left: calc(50% - 160px + -163px);
            width: 33px;
          }

          #rec505955539 .tn-elem[data-elem-id="1667310338801"] .tn-atom {
            -webkit-transform: rotate(180deg);
            -moz-transform: rotate(180deg);
            transform: rotate(180deg);
          }
        }
      </style>
      <div class="t396">
        <div class="t396__artboard" data-artboard-height="580" data-artboard-height-res-320="786"
          data-artboard-height-res-480="580" data-artboard-recid="505955539"
          data-artboard-screens="320,480,640,960,1200" data-artboard-upscale="grid" data-artboard-upscale-res-320="grid"
          data-artboard-valign="center">
          <div class="t396__carrier" data-artboard-recid="505955539"></div>
          <div class="t396__filter" data-artboard-recid="505955539"></div>
          <div class="t396__elem tn-elem tn-elem__5059555391666723583938" data-elem-id="1666723583938"
            data-elem-type="text" data-field-axisx-value="center" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="0"
            data-field-left-value="0" data-field-leftunits-value="px" data-field-top-res-320-value="45"
            data-field-top-value="70" data-field-topunits-value="px" data-field-width-res-320-value="270"
            data-field-width-value="810" data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666723583938">
              Инвесторы рекомендуют
              <span style="color: rgb(81, 169, 238)">Penenza</span>
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5059555391666726297834" data-elem-id="1666726297834"
            data-elem-type="image" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-fileheight-value="34" data-field-filewidth-value="219"
            data-field-heightunits-value="" data-field-left-res-320-value="71" data-field-left-res-480-value="131"
            data-field-left-res-640-value="211" data-field-left-res-960-value="371" data-field-left-value="491"
            data-field-leftunits-value="px" data-field-top-res-320-value="0" data-field-top-res-480-value="0"
            data-field-top-res-640-value="0" data-field-top-res-960-value="0" data-field-top-value="0"
            data-field-topunits-value="px" data-field-width-res-320-value="179" data-field-width-value="219"
            data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img t-img" data-original="images/photo.svg" imgfield="tn_img_1666726297834" />
            </div>
          </div>
          <div class="t396__elem tn-elem anku-slider tn-elem__5059555391666807448097" data-elem-id="1666807448097"
            data-elem-type="shape" data-field-axisx-value="center" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-height-res-320-value="580"
            data-field-height-res-480-value="420" data-field-height-res-640-value="420"
            data-field-height-res-960-value="420" data-field-height-value="420" data-field-heightunits-value="px"
            data-field-left-res-320-value="0" data-field-left-res-480-value="410" data-field-left-res-640-value="0"
            data-field-left-res-960-value="0" data-field-left-value="0" data-field-leftunits-value="px"
            data-field-top-res-320-value="155" data-field-top-res-480-value="154" data-field-top-res-640-value="154"
            data-field-top-res-960-value="154" data-field-top-value="154" data-field-topunits-value="px"
            data-field-width-res-320-value="320" data-field-width-value="1200" data-field-widthunits-res-480-value="px"
            data-field-widthunits-value="px">
            <div class="tn-atom"></div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5059555391666808284450" data-elem-id="1666808284450"
            data-elem-type="shape" data-field-axisx-res-320-value="center" data-field-axisx-value="center"
            data-field-axisy-value="top" data-field-container-value="grid" data-field-height-value="420"
            data-field-heightunits-value="px" data-field-left-res-320-value="-300" data-field-left-res-480-value="-400"
            data-field-left-res-640-value="-410" data-field-left-res-960-value="-410" data-field-left-value="-410"
            data-field-leftunits-value="px" data-field-top-res-320-value="154" data-field-top-res-480-value="154"
            data-field-top-res-640-value="154" data-field-top-res-960-value="154" data-field-top-value="154"
            data-field-topunits-value="px" data-field-width-value="380" data-field-widthunits-value="px">
            <a class="tn-atom" href="#anku_left"></a>
          </div>
          <div class="t396__elem tn-elem tn-elem__5059555391666808329598" data-elem-id="1666808329598"
            data-elem-type="shape" data-field-axisx-res-320-value="center" data-field-axisx-value="center"
            data-field-axisy-value="top" data-field-container-value="grid" data-field-height-value="420"
            data-field-heightunits-value="px" data-field-left-res-320-value="300" data-field-left-res-480-value="400"
            data-field-left-res-640-value="410" data-field-left-res-960-value="410" data-field-left-value="410"
            data-field-leftunits-value="px" data-field-top-res-320-value="154" data-field-top-res-480-value="154"
            data-field-top-res-640-value="154" data-field-top-res-960-value="154" data-field-top-value="154"
            data-field-topunits-value="px" data-field-width-value="380" data-field-widthunits-value="px">
            <a class="tn-atom" href="#anku_right"></a>
          </div>
          <div class="t396__elem tn-elem tn-elem__5059555391667310338796" data-elem-id="1667310338796"
            data-elem-type="image" data-field-axisx-res-320-value="center" data-field-axisx-value="left"
            data-field-axisy-value="top" data-field-container-value="grid" data-field-fileheight-value="46"
            data-field-filewidth-value="53" data-field-heightunits-value="" data-field-left-res-320-value="164"
            data-field-left-value="5" data-field-leftunits-value="px" data-field-top-res-320-value="339"
            data-field-top-value="-85" data-field-topunits-value="px" data-field-width-res-320-value="33"
            data-field-width-value="53" data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img t-img" data-original="images/Arrow_White.svg"
                imgfield="tn_img_1667310338796" />
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5059555391667310338801" data-elem-id="1667310338801"
            data-elem-type="image" data-field-axisx-res-320-value="center" data-field-axisx-value="left"
            data-field-axisy-value="top" data-field-container-value="grid" data-field-fileheight-value="46"
            data-field-filewidth-value="53" data-field-heightunits-value="" data-field-left-res-320-value="-163"
            data-field-left-value="5" data-field-leftunits-value="px" data-field-top-res-320-value="339"
            data-field-top-value="-85" data-field-topunits-value="px" data-field-width-res-320-value="33"
            data-field-width-value="53" data-field-widthunits-value="px">
            <div class="tn-atom">
              <img alt="" class="tn-atom__img t-img" data-original="images/Arrow_White.svg"
                imgfield="tn_img_1667310338801" />
            </div>
          </div>
        </div>
      </div>
      <script>
        t_onReady(function () {
          t_onFuncLoad("t396_init", function () {
            t396_init("505955539");
          });
        });
      </script>
      <!-- /T396 -->
    </div>
    <div class="r t-rec" data-animationappear="off" data-record-type="390" id="rec506725594" style="opacity: 1">
      <div class="t390">
        <div aria-modal="true" class="t-popup" data-tooltip-hook="#popup:alex" role="dialog"
          style="background-color: rgba(0, 0, 0, 0.8)" tabindex="-1">
          <div class="t-popup__close t-popup__block-close">
            <button aria-label="Закрыть диалоговое окно" class="t-popup__close-wrapper t-popup__block-close-button"
              type="button">
              <svg class="t-popup__close-icon" height="23px" role="presentation" version="1.1" viewbox="0 0 23 23"
                width="23px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g fill="#ffffff" fill-rule="evenodd" stroke="none" stroke-width="1">
                  <rect height="30"
                    transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) "
                    width="2" x="10.3137085" y="-3.6862915"></rect>
                  <rect height="30"
                    transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) "
                    width="2" x="10.3137085" y="-3.6862915"></rect>
                </g>
              </svg>
            </button>
          </div>
          <div class="t-popup__container t-width t-width_6" style="background-color: #000000">
            <div class="t390__wrapper t-align_left">
              <div class="t390__descr t-descr t-descr_xs">
                Почему я инвестирую в Пенензу в нынешних условиях?<br />1. 30%
                годовых. Этого больше нигде не найти – и даже чортовы пирамиды
                уже не работают. А если работают – это ж пирамиды… Больше
                инвестировать – некуда.<br />2. Я стал инвестировать на
                Пенензе около пяти лет назад. Получил прибыль, все
                по-честному. <br />4. Меня ведет менеджер, который оперативно
                извещает меня – не, не звонками, упаси боже – сообщениями в
                вотсаппе. Что позволяет вести дела на площадке с минимальными
                затратами своего времени и сил.<br />Вывод: в наше время
                Пененза – наилучшее сочетание цена/качество, а именно –
                доходность/рисковость. Банки дают смешной процент, в биткойн
                верят только истинные апологеты плоской Земли.<br />Кроме
                того, можно еще и надеяться на то, что Пененза помогает
                кредитами тем отважным фирмам, которые таки ведут свою борьбу
                за существование на благо своих хозяев и страны в целом. Тогда
                еще и миссия появляется…<br /><br />
              </div>
            </div>
          </div>
        </div>
      </div>
      <script type="text/javascript">
        t_onReady(function () {
          var rec = document.querySelector("#rec506725594");
          if (!rec) return;
          rec.setAttribute("data-animationappear", "off");
          rec.style.opacity = 1;
          t_onFuncLoad("t390_initPopup", function () {
            t390_initPopup("506725594");
          });
        });
      </script>
      <style>
        #rec506725594 .t390__uptitle {
          font-size: 18px;
          color: #ffffff;
          font-weight: 500;
          font-family: "Montserrat";
        }

        #rec506725594 .t390__descr {
          font-size: 18px;
          color: #ffffff;
          font-weight: 500;
          font-family: "Montserrat";
        }
      </style>
    </div>
    <div class="r t-rec" data-animationappear="off" data-record-type="390" id="rec506729555" style="opacity: 1">
      <div class="t390">
        <div aria-modal="true" class="t-popup" data-tooltip-hook="#popup:egor" role="dialog"
          style="background-color: rgba(0, 0, 0, 0.8)" tabindex="-1">
          <div class="t-popup__close t-popup__block-close">
            <button aria-label="Закрыть диалоговое окно" class="t-popup__close-wrapper t-popup__block-close-button"
              type="button">
              <svg class="t-popup__close-icon" height="23px" role="presentation" version="1.1" viewbox="0 0 23 23"
                width="23px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g fill="#ffffff" fill-rule="evenodd" stroke="none" stroke-width="1">
                  <rect height="30"
                    transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) "
                    width="2" x="10.3137085" y="-3.6862915"></rect>
                  <rect height="30"
                    transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) "
                    width="2" x="10.3137085" y="-3.6862915"></rect>
                </g>
              </svg>
            </button>
          </div>
          <div class="t-popup__container t-width t-width_6" style="background-color: #000000">
            <div class="t390__wrapper t-align_left">
              <div class="t390__descr t-descr t-descr_xs">
                Сервис Penenza мне очень нравится как краудлендинговая
                платформа, у которой в России большое будущее. В эту платформу
                я верю и, несомненно, буду вкладывать дальше. Хочется
                подчеркнуть, что за последнее время Penenza очень изменилась:
                появилась Рассрочка, а также возможность работать вместе с
                менеджером, которому можно задать многие вопросы и который
                может подобрать для тебя наиболее актуальные предложения.
                Минусом является то, что предложений не очень много и для
                диверсификации на самой Penenza должно пройти довольно много
                времени, но это никак не минус, а лишь точка роста. <br /><br />
              </div>
            </div>
          </div>
        </div>
      </div>
      <script type="text/javascript">
        t_onReady(function () {
          var rec = document.querySelector("#rec506729555");
          if (!rec) return;
          rec.setAttribute("data-animationappear", "off");
          rec.style.opacity = 1;
          t_onFuncLoad("t390_initPopup", function () {
            t390_initPopup("506729555");
          });
        });
      </script>
      <style>
        #rec506729555 .t390__uptitle {
          font-size: 18px;
          color: #ffffff;
          font-weight: 500;
          font-family: "Montserrat";
        }

        #rec506729555 .t390__descr {
          font-size: 18px;
          color: #ffffff;
          font-weight: 500;
          font-family: "Montserrat";
        }
      </style>
    </div>
    <div class="r t-rec" data-animationappear="off" data-record-type="390" id="rec506743691" style="opacity: 1">
      <div class="t390">
        <div aria-modal="true" class="t-popup" data-tooltip-hook="#popup:vita" role="dialog"
          style="background-color: rgba(0, 0, 0, 0.8)" tabindex="-1">
          <div class="t-popup__close t-popup__block-close">
            <button aria-label="Закрыть диалоговое окно" class="t-popup__close-wrapper t-popup__block-close-button"
              type="button">
              <svg class="t-popup__close-icon" height="23px" role="presentation" version="1.1" viewbox="0 0 23 23"
                width="23px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g fill="#ffffff" fill-rule="evenodd" stroke="none" stroke-width="1">
                  <rect height="30"
                    transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) "
                    width="2" x="10.3137085" y="-3.6862915"></rect>
                  <rect height="30"
                    transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) "
                    width="2" x="10.3137085" y="-3.6862915"></rect>
                </g>
              </svg>
            </button>
          </div>
          <div class="t-popup__container t-width t-width_6" style="background-color: #000000">
            <div class="t390__wrapper t-align_left">
              <div class="t390__descr t-descr t-descr_xs">
                Хотел оставить отзыв о самой старой и известной платформе,
                плохо что инвестированием здесь занялся совсем недавно, жалко
                упущенного времени. Хорошая команда, отдельно хотел выделить
                Аиду действительно хороший и отзывчивый специалист. Всегда
                качественные и проверенные заемщики. Работают ребята
                качественно, быстро и честно. Так что рекомендую от чистого
                сердца.
              </div>
            </div>
          </div>
        </div>
      </div>
      <script type="text/javascript">
        t_onReady(function () {
          var rec = document.querySelector("#rec506743691");
          if (!rec) return;
          rec.setAttribute("data-animationappear", "off");
          rec.style.opacity = 1;
          t_onFuncLoad("t390_initPopup", function () {
            t390_initPopup("506743691");
          });
        });
      </script>
      <style>
        #rec506743691 .t390__uptitle {
          font-size: 18px;
          color: #ffffff;
          font-weight: 500;
          font-family: "Montserrat";
        }

        #rec506743691 .t390__descr {
          font-size: 18px;
          color: #ffffff;
          font-weight: 500;
          font-family: "Montserrat";
        }
      </style>
    </div>
    <div class="r t-rec" data-animationappear="off" data-record-type="396" id="rec506418473" style="">
      <!-- T396 -->
      <style>
        #rec506418473 .t396__artboard {
          height: 420px;
        }

        #rec506418473 .t396__filter {
          height: 420px;
        }

        #rec506418473 .t396__carrier {
          height: 420px;
          background-position: center center;
          background-attachment: scroll;
          background-size: cover;
          background-repeat: no-repeat;
        }

        @media screen and (max-width: 1199px) {

          #rec506418473 .t396__artboard,
          #rec506418473 .t396__filter,
          #rec506418473 .t396__carrier {}

          #rec506418473 .t396__filter {}

          #rec506418473 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 959px) {

          #rec506418473 .t396__artboard,
          #rec506418473 .t396__filter,
          #rec506418473 .t396__carrier {}

          #rec506418473 .t396__filter {}

          #rec506418473 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 639px) {

          #rec506418473 .t396__artboard,
          #rec506418473 .t396__filter,
          #rec506418473 .t396__carrier {}

          #rec506418473 .t396__filter {}

          #rec506418473 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 479px) {

          #rec506418473 .t396__artboard,
          #rec506418473 .t396__filter,
          #rec506418473 .t396__carrier {
            height: 500px;
          }

          #rec506418473 .t396__filter {}

          #rec506418473 .t396__carrier {
            background-position: center center;
            background-attachment: scroll;
          }
        }

        #rec506418473 .tn-elem[data-elem-id="1666810502422"] {
          z-index: 1;
          top: 0px;
          left: 0px;
          width: 380px;
          height: 420px;
        }

        #rec506418473 .tn-elem[data-elem-id="1666810502422"] .tn-atom {
          border-radius: 32px;
          background-color: #161617;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {}

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec506418473 .tn-elem[data-elem-id="1666810502422"] {
            top: 0px;
            left: 20px;
            width: 280px;
            height: 500px;
            border-radius: 16px;
          }

          #rec506418473 .tn-elem[data-elem-id="1666810502422"] .tn-atom {
            border-radius: 16px;
          }
        }

        #rec506418473 .tn-elem[data-elem-id="1666810502427"] {
          color: #ffffff;
          z-index: 2;
          top: 150px;
          left: 24px;
          width: 330px;
        }

        #rec506418473 .tn-elem[data-elem-id="1666810502427"] .tn-atom {
          color: #ffffff;
          font-size: 16px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.4;
          font-weight: 500;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {}

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec506418473 .tn-elem[data-elem-id="1666810502427"] {
            top: 148px;
            left: 40px;
            width: 232px;
          }
        }

        #rec506418473 .tn-elem[data-elem-id="1666810502430"] {
          color: #ffffff;
          z-index: 3;
          top: 71px;
          left: 136px;
          width: 140px;
        }

        #rec506418473 .tn-elem[data-elem-id="1666810502430"] .tn-atom {
          color: #ffffff;
          font-size: 16px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.4;
          font-weight: 400;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {}

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec506418473 .tn-elem[data-elem-id="1666810502430"] {
            top: 57px;
            left: 148px;
          }
        }

        #rec506418473 .tn-elem[data-elem-id="1666810502434"] {
          color: #ffffff;
          z-index: 4;
          top: 95px;
          left: 136px;
          width: 180px;
        }

        #rec506418473 .tn-elem[data-elem-id="1666810502434"] .tn-atom {
          color: #ffffff;
          font-size: 16px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.4;
          font-weight: 400;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {}

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec506418473 .tn-elem[data-elem-id="1666810502434"] {
            top: 83px;
            left: 148px;
            width: 111px;
          }
        }

        #rec506418473 .tn-elem[data-elem-id="1666810502437"] {
          color: #ffffff;
          z-index: 5;
          top: 29px;
          left: 136px;
          width: 111px;
        }

        #rec506418473 .tn-elem[data-elem-id="1666810502437"] .tn-atom {
          color: #ffffff;
          font-size: 24px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.4;
          font-weight: 600;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {}

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec506418473 .tn-elem[data-elem-id="1666810502437"] {
            top: 15px;
            left: 148px;
          }
        }

        #rec506418473 .tn-elem[data-elem-id="1666810502440"] {
          z-index: 6;
          top: 24px;
          left: 24px;
          width: 92px;
          height: 100px;
        }

        #rec506418473 .tn-elem[data-elem-id="1666810502440"] .tn-atom {
          background-position: center center;
          background-size: cover;
          background-repeat: no-repeat;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {}

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec506418473 .tn-elem[data-elem-id="1666810502440"] {
            top: 24px;
            left: 40px;
          }

          #rec506418473 .tn-elem[data-elem-id="1666810502440"] .tn-atom {
            -webkit-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            transform: rotate(0deg);
          }
        }

        #rec506418473 .tn-elem[data-elem-id="1666873673726"] {
          color: #ffffff;
          text-align: center;
          z-index: 7;
          top: 325px;
          left: 30px;
          width: 320px;
          height: 55px;
        }

        #rec506418473 .tn-elem[data-elem-id="1666873673726"] .tn-atom {
          color: #ffffff;
          font-size: 16px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.55;
          font-weight: 600;
          border-width: 2px;
          border-radius: 16px;
          background-position: center center;
          border-color: #ffffff;
          border-style: solid;
          transition: background-color 0.2s ease-in-out,
            color 0.2s ease-in-out, border-color 0.2s ease-in-out;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {}

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec506418473 .tn-elem[data-elem-id="1666873673726"] {
            top: 415px;
            left: 35px;
            width: 250px;
            height: 55px;
          }
        }
      </style>
      <div class="t396">
        <div class="t396__artboard" data-artboard-height="420" data-artboard-height-res-320="500"
          data-artboard-recid="506418473" data-artboard-screens="320,480,640,960,1200" data-artboard-upscale="grid"
          data-artboard-upscale-res-320="grid" data-artboard-valign="center">
          <div class="t396__carrier" data-artboard-recid="506418473"></div>
          <div class="t396__filter" data-artboard-recid="506418473"></div>
          <div class="t396__elem tn-elem tn-elem__5064184731666810502422" data-elem-id="1666810502422"
            data-elem-type="shape" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="window" data-field-height-res-320-value="500" data-field-height-value="420"
            data-field-heightunits-value="px" data-field-left-res-320-value="20" data-field-left-value="0"
            data-field-leftunits-value="px" data-field-top-res-320-value="0" data-field-top-value="0"
            data-field-topunits-value="px" data-field-width-res-320-value="280" data-field-width-value="380"
            data-field-widthunits-value="px">
            <div class="tn-atom"></div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5064184731666810502427" data-elem-id="1666810502427"
            data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="window" data-field-heightunits-value="" data-field-left-res-320-value="40"
            data-field-left-value="24" data-field-leftunits-value="px" data-field-top-res-320-value="148"
            data-field-top-value="150" data-field-topunits-value="px" data-field-width-res-320-value="232"
            data-field-width-value="330" data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666810502427">
              Почему я инвестирую в Пенензу в нынешних условиях?<br /><br />1.
              30% годовых. Этого больше нигде не найти – и даже чортовы
              пирамиды уже не работают. А если работают – это ж пирамиды…
              Больше...
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5064184731666810502430" data-elem-id="1666810502430"
            data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="window" data-field-heightunits-value="" data-field-left-res-320-value="148"
            data-field-left-value="136" data-field-leftunits-value="px" data-field-top-res-320-value="57"
            data-field-top-value="71" data-field-topunits-value="px" data-field-width-value="140"
            data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666810502430">
              Стаж 7 месяцев
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5064184731666810502434" data-elem-id="1666810502434"
            data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="window" data-field-heightunits-value="" data-field-left-res-320-value="148"
            data-field-left-value="136" data-field-leftunits-value="px" data-field-top-res-320-value="83"
            data-field-top-value="95" data-field-topunits-value="px" data-field-width-res-320-value="111"
            data-field-width-value="180" data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666810502434">
              Портфель 132 000 ₽
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5064184731666810502437" data-elem-id="1666810502437"
            data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="window" data-field-heightunits-value="" data-field-left-res-320-value="148"
            data-field-left-value="136" data-field-leftunits-value="px" data-field-top-res-320-value="15"
            data-field-top-value="29" data-field-topunits-value="px" data-field-width-value="111"
            data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666810502437">Алексей</div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5064184731666810502440" data-elem-id="1666810502440"
            data-elem-type="shape" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="window" data-field-height-value="100" data-field-heightunits-value="px"
            data-field-left-res-320-value="40" data-field-left-value="24" data-field-leftunits-value="px"
            data-field-top-res-320-value="24" data-field-top-value="24" data-field-topunits-value="px"
            data-field-width-value="92" data-field-widthunits-value="px">
            <div class="tn-atom t-bgimg"
              data-original="https://static.tildacdn.com/tild3633-3035-4262-b235-346637323238/icon_.png"></div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5064184731666873673726" data-elem-id="1666873673726"
            data-elem-type="button" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="window" data-field-height-res-320-value="55" data-field-height-value="55"
            data-field-heightunits-value="" data-field-left-res-320-value="35" data-field-left-value="30"
            data-field-leftunits-value="px" data-field-top-res-320-value="415" data-field-top-value="325"
            data-field-topunits-value="px" data-field-width-res-320-value="250" data-field-width-value="320"
            data-field-widthunits-value="">
            <a class="tn-atom" href="#popup:alex">Читать</a>
          </div>
        </div>
      </div>
      <script>
        t_onReady(function () {
          t_onFuncLoad("t396_init", function () {
            t396_init("506418473");
          });
        });
      </script>
      <!-- /T396 -->
    </div>
    <div class="r t-rec" data-animationappear="off" data-record-type="396" id="rec506422710" style="">
      <!-- T396 -->
      <style>
        #rec506422710 .t396__artboard {
          height: 420px;
        }

        #rec506422710 .t396__filter {
          height: 420px;
        }

        #rec506422710 .t396__carrier {
          height: 420px;
          background-position: center center;
          background-attachment: scroll;
          background-size: cover;
          background-repeat: no-repeat;
        }

        @media screen and (max-width: 1199px) {

          #rec506422710 .t396__artboard,
          #rec506422710 .t396__filter,
          #rec506422710 .t396__carrier {}

          #rec506422710 .t396__filter {}

          #rec506422710 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 959px) {

          #rec506422710 .t396__artboard,
          #rec506422710 .t396__filter,
          #rec506422710 .t396__carrier {}

          #rec506422710 .t396__filter {}

          #rec506422710 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 639px) {

          #rec506422710 .t396__artboard,
          #rec506422710 .t396__filter,
          #rec506422710 .t396__carrier {}

          #rec506422710 .t396__filter {}

          #rec506422710 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 479px) {

          #rec506422710 .t396__artboard,
          #rec506422710 .t396__filter,
          #rec506422710 .t396__carrier {
            height: 500px;
          }

          #rec506422710 .t396__filter {}

          #rec506422710 .t396__carrier {
            background-position: center center;
            background-attachment: scroll;
          }
        }

        #rec506422710 .tn-elem[data-elem-id="1666810211962"] {
          z-index: 15;
          top: 24px;
          left: 24px;
          width: 92px;
          height: 100px;
        }

        #rec506422710 .tn-elem[data-elem-id="1666810211962"] .tn-atom {
          background-position: center center;
          background-size: cover;
          background-repeat: no-repeat;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {}

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec506422710 .tn-elem[data-elem-id="1666810211962"] {
            top: 24px;
            left: 40px;
          }

          #rec506422710 .tn-elem[data-elem-id="1666810211962"] .tn-atom {
            -webkit-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            transform: rotate(0deg);
          }
        }

        #rec506422710 .tn-elem[data-elem-id="1666810211959"] {
          color: #ffffff;
          z-index: 14;
          top: 29px;
          left: 136px;
          width: 111px;
        }

        #rec506422710 .tn-elem[data-elem-id="1666810211959"] .tn-atom {
          color: #ffffff;
          font-size: 24px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.4;
          font-weight: 600;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {}

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec506422710 .tn-elem[data-elem-id="1666810211959"] {
            top: 15px;
            left: 148px;
          }
        }

        #rec506422710 .tn-elem[data-elem-id="1666810211951"] {
          color: #ffffff;
          z-index: 13;
          top: 95px;
          left: 136px;
          width: 180px;
        }

        #rec506422710 .tn-elem[data-elem-id="1666810211951"] .tn-atom {
          color: #ffffff;
          font-size: 16px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.4;
          font-weight: 400;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {}

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec506422710 .tn-elem[data-elem-id="1666810211951"] {
            top: 83px;
            left: 148px;
            width: 111px;
          }
        }

        #rec506422710 .tn-elem[data-elem-id="1666810211938"] {
          color: #ffffff;
          z-index: 12;
          top: 71px;
          left: 136px;
          width: 140px;
        }

        #rec506422710 .tn-elem[data-elem-id="1666810211938"] .tn-atom {
          color: #ffffff;
          font-size: 16px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.4;
          font-weight: 400;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {}

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec506422710 .tn-elem[data-elem-id="1666810211938"] {
            top: 57px;
            left: 148px;
          }
        }

        #rec506422710 .tn-elem[data-elem-id="1666810211932"] {
          color: #ffffff;
          z-index: 11;
          top: 150px;
          left: 24px;
          width: 330px;
        }

        #rec506422710 .tn-elem[data-elem-id="1666810211932"] .tn-atom {
          color: #ffffff;
          font-size: 16px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.4;
          font-weight: 500;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {}

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec506422710 .tn-elem[data-elem-id="1666810211932"] {
            top: 148px;
            left: 40px;
            width: 232px;
          }
        }

        #rec506422710 .tn-elem[data-elem-id="1666810211924"] {
          z-index: 10;
          top: 0px;
          left: 0px;
          width: 380px;
          height: 420px;
        }

        #rec506422710 .tn-elem[data-elem-id="1666810211924"] .tn-atom {
          border-radius: 32px;
          background-color: #161617;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {}

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec506422710 .tn-elem[data-elem-id="1666810211924"] {
            top: 0px;
            left: 20px;
            width: 280px;
            height: 500px;
            border-radius: 16px;
          }

          #rec506422710 .tn-elem[data-elem-id="1666810211924"] .tn-atom {
            border-radius: 16px;
          }
        }

        #rec506422710 .tn-elem[data-elem-id="1666875898303"] {
          color: #ffffff;
          text-align: center;
          z-index: 16;
          top: 325px;
          left: 30px;
          width: 320px;
          height: 55px;
        }

        #rec506422710 .tn-elem[data-elem-id="1666875898303"] .tn-atom {
          color: #ffffff;
          font-size: 16px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.55;
          font-weight: 600;
          border-width: 2px;
          border-radius: 16px;
          background-position: center center;
          border-color: #ffffff;
          border-style: solid;
          transition: background-color 0.2s ease-in-out,
            color 0.2s ease-in-out, border-color 0.2s ease-in-out;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {}

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec506422710 .tn-elem[data-elem-id="1666875898303"] {
            top: 415px;
            left: 35px;
            width: 250px;
            height: 55px;
          }
        }
      </style>
      <div class="t396">
        <div class="t396__artboard" data-artboard-height="420" data-artboard-height-res-320="500"
          data-artboard-recid="506422710" data-artboard-screens="320,480,640,960,1200" data-artboard-upscale="grid"
          data-artboard-upscale-res-320="grid" data-artboard-valign="center">
          <div class="t396__carrier" data-artboard-recid="506422710"></div>
          <div class="t396__filter" data-artboard-recid="506422710"></div>
          <div class="t396__elem tn-elem tn-elem__5064227101666810211962" data-elem-id="1666810211962"
            data-elem-type="shape" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="window" data-field-height-value="100" data-field-heightunits-value="px"
            data-field-left-res-320-value="40" data-field-left-value="24" data-field-leftunits-value="px"
            data-field-top-res-320-value="24" data-field-top-value="24" data-field-topunits-value="px"
            data-field-width-value="92" data-field-widthunits-value="px">
            <div class="tn-atom t-bgimg"
              data-original="https://static.tildacdn.com/tild3138-6639-4132-b738-383661386363/icon.png"></div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5064227101666810211959" data-elem-id="1666810211959"
            data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="window" data-field-heightunits-value="" data-field-left-res-320-value="148"
            data-field-left-value="136" data-field-leftunits-value="px" data-field-top-res-320-value="15"
            data-field-top-value="29" data-field-topunits-value="px" data-field-width-value="111"
            data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666810211959">Виталий</div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5064227101666810211951" data-elem-id="1666810211951"
            data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="window" data-field-heightunits-value="" data-field-left-res-320-value="148"
            data-field-left-value="136" data-field-leftunits-value="px" data-field-top-res-320-value="83"
            data-field-top-value="95" data-field-topunits-value="px" data-field-width-res-320-value="111"
            data-field-width-value="180" data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666810211951">
              Портфель 218 000 ₽
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5064227101666810211938" data-elem-id="1666810211938"
            data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="window" data-field-heightunits-value="" data-field-left-res-320-value="148"
            data-field-left-value="136" data-field-leftunits-value="px" data-field-top-res-320-value="57"
            data-field-top-value="71" data-field-topunits-value="px" data-field-width-value="140"
            data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666810211938">
              Стаж 9 месяцев
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5064227101666810211932" data-elem-id="1666810211932"
            data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="window" data-field-heightunits-value="" data-field-left-res-320-value="40"
            data-field-left-value="24" data-field-leftunits-value="px" data-field-top-res-320-value="148"
            data-field-top-value="150" data-field-topunits-value="px" data-field-width-res-320-value="232"
            data-field-width-value="330" data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666810211932">
              Хотел оставить отзыв о самой старой и известной платформе, плохо
              что инвестированием здесь занялся совсем недавно, жалко
              упущенного времени. Хорошая команда, отдельно хотел выделить
              Аиду действительно хороший и отзывчивый специалист...
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5064227101666810211924" data-elem-id="1666810211924"
            data-elem-type="shape" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="window" data-field-height-res-320-value="500" data-field-height-value="420"
            data-field-heightunits-value="px" data-field-left-res-320-value="20" data-field-left-value="0"
            data-field-leftunits-value="px" data-field-top-res-320-value="0" data-field-top-value="0"
            data-field-topunits-value="px" data-field-width-res-320-value="280" data-field-width-value="380"
            data-field-widthunits-value="px">
            <div class="tn-atom"></div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5064227101666875898303" data-elem-id="1666875898303"
            data-elem-type="button" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="window" data-field-height-res-320-value="55" data-field-height-value="55"
            data-field-heightunits-value="" data-field-left-res-320-value="35" data-field-left-value="30"
            data-field-leftunits-value="px" data-field-top-res-320-value="415" data-field-top-value="325"
            data-field-topunits-value="px" data-field-width-res-320-value="250" data-field-width-value="320"
            data-field-widthunits-value="">
            <a class="tn-atom" href="#popup:vita">Читать</a>
          </div>
        </div>
      </div>
      <script>
        t_onReady(function () {
          t_onFuncLoad("t396_init", function () {
            t396_init("506422710");
          });
        });
      </script>
      <!-- /T396 -->
    </div>
    <div class="r t-rec" data-animationappear="off" data-record-type="396" id="rec506422715" style="">
      <!-- T396 -->
      <style>
        #rec506422715 .t396__artboard {
          height: 420px;
        }

        #rec506422715 .t396__filter {
          height: 420px;
        }

        #rec506422715 .t396__carrier {
          height: 420px;
          background-position: center center;
          background-attachment: scroll;
          background-size: cover;
          background-repeat: no-repeat;
        }

        @media screen and (max-width: 1199px) {

          #rec506422715 .t396__artboard,
          #rec506422715 .t396__filter,
          #rec506422715 .t396__carrier {}

          #rec506422715 .t396__filter {}

          #rec506422715 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 959px) {

          #rec506422715 .t396__artboard,
          #rec506422715 .t396__filter,
          #rec506422715 .t396__carrier {}

          #rec506422715 .t396__filter {}

          #rec506422715 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 639px) {

          #rec506422715 .t396__artboard,
          #rec506422715 .t396__filter,
          #rec506422715 .t396__carrier {}

          #rec506422715 .t396__filter {}

          #rec506422715 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 479px) {

          #rec506422715 .t396__artboard,
          #rec506422715 .t396__filter,
          #rec506422715 .t396__carrier {
            height: 500px;
          }

          #rec506422715 .t396__filter {}

          #rec506422715 .t396__carrier {
            background-position: center center;
            background-attachment: scroll;
          }
        }

        #rec506422715 .tn-elem[data-elem-id="1666810778520"] {
          z-index: 1;
          top: 0px;
          left: 0px;
          width: 380px;
          height: 420px;
        }

        #rec506422715 .tn-elem[data-elem-id="1666810778520"] .tn-atom {
          border-radius: 32px;
          background-color: #161617;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {}

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec506422715 .tn-elem[data-elem-id="1666810778520"] {
            top: 0px;
            left: 20px;
            width: 280px;
            height: 500px;
            border-radius: 16px;
          }

          #rec506422715 .tn-elem[data-elem-id="1666810778520"] .tn-atom {
            border-radius: 16px;
          }
        }

        #rec506422715 .tn-elem[data-elem-id="1666810778526"] {
          color: #ffffff;
          z-index: 2;
          top: 150px;
          left: 24px;
          width: 326px;
        }

        #rec506422715 .tn-elem[data-elem-id="1666810778526"] .tn-atom {
          color: #ffffff;
          font-size: 16px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.4;
          font-weight: 500;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {}

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec506422715 .tn-elem[data-elem-id="1666810778526"] {
            top: 148px;
            left: 40px;
            width: 237px;
          }
        }

        #rec506422715 .tn-elem[data-elem-id="1666810778533"] {
          color: #ffffff;
          z-index: 3;
          top: 71px;
          left: 136px;
          width: 140px;
        }

        #rec506422715 .tn-elem[data-elem-id="1666810778533"] .tn-atom {
          color: #ffffff;
          font-size: 16px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.4;
          font-weight: 400;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {}

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec506422715 .tn-elem[data-elem-id="1666810778533"] {
            top: 57px;
            left: 148px;
          }
        }

        #rec506422715 .tn-elem[data-elem-id="1666810778537"] {
          color: #ffffff;
          z-index: 4;
          top: 95px;
          left: 136px;
          width: 180px;
        }

        #rec506422715 .tn-elem[data-elem-id="1666810778537"] .tn-atom {
          color: #ffffff;
          font-size: 16px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.4;
          font-weight: 400;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {}

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec506422715 .tn-elem[data-elem-id="1666810778537"] {
            top: 83px;
            left: 148px;
            width: 111px;
          }
        }

        #rec506422715 .tn-elem[data-elem-id="1666810778543"] {
          color: #ffffff;
          z-index: 5;
          top: 29px;
          left: 136px;
          width: 111px;
        }

        #rec506422715 .tn-elem[data-elem-id="1666810778543"] .tn-atom {
          color: #ffffff;
          font-size: 24px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.4;
          font-weight: 600;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {}

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec506422715 .tn-elem[data-elem-id="1666810778543"] {
            top: 15px;
            left: 148px;
          }
        }

        #rec506422715 .tn-elem[data-elem-id="1666810778547"] {
          z-index: 6;
          top: 24px;
          left: 24px;
          width: 92px;
          height: 100px;
        }

        #rec506422715 .tn-elem[data-elem-id="1666810778547"] .tn-atom {
          background-position: center center;
          background-size: cover;
          background-repeat: no-repeat;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {}

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec506422715 .tn-elem[data-elem-id="1666810778547"] {
            top: 24px;
            left: 40px;
          }

          #rec506422715 .tn-elem[data-elem-id="1666810778547"] .tn-atom {
            -webkit-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            transform: rotate(0deg);
          }
        }

        #rec506422715 .tn-elem[data-elem-id="1666875963303"] {
          color: #ffffff;
          text-align: center;
          z-index: 7;
          top: 325px;
          left: 30px;
          width: 320px;
          height: 55px;
        }

        #rec506422715 .tn-elem[data-elem-id="1666875963303"] .tn-atom {
          color: #ffffff;
          font-size: 16px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.55;
          font-weight: 600;
          border-width: 2px;
          border-radius: 16px;
          background-position: center center;
          border-color: #ffffff;
          border-style: solid;
          transition: background-color 0.2s ease-in-out,
            color 0.2s ease-in-out, border-color 0.2s ease-in-out;
        }

        @media screen and (max-width: 1199px) {}

        @media screen and (max-width: 959px) {}

        @media screen and (max-width: 639px) {}

        @media screen and (max-width: 479px) {
          #rec506422715 .tn-elem[data-elem-id="1666875963303"] {
            top: 415px;
            left: 35px;
            width: 250px;
            height: 55px;
          }
        }
      </style>
      <div class="t396">
        <div class="t396__artboard" data-artboard-height="420" data-artboard-height-res-320="500"
          data-artboard-recid="506422715" data-artboard-screens="320,480,640,960,1200" data-artboard-upscale="grid"
          data-artboard-upscale-res-320="grid" data-artboard-valign="center">
          <div class="t396__carrier" data-artboard-recid="506422715"></div>
          <div class="t396__filter" data-artboard-recid="506422715"></div>
          <div class="t396__elem tn-elem tn-elem__5064227151666810778520" data-elem-id="1666810778520"
            data-elem-type="shape" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="window" data-field-height-res-320-value="500" data-field-height-value="420"
            data-field-heightunits-value="px" data-field-left-res-320-value="20" data-field-left-value="0"
            data-field-leftunits-value="px" data-field-top-res-320-value="0" data-field-top-value="0"
            data-field-topunits-value="px" data-field-width-res-320-value="280" data-field-width-value="380"
            data-field-widthunits-value="px">
            <div class="tn-atom"></div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5064227151666810778526" data-elem-id="1666810778526"
            data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="window" data-field-heightunits-value="" data-field-left-res-320-value="40"
            data-field-left-value="24" data-field-leftunits-value="px" data-field-top-res-320-value="148"
            data-field-top-value="150" data-field-topunits-value="px" data-field-width-res-320-value="237"
            data-field-width-value="326" data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666810778526">
              Сервис Penenza мне очень нравится как краудлендинговая
              платформа, у которой в России большое будущее. <br />В эту
              платформу я верю и, несомненно, буду вкладывать дальше. Хочется
              подчеркнуть, что за последнее время Penenza очень...
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5064227151666810778533" data-elem-id="1666810778533"
            data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="window" data-field-heightunits-value="" data-field-left-res-320-value="148"
            data-field-left-value="136" data-field-leftunits-value="px" data-field-top-res-320-value="57"
            data-field-top-value="71" data-field-topunits-value="px" data-field-width-value="140"
            data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666810778533">
              Стаж 2 года
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5064227151666810778537" data-elem-id="1666810778537"
            data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="window" data-field-heightunits-value="" data-field-left-res-320-value="148"
            data-field-left-value="136" data-field-leftunits-value="px" data-field-top-res-320-value="83"
            data-field-top-value="95" data-field-topunits-value="px" data-field-width-res-320-value="111"
            data-field-width-value="180" data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666810778537">
              Портфель 387 000 ₽
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5064227151666810778543" data-elem-id="1666810778543"
            data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="window" data-field-heightunits-value="" data-field-left-res-320-value="148"
            data-field-left-value="136" data-field-leftunits-value="px" data-field-top-res-320-value="15"
            data-field-top-value="29" data-field-topunits-value="px" data-field-width-value="111"
            data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666810778543">Егор</div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5064227151666810778547" data-elem-id="1666810778547"
            data-elem-type="shape" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="window" data-field-height-value="100" data-field-heightunits-value="px"
            data-field-left-res-320-value="40" data-field-left-value="24" data-field-leftunits-value="px"
            data-field-top-res-320-value="24" data-field-top-value="24" data-field-topunits-value="px"
            data-field-width-value="92" data-field-widthunits-value="px">
            <div class="tn-atom t-bgimg"
              data-original="https://static.tildacdn.com/tild3135-3163-4136-a663-623063666338/photo.png"></div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5064227151666875963303" data-elem-id="1666875963303"
            data-elem-type="button" data-field-axisx-value="left" data-field-axisy-value="top"
            data-field-container-value="window" data-field-height-res-320-value="55" data-field-height-value="55"
            data-field-heightunits-value="" data-field-left-res-320-value="35" data-field-left-value="30"
            data-field-leftunits-value="px" data-field-top-res-320-value="415" data-field-top-value="325"
            data-field-topunits-value="px" data-field-width-res-320-value="250" data-field-width-value="320"
            data-field-widthunits-value="">
            <a class="tn-atom" href="#popup:egor">Читать</a>
          </div>
        </div>
      </div>
      <script>
        t_onReady(function () {
          t_onFuncLoad("t396_init", function () {
            t396_init("506422715");
          });
        });
      </script>
      <!-- /T396 -->
    </div>
    <div class="r t-rec" data-animationappear="off" data-bg-color="#212122" data-record-type="121" id="rec505703707"
      style="background-color: #212122">
      <!-- T396 -->
      <style>
        #rec505703707 .t396__artboard {
          height: 96px;
        }

        #rec505703707 .t396__filter {
          height: 96px;
        }

        #rec505703707 .t396__carrier {
          height: 96px;
          background-position: center center;
          background-attachment: scroll;
          background-size: cover;
          background-repeat: no-repeat;
        }

        @media screen and (max-width: 1199px) {

          #rec505703707 .t396__artboard,
          #rec505703707 .t396__filter,
          #rec505703707 .t396__carrier {}

          #rec505703707 .t396__filter {}

          #rec505703707 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 959px) {

          #rec505703707 .t396__artboard,
          #rec505703707 .t396__filter,
          #rec505703707 .t396__carrier {
            height: 72px;
          }

          #rec505703707 .t396__filter {}

          #rec505703707 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 639px) {

          #rec505703707 .t396__artboard,
          #rec505703707 .t396__filter,
          #rec505703707 .t396__carrier {}

          #rec505703707 .t396__filter {}

          #rec505703707 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 479px) {

          #rec505703707 .t396__artboard,
          #rec505703707 .t396__filter,
          #rec505703707 .t396__carrier {}

          #rec505703707 .t396__filter {}

          #rec505703707 .t396__carrier {
            background-attachment: scroll;
          }
        }
      </style>
      <div class="t396">
        <div class="t396__artboard" data-artboard-height="96" data-artboard-height-res-640="72"
          data-artboard-recid="505703707" data-artboard-screens="320,480,640,960,1200" data-artboard-upscale="grid"
          data-artboard-valign="center">
          <div class="t396__carrier" data-artboard-recid="505703707"></div>
          <div class="t396__filter" data-artboard-recid="505703707"></div>
        </div>
      </div>
      <script>
        t_onReady(function () {
          t_onFuncLoad("t396_init", function () {
            t396_init("505703707");
          });
        });
      </script>
      <!-- /T396 -->
    </div>
    <div class="r t-rec" data-animationappear="off" data-record-type="396" id="rec505965085" style="">
      <!-- T396 -->
      <style>
        #rec505965085 .t396__artboard {
          height: 180px;
          background-color: #212122;
        }

        #rec505965085 .t396__filter {
          height: 180px;
        }

        #rec505965085 .t396__carrier {
          height: 180px;
          background-position: center center;
          background-attachment: scroll;
          background-size: cover;
          background-repeat: no-repeat;
        }

        @media screen and (max-width: 1199px) {

          #rec505965085 .t396__artboard,
          #rec505965085 .t396__filter,
          #rec505965085 .t396__carrier {
            height: 210px;
          }

          #rec505965085 .t396__filter {}

          #rec505965085 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 959px) {

          #rec505965085 .t396__artboard,
          #rec505965085 .t396__filter,
          #rec505965085 .t396__carrier {}

          #rec505965085 .t396__filter {}

          #rec505965085 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 639px) {

          #rec505965085 .t396__artboard,
          #rec505965085 .t396__filter,
          #rec505965085 .t396__carrier {
            height: 250px;
          }

          #rec505965085 .t396__filter {}

          #rec505965085 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 479px) {

          #rec505965085 .t396__artboard,
          #rec505965085 .t396__filter,
          #rec505965085 .t396__carrier {
            height: 254px;
          }

          #rec505965085 .t396__filter {}

          #rec505965085 .t396__carrier {
            background-position: center center;
            background-attachment: scroll;
          }
        }

        #rec505965085 .tn-elem[data-elem-id="1666699726848"] {
          color: #ffffff;
          text-align: center;
          z-index: 6;
          top: 0px;
          left: calc(50% - 400px + 0px);
          width: 800px;
        }

        #rec505965085 .tn-elem[data-elem-id="1666699726848"] .tn-atom {
          color: #ffffff;
          font-size: 48px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.2;
          font-weight: 600;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505965085 .tn-elem[data-elem-id="1666699726848"] {
            top: 0px;
            left: calc(50% - 400px + 1px);
            width: 953px;
          }
        }

        @media screen and (max-width: 959px) {
          #rec505965085 .tn-elem[data-elem-id="1666699726848"] .tn-atom {
            font-size: 32px;
          }
        }

        @media screen and (max-width: 639px) {
          #rec505965085 .tn-elem[data-elem-id="1666699726848"] {
            top: 0px;
            left: calc(50% - 400px + 0px);
            width: 320px;
          }
        }

        @media screen and (max-width: 479px) {
          #rec505965085 .tn-elem[data-elem-id="1666699726848"] {
            top: 0px;
            left: calc(50% - 400px + 1px);
            width: 271px;
          }

          #rec505965085 .tn-elem[data-elem-id="1666699726848"] .tn-atom {
            font-size: 30px;
          }
        }

        #rec505965085 .tn-elem[data-elem-id="1666723583938"] {
          color: #ffffff;
          text-align: center;
          z-index: 12;
          top: 74px;
          left: calc(50% - 434px + 13px);
          width: 868px;
        }

        #rec505965085 .tn-elem[data-elem-id="1666723583938"] .tn-atom {
          color: #ffffff;
          font-size: 20px;
          font-family: "Montserrat", Arial, sans-serif;
          line-height: 1.2;
          font-weight: 500;
          background-position: center center;
          border-color: transparent;
          border-style: solid;
        }

        @media screen and (max-width: 1199px) {
          #rec505965085 .tn-elem[data-elem-id="1666723583938"] {
            top: 74px;
            left: calc(50% - 434px + 1px);
            width: 647px;
          }
        }

        @media screen and (max-width: 959px) {}

        @media screen and (max-width: 639px) {
          #rec505965085 .tn-elem[data-elem-id="1666723583938"] {
            top: 94px;
            left: calc(50% - 434px + 0px);
            width: 360px;
          }
        }

        @media screen and (max-width: 479px) {
          #rec505965085 .tn-elem[data-elem-id="1666723583938"] {
            top: 88px;
            left: calc(50% - 434px + 1px);
            width: 291px;
          }

          #rec505965085 .tn-elem[data-elem-id="1666723583938"] .tn-atom {
            font-size: 18px;
          }
        }
      </style>
      <div class="t396">
        <div class="t396__artboard" data-artboard-height="180" data-artboard-height-res-320="254"
          data-artboard-height-res-480="250" data-artboard-height-res-960="210" data-artboard-recid="505965085"
          data-artboard-screens="320,480,640,960,1200" data-artboard-upscale="grid" data-artboard-upscale-res-320="grid"
          data-artboard-valign="center">
          <div class="t396__carrier" data-artboard-recid="505965085"></div>
          <div class="t396__filter" data-artboard-recid="505965085"></div>
          <div class="t396__elem tn-elem tn-elem__5059650851666699726848" data-elem-id="1666699726848"
            data-elem-type="text" data-field-axisx-value="center" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="1"
            data-field-left-res-480-value="0" data-field-left-res-960-value="1" data-field-left-value="0"
            data-field-leftunits-value="px" data-field-top-res-320-value="0" data-field-top-res-480-value="0"
            data-field-top-res-960-value="0" data-field-top-value="0" data-field-topunits-value="px"
            data-field-width-res-320-value="271" data-field-width-res-480-value="320"
            data-field-width-res-960-value="953" data-field-width-value="800" data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666699726848">
              Вы спрашивали - мы отвечаем
            </div>
          </div>
          <div class="t396__elem tn-elem tn-elem__5059650851666723583938" data-elem-id="1666723583938"
            data-elem-type="text" data-field-axisx-value="center" data-field-axisy-value="top"
            data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="1"
            data-field-left-res-480-value="0" data-field-left-res-960-value="1" data-field-left-value="13"
            data-field-leftunits-value="px" data-field-top-res-320-value="88" data-field-top-res-480-value="94"
            data-field-top-res-960-value="74" data-field-top-value="74" data-field-topunits-value="px"
            data-field-width-res-320-value="291" data-field-width-res-480-value="360"
            data-field-width-res-960-value="647" data-field-width-value="868" data-field-widthunits-value="px">
            <div class="tn-atom" field="tn_text_1666723583938">
              Eсли у вас остались вопросы об инвестициях в малый бизнес
              <a href="#popup:embedcode" style="color: rgb(81, 169, 238)"><u>оставьте заявку</u></a>
              — с вами свяжется наш консультант и поможет разобраться
            </div>
          </div>
        </div>
      </div>
      <script>
        t_onReady(function () {
          t_onFuncLoad("t396_init", function () {
            t396_init("505965085");
          });
        });
      </script>
      <!-- /T396 -->
    </div>
    <div class="r t-rec t-rec_pt_0 t-rec_pb_0" data-animationappear="off" data-bg-color="#212122" data-record-type="849"
      id="rec505955423" style="padding-top: 0px; padding-bottom: 0px; background-color: #212122">
      <!-- t849-->
      <div class="t849">
        <div class="t-container">
          <div class="t-item t-col t-col_8 t-prefix_2">
            <div class="t849__accordion" data-accordion="false">
              <div class="t849__wrapper">
                <div class="t849__header t849__opened" style="border-top: 1px solid #eee">
                  <button aria-controls="accordion1_505955423" aria-expanded="true" class="t849__trigger-button"
                    type="button">
                    <span class="t849__title t-name t-name_xl" field="li_title__1531218331971">Как и с чего начать
                      инвестировать?</span><svg class="t849__icon" focusable="false" role="presentation"
                      viewbox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                      <circle cx="20" cy="20" r="20" stroke-width="0"></circle>
                      <g class="t849__lines" fill="none" stroke-width="2px">
                        <path d="M9 20H31"></path>
                        <path d="M20 9V31"></path>
                      </g>
                    </svg>
                  </button>
                </div>
                <div class="t849__content" id="accordion1_505955423" style="display: block">
                  <div class="t849__textwrapper">
                    <div class="t849__text t-descr t-descr_sm" field="li_descr__1531218331971">
                      Начать инвестировать вместе с Penenza легко: просто
                      зарегистрируйтесь на платформе и внесите на счет сумму
                      от 50 000₽. Зайдите на сайт в свой личный кабинет и
                      подключите автоинвестирование. Так вам не придется
                      тратить время на самостоятельный выбор проектов. Умный
                      робот сам распределит сумму по надежным представителям
                      бизнеса с рейтингом от ААА до В, не более 10% займа в
                      каждый для распределения рисков.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="t-item t-col t-col_8 t-prefix_2">
            <div class="t849__accordion" data-accordion="false">
              <div class="t849__wrapper">
                <div class="t849__header" style="border-top: 1px solid #eee">
                  <button aria-controls="accordion2_505955423" aria-expanded="false" class="t849__trigger-button"
                    type="button">
                    <span class="t849__title t-name t-name_xl" field="li_title__1531218535874">Что такое инвестиции и их
                      виды?</span><svg class="t849__icon" focusable="false" role="presentation" viewbox="0 0 40 40"
                      xmlns="http://www.w3.org/2000/svg">
                      <circle cx="20" cy="20" r="20" stroke-width="0"></circle>
                      <g class="t849__lines" fill="none" stroke-width="2px">
                        <path d="M9 20H31"></path>
                        <path d="M20 9V31"></path>
                      </g>
                    </svg>
                  </button>
                </div>
                <div class="t849__content" hidden="" id="accordion2_505955423">
                  <div class="t849__textwrapper">
                    <div class="t849__text t-descr t-descr_sm" field="li_descr__1531218535874">
                      Инвестиция — это вложение денег в расчете получить
                      прибыль. Куда именно — зависит от стратегии. Можно
                      инвестировать в фондовый рынок, недвижимость,
                      криптовалюты, направления реального бизнеса, драгметаллы
                      и т.д. От стратегии зависит и порог входа, и размер
                      потенциальной доходности. Через Penenza вы можете
                      инвестировать от 50 000 руб. и получать до 30 %
                      годовых.<br /><br />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="t-item t-col t-col_8 t-prefix_2">
            <div class="t849__accordion" data-accordion="false">
              <div class="t849__wrapper">
                <div class="t849__header" style="border-top: 1px solid #eee">
                  <button aria-controls="accordion3_505955423" aria-expanded="false" class="t849__trigger-button"
                    type="button">
                    <span class="t849__title t-name t-name_xl" field="li_title__1666724196407">В чем выгода от
                      инвестиций?</span><svg class="t849__icon" focusable="false" role="presentation"
                      viewbox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                      <circle cx="20" cy="20" r="20" stroke-width="0"></circle>
                      <g class="t849__lines" fill="none" stroke-width="2px">
                        <path d="M9 20H31"></path>
                        <path d="M20 9V31"></path>
                      </g>
                    </svg>
                  </button>
                </div>
                <div class="t849__content" hidden="" id="accordion3_505955423">
                  <div class="t849__textwrapper">
                    <div class="t849__text t-descr t-descr_sm" field="li_descr__1666724196407">
                      При грамотной стратегии вы получаете доходность выше,
                      чем по вкладам. Это позволяет обогнать инфляцию, дает
                      возможность заработать и защищает ваш капитал от
                      постоянного обесценивания. Инвестиции могут стать
                      источником пассивного дохода и регулярно увеличивать ваш
                      капитал.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="t-item t-col t-col_8 t-prefix_2">
            <div class="t849__accordion" data-accordion="false">
              <div class="t849__wrapper">
                <div class="t849__header" style="border-top: 1px solid #eee">
                  <button aria-controls="accordion4_505955423" aria-expanded="false" class="t849__trigger-button"
                    type="button">
                    <span class="t849__title t-name t-name_xl" field="li_title__1666724199019">Почему инвестиции через
                      Penenza надежны?</span><svg class="t849__icon" focusable="false" role="presentation"
                      viewbox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                      <circle cx="20" cy="20" r="20" stroke-width="0"></circle>
                      <g class="t849__lines" fill="none" stroke-width="2px">
                        <path d="M9 20H31"></path>
                        <path d="M20 9V31"></path>
                      </g>
                    </svg>
                  </button>
                </div>
                <div class="t849__content" hidden="" id="accordion4_505955423">
                  <div class="t849__textwrapper">
                    <div class="t849__text t-descr t-descr_sm" field="li_descr__1666724199019">
                      Надежность инвестиций через Penenza обусловлена как
                      внешними, там и внутренними факторами. Так, мы включены
                      в реестр оператора инвестиционных платформ Центробанка:
                      все сделки и схема работы на нашей платформе проверены и
                      одобрены регулятором. Документы вы можете изучить в
                      <a href="#popup:embedcode"><strong><u>онлайне</u></strong></a>.<br /><br />Безопасность сайта
                      Penenza подтверждена
                      сертификатом о высоком уровне защиты программного
                      обеспечения и данных (дать ссылку на раздел с
                      сертификатом).<br />Каждого представителя реального
                      бизнеса, который обращается на платформу за кредитом,
                      алгоритм проверяет по 286 параметрам. Точность скоринга
                      — 98%. <br /><br />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="t-item t-col t-col_8 t-prefix_2">
            <div class="t849__accordion" data-accordion="false">
              <div class="t849__wrapper">
                <div class="t849__header" style="border-top: 1px solid #eee">
                  <button aria-controls="accordion5_505955423" aria-expanded="false" class="t849__trigger-button"
                    type="button">
                    <span class="t849__title t-name t-name_xl" field="li_title__1666724199939">Это инвестиция в
                      стартапы?</span><svg class="t849__icon" focusable="false" role="presentation" viewbox="0 0 40 40"
                      xmlns="http://www.w3.org/2000/svg">
                      <circle cx="20" cy="20" r="20" stroke-width="0"></circle>
                      <g class="t849__lines" fill="none" stroke-width="2px">
                        <path d="M9 20H31"></path>
                        <path d="M20 9V31"></path>
                      </g>
                    </svg>
                  </button>
                </div>
                <div class="t849__content" hidden="" id="accordion5_505955423">
                  <div class="t849__textwrapper">
                    <div class="t849__text t-descr t-descr_sm" field="li_descr__1666724199939">
                      Нет, Penenza выдает займы только надежным и устойчивым
                      проектам. Именно благодаря тщательной проверке
                      аналитиков инвестиции в бизнес через Penenza становятся
                      максимально надежными. Частный инвестор обычно не может
                      оценить все показатели бизнеса. В Penenza каждый
                      предприниматель проходит проверку по 286 параметрам,
                      прежде чем его сделка получит финансирование.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="t-item t-col t-col_8 t-prefix_2">
            <div class="t849__accordion" data-accordion="false">
              <div class="t849__wrapper">
                <div class="t849__header" style="border-top: 1px solid #eee">
                  <button aria-controls="accordion6_505955423" aria-expanded="false" class="t849__trigger-button"
                    type="button">
                    <span class="t849__title t-name t-name_xl" field="li_title__1666724255350">Мне нужно куда-то ехать?
                      Я не в Москве</span><svg class="t849__icon" focusable="false" role="presentation"
                      viewbox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                      <circle cx="20" cy="20" r="20" stroke-width="0"></circle>
                      <g class="t849__lines" fill="none" stroke-width="2px">
                        <path d="M9 20H31"></path>
                        <path d="M20 9V31"></path>
                      </g>
                    </svg>
                  </button>
                </div>
                <div class="t849__content" hidden="" id="accordion6_505955423">
                  <div class="t849__textwrapper">
                    <div class="t849__text t-descr t-descr_sm" field="li_descr__1666724255350">
                      Москва — не единственный город, где работает готовый
                      алгоритм инвестирования через Penenza. Ваше
                      местонахождение неважно. После регистрации на сайте вы
                      получаете прямой доступ к платформе, можете
                      инвестировать и выводить деньги с площадки онлайн.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="t849__border" style="height: 1px; background-color: #eee"></div>
          </div>
        </div>
      </div>
      <style>
        #rec505955423 .t849__icon {
          stroke: #ffffff;
        }
      </style>
      <script type="text/javascript">
        t_onReady(function () {
          t_onFuncLoad("t849_init", function () {
            t849_init("505955423");
          });
        });
      </script>
      <style>
        #rec505955423 .t849__title {
          color: #ffffff;
        }

        #rec505955423 .t849__text {
          color: #ffffff;
        }
      </style>
    </div>
    <div class="r t-rec" data-animationappear="off" data-bg-color="#212122" data-record-type="121" id="rec505703707"
      style="background-color: #212122">
      <!-- T396 -->
      <style>
        #rec505703707 .t396__artboard {
          height: 96px;
        }

        #rec505703707 .t396__filter {
          height: 96px;
        }

        #rec505703707 .t396__carrier {
          height: 96px;
          background-position: center center;
          background-attachment: scroll;
          background-size: cover;
          background-repeat: no-repeat;
        }

        @media screen and (max-width: 1199px) {

          #rec505703707 .t396__artboard,
          #rec505703707 .t396__filter,
          #rec505703707 .t396__carrier {}

          #rec505703707 .t396__filter {}

          #rec505703707 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 959px) {

          #rec505703707 .t396__artboard,
          #rec505703707 .t396__filter,
          #rec505703707 .t396__carrier {
            height: 72px;
          }

          #rec505703707 .t396__filter {}

          #rec505703707 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 639px) {

          #rec505703707 .t396__artboard,
          #rec505703707 .t396__filter,
          #rec505703707 .t396__carrier {}

          #rec505703707 .t396__filter {}

          #rec505703707 .t396__carrier {
            background-attachment: scroll;
          }
        }

        @media screen and (max-width: 479px) {

          #rec505703707 .t396__artboard,
          #rec505703707 .t396__filter,
          #rec505703707 .t396__carrier {}

          #rec505703707 .t396__filter {}

          #rec505703707 .t396__carrier {
            background-attachment: scroll;
          }
        }
      </style>
      <div class="t396">
        <div class="t396__artboard" data-artboard-height="96" data-artboard-height-res-640="72"
          data-artboard-recid="505703707" data-artboard-screens="320,480,640,960,1200" data-artboard-upscale="grid"
          data-artboard-valign="center">
          <div class="t396__carrier" data-artboard-recid="505703707"></div>
          <div class="t396__filter" data-artboard-recid="505703707"></div>
        </div>
      </div>
      <script>
        t_onReady(function () {
          t_onFuncLoad("t396_init", function () {
            t396_init("505703707");
          });
        });
      </script>
      <!-- /T396 -->
    </div>
    <!--footer-->
    <footer class="t-records t-records_animated t-records_visible" data-hook="blocks-collection-content-node"
      data-tilda-formskey="1d6ac4a53ca657f7ea270f1fe4939098" data-tilda-lazy="yes" data-tilda-page-alias="footer"
      data-tilda-page-id="24146775" data-tilda-project-headcode="yes" data-tilda-project-id="4939098"
      data-tilda-root-zone="com" id="t-footer">
      <div class="r t-rec" data-animationappear="off" data-bg-color="#ffffff" data-record-type="396" id="rec729520221"
        style="background-color: #ffffff">
        <!-- T396 -->
        <style>
          #rec729520221 .t396__artboard {
            height: 96px;
            background-color: #000000;
          }

          #rec729520221 .t396__filter {
            height: 96px;
          }

          #rec729520221 .t396__carrier {
            height: 96px;
            background-position: center center;
            background-attachment: scroll;
            background-size: cover;
            background-repeat: no-repeat;
          }

          @media screen and (max-width: 1199px) {

            #rec729520221 .t396__artboard,
            #rec729520221 .t396__filter,
            #rec729520221 .t396__carrier {}

            #rec729520221 .t396__filter {}

            #rec729520221 .t396__carrier {
              background-attachment: scroll;
            }
          }

          @media screen and (max-width: 959px) {

            #rec729520221 .t396__artboard,
            #rec729520221 .t396__filter,
            #rec729520221 .t396__carrier {}

            #rec729520221 .t396__filter {}

            #rec729520221 .t396__carrier {
              background-attachment: scroll;
            }
          }

          @media screen and (max-width: 639px) {

            #rec729520221 .t396__artboard,
            #rec729520221 .t396__filter,
            #rec729520221 .t396__carrier {}

            #rec729520221 .t396__filter {}

            #rec729520221 .t396__carrier {
              background-attachment: scroll;
            }
          }

          @media screen and (max-width: 479px) {

            #rec729520221 .t396__artboard,
            #rec729520221 .t396__filter,
            #rec729520221 .t396__carrier {}

            #rec729520221 .t396__filter {}

            #rec729520221 .t396__carrier {
              background-attachment: scroll;
            }
          }
        </style>
        <div class="t396">
          <div class="t396__artboard" data-artboard-height="96" data-artboard-recid="729520221"
            data-artboard-screens="320,480,640,960,1200" data-artboard-upscale="grid" data-artboard-valign="center">
            <div class="t396__carrier" data-artboard-recid="729520221"></div>
            <div class="t396__filter" data-artboard-recid="729520221"></div>
          </div>
        </div>
        <script>
          t_onReady(function () {
            t_onFuncLoad("t396_init", function () {
              t396_init("729520221");
            });
          });
        </script>
        <!-- /T396 -->
      </div>
      <div class="r t-rec" data-animationappear="off" data-record-type="396" id="rec729520302" style="">
        <!-- T396 -->
        <style>
          #rec729520302 .t396__artboard {
            height: 510px;
            background-color: #000000;
          }

          #rec729520302 .t396__filter {
            height: 510px;
          }

          #rec729520302 .t396__carrier {
            height: 510px;
            background-position: center center;
            background-attachment: scroll;
            background-size: cover;
            background-repeat: no-repeat;
          }

          @media screen and (max-width: 1199px) {

            #rec729520302 .t396__artboard,
            #rec729520302 .t396__filter,
            #rec729520302 .t396__carrier {
              height: 490px;
            }

            #rec729520302 .t396__filter {}

            #rec729520302 .t396__carrier {
              background-attachment: scroll;
            }
          }

          @media screen and (max-width: 959px) {

            #rec729520302 .t396__artboard,
            #rec729520302 .t396__filter,
            #rec729520302 .t396__carrier {
              height: 788px;
            }

            #rec729520302 .t396__filter {}

            #rec729520302 .t396__carrier {
              background-attachment: scroll;
            }
          }

          @media screen and (max-width: 639px) {

            #rec729520302 .t396__artboard,
            #rec729520302 .t396__filter,
            #rec729520302 .t396__carrier {
              height: 930px;
            }

            #rec729520302 .t396__filter {}

            #rec729520302 .t396__carrier {
              background-attachment: scroll;
            }
          }

          @media screen and (max-width: 479px) {

            #rec729520302 .t396__artboard,
            #rec729520302 .t396__filter,
            #rec729520302 .t396__carrier {
              height: 1283px;
            }

            #rec729520302 .t396__artboard {
              background-color: #000000;
            }

            #rec729520302 .t396__filter {}

            #rec729520302 .t396__carrier {
              background-position: center center;
              background-attachment: scroll;
            }
          }

          #rec729520302 .tn-elem[data-elem-id="1666725658427"] {
            color: #ffffff;
            text-align: right;
            z-index: 2;
            top: 41px;
            left: calc(50% - 600px + 1070px);
            width: 110px;
          }

          #rec729520302 .tn-elem[data-elem-id="1666725658427"] .tn-atom {
            color: #ffffff;
            font-size: 12px;
            font-family: "Montserrat", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec729520302 .tn-elem[data-elem-id="1666725658427"] {
              top: 41px;
              left: calc(50% - 480px + 720px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec729520302 .tn-elem[data-elem-id="1666725658427"] {
              top: 41px;
              left: calc(50% - 320px + 316px);
              width: 120px;
            }

            #rec729520302 .tn-elem[data-elem-id="1666725658427"] {
              text-align: left;
            }
          }

          @media screen and (max-width: 639px) {
            #rec729520302 .tn-elem[data-elem-id="1666725658427"] {
              top: 150px;
              left: calc(50% - 240px + 340px);
            }

            #rec729520302 .tn-elem[data-elem-id="1666725658427"] {
              text-align: right;
            }

            #rec729520302 .tn-elem[data-elem-id="1666725658427"] .tn-atom {
              line-height: 1.3;
            }
          }

          @media screen and (max-width: 479px) {
            #rec729520302 .tn-elem[data-elem-id="1666725658427"] {
              top: 590px;
              left: calc(50% - 160px + 20px);
              width: 189px;
            }

            #rec729520302 .tn-elem[data-elem-id="1666725658427"] {
              text-align: left;
            }
          }

          #rec729520302 .tn-elem[data-elem-id="1666725698682"] {
            color: #54a9c8;
            text-align: right;
            z-index: 3;
            top: 68px;
            left: calc(50% - 600px + 1070px);
            width: 110px;
          }

          #rec729520302 .tn-elem[data-elem-id="1666725698682"] .tn-atom {
            color: #54a9c8;
            font-size: 12px;
            font-family: "Montserrat", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec729520302 .tn-elem[data-elem-id="1666725698682"] {
              top: 68px;
              left: calc(50% - 480px + 753px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec729520302 .tn-elem[data-elem-id="1666725698682"] {
              top: 68px;
              left: calc(50% - 320px + 316px);
              width: 120px;
            }

            #rec729520302 .tn-elem[data-elem-id="1666725698682"] {
              text-align: left;
            }
          }

          @media screen and (max-width: 639px) {
            #rec729520302 .tn-elem[data-elem-id="1666725698682"] {
              top: 174px;
              left: calc(50% - 240px + 340px);
            }

            #rec729520302 .tn-elem[data-elem-id="1666725698682"] {
              text-align: right;
            }

            #rec729520302 .tn-elem[data-elem-id="1666725698682"] .tn-atom {
              line-height: 1.3;
            }
          }

          @media screen and (max-width: 479px) {
            #rec729520302 .tn-elem[data-elem-id="1666725698682"] {
              top: 614px;
              left: calc(50% - 160px + 20px);
              width: 189px;
            }

            #rec729520302 .tn-elem[data-elem-id="1666725698682"] {
              text-align: left;
            }
          }

          #rec729520302 .tn-elem[data-elem-id="1666699836009"] {
            color: #ffffff;
            z-index: 4;
            top: 310px;
            left: calc(50% - 600px + 20px);
            width: 950px;
          }

          #rec729520302 .tn-elem[data-elem-id="1666699836009"] .tn-atom {
            color: #ffffff;
            font-size: 14px;
            font-family: "Montserrat", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec729520302 .tn-elem[data-elem-id="1666699836009"] {
              top: 310px;
              left: calc(50% - 480px + 20px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec729520302 .tn-elem[data-elem-id="1666699836009"] {
              top: 520px;
              left: calc(50% - 320px + 20px);
              width: 591px;
            }

            #rec729520302 .tn-elem[data-elem-id="1666699836009"] .tn-atom {
              font-size: 12px;
            }
          }

          @media screen and (max-width: 639px) {
            #rec729520302 .tn-elem[data-elem-id="1666699836009"] {
              top: 601px;
              left: calc(50% - 240px + 20px);
              width: 428px;
            }

            #rec729520302 .tn-elem[data-elem-id="1666699836009"] .tn-atom {
              line-height: 1.3;
            }
          }

          @media screen and (max-width: 479px) {
            #rec729520302 .tn-elem[data-elem-id="1666699836009"] {
              top: 852px;
              left: calc(50% - 160px + 20px);
              width: 238px;
            }
          }

          #rec729520302 .tn-elem[data-elem-id="1666725437946"] {
            color: #ffffff;
            z-index: 5;
            top: 348px;
            left: calc(50% - 600px + 20px);
            width: 1072px;
          }

          #rec729520302 .tn-elem[data-elem-id="1666725437946"] .tn-atom {
            color: #ffffff;
            font-size: 14px;
            font-family: "Montserrat", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec729520302 .tn-elem[data-elem-id="1666725437946"] {
              top: 342px;
              left: calc(50% - 480px + 20px);
              width: 934px;
            }
          }

          @media screen and (max-width: 959px) {
            #rec729520302 .tn-elem[data-elem-id="1666725437946"] {
              top: 584px;
              left: calc(50% - 320px + 20px);
              width: 599px;
            }

            #rec729520302 .tn-elem[data-elem-id="1666725437946"] .tn-atom {
              font-size: 12px;
            }
          }

          @media screen and (max-width: 639px) {
            #rec729520302 .tn-elem[data-elem-id="1666725437946"] {
              top: 671px;
              left: calc(50% - 240px + 20px);
              width: 434px;
            }

            #rec729520302 .tn-elem[data-elem-id="1666725437946"] .tn-atom {
              line-height: 1.3;
            }
          }

          @media screen and (max-width: 479px) {
            #rec729520302 .tn-elem[data-elem-id="1666725437946"] {
              top: 958px;
              left: calc(50% - 160px + 20px);
              width: 269px;
            }
          }

          #rec729520302 .tn-elem[data-elem-id="1666725448045"] {
            color: #ffffff;
            z-index: 6;
            top: 430px;
            left: calc(50% - 600px + 20px);
            width: 1078px;
          }

          #rec729520302 .tn-elem[data-elem-id="1666725448045"] .tn-atom {
            color: #ffffff;
            font-size: 14px;
            font-family: "Montserrat", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec729520302 .tn-elem[data-elem-id="1666725448045"] {
              top: 418px;
              left: calc(50% - 480px + 20px);
              width: 940px;
            }
          }

          @media screen and (max-width: 959px) {
            #rec729520302 .tn-elem[data-elem-id="1666725448045"] {
              top: 684px;
              left: calc(50% - 320px + 20px);
              width: 593px;
            }

            #rec729520302 .tn-elem[data-elem-id="1666725448045"] .tn-atom {
              font-size: 12px;
            }
          }

          @media screen and (max-width: 639px) {
            #rec729520302 .tn-elem[data-elem-id="1666725448045"] {
              top: 795px;
              left: calc(50% - 240px + 20px);
              width: 442px;
            }

            #rec729520302 .tn-elem[data-elem-id="1666725448045"] .tn-atom {
              line-height: 1.3;
            }
          }

          @media screen and (max-width: 479px) {
            #rec729520302 .tn-elem[data-elem-id="1666725448045"] {
              top: 1124px;
              left: calc(50% - 160px + 20px);
              width: 267px;
            }
          }

          #rec729520302 .tn-elem[data-elem-id="1666699821019"] {
            color: #ffffff;
            z-index: 7;
            top: 0px;
            left: calc(50% - 600px + 280px);
            width: 130px;
          }

          #rec729520302 .tn-elem[data-elem-id="1666699821019"] .tn-atom {
            color: #ffffff;
            font-size: 16px;
            font-family: "Montserrat", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 600;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec729520302 .tn-elem[data-elem-id="1666699821019"] {
              top: 0px;
              left: calc(50% - 480px + 230px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec729520302 .tn-elem[data-elem-id="1666699821019"] {
              top: 140px;
              left: calc(50% - 320px + 20px);
            }
          }

          @media screen and (max-width: 639px) {
            #rec729520302 .tn-elem[data-elem-id="1666699821019"] {
              top: 118px;
              left: calc(50% - 240px + 20px);
            }
          }

          @media screen and (max-width: 479px) {
            #rec729520302 .tn-elem[data-elem-id="1666699821019"] {
              top: 66px;
              left: calc(50% - 160px + 20px);
            }
          }

          #rec729520302 .tn-elem[data-elem-id="1666725098039"] {
            color: #ffffff;
            z-index: 8;
            top: 0px;
            left: calc(50% - 600px + 498px);
            width: 130px;
          }

          #rec729520302 .tn-elem[data-elem-id="1666725098039"] .tn-atom {
            color: #ffffff;
            font-size: 16px;
            font-family: "Montserrat", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 600;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec729520302 .tn-elem[data-elem-id="1666725098039"] {
              top: 0px;
              left: calc(50% - 480px + 378px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec729520302 .tn-elem[data-elem-id="1666725098039"] {
              top: 140px;
              left: calc(50% - 320px + 198px);
            }
          }

          @media screen and (max-width: 639px) {
            #rec729520302 .tn-elem[data-elem-id="1666725098039"] {
              top: 227px;
              left: calc(50% - 240px + 20px);
            }
          }

          @media screen and (max-width: 479px) {
            #rec729520302 .tn-elem[data-elem-id="1666725098039"] {
              top: 183px;
              left: calc(50% - 160px + 20px);
            }
          }

          #rec729520302 .tn-elem[data-elem-id="1666724727641"] {
            color: #ffffff;
            z-index: 9;
            top: 41px;
            left: calc(50% - 600px + 280px);
            width: 80px;
          }

          #rec729520302 .tn-elem[data-elem-id="1666724727641"] .tn-atom {
            color: #ffffff;
            font-size: 12px;
            font-family: "Montserrat", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec729520302 .tn-elem[data-elem-id="1666724727641"] {
              top: 41px;
              left: calc(50% - 480px + 230px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec729520302 .tn-elem[data-elem-id="1666724727641"] {
              top: 181px;
              left: calc(50% - 320px + 20px);
            }
          }

          @media screen and (max-width: 639px) {
            #rec729520302 .tn-elem[data-elem-id="1666724727641"] {
              top: 150px;
              left: calc(50% - 240px + 20px);
            }

            #rec729520302 .tn-elem[data-elem-id="1666724727641"] .tn-atom {
              line-height: 1.3;
            }
          }

          @media screen and (max-width: 479px) {
            #rec729520302 .tn-elem[data-elem-id="1666724727641"] {
              top: 107px;
              left: calc(50% - 160px + 20px);
              width: 189px;
            }
          }

          #rec729520302 .tn-elem[data-elem-id="1666725098036"] {
            color: #ffffff;
            z-index: 10;
            top: 41px;
            left: calc(50% - 600px + 498px);
            width: 80px;
          }

          #rec729520302 .tn-elem[data-elem-id="1666725098036"] .tn-atom {
            color: #ffffff;
            font-size: 12px;
            font-family: "Montserrat", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec729520302 .tn-elem[data-elem-id="1666725098036"] {
              top: 41px;
              left: calc(50% - 480px + 378px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec729520302 .tn-elem[data-elem-id="1666725098036"] {
              top: 181px;
              left: calc(50% - 320px + 198px);
            }
          }

          @media screen and (max-width: 639px) {
            #rec729520302 .tn-elem[data-elem-id="1666725098036"] {
              top: 260px;
              left: calc(50% - 240px + 20px);
            }

            #rec729520302 .tn-elem[data-elem-id="1666725098036"] .tn-atom {
              line-height: 1.3;
            }
          }

          @media screen and (max-width: 479px) {
            #rec729520302 .tn-elem[data-elem-id="1666725098036"] {
              top: 224px;
              left: calc(50% - 160px + 20px);
              width: 189px;
            }
          }

          #rec729520302 .tn-elem[data-elem-id="1666725098033"] {
            color: #ffffff;
            z-index: 11;
            top: 68px;
            left: calc(50% - 600px + 498px);
            width: 80px;
          }

          #rec729520302 .tn-elem[data-elem-id="1666725098033"] .tn-atom {
            color: #ffffff;
            font-size: 12px;
            font-family: "Montserrat", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec729520302 .tn-elem[data-elem-id="1666725098033"] {
              top: 68px;
              left: calc(50% - 480px + 378px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec729520302 .tn-elem[data-elem-id="1666725098033"] {
              top: 208px;
              left: calc(50% - 320px + 198px);
            }
          }

          @media screen and (max-width: 639px) {
            #rec729520302 .tn-elem[data-elem-id="1666725098033"] {
              top: 284px;
              left: calc(50% - 240px + 20px);
            }

            #rec729520302 .tn-elem[data-elem-id="1666725098033"] .tn-atom {
              line-height: 1.3;
            }
          }

          @media screen and (max-width: 479px) {
            #rec729520302 .tn-elem[data-elem-id="1666725098033"] {
              top: 248px;
              left: calc(50% - 160px + 20px);
              width: 189px;
            }
          }

          #rec729520302 .tn-elem[data-elem-id="1666725148727"] {
            color: #ffffff;
            z-index: 12;
            top: 0px;
            left: calc(50% - 600px + 776px);
            width: 130px;
          }

          #rec729520302 .tn-elem[data-elem-id="1666725148727"] .tn-atom {
            color: #ffffff;
            font-size: 16px;
            font-family: "Montserrat", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 600;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec729520302 .tn-elem[data-elem-id="1666725148727"] {
              top: 0px;
              left: calc(50% - 480px + 526px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec729520302 .tn-elem[data-elem-id="1666725148727"] {
              top: 140px;
              left: calc(50% - 320px + 406px);
            }
          }

          @media screen and (max-width: 639px) {
            #rec729520302 .tn-elem[data-elem-id="1666725148727"] {
              top: 482px;
              left: calc(50% - 240px + 20px);
            }
          }

          @media screen and (max-width: 479px) {
            #rec729520302 .tn-elem[data-elem-id="1666725148727"] {
              top: 446px;
              left: calc(50% - 160px + 20px);
            }
          }

          #rec729520302 .tn-elem[data-elem-id="1666725148724"] {
            color: #ffffff;
            z-index: 13;
            top: 41px;
            left: calc(50% - 600px + 776px);
            width: 160px;
          }

          #rec729520302 .tn-elem[data-elem-id="1666725148724"] .tn-atom {
            color: #ffffff;
            font-size: 12px;
            font-family: "Montserrat", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec729520302 .tn-elem[data-elem-id="1666725148724"] {
              top: 41px;
              left: calc(50% - 480px + 526px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec729520302 .tn-elem[data-elem-id="1666725148724"] {
              top: 181px;
              left: calc(50% - 320px + 406px);
            }
          }

          @media screen and (max-width: 639px) {
            #rec729520302 .tn-elem[data-elem-id="1666725148724"] {
              top: 515px;
              left: calc(50% - 240px + 20px);
            }

            #rec729520302 .tn-elem[data-elem-id="1666725148724"] .tn-atom {
              line-height: 1.3;
            }
          }

          @media screen and (max-width: 479px) {
            #rec729520302 .tn-elem[data-elem-id="1666725148724"] {
              top: 487px;
              left: calc(50% - 160px + 20px);
              width: 189px;
            }
          }

          #rec729520302 .tn-elem[data-elem-id="1666725148722"] {
            color: #ffffff;
            z-index: 14;
            top: 68px;
            left: calc(50% - 600px + 776px);
            width: 182px;
          }

          #rec729520302 .tn-elem[data-elem-id="1666725148722"] .tn-atom {
            color: #ffffff;
            font-size: 12px;
            font-family: "Montserrat", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec729520302 .tn-elem[data-elem-id="1666725148722"] {
              top: 68px;
              left: calc(50% - 480px + 526px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec729520302 .tn-elem[data-elem-id="1666725148722"] {
              top: 208px;
              left: calc(50% - 320px + 406px);
            }
          }

          @media screen and (max-width: 639px) {
            #rec729520302 .tn-elem[data-elem-id="1666725148722"] {
              top: 539px;
              left: calc(50% - 240px + 20px);
            }

            #rec729520302 .tn-elem[data-elem-id="1666725148722"] .tn-atom {
              line-height: 1.3;
            }
          }

          @media screen and (max-width: 479px) {
            #rec729520302 .tn-elem[data-elem-id="1666725148722"] {
              top: 511px;
              left: calc(50% - 160px + 20px);
              width: 189px;
            }
          }

          #rec729520302 .tn-elem[data-elem-id="1666725098029"] {
            color: #ffffff;
            z-index: 15;
            top: 95px;
            left: calc(50% - 600px + 498px);
            width: 80px;
          }

          #rec729520302 .tn-elem[data-elem-id="1666725098029"] .tn-atom {
            color: #ffffff;
            font-size: 12px;
            font-family: "Montserrat", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec729520302 .tn-elem[data-elem-id="1666725098029"] {
              top: 95px;
              left: calc(50% - 480px + 378px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec729520302 .tn-elem[data-elem-id="1666725098029"] {
              top: 235px;
              left: calc(50% - 320px + 198px);
            }
          }

          @media screen and (max-width: 639px) {
            #rec729520302 .tn-elem[data-elem-id="1666725098029"] {
              top: 308px;
              left: calc(50% - 240px + 20px);
            }

            #rec729520302 .tn-elem[data-elem-id="1666725098029"] .tn-atom {
              line-height: 1.3;
            }
          }

          @media screen and (max-width: 479px) {
            #rec729520302 .tn-elem[data-elem-id="1666725098029"] {
              top: 272px;
              left: calc(50% - 160px + 20px);
              width: 189px;
            }
          }

          #rec729520302 .tn-elem[data-elem-id="1666725014236"] {
            color: #ffffff;
            z-index: 16;
            top: 149px;
            left: calc(50% - 600px + 280px);
            width: 80px;
          }

          #rec729520302 .tn-elem[data-elem-id="1666725014236"] .tn-atom {
            color: #ffffff;
            font-size: 12px;
            font-family: "Montserrat", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            opacity: 0;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec729520302 .tn-elem[data-elem-id="1666725014236"] {
              top: 149px;
              left: calc(50% - 480px + 230px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec729520302 .tn-elem[data-elem-id="1666725014236"] {
              top: 289px;
              left: calc(50% - 320px + 20px);
            }
          }

          @media screen and (max-width: 639px) {
            #rec729520302 .tn-elem[data-elem-id="1666725014236"] {
              top: 226px;
              left: calc(50% - 240px + 20px);
            }

            #rec729520302 .tn-elem[data-elem-id="1666725014236"] .tn-atom {
              line-height: 1.3;
            }
          }

          @media screen and (max-width: 479px) {
            #rec729520302 .tn-elem[data-elem-id="1666725014236"] {
              top: 213px;
              left: calc(50% - 160px + 20px);
              width: 189px;
            }
          }

          #rec729520302 .tn-elem[data-elem-id="1666725015290"] {
            color: #ffffff;
            z-index: 17;
            top: 68px;
            left: calc(50% - 600px + 280px);
            width: 80px;
          }

          #rec729520302 .tn-elem[data-elem-id="1666725015290"] .tn-atom {
            color: #ffffff;
            font-size: 12px;
            font-family: "Montserrat", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec729520302 .tn-elem[data-elem-id="1666725015290"] {
              top: 68px;
              left: calc(50% - 480px + 230px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec729520302 .tn-elem[data-elem-id="1666725015290"] {
              top: 208px;
              left: calc(50% - 320px + 20px);
            }
          }

          @media screen and (max-width: 639px) {
            #rec729520302 .tn-elem[data-elem-id="1666725015290"] {
              top: 174px;
              left: calc(50% - 240px + 20px);
            }

            #rec729520302 .tn-elem[data-elem-id="1666725015290"] .tn-atom {
              line-height: 1.3;
            }
          }

          @media screen and (max-width: 479px) {
            #rec729520302 .tn-elem[data-elem-id="1666725015290"] {
              top: 131px;
              left: calc(50% - 160px + 20px);
              width: 189px;
            }
          }

          #rec729520302 .tn-elem[data-elem-id="1666725270337"] {
            z-index: 18;
            top: 71px;
            left: calc(50% - 600px + 96px);
            width: 32px;
          }

          #rec729520302 .tn-elem[data-elem-id="1666725270337"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec729520302 .tn-elem[data-elem-id="1666725270337"] {
              top: 71px;
            }
          }

          @media screen and (max-width: 959px) {
            #rec729520302 .tn-elem[data-elem-id="1666725270337"] {
              top: 51px;
              left: calc(50% - 320px + 95px);
            }
          }

          @media screen and (max-width: 639px) {
            #rec729520302 .tn-elem[data-elem-id="1666725270337"] {
              top: 14px;
              left: calc(50% - 240px + 430px);
            }
          }

          @media screen and (max-width: 479px) {
            #rec729520302 .tn-elem[data-elem-id="1666725270337"] {
              top: 641px;
              left: calc(50% - 160px + 91px);
            }
          }

          #rec729520302 .tn-elem[data-elem-id="1666725270344"] {
            z-index: 19;
            top: 71px;
            left: calc(50% - 600px + 56px);
            width: 32px;
          }

          #rec729520302 .tn-elem[data-elem-id="1666725270344"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec729520302 .tn-elem[data-elem-id="1666725270344"] {
              top: 71px;
            }
          }

          @media screen and (max-width: 959px) {
            #rec729520302 .tn-elem[data-elem-id="1666725270344"] {
              top: 51px;
              left: calc(50% - 320px + 55px);
            }
          }

          @media screen and (max-width: 639px) {
            #rec729520302 .tn-elem[data-elem-id="1666725270344"] {
              top: 14px;
              left: calc(50% - 240px + 390px);
            }
          }

          @media screen and (max-width: 479px) {
            #rec729520302 .tn-elem[data-elem-id="1666725270344"] {
              top: 641px;
              left: calc(50% - 160px + 51px);
            }
          }

          #rec729520302 .tn-elem[data-elem-id="1666725270350"] {
            z-index: 20;
            top: 100px;
            left: calc(50% - 600px + 176px);
            width: 32px;
          }

          #rec729520302 .tn-elem[data-elem-id="1666725270350"] .tn-atom {
            opacity: 0;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {}

          @media screen and (max-width: 959px) {
            #rec729520302 .tn-elem[data-elem-id="1666725270350"] {
              top: 51px;
              left: calc(50% - 320px + 15px);
            }
          }

          @media screen and (max-width: 639px) {
            #rec729520302 .tn-elem[data-elem-id="1666725270350"] {
              top: 14px;
              left: calc(50% - 240px + 350px);
            }
          }

          @media screen and (max-width: 479px) {
            #rec729520302 .tn-elem[data-elem-id="1666725270350"] {
              top: 621px;
              left: calc(50% - 160px + 171px);
            }
          }

          #rec729520302 .tn-elem[data-elem-id="1666872921562"] {
            z-index: 21;
            top: 76px;
            left: calc(50% - 600px + 20px);
            width: 22px;
          }

          #rec729520302 .tn-elem[data-elem-id="1666872921562"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec729520302 .tn-elem[data-elem-id="1666872921562"] {
              top: 76px;
            }
          }

          @media screen and (max-width: 959px) {
            #rec729520302 .tn-elem[data-elem-id="1666872921562"] {
              top: 57px;
              left: calc(50% - 320px + 19px);
            }
          }

          @media screen and (max-width: 639px) {
            #rec729520302 .tn-elem[data-elem-id="1666872921562"] {
              top: 19px;
              left: calc(50% - 240px + 358px);
            }
          }

          @media screen and (max-width: 479px) {
            #rec729520302 .tn-elem[data-elem-id="1666872921562"] {
              top: 646px;
              left: calc(50% - 160px + 20px);
            }
          }

          #rec729520302 .tn-elem[data-elem-id="1666725320636"] {
            z-index: 22;
            top: 0px;
            left: calc(50% - 600px + 20px);
            width: 153px;
          }

          #rec729520302 .tn-elem[data-elem-id="1666725320636"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {}

          @media screen and (max-width: 959px) {}

          @media screen and (max-width: 639px) {
            #rec729520302 .tn-elem[data-elem-id="1666725320636"] {
              top: 12px;
              left: calc(50% - 240px + 17px);
            }
          }

          @media screen and (max-width: 479px) {}

          #rec729520302 .tn-elem[data-elem-id="1669297130109"] {
            color: #ffffff;
            z-index: 23;
            top: 121px;
            left: calc(50% - 600px + 498px);
            width: 188px;
          }

          #rec729520302 .tn-elem[data-elem-id="1669297130109"] .tn-atom {
            color: #ffffff;
            font-size: 12px;
            font-family: "Montserrat", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec729520302 .tn-elem[data-elem-id="1669297130109"] {
              top: 122px;
              left: calc(50% - 480px + 378px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec729520302 .tn-elem[data-elem-id="1669297130109"] {
              top: 262px;
              left: calc(50% - 320px + 198px);
            }
          }

          @media screen and (max-width: 639px) {
            #rec729520302 .tn-elem[data-elem-id="1669297130109"] {
              top: 332px;
              left: calc(50% - 240px + 20px);
            }

            #rec729520302 .tn-elem[data-elem-id="1669297130109"] .tn-atom {
              line-height: 1.3;
            }
          }

          @media screen and (max-width: 479px) {
            #rec729520302 .tn-elem[data-elem-id="1669297130109"] {
              top: 296px;
              left: calc(50% - 160px + 20px);
              width: 189px;
            }
          }

          #rec729520302 .tn-elem[data-elem-id="1669297130123"] {
            color: #ffffff;
            z-index: 24;
            top: 148px;
            left: calc(50% - 600px + 498px);
            width: 198px;
          }

          #rec729520302 .tn-elem[data-elem-id="1669297130123"] .tn-atom {
            color: #ffffff;
            font-size: 12px;
            font-family: "Montserrat", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec729520302 .tn-elem[data-elem-id="1669297130123"] {
              top: 149px;
              left: calc(50% - 480px + 378px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec729520302 .tn-elem[data-elem-id="1669297130123"] {
              top: 289px;
              left: calc(50% - 320px + 198px);
            }
          }

          @media screen and (max-width: 639px) {
            #rec729520302 .tn-elem[data-elem-id="1669297130123"] {
              top: 356px;
              left: calc(50% - 240px + 20px);
            }

            #rec729520302 .tn-elem[data-elem-id="1669297130123"] .tn-atom {
              line-height: 1.3;
            }
          }

          @media screen and (max-width: 479px) {
            #rec729520302 .tn-elem[data-elem-id="1669297130123"] {
              top: 320px;
              left: calc(50% - 160px + 20px);
              width: 279px;
            }
          }

          #rec729520302 .tn-elem[data-elem-id="1669297130133"] {
            color: #ffffff;
            z-index: 25;
            top: 175px;
            left: calc(50% - 600px + 498px);
            width: 223px;
          }

          #rec729520302 .tn-elem[data-elem-id="1669297130133"] .tn-atom {
            color: #ffffff;
            font-size: 12px;
            font-family: "Montserrat", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec729520302 .tn-elem[data-elem-id="1669297130133"] {
              top: 176px;
              left: calc(50% - 480px + 378px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec729520302 .tn-elem[data-elem-id="1669297130133"] {
              top: 316px;
              left: calc(50% - 320px + 198px);
            }
          }

          @media screen and (max-width: 639px) {
            #rec729520302 .tn-elem[data-elem-id="1669297130133"] {
              top: 380px;
              left: calc(50% - 240px + 20px);
            }

            #rec729520302 .tn-elem[data-elem-id="1669297130133"] .tn-atom {
              line-height: 1.3;
            }
          }

          @media screen and (max-width: 479px) {
            #rec729520302 .tn-elem[data-elem-id="1669297130133"] {
              top: 344px;
              left: calc(50% - 160px + 20px);
              width: 259px;
            }
          }

          #rec729520302 .tn-elem[data-elem-id="1669297210103"] {
            color: #ffffff;
            z-index: 26;
            top: 202px;
            left: calc(50% - 600px + 498px);
            width: 198px;
          }

          #rec729520302 .tn-elem[data-elem-id="1669297210103"] .tn-atom {
            color: #ffffff;
            font-size: 12px;
            font-family: "Montserrat", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec729520302 .tn-elem[data-elem-id="1669297210103"] {
              top: 203px;
              left: calc(50% - 480px + 378px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec729520302 .tn-elem[data-elem-id="1669297210103"] {
              top: 343px;
              left: calc(50% - 320px + 198px);
            }
          }

          @media screen and (max-width: 639px) {
            #rec729520302 .tn-elem[data-elem-id="1669297210103"] {
              top: 404px;
              left: calc(50% - 240px + 20px);
            }

            #rec729520302 .tn-elem[data-elem-id="1669297210103"] .tn-atom {
              line-height: 1.3;
            }
          }

          @media screen and (max-width: 479px) {
            #rec729520302 .tn-elem[data-elem-id="1669297210103"] {
              top: 368px;
              left: calc(50% - 160px + 20px);
              width: 273px;
            }
          }

          #rec729520302 .tn-elem[data-elem-id="1669297210116"] {
            color: #ffffff;
            z-index: 27;
            top: 229px;
            left: calc(50% - 600px + 498px);
            width: 186px;
          }

          #rec729520302 .tn-elem[data-elem-id="1669297210116"] .tn-atom {
            color: #ffffff;
            font-size: 12px;
            font-family: "Montserrat", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec729520302 .tn-elem[data-elem-id="1669297210116"] {
              top: 230px;
              left: calc(50% - 480px + 378px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec729520302 .tn-elem[data-elem-id="1669297210116"] {
              top: 370px;
              left: calc(50% - 320px + 198px);
            }
          }

          @media screen and (max-width: 639px) {
            #rec729520302 .tn-elem[data-elem-id="1669297210116"] {
              top: 428px;
              left: calc(50% - 240px + 20px);
            }

            #rec729520302 .tn-elem[data-elem-id="1669297210116"] .tn-atom {
              line-height: 1.3;
            }
          }

          @media screen and (max-width: 479px) {
            #rec729520302 .tn-elem[data-elem-id="1669297210116"] {
              top: 392px;
              left: calc(50% - 160px + 20px);
              width: 189px;
            }
          }

          #rec729520302 .tn-elem[data-elem-id="1693407544302"] {
            color: #ffffff;
            text-align: right;
            z-index: 28;
            top: 0px;
            left: calc(50% - 600px + 950px);
            width: 230px;
          }

          #rec729520302 .tn-elem[data-elem-id="1693407544302"] .tn-atom {
            color: #ffffff;
            font-size: 24px;
            font-family: "Montserrat", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 600;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec729520302 .tn-elem[data-elem-id="1693407544302"] {
              top: 0px;
              left: calc(50% - 480px + 720px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec729520302 .tn-elem[data-elem-id="1693407544302"] {
              top: 0px;
              left: calc(50% - 320px + 316px);
            }

            #rec729520302 .tn-elem[data-elem-id="1693407544302"] {
              text-align: left;
            }
          }

          @media screen and (max-width: 639px) {
            #rec729520302 .tn-elem[data-elem-id="1693407544302"] {
              top: 113px;
              left: calc(50% - 240px + 230px);
            }

            #rec729520302 .tn-elem[data-elem-id="1693407544302"] {
              text-align: right;
            }

            #rec729520302 .tn-elem[data-elem-id="1693407544302"] .tn-atom {
              line-height: 1.3;
            }
          }

          @media screen and (max-width: 479px) {
            #rec729520302 .tn-elem[data-elem-id="1693407544302"] {
              top: 557px;
              left: calc(50% - 160px + 20px);
              width: 236px;
            }

            #rec729520302 .tn-elem[data-elem-id="1693407544302"] {
              text-align: left;
            }
          }

          #rec729520302 .tn-elem[data-elem-id="1722954251557"] {
            z-index: 29;
            top: 172px;
            left: calc(50% - 600px + 20px);
            width: 78px;
          }

          #rec729520302 .tn-elem[data-elem-id="1722954251557"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec729520302 .tn-elem[data-elem-id="1722954251557"] {
              top: 148px;
              left: calc(50% - 480px + 20px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec729520302 .tn-elem[data-elem-id="1722954251557"] {
              top: 375px;
              left: calc(50% - 320px + 25px);
            }
          }

          @media screen and (max-width: 639px) {
            #rec729520302 .tn-elem[data-elem-id="1722954251557"] {
              top: 221px;
              left: calc(50% - 240px + 390px);
              width: 63px;
            }
          }

          @media screen and (max-width: 479px) {
            #rec729520302 .tn-elem[data-elem-id="1722954251557"] {
              top: 690px;
              left: calc(50% - 160px + 20px);
            }
          }

          #rec729520302 .tn-elem[data-elem-id="1722954267621"] {
            color: #ffffff;
            z-index: 30;
            top: 171px;
            left: calc(50% - 600px + 112px);
            width: 316px;
          }

          #rec729520302 .tn-elem[data-elem-id="1722954267621"] .tn-atom {
            color: #ffffff;
            font-size: 12px;
            font-family: "Montserrat", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec729520302 .tn-elem[data-elem-id="1722954267621"] {
              top: 220px;
              left: calc(50% - 480px + 20px);
              width: 314px;
            }

            #rec729520302 .tn-elem[data-elem-id="1722954267621"] .tn-atom {
              font-size: 10px;
            }
          }

          @media screen and (max-width: 959px) {
            #rec729520302 .tn-elem[data-elem-id="1722954267621"] {
              top: 442px;
              left: calc(50% - 320px + 22px);
              width: 594px;
            }

            #rec729520302 .tn-elem[data-elem-id="1722954267621"] .tn-atom {
              font-size: 12px;
            }
          }

          @media screen and (max-width: 639px) {
            #rec729520302 .tn-elem[data-elem-id="1722954267621"] {
              top: 282px;
              left: calc(50% - 240px + 303px);
              width: 154px;
            }

            #rec729520302 .tn-elem[data-elem-id="1722954267621"] {
              text-align: right;
            }

            #rec729520302 .tn-elem[data-elem-id="1722954267621"] .tn-atom {
              line-height: 1.3;
            }
          }

          @media screen and (max-width: 479px) {
            #rec729520302 .tn-elem[data-elem-id="1722954267621"] {
              top: 752px;
              left: calc(50% - 160px + 20px);
              width: 272px;
            }

            #rec729520302 .tn-elem[data-elem-id="1722954267621"] {
              text-align: left;
            }
          }
        </style>
        <div class="t396">
          <div class="t396__artboard" data-artboard-height="510" data-artboard-height-res-320="1283"
            data-artboard-height-res-480="930" data-artboard-height-res-640="788" data-artboard-height-res-960="490"
            data-artboard-recid="729520302" data-artboard-screens="320,480,640,960,1200" data-artboard-upscale="grid"
            data-artboard-upscale-res-320="grid" data-artboard-valign="center">
            <div class="t396__carrier" data-artboard-recid="729520302"></div>
            <div class="t396__filter" data-artboard-recid="729520302"></div>
            <div class="t396__elem tn-elem tn-elem__7295203021666725658427" data-elem-id="1666725658427"
              data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
              data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="20"
              data-field-left-res-480-value="340" data-field-left-res-640-value="316"
              data-field-left-res-960-value="720" data-field-left-value="1070" data-field-leftunits-value="px"
              data-field-top-res-320-value="590" data-field-top-res-480-value="150" data-field-top-res-640-value="41"
              data-field-top-res-960-value="41" data-field-top-value="41" data-field-topunits-value="px"
              data-field-width-res-320-value="189" data-field-width-res-640-value="120" data-field-width-value="110"
              data-field-widthunits-value="px">
              <div class="tn-atom" field="tn_text_1666725658427">
                Карта сайта
              </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__7295203021666725698682" data-elem-id="1666725698682"
              data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
              data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="20"
              data-field-left-res-480-value="340" data-field-left-res-640-value="316"
              data-field-left-res-960-value="753" data-field-left-value="1070" data-field-leftunits-value="px"
              data-field-top-res-320-value="614" data-field-top-res-480-value="174" data-field-top-res-640-value="68"
              data-field-top-res-960-value="68" data-field-top-value="68" data-field-topunits-value="px"
              data-field-width-res-320-value="189" data-field-width-res-640-value="120" data-field-width-value="110"
              data-field-widthunits-value="px">
              <div class="tn-atom" field="tn_text_1666725698682">
                info@penenza.ru
              </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__7295203021666699836009" data-elem-id="1666699836009"
              data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
              data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="20"
              data-field-left-res-480-value="20" data-field-left-res-640-value="20" data-field-left-res-960-value="20"
              data-field-left-value="20" data-field-leftunits-value="px" data-field-top-res-320-value="852"
              data-field-top-res-480-value="601" data-field-top-res-640-value="520" data-field-top-res-960-value="310"
              data-field-top-value="310" data-field-topunits-value="px" data-field-width-res-320-value="238"
              data-field-width-res-480-value="428" data-field-width-res-640-value="591" data-field-width-value="950"
              data-field-widthunits-value="px">
              <div class="tn-atom" field="tn_text_1666699836009">
                © 2017-2025. АО «Пененза», официальный сайт. Лицензия
                оператора инвестиционной платформы Банка России №41 от
                23.06.2021
              </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__7295203021666725437946" data-elem-id="1666725437946"
              data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
              data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="20"
              data-field-left-res-480-value="20" data-field-left-res-640-value="20" data-field-left-res-960-value="20"
              data-field-left-value="20" data-field-leftunits-value="px" data-field-top-res-320-value="958"
              data-field-top-res-480-value="671" data-field-top-res-640-value="584" data-field-top-res-960-value="342"
              data-field-top-value="348" data-field-topunits-value="px" data-field-width-res-320-value="269"
              data-field-width-res-480-value="434" data-field-width-res-640-value="599"
              data-field-width-res-960-value="934" data-field-width-value="1072" data-field-widthunits-value="px">
              <div class="tn-atom" field="tn_text_1666725437946">
                123290, г Москва, Мукомольный проезд, д 4А стр 2. АО «Пененза»
                является оператором по обработке персональных данных,
                информация об обработке персональных данных и сведения о
                реализуемых требованиях к защите персональных данных отражены
                в Политике в отношении обработки и персональных данных.
              </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__7295203021666725448045" data-elem-id="1666725448045"
              data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
              data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="20"
              data-field-left-res-480-value="20" data-field-left-res-640-value="20" data-field-left-res-960-value="20"
              data-field-left-value="20" data-field-leftunits-value="px" data-field-top-res-320-value="1124"
              data-field-top-res-480-value="795" data-field-top-res-640-value="684" data-field-top-res-960-value="418"
              data-field-top-value="430" data-field-topunits-value="px" data-field-width-res-320-value="267"
              data-field-width-res-480-value="442" data-field-width-res-640-value="593"
              data-field-width-res-960-value="940" data-field-width-value="1078" data-field-widthunits-value="px">
              <div class="tn-atom" field="tn_text_1666725448045">
                АО «Пененза» использует файлы «cookie» с целью персонализации
                сервисов и повышения удобства пользования веб-сайтом в
                соответствии с
                <a href="#popup:embedcode" rel="noreferrer noopener nofollow" style="color: rgb(49, 161, 181)"
                  target="_blank">Политикой конфиденциальности</a>. Если вы не хотите, чтобы ваши пользовательские
                данные
                обрабатывались, пожалуйста, ограничьте их использование в
                своем браузере
              </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__7295203021666699821019" data-elem-id="1666699821019"
              data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
              data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="20"
              data-field-left-res-480-value="20" data-field-left-res-640-value="20" data-field-left-res-960-value="230"
              data-field-left-value="280" data-field-leftunits-value="px" data-field-top-res-320-value="66"
              data-field-top-res-480-value="118" data-field-top-res-640-value="140" data-field-top-res-960-value="0"
              data-field-top-value="0" data-field-topunits-value="px" data-field-width-value="130"
              data-field-widthunits-value="px">
              <div class="tn-atom" field="tn_text_1666699821019">
                Компания
              </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__7295203021666725098039" data-elem-id="1666725098039"
              data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
              data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="20"
              data-field-left-res-480-value="20" data-field-left-res-640-value="198" data-field-left-res-960-value="378"
              data-field-left-value="498" data-field-leftunits-value="px" data-field-top-res-320-value="183"
              data-field-top-res-480-value="227" data-field-top-res-640-value="140" data-field-top-res-960-value="0"
              data-field-top-value="0" data-field-topunits-value="px" data-field-width-value="130"
              data-field-widthunits-value="px">
              <div class="tn-atom" field="tn_text_1666725098039">Решения</div>
            </div>
            <div class="t396__elem tn-elem tn-elem__7295203021666724727641" data-elem-id="1666724727641"
              data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
              data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="20"
              data-field-left-res-480-value="20" data-field-left-res-640-value="20" data-field-left-res-960-value="230"
              data-field-left-value="280" data-field-leftunits-value="px" data-field-top-res-320-value="107"
              data-field-top-res-480-value="150" data-field-top-res-640-value="181" data-field-top-res-960-value="41"
              data-field-top-value="41" data-field-topunits-value="px" data-field-width-res-320-value="189"
              data-field-width-value="80" data-field-widthunits-value="px">
              <div class="tn-atom">
                <a href="#rec508147738" style="color: inherit">О нас</a>
              </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__7295203021666725098036" data-elem-id="1666725098036"
              data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
              data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="20"
              data-field-left-res-480-value="20" data-field-left-res-640-value="198" data-field-left-res-960-value="378"
              data-field-left-value="498" data-field-leftunits-value="px" data-field-top-res-320-value="224"
              data-field-top-res-480-value="260" data-field-top-res-640-value="181" data-field-top-res-960-value="41"
              data-field-top-value="41" data-field-topunits-value="px" data-field-width-res-320-value="189"
              data-field-width-value="80" data-field-widthunits-value="px">
              <div class="tn-atom">
                <a href="#rec505773197" style="color: inherit">Поставщикам</a>
              </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__7295203021666725098033" data-elem-id="1666725098033"
              data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
              data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="20"
              data-field-left-res-480-value="20" data-field-left-res-640-value="198" data-field-left-res-960-value="378"
              data-field-left-value="498" data-field-leftunits-value="px" data-field-top-res-320-value="248"
              data-field-top-res-480-value="284" data-field-top-res-640-value="208" data-field-top-res-960-value="68"
              data-field-top-value="68" data-field-topunits-value="px" data-field-width-res-320-value="189"
              data-field-width-value="80" data-field-widthunits-value="px">
              <div class="tn-atom">
                <a href="#rec505703272" style="color: inherit">Покупателям</a>
              </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__7295203021666725148727" data-elem-id="1666725148727"
              data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
              data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="20"
              data-field-left-res-480-value="20" data-field-left-res-640-value="406" data-field-left-res-960-value="526"
              data-field-left-value="776" data-field-leftunits-value="px" data-field-top-res-320-value="446"
              data-field-top-res-480-value="482" data-field-top-res-640-value="140" data-field-top-res-960-value="0"
              data-field-top-value="0" data-field-topunits-value="px" data-field-width-value="130"
              data-field-widthunits-value="px">
              <div class="tn-atom" field="tn_text_1666725148727">
                Документы
              </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__7295203021666725148724" data-elem-id="1666725148724"
              data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
              data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="20"
              data-field-left-res-480-value="20" data-field-left-res-640-value="406" data-field-left-res-960-value="526"
              data-field-left-value="776" data-field-leftunits-value="px" data-field-top-res-320-value="487"
              data-field-top-res-480-value="515" data-field-top-res-640-value="181" data-field-top-res-960-value="41"
              data-field-top-value="41" data-field-topunits-value="px" data-field-width-res-320-value="189"
              data-field-width-value="160" data-field-widthunits-value="px">
              <div class="tn-atom">
                <a href="#popup:embedcode" style="color: inherit">Раскрытие информации</a>
              </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__7295203021666725148722" data-elem-id="1666725148722"
              data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
              data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="20"
              data-field-left-res-480-value="20" data-field-left-res-640-value="406" data-field-left-res-960-value="526"
              data-field-left-value="776" data-field-leftunits-value="px" data-field-top-res-320-value="511"
              data-field-top-res-480-value="539" data-field-top-res-640-value="208" data-field-top-res-960-value="68"
              data-field-top-value="68" data-field-topunits-value="px" data-field-width-res-320-value="189"
              data-field-width-value="182" data-field-widthunits-value="px">
              <div class="tn-atom">
                <a href="#popup:embedcode" style="color: inherit">Дейсвующие документы</a>
              </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__7295203021666725098029" data-elem-id="1666725098029"
              data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
              data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="20"
              data-field-left-res-480-value="20" data-field-left-res-640-value="198" data-field-left-res-960-value="378"
              data-field-left-value="498" data-field-leftunits-value="px" data-field-top-res-320-value="272"
              data-field-top-res-480-value="308" data-field-top-res-640-value="235" data-field-top-res-960-value="95"
              data-field-top-value="95" data-field-topunits-value="px" data-field-width-res-320-value="189"
              data-field-width-value="80" data-field-widthunits-value="px">
              <div class="tn-atom">
                <a href="#rec505936862" style="color: inherit">Инвесторам</a>
              </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__7295203021666725014236" data-elem-id="1666725014236"
              data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
              data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="20"
              data-field-left-res-480-value="20" data-field-left-res-640-value="20" data-field-left-res-960-value="230"
              data-field-left-value="280" data-field-leftunits-value="px" data-field-top-res-320-value="213"
              data-field-top-res-480-value="226" data-field-top-res-640-value="289" data-field-top-res-960-value="149"
              data-field-top-value="149" data-field-topunits-value="px" data-field-width-res-320-value="189"
              data-field-width-value="80" data-field-widthunits-value="px">
              <div class="tn-atom" field="tn_text_1666725014236">СМИ</div>
            </div>
            <div class="t396__elem tn-elem tn-elem__7295203021666725015290" data-elem-id="1666725015290"
              data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
              data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="20"
              data-field-left-res-480-value="20" data-field-left-res-640-value="20" data-field-left-res-960-value="230"
              data-field-left-value="280" data-field-leftunits-value="px" data-field-top-res-320-value="131"
              data-field-top-res-480-value="174" data-field-top-res-640-value="208" data-field-top-res-960-value="68"
              data-field-top-value="68" data-field-topunits-value="px" data-field-width-res-320-value="189"
              data-field-width-value="80" data-field-widthunits-value="px">
              <div class="tn-atom">
                <a href="#popup:embedcode" style="color: inherit">Блог</a>
              </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__7295203021666725270337" data-elem-id="1666725270337"
              data-elem-type="image" data-field-axisx-value="left" data-field-axisy-value="top"
              data-field-container-value="grid" data-field-fileheight-value="32" data-field-filewidth-value="32"
              data-field-heightunits-value="" data-field-left-res-320-value="91" data-field-left-res-480-value="430"
              data-field-left-res-640-value="95" data-field-left-value="96" data-field-leftunits-value="px"
              data-field-top-res-320-value="641" data-field-top-res-480-value="14" data-field-top-res-640-value="51"
              data-field-top-res-960-value="71" data-field-top-value="71" data-field-topunits-value="px"
              data-field-width-value="32" data-field-widthunits-value="px">
              <div class="tn-atom"><img alt="" class="tn-atom__img t-img" data-original="images/telegram.svg"
                  imgfield="tn_img_1666725270337" /></div>
            </div>
            <div class="t396__elem tn-elem tn-elem__7295203021666725270344" data-elem-id="1666725270344"
              data-elem-type="image" data-field-axisx-value="left" data-field-axisy-value="top"
              data-field-container-value="grid" data-field-fileheight-value="32" data-field-filewidth-value="32"
              data-field-heightunits-value="" data-field-left-res-320-value="51" data-field-left-res-480-value="390"
              data-field-left-res-640-value="55" data-field-left-value="56" data-field-leftunits-value="px"
              data-field-top-res-320-value="641" data-field-top-res-480-value="14" data-field-top-res-640-value="51"
              data-field-top-res-960-value="71" data-field-top-value="71" data-field-topunits-value="px"
              data-field-width-value="32" data-field-widthunits-value="px">
              <div class="tn-atom"><img alt="" class="tn-atom__img t-img" data-original="images/youtube.svg"
                  imgfield="tn_img_1666725270344" /></div>
            </div>
            <div class="t396__elem tn-elem tn-elem__7295203021666725270350" data-elem-id="1666725270350"
              data-elem-type="image" data-field-axisx-value="left" data-field-axisy-value="top"
              data-field-container-value="grid" data-field-fileheight-value="32" data-field-filewidth-value="32"
              data-field-heightunits-value="" data-field-left-res-320-value="171" data-field-left-res-480-value="350"
              data-field-left-res-640-value="15" data-field-left-value="176" data-field-leftunits-value="px"
              data-field-top-res-320-value="621" data-field-top-res-480-value="14" data-field-top-res-640-value="51"
              data-field-top-value="100" data-field-topunits-value="px" data-field-width-value="32"
              data-field-widthunits-value="px">
              <div class="tn-atom">
                <img alt="" class="tn-atom__img t-img" data-original="images/instagram.svg"
                  imgfield="tn_img_1666725270350" />
              </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__7295203021666872921562" data-elem-id="1666872921562"
              data-elem-type="image" data-field-axisx-value="left" data-field-axisy-value="top"
              data-field-container-value="grid" data-field-fileheight-value="1200" data-field-filewidth-value="1200"
              data-field-heightunits-value="" data-field-left-res-320-value="20" data-field-left-res-480-value="358"
              data-field-left-res-640-value="19" data-field-left-value="20" data-field-leftunits-value="px"
              data-field-top-res-320-value="646" data-field-top-res-480-value="19" data-field-top-res-640-value="57"
              data-field-top-res-960-value="76" data-field-top-value="76" data-field-topunits-value="px"
              data-field-width-value="22" data-field-widthunits-value="px">
              <div class="tn-atom"><img alt="" class="tn-atom__img t-img" data-original="images/Yandex_Zen.png"
                  imgfield="tn_img_1666872921562" /></div>
            </div>
            <div class="t396__elem tn-elem tn-elem__7295203021666725320636" data-elem-id="1666725320636"
              data-elem-type="image" data-field-axisx-value="left" data-field-axisy-value="top"
              data-field-container-value="grid" data-field-fileheight-value="36" data-field-filewidth-value="153"
              data-field-heightunits-value="" data-field-left-res-480-value="17" data-field-left-value="20"
              data-field-leftunits-value="px" data-field-top-res-480-value="12" data-field-top-value="0"
              data-field-topunits-value="px" data-field-width-value="153" data-field-widthunits-value="px">
              <div class="tn-atom">
                <img alt="" class="tn-atom__img t-img" data-original="images/Logo.svg"
                  imgfield="tn_img_1666725320636" />
              </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__7295203021669297130109" data-elem-id="1669297130109"
              data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
              data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="20"
              data-field-left-res-480-value="20" data-field-left-res-640-value="198" data-field-left-res-960-value="378"
              data-field-left-value="498" data-field-leftunits-value="px" data-field-top-res-320-value="296"
              data-field-top-res-480-value="332" data-field-top-res-640-value="262" data-field-top-res-960-value="122"
              data-field-top-value="121" data-field-topunits-value="px" data-field-width-res-320-value="189"
              data-field-width-value="188" data-field-widthunits-value="px">
              <div class="tn-atom">
                <a href="#popup:embedcode" style="color: inherit">Инвестиционная платформа</a>
              </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__7295203021669297130123" data-elem-id="1669297130123"
              data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
              data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="20"
              data-field-left-res-480-value="20" data-field-left-res-640-value="198" data-field-left-res-960-value="378"
              data-field-left-value="498" data-field-leftunits-value="px" data-field-top-res-320-value="320"
              data-field-top-res-480-value="356" data-field-top-res-640-value="289" data-field-top-res-960-value="149"
              data-field-top-value="148" data-field-topunits-value="px" data-field-width-res-320-value="279"
              data-field-width-value="198" data-field-widthunits-value="px">
              <div class="tn-atom">
                <a href="#popup:embedcode" style="color: inherit">Кредит для бизнеса без залога</a>
              </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__7295203021669297130133" data-elem-id="1669297130133"
              data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
              data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="20"
              data-field-left-res-480-value="20" data-field-left-res-640-value="198" data-field-left-res-960-value="378"
              data-field-left-value="498" data-field-leftunits-value="px" data-field-top-res-320-value="344"
              data-field-top-res-480-value="380" data-field-top-res-640-value="316" data-field-top-res-960-value="176"
              data-field-top-value="175" data-field-topunits-value="px" data-field-width-res-320-value="259"
              data-field-width-value="223" data-field-widthunits-value="px">
              <div class="tn-atom">
                <a href="#popup:embedcode" style="color: inherit">Рассрочка для клиентов бизнеса</a>
              </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__7295203021669297210103" data-elem-id="1669297210103"
              data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
              data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="20"
              data-field-left-res-480-value="20" data-field-left-res-640-value="198" data-field-left-res-960-value="378"
              data-field-left-value="498" data-field-leftunits-value="px" data-field-top-res-320-value="368"
              data-field-top-res-480-value="404" data-field-top-res-640-value="343" data-field-top-res-960-value="203"
              data-field-top-value="202" data-field-topunits-value="px" data-field-width-res-320-value="273"
              data-field-width-value="198" data-field-widthunits-value="px">
              <div class="tn-atom">
                <a href="#popup:embedcode" style="color: inherit">Кредитование малого бизнеса</a>
              </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__7295203021669297210116" data-elem-id="1669297210116"
              data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
              data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="20"
              data-field-left-res-480-value="20" data-field-left-res-640-value="198" data-field-left-res-960-value="378"
              data-field-left-value="498" data-field-leftunits-value="px" data-field-top-res-320-value="392"
              data-field-top-res-480-value="428" data-field-top-res-640-value="370" data-field-top-res-960-value="230"
              data-field-top-value="229" data-field-topunits-value="px" data-field-width-res-320-value="189"
              data-field-width-value="186" data-field-widthunits-value="px">
              <div class="tn-atom">
                <a href="#popup:embedcode" style="color: inherit">Закупочный факторинг</a>
              </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__7295203021693407544302" data-elem-id="1693407544302"
              data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
              data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="20"
              data-field-left-res-480-value="230" data-field-left-res-640-value="316"
              data-field-left-res-960-value="720" data-field-left-value="950" data-field-leftunits-value="px"
              data-field-top-res-320-value="557" data-field-top-res-480-value="113" data-field-top-res-640-value="0"
              data-field-top-res-960-value="0" data-field-top-value="0" data-field-topunits-value="px"
              data-field-width-res-320-value="236" data-field-width-value="230" data-field-widthunits-value="px">
              <div class="tn-atom">
                <a href="tel:+78001011565" style="color: inherit">+7 800 101-15-65</a>
              </div>
            </div>
            <div class="t396__elem tn-elem tn-elem__7295203021722954251557" data-elem-id="1722954251557"
              data-elem-type="image" data-field-axisx-value="left" data-field-axisy-value="top"
              data-field-container-value="grid" data-field-fileheight-value="300" data-field-filewidth-value="402"
              data-field-heightunits-value="" data-field-left-res-320-value="20" data-field-left-res-480-value="390"
              data-field-left-res-640-value="25" data-field-left-res-960-value="20" data-field-left-value="20"
              data-field-leftunits-value="px" data-field-top-res-320-value="690" data-field-top-res-480-value="221"
              data-field-top-res-640-value="375" data-field-top-res-960-value="148" data-field-top-value="172"
              data-field-topunits-value="px" data-field-width-res-480-value="63" data-field-width-value="78"
              data-field-widthunits-value="px">
              <a class="tn-atom" href="#popup:embedcode"><img alt="" class="tn-atom__img t-img"
                  data-original="images/Sk__-v-ru_green.png" imgfield="tn_img_1722954251557" /></a>
            </div>
            <div class="t396__elem tn-elem tn-elem__7295203021722954267621" data-elem-id="1722954267621"
              data-elem-type="text" data-field-axisx-value="left" data-field-axisy-value="top"
              data-field-container-value="grid" data-field-heightunits-value="" data-field-left-res-320-value="20"
              data-field-left-res-480-value="303" data-field-left-res-640-value="22" data-field-left-res-960-value="20"
              data-field-left-value="112" data-field-leftunits-value="px" data-field-top-res-320-value="752"
              data-field-top-res-480-value="282" data-field-top-res-640-value="442" data-field-top-res-960-value="220"
              data-field-top-value="171" data-field-topunits-value="px" data-field-width-res-320-value="272"
              data-field-width-res-480-value="154" data-field-width-res-640-value="594"
              data-field-width-res-960-value="314" data-field-width-value="316" data-field-widthunits-value="px">
              <div class="tn-atom" field="tn_text_1722954267621">
                Разработка осуществлена АО «Пененза» при поддержке Фонда
                «Сколково», с июня 2024 в рамках направления деятельности
                «Стратегические компьютерные технологии и программное
                обеспечение»
              </div>
            </div>
          </div>
        </div>
        <script>
          t_onReady(function () {
            t_onFuncLoad("t396_init", function () {
              t396_init("729520302");
            });
          });
        </script>
        <!-- /T396 -->
      </div>
    </footer>
    <!--/footer-->
  </div>
  <script src="loadAssets.js?v=5432323645694"></script>
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