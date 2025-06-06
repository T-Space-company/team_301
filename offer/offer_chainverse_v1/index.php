<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--metatextblock-->
    <title>Курс по заработку на криптовалюте</title>
    <meta
      name="description"
      content="Бесплатный онлайн курс по заработку денег в криптовалюте от профессионалов "
    />
    <meta property="og:title" content="Курс по заработку на криптовалюте" />
    <meta
      property="og:description"
      content="Бесплатный онлайн курс по заработку денег в криптовалюте от профессионалов "
    />
    <meta property="og:type" content="website" />
    <!--/metatextblock-->
    <meta name="format-detection" content="telephone=no" />
    <meta http-equiv="x-dns-prefetch-control" content="on" />
    <link rel="dns-prefetch" href="https://ws.tildacdn.com" />
    <link rel="dns-prefetch" href="https://static.tildacdn.com" />
    <link
      rel="shortcut icon"
      href="images/tildafavicon.ico"
      type="image/x-icon"
    />
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
      href="css/tilda-blocks-page55632569.min.css"
      type="text/css"
      media="all"
      onerror="this.loaderr='y';"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&family=Inter:wght@300;400;500;600;700&subset=latin,cyrillic"
      rel="stylesheet"
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
      href="css/tilda-cover-1.0.min.css"
      type="text/css"
      media="all"
      onerror="this.loaderr='y';"
    />
    <link
      rel="stylesheet"
      href="css/tilda-quiz-form-1.0.min.css"
      type="text/css"
      media="all"
      onerror="this.loaderr='y';"
    />
    <link
      rel="stylesheet"
      href="css/tilda-forms-1.0.min.css"
      type="text/css"
      media="all"
      onerror="this.loaderr='y';"
    />
    <link
      rel="stylesheet"
      href="css/tilda-popup-1.1.min.css"
      type="text/css"
      media="print"
      onload="this.media='all';"
      onerror="this.loaderr='y';"
    />
    <link rel="stylesheet" href="./css/additional.css">
    <noscript
      ><link
        rel="stylesheet"
        href="https://static.tildacdn.com/css/tilda-popup-1.1.min.css"
        type="text/css"
        media="all"
    /></noscript>
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
      function t396_initialScale(t) {
        t = document.getElementById("rec" + t);
        if (t) {
          t = t.querySelector(".t396__artboard");
          if (t) {
            var e,
              r = document.documentElement.clientWidth,
              a = [];
            if ((i = t.getAttribute("data-artboard-screens")))
              for (var i = i.split(","), l = 0; l < i.length; l++)
                a[l] = parseInt(i[l], 10);
            else a = [320, 480, 640, 960, 1200];
            for (l = 0; l < a.length; l++) {
              var n = a[l];
              n <= r && (e = n);
            }
            var o =
                "edit" === window.allrecords.getAttribute("data-tilda-mode"),
              d = "center" === t396_getFieldValue(t, "valign", e, a),
              c = "grid" === t396_getFieldValue(t, "upscale", e, a),
              s = t396_getFieldValue(t, "height_vh", e, a),
              u = t396_getFieldValue(t, "height", e, a),
              g =
                (!!window.opr && !!window.opr.addons) ||
                !!window.opera ||
                -1 !== navigator.userAgent.indexOf(" OPR/");
            if (!o && d && !c && !s && u && !g) {
              for (
                var _ = parseFloat((r / e).toFixed(3)),
                  f = [
                    t,
                    t.querySelector(".t396__carrier"),
                    t.querySelector(".t396__filter"),
                  ],
                  l = 0;
                l < f.length;
                l++
              )
                f[l].style.height = Math.floor(parseInt(u, 10) * _) + "px";
              t396_scaleInitial__getElementsToScale(t).forEach(function (t) {
                t.style.zoom = _;
              });
            }
          }
        }
      }
      function t396_scaleInitial__getElementsToScale(t) {
        return t
          ? Array.prototype.slice.call(t.children).filter(function (t) {
              return (
                t &&
                (t.classList.contains("t396__elem") ||
                  t.classList.contains("t396__group"))
              );
            })
          : [];
      }
      function t396_getFieldValue(t, e, r, a) {
        var i = a[a.length - 1],
          l =
            r === i
              ? t.getAttribute("data-artboard-" + e)
              : t.getAttribute("data-artboard-" + e + "-res-" + r);
        if (!l)
          for (var n = 0; n < a.length; n++) {
            var o = a[n];
            if (
              !(o <= r) &&
              (l =
                o === i
                  ? t.getAttribute("data-artboard-" + e)
                  : t.getAttribute("data-artboard-" + e + "-res-" + o))
            )
              break;
          }
        return l;
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
      src="js/tilda-blocks-page55632569.min.js"
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
    <!-- <script
      src="js/tilda-forms-1.0.min.js"
      charset="utf-8"
      async=""
      onerror="this.loaderr='y';"
    ></script> -->
    <script
      src="js/tilda-cover-1.0.min.js"
      charset="utf-8"
      async=""
      onerror="this.loaderr='y';"
    ></script>
    <script
      src="js/tilda-step-manager-1.0.min.js"
      charset="utf-8"
      async=""
      onerror="this.loaderr='y';"
    ></script>
    <script
      src="js/tilda-quiz-form-1.0.min.js"
      charset="utf-8"
      async=""
      onerror="this.loaderr='y';"
    ></script>
    <script
      src="js/tilda-popup-1.0.min.js"
      charset="utf-8"
      async=""
      onerror="this.loaderr='y';"
    ></script>
    <script
      src="js/tilda-zero-forms-1.0.min.js"
      charset="utf-8"
      async=""
      onerror="this.loaderr='y';"
    ></script>
    <script
      src="js/tilda-animation-ext-1.0.min.js"
      charset="utf-8"
      async=""
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
    <script
      src="js/tilda-events-1.0.min.js"
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
            document.addEventListener("DOMContentLoaded", function(event) {
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
    <div
      id="allrecords"
      class="t-records t-records_animated t-records_visible"
      data-hook="blocks-collection-content-node"
      data-tilda-project-id="10739595"
      data-tilda-page-id="55632569"
      data-tilda-formskey="f420beec69d5afc8e66b18ad10739595"
      data-tilda-cookie="no"
      data-tilda-lazy="yes"
      data-tilda-root-zone="com"
      data-tilda-project-headcode="yes"
    >
      <div
        id="rec804829988"
        class="r t-rec t-rec_pt_0"
        style="padding-top: 0px"
        data-animationappear="off"
        data-record-type="396"
      >
        <!-- T396 -->
        <style>
          #rec804829988 .t396__artboard {
            height: 760px;
            background-color: #181818;
          }
          #rec804829988 .t396__filter {
            height: 760px;
          }
          #rec804829988 .t396__carrier {
            height: 760px;
            background-position: center center;
            background-attachment: scroll;
            background-size: cover;
            background-repeat: no-repeat;
          }
          @media screen and (max-width: 1199px) {
            #rec804829988 .t396__artboard,
            #rec804829988 .t396__filter,
            #rec804829988 .t396__carrier {
            }
            #rec804829988 .t396__filter {
            }
            #rec804829988 .t396__carrier {
              background-attachment: scroll;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804829988 .t396__artboard,
            #rec804829988 .t396__filter,
            #rec804829988 .t396__carrier {
            }
            #rec804829988 .t396__filter {
            }
            #rec804829988 .t396__carrier {
              background-attachment: scroll;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804829988 .t396__artboard,
            #rec804829988 .t396__filter,
            #rec804829988 .t396__carrier {
              height: 820px;
            }
            #rec804829988 .t396__filter {
            }
            #rec804829988 .t396__carrier {
              background-attachment: scroll;
            }
          }
          #rec804829988 .tn-elem[data-elem-id="1727691417383"] {
            color: #fff;
            z-index: 2;
            top: 41px;
            left: calc(50% - 600px + 20px);
            width: 161px;
            height: auto;
          }
          #rec804829988 .tn-elem[data-elem-id="1727691417383"] .tn-atom {
            color: #fff;
            font-size: 16px;
            font-family: "Inter", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 600;
            text-transform: uppercase;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
          }
          @media screen and (max-width: 959px) {
          }
          @media screen and (max-width: 639px) {
            #rec804829988 .tn-elem[data-elem-id="1727691417383"] {
              top: 31px;
              left: calc(50% - 160px + 10px);
              height: auto;
            }
          }
          #rec804829988 .tn-elem[data-elem-id="1727691547718"] {
            color: #fff;
            text-align: center;
            z-index: 3;
            top: 25px;
            left: calc(50% - 600px + 599px);
            width: 112px;
            height: 55px;
          }
          #rec804829988 .tn-elem[data-elem-id="1727691547718"] .tn-atom {
            color: #fff;
            font-size: 12px;
            font-family: "Inter", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            border-radius: 30px;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
            transition: background-color 0.2s ease-in-out,
              color 0.2s ease-in-out, border-color 0.2s ease-in-out;
          }
          @media screen and (max-width: 1199px) {
            #rec804829988 .tn-elem[data-elem-id="1727691547718"] {
              left: calc(50% - 480px + 289px);
            }
          }
          @media screen and (max-width: 959px) {
            #rec804829988 .tn-elem[data-elem-id="1727691547718"] {
              top: -147px;
              left: calc(50% - 320px + 70px);
            }
          }
          @media screen and (max-width: 639px) {
          }
          #rec804829988 .tn-elem[data-elem-id="1727691573886"] {
            color: #fff;
            text-align: center;
            z-index: 4;
            top: 25px;
            left: calc(50% - 600px + 529px);
            width: 56px;
            height: 55px;
          }
          #rec804829988 .tn-elem[data-elem-id="1727691573886"] .tn-atom {
            color: #fff;
            font-size: 12px;
            font-family: "Inter", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            border-radius: 30px;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
            transition: background-color 0.2s ease-in-out,
              color 0.2s ease-in-out, border-color 0.2s ease-in-out;
          }
          @media screen and (max-width: 1199px) {
            #rec804829988 .tn-elem[data-elem-id="1727691573886"] {
              left: calc(50% - 480px + 415px);
            }
          }
          @media screen and (max-width: 959px) {
            #rec804829988 .tn-elem[data-elem-id="1727691573886"] {
              top: -147px;
              left: calc(50% - 320px + 196px);
            }
          }
          @media screen and (max-width: 639px) {
          }
          #rec804829988 .tn-elem[data-elem-id="1727691583128"] {
            color: #000000;
            text-align: center;
            z-index: 5;
            top: 25px;
            left: calc(50% - 600px + 725px);
            width: 71px;
            height: 55px;
          }
          #rec804829988 .tn-elem[data-elem-id="1727691583128"] .tn-atom {
            color: #fff;
            font-size: 12px;
            font-family: "Inter", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            border-radius: 30px;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
            transition: background-color 0.2s ease-in-out,
              color 0.2s ease-in-out, border-color 0.2s ease-in-out;
          }
          @media screen and (max-width: 1199px) {
            #rec804829988 .tn-elem[data-elem-id="1727691583128"] {
              left: calc(50% - 480px + 485px);
            }
          }
          @media screen and (max-width: 959px) {
            #rec804829988 .tn-elem[data-elem-id="1727691583128"] {
              top: -147px;
              left: calc(50% - 320px + 266px);
            }
          }
          @media screen and (max-width: 639px) {
          }
          #rec804829988 .tn-elem[data-elem-id="1727691593383"] {
            color: #fff;
            text-align: center;
            z-index: 6;
            top: 25px;
            left: calc(50% - 600px + 810px);
            width: 58px;
            height: 55px;
          }
          #rec804829988 .tn-elem[data-elem-id="1727691593383"] .tn-atom {
            color: #fff;
            font-size: 12px;
            font-family: "Inter", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            border-radius: 30px;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
            transition: background-color 0.2s ease-in-out,
              color 0.2s ease-in-out, border-color 0.2s ease-in-out;
          }
          @media screen and (max-width: 1199px) {
            #rec804829988 .tn-elem[data-elem-id="1727691593383"] {
              left: calc(50% - 480px + 570px);
            }
          }
          @media screen and (max-width: 959px) {
            #rec804829988 .tn-elem[data-elem-id="1727691593383"] {
              top: -147px;
              left: calc(50% - 320px + 351px);
            }
          }
          @media screen and (max-width: 639px) {
          }
          #rec804829988 .tn-elem[data-elem-id="1727691600243"] {
            color: #fff;
            text-align: center;
            z-index: 7;
            top: 25px;
            left: calc(50% - 600px + 882px);
            width: 58px;
            height: 55px;
          }
          #rec804829988 .tn-elem[data-elem-id="1727691600243"] .tn-atom {
            color: #fff;
            font-size: 12px;
            font-family: "Inter", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            border-radius: 30px;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
            transition: background-color 0.2s ease-in-out,
              color 0.2s ease-in-out, border-color 0.2s ease-in-out;
          }
          @media screen and (max-width: 1199px) {
            #rec804829988 .tn-elem[data-elem-id="1727691600243"] {
              left: calc(50% - 480px + 642px);
            }
          }
          @media screen and (max-width: 959px) {
            #rec804829988 .tn-elem[data-elem-id="1727691600243"] {
              top: -147px;
              left: calc(50% - 320px + 423px);
            }
          }
          @media screen and (max-width: 639px) {
          }
          #rec804829988 .tn-elem[data-elem-id="1727691682010"] {
            color: #fff;
            text-align: center;
            z-index: 8;
            top: 33px;
            left: calc(50% - 600px + 980px);
            width: 200px;
            height: 42px;
          }
          #rec804829988 .tn-elem[data-elem-id="1727691682010"] .tn-atom {
            color: #fff;
            font-size: 11px;
            font-family: "Inter", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            border-width: 1px;
            border-radius: 12px;
            background-position: center center;
            border-color: #5555f6;
            border-style: solid;
            transition: background-color 0.2s ease-in-out,
              color 0.2s ease-in-out, border-color 0.2s ease-in-out;
          }
          @media screen and (max-width: 1199px) {
            #rec804829988 .tn-elem[data-elem-id="1727691682010"] {
              left: calc(50% - 480px + 740px);
            }
          }
          @media screen and (max-width: 959px) {
            #rec804829988 .tn-elem[data-elem-id="1727691682010"] {
              top: 30px;
              left: calc(50% - 320px + 430px);
            }
          }
          @media screen and (max-width: 639px) {
            #rec804829988 .tn-elem[data-elem-id="1727691682010"] {
              top: -219px;
              left: calc(50% - 160px + 130px);
            }
          }
          #rec804829988 .tn-elem[data-elem-id="1727691741007"] {
            color: #fff;
            z-index: 9;
            top: 172px;
            left: calc(50% - 600px + 18px);
            width: 391px;
            height: auto;
          }
          #rec804829988 .tn-elem[data-elem-id="1727691741007"] .tn-atom {
            color: #fff;
            font-size: 42px;
            font-family: "Montserrat", Arial, sans-serif;
            line-height: 1;
            font-weight: 500;
            letter-spacing: -1px;
            text-transform: uppercase;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
          }
          @media screen and (max-width: 959px) {
          }
          @media screen and (max-width: 639px) {
            #rec804829988 .tn-elem[data-elem-id="1727691741007"] {
              top: 85px;
              left: calc(50% - 160px + 10px);
              width: 289px;
              height: auto;
            }
            #rec804829988 .tn-elem[data-elem-id="1727691741007"] .tn-atom {
              font-size: 23px;
              line-height: 1.15;
              background-size: cover;
            }
          }
          #rec804829988 .tn-elem[data-elem-id="1727691895500"] {
            color: #fff;
            z-index: 10;
            top: 305px;
            left: calc(50% - 600px + 20px);
            width: 340px;
            height: auto;
          }
          #rec804829988 .tn-elem[data-elem-id="1727691895500"] .tn-atom {
            color: #fff;
            font-size: 12px;
            font-family: "Inter", Arial, sans-serif;
            line-height: 1.4;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
          }
          @media screen and (max-width: 959px) {
          }
          @media screen and (max-width: 639px) {
            #rec804829988 .tn-elem[data-elem-id="1727691895500"] {
              top: 166px;
              left: calc(50% - 160px + 9px);
              width: 300px;
              height: auto;
            }
            #rec804829988 .tn-elem[data-elem-id="1727691895500"] .tn-atom {
              font-size: 11px;
              background-size: cover;
            }
          }
          #rec804829988 .tn-elem[data-elem-id="1727692810004"] {
            z-index: 11;
            top: 481px;
            left: calc(50% - 600px + 543px);
            width: 1651px;
            height: auto;
          }
          #rec804829988 .tn-elem[data-elem-id="1727692810004"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          #rec804829988 .tn-elem[data-elem-id="1727692810004"] .tn-atom__img {
          }
          @media screen and (max-width: 1199px) {
          }
          @media screen and (max-width: 959px) {
            #rec804829988 .tn-elem[data-elem-id="1727692810004"] {
              top: 568px;
              left: calc(50% - 320px + 259px);
              height: auto;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804829988 .tn-elem[data-elem-id="1727692810004"] {
              top: 661px;
              left: calc(50% - 160px + 90px);
              width: 789px;
              height: auto;
            }
          }
          #rec804829988 .tn-elem[data-elem-id="1727693125165"] {
            z-index: 12;
            top: 440px;
            left: calc(50% - 600px + 648px);
            width: 164px;
            height: auto;
          }
          #rec804829988 .tn-elem[data-elem-id="1727693125165"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          #rec804829988 .tn-elem[data-elem-id="1727693125165"] .tn-atom__img {
          }
          @media screen and (max-width: 1199px) {
          }
          @media screen and (max-width: 959px) {
            #rec804829988 .tn-elem[data-elem-id="1727693125165"] {
              top: 308px;
              left: calc(50% - 320px + 359px);
              width: 144px;
              height: auto;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804829988 .tn-elem[data-elem-id="1727693125165"] {
              top: 476px;
              left: calc(50% - 160px + 70px);
              width: 111px;
              height: auto;
            }
          }
          #rec804829988 .tn-elem[data-elem-id="1727693011751"] {
            z-index: 13;
            top: 470px;
            left: calc(50% - 600px + 1080px);
            width: 195px;
            height: auto;
          }
          #rec804829988 .tn-elem[data-elem-id="1727693011751"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          #rec804829988 .tn-elem[data-elem-id="1727693011751"] .tn-atom__img {
          }
          @media screen and (max-width: 1199px) {
          }
          @media screen and (max-width: 959px) {
            #rec804829988 .tn-elem[data-elem-id="1727693011751"] {
              top: 426px;
              left: calc(50% - 320px + 170px);
              height: auto;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804829988 .tn-elem[data-elem-id="1727693011751"] {
              top: 630px;
              left: calc(50% - 160px + 213px);
              width: 97px;
              height: auto;
            }
          }
          #rec804829988 .tn-elem[data-elem-id="1727692946198"] {
            z-index: 14;
            top: 202px;
            left: calc(50% - 600px + 1107px);
            width: 107px;
            height: auto;
          }
          #rec804829988 .tn-elem[data-elem-id="1727692946198"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          #rec804829988 .tn-elem[data-elem-id="1727692946198"] .tn-atom__img {
          }
          @media screen and (max-width: 1199px) {
          }
          @media screen and (max-width: 959px) {
            #rec804829988 .tn-elem[data-elem-id="1727692946198"] {
              top: 256px;
              left: calc(50% - 320px + 503px);
              height: auto;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804829988 .tn-elem[data-elem-id="1727692946198"] {
              top: 519px;
              left: calc(50% - 160px + 240px);
              width: 51px;
              height: auto;
            }
          }
          #rec804829988 .tn-elem[data-elem-id="1727693188357"] {
            z-index: 15;
            top: 220px;
            left: calc(50% - 600px + 980px);
            width: 96px;
            height: auto;
          }
          #rec804829988 .tn-elem[data-elem-id="1727693188357"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          #rec804829988 .tn-elem[data-elem-id="1727693188357"] .tn-atom__img {
          }
          @media screen and (max-width: 1199px) {
          }
          @media screen and (max-width: 959px) {
            #rec804829988 .tn-elem[data-elem-id="1727693188357"] {
              top: 467px;
              left: calc(50% - 320px + 454px);
              height: auto;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804829988 .tn-elem[data-elem-id="1727693188357"] {
              top: 596px;
              left: calc(50% - 160px + 36px);
              width: 60px;
              height: auto;
            }
          }
          #rec804829988 .tn-elem[data-elem-id="1727692824188"] {
            z-index: 35;
            top: 257px;
            left: calc(50% - 600px + 620px);
            width: 360px;
            height: auto;
          }
          @media (min-width: 1200px) {
            #rec804829988
              .tn-elem.t396__elem--anim-hidden[data-elem-id="1727692824188"] {
              opacity: 0;
            }
          }
          #rec804829988 .tn-elem[data-elem-id="1727692824188"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          #rec804829988 .tn-elem[data-elem-id="1727692824188"] .tn-atom {
            -webkit-transform: rotate(358deg);
            -moz-transform: rotate(358deg);
            transform: rotate(358deg);
          }
          #rec804829988 .tn-elem[data-elem-id="1727692824188"] .tn-atom__img {
          }
          @media screen and (max-width: 1199px) {
          }
          @media screen and (max-width: 959px) {
            #rec804829988 .tn-elem[data-elem-id="1727692824188"] {
              top: 393px;
              left: calc(50% - 320px + 336px);
              height: auto;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804829988 .tn-elem[data-elem-id="1727692824188"] {
              top: 550px;
              left: calc(50% - 160px + 96px);
              width: 175px;
              height: auto;
            }
          }
          #rec804829988 .tn-elem[data-elem-id="1727693092521"] {
            z-index: 17;
            top: 518px;
            left: calc(50% - 600px + 410px);
            width: 133px;
            height: auto;
          }
          #rec804829988 .tn-elem[data-elem-id="1727693092521"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          #rec804829988 .tn-elem[data-elem-id="1727693092521"] .tn-atom__img {
          }
          @media screen and (max-width: 1199px) {
          }
          @media screen and (max-width: 959px) {
            #rec804829988 .tn-elem[data-elem-id="1727693092521"] {
              top: 620px;
              left: calc(50% - 320px + 126px);
              height: auto;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804829988 .tn-elem[data-elem-id="1727693092521"] {
              top: 668px;
              left: calc(50% - 160px + 0px);
              width: 55px;
              height: auto;
            }
          }
          #rec804829988 .tn-elem[data-elem-id="1727693157040"] {
            z-index: 18;
            top: 135px;
            left: calc(50% - 600px + 755px);
            width: 165px;
            height: auto;
          }
          #rec804829988 .tn-elem[data-elem-id="1727693157040"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          #rec804829988 .tn-elem[data-elem-id="1727693157040"] .tn-atom__img {
          }
          @media screen and (max-width: 1199px) {
          }
          @media screen and (max-width: 959px) {
            #rec804829988 .tn-elem[data-elem-id="1727693157040"] {
              top: 118px;
              left: calc(50% - 320px + 429px);
              height: auto;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804829988 .tn-elem[data-elem-id="1727693157040"] {
              top: 130px;
              left: calc(50% - 160px + 224px);
              width: 65px;
              height: auto;
            }
          }
          #rec804829988 .tn-elem[data-elem-id="1727693237423"] {
            z-index: 19;
            top: 81px;
            left: calc(50% - 600px + -197px);
            width: 128px;
            height: auto;
          }
          #rec804829988 .tn-elem[data-elem-id="1727693237423"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          #rec804829988 .tn-elem[data-elem-id="1727693237423"] .tn-atom__img {
          }
          @media screen and (max-width: 1199px) {
          }
          @media screen and (max-width: 959px) {
          }
          @media screen and (max-width: 639px) {
            #rec804829988 .tn-elem[data-elem-id="1727693237423"] {
              top: 551px;
              left: calc(50% - 160px + 17px);
              width: 55px;
              height: auto;
            }
          }
          #rec804829988 .tn-elem[data-elem-id="1727693327662"] {
            color: #ffffff;
            text-align: center;
            z-index: 20;
            top: 565px;
            left: calc(50% - 600px + 27px);
            width: 275px;
            height: 65px;
          }
          #rec804829988 .tn-elem[data-elem-id="1727693327662"] .tn-atom {
            color: #ffffff;
            font-size: 13px;
            font-family: "Inter", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 500;
            border-width: 1px;
            border-radius: 12px;
            background-color: #5555f6;
            background-position: center center;
            border-color: #5555f6;
            border-style: solid;
            transition: background-color 0.2s ease-in-out,
              color 0.2s ease-in-out, border-color 0.2s ease-in-out;
          }
          @media screen and (max-width: 1199px) {
            #rec804829988 .tn-elem[data-elem-id="1727693327662"] {
              top: 577px;
              left: calc(50% - 480px + 19px);
            }
          }
          @media screen and (max-width: 959px) {
            #rec804829988 .tn-elem[data-elem-id="1727693327662"] {
              top: 384px;
              left: calc(50% - 320px + 18px);
            }
          }
          @media screen and (max-width: 639px) {
            #rec804829988 .tn-elem[data-elem-id="1727693327662"] {
              top: 365px;
              left: calc(50% - 160px + 10px);
              width: 300px;
            }
          }
          #rec804829988 .tn-elem[data-elem-id="1727696232714"] {
            z-index: 21;
            top: 169px;
            left: calc(50% - 600px + -173px);
            width: 73px;
            height: auto;
          }
          #rec804829988 .tn-elem[data-elem-id="1727696232714"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          #rec804829988 .tn-elem[data-elem-id="1727696232714"] .tn-atom__img {
          }
          @media screen and (max-width: 1199px) {
          }
          @media screen and (max-width: 959px) {
            #rec804829988 .tn-elem[data-elem-id="1727696232714"] {
              top: 620px;
              left: calc(50% - 320px + 126px);
              height: auto;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804829988 .tn-elem[data-elem-id="1727696232714"] {
              top: 668px;
              left: calc(50% - 160px + 0px);
              width: 55px;
              height: auto;
            }
          }
          #rec804829988 .tn-elem[data-elem-id="1727702141318"] {
            color: #fff;
            z-index: 22;
            top: 380px;
            left: calc(50% - 600px + 20px);
            width: 340px;
            height: auto;
          }
          #rec804829988 .tn-elem[data-elem-id="1727702141318"] .tn-atom {
            color: #fff;
            font-size: 14px;
            font-family: "Inter", Arial, sans-serif;
            line-height: 1.4;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804829988 .tn-elem[data-elem-id="1727702141318"] {
              top: 380px;
              height: auto;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804829988 .tn-elem[data-elem-id="1727702141318"] {
              top: 892px;
              left: calc(50% - 320px + 943px);
              height: auto;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804829988 .tn-elem[data-elem-id="1727702141318"] {
              top: 227px;
              left: calc(50% - 160px + 10px);
              width: 300px;
              height: auto;
            }
            #rec804829988 .tn-elem[data-elem-id="1727702141318"] .tn-atom {
              font-size: 11px;
              background-size: cover;
            }
          }
          #rec804829988 .tn-elem[data-elem-id="1727702212130"] {
            color: #fff;
            text-align: center;
            z-index: 23;
            top: 480px;
            left: calc(50% - 600px + 21px);
            width: 59px;
            height: auto;
          }
          #rec804829988 .tn-elem[data-elem-id="1727702212130"] .tn-atom {
            color: #fff;
            font-size: 12px;
            font-family: "Inter", Arial, sans-serif;
            line-height: 1.4;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804829988 .tn-elem[data-elem-id="1727702212130"] {
              top: 499px;
              left: calc(50% - 480px + 9px);
              height: auto;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804829988 .tn-elem[data-elem-id="1727702212130"] {
              top: 1147px;
              left: calc(50% - 320px + 209px);
              height: auto;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804829988 .tn-elem[data-elem-id="1727702212130"] {
              top: 310px;
              left: calc(50% - 160px + 7px);
              width: 72px;
              height: auto;
            }
            #rec804829988 .tn-elem[data-elem-id="1727702212130"] .tn-atom {
              font-size: 11px;
              background-size: cover;
            }
          }
          #rec804829988 .tn-elem[data-elem-id="1727702275309"] {
            color: #fff;
            text-align: center;
            z-index: 24;
            top: 480px;
            left: calc(50% - 600px + 107px);
            width: 59px;
            height: auto;
          }
          #rec804829988 .tn-elem[data-elem-id="1727702275309"] .tn-atom {
            color: #fff;
            font-size: 12px;
            font-family: "Inter", Arial, sans-serif;
            line-height: 1.4;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804829988 .tn-elem[data-elem-id="1727702275309"] {
              top: 499px;
              left: calc(50% - 480px + 92px);
              height: auto;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804829988 .tn-elem[data-elem-id="1727702275309"] {
              top: 1157pxpx;
              left: calc(50% - 320px + 219pxpx);
              height: auto;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804829988 .tn-elem[data-elem-id="1727702275309"] {
              top: 310px;
              left: calc(50% - 160px + 77px);
              width: 72px;
              height: auto;
            }
            #rec804829988 .tn-elem[data-elem-id="1727702275309"] .tn-atom {
              font-size: 11px;
              background-size: cover;
            }
          }
          #rec804829988 .tn-elem[data-elem-id="1727702292058"] {
            color: #fff;
            text-align: center;
            z-index: 25;
            top: 480px;
            left: calc(50% - 600px + 197px);
            width: 59px;
            height: auto;
          }fff
          #rec804829988 .tn-elem[data-elem-id="1727702292058"] .tn-atom {
            color: #fff;
            font-size: 12px;
            font-family: "Inter", Arial, sans-serif;
            line-height: 1.4;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804829988 .tn-elem[data-elem-id="1727702292058"] {
              top: 499px;
              left: calc(50% - 480px + 188px);
              height: auto;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804829988 .tn-elem[data-elem-id="1727702292058"] {
              top: 1167pxpx;
              left: calc(50% - 320px + 229pxpx);
              height: auto;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804829988 .tn-elem[data-elem-id="1727702292058"] {
              top: 310px;
              left: calc(50% - 160px + 157px);
              width: 72px;
              height: auto;
            }
            #rec804829988 .tn-elem[data-elem-id="1727702292058"] .tn-atom {
              font-size: 11px;
              background-size: cover;
            }
          }
          #rec804829988 .tn-elem[data-elem-id="1727702307090"] {
            color: #fff;
            text-align: center;
            z-index: 26;
            top: 480px;
            left: calc(50% - 600px + 284px);
            width: 59px;
            height: auto;
          }
          #rec804829988 .tn-elem[data-elem-id="1727702307090"] .tn-atom {
            color: #fff;
            font-size: 12px;
            font-family: "Inter", Arial, sans-serif;
            line-height: 1.4;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804829988 .tn-elem[data-elem-id="1727702307090"] {
              top: 499px;
              left: calc(50% - 480px + 291px);
              height: auto;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804829988 .tn-elem[data-elem-id="1727702307090"] {
              top: 1177pxpx;
              left: calc(50% - 320px + 239pxpx);
              height: auto;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804829988 .tn-elem[data-elem-id="1727702307090"] {
              top: 310px;
              left: calc(50% - 160px + 248px);
              width: 72px;
              height: auto;
            }
            #rec804829988 .tn-elem[data-elem-id="1727702307090"] .tn-atom {
              font-size: 11px;
              background-size: cover;
            }
          }
          #rec804829988 .tn-elem[data-elem-id="1728048315101"] {
            color: #fff;
            z-index: 27;
            top: 407px;
            left: calc(50% - 600px + 36px);
            width: 540px;
            height: auto;
          }
          #rec804829988 .tn-elem[data-elem-id="1728048315101"] .tn-atom {
            color: #fff;
            font-size: 47px;
            font-family: "Inter", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 300;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804829988 .tn-elem[data-elem-id="1728048315101"] {
              top: 426px;
              left: calc(50% - 480px + 21px);
              width: 329px;
              height: auto;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804829988 .tn-elem[data-elem-id="1728048315101"] {
              top: 600px;
              left: calc(50% - 320px + -386px);
              height: auto;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804829988 .tn-elem[data-elem-id="1728048315101"] {
              top: 246px;
              left: calc(50% - 160px + 23px);
              width: 380px;
              height: auto;
            }
            #rec804829988 .tn-elem[data-elem-id="1728048315101"] .tn-atom {
              font-size: 41px;
              background-size: cover;
            }
          }
        </style>
        <div class="t396">
          <div
            class="t396__artboard"
            data-artboard-recid="804829988"
            data-artboard-screens="320,640,960,1200"
            data-artboard-height="660"
            data-artboard-valign="center"
            data-artboard-upscale="grid"
            data-artboard-height-res-320="660"
            data-artboard-upscale-res-320="window"
          >
            <div class="t396__carrier" data-artboard-recid="804829988"></div>
            <div class="t396__filter" data-artboard-recid="804829988"></div>
            <div
              class="t396__elem tn-elem tn-elem__8048299881727691417383"
              data-elem-id="1727691417383"
              data-elem-type="text"
              data-field-top-value="41"
              data-field-left-value="20"
              data-field-width-value="161"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-field-top-res-320-value="31"
              data-field-left-res-320-value="10"
            >
              <div class="tn-atom" field="tn_text_1727691417383">
                Chainverse
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__8048299881727691547718"
              data-elem-id="1727691547718"
              data-elem-type="button"
              data-field-top-value="25"
              data-field-left-value="599"
              data-field-height-value="55"
              data-field-width-value="112"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value="px"
              data-field-widthunits-value="px"
              data-field-top-res-640-value="-147"
              data-field-left-res-640-value="70"
              data-field-left-res-960-value="289"
            >
              <a class="tn-atom" href="#2">Программа курса</a>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__8048299881727691573886"
              data-elem-id="1727691573886"
              data-elem-type="button"
              data-field-top-value="25"
              data-field-left-value="529"
              data-field-height-value="55"
              data-field-width-value="56"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value="px"
              data-field-widthunits-value="px"
              data-field-top-res-640-value="-147"
              data-field-left-res-640-value="196"
              data-field-left-res-960-value="415"
            >
              <a class="tn-atom" href="#1">Для кого</a>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__8048299881727691583128"
              data-elem-id="1727691583128"
              data-elem-type="button"
              data-field-top-value="25"
              data-field-left-value="725"
              data-field-height-value="55"
              data-field-width-value="71"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value="px"
              data-field-widthunits-value="px"
              data-field-top-res-640-value="-147"
              data-field-left-res-640-value="266"
              data-field-left-res-960-value="485"
            >
              <a class="tn-atom" href="#3">О академии</a>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__8048299881727691593383"
              data-elem-id="1727691593383"
              data-elem-type="button"
              data-field-top-value="25"
              data-field-left-value="810"
              data-field-height-value="55"
              data-field-width-value="58"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value="px"
              data-field-widthunits-value="px"
              data-field-top-res-640-value="-147"
              data-field-left-res-640-value="351"
              data-field-left-res-960-value="570"
            >
              <a class="tn-atom" href="#4">Спикеры</a>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__8048299881727691600243"
              data-elem-id="1727691600243"
              data-elem-type="button"
              data-field-top-value="25"
              data-field-left-value="882"
              data-field-height-value="55"
              data-field-width-value="58"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value="px"
              data-field-widthunits-value="px"
              data-field-top-res-640-value="-147"
              data-field-left-res-640-value="423"
              data-field-left-res-960-value="642"
            >
              <a class="tn-atom" href="#5">Вопросы</a>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__8048299881727691682010"
              data-elem-id="1727691682010"
              data-elem-type="button"
              data-field-top-value="33"
              data-field-left-value="980"
              data-field-height-value="42"
              data-field-width-value="200"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value="px"
              data-field-widthunits-value="px"
              data-field-top-res-320-value="-219"
              data-field-left-res-320-value="130"
              data-field-top-res-640-value="30"
              data-field-left-res-640-value="430"
              data-field-left-res-960-value="740"
            >
              <a class="tn-atom" href="#form-wrap">Оставить заявку</a>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__8048299881727691741007"
              data-elem-id="1727691741007"
              data-elem-type="text"
              data-field-top-value="172"
              data-field-left-value="18"
              data-field-width-value="550"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-field-top-res-320-value="85"
              data-field-left-res-320-value="10"
              data-field-width-res-320-value="289"
            >
              <div class="tn-atom" field="tn_text_1727691741007">
                УЧИТЕСЬ <br> ИНВЕСТИРОВАТЬ  <br><strong>В КРИПТОВАЛЮТЫ</strong>
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__8048299881727691895500"
              data-elem-id="1727691895500"
              data-elem-type="text"
              data-field-top-value="305"
              data-field-left-value="20"
              data-field-width-value="340"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-field-top-res-320-value="166"
              data-field-left-res-320-value="9"
              data-field-width-res-320-value="300"
            >
              <div class="tn-atom" field="tn_text_1727691895500">
                Профессиональный курс по инвестиции в криптовалюту. Помогаем
                разобраться в технологиях криптовалют и учим безопасно ими
                пользоваться
              </div>
            </div>
            <!-- <div
              class="t396__elem tn-elem tn-elem__8048299881727692810004"
              data-elem-id="1727692810004"
              data-elem-type="image"
              data-field-top-value="481"
              data-field-left-value="543"
              data-field-width-value="1651"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-field-filewidth-value="2157"
              data-field-fileheight-value="225"
              data-field-top-res-320-value="661"
              data-field-left-res-320-value="90"
              data-field-width-res-320-value="789"
              data-field-top-res-640-value="568"
              data-field-left-res-640-value="259"
            >
              <div class="tn-atom">
                <img
                  class="tn-atom__img t-img"
                  data-original="https://static.tildacdn.com/tild3138-3161-4665-b433-323934623062/Rectangle_4.svg"
                  src="images/Rectangle_4.svg"
                  alt=""
                  imgfield="tn_img_1727692810004"
                />
              </div>
            </div> -->
            <!-- <div
              class="t396__elem tn-elem tn-elem__8048299881727693125165"
              data-elem-id="1727693125165"
              data-elem-type="image"
              data-field-top-value="440"
              data-field-left-value="648"
              data-field-width-value="164"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-prx="mouse"
              data-animate-prx-dx="10"
              data-animate-prx-dy="10"
              data-field-filewidth-value="164"
              data-field-fileheight-value="65"
              data-field-top-res-320-value="476"
              data-field-left-res-320-value="70"
              data-field-width-res-320-value="111"
              data-field-top-res-640-value="308"
              data-field-left-res-640-value="359"
              data-field-width-res-640-value="144"
            >
              <div class="tn-atom">
                <img
                  class="tn-atom__img t-img"
                  data-original="https://static.tildacdn.com/tild3232-3066-4138-b332-353037666232/image_4-4.png"
                  src="images/image_4-4.png"
                  alt=""
                  imgfield="tn_img_1727693125165"
                />
              </div>
            </div> -->
            <div
              class="t396__elem tn-elem tn-elem__8048299881727693011751"
              data-elem-id="1727693011751"
              data-elem-type="image"
              data-field-top-value="390"
              data-field-left-value="740"
              data-field-width-value="420"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-prx="mouse"
              data-animate-prx-dx="30"
              data-animate-prx-dy="30"
              data-field-filewidth-value="245"
              data-field-fileheight-value="201"
              data-field-top-res-320-value="500"
              data-field-left-res-320-value="120"
              data-field-width-res-320-value="200"
              data-field-top-res-640-value="500"
              data-field-left-res-640-value="120"
            >
              <div class="tn-atom">
                <img
                  class="tn-atom__img t-img"
                  data-original="./images/image_4-2.png"
                  src="images/image_4-2.png"
                  alt=""
                  imgfield="tn_img_1727693011751"
                />
              </div>
            </div>
            <!-- <div
              class="t396__elem tn-elem tn-elem__8048299881727692946198"
              data-elem-id="1727692946198"
              data-elem-type="image"
              data-field-top-value="202"
              data-field-left-value="1107"
              data-field-width-value="107"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-prx="mouse"
              data-animate-prx-dx="30"
              data-animate-prx-dy="30"
              data-field-filewidth-value="131"
              data-field-fileheight-value="143"
              data-field-top-res-320-value="519"
              data-field-left-res-320-value="240"
              data-field-width-res-320-value="51"
              data-field-top-res-640-value="256"
              data-field-left-res-640-value="503"
            >
              <div class="tn-atom">
                <img
                  class="tn-atom__img t-img"
                  data-original="https://static.tildacdn.com/tild3634-6130-4939-a339-663536326337/image_4-1.png"
                  src="images/image_4-1.png"
                  alt=""
                  imgfield="tn_img_1727692946198"
                />
              </div>
            </div> -->
            <!-- <div
              class="t396__elem tn-elem tn-elem__8048299881727693188357"
              data-elem-id="1727693188357"
              data-elem-type="image"
              data-field-top-value="220"
              data-field-left-value="980"
              data-field-width-value="96"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-field-filewidth-value="96"
              data-field-fileheight-value="73"
              data-field-top-res-320-value="596"
              data-field-left-res-320-value="36"
              data-field-width-res-320-value="60"
              data-field-top-res-640-value="467"
              data-field-left-res-640-value="454"
            >
              <div class="tn-atom">
                <img
                  class="tn-atom__img t-img"
                  data-original="https://static.tildacdn.com/tild3536-3430-4061-b939-613636613332/image_4-6.png"
                  src="images/image_4-6.png"
                  alt=""
                  imgfield="tn_img_1727693188357"
                />
              </div>
            </div> -->
            <div
              class="t396__elem tn-elem tn-elem__8048299881727692824188"
              data-elem-id="1727692824188"
              data-elem-type="image"
              data-field-top-value="200"
              data-field-left-value="600"
              data-field-width-value="460"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-sbs-event="intoview"
              data-animate-sbs-trg="1"
              data-animate-sbs-trgofst="0"
              data-animate-sbs-loop="loopwithreverse"
              data-animate-sbs-opts="[{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'ti':0,'ea':'0','dt':0},{'mx':0,'my':-30,'sx':1,'sy':1,'op':1,'ro':0,'ti':5000,'ea':'0','dt':0}]"
              data-field-filewidth-value="369"
              data-field-fileheight-value="356"
              data-field-top-res-320-value="410"
              data-field-left-res-320-value="80"
              data-field-width-res-320-value="175"
              data-field-top-res-640-value="393"
              data-field-left-res-640-value="336"
            >
              <div class="tn-atom">
                <img
                  class="tn-atom__img t-img"
                  data-original="images/Layer_1_1.png"
                  src="images/Layer_1_1.png"
                  alt=""
                  imgfield="tn_img_1727692824188"
                />
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__8048299881727693092521"
              data-elem-id="1727693092521"
              data-elem-type="image"
              data-field-top-value="318"
              data-field-left-value="210"
              data-field-width-value="700"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-prx="mouse"
              data-animate-prx-dx="30"
              data-animate-prx-dy="30"
              data-field-filewidth-value="172"
              data-field-fileheight-value="122"
              data-field-top-res-320-value="500"
              data-field-left-res-320-value="-50"
              data-field-width-res-320-value="280"
              data-field-top-res-640-value="500"
              data-field-left-res-640-value="-50"
            >
              <div class="tn-atom">
                <img
                  class="tn-atom__img t-img"
                  data-original="./images/image_4-3.png"
                  src="images/image_4-3.png"
                  alt=""
                  imgfield="tn_img_1727693092521"
                />
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__8048299881727693157040"
              data-elem-id="1727693157040"
              data-elem-type="image"
              data-field-top-value="105"
              data-field-left-value="555"
              data-field-width-value="330"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-prx="mouse"
              data-animate-prx-dx="10"
              data-animate-prx-dy="10"
              data-field-filewidth-value="165"
              data-field-fileheight-value="78"
              data-field-top-res-320-value="370"
              data-field-left-res-320-value="50"
              data-field-width-res-320-value="145"
              data-field-top-res-640-value="370"
              data-field-left-res-640-value="50"
            >
              <div class="tn-atom">
                <img
                  class="tn-atom__img t-img"
                  data-original="images/image_4-5.png"
                  src="images/image_4-5.png"
                  alt=""
                  imgfield="tn_img_1727693157040"
                />
              </div>
            </div>
            <!-- <div
              class="t396__elem tn-elem tn-elem__8048299881727693237423"
              data-elem-id="1727693237423"
              data-elem-type="image"
              data-field-top-value="81"
              data-field-left-value="-197"
              data-field-width-value="128"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-prx="mouse"
              data-animate-prx-dx="30"
              data-animate-prx-dy="30"
              data-field-filewidth-value="128"
              data-field-fileheight-value="88"
              data-field-top-res-320-value="551"
              data-field-left-res-320-value="17"
              data-field-width-res-320-value="55"
            >
              <div class="tn-atom">
                <img
                  class="tn-atom__img t-img"
                  data-original="https://static.tildacdn.com/tild6331-6365-4435-a633-633735613238/image_4.png"
                  src="images/image_4.png"
                  alt=""
                  imgfield="tn_img_1727693237423"
                />
              </div>
            </div> -->
            <div
              class="t396__elem tn-elem tn-elem__8048299881727693327662"
              data-elem-id="1727693327662"
              data-elem-type="button"
              data-field-top-value="565"
              data-field-left-value="27"
              data-field-height-value="65"
              data-field-width-value="275"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value="px"
              data-field-widthunits-value="px"
              data-field-top-res-320-value="300"
              data-field-left-res-320-value="10"
              data-field-width-res-320-value="300"
              data-field-top-res-640-value="384"
              data-field-left-res-640-value="18"
              data-field-top-res-960-value="577"
              data-field-left-res-960-value="19"
            >
              <a class="tn-atom" href="#form-wrap">Участвовать бесплатно</a>
            </div>
            <!-- <div
              class="t396__elem tn-elem tn-elem__8048299881727696232714"
              data-elem-id="1727696232714"
              data-elem-type="image"
              data-field-top-value="169"
              data-field-left-value="-173"
              data-field-width-value="73"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-prx="mouse"
              data-animate-prx-dx="30"
              data-animate-prx-dy="30"
              data-field-filewidth-value="172"
              data-field-fileheight-value="122"
              data-field-top-res-320-value="668"
              data-field-left-res-320-value="0"
              data-field-width-res-320-value="55"
              data-field-top-res-640-value="620"
              data-field-left-res-640-value="126"
            >
              <div class="tn-atom">
                <img
                  class="tn-atom__img t-img"
                  data-original="https://static.tildacdn.com/tild6561-6436-4133-a364-376530303166/image_4-3.png"
                  src="images/image_4-3.png"
                  alt=""
                  imgfield="tn_img_1727696232714"
                />
              </div>
            </div> -->
            <!-- <div
              class="t396__elem tn-elem tn-elem__8048299881727702141318"
              data-elem-id="1727702141318"
              data-elem-type="text"
              data-field-top-value="380"
              data-field-left-value="20"
              data-field-width-value="340"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-field-top-res-320-value="227"
              data-field-left-res-320-value="10"
              data-field-width-res-320-value="300"
              data-field-top-res-640-value="892"
              data-field-left-res-640-value="943"
              data-field-top-res-960-value="380"
            >
              <div class="tn-atom" field="tn_text_1727702141318">
                СТАРТ КУРСА ЧЕРЕЗ:
              </div>
            </div> -->
            <!-- <div
              class="t396__elem tn-elem tn-elem__8048299881727702212130"
              data-elem-id="1727702212130"
              data-elem-type="text"
              data-field-top-value="480"
              data-field-left-value="21"
              data-field-width-value="59"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-field-top-res-320-value="310"
              data-field-left-res-320-value="7"
              data-field-width-res-320-value="72"
              data-field-top-res-640-value="1147"
              data-field-left-res-640-value="209"
              data-field-top-res-960-value="499"
              data-field-left-res-960-value="9"
            >
              <div class="tn-atom" field="tn_text_1727702212130">дней</div>
            </div> -->
            <!-- <div
              class="t396__elem tn-elem tn-elem__8048299881727702275309"
              data-elem-id="1727702275309"
              data-elem-type="text"
              data-field-top-value="480"
              data-field-left-value="107"
              data-field-width-value="59"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-field-top-res-320-value="310"
              data-field-left-res-320-value="77"
              data-field-width-res-320-value="72"
              data-field-top-res-640-value="1157px"
              data-field-left-res-640-value="219px"
              data-field-top-res-960-value="499"
              data-field-left-res-960-value="92"
            >
              <div class="tn-atom" field="tn_text_1727702275309">часов</div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__8048299881727702292058"
              data-elem-id="1727702292058"
              data-elem-type="text"
              data-field-top-value="480"
              data-field-left-value="197"
              data-field-width-value="59"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-field-top-res-320-value="310"
              data-field-left-res-320-value="157"
              data-field-width-res-320-value="72"
              data-field-top-res-640-value="1167px"
              data-field-left-res-640-value="229px"
              data-field-top-res-960-value="499"
              data-field-left-res-960-value="188"
            >
              <div class="tn-atom" field="tn_text_1727702292058">минут</div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__8048299881727702307090"
              data-elem-id="1727702307090"
              data-elem-type="text"
              data-field-top-value="480"
              data-field-left-value="284"
              data-field-width-value="59"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-field-top-res-320-value="310"
              data-field-left-res-320-value="248"
              data-field-width-res-320-value="72"
              data-field-top-res-640-value="1177px"
              data-field-left-res-640-value="239px"
              data-field-top-res-960-value="499"
              data-field-left-res-960-value="291"
            >
              <div class="tn-atom" field="tn_text_1727702307090">секунд</div>
            </div> -->
            <!-- <div
              class="t396__elem tn-elem tn-elem__8048299881728048315101"
              data-elem-id="1728048315101"
              data-elem-type="text"
              data-field-top-value="407"
              data-field-left-value="36"
              data-field-width-value="540"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-field-top-res-320-value="246"
              data-field-left-res-320-value="23"
              data-field-width-res-320-value="380"
              data-field-top-res-640-value="600"
              data-field-left-res-640-value="-386"
              data-field-top-res-960-value="426"
              data-field-left-res-960-value="21"
              data-field-width-res-960-value="329"
            >
              <div class="tn-atom" field="tn_text_1728048315101">
                0 : 24 : 00 : 00
              </div>
            </div> -->
          </div>
        </div>
        <script>
          t_onFuncLoad("t396_initialScale", function () {
            t396_initialScale("804829988");
          });
          t_onReady(function () {
            t_onFuncLoad("t396_init", function () {
              t396_init("804829988");
            });
          });
        </script>
        <!-- /T396 -->
      </div>
      <div
        id="rec806971677"
        class="r t-rec"
        style=""
        data-animationappear="off"
        data-record-type="415"
      >
        <!-- t415 -->
        <!-- cover -->
        <div
          class="t-cover"
          id="recorddiv806971677"
          bgimgfield="img"
          style="
            height: 100vh;
            background-image: -webkit-linear-gradient(top, #ccc, #777);
            background-image: -moz-linear-gradient(top, #ccc, #777);
            background-image: -o-linear-gradient(top, #ccc, #777);
            background-image: -ms-linear-gradient(top, #ccc, #777);
            background-image: linear-gradient(top, #ccc, #777);
          "
        >
          <div
            class="t-cover__carrier"
            id="coverCarry806971677"
            data-content-cover-id="806971677"
            data-content-cover-bg=""
            data-display-changed="true"
            data-content-cover-height="100vh"
            data-content-cover-parallax=""
            data-content-use-image-for-mobile-cover=""
            style="height: 100vh; background-attachment: scroll"
            itemscope=""
            itemtype="http://schema.org/ImageObject"
          >
            <meta itemprop="image" content="" />
          </div>
          <div
            class="t-cover__filter"
            style="
              height: 100vh;
              background-image: -moz-linear-gradient(
                top,
                rgba(0, 0, 0, 0.7),
                rgba(0, 0, 0, 0.7)
              );
              background-image: -webkit-linear-gradient(
                top,
                rgba(0, 0, 0, 0.7),
                rgba(0, 0, 0, 0.7)
              );
              background-image: -o-linear-gradient(
                top,
                rgba(0, 0, 0, 0.7),
                rgba(0, 0, 0, 0.7)
              );
              background-image: -ms-linear-gradient(
                top,
                rgba(0, 0, 0, 0.7),
                rgba(0, 0, 0, 0.7)
              );
              background-image: linear-gradient(
                top,
                rgba(0, 0, 0, 0.7),
                rgba(0, 0, 0, 0.7)
              );
              filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#4c000000', endColorstr='#4c000000');
            "
          ></div>
          <div class="t415">
            <div class="t-container">
              <div class="t-width t-width_12 t415__mainblock">
                <div
                  class="t-cover__wrapper t-valign_middle"
                  style="height: 100vh"
                >
                  <div class="t415__content" data-hook-content="covercontent">
                    <div id="t415__timer806971677" class="t415__timer">
                      <div class="t415__col">
                        <span class="t415__days t-title t-title_lg t415__number"
                          >00</span
                        >
                        <div class="t415__text t-descr t-descr_xxs"></div>
                      </div>
                      <div class="t415__col">
                        <span
                          class="t415__hours t-title t-title_lg t415__number"
                          >00</span
                        >
                        <div class="t415__text t-descr t-descr_xxs"></div>
                      </div>
                      <div class="t415__col">
                        <span
                          class="t415__minutes t-title t-title_lg t415__number"
                          >00</span
                        >
                        <div class="t415__text t-descr t-descr_xxs"></div>
                      </div>
                      <div class="t415__col">
                        <span
                          class="t415__seconds t-title t-title_lg t415__number"
                          >00</span
                        >
                        <div class="t415__text t-descr t-descr_xxs"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <script type="text/javascript">
          t_onReady(function () {
            function getTimeRemaining(endtime) {
              var time = Date.parse(endtime) - Date.parse(new Date());
              if (time < 0) {
                var seconds = 0;
                var minutes = 0;
                var hours = 0;
                var days = 0;
              } else {
                var seconds = Math.floor((time / 1000) % 60);
                var minutes = Math.floor((time / 1000 / 60) % 60);
                var hours = Math.floor((time / (1000 * 60 * 60)) % 24);
                var days = Math.floor(time / (1000 * 60 * 60 * 24));
              }
              return {
                total: time,
                days: days,
                hours: hours,
                minutes: minutes,
                seconds: seconds,
              };
            }
            function handleOverflowMonth(date) {
              var splittedDate = date.split("-");
              var year = parseInt(splittedDate[0], 10);
              var month = parseInt(splittedDate[1], 10);
              var day = parseInt(splittedDate[2], 10);
              var countDays = new Date(year, month, 0).getDate();
              if (day > countDays) {
                var difference = Math.abs(countDays - day);
                day = difference;
                month += 1;
                if (month > 12) {
                  year += 1;
                  month = 1;
                }
                return (
                  year +
                  "-" +
                  ("0" + month).slice(-2) +
                  "-" +
                  ("0" + day).slice(-2)
                );
              }
              return date;
            }
            function initializeClock(id, endtime) {
              var clock = document.getElementById(id);
              if (!clock) return;
              var daysSpan = clock.querySelector(".t415__days");
              var hoursSpan = clock.querySelector(".t415__hours");
              var minutesSpan = clock.querySelector(".t415__minutes");
              var secondsSpan = clock.querySelector(".t415__seconds");
              function updateClock() {
                var time = getTimeRemaining(endtime);
                if (time.days >= 100) {
                  daysSpan.innerHTML = time.days;
                } else {
                  daysSpan.innerHTML = ("0" + time.days).slice(-2);
                }
                hoursSpan.innerHTML = ("0" + time.hours).slice(-2);
                minutesSpan.innerHTML = ("0" + time.minutes).slice(-2);
                secondsSpan.innerHTML = ("0" + time.seconds).slice(-2);
                if (time.total <= 0) {
                  clearInterval(timeInterval);
                }
              }
              updateClock();
              var timeInterval = setInterval(updateClock, 1000);
            }
            var deadlineDate = "2024-11-28".trim();
            var deadlineTime = "18:00".trim();
            var deadlineUtc = "+03:00".trim();
            if (
              deadlineUtc.charAt(0) !== "-" &&
              deadlineUtc.charAt(0) !== "+"
            ) {
              deadlineUtc = "+" + deadlineUtc;
            }
            deadlineDate = handleOverflowMonth(deadlineDate);
            var deadline = new Date(
              deadlineDate + "T" + ("0" + deadlineTime).slice(-5) + deadlineUtc
            );
            initializeClock("t415__timer806971677", deadline);
          });
        </script>
      </div>
      <div
        id="rec806967122"
        class="r t-rec"
        style=""
        data-animationappear="off"
        data-record-type="131"
      >
        <!-- T123 -->
        <div class="t123">
          <div class="t-container_100">
            <div class="t-width t-width_100">
              <!-- nominify begin -->
              <style>
                /* Скрываем блок с таймером */
                [data-record-type="415"] {
                  display: none;
                }
              </style>
              <script>
                $(document).ready(function () {
                  function updateTimer() {
                    var now = new Date();
                    var nextDay = new Date();

                    // Устанавливаем следующую дату на 00:00 следующего дня
                    nextDay.setHours(24, 0, 0, 0);

                    // Получаем разницу в миллисекундах
                    var timeRemaining = nextDay - now;

                    // Вычисляем количество дней, часов, минут и секунд
                    var days = Math.floor(
                      timeRemaining / (1000 * 60 * 60 * 24)
                    );
                    var hours = Math.floor(
                      (timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
                    );
                    var minutes = Math.floor(
                      (timeRemaining % (1000 * 60 * 60)) / (1000 * 60)
                    );
                    var seconds = Math.floor(
                      (timeRemaining % (1000 * 60)) / 1000
                    );

                    // Формируем строку с таймером
                    var timeTitle =
                      days + " : " + hours + " : " + minutes + " : " + seconds;

                    // Выводим таймер в текстовом поле
                    $('[field="tn_text_1728048315101"]').text(timeTitle);
                  }

                  updateTimer();
                  var timeinterval = setInterval(updateTimer, 1000);
                });
              </script>
              <!-- nominify end -->
            </div>
          </div>
        </div>
      </div>
      <div id="rec804941368" class="r t-rec" style="" data-record-type="215">
        <a name="1" style="font-size: 0"></a>
      </div>
      <div
        id="rec804855614"
        class="r t-rec"
        style=""
        data-animationappear="off"
        data-record-type="396"
      >
        <!-- T396 -->
        <style>
          #rec804855614 .t396__artboard {
            height: 720px;
            background-color: #181818;
          }
          #rec804855614 .t396__filter {
            height: 720px;
          }
          #rec804855614 .t396__carrier {
            height: 720px;
            background-position: center center;
            background-attachment: scroll;
            background-size: cover;
            background-repeat: no-repeat;
          }
          @media screen and (max-width: 1199px) {
            #rec804855614 .t396__artboard,
            #rec804855614 .t396__filter,
            #rec804855614 .t396__carrier {
            }
            #rec804855614 .t396__filter {
            }
            #rec804855614 .t396__carrier {
              background-attachment: scroll;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804855614 .t396__artboard,
            #rec804855614 .t396__filter,
            #rec804855614 .t396__carrier {
              height: 1280px;
            }
            #rec804855614 .t396__filter {
            }
            #rec804855614 .t396__carrier {
              background-attachment: scroll;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804855614 .t396__artboard,
            #rec804855614 .t396__filter,
            #rec804855614 .t396__carrier {
              height: 1090px;
            }
            #rec804855614 .t396__filter {
            }
            #rec804855614 .t396__carrier {
              background-attachment: scroll;
            }
          }
          #rec804855614 .tn-elem[data-elem-id="1727693562306"] {
            z-index: 3;
            top: 83px;
            left: calc(50% - 600px + 20px);
            width: 1161px;
            height: 600px;
          }
          #rec804855614 .tn-elem[data-elem-id="1727693562306"] .tn-atom {
            border-radius: 18px;
            background-color: #2B2B2B;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804855614 .tn-elem[data-elem-id="1727693562306"] {
              left: calc(50% - 480px + 14px);
              width: 932px;
              height: 528px;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804855614 .tn-elem[data-elem-id="1727693562306"] {
              width: 614px;
              height: 1158px;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804855614 .tn-elem[data-elem-id="1727693562306"] {
              top: 43px;
              left: calc(50% - 160px + 10px);
              width: 300px;
              height: 985px;
            }
          }
          #rec804855614 .tn-elem[data-elem-id="1727693719780"] {
            color: #fff;
            text-align: center;
            z-index: 4;
            top: 115px;
            left: calc(50% - 600px + 320px);
            width: 560px;
            height: auto;
          }
          #rec804855614 .tn-elem[data-elem-id="1727693719780"] .tn-atom {
            color: #fff;
            font-size: 32px;
            font-family: "Montserrat", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            letter-spacing: -1px;
            text-transform: uppercase;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804855614 .tn-elem[data-elem-id="1727693719780"] {
              left: calc(50% - 480px + 200px);
              height: auto;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804855614 .tn-elem[data-elem-id="1727693719780"] {
              left: calc(50% - 320px + 40px);
              height: auto;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804855614 .tn-elem[data-elem-id="1727693719780"] {
              top: 66px;
              left: calc(50% - 160px + 10px);
              width: 293px;
              height: auto;
            }
            #rec804855614 .tn-elem[data-elem-id="1727693719780"] .tn-atom {
              font-size: 21px;
              background-size: cover;
            }
          }
          #rec804855614 .tn-elem[data-elem-id="1727693762082"] {
            color: #fff;
            text-align: center;
            z-index: 5;
            top: 167px;
            left: calc(50% - 600px + 141px);
            width: 897px;
            height: auto;
          }
          #rec804855614 .tn-elem[data-elem-id="1727693762082"] .tn-atom {
            color: #fff;
            font-size: 13px;
            font-family: "Inter", Arial, sans-serif;
            line-height: 1.4;
            font-weight: 500;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804855614 .tn-elem[data-elem-id="1727693762082"] {
              left: calc(50% - 480px + 76px);
              height: auto;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804855614 .tn-elem[data-elem-id="1727693762082"] {
              left: calc(50% - 320px + 64px);
              width: 512px;
              height: auto;
            }
            #rec804855614 .tn-elem[data-elem-id="1727693762082"] .tn-atom {
              font-size: 11px;
              background-size: cover;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804855614 .tn-elem[data-elem-id="1727693762082"] {
              top: 108px;
              left: calc(50% - 160px + 26px);
              width: 267px;
              height: auto;
            }
            #rec804855614 .tn-elem[data-elem-id="1727693762082"] .tn-atom {
              font-size: 8px;
              line-height: 1.35;
              background-size: cover;
            }
          }
          #rec804855614 .tn-elem[data-elem-id="1727694014570"] {
            color: #5555f6;
            text-align: center;
            z-index: 6;
            top: 471px;
            left: calc(50% - 600px + 102px);
            width: 202px;
            height: auto;
          }
          #rec804855614 .tn-elem[data-elem-id="1727694014570"] .tn-atom {
            color: #5555f6;
            font-size: 18px;
            font-family: "Montserrat", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 700;
            text-transform: uppercase;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804855614 .tn-elem[data-elem-id="1727694014570"] {
              left: calc(50% - 480px + 75px);
              height: auto;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804855614 .tn-elem[data-elem-id="1727694014570"] {
              left: calc(50% - 320px + 219px);
              height: auto;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804855614 .tn-elem[data-elem-id="1727694014570"] {
              top: 182px;
              left: calc(50% - 160px + 61px);
              height: auto;
            }
          }
          #rec804855614 .tn-elem[data-elem-id="1727694059813"] {
            color: #fff;
            text-align: center;
            z-index: 7;
            top: 501px;
            left: calc(50% - 600px + 61px);
            width: 281px;
            height: auto;
          }
          #rec804855614 .tn-elem[data-elem-id="1727694059813"] .tn-atom {
            color: #fff;
            font-size: 12px;
            font-family: "Inter", Arial, sans-serif;
            line-height: 1.4;
            font-weight: 600;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804855614 .tn-elem[data-elem-id="1727694059813"] {
              left: calc(50% - 480px + 60px);
              width: 217px;
              height: auto;
            }
            #rec804855614 .tn-elem[data-elem-id="1727694059813"] .tn-atom {
              font-size: 8px;
              background-size: cover;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804855614 .tn-elem[data-elem-id="1727694059813"] {
              left: calc(50% - 320px + 64px);
              width: 512px;
              height: auto;
            }
            #rec804855614 .tn-elem[data-elem-id="1727694059813"] .tn-atom {
              font-size: 11px;
              background-size: cover;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804855614 .tn-elem[data-elem-id="1727694059813"] {
              top: 348px;
              left: calc(50% - 160px + 27px);
              width: 267px;
              height: auto;
            }
            #rec804855614 .tn-elem[data-elem-id="1727694059813"] .tn-atom {
              font-size: 9px;
              line-height: 1.35;
              background-size: cover;
            }
          }
          #rec804855614 .tn-elem[data-elem-id="1727694527034"] {
            z-index: 8;
            top: 300px;
            left: calc(50% - 600px + 130px);
            width: 140px;
            height: auto;
          }
          #rec804855614 .tn-elem[data-elem-id="1727694527034"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          #rec804855614 .tn-elem[data-elem-id="1727694527034"] .tn-atom__img {
          }
          @media screen and (max-width: 1199px) {
            #rec804855614 .tn-elem[data-elem-id="1727694527034"] {
              left: calc(50% - 480px + 100px);
              height: auto;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804855614 .tn-elem[data-elem-id="1727694527034"] {
              left: calc(50% - 320px + 250px);
              height: auto;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804855614 .tn-elem[data-elem-id="1727694527034"] {
              top: 192px;
              left: calc(50% - 160px + 95px);
              width: 120px;
              height: auto;
            }
          }
          #rec804855614 .tn-elem[data-elem-id="1727694628724"] {
            color: #5555f6;
            text-align: center;
            z-index: 9;
            top: 471px;
            left: calc(50% - 600px + 499px);
            width: 202px;
            height: auto;
          }
          #rec804855614 .tn-elem[data-elem-id="1727694628724"] .tn-atom {
            color: #5555f6;
            font-size: 18px;
            font-family: "Montserrat", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 700;
            text-transform: uppercase;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804855614 .tn-elem[data-elem-id="1727694628724"] {
              left: calc(50% - 480px + 380px);
              height: auto;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804855614 .tn-elem[data-elem-id="1727694628724"] {
              top: 751px;
              left: calc(50% - 320px + 229pxpx);
              height: auto;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804855614 .tn-elem[data-elem-id="1727694628724"] {
              top: 430px;
              left: calc(50% - 160px + 54px);
              height: auto;
            }
          }
          #rec804855614 .tn-elem[data-elem-id="1727694628719"] {
            color: #fff;
            text-align: center;
            z-index: 10;
            top: 501px;
            left: calc(50% - 600px + 442px);
            width: 317px;
            height: auto;
          }
          #rec804855614 .tn-elem[data-elem-id="1727694628719"] .tn-atom {
            color: #fff;
            font-size: 12px;
            font-family: "Inter", Arial, sans-serif;
            line-height: 1.4;
            font-weight: 600;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804855614 .tn-elem[data-elem-id="1727694628719"] {
              left: calc(50% - 480px + 351px);
              width: 260px;
              height: auto;
            }
            #rec804855614 .tn-elem[data-elem-id="1727694628719"] .tn-atom {
              font-size: 8px;
              background-size: cover;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804855614 .tn-elem[data-elem-id="1727694628719"] {
              top: 781px;
              left: calc(50% - 320px + 74pxpx);
              width: 512px;
              height: auto;
            }
            #rec804855614 .tn-elem[data-elem-id="1727694628719"] .tn-atom {
              font-size: 11px;
              background-size: cover;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804855614 .tn-elem[data-elem-id="1727694628719"] {
              top: 616px;
              left: calc(50% - 160px + 21px);
              width: 267px;
              height: auto;
            }
            #rec804855614 .tn-elem[data-elem-id="1727694628719"] .tn-atom {
              font-size: 9px;
              line-height: 1.35;
              background-size: cover;
            }
          }
          #rec804855614 .tn-elem[data-elem-id="1727694628699"] {
            z-index: 11;
            top: 300px;
            left: calc(50% - 600px + 460px);
            width: 260px;
            height: auto;
          }
          #rec804855614 .tn-elem[data-elem-id="1727694628699"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          #rec804855614 .tn-elem[data-elem-id="1727694628699"] .tn-atom__img {
          }
          @media screen and (max-width: 1199px) {
            #rec804855614 .tn-elem[data-elem-id="1727694628699"] {
              left: calc(50% - 480px + 335px);
              height: auto;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804855614 .tn-elem[data-elem-id="1727694628699"] {
              top: 580px;
              left: calc(50% - 320px + 185px);
              height: auto;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804855614 .tn-elem[data-elem-id="1727694628699"] {
              top: 465px;
              left: calc(50% - 160px + 45px);
              width: 215px;
              height: auto;
            }
          }
          #rec804855614 .tn-elem[data-elem-id="1727694918793"] {
            color: #5555f6;
            text-align: center;
            z-index: 12;
            top: 472px;
            left: calc(50% - 600px + 875px);
            width: 202px;
            height: auto;
          }
          #rec804855614 .tn-elem[data-elem-id="1727694918793"] .tn-atom {
            color: #5555f6;
            font-size: 18px;
            font-family: "Montserrat", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 700;
            text-transform: uppercase;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804855614 .tn-elem[data-elem-id="1727694918793"] {
              left: calc(50% - 480px + 697px);
              height: auto;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804855614 .tn-elem[data-elem-id="1727694918793"] {
              top: 1056px;
              left: calc(50% - 320px + 225px);
              height: auto;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804855614 .tn-elem[data-elem-id="1727694918793"] {
              top: 730px;
              left: calc(50% - 160px + 67px);
              height: auto;
            }
          }
          #rec804855614 .tn-elem[data-elem-id="1727694918790"] {
            color: #fff;
            text-align: center;
            z-index: 13;
            top: 502px;
            left: calc(50% - 600px + 823px);
            width: 305px;
            height: auto;
          }
          #rec804855614 .tn-elem[data-elem-id="1727694918790"] .tn-atom {
            color: #fff;
            font-size: 12px;
            font-family: "Inter", Arial, sans-serif;
            line-height: 1.4;
            font-weight: 600;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804855614 .tn-elem[data-elem-id="1727694918790"] {
              left: calc(50% - 480px + 682px);
              width: 217px;
              height: auto;
            }
            #rec804855614 .tn-elem[data-elem-id="1727694918790"] .tn-atom {
              font-size: 8px;
              background-size: cover;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804855614 .tn-elem[data-elem-id="1727694918790"] {
              top: 1086px;
              left: calc(50% - 320px + 70px);
              width: 512px;
              height: auto;
            }
            #rec804855614 .tn-elem[data-elem-id="1727694918790"] .tn-atom {
              font-size: 11px;
              background-size: cover;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804855614 .tn-elem[data-elem-id="1727694918790"] {
              top: 896px;
              left: calc(50% - 160px + 33px);
              width: 267px;
              height: auto;
            }
            #rec804855614 .tn-elem[data-elem-id="1727694918790"] .tn-atom {
              font-size: 9px;
              line-height: 1.35;
              background-size: cover;
            }
          }
          #rec804855614 .tn-elem[data-elem-id="1727694918772"] {
            z-index: 14;
            top: 284px;
            left: calc(50% - 600px + 830px);
            width: 295px;
            height: auto;
          }
          #rec804855614 .tn-elem[data-elem-id="1727694918772"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          #rec804855614 .tn-elem[data-elem-id="1727694918772"] .tn-atom__img {
          }
          @media screen and (max-width: 1199px) {
            #rec804855614 .tn-elem[data-elem-id="1727694918772"] {
              left: calc(50% - 480px + 650px);
              width: 280px;
              height: auto;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804855614 .tn-elem[data-elem-id="1727694918772"] {
              top: 868px;
              left: calc(50% - 320px + 159px);
              height: auto;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804855614 .tn-elem[data-elem-id="1727694918772"] {
              top: 755px;
              left: calc(50% - 160px + 40px);
              width: 233px;
              height: auto;
            }
          }
        </style>
        <div class="t396">
          <div
            class="t396__artboard"
            data-artboard-recid="804855614"
            data-artboard-screens="320,640,960,1200"
            data-artboard-height="720"
            data-artboard-valign="center"
            data-artboard-upscale="grid"
            data-artboard-height-res-320="1090"
            data-artboard-upscale-res-320="window"
            data-artboard-height-res-640="1280"
          >
            <div class="t396__carrier" data-artboard-recid="804855614"></div>
            <div class="t396__filter" data-artboard-recid="804855614"></div>
            <div
              class="t396__elem tn-elem tn-elem__8048556141727693562306"
              data-elem-id="1727693562306"
              data-elem-type="shape"
              data-field-top-value="83"
              data-field-left-value="20"
              data-field-height-value="600"
              data-field-width-value="1161"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value="px"
              data-field-widthunits-value="px"
              data-field-top-res-320-value="43"
              data-field-left-res-320-value="10"
              data-field-height-res-320-value="985"
              data-field-width-res-320-value="300"
              data-field-height-res-640-value="1158"
              data-field-width-res-640-value="614"
              data-field-left-res-960-value="14"
              data-field-height-res-960-value="528"
              data-field-width-res-960-value="932"
            >
              <div class="tn-atom"></div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__8048556141727693719780"
              data-elem-id="1727693719780"
              data-elem-type="text"
              data-field-top-value="115"
              data-field-left-value="320"
              data-field-width-value="560"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-field-top-res-320-value="66"
              data-field-left-res-320-value="10"
              data-field-width-res-320-value="293"
              data-field-left-res-640-value="40"
              data-field-left-res-960-value="200"
            >
              <div class="tn-atom" field="tn_text_1727693719780">
                для кого этот курс?
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__8048556141727693762082"
              data-elem-id="1727693762082"
              data-elem-type="text"
              data-field-top-value="167"
              data-field-left-value="141"
              data-field-width-value="897"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-field-top-res-320-value="108"
              data-field-left-res-320-value="26"
              data-field-width-res-320-value="267"
              data-field-left-res-640-value="64"
              data-field-width-res-640-value="512"
              data-field-left-res-960-value="76"
            >
              <div class="tn-atom" field="tn_text_1727693762082">
                Благодаря многолетнему опыту и накопленным прикладным знаниям
                экспертов Академии, вы сможете избежать множества ошибок,
                сохранив свое время и деньги, и уже совсем скоро начать
                стабильно зарабатывать с помощью крипто- и блокчейн-технологий!
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__8048556141727694014570"
              data-elem-id="1727694014570"
              data-elem-type="text"
              data-field-top-value="471"
              data-field-left-value="102"
              data-field-width-value="202"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-field-top-res-320-value="182"
              data-field-left-res-320-value="61"
              data-field-left-res-640-value="219"
              data-field-left-res-960-value="75"
            >
              <div class="tn-atom" field="tn_text_1727694014570">
                Для новичков
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__8048556141727694059813"
              data-elem-id="1727694059813"
              data-elem-type="text"
              data-field-top-value="501"
              data-field-left-value="61"
              data-field-width-value="281"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-field-top-res-320-value="348"
              data-field-left-res-320-value="27"
              data-field-width-res-320-value="267"
              data-field-left-res-640-value="64"
              data-field-width-res-640-value="512"
              data-field-left-res-960-value="60"
              data-field-width-res-960-value="217"
            >
              <div class="tn-atom" field="tn_text_1727694059813">
                Просто слышали про криптовалюты или только делаете первые шаги?
                Мы поможем вам понять азы и ключевые принципы крипто- и
                блокчейн-индустрии, освоить базовые инструменты и правильно их
                применять
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__8048556141727694527034"
              data-elem-id="1727694527034"
              data-elem-type="image"
            
            >
              <div class="tn-atom">
                <img
                  class="tn-atom__img t-img"
                  data-original="images/cute-little-rich-ham.png"
                  src="images/cute-little-rich-ham.png"
                  alt=""
                  imgfield="tn_img_1727694527034"
                />
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__8048556141727694628724"
              data-elem-id="1727694628724"
              data-elem-type="text"
              data-field-top-value="471"
              data-field-left-value="499"
              data-field-width-value="202"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-field-top-res-320-value="430"
              data-field-left-res-320-value="54"
              data-field-top-res-640-value="751"
              data-field-left-res-640-value="229px"
              data-field-left-res-960-value="380"
            >
              <div class="tn-atom" field="tn_text_1727694628724">
                ПРОДВИНУТЫЙ
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__8048556141727694628719"
              data-elem-id="1727694628719"
              data-elem-type="text"
              data-field-top-value="501"
              data-field-left-value="442"
              data-field-width-value="317"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-field-top-res-320-value="616"
              data-field-left-res-320-value="21"
              data-field-width-res-320-value="267"
              data-field-top-res-640-value="781"
              data-field-left-res-640-value="74px"
              data-field-width-res-640-value="512"
              data-field-left-res-960-value="351"
              data-field-width-res-960-value="260"
            >
              <div class="tn-atom" field="tn_text_1727694628719">
                У вас неплохие результаты, но пока другие успешно осваивают
                новые направления и улучшают свое финансовое положение - вам
                кажется, что вы уперлись в потолок? Поможем дополнить и
                структурировать ваши знания, выявим недостающие навыки, чтобы вы
                уверенно дошли до экспертного уровня
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__8048556141727694628699"
              data-elem-id="1727694628699"
              data-elem-type="image"
              
            >
              <div class="tn-atom">
                <img
                  class="tn-atom__img t-img"
                  data-original="images/usd-bull-buy-market-.png"
                  src="images/usd-bull-buy-market-.png"
                  alt=""
                  imgfield="tn_img_1727694628699"
                />
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__8048556141727694918793"
              data-elem-id="1727694918793"
              data-elem-type="text"
              data-field-top-value="472"
              data-field-left-value="875"
              data-field-width-value="202"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-field-top-res-320-value="730"
              data-field-left-res-320-value="67"
              data-field-top-res-640-value="1056"
              data-field-left-res-640-value="225"
              data-field-left-res-960-value="697"
            >
              <div class="tn-atom" field="tn_text_1727694918793">МАСТЕР</div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__8048556141727694918790"
              data-elem-id="1727694918790"
              data-elem-type="text"
              data-field-top-value="502"
              data-field-left-value="823"
              data-field-width-value="305"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-field-top-res-320-value="896"
              data-field-left-res-320-value="23"
              data-field-width-res-320-value="267"
              data-field-top-res-640-value="1086"
              data-field-left-res-640-value="70"
              data-field-width-res-640-value="512"
              data-field-left-res-960-value="682"
              data-field-width-res-960-value="217"
            >
              <div class="tn-atom" field="tn_text_1727694918790">
                Вы профессионал и жаждете новых знаний и возможностей? Мы
                предлагаем вам крупнейшую базу знаний о криптовалютах в мире и
                предоставляем наиболее эффективный инструментарий. На основе
                практического опыта и реальных кейсов, мы оптимизируем ваши
                стратегии и приблизим к идеалу ваше понимание криптовалютных
                рынков и осведомленность об индустрии
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__8048556141727694918772"
              data-elem-id="1727694918772"
              data-elem-type="image"
             
            >
              <div class="tn-atom">
                <img
                  class="tn-atom__img t-img"
                  data-original="images/3d-cartoon-whale-wit.png"
                  src="images/3d-cartoon-whale-wit.png"
                  alt=""
                  imgfield="tn_img_1727694918772"
                />
              </div>
            </div>
          </div>
        </div>
        <script>
          t_onFuncLoad("t396_initialScale", function () {
            t396_initialScale("804855614");
          });
          t_onReady(function () {
            t_onFuncLoad("t396_init", function () {
              t396_init("804855614");
            });
          });
        </script>
        <!-- /T396 -->
      </div>
      <div id="rec804942174" class="r t-rec" style="" data-record-type="215">
        <a name="2" style="font-size: 0"></a>
      </div>
      <div
        id="rec804871321"
        class="r t-rec t-rec_pt_0"
        style="padding-top: 0px"
        data-animationappear="off"
        data-record-type="396"
      >
        <!-- T396 -->
        <style>
          #rec804871321 .t396__artboard {
            height: 660px;
            background-color: #181818;
          }
          #rec804871321 .t396__filter {
            height: 660px;
          }
          #rec804871321 .t396__carrier {
            height: 660px;
            background-position: center center;
            background-attachment: scroll;
            background-size: cover;
            background-repeat: no-repeat;
          }
          @media screen and (max-width: 1199px) {
            #rec804871321 .t396__artboard,
            #rec804871321 .t396__filter,
            #rec804871321 .t396__carrier {
            }
            #rec804871321 .t396__filter {
            }
            #rec804871321 .t396__carrier {
              background-attachment: scroll;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804871321 .t396__artboard,
            #rec804871321 .t396__filter,
            #rec804871321 .t396__carrier {
              height: 680px;
            }
            #rec804871321 .t396__filter {
            }
            #rec804871321 .t396__carrier {
              background-attachment: scroll;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804871321 .t396__artboard,
            #rec804871321 .t396__filter,
            #rec804871321 .t396__carrier {
              height: 660px;
            }
            #rec804871321 .t396__filter {
            }
            #rec804871321 .t396__carrier {
              background-attachment: scroll;
            }
          }
          #rec804871321 .tn-elem[data-elem-id="1727693719780"] {
            color: #fff;
            text-align: center;
            z-index: 3;
            top: 105px;
            left: calc(50% - 600px + 121px);
            width: 999px;
            height: auto;
          }
          #rec804871321 .tn-elem[data-elem-id="1727693719780"] .tn-atom {
            color: #fff;
            font-size: 32px;
            font-family: "Montserrat", Arial, sans-serif;
            line-height: 1.2;
            font-weight: 400;
            letter-spacing: -1px;
            text-transform: uppercase;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804871321 .tn-elem[data-elem-id="1727693719780"] {
              left: calc(50% - 480px + 81px);
              width: 798px;
              height: auto;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804871321 .tn-elem[data-elem-id="1727693719780"] {
              top: 44px;
              left: calc(50% - 320px + 42px);
              width: 540px;
              height: auto;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804871321 .tn-elem[data-elem-id="1727693719780"] {
              top: 35px;
              left: calc(50% - 160px + 13px);
              width: 293px;
              height: auto;
            }
            #rec804871321 .tn-elem[data-elem-id="1727693719780"] .tn-atom {
              font-size: 21px;
              background-size: cover;
            }
          }
          #rec804871321 .tn-elem[data-elem-id="1727693762082"] {
            color: #fff;
            text-align: center;
            z-index: 4;
            top: 191px;
            left: calc(50% - 600px + 217px);
            width: 808px;
            height: auto;
          }
          #rec804871321 .tn-elem[data-elem-id="1727693762082"] .tn-atom {
            color: #fff;
            font-size: 21px;
            font-family: "Inter", Arial, sans-serif;
            line-height: 1.4;
            font-weight: 700;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804871321 .tn-elem[data-elem-id="1727693762082"] {
              left: calc(50% - 480px + 76px);
              height: auto;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804871321 .tn-elem[data-elem-id="1727693762082"] {
              top: 221px;
              left: calc(50% - 320px + 64px);
              width: 512px;
              height: auto;
            }
            #rec804871321 .tn-elem[data-elem-id="1727693762082"] .tn-atom {
              font-size: 11px;
              background-size: cover;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804871321 .tn-elem[data-elem-id="1727693762082"] {
              top: 140px;
              left: calc(50% - 160px + 26px);
              width: 267px;
              height: auto;
            }
            #rec804871321 .tn-elem[data-elem-id="1727693762082"] .tn-atom {
              font-size: 8px;
              line-height: 1.35;
              background-size: cover;
            }
          }
          #rec804871321 .tn-elem[data-elem-id="1727695594558"] {
            z-index: 5;
            top: 261px;
            left: calc(50% - 600px + 91px);
            width: 85px;
            height: 90px;
          }
          #rec804871321 .tn-elem[data-elem-id="1727695594558"] .tn-atom {
            border-radius: 18px;
            background-color: transparent;
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804871321 .tn-elem[data-elem-id="1727695594558"] {
              top: 252px;
              left: calc(50% - 480px + 55px);
              width: 62px;
              height: 65px;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804871321 .tn-elem[data-elem-id="1727695594558"] {
              top: 289px;
              left: calc(50% - 320px + 51px);
              width: 62px;
              height: 60px;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804871321 .tn-elem[data-elem-id="1727695594558"] {
              top: 189px;
              left: calc(50% - 160px + 56px);
              width: 46px;
              height: 45px;
            }
          }
          #rec804871321 .tn-elem[data-elem-id="1727695615470"] {
            color: #fff;
            text-align: center;
            z-index: 6;
            top: 379px;
            left: calc(50% - 600px + 18px);
            width: 233px;
            height: auto;
          }
          #rec804871321 .tn-elem[data-elem-id="1727695615470"] .tn-atom {
            color: #fff;
            font-size: 14px;
            font-family: "Montserrat", Arial, sans-serif;
            line-height: 1.4;
            font-weight: 700;
            text-transform: uppercase;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804871321 .tn-elem[data-elem-id="1727695615470"] {
              top: 336px;
              left: calc(50% - 480px + 9px);
              width: 153px;
              height: auto;
            }
            #rec804871321 .tn-elem[data-elem-id="1727695615470"] .tn-atom {
              font-size: 12px;
              background-size: cover;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804871321 .tn-elem[data-elem-id="1727695615470"] {
              top: 368px;
              left: calc(50% - 320px + 15px);
              width: 141px;
              height: auto;
            }
            #rec804871321 .tn-elem[data-elem-id="1727695615470"] .tn-atom {
              font-size: 11px;
              background-size: cover;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804871321 .tn-elem[data-elem-id="1727695615470"] {
              top: 252px;
              left: calc(50% - 160px + 9px);
              width: 139px;
              height: auto;
            }
            #rec804871321 .tn-elem[data-elem-id="1727695615470"] .tn-atom {
              font-size: 10px;
              line-height: 1.35;
              background-size: cover;
            }
          }
          #rec804871321 .tn-elem[data-elem-id="1727696462491"] {
            z-index: 7;
            top: 260px;
            left: calc(50% - 600px + 332px);
            width: 85px;
            height: 90px;
          }
          #rec804871321 .tn-elem[data-elem-id="1727696462491"] .tn-atom {
            border-radius: 18px;
            background-color: transparent;
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804871321 .tn-elem[data-elem-id="1727696462491"] {
              top: 252px;
              left: calc(50% - 480px + 219px);
              width: 62px;
              height: 65px;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804871321 .tn-elem[data-elem-id="1727696462491"] {
              top: 289px;
              left: calc(50% - 320px + 211px);
              width: 62px;
              height: 60px;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804871321 .tn-elem[data-elem-id="1727696462491"] {
              top: 188px;
              left: calc(50% - 160px + 219px);
              width: 46px;
              height: 45px;
            }
          }
          #rec804871321 .tn-elem[data-elem-id="1727696462484"] {
            color: #fff;
            text-align: center;
            z-index: 8;
            top: 378px;
            left: calc(50% - 600px + 259px);
            width: 214px;
            height: auto;
          }
          #rec804871321 .tn-elem[data-elem-id="1727696462484"] .tn-atom {
            color: #fff;
            font-size: 14px;
            font-family: "Montserrat", Arial, sans-serif;
            line-height: 1.4;
            font-weight: 700;
            text-transform: uppercase;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804871321 .tn-elem[data-elem-id="1727696462484"] {
              top: 336px;
              left: calc(50% - 480px + 180px);
              width: 140px;
              height: auto;
            }
            #rec804871321 .tn-elem[data-elem-id="1727696462484"] .tn-atom {
              font-size: 12px;
              background-size: cover;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804871321 .tn-elem[data-elem-id="1727696462484"] {
              top: 368px;
              left: calc(50% - 320px + 175px);
              width: 135px;
              height: auto;
            }
            #rec804871321 .tn-elem[data-elem-id="1727696462484"] .tn-atom {
              font-size: 11px;
              background-size: cover;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804871321 .tn-elem[data-elem-id="1727696462484"] {
              top: 251px;
              left: calc(50% - 160px + 172px);
              width: 139px;
              height: auto;
            }
            #rec804871321 .tn-elem[data-elem-id="1727696462484"] .tn-atom {
              font-size: 10px;
              line-height: 1.35;
              background-size: cover;
            }
          }
          #rec804871321 .tn-elem[data-elem-id="1727696518015"] {
            z-index: 9;
            top: 260px;
            left: calc(50% - 600px + 558px);
            width: 85px;
            height: 90px;
          }
          #rec804871321 .tn-elem[data-elem-id="1727696518015"] .tn-atom {
            border-radius: 18px;
            background-color: transparent;
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804871321 .tn-elem[data-elem-id="1727696518015"] {
              top: 253px;
              left: calc(50% - 480px + 386px);
              width: 62px;
              height: 65px;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804871321 .tn-elem[data-elem-id="1727696518015"] {
              top: 289px;
              left: calc(50% - 320px + 369px);
              width: 62px;
              height: 60px;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804871321 .tn-elem[data-elem-id="1727696518015"] {
              top: 289px;
              left: calc(50% - 160px + 57px);
              width: 46px;
              height: 45px;
            }
          }
          #rec804871321 .tn-elem[data-elem-id="1727696518014"] {
            color: #fff;
            text-align: center;
            z-index: 10;
            top: 378px;
            left: calc(50% - 600px + 484px);
            width: 233px;
            height: auto;
          }
          #rec804871321 .tn-elem[data-elem-id="1727696518014"] .tn-atom {
            color: #fff;
            font-size: 14px;
            font-family: "Montserrat", Arial, sans-serif;
            line-height: 1.4;
            font-weight: 700;
            text-transform: uppercase;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804871321 .tn-elem[data-elem-id="1727696518014"] {
              top: 336px;
              left: calc(50% - 480px + 340px);
              width: 153px;
              height: auto;
            }
            #rec804871321 .tn-elem[data-elem-id="1727696518014"] .tn-atom {
              font-size: 12px;
              background-size: cover;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804871321 .tn-elem[data-elem-id="1727696518014"] {
              top: 368px;
              left: calc(50% - 320px + 333px);
              width: 141px;
              height: auto;
            }
            #rec804871321 .tn-elem[data-elem-id="1727696518014"] .tn-atom {
              font-size: 11px;
              background-size: cover;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804871321 .tn-elem[data-elem-id="1727696518014"] {
              top: 352px;
              left: calc(50% - 160px + 10px);
              width: 139px;
              height: auto;
            }
            #rec804871321 .tn-elem[data-elem-id="1727696518014"] .tn-atom {
              font-size: 10px;
              line-height: 1.35;
              background-size: cover;
            }
          }
          #rec804871321 .tn-elem[data-elem-id="1727696518012"] {
            z-index: 11;
            top: 259px;
            left: calc(50% - 600px + 805px);
            width: 85px;
            height: 90px;
          }
          #rec804871321 .tn-elem[data-elem-id="1727696518012"] .tn-atom {
            border-radius: 18px;
            background-color: transparent;
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804871321 .tn-elem[data-elem-id="1727696518012"] {
              top: 253px;
              left: calc(50% - 480px + 550px);
              width: 62px;
              height: 65px;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804871321 .tn-elem[data-elem-id="1727696518012"] {
              top: 289px;
              left: calc(50% - 320px + 529px);
              width: 62px;
              height: 60px;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804871321 .tn-elem[data-elem-id="1727696518012"] {
              top: 288px;
              left: calc(50% - 160px + 220px);
              width: 46px;
              height: 45px;
            }
          }
          #rec804871321 .tn-elem[data-elem-id="1727696518010"] {
            color: #fff;
            text-align: center;
            z-index: 12;
            top: 377px;
            left: calc(50% - 600px + 733px);
            width: 233px;
            height: auto;
          }
          #rec804871321 .tn-elem[data-elem-id="1727696518010"] .tn-atom {
            color: #fff;
            font-size: 14px;
            font-family: "Montserrat", Arial, sans-serif;
            line-height: 1.4;
            font-weight: 700;
            text-transform: uppercase;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804871321 .tn-elem[data-elem-id="1727696518010"] {
              top: 336px;
              left: calc(50% - 480px + 511px);
              width: 140px;
              height: auto;
            }
            #rec804871321 .tn-elem[data-elem-id="1727696518010"] .tn-atom {
              font-size: 12px;
              background-size: cover;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804871321 .tn-elem[data-elem-id="1727696518010"] {
              top: 368px;
              left: calc(50% - 320px + 493px);
              width: 135px;
              height: auto;
            }
            #rec804871321 .tn-elem[data-elem-id="1727696518010"] .tn-atom {
              font-size: 11px;
              background-size: cover;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804871321 .tn-elem[data-elem-id="1727696518010"] {
              top: 351px;
              left: calc(50% - 160px + 173px);
              width: 139px;
              height: auto;
            }
            #rec804871321 .tn-elem[data-elem-id="1727696518010"] .tn-atom {
              font-size: 10px;
              line-height: 1.35;
              background-size: cover;
            }
          }
          #rec804871321 .tn-elem[data-elem-id="1727696684429"] {
            z-index: 13;
            top: 259px;
            left: calc(50% - 600px + 1039px);
            width: 85px;
            height: 90px;
          }
          #rec804871321 .tn-elem[data-elem-id="1727696684429"] .tn-atom {
            border-radius: 18px;
            background-color: transparent;
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804871321 .tn-elem[data-elem-id="1727696684429"] {
              top: 255px;
              left: calc(50% - 480px + 740px);
              width: 62px;
              height: 65px;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804871321 .tn-elem[data-elem-id="1727696684429"] {
              top: 237px;
              left: calc(50% - 320px + 918px);
              width: 62px;
              height: 60px;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804871321 .tn-elem[data-elem-id="1727696684429"] {
              top: 408px;
              left: calc(50% - 160px + 137px);
              width: 46px;
              height: 45px;
            }
          }
          #rec804871321 .tn-elem[data-elem-id="1727696684423"] {
            color: #fff;
            text-align: center;
            z-index: 14;
            top: 377px;
            left: calc(50% - 600px + 982px);
            width: 202px;
            height: auto;
          }
          #rec804871321 .tn-elem[data-elem-id="1727696684423"] .tn-atom {
            color: #fff;
            font-size: 14px;
            font-family: "Montserrat", Arial, sans-serif;
            line-height: 1.4;
            font-weight: 700;
            text-transform: uppercase;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804871321 .tn-elem[data-elem-id="1727696684423"] {
              top: 338px;
              left: calc(50% - 480px + 701px);
              width: 140px;
              height: auto;
            }
            #rec804871321 .tn-elem[data-elem-id="1727696684423"] .tn-atom {
              font-size: 12px;
              background-size: cover;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804871321 .tn-elem[data-elem-id="1727696684423"] {
              top: 316px;
              left: calc(50% - 320px + 882px);
              width: 135px;
              height: auto;
            }
            #rec804871321 .tn-elem[data-elem-id="1727696684423"] .tn-atom {
              font-size: 11px;
              background-size: cover;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804871321 .tn-elem[data-elem-id="1727696684423"] {
              top: 471px;
              left: calc(50% - 160px + 91px);
              width: 139px;
              height: auto;
            }
            #rec804871321 .tn-elem[data-elem-id="1727696684423"] .tn-atom {
              font-size: 10px;
              line-height: 1.35;
              background-size: cover;
            }
          }
          #rec804871321 .tn-elem[data-elem-id="1727696777898"] {
            color: #ffffff;
            text-align: center;
            z-index: 15;
            top: 475px;
            left: calc(50% - 600px + 478px);
            width: 244px;
            height: 55px;
          }
          #rec804871321 .tn-elem[data-elem-id="1727696777898"] .tn-atom {
            color: #ffffff;
            font-size: 13px;
            font-family: "Inter", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 500;
            border-width: 1px;
            border-radius: 12px;
            background-color: #5555f6;
            background-position: center center;
            border-color: #5555f6;
            border-style: solid;
            transition: background-color 0.2s ease-in-out,
              color 0.2s ease-in-out, border-color 0.2s ease-in-out;
          }
          @media screen and (max-width: 1199px) {
            #rec804871321 .tn-elem[data-elem-id="1727696777898"] {
              left: calc(50% - 480px + 358px);
            }
          }
          @media screen and (max-width: 959px) {
            #rec804871321 .tn-elem[data-elem-id="1727696777898"] {
              top: 445px;
              left: calc(50% - 320px + 187px);
            }
          }
          @media screen and (max-width: 639px) {
            #rec804871321 .tn-elem[data-elem-id="1727696777898"] {
              top: 546px;
              left: calc(50% - 160px + 10px);
              width: 300px;
            }
          }
        </style>
        <div class="t396">
          <div
            class="t396__artboard"
            data-artboard-recid="804871321"
            data-artboard-screens="320,640,960,1200"
            data-artboard-height="660"
            data-artboard-valign="center"
            data-artboard-upscale="grid"
            data-artboard-height-res-320="660"
            data-artboard-upscale-res-320="window"
            data-artboard-height-res-640="590"
          >
            <div class="t396__carrier" data-artboard-recid="804871321"></div>
            <div class="t396__filter" data-artboard-recid="804871321"></div>
            <div
              class="t396__elem tn-elem tn-elem__8048713211727693719780"
              data-elem-id="1727693719780"
              data-elem-type="text"
              data-field-top-value="105"
              data-field-left-value="121"
              data-field-width-value="999"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-field-top-res-320-value="35"
              data-field-left-res-320-value="13"
              data-field-width-res-320-value="293"
              data-field-top-res-640-value="44"
              data-field-left-res-640-value="42"
              data-field-width-res-640-value="540"
              data-field-left-res-960-value="81"
              data-field-width-res-960-value="798"
            >
              <div class="tn-atom" field="tn_text_1727693719780">
                ПОЛУЧИТЕ <strong>БЕСПЛАТНЫЙ АНАЛИЗ</strong> ВАШЕГО УРОВНЯ ЗНАНИЙ


              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__8048713211727693762082"
              data-elem-id="1727693762082"
              data-elem-type="text"
              data-field-top-value="191"
              data-field-left-value="217"
              data-field-width-value="808"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-field-top-res-320-value="140"
              data-field-left-res-320-value="26"
              data-field-width-res-320-value="267"
              data-field-top-res-640-value="221"
              data-field-left-res-640-value="64"
              data-field-width-res-640-value="512"
              data-field-left-res-960-value="76"
            >
              <div class="tn-atom" field="tn_text_1727693762082">
                за 7 бесплатных индивидуальных занятий вы узнаете
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__8048713211727695594558"
              data-elem-id="1727695594558"
              data-elem-type="shape"
              data-field-top-value="261"
              data-field-left-value="91"
              data-field-height-value="90"
              data-field-width-value="85"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value="px"
              data-field-widthunits-value="px"
              data-field-top-res-320-value="189"
              data-field-left-res-320-value="56"
              data-field-height-res-320-value="45"
              data-field-width-res-320-value="46"
              data-field-top-res-640-value="289"
              data-field-left-res-640-value="51"
              data-field-height-res-640-value="60"
              data-field-width-res-640-value="62"
              data-field-top-res-960-value="252"
              data-field-left-res-960-value="55"
              data-field-height-res-960-value="65"
              data-field-width-res-960-value="62"
            >
              <div
                class="tn-atom t-bgimg"
                data-original="./images/list1.png"
                aria-label=""
                role="img"
              ></div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__8048713211727695615470"
              data-elem-id="1727695615470"
              data-elem-type="text"
              data-field-top-value="379"
              data-field-left-value="18"
              data-field-width-value="233"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-field-top-res-320-value="252"
              data-field-left-res-320-value="9"
              data-field-width-res-320-value="139"
              data-field-top-res-640-value="368"
              data-field-left-res-640-value="15"
              data-field-width-res-640-value="141"
              data-field-top-res-960-value="336"
              data-field-left-res-960-value="9"
              data-field-width-res-960-value="153"
            >
              <div class="tn-atom" field="tn_text_1727695615470">
                О криптокошельках
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__8048713211727696462491"
              data-elem-id="1727696462491"
              data-elem-type="shape"
              data-field-top-value="260"
              data-field-left-value="332"
              data-field-height-value="90"
              data-field-width-value="85"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value="px"
              data-field-widthunits-value="px"
              data-field-top-res-320-value="188"
              data-field-left-res-320-value="219"
              data-field-height-res-320-value="45"
              data-field-width-res-320-value="46"
              data-field-top-res-640-value="289"
              data-field-left-res-640-value="211"
              data-field-height-res-640-value="60"
              data-field-width-res-640-value="62"
              data-field-top-res-960-value="252"
              data-field-left-res-960-value="219"
              data-field-height-res-960-value="65"
              data-field-width-res-960-value="62"
            >
              <div
                class="tn-atom t-bgimg"
                data-original="./images/list2.png"
                aria-label=""
                role="img"
              ></div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__8048713211727696462484"
              data-elem-id="1727696462484"
              data-elem-type="text"
              data-field-top-value="378"
              data-field-left-value="259"
              data-field-width-value="214"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-field-top-res-320-value="251"
              data-field-left-res-320-value="172"
              data-field-width-res-320-value="139"
              data-field-top-res-640-value="368"
              data-field-left-res-640-value="175"
              data-field-width-res-640-value="135"
              data-field-top-res-960-value="336"
              data-field-left-res-960-value="180"
              data-field-width-res-960-value="140"
            >
              <div class="tn-atom" field="tn_text_1727696462484">
                Все о биржах
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__8048713211727696518015"
              data-elem-id="1727696518015"
              data-elem-type="shape"
              data-field-top-value="260"
              data-field-left-value="558"
              data-field-height-value="90"
              data-field-width-value="85"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value="px"
              data-field-widthunits-value="px"
              data-field-top-res-320-value="289"
              data-field-left-res-320-value="57"
              data-field-height-res-320-value="45"
              data-field-width-res-320-value="46"
              data-field-top-res-640-value="289"
              data-field-left-res-640-value="369"
              data-field-height-res-640-value="60"
              data-field-width-res-640-value="62"
              data-field-top-res-960-value="253"
              data-field-left-res-960-value="386"
              data-field-height-res-960-value="65"
              data-field-width-res-960-value="62"
            >
              <div
                class="tn-atom t-bgimg"
                data-original="./images/list3.png"
                aria-label=""
                role="img"
              ></div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__8048713211727696518014"
              data-elem-id="1727696518014"
              data-elem-type="text"
              data-field-top-value="378"
              data-field-left-value="484"
              data-field-width-value="233"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-field-top-res-320-value="352"
              data-field-left-res-320-value="10"
              data-field-width-res-320-value="139"
              data-field-top-res-640-value="368"
              data-field-left-res-640-value="333"
              data-field-width-res-640-value="141"
              data-field-top-res-960-value="336"
              data-field-left-res-960-value="340"
              data-field-width-res-960-value="153"
            >
              <div class="tn-atom" field="tn_text_1727696518014">
                что такое блокчейн?
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__8048713211727696518012"
              data-elem-id="1727696518012"
              data-elem-type="shape"
              data-field-top-value="259"
              data-field-left-value="805"
              data-field-height-value="90"
              data-field-width-value="85"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value="px"
              data-field-widthunits-value="px"
              data-field-top-res-320-value="288"
              data-field-left-res-320-value="220"
              data-field-height-res-320-value="45"
              data-field-width-res-320-value="46"
              data-field-top-res-640-value="289"
              data-field-left-res-640-value="529"
              data-field-height-res-640-value="60"
              data-field-width-res-640-value="62"
              data-field-top-res-960-value="253"
              data-field-left-res-960-value="550"
              data-field-height-res-960-value="65"
              data-field-width-res-960-value="62"
            >
              <div
                class="tn-atom t-bgimg"
                data-original="./images/list4.png"
                aria-label=""
                role="img"
              ></div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__8048713211727696518010"
              data-elem-id="1727696518010"
              data-elem-type="text"
              data-field-top-value="377"
              data-field-left-value="733"
              data-field-width-value="233"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-field-top-res-320-value="351"
              data-field-left-res-320-value="173"
              data-field-width-res-320-value="139"
              data-field-top-res-640-value="368"
              data-field-left-res-640-value="493"
              data-field-width-res-640-value="135"
              data-field-top-res-960-value="336"
              data-field-left-res-960-value="511"
              data-field-width-res-960-value="140"
            >
              <div class="tn-atom" field="tn_text_1727696518010">
                О АНАЛИЗЕ МОНЕТ
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__8048713211727696684429"
              data-elem-id="1727696684429"
              data-elem-type="shape"
              data-field-top-value="259"
              data-field-left-value="1039"
              data-field-height-value="90"
              data-field-width-value="85"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value="px"
              data-field-widthunits-value="px"
              data-field-top-res-320-value="408"
              data-field-left-res-320-value="137"
              data-field-height-res-320-value="45"
              data-field-width-res-320-value="46"
              data-field-top-res-640-value="237"
              data-field-left-res-640-value="918"
              data-field-height-res-640-value="60"
              data-field-width-res-640-value="62"
              data-field-top-res-960-value="255"
              data-field-left-res-960-value="740"
              data-field-height-res-960-value="65"
              data-field-width-res-960-value="62"
            >
              <div
                class="tn-atom t-bgimg"
                data-original="./images/list5.png"
                aria-label=""
                role="img"
              ></div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__8048713211727696684423"
              data-elem-id="1727696684423"
              data-elem-type="text"
              data-field-top-value="377"
              data-field-left-value="982"
              data-field-width-value="202"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-field-top-res-320-value="471"
              data-field-left-res-320-value="91"
              data-field-width-res-320-value="139"
              data-field-top-res-640-value="316"
              data-field-left-res-640-value="882"
              data-field-width-res-640-value="135"
              data-field-top-res-960-value="338"
              data-field-left-res-960-value="701"
              data-field-width-res-960-value="140"
            >
              <div class="tn-atom" field="tn_text_1727696684423">
                Как получать пасивный доход
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__8048713211727696777898"
              data-elem-id="1727696777898"
              data-elem-type="button"
              data-field-top-value="475"
              data-field-left-value="478"
              data-field-height-value="55"
              data-field-width-value="244"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value="px"
              data-field-widthunits-value="px"
              data-field-top-res-320-value="546"
              data-field-left-res-320-value="10"
              data-field-width-res-320-value="300"
              data-field-top-res-640-value="445"
              data-field-left-res-640-value="187"
              data-field-left-res-960-value="358"
            >
              <a class="tn-atom" href="#form-wrap">Участвовать бесплатно</a>
            </div>
          </div>
        </div>
        <script>
          t_onFuncLoad("t396_initialScale", function () {
            t396_initialScale("804871321");
          });
          t_onReady(function () {
            t_onFuncLoad("t396_init", function () {
              t396_init("804871321");
            });
          });
        </script>
        <!-- /T396 -->
      </div>
      <div id="rec804942345" class="r t-rec" style="" data-record-type="215">
        <a name="3" style="font-size: 0"></a>
      </div>
      <div
        id="rec804892517"
        class="r t-rec t-rec_pt_0"
        style="padding-top: 0px"
        data-animationappear="off"
        data-record-type="396"
      >
        <!-- T396 -->
        <style>
          #rec804892517 .t396__artboard {
            height: 920px;
            background-color: #181818;
          }
          #rec804892517 .t396__filter {
            height: 1170px;
          }
          #rec804892517 .t396__carrier {
            height: 1170px;
            background-position: center center;
            background-attachment: scroll;
            background-size: cover;
            background-repeat: no-repeat;
          }
          @media screen and (max-width: 1199px) {
            #rec804892517 .t396__artboard,
            #rec804892517 .t396__filter,
            #rec804892517 .t396__carrier {
            }
            #rec804892517 .t396__filter {
            }
            #rec804892517 .t396__carrier {
              background-attachment: scroll;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804892517 .t396__artboard,
            #rec804892517 .t396__filter,
            #rec804892517 .t396__carrier {
              height: 1130px;
            }
            #rec804892517 .t396__filter {
            }
            #rec804892517 .t396__carrier {
              background-attachment: scroll;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804892517 .t396__artboard,
            #rec804892517 .t396__filter,
            #rec804892517 .t396__carrier {
              height: 1450px;
            }
            #rec804892517 .t396__filter {
            }
            #rec804892517 .t396__carrier {
              background-attachment: scroll;
            }
          }
          #rec804892517 .tn-elem[data-elem-id="1727693562306"] {
            z-index: 3;
            top: 53px;
            left: calc(50% - 600px + 20px);
            width: 1161px;
            height: 356px;
          }
          #rec804892517 .tn-elem[data-elem-id="1727693562306"] .tn-atom {
            border-radius: 18px 18px 18px 18px;
            background-color: #2B2B2B;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804892517 .tn-elem[data-elem-id="1727693562306"] {
              left: calc(50% - 480px + 14px);
              width: 932px;
              height: 1071px;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804892517 .tn-elem[data-elem-id="1727693562306"] {
              width: 614px;
              height: 1525px;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804892517 .tn-elem[data-elem-id="1727693562306"] {
              top: 43px;
              left: calc(50% - 160px + 10px);
              width: 300px;
              height: 1411px;
            }
          }
          #rec804892517 .tn-elem[data-elem-id="1727693719780"] {
            color: #fff;
            z-index: 4;
            top: 104px;
            left: calc(50% - 600px + 77px);
            width: 315px;
            height: auto;
          }
          #rec804892517 .tn-elem[data-elem-id="1727693719780"] .tn-atom {
            vertical-align: middle;
            color: #fff;
            font-size: 38px;
            font-family: "Montserrat", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            letter-spacing: -1px;
            text-transform: uppercase;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804892517 .tn-elem[data-elem-id="1727693719780"] {
              top: 65px;
              left: calc(50% - 480px + 40px);
              height: auto;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804892517 .tn-elem[data-elem-id="1727693719780"] {
              top: 55px;
              left: calc(50% - 320px + 30px);
              height: auto;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804892517 .tn-elem[data-elem-id="1727693719780"] {
              top: 65px;
              left: calc(50% - 160px + 14px);
              width: 293px;
              height: auto;
            }
            #rec804892517 .tn-elem[data-elem-id="1727693719780"] {
              text-align: center;
            }
            #rec804892517 .tn-elem[data-elem-id="1727693719780"] .tn-atom {
              font-size: 21px;
              background-size: cover;
            }
          }
          #rec804892517 .tn-elem[data-elem-id="1727693762082"] {
            color: #fff;
            z-index: 5;
            top: 172px;
            left: calc(50% - 600px + 78px);
            width: 442px;
            height: auto;
          }
          #rec804892517 .tn-elem[data-elem-id="1727693762082"] .tn-atom {
            vertical-align: middle;
            color: #fff;
            font-size: 12px;
            font-family: "Inter", Arial, sans-serif;
            line-height: 1.4;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804892517 .tn-elem[data-elem-id="1727693762082"] {
              top: 128px;
              left: calc(50% - 480px + 40px);
              height: auto;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804892517 .tn-elem[data-elem-id="1727693762082"] {
              top: 118px;
              left: calc(50% - 320px + 30px);
              width: 512px;
              height: auto;
            }
            #rec804892517 .tn-elem[data-elem-id="1727693762082"] .tn-atom {
              font-size: 11px;
              background-size: cover;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804892517 .tn-elem[data-elem-id="1727693762082"] {
              top: 102px;
              left: calc(50% - 160px + 27px);
              width: 267px;
              height: auto;
            }
            #rec804892517 .tn-elem[data-elem-id="1727693762082"] {
              text-align: center;
            }
            #rec804892517 .tn-elem[data-elem-id="1727693762082"] .tn-atom {
              font-size: 8px;
              line-height: 1.35;
              background-size: cover;
            }
          }
          #rec804892517 .tn-elem[data-elem-id="1727696986793"] {
            color: #5555f6;
            text-align: center;
            z-index: 6;
            top: 117px;
            left: calc(50% - 600px + 625px);
            width: 215px;
            height: auto;
          }
          #rec804892517 .tn-elem[data-elem-id="1727696986793"] .tn-atom {
            vertical-align: middle;
            color: #5555f6;
            font-size: 32px;
            font-family: "Montserrat", Arial, sans-serif;
            line-height: 1.4;
            font-weight: 700;
            text-transform: uppercase;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804892517 .tn-elem[data-elem-id="1727696986793"] {
              top: 321px;
              left: calc(50% - 480px + 35px);
              height: auto;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804892517 .tn-elem[data-elem-id="1727696986793"] {
              top: 287px;
              left: calc(50% - 320px + 32px);
              width: 150px;
              height: auto;
            }
            #rec804892517 .tn-elem[data-elem-id="1727696986793"] .tn-atom {
              font-size: 24px;
              background-size: cover;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804892517 .tn-elem[data-elem-id="1727696986793"] {
              top: 252px;
              left: calc(50% - 160px + 29px);
              width: 110px;
              height: auto;
            }
            #rec804892517 .tn-elem[data-elem-id="1727696986793"] {
              text-align: center;
            }
            #rec804892517 .tn-elem[data-elem-id="1727696986793"] .tn-atom {
              font-size: 18px;
              line-height: 1.35;
              background-size: cover;
            }
          }
          #rec804892517 .tn-elem[data-elem-id="1727697050456"] {
            color: #fff;
            text-align: center;
            z-index: 7;
            top: 162px;
            left: calc(50% - 600px + 633px);
            width: 200px;
            height: auto;
          }
          #rec804892517 .tn-elem[data-elem-id="1727697050456"] .tn-atom {
            vertical-align: middle;
            color: #fff;
            font-size: 10px;
            font-family: "Inter", Arial, sans-serif;
            line-height: 1.3;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804892517 .tn-elem[data-elem-id="1727697050456"] {
              top: 366px;
              left: calc(50% - 480px + 35px);
              height: auto;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804892517 .tn-elem[data-elem-id="1727697050456"] {
              top: 326px;
              left: calc(50% - 320px + 32px);
              width: 193px;
              height: auto;
            }
            #rec804892517 .tn-elem[data-elem-id="1727697050456"] .tn-atom {
              font-size: 11px;
              background-size: cover;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804892517 .tn-elem[data-elem-id="1727697050456"] {
              top: 281px;
              left: calc(50% - 160px + 17px);
              width: 134px;
              height: auto;
            }
            #rec804892517 .tn-elem[data-elem-id="1727697050456"] {
              text-align: center;
            }
            #rec804892517 .tn-elem[data-elem-id="1727697050456"] .tn-atom {
              font-size: 8px;
              line-height: 1.35;
              background-size: cover;
            }
          }
          #rec804892517 .tn-elem[data-elem-id="1727697148313"] {
            color: #5555f6;
            text-align: center;
            z-index: 8;
            top: 246px;
            left: calc(50% - 600px + 625px);
            width: 215px;
            height: auto;
          }
          #rec804892517 .tn-elem[data-elem-id="1727697148313"] .tn-atom {
            vertical-align: middle;
            color: #5555f6;
            font-size: 32px;
            font-family: "Montserrat", Arial, sans-serif;
            line-height: 1.4;
            font-weight: 700;
            text-transform: uppercase;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804892517 .tn-elem[data-elem-id="1727697148313"] {
              top: 322px;
              left: calc(50% - 480px + 280px);
              height: auto;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804892517 .tn-elem[data-elem-id="1727697148313"] {
              top: 286px;
              left: calc(50% - 320px + 250px);
              width: 150px;
              height: auto;
            }
            #rec804892517 .tn-elem[data-elem-id="1727697148313"] .tn-atom {
              font-size: 24px;
              background-size: cover;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804892517 .tn-elem[data-elem-id="1727697148313"] {
              top: 340px;
              left: calc(50% - 160px + 182px);
              width: 110px;
              height: auto;
            }
            #rec804892517 .tn-elem[data-elem-id="1727697148313"] {
              text-align: center;
            }
            #rec804892517 .tn-elem[data-elem-id="1727697148313"] .tn-atom {
              font-size: 18px;
              line-height: 1.35;
              background-size: cover;
            }
          }
          #rec804892517 .tn-elem[data-elem-id="1727697148308"] {
            color: #fff;
            text-align: center;
            z-index: 9;
            top: 289px;
            left: calc(50% - 600px + 633px);
            width: 200px;
            height: auto;
          }
          #rec804892517 .tn-elem[data-elem-id="1727697148308"] .tn-atom {
            vertical-align: middle;
            color: #fff;
            font-size: 10px;
            font-family: "Inter", Arial, sans-serif;
            line-height: 1.3;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804892517 .tn-elem[data-elem-id="1727697148308"] {
              top: 367px;
              left: calc(50% - 480px + 280px);
              height: auto;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804892517 .tn-elem[data-elem-id="1727697148308"] {
              top: 325px;
              left: calc(50% - 320px + 250px);
              width: 217px;
              height: auto;
            }
            #rec804892517 .tn-elem[data-elem-id="1727697148308"] .tn-atom {
              font-size: 11px;
              background-size: cover;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804892517 .tn-elem[data-elem-id="1727697148308"] {
              top: 369px;
              left: calc(50% - 160px + 170px);
              width: 134px;
              height: auto;
            }
            #rec804892517 .tn-elem[data-elem-id="1727697148308"] {
              text-align: center;
            }
            #rec804892517 .tn-elem[data-elem-id="1727697148308"] .tn-atom {
              font-size: 8px;
              line-height: 1.35;
              background-size: cover;
            }
          }
          #rec804892517 .tn-elem[data-elem-id="1727697216965"] {
            color: #5555f6;
            text-align: center;
            z-index: 10;
            top: 118px;
            left: calc(50% - 600px + 881px);
            width: 200px;
            height: auto;
          }
          #rec804892517 .tn-elem[data-elem-id="1727697216965"] .tn-atom {
            vertical-align: middle;
            color: #5555f6;
            font-size: 32px;
            font-family: "Montserrat", Arial, sans-serif;
            line-height: 1.4;
            font-weight: 700;
            text-transform: uppercase;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804892517 .tn-elem[data-elem-id="1727697216965"] {
              top: 322px;
              left: calc(50% - 480px + 550px);
              height: auto;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804892517 .tn-elem[data-elem-id="1727697216965"] {
              top: 418px;
              left: calc(50% - 320px + 32px);
              width: 150px;
              height: auto;
            }
            #rec804892517 .tn-elem[data-elem-id="1727697216965"] .tn-atom {
              font-size: 24px;
              background-size: cover;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804892517 .tn-elem[data-elem-id="1727697216965"] {
              top: 340px;
              left: calc(50% - 160px + 29px);
              width: 110px;
              height: auto;
            }
            #rec804892517 .tn-elem[data-elem-id="1727697216965"] {
              text-align: center;
            }
            #rec804892517 .tn-elem[data-elem-id="1727697216965"] .tn-atom {
              font-size: 18px;
              line-height: 1.35;
              background-size: cover;
            }
          }
          #rec804892517 .tn-elem[data-elem-id="1727697216961"] {
            color: #fff;
            text-align: center;
            z-index: 11;
            top: 162px;
            left: calc(50% - 600px + 881px);
            width: 200px;
            height: auto;
          }
          #rec804892517 .tn-elem[data-elem-id="1727697216961"] .tn-atom {
            vertical-align: middle;
            color: #fff;
            font-size: 10px;
            font-family: "Inter", Arial, sans-serif;
            line-height: 1.3;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804892517 .tn-elem[data-elem-id="1727697216961"] {
              top: 367px;
              left: calc(50% - 480px + 550px);
              height: auto;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804892517 .tn-elem[data-elem-id="1727697216961"] {
              top: 457px;
              left: calc(50% - 320px + 32px);
              width: 171px;
              height: auto;
            }
            #rec804892517 .tn-elem[data-elem-id="1727697216961"] .tn-atom {
              font-size: 11px;
              background-size: cover;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804892517 .tn-elem[data-elem-id="1727697216961"] {
              top: 370px;
              left: calc(50% - 160px + 19px);
              width: 130px;
              height: auto;
            }
            #rec804892517 .tn-elem[data-elem-id="1727697216961"] {
              text-align: center;
            }
            #rec804892517 .tn-elem[data-elem-id="1727697216961"] .tn-atom {
              font-size: 8px;
              line-height: 1.35;
              background-size: cover;
            }
          }
          #rec804892517 .tn-elem[data-elem-id="1727697299255"] {
            color: #5555f6;
            text-align: center;
            z-index: 12;
            top: 246px;
            left: calc(50% - 600px + 881px);
            width: 200px;
            height: auto;
          }
          #rec804892517 .tn-elem[data-elem-id="1727697299255"] .tn-atom {
            vertical-align: middle;
            color: #5555f6;
            font-size: 32px;
            font-family: "Montserrat", Arial, sans-serif;
            line-height: 1.4;
            font-weight: 700;
            text-transform: uppercase;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804892517 .tn-elem[data-elem-id="1727697299255"] {
              top: 210px;
              left: calc(50% - 480px + 550px);
              height: auto;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804892517 .tn-elem[data-elem-id="1727697299255"] {
              top: 418px;
              left: calc(50% - 320px + 250px);
              width: 150px;
              height: auto;
            }
            #rec804892517 .tn-elem[data-elem-id="1727697299255"] .tn-atom {
              font-size: 24px;
              background-size: cover;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804892517 .tn-elem[data-elem-id="1727697299255"] {
              top: 251px;
              left: calc(50% - 160px + 183px);
              width: 110px;
              height: auto;
            }
            #rec804892517 .tn-elem[data-elem-id="1727697299255"] {
              text-align: center;
            }
            #rec804892517 .tn-elem[data-elem-id="1727697299255"] .tn-atom {
              font-size: 18px;
              line-height: 1.35;
              background-size: cover;
            }
          }
          #rec804892517 .tn-elem[data-elem-id="1727697299249"] {
            color: #fff;
            text-align: center;
            z-index: 13;
            top: 289px;
            left: calc(50% - 600px + 881px);
            width: 200px;
            height: auto;
          }
          #rec804892517 .tn-elem[data-elem-id="1727697299249"] .tn-atom {
            vertical-align: middle;
            color: #fff;
            font-size: 10px;
            font-family: "Inter", Arial, sans-serif;
            line-height: 1.3;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804892517 .tn-elem[data-elem-id="1727697299249"] {
              top: 255px;
              left: calc(50% - 480px + 550px);
              height: auto;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804892517 .tn-elem[data-elem-id="1727697299249"] {
              top: 457px;
              left: calc(50% - 320px + 250px);
              width: 171px;
              height: auto;
            }
            #rec804892517 .tn-elem[data-elem-id="1727697299249"] .tn-atom {
              font-size: 11px;
              background-size: cover;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804892517 .tn-elem[data-elem-id="1727697299249"] {
              top: 281px;
              left: calc(50% - 160px + 173px);
              width: 130px;
              height: auto;
            }
            #rec804892517 .tn-elem[data-elem-id="1727697299249"] {
              text-align: center;
            }
            #rec804892517 .tn-elem[data-elem-id="1727697299249"] .tn-atom {
              font-size: 8px;
              line-height: 1.35;
              background-size: cover;
            }
          }
          #rec804892517 .tn-elem[data-elem-id="1727697566443"] {
            color: #fff;
            z-index: 14;
            top: 485px;
            left: calc(50% - 600px + 81px);
            width: 259px;
            height: auto;
          }
          #rec804892517 .tn-elem[data-elem-id="1727697566443"] .tn-atom {
            vertical-align: middle;
            color: #fff;
            font-size: 36px;
            font-family: "Montserrat", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            letter-spacing: -1px;
            text-transform: uppercase;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804892517 .tn-elem[data-elem-id="1727697566443"] {
              top: 488px;
              left: calc(50% - 480px + 42px);
              height: auto;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804892517 .tn-elem[data-elem-id="1727697566443"] {
              top: 591px;
              left: calc(50% - 320px + 35px);
              height: auto;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804892517 .tn-elem[data-elem-id="1727697566443"] {
              top: 460px;
              left: calc(50% - 160px + 14px);
              width: 293px;
              height: auto;
            }
            #rec804892517 .tn-elem[data-elem-id="1727697566443"] {
              text-align: center;
            }
            #rec804892517 .tn-elem[data-elem-id="1727697566443"] .tn-atom {
              font-size: 24px;
              background-size: cover;
            }
          }
          #rec804892517 .tn-elem[data-elem-id="1727697706387"] {
            z-index: 15;
            top: 566px;
            left: calc(50% - 600px + 474px);
            width: 251px;
            height: 307px;
          }
          #rec804892517 .tn-elem[data-elem-id="1727697706387"] .tn-atom {
            border-radius: 0px 0px 0px 0px;
            background-color: transparent;
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804892517 .tn-elem[data-elem-id="1727697706387"] {
              top: 567px;
              left: calc(50% - 480px + 354px);
            }
          }
          @media screen and (max-width: 959px) {
            #rec804892517 .tn-elem[data-elem-id="1727697706387"] {
              top: 664px;
              left: calc(50% - 320px + 211px);
              width: 213px;
              height: 260px;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804892517 .tn-elem[data-elem-id="1727697706387"] {
              top: 558px;
              left: calc(50% - 160px + 17px);
              width: 285px;
              height: 165px;
            }
            #rec804892517 .tn-elem[data-elem-id="1727697706387"] .tn-atom {
              background-position: center top;
              background-size: cover;
            }
          }
          #rec804892517 .tn-elem[data-elem-id="1727697769330"] {
            color: #fff;
            text-align: center;
            z-index: 16;
            top: 891px;
            left: calc(50% - 600px + 478px);
            width: 244px;
            height: auto;
          }
          #rec804892517 .tn-elem[data-elem-id="1727697769330"] .tn-atom {
            vertical-align: middle;
            color: #fff;
            font-size: 16px;
            font-family: "Montserrat", Arial, sans-serif;
            line-height: 1.3;
            font-weight: 500;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804892517 .tn-elem[data-elem-id="1727697769330"] {
              top: 889px;
              left: calc(50% - 480px + 356px);
              height: auto;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804892517 .tn-elem[data-elem-id="1727697769330"] {
              top: 940px;
              left: calc(50% - 320px + 211px);
              width: 217px;
              height: auto;
            }
            #rec804892517 .tn-elem[data-elem-id="1727697769330"] .tn-atom {
              font-size: 15px;
              background-size: cover;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804892517 .tn-elem[data-elem-id="1727697769330"] {
              top: 525px;
              left: calc(50% - 160px + 60px);
              width: 199px;
              height: auto;
            }
            #rec804892517 .tn-elem[data-elem-id="1727697769330"] {
              text-align: center;
            }
            #rec804892517 .tn-elem[data-elem-id="1727697769330"] .tn-atom {
              font-size: 18px;
              line-height: 1.35;
              background-size: cover;
            }
          }
          #rec804892517 .tn-elem[data-elem-id="1727697817465"] {
            color: #fff;
            text-align: center;
            z-index: 17;
            top: 918px;
            left: calc(50% - 600px + 452px);
            width: 295px;
            height: auto;
          }
          #rec804892517 .tn-elem[data-elem-id="1727697817465"] .tn-atom {
            vertical-align: middle;
            color: #fff;
            font-size: 12px;
            font-family: "Inter", Arial, sans-serif;
            line-height: 1.3;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804892517 .tn-elem[data-elem-id="1727697817465"] {
              top: 919px;
              left: calc(50% - 480px + 357px);
              width: 244px;
              height: auto;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804892517 .tn-elem[data-elem-id="1727697817465"] {
              top: 966px;
              left: calc(50% - 320px + 211px);
              width: 217px;
              height: auto;
            }
            #rec804892517 .tn-elem[data-elem-id="1727697817465"] .tn-atom {
              font-size: 10px;
              background-size: cover;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804892517 .tn-elem[data-elem-id="1727697817465"] {
              top: 738px;
              left: calc(50% - 160px + 35px);
              width: 249px;
              height: auto;
            }
            #rec804892517 .tn-elem[data-elem-id="1727697817465"] {
              text-align: center;
            }
            #rec804892517 .tn-elem[data-elem-id="1727697817465"] .tn-atom {
              font-size: 8px;
              line-height: 1.35;
              background-size: cover;
            }
          }
        </style>
        <div class="t396">
          <div
            class="t396__artboard"
            data-artboard-recid="804892517"
            data-artboard-screens="320,640,960,1200"
            data-artboard-valign="center"
            data-artboard-upscale="grid"
            
            style="padding: 0 20px;"
          >
            <div class="t396__carrier" data-artboard-recid="804892517"></div>
            <div class="t396__filter" data-artboard-recid="804892517"></div>
     
            <div class="academy">
              <div class="academy__container">
                <div class="academy__left">
                  <h2 class="academy__title">О АКАДЕМИИ</h2>
                  <p class="academy__text">
                    Мы являемся образовательным клубом который объединил единомышленников с различным опытом и навыками для достижения
