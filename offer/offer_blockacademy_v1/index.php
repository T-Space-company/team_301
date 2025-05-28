<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--metatextblock-->
    <title>Основы трeйдингa от А до Я</title>

    <meta
      name="description"
      content="На вебинаре вы узнаете как правильно стартовать и какие ошибки не нужно совершать."
    />
    <meta property="og:title" content="Основы трeйдингa от А до Я" />
    <meta
      property="og:description"
      content="На вебинаре вы узнаете как правильно стартовать и какие ошибки не нужно совершать."
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <meta property="og:type" content="website" />
    <link rel="stylesheet" href="./css/cookie.css" />

    <link rel="shortcut icon" href="./images/fav.svg" type="image/x-icon" />
    <!-- Assets -->
    <script
      src="js/tilda-fallback-1.0.min.js"
      async=""
      charset="utf-8"
    ></script>
    <link
      rel="stylesheet"
      href="css/tilda-grid-3.0.min.css"
      type="text/css"
      media="all"
      onerror="this.loaderr='y';"
    />
    <link
      rel="stylesheet"
      href="css/tilda-blocks-page27848736.min.css"
      type="text/css"
      media="all"
      onerror="this.loaderr='y';"
    />
    <link
      rel="stylesheet"
      href="css/tilda-animation-2.0.min.css"
      type="text/css"
      media="all"
      onerror="this.loaderr='y';"
    />
    <link
      rel="stylesheet"
      href="css/highlight.min.css"
      type="text/css"
      media="all"
      onerror="this.loaderr='y';"
    />
    <script
      nomodule=""
      src="js/tilda-polyfill-1.0.min.js"
      charset="utf-8"
    ></script>
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
      window.tildaApiServiceRootDomain = "tildaapi.pro";

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
    <script
      src="js/jquery-1.10.2.min.js"
      charset="utf-8"
      onerror="this.loaderr='y';"
    ></script>
    <script
      src="js/tilda-scripts-3.0.min.js"
      charset="utf-8"
      defer=""
      onerror="this.loaderr='y';"
    ></script>
    <script
      src="js/tilda-blocks-page27848736.min.js"
      charset="utf-8"
      async=""
      onerror="this.loaderr='y';"
    ></script>
    <script
      src="js/tilda-lazyload-1.0.min.js"
      charset="utf-8"
      async=""
      onerror="this.loaderr='y';"
    ></script>
    <script
      src="js/tilda-animation-2.0.min.js"
      charset="utf-8"
      async=""
      onerror="this.loaderr='y';"
    ></script>
    <script
      src="js/tilda-zero-1.1.min.js"
      charset="utf-8"
      async=""
      onerror="this.loaderr='y';"
    ></script>
    <script
      src="js/highlight.min.js"
      charset="utf-8"
      onerror="this.loaderr='y';"
    ></script>
    <script
      src="js/tilda-animation-sbs-1.0.min.js"
      charset="utf-8"
      async=""
      onerror="this.loaderr='y';"
    ></script>
    <script
      src="js/tilda-zero-scale-1.0.min.js"
      charset="utf-8"
      async=""
      onerror="this.loaderr='y';"
    ></script>

    <style type="text/css">
      @media screen and (min-width: 980px) {
        .t-records {
          opacity: 0;
        }

        .t-records_animated {
          -webkit-transition: opacity ease-in-out 0.2s;
          -moz-transition: opacity ease-in-out 0.2s;
          -o-transition: opacity ease-in-out 0.2s;
          transition: opacity ease-in-out 0.2s;
        }

        .t-records.t-records_visible {
          opacity: 1;
        }
      }
    </style>

    <link rel="stylesheet" href="./css/new.css" />
    <link rel="stylesheet" href="./css/form.css?v=4" />

    <script src="form/js/libs/intlTelInput.js"></script>

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

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
      (function (m, e, t, r, i, k, a) {
        m[i] =
          m[i] ||
          function () {
            (m[i].a = m[i].a || []).push(arguments);
          };
        m[i].l = 1 * new Date();
        for (var j = 0; j < document.scripts.length; j++) {
          if (document.scripts[j].src === r) {
            return;
          }
        }
        (k = e.createElement(t)),
          (a = e.getElementsByTagName(t)[0]),
          (k.async = 1),
          (k.src = r),
          a.parentNode.insertBefore(k, a);
      })(
        window,
        document,
        "script",
        "https://mc.yandex.ru/metrika/tag.js",
        "ym"
      );

      ym(102188588, "init", {
        clickmap: true,
        trackLinks: true,
        accurateTrackBounce: true,
      });
    </script>
    <noscript
      ><div>
        <img
          src="https://mc.yandex.ru/watch/102188588"
          style="position: absolute; left: -9999px"
          alt=""
        /></div
    ></noscript>
    <!-- /Yandex.Metrika counter -->
  </head>

  <body class="t-body" style="margin: 0">
    <div
      id="allrecords"
      class="t-records t-records_animated t-records_visible"
      data-hook="blocks-collection-content-node"
      data-tilda-project-id="4375783"
      data-tilda-page-id="27848736"
      data-tilda-page-alias="kz"
      data-tilda-formskey="f7c845137aa2b5139686f9857e4faef2"
      data-tilda-lazy="yes"
      data-tilda-project-lang="RU"
      data-tilda-root-zone="pro"
      data-tilda-project-headcode="yes"
    >
      <div
        id="rec700109402"
        class="r t-rec"
        style=""
        data-animationappear="off"
        data-record-type="396"
      >
        <!-- T396 -->
        <style>
          #rec700109402 .t396__artboard {
            height: 1060px;
            background-color: #ffffff;
          }

          #rec700109402 .t396__filter {
            height: 1060px;
          }

          #rec700109402 .t396__carrier {
            height: 1060px;
            background-position: center center;
            background-attachment: scroll;
            background-size: cover;
            background-repeat: no-repeat;
          }

          @media screen and (max-width: 1199px) {
            #rec700109402 .t396__artboard,
            #rec700109402 .t396__filter,
            #rec700109402 .t396__carrier {
            }

            #rec700109402 .t396__filter {
            }

            #rec700109402 .t396__carrier {
              background-attachment: scroll;
            }
          }

          @media screen and (max-width: 959px) {
            #rec700109402 .t396__artboard,
            #rec700109402 .t396__filter,
            #rec700109402 .t396__carrier {
              height: 1260px;
            }

            #rec700109402 .t396__filter {
            }

            #rec700109402 .t396__carrier {
              background-attachment: scroll;
            }
          }

          @media screen and (max-width: 639px) {
            #rec700109402 .t396__artboard,
            #rec700109402 .t396__filter,
            #rec700109402 .t396__carrier {
            }

            #rec700109402 .t396__filter {
            }

            #rec700109402 .t396__carrier {
              background-attachment: scroll;
            }
          }

          @media screen and (max-width: 479px) {
            #rec700109402 .t396__artboard,
            #rec700109402 .t396__filter,
            #rec700109402 .t396__carrier {
              height: 1085px;
            }

            #rec700109402 .t396__artboard {
              background-color: #ffffff;
            }

            #rec700109402 .t396__filter {
            }

            #rec700109402 .t396__carrier {
              background-position: center center;
              background-attachment: scroll;
            }
          }

          #rec700109402 .tn-elem[data-elem-id="1648914651478"] {
            z-index: 2;
            top: 0px;
            left: calc(50% - 600px + 760px);
            width: 365px;
          }

          #rec700109402 .tn-elem[data-elem-id="1648914651478"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651478"] {
              top: 0px;
              left: calc(50% - 480px + 650px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651478"] {
              top: 70px;
              left: calc(50% - 320px + 1552px);
            }
          }

          @media screen and (max-width: 639px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651478"] {
              top: 70px;
              left: calc(50% - 240px + 1472px);
            }
          }

          @media screen and (max-width: 479px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651478"] {
              top: 71px;
              left: calc(50% - 160px + 1392px);
            }
          }

          #rec700109402 .tn-elem[data-elem-id="1648914651467"] {
            z-index: 3;
            top: calc(530px - 50px + 0px);
            left: calc(50% - 50% + 0px);
            width: 100%;
            height: 100%;
          }

          #rec700109402 .tn-elem[data-elem-id="1648914651467"] .tn-atom {
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651467"] {
              top: calc(530px - 50% + 0px);
              left: calc(50% - 50% + 0px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651467"] {
              top: calc(530px - 50% + 0px);
              left: calc(50% - 50% + 0px);
            }
          }

          @media screen and (max-width: 639px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651467"] {
              top: calc(530px - 50% + 0px);
              left: calc(50% - 50% + 0px);
            }
          }

          @media screen and (max-width: 479px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651467"] {
              top: calc(530px - 50% + 212px);
              left: calc(50% - 50% + 0px);
              width: 100%;
              height: 139%;
            }
          }

          #rec700109402 .tn-elem[data-elem-id="1648914651490"] {
            z-index: 4;
            top: 168px;
            left: calc(50% - 600px + 79px);
            width: 296px;
          }

          #rec700109402 .tn-elem[data-elem-id="1648914651490"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651490"] {
              top: 168px;
              left: calc(50% - 480px + -31px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651490"] {
              top: 145px;
              left: calc(50% - 320px + 160px);
              width: 229px;
            }
          }

          @media screen and (max-width: 639px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651490"] {
              top: 145px;
              left: calc(50% - 240px + 80px);
            }
          }

          @media screen and (max-width: 479px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651490"] {
              top: 176px;
              left: calc(50% - 160px + 16px);
            }
          }

          #rec700109402 .tn-elem[data-elem-id="1648914651481"] {
            z-index: 5;
            top: -18px;
            left: calc(50% - 600px + 426px);
            width: 878px;
          }

          #rec700109402 .tn-elem[data-elem-id="1648914651481"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651481"] {
              top: -18px;
              left: calc(50% - 480px + 316px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651481"] {
              top: 44px;
              left: calc(50% - 320px + 121px);
              width: 549px;
            }
          }

          @media screen and (max-width: 639px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651481"] {
              top: 44px;
              left: calc(50% - 240px + 41px);
            }
          }

          @media screen and (max-width: 479px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651481"] {
              top: 27px;
              left: calc(50% - 160px + -53px);
              width: 572px;
            }
          }

          #rec700109402 .tn-elem[data-elem-id="1648914651473"] {
            z-index: 6;
            top: 38px;
            left: calc(50% - 600px + 79px);
            width: 117px;
          }

          #rec700109402 .tn-elem[data-elem-id="1648914651473"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651473"] {
              top: 38px;
              left: calc(50% - 480px + -31px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651473"] {
              top: 31px;
              left: calc(50% - 320px + 69px);
            }
          }

          @media screen and (max-width: 639px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651473"] {
              top: 31px;
              left: calc(50% - 240px + 11px);
            }
          }

          @media screen and (max-width: 479px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651473"] {
              top: 33px;
              left: calc(50% - 160px + 12px);
              width: 90px;
            }
          }

          #rec700109402 .tn-elem[data-elem-id="1648914651484"] {
            z-index: 7;
            top: 0px;
            left: calc(50% - 600px + -10000px);
            width: 917px;
          }

          #rec700109402 .tn-elem[data-elem-id="1648914651484"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
          }

          @media screen and (max-width: 959px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651484"] {
              top: 737px;
              left: calc(50% - 320px + 143px);
              width: 225px;
            }
          }

          @media screen and (max-width: 639px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651484"] {
              top: 737px;
              left: calc(50% - 240px + 63px);
            }
          }

          @media screen and (max-width: 479px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651484"] {
              top: 677px;
              left: calc(50% - 160px + 8px);
              width: 198px;
            }
          }

          #rec700109402 .tn-elem[data-elem-id="1648914651487"] {
            z-index: 8;
            top: 467px;
            left: calc(50% - 600px + 1029px);
            width: 192px;
          }

          #rec700109402 .tn-elem[data-elem-id="1648914651487"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651487"] {
              top: 467px;
              left: calc(50% - 480px + 919px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651487"] {
              top: 536px;
              left: calc(50% - 320px + 1820px);
            }
          }

          @media screen and (max-width: 639px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651487"] {
              top: 536px;
              left: calc(50% - 240px + 1740px);
            }
          }

          @media screen and (max-width: 479px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651487"] {
              top: 537px;
              left: calc(50% - 160px + 1660px);
            }
          }

          #rec700109402 .tn-elem[data-elem-id="1648914651493"] {
            color: #1f1f1f;
            z-index: 9;
            top: 176px;
            left: calc(50% - 600px + 138px);
            width: 560px;
          }

          #rec700109402 .tn-elem[data-elem-id="1648914651493"] .tn-atom {
            color: #1f1f1f;
            font-size: 17px;
            font-family: "CeraPro", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651493"] {
              top: 176px;
              left: calc(50% - 480px + 28px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651493"] {
              top: 152px;
              left: calc(50% - 320px + 210px);
            }

            #rec700109402 .tn-elem[data-elem-id="1648914651493"] .tn-atom {
              font-size: 12px;
            }
          }

          @media screen and (max-width: 639px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651493"] {
              top: 152px;
              left: calc(50% - 240px + 130px);
            }
          }

          @media screen and (max-width: 479px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651493"] {
              top: 183px;
              left: calc(50% - 160px + 64px);
              width: 175px;
            }
          }

          #rec700109402 .tn-elem[data-elem-id="1648914651497"] {
            color: #000000;
            z-index: 10;
            top: 225px;
            left: calc(50% - 600px + 79px);
            width: 641px;
          }

          #rec700109402 .tn-elem[data-elem-id="1648914651497"] .tn-atom {
            color: #000000;
            font-size: 57px;
            font-family: "CeraPro", Arial, sans-serif;
            line-height: 1.07;
            font-weight: 700;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651497"] {
              top: 256px;
              left: calc(50% - 480px + -31px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651497"] {
              top: 236px;
              left: calc(50% - 320px + -383px);
              width: 229px;
            }

            #rec700109402 .tn-elem[data-elem-id="1648914651497"] .tn-atom {
              font-size: 28px;
            }
          }

          @media screen and (max-width: 639px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651497"] {
              top: 192px;
              left: calc(50% - 240px + -546px);
            }
          }

          @media screen and (max-width: 479px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651497"] {
              top: 211px;
              left: calc(50% - 160px + -10000px);
              width: 264px;
            }
          }

          #rec700109402 .tn-elem[data-elem-id="1648914651499"] {
            color: #000000;
            z-index: 11;
            top: 413px;
            left: calc(50% - 600px + 79px);
            width: 500px;
          }

          #rec700109402 .tn-elem[data-elem-id="1648914651499"] .tn-atom {
            color: #000000;
            font-size: 20px;
            font-family: "CeraPro", Arial, sans-serif;
            line-height: 1.35;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651499"] {
              top: 413px;
              left: calc(50% - 480px + -31px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651499"] {
              top: 332px;
              left: calc(50% - 320px + 160px);
              width: 232px;
            }

            #rec700109402 .tn-elem[data-elem-id="1648914651499"] .tn-atom {
              font-size: 12px;
              line-height: 1.4;
            }
          }

          @media screen and (max-width: 639px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651499"] {
              top: 332px;
              left: calc(50% - 240px + 80px);
            }
          }

          @media screen and (max-width: 479px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651499"] {
              top: 354px;
              left: calc(50% - 160px + 16px);
              width: 266px;
            }
          }

          #rec700109402 .tn-elem[data-elem-id="1648914651517"] {
            z-index: 12;
            top: 750px;
            left: calc(50% - 600px + -2px);
            width: 1205px;
          }

          #rec700109402 .tn-elem[data-elem-id="1648914651517"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651517"] {
              top: 750px;
              left: calc(50% - 480px + -112px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651517"] {
              top: 820px;
              left: calc(50% - 320px + 790px);
            }
          }

          @media screen and (max-width: 639px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651517"] {
              top: 820px;
              left: calc(50% - 240px + 710px);
            }
          }

          @media screen and (max-width: 479px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651517"] {
              top: 821px;
              left: calc(50% - 160px + 630px);
            }
          }

          #rec700109402 .tn-elem[data-elem-id="1648914651520"] {
            z-index: 13;
            top: 750px;
            left: calc(50% - 600px + 78px);
            width: 140px;
          }

          #rec700109402 .tn-elem[data-elem-id="1648914651520"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651520"] {
              top: 750px;
              left: calc(50% - 480px + -32px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651520"] {
              top: 755px;
              left: calc(50% - 320px + 316px);
              width: 92px;
            }
          }

          @media screen and (max-width: 639px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651520"] {
              top: 755px;
              left: calc(50% - 240px + 236px);
            }
          }

          @media screen and (max-width: 479px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651520"] {
              top: 691px;
              left: calc(50% - 160px + 156px);
            }
          }

          #rec700109402 .tn-elem[data-elem-id="1648914651523"] {
            z-index: 14;
            top: 750px;
            left: calc(50% - 600px + 634px);
            width: 180px;
          }

          #rec700109402 .tn-elem[data-elem-id="1648914651523"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651523"] {
              top: 750px;
              left: calc(50% - 480px + 524px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651523"] {
              top: 986px;
              left: calc(50% - 320px + 230px);
            }
          }

          @media screen and (max-width: 639px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651523"] {
              top: 986px;
              left: calc(50% - 240px + 150px);
            }
          }

          @media screen and (max-width: 479px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651523"] {
              top: 912px;
              left: calc(50% - 160px + -10000px);
              width: 92px;
            }
          }

          #rec700109402 .tn-elem[data-elem-id="1648914651526"] {
            z-index: 15;
            top: 825px;
            left: calc(50% - 600px + 57px);
            width: 287px;
          }

          #rec700109402 .tn-elem[data-elem-id="1648914651526"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651526"] {
              top: 820px;
              left: calc(50% - 480px + -53px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651526"] {
              top: 890px;
              left: calc(50% - 320px + 848px);
            }
          }

          @media screen and (max-width: 639px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651526"] {
              top: 890px;
              left: calc(50% - 240px + 768px);
            }
          }

          @media screen and (max-width: 479px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651526"] {
              top: 430px;
              left: calc(50% - 160px + -887px);
              width: 225px;
            }
          }

          #rec700109402 .tn-elem[data-elem-id="1648914651529"] {
            color: #1f1f1f;
            z-index: 16;
            top: 846px;
            left: calc(50% - 600px + 274px);
            width: 248px;
          }

          #rec700109402 .tn-elem[data-elem-id="1648914651529"] .tn-atom {
            color: #1f1f1f;
            font-size: 16px;
            font-family: "CeraPro", Arial, sans-serif;
            line-height: 1.42;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651529"] {
              top: 846px;
              left: calc(50% - 480px + 164px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651529"] {
              top: 827px;
              left: calc(50% - 320px + 316px);
            }

            #rec700109402 .tn-elem[data-elem-id="1648914651529"] .tn-atom {
              font-size: 12px;
            }
          }

          @media screen and (max-width: 639px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651529"] {
              top: 827px;
              left: calc(50% - 240px + 236px);
            }
          }

          @media screen and (max-width: 479px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651529"] {
              top: 758px;
              left: calc(50% - 160px + 147px);
              width: 165px;
            }

            #rec700109402 .tn-elem[data-elem-id="1648914651529"] .tn-atom {
              font-size: 11px;
            }
          }

          #rec700109402 .tn-elem[data-elem-id="1648914651531"] {
            color: #1f1f1f;
            z-index: 17;
            top: 847px;
            left: calc(50% - 600px + 634px);
            width: 560px;
          }

          #rec700109402 .tn-elem[data-elem-id="1648914651531"] .tn-atom {
            color: #1f1f1f;
            font-size: 16px;
            font-family: "CeraPro", Arial, sans-serif;
            line-height: 1.42;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651531"] {
              top: 847px;
              left: calc(50% - 480px + 524px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651531"] {
              top: 1067px;
              left: calc(50% - 320px + 159px);
            }

            #rec700109402 .tn-elem[data-elem-id="1648914651531"] .tn-atom {
              font-size: 12px;
            }
          }

          @media screen and (max-width: 639px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651531"] {
              top: 1067px;
              left: calc(50% - 240px + 79px);
            }
          }

          @media screen and (max-width: 479px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651531"] {
              top: 749px;
              left: calc(50% - 160px + -805px);
              width: 139px;
            }

            #rec700109402 .tn-elem[data-elem-id="1648914651531"] .tn-atom {
              font-size: 11px;
            }
          }

          #rec700109402 .tn-elem[data-elem-id="1648914651533"] {
            color: #1f1f1f;
            z-index: 18;
            top: 869px;
            left: calc(50% - 600px + 634px);
            width: 259px;
          }

          #rec700109402 .tn-elem[data-elem-id="1648914651533"] .tn-atom {
            color: #1f1f1f;
            font-size: 26px;
            font-family: "CeraPro", Arial, sans-serif;
            line-height: 1.42;
            font-weight: 600;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651533"] {
              top: 869px;
              left: calc(50% - 480px + 524px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651533"] {
              top: 1079px;
              left: calc(50% - 320px + 159px);
            }

            #rec700109402 .tn-elem[data-elem-id="1648914651533"] .tn-atom {
              font-size: 21px;
            }
          }

          @media screen and (max-width: 639px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651533"] {
              top: 1079px;
              left: calc(50% - 240px + 79px);
            }
          }

          @media screen and (max-width: 479px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651533"] {
              top: 764px;
              left: calc(50% - 160px + -805px);
              width: 156px;
            }

            #rec700109402 .tn-elem[data-elem-id="1648914651533"] .tn-atom {
              font-size: 18px;
            }
          }

          #rec700109402 .tn-elem[data-elem-id="1648914651535"] {
            color: #1f1f1f;
            z-index: 19;
            top: 869px;
            left: calc(50% - 600px + 940px);
            width: 560px;
          }

          #rec700109402 .tn-elem[data-elem-id="1648914651535"] .tn-atom {
            color: #1f1f1f;
            font-size: 16px;
            font-family: "CeraPro", Arial, sans-serif;
            line-height: 1.42;
            font-weight: 600;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651535"] {
              top: 869px;
              left: calc(50% - 480px + 830px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651535"] {
              top: 1079px;
              left: calc(50% - 320px + 353px);
            }

            #rec700109402 .tn-elem[data-elem-id="1648914651535"] .tn-atom {
              font-size: 18px;
            }
          }

          @media screen and (max-width: 639px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651535"] {
              top: 1079px;
              left: calc(50% - 240px + 273px);
            }
          }

          @media screen and (max-width: 479px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651535"] {
              top: 764px;
              left: calc(50% - 160px + -624px);
              width: 117px;
            }

            #rec700109402 .tn-elem[data-elem-id="1648914651535"] .tn-atom {
              font-size: 18px;
            }
          }

          #rec700109402 .tn-elem[data-elem-id="1648914651537"] {
            color: #1f1f1f;
            z-index: 20;
            top: 847px;
            left: calc(50% - 600px + 940px);
            width: 560px;
          }

          #rec700109402 .tn-elem[data-elem-id="1648914651537"] .tn-atom {
            color: #1f1f1f;
            font-size: 16px;
            font-family: "CeraPro", Arial, sans-serif;
            line-height: 1.42;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651537"] {
              top: 847px;
              left: calc(50% - 480px + 830px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651537"] {
              top: 1067px;
              left: calc(50% - 320px + 353px);
            }

            #rec700109402 .tn-elem[data-elem-id="1648914651537"] .tn-atom {
              font-size: 12px;
            }
          }

          @media screen and (max-width: 639px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651537"] {
              top: 1067px;
              left: calc(50% - 240px + 273px);
            }
          }

          @media screen and (max-width: 479px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651537"] {
              top: 749px;
              left: calc(50% - 160px + -624px);
              width: 117px;
            }

            #rec700109402 .tn-elem[data-elem-id="1648914651537"] .tn-atom {
              font-size: 11px;
            }
          }

          #rec700109402 .tn-elem[data-elem-id="1648914651547"] {
            z-index: 21;
            top: 858px;
            left: calc(50% - 600px + -10000px);
            width: 278px;
            -webkit-backdrop-filter: blur(31px);
            backdrop-filter: blur(31px);
          }

          #rec700109402 .tn-elem[data-elem-id="1648914651547"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
          }

          @media screen and (max-width: 959px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651547"] {
              top: 496px;
              left: calc(50% - 320px + 181px);
            }
          }

          @media screen and (max-width: 639px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651547"] {
              top: 496px;
              left: calc(50% - 240px + 101px);
            }
          }

          @media screen and (max-width: 479px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651547"] {
              top: 749px;
              left: calc(50% - 160px + -397px);
              -webkit-backdrop-filter: blur(5px);
              backdrop-filter: blur(5px);
              border-radius: "" px;
            }
          }

          #rec700109402 .tn-elem[data-elem-id="1648915450056"] {
            color: #000000;
            z-index: 23;
            top: 314px;
            left: calc(50% - 600px + -10000px);
            width: 641px;
          }

          #rec700109402 .tn-elem[data-elem-id="1648915450056"] .tn-atom {
            color: #000000;
            font-size: 57px;
            font-family: "CeraPro", Arial, sans-serif;
            line-height: 1.07;
            font-weight: 700;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec700109402 .tn-elem[data-elem-id="1648915450056"] {
              top: 54px;
              left: calc(50% - 480px + -1206px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec700109402 .tn-elem[data-elem-id="1648915450056"] {
              top: 220px;
              left: calc(50% - 320px + 160px);
              width: 229px;
            }

            #rec700109402 .tn-elem[data-elem-id="1648915450056"] .tn-atom {
              font-size: 28px;
            }
          }

          @media screen and (max-width: 639px) {
            #rec700109402 .tn-elem[data-elem-id="1648915450056"] {
              top: 220px;
              left: calc(50% - 240px + 80px);
            }
          }

          @media screen and (max-width: 479px) {
            #rec700109402 .tn-elem[data-elem-id="1648915450056"] {
              top: 241px;
              left: calc(50% - 160px + 16px);
              width: 229px;
            }

            #rec700109402 .tn-elem[data-elem-id="1648915450056"] .tn-atom {
              font-size: 24px;
            }
          }

          #rec700109402 .tn-elem[data-elem-id="1649014259367"] {
            z-index: 27;
            top: 264px;
            left: calc(50% - 600px + 100000px);
            width: 560px;
            height: 170px;
          }

          #rec700109402 .tn-elem[data-elem-id="1649014259367"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
          }

          @media screen and (max-width: 959px) {
          }

          @media screen and (max-width: 639px) {
          }

          @media screen and (max-width: 479px) {
            #rec700109402 .tn-elem[data-elem-id="1649014259367"] {
              top: 550px;
              left: calc(50% - 160px + -1173px);
            }
          }

          #rec700109402 .tn-elem[data-elem-id="1648914651552"] {
            z-index: 28;
            top: 1222px;
            left: calc(50% - 600px + 73px);
            width: 290px;
          }

          #rec700109402
            .tn-elem.t396__elem--anim-hidden[data-elem-id="1648914651552"] {
            opacity: 0;
          }

          #rec700109402 .tn-elem[data-elem-id="1648914651552"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651552"] {
              top: 535px;
              left: calc(50% - 480px + -30px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651552"] {
              top: 510px;
              left: calc(50% - 320px + 216px);
              width: 208px;
            }
          }

          @media screen and (max-width: 639px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651552"] {
              top: 510px;
              left: calc(50% - 240px + 136px);
            }
          }

          @media screen and (max-width: 479px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651552"] {
              top: 762px;
              left: calc(50% - 160px + -347px);
            }
          }

          #rec700109402 .tn-elem[data-elem-id="1648914651502"] {
            z-index: 29;
            top: 539px;
            left: calc(50% - 600px + 428px);
            width: 28px;
          }

          #rec700109402 .tn-elem[data-elem-id="1648914651502"] .tn-atom {
            opacity: 0;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651502"] {
              top: 537px;
              left: calc(50% - 480px + 319px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651502"] {
              top: 608px;
              left: calc(50% - 320px + 1248px);
            }
          }

          @media screen and (max-width: 639px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651502"] {
              top: 608px;
              left: calc(50% - 240px + 1168px);
            }
          }

          @media screen and (max-width: 479px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651502"] {
              top: 639px;
              left: calc(50% - 160px + 1088px);
            }
          }

          #rec700109402 .tn-elem[data-elem-id="1649024963297"] {
            z-index: 30;
            top: 177px;
            left: calc(50% - 600px + 94px);
            width: 31px;
          }

          #rec700109402 .tn-elem[data-elem-id="1649024963297"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec700109402 .tn-elem[data-elem-id="1649024963297"] {
              top: 177px;
              left: calc(50% - 480px + -15px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec700109402 .tn-elem[data-elem-id="1649024963297"] {
              top: 149px;
              left: calc(50% - 320px + 169px);
            }
          }

          @media screen and (max-width: 639px) {
            #rec700109402 .tn-elem[data-elem-id="1649024963297"] {
              top: 149px;
              left: calc(50% - 240px + 90px);
            }
          }

          @media screen and (max-width: 479px) {
            #rec700109402 .tn-elem[data-elem-id="1649024963297"] {
              top: 183px;
              left: calc(50% - 160px + 28px);
              width: 25px;
            }
          }

          #rec700109402 .tn-elem[data-elem-id="1648914651555"] {
            color: #000000;
            z-index: 31;
            top: 532px;
            left: calc(50% - 600px + 467px);
            width: 553px;
          }

          #rec700109402 .tn-elem[data-elem-id="1648914651555"] .tn-atom {
            color: #000000;
            font-size: 15px;
            font-family: "CeraPro", Arial, sans-serif;
            line-height: 1.35;
            font-weight: 400;
            opacity: 0;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651555"] {
              top: 530px;
              left: calc(50% - 480px + 357px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651555"] {
              top: 577px;
              left: calc(50% - 320px + 44px);
            }

            #rec700109402 .tn-elem[data-elem-id="1648914651555"] {
              text-align: center;
            }

            #rec700109402 .tn-elem[data-elem-id="1648914651555"] .tn-atom {
              font-size: 12px;
            }
          }

          @media screen and (max-width: 639px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651555"] {
              top: 580px;
              left: calc(50% - 240px + -36px);
            }
          }

          @media screen and (max-width: 479px) {
            #rec700109402 .tn-elem[data-elem-id="1648914651555"] {
              top: 561px;
              left: calc(50% - 160px + 81px);
              width: 159px;
            }
          }

          #rec700109402 .tn-elem[data-elem-id="1649105242108"] {
            z-index: 32;
            top: 760px;
            left: calc(50% - 600px + -10000px);
            width: 180px;
          }

          #rec700109402 .tn-elem[data-elem-id="1649105242108"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec700109402 .tn-elem[data-elem-id="1649105242108"] {
              top: 708px;
              left: calc(50% - 480px + -929px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec700109402 .tn-elem[data-elem-id="1649105242108"] {
              top: 725px;
              left: calc(50% - 320px + -444px);
            }
          }

          @media screen and (max-width: 639px) {
            #rec700109402 .tn-elem[data-elem-id="1649105242108"] {
              top: 996pxpx;
              left: calc(50% - 240px + 160pxpx);
            }
          }

          @media screen and (max-width: 479px) {
            #rec700109402 .tn-elem[data-elem-id="1649105242108"] {
              top: 885px;
              left: calc(50% - 160px + 0px);
              width: 112px;
            }
          }

          #rec700109402 .tn-elem[data-elem-id="1649231613558"] {
            z-index: 33;
            top: 560px;
            left: calc(50% - 600px + 482px);
            width: 114px;
            height: 52px;
            -webkit-filter: invert(0%);
            filter: invert(0%);
          }

          #rec700109402 .tn-elem[data-elem-id="1649231613558"] .tn-atom {
            opacity: 0;
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec700109402 .tn-elem[data-elem-id="1649231613558"] {
              top: 553px;
              left: calc(50% - 480px + 359px);
              width: 144px;
              height: 62px;
            }
          }

          @media screen and (max-width: 959px) {
            #rec700109402 .tn-elem[data-elem-id="1649231613558"] {
              top: 600px;
              left: calc(50% - 320px + 271px);
              width: 98px;
              height: 42px;
            }
          }

          @media screen and (max-width: 639px) {
            #rec700109402 .tn-elem[data-elem-id="1649231613558"] {
              top: 603px;
              left: calc(50% - 240px + 191px);
            }
          }

          @media screen and (max-width: 479px) {
            #rec700109402 .tn-elem[data-elem-id="1649231613558"] {
              top: 584px;
              left: calc(50% - 160px + 121px);
              width: 78px;
              height: 36px;
              -webkit-filter: invert(0%);
              filter: invert(0%);
              border-radius: "" px;
            }
          }

          #rec700109402 .tn-elem[data-elem-id="1649405060125"] {
            color: #1f1f1f;
            z-index: 34;
            top: 931px;
            left: calc(50% - 600px + 634px);
            width: 560px;
          }

          #rec700109402 .tn-elem[data-elem-id="1649405060125"] .tn-atom {
            color: #1f1f1f;
            font-size: 16px;
            font-family: "CeraPro", Arial, sans-serif;
            line-height: 1.42;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec700109402 .tn-elem[data-elem-id="1649405060125"] {
              top: 941pxpx;
              left: calc(50% - 480px + 534pxpx);
            }
          }

          @media screen and (max-width: 959px) {
            #rec700109402 .tn-elem[data-elem-id="1649405060125"] {
              top: 1161pxpx;
              left: calc(50% - 320px + 169pxpx);
            }

            #rec700109402 .tn-elem[data-elem-id="1649405060125"] .tn-atom {
              font-size: 12px;
            }
          }

          @media screen and (max-width: 639px) {
            #rec700109402 .tn-elem[data-elem-id="1649405060125"] {
              top: 1161pxpx;
              left: calc(50% - 240px + 89pxpx);
            }
          }

          @media screen and (max-width: 479px) {
            #rec700109402 .tn-elem[data-elem-id="1649405060125"] {
              top: 833px;
              left: calc(50% - 160px + -805px);
              width: 160px;
            }

            #rec700109402 .tn-elem[data-elem-id="1649405060125"] .tn-atom {
              font-size: 11px;
            }
          }

          #rec700109402 .tn-elem[data-elem-id="1649405060129"] {
            color: #1f1f1f;
            z-index: 35;
            top: 953px;
            left: calc(50% - 600px + 634px);
            width: 259px;
          }

          #rec700109402 .tn-elem[data-elem-id="1649405060129"] .tn-atom {
            color: #1f1f1f;
            font-size: 16px;
            font-family: "CeraPro", Arial, sans-serif;
            line-height: 1.42;
            font-weight: 600;
            text-transform: uppercase;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec700109402 .tn-elem[data-elem-id="1649405060129"] {
              top: 963pxpx;
              left: calc(50% - 480px + 534pxpx);
            }
          }

          @media screen and (max-width: 959px) {
            #rec700109402 .tn-elem[data-elem-id="1649405060129"] {
              top: 1173pxpx;
              left: calc(50% - 320px + 169pxpx);
            }

            #rec700109402 .tn-elem[data-elem-id="1649405060129"] .tn-atom {
              font-size: 16px;
            }
          }

          @media screen and (max-width: 639px) {
            #rec700109402 .tn-elem[data-elem-id="1649405060129"] {
              top: 1173pxpx;
              left: calc(50% - 240px + 89pxpx);
            }
          }

          @media screen and (max-width: 479px) {
            #rec700109402 .tn-elem[data-elem-id="1649405060129"] {
              top: 848px;
              left: calc(50% - 160px + -805px);
              width: 117px;
            }

            #rec700109402 .tn-elem[data-elem-id="1649405060129"] .tn-atom {
              font-size: 16px;
            }
          }

          #rec700109402 .tn-elem[data-elem-id="1649405060133"] {
            color: #1f1f1f;
            z-index: 36;
            top: 953px;
            left: calc(50% - 600px + 940px);
            width: 560px;
          }

          #rec700109402 .tn-elem[data-elem-id="1649405060133"] .tn-atom {
            color: #1f1f1f;
            font-size: 16px;
            font-family: "CeraPro", Arial, sans-serif;
            line-height: 1.42;
            font-weight: 600;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec700109402 .tn-elem[data-elem-id="1649405060133"] {
              top: 963pxpx;
              left: calc(50% - 480px + 840pxpx);
            }
          }

          @media screen and (max-width: 959px) {
            #rec700109402 .tn-elem[data-elem-id="1649405060133"] {
              top: 1173pxpx;
              left: calc(50% - 320px + 363pxpx);
            }

            #rec700109402 .tn-elem[data-elem-id="1649405060133"] .tn-atom {
              font-size: 18px;
            }
          }

          @media screen and (max-width: 639px) {
            #rec700109402 .tn-elem[data-elem-id="1649405060133"] {
              top: 1173pxpx;
              left: calc(50% - 240px + 283pxpx);
            }
          }

          @media screen and (max-width: 479px) {
            #rec700109402 .tn-elem[data-elem-id="1649405060133"] {
              top: 848px;
              left: calc(50% - 160px + -624px);
              width: 122px;
            }

            #rec700109402 .tn-elem[data-elem-id="1649405060133"] .tn-atom {
              font-size: 18px;
            }
          }

          #rec700109402 .tn-elem[data-elem-id="1649405060137"] {
            color: #1f1f1f;
            z-index: 37;
            top: 931px;
            left: calc(50% - 600px + 940px);
            width: 560px;
          }

          #rec700109402 .tn-elem[data-elem-id="1649405060137"] .tn-atom {
            color: #1f1f1f;
            font-size: 16px;
            font-family: "CeraPro", Arial, sans-serif;
            line-height: 1.42;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec700109402 .tn-elem[data-elem-id="1649405060137"] {
              top: 941pxpx;
              left: calc(50% - 480px + 840pxpx);
            }
          }

          @media screen and (max-width: 959px) {
            #rec700109402 .tn-elem[data-elem-id="1649405060137"] {
              top: 1161pxpx;
              left: calc(50% - 320px + 363pxpx);
            }

            #rec700109402 .tn-elem[data-elem-id="1649405060137"] .tn-atom {
              font-size: 12px;
            }
          }

          @media screen and (max-width: 639px) {
            #rec700109402 .tn-elem[data-elem-id="1649405060137"] {
              top: 1161pxpx;
              left: calc(50% - 240px + 283pxpx);
            }
          }

          @media screen and (max-width: 479px) {
            #rec700109402 .tn-elem[data-elem-id="1649405060137"] {
              top: 833px;
              left: calc(50% - 160px + -624px);
              width: 116px;
            }

            #rec700109402 .tn-elem[data-elem-id="1649405060137"] .tn-atom {
              font-size: 11px;
            }
          }

          #rec700109402 .tn-elem[data-elem-id="1649404033724"] {
            color: #1f1f1f;
            z-index: 38;
            top: 847px;
            left: calc(50% - 600px + 634px);
            width: 560px;
          }

          #rec700109402 .tn-elem[data-elem-id="1649404033724"] .tn-atom {
            color: #1f1f1f;
            font-size: 16px;
            font-family: "CeraPro", Arial, sans-serif;
            line-height: 1.42;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec700109402 .tn-elem[data-elem-id="1649404033724"] {
              top: 847px;
              left: calc(50% - 480px + 524px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec700109402 .tn-elem[data-elem-id="1649404033724"] {
              top: 1067px;
              left: calc(50% - 320px + 159px);
            }

            #rec700109402 .tn-elem[data-elem-id="1649404033724"] .tn-atom {
              font-size: 12px;
            }
          }

          @media screen and (max-width: 639px) {
            #rec700109402 .tn-elem[data-elem-id="1649404033724"] {
              top: 1067px;
              left: calc(50% - 240px + 79px);
            }
          }

          @media screen and (max-width: 479px) {
            #rec700109402 .tn-elem[data-elem-id="1649404033724"] {
              top: 994px;
              left: calc(50% - 160px + 12px);
              width: 139px;
            }

            #rec700109402 .tn-elem[data-elem-id="1649404033724"] .tn-atom {
              font-size: 11px;
              opacity: 0;
            }
          }

          #rec700109402 .tn-elem[data-elem-id="1649404033728"] {
            color: #1f1f1f;
            z-index: 39;
            top: 869px;
            left: calc(50% - 600px + 634px);
            width: 259px;
          }

          #rec700109402 .tn-elem[data-elem-id="1649404033728"] .tn-atom {
            color: #1f1f1f;
            font-size: 16px;
            font-family: "CeraPro", Arial, sans-serif;
            line-height: 1.42;
            font-weight: 600;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec700109402 .tn-elem[data-elem-id="1649404033728"] {
              top: 869px;
              left: calc(50% - 480px + 524px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec700109402 .tn-elem[data-elem-id="1649404033728"] {
              top: 1079px;
              left: calc(50% - 320px + 159px);
            }

            #rec700109402 .tn-elem[data-elem-id="1649404033728"] .tn-atom {
              font-size: 18px;
            }
          }

          @media screen and (max-width: 639px) {
            #rec700109402 .tn-elem[data-elem-id="1649404033728"] {
              top: 1079px;
              left: calc(50% - 240px + 79px);
            }
          }

          @media screen and (max-width: 479px) {
            #rec700109402 .tn-elem[data-elem-id="1649404033728"] {
              top: 1009px;
              left: calc(50% - 160px + 12px);
              width: 156px;
            }

            #rec700109402 .tn-elem[data-elem-id="1649404033728"] .tn-atom {
              font-size: 18px;
              opacity: 0;
            }
          }

          #rec700109402 .tn-elem[data-elem-id="1649404033732"] {
            color: #1f1f1f;
            z-index: 40;
            top: 869px;
            left: calc(50% - 600px + 940px);
            width: 560px;
          }

          #rec700109402 .tn-elem[data-elem-id="1649404033732"] .tn-atom {
            color: #1f1f1f;
            font-size: 16px;
            font-family: "CeraPro", Arial, sans-serif;
            line-height: 1.42;
            font-weight: 600;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec700109402 .tn-elem[data-elem-id="1649404033732"] {
              top: 869px;
              left: calc(50% - 480px + 830px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec700109402 .tn-elem[data-elem-id="1649404033732"] {
              top: 1079px;
              left: calc(50% - 320px + 353px);
            }

            #rec700109402 .tn-elem[data-elem-id="1649404033732"] .tn-atom {
              font-size: 18px;
            }
          }

          @media screen and (max-width: 639px) {
            #rec700109402 .tn-elem[data-elem-id="1649404033732"] {
              top: 1079px;
              left: calc(50% - 240px + 273px);
            }
          }

          @media screen and (max-width: 479px) {
            #rec700109402 .tn-elem[data-elem-id="1649404033732"] {
              top: 1009px;
              left: calc(50% - 160px + 193px);
              width: 117px;
            }

            #rec700109402 .tn-elem[data-elem-id="1649404033732"] .tn-atom {
              font-size: 18px;
              opacity: 0;
            }
          }

          #rec700109402 .tn-elem[data-elem-id="1649404033735"] {
            color: #1f1f1f;
            z-index: 41;
            top: 847px;
            left: calc(50% - 600px + 940px);
            width: 560px;
          }

          #rec700109402 .tn-elem[data-elem-id="1649404033735"] .tn-atom {
            color: #1f1f1f;
            font-size: 16px;
            font-family: "CeraPro", Arial, sans-serif;
            line-height: 1.42;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec700109402 .tn-elem[data-elem-id="1649404033735"] {
              top: 847px;
              left: calc(50% - 480px + 830px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec700109402 .tn-elem[data-elem-id="1649404033735"] {
              top: 1067px;
              left: calc(50% - 320px + 353px);
            }

            #rec700109402 .tn-elem[data-elem-id="1649404033735"] .tn-atom {
              font-size: 12px;
            }
          }

          @media screen and (max-width: 639px) {
            #rec700109402 .tn-elem[data-elem-id="1649404033735"] {
              top: 1067px;
              left: calc(50% - 240px + 273px);
            }
          }

          @media screen and (max-width: 479px) {
            #rec700109402 .tn-elem[data-elem-id="1649404033735"] {
              top: 994px;
              left: calc(50% - 160px + 193px);
              width: 117px;
            }

            #rec700109402 .tn-elem[data-elem-id="1649404033735"] .tn-atom {
              font-size: 11px;
              opacity: 0;
            }
          }

          #rec700109402 .tn-elem[data-elem-id="1649404033738"] {
            color: #1f1f1f;
            z-index: 42;
            top: 931px;
            left: calc(50% - 600px + 634px);
            width: 560px;
          }

          #rec700109402 .tn-elem[data-elem-id="1649404033738"] .tn-atom {
            color: #1f1f1f;
            font-size: 16px;
            font-family: "CeraPro", Arial, sans-serif;
            line-height: 1.42;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec700109402 .tn-elem[data-elem-id="1649404033738"] {
              top: 941pxpx;
              left: calc(50% - 480px + 534pxpx);
            }
          }

          @media screen and (max-width: 959px) {
            #rec700109402 .tn-elem[data-elem-id="1649404033738"] {
              top: 1161pxpx;
              left: calc(50% - 320px + 169pxpx);
            }

            #rec700109402 .tn-elem[data-elem-id="1649404033738"] .tn-atom {
              font-size: 12px;
            }
          }

          @media screen and (max-width: 639px) {
            #rec700109402 .tn-elem[data-elem-id="1649404033738"] {
              top: 1161pxpx;
              left: calc(50% - 240px + 89pxpx);
            }
          }

          @media screen and (max-width: 479px) {
            #rec700109402 .tn-elem[data-elem-id="1649404033738"] {
              top: 1058px;
              left: calc(50% - 160px + 12px);
              width: 160px;
            }

            #rec700109402 .tn-elem[data-elem-id="1649404033738"] .tn-atom {
              font-size: 11px;
              opacity: 0;
            }
          }

          #rec700109402 .tn-elem[data-elem-id="1649404033742"] {
            color: #1f1f1f;
            z-index: 43;
            top: 953px;
            left: calc(50% - 600px + 634px);
            width: 259px;
          }

          #rec700109402 .tn-elem[data-elem-id="1649404033742"] .tn-atom {
            color: #1f1f1f;
            font-size: 16px;
            font-family: "CeraPro", Arial, sans-serif;
            line-height: 1.42;
            font-weight: 600;
            text-transform: uppercase;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec700109402 .tn-elem[data-elem-id="1649404033742"] {
              top: 963pxpx;
              left: calc(50% - 480px + 534pxpx);
            }
          }

          @media screen and (max-width: 959px) {
            #rec700109402 .tn-elem[data-elem-id="1649404033742"] {
              top: 1173pxpx;
              left: calc(50% - 320px + 169pxpx);
            }

            #rec700109402 .tn-elem[data-elem-id="1649404033742"] .tn-atom {
              font-size: 16px;
            }
          }

          @media screen and (max-width: 639px) {
            #rec700109402 .tn-elem[data-elem-id="1649404033742"] {
              top: 1173pxpx;
              left: calc(50% - 240px + 89pxpx);
            }
          }

          @media screen and (max-width: 479px) {
            #rec700109402 .tn-elem[data-elem-id="1649404033742"] {
              top: 1073px;
              left: calc(50% - 160px + 12px);
              width: 117px;
            }

            #rec700109402 .tn-elem[data-elem-id="1649404033742"] {
              text-align: left;
            }

            #rec700109402 .tn-elem[data-elem-id="1649404033742"] .tn-atom {
              font-size: 16px;
              opacity: 0;
            }
          }

          #rec700109402 .tn-elem[data-elem-id="1649404033746"] {
            color: #1f1f1f;
            z-index: 44;
            top: 953px;
            left: calc(50% - 600px + 940px);
            width: 560px;
          }

          #rec700109402 .tn-elem[data-elem-id="1649404033746"] .tn-atom {
            color: #1f1f1f;
            font-size: 16px;
            font-family: "CeraPro", Arial, sans-serif;
            line-height: 1.42;
            font-weight: 600;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec700109402 .tn-elem[data-elem-id="1649404033746"] {
              top: 963pxpx;
              left: calc(50% - 480px + 840pxpx);
            }
          }

          @media screen and (max-width: 959px) {
            #rec700109402 .tn-elem[data-elem-id="1649404033746"] {
              top: 1173pxpx;
              left: calc(50% - 320px + 363pxpx);
            }

            #rec700109402 .tn-elem[data-elem-id="1649404033746"] .tn-atom {
              font-size: 18px;
            }
          }

          @media screen and (max-width: 639px) {
            #rec700109402 .tn-elem[data-elem-id="1649404033746"] {
              top: 1173pxpx;
              left: calc(50% - 240px + 283pxpx);
            }
          }

          @media screen and (max-width: 479px) {
            #rec700109402 .tn-elem[data-elem-id="1649404033746"] {
              top: 1073px;
              left: calc(50% - 160px + 193px);
              width: 122px;
            }

            #rec700109402 .tn-elem[data-elem-id="1649404033746"] .tn-atom {
              font-size: 18px;
              opacity: 0;
            }
          }

          #rec700109402 .tn-elem[data-elem-id="1649404033749"] {
            color: #1f1f1f;
            z-index: 45;
            top: 931px;
            left: calc(50% - 600px + 940px);
            width: 560px;
          }

          #rec700109402 .tn-elem[data-elem-id="1649404033749"] .tn-atom {
            color: #1f1f1f;
            font-size: 16px;
            font-family: "CeraPro", Arial, sans-serif;
            line-height: 1.42;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec700109402 .tn-elem[data-elem-id="1649404033749"] {
              top: 941pxpx;
              left: calc(50% - 480px + 840pxpx);
            }
          }

          @media screen and (max-width: 959px) {
            #rec700109402 .tn-elem[data-elem-id="1649404033749"] {
              top: 1161pxpx;
              left: calc(50% - 320px + 363pxpx);
            }

            #rec700109402 .tn-elem[data-elem-id="1649404033749"] .tn-atom {
              font-size: 12px;
            }
          }

          @media screen and (max-width: 639px) {
            #rec700109402 .tn-elem[data-elem-id="1649404033749"] {
              top: 1161pxpx;
              left: calc(50% - 240px + 283pxpx);
            }
          }

          @media screen and (max-width: 479px) {
            #rec700109402 .tn-elem[data-elem-id="1649404033749"] {
              top: 1058px;
              left: calc(50% - 160px + 193px);
              width: 116px;
            }

            #rec700109402 .tn-elem[data-elem-id="1649404033749"] .tn-atom {
              font-size: 11px;
              opacity: 0;
            }
          }

          #rec700109402 .tn-elem[data-elem-id="1649416931230"] {
            z-index: 46;
            top: -271px;
            left: calc(50% - 600px + -619px);
            width: 320px;
          }

          #rec700109402 .tn-elem[data-elem-id="1649416931230"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
          }

          @media screen and (max-width: 959px) {
          }

          @media screen and (max-width: 639px) {
          }

          @media screen and (max-width: 479px) {
            #rec700109402 .tn-elem[data-elem-id="1649416931230"] {
              top: 945px;
              left: calc(50% - 160px + 12px);
              width: 297px;
            }
          }

          #rec700109402 .tn-elem[data-elem-id="1653499629819"] {
            color: #000000;
            z-index: 47;
            top: 23px;
            left: calc(50% - 600px + 253px);
            width: 143px;
          }

          #rec700109402 .tn-elem[data-elem-id="1653499629819"] .tn-atom {
            color: #000000;
            font-size: 20px;
            font-family: "CeraPro", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
          }

          @media screen and (max-width: 959px) {
            #rec700109402 .tn-elem[data-elem-id="1653499629819"] {
              top: 22px;
              left: calc(50% - 320px + 245px);
            }
          }

          @media screen and (max-width: 639px) {
            #rec700109402 .tn-elem[data-elem-id="1653499629819"] {
              top: 20px;
              left: calc(50% - 240px + 161px);
            }
          }

          @media screen and (max-width: 479px) {
            #rec700109402 .tn-elem[data-elem-id="1653499629819"] {
              top: 29px;
              left: calc(50% - 160px + 123px);
              width: 80px;
            }

            #rec700109402 .tn-elem[data-elem-id="1653499629819"] .tn-atom {
              font-size: 12px;
            }
          }

          #rec700109402 .tn-elem[data-elem-id="1653499629823"] {
            color: #000000;
            z-index: 48;
            top: 22px;
            left: calc(50% - 600px + 396px);
            width: 200px;
          }

          #rec700109402 .tn-elem[data-elem-id="1653499629823"] .tn-atom {
            color: #000000;
            font-size: 20px;
            font-family: "CeraPro", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
          }

          @media screen and (max-width: 959px) {
            #rec700109402 .tn-elem[data-elem-id="1653499629823"] {
              top: 21px;
              left: calc(50% - 320px + 423px);
            }
          }

          @media screen and (max-width: 639px) {
            #rec700109402 .tn-elem[data-elem-id="1653499629823"] {
              top: 21px;
              left: calc(50% - 240px + 307px);
            }
          }

          @media screen and (max-width: 479px) {
            #rec700109402 .tn-elem[data-elem-id="1653499629823"] {
              top: 29px;
              left: calc(50% - 160px + 209px);
              width: 111px;
            }

            #rec700109402 .tn-elem[data-elem-id="1653499629823"] .tn-atom {
              font-size: 12px;
            }
          }

          #rec700109402 .tn-elem[data-elem-id="1706795071321"] {
            color: #523b24;
            text-align: center;
            z-index: 49;
            top: 540px;
            left: calc(50% - 600px + 80px);
            width: 299px;
            height: 76px;
          }

          #rec700109402 .tn-elem[data-elem-id="1706795071321"] .tn-atom {
            color: #523b24;
            font-size: 18px;
            font-family: "CeraPro", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 500;
            border-radius: 30px;
            background-image: linear-gradient(
              0turn,
              rgba(216, 186, 155, 1) 0%,
              rgba(195, 156, 114, 1) 100%
            );
            border-color: transparent;
            border-style: solid;
            transition: background-color 0.2s ease-in-out,
              color 0.2s ease-in-out, border-color 0.2s ease-in-out;
          }

          @media screen and (max-width: 1199px) {
          }

          @media screen and (max-width: 959px) {
          }

          @media screen and (max-width: 639px) {
          }

          @media screen and (max-width: 479px) {
            #rec700109402 .tn-elem[data-elem-id="1706795071321"] {
              top: 430px;
              left: calc(50% - 200px + 49px);
              width: 222px;
              height: 63px;
            }
          }
        </style>
        <div class="t396">
          <div
            class="t396__artboard"
            data-artboard-recid="700109402"
            data-artboard-screens="320,480,640,960,1200"
            data-artboard-height="1060"
            data-artboard-valign="top"
            data-artboard-upscale="grid"
            data-artboard-height-res-320="1085"
            data-artboard-upscale-res-320="window"
            data-artboard-height-res-640="1260"
          >
            <div class="t396__carrier" data-artboard-recid="700109402"></div>
            <div class="t396__filter" data-artboard-recid="700109402"></div>
            <div
              class="t396__elem tn-elem tn-elem__7001094021648914651478 t-animate22"
              data-elem-id="1648914651478"
              data-elem-type="image"
              data-field-top-value="0"
              data-field-left-value="760"
              data-field-width-value="365"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-style="fadein"
              data-animate-duration="1"
              data-animate-mobile="y"
              data-field-filewidth-value="365"
              data-field-fileheight-value="486"
              data-field-top-res-320-value="71"
              data-field-left-res-320-value="1392"
              data-field-top-res-480-value="70"
              data-field-left-res-480-value="1472"
              data-field-top-res-640-value="70"
              data-field-left-res-640-value="1552"
              data-field-top-res-960-value="0"
              data-field-left-res-960-value="650"
            >
              <!-- <div class="tn-atom">
                <img
                  class="tn-atom__img t-img"
                  data-original="images/Vector.svg"
                  alt=""
                  imgfield="tn_img_1648914651478"
                />
              </div> -->
            </div>
            <div
              class="t396__elem tn-elem tn-elem__7001094021648914651467"
              data-elem-id="1648914651467"
              data-elem-type="shape"
              data-field-top-value="0"
              data-field-left-value="0"
              data-field-height-value="100"
              data-field-width-value="100"
              data-field-axisy-value="center"
              data-field-axisx-value="center"
              data-field-container-value="window"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value="%"
              data-field-widthunits-value="%"
              data-field-top-res-320-value="212"
              data-field-left-res-320-value="0"
              data-field-height-res-320-value="139"
              data-field-width-res-320-value="100"
              data-field-top-res-480-value="0"
              data-field-left-res-480-value="0"
              data-field-top-res-640-value="0"
              data-field-left-res-640-value="0"
              data-field-top-res-960-value="0"
              data-field-left-res-960-value="0"
            >
              <div
                class="tn-atom t-bgimg"
                data-original="images/Rectangle.svg"
              ></div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__7001094021648914651490 t-animate22"
              data-elem-id="1648914651490"
              data-elem-type="image"
              data-field-top-value="168"
              data-field-left-value="79"
              data-field-width-value="296"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-style="fadeinright"
              data-animate-duration="1"
              data-animate-distance="100"
              data-animate-mobile="y"
              data-field-filewidth-value="1182"
              data-field-fileheight-value="168"
              data-field-top-res-320-value="176"
              data-field-left-res-320-value="16"
              data-field-top-res-480-value="145"
              data-field-left-res-480-value="80"
              data-field-top-res-640-value="145"
              data-field-left-res-640-value="160"
              data-field-width-res-640-value="229"
              data-field-top-res-960-value="168"
              data-field-left-res-960-value="-31"
            >
              <div class="tn-atom">
                <img
                  class="tn-atom__img t-img"
                  data-original="images/Group_5724.png"
                  alt=""
                  imgfield="tn_img_1648914651490"
                />
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__7001094021648914651481 t-animate22"
              data-elem-id="1648914651481"
              data-elem-type="image"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-style="fadeinleft"
              data-animate-duration="1"
              data-animate-distance="100"
              data-animate-mobile="y"
              data-field-filewidth-value="1680"
              data-field-fileheight-value="2500"
              data-field-top-res-320-value="80"
              data-field-left-res-320-value="-20"
              data-field-width-res-320-value="572"
              data-field-top-res-480-value="44"
              data-field-left-res-480-value="41"
              data-field-top-res-640-value="44"
              data-field-left-res-640-value="121"
              data-field-width-res-640-value="549"
              data-field-top-res-960-value="-18"
              data-field-left-res-960-value="316"
            >
              <div class="tn-atom">
                <img
                  class="tn-atom__img t-img atom__image"
                  src="./images/main.png"
                  srcset="./images/main_mob.png 1023w, ./images/main.png 1024w"
                  sizes="(max-width: 1023px) 100vw, 1024px"
                  alt=""
                  imgfield="tn_img_1648914651481"
                />
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__7001094021648914651473 t-animate22"
              data-elem-id="1648914651473"
              data-elem-type="image"
              data-field-top-value="38"
              data-field-left-value="79"
              data-field-width-value="117"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-style="fadeinright"
              data-animate-duration="1"
              data-animate-distance="100"
              data-animate-mobile="y"
              data-field-filewidth-value="117"
              data-field-fileheight-value="47"
              data-field-top-res-320-value="33"
              data-field-left-res-320-value="12"
              data-field-width-res-320-value="90"
              data-field-top-res-480-value="31"
              data-field-left-res-480-value="11"
              data-field-top-res-640-value="31"
              data-field-left-res-640-value="69"
              data-field-top-res-960-value="38"
              data-field-left-res-960-value="-31"
            >
              <div class="tn-atom">
                <img
                  src="./images/coinfaten.svg"
                  alt="Logo"
                  class="tn-atom__img t-img loaded atom__logo"
                  alt=""
                  imgfield="tn_img_1648914651473"
                />
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__7001094021648914651484 t-animate22"
              data-elem-id="1648914651484"
              data-elem-type="image"
              data-field-top-value="0"
              data-field-left-value="-10000"
              data-field-width-value="917"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-style="fadeinright"
              data-animate-duration="1"
              data-animate-distance="100"
              data-animate-mobile="y"
              data-field-filewidth-value="457"
              data-field-fileheight-value="561"
              data-field-top-res-320-value="677"
              data-field-left-res-320-value="-10"
              data-field-width-res-320-value="198"
              data-field-top-res-480-value="737"
              data-field-left-res-480-value="63"
              data-field-top-res-640-value="737"
              data-field-left-res-640-value="143"
              data-field-width-res-640-value="225"
            >
              <div class="tn-atom">
                <img
                  class="tn-atom__img t-img"
                  src="./images/book.png"
                  alt=""
                  imgfield="tn_img_1648914651484"
                />
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__7001094021648914651487 t-animate22"
              data-elem-id="1648914651487"
              data-elem-type="image"
              data-field-top-value="467"
              data-field-left-value="1029"
              data-field-width-value="192"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-style="fadeinleft"
              data-animate-duration="1"
              data-animate-distance="100"
              data-animate-mobile="y"
              data-field-filewidth-value="192"
              data-field-fileheight-value="95"
              data-field-top-res-320-value="537"
              data-field-left-res-320-value="1660"
              data-field-top-res-480-value="536"
              data-field-left-res-480-value="1740"
              data-field-top-res-640-value="536"
              data-field-left-res-640-value="1820"
              data-field-top-res-960-value="467"
              data-field-left-res-960-value="919"
            >
              <!-- <div class="tn-atom">
                <img
                  class="tn-atom__img t-img"
                  data-original="images/123_2.svg"
                  alt=""
                  imgfield="tn_img_1648914651487"
                />
              </div> -->
            </div>
            <div
              class="t396__elem tn-elem tn-elem__7001094021648914651493 t-animate22"
              data-elem-id="1648914651493"
              data-elem-type="text"
              data-field-top-value="176"
              data-field-left-value="138"
              data-field-width-value="560"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-style="fadeinleft"
              data-animate-duration="1"
              data-animate-distance="100"
              data-animate-mobile="y"
              data-field-top-res-320-value="183"
              data-field-left-res-320-value="64"
              data-field-width-res-320-value="175"
              data-field-top-res-480-value="152"
              data-field-left-res-480-value="130"
              data-field-top-res-640-value="152"
              data-field-left-res-640-value="210"
              data-field-top-res-960-value="176"
              data-field-left-res-960-value="28"
            >
              <div class="tn-atom" field="tn_text_1648914651493">
                <span style="font-weight: 500">Бесплатный</span> мастер-класс
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__7001094021648914651497 t-animate22"
              data-elem-id="1648914651497"
              data-elem-type="text"
              data-field-left-value="79"
              data-field-width-value="641"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-style="fadeinright"
              data-animate-duration="1"
              data-animate-distance="100"
              data-animate-mobile="y"
              data-field-top-res-320-value="211"
              data-field-left-res-320-value="-10000"
              data-field-width-res-320-value="264"
              data-field-top-res-480-value="192"
              data-field-left-res-480-value="-546"
              data-field-top-res-640-value="236"
              data-field-left-res-640-value="-383"
              data-field-width-res-640-value="229"
              data-field-top-res-960-value="256"
              data-field-left-res-960-value="-31"
            >
              <div class="tn-atom" field="tn_text_1648914651497">
                Как заработать в трейдинге новичку с нуля<br /><span
                  style="color: rgb(166, 132, 96)"
                  >от 2000$ в месяц</span
                >
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__7001094021648914651499 t-animate22"
              data-elem-id="1648914651499"
              data-elem-type="text"
              data-field-top-value="413"
              data-field-left-value="79"
              data-field-width-value="500"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-style="fadeinright"
              data-animate-duration="1"
              data-animate-distance="100"
              data-animate-mobile="y"
              data-field-top-res-320-value="354"
              data-field-left-res-320-value="16"
              data-field-width-res-320-value="266"
              data-field-top-res-480-value="332"
              data-field-left-res-480-value="80"
              data-field-top-res-640-value="332"
              data-field-left-res-640-value="160"
              data-field-width-res-640-value="232"
              data-field-top-res-960-value="413"
              data-field-left-res-960-value="-31"
            >
              <div class="tn-atom" field="tn_text_1648914651499">
                С 100$ до 2.000$ - узнаешь на<br />бесплатном мастер-классе
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__7001094021648914651517 t-animate22"
              data-elem-id="1648914651517"
              data-elem-type="image"
              data-field-top-value="750"
              data-field-left-value="-2"
              data-field-width-value="1205"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-style="fadeinup"
              data-animate-duration="1"
              data-animate-distance="100"
              data-animate-mobile="y"
              data-field-filewidth-value="1204"
              data-field-fileheight-value="302"
              data-field-top-res-320-value="821"
              data-field-left-res-320-value="630"
              data-field-top-res-480-value="820"
              data-field-left-res-480-value="710"
              data-field-top-res-640-value="820"
              data-field-left-res-640-value="790"
              data-field-top-res-960-value="750"
              data-field-left-res-960-value="-112"
            >
              <div class="tn-atom">
                <img
                  class="tn-atom__img t-img"
                  data-original="images/Group_5729.svg"
                  alt=""
                  imgfield="tn_img_1648914651517"
                />
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__7001094021648914651520 t-animate22"
              data-elem-id="1648914651520"
              data-elem-type="image"
              data-field-top-value="750"
              data-field-left-value="78"
              data-field-width-value="140"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-style="fadeindown"
              data-animate-duration="1"
              data-animate-distance="100"
              data-animate-mobile="y"
              data-field-filewidth-value="140"
              data-field-fileheight-value="59"
              data-field-top-res-320-value="691"
              data-field-left-res-320-value="156"
              data-field-top-res-480-value="755"
              data-field-left-res-480-value="236"
              data-field-top-res-640-value="755"
              data-field-left-res-640-value="316"
              data-field-width-res-640-value="92"
              data-field-top-res-960-value="750"
              data-field-left-res-960-value="-32"
            >
              <div class="tn-atom">
                <img
                  class="tn-atom__img t-img"
                  data-original="images/Group_5727.svg"
                  alt=""
                  imgfield="tn_img_1648914651520"
                />
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__7001094021648914651523 t-animate22"
              data-elem-id="1648914651523"
              data-elem-type="image"
              data-field-top-value="750"
              data-field-left-value="634"
              data-field-width-value="180"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-style="fadeindown"
              data-animate-duration="1"
              data-animate-distance="100"
              data-animate-mobile="y"
              data-field-filewidth-value="180"
              data-field-fileheight-value="59"
              data-field-top-res-320-value="912"
              data-field-left-res-320-value="-10000"
              data-field-width-res-320-value="92"
              data-field-top-res-480-value="986"
              data-field-left-res-480-value="150"
              data-field-top-res-640-value="986"
              data-field-left-res-640-value="230"
              data-field-top-res-960-value="750"
              data-field-left-res-960-value="524"
            >
              <div class="tn-atom">
                <img
                  class="tn-atom__img t-img"
                  data-original="images/Group_5726.svg"
                  alt=""
                  imgfield="tn_img_1648914651523"
                />
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__7001094021648914651526 t-animate22"
              data-elem-id="1648914651526"
              data-elem-type="image"
              data-field-top-value="825"
              data-field-left-value="57"
              data-field-width-value="287"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-style="fadeinright"
              data-animate-duration="1"
              data-animate-distance="100"
              data-animate-mobile="y"
              data-field-filewidth-value="608"
              data-field-fileheight-value="479"
              data-field-top-res-320-value="430"
              data-field-left-res-320-value="-887"
              data-field-width-res-320-value="225"
              data-field-top-res-480-value="890"
              data-field-left-res-480-value="768"
              data-field-top-res-640-value="890"
              data-field-left-res-640-value="848"
              data-field-top-res-960-value="820"
              data-field-left-res-960-value="-53"
            >
              <div class="tn-atom">
                <img
                  class="tn-atom__img t-img"
                  src="./images/book.png"
                  alt=""
                  imgfield="tn_img_1648914651526"
                />
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__7001094021648914651529 t-animate22"
              data-elem-id="1648914651529"
              data-elem-type="text"
              data-field-top-value="846"
              data-field-left-value="274"
              data-field-width-value="248"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-style="fadeinright"
              data-animate-duration="1"
              data-animate-distance="100"
              data-animate-mobile="y"
              data-field-top-res-320-value="758"
              data-field-left-res-320-value="147"
              data-field-width-res-320-value="165"
              data-field-top-res-480-value="827"
              data-field-left-res-480-value="236"
              data-field-top-res-640-value="827"
              data-field-left-res-640-value="316"
              data-field-top-res-960-value="846"
              data-field-left-res-960-value="164"
            >
              <div class="tn-atom" field="tn_text_1648914651529">
                Успей зарегистрироваться<br />и получи бесплатный чек-лист:<br /><br /><span
                  style="font-weight: 600"
                  >«Увеличиваем депозит безопасно: план по приросту 30% в
                  месяц»</span
                ><strong style="font-weight: 800">﻿</strong>
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__7001094021648914651531 t-animate22"
              data-elem-id="1648914651531"
              data-elem-type="text"
              data-field-top-value="847"
              data-field-left-value="634"
              data-field-width-value="560"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-style="fadeinup"
              data-animate-duration="1"
              data-animate-distance="100"
              data-animate-mobile="y"
              data-field-top-res-320-value="749"
              data-field-left-res-320-value="-805"
              data-field-width-res-320-value="139"
              data-field-top-res-480-value="1067"
              data-field-left-res-480-value="79"
              data-field-top-res-640-value="1067"
              data-field-left-res-640-value="159"
              data-field-top-res-960-value="847"
              data-field-left-res-960-value="524"
            >
              <div class="tn-atom" field="tn_text_1648914651531">
                01. Основатель компаний
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__7001094021648914651533 t-animate22"
              data-elem-id="1648914651533"
              data-elem-type="text"
              data-field-top-value="869"
              data-field-left-value="634"
              data-field-width-value="259"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-style="fadeinup"
              data-animate-duration="1"
              data-animate-distance="100"
              data-animate-mobile="y"
              data-field-top-res-320-value="764"
              data-field-left-res-320-value="-805"
              data-field-width-res-320-value="156"
              data-field-top-res-480-value="1079"
              data-field-left-res-480-value="79"
              data-field-top-res-640-value="1079"
              data-field-left-res-640-value="159"
              data-field-top-res-960-value="869"
              data-field-left-res-960-value="524"
            >
              <div class="tn-atom" field="tn_text_1648914651533"></div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__7001094021648914651535 t-animate22"
              data-elem-id="1648914651535"
              data-elem-type="text"
              data-field-top-value="869"
              data-field-left-value="940"
              data-field-width-value="560"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-style="fadeinup"
              data-animate-duration="1"
              data-animate-distance="100"
              data-animate-mobile="y"
              data-field-top-res-320-value="764"
              data-field-left-res-320-value="-624"
              data-field-width-res-320-value="117"
              data-field-top-res-480-value="1079"
              data-field-left-res-480-value="273"
              data-field-top-res-640-value="1079"
              data-field-left-res-640-value="353"
              data-field-top-res-960-value="869"
              data-field-left-res-960-value="830"
            >
              <div class="tn-atom" field="tn_text_1648914651535">
                +10 000 $ за 3 месяца
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__7001094021648914651537 t-animate22"
              data-elem-id="1648914651537"
              data-elem-type="text"
              data-field-top-value="847"
              data-field-left-value="940"
              data-field-width-value="560"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-style="fadeinup"
              data-animate-duration="1"
              data-animate-distance="100"
              data-animate-mobile="y"
              data-field-top-res-320-value="749"
              data-field-left-res-320-value="-624"
              data-field-width-res-320-value="117"
              data-field-top-res-480-value="1067"
              data-field-left-res-480-value="273"
              data-field-top-res-640-value="1067"
              data-field-left-res-640-value="353"
              data-field-top-res-960-value="847"
              data-field-left-res-960-value="830"
            >
              <div class="tn-atom" field="tn_text_1648914651537">
                02. Доход студентов
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__7001094021648914651547 t-animate22"
              data-elem-id="1648914651547"
              data-elem-type="image"
              data-field-top-value="858"
              data-field-left-value="-10000"
              data-field-width-value="278"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-style="fadeinup"
              data-animate-duration="1"
              data-animate-distance="100"
              data-animate-mobile="y"
              data-field-filewidth-value="278"
              data-field-fileheight-value="84"
              data-field-top-res-320-value="749"
              data-field-left-res-320-value="-397"
              data-field-top-res-480-value="496"
              data-field-left-res-480-value="101"
              data-field-top-res-640-value="496"
              data-field-left-res-640-value="181"
            >
              <div class="tn-atom">
                <img
                  class="tn-atom__img t-img"
                  data-original="images/Rectangle_7.svg"
                  alt=""
                  imgfield="tn_img_1648914651547"
                />
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__7001094021648915450056 t-animate22"
              data-elem-id="1648915450056"
              data-elem-type="text"
              data-field-top-value="314"
              data-field-left-value="-10000"
              data-field-width-value="641"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-style="fadeinright"
              data-animate-duration="1"
              data-animate-distance="100"
              data-animate-mobile="y"
              data-field-top-res-320-value="241"
              data-field-left-res-320-value="16"
              data-field-width-res-320-value="229"
              data-field-top-res-480-value="220"
              data-field-left-res-480-value="80"
              data-field-top-res-640-value="220"
              data-field-left-res-640-value="160"
              data-field-width-res-640-value="229"
              data-field-top-res-960-value="54"
              data-field-left-res-960-value="-1206"
            >
              <div class="tn-atom" field="tn_text_1648915450056">
                Как заработать в трейдинге новичку <br />с нуля
                <span style="color: rgb(166, 132, 96)">от 2000$ в месяц</span>
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__7001094021649014259367 t-animate22"
              data-elem-id="1649014259367"
              data-elem-type="html"
              data-field-top-value="264"
              data-field-left-value="100000"
              data-field-height-value="170"
              data-field-width-value="560"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value="px"
              data-field-widthunits-value="px"
              data-animate-style="fadeinup"
              data-animate-duration="1"
              data-animate-distance="100"
              data-animate-mobile="y"
              data-field-top-res-320-value="550"
              data-field-left-res-320-value="-1173"
            >
              <div class="tn-atom tn-atom__html">
                <script src="js/7876d0a3b4c7a966d69fdeefbcb5576d.js"></script>
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__7001094021648914651552"
              data-elem-id="1648914651552"
              data-elem-type="image"
              data-field-top-value="1222"
              data-field-left-value="73"
              data-field-width-value="290"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-mobile="y"
              data-animate-sbs-event="hover"
              data-animate-sbs-opts="[{'ti':0,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ea':'','dt':0},{'ti':300,'mx':0,'my':0,'sx':1.1,'sy':1.1,'op':1,'ro':0,'bl':'0','ea':'','dt':0}]"
              data-field-filewidth-value="290"
              data-field-fileheight-value="76"
              data-field-top-res-320-value="762"
              data-field-left-res-320-value="-347"
              data-field-top-res-480-value="510"
              data-field-left-res-480-value="136"
              data-field-top-res-640-value="510"
              data-field-left-res-640-value="216"
              data-field-width-res-640-value="208"
              data-field-top-res-960-value="535"
              data-field-left-res-960-value="-30"
            >
              <a class="tn-atom" href="#rec485756226"
                ><img
                  class="tn-atom__img t-img"
                  data-original="images/Group_5718.svg"
                  alt=""
                  imgfield="tn_img_1648914651552"
              /></a>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__7001094021648914651502 t-animate22"
              data-elem-id="1648914651502"
              data-elem-type="image"
              data-field-top-value="539"
              data-field-left-value="428"
              data-field-width-value="28"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-style="fadeindown"
              data-animate-duration="1"
              data-animate-distance="100"
              data-animate-mobile="y"
              data-field-filewidth-value="28"
              data-field-fileheight-value="7"
              data-field-top-res-320-value="639"
              data-field-left-res-320-value="1088"
              data-field-top-res-480-value="608"
              data-field-left-res-480-value="1168"
              data-field-top-res-640-value="608"
              data-field-left-res-640-value="1248"
              data-field-top-res-960-value="537"
              data-field-left-res-960-value="319"
            >
              <div class="tn-atom">
                <img
                  class="tn-atom__img t-img"
                  data-original="images/Vector.svg"
                  alt=""
                  imgfield="tn_img_1648914651502"
                />
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__7001094021649024963297 t-animate22"
              data-elem-id="1649024963297"
              data-elem-type="image"
              data-field-top-value="177"
              data-field-left-value="94"
              data-field-width-value="31"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-style="fadeinright"
              data-animate-duration="1"
              data-animate-distance="100"
              data-animate-mobile="y"
              data-field-filewidth-value="31"
              data-field-fileheight-value="24"
              data-field-top-res-320-value="183"
              data-field-left-res-320-value="28"
              data-field-width-res-320-value="25"
              data-field-top-res-480-value="149"
              data-field-left-res-480-value="90"
              data-field-top-res-640-value="149"
              data-field-left-res-640-value="169"
              data-field-top-res-960-value="177"
              data-field-left-res-960-value="-15"
            >
              <div class="tn-atom">
                <img
                  class="tn-atom__img t-img"
                  data-original="images/Group_5723.svg"
                  alt=""
                  imgfield="tn_img_1649024963297"
                />
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__7001094021648914651555 t-animate22"
              data-elem-id="1648914651555"
              data-elem-type="text"
              data-field-top-value="532"
              data-field-left-value="467"
              data-field-width-value="553"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-style="fadeindown"
              data-animate-duration="1"
              data-animate-distance="100"
              data-animate-mobile="y"
              data-field-top-res-320-value="561"
              data-field-left-res-320-value="81"
              data-field-width-res-320-value="159"
              data-field-top-res-480-value="580"
              data-field-left-res-480-value="-36"
              data-field-top-res-640-value="577"
              data-field-left-res-640-value="44"
              data-field-top-res-960-value="530"
              data-field-left-res-960-value="357"
            >
              <div class="tn-atom" field="tn_text_1648914651555">
                До закрытия набора
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__7001094021649105242108 t-animate22"
              data-elem-id="1649105242108"
              data-elem-type="image"
              data-field-top-value="760"
              data-field-left-value="-10000"
              data-field-width-value="180"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-style="fadeindown"
              data-animate-duration="1"
              data-animate-distance="100"
              data-animate-mobile="y"
              data-field-filewidth-value="118"
              data-field-fileheight-value="39"
              data-field-top-res-320-value="885"
              data-field-left-res-320-value="0"
              data-field-width-res-320-value="143"
              data-field-axisx-res-320-value="center"
              data-field-top-res-480-value="996px"
              data-field-left-res-480-value="160px"
              data-field-top-res-640-value="725"
              data-field-left-res-640-value="-444"
              data-field-top-res-960-value="708"
              data-field-left-res-960-value="-929"
            >
              <a class="tn-atom quiz">
                <img
                  class="tn-atom__img t-img"
                  data-original="images/Group_5743.svg"
                  alt=""
                  imgfield="tn_img_1649105242108"
                  style="width: 85%; margin: 0 auto"
                />
              </a>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__7001094021649231613558"
              data-elem-id="1649231613558"
              data-elem-type="shape"
              data-field-top-value="560"
              data-field-left-value="482"
              data-field-height-value="52"
              data-field-width-value="114"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value="px"
              data-field-widthunits-value="px"
              data-field-top-res-320-value="584"
              data-field-left-res-320-value="121"
              data-field-height-res-320-value="36"
              data-field-width-res-320-value="78"
              data-field-top-res-480-value="603"
              data-field-left-res-480-value="191"
              data-field-top-res-640-value="600"
              data-field-left-res-640-value="271"
              data-field-height-res-640-value="42"
              data-field-width-res-640-value="98"
              data-field-top-res-960-value="553"
              data-field-left-res-960-value="359"
              data-field-height-res-960-value="62"
              data-field-width-res-960-value="144"
            >
              <div
                class="tn-atom t-bgimg"
                data-original="images/5-minute-countdown_2.gif"
              ></div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__7001094021649405060125 t-animate22"
              data-elem-id="1649405060125"
              data-elem-type="text"
              data-field-top-value="931"
              data-field-left-value="634"
              data-field-width-value="560"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-style="fadeinup"
              data-animate-duration="1"
              data-animate-distance="100"
              data-animate-mobile="y"
              data-field-top-res-320-value="833"
              data-field-left-res-320-value="-805"
              data-field-width-res-320-value="160"
              data-field-top-res-480-value="1161px"
              data-field-left-res-480-value="89px"
              data-field-top-res-640-value="1161px"
              data-field-left-res-640-value="169px"
              data-field-top-res-960-value="941px"
              data-field-left-res-960-value="534px"
            >
              <div class="tn-atom" field="tn_text_1649405060125">03.</div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__7001094021649405060129 t-animate22"
              data-elem-id="1649405060129"
              data-elem-type="text"
              data-field-top-value="953"
              data-field-left-value="634"
              data-field-width-value="259"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-style="fadeinup"
              data-animate-duration="1"
              data-animate-distance="100"
              data-animate-mobile="y"
              data-field-top-res-320-value="848"
              data-field-left-res-320-value="-805"
              data-field-width-res-320-value="117"
              data-field-top-res-480-value="1173px"
              data-field-left-res-480-value="89px"
              data-field-top-res-640-value="1173px"
              data-field-left-res-640-value="169px"
              data-field-top-res-960-value="963px"
              data-field-left-res-960-value="534px"
            >
              <div class="tn-atom" field="tn_text_1649405060129">
                Стратегия подходит даже тем, у кого нет опыта
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__7001094021649405060133 t-animate22"
              data-elem-id="1649405060133"
              data-elem-type="text"
              data-field-top-value="953"
              data-field-left-value="940"
              data-field-width-value="560"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-style="fadeinup"
              data-animate-duration="1"
              data-animate-distance="100"
              data-animate-mobile="y"
              data-field-top-res-320-value="848"
              data-field-left-res-320-value="-624"
              data-field-width-res-320-value="122"
              data-field-top-res-480-value="1173px"
              data-field-left-res-480-value="283px"
              data-field-top-res-640-value="1173px"
              data-field-left-res-640-value="363px"
              data-field-top-res-960-value="963px"
              data-field-left-res-960-value="840px"
            >
              <div class="tn-atom" field="tn_text_1649405060133">
                Пошаговая система <br />"Точка X": вход → рост <br />→ прибыль
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__7001094021649405060137 t-animate22"
              data-elem-id="1649405060137"
              data-elem-type="text"
              data-field-top-value="931"
              data-field-left-value="940"
              data-field-width-value="560"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-style="fadeinup"
              data-animate-duration="1"
              data-animate-distance="100"
              data-animate-mobile="y"
              data-field-top-res-320-value="833"
              data-field-left-res-320-value="-624"
              data-field-width-res-320-value="116"
              data-field-top-res-480-value="1161px"
              data-field-left-res-480-value="283px"
              data-field-top-res-640-value="1161px"
              data-field-left-res-640-value="363px"
              data-field-top-res-960-value="941px"
              data-field-left-res-960-value="840px"
            >
              <div class="tn-atom" field="tn_text_1649405060137">
                04. Своя уникальная методика
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__7001094021649404033724 t-animate22"
              data-elem-id="1649404033724"
              data-elem-type="text"
              data-field-top-value="847"
              data-field-left-value="634"
              data-field-width-value="560"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-style="fadeinup"
              data-animate-duration="1"
              data-animate-distance="100"
              data-animate-mobile="y"
              data-field-top-res-320-value="994"
              data-field-left-res-320-value="12"
              data-field-width-res-320-value="139"
              data-field-top-res-480-value="1067"
              data-field-left-res-480-value="79"
              data-field-top-res-640-value="1067"
              data-field-left-res-640-value="159"
              data-field-top-res-960-value="847"
              data-field-left-res-960-value="524"
            >
              <div class="tn-atom" field="tn_text_1649404033724">
                01. Основатель компаний
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__7001094021649404033728 t-animate22"
              data-elem-id="1649404033728"
              data-elem-type="text"
              data-field-top-value="869"
              data-field-left-value="634"
              data-field-width-value="259"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-style="fadeinup"
              data-animate-duration="1"
              data-animate-distance="100"
              data-animate-mobile="y"
              data-field-top-res-320-value="1009"
              data-field-left-res-320-value="12"
              data-field-width-res-320-value="156"
              data-field-top-res-480-value="1079"
              data-field-left-res-480-value="79"
              data-field-top-res-640-value="1079"
              data-field-left-res-640-value="159"
              data-field-top-res-960-value="869"
              data-field-left-res-960-value="524"
            >
              <div class="tn-atom" field="tn_text_1649404033728">
                с годовым оборотом <br />$2M+
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__7001094021649404033732 t-animate22"
              data-elem-id="1649404033732"
              data-elem-type="text"
              data-field-top-value="869"
              data-field-left-value="940"
              data-field-width-value="560"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-style="fadeinup"
              data-animate-duration="1"
              data-animate-distance="100"
              data-animate-mobile="y"
              data-field-top-res-320-value="1009"
              data-field-left-res-320-value="193"
              data-field-width-res-320-value="117"
              data-field-top-res-480-value="1079"
              data-field-left-res-480-value="273"
              data-field-top-res-640-value="1079"
              data-field-left-res-640-value="353"
              data-field-top-res-960-value="869"
              data-field-left-res-960-value="830"
            >
              <div class="tn-atom" field="tn_text_1649404033732">
                +10 000 $ за 3 месяца
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__7001094021649404033735 t-animate22"
              data-elem-id="1649404033735"
              data-elem-type="text"
              data-field-top-value="847"
              data-field-left-value="940"
              data-field-width-value="560"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-style="fadeinup"
              data-animate-duration="1"
              data-animate-distance="100"
              data-animate-mobile="y"
              data-field-top-res-320-value="994"
              data-field-left-res-320-value="193"
              data-field-width-res-320-value="117"
              data-field-top-res-480-value="1067"
              data-field-left-res-480-value="273"
              data-field-top-res-640-value="1067"
              data-field-left-res-640-value="353"
              data-field-top-res-960-value="847"
              data-field-left-res-960-value="830"
            >
              <div class="tn-atom" field="tn_text_1649404033735">
                02. Доход студентов
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__7001094021649404033738 t-animate22"
              data-elem-id="1649404033738"
              data-elem-type="text"
              data-field-top-value="931"
              data-field-left-value="634"
              data-field-width-value="560"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-style="fadeinup"
              data-animate-duration="1"
              data-animate-distance="100"
              data-animate-mobile="y"
              data-field-top-res-320-value="1058"
              data-field-left-res-320-value="12"
              data-field-width-res-320-value="160"
              data-field-top-res-480-value="1161px"
              data-field-left-res-480-value="89px"
              data-field-top-res-640-value="1161px"
              data-field-left-res-640-value="169px"
              data-field-top-res-960-value="941px"
              data-field-left-res-960-value="534px"
            >
              <div class="tn-atom" field="tn_text_1649404033738">
                03. Стартуй с $100
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__7001094021649404033742 t-animate22"
              data-elem-id="1649404033742"
              data-elem-type="text"
              data-field-top-value="953"
              data-field-left-value="634"
              data-field-width-value="259"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-style="fadeinup"
              data-animate-duration="1"
              data-animate-distance="100"
              data-animate-mobile="y"
              data-field-top-res-320-value="1073"
              data-field-left-res-320-value="12"
              data-field-width-res-320-value="117"
              data-field-top-res-480-value="1173px"
              data-field-left-res-480-value="89px"
              data-field-top-res-640-value="1173px"
              data-field-left-res-640-value="169px"
              data-field-top-res-960-value="963px"
              data-field-left-res-960-value="534px"
            >
              <div class="tn-atom" field="tn_text_1649404033742">
                Стратегия подходит даже тем, у кого нет опыта
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__7001094021649404033746 t-animate22"
              data-elem-id="1649404033746"
              data-elem-type="text"
              data-field-top-value="953"
              data-field-left-value="940"
              data-field-width-value="560"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-style="fadeinup"
              data-animate-duration="1"
              data-animate-distance="100"
              data-animate-mobile="y"
              data-field-top-res-320-value="1073"
              data-field-left-res-320-value="193"
              data-field-width-res-320-value="122"
              data-field-top-res-480-value="1173px"
              data-field-left-res-480-value="283px"
              data-field-top-res-640-value="1173px"
              data-field-left-res-640-value="363px"
              data-field-top-res-960-value="963px"
              data-field-left-res-960-value="840px"
            >
              <div class="tn-atom" field="tn_text_1649404033746">
                Пошаговая система <br />"Точка X": вход → рост <br />→ прибыль
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__7001094021649404033749 t-animate22"
              data-elem-id="1649404033749"
              data-elem-type="text"
              data-field-top-value="931"
              data-field-left-value="940"
              data-field-width-value="560"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-style="fadeinup"
              data-animate-duration="1"
              data-animate-distance="100"
              data-animate-mobile="y"
              data-field-top-res-320-value="1058"
              data-field-left-res-320-value="193"
              data-field-width-res-320-value="116"
              data-field-top-res-480-value="1161px"
              data-field-left-res-480-value="283px"
              data-field-top-res-640-value="1161px"
              data-field-left-res-640-value="363px"
              data-field-top-res-960-value="941px"
              data-field-left-res-960-value="840px"
            >
              <div class="tn-atom" field="tn_text_1649404033749">
                04. Своя уникальная методика
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__7001094021649416931230"
              data-elem-id="1649416931230"
              data-elem-type="image"
              data-field-top-value="-271"
              data-field-left-value="-619"
              data-field-width-value="320"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-field-filewidth-value="320"
              data-field-fileheight-value="106"
              data-field-top-res-320-value="945"
              data-field-left-res-320-value="12"
              data-field-width-res-320-value="297"
            >
              <div class="tn-atom">
                <img
                  class="tn-atom__img t-img"
                  src="./images/frame_info.png"
                  alt=""
                  imgfield="tn_img_1649416931230"
                />
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__7001094021653499629819"
              data-elem-id="1653499629819"
              data-elem-type="text"
              data-field-top-value="23"
              data-field-left-value="253"
              data-field-width-value="143"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-field-top-res-320-value="29"
              data-field-left-res-320-value="123"
              data-field-width-res-320-value="80"
              data-field-top-res-480-value="20"
              data-field-left-res-480-value="161"
              data-field-top-res-640-value="22"
              data-field-left-res-640-value="245"
            >
              <div class="tn-atom" field="tn_text_1653499629819">
                <span style="color: rgb(175, 175, 175)">Дата:</span><br />25 мая
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__7001094021653499629823"
              data-elem-id="1653499629823"
              data-elem-type="text"
              data-field-top-value="22"
              data-field-left-value="396"
              data-field-width-value="200"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-field-top-res-320-value="29"
              data-field-left-res-320-value="209"
              data-field-width-res-320-value="111"
              data-field-top-res-480-value="21"
              data-field-left-res-480-value="307"
              data-field-top-res-640-value="21"
              data-field-left-res-640-value="423"
            >
              <div class="tn-atom" field="tn_text_1653499629823">
                <span style="color: rgb(175, 175, 175)">Время:</span><br />21:00
                по Москве
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__7001094021706795071321"
              data-elem-id="1706795071321"
              data-elem-type="button"
              data-field-top-value="540"
              data-field-left-value="80"
              data-field-height-value="76"
              data-field-width-value="299"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value="px"
              data-field-widthunits-value="px"
              data-field-top-res-320-value="415"
              data-field-left-res-320-value="16"
              data-field-height-res-320-value="63"
              data-field-width-res-320-value="222"
            >
              <a class="tn-atom quiz">ХОЧУ УЧАСТВОВАТЬ</a>
            </div>
          </div>
        </div>
        <script>
          t_onFuncLoad("t396_initialScale", function () {
            t396_initialScale("700109402");
          });
          t_onReady(function () {
            t_onFuncLoad("t396_init", function () {
              t396_init("700109402");
            });
          });
        </script>
        <!-- /T396 -->
      </div>
      <div
        id="rec485756225"
        class="r t-rec"
        style=""
        data-animationappear="off"
        data-record-type="396"
      >
        <!-- T396 -->
        <style>
          #rec485756225 .t396__artboard {
            height: 270px;
            background-color: #ffffff;
          }

          #rec485756225 .t396__filter {
            height: 270px;
          }

          #rec485756225 .t396__carrier {
            height: 270px;
            background-position: center center;
            background-attachment: scroll;
            background-size: cover;
            background-repeat: no-repeat;
          }

          @media screen and (max-width: 1199px) {
            #rec485756225 .t396__artboard,
            #rec485756225 .t396__filter,
            #rec485756225 .t396__carrier {
            }

            #rec485756225 .t396__filter {
            }

            #rec485756225 .t396__carrier {
              background-attachment: scroll;
            }
          }

          @media screen and (max-width: 959px) {
            #rec485756225 .t396__artboard,
            #rec485756225 .t396__filter,
            #rec485756225 .t396__carrier {
              height: 190px;
            }

            #rec485756225 .t396__filter {
            }

            #rec485756225 .t396__carrier {
              background-attachment: scroll;
            }
          }

          @media screen and (max-width: 639px) {
            #rec485756225 .t396__artboard,
            #rec485756225 .t396__filter,
            #rec485756225 .t396__carrier {
            }

            #rec485756225 .t396__filter {
            }

            #rec485756225 .t396__carrier {
              background-attachment: scroll;
            }
          }

          @media screen and (max-width: 479px) {
            #rec485756225 .t396__artboard,
            #rec485756225 .t396__filter,
            #rec485756225 .t396__carrier {
              height: 320px;
            }

            #rec485756225 .t396__filter {
            }

            #rec485756225 .t396__carrier {
              background-attachment: scroll;
            }
          }

          #rec485756225 .tn-elem[data-elem-id="1648914746916"] {
            z-index: 2;
            top: calc(135px - 67px + 46px);
            left: calc(50% - 50% + 0px);
            width: 100%;
            height: 134%;
          }

          #rec485756225 .tn-elem[data-elem-id="1648914746916"] .tn-atom {
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec485756225 .tn-elem[data-elem-id="1648914746916"] {
              top: calc(135px - 67% + 0px);
              left: calc(50% - 50% + 0px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec485756225 .tn-elem[data-elem-id="1648914746916"] {
              top: calc(135px - 67% + 0px);
              left: calc(50% - 50% + 0px);
              width: 100%;
              height: 100%;
            }
          }

          @media screen and (max-width: 639px) {
            #rec485756225 .tn-elem[data-elem-id="1648914746916"] {
              top: calc(135px - 67% + 0px);
              left: calc(50% - 50% + 0px);
            }
          }

          @media screen and (max-width: 479px) {
            #rec485756225 .tn-elem[data-elem-id="1648914746916"] {
              top: calc(135px - 67% + 69px);
              left: calc(50% - 50% + -88px);
              width: 538%;
              height: 173%;
            }
          }

          #rec485756225 .tn-elem[data-elem-id="1648914746920"] {
            z-index: 3;
            top: 80px;
            left: calc(50% - 600px + -2px);
            width: 138px;
          }

          #rec485756225 .tn-elem[data-elem-id="1648914746920"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec485756225 .tn-elem[data-elem-id="1648914746920"] {
              top: 80px;
              left: calc(50% - 480px + -22px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec485756225 .tn-elem[data-elem-id="1648914746920"] {
              top: 22px;
              left: calc(50% - 320px + 162px);
              width: 94px;
            }
          }

          @media screen and (max-width: 639px) {
            #rec485756225 .tn-elem[data-elem-id="1648914746920"] {
              top: 22px;
              left: calc(50% - 240px + 82px);
            }
          }

          @media screen and (max-width: 479px) {
            #rec485756225 .tn-elem[data-elem-id="1648914746920"] {
              top: 22px;
              left: calc(50% - 160px + 22px);
            }

            #rec485756225 .tn-elem[data-elem-id="1648914746920"] .tn-atom {
              opacity: 0;
            }
          }

          #rec485756225 .tn-elem[data-elem-id="1648914746924"] {
            z-index: 4;
            top: 95px;
            left: calc(50% - 600px + 182px);
            width: 30px;
          }

          #rec485756225 .tn-elem[data-elem-id="1648914746924"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec485756225 .tn-elem[data-elem-id="1648914746924"] {
              top: 101px;
              left: calc(50% - 480px + 366px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec485756225 .tn-elem[data-elem-id="1648914746924"] {
              top: -32px;
              left: calc(50% - 320px + -943px);
            }
          }

          @media screen and (max-width: 639px) {
            #rec485756225 .tn-elem[data-elem-id="1648914746924"] {
              top: -32px;
              left: calc(50% - 240px + -1023px);
            }
          }

          @media screen and (max-width: 479px) {
            #rec485756225 .tn-elem[data-elem-id="1648914746924"] {
              top: -32px;
              left: calc(50% - 160px + -1103px);
            }
          }

          #rec485756225 .tn-elem[data-elem-id="1648914746929"] {
            color: #1f1f1f;
            z-index: 5;
            top: 96px;
            left: calc(50% - 600px + 230px);
            width: 194px;
          }

          #rec485756225 .tn-elem[data-elem-id="1648914746929"] .tn-atom {
            color: #1f1f1f;
            font-size: 14px;
            font-family: "CeraPro", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec485756225 .tn-elem[data-elem-id="1648914746929"] {
              top: 101px;
              left: calc(50% - 480px + 414px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec485756225 .tn-elem[data-elem-id="1648914746929"] {
              top: -32px;
              left: calc(50% - 320px + -895px);
            }
          }

          @media screen and (max-width: 639px) {
            #rec485756225 .tn-elem[data-elem-id="1648914746929"] {
              top: -32px;
              left: calc(50% - 240px + -975px);
            }
          }

          @media screen and (max-width: 479px) {
            #rec485756225 .tn-elem[data-elem-id="1648914746929"] {
              top: -32px;
              left: calc(50% - 160px + -1055px);
            }
          }

          #rec485756225 .tn-elem[data-elem-id="1648914746937"] {
            z-index: 6;
            top: 178px;
            left: calc(50% - 600px + -2px);
            width: 1205px;
            height: 1px;
          }

          #rec485756225 .tn-elem[data-elem-id="1648914746937"] .tn-atom {
            background-color: #e9e7e7;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec485756225 .tn-elem[data-elem-id="1648914746937"] {
              top: 178px;
              left: calc(50% - 480px + -22px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec485756225 .tn-elem[data-elem-id="1648914746937"] {
              top: 150px;
              left: calc(50% - 320px + 159px);
              width: 321px;
            }
          }

          @media screen and (max-width: 639px) {
            #rec485756225 .tn-elem[data-elem-id="1648914746937"] {
              top: 150px;
              left: calc(50% - 240px + 79px);
            }
          }

          @media screen and (max-width: 479px) {
            #rec485756225 .tn-elem[data-elem-id="1648914746937"] {
              top: 282px;
              left: calc(50% - 160px + -1px);
            }
          }

          #rec485756225 .tn-elem[data-elem-id="1648914746941"] {
            color: #d0d0d0;
            z-index: 7;
            top: 185px;
            left: calc(50% - 600px + -2px);
            width: 560px;
          }

          #rec485756225 .tn-elem[data-elem-id="1648914746941"] .tn-atom {
            color: #d0d0d0;
            font-size: 9px;
            font-family: "CeraPro", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec485756225 .tn-elem[data-elem-id="1648914746941"] {
              top: 185px;
              left: calc(50% - 480px + -22px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec485756225 .tn-elem[data-elem-id="1648914746941"] {
              top: 158px;
              left: calc(50% - 320px + 40px);
            }

            #rec485756225 .tn-elem[data-elem-id="1648914746941"] {
              text-align: center;
            }
          }

          @media screen and (max-width: 639px) {
            #rec485756225 .tn-elem[data-elem-id="1648914746941"] {
              top: 158px;
              left: calc(50% - 240px + -40px);
            }
          }

          @media screen and (max-width: 479px) {
            #rec485756225 .tn-elem[data-elem-id="1648914746941"] {
              top: 290px;
              left: calc(50% - 160px + -120px);
            }
          }

          #rec485756225 .tn-elem[data-elem-id="1648914746945"] {
            z-index: 8;
            top: -11px;
            left: calc(50% - 600px + -10000px);
            width: 115px;
          }

          #rec485756225 .tn-elem[data-elem-id="1648914746945"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
          }

          @media screen and (max-width: 959px) {
            #rec485756225 .tn-elem[data-elem-id="1648914746945"] {
              top: 26px;
              left: calc(50% - 320px + 367px);
            }
          }

          @media screen and (max-width: 639px) {
            #rec485756225 .tn-elem[data-elem-id="1648914746945"] {
              top: 26px;
              left: calc(50% - 240px + 287px);
            }
          }

          @media screen and (max-width: 479px) {
            #rec485756225 .tn-elem[data-elem-id="1648914746945"] {
              top: 26px;
              left: calc(50% - 160px + 187px);
            }

            #rec485756225 .tn-elem[data-elem-id="1648914746945"] .tn-atom {
              opacity: 0;
            }
          }

          #rec485756225 .tn-elem[data-elem-id="1649405039573"] {
            color: #1f1f1f;
            z-index: 9;
            top: 96px;
            left: calc(50% - 600px + 1024px);
            width: 176px;
          }

          #rec485756225 .tn-elem[data-elem-id="1649405039573"] .tn-atom {
            color: #1f1f1f;
            font-size: 14px;
            font-family: "CeraPro", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 500;
            text-transform: uppercase;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec485756225 .tn-elem[data-elem-id="1649405039573"] {
              top: 113pxpx;
              left: calc(50% - 480px + 790pxpx);
            }
          }

          @media screen and (max-width: 959px) {
            #rec485756225 .tn-elem[data-elem-id="1649405039573"] {
              top: 104pxpx;
              left: calc(50% - 320px + 247pxpx);
              width: 163px;
            }

            #rec485756225 .tn-elem[data-elem-id="1649405039573"] {
              text-align: center;
            }

            #rec485756225 .tn-elem[data-elem-id="1649405039573"] .tn-atom {
              font-size: 12px;
            }
          }

          @media screen and (max-width: 639px) {
            #rec485756225 .tn-elem[data-elem-id="1649405039573"] {
              top: 104pxpx;
              left: calc(50% - 240px + 167pxpx);
            }
          }

          @media screen and (max-width: 479px) {
            #rec485756225 .tn-elem[data-elem-id="1649405039573"] {
              top: 94px;
              left: calc(50% - 160px + 73px);
              width: 120px;
            }

            #rec485756225 .tn-elem[data-elem-id="1649405039573"] .tn-atom {
              opacity: 0;
            }
          }

          #rec485756225 .tn-elem[data-elem-id="1649405039577"] {
            z-index: 10;
            top: 103px;
            left: calc(50% - 600px + 1170px);
            width: 33px;
          }

          #rec485756225 .tn-elem[data-elem-id="1649405039577"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec485756225 .tn-elem[data-elem-id="1649405039577"] {
              top: 119pxpx;
              left: calc(50% - 480px + 964pxpx);
            }
          }

          @media screen and (max-width: 959px) {
            #rec485756225 .tn-elem[data-elem-id="1649405039577"] {
              top: 109pxpx;
              left: calc(50% - 320px + 383pxpx);
            }
          }

          @media screen and (max-width: 639px) {
            #rec485756225 .tn-elem[data-elem-id="1649405039577"] {
              top: 109pxpx;
              left: calc(50% - 240px + 303pxpx);
            }
          }

          @media screen and (max-width: 479px) {
            #rec485756225 .tn-elem[data-elem-id="1649405039577"] {
              top: 99px;
              left: calc(50% - 160px + 214px);
            }

            #rec485756225 .tn-elem[data-elem-id="1649405039577"] .tn-atom {
              opacity: 0;
            }
          }

          #rec485756225 .tn-elem[data-elem-id="1649418035671"] {
            z-index: 11;
            top: -229px;
            left: calc(50% - 600px + 153px);
            width: 319px;
          }

          #rec485756225 .tn-elem[data-elem-id="1649418035671"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
          }

          @media screen and (max-width: 959px) {
          }

          @media screen and (max-width: 639px) {
          }

          @media screen and (max-width: 479px) {
            #rec485756225 .tn-elem[data-elem-id="1649418035671"] {
              top: 24px;
              left: calc(50% - 160px + 10px);
              width: 300px;
            }
          }

          #rec485756225 .tn-elem[data-elem-id="1649418035675"] {
            z-index: 12;
            top: -131px;
            left: calc(50% - 600px + 214px);
            width: 165px;
          }

          #rec485756225 .tn-elem[data-elem-id="1649418035675"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
          }

          @media screen and (max-width: 959px) {
          }

          @media screen and (max-width: 639px) {
          }

          @media screen and (max-width: 479px) {
            #rec485756225 .tn-elem[data-elem-id="1649418035675"] {
              top: 94px;
              left: calc(50% - 160px + 73px);
              width: 175px;
            }
          }

          #rec485756225 .tn-elem[data-elem-id="1661979128594"] {
            color: #1f1f1f;
            text-align: center;
            z-index: 13;
            top: 93px;
            left: calc(50% - 600px + 455px);
            width: 213px;
            height: 28px;
          }

          #rec485756225 .tn-elem[data-elem-id="1661979128594"] .tn-atom {
            color: #1f1f1f;
            font-size: 14px;
            font-family: "CeraPro", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            border-radius: 0px;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
            transition: background-color 0.2s ease-in-out,
              color 0.2s ease-in-out, border-color 0.2s ease-in-out;
          }

          @media (hover), (min-width: 0\0) {
            #rec485756225
              .tn-elem[data-elem-id="1661979128594"]
              .tn-atom:hover {
            }

            #rec485756225
              .tn-elem[data-elem-id="1661979128594"]
              .tn-atom:hover {
              color: #c6a37e;
            }
          }

          @media screen and (max-width: 1199px) {
            #rec485756225 .tn-elem[data-elem-id="1661979128594"] {
              top: 116px;
              left: calc(50% - 480px + 351px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec485756225 .tn-elem[data-elem-id="1661979128594"] {
              top: 126px;
              left: calc(50% - 320px + 112px);
            }

            #rec485756225 .tn-elem[data-elem-id="1661979128594"] .tn-atom {
              font-size: 14px;
            }
          }

          @media screen and (max-width: 639px) {
            #rec485756225 .tn-elem[data-elem-id="1661979128594"] {
              top: 147px;
              left: calc(50% - 240px + 75px);
            }
          }

          @media screen and (max-width: 479px) {
            #rec485756225 .tn-elem[data-elem-id="1661979128594"] {
              top: 127px;
              left: calc(50% - 160px + 47px);
              width: 226px;
              height: 30px;
            }

            #rec485756225 .tn-elem[data-elem-id="1661979128594"] .tn-atom {
              font-size: 12px;
            }
          }

          #rec485756225 .tn-elem[data-elem-id="1661979128598"] {
            color: #1f1f1f;
            text-align: center;
            z-index: 14;
            top: 140px;
            left: calc(50% - 600px + 455px);
            width: 116px;
            height: 22px;
          }

          #rec485756225 .tn-elem[data-elem-id="1661979128598"] .tn-atom {
            color: #1f1f1f;
            font-size: 14px;
            font-family: "CeraPro", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            border-radius: 0px;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
            transition: background-color 0.2s ease-in-out,
              color 0.2s ease-in-out, border-color 0.2s ease-in-out;
          }

          @media (hover), (min-width: 0\0) {
            #rec485756225
              .tn-elem[data-elem-id="1661979128598"]
              .tn-atom:hover {
            }

            #rec485756225
              .tn-elem[data-elem-id="1661979128598"]
              .tn-atom:hover {
              color: #c6a37e;
            }
          }

          @media screen and (max-width: 1199px) {
            #rec485756225 .tn-elem[data-elem-id="1661979128598"] {
              top: 158px;
              left: calc(50% - 480px + 351px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec485756225 .tn-elem[data-elem-id="1661979128598"] {
              top: 164px;
              left: calc(50% - 320px + 106px);
            }

            #rec485756225 .tn-elem[data-elem-id="1661979128598"] .tn-atom {
              font-size: 14px;
            }
          }

          @media screen and (max-width: 639px) {
            #rec485756225 .tn-elem[data-elem-id="1661979128598"] {
              top: 185px;
              left: calc(50% - 240px + 69px);
            }
          }

          @media screen and (max-width: 479px) {
            #rec485756225 .tn-elem[data-elem-id="1661979128598"] {
              top: 163px;
              left: calc(50% - 160px + 100px);
              width: 121px;
              height: 27px;
            }

            #rec485756225 .tn-elem[data-elem-id="1661979128598"] .tn-atom {
              font-size: 14px;
            }
          }

          #rec485756225 .tn-elem[data-elem-id="1661979371444"] {
            color: #1f1f1f;
            z-index: 15;
            top: 95px;
            left: calc(50% - 600px + 722px);
            width: 217px;
          }

          #rec485756225 .tn-elem[data-elem-id="1661979371444"] .tn-atom {
            color: #1f1f1f;
            font-size: 14px;
            font-family: "CeraPro", Arial, sans-serif;
            line-height: 1.6;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec485756225 .tn-elem[data-elem-id="1661979371444"] {
              top: 288pxpx;
              left: calc(50% - 480px + 734pxpx);
            }
          }

          @media screen and (max-width: 959px) {
            #rec485756225 .tn-elem[data-elem-id="1661979371444"] {
              top: 291pxpx;
              left: calc(50% - 320px + 420pxpx);
            }

            #rec485756225 .tn-elem[data-elem-id="1661979371444"] {
              text-align: center;
            }
          }

          @media screen and (max-width: 639px) {
            #rec485756225 .tn-elem[data-elem-id="1661979371444"] {
              top: 327pxpx;
              left: calc(50% - 240px + 280pxpx);
              width: 225px;
            }

            #rec485756225 .tn-elem[data-elem-id="1661979371444"] .tn-atom {
              font-size: 10px;
            }
          }

          @media screen and (max-width: 479px) {
            #rec485756225 .tn-elem[data-elem-id="1661979371444"] {
              top: 205px;
              left: calc(50% - 160px + 48px);
            }

            #rec485756225 .tn-elem[data-elem-id="1661979371444"] {
              text-align: center;
            }

            #rec485756225 .tn-elem[data-elem-id="1661979371444"] .tn-atom {
              font-size: 12px;
            }
          }
        </style>
        <div class="t396">
          <div
            class="t396__artboard"
            data-artboard-recid="485756225"
            data-artboard-screens="320,480,640,960,1200"
            data-artboard-height="270"
            data-artboard-valign="center"
            data-artboard-upscale="grid"
            data-artboard-height-res-320="320"
            data-artboard-upscale-res-320="grid"
            data-artboard-height-res-640="190"
          >
            <div class="t396__carrier" data-artboard-recid="485756225"></div>
            <div class="t396__filter" data-artboard-recid="485756225"></div>
            <div
              class="t396__elem tn-elem tn-elem__4857562251648914746916"
              data-elem-id="1648914746916"
              data-elem-type="shape"
              data-field-top-value="46"
              data-field-left-value="0"
              data-field-height-value="134"
              data-field-width-value="100"
              data-field-axisy-value="center"
              data-field-axisx-value="center"
              data-field-container-value="window"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value="%"
              data-field-widthunits-value="%"
              data-field-top-res-320-value="69"
              data-field-left-res-320-value="-88"
              data-field-height-res-320-value="173"
              data-field-width-res-320-value="538"
              data-field-top-res-480-value="0"
              data-field-left-res-480-value="0"
              data-field-top-res-640-value="0"
              data-field-left-res-640-value="0"
              data-field-height-res-640-value="100"
              data-field-width-res-640-value="100"
              data-field-top-res-960-value="0"
              data-field-left-res-960-value="0"
            >
              <div
                class="tn-atom t-bgimg"
                data-original="images/Rectangle.svg"
              ></div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__4857562251648914746920 t-animate22"
              data-elem-id="1648914746920"
              data-elem-type="image"
              data-field-top-value="80"
              data-field-left-value="-2"
              data-field-width-value="138"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-style="fadeinup"
              data-animate-duration="1"
              data-animate-distance="100"
              data-animate-mobile="y"
              data-field-filewidth-value="117"
              data-field-fileheight-value="47"
              data-field-top-res-320-value="22"
              data-field-left-res-320-value="22"
              data-field-top-res-480-value="22"
              data-field-left-res-480-value="82"
              data-field-top-res-640-value="22"
              data-field-left-res-640-value="162"
              data-field-width-res-640-value="94"
              data-field-top-res-960-value="80"
              data-field-left-res-960-value="-22"
            >
              <div class="tn-atom">
                <img
                  class="tn-atom__img t-img atom__logo"
                  src="./images/coinfaten.svg"
                  alt=""
                  imgfield="tn_img_1648914746920"
                />
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__4857562251648914746924 t-animate22"
              data-elem-id="1648914746924"
              data-elem-type="image"
              data-field-top-value="95"
              data-field-left-value="182"
              data-field-width-value="30"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-style="fadeinup"
              data-animate-duration="1"
              data-animate-distance="100"
              data-animate-mobile="y"
              data-field-filewidth-value="30"
              data-field-fileheight-value="24"
              data-field-top-res-320-value="-32"
              data-field-left-res-320-value="-1103"
              data-field-top-res-480-value="-32"
              data-field-left-res-480-value="-1023"
              data-field-top-res-640-value="-32"
              data-field-left-res-640-value="-943"
              data-field-top-res-960-value="101"
              data-field-left-res-960-value="366"
            >
              <div class="tn-atom">
                <img
                  class="tn-atom__img t-img"
                  data-original="images/Group_5723.svg"
                  alt=""
                  imgfield="tn_img_1648914746924"
                />
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__4857562251648914746929 t-animate22"
              data-elem-id="1648914746929"
              data-elem-type="text"
              data-field-top-value="96"
              data-field-left-value="230"
              data-field-width-value="194"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-style="fadeinup"
              data-animate-duration="1"
              data-animate-distance="100"
              data-animate-mobile="y"
              data-field-top-res-320-value="-32"
              data-field-left-res-320-value="-1055"
              data-field-top-res-480-value="-32"
              data-field-left-res-480-value="-975"
              data-field-top-res-640-value="-32"
              data-field-left-res-640-value="-895"
              data-field-top-res-960-value="101"
              data-field-left-res-960-value="414"
            >
              <div class="tn-atom" field="tn_text_1648914746929">
                <span style="font-weight: 500">+79091916981</span> <br />
                coinfaten@kryptocoach.ru
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__4857562251648914746937 t-animate22"
              data-elem-id="1648914746937"
              data-elem-type="shape"
              data-field-top-value="178"
              data-field-left-value="-2"
              data-field-height-value="1"
              data-field-width-value="1205"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value="px"
              data-field-widthunits-value="px"
              data-animate-style="fadeinup"
              data-animate-duration="1"
              data-animate-distance="100"
              data-animate-mobile="y"
              data-field-top-res-320-value="282"
              data-field-left-res-320-value="-1"
              data-field-top-res-480-value="150"
              data-field-left-res-480-value="79"
              data-field-top-res-640-value="150"
              data-field-left-res-640-value="159"
              data-field-width-res-640-value="321"
              data-field-top-res-960-value="178"
              data-field-left-res-960-value="-22"
            >
              <div class="tn-atom"></div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__4857562251648914746941 t-animate22"
              data-elem-id="1648914746941"
              data-elem-type="text"
              data-field-top-value="185"
              data-field-left-value="-2"
              data-field-width-value="560"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-style="fadeinup"
              data-animate-duration="1"
              data-animate-distance="100"
              data-animate-mobile="y"
              data-field-top-res-320-value="290"
              data-field-left-res-320-value="-120"
              data-field-top-res-480-value="158"
              data-field-left-res-480-value="-40"
              data-field-top-res-640-value="158"
              data-field-left-res-640-value="40"
              data-field-top-res-960-value="185"
              data-field-left-res-960-value="-22"
            >
              <div class="tn-atom" field="tn_text_1648914746941">
                Все права защищены
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__4857562251648914746945 t-animate22"
              data-elem-id="1648914746945"
              data-elem-type="image"
              data-field-top-value="-11"
              data-field-left-value="-10000"
              data-field-width-value="115"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-style="fadeinup"
              data-animate-duration="1"
              data-animate-distance="100"
              data-animate-mobile="y"
              data-field-filewidth-value="115"
              data-field-fileheight-value="30"
              data-field-top-res-320-value="26"
              data-field-left-res-320-value="187"
              data-field-top-res-480-value="26"
              data-field-left-res-480-value="287"
              data-field-top-res-640-value="26"
              data-field-left-res-640-value="367"
            >
              <div class="tn-atom">
                <img
                  class="tn-atom__img t-img"
                  data-original="images/Group_5728.svg"
                  alt=""
                  imgfield="tn_img_1648914746945"
                />
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__4857562251649405039573 t-animate22"
              data-elem-id="1649405039573"
              data-elem-type="text"
              data-field-top-value="96"
              data-field-left-value="1024"
              data-field-width-value="176"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-style="fadeinup"
              data-animate-duration="1"
              data-animate-distance="100"
              data-animate-mobile="y"
              data-field-top-res-320-value="94"
              data-field-left-res-320-value="73"
              data-field-width-res-320-value="120"
              data-field-top-res-480-value="104px"
              data-field-left-res-480-value="167px"
              data-field-top-res-640-value="104px"
              data-field-left-res-640-value="247px"
              data-field-width-res-640-value="163"
              data-field-top-res-960-value="113px"
              data-field-left-res-960-value="790px"
            >
              <div class="tn-atom quiz">
                <a style="color: inherit"><u>Хочу участвовать</u></a>
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__4857562251649405039577 t-animate22"
              data-elem-id="1649405039577"
              data-elem-type="image"
              data-field-top-value="103"
              data-field-left-value="1170"
              data-field-width-value="33"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-style="fadeinup"
              data-animate-duration="1"
              data-animate-distance="100"
              data-animate-mobile="y"
              data-field-filewidth-value="33"
              data-field-fileheight-value="8"
              data-field-top-res-320-value="99"
              data-field-left-res-320-value="214"
              data-field-top-res-480-value="109px"
              data-field-left-res-480-value="303px"
              data-field-top-res-640-value="109px"
              data-field-left-res-640-value="383px"
              data-field-top-res-960-value="119px"
              data-field-left-res-960-value="964px"
            >
              <div class="tn-atom">
                <img
                  class="tn-atom__img t-img"
                  data-original="images/Vector.svg"
                  alt=""
                  imgfield="tn_img_1649405039577"
                />
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__4857562251649418035671"
              data-elem-id="1649418035671"
              data-elem-type="image"
              data-field-top-value="-229"
              data-field-left-value="153"
              data-field-width-value="319"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-field-filewidth-value="319"
              data-field-fileheight-value="38"
              data-field-top-res-320-value="24"
              data-field-left-res-320-value="10"
              data-field-width-res-320-value="300"
            >
              <div class="tn-atom">
                <img
                  class="tn-atom__img t-img"
                  src="./images/frame_bottom.svg"
                  alt=""
                  imgfield="tn_img_1649418035671"
                />
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__4857562251649418035675"
              data-elem-id="1649418035675"
              data-elem-type="image"
              data-field-top-value="-131"
              data-field-left-value="214"
              data-field-width-value="165"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-field-filewidth-value="165"
              data-field-fileheight-value="16"
              data-field-top-res-320-value="94"
              data-field-left-res-320-value="73"
              data-field-width-res-320-value="175"
            >
              <a class="tn-atom quiz" href="#popup:infoblock"
                ><img
                  class="tn-atom__img t-img"
                  data-original="images/Group_5743.svg"
                  alt=""
                  imgfield="tn_img_1649418035675"
                  style="width: 85%; margin: 0 auto"
              /></a>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__4857562251661979128594"
              data-elem-id="1661979128594"
              data-elem-type="button"
              data-field-top-value="93"
              data-field-left-value="455"
              data-field-height-value="28"
              data-field-width-value="213"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value="px"
              data-field-widthunits-value="px"
              data-field-top-res-320-value="127"
              data-field-left-res-320-value="47"
              data-field-height-res-320-value="30"
              data-field-width-res-320-value="226"
              data-field-top-res-480-value="147"
              data-field-left-res-480-value="75"
              data-field-top-res-640-value="126"
              data-field-left-res-640-value="112"
              data-field-top-res-960-value="116"
              data-field-left-res-960-value="351"
            >
              <a class="tn-atom" href="./policy.pdf" target="_blank'"
                >Политика конфиденциальности</a
              >
            </div>
            <div
              class="t396__elem tn-elem tn-elem__4857562251661979128598"
              data-elem-id="1661979128598"
              data-elem-type="button"
              data-field-top-value="140"
              data-field-left-value="455"
              data-field-height-value="22"
              data-field-width-value="116"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value="px"
              data-field-widthunits-value="px"
              data-field-top-res-320-value="163"
              data-field-left-res-320-value="100"
              data-field-height-res-320-value="27"
              data-field-width-res-320-value="121"
              data-field-top-res-480-value="185"
              data-field-left-res-480-value="69"
              data-field-top-res-640-value="164"
              data-field-left-res-640-value="106"
              data-field-top-res-960-value="158"
              data-field-left-res-960-value="351"
            ></div>
            <div
              class="t396__elem tn-elem tn-elem__4857562251661979371444 t-animate22"
              data-elem-id="1661979371444"
              data-elem-type="text"
              data-field-top-value="95"
              data-field-left-value="722"
              data-field-width-value="217"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-style="fadeinup"
              data-animate-duration="1"
              data-animate-distance="100"
              data-animate-mobile="y"
              data-field-top-res-320-value="205"
              data-field-left-res-320-value="48"
              data-field-top-res-480-value="327px"
              data-field-left-res-480-value="280px"
              data-field-width-res-480-value="225"
              data-field-top-res-640-value="291px"
              data-field-left-res-640-value="420px"
              data-field-top-res-960-value="288px"
              data-field-left-res-960-value="734px"
            >
              <div class="tn-atom" field="tn_text_1661979371444">
                ООО "Веблайт" <br />
                Адрес: 109004, город Москва, ул Александра Солженицына, д. 27,
                этаж/помещ. 4/I офис/ком. 409/13в 
              </div>
            </div>
          </div>
        </div>
        <script>
          t_onReady(function () {
            t_onFuncLoad("t396_init", function () {
              t396_init("485756225");
            });
          });
        </script>
        <!-- /T396 -->
      </div>
      <div class="r t-rec main__webinar">
        <h2 class="webinar__heading">Что узнаешь на мастер-классе?</h2>
        <div class="webinar__cards">
          <div class="webinar__card">
            <img src="./images/chart-arr.svg" alt="Icon" />
            <span class="webinar__descr"
              >Какие монеты и технологии будут в фокусе, и как не упустить
              возможности
            </span>
          </div>
          <div class="webinar__card">
            <img src="./images/warn.svg" alt="Icon" />
            <span class="webinar__descr"
              >О чём не расскажут в интернете: скрытые опасности и как их
              обходить
            </span>
          </div>
          <div class="webinar__card">
            <img src="./images/rocket.svg" alt="Icon" />
            <span class="webinar__descr"
              >С чего начать, как диверсифицировать риски и не потерять
              инвестиции в первые месяцы
            </span>
          </div>
        </div>
      </div>

      <div
        id="rec485756226"
        class="r t-rec"
        style=""
        data-animationappear="off"
        data-record-type="396"
      >
        <!-- T396 -->
        <style>
          #rec485756226 .t396__artboard {
            height: 540px;
          }

          #rec485756226 .t396__filter {
            height: 540px;
          }

          #rec485756226 .t396__carrier {
            height: 540px;
            background-position: center center;
            background-attachment: scroll;
            background-size: cover;
            background-repeat: no-repeat;
          }

          @media screen and (max-width: 1199px) {
            #rec485756226 .t396__artboard,
            #rec485756226 .t396__filter,
            #rec485756226 .t396__carrier {
            }

            #rec485756226 .t396__filter {
            }

            #rec485756226 .t396__carrier {
              background-attachment: scroll;
            }
          }

          @media screen and (max-width: 959px) {
            #rec485756226 .t396__artboard,
            #rec485756226 .t396__filter,
            #rec485756226 .t396__carrier {
            }

            #rec485756226 .t396__artboard {
              background-color: #ffffff;
            }

            #rec485756226 .t396__filter {
            }

            #rec485756226 .t396__carrier {
              background-attachment: scroll;
            }
          }

          @media screen and (max-width: 639px) {
            #rec485756226 .t396__artboard,
            #rec485756226 .t396__filter,
            #rec485756226 .t396__carrier {
            }

            #rec485756226 .t396__filter {
            }

            #rec485756226 .t396__carrier {
              background-attachment: scroll;
            }
          }

          @media screen and (max-width: 479px) {
            #rec485756226 .t396__artboard,
            #rec485756226 .t396__filter,
            #rec485756226 .t396__carrier {
            }

            #rec485756226 .t396__filter {
            }

            #rec485756226 .t396__carrier {
              background-attachment: scroll;
            }
          }

          #rec485756226 .tn-elem[data-elem-id="1648914852506"] {
            z-index: 2;
            top: 23px;
            left: calc(50% - 600px + 123px);
            width: 954px;
          }

          #rec485756226 .tn-elem[data-elem-id="1648914852506"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec485756226 .tn-elem[data-elem-id="1648914852506"] {
              top: 10px;
              left: calc(50% - 480px + 21px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec485756226 .tn-elem[data-elem-id="1648914852506"] {
              top: -51px;
              left: calc(50% - 320px + -1749px);
            }
          }

          @media screen and (max-width: 639px) {
            #rec485756226 .tn-elem[data-elem-id="1648914852506"] {
              top: -51px;
              left: calc(50% - 240px + -1829px);
            }
          }

          @media screen and (max-width: 479px) {
            #rec485756226 .tn-elem[data-elem-id="1648914852506"] {
              top: -51px;
              left: calc(50% - 160px + -1909px);
            }
          }

          #rec485756226 .tn-elem[data-elem-id="1648914852511"] {
            z-index: 3;
            top: 367px;
            left: calc(50% - 600px + 825px);
            width: 141px;
          }

          #rec485756226 .tn-elem[data-elem-id="1648914852511"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec485756226 .tn-elem[data-elem-id="1648914852511"] {
              top: 384px;
              left: calc(50% - 480px + 743px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec485756226 .tn-elem[data-elem-id="1648914852511"] {
              top: 146px;
              left: calc(50% - 320px + 832px);
            }
          }

          @media screen and (max-width: 639px) {
            #rec485756226 .tn-elem[data-elem-id="1648914852511"] {
              top: 146px;
              left: calc(50% - 240px + 752px);
            }
          }

          @media screen and (max-width: 479px) {
            #rec485756226 .tn-elem[data-elem-id="1648914852511"] {
              top: 486px;
              left: calc(50% - 160px + 221px);
              width: 71px;
            }
          }

          #rec485756226 .tn-elem[data-elem-id="1648914852516"] {
            color: #000000;
            z-index: 4;
            top: 215px;
            left: calc(50% - 600px + 815px);
            width: 221px;
          }

          #rec485756226 .tn-elem[data-elem-id="1648914852516"] .tn-atom {
            color: #000000;
            font-size: 16px;
            font-family: "CeraPro", Arial, sans-serif;
            line-height: 1.35;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec485756226 .tn-elem[data-elem-id="1648914852516"] {
              top: 264px;
              left: calc(50% - 480px + 512px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec485756226 .tn-elem[data-elem-id="1648914852516"] {
              top: 154px;
              left: calc(50% - 320px + 40px);
            }

            #rec485756226 .tn-elem[data-elem-id="1648914852516"] {
              text-align: center;
            }

            #rec485756226 .tn-elem[data-elem-id="1648914852516"] .tn-atom {
              font-size: 14px;
            }
          }

          @media screen and (max-width: 639px) {
            #rec485756226 .tn-elem[data-elem-id="1648914852516"] {
              top: 154px;
              left: calc(50% - 240px + -40px);
            }
          }

          @media screen and (max-width: 479px) {
            #rec485756226 .tn-elem[data-elem-id="1648914852516"] {
              top: 109px;
              left: calc(50% - 160px + 137px);
            }

            #rec485756226 .tn-elem[data-elem-id="1648914852516"] {
              text-align: left;
            }

            #rec485756226 .tn-elem[data-elem-id="1648914852516"] .tn-atom {
              font-size: 12px;
            }
          }

          #rec485756226 .tn-elem[data-elem-id="1648914852525"] {
            z-index: 5;
            top: 707px;
            left: calc(50% - 600px + 90px);
            width: 290px;
          }

          @media (min-width: 1200px) {
            #rec485756226
              .tn-elem.t396__elem--anim-hidden[data-elem-id="1648914852525"] {
              opacity: 0;
            }
          }

          #rec485756226 .tn-elem[data-elem-id="1648914852525"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec485756226 .tn-elem[data-elem-id="1648914852525"] {
              top: 344px;
              left: calc(50% - 480px + 104px);
            }
          }

          @media screen and (max-width: 959px) {
            #rec485756226 .tn-elem[data-elem-id="1648914852525"] {
              top: 401px;
              left: calc(50% - 320px + 175px);
            }
          }

          @media screen and (max-width: 639px) {
            #rec485756226 .tn-elem[data-elem-id="1648914852525"] {
              top: 401px;
              left: calc(50% - 240px + 95px);
            }
          }

          @media screen and (max-width: 479px) {
            #rec485756226 .tn-elem[data-elem-id="1648914852525"] {
              top: 380px;
              left: calc(50% - 160px + -361px);
              width: 228px;
            }
          }

          #rec485756226 .tn-elem[data-elem-id="1661976419192"] {
            z-index: 6;
            top: 115px;
            left: calc(50% - 600px + 550px);
            width: 294px;
          }

          #rec485756226 .tn-elem[data-elem-id="1661976419192"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
          }

          @media screen and (max-width: 959px) {
          }

          @media screen and (max-width: 639px) {
          }

          @media screen and (max-width: 479px) {
            #rec485756226 .tn-elem[data-elem-id="1661976419192"] {
              top: 88px;
              left: calc(50% - 160px + 26px);
              width: 99px;
            }
          }

          #rec485756226 .tn-elem[data-elem-id="1661977519003"] {
            color: #a1abc3;
            text-align: center;
            z-index: 7;
            top: 326px;
            left: calc(50% - 600px + 230px);
            width: 267px;
          }

          #rec485756226 .tn-elem[data-elem-id="1661977519003"] .tn-atom {
            color: #a1abc3;
            font-size: 13px;
            font-family: "CeraPro", Arial, sans-serif;
            line-height: 1.35;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec485756226 .tn-elem[data-elem-id="1661977519003"] {
              top: 274pxpx;
              left: calc(50% - 480px + 522pxpx);
            }
          }

          @media screen and (max-width: 959px) {
            #rec485756226 .tn-elem[data-elem-id="1661977519003"] {
              top: 164pxpx;
              left: calc(50% - 320px + 50pxpx);
            }

            #rec485756226 .tn-elem[data-elem-id="1661977519003"] {
              text-align: center;
            }

            #rec485756226 .tn-elem[data-elem-id="1661977519003"] .tn-atom {
              font-size: 14px;
            }
          }

          @media screen and (max-width: 639px) {
            #rec485756226 .tn-elem[data-elem-id="1661977519003"] {
              top: 164pxpx;
              left: calc(50% - 240px + -30pxpx);
            }
          }

          @media screen and (max-width: 479px) {
            #rec485756226 .tn-elem[data-elem-id="1661977519003"] {
              top: 383px;
              left: calc(50% - 160px + 59px);
              width: 203px;
            }

            #rec485756226 .tn-elem[data-elem-id="1661977519003"] .tn-atom {
              font-size: 10px;
            }
          }

          #rec485756226 .tn-elem[data-elem-id="1661978444422"] {
            color: #1f1f1f;
            text-align: center;
            z-index: 8;
            top: 45px;
            left: calc(50% - 600px + 409px);
            width: 383px;
          }

          #rec485756226 .tn-elem[data-elem-id="1661978444422"] .tn-atom {
            color: #1f1f1f;
            font-size: 57px;
            font-family: "CeraPro", Arial, sans-serif;
            line-height: 1.35;
            font-weight: 700;
            text-transform: uppercase;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }

          @media screen and (max-width: 1199px) {
            #rec485756226 .tn-elem[data-elem-id="1661978444422"] {
              top: 274pxpx;
              left: calc(50% - 480px + 522pxpx);
            }
          }

          @media screen and (max-width: 959px) {
            #rec485756226 .tn-elem[data-elem-id="1661978444422"] {
              top: 164pxpx;
              left: calc(50% - 320px + 50pxpx);
            }

            #rec485756226 .tn-elem[data-elem-id="1661978444422"] {
              text-align: center;
            }

            #rec485756226 .tn-elem[data-elem-id="1661978444422"] .tn-atom {
              font-size: 14px;
            }
          }

          @media screen and (max-width: 639px) {
            #rec485756226 .tn-elem[data-elem-id="1661978444422"] {
              top: 164pxpx;
              left: calc(50% - 240px + -30pxpx);
            }
          }

          @media screen and (max-width: 479px) {
            #rec485756226 .tn-elem[data-elem-id="1661978444422"] {
              top: 32px;
              left: calc(50% - 160px + -31px);
            }

            #rec485756226 .tn-elem[data-elem-id="1661978444422"] {
              text-align: center;
            }

            #rec485756226 .tn-elem[data-elem-id="1661978444422"] .tn-atom {
              font-size: 35px;
            }
          }

          #rec485756226 .tn-elem[data-elem-id="1706793920810"] {
            color: #523b24;
            text-align: center;
            z-index: 9;
            top: 231px;
            left: calc(50% - 600px + 230px);
            width: 268px;
            height: 76px;
          }

          #rec485756226 .tn-elem[data-elem-id="1706793920810"] .tn-atom {
            color: #523b24;
            font-size: 18px;
            font-family: "CeraPro", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 500;
            border-radius: 30px;
            background-image: linear-gradient(
              0turn,
              rgba(216, 186, 155, 1) 0%,
              rgba(195, 156, 114, 1) 100%
            );
            border-color: transparent;
            border-style: solid;
            transition: background-color 0.2s ease-in-out,
              color 0.2s ease-in-out, border-color 0.2s ease-in-out;
          }

          @media screen and (max-width: 1199px) {
          }

          @media screen and (max-width: 959px) {
          }

          @media screen and (max-width: 639px) {
          }

          @media screen and (max-width: 479px) {
            #rec485756226 .tn-elem[data-elem-id="1706793920810"] {
              top: 302px;
              left: calc(50% - 160px + 53px);
              width: 222px;
              height: 63px;
            }
          }
        </style>
        <div class="t396">
          <div
            class="t396__artboard"
            data-artboard-recid="485756226"
            data-artboard-screens="320,480,640,960,1200"
            data-artboard-height="540"
            data-artboard-valign="center"
            data-artboard-upscale="grid"
            data-artboard-upscale-res-320="grid"
          >
            <div class="t396__carrier" data-artboard-recid="485756226"></div>
            <div class="t396__filter" data-artboard-recid="485756226"></div>
            <div
              class="t396__elem tn-elem tn-elem__4857562261648914852506"
              data-elem-id="1648914852506"
              data-elem-type="image"
              data-field-top-value="23"
              data-field-left-value="123"
              data-field-width-value="954"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-field-filewidth-value="915"
              data-field-fileheight-value="469"
              data-field-top-res-320-value="-51"
              data-field-left-res-320-value="-1909"
              data-field-top-res-480-value="-51"
              data-field-left-res-480-value="-1829"
              data-field-top-res-640-value="-51"
              data-field-left-res-640-value="-1749"
              data-field-top-res-960-value="10"
              data-field-left-res-960-value="21"
            >
              <div class="tn-atom">
                <img
                  class="tn-atom__img t-img"
                  data-original="images/Rectangle_13.svg"
                  alt=""
                  imgfield="tn_img_1648914852506"
                />
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__4857562261648914852511"
              data-elem-id="1648914852511"
              data-elem-type="image"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-field-filewidth-value="192"
              data-field-fileheight-value="95"
              data-field-top-res-320-value="216"
              data-field-left-res-320-value="168"
              data-field-width-res-320-value="71"
              data-field-top-res-480-value="146"
              data-field-left-res-480-value="752"
              data-field-top-res-640-value="146"
              data-field-left-res-640-value="832"
              data-field-top-res-960-value="384"
              data-field-left-res-960-value="743"
            >
              <div class="tn-atom">
                <img
                  class="tn-atom__img t-img"
                  data-original="images/123_2.svg"
                  alt=""
                  imgfield="tn_img_1648914852511"
                />
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__4857562261648914852516"
              data-elem-id="1648914852516"
              data-elem-type="text"
              data-field-top-value="215"
              data-field-left-value="815"
              data-field-width-value="221"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-field-top-res-320-value="109"
              data-field-left-res-320-value="137"
              data-field-top-res-480-value="154"
              data-field-left-res-480-value="-40"
              data-field-top-res-640-value="154"
              data-field-left-res-640-value="40"
              data-field-top-res-960-value="264"
              data-field-left-res-960-value="512"
            >
              <div class="tn-atom" field="tn_text_1648914852516">
                И получите бесплатный<br />чек-лист:<br /><br /><span
                  style="font-weight: 600"
                  >«Увеличиваем депозит безопасно: </span
                ><br /><span style="font-weight: 600"
                  >план по приросту 30% в месяц»</span
                >
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__4857562261648914852525"
              data-elem-id="1648914852525"
              data-elem-type="image"
              data-field-top-value="707"
              data-field-left-value="90"
              data-field-width-value="290"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-sbs-event="hover"
              data-animate-sbs-trgels="1648916991773"
              data-animate-sbs-opts="[{'ti':0,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ea':'','dt':0},{'ti':300,'mx':0,'my':0,'sx':1.1,'sy':1.1,'op':1,'ro':0,'bl':'0','ea':'','dt':0}]"
              data-field-filewidth-value="290"
              data-field-fileheight-value="76"
              data-field-top-res-320-value="380"
              data-field-left-res-320-value="-361"
              data-field-width-res-320-value="228"
              data-field-top-res-480-value="401"
              data-field-left-res-480-value="95"
              data-field-top-res-640-value="401"
              data-field-left-res-640-value="175"
              data-field-top-res-960-value="344"
              data-field-left-res-960-value="104"
            >
              <a class="tn-atom" href="/thank"
                ><img
                  class="tn-atom__img t-img"
                  data-original="images/Group_1.svg"
                  alt=""
                  imgfield="tn_img_1648914852525"
              /></a>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__4857562261661976419192"
              data-elem-id="1661976419192"
              data-elem-type="image"
              data-field-top-value="115"
              data-field-left-value="550"
              data-field-width-value="294"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-field-filewidth-value="496"
              data-field-fileheight-value="650"
              data-field-top-res-320-value="88"
              data-field-left-res-320-value="26"
              data-field-width-res-320-value="99"
            >
              <div class="tn-atom">
                <img
                  class="tn-atom__img t-img"
                  src="./images/book.png"
                  alt=""
                  imgfield="tn_img_1661976419192"
                />
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__4857562261661977519003"
              data-elem-id="1661977519003"
              data-elem-type="text"
              data-field-top-value="326"
              data-field-left-value="230"
              data-field-width-value="267"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-field-top-res-320-value="383"
              data-field-left-res-320-value="59"
              data-field-width-res-320-value="210"
              data-field-top-res-480-value="164px"
              data-field-left-res-480-value="-30px"
              data-field-top-res-640-value="164px"
              data-field-left-res-640-value="50px"
              data-field-top-res-960-value="274px"
              data-field-left-res-960-value="522px"
            >
              <div class="tn-atom" field="tn_text_1661977519003">
                Нажимая на «отправить» вы соглашаетесь с<a
                  href="./policy.pdf"
                  target="_blank"
                  rel="noreferrer noopener"
                  style="
                    color: rgb(161, 171, 195);
                    border-bottom: 1px solid rgb(161, 171, 195);
                    box-shadow: none;
                    text-decoration: none;
                  "
                >
                  условиями обработки данных</a
                >
                <br /><br />
                <div class="tn-atom public">
                  Информация, размещённая на сайте, не является публичной
                  офертой и носит исключительно информационный характер.
                </div>
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__4857562261661978444422"
              data-elem-id="1661978444422"
              data-elem-type="text"
              data-field-top-value="45"
              data-field-left-value="409"
              data-field-width-value="383"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-field-top-res-320-value="32"
              data-field-left-res-320-value="-31"
              data-field-top-res-480-value="164px"
              data-field-left-res-480-value="-30px"
              data-field-top-res-640-value="164px"
              data-field-left-res-640-value="50px"
              data-field-top-res-960-value="274px"
              data-field-left-res-960-value="522px"
            >
              <div class="tn-atom" field="tn_text_1661978444422">
                Оставьте заявку
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__4857562261706793920810"
              data-elem-id="1706793920810"
              data-elem-type="button"
              data-field-top-value="231"
              data-field-left-value="230"
              data-field-height-value="76"
              data-field-width-value="268"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value="px"
              data-field-widthunits-value="px"
              data-field-top-res-320-value="302"
              data-field-left-res-320-value="53"
              data-field-height-res-320-value="63"
              data-field-width-res-320-value="222"
            >
              <a class="tn-atom quiz">ОТПPАВИТЬ ЗАЯВКУ</a>
            </div>
          </div>
        </div>
        <script>
          t_onReady(function () {
            t_onFuncLoad("t396_init", function () {
              t396_init("485756226");
            });
          });
        </script>
        <!-- /T396 -->
      </div>
      <div class="r t-rec comments" id="comments">
        <ul class="comments__list">
          <li>
            <img src="./images/com/1.png" alt="" />
            <div class="comments__cnt">
              <p class="comm__title">Анна, 34 года</p>
              <p class="comm__text">
                Никогда не думала, что смогу разобраться в криптовалюте!
                Благодаря курсу я не просто поняла, как это работает, но и уже
                получила первую прибыль. Всё объясняется простым языком, без
                перегруза
              </p>
            </div>
          </li>
          <li>
            <img src="./images/com/2.png" alt="" />
            <div class="comments__cnt">
              <p class="comm__title">Сергей, 28 лет</p>
              <p class="comm__text">
                Я всегда мечтал освоить трейдинг, но долго сомневался. Здесь всё
                подано очень доступно: сначала изучаешь основы, а затем
                переходишь к практике. Теперь я уверенно торгую на bybit и вижу
                реальные результаты!
              </p>
            </div>
          </li>
          <li>
            <img src="./images/com/3.png" alt="" />
            <div class="comments__cnt">
              <p class="comm__title">Игорь, 38 лет</p>
              <p class="comm__text">
                Мне предоставили инструменты и знания, которые я искал. Я не
                только научился торговать, но и понял, как важна безопасность в
                крипте. Спасибо команде!
              </p>
            </div>
          </li>
          <li>
            <img src="./images/com/4.png" alt="" />
            <div class="comments__cnt">
              <p class="comm__title">Мария, 22 года</p>
              <p class="comm__text">
                После прохождения курса я почувствовала себя уверенно в мире
                криптовалют. Уроки интерактивные и познавательные. Теперь у меня
                есть свой портфель активов!
              </p>
            </div>
          </li>
          <li>
            <img src="./images/com/5.png" alt="" />
            <div class="comments__cnt">
              <p class="comm__title">Дмитрий, 45 лет</p>
              <p class="comm__text">
                Курс Дмитрия стал для меня настоящим открытием. Я научился не
                только торговать, но и анализировать рынок. Рекомендую тем, кто
                хочет выйти на новый уровень инвестирования.
              </p>
            </div>
          </li>
        </ul>
      </div>
      <div
        id="rec700112438"
        class="r t-rec"
        style=""
        data-animationappear="off"
        data-record-type="131"
      ></div>
      <div
        id="rec449746085"
        class="r t-rec"
        style=""
        data-animationappear="off"
        data-record-type="131"
      >
        <!-- T123 -->
        <div class="t123">
          <div class="t-container_100">
            <div class="t-width t-width_100">
              <!-- <script>
                $(document).ready(function () {
                  //При клике на нашу кнопку
                  $('a[href="#sendmyform"]').click(function (e) {
                    e.preventDefault();
                    $("#rec433578001 .t-submit").click();
                  });
                });
                //Получаем дату следующего веба с сервера
                $.get(
                  "https://sagynwebinar.org.kz/get_date.php",
                  function (data) {
                    var get_data = $(
                      "#rec449746078 > div > div > div.t396__elem.tn-elem.tn-elem__4497460781653499629819 > div"
                    ).html();
                    $(
                      "#rec449746078 > div > div > div.t396__elem.tn-elem.tn-elem__4497460781653499629819 > div"
                    ).html(
                      "<span style='color: rgb(175, 175, 175);'>Дата:</span><br>" +
                        data
                    );
                  }
                );
              </script> -->
              <script>
                $(document).ready(function () {
                  // Month names on Russin
                  let monthNames = [
                    "января",
                    "февраля",
                    "марта",
                    "апреля",
                    "мая",
                    "июня",
                    "июля",
                    "августа",
                    "сентября",
                    "октября",
                    "ноября",
                    "декабря",
                  ];

                  // Function to add hours to current time
                  Date.prototype.addHours = function (h) {
                    this.setTime(this.getTime() + h * 60 * 60 * 1000);
                    return this;
                  };

                  // Current time
                  let now = new Date();

                  // +3 hours, fix for utc to Moscow time
                  now.addHours(3);

                  // Get Moscow utc time
                  let nowUTC = new Date(
                    now.getFullYear(),
                    now.getUTCMonth(),
                    now.getUTCDate(),
                    now.getUTCHours(),
                    now.getUTCMinutes(),
                    now.getUTCSeconds(),
                    now.getUTCMilliseconds()
                  );

                  // Get current hours
                  let hours = nowUTC.getHours();

                  /*
			If hours > 17:00, then get
			next day time, not today
		*/
                  /*if ( hours > 17 ) {
			nowUTC.setTime(nowUTC.getTime() + (24 * 60 * 60 * 1000));
		}*/
                  nowUTC.setTime(nowUTC.getTime() + 24 * 60 * 60 * 1000);

                  // Get day and month in format: 1 января
                  let day = nowUTC.getDate();
                  let month = monthNames[nowUTC.getMonth()];

                  // write date in document html
                  // document.write(day + ' ' + month);
                  $('div[field="tn_text_1653499629819"]').html(
                    '<span style="color: rgb(175, 175, 175);">Дата:</span><br>' +
                      "25" +
                      " " +
                      "мая"
                  );
                });
              </script>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="backdrop d-none">
      <div class="quiz-modal" id="registration_form">
        <div class="quiz__modal-top">
          <h3 class="step-top__title">Ответьте на несколько вопросов:</h3>
        </div>

        <!-- Шаг 1 -->
        <div class="quiz__step">
          <div class="quiz__step-left">
            <h2 class="step-left__title">
              У Вас уже был опыт торговли на финансовых рынках?
            </h2>
            <div class="step-left__answers">
              <label class="radio-option">
                <input
                  type="radio"
                  name="experience"
                  class="radio-option__input"
                  value="yes"
                />
                <span class="radio-option__custom"></span>
                <span class="radio-option__label">Да</span>
              </label>
              <label class="radio-option">
                <input
                  type="radio"
                  name="experience"
                  class="radio-option__input"
                  value="info"
                />
                <span class="radio-option__custom"></span>
                <span class="radio-option__label"
                  >Пока только изучаю информацию</span
                >
              </label>
            </div>
          </div>
          <div class="quiz__step-right">
            <img src="./images/sagyn.png" alt="" class="step-right__img" />
            <div class="step-right__text-block">
              <h3 class="text-block__title">Гущин Максим</h3>
              <p class="text-block__text">Профессиональный трейдер</p>
            </div>
          </div>
        </div>

        <!-- Шаг 2 -->
        <div class="quiz__step">
          <div class="quiz__step-left">
            <h2 class="step-left__title">
              Готовы ли Вы начать получать стабильный доход от торговли либо
              инвестиций?
            </h2>
            <div class="step-left__answers">
              <label class="radio-option">
                <input
                  type="radio"
                  name="income"
                  class="radio-option__input"
                  value="yes"
                />
                <span class="radio-option__custom"></span>
                <span class="radio-option__label">Да</span>
              </label>
              <label class="radio-option">
                <input
                  type="radio"
                  name="income"
                  class="radio-option__input"
                  value="info"
                />
                <span class="radio-option__custom"></span>
                <span class="radio-option__label"
                  >Пока только изучаю информацию</span
                >
              </label>
            </div>
          </div>
          <div class="quiz__step-right">
            <img src="./images/sagyn.png" alt="" class="step-right__img" />
            <div class="step-right__text-block">
              <h3 class="text-block__title">Гущин Максим</h3>
              <p class="text-block__text">Профессиональный трейдер</p>
            </div>
          </div>
        </div>

        <!-- Шаг 3 — форма -->
        <div class="quiz__step form-wrapper">
          <div
            class="loader registration-form__loader form_loader_js d-none"
          ></div>
          <div class="quiz__step-left">
            <div class="form__step-left__top-wrap step-left__top-wrap">
              <h2 class="step-left__top-wrap__title">Последний шаг!</h2>
              <div class="step-left__top-wrap__text-wrap">
                <p>Введите контактные данные для получения консультации:</p>
              </div>
            </div>
            <form
              class="form _main-form contact-form freg thin rounded form_sub-wrap"
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
          <div class="quiz__step-right">
            <div class="quiz__step-right__top">
              <h2 class="quiz__step-right__top-title">01</h2>
              <p class="quiz__step-right__top-text">Бонус</p>
            </div>
            <div class="quiz__step-right__bottom">
              <p class="quiz__step-right__bottom-text">Получите в подарок</p>
              <p class="quiz__step-right__bottom-text">бесплатный чек-лист:</p>
              <p class="quiz__step-right__bottom-text">
                «Увеличиваем депозит безопасно:
              </p>
              <p class="quiz__step-right__bottom-text">план по приросту 30%</p>
              <p class="quiz__step-right__bottom-text">в месяц», а так</p>
              <p class="quiz__step-right__bottom-text">же личную</p>
              <p class="quiz__step-right__bottom-text">трейдера с опытом!</p>
            </div>
          </div>
        </div>

        <div class="quiz__step-bottom">
          <div class="step-bottom__progress">
            <div class="step-bottom__progress-inner"></div>
          </div>

          <button type="button" class="step-bottom__back">
            <img src="./images/arrow.svg" alt="" class="back__img" />
            <p class="back__text">Назад</p>
          </button>

          <div class="step-bottom__text-progress">
            <p><span>1 вопрос</span> из 3</p>
          </div>

          <button type="submit" class="step-bottom__forward">
            <p class="forward__text">Далее</p>
            <img
              src="./images/arrow.svg"
              alt=""
              class="forward__img"
              style="transform: rotate(180deg)"
            />
          </button>
        </div>
      </div>
    </div>
    <div id="cookie-banner">
      Этот сайт использует файлы cookie, чтобы обеспечить вам наилучшие
      впечатления.
      <button id="cookie-btn">Принять</button>
    </div>

    <script src="./js/cookie.js"></script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const steps = document.querySelectorAll(".quiz__step");
        const backBtn = document.querySelector(".step-bottom__back");
        const forwardBtn = document.querySelector(".step-bottom__forward");
        const progressText = document.querySelector(
          ".step-bottom__text-progress span"
        );
        const form = document.querySelector(".quiz-modal");

        let currentStep = 0;

        updateStep();
        setupRadios();
        updateNavButtons();

        function setupRadios() {
          const inputs = document.querySelectorAll(".radio-option__input");

          inputs.forEach((input) => {
            input.addEventListener("change", () => {
              const steps = document.querySelectorAll(".quiz__step");

              if (currentStep < steps.length - 1) {
                currentStep++;
                updateStep("forward");
                updateNavButtons();
              }

              if (currentStep === steps.length - 1) {
                forwardBtn.classList.add("submit_button_js");
              }
            });
          });
        }

        backBtn.addEventListener("click", (e) => {
          e.preventDefault();
          if (currentStep > 0) {
            currentStep--;
            updateStep("back");
            updateNavButtons();
          }

          if (forwardBtn.classList.contains("submit_button_js")) {
            forwardBtn.classList.remove("submit_button_js");
          }
        });

        function handleForwardClick(e) {
          e.preventDefault();

          const steps = document.querySelectorAll(".quiz__step");

          if (currentStep < steps.length - 1) {
            const currentRadios = steps[currentStep].querySelectorAll(
              ".radio-option__input"
            );
            const oneChecked = Array.from(currentRadios).some((r) => r.checked);
            if (!oneChecked) return;

            currentStep++;
            updateStep("forward");
            updateNavButtons();
            return;
          }

          if (currentStep === steps.length - 1) {
            forwardBtn.classList.add("submit_button_js");
            initializeFormHandlers();
          }
        }

        forwardBtn.addEventListener("click", handleForwardClick);

        function updateStep(direction = null) {
          const steps = document.querySelectorAll(".quiz__step");

          steps.forEach((step, i) => {
            step.classList.remove(
              "quiz__step--active",
              "quiz__step--hide-up",
              "quiz__step--hide-down"
            );
            if (i < currentStep) step.classList.add("quiz__step--hide-up");
            else if (i > currentStep)
              step.classList.add("quiz__step--hide-down");
          });

          steps[currentStep].classList.add("quiz__step--active");

          document
            .querySelector(".quiz-modal")
            .setAttribute("data-step", `0${currentStep + 1}`);
          animateProgressText(currentStep + 1);

          if (currentStep === steps.length - 1) {
            forwardBtn.removeEventListener("click", handleForwardClick);
            forwardBtn.classList.add("submit_button_js");
          } else {
            forwardBtn.addEventListener("click", handleForwardClick);
            forwardBtn.classList.remove("submit_button_js");
          }

          if (currentStep === steps.length - 1) {
            forwardBtn.remove();
            forwardBtn.querySelector(".forward__text").innerHTML = "Отправить";
          } else {
            forwardBtn.querySelector(".forward__text").textContent = "Далее";
          }
        }

        function updateNavButtons() {
          backBtn.disabled = currentStep === 0;

          const currentRadios = steps[currentStep].querySelectorAll(
            ".radio-option__input"
          );
          let hasChecked = false;
          currentRadios.forEach((r) => {
            if (r.checked) hasChecked = true;
          });

          if (currentStep < steps.length - 1) {
            forwardBtn.disabled = !hasChecked && currentStep !== 0;
          } else {
            forwardBtn.disabled = false;
          }
        }

        function animateProgressText(stepNumber) {
          const span = progressText;
          const total = steps.length;
          const newValue = `${stepNumber} вопрос`;

          span.classList.add("fade-out");
          setTimeout(() => {
            span.textContent = newValue;
            span.classList.remove("fade-out");
            span.classList.add("fade-in");
            setTimeout(() => {
              span.classList.remove("fade-in");
            }, 300);
          }, 200);

          const progress = document.querySelector(
            ".step-bottom__progress-inner"
          );
          const percent = (stepNumber / total) * 100;
          progress.style.width = `${percent}%`;
        }
      });

      const quizBtns = document.querySelectorAll(".quiz");
      const backdrop = document.querySelector(".backdrop");

      quizBtns.forEach((btn) => {
        btn.addEventListener("click", (e) => {
          e.preventDefault();
          backdrop.classList.remove("d-none");
        });
      });
    </script>
    <script src="loadAssets.js?v=3466"></script>

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
      window.onload = function () {
        var err = localStorage.getItem("unsuitable");
        var thx = localStorage.getItem("thanks");
        if (err && err === "false") {
          const fileErr = "err.html";
          window.location.href = `${fileErr}${window.location.search}`;
        } else if (thx && thx === "true") {
          const fileThx = "thanks-page.php";
          window.location.href = `${fileThx}${window.location.search}`;
        }
      };

      window.onpageshow = function () {
        var err = localStorage.getItem("unsuitable");
        var thx = localStorage.getItem("thanks");
        if (err && err === "false") {
          const fileErr = "err.html";
          window.location.href = `${fileErr}${window.location.search}`;
        } else if (thx && thx === "true") {
          const fileThx = "thanks-page.php";
          window.location.href = `${fileThx}${window.location.search}`;
        }
      };
    </script>
  </body>
</html>
