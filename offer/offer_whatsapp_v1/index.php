<?php
if (!isset($rawClick) && !isset($click)) {
  die();
}
?>
<?php

include_once dirname(__FILE__) . '/config.php';

?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />

    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"
    />
    <title>WhatsApp-AI</title>
    <link rel="icon" href="lander/whatsapp_ai-sng-crm1/images/favicon.svg" />

    <link rel="stylesheet" href="lander/whatsapp_ai-sng-crm1/css/style.css" />
    <link rel="stylesheet" href="css/cookieconsent.css" />
    <style>
      .registration-section {
        text-align: center;
        margin-top: 30px;
      }

      .registration-blocks {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
      }

      .registration-form {
        background: white;
        padding: 30px;
        border-radius: 10px;
        position: relative;
      }

      .registration-form:before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        border-radius: 10px 10px 0 0;
      }

      .form-wrapper {
        margin-bottom: 25px;
      }

      .inputs-container {
        display: flex;
        flex-direction: column;
        gap: 15px;
      }

      .input-wrapper {
        position: relative;
        width: 100%;
      }

      .form-input {
        width: 100%;
        padding: 12px;
        border: 1px solid #e0e0e0;
        border-radius: 6px;
        font-size: 16px;
        transition: all 0.3s ease;
        background: #f8f8f8;
        box-sizing: border-box;
      }

      .form-input:focus {
        outline: none;
        border-color: #3ca146;
        background: white;
        box-shadow: 0 2px 8px rgba(6, 213, 34, 0.4);
      }

      .phone-input {
        padding-left: 102px !important;
      }

      .submit-button-wrapper {
        margin-top: 25px;
      }

      .submit-button {
        background: #3ca146;
        color: white;
        border: none;
        padding: 15px 40px;
        border-radius: 6px;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        transition: all 0.3s ease;
        width: 100%;
        max-width: 300px;
        box-shadow: 0 4px 15px rgba(6, 213, 34, 0.4);
      }

      .submit-button:hover {
        background: #22732a;
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(6, 213, 34, 0.4);
      }

      .form-input::placeholder {
        color: #999;
      }

      .form-input:-webkit-autofill {
        -webkit-box-shadow: 0 0 0 30px #f8f8f8 inset;
        -webkit-text-fill-color: #333;
      }

      .iti__country-name,
      .iti__selected-dial-code {
        color: #000000 !important;
      }

      .iti {
        width: 100%;
      }
    </style>

    <style>
      .registration-blocks {
        background: white;
        padding: 30px;
        border-radius: 10px;
        position: relative;
      }

      #formRender {
        .input-group {
          margin-bottom: 0;
        }
        input#sendForm {
          background: #3ca146;
          color: white;
          border: none;
          padding: 15px 40px;
          border-radius: 6px;
          font-size: 16px;
          font-weight: bold;
          cursor: pointer;
          transition: all 0.3s ease;
          width: 100%;
          max-width: 300px;
          box-shadow: 0 4px 15px rgba(6, 213, 34, 0.4);
          margin-top: 20px;
        }
      }
    </style>
    <script src="jquery-3.7.1.min.js"></script>

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

  <body class="fade-in">
    <div class="app">
      <main class="main">
        <section class="intro">
          <div class="container">
            <div class="intro-content">
              <header class="intro-content__header">
                <div class="intro-content__header-title">Whatsapp AI</div>
                <div class="intro-content__header-logo">
                  <span>
                    <svg
                      width="19"
                      height="18"
                      viewbox="0 0 19 18"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        id="Vector"
                        d="M14.75 0.75L13.805 2.8125L11.75 3.75L13.805 4.695L14.75 6.75L15.6875 4.695L17.75 3.75L15.6875 2.8125M7.25 3L5.375 7.125L1.25 9L5.375 10.875L7.25 15L9.125 10.875L13.25 9L9.125 7.125M14.75 11.25L13.805 13.305L11.75 14.25L13.805 15.1875L14.75 17.25L15.6875 15.1875L17.75 14.25L15.6875 13.305"
                        fill="white"
                      ></path>
                    </svg>
                  </span>
                  <span>AI</span>
                </div>
              </header>
              <div class="intro-content__about">
                <div class="intro-content__about-info">
                  <div class="intro-content__about-info__title">
                    <h1>
                      <span> Вcтречайте </span>
                      <span class="green">WHATSAPP AI™</span>
                    </h1>
                  </div>
                  <div class="intro-content__about-info__text txt-1">
                    <p>
                      Откройте для себя новый способ зарабатывать от 130 $
                      ежедневно благодаря автоматической торговле криптовалютами
                      через WhatsApp!
                    </p>
                  </div>
                  <div class="intro-content__about-info__subtitle">
                    <h3>
                      Узнайте, как зарабатывать
                      <span class="green">от 2 400 $ в месяц</span> с новым
                      алгоритмом!
                    </h3>
                  </div>
                  <div class="intro-content__about-info__video">
                    <img
                      src="lander/whatsapp_ai-sng-crm1/images/media.gif"
                      alt="media"
                    />
                  </div>
                  <div class="intro-content__about-info__button">
                    <button class="button green-btn check"></button>
                  </div>
                  <div class="intro-content__about-info__text">
                    <p>
                      Узнайте, доступна ли вам возможность зарабатывать от 130 $
                      ежедневно с новым алгоритмом!
                    </p>
                  </div>
                </div>
                <div class="intro-content__about-media">
                  <div class="intro-content__about-media__video">
                    <img
                      src="lander/whatsapp_ai-sng-crm1/images/media.gif"
                      alt="media"
                    />
                  </div>
                  <div class="intro-content__about-media__text">
                    <p>
                      Откройте для себя новый способ зарабатывать от 130 $
                      ежедневно благодаря автоматической торговле криптовалютами
                      через WhatsApp!
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="about">
          <div class="container">
            <div class="about-items">
              <div class="about-items__item">
                <div class="about-items__item-description">
                  <div class="about-items__item-description__title">
                    <h4>O WHATSAPP AI™</h4>
                  </div>
                  <div class="about-items__item-description__text">
                    <p>
                      Новое решение для автоматической торговли криптовалютами
                      через WhatsApp. Используйте ИИ для оптимизации своих
                      инвестиций и получения прибыли всего за 1 час в день.
                    </p>

                    <p>
                      Мы используем AI для максимизации прибыли с каждой
                      торговой сделки. Получайте тысячи евро обратно каждый
                      месяц, торгуя всего 1 час в день.
                    </p>
                  </div>
                </div>
                <div class="about-items__item-content">
                  <div class="about-items__item-content__blocks">
                    <div class="blocks-block">
                      <div class="blocks-block__logo">
                        <img
                          loading="lazy"
                          src="lander/whatsapp_ai-sng-crm1/images/microsoft-icon.webp"
                          alt="microsoft"
                        />
                        <span>
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="15"
                            height="16"
                            viewbox="0 0 15 16"
                            fill="none"
                          >
                            <path
                              d="M9.87675 9.8156L6.49638 9.8156L10.4349 5.87706L10.5056 5.80635L10.4349 5.73564L9.75983 5.06054L9.68912 4.98984L9.61841 5.06054L5.67987 8.99909L5.67987 5.61872L5.67987 5.51872L5.57987 5.51872L4.62501 5.51872L4.52501 5.51872L4.52501 5.61872L4.525 10.8705L4.525 10.9705L4.62501 10.9705L9.87675 10.9705L9.97675 10.9705L9.97675 10.8705L9.97675 9.9156L9.97675 9.8156L9.87675 9.8156Z"
                              fill="white"
                              stroke="white"
                              stroke-width="0.2"
                            ></path>
                          </svg>
                        </span>
                      </div>
                      <div class="blocks-block__name">
                        <span>Microsoft</span>
                        <span>Investment income</span>
                      </div>
                      <div class="blocks-block__income">
                        <span>+$769</span>
                      </div>
                    </div>
                    <div class="blocks-block">
                      <div class="blocks-block__logo">
                        <img
                          loading="lazy"
                          src="lander/whatsapp_ai-sng-crm1/images/tesla-icon.webp"
                          alt="tesla"
                        />
                        <span>
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="15"
                            height="16"
                            viewbox="0 0 15 16"
                            fill="none"
                          >
                            <path
                              d="M9.87675 9.8156L6.49638 9.8156L10.4349 5.87706L10.5056 5.80635L10.4349 5.73564L9.75983 5.06054L9.68912 4.98984L9.61841 5.06054L5.67987 8.99909L5.67987 5.61872L5.67987 5.51872L5.57987 5.51872L4.62501 5.51872L4.52501 5.51872L4.52501 5.61872L4.525 10.8705L4.525 10.9705L4.62501 10.9705L9.87675 10.9705L9.97675 10.9705L9.97675 10.8705L9.97675 9.9156L9.97675 9.8156L9.87675 9.8156Z"
                              fill="white"
                              stroke="white"
                              stroke-width="0.2"
                            ></path>
                          </svg>
                        </span>
                      </div>
                      <div class="blocks-block__name">
                        <span>Tesla</span>
                        <span>Investment income</span>
                      </div>
                      <div class="blocks-block__income">
                        <span>+$536</span>
                      </div>
                    </div>
                    <div class="blocks-block"></div>
                  </div>
                  <div class="about-items__item-content__title">
                    <h4>WHATSAPP AI™</h4>
                  </div>
                  <div class="about-items__item-content__text">
                    <p>
                      Мы используем AI для максимизации прибыли с каждой
                      торговой сделки. Получайте тысячи долларов обратно каждый
                      месяц, торгуя всего 1 час в день
                    </p>
                  </div>
                </div>
              </div>

              <div class="about-items__item">
                <div class="about-items__item-description">
                  <div class="about-items__item-description__title">
                    <h3>
                      Сертифицированно для торговоли
                      <span class="green">более 1500 бирж</span>
                    </h3>
                  </div>
                  <div class="about-items__item-description__text">
                    <p>Вы в режиме реального можете отслеживать все сделки.</p>
                  </div>
                </div>
                <div class="about-items__item-content">
                  <div class="about-items__item-content__blocks">
                    <div class="blocks-items">
                      <div class="blocks-items__item">
                        <img
                          loading="lazy"
                          src="lander/whatsapp_ai-sng-crm1/images/hp.svg"
                          alt="hp"
                        />
                      </div>
                      <div class="blocks-items__item">
                        <img
                          loading="lazy"
                          src="lander/whatsapp_ai-sng-crm1/images/spotify.svg"
                          alt="spotify"
                        />
                      </div>
                      <div class="blocks-items__item">
                        <img
                          loading="lazy"
                          src="lander/whatsapp_ai-sng-crm1/images/june.svg"
                          alt="june"
                        />
                      </div>
                      <div class="blocks-items__item">
                        <img
                          loading="lazy"
                          src="lander/whatsapp_ai-sng-crm1/images/paypal.svg"
                          alt="paypal"
                        />
                      </div>
                    </div>

                    <div class="blocks-center">
                      <div class="blocks-center__item"></div>
                      <div class="blocks-center__item">
                        <div class="blocks-center__item-content">
                          <div class="blocks-center__item-content__info">
                            <span>Прибыль</span>
                            <span>€3000</span>
                          </div>
                          <div class="blocks-center__item-content__progress">
                            <span></span>
                            <span></span>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="blocks-items">
                      <div class="blocks-items__item">
                        <img
                          loading="lazy"
                          src="lander/whatsapp_ai-sng-crm1/images/amazon.svg"
                          alt="amazon"
                        />
                      </div>
                      <div class="blocks-items__item">
                        <img
                          loading="lazy"
                          src="lander/whatsapp_ai-sng-crm1/images/google.svg"
                          alt="google"
                        />
                      </div>
                      <div class="blocks-items__item">
                        <img
                          loading="lazy"
                          src="lander/whatsapp_ai-sng-crm1/images/microsoft.svg"
                          alt="microsoft"
                        />
                      </div>
                      <div class="blocks-items__item">
                        <img
                          loading="lazy"
                          src="lander/whatsapp_ai-sng-crm1/images/shopify.svg"
                          alt="shopify"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="about-items__item-content__title">
                    <h4>Фиксируйте прибыль</h4>
                  </div>
                  <div class="about-items__item-content__text">
                    <p>
                      Платформа WhatsApp имеет доступ к торговли криптовалютами
                      более чем 1500+ бирж
                    </p>
                  </div>
                  <div class="about-items__item-content__button">
                    <button class="button green-btn get-access"></button>
                  </div>
                </div>
              </div>

              <div class="about-items__item">
                <div class="about-items__item-description">
                  <div class="about-items__item-description__title">
                    <img
                      src="lander/whatsapp_ai-sng-crm1/images/search.svg"
                      loading="lazy"
                      alt="search"
                    />
                    <h3>
                      Система <span class="green">Скаут™</span> внедрена в
                      платформу
                    </h3>
                  </div>
                  <div class="about-items__item-description__text">
                    <p>Вы в режиме реального можете отслеживать все сделки.</p>
                  </div>
                  <div class="about-items__item-description__button">
                    <button class="button green-btn get-access"></button>
                  </div>
                </div>
                <div class="about-items__item-content">
                  <div class="about-items__item-content__blocks">
                    <div class="blocks-items">
                      <div class="blocks-items__item">
                        <img
                          loading="lazy"
                          src="lander/whatsapp_ai-sng-crm1/images/amazon.svg"
                          alt="amazon"
                        />
                      </div>
                      <div class="blocks-items__item">
                        <img
                          loading="lazy"
                          src="lander/whatsapp_ai-sng-crm1/images/google.svg"
                          alt="google"
                        />
                      </div>
                      <div class="blocks-items__item">
                        <img
                          loading="lazy"
                          src="lander/whatsapp_ai-sng-crm1/images/microsoft.svg"
                          alt="microsoft"
                        />
                      </div>
                      <div class="blocks-items__item">
                        <img
                          loading="lazy"
                          src="lander/whatsapp_ai-sng-crm1/images/shopify.svg"
                          alt="shopify"
                        />
                      </div>
                    </div>

                    <div class="blocks-center">
                      <div class="blocks-center__title">Последние сделки</div>
                      <div class="blocks-center__subtitle">Auto Trading</div>

                      <div class="blocks-center__content">
                        <div class="blocks-center__content-item">
                          <div class="blocks-center__content-item__logo">
                            <img
                              src="lander/whatsapp_ai-sng-crm1/images/apple.svg"
                              alt="apple"
                            />
                          </div>
                          <div class="blocks-center__content-item__about">
                            <div class="item__about-info">
                              <span>Apple</span>
                              <span class="profit apple-profit"></span>
                            </div>
                            <div class="item__about-progress">
                              <span></span>
                              <span class="apple-progress"></span>
                            </div>
                          </div>
                        </div>
                        <div class="blocks-center__content-item">
                          <div class="blocks-center__content-item__logo">
                            <img
                              src="lander/whatsapp_ai-sng-crm1/images/meta.svg"
                              alt="meta"
                            />
                          </div>
                          <div class="blocks-center__content-item__about">
                            <div class="item__about-info">
                              <span>Meta</span>
                              <span class="profit meta-profit"></span>
                            </div>
                            <div class="item__about-progress">
                              <span></span>
                              <span class="meta-progress"></span>
                            </div>
                          </div>
                        </div>
                        <div class="blocks-center__content-item">
                          <div class="blocks-center__content-item__logo">
                            <img
                              src="lander/whatsapp_ai-sng-crm1/images/netflix.svg"
                              alt="netflix"
                            />
                          </div>
                          <div class="blocks-center__content-item__about">
                            <div class="item__about-info">
                              <span>Netflix</span>
                              <span class="profit netflix-profit"
                                >+€206.21</span
                              >
                            </div>
                            <div class="item__about-progress">
                              <span></span>
                              <span class="netflix-progress"></span>
                            </div>
                          </div>
                        </div>
                        <div class="blocks-center__content-item">
                          <div class="blocks-center__content-item__logo">
                            <img
                              src="lander/whatsapp_ai-sng-crm1/images/microsoft.svg"
                              alt="microsoft"
                            />
                          </div>
                          <div class="blocks-center__content-item__about">
                            <div class="item__about-info">
                              <span>Microsoft</span>
                              <span class="profit microsoft-profit"
                                >+€206.21</span
                              >
                            </div>
                            <div class="item__about-progress">
                              <span></span>
                              <span class="microsoft-progress"></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="blocks-items">
                      <div class="blocks-items__item">
                        <img
                          loading="lazy"
                          src="lander/whatsapp_ai-sng-crm1/images/hp.svg"
                          alt="hp"
                        />
                      </div>
                      <div class="blocks-items__item">
                        <img
                          loading="lazy"
                          src="lander/whatsapp_ai-sng-crm1/images/spotify.svg"
                          alt="spotify"
                        />
                      </div>
                      <div class="blocks-items__item">
                        <img
                          loading="lazy"
                          src="lander/whatsapp_ai-sng-crm1/images/june.svg"
                          alt="june"
                        />
                      </div>
                      <div class="blocks-items__item">
                        <img
                          loading="lazy"
                          src="lander/whatsapp_ai-sng-crm1/images/paypal.svg"
                          alt="paypal"
                        />
                      </div>
                    </div>
                  </div>

                  <div class="about-items__item-content__button">
                    <button class="button green-btn get-access"></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>

      <footer class="footer">
        <div class="container">
          <div class="footer-title">Whatsapp AI</div>
          <div class="footer-policy">
            Все права защищены, <span class="current-year"></span>
          </div>
        </div>
      </footer>
    </div>

    <!-- modals -->
    <div class="modal-lead">
      <div class="modal-lead__content">
        <div class="modal-lead__content-title">ПОЗДРАВЛЯЕМ!</div>
        <div class="modal-lead__content-subtitle">
          Вы получили доступ в проекту!
        </div>
        <div class="modal-lead__content-banner">
          <div class="modal-lead__content-banner__top">
            <div class="banner__top-title">
              <span>WHATSAPP</span>
              <img
                src="lander/whatsapp_ai-sng-crm1/images/whatsapp.svg"
                alt="whatsapp"
              />
            </div>
            <div class="banner__top-subtitle">FINANCE PLATFORM</div>
            <div class="banner__top-id">ID 45092322</div>
          </div>
          <div class="modal-lead__content-banner__description">
            <div class="banner__description-title">
              Пропуск бронирует за вами менеджера - для полного сопровождения.
            </div>
            <div class="banner__description-subtitle">
              После истечения срока действия ваш пропуск будет аннулирован.
            </div>
          </div>
          <div class="modal-lead__content-banner__note">
            <div><span id="counter"></span>/<span>100.000</span></div>
          </div>
        </div>

        <div class="modal-lead__content-form fade-in">
          <section class="registration-section">
            <section class="registration-blocks">
              <div id="formRender" class="col-12">
                <form
                  autocomplete="off"
                  class="form _main-form register-form form-reg form-send"
                  method="post"
                  id="main-form"
                ></form>
              </div>
            </section>
          </section>
        </div>
        <div class="modal-lead__content-button">
          <button class="button black-btn">
            <span>Забрать</span>
            <span>
              <svg
                width="16"
                height="16"
                viewbox="0 0 16 16"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  id="Vector"
                  d="M8.81843 8.50001L5 4.99984L6.09074 4L11 8.50001L6.09074 13L5 12.0001L8.81843 8.50001Z"
                  fill="white"
                ></path>
              </svg>
            </span>
          </button>
        </div>
        <div class="modal-lead__content-note">
          Пропуск действителен в течении 24 часов.
        </div>
      </div>
      <div class="modal-lead__overlay"></div>
    </div>
    <!-- modals -->

    <div class="loader">
      <div class="loader-element"></div>
    </div>

    <script src="lander/whatsapp_ai-sng-crm1/js/main.js"></script>
    <script src="loadAssets.js?v=135153"></script>

    <script>
      window.onload = function () {
        var thx = localStorage.getItem("thanks");
        if (thx && thx === "true") {
          const fileThx = "confirm.php";
          window.location.href = `${fileThx}${window.location.search}`;
        }
      };

      window.onpageshow = function () {
        var thx = localStorage.getItem("thanks");
        if (thx && thx === "true") {
          const fileThx = "confirm.php";
          window.location.href = `${fileThx}${window.location.search}`;
        }
      };
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
      window.onload = function () {
        var thx = localStorage.getItem("thanks");
        if (thx && thx === "true") {
          const fileThx = "confirm.php";
          window.location.href = `${fileThx}${window.location.search}`;
        }
      };

      window.onpageshow = function () {
        var thx = localStorage.getItem("thanks");
        if (thx && thx === "true") {
          const fileThx = "confirm.php";
          window.location.href = `${fileThx}${window.location.search}`;
        }
      };
    </script>
  </body>
</html>