одной цели - обмен знаниями, информацией и координация комьюнити в вопросах анализа монет, участия в различных новых проектах,
извлечения максимальной выгоды из амбассадорских и реферальных программ таких проектов, а также по всем сопутствующим темам. Мы постоянно заключаем новые партнёрства и контракты с независимыми
аналитиками, инвесторами и трейдерами для того чтобы наше комьюнити имело полную картину рынка криптовалют и быть в курсе
всех актуальных возможностей.
                  </p>
                </div>
                <div class="academy__right">
                  <div class="academy__item">
                    <h3 class="academy__item-title">ВОЗМОЖНОСТЬ</h3>
                    <p class="academy__item-text">
                      Увеличить свой капитал поможет вам грамотно управлять рисками и использовать рыночные возможности для стабильного роста капитала — даже если вы новичок
                    </p>
                  </div>
                  <div class="academy__item">
                    <h3 class="academy__item-title">12</h3>
                    <p class="academy__item-text">
                      Криптовалютных конференций по всему миру посетили наши кураторы чтобы всегда быть в курсе зарождающихся трендов и нарративов
                    </p>
                  </div>
                  <div class="academy__item">
                    <h3 class="academy__item-title">600+</h3>
                    <p class="academy__item-text">
                      Наши кураторы помогли ученикам собрать грамотные криптовалютные портфели с учётом их целей и текущей ситуации на рынке
                    </p>
                  </div>
                  <div class="academy__item">
                    <h3 class="academy__item-title">КАЖДЫЙ</h3>
                    <p class="academy__item-text">
                      Участник нашего комьюнити регулярно получают вознаграждения от новых проектов и используют разные стратегии заработка в криптовалюте. Размер прибыли зависит только от ваших действий и текущей ситуации на рынке
                    </p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="speaker">
              <div class="speaker__container">
                <h2 class="speaker__title">СПИКЕР</h2>
                <div class="speaker__content">
                  <img src="./images/man.png" alt="Гущин Максим" class="speaker__photo">
                  <div class="speaker__text-block">
                    <h3 class="speaker__name">Гущин Максим</h3>
                    <p class="speaker__text">
                      Я сам прошёл путь от полного нуля до криптопортфеля на $100K.  Я не из тех, кто «торговал когда-то в 2017». 
Я работаю на рынке прямо сейчас и делюсь с тобой свежими, проверенными инструментами, 
а не старыми историями.  Сложные моменты объясняю простым и понятным языком — даже если пока с трудом отличаешь биткоин от эфира.  Помогу тебе зарядиться уверенностью и настроиться на результат.  Я уже преодолел этот путь — теперь настала твоя очередь. Я буду рядом, чтобы поддержать и помочь тебе не свернуть с курса
                    </p>
                  </div>
                </div>
              </div>
            </в>
            
            
          </div>
        </div>
        <script>
          t_onFuncLoad("t396_initialScale", function () {
            t396_initialScale("804892517");
          });
          t_onReady(function () {
            t_onFuncLoad("t396_init", function () {
              t396_init("804892517");
            });
          });
        </script>
        <!-- /T396 -->
      </div>
      <div
        id="rec834173374"
        class="r t-rec t-rec_pt_90 t-form__screen-hiderecord"
        style="padding-top: 10px; background-color: #181818;"
        data-record-type="1040"
      >
        <!-- t1040 -->
        <div class="t1040 t-quiz t-quiz-test fixed-height without-panel">
          <div class="t-container">
            <div class="t-quiz__col t-col t-col_10 t-prefix_1">
              <div class="t-quiz__quiz">
                <div
                  id="form834173374"
                  name="form834173374"
                  data-inputbox=".t-input-group"
                  class="t-form js-form-proccess t-form_inputs-total_5"
                >
                 
                  <div
                    class="t-quiz__quiz-wrapper t-quiz__quiz-wrapper_fixed-height t-quiz__quiz-published without-panel t-quiz__inputs-in-cols"
                    data-quiz-height="600px"
                    data-auto-step-change="true"
                  >
                    <div class="t-quiz__content-padding-container">
                      <div class="t-quiz__content-wrapper">
                        <div class="t-quiz__progress-bar-container">
                          <div
                            class="t-quiz__progressbar"
                            style="background-color: rgba(255, 90, 19, 0.2)"
                          >
                            <div
                              class="t-quiz__progress"
                              style="background-color: #ff5a13"
                            ></div>
                          </div>
                        </div>
                        <div class="t-quiz__main">
                          <div
                            class="t-form__inputsbox t-quiz__quiz-form-wrapper t-quiz__quiz-form-wrapper_withcheckbox t-quiz__quiz-form-wrapper_newcapturecondition"
                          >
                            <div
                              class="t-quiz__cover t-quiz__cover-test t-quiz__screen-wrapper t-step-form__step"
                              data-step-index="0"
                            >
                              <div
                                class="t-quiz__cover__side-container rightside"
                              >
                                <div
                                  class="t-quiz__cover__content-container justify-center align-start"
                                >
                                  <div
                                    class="t-quiz__cover__text-wrapper align-start"
                                  >
                                    <div
                                      class="t-quiz__cover__title t-title t-heading_xs"
                                      field="li_cover_title__1722853964139"
                                    >
                                    Секретные материалы для тех, кто хочет зайти  
в крипту с умом <br><br>
<span style="font-size: 18px;">Пройди мини-опрос и получи:</span>
                                    </div>
                                    <div
                                      class="t-quiz__cover__descr t-descr t-descr_sm"
                                      field="li_cover_descr__1722853964139"
                                     
                                    >
                                      1. 10$ для тестовой торговли с нашим
                                      специалистом <br />2. Две книги: А.Герчик
                                      "Курс активного трейдера" и Б.Грэм
                                      "Разумный инвестор" - их рекомендуют к
                                      прочтению 90% инвесторов <br />3.
                                      Криптословарь с терминами и жаргонами,
                                      чтобы понимать инвесторов
                                    </div>
                                  </div>
                                  <div class="t-quiz__cover__btns-container">
                                    <button
                                      type="button"
                                      class="t-btn t-quiz__btn_start t-quiz__btn_md"
                                      style="
                                        color: #ffffff;
                                        background-image: linear-gradient(
                                          0.75turn,
                                          rgba(255, 76, 0, 1) 0%,
                                          rgba(255, 129, 76, 1) 100%
                                        );
                                        border-radius: 4px;
                                        -moz-border-radius: 4px;
                                        -webkit-border-radius: 4px;
                                      "
                                    >
                                      <span>Начать</span>
                                      <svg
                                        class="t-btn__icon t-btn__icon_arrow right"
                                        width="18"
                                        height="18"
                                        viewBox="0 0 18 18"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path
                                          d="M14.25 9H3.75"
                                          stroke="currentColor"
                                          stroke-width="1.4"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                        ></path>
                                        <path
                                          d="M9 3.75L3.75 9L9 14.25"
                                          stroke="currentColor"
                                          stroke-width="1.4"
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                        ></path>
                                      </svg>
                                    </button>
                                  </div>
                                  <span class="t-quiz-text">Доступ откроется только после анкеты — спеши, пока не закрыли</span>
                                </div>
                                <div class="t-quiz__cover__side-cover">
                                  <div
                                    class="t-quiz__cover__container"
                                    style="height: 600px"
                                  >
                                    <div
                                      class="t-quiz__cover__img t-bgimg"
                                      data-original="https://static.tildacdn.com/tild3161-3137-4066-a361-313265646263/jonathan-borba-lsGZl.jpg"
                                      bgimgfield="li_cover_img__1722853964139"
                                      style="
                                        background-image: url('images/jonathan-borba-lsGZl.jpg');
                                        background-size: cover;
                                        background-repeat: no-repeat;
                                        background-position: center top;
                                      "
                                      itemscope=""
                                      itemtype="http://schema.org/ImageObject"
                                    >
                                      <meta
                                        itemprop="image"
                                        content="https://static.tildacdn.com/tild3161-3137-4066-a361-313265646263/jonathan-borba-lsGZl.jpg"
                                      />
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div
                              class="t-quiz__screen-wrapper t-step-form__step"
                              data-step-index="1"
                            >
                              <div
                                class="t-input-group t-input-group_rd t-input-group_two-cols"
                                data-input-lid="1722854538960"
                                role="radiogroup"
                                aria-labelledby="field-title_1722854538960"
                                data-field-radcb="rb"
                                data-field-async="true"
                                data-field-type="rd"
                                data-field-name="1-й вопрос. Какой у Вас опыт в криптовалюте:"
                              >
                                <div class="t-input-group__header">
                                  <div class="t-input-group__title-container">
                                    <div
                                      class="t-input-title t-heading t-heading_xs"
                                      id="field-title_1722854538960"
                                      data-redactor-toolbar="no"
                                      field="li_title__1722854538960"
                                      style=""
                                    >
                                      1-й вопрос. Какой у Вас опыт в
                                      криптовалюте:
                                    </div>
                                  </div>
                                </div>
                                <div>
                                  <div
                                    class="t-input-block"
                                    style="border-radius: 4px"
                                  >
                                    <div
                                      class="t-radio__wrapper t-radio__wrapper_button"
                                    >
                                      <label
                                        class="t-radio__item t-radio__control t-text t-text_xs"
                                        style=""
                                      >
                                        <input
                                          type="radio"
                                          name="1-й вопрос. Какой у Вас опыт в криптовалюте:"
                                          value="а) меньше одного месяца"
                                          class="t-radio js-tilda-rule"
                                          data-tilda-req="1"
                                          aria-required="true"
                                        />
                                        <div
                                          class="t-radio__indicator"
                                          style="border-color: #ff5a13"
                                        ></div>
                                        <span>а) меньше одного месяца</span>
                                      </label>
                                      <label
                                        class="t-radio__item t-radio__control t-text t-text_xs"
                                        style=""
                                      >
                                        <input
                                          type="radio"
                                          name="1-й вопрос. Какой у Вас опыт в криптовалюте:"
                                          value="б) от одного до шести месяцев"
                                          class="t-radio js-tilda-rule"
                                          data-tilda-req="1"
                                          aria-required="true"
                                        />
                                        <div
                                          class="t-radio__indicator"
                                          style="border-color: #ff5a13"
                                        ></div>
                                        <span
                                          >б) от одного до шести месяцев</span
                                        >
                                      </label>
                                      <label
                                        class="t-radio__item t-radio__control t-text t-text_xs"
                                        style=""
                                      >
                                        <input
                                          type="radio"
                                          name="1-й вопрос. Какой у Вас опыт в криптовалюте:"
                                          value="в) больше года"
                                          class="t-radio js-tilda-rule"
                                          data-tilda-req="1"
                                          aria-required="true"
                                        />
                                        <div
                                          class="t-radio__indicator"
                                          style="border-color: #ff5a13"
                                        ></div>
                                        <span>в) больше года</span>
                                      </label>
                                      <label
                                        class="t-radio__item t-radio__control t-text t-text_xs"
                                        style=""
                                      >
                                        <input
                                          type="radio"
                                          name="1-й вопрос. Какой у Вас опыт в криптовалюте:"
                                          value="г) более трёх лет"
                                          class="t-radio js-tilda-rule"
                                          data-tilda-req="1"
                                          aria-required="true"
                                        />
                                        <div
                                          class="t-radio__indicator"
                                          style="border-color: #ff5a13"
                                        ></div>
                                        <span>г) более трёх лет</span>
                                      </label>
                                      <script>
                                        t_onReady(function () {
                                          t_onFuncLoad(
                                            "t_loadJsFile",
                                            function () {
                                              t_loadJsFile(
                                                "https://static.tildacdn.com/js/tilda-variant-select-1.0.min.js",
                                                function () {
                                                  t_onFuncLoad(
                                                    "t_input_radiobuttons_init",
                                                    function () {
                                                      try {
                                                        t_input_radiobuttons_init(
                                                          "834173374",
                                                          "1722854538960"
                                                        );
                                                      } catch (e) {
                                                        console.log(e);
                                                      }
                                                    }
                                                  );
                                                }
                                              );
                                            }
                                          );
                                        });
                                      </script>
                                      <style>
                                        #rec834173374
                                          .t-radio__indicator:after {
                                          background: #ff5a13;
                                        }
                                      </style>
                                      <style>
                                        #rec834173374
                                          .t-radio__wrapper_button
                                          .t-radio__item {
                                          background-color: #f5f5f5;
                                          border: 0px solid #000000;
                                          border-radius: 4px;
                                        }
                                        @media screen and (max-width: 640px) {
                                          #rec834173374
                                          .t-radio__wrapper_button
                                          .t-radio__item {
                                          background-color: transparent;
                                          }
                                        }
                                      </style>
                                    </div>
                                  </div>
                                  <div
                                    class="t-input-error"
                                    aria-live="polite"
                                    id="error_1722854538960"
                                  ></div>
                                </div>
                              </div>
                            </div>
                            <div
                              class="t-quiz__screen-wrapper t-step-form__step"
                              data-step-index="2"
                            >
                              <div
                                class="t-input-group t-input-group_rd t-input-group_two-cols"
                                data-input-lid="1722854945087"
                                role="group"
                                aria-labelledby="field-title_1722854945087"
                                data-field-radcb="cb"
                                data-field-async="true"
                                data-field-type="rd"
                                data-field-name="2-й вопрос. О каких способах заработка на криптовалюте Вы слышали (можно выбрать несколько вариантов)"
                              >
                                <div class="t-input-group__header">
                                  <div class="t-input-group__title-container">
                                    <div
                                      class="t-input-title t-heading t-heading_xs"
                                      id="field-title_1722854945087"
                                      data-redactor-toolbar="no"
                                      field="li_title__1722854945087"
                                      style=""
                                    >
                                      2-й вопрос. О каких способах заработка на
                                      криптовалюте Вы слышали (можно выбрать
                                      несколько вариантов)
                                    </div>
                                  </div>
                                </div>
                                <div>
                                  <div
                                    class="t-input-block t-input-block_rd-flex t-input-block_rd-width50"
                                    style="border-radius: 4px"
                                  >
                                    <input
                                      type="hidden"
                                      class="t-checkboxes__hiddeninput js-tilda-rule"
                                      name="2-й вопрос. О каких способах заработка на криптовалюте Вы слышали (можно выбрать несколько вариантов)"
                                      tabindex="-1"
                                      value=""
                                      data-tilda-req="1"
                                      aria-required="true"
                                    />
                                    <ul class="t-checkboxes__wrapper">
                                      <li class="t-checkboxes__item">
                                        <label
                                          class="t-checkbox__control t-text t-text_xs"
                                          style=""
                                        >
                                          <input
                                            type="checkbox"
                                            value="а) трейдинг"
                                            class="t-checkbox"
                                            data-tilda-req="1"
                                            aria-required="true"
                                          />
                                          <div
                                            class="t-checkbox__indicator"
                                            style="border-color: #ff5a13"
                                          ></div>
                                          <span>а) трейдинг</span>
                                        </label>
                                      </li>
                                      <li class="t-checkboxes__item">
                                        <label
                                          class="t-checkbox__control t-text t-text_xs"
                                          style=""
                                        >
                                          <input
                                            type="checkbox"
                                            value="б) спотовые инвестиции"
                                            class="t-checkbox"
                                            data-tilda-req="1"
                                            aria-required="true"
                                          />
                                          <div
                                            class="t-checkbox__indicator"
                                            style="border-color: #ff5a13"
                                          ></div>
                                          <span>б) спотовые инвестиции</span>
                                        </label>
                                      </li>
                                      <li class="t-checkboxes__item">
                                        <label
                                          class="t-checkbox__control t-text t-text_xs"
                                          style=""
                                        >
                                          <input
                                            type="checkbox"
                                            value="в) DeFi"
                                            class="t-checkbox"
                                            data-tilda-req="1"
                                            aria-required="true"
                                          />
                                          <div
                                            class="t-checkbox__indicator"
                                            style="border-color: #ff5a13"
                                          ></div>
                                          <span>в) DeFi</span>
                                        </label>
                                      </li>
                                      <li class="t-checkboxes__item">
                                        <label
                                          class="t-checkbox__control t-text t-text_xs"
                                          style=""
                                        >
                                          <input
                                            type="checkbox"
                                            value="г) токенсейлы (ICO/IDO/IEO/IFO и прочие форматы)"
                                            class="t-checkbox"
                                            data-tilda-req="1"
                                            aria-required="true"
                                          />
                                          <div
                                            class="t-checkbox__indicator"
                                            style="border-color: #ff5a13"
                                          ></div>
                                          <span
                                            >г) токенсейлы (ICO/IDO/IEO/IFO и
                                            прочие форматы)</span
                                          >
                                        </label>
                                      </li>
                                      <li class="t-checkboxes__item">
                                        <label
                                          class="t-checkbox__control t-text t-text_xs"
                                          style=""
                                        >
                                          <input
                                            type="checkbox"
                                            value="д) Аир- и ретродропы"
                                            class="t-checkbox"
                                            data-tilda-req="1"
                                            aria-required="true"
                                          />
                                          <div
                                            class="t-checkbox__indicator"
                                            style="border-color: #ff5a13"
                                          ></div>
                                          <span>д) Аир- и ретродропы</span>
                                        </label>
                                      </li>
                                    </ul>
                                    <script>
                                      t_onReady(function () {
                                        t_onFuncLoad(
                                          "t_loadJsFile",
                                          function () {
                                            t_loadJsFile(
                                              "https://static.tildacdn.com/js/tilda-variant-select-1.0.min.js",
                                              function () {
                                                t_onFuncLoad(
                                                  "t_input_checkboxes_init",
                                                  function () {
                                                    t_input_checkboxes_init(
                                                      "834173374",
                                                      "1722854945087"
                                                    );
                                                  }
                                                );
                                              }
                                            );
                                          }
                                        );
                                      });
                                    </script>
                                    <style>
                                      #rec834173374
                                        .t-checkbox__indicator:after {
                                        border-color: #ff5a13;
                                      }
                                    </style>
                                    <div
                                      class="t-quiz__variants-hint t-descr t-descr_xxs"
                                    >
                                      *Select one or more options
                                    </div>
                                  </div>
                                  <div
                                    class="t-input-error"
                                    aria-live="polite"
                                    id="error_1722854945087"
                                  ></div>
                                </div>
                              </div>
                            </div>
                            <div
                              class="t-quiz__screen-wrapper t-step-form__step"
                              data-step-index="3"
                            >
                              <div
                                class="t-input-group t-input-group_rd t-input-group_two-cols"
                                data-input-lid="1722858676254"
                                role="radiogroup"
                                aria-labelledby="field-title_1722858676254"
                                data-field-radcb="rb"
                                data-field-async="true"
                                data-field-type="rd"
                                data-field-name="3-й вопрос. В какое время суток Вам будет наиболее комфортно проходить онлайн-занятия с наставником?"
                              >
                                <div class="t-input-group__header">
                                  <div class="t-input-group__title-container">
                                    <div
                                      class="t-input-title t-heading t-heading_xs"
                                      id="field-title_1722858676254"
                                      data-redactor-toolbar="no"
                                      field="li_title__1722858676254"
                                      style=""
                                    >
                                      3-й вопрос. В какое время суток Вам будет
                                      наиболее комфортно проходить
                                      онлайн-занятия с наставником?
                                    </div>
                                  </div>
                                </div>
                                <div>
                                  <div
                                    class="t-input-block t-input-block_rd-flex t-input-block_rd-width50"
                                    style="border-radius: 4px"
                                  >
                                    <div class="t-radio__wrapper">
                                      <label
                                        class="t-radio__item t-radio__control t-text t-text_xs"
                                        style=""
                                      >
                                        <input
                                          type="radio"
                                          name="3-й вопрос. В какое время суток Вам будет наиболее комфортно проходить онлайн-занятия с наставником?"
                                          value="а) утром"
                                          class="t-radio js-tilda-rule"
                                          data-tilda-req="1"
                                          aria-required="true"
                                        />
                                        <div
                                          class="t-radio__indicator"
                                          style="border-color: #ff5a13"
                                        ></div>
                                        <span>а) утром</span>
                                      </label>
                                      <label
                                        class="t-radio__item t-radio__control t-text t-text_xs"
                                        style=""
                                      >
                                        <input
                                          type="radio"
                                          name="3-й вопрос. В какое время суток Вам будет наиболее комфортно проходить онлайн-занятия с наставником?"
                                          value="б) днём"
                                          class="t-radio js-tilda-rule"
                                          data-tilda-req="1"
                                          aria-required="true"
                                        />
                                        <div
                                          class="t-radio__indicator"
                                          style="border-color: #ff5a13"
                                        ></div>
                                        <span>б) днём</span>
                                      </label>
                                      <label
                                        class="t-radio__item t-radio__control t-text t-text_xs"
                                        style=""
                                      >
                                        <input
                                          type="radio"
                                          name="3-й вопрос. В какое время суток Вам будет наиболее комфортно проходить онлайн-занятия с наставником?"
                                          value="в) вечером."
                                          class="t-radio js-tilda-rule"
                                          data-tilda-req="1"
                                          aria-required="true"
                                        />
                                        <div
                                          class="t-radio__indicator"
                                          style="border-color: #ff5a13"
                                        ></div>
                                        <span>в) вечером.</span>
                                      </label>
                                      <script>
                                        t_onReady(function () {
                                          t_onFuncLoad(
                                            "t_loadJsFile",
                                            function () {
                                              t_loadJsFile(
                                                "https://static.tildacdn.com/js/tilda-variant-select-1.0.min.js",
                                                function () {
                                                  t_onFuncLoad(
                                                    "t_input_radiobuttons_init",
                                                    function () {
                                                      try {
                                                        t_input_radiobuttons_init(
                                                          "834173374",
                                                          "1722858676254"
                                                        );
                                                      } catch (e) {
                                                        console.log(e);
                                                      }
                                                    }
                                                  );
                                                }
                                              );
                                            }
                                          );
                                        });
                                      </script>
                                      <style>
                                        #rec834173374
                                          .t-radio__indicator:after {
                                          background: #ff5a13;
                                        }
                                      </style>
                                    </div>
                                  </div>
                                  <div
                                    class="t-input-error"
                                    aria-live="polite"
                                    id="error_1722858676254"
                                  ></div>
                                </div>
                              </div>
                            </div>
                            <div
                              class="t-quiz__screen-wrapper t-step-form__step"
                              data-step-index="4"
                            >
                              <div
                                class="t-input-group t-input-group_ph t-input-group_two-cols"
                                data-input-lid="1722859033215"
                                data-field-async="true"
                                data-field-type="ph"
                                data-field-name="Phone"
                              >
                                <div class="t-input-group__header">
                                  <div class="t-input-group__title-container">
                                    <label
                                      for="input_1722859033215"
                                      class="t-input-title t-heading t-heading_xs"
                                      id="field-title_1722859033215"
                                      data-redactor-toolbar="no"
                                      field="li_title__1722859033215"
                                      style=""
                                      >Поздравляем! За Вами забронировано место
                                      на наш бесплатный криптовалютный марафон
                                      из семи занятий.</label
                                    >
                                    <div
                                      class="t-input-subtitle t-descr t-descr_xs t-opacity_70"
                                      data-redactor-toolbar="no"
                                      field="li_subtitle__1722859033215"
                                      style=""
                                    >
                                      Последний шаг - введите Ваш номер
                                      телефона, заберите ваши бонусы и сделайте
                                      криптовалюту полноценным источником
                                      дохода.
                                    </div>
                                  </div>
                                </div>
                                <div>
                                  <div
                                    class="t-input-block t-input-block_rd-flex t-input-block_rd-width50"
                                    style="border-radius: 4px"
                                  >
                                  <form
                                  class="form _main-form contact-form freg thin rounded form_sub-wrap quiz-form"
                                  id="main-form"
                                  method="post">
                              </form>
                                   
                                  </div>
                                  <div
                                    class="t-input-error"
                                    aria-live="polite"
                                    id="error_1722859033215"
                                  ></div>
                                </div>
                              </div>
                            </div>
                           
                            <div
                              class="t-quiz__result t-quiz__result_ordinary t-quiz-hidden"
                            >
                              <div class="t-quiz__successbox-wrapper">
                                <div
                                  class="js-successbox t-form__successbox t-text t-text_md"
                                  aria-live="polite"
                                  style="display: none"
                                ></div>
                              </div>
                            </div>
                          
                          </div>
                          <div
                            class="t-quiz__btn-wrapper t-quiz__btn-wrapper_mobile"
                          >
                            <button
                              type="button"
                              class="t-btn t-quiz__btn_prev t-quiz__btn_sm"
                              style="
                                color: #fa7d47;
                                border: 1px solid #fedbcc;
                                border-radius: 4px;
                                -moz-border-radius: 4px;
                                -webkit-border-radius: 4px;
                              "
                            >
                              <svg
                                class="t-btn__icon t-btn__icon_arrow left"
                                width="18"
                                height="18"
                                viewBox="0 0 18 18"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  d="M14.25 9H3.75"
                                  stroke="currentColor"
                                  stroke-width="1.4"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                ></path>
                                <path
                                  d="M9 3.75L3.75 9L9 14.25"
                                  stroke="currentColor"
                                  stroke-width="1.4"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                ></path>
                              </svg>
                            </button>
                            <button
                              type="button"
                              class="t-btn t-quiz__btn_next t-quiz__btn_md"
                              style="
                                color: #ffffff;
                                background-image: linear-gradient(
                                  0.75turn,
                                  rgba(255, 76, 0, 1) 0%,
                                  rgba(255, 129, 76, 1) 100%
                                );
                                border-radius: 4px;
                                -moz-border-radius: 4px;
                                -webkit-border-radius: 4px;
                              "
                            >
                              <span>Далее</span>
                              <svg
                                class="t-btn__icon t-btn__icon_arrow right"
                                width="18"
                                height="18"
                                viewBox="0 0 18 18"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  d="M14.25 9H3.75"
                                  stroke="currentColor"
                                  stroke-width="1.4"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                ></path>
                                <path
                                  d="M9 3.75L3.75 9L9 14.25"
                                  stroke="currentColor"
                                  stroke-width="1.4"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                ></path>
                              </svg>
                            </button>
                           
                          </div>
                          <div class="t-quiz__footer-sticky">
                            <div class="t-quiz__footer">
                              <div class="t-quiz__footer__text-container">
                                <div
                                  class="t-quiz__counter-container t-descr t-descr_xxs"
                                >
                                  <span class="t-quiz__counter-title"
                                    >Шаг: </span
                                  ><span class="t-quiz__counter"></span>
                                </div>
                              </div>
                              <div class="t-quiz__btn-wrapper">
                                <button
                                  type="button"
                                  class="t-btn t-quiz__btn_prev t-quiz__btn_sm"
                                  style="
                                    color: #fa7d47;
                                    border: 1px solid #fedbcc;
                                    border-radius: 4px;
                                    -moz-border-radius: 4px;
                                    -webkit-border-radius: 4px;
                                  "
                                >
                                  <svg
                                    class="t-btn__icon t-btn__icon_arrow left"
                                    width="18"
                                    height="18"
                                    viewBox="0 0 18 18"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                  >
                                    <path
                                      d="M14.25 9H3.75"
                                      stroke="currentColor"
                                      stroke-width="1.4"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                    ></path>
                                    <path
                                      d="M9 3.75L3.75 9L9 14.25"
                                      stroke="currentColor"
                                      stroke-width="1.4"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                    ></path>
                                  </svg>
                                </button>
                                <button
                                  type="button"
                                  class="t-btn t-quiz__btn_next t-quiz__btn_md"
                                  style="
                                    color: #ffffff;
                                    background-image: linear-gradient(
                                      0.75turn,
                                      rgba(255, 76, 0, 1) 0%,
                                      rgba(255, 129, 76, 1) 100%
                                    );
                                    border-radius: 4px;
                                    -moz-border-radius: 4px;
                                    -webkit-border-radius: 4px;
                                  "
                                >
                                  <span>Далее</span>
                                  <svg
                                    class="t-btn__icon t-btn__icon_arrow right"
                                    width="18"
                                    height="18"
                                    viewBox="0 0 18 18"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                  >
                                    <path
                                      d="M14.25 9H3.75"
                                      stroke="currentColor"
                                      stroke-width="1.4"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                    ></path>
                                    <path
                                      d="M9 3.75L3.75 9L9 14.25"
                                      stroke="currentColor"
                                      stroke-width="1.4"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                    ></path>
                                  </svg>
                                </button>
                               
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </в>
              </div>
            </div>
          </div>
        </div>
        <style>
          .t-form__screen-hiderecord {
            opacity: 0 !important;
          }
        </style>
        <script>
          t_onReady(function () {
            var rec = document.querySelector("#rec834173374");
            rec && rec.classList.add("t-form__screen-hiderecord");
            function showRecord() {
              rec && rec.classList.remove("t-form__screen-hiderecord");
            }
            var opacityTimeout = setTimeout(showRecord, 1500);
            t_onFuncLoad("t_quiz__step_manager", function () {
              t_onFuncLoad("t_quiz__init", function () {
                t_quiz__init("834173374");
                showRecord();
                clearTimeout(opacityTimeout);
              });
            });
          });
        </script>
        <style>
          #rec834173374 .t1040 .t-quiz__quiz {
            box-shadow: 0px 30px 40px -10px rgba(0, 0, 0, 0.1);
          }
        </style>
        <style>
          #rec834173374 .t-quiz {
            --quiz-background-color: #ffffff;
            --consultant-msg-bubble-bg: #fff6f2;
            --panel-background-color: #f4f4f4;
            --btn-wrapper-background-color: rgba(255, 255, 255, 0.95);
            --content-padding: 0px;
            --border-size: 1px;
            --border-radius: 12px;
            --outer-border-radius: 12px;
            --inner-border-radius: max(
              0px,
              var(--border-radius) - var(--border-size)
            );
            --content-padding-radius: calc(var(--border-radius) / 2);
            --btn-close-popup-icon-color: #ffffff;
            --btn-close-popup-icon-color-mob: #000000;
            --btn-close-popup-bg-color: rgba(255, 255, 255, 0.7);
            --btn-close-popup-bg-color-mob: var(--btn-close-popup-bg-color);
            --secondary-text-font-size-mob: clamp(
              14px,
              var(--page-font-size) - 4px,
              16px
            );
          }
          #rec834173374
            .t-quiz:has(
              .t-quiz__cover.t-step-form__step_active,
              .t-quiz__result.t-step-form__step_active
            ) {
            --content-padding: 0px;
          }
          #rec834173374 .t-quiz.fullscreen {
            --outer-border-radius: 0 !important;
            --inner-border-radius: 0 !important;
          }
        
          #rec834173374 .t-quiz__quiz-wrapper {
            height: 600px;
          }
          .t-quiz__btn-wrapper_mobile {
            display: none;
          }
          @media screen and (max-width: 640px) {
            #rec834173374 .t-quiz {
              --inner-border-radius: 0 !important;
              --outer-border-radius: 0 !important;
              --content-padding-radius: 0 !important;
              --content-padding: 0px;
              --prev-btn-border-radius: 4px;
              --quiz-background-color: rgb(24, 24, 24);
            }
          }
        </style>
      </div>
      <div id="rec804942507" class="r t-rec" style="" data-record-type="215">
        <a name="FORM" style="font-size: 0"></a>
      </div>
      
      <div
        id="rec804927465"
        class="r t-rec t-rec_pt_0"
        style="padding-top: 0px"
        data-animationappear="off"
        data-record-type="396"
      >
        <!-- T396 -->
        <style>
          #rec804927465 .t396__artboard {
            height: 1110px;
            background-color: #181818;
          }
          #rec804927465 .t396__filter {
            height: 1110px;
          }
          #rec804927465 .t396__carrier {
            height: 1110px;
            background-position: center center;
            background-attachment: scroll;
            background-size: cover;
            background-repeat: no-repeat;
          }
          @media screen and (max-width: 1199px) {
            #rec804927465 .t396__artboard,
            #rec804927465 .t396__filter,
            #rec804927465 .t396__carrier {
            }
            #rec804927465 .t396__filter {
            }
            #rec804927465 .t396__carrier {
              background-attachment: scroll;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804927465 .t396__artboard,
            #rec804927465 .t396__filter,
            #rec804927465 .t396__carrier {
              height: 1110px;
            }
            #rec804927465 .t396__filter {
            }
            #rec804927465 .t396__carrier {
              background-attachment: scroll;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804927465 .t396__artboard,
            #rec804927465 .t396__filter,
            #rec804927465 .t396__carrier {
              height: 870px;
            }
            #rec804927465 .t396__filter {
            }
            #rec804927465 .t396__carrier {
              background-attachment: scroll;
            }
          }
          #rec804927465 .tn-elem[data-elem-id="1727693719780"] {
            color: #fff;
            z-index: 2;
            top: 74px;
            left: calc(50% - 600px + 77px);
            width: 427px;
            height: auto;
          }
          #rec804927465 .tn-elem[data-elem-id="1727693719780"] .tn-atom {
            color: #fff;
            font-size: 32px;
            font-family: "Montserrat", Arial, sans-serif;
            line-height: 1.3;
            font-weight: 400;
            letter-spacing: -1px;
            text-transform: uppercase;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804927465 .tn-elem[data-elem-id="1727693719780"] {
              top: 65px;
              left: calc(50% - 480px + 40px);
              height: auto;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804927465 .tn-elem[data-elem-id="1727693719780"] {
              top: 55px;
              left: calc(50% - 320px + 30px);
              height: auto;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804927465 .tn-elem[data-elem-id="1727693719780"] {
              top: 65px;
              left: calc(50% - 160px + 14px);
              width: 293px;
              height: auto;
            }
            #rec804927465 .tn-elem[data-elem-id="1727693719780"] {
              text-align: center;
            }
            #rec804927465 .tn-elem[data-elem-id="1727693719780"] .tn-atom {
              font-size: 21px;
              background-size: cover;
            }
          }
          #rec804927465 .tn-elem[data-elem-id="1727700656418"] {
            color: #5555f6;
            z-index: 3;
            top: 88px;
            left: calc(50% - 600px + 620px);
            width: 427px;
            height: auto;
          }
          #rec804927465
            .tn-elem.t396__elem--anim-hidden[data-elem-id="1727700656418"] {
            opacity: 0;
          }
          #rec804927465 .tn-elem[data-elem-id="1727700656418"] .tn-atom {
            color: #5555f6;
            font-size: 20px;
            font-family: "Montserrat", Arial, sans-serif;
            line-height: 1.3;
            font-weight: 600;
            letter-spacing: -1px;
            text-transform: uppercase;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804927465 .tn-elem[data-elem-id="1727700656418"] {
              top: 221px;
              left: calc(50% - 480px + 121px);
              height: auto;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804927465 .tn-elem[data-elem-id="1727700656418"] {
              top: 215px;
              left: calc(50% - 320px + 103px);
              height: auto;
            }
            #rec804927465 .tn-elem[data-elem-id="1727700656418"] .tn-atom {
              font-size: 18px;
              background-size: cover;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804927465 .tn-elem[data-elem-id="1727700656418"] {
              top: 163px;
              left: calc(50% - 160px + 72px);
              width: 215px;
              height: auto;
            }
            #rec804927465 .tn-elem[data-elem-id="1727700656418"] {
              text-align: left;
            }
            #rec804927465 .tn-elem[data-elem-id="1727700656418"] .tn-atom {
              font-size: 12px;
              background-size: cover;
            }
          }
          #rec804927465 .tn-elem[data-elem-id="1727700687191"] {
            color: #fff;
            text-align: center;
            z-index: 4;
            top: 54px;
            left: calc(50% - 600px + 512px);
            width: 87px;
            height: auto;
          }
          #rec804927465
            .tn-elem.t396__elem--anim-hidden[data-elem-id="1727700687191"] {
            opacity: 0;
          }
          #rec804927465 .tn-elem[data-elem-id="1727700687191"] .tn-atom {
            color: #fff;
            font-size: 79px;
            font-family: "Montserrat", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 700;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804927465 .tn-elem[data-elem-id="1727700687191"] {
              top: 182px;
              left: calc(50% - 480px + 28px);
              height: auto;
            }
            #rec804927465 .tn-elem[data-elem-id="1727700687191"] {
              text-align: center;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804927465 .tn-elem[data-elem-id="1727700687191"] {
              top: 183px;
              left: calc(50% - 320px + 5px);
              height: auto;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804927465 .tn-elem[data-elem-id="1727700687191"] {
              top: 162px;
              left: calc(50% - 160px + 2px);
              height: auto;
            }
            #rec804927465 .tn-elem[data-elem-id="1727700687191"] .tn-atom {
              font-size: 32px;
              background-size: cover;
            }
          }
          #rec804927465 .tn-elem[data-elem-id="1727700861888"] {
            color: #5555f6;
            z-index: 5;
            top: 198px;
            left: calc(50% - 600px + 620px);
            width: 535px;
            height: auto;
          }
          #rec804927465
            .tn-elem.t396__elem--anim-hidden[data-elem-id="1727700861888"] {
            opacity: 0;
          }
          #rec804927465 .tn-elem[data-elem-id="1727700861888"] .tn-atom {
            color: #5555f6;
            font-size: 20px;
            font-family: "Montserrat", Arial, sans-serif;
            line-height: 1.3;
            font-weight: 600;
            letter-spacing: -1px;
            text-transform: uppercase;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804927465 .tn-elem[data-elem-id="1727700861888"] {
              top: 331px;
              left: calc(50% - 480px + 121px);
              height: auto;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804927465 .tn-elem[data-elem-id="1727700861888"] {
              top: 305px;
              left: calc(50% - 320px + 103px);
              width: 413px;
              height: auto;
            }
            #rec804927465 .tn-elem[data-elem-id="1727700861888"] .tn-atom {
              font-size: 18px;
              background-size: cover;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804927465 .tn-elem[data-elem-id="1727700861888"] {
              top: 233px;
              left: calc(50% - 160px + 72px);
              width: 230px;
              height: auto;
            }
            #rec804927465 .tn-elem[data-elem-id="1727700861888"] {
              text-align: left;
            }
            #rec804927465 .tn-elem[data-elem-id="1727700861888"] .tn-atom {
              font-size: 12px;
              background-size: cover;
            }
          }
          #rec804927465 .tn-elem[data-elem-id="1727700861880"] {
            color: #fff;
            text-align: right;
            z-index: 6;
            top: 164px;
            left: calc(50% - 600px + 490px);
            width: 87px;
            height: auto;
          }
          #rec804927465
            .tn-elem.t396__elem--anim-hidden[data-elem-id="1727700861880"] {
            opacity: 0;
          }
          #rec804927465 .tn-elem[data-elem-id="1727700861880"] .tn-atom {
            color: #fff;
            font-size: 79px;
            font-family: "Montserrat", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 700;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804927465 .tn-elem[data-elem-id="1727700861880"] {
              top: 292px;
              left: calc(50% - 480px + 28px);
              height: auto;
            }
            #rec804927465 .tn-elem[data-elem-id="1727700861880"] {
              text-align: center;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804927465 .tn-elem[data-elem-id="1727700861880"] {
              top: 283px;
              left: calc(50% - 320px + 5px);
              height: auto;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804927465 .tn-elem[data-elem-id="1727700861880"] {
              top: 232px;
              left: calc(50% - 160px + 2px);
              height: auto;
            }
            #rec804927465 .tn-elem[data-elem-id="1727700861880"] .tn-atom {
              font-size: 32px;
              background-size: cover;
            }
          }
          #rec804927465 .tn-elem[data-elem-id="1727700923717"] {
            color: #5555f6;
            z-index: 7;
            top: 308px;
            left: calc(50% - 600px + 620px);
            width: 492px;
            height: auto;
          }
          #rec804927465
            .tn-elem.t396__elem--anim-hidden[data-elem-id="1727700923717"] {
            opacity: 0;
          }
          #rec804927465 .tn-elem[data-elem-id="1727700923717"] .tn-atom {
            color: #5555f6;
            font-size: 20px;
            font-family: "Montserrat", Arial, sans-serif;
            line-height: 1.3;
            font-weight: 600;
            letter-spacing: -1px;
            text-transform: uppercase;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804927465 .tn-elem[data-elem-id="1727700923717"] {
              top: 431px;
              left: calc(50% - 480px + 121px);
              height: auto;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804927465 .tn-elem[data-elem-id="1727700923717"] {
              top: 418px;
              left: calc(50% - 320px + 103px);
              height: auto;
            }
            #rec804927465 .tn-elem[data-elem-id="1727700923717"] .tn-atom {
              font-size: 18px;
              background-size: cover;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804927465 .tn-elem[data-elem-id="1727700923717"] {
              top: 293px;
              left: calc(50% - 160px + 72px);
              width: 215px;
              height: auto;
            }
            #rec804927465 .tn-elem[data-elem-id="1727700923717"] {
              text-align: left;
            }
            #rec804927465 .tn-elem[data-elem-id="1727700923717"] .tn-atom {
              font-size: 12px;
              background-size: cover;
            }
          }
          #rec804927465 .tn-elem[data-elem-id="1727700923714"] {
            color: #fff;
            text-align: right;
            z-index: 8;
            top: 274px;
            left: calc(50% - 600px + 490px);
            width: 87px;
            height: auto;
          }
          #rec804927465
            .tn-elem.t396__elem--anim-hidden[data-elem-id="1727700923714"] {
            opacity: 0;
          }
          #rec804927465 .tn-elem[data-elem-id="1727700923714"] .tn-atom {
            color: #fff;
            font-size: 79px;
            font-family: "Montserrat", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 700;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804927465 .tn-elem[data-elem-id="1727700923714"] {
              top: 397px;
              left: calc(50% - 480px + 28px);
              height: auto;
            }
            #rec804927465 .tn-elem[data-elem-id="1727700923714"] {
              text-align: center;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804927465 .tn-elem[data-elem-id="1727700923714"] {
              top: 386px;
              left: calc(50% - 320px + 5px);
              height: auto;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804927465 .tn-elem[data-elem-id="1727700923714"] {
              top: 292px;
              left: calc(50% - 160px + 2px);
              height: auto;
            }
            #rec804927465 .tn-elem[data-elem-id="1727700923714"] .tn-atom {
              font-size: 32px;
              background-size: cover;
            }
          }
          #rec804927465 .tn-elem[data-elem-id="1727700923711"] {
            color: #fff;
            z-index: 9;
            top: 418px;
            left: calc(50% - 600px + 620px);
            width: 535px;
            height: auto;
          }
          #rec804927465
            .tn-elem.t396__elem--anim-hidden[data-elem-id="1727700923711"] {
            opacity: 0;
          }
          #rec804927465 .tn-elem[data-elem-id="1727700923711"] .tn-atom {
            color: #5555f6;
            font-size: 20px;
            font-family: "Montserrat", Arial, sans-serif;
            line-height: 1.3;
            font-weight: 600;
            letter-spacing: -1px;
            text-transform: uppercase;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804927465 .tn-elem[data-elem-id="1727700923711"] {
              top: 541px;
              left: calc(50% - 480px + 121px);
              height: auto;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804927465 .tn-elem[data-elem-id="1727700923711"] {
              top: 502px;
              left: calc(50% - 320px + 103px);
              width: 413px;
              height: auto;
            }
            #rec804927465 .tn-elem[data-elem-id="1727700923711"] .tn-atom {
              font-size: 18px;
              background-size: cover;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804927465 .tn-elem[data-elem-id="1727700923711"] {
              top: 363px;
              left: calc(50% - 160px + 72px);
              width: 230px;
              height: auto;
            }
            #rec804927465 .tn-elem[data-elem-id="1727700923711"] {
              text-align: left;
            }
            #rec804927465 .tn-elem[data-elem-id="1727700923711"] .tn-atom {
              font-size: 12px;
              background-size: cover;
            }
          }
          #rec804927465 .tn-elem[data-elem-id="1727700923702"] {
            color: #fff;
            text-align: right;
            z-index: 10;
            top: 405px;
            left: calc(50% - 600px + 490px);
            width: 87px;
            height: auto;
          }
          #rec804927465
            .tn-elem.t396__elem--anim-hidden[data-elem-id="1727700923702"] {
            opacity: 0;
          }
          #rec804927465 .tn-elem[data-elem-id="1727700923702"] .tn-atom {
            color: #fff;
            font-size: 79px;
            font-family: "Montserrat", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 700;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804927465 .tn-elem[data-elem-id="1727700923702"] {
              top: 526px;
              left: calc(50% - 480px + 28px);
              height: auto;
            }
            #rec804927465 .tn-elem[data-elem-id="1727700923702"] {
              text-align: center;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804927465 .tn-elem[data-elem-id="1727700923702"] {
              top: 507px;
              left: calc(50% - 320px + 5px);
              height: auto;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804927465 .tn-elem[data-elem-id="1727700923702"] {
              top: 362px;
              left: calc(50% - 160px + 2px);
              height: auto;
            }
            #rec804927465 .tn-elem[data-elem-id="1727700923702"] .tn-atom {
              font-size: 32px;
              background-size: cover;
            }
          }
          #rec804927465 .tn-elem[data-elem-id="1727701057169"] {
            color: #5555f6;
            z-index: 11;
            top: 563px;
            left: calc(50% - 600px + 621px);
            width: 427px;
            height: auto;
          }
          #rec804927465
            .tn-elem.t396__elem--anim-hidden[data-elem-id="1727701057169"] {
            opacity: 0;
          }
          #rec804927465 .tn-elem[data-elem-id="1727701057169"] .tn-atom {
            color: #5555f6;
            font-size: 20px;
            font-family: "Montserrat", Arial, sans-serif;
            line-height: 1.3;
            font-weight: 600;
            letter-spacing: -1px;
            text-transform: uppercase;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804927465 .tn-elem[data-elem-id="1727701057169"] {
              top: 674px;
              left: calc(50% - 480px + 121px);
              height: auto;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804927465 .tn-elem[data-elem-id="1727701057169"] {
              top: 658px;
              left: calc(50% - 320px + 103px);
              width: 470px;
              height: auto;
            }
            #rec804927465 .tn-elem[data-elem-id="1727701057169"] .tn-atom {
              font-size: 18px;
              background-size: cover;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804927465 .tn-elem[data-elem-id="1727701057169"] {
              top: 481px;
              left: calc(50% - 160px + 72px);
              width: 215px;
              height: auto;
            }
            #rec804927465 .tn-elem[data-elem-id="1727701057169"] {
              text-align: left;
            }
            #rec804927465 .tn-elem[data-elem-id="1727701057169"] .tn-atom {
              font-size: 12px;
              background-size: cover;
            }
          }
          #rec804927465 .tn-elem[data-elem-id="1727701057165"] {
            color: #fff;
            text-align: right;
            z-index: 12;
            top: 549px;
            left: calc(50% - 600px + 491px);
            width: 87px;
            height: auto;
          }
          #rec804927465
            .tn-elem.t396__elem--anim-hidden[data-elem-id="1727701057165"] {
            opacity: 0;
          }
          #rec804927465 .tn-elem[data-elem-id="1727701057165"] .tn-atom {
            color: #fff;
            font-size: 79px;
            font-family: "Montserrat", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 700;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804927465 .tn-elem[data-elem-id="1727701057165"] {
              top: 665px;
              left: calc(50% - 480px + 28px);
              height: auto;
            }
            #rec804927465 .tn-elem[data-elem-id="1727701057165"] {
              text-align: center;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804927465 .tn-elem[data-elem-id="1727701057165"] {
              top: 649px;
              left: calc(50% - 320px + 5px);
              height: auto;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804927465 .tn-elem[data-elem-id="1727701057165"] {
              top: 480px;
              left: calc(50% - 160px + 2px);
              height: auto;
            }
            #rec804927465 .tn-elem[data-elem-id="1727701057165"] .tn-atom {
              font-size: 32px;
              background-size: cover;
            }
          }
          #rec804927465 .tn-elem[data-elem-id="1727701057161"] {
            color: #5555f6;
            z-index: 13;
            top: 702px;
            left: calc(50% - 600px + 621px);
            width: 535px;
            height: auto;
          }
          #rec804927465
            .tn-elem.t396__elem--anim-hidden[data-elem-id="1727701057161"] {
            opacity: 0;
          }
          #rec804927465 .tn-elem[data-elem-id="1727701057161"] .tn-atom {
            color: #5555f6;
            font-size: 20px;
            font-family: "Montserrat", Arial, sans-serif;
            line-height: 1.3;
            font-weight: 600;
            letter-spacing: -1px;
            text-transform: uppercase;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804927465 .tn-elem[data-elem-id="1727701057161"] {
              top: 804px;
              left: calc(50% - 480px + 121px);
              height: auto;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804927465 .tn-elem[data-elem-id="1727701057161"] {
              top: 787px;
              left: calc(50% - 320px + 103px);
              width: 527px;
              height: auto;
            }
            #rec804927465 .tn-elem[data-elem-id="1727701057161"] .tn-atom {
              font-size: 18px;
              background-size: cover;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804927465 .tn-elem[data-elem-id="1727701057161"] {
              top: 583px;
              left: calc(50% - 160px + 72px);
              width: 230px;
              height: auto;
            }
            #rec804927465 .tn-elem[data-elem-id="1727701057161"] {
              text-align: left;
            }
            #rec804927465 .tn-elem[data-elem-id="1727701057161"] .tn-atom {
              font-size: 12px;
              background-size: cover;
            }
          }
          #rec804927465 .tn-elem[data-elem-id="1727701057151"] {
            color: #fff;
            text-align: right;
            z-index: 14;
            top: 688px;
            left: calc(50% - 600px + 491px);
            width: 87px;
            height: auto;
          }
          #rec804927465
            .tn-elem.t396__elem--anim-hidden[data-elem-id="1727701057151"] {
            opacity: 0;
          }
          #rec804927465 .tn-elem[data-elem-id="1727701057151"] .tn-atom {
            color: #fff;
            font-size: 79px;
            font-family: "Montserrat", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 700;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804927465 .tn-elem[data-elem-id="1727701057151"] {
              top: 791px;
              left: calc(50% - 480px + 28px);
              height: auto;
            }
            #rec804927465 .tn-elem[data-elem-id="1727701057151"] {
              text-align: center;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804927465 .tn-elem[data-elem-id="1727701057151"] {
              top: 778px;
              left: calc(50% - 320px + 5px);
              height: auto;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804927465 .tn-elem[data-elem-id="1727701057151"] {
              top: 582px;
              left: calc(50% - 160px + 2px);
              height: auto;
            }
            #rec804927465 .tn-elem[data-elem-id="1727701057151"] .tn-atom {
              font-size: 32px;
              background-size: cover;
            }
          }
          #rec804927465 .tn-elem[data-elem-id="1727701210323"] {
            color: #5555f6;
            z-index: 15;
            top: 845px;
            left: calc(50% - 600px + 621px);
            width: 535px;
            height: auto;
          }
          #rec804927465
            .tn-elem.t396__elem--anim-hidden[data-elem-id="1727701210323"] {
            opacity: 0;
          }
          #rec804927465 .tn-elem[data-elem-id="1727701210323"] .tn-atom {
            color: #5555f6;
            font-size: 20px;
            font-family: "Montserrat", Arial, sans-serif;
            line-height: 1.3;
            font-weight: 600;
            letter-spacing: -1px;
            text-transform: uppercase;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804927465 .tn-elem[data-elem-id="1727701210323"] {
              top: 943px;
              left: calc(50% - 480px + 115px);
              height: auto;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804927465 .tn-elem[data-elem-id="1727701210323"] {
              top: 940px;
              left: calc(50% - 320px + 108px);
              width: 527px;
              height: auto;
            }
            #rec804927465 .tn-elem[data-elem-id="1727701210323"] .tn-atom {
              font-size: 18px;
              background-size: cover;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804927465 .tn-elem[data-elem-id="1727701210323"] {
              top: 703px;
              left: calc(50% - 160px + 72px);
              width: 230px;
              height: auto;
            }
            #rec804927465 .tn-elem[data-elem-id="1727701210323"] {
              text-align: left;
            }
            #rec804927465 .tn-elem[data-elem-id="1727701210323"] .tn-atom {
              font-size: 12px;
              background-size: cover;
            }
          }
          #rec804927465 .tn-elem[data-elem-id="1727701210315"] {
            color: #fff;
            text-align: right;
            z-index: 16;
            top: 818px;
            left: calc(50% - 600px + 491px);
            width: 87px;
            height: auto;
          }
          #rec804927465
            .tn-elem.t396__elem--anim-hidden[data-elem-id="1727701210315"] {
            opacity: 0;
          }
          #rec804927465 .tn-elem[data-elem-id="1727701210315"] .tn-atom {
            color: #fff;
            font-size: 79px;
            font-family: "Montserrat", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 700;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804927465 .tn-elem[data-elem-id="1727701210315"] {
              top: 920px;
              left: calc(50% - 480px + 22px);
              height: auto;
            }
            #rec804927465 .tn-elem[data-elem-id="1727701210315"] {
              text-align: center;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804927465 .tn-elem[data-elem-id="1727701210315"] {
              top: 914px;
              left: calc(50% - 320px + 10px);
              height: auto;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804927465 .tn-elem[data-elem-id="1727701210315"] {
              top: 702px;
              left: calc(50% - 160px + 2px);
              height: auto;
            }
            #rec804927465 .tn-elem[data-elem-id="1727701210315"] .tn-atom {
              font-size: 32px;
              background-size: cover;
            }
          }
        </style>
        <div class="t396">
          <div
            class="t396__artboard"
            data-artboard-recid="804927465"
            data-artboard-screens="320,640,960,1200"
            data-artboard-height="1110"
            data-artboard-valign="center"
            data-artboard-upscale="grid"
            data-artboard-height-res-320="780"
            data-artboard-upscale-res-320="window"
            data-artboard-height-res-640="780"
          >
            <div class="t396__carrier" data-artboard-recid="804927465"></div>
            <div class="t396__filter" data-artboard-recid="804927465"></div>
            <div
              class="t396__elem tn-elem tn-elem__8049274651727693719780"
              data-elem-id="1727693719780"
              data-elem-type="text"
              data-field-top-value="74"
              data-field-left-value="77"
              data-field-width-value="427"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-fix="0.5"
              data-animate-fix-dist="780"
              data-field-top-res-320-value="65"
              data-field-left-res-320-value="14"
              data-field-width-res-320-value="293"
              data-field-top-res-640-value="55"
              data-field-left-res-640-value="30"
              data-field-top-res-960-value="65"
              data-field-left-res-960-value="40"
            >
              <div class="tn-atom" field="tn_text_1727693719780">
                <strong>НАше обучение </strong>подойдет вам, если
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__8049274651727700656418 t396__elem--anim-hidden"
              data-elem-id="1727700656418"
              data-elem-type="text"
              data-field-top-value="88"
              data-field-left-value="620"
              data-field-width-value="427"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-mobile="y"
              data-animate-sbs-event="scroll"
              data-animate-sbs-trg="0.5"
              data-animate-sbs-trgofst="0"
              data-animate-sbs-opts="[{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'di':'0','dd':'0'},{'mx':0,'my':0,'sx':1,'sy':1,'op':0,'ro':0,'di':0,'dd':'0','fi':'0'},{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'di':200,'dd':'0','fi':'0'}]"
              data-field-top-res-320-value="163"
              data-field-left-res-320-value="72"
              data-field-width-res-320-value="215"
              data-field-top-res-640-value="215"
              data-field-left-res-640-value="103"
              data-field-top-res-960-value="221"
              data-field-left-res-960-value="121"
            >
              <div class="tn-atom" field="tn_text_1727700656418">
                Вы хотите создать себе небольшой дополнительный источник дохода
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__8049274651727700687191 t396__elem--anim-hidden"
              data-elem-id="1727700687191"
              data-elem-type="text"
              data-field-top-value="54"
              data-field-left-value="512"
              data-field-width-value="87"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-mobile="y"
              data-animate-sbs-event="scroll"
              data-animate-sbs-trg="0.5"
              data-animate-sbs-trgofst="0"
              data-animate-sbs-opts="[{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'di':'0','dd':'0'},{'mx':0,'my':0,'sx':1,'sy':1,'op':0,'ro':0,'di':0,'dd':'0','fi':'0'},{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'di':200,'dd':'0','fi':'0'}]"
              data-field-top-res-320-value="162"
              data-field-left-res-320-value="2"
              data-field-top-res-640-value="183"
              data-field-left-res-640-value="5"
              data-field-top-res-960-value="182"
              data-field-left-res-960-value="28"
            >
              <div class="tn-atom" field="tn_text_1727700687191">1</div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__8049274651727700861888 t396__elem--anim-hidden"
              data-elem-id="1727700861888"
              data-elem-type="text"
              data-field-top-value="198"
              data-field-left-value="620"
              data-field-width-value="535"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-mobile="y"
              data-animate-sbs-event="scroll"
              data-animate-sbs-trg="0.5"
              data-animate-sbs-trgofst="0"
              data-animate-sbs-opts="[{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'di':'0','dd':'0'},{'mx':0,'my':0,'sx':1,'sy':1,'op':0,'ro':0,'di':0,'dd':'0','fi':'0'},{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'di':200,'dd':'0','fi':'0'}]"
              data-field-top-res-320-value="233"
              data-field-left-res-320-value="72"
              data-field-width-res-320-value="230"
              data-field-top-res-640-value="305"
              data-field-left-res-640-value="103"
              data-field-width-res-640-value="413"
              data-field-top-res-960-value="331"
              data-field-left-res-960-value="121"
            >
              <div class="tn-atom" field="tn_text_1727700861888">
                Вы в поисках инвестиционных инструментов для реализации своего
                капитала
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__8049274651727700861880 t396__elem--anim-hidden"
              data-elem-id="1727700861880"
              data-elem-type="text"
              data-field-top-value="164"
              data-field-left-value="490"
              data-field-width-value="87"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-mobile="y"
              data-animate-sbs-event="scroll"
              data-animate-sbs-trg="0.5"
              data-animate-sbs-trgofst="0"
              data-animate-sbs-opts="[{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'di':'0','dd':'0'},{'mx':0,'my':0,'sx':1,'sy':1,'op':0,'ro':0,'di':0,'dd':'0','fi':'0'},{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'di':200,'dd':'0','fi':'0'}]"
              data-field-top-res-320-value="232"
              data-field-left-res-320-value="2"
              data-field-top-res-640-value="283"
              data-field-left-res-640-value="5"
              data-field-top-res-960-value="292"
              data-field-left-res-960-value="28"
            >
              <div class="tn-atom" field="tn_text_1727700861880">2</div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__8049274651727700923717 t396__elem--anim-hidden"
              data-elem-id="1727700923717"
              data-elem-type="text"
              data-field-top-value="308"
              data-field-left-value="620"
              data-field-width-value="492"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-mobile="y"
              data-animate-sbs-event="scroll"
              data-animate-sbs-trg="0.5"
              data-animate-sbs-trgofst="0"
              data-animate-sbs-opts="[{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'di':'0','dd':'0'},{'mx':0,'my':0,'sx':1,'sy':1,'op':0,'ro':0,'di':0,'dd':'0','fi':'0'},{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'di':200,'dd':'0','fi':'0'}]"
              data-field-top-res-320-value="293"
              data-field-left-res-320-value="72"
              data-field-width-res-320-value="215"
              data-field-top-res-640-value="418"
              data-field-left-res-640-value="103"
              data-field-top-res-960-value="431"
              data-field-left-res-960-value="121"
            >
              <div class="tn-atom" field="tn_text_1727700923717">
                вы хотите сделать криптовалюту своим основным источником дохода
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__8049274651727700923714 t396__elem--anim-hidden"
              data-elem-id="1727700923714"
              data-elem-type="text"
              data-field-top-value="274"
              data-field-left-value="490"
              data-field-width-value="87"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-mobile="y"
              data-animate-sbs-event="scroll"
              data-animate-sbs-trg="0.5"
              data-animate-sbs-trgofst="0"
              data-animate-sbs-opts="[{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'di':'0','dd':'0'},{'mx':0,'my':0,'sx':1,'sy':1,'op':0,'ro':0,'di':0,'dd':'0','fi':'0'},{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'di':200,'dd':'0','fi':'0'}]"
              data-field-top-res-320-value="292"
              data-field-left-res-320-value="2"
              data-field-top-res-640-value="386"
              data-field-left-res-640-value="5"
              data-field-top-res-960-value="397"
              data-field-left-res-960-value="28"
            >
              <div class="tn-atom" field="tn_text_1727700923714">3</div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__8049274651727700923711 t396__elem--anim-hidden"
              data-elem-id="1727700923711"
              data-elem-type="text"
              data-field-top-value="418"
              data-field-left-value="620"
              data-field-width-value="535"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-mobile="y"
              data-animate-sbs-event="scroll"
              data-animate-sbs-trg="0.5"
              data-animate-sbs-trgofst="0"
              data-animate-sbs-opts="[{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'di':'0','dd':'0'},{'mx':0,'my':0,'sx':1,'sy':1,'op':0,'ro':0,'di':0,'dd':'0','fi':'0'},{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'di':200,'dd':'0','fi':'0'}]"
              data-field-top-res-320-value="363"
              data-field-left-res-320-value="72"
              data-field-width-res-320-value="230"
              data-field-top-res-640-value="502"
              data-field-left-res-640-value="103"
              data-field-width-res-640-value="413"
              data-field-top-res-960-value="541"
              data-field-left-res-960-value="121"
            >
              <div class="tn-atom" field="tn_text_1727700923711">
                У вас нет накоплений, но вы обладаете свободным временем для
                мониторинга рынков и участия в различных бонусных,
                амбассадорских и партнерских программах
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__8049274651727700923702 t396__elem--anim-hidden"
              data-elem-id="1727700923702"
              data-elem-type="text"
              data-field-top-value="405"
              data-field-left-value="490"
              data-field-width-value="87"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-mobile="y"
              data-animate-sbs-event="scroll"
              data-animate-sbs-trg="0.5"
              data-animate-sbs-trgofst="0"
              data-animate-sbs-opts="[{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'di':'0','dd':'0'},{'mx':0,'my':0,'sx':1,'sy':1,'op':0,'ro':0,'di':0,'dd':'0','fi':'0'},{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'di':200,'dd':'0','fi':'0'}]"
              data-field-top-res-320-value="362"
              data-field-left-res-320-value="2"
              data-field-top-res-640-value="507"
              data-field-left-res-640-value="5"
              data-field-top-res-960-value="526"
              data-field-left-res-960-value="28"
            >
              <div class="tn-atom" field="tn_text_1727700923702">4</div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__8049274651727701057169 t396__elem--anim-hidden"
              data-elem-id="1727701057169"
              data-elem-type="text"
              data-field-top-value="563"
              data-field-left-value="621"
              data-field-width-value="427"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-mobile="y"
              data-animate-sbs-event="scroll"
              data-animate-sbs-trg="0.5"
              data-animate-sbs-trgofst="0"
              data-animate-sbs-opts="[{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'di':'0','dd':'0'},{'mx':0,'my':0,'sx':1,'sy':1,'op':0,'ro':0,'di':0,'dd':'0','fi':'0'},{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'di':200,'dd':'0','fi':'0'}]"
              data-field-top-res-320-value="481"
              data-field-left-res-320-value="72"
              data-field-width-res-320-value="215"
              data-field-top-res-640-value="658"
              data-field-left-res-640-value="103"
              data-field-width-res-640-value="470"
              data-field-top-res-960-value="674"
              data-field-left-res-960-value="121"
            >
              <div class="tn-atom" field="tn_text_1727701057169">
                Вы не в восторге от пристального наблюдения «большого брата» за
                вашими финансами и физическими материальными ценностями
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__8049274651727701057165 t396__elem--anim-hidden"
              data-elem-id="1727701057165"
              data-elem-type="text"
              data-field-top-value="549"
              data-field-left-value="491"
              data-field-width-value="87"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-mobile="y"
              data-animate-sbs-event="scroll"
              data-animate-sbs-trg="0.5"
              data-animate-sbs-trgofst="0"
              data-animate-sbs-opts="[{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'di':'0','dd':'0'},{'mx':0,'my':0,'sx':1,'sy':1,'op':0,'ro':0,'di':0,'dd':'0','fi':'0'},{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'di':200,'dd':'0','fi':'0'}]"
              data-field-top-res-320-value="480"
              data-field-left-res-320-value="2"
              data-field-top-res-640-value="649"
              data-field-left-res-640-value="5"
              data-field-top-res-960-value="665"
              data-field-left-res-960-value="28"
            >
              <div class="tn-atom" field="tn_text_1727701057165">5</div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__8049274651727701057161 t396__elem--anim-hidden"
              data-elem-id="1727701057161"
              data-elem-type="text"
              data-field-top-value="702"
              data-field-left-value="621"
              data-field-width-value="535"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-mobile="y"
              data-animate-sbs-event="scroll"
              data-animate-sbs-trg="0.5"
              data-animate-sbs-trgofst="0"
              data-animate-sbs-opts="[{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'di':'0','dd':'0'},{'mx':0,'my':0,'sx':1,'sy':1,'op':0,'ro':0,'di':0,'dd':'0','fi':'0'},{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'di':200,'dd':'0','fi':'0'}]"
              data-field-top-res-320-value="583"
              data-field-left-res-320-value="72"
              data-field-width-res-320-value="230"
              data-field-top-res-640-value="787"
              data-field-left-res-640-value="103"
              data-field-width-res-640-value="527"
              data-field-top-res-960-value="804"
              data-field-left-res-960-value="121"
            >
              <div class="tn-atom" field="tn_text_1727701057161">
                Вам хотели бы иметь наемную работу в перспективной сфере,
                позволяющую достойно себя обеспечивать из любой точки мира в
                нынешнее неспокойное время
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__8049274651727701057151 t396__elem--anim-hidden"
              data-elem-id="1727701057151"
              data-elem-type="text"
              data-field-top-value="688"
              data-field-left-value="491"
              data-field-width-value="87"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-mobile="y"
              data-animate-sbs-event="scroll"
              data-animate-sbs-trg="0.5"
              data-animate-sbs-trgofst="0"
              data-animate-sbs-opts="[{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'di':'0','dd':'0'},{'mx':0,'my':0,'sx':1,'sy':1,'op':0,'ro':0,'di':0,'dd':'0','fi':'0'},{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'di':200,'dd':'0','fi':'0'}]"
              data-field-top-res-320-value="582"
              data-field-left-res-320-value="2"
              data-field-top-res-640-value="778"
              data-field-left-res-640-value="5"
              data-field-top-res-960-value="791"
              data-field-left-res-960-value="28"
            >
              <div class="tn-atom" field="tn_text_1727701057151">6</div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__8049274651727701210323 t396__elem--anim-hidden"
              data-elem-id="1727701210323"
              data-elem-type="text"
              data-field-top-value="845"
              data-field-left-value="621"
              data-field-width-value="535"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-mobile="y"
              data-animate-sbs-event="scroll"
              data-animate-sbs-trg="0.5"
              data-animate-sbs-trgofst="0"
              data-animate-sbs-opts="[{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'di':'0','dd':'0'},{'mx':0,'my':0,'sx':1,'sy':1,'op':0,'ro':0,'di':0,'dd':'0','fi':'0'},{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'di':200,'dd':'0','fi':'0'}]"
              data-field-top-res-320-value="703"
              data-field-left-res-320-value="72"
              data-field-width-res-320-value="230"
              data-field-top-res-640-value="940"
              data-field-left-res-640-value="108"
              data-field-width-res-640-value="527"
              data-field-top-res-960-value="943"
              data-field-left-res-960-value="115"
            >
              <div class="tn-atom" field="tn_text_1727701210323">
                Вы с энтузиазмом смотрите на технологии будущего - или просто
                хотите всегда оставаться в курсе трендов
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__8049274651727701210315 t396__elem--anim-hidden"
              data-elem-id="1727701210315"
              data-elem-type="text"
              data-field-top-value="818"
              data-field-left-value="491"
              data-field-width-value="87"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-animate-mobile="y"
              data-animate-sbs-event="scroll"
              data-animate-sbs-trg="0.5"
              data-animate-sbs-trgofst="0"
              data-animate-sbs-opts="[{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'di':'0','dd':'0'},{'mx':0,'my':0,'sx':1,'sy':1,'op':0,'ro':0,'di':0,'dd':'0','fi':'0'},{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'di':200,'dd':'0','fi':'0'}]"
              data-field-top-res-320-value="702"
              data-field-left-res-320-value="2"
              data-field-top-res-640-value="914"
              data-field-left-res-640-value="10"
              data-field-top-res-960-value="920"
              data-field-left-res-960-value="22"
            >
              <div class="tn-atom" field="tn_text_1727701210315">7</div>
            </div>
          </div>
        </div>
        <script>
          t_onFuncLoad("t396_initialScale", function () {
            t396_initialScale("804927465");
          });
          t_onReady(function () {
            t_onFuncLoad("t396_init", function () {
              t396_init("804927465");
            });
          });
        </script>
        <!-- /T396 -->
      </div>
      <div id="rec804946313" class="r t-rec" style="" data-record-type="215">
        <a name="FORM" style="font-size: 0"></a>
      </div>
      <div
        id="rec804913782"
        class="r t-rec t-rec_pt_0"
        style="padding-top: 0px"
        data-animationappear="off"
        data-record-type="396"
      >
        <!-- T396 -->
        <style>
          #rec804913782 .t396__artboard {
            height: 650px ;
            background-color: #181818;
          }
          #rec804913782 .t396__carrier, #rec804913782 .t396__filter, #rec804913782 .t396__artboard {
            height: 620px !important;
          }
          #rec804913782 .t396__filter {
            height: 650px;
          }
          #rec804913782 .t396__carrier {
            height: 650px;
            background-position: center center;
            background-attachment: scroll;
            background-size: cover;
            background-repeat: no-repeat;
          }
          @media screen and (max-width: 1199px) {
            #rec804913782 .t396__artboard,
            #rec804913782 .t396__filter,
            #rec804913782 .t396__carrier {
            }
            #rec804913782 .t396__filter {
            }
            #rec804913782 .t396__carrier {
              background-attachment: scroll;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804913782 .t396__artboard,
            #rec804913782 .t396__filter,
            #rec804913782 .t396__carrier {
              height: 680px;
            }
            #rec804913782 .t396__filter {
            }
            #rec804913782 .t396__carrier {
              background-attachment: scroll;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804913782 .t396__artboard,
            #rec804913782 .t396__filter,
            #rec804913782 .t396__carrier {
              height: 480px;
            }
            #rec804913782 .t396__filter {
            }
            #rec804913782 .t396__carrier {
              background-attachment: scroll;
            }
          }
          #rec804913782 .tn-elem[data-elem-id="1727700284378"] {
            z-index: 3;
            top: 23px;
            left: calc(50% - 600px + 20px);
            width: 1161px;
            height: 360px;
          }
          #rec804913782 .tn-elem[data-elem-id="1727700284378"] .tn-atom {
            border-radius: 18px 18px 18px 18px;
            background-color: #2B2B2B;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804913782 .tn-elem[data-elem-id="1727700284378"] {
              left: calc(50% - 480px + 14px);
              width: 931px;
              height: 343px;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804913782 .tn-elem[data-elem-id="1727700284378"] {
              width: 613px;
              height: 525px;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804913782 .tn-elem[data-elem-id="1727700284378"] {
              top: 23px;
              left: calc(50% - 160px + 10px);
              width: 300px;
              height: 382px;
            }
          }
          #rec804913782 .tn-elem[data-elem-id="1727693719780"] {
            color: #fff;
            text-align: center;
            z-index: 4;
            top: 75px;
            left: calc(50% - 600px + 247px);
            width: 705px;
            height: auto;
          }
          #rec804913782 .tn-elem[data-elem-id="1727693719780"] .tn-atom {
            vertical-align: middle;
            color: #fff;
            font-size: 32px;
            font-family: "Montserrat", Arial, sans-serif;
            line-height: 1.2;
            font-weight: 400;
            letter-spacing: -1px;
            text-transform: uppercase;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804913782 .tn-elem[data-elem-id="1727693719780"] {
              left: calc(50% - 480px + 81px);
              width: 798px;
              height: auto;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804913782 .tn-elem[data-elem-id="1727693719780"] {
              left: calc(50% - 320px + 14px);
              width: 615px;
              height: auto;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804913782 .tn-elem[data-elem-id="1727693719780"] {
              top: 45px;
              left: calc(50% - 160px + 23px);
              width: 275px;
              height: auto;
            }
            #rec804913782 .tn-elem[data-elem-id="1727693719780"] .tn-atom {
              font-size: 18px;
              background-size: cover;
            }
          }
          #rec804913782 .tn-elem[data-elem-id="1727698902810"] {
            z-index: 5;
            top: 225px;
            left: calc(50% - 600px + 103px);
            width: 994px;
            height: auto;
          }
          #rec804913782 .tn-elem[data-elem-id="1727698902810"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804913782 .tn-elem[data-elem-id="1727698902810"] {
              left: calc(50% - 480px + 67px);
              width: 826px;
              height: auto;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804913782 .tn-elem[data-elem-id="1727698902810"] {
              left: calc(50% - 320px + 120px);
              width: 399px;
              height: auto;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804913782 .tn-elem[data-elem-id="1727698902810"] {
              top: 159px;
              left: calc(50% - 160px + 20px);
              width: 280px;
              height: auto;
            }
          }
          #rec804913782 .tn-elem[data-elem-id="1727699869398"] {
            color: #fff;
            text-align: center;
            z-index: 6;
            top: 294px;
            left: calc(50% - 600px + 320px);
            width: 560px;
            height: auto;
          }
          #rec804913782 .tn-elem[data-elem-id="1727699869398"] .tn-atom {
            vertical-align: middle;
            color: #fff;
            font-size: 12px;
            font-family: "Inter", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804913782 .tn-elem[data-elem-id="1727699869398"] {
              left: calc(50% - 480px + 283px);
              width: 465px;
              height: auto;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804913782 .tn-elem[data-elem-id="1727699869398"] {
              top: 459px;
              left: calc(50% - 320px + 87px);
              height: auto;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804913782 .tn-elem[data-elem-id="1727699869398"] {
              top: 364px;
              left: calc(50% - 160px + 64px);
              width: 192px;
              height: auto;
            }
            #rec804913782 .tn-elem[data-elem-id="1727699869398"] .tn-atom {
              font-size: 8px;
              line-height: 1.3;
              background-size: cover;
            }
          }
          #rec804913782 .tn-elem[data-elem-id="1727700389130"] {
            z-index: 7;
            top: 235px;
            left: calc(50% - 600px + 1120px);
            width: 107px;
            height: auto;
          }
          #rec804913782 .tn-elem[data-elem-id="1727700389130"] .tn-atom {
            border-radius: 0px 0px 0px 0px;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          #rec804913782 .tn-elem[data-elem-id="1727700389130"] .tn-atom__img {
            border-radius: 0px 0px 0px 0px;
            object-position: center center;
          }
          @media screen and (max-width: 1199px) {
            #rec804913782 .tn-elem[data-elem-id="1727700389130"] {
              height: auto;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804913782 .tn-elem[data-elem-id="1727700389130"] {
              top: 256px;
              left: calc(50% - 320px + 503px);
              height: auto;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804913782 .tn-elem[data-elem-id="1727700389130"] {
              top: 519px;
              left: calc(50% - 160px + 240px);
              width: 51px;
              height: auto;
            }
          }
          #rec804913782 .tn-elem[data-elem-id="1727700389129"] {
            z-index: 8;
            top: 294px;
            left: calc(50% - 600px + 956px);
            width: 96px;
            height: auto;
          }
          #rec804913782 .tn-elem[data-elem-id="1727700389129"] .tn-atom {
            border-radius: 0px 0px 0px 0px;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          #rec804913782 .tn-elem[data-elem-id="1727700389129"] .tn-atom__img {
            border-radius: 0px 0px 0px 0px;
            object-position: center center;
          }
          @media screen and (max-width: 1199px) {
            #rec804913782 .tn-elem[data-elem-id="1727700389129"] {
              height: auto;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804913782 .tn-elem[data-elem-id="1727700389129"] {
              top: 467px;
              left: calc(50% - 320px + 454px);
              height: auto;
              display: none;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804913782 .tn-elem[data-elem-id="1727700389129"] {
              top: 596px;
              left: calc(50% - 160px + 36px);
              width: 60px;
              height: auto;
            }
          }
          #rec804913782 .tn-elem[data-elem-id="1727700389126"] {
            z-index: 9;
            top: 36px;
            left: calc(50% - 600px + -8px);
            width: 128px;
            height: auto;
          }
          #rec804913782 .tn-elem[data-elem-id="1727700389126"] .tn-atom {
            border-radius: 0px 0px 0px 0px;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          #rec804913782 .tn-elem[data-elem-id="1727700389126"] .tn-atom__img {
            border-radius: 0px 0px 0px 0px;
            object-position: center center;
          }
          @media screen and (max-width: 1199px) {
            #rec804913782 .tn-elem[data-elem-id="1727700389126"] {
              height: auto;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804913782 .tn-elem[data-elem-id="1727700389126"] {
              top: 174px;
              left: calc(50% - 320px + -38px);
              height: auto;
              display: none;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804913782 .tn-elem[data-elem-id="1727700389126"] {
              top: 551px;
              left: calc(50% - 160px + 17px);
              width: 55px;
              height: auto;
            }
          }
          #rec804913782 .tn-elem[data-elem-id="1727700389123"] {
            z-index: 10;
            top: 124px;
            left: calc(50% - 600px + 0px);
            width: 73px;
            height: auto;
          }
          #rec804913782 .tn-elem[data-elem-id="1727700389123"] .tn-atom {
            border-radius: 0px 0px 0px 0px;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          #rec804913782 .tn-elem[data-elem-id="1727700389123"] .tn-atom__img {
            border-radius: 0px 0px 0px 0px;
            object-position: center center;
          }
          @media screen and (max-width: 1199px) {
            #rec804913782 .tn-elem[data-elem-id="1727700389123"] {
              height: auto;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804913782 .tn-elem[data-elem-id="1727700389123"] {
              top: 620px;
              left: calc(50% - 320px + 126px);
              height: auto;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804913782 .tn-elem[data-elem-id="1727700389123"] {
              top: 668px;
              left: calc(50% - 160px + 0px);
              width: 55px;
              height: auto;
            }
          }
          #rec804913782 .tn-elem[data-elem-id="1729775272934"] {
            color: #fff;
            text-align: center;
            z-index: 11;
            top: 313px;
            left: calc(50% - 600px + 306px);
            width: 560px;
            height: auto;
          }
          #rec804913782 .tn-elem[data-elem-id="1729775272934"] .tn-atom {
            vertical-align: middle;
            color: #fff;
            font-size: 16px;
            font-family: "Inter", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804913782 .tn-elem[data-elem-id="1729775272934"] {
              left: calc(50% - 480px + 222px);
              height: auto;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804913782 .tn-elem[data-elem-id="1729775272934"] {
              top: 478px;
              left: calc(50% - 320px + 14px);
              height: auto;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804913782 .tn-elem[data-elem-id="1729775272934"] {
              top: 418px;
              left: calc(50% - 160px + -123px);
              height: auto;
            }
            #rec804913782 .tn-elem[data-elem-id="1729775272934"] .tn-atom {
              font-size: 13px;
              background-size: cover;
            }
          }
        </style>
        <div class="t396">
          <div
            class="t396__artboard"
            data-artboard-recid="804913782"
            data-artboard-screens="320,640,960,1200"
            data-artboard-height="410"
            data-artboard-valign="center"
            data-artboard-upscale="grid"
            data-artboard-height-res-320="580"
            data-artboard-upscale-res-320="window"
            data-artboard-height-res-640="590"
            id="form-section"
          >
            <div class="t396__carrier" data-artboard-recid="804913782"></div>
            <div class="t396__filter" data-artboard-recid="804913782"></div>
            <div class="form-wrap" id="form-wrap">
              <h2 class="form-heading">
                РЕГИСТРИРУЙСЯ НА БЕСПЛАТНЫЙ КУРС ПО ВХОДУ В КРИПТОБИЗНЕС
              </h2>
              <div class="tn-atom tn-atom__form form-block">
                <form
                    class="form _main-form contact-form freg thin rounded form_sub-wrap"
                    id="main-form"
                    method="post">
                </form>
              </div>
              <div class="form-info">
                <span>Оставляя заявку, я даю свое согласие на обработку персональных данных</span>
                <span>Обучаем только совершеннолетних + 18!</span>
                <span>Обучение дает знания и навыки, но результат зависит 
                  от личных усилий пользователя и рыночной ситуации</span>
              </div>
            </div>
            
           
           
            <div
              class="t396__elem tn-elem tn-elem__8049137821727700389129"
              data-elem-id="1727700389129"
              data-elem-type="image"
              data-field-top-value="480"
              data-field-left-value="1050"
              data-field-height-value="73"
              data-field-width-value="140"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value="px"
              data-field-widthunits-value="px"
              data-field-filewidth-value="96"
              data-field-fileheight-value="73"
              data-field-heightmode-value="hug"
              data-field-top-res-320-value="596"
              data-field-left-res-320-value="36"
              data-field-width-res-320-value="60"
              data-field-top-res-640-value="467"
              data-field-left-res-640-value="454"
            >
              <div class="tn-atom">
                <img
                  class="tn-atom__img t-img"
                  data-original="images/image_4-6.png"
                  src="images/image_4-6.png"
                  alt=""
                  imgfield="tn_img_1727700389129"
                />
              </div>
            </div>
            <div
              class="t396__elem tn-elem tn-elem__8049137821727700389126"
              data-elem-id="1727700389126"
              data-elem-type="image"
              data-field-top-value="0"
              data-field-left-value="0"
              data-field-height-value="88"
              data-field-width-value="190"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value="px"
              data-field-widthunits-value="px"
              data-animate-prx="mouse"
              data-animate-prx-dx="30"
              data-animate-prx-dy="30"
              data-field-filewidth-value="128"
              data-field-fileheight-value="88"
              data-field-heightmode-value="hug"
              data-field-top-res-320-value="551"
              data-field-left-res-320-value="17"
              data-field-width-res-320-value="55"
              data-field-top-res-640-value="174"
              data-field-left-res-640-value="-38"
            >
              <div class="tn-atom">
                <img
                  class="tn-atom__img t-img"
                  data-original="images/image_4.png"
                  src="images/image_4.png"
                  alt=""
                  imgfield="tn_img_1727700389126"
                />
              </div>
            </div>
          
          </div>
        </div>
        <script>
          t_onFuncLoad("t396_initialScale", function () {
            t396_initialScale("804913782");
          });
          t_onReady(function () {
            t_onFuncLoad("t396_init", function () {
              t396_init("804913782");
            });
          });
        </script>
        <!-- /T396 -->
      </div>
      <div
        id="rec804924964"
        class="r t-rec t-rec_pt_0"
        style="padding-top: 0px"
        data-animationappear="off"
        data-record-type="396"
      >
        <!-- T396 -->
        <style>
          #rec804924964 .t396__artboard {
            height: 150px;
            background-color: #181818;
          }
          #rec804924964 .t396__filter {
            height: 150px;
          }
          #rec804924964 .t396__carrier {
            height: 150px;
            background-position: center center;
            background-attachment: scroll;
            background-size: cover;
            background-repeat: no-repeat;
          }
          @media screen and (max-width: 1199px) {
            #rec804924964 .t396__artboard,
            #rec804924964 .t396__filter,
            #rec804924964 .t396__carrier {
            }
            #rec804924964 .t396__filter {
            }
            #rec804924964 .t396__carrier {
              background-attachment: scroll;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804924964 .t396__artboard,
            #rec804924964 .t396__filter,
            #rec804924964 .t396__carrier {
              height: 650px;
            }
            #rec804924964 .t396__filter {
            }
            #rec804924964 .t396__carrier {
              background-attachment: scroll;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804924964 .t396__artboard,
            #rec804924964 .t396__filter,
            #rec804924964 .t396__carrier {
              height: 130px;
            }
            #rec804924964 .t396__filter {
            }
            #rec804924964 .t396__carrier {
              background-attachment: scroll;
            }
          }
          #rec804924964 .tn-elem[data-elem-id="1727693719780"] {
            color: #fff;
            text-align: center;
            z-index: 3;
            top: 85px;
            left: calc(50% - 600px + 226px);
            width: 748px;
            height: auto;
          }
          #rec804924964 .tn-elem[data-elem-id="1727693719780"] .tn-atom {
            color: #fff;
            font-size: 32px;
            font-family: "Montserrat", Arial, sans-serif;
            line-height: 1.2;
            font-weight: 400;
            letter-spacing: -1px;
            text-transform: uppercase;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
            #rec804924964 .tn-elem[data-elem-id="1727693719780"] {
              left: calc(50% - 480px + 81px);
              width: 798px;
              height: auto;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804924964 .tn-elem[data-elem-id="1727693719780"] {
              left: calc(50% - 320px + 14px);
              width: 615px;
              height: auto;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804924964 .tn-elem[data-elem-id="1727693719780"] {
              top: 45px;
              left: calc(50% - 160px + 13px);
              width: 293px;
              height: auto;
            }
            #rec804924964 .tn-elem[data-elem-id="1727693719780"] .tn-atom {
              font-size: 19px;
              background-size: cover;
            }
          }
        </style>
        <div class="t396">
          <div
            class="t396__artboard"
            data-artboard-recid="804924964"
            data-artboard-screens="320,640,960,1200"
            data-artboard-height="150"
            data-artboard-valign="center"
            data-artboard-upscale="grid"
            data-artboard-height-res-320="130"
            data-artboard-upscale-res-320="window"
            data-artboard-height-res-640="590"
          >
            <div class="t396__carrier" data-artboard-recid="804924964"></div>
            <div class="t396__filter" data-artboard-recid="804924964"></div>
            <div
              class="t396__elem tn-elem tn-elem__8049249641727693719780"
              data-elem-id="1727693719780"
              data-elem-type="text"
              data-field-top-value="85"
              data-field-left-value="226"
              data-field-width-value="748"
              data-field-axisy-value="top"
              data-field-axisx-value="left"
              data-field-container-value="grid"
              data-field-topunits-value="px"
              data-field-leftunits-value="px"
              data-field-heightunits-value=""
              data-field-widthunits-value="px"
              data-field-top-res-320-value="45"
              data-field-left-res-320-value="13"
              data-field-width-res-320-value="293"
              data-field-left-res-640-value="14"
              data-field-width-res-640-value="615"
              data-field-left-res-960-value="81"
              data-field-width-res-960-value="798"
            >
              <div class="tn-atom" field="tn_text_1727693719780">
                Ответы на вопросы
              </div>
            </div>
          </div>
        </div>
        <script>
          t_onFuncLoad("t396_initialScale", function () {
            t396_initialScale("804924964");
          });
          t_onReady(function () {
            t_onFuncLoad("t396_init", function () {
              t396_init("804924964");
            });
          });
        </script>
        <!-- /T396 -->
      </div>
      <div id="rec804942615" class="r t-rec" style="" data-record-type="215">
        <a name="5" style="font-size: 0"></a>
      </div>
      <div
        id="rec804925521"
        class="r t-rec t-rec_pt_30 t-rec_pb_90"
        style="
          padding-top: 30px;
          padding-bottom: 90px;
          background-color:#181818;
        "
        data-animationappear="off"
        data-record-type="585"
        data-bg-color="#f3f3f3"
      >
        <!-- T585 -->
        <div class="t585">
          <div class="t-container">
            <div class="t-col t-col_12">
              <div
                class="t585__accordion"
                data-accordion="false"
                data-scroll-to-expanded="false"
              >
                <div class="t585__wrapper">
                  <div class="t585__header" style="border-top: 1px solid #2B2B2B">
                    <button
                      type="button"
                      class="t585__trigger-button"
                      aria-controls="accordion1_804925521"
                      aria-expanded="false"
                    >
                      <span
                        class="t585__title t-name t-name_xl"
                        field="li_title__6146175426420"
                        >Почему бесплатно?</span
                      >
                      <span class="t585__icon">
                        <span class="t585__lines">
                          <svg
                            role="presentation"
                            focusable="false"
                            width="24px"
                            height="24px"
                            viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                          >
                            <g
                              stroke="none"
                              stroke-width="1px"
                              fill="none"
                              fill-rule="evenodd"
                              stroke-linecap="square"
                            >
                              <g
                                transform="translate(1.000000, 1.000000)"
                                stroke="#FFFFFF"
                              >
                                <path d="M0,11 L22,11"></path>
                                <path d="M11,0 L11,22"></path>
                              </g>
                            </g>
                          </svg>
                        </span>
                        <span
                          class="t585__circle"
                          style="background-color: transparent"
                        ></span>
                      </span>
                      <span class="t585__icon t585__icon-hover">
                        <span class="t585__lines">
                          <svg
                            role="presentation"
                            focusable="false"
                            width="24px"
                            height="24px"
                            viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                          >
                            <g
                              stroke="none"
                              stroke-width="1px"
                              fill="none"
                              fill-rule="evenodd"
                              stroke-linecap="square"
                            >
                              <g
                                transform="translate(1.000000, 1.000000)"
                                stroke="#FFFFFF"
                              >
                                <path d="M0,11 L22,11"></path>
                                <path d="M11,0 L11,22"></path>
                              </g>
                            </g>
                          </svg>
                        </span>
                        <span
                          class="t585__circle"
                          style="background-color: transparent"
                        ></span>
                      </span>
                    </button>
                  </div>
                  <div
                    class="t585__content"
                    id="accordion1_804925521"
                    hidden=""
                  >
                    <div class="t585__textwrapper">
                      <div
                        class="t585__text t-descr t-descr_xs"
                        field="li_descr__6146175426420"
                      >
                        Последние девять месяцев мы очень активно занимаемся
                        развитием нашего комьюнити для того чтобы иметь
                        максимальные возможности в этом криптовалютном цикле.
                        Поэтому периодически наши кураторы проводят бесплатные
                        марафоны и мастер-классы с уклоном на практику чтобы
                        показать реальный заработок на криптовалюте и уже после
                        бесплатного обучения у студентов будет возможность
                        обсудить с куратором индивидуальные условия дальнейшего
                        сотрудничества в рамках нашего сообщества.<br /><br />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="t-col t-col_12">
              <div
                class="t585__accordion"
                data-accordion="false"
                data-scroll-to-expanded="false"
              >
                <div class="t585__wrapper">
                  <div class="t585__header" style="border-top: 1px solid #2B2B2B">
                    <button
                      type="button"
                      class="t585__trigger-button"
                      aria-controls="accordion2_804925521"
                      aria-expanded="false"
                    >
                      <span
                        class="t585__title t-name t-name_xl"
                        field="li_title__6147175426421"
                        >Сколько времени необходимо посвящать?</span
                      >
                      <span class="t585__icon">
                        <span class="t585__lines">
                          <svg
                            role="presentation"
                            focusable="false"
                            width="24px"
                            height="24px"
                            viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                          >
                            <g
                              stroke="none"
                              stroke-width="1px"
                              fill="none"
                              fill-rule="evenodd"
                              stroke-linecap="square"
                            >
                              <g
                                transform="translate(1.000000, 1.000000)"
                                stroke="#FFFFFF"
                              >
                                <path d="M0,11 L22,11"></path>
                                <path d="M11,0 L11,22"></path>
                              </g>
                            </g>
                          </svg>
                        </span>
                        <span
                          class="t585__circle"
                          style="background-color: transparent"
                        ></span>
                      </span>
                      <span class="t585__icon t585__icon-hover">
                        <span class="t585__lines">
                          <svg
                            role="presentation"
                            focusable="false"
                            width="24px"
                            height="24px"
                            viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                          >
                            <g
                              stroke="none"
                              stroke-width="1px"
                              fill="none"
                              fill-rule="evenodd"
                              stroke-linecap="square"
                            >
                              <g
                                transform="translate(1.000000, 1.000000)"
                                stroke="#FFFFFF"
                              >
                                <path d="M0,11 L22,11"></path>
                                <path d="M11,0 L11,22"></path>
                              </g>
                            </g>
                          </svg>
                        </span>
                        <span
                          class="t585__circle"
                          style="background-color: transparent"
                        ></span>
                      </span>
                    </button>
                  </div>
                  <div
                    class="t585__content"
                    id="accordion2_804925521"
                    hidden=""
                  >
                    <div class="t585__textwrapper">
                      <div
                        class="t585__text t-descr t-descr_xs"
                        field="li_descr__6147175426421"
                      >
                        Зависит от того, на сколько глубоко и подробно Вы
                        хотите разобраться в криптовалюте. Чтобы увидеть
                        реальный результат уже через пять занятий, с Вашей
                        стороны будет достаточно 15-30 минут в день. Если же Вы
                        хотите и готовы посвящать больше времени обучению, в
                        таком случае Ваш куратор предоставит Вам дополнительный
                        материал для самостоятельного изучения.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="t-col t-col_12">
              <div
                class="t585__accordion"
                data-accordion="false"
                data-scroll-to-expanded="false"
              >
                <div class="t585__wrapper">
                  <div class="t585__header" style="border-top: 1px solid #2B2B2B">
                    <button
                      type="button"
                      class="t585__trigger-button"
                      aria-controls="accordion3_804925521"
                      aria-expanded="false"
                    >
                      <span
                        class="t585__title t-name t-name_xl"
                        field="li_title__6147175426422"
                        >Какой график и расписание занятий?</span
                      >
                      <span class="t585__icon">
                        <span class="t585__lines">
                          <svg
                            role="presentation"
                            focusable="false"
                            width="24px"
                            height="24px"
                            viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                          >
                            <g
                              stroke="none"
                              stroke-width="1px"
                              fill="none"
                              fill-rule="evenodd"
                              stroke-linecap="square"
                            >
                              <g
                                transform="translate(1.000000, 1.000000)"
                                stroke="#FFFFFF"
                              >
                                <path d="M0,11 L22,11"></path>
                                <path d="M11,0 L11,22"></path>
                              </g>
                            </g>
                          </svg>
                        </span>
                        <span
                          class="t585__circle"
                          style="background-color: transparent"
                        ></span>
                      </span>
                      <span class="t585__icon t585__icon-hover">
                        <span class="t585__lines">
                          <svg
                            role="presentation"
                            focusable="false"
                            width="24px"
                            height="24px"
                            viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                          >
                            <g
                              stroke="none"
                              stroke-width="1px"
                              fill="none"
                              fill-rule="evenodd"
                              stroke-linecap="square"
                            >
                              <g
                                transform="translate(1.000000, 1.000000)"
                                stroke="#FFFFFF"
                              >
                                <path d="M0,11 L22,11"></path>
                                <path d="M11,0 L11,22"></path>
                              </g>
                            </g>
                          </svg>
                        </span>
                        <span
                          class="t585__circle"
                          style="background-color: #2B2B2B"
                        ></span>
                      </span>
                    </button>
                  </div>
                  <div
                    class="t585__content"
                    id="accordion3_804925521"
                    hidden=""
                  >
                    <div class="t585__textwrapper">
                      <div
                        class="t585__text t-descr t-descr_xs"
                        field="li_descr__6147175426422"
                      >
                        Зачастую обучение проводится в промежутке 10:00 - 19:00
                        по московскому времени в будние дни. Однако по
                        согласованию с куратором, отдельные занятия можно
                        провести и в другое время или дни.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="t-col t-col_12">
              <div
                class="t585__accordion"
                data-accordion="false"
                data-scroll-to-expanded="false"
              >
                <div class="t585__wrapper">
                  <div class="t585__header" style="border-top: 1px solid #2B2B2B">
                    <button
                      type="button"
                      class="t585__trigger-button"
                      aria-controls="accordion4_804925521"
                      aria-expanded="false"
                    >
                      <span
                        class="t585__title t-name t-name_xl"
                        field="li_title__1727706132037"
                        >Какая должна быть тестовая сумма для практических
                        занятий?</span
                      >
                      <span class="t585__icon">
                        <span class="t585__lines">
                          <svg
                            role="presentation"
                            focusable="false"
                            width="24px"
                            height="24px"
                            viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                          >
                            <g
                              stroke="none"
                              stroke-width="1px"
                              fill="none"
                              fill-rule="evenodd"
                              stroke-linecap="square"
                            >
                              <g
                                transform="translate(1.000000, 1.000000)"
                                stroke="#FFFFFF"
                              >
                                <path d="M0,11 L22,11"></path>
                                <path d="M11,0 L11,22"></path>
                              </g>
                            </g>
                          </svg>
                        </span>
                        <span
                          class="t585__circle"
                          style="background-color: transparent"
                        ></span>
                      </span>
                      <span class="t585__icon t585__icon-hover">
                        <span class="t585__lines">
                          <svg
                            role="presentation"
                            focusable="false"
                            width="24px"
                            height="24px"
                            viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                          >
                            <g
                              stroke="none"
                              stroke-width="1px"
                              fill="none"
                              fill-rule="evenodd"
                              stroke-linecap="square"
                            >
                              <g
                                transform="translate(1.000000, 1.000000)"
                                stroke="#FFFFFF"
                              >
                                <path d="M0,11 L22,11"></path>
                                <path d="M11,0 L11,22"></path>
                              </g>
                            </g>
                          </svg>
                        </span>
                        <span
                          class="t585__circle"
                          style="background-color: #2B2B2B"
                        ></span>
                      </span>
                    </button>
                  </div>
                  <div
                    class="t585__content"
                    id="accordion4_804925521"
                    hidden=""
                  >
                    <div class="t585__textwrapper">
                      <div
                        class="t585__text t-descr t-descr_xs"
                        field="li_descr__1727706132037"
                      >
                        Если Вы человек без опыта, то первый подготовительный
                        ликбез наш менеджер тоже проведёт совершенно бесплатно и
                        без необходимости внесения каких-либо средств. Однако
                        если Вы захотите пройти полноценный бесплатный марафон
                        уже под сопровождением куратора и увидеть реальный
                        результат, то в таком случае Вы можете самостоятельно
                        определить комфортную для себя сумму под занятия и
                        внести её на свой кошелёк или биржу. Мы рекомендуем
                        отталкиваться хотя бы от 5000 рублей чтобы у куратора
                        была возможность познакомить Вас с двумя-тремя способами
                        заработка.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="t-col t-col_12">
              <div
                class="t585__accordion"
                data-accordion="false"
                data-scroll-to-expanded="false"
              >
                <div class="t585__wrapper">
                  <div class="t585__header" style="border-top: 1px solid #2B2B2B">
                    <button
                      type="button"
                      class="t585__trigger-button"
                      aria-controls="accordion5_804925521"
                      aria-expanded="false"
                    >
                      <span
                        class="t585__title t-name t-name_xl"
                        field="li_title__1727706148599"
                        >Можно ли записаться на курс в другой раз?</span
                      >
                      <span class="t585__icon">
                        <span class="t585__lines">
                          <svg
                            role="presentation"
                            focusable="false"
                            width="24px"
                            height="24px"
                            viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                          >
                            <g
                              stroke="none"
                              stroke-width="1px"
                              fill="none"
                              fill-rule="evenodd"
                              stroke-linecap="square"
                            >
                              <g
                                transform="translate(1.000000, 1.000000)"
                                stroke="#FFFFFF"
                              >
                                <path d="M0,11 L22,11"></path>
                                <path d="M11,0 L11,22"></path>
                              </g>
                            </g>
                          </svg>
                        </span>
                        <span
                          class="t585__circle"
                          style="background-color: transparent"
                        ></span>
                      </span>
                      <span class="t585__icon t585__icon-hover">
                        <span class="t585__lines">
                          <svg
                            role="presentation"
                            focusable="false"
                            width="24px"
                            height="24px"
                            viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                          >
                            <g
                              stroke="none"
                              stroke-width="1px"
                              fill="none"
                              fill-rule="evenodd"
                              stroke-linecap="square"
                            >
                              <g
                                transform="translate(1.000000, 1.000000)"
                                stroke="#FFFFFF"
                              >
                                <path d="M0,11 L22,11"></path>
                                <path d="M11,0 L11,22"></path>
                              </g>
                            </g>
                          </svg>
                        </span>
                        <span
                          class="t585__circle"
                          style="background-color: transparent"
                        ></span>
                      </span>
                    </button>
                  </div>
                  <div
                    class="t585__content"
                    id="accordion5_804925521"
                    hidden=""
                  >
                    <div class="t585__textwrapper">
                      <div
                        class="t585__text t-descr t-descr_xs"
                        field="li_descr__1727706148599"
                      >
                        Бесплатный набор мы проводим как правило один раз в 2-3
                        месяца. Так что записаться можно будет, а вот успеть
                        сформировать портфель и собрать позиции с оптимальной
                        точкой входа навряд ли. Всё дело в 4-х летних циклах и
                        фазах криптовалютного рынка. Если Вы хотите заработать в
                        текущем цикле, тогда нужно приступать к обучению уже
                        сегодня чтобы завтра перейти к заработку и наращиванию
                        капитала. А если Вы хотите отложить своё саморазвитие в
                        этом направлении, тогда лучше уже подождать следующий
                        криптовалютный цикл 2028 года.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="t-col t-col_12">
              <div
                class="t585__accordion"
                data-accordion="false"
                data-scroll-to-expanded="false"
              >
                <div class="t585__wrapper">
                  <div class="t585__header" style="border-top: 1px solid #2B2B2B">
                    <button
                      type="button"
                      class="t585__trigger-button"
                      aria-controls="accordion6_804925521"
                      aria-expanded="false"
                    >
                      <span
                        class="t585__title t-name t-name_xl"
                        field="li_title__1727706215375"
                        >Какой заработок возможно получить?</span
                      >
                      <span class="t585__icon">
                        <span class="t585__lines">
                          <svg
                            role="presentation"
                            focusable="false"
                            width="24px"
                            height="24px"
                            viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                          >
                            <g
                              stroke="none"
                              stroke-width="1px"
                              fill="none"
                              fill-rule="evenodd"
                              stroke-linecap="square"
                            >
                              <g
                                transform="translate(1.000000, 1.000000)"
                                stroke="#FFFFFF"
                              >
                                <path d="M0,11 L22,11"></path>
                                <path d="M11,0 L11,22"></path>
                              </g>
                            </g>
                          </svg>
                        </span>
                        <span
                          class="t585__circle"
                          style="background-color: transparent"
                        ></span>
                      </span>
                      <span class="t585__icon t585__icon-hover">
                        <span class="t585__lines">
                          <svg
                            role="presentation"
                            focusable="false"
                            width="24px"
                            height="24px"
                            viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                          >
                            <g
                              stroke="none"
                              stroke-width="1px"
                              fill="none"
                              fill-rule="evenodd"
                              stroke-linecap="square"
                            >
                              <g
                                transform="translate(1.000000, 1.000000)"
                                stroke="#FFFFFF"
                              >
                                <path d="M0,11 L22,11"></path>
                                <path d="M11,0 L11,22"></path>
                              </g>
                            </g>
                          </svg>
                        </span>
                        <span
                          class="t585__circle"
                          style="background-color: #2B2B2B"
                        ></span>
                      </span>
                    </button>
                  </div>
                  <div
                    class="t585__content"
                    id="accordion6_804925521"
                    hidden=""
                  >
                    <div class="t585__textwrapper">
                      <div
                        class="t585__text t-descr t-descr_xs"
                        field="li_descr__1727706215375"
                      >
                        В процессе бесплатного обучения реальная доходность
                        может достигать от 5% до 15%. Предсказать точный процент
                        доходности довольно сложно, но это тот диапазон, на
                        который обычно выходят наши ученики за 5-7 занятий.
                        Главная задача обучения заключается не в том, чтобы за
                        первую же неделю заработать как можно больше, а в том
                        чтобы познакомиться с куратором и его стратегиями, а
                        также проверить всё на деле и получить ответы на все
                        свои вопросы.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="t-col t-col_12">
              <div
                class="t585__accordion"
                data-accordion="false"
                data-scroll-to-expanded="false"
              >
                <div class="t585__wrapper">
                  <div class="t585__header" style="border-top: 1px solid #2B2B2B">
                    <button
                      type="button"
                      class="t585__trigger-button"
                      aria-controls="accordion7_804925521"
                      aria-expanded="false"
                    >
                      <span
                        class="t585__title t-name t-name_xl"
                        field="li_title__1727706230259"
                        >На каких биржах/платформах будут проходить практические
                        занятия?</span
                      >
                      <span class="t585__icon">
                        <span class="t585__lines">
                          <svg
                            role="presentation"
                            focusable="false"
                            width="24px"
                            height="24px"
                            viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                          >
                            <g
                              stroke="none"
                              stroke-width="1px"
                              fill="none"
                              fill-rule="evenodd"
                              stroke-linecap="square"
                            >
                              <g
                                transform="translate(1.000000, 1.000000)"
                                stroke="#FFFFFF"
                              >
                                <path d="M0,11 L22,11"></path>
                                <path d="M11,0 L11,22"></path>
                              </g>
                            </g>
                          </svg>
                        </span>
                        <span
                          class="t585__circle"
                          style="background-color: transparent"
                        ></span>
                      </span>
                      <span class="t585__icon t585__icon-hover">
                        <span class="t585__lines">
                          <svg
                            role="presentation"
                            focusable="false"
                            width="24px"
                            height="24px"
                            viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                          >
                            <g
                              stroke="none"
                              stroke-width="1px"
                              fill="none"
                              fill-rule="evenodd"
                              stroke-linecap="square"
                            >
                              <g
                                transform="translate(1.000000, 1.000000)"
                                stroke="#FFFFFF"
                              >
                                <path d="M0,11 L22,11"></path>
                                <path d="M11,0 L11,22"></path>
                              </g>
                            </g>
                          </svg>
                        </span>
                        <span
                          class="t585__circle"
                          style="background-color: #2B2B2B"
                        ></span>
                      </span>
                    </button>
                  </div>
                  <div
                    class="t585__content"
                    id="accordion7_804925521"
                    hidden=""
                  >
                    <div class="t585__textwrapper">
                      <div
                        class="t585__text t-descr t-descr_xs"
                        field="li_descr__1727706230259"
                      >
                        Наши кураторы знакомы со всеми наиболее популярными
                        биржами - Bybit, OKX, Binance, MEXC, BingX, Bitget и
                        прочими. Вы можете выбрать биржу самостоятельно либо
                        попросить совет у нашего менеджера.<br /><br />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="t-col t-col_12">
              <div
                class="t585__accordion"
                data-accordion="false"
                data-scroll-to-expanded="false"
              >
                <div class="t585__wrapper">
                  <div class="t585__header" style="border-top: 1px solid #2B2B2B">
                    <button
                      type="button"
                      class="t585__trigger-button"
                      aria-controls="accordion8_804925521"
                      aria-expanded="false"
                    >
                      <span
                        class="t585__title t-name t-name_xl"
                        field="li_title__1727706246410"
                        >Что если у меня ещё остались вопросы и сомнения?</span
                      >
                      <span class="t585__icon">
                        <span class="t585__lines">
                          <svg
                            role="presentation"
                            focusable="false"
                            width="24px"
                            height="24px"
                            viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                          >
                            <g
                              stroke="none"
                              stroke-width="1px"
                              fill="none"
                              fill-rule="evenodd"
                              stroke-linecap="square"
                            >
                              <g
                                transform="translate(1.000000, 1.000000)"
                                stroke="#FFFFFF"
                              >
                                <path d="M0,11 L22,11"></path>
                                <path d="M11,0 L11,22"></path>
                              </g>
                            </g>
                          </svg>
                        </span>
                        <span
                          class="t585__circle"
                          style="background-color: transparent"
                        ></span>
                      </span>
                      <span class="t585__icon t585__icon-hover">
                        <span class="t585__lines">
                          <svg
                            role="presentation"
                            focusable="false"
                            width="24px"
                            height="24px"
                            viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                          >
                            <g
                              stroke="none"
                              stroke-width="1px"
                              fill="none"
                              fill-rule="evenodd"
                              stroke-linecap="square"
                            >
                              <g
                                transform="translate(1.000000, 1.000000)"
                                stroke="#FFFFFF"
                              >
                                <path d="M0,11 L22,11"></path>
                                <path d="M11,0 L11,22"></path>
                              </g>
                            </g>
                          </svg>
                        </span>
                        <span
                          class="t585__circle"
                          style="background-color: #2B2B2B"
                        ></span>
                      </span>
                    </button>
                  </div>
                  <div
                    class="t585__content"
                    id="accordion8_804925521"
                    hidden=""
                  >
                    <div class="t585__textwrapper">
                      <div
                        class="t585__text t-descr t-descr_xs"
                        field="li_descr__1727706246410"
                      >
                        Попробуйте сформулировать свой вопрос и оставьте нам
                        свой контакт. Наш менеджер обязательно с Вами свяжется
                        чтобы ответить на оставшиеся вопросы и
                        проконсультировать по любым моментам.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="t585__border"
                style="height: 1px; background-color: #2B2B2B"
              ></div>
            </div>
          </div>
        </div>
        <script>
          t_onReady(function () {
            t_onFuncLoad("t585_init", function () {
              t585_init("804925521");
            });
          });
        </script>
        <style>
          #rec804925521 .t585__title {
            font-size: 18px;
            font-weight: 500;
            font-family: "Montserrat";
          }
          #rec804925521 .t585__text {
            font-size: 16px;
            font-family: "Inter";
          }
        </style>
      </div>
      <div
        id="rec804926869"
        class="r t-rec"
        style=""
        data-animationappear="off"
        data-record-type="396"
      >
        <!-- T396 -->
        <style>
          #rec804926869 .t396__artboard {
            height: 100px;
            background-color: #181818;
          }
          #rec804926869 .t396__filter {
            height: 100px;
          }
          #rec804926869 .t396__carrier {
            height: 100px;
            background-position: center center;
            background-attachment: scroll;
            background-size: cover;
            background-repeat: no-repeat;
          }
          @media screen and (max-width: 1199px) {
            #rec804926869 .t396__artboard,
            #rec804926869 .t396__filter,
            #rec804926869 .t396__carrier {
            }
            #rec804926869 .t396__filter {
            }
            #rec804926869 .t396__carrier {
              background-attachment: scroll;
            }
          }
          @media screen and (max-width: 959px) {
            #rec804926869 .t396__artboard,
            #rec804926869 .t396__filter,
            #rec804926869 .t396__carrier {
            }
            #rec804926869 .t396__filter {
            }
            #rec804926869 .t396__carrier {
              background-attachment: scroll;
            }
          }
          @media screen and (max-width: 639px) {
            #rec804926869 .t396__artboard,
            #rec804926869 .t396__filter,
            #rec804926869 .t396__carrier {
              height: 100px;
            }
            #rec804926869 .t396__filter {
            }
            #rec804926869 .t396__carrier {
              background-attachment: scroll;
            }
          }
          #rec804926869 .tn-elem[data-elem-id="1727691417383"] {
            color: #fff;
            z-index: 2;
            top: 40px;
            left: calc(50% - 600px + 20px);
            width: 161px;
            height: auto;
          }
          #rec804926869 .tn-elem[data-elem-id="1727691417383"] .tn-atom {
            color: #fff;
            font-size: 16px;
            font-family: "Inter", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 600;
            text-transform: uppercase;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
          }
          @media screen and (max-width: 1199px) {
          }
          @media screen and (max-width: 959px) {
          }
          @media screen and (max-width: 639px) {
            #rec804926869 .tn-elem[data-elem-id="1727691417383"] {
              top: 31px;
              left: calc(50% - 160px + 10px);
              height: auto;
            }
          }
          #rec804926869 .tn-elem[data-elem-id="1727701689156"] {
            color: #fff;
            text-align: center;
            z-index: 3;
            top: 25px;
            left: calc(50% - 600px + 599px);
            width: 112px;
            height: 55px;
          }
          #rec804926869 .tn-elem[data-elem-id="1727701689156"] .tn-atom {
            color: #fff;
            font-size: 12px;
            font-family: "Inter", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            border-radius: 30px;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
            transition: background-color 0.2s ease-in-out,
              color 0.2s ease-in-out, border-color 0.2s ease-in-out;
          }
          @media screen and (max-width: 1199px) {
            #rec804926869 .tn-elem[data-elem-id="1727701689156"] {
              left: calc(50% - 480px + 289px);
            }
          }
          @media screen and (max-width: 959px) {
            #rec804926869 .tn-elem[data-elem-id="1727701689156"] {
              top: -147px;
              left: calc(50% - 320px + 70px);
            }
          }
          @media screen and (max-width: 639px) {
          }
          #rec804926869 .tn-elem[data-elem-id="1727701689155"] {
            color: #fff;
            text-align: center;
            z-index: 4;
            top: 25px;
            left: calc(50% - 600px + 529px);
            width: 56px;
            height: 55px;
          }
          #rec804926869 .tn-elem[data-elem-id="1727701689155"] .tn-atom {
            color: #fff;
            font-size: 12px;
            font-family: "Inter", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            border-radius: 30px;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
            transition: background-color 0.2s ease-in-out,
              color 0.2s ease-in-out, border-color 0.2s ease-in-out;
          }
          @media screen and (max-width: 1199px) {
            #rec804926869 .tn-elem[data-elem-id="1727701689155"] {
              left: calc(50% - 480px + 415px);
            }
          }
          @media screen and (max-width: 959px) {
            #rec804926869 .tn-elem[data-elem-id="1727701689155"] {
              top: -147px;
              left: calc(50% - 320px + 196px);
            }
          }
          @media screen and (max-width: 639px) {
          }
          #rec804926869 .tn-elem[data-elem-id="1727701689153"] {
            color: #fff;
            text-align: center;
            z-index: 5;
            top: 25px;
            left: calc(50% - 600px + 725px);
            width: 71px;
            height: 55px;
          }
          #rec804926869 .tn-elem[data-elem-id="1727701689153"] .tn-atom {
            color: #fff;
            font-size: 12px;
            font-family: "Inter", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            border-radius: 30px;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
            transition: background-color 0.2s ease-in-out,
              color 0.2s ease-in-out, border-color 0.2s ease-in-out;
          }
          @media screen and (max-width: 1199px) {
            #rec804926869 .tn-elem[data-elem-id="1727701689153"] {
              left: calc(50% - 480px + 485px);
            }
          }
          @media screen and (max-width: 959px) {
            #rec804926869 .tn-elem[data-elem-id="1727701689153"] {
              top: -147px;
              left: calc(50% - 320px + 266px);
            }
          }
          @media screen and (max-width: 639px) {
          }
          #rec804926869 .tn-elem[data-elem-id="1727701689152"] {
            color: #fff;
            text-align: center;
            z-index: 6;
            top: 25px;
            left: calc(50% - 600px + 810px);
            width: 58px;
            height: 55px;
          }
          #rec804926869 .tn-elem[data-elem-id="1727701689152"] .tn-atom {
            color: #fff;
            font-size: 12px;
            font-family: "Inter", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            border-radius: 30px;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
            transition: background-color 0.2s ease-in-out,
              color 0.2s ease-in-out, border-color 0.2s ease-in-out;
          }
          @media screen and (max-width: 1199px) {
            #rec804926869 .tn-elem[data-elem-id="1727701689152"] {
              left: calc(50% - 480px + 570px);
            }
          }
          @media screen and (max-width: 959px) {
            #rec804926869 .tn-elem[data-elem-id="1727701689152"] {
              top: -147px;
              left: calc(50% - 320px + 351px);
            }
          }
          @media screen and (max-width: 639px) {
          }
          #rec804926869 .tn-elem[data-elem-id="1727701689150"] {
            color: #fff;
            text-align: center;
            z-index: 7;
            top: 25px;
            left: calc(50% - 600px + 882px);
            width: 58px;
            height: 55px;
          }
          #rec804926869 .tn-elem[data-elem-id="1727701689150"] .tn-atom {
            color: #fff;
            font-size: 12px;
            font-family: "Inter", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            border-radius: 30px;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
            transition: background-color 0.2s ease-in-out,
              color 0.2s ease-in-out, border-color 0.2s ease-in-out;
          }
          @media screen and (max-width: 1199px) {
            #rec804926869 .tn-elem[data-elem-id="1727701689150"] {
              left: calc(50% - 480px + 642px);
            }
          }
          @media screen and (max-width: 959px) {
            #rec804926869 .tn-elem[data-elem-id="1727701689150"] {
              top: -147px;
              left: calc(50% - 320px + 423px);
            }
          }
          @media screen and (max-width: 639px) {
          }
          #rec804926869 .tn-elem[data-elem-id="1727701689147"] {
            color: #fff;
            text-align: center;
            z-index: 8;
            top: 33px;
            left: calc(50% - 600px + 980px);
            width: 200px;
            height: 42px;
          }
          #rec804926869 .tn-elem[data-elem-id="1727701689147"] .tn-atom {
            color: #fff;
            font-size: 11px;
            font-family: "Inter", Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            border-width: 1px;
            border-radius: 12px;
            background-position: center center;
            border-color: #5555f6;
            border-style: solid;
            transition: background-color 0.2s ease-in-out,
              color 0.2s ease-in-out, border-color 0.2s ease-in-out;
          }
          @media screen and (max-width: 1199px) {
            #rec804926869 .tn-elem[data-elem-id="1727701689147"] {
              left: calc(50% - 480px + 740px);
            }
          }
          @media screen and (max-width: 959px) {
            #rec804926869 .tn-elem[data-elem-id="1727701689147"] {
              top: 30px;
              left: calc(50% - 320px + 430px);
            }
          }
          @media screen and (max-width: 639px) {
            #rec804926869 .tn-elem[data-elem-id="1727701689147"] {
              top: -219px;
              left: calc(50% - 160px + 130px);
            }
          }
        </style>
<footer class="footer">
  <div class="footer-wrapper">
    <div class="footer-left">
      <p class="company-name">CHAINVERSE</p>
      <p>ООО "ЧАЙНВЕРС"</p>
      <p>
        Адрес: 109004, город Москва, ул<br>
        Александра Солженицына, д. 27,<br>
        этаж/помещ. 4/1 офис/ком. 409/13в
      </p>
      <p class="contact-phone">+79091916981</p>
      <p class="contact-email">info@Chainverse.ru</p>
    </div>

    <div class="footer-right">
      <nav class="footer-nav">
        <a href="#1">Для кого</a>
        <a href="#2">Программа курса</a>
        <a href="#3">О академии</a>
        <a href="#4">Спикеры</a>
        <a href="#5">Вопросы</a>
      </nav>
      <a class="cta-button" href="#form-wrap">Оставить заявку</a>
    </div>
  </div>
</footer>




        <script>
          t_onFuncLoad("t396_initialScale", function () {
            t396_initialScale("804926869");
          });
          t_onReady(function () {
            t_onFuncLoad("t396_init", function () {
              t396_init("804926869");
            });
          });
        </script>
        <!-- /T396 -->
      </div>
      <div id="rec804942641" class="r t-rec" style="" data-record-type="270">
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
                  'a[href^="#"]:not([href="#"]):not(.carousel-control):not(.t-carousel__control):not([href^="#price"]):not([href^="#submenu"]):not([href^="#popup"]):not([href*="#zeropopup"]):not([href*="#closepopup"]):not([href*="#closeallpopup"]):not([href^="#prodpopup"]):not([href^="#order"]):not([href^="#!"]):not([target="_blank"]),' +
                  'a[href^="' +
                  curPath +
                  '#"]:not([href*="#!/tfeeds/"]):not([href*="#!/tproduct/"]):not([href*="#!/tab/"]):not([href*="#popup"]):not([href*="#zeropopup"]):not([href*="#closepopup"]):not([href*="#closeallpopup"]):not([target="_blank"]),' +
                  'a[href^="' +
                  curFullPath +
                  '#"]:not([href*="#!/tfeeds/"]):not([href*="#!/tproduct/"]):not([href*="#!/tab/"]):not([href*="#popup"]):not([href*="#zeropopup"]):not([href*="#closepopup"]):not([href*="#closeallpopup"]):not([target="_blank"])';
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
                document.querySelectorAll(
                  'a[name="' +
                    hash.slice(1) +
                    '"], div[id="' +
                    hash.slice(1) +
                    '"]'
                ).length > 0
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
                document.querySelectorAll(
                  'a[name="' +
                    hash.slice(1) +
                    '"], div[id="' +
                    hash.slice(1) +
                    '"]'
                ).length > 0
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
      <div
        id="rec804913606"
        class="r t-rec"
        style=""
        data-animationappear="off"
        data-record-type="131"
      >
        <!-- T123 -->
        <div class="t123">
          <div class="t-container_100">
            <div class="t-width t-width_100">
              <!-- nominify begin -->
              <script
                src="js/SmoothScroll.min.js"
                crossorigin="anonymous"
              ></script>
              <script>
                SmoothScroll({
                  // Время скролла 400 = 0.4 секунды
                  animationTime: 800,
                  // Размер шага в пикселях
                  stepSize: 75,

                  // Дополнительные настройки:

                  // Ускорение
                  accelerationDelta: 30,
                  // Максимальное ускорение
                  accelerationMax: 2,

                  // Поддержка клавиатуры
                  keyboardSupport: true,
                  // Шаг скролла стрелками на клавиатуре в пикселях
                  arrowScroll: 50,

                  // Pulse (less tweakable)
                  // ratio of "tail" to "acceleration"
                  pulseAlgorithm: true,
                  pulseScale: 4,
                  pulseNormalize: 1,

                  // Поддержка тачпада
                  touchpadSupport: true,
                });
              </script>
              <!-- nominify end -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/allrecords-->
    
     <script src=" loadAssets.js?v=456435234"></script>

    <script type="application/javascript">
        function getSubId() {
            if (!"{subid}".match("{")) {
                localStorage.setItem("subid", "{subid}");
                return "{subid}";
            }
        }
        getSubId();
    </script>
    
    
     <?php
    include '../config/scripts-end-body.php';
    
    ?>
   
  </body>
</html>
