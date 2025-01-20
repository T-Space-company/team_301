<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Move Wise</title>
    <link rel="stylesheet" href="./css/styles.css" />
    <link href="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <script type="module" src="./main.js"></script>
    <script src="jquery-3.6.1.min.js"></script>

    <script>
      window.bgdataLayer = window.bgdataLayer || [];

      function bge() {
          bgdataLayer.push(arguments);
      }
      bge('init', '<?= $_GET['bge'] ?>');
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
  <body>
    <header class="header">
      <div class="header__content">
        <div class="header__contact">
          <div class="header__contact--left">
            <div class="header__email">
              <img src="./img/icons/email.svg" alt="Email" />
              <a href="mailto:movewise@gmail.com">movewise@gmail.com</a>
            </div>
            <div class="header__phone">
              <img src="./img/icons/phone.svg" alt="Phone" />
              <a href="tel:+0250000000">+025 (00) 000 00 00</a>
            </div>
          </div>
          <div class="header__contact--right">
            <a href=""
              ><svg
                class="icon"
                width="10"
                height="18"
                viewBox="0 0 10 18"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M8.79325 8.99833H6.3228V18H2.95216V8.99833H0.705078V5.89776H2.95216V4.07409C2.95216 1.53362 3.63895 0 6.6195 0H9.10664V3.10391H7.55301C6.39613 3.10391 6.32611 3.54399 6.32611 4.34081V5.89443H9.12664L8.79325 8.99833Z"
                  fill="currentColor"
                />
              </svg>
            </a>
            <a href="">
              <svg
                class="icon"
                width="19"
                height="18"
                viewBox="0 0 19 18"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M5.88267 0H13.9493C15.2663 0.000882984 16.5291 0.524439 17.4603 1.45568C18.3916 2.38692 18.9151 3.6497 18.916 4.96667V13.0333C18.9142 14.35 18.3904 15.6123 17.4594 16.5433C16.5283 17.4744 15.266 17.9982 13.9493 18H5.88267C4.56597 17.9982 3.30371 17.4744 2.37266 16.5433C1.44161 15.6123 0.917779 14.35 0.916016 13.0333V4.96667C0.917779 3.64997 1.44161 2.3877 2.37266 1.45665C3.30371 0.525604 4.56597 0.00176383 5.88267 0ZM16.3313 15.4153C16.9631 14.7835 17.3184 13.9268 17.3193 13.0333V4.96667C17.3193 4.07289 16.9643 3.21571 16.3323 2.58372C15.7003 1.95172 14.8431 1.59667 13.9493 1.59667H5.88267C4.98916 1.59755 4.13252 1.95288 3.50071 2.58469C2.86891 3.2165 2.51356 4.07316 2.51267 4.96667V13.0333C2.51444 13.9266 2.87005 14.7827 3.50167 15.4143C4.13328 16.046 4.98943 16.4016 5.88267 16.4033H13.9493C14.8428 16.4024 15.6995 16.0471 16.3313 15.4153ZM14.7494 3.00667C14.4394 3.00755 14.1423 3.1311 13.9231 3.35033C13.7038 3.56956 13.5803 3.86664 13.5794 4.17667C13.5798 4.36883 13.6274 4.55795 13.7182 4.72732C13.809 4.89669 13.9401 5.04109 14.0999 5.14777C14.2597 5.25445 14.4434 5.32012 14.6346 5.33898C14.8258 5.35783 15.0188 5.3293 15.1963 5.2559C15.3739 5.1825 15.5307 5.06648 15.6528 4.91811C15.7749 4.76973 15.8586 4.59357 15.8965 4.40518C15.9343 4.21678 15.9252 4.02197 15.8699 3.83793C15.8146 3.6539 15.7149 3.48632 15.5794 3.35001C15.359 3.13031 15.0606 3.00686 14.7494 3.00667ZM9.91604 4.36003C8.99834 4.36003 8.10125 4.63216 7.3382 5.142C6.57516 5.65185 5.98043 6.37652 5.62924 7.22437C5.27805 8.07222 5.18617 9.00517 5.3652 9.90524C5.54424 10.8053 5.98614 11.6321 6.63506 12.281C7.28397 12.9299 8.11076 13.3718 9.01083 13.5509C9.9109 13.7299 10.8438 13.638 11.6917 13.2868C12.5395 12.9356 13.2642 12.3409 13.7741 11.5779C14.2839 10.8148 14.556 9.91773 14.556 9.00002C14.5552 7.76969 14.066 6.59 13.196 5.72003C12.3261 4.85005 11.1464 4.36091 9.91604 4.36003ZM9.91604 12.0267C9.31399 12.0267 8.72545 11.8481 8.2249 11.5136C7.72436 11.179 7.3343 10.7035 7.10405 10.1472C6.87381 9.59093 6.81373 8.97885 6.93142 8.38841C7.04912 7.79797 7.33931 7.2557 7.76526 6.83022C8.19122 6.40473 8.7338 6.11515 9.32437 5.9981C9.91494 5.88105 10.527 5.94179 11.083 6.17264C11.639 6.4035 12.1141 6.79409 12.4481 7.295C12.7821 7.79591 12.96 8.38463 12.9594 8.98669C12.9607 9.38719 12.8829 9.78401 12.7306 10.1544C12.5782 10.5248 12.3543 10.8615 12.0715 11.1451C11.7888 11.4288 11.4529 11.6538 11.083 11.8074C10.7131 11.961 10.3165 12.04 9.91604 12.04V12.0267Z"
                  fill="currentColor"
                />
              </svg>
            </a>
            <a href=""
              ><svg
                class="icon"
                width="19"
                height="18"
                viewBox="0 0 19 18"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M11.4546 7.56493L17.9307 0H16.4157L10.7553 6.56604L6.21039 0.00333035H0.91626L7.78863 10.0089L0.91626 18H2.52783L8.48455 11.0411L13.2626 18H18.6532L11.4546 7.56493ZM14.0384 16.7614L6.86965 6.39956L3.28367 1.20533H5.54779L7.94182 4.69478L16.216 16.7481H14.0384V16.7614Z"
                  fill="currentColor"
                />
              </svg>
            </a>
            <a href="">
              <svg
                class="icon"
                width="19"
                height="18"
                viewBox="0 0 19 18"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M13.1349 2.15784C12.1055 1.65172 10.9736 1.38901 9.82654 1.39H9.8232C8.49472 1.39014 7.19022 1.74393 6.0437 2.41503C4.89719 3.08613 3.94998 4.05035 3.2994 5.20863C2.64882 6.36691 2.31832 7.67751 2.34184 9.00578C2.36535 10.3341 2.74202 11.6321 3.43319 12.7667L3.76652 13.3333L3.54655 13.9567L2.87988 15.8833L5.02319 15.2433L5.59318 15.07L6.1132 15.3667C7.10851 15.9368 8.22159 16.2706 9.36641 16.3421C10.5112 16.4136 11.6572 16.221 12.7157 15.7791C13.7742 15.3373 14.717 14.658 15.4712 13.7937C16.2254 12.9295 16.7709 11.9034 17.0654 10.7948C17.36 9.68625 17.3957 8.52478 17.1699 7.40017C16.9441 6.27555 16.4628 5.2179 15.7631 4.30892C15.0635 3.39994 14.1642 2.66396 13.1349 2.15784ZM5.34013 1.21523C6.70008 0.419283 8.24745 -0.000165736 9.8232 5.40132e-07H9.82654C11.1864 -0.000473905 12.5282 0.311618 13.7483 0.912171C14.9684 1.51272 16.0341 2.38567 16.8632 3.4636C17.6922 4.54152 18.2625 5.79558 18.5298 7.12892C18.7972 8.46226 18.7545 9.83921 18.405 11.1534C18.0556 12.4676 17.4087 13.684 16.5145 14.7085C15.6202 15.7329 14.5025 16.5382 13.2475 17.062C11.9926 17.5858 10.634 17.8142 9.27677 17.7294C7.91953 17.6447 6.59994 17.2491 5.41988 16.5733L0.653198 18L2.24654 13.4933C1.42611 12.148 0.97871 10.6085 0.950358 9.03298C0.922007 7.45749 1.31371 5.90286 2.0852 4.52889C2.8567 3.15492 3.98018 2.01118 5.34013 1.21523ZM8.03296 11.0833C9.24629 12.1433 11.7063 13.2167 12.8829 13.1433C12.8829 13.1433 14.5863 11.8567 14.5496 11.27C14.5129 10.6833 12.6396 9.02335 12.0863 9.65001C11.8747 9.88967 11.7499 10.1235 11.6434 10.3229C11.4714 10.645 11.3473 10.8774 10.9829 10.9C10.3929 10.9367 9.75961 10.3867 9.14294 9.83335C9.13358 9.82494 9.12421 9.81654 9.11484 9.80814C8.50728 9.2631 7.89573 8.71449 7.85962 8.14001C7.83695 7.77934 8.05385 7.6251 8.35275 7.41257C8.53727 7.28136 8.75303 7.12794 8.96297 6.89001C9.51297 6.26668 7.65294 4.61335 7.05294 4.65001C6.45294 4.68668 5.38627 6.52335 5.38627 6.52335C5.4596 7.69668 6.81962 10.0233 8.03296 11.0833Z"
                  fill="currentColor"
                />
              </svg>
            </a>
            <a href="">
              <svg
                class="icon"
                width="19"
                height="16"
                viewBox="0 0 19 16"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M18.656 0.873402C18.6396 0.809075 18.607 0.750022 18.5613 0.701905C18.5156 0.653788 18.4583 0.618221 18.3949 0.598611C18.1584 0.551847 17.9137 0.568917 17.6859 0.648071C17.6859 0.648071 1.92666 6.31427 1.02534 6.94079C0.830241 7.07544 0.767056 7.15513 0.734081 7.24581C0.57745 7.69372 1.06382 7.89156 1.06382 7.89156L5.12524 9.21331C5.19294 9.22985 5.26363 9.22985 5.33133 9.21331C6.25463 8.628 14.6275 3.34103 15.1111 3.16791C15.1881 3.14592 15.2431 3.16791 15.2293 3.22561C15.0342 3.9016 7.76323 10.3702 7.76323 10.3702C7.74488 10.3931 7.72923 10.4179 7.71653 10.4444L7.33732 14.4756C7.33732 14.4756 7.17792 15.7094 8.41448 14.4756C9.28282 13.6045 10.1264 12.8763 10.5496 12.5218C11.9456 13.4836 13.4487 14.5525 14.0972 15.1103C14.2063 15.2157 14.3356 15.2979 14.4772 15.3522C14.6188 15.4065 14.77 15.4317 14.9215 15.4263C15.5371 15.4044 15.7102 14.7284 15.7102 14.7284C15.7102 14.7284 18.5817 3.16791 18.6779 1.62083C18.6779 1.46695 18.6999 1.37077 18.7027 1.26635C18.7055 1.13383 18.6898 1.00156 18.656 0.873402Z"
                  fill="currentColor"
                />
              </svg>
            </a>
          </div>
        </div>
        <div class="header__nav">
          <button class="header__burger-btn" type="button"><img src="./img/mobile/burger.svg" alt="Menu"></button>
          <div class="header__logo">
            <a href="./index.php">
              <img src="./img/icons/logo.svg" alt="Logo" />
            </a>
          </div>
          <nav class="header__nav-content">
            <ul class="header__menu">
              <li class="header__menu-item">
                <a href="#" class="header__menu-link"
                  >Права<img src="./img/icons/arrow.svg" alt="Arrow"
                /></a>
              </li>
              <li class="header__menu-item">
                <a href="#" class="header__menu-link"
                  >Визы<img src="./img/icons/arrow.svg" alt="Arrow"
                /></a>
              </li>
              <li class="header__menu-item header__menu-item--dropdown">
                <div class="header__dropdown-wrapper">
                  <a href="./services.php" class="header__menu-link" id="vnzh">
                    ВНЖ
                    <svg
                      id="vnzh-arrow"
                      width="9"
                      height="14"
                      viewBox="0 0 9 14"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M1.6238 1.5L7.54687 7L1.6238 12.5"
                        stroke="currentColor"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                    </svg>
                  </a>

                  <div class="header__dropdown">
                    <div class="header__dropdown-column">
                      <h4 class="header__dropdown-title">Европа</h4>
                      <div class="header__dropdown-list-eu">
                        <ul class="header__dropdown-list--left">
                          <li class="header__dropdown-item">
                            <img
                              src="./img/icons/flags/United Kingdom (GB).svg"
                              alt="GB"
                            />
                            <a href="#" class="header__dropdown-link"
                              >Великобритания</a
                            >
                          </li>
                          <li class="header__dropdown-item">
                            <img
                              src="./img/icons/flags/Denmark (DK).svg"
                              alt="DK"
                            />
                            <a href="#" class="header__dropdown-link">Дания</a>
                          </li>
                          <li class="header__dropdown-item">
                            <img
                              src="./img/icons/flags/Italy (IT).svg"
                              alt="IT"
                            />
                            <a href="#" class="header__dropdown-link">Италия</a>
                          </li>
                          <li class="header__dropdown-item">
                            <img
                              src="./img/icons/flags/Netherlands (NL).svg"
                              alt="NL"
                            />
                            <a href="#" class="header__dropdown-link"
                              >Нидерланды</a
                            >
                          </li>
                          <li class="header__dropdown-item">
                            <img
                              src="./img/icons/flags/Serbia (RS).svg"
                              alt="RS"
                            />
                            <a href="#" class="header__dropdown-link">Сербия</a>
                          </li>
                          <li class="header__dropdown-item">
                            <img
                              src="./img/icons/flags/Slovenia (SI).svg"
                              alt="SI"
                            />
                            <a href="#" class="header__dropdown-link"
                              >Словения</a
                            >
                          </li>
                          <li class="header__dropdown-item">
                            <img
                              src="./img/icons/flags/Finland (FI).svg"
                              alt="FI"
                            />
                            <a href="#" class="header__dropdown-link"
                              >Финляндия</a
                            >
                          </li>
                          <li class="header__dropdown-item">
                            <img
                              src="./img/icons/flags/Montenegro (ME).svg"
                              alt="ME"
                            />
                            <a href="#" class="header__dropdown-link"
                              >Черногория</a
                            >
                          </li>
                        </ul>
                        <ul ul class="header__dropdown-list--right">
                          <li class="header__dropdown-item">
                            <img
                              src="./img/icons/flags/Germany (DE).svg"
                              alt="DE"
                            />
                            <a href="#" class="header__dropdown-link"
                              >Германия</a
                            >
                          </li>
                          <li class="header__dropdown-item">
                            <img
                              src="./img/icons/flags/Spain (ES).svg"
                              alt="ES"
                            />
                            <a href="#" class="header__dropdown-link"
                              >Испания</a
                            >
                          </li>
                          <li class="header__dropdown-item">
                            <img
                              src="./img/icons/flags/Luxembourg (LU).svg"
                              alt="LU"
                            />
                            <a href="#" class="header__dropdown-link"
                              >Люксембург</a
                            >
                          </li>
                          <li class="header__dropdown-item">
                            <img
                              src="./img/icons/flags/Portugal (PT).svg"
                              alt="PT"
                            />
                            <a href="#" class="header__dropdown-link"
                              >Португалия</a
                            >
                          </li>
                          <li class="header__dropdown-item">
                            <img
                              src="./img/icons/flags/Slovakia (SK).svg"
                              alt="SK"
                            />
                            <a href="#" class="header__dropdown-link"
                              >Словакия</a
                            >
                          </li>
                          <li class="header__dropdown-item">
                            <img
                              src="./img/icons/flags/Flag_of_Turkey 1.svg"
                              alt="TR"
                            />
                            <a href="#" class="header__dropdown-link">Турция</a>
                          </li>
                          <li class="header__dropdown-item">
                            <img
                              src="./img/icons/flags/France (FR).svg"
                              alt="FR"
                            />
                            <a href="#" class="header__dropdown-link"
                              >Франция</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>

                    <div class="header__dropdown-column">
                      <h4 class="header__dropdown-title">Америка</h4>
                      <ul class="header__dropdown-list">
                        <li class="header__dropdown-item">
                          <img
                            src="./img/icons/flags/Argentina (AR).svg"
                            alt="AR"
                          />
                          <a href="#" class="header__dropdown-link"
                            >Аргентина</a
                          >
                        </li>
                        <li class="header__dropdown-item">
                          <img
                            src="./img/icons/flags/Paraguay (PY).svg"
                            alt="PY"
                          />
                          <a href="#" class="header__dropdown-link">Парагвай</a>
                        </li>
                        <li class="header__dropdown-item">
                          <img
                            src="./img/icons/flags/Canada (CA).svg"
                            alt="CA"
                          />
                          <a href="#" class="header__dropdown-link">Канада</a>
                        </li>
                        <li class="header__dropdown-item">
                          <img
                            src="./img/icons/flags/Flag_of_the_United_States 1.svg"
                            alt="USA"
                          />
                          <a href="#" class="header__dropdown-link">США</a>
                        </li>
                      </ul>
                    </div>
                    <div class="header__dropdown-column">
                      <h4 class="header__dropdown-title">Другие страны</h4>
                      <ul class="header__dropdown-list">
                        <li class="header__dropdown-item">
                          <img
                            src="./img/icons/flags/Flag_of_Bali 1.svg"
                            alt="Bali"
                          />
                          <a href="#" class="header__dropdown-link">Бали</a>
                        </li>
                        <li class="header__dropdown-item">
                          <img
                            src="./img/icons/flags/Flag_of_the_United_Arab_Emirates 1.svg"
                            alt="UAE"
                          />
                          <a href="#" class="header__dropdown-link">ОАЭ</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
              <li class="header__menu-item">
                <a href="#" class="header__menu-link"
                  >Гражданство<img src="./img/icons/arrow.svg" alt="Arrow"
                /></a>
              </li>
              <li class="header__menu-item">
                <a href="./about-us.php" class="header__menu-link">О нас</a>
              </li>
              <li class="header__menu-item">
                <a href="./contacts.php" class="header__menu-link">Контакты</a>
              </li>
              <li class="header__menu-item">
                <a href="./faq.php" class="header__menu-link">FAQ</a>
              </li>
            </ul>
          </nav>
          <button class="header__button button-form">
            <img src="./img/mobile/support.svg" alt="Support">
            <a href="#">Связаться с нами</a>
          </button>
        </div>
      </div>
    </header>
    <nav class="mobile-menu">
    <ul class="mobile-menu__list">
      <li><a href="#">Права</a></li>
      <li><a href="#">Визы</a></li>
      <li><a href="./services.php">ВНЖ</a></li>
      <li><a href="#">Гражданство</a></li>
      <li><a href="./about-us.php">О нас</a></li>
      <li><a href="./contacts.php">Контакты</a></li>
      <li><a href="./faq.php">FAQ</a></li>
    </ul>
    <div class="mobile-menu__footer">
      <button class="hero__button contact-btn button-form"><a>Связаться с нами</a></button>
    <div class="mobile-menu__contact">
            <a href=""
              ><svg
                class="icon"
                width="12"
                height="25"
                viewBox="0 0 10 18"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M8.79325 8.99833H6.3228V18H2.95216V8.99833H0.705078V5.89776H2.95216V4.07409C2.95216 1.53362 3.63895 0 6.6195 0H9.10664V3.10391H7.55301C6.39613 3.10391 6.32611 3.54399 6.32611 4.34081V5.89443H9.12664L8.79325 8.99833Z"
                  fill="currentColor"
                />
              </svg>
            </a>
            <a href="">
              <svg
                class="icon"
                width="25"
                height="25"
                viewBox="0 0 19 18"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M5.88267 0H13.9493C15.2663 0.000882984 16.5291 0.524439 17.4603 1.45568C18.3916 2.38692 18.9151 3.6497 18.916 4.96667V13.0333C18.9142 14.35 18.3904 15.6123 17.4594 16.5433C16.5283 17.4744 15.266 17.9982 13.9493 18H5.88267C4.56597 17.9982 3.30371 17.4744 2.37266 16.5433C1.44161 15.6123 0.917779 14.35 0.916016 13.0333V4.96667C0.917779 3.64997 1.44161 2.3877 2.37266 1.45665C3.30371 0.525604 4.56597 0.00176383 5.88267 0ZM16.3313 15.4153C16.9631 14.7835 17.3184 13.9268 17.3193 13.0333V4.96667C17.3193 4.07289 16.9643 3.21571 16.3323 2.58372C15.7003 1.95172 14.8431 1.59667 13.9493 1.59667H5.88267C4.98916 1.59755 4.13252 1.95288 3.50071 2.58469C2.86891 3.2165 2.51356 4.07316 2.51267 4.96667V13.0333C2.51444 13.9266 2.87005 14.7827 3.50167 15.4143C4.13328 16.046 4.98943 16.4016 5.88267 16.4033H13.9493C14.8428 16.4024 15.6995 16.0471 16.3313 15.4153ZM14.7494 3.00667C14.4394 3.00755 14.1423 3.1311 13.9231 3.35033C13.7038 3.56956 13.5803 3.86664 13.5794 4.17667C13.5798 4.36883 13.6274 4.55795 13.7182 4.72732C13.809 4.89669 13.9401 5.04109 14.0999 5.14777C14.2597 5.25445 14.4434 5.32012 14.6346 5.33898C14.8258 5.35783 15.0188 5.3293 15.1963 5.2559C15.3739 5.1825 15.5307 5.06648 15.6528 4.91811C15.7749 4.76973 15.8586 4.59357 15.8965 4.40518C15.9343 4.21678 15.9252 4.02197 15.8699 3.83793C15.8146 3.6539 15.7149 3.48632 15.5794 3.35001C15.359 3.13031 15.0606 3.00686 14.7494 3.00667ZM9.91604 4.36003C8.99834 4.36003 8.10125 4.63216 7.3382 5.142C6.57516 5.65185 5.98043 6.37652 5.62924 7.22437C5.27805 8.07222 5.18617 9.00517 5.3652 9.90524C5.54424 10.8053 5.98614 11.6321 6.63506 12.281C7.28397 12.9299 8.11076 13.3718 9.01083 13.5509C9.9109 13.7299 10.8438 13.638 11.6917 13.2868C12.5395 12.9356 13.2642 12.3409 13.7741 11.5779C14.2839 10.8148 14.556 9.91773 14.556 9.00002C14.5552 7.76969 14.066 6.59 13.196 5.72003C12.3261 4.85005 11.1464 4.36091 9.91604 4.36003ZM9.91604 12.0267C9.31399 12.0267 8.72545 11.8481 8.2249 11.5136C7.72436 11.179 7.3343 10.7035 7.10405 10.1472C6.87381 9.59093 6.81373 8.97885 6.93142 8.38841C7.04912 7.79797 7.33931 7.2557 7.76526 6.83022C8.19122 6.40473 8.7338 6.11515 9.32437 5.9981C9.91494 5.88105 10.527 5.94179 11.083 6.17264C11.639 6.4035 12.1141 6.79409 12.4481 7.295C12.7821 7.79591 12.96 8.38463 12.9594 8.98669C12.9607 9.38719 12.8829 9.78401 12.7306 10.1544C12.5782 10.5248 12.3543 10.8615 12.0715 11.1451C11.7888 11.4288 11.4529 11.6538 11.083 11.8074C10.7131 11.961 10.3165 12.04 9.91604 12.04V12.0267Z"
                  fill="currentColor"
                />
              </svg>
            </a>
            <a href=""
              ><svg
                class="icon"
                width="25"
                height="25"
                viewBox="0 0 19 18"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M11.4546 7.56493L17.9307 0H16.4157L10.7553 6.56604L6.21039 0.00333035H0.91626L7.78863 10.0089L0.91626 18H2.52783L8.48455 11.0411L13.2626 18H18.6532L11.4546 7.56493ZM14.0384 16.7614L6.86965 6.39956L3.28367 1.20533H5.54779L7.94182 4.69478L16.216 16.7481H14.0384V16.7614Z"
                  fill="currentColor"
                />
              </svg>
            </a>
            <a href="">
              <svg
                class="icon"
                width="25"
                height="25"
                viewBox="0 0 19 18"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M13.1349 2.15784C12.1055 1.65172 10.9736 1.38901 9.82654 1.39H9.8232C8.49472 1.39014 7.19022 1.74393 6.0437 2.41503C4.89719 3.08613 3.94998 4.05035 3.2994 5.20863C2.64882 6.36691 2.31832 7.67751 2.34184 9.00578C2.36535 10.3341 2.74202 11.6321 3.43319 12.7667L3.76652 13.3333L3.54655 13.9567L2.87988 15.8833L5.02319 15.2433L5.59318 15.07L6.1132 15.3667C7.10851 15.9368 8.22159 16.2706 9.36641 16.3421C10.5112 16.4136 11.6572 16.221 12.7157 15.7791C13.7742 15.3373 14.717 14.658 15.4712 13.7937C16.2254 12.9295 16.7709 11.9034 17.0654 10.7948C17.36 9.68625 17.3957 8.52478 17.1699 7.40017C16.9441 6.27555 16.4628 5.2179 15.7631 4.30892C15.0635 3.39994 14.1642 2.66396 13.1349 2.15784ZM5.34013 1.21523C6.70008 0.419283 8.24745 -0.000165736 9.8232 5.40132e-07H9.82654C11.1864 -0.000473905 12.5282 0.311618 13.7483 0.912171C14.9684 1.51272 16.0341 2.38567 16.8632 3.4636C17.6922 4.54152 18.2625 5.79558 18.5298 7.12892C18.7972 8.46226 18.7545 9.83921 18.405 11.1534C18.0556 12.4676 17.4087 13.684 16.5145 14.7085C15.6202 15.7329 14.5025 16.5382 13.2475 17.062C11.9926 17.5858 10.634 17.8142 9.27677 17.7294C7.91953 17.6447 6.59994 17.2491 5.41988 16.5733L0.653198 18L2.24654 13.4933C1.42611 12.148 0.97871 10.6085 0.950358 9.03298C0.922007 7.45749 1.31371 5.90286 2.0852 4.52889C2.8567 3.15492 3.98018 2.01118 5.34013 1.21523ZM8.03296 11.0833C9.24629 12.1433 11.7063 13.2167 12.8829 13.1433C12.8829 13.1433 14.5863 11.8567 14.5496 11.27C14.5129 10.6833 12.6396 9.02335 12.0863 9.65001C11.8747 9.88967 11.7499 10.1235 11.6434 10.3229C11.4714 10.645 11.3473 10.8774 10.9829 10.9C10.3929 10.9367 9.75961 10.3867 9.14294 9.83335C9.13358 9.82494 9.12421 9.81654 9.11484 9.80814C8.50728 9.2631 7.89573 8.71449 7.85962 8.14001C7.83695 7.77934 8.05385 7.6251 8.35275 7.41257C8.53727 7.28136 8.75303 7.12794 8.96297 6.89001C9.51297 6.26668 7.65294 4.61335 7.05294 4.65001C6.45294 4.68668 5.38627 6.52335 5.38627 6.52335C5.4596 7.69668 6.81962 10.0233 8.03296 11.0833Z"
                  fill="currentColor"
                />
              </svg>
            </a>
            <a href="">
              <svg
                class="icon"
                width="25"
                height="25"
                viewBox="0 0 19 16"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M18.656 0.873402C18.6396 0.809075 18.607 0.750022 18.5613 0.701905C18.5156 0.653788 18.4583 0.618221 18.3949 0.598611C18.1584 0.551847 17.9137 0.568917 17.6859 0.648071C17.6859 0.648071 1.92666 6.31427 1.02534 6.94079C0.830241 7.07544 0.767056 7.15513 0.734081 7.24581C0.57745 7.69372 1.06382 7.89156 1.06382 7.89156L5.12524 9.21331C5.19294 9.22985 5.26363 9.22985 5.33133 9.21331C6.25463 8.628 14.6275 3.34103 15.1111 3.16791C15.1881 3.14592 15.2431 3.16791 15.2293 3.22561C15.0342 3.9016 7.76323 10.3702 7.76323 10.3702C7.74488 10.3931 7.72923 10.4179 7.71653 10.4444L7.33732 14.4756C7.33732 14.4756 7.17792 15.7094 8.41448 14.4756C9.28282 13.6045 10.1264 12.8763 10.5496 12.5218C11.9456 13.4836 13.4487 14.5525 14.0972 15.1103C14.2063 15.2157 14.3356 15.2979 14.4772 15.3522C14.6188 15.4065 14.77 15.4317 14.9215 15.4263C15.5371 15.4044 15.7102 14.7284 15.7102 14.7284C15.7102 14.7284 18.5817 3.16791 18.6779 1.62083C18.6779 1.46695 18.6999 1.37077 18.7027 1.26635C18.7055 1.13383 18.6898 1.00156 18.656 0.873402Z"
                  fill="currentColor"
                />
              </svg>
            </a>
          </div>
    </div>
  </nav>
    <main class="main">
      <section class="hero">
        <div class="hero__content">
          <h1 class="hero__title">Лучшие места по всему миру</h1>
          <p class="hero__description">
            Работайте, путешествуйте и наслаждайтесь жизнью по всему миру — мы
            позаботимся обо всём
          </p>
          <button class="hero__button button-form" >
            <a href="#">Связаться с нами</a>
          </button>
          <div class="hero__info">
            <span class="hero__text">
              Move Wise — эксперт в эмиграции: <br />
              от мечты к реальности
            </span>
            <p class="hero__subtext">
              Мы знаем, что эмиграция — это важный шаг, полный вопросов и
              переживаний. Наша миссия — сделать этот процесс легким, прозрачным
              и максимально комфортным для вас.
            </p>
            <div class="hero__info-img">
              <img src="./img/man.png" alt="Man" />
            </div>
          </div>
        </div>
      </section>

      <section class="why-choose">
        <div class="why-choose__heading">
          <h2 class="why-choose__title">Почему выбирают Move Wise?</h2>
          <img src="./img/icons/lines.svg" alt="Lines" />
        </div>
        <div class="why-choose__items">
          <div class="why-choose__item">
            <div class="why-choose__icon">
              <svg
                class="why-choose__icon-main"
                width="66"
                height="94"
                viewBox="0 0 66 94"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <g clip-path="url(#clip0_1_3396)">
                  <path
                    d="M42.9593 56.9087V88.9687C42.9598 89.3592 42.846 89.7414 42.6319 90.068C42.4178 90.3947 42.1127 90.6515 41.7543 90.8068C41.396 90.962 40.9999 91.009 40.6152 90.9418C40.2305 90.8746 39.8738 90.6962 39.5893 90.4286L34.2193 85.3587C33.8483 85.0099 33.3584 84.8157 32.8493 84.8157C32.3401 84.8157 31.8502 85.0099 31.4792 85.3587L25.9593 90.4987C25.6737 90.7635 25.317 90.9392 24.933 91.0042C24.549 91.0692 24.1544 91.0206 23.7976 90.8645C23.4408 90.7084 23.1373 90.4515 22.9245 90.1254C22.7116 89.7993 22.5986 89.4182 22.5993 89.0287V56.9186M34.5196 3.34863L38.8996 11.1187C39.1452 11.5549 39.5454 11.8832 40.0212 12.0387C40.497 12.1942 41.0139 12.1656 41.4697 11.9586L49.5796 8.24866C49.8981 8.10378 50.2491 8.04493 50.5974 8.07812C50.9458 8.11132 51.2793 8.23532 51.5647 8.43774C51.8501 8.64017 52.0774 8.91393 52.224 9.23169C52.3705 9.54945 52.431 9.90016 52.3996 10.2487L51.3996 19.0986C51.3421 19.5965 51.4735 20.0979 51.768 20.5034C52.0624 20.909 52.4984 21.1891 52.9896 21.2886L61.7396 23.0486C62.0878 23.119 62.4109 23.281 62.6757 23.5177C62.9406 23.7544 63.1376 24.0573 63.2465 24.3954C63.3555 24.7335 63.3725 25.0945 63.2957 25.4413C63.2189 25.7881 63.0511 26.1082 62.8097 26.3687L56.8097 32.9286C56.4695 33.2979 56.2807 33.7816 56.2807 34.2837C56.2807 34.7857 56.4695 35.2694 56.8097 35.6387L62.8097 42.1986C63.0511 42.4591 63.2189 42.7792 63.2957 43.126C63.3725 43.4728 63.3555 43.8338 63.2465 44.1719C63.1376 44.5099 62.9406 44.8129 62.6757 45.0496C62.4109 45.2863 62.0878 45.4482 61.7396 45.5187L52.9896 47.2787C52.4984 47.3781 52.0624 47.6583 51.768 48.0638C51.4735 48.4694 51.3421 48.9708 51.3996 49.4686L52.3996 58.3286C52.431 58.6771 52.3705 59.0278 52.224 59.3456C52.0774 59.6633 51.8501 59.9371 51.5647 60.1395C51.2793 60.3419 50.9458 60.466 50.5974 60.4991C50.2491 60.5323 49.8981 60.4735 49.5796 60.3286L41.4697 56.6187C41.0139 56.4116 40.497 56.3831 40.0212 56.5386C39.5454 56.6941 39.1452 57.0224 38.8996 57.4586L34.5196 65.2286C34.3452 65.5364 34.0923 65.7925 33.7866 65.9706C33.4809 66.1487 33.1334 66.2426 32.7797 66.2426C32.4259 66.2426 32.0784 66.1487 31.7727 65.9706C31.467 65.7925 31.2141 65.5364 31.0397 65.2286L26.6597 57.4586C26.4141 57.0224 26.0139 56.6941 25.5381 56.5386C25.0623 56.3831 24.5454 56.4116 24.0896 56.6187L15.9796 60.3286C15.6611 60.4735 15.3102 60.5323 14.9619 60.4991C14.6135 60.466 14.28 60.3419 13.9946 60.1395C13.7092 59.9371 13.4819 59.6633 13.3353 59.3456C13.1888 59.0278 13.1283 58.6771 13.1597 58.3286L14.1597 49.4686C14.2172 48.9708 14.0858 48.4694 13.7913 48.0638C13.4969 47.6583 13.0609 47.3781 12.5697 47.2787L3.81966 45.5187C3.47152 45.4482 3.14841 45.2863 2.88356 45.0496C2.61872 44.8129 2.42169 44.5099 2.31273 44.1719C2.20378 43.8338 2.18681 43.4728 2.2636 43.126C2.34039 42.7792 2.50817 42.4591 2.74965 42.1986L8.74965 35.6387C9.08979 35.2694 9.27861 34.7857 9.27861 34.2837C9.27861 33.7816 9.08979 33.2979 8.74965 32.9286L2.74965 26.3687C2.50817 26.1082 2.34039 25.7881 2.2636 25.4413C2.18681 25.0945 2.20378 24.7335 2.31273 24.3954C2.42169 24.0573 2.61872 23.7544 2.88356 23.5177C3.14841 23.281 3.47152 23.119 3.81966 23.0486L12.5697 21.2886C13.0609 21.1891 13.4969 20.909 13.7913 20.5034C14.0858 20.0979 14.2172 19.5965 14.1597 19.0986L13.1597 10.2487C13.1283 9.90016 13.1888 9.54945 13.3353 9.23169C13.4819 8.91393 13.7092 8.64017 13.9946 8.43774C14.28 8.23532 14.6135 8.11132 14.9619 8.07812C15.3102 8.04493 15.6611 8.10378 15.9796 8.24866L24.0896 11.9586C24.5454 12.1656 25.0623 12.1942 25.5381 12.0387C26.0139 11.8832 26.4141 11.5549 26.6597 11.1187L31.0397 3.34863C31.2141 3.04084 31.467 2.78481 31.7727 2.60669C32.0784 2.42857 32.4259 2.33472 32.7797 2.33472C33.1334 2.33472 33.4809 2.42857 33.7866 2.60669C34.0923 2.78481 34.3452 3.04084 34.5196 3.34863ZM46.0597 34.3286C46.0597 41.663 40.114 47.6086 32.7797 47.6086C25.4453 47.6086 19.4997 41.663 19.4997 34.3286C19.4997 26.9943 25.4453 21.0486 32.7797 21.0486C40.114 21.0486 46.0597 26.9943 46.0597 34.3286Z"
                    stroke="currentColor"
                    stroke-width="3"
                    stroke-miterlimit="10"
                  />
                </g>
                <defs>
                  <clipPath id="clip0_1_3396">
                    <rect
                      width="65.07"
                      height="92.69"
                      fill="currentColor"
                      transform="translate(0.249512 0.328613)"
                    />
                  </clipPath>
                </defs>
              </svg>

              <svg
                class="why-choose__icon-arr"
                width="33"
                height="32"
                viewBox="0 0 33 32"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M7.40391 4.4244C11.9783 1.9582 15.0687 0.0185579 19.9798 0.882049C25.8057 1.61029 36.3253 9.26625 31.5949 17.5445C27.8685 24.0657 20.8949 30.4446 13.0755 31.0913C8.28846 31.4873 3.60762 28.3778 1.80584 24.0042C-0.915033 17.3997 1.78101 7.45588 7.40391 4.4244Z"
                  fill="currentColor"
                />
                <path
                  d="M11.2912 14.8186C12.5572 17.0785 12.8024 18.0795 13.2084 20.4786C13.5366 22.418 14.3835 22.9172 15.0883 21.5073C16.896 17.891 18.6137 12.8299 22.2295 9.48486"
                  stroke="white"
                  stroke-width="3"
                  stroke-linecap="round"
                />
              </svg>
            </div>
            <span>10 лет</span>
            <p class="why-choose__text">
              практический опыт, накопленный в ходе реальных проектов
            </p>
          </div>
          <div class="why-choose__item">
            <div class="why-choose__icon">
              <svg
                class="why-choose__icon-main"
                width="88"
                height="91"
                viewBox="0 0 88 91"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <g clip-path="url(#clip0_1_3408)">
                  <path
                    d="M83.1996 21.5333H4.36963C3.26506 21.5333 2.36963 22.4288 2.36963 23.5333V33.2833C2.36963 34.3879 3.26506 35.2833 4.36963 35.2833H83.1996C84.3042 35.2833 85.1996 34.3879 85.1996 33.2833V23.5333C85.1996 22.4288 84.3042 21.5333 83.1996 21.5333Z"
                    stroke="currentColor"
                    stroke-width="3"
                    stroke-miterlimit="10"
                  />
                  <path
                    d="M78.3092 35.2836H8.6792C7.57463 35.2836 6.6792 36.179 6.6792 37.2836V86.7636C6.6792 87.8681 7.57463 88.7636 8.6792 88.7636H78.3092C79.4138 88.7636 80.3092 87.8681 80.3092 86.7636V37.2836C80.3092 36.179 79.4138 35.2836 78.3092 35.2836Z"
                    stroke="currentColor"
                    stroke-width="3"
                    stroke-miterlimit="10"
                  />
                  <path
                    d="M27.45 41.6932C27.45 41.6932 44.11 37.1432 43.82 9.07324C40.73 -9.92676 4.03002 18.0733 42.82 25.9633"
                    stroke="currentColor"
                    stroke-width="3"
                    stroke-miterlimit="10"
                  />
                  <path
                    d="M59.8693 41.6932C59.8693 41.6932 43.2093 37.1432 43.4993 9.07324C46.5893 -9.92676 83.2793 18.0733 44.4993 25.9633"
                    stroke="currentColor"
                    stroke-width="3"
                    stroke-miterlimit="10"
                  />
                  <path
                    d="M43.7896 88.1833V21.5333"
                    stroke="currentColor"
                    stroke-width="3"
                    stroke-miterlimit="10"
                  />
                </g>
                <defs>
                  <clipPath id="clip0_1_3408">
                    <rect
                      width="86.83"
                      height="90.18"
                      fill="currentColor"
                      transform="translate(0.369629 0.583374)"
                    />
                  </clipPath>
                </defs>
              </svg>

              <svg
                class="why-choose__icon-arr"
                width="33"
                height="32"
                viewBox="0 0 33 32"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M7.40391 4.4244C11.9783 1.9582 15.0687 0.0185579 19.9798 0.882049C25.8057 1.61029 36.3253 9.26625 31.5949 17.5445C27.8685 24.0657 20.8949 30.4446 13.0755 31.0913C8.28846 31.4873 3.60762 28.3778 1.80584 24.0042C-0.915033 17.3997 1.78101 7.45588 7.40391 4.4244Z"
                  fill="currentColor"
                />
                <path
                  d="M11.2912 14.8186C12.5572 17.0785 12.8024 18.0795 13.2084 20.4786C13.5366 22.418 14.3835 22.9172 15.0883 21.5073C16.896 17.891 18.6137 12.8299 22.2295 9.48486"
                  stroke="white"
                  stroke-width="3"
                  stroke-linecap="round"
                />
              </svg>
            </div>
            <span>10 лет</span>
            <p class="why-choose__text">
              практический опыт, накопленный в ходе реальных проектов
            </p>
          </div>
          <div class="why-choose__item">
            <div class="why-choose__icon">
              <svg
                class="why-choose__icon-main"
                width="51"
                height="79"
                viewBox="0 0 51 79"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <g clip-path="url(#clip0_1_3424)">
                  <path
                    d="M43.7643 31.1184L26.6643 39.4684C26.3904 39.6026 26.0894 39.6724 25.7843 39.6724C25.4792 39.6724 25.1782 39.6026 24.9043 39.4684L7.80432 31.1184C7.46585 30.9549 7.18021 30.6992 6.98035 30.3809C6.78048 30.0625 6.67448 29.6943 6.67432 29.3184V6.00842C6.67432 5.47799 6.88494 4.96931 7.26001 4.59424C7.63508 4.21917 8.14388 4.00842 8.67432 4.00842H42.8943C43.4247 4.00842 43.9334 4.21917 44.3085 4.59424C44.6835 4.96931 44.8943 5.47799 44.8943 6.00842V29.3184C44.8941 29.6943 44.788 30.0625 44.5881 30.3809C44.3883 30.6992 44.1028 30.9549 43.7643 31.1184Z"
                    stroke="currentColor"
                    stroke-width="3"
                    stroke-miterlimit="10"
                  />
                  <path
                    d="M6.94482 23.2384H44.0348"
                    stroke="currentColor"
                    stroke-width="3"
                    stroke-miterlimit="10"
                  />
                  <path
                    d="M7.80432 48.2181L24.9043 39.8682C25.1782 39.7339 25.4792 39.6642 25.7843 39.6642C26.0894 39.6642 26.3904 39.7339 26.6643 39.8682L43.7643 48.2181C44.1012 48.3809 44.3857 48.635 44.5854 48.9514C44.7852 49.2678 44.8923 49.634 44.8943 50.0082V73.3281C44.8943 73.8586 44.6835 74.3672 44.3085 74.7423C43.9334 75.1174 43.4247 75.3281 42.8943 75.3281H8.63428C8.10384 75.3281 7.59517 75.1174 7.22009 74.7423C6.84502 74.3672 6.63428 73.8586 6.63428 73.3281V50.0082C6.63991 49.6297 6.75285 49.2605 6.95996 48.9436C7.16707 48.6267 7.45989 48.3752 7.80432 48.2181Z"
                    stroke="currentColor"
                    stroke-width="3"
                    stroke-miterlimit="10"
                  />
                  <path
                    d="M44.6245 67.6783L25.7845 60.8683L7.16455 67.8183"
                    stroke="currentColor"
                    stroke-width="3"
                    stroke-miterlimit="10"
                  />
                  <path
                    d="M48.7847 0.928345H2.78467C1.6801 0.928345 0.784668 1.82378 0.784668 2.92834C0.784668 4.03291 1.6801 4.92834 2.78467 4.92834H48.7847C49.8892 4.92834 50.7847 4.03291 50.7847 2.92834C50.7847 1.82378 49.8892 0.928345 48.7847 0.928345Z"
                    fill="currentColor"
                  />
                  <path
                    d="M48.7847 74.4183H2.78467C1.6801 74.4183 0.784668 75.3138 0.784668 76.4183C0.784668 77.5229 1.6801 78.4183 2.78467 78.4183H48.7847C49.8892 78.4183 50.7847 77.5229 50.7847 76.4183C50.7847 75.3138 49.8892 74.4183 48.7847 74.4183Z"
                    fill="currentColor"
                  />
                </g>
                <defs>
                  <clipPath id="clip0_1_3424">
                    <rect
                      width="50"
                      height="77.49"
                      fill="currentColor"
                      transform="translate(0.784668 0.928345)"
                    />
                  </clipPath>
                </defs>
              </svg>

              <svg
                class="why-choose__icon-arr"
                width="33"
                height="32"
                viewBox="0 0 33 32"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M7.40391 4.4244C11.9783 1.9582 15.0687 0.0185579 19.9798 0.882049C25.8057 1.61029 36.3253 9.26625 31.5949 17.5445C27.8685 24.0657 20.8949 30.4446 13.0755 31.0913C8.28846 31.4873 3.60762 28.3778 1.80584 24.0042C-0.915033 17.3997 1.78101 7.45588 7.40391 4.4244Z"
                  fill="currentColor"
                />
                <path
                  d="M11.2912 14.8186C12.5572 17.0785 12.8024 18.0795 13.2084 20.4786C13.5366 22.418 14.3835 22.9172 15.0883 21.5073C16.896 17.891 18.6137 12.8299 22.2295 9.48486"
                  stroke="white"
                  stroke-width="3"
                  stroke-linecap="round"
                />
              </svg>
            </div>
            <span>10 лет</span>
            <p class="why-choose__text">
              практический опыт, накопленный в ходе реальных проектов
            </p>
          </div>
          <div class="why-choose__item">
            <div class="why-choose__icon">
              <svg
                class="why-choose__icon-main"
                width="85"
                height="85"
                viewBox="0 0 85 85"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <g clip-path="url(#clip0_1_3441)">
                  <path
                    d="M42.7896 4.77332V80.5732C42.7894 81.0066 42.9302 81.4283 43.1904 81.7748C43.4507 82.1213 43.8163 82.3739 44.2325 82.4946C44.6488 82.6153 45.0929 82.5975 45.4982 82.444C45.9034 82.2904 46.2479 82.0095 46.4796 81.6433L82.6495 24.4633C82.8522 24.1432 82.9598 23.7722 82.9598 23.3933C82.9598 23.0145 82.8522 22.6433 82.6495 22.3232L70.8696 3.70325C70.6892 3.41831 70.4396 3.18372 70.1442 3.02112C69.8487 2.85852 69.5168 2.77327 69.1796 2.77332H44.7896C44.2591 2.77332 43.7504 2.98406 43.3754 3.35913C43.0003 3.7342 42.7896 4.24288 42.7896 4.77332Z"
                    stroke="currentColor"
                    stroke-width="3"
                    stroke-miterlimit="10"
                  />
                  <path
                    d="M43.8901 83.6234L61.5802 25.7434C61.7268 25.2634 61.6875 24.7459 61.4702 24.2935L51.4702 3.41345"
                    stroke="currentColor"
                    stroke-width="3"
                    stroke-miterlimit="10"
                  />
                  <path
                    d="M83.3296 23.3934H42.7896"
                    stroke="currentColor"
                    stroke-width="3"
                    stroke-miterlimit="10"
                  />
                  <path
                    d="M42.7902 4.77332V80.5732C42.7903 81.0066 42.6496 81.4283 42.3894 81.7748C42.1292 82.1213 41.7634 82.3739 41.3472 82.4946C40.931 82.6153 40.4868 82.5975 40.0815 82.444C39.6763 82.2904 39.332 82.0095 39.1002 81.6433L2.92017 24.4633C2.71748 24.1432 2.60986 23.7722 2.60986 23.3933C2.60986 23.0145 2.71748 22.6433 2.92017 22.3232L14.7002 3.70325C14.8806 3.41831 15.1302 3.18372 15.4257 3.02112C15.7211 2.85852 16.0529 2.77327 16.3901 2.77332H40.7902C41.3206 2.77332 41.8293 2.98406 42.2043 3.35913C42.5794 3.7342 42.7902 4.24288 42.7902 4.77332Z"
                    stroke="currentColor"
                    stroke-width="3"
                    stroke-miterlimit="10"
                  />
                  <path
                    d="M41.6801 83.6233L23.9902 25.7433C23.8503 25.2626 23.8893 24.7475 24.1002 24.2933L34.1002 3.41333"
                    stroke="currentColor"
                    stroke-width="3"
                    stroke-miterlimit="10"
                  />
                  <path
                    d="M2.23975 23.3933H42.7897"
                    stroke="currentColor"
                    stroke-width="3"
                    stroke-miterlimit="10"
                  />
                </g>
                <defs>
                  <clipPath id="clip0_1_3441">
                    <rect
                      width="84.35"
                      height="83.8"
                      fill="currentColor"
                      transform="translate(0.609863 0.773315)"
                    />
                  </clipPath>
                </defs>
              </svg>

              <svg
                class="why-choose__icon-arr"
                width="33"
                height="32"
                viewBox="0 0 33 32"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M7.40391 4.4244C11.9783 1.9582 15.0687 0.0185579 19.9798 0.882049C25.8057 1.61029 36.3253 9.26625 31.5949 17.5445C27.8685 24.0657 20.8949 30.4446 13.0755 31.0913C8.28846 31.4873 3.60762 28.3778 1.80584 24.0042C-0.915033 17.3997 1.78101 7.45588 7.40391 4.4244Z"
                  fill="currentColor"
                />
                <path
                  d="M11.2912 14.8186C12.5572 17.0785 12.8024 18.0795 13.2084 20.4786C13.5366 22.418 14.3835 22.9172 15.0883 21.5073C16.896 17.891 18.6137 12.8299 22.2295 9.48486"
                  stroke="white"
                  stroke-width="3"
                  stroke-linecap="round"
                />
              </svg>
            </div>
            <span>10 лет</span>
            <p class="why-choose__text">
              практический опыт, накопленный в ходе реальных проектов
            </p>
          </div>
          <div class="why-choose__item">
            <div class="why-choose__icon">
              <svg
                class="why-choose__icon-main"
                width="93"
                height="94"
                viewBox="0 0 93 94"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <g clip-path="url(#clip0_1_3458)">
                  <path
                    d="M88.7847 65.2584H4.78467C3.6801 65.2584 2.78467 66.1539 2.78467 67.2584V81.2584C2.78467 82.363 3.6801 83.2584 4.78467 83.2584H88.7847C89.8892 83.2584 90.7847 82.363 90.7847 81.2584V67.2584C90.7847 66.1539 89.8892 65.2584 88.7847 65.2584Z"
                    stroke="currentColor"
                    stroke-width="3"
                    stroke-miterlimit="10"
                  />
                  <path
                    d="M84.7847 83.2584H8.78467C7.6801 83.2584 6.78467 84.1539 6.78467 85.2584V89.2584C6.78467 90.363 7.6801 91.2584 8.78467 91.2584H84.7847C85.8892 91.2584 86.7847 90.363 86.7847 89.2584V85.2584C86.7847 84.1539 85.8892 83.2584 84.7847 83.2584Z"
                    stroke="currentColor"
                    stroke-width="3"
                    stroke-miterlimit="10"
                  />
                  <path
                    d="M58.2144 65.2686H35.3145C34.9653 65.2647 34.623 65.1695 34.322 64.9924C34.021 64.8153 33.7718 64.5626 33.5989 64.2592C33.4259 63.9558 33.3355 63.6123 33.3364 63.2631C33.3374 62.9138 33.4296 62.571 33.6043 62.2686L34.2044 61.2686C34.378 60.9677 34.6269 60.7173 34.9268 60.542C35.2266 60.3666 35.567 60.2724 35.9143 60.2686H57.6543C58.0016 60.2724 58.342 60.3666 58.6419 60.542C58.9417 60.7173 59.1906 60.9677 59.3643 61.2686L59.9644 62.2686C60.1407 62.5739 60.2332 62.9205 60.2324 63.2731C60.2316 63.6257 60.1376 63.9718 59.96 64.2764C59.7823 64.5809 59.5273 64.8332 59.2207 65.0074C58.9142 65.1817 58.567 65.2717 58.2144 65.2686Z"
                    stroke="currentColor"
                    stroke-width="3"
                    stroke-miterlimit="10"
                  />
                  <path
                    d="M56.7652 37.6886C60.3422 35.5077 63.1083 32.2173 64.6419 28.3186C66.1754 24.4199 66.3924 20.1267 65.2598 16.0933C64.1272 12.0598 61.7071 8.50716 58.3682 5.97668C55.0293 3.44621 50.9546 2.07666 46.7652 2.07666C42.5757 2.07666 38.501 3.44621 35.1621 5.97668C31.8232 8.50716 29.4031 12.0598 28.2705 16.0933C27.1379 20.1267 27.3549 24.4199 28.8885 28.3186C30.422 32.2173 33.1881 35.5077 36.7652 37.6886C37.045 37.8705 37.2747 38.1194 37.4336 38.4128C37.5926 38.7063 37.6756 39.0349 37.6751 39.3687V58.2886C37.6751 58.819 37.8859 59.3277 38.261 59.7028C38.6361 60.0778 39.1446 60.2886 39.6751 60.2886H53.7952C54.3256 60.2886 54.8342 60.0778 55.2093 59.7028C55.5843 59.3277 55.7952 58.819 55.7952 58.2886V39.3885C55.7977 39.0458 55.888 38.7096 56.0579 38.4119C56.2277 38.1142 56.4714 37.8651 56.7652 37.6886Z"
                    stroke="currentColor"
                    stroke-width="3"
                    stroke-miterlimit="10"
                  />
                </g>
                <defs>
                  <clipPath id="clip0_1_3458">
                    <rect
                      width="92"
                      height="93.17"
                      fill="currentColor"
                      transform="translate(0.784668 0.0883789)"
                    />
                  </clipPath>
                </defs>
              </svg>
              <svg
                class="why-choose__icon-arr"
                width="33"
                height="32"
                viewBox="0 0 33 32"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M7.40391 4.4244C11.9783 1.9582 15.0687 0.0185579 19.9798 0.882049C25.8057 1.61029 36.3253 9.26625 31.5949 17.5445C27.8685 24.0657 20.8949 30.4446 13.0755 31.0913C8.28846 31.4873 3.60762 28.3778 1.80584 24.0042C-0.915033 17.3997 1.78101 7.45588 7.40391 4.4244Z"
                  fill="currentColor"
                />
                <path
                  d="M11.2912 14.8186C12.5572 17.0785 12.8024 18.0795 13.2084 20.4786C13.5366 22.418 14.3835 22.9172 15.0883 21.5073C16.896 17.891 18.6137 12.8299 22.2295 9.48486"
                  stroke="white"
                  stroke-width="3"
                  stroke-linecap="round"
                />
              </svg>
            </div>
            <span>10 лет</span>
            <p class="why-choose__text">
              практический опыт, накопленный в ходе реальных проектов
            </p>
          </div>
        </div>
      </section>

      <section class="services">
        <div class="services__heading">
          <h2 class="services__title">Наши услуги</h2>
          <img src="./img/icons/stars.svg" class="services__icon" alt="Stars" />
        </div>
        <div class="services__list">
          <div class="services__item">
            <img src="./img/woman.png" alt="Права" class="services__image" />
            <div class="services__item-content">
              <div class="services__item-text">
                <h3 class="services__subtitle">Права</h3>
                <p class="services__text">Популярный выбор</p>
                <p class="services__text-descr">
                  Многие думают, что Lorem Ipsum - взятый с потолка
                  псевдо-латинский набор слов, но это не совсем так.
                </p>
              </div>
              <button class="services__button">
                <a href="#">Подробнее</a>
              </button>
            </div>
          </div>
          <div class="services__item">
            <img src="./img/woman.png" alt="Визы" class="services__image" />
            <div class="services__item-content">
              <div class="services__item-text">
                <h3 class="services__subtitle">Визы</h3>
                <p class="services__text">Популярный выбор</p>
                <p class="services__text-descr">
                  Многие думают, что Lorem Ipsum - взятый с потолка
                  псевдо-латинский набор слов, но это не совсем так.
                </p>
              </div>
              <button class="services__button">
                <a href="#">Подробнее</a>
              </button>
            </div>
          </div>
          <div class="services__item">
            <img src="./img/woman.png" alt="ВНЖ" class="services__image" />
            <div class="services__item-content">
              <div class="services__item-text">
                <h3 class="services__subtitle">ВНЖ</h3>
                <p class="services__text-descr">
                  Многие думают, что Lorem Ipsum - взятый с потолка
                  псевдо-латинский набор слов, но это не совсем так.
                </p>
              </div>
              <button class="services__button">
                <a href="#">Подробнее</a>
              </button>
            </div>
          </div>
          <div class="services__item">
            <img
              src="./img/woman.png"
              alt="Гражданство"
              class="services__image"
            />
            <div class="services__item-content">
              <div class="services__item-text">
                <h3 class="services__subtitle">Гражданство</h3>
                <p class="services__text-descr">
                  Многие думают, что Lorem Ipsum - взятый с потолка
                  псевдо-латинский набор слов, но это не совсем так.
                </p>
              </div>
              <button class="services__button">
                <a href="#">Подробнее</a>
              </button>
            </div>
          </div>
        </div>
      </section>

      <section class="team">
        <div class="team--left">
          <h2 class="team__title">Наша команда</h2>
          <p class="team__description">
            Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский
            набор слов, но это не совсем так. Его корни уходят в один фрагмент
            классической латыни 45 года н.э., то есть более двух тысячелетий
            назад. 
          </p>
          <button class="team__button button-form">Проконсультироваться</button>
          <img src="./img/map.png" alt="Map" />
        </div>
        <div class="team--right">
          <div class="team__members">
            <div class="team__members--left">
              <div class="team__member">
                <img
                  src="./img/Member.png"
                  alt="Ярослав Рудник"
                  class="team__photo"
                />
                <p class="team__name">Ярослав Рудник</p>
                <p class="team__position">
                  Консультант по миграционным вопросам
                </p>
              </div>
              <div class="team__member">
                <img
                  src="./img/Member.png"
                  alt="Ярослав Рудник"
                  class="team__photo"
                />
                <p class="team__name">Ярослав Рудник</p>
                <p class="team__position">
                  Консультант по миграционным вопросам
                </p>
              </div>
              <div class="team__member">
                <img
                  src="./img/Member.png"
                  alt="Ярослав Рудник"
                  class="team__photo"
                />
                <p class="team__name">Ярослав Рудник</p>
                <p class="team__position">
                  Консультант по миграционным вопросам
                </p>
              </div>
            </div>

            <div class="team__members--right">
              <div class="team__member">
                <img
                  src="./img/Member.png"
                  alt="Ярослав Рудник"
                  class="team__photo"
                />
                <p class="team__name">Ярослав Рудник</p>
                <p class="team__position">
                  Консультант по миграционным вопросам
                </p>
              </div>
              <div class="team__member">
                <img
                  src="./img/Member.png"
                  alt="Ярослав Рудник"
                  class="team__photo"
                />
                <p class="team__name">Ярослав Рудник</p>
                <p class="team__position">
                  Консультант по миграционным вопросам
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="testimonials splide" id="splide1">
        <div class="testimonials__heading">
          <h2 class="testimonials__title">Нас рекомендуют</h2>
          <img
            src="./img/icons/recommend.png"
            alt="Icon"
            class="testimonials__icon"
          />
          <p class="testimonials__description">
            Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский
            набор слов, но это не совсем так.
          </p>
        </div>
        <div class="splide__track">
          <div class="testimonials__list splide__list">
            
            <div class="testimonials__item splide__slide">
              <img
                src="./img/vid1.png"
                alt="Видео"
                class="testimonials__video-thumbnail"
              />
              <span class="testimonials__text">Lorem Ipsum</span>
              <p class="testimonials__subtext">
                Многие думают, что Lorem Ipsum - взятый с потолка
                псевдо-латинский набор слов, но это не совсем так.
              </p>
            </div>
            <div class="testimonials__item splide__slide">
              <img
                src="./img/vid2.png"
                alt="Видео"
                class="testimonials__video-thumbnail"
              />
              <span class="testimonials__text">Lorem Ipsum</span>
              <p class="testimonials__subtext">
                Многие думают, что Lorem Ipsum - взятый с потолка
                псевдо-латинский набор слов, но это не совсем так.
              </p>
            </div>
            <div class="testimonials__item splide__slide">
              <img
                src="./img/vid3.png"
                alt="Видео"
                class="testimonials__video-thumbnail"
              />
              <span class="testimonials__text">Lorem Ipsum</span>
              <p class="testimonials__subtext">
                Многие думают, что Lorem Ipsum - взятый с потолка
                псевдо-латинский набор слов, но это не совсем так.
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="faq">
        <div class="faq--left">
          <h2 class="faq__title">Часто задаваемые вопросы</h2>
          <p class="faq__description">
            Pellentesque Cras Adipiscing Tempus Libero Vel Nullam Mauris Tellus,
            Aliquam Ultrices Tellus Consequat Amet, Lectus Aliquam Est In Neque.
          </p>
          <form class="faq__email">
            <input
              type="email"
              class="faq__input"
              placeholder="Email Address"
            />
            <button type="submit" class="faq__button">Отправить</button>
          </form>
          <div class="header__contact--right">
            <a href=""
              ><svg
                class="icon"
                width="10"
                height="18"
                viewBox="0 0 10 18"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M8.79325 8.99833H6.3228V18H2.95216V8.99833H0.705078V5.89776H2.95216V4.07409C2.95216 1.53362 3.63895 0 6.6195 0H9.10664V3.10391H7.55301C6.39613 3.10391 6.32611 3.54399 6.32611 4.34081V5.89443H9.12664L8.79325 8.99833Z"
                  fill="currentColor"
                />
              </svg>
            </a>
            <a href="">
              <svg
                class="icon"
                width="19"
                height="18"
                viewBox="0 0 19 18"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M5.88267 0H13.9493C15.2663 0.000882984 16.5291 0.524439 17.4603 1.45568C18.3916 2.38692 18.9151 3.6497 18.916 4.96667V13.0333C18.9142 14.35 18.3904 15.6123 17.4594 16.5433C16.5283 17.4744 15.266 17.9982 13.9493 18H5.88267C4.56597 17.9982 3.30371 17.4744 2.37266 16.5433C1.44161 15.6123 0.917779 14.35 0.916016 13.0333V4.96667C0.917779 3.64997 1.44161 2.3877 2.37266 1.45665C3.30371 0.525604 4.56597 0.00176383 5.88267 0ZM16.3313 15.4153C16.9631 14.7835 17.3184 13.9268 17.3193 13.0333V4.96667C17.3193 4.07289 16.9643 3.21571 16.3323 2.58372C15.7003 1.95172 14.8431 1.59667 13.9493 1.59667H5.88267C4.98916 1.59755 4.13252 1.95288 3.50071 2.58469C2.86891 3.2165 2.51356 4.07316 2.51267 4.96667V13.0333C2.51444 13.9266 2.87005 14.7827 3.50167 15.4143C4.13328 16.046 4.98943 16.4016 5.88267 16.4033H13.9493C14.8428 16.4024 15.6995 16.0471 16.3313 15.4153ZM14.7494 3.00667C14.4394 3.00755 14.1423 3.1311 13.9231 3.35033C13.7038 3.56956 13.5803 3.86664 13.5794 4.17667C13.5798 4.36883 13.6274 4.55795 13.7182 4.72732C13.809 4.89669 13.9401 5.04109 14.0999 5.14777C14.2597 5.25445 14.4434 5.32012 14.6346 5.33898C14.8258 5.35783 15.0188 5.3293 15.1963 5.2559C15.3739 5.1825 15.5307 5.06648 15.6528 4.91811C15.7749 4.76973 15.8586 4.59357 15.8965 4.40518C15.9343 4.21678 15.9252 4.02197 15.8699 3.83793C15.8146 3.6539 15.7149 3.48632 15.5794 3.35001C15.359 3.13031 15.0606 3.00686 14.7494 3.00667ZM9.91604 4.36003C8.99834 4.36003 8.10125 4.63216 7.3382 5.142C6.57516 5.65185 5.98043 6.37652 5.62924 7.22437C5.27805 8.07222 5.18617 9.00517 5.3652 9.90524C5.54424 10.8053 5.98614 11.6321 6.63506 12.281C7.28397 12.9299 8.11076 13.3718 9.01083 13.5509C9.9109 13.7299 10.8438 13.638 11.6917 13.2868C12.5395 12.9356 13.2642 12.3409 13.7741 11.5779C14.2839 10.8148 14.556 9.91773 14.556 9.00002C14.5552 7.76969 14.066 6.59 13.196 5.72003C12.3261 4.85005 11.1464 4.36091 9.91604 4.36003ZM9.91604 12.0267C9.31399 12.0267 8.72545 11.8481 8.2249 11.5136C7.72436 11.179 7.3343 10.7035 7.10405 10.1472C6.87381 9.59093 6.81373 8.97885 6.93142 8.38841C7.04912 7.79797 7.33931 7.2557 7.76526 6.83022C8.19122 6.40473 8.7338 6.11515 9.32437 5.9981C9.91494 5.88105 10.527 5.94179 11.083 6.17264C11.639 6.4035 12.1141 6.79409 12.4481 7.295C12.7821 7.79591 12.96 8.38463 12.9594 8.98669C12.9607 9.38719 12.8829 9.78401 12.7306 10.1544C12.5782 10.5248 12.3543 10.8615 12.0715 11.1451C11.7888 11.4288 11.4529 11.6538 11.083 11.8074C10.7131 11.961 10.3165 12.04 9.91604 12.04V12.0267Z"
                  fill="currentColor"
                />
              </svg>
            </a>
            <a href=""
              ><svg
                class="icon"
                width="19"
                height="18"
                viewBox="0 0 19 18"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M11.4546 7.56493L17.9307 0H16.4157L10.7553 6.56604L6.21039 0.00333035H0.91626L7.78863 10.0089L0.91626 18H2.52783L8.48455 11.0411L13.2626 18H18.6532L11.4546 7.56493ZM14.0384 16.7614L6.86965 6.39956L3.28367 1.20533H5.54779L7.94182 4.69478L16.216 16.7481H14.0384V16.7614Z"
                  fill="currentColor"
                />
              </svg>
            </a>
            <a href="">
              <svg
                class="icon"
                width="19"
                height="18"
                viewBox="0 0 19 18"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M13.1349 2.15784C12.1055 1.65172 10.9736 1.38901 9.82654 1.39H9.8232C8.49472 1.39014 7.19022 1.74393 6.0437 2.41503C4.89719 3.08613 3.94998 4.05035 3.2994 5.20863C2.64882 6.36691 2.31832 7.67751 2.34184 9.00578C2.36535 10.3341 2.74202 11.6321 3.43319 12.7667L3.76652 13.3333L3.54655 13.9567L2.87988 15.8833L5.02319 15.2433L5.59318 15.07L6.1132 15.3667C7.10851 15.9368 8.22159 16.2706 9.36641 16.3421C10.5112 16.4136 11.6572 16.221 12.7157 15.7791C13.7742 15.3373 14.717 14.658 15.4712 13.7937C16.2254 12.9295 16.7709 11.9034 17.0654 10.7948C17.36 9.68625 17.3957 8.52478 17.1699 7.40017C16.9441 6.27555 16.4628 5.2179 15.7631 4.30892C15.0635 3.39994 14.1642 2.66396 13.1349 2.15784ZM5.34013 1.21523C6.70008 0.419283 8.24745 -0.000165736 9.8232 5.40132e-07H9.82654C11.1864 -0.000473905 12.5282 0.311618 13.7483 0.912171C14.9684 1.51272 16.0341 2.38567 16.8632 3.4636C17.6922 4.54152 18.2625 5.79558 18.5298 7.12892C18.7972 8.46226 18.7545 9.83921 18.405 11.1534C18.0556 12.4676 17.4087 13.684 16.5145 14.7085C15.6202 15.7329 14.5025 16.5382 13.2475 17.062C11.9926 17.5858 10.634 17.8142 9.27677 17.7294C7.91953 17.6447 6.59994 17.2491 5.41988 16.5733L0.653198 18L2.24654 13.4933C1.42611 12.148 0.97871 10.6085 0.950358 9.03298C0.922007 7.45749 1.31371 5.90286 2.0852 4.52889C2.8567 3.15492 3.98018 2.01118 5.34013 1.21523ZM8.03296 11.0833C9.24629 12.1433 11.7063 13.2167 12.8829 13.1433C12.8829 13.1433 14.5863 11.8567 14.5496 11.27C14.5129 10.6833 12.6396 9.02335 12.0863 9.65001C11.8747 9.88967 11.7499 10.1235 11.6434 10.3229C11.4714 10.645 11.3473 10.8774 10.9829 10.9C10.3929 10.9367 9.75961 10.3867 9.14294 9.83335C9.13358 9.82494 9.12421 9.81654 9.11484 9.80814C8.50728 9.2631 7.89573 8.71449 7.85962 8.14001C7.83695 7.77934 8.05385 7.6251 8.35275 7.41257C8.53727 7.28136 8.75303 7.12794 8.96297 6.89001C9.51297 6.26668 7.65294 4.61335 7.05294 4.65001C6.45294 4.68668 5.38627 6.52335 5.38627 6.52335C5.4596 7.69668 6.81962 10.0233 8.03296 11.0833Z"
                  fill="currentColor"
                />
              </svg>
            </a>
            <a href="">
              <svg
                class="icon"
                width="19"
                height="16"
                viewBox="0 0 19 16"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M18.656 0.873402C18.6396 0.809075 18.607 0.750022 18.5613 0.701905C18.5156 0.653788 18.4583 0.618221 18.3949 0.598611C18.1584 0.551847 17.9137 0.568917 17.6859 0.648071C17.6859 0.648071 1.92666 6.31427 1.02534 6.94079C0.830241 7.07544 0.767056 7.15513 0.734081 7.24581C0.57745 7.69372 1.06382 7.89156 1.06382 7.89156L5.12524 9.21331C5.19294 9.22985 5.26363 9.22985 5.33133 9.21331C6.25463 8.628 14.6275 3.34103 15.1111 3.16791C15.1881 3.14592 15.2431 3.16791 15.2293 3.22561C15.0342 3.9016 7.76323 10.3702 7.76323 10.3702C7.74488 10.3931 7.72923 10.4179 7.71653 10.4444L7.33732 14.4756C7.33732 14.4756 7.17792 15.7094 8.41448 14.4756C9.28282 13.6045 10.1264 12.8763 10.5496 12.5218C11.9456 13.4836 13.4487 14.5525 14.0972 15.1103C14.2063 15.2157 14.3356 15.2979 14.4772 15.3522C14.6188 15.4065 14.77 15.4317 14.9215 15.4263C15.5371 15.4044 15.7102 14.7284 15.7102 14.7284C15.7102 14.7284 18.5817 3.16791 18.6779 1.62083C18.6779 1.46695 18.6999 1.37077 18.7027 1.26635C18.7055 1.13383 18.6898 1.00156 18.656 0.873402Z"
                  fill="currentColor"
                />
              </svg>
            </a>
          </div>
          <img src="./img/compass.png" alt="Compass" class="faq__img" />
        </div>
        <div class="faq--right">
          <ul class="faq__questions">
            <li class="faq__question">
              <details class="faq__details">
                <summary class="faq__summary">
                  How Soon Will My Order Ship?
                </summary>
                <p class="faq__content">
                  Elementum ullamcorper felis nulla scelerisque. Nunc enim nunc
                  mattis leo massa.
                </p>
              </details>
            </li>
            <li class="faq__question">
              <details class="faq__details" open>
                <summary class="faq__summary">
                  Is There Any Warranty Exclusions?
                </summary>
                <p class="faq__content">
                  Elementum ullamcorper felis nulla scelerisque. Nunc enim nunc
                  mattis leo massa.
                </p>
              </details>
            </li>
            <li class="faq__question">
              <details class="faq__details">
                <summary class="faq__summary">
                  Are There Any Return Exclusions?
                </summary>
                <p class="faq__content">
                  Elementum ullamcorper felis nulla scelerisque. Nunc enim nunc
                  mattis leo massa.
                </p>
              </details>
            </li>
            <li class="faq__question">
              <details class="faq__details">
                <summary class="faq__summary">
                  How Soon Will My Order Ship?
                </summary>
                <p class="faq__content">
                  Elementum ullamcorper felis nulla scelerisque. Nunc enim nunc
                  mattis leo massa.
                </p>
              </details>
            </li>
            <li class="faq__question">
              <details class="faq__details">
                <summary class="faq__summary">
                  How Can I Track My Orders & Payment?
                </summary>
                <p class="faq__content">
                  Elementum ullamcorper felis nulla scelerisque. Nunc enim nunc
                  mattis leo massa.
                </p>
              </details>
            </li>
          </ul>
          <form class="faq__email--bottom">
            <input
              type="email"
              class="faq__input"
              placeholder="Email Address"
            />
            <button type="submit" class="faq__button">Отправить</button>
          </form>
        </div>
      </section>

      <div class="bg-container">
        <section class="cases splide" id="splide2">
          <h2 class="cases__title">Наши кейсы</h2>
          <div class="splide__track">
            <div class="cases__list splide__list">
              <div class="cases__item splide__slide">
                <p class="cases__name">Brian Clark</p>
                <p class="cases__role">CEO & Founder</p>
                <p class="cases__description">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Nullam.
                </p>
                <div class="cases__icons">
                  <img src="./img/icons/facebook.svg" alt="Facebook" />
                  <img src="./img/icons/x.svg" alt="Twitter" />
                  <img src="./img/icons/tg.svg" alt="Telegram" />
                </div>
                <button class="cases__button">Подробнее</button>
              </div>
              <div class="cases__item splide__slide">
                <p class="cases__name">Brian Clark</p>
                <p class="cases__role">CEO & Founder</p>
                <p class="cases__description">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Nullam.
                </p>
                <div class="cases__icons">
                  <img src="./img/icons/facebook.svg" alt="Facebook" />
                  <img src="./img/icons/x.svg" alt="Twitter" />
                  <img src="./img/icons/tg.svg" alt="Telegram" />
                </div>
                <button class="cases__button">Подробнее</button>
              </div>
              <div class="cases__item splide__slide">
                <p class="cases__name">Brian Clark</p>
                <p class="cases__role">CEO & Founder</p>
                <p class="cases__description">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Nullam.
                </p>
                <div class="cases__icons">
                  <img src="./img/icons/facebook.svg" alt="Facebook" />
                  <img src="./img/icons/x.svg" alt="Twitter" />
                  <img src="./img/icons/tg.svg" alt="Telegram" />
                </div>
                <button class="cases__button">Подробнее</button>
              </div>
            </div>
        </section>

        <section class="contact">
          <div class="contact__wrapper">
            <h2 class="contact__title">Давайте Обсудим Детали</h2>
            <p class="contact__description">
              Lorem ipsum dolor sit amet consectetur eget malesuada sapien.
              Fusce egestas risus purus suspendisse turpis volutpat ornare.
            </p>
            <img src="./img/mobile/form.png" alt="Our team" class="contact__image">
            <form
              class="contact__form form _main-form contact-form freg thin rounded"
              id="main-form"
              method="post"
            ></form>
          </div>
        </section>
      </div>
    </main>

    <footer class="footer">
      <div class="footer__wrapper">
        <div class="footer__top">
          <div class="footer__logo">
            <img src="./img/icons/logo-white.svg" alt="Logo" />
            <ul class="footer__logo-list">
              <li><a href="">Terms</a></li>
              <li><a href="">Privacy</a></li>
              <li><a href="">Cookies</a></li>
            </ul>
          </div>
          <div class="footer__top-wrapper">
            <div class="footer__top-subscribe">
              <h4 class="footer__subscribe-title">Subscribe</h4>
              <form class="footer__subscribe-form">
                <input
                  type="email"
                  class="footer__subscribe-input"
                  placeholder="Email address"
                />
                <button type="submit" class="footer__subscribe-button">→</button>
              </form>
              <p class="footer__subscribe-text">
                “Lorem ipsum dolor sit amet consectetur eget maecenas sapien fusce
                egestas risus purus suspendisse turpis volutpat onare.”
              </p>
            </div>
            <div class="footer__subscribe-bottom">
          <div class="header__contact--left">
            <div class="header__email--footer">
              <img src="./img/icons/email-white.svg" alt="Email" />
              <a href="mailto:movewise@gmail.com">movewise@gmail.com</a>
            </div>
            <div class="header__phone--footer">
              <img src="./img/icons/phone-white.svg" alt="Phone" />
              <a href="tel:+0250000000">+025 (00) 000 00 00</a>
            </div>
          </div>
          <div class="header__contact--right">
            <a href=""
              ><svg
                class="icon"
                width="10"
                height="18"
                viewBox="0 0 10 18"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M8.79325 8.99833H6.3228V18H2.95216V8.99833H0.705078V5.89776H2.95216V4.07409C2.95216 1.53362 3.63895 0 6.6195 0H9.10664V3.10391H7.55301C6.39613 3.10391 6.32611 3.54399 6.32611 4.34081V5.89443H9.12664L8.79325 8.99833Z"
                  fill="currentColor"
                />
              </svg>
            </a>
            <a href="">
              <svg
                class="icon"
                width="19"
                height="18"
                viewBox="0 0 19 18"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M5.88267 0H13.9493C15.2663 0.000882984 16.5291 0.524439 17.4603 1.45568C18.3916 2.38692 18.9151 3.6497 18.916 4.96667V13.0333C18.9142 14.35 18.3904 15.6123 17.4594 16.5433C16.5283 17.4744 15.266 17.9982 13.9493 18H5.88267C4.56597 17.9982 3.30371 17.4744 2.37266 16.5433C1.44161 15.6123 0.917779 14.35 0.916016 13.0333V4.96667C0.917779 3.64997 1.44161 2.3877 2.37266 1.45665C3.30371 0.525604 4.56597 0.00176383 5.88267 0ZM16.3313 15.4153C16.9631 14.7835 17.3184 13.9268 17.3193 13.0333V4.96667C17.3193 4.07289 16.9643 3.21571 16.3323 2.58372C15.7003 1.95172 14.8431 1.59667 13.9493 1.59667H5.88267C4.98916 1.59755 4.13252 1.95288 3.50071 2.58469C2.86891 3.2165 2.51356 4.07316 2.51267 4.96667V13.0333C2.51444 13.9266 2.87005 14.7827 3.50167 15.4143C4.13328 16.046 4.98943 16.4016 5.88267 16.4033H13.9493C14.8428 16.4024 15.6995 16.0471 16.3313 15.4153ZM14.7494 3.00667C14.4394 3.00755 14.1423 3.1311 13.9231 3.35033C13.7038 3.56956 13.5803 3.86664 13.5794 4.17667C13.5798 4.36883 13.6274 4.55795 13.7182 4.72732C13.809 4.89669 13.9401 5.04109 14.0999 5.14777C14.2597 5.25445 14.4434 5.32012 14.6346 5.33898C14.8258 5.35783 15.0188 5.3293 15.1963 5.2559C15.3739 5.1825 15.5307 5.06648 15.6528 4.91811C15.7749 4.76973 15.8586 4.59357 15.8965 4.40518C15.9343 4.21678 15.9252 4.02197 15.8699 3.83793C15.8146 3.6539 15.7149 3.48632 15.5794 3.35001C15.359 3.13031 15.0606 3.00686 14.7494 3.00667ZM9.91604 4.36003C8.99834 4.36003 8.10125 4.63216 7.3382 5.142C6.57516 5.65185 5.98043 6.37652 5.62924 7.22437C5.27805 8.07222 5.18617 9.00517 5.3652 9.90524C5.54424 10.8053 5.98614 11.6321 6.63506 12.281C7.28397 12.9299 8.11076 13.3718 9.01083 13.5509C9.9109 13.7299 10.8438 13.638 11.6917 13.2868C12.5395 12.9356 13.2642 12.3409 13.7741 11.5779C14.2839 10.8148 14.556 9.91773 14.556 9.00002C14.5552 7.76969 14.066 6.59 13.196 5.72003C12.3261 4.85005 11.1464 4.36091 9.91604 4.36003ZM9.91604 12.0267C9.31399 12.0267 8.72545 11.8481 8.2249 11.5136C7.72436 11.179 7.3343 10.7035 7.10405 10.1472C6.87381 9.59093 6.81373 8.97885 6.93142 8.38841C7.04912 7.79797 7.33931 7.2557 7.76526 6.83022C8.19122 6.40473 8.7338 6.11515 9.32437 5.9981C9.91494 5.88105 10.527 5.94179 11.083 6.17264C11.639 6.4035 12.1141 6.79409 12.4481 7.295C12.7821 7.79591 12.96 8.38463 12.9594 8.98669C12.9607 9.38719 12.8829 9.78401 12.7306 10.1544C12.5782 10.5248 12.3543 10.8615 12.0715 11.1451C11.7888 11.4288 11.4529 11.6538 11.083 11.8074C10.7131 11.961 10.3165 12.04 9.91604 12.04V12.0267Z"
                  fill="currentColor"
                />
              </svg>
            </a>
            <a href=""
              ><svg
                class="icon"
                width="19"
                height="18"
                viewBox="0 0 19 18"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M11.4546 7.56493L17.9307 0H16.4157L10.7553 6.56604L6.21039 0.00333035H0.91626L7.78863 10.0089L0.91626 18H2.52783L8.48455 11.0411L13.2626 18H18.6532L11.4546 7.56493ZM14.0384 16.7614L6.86965 6.39956L3.28367 1.20533H5.54779L7.94182 4.69478L16.216 16.7481H14.0384V16.7614Z"
                  fill="currentColor"
                />
              </svg>
            </a>
            <a href="">
              <svg
                class="icon"
                width="19"
                height="18"
                viewBox="0 0 19 18"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M13.1349 2.15784C12.1055 1.65172 10.9736 1.38901 9.82654 1.39H9.8232C8.49472 1.39014 7.19022 1.74393 6.0437 2.41503C4.89719 3.08613 3.94998 4.05035 3.2994 5.20863C2.64882 6.36691 2.31832 7.67751 2.34184 9.00578C2.36535 10.3341 2.74202 11.6321 3.43319 12.7667L3.76652 13.3333L3.54655 13.9567L2.87988 15.8833L5.02319 15.2433L5.59318 15.07L6.1132 15.3667C7.10851 15.9368 8.22159 16.2706 9.36641 16.3421C10.5112 16.4136 11.6572 16.221 12.7157 15.7791C13.7742 15.3373 14.717 14.658 15.4712 13.7937C16.2254 12.9295 16.7709 11.9034 17.0654 10.7948C17.36 9.68625 17.3957 8.52478 17.1699 7.40017C16.9441 6.27555 16.4628 5.2179 15.7631 4.30892C15.0635 3.39994 14.1642 2.66396 13.1349 2.15784ZM5.34013 1.21523C6.70008 0.419283 8.24745 -0.000165736 9.8232 5.40132e-07H9.82654C11.1864 -0.000473905 12.5282 0.311618 13.7483 0.912171C14.9684 1.51272 16.0341 2.38567 16.8632 3.4636C17.6922 4.54152 18.2625 5.79558 18.5298 7.12892C18.7972 8.46226 18.7545 9.83921 18.405 11.1534C18.0556 12.4676 17.4087 13.684 16.5145 14.7085C15.6202 15.7329 14.5025 16.5382 13.2475 17.062C11.9926 17.5858 10.634 17.8142 9.27677 17.7294C7.91953 17.6447 6.59994 17.2491 5.41988 16.5733L0.653198 18L2.24654 13.4933C1.42611 12.148 0.97871 10.6085 0.950358 9.03298C0.922007 7.45749 1.31371 5.90286 2.0852 4.52889C2.8567 3.15492 3.98018 2.01118 5.34013 1.21523ZM8.03296 11.0833C9.24629 12.1433 11.7063 13.2167 12.8829 13.1433C12.8829 13.1433 14.5863 11.8567 14.5496 11.27C14.5129 10.6833 12.6396 9.02335 12.0863 9.65001C11.8747 9.88967 11.7499 10.1235 11.6434 10.3229C11.4714 10.645 11.3473 10.8774 10.9829 10.9C10.3929 10.9367 9.75961 10.3867 9.14294 9.83335C9.13358 9.82494 9.12421 9.81654 9.11484 9.80814C8.50728 9.2631 7.89573 8.71449 7.85962 8.14001C7.83695 7.77934 8.05385 7.6251 8.35275 7.41257C8.53727 7.28136 8.75303 7.12794 8.96297 6.89001C9.51297 6.26668 7.65294 4.61335 7.05294 4.65001C6.45294 4.68668 5.38627 6.52335 5.38627 6.52335C5.4596 7.69668 6.81962 10.0233 8.03296 11.0833Z"
                  fill="currentColor"
                />
              </svg>
            </a>
            <a href="">
              <svg
                class="icon"
                width="19"
                height="16"
                viewBox="0 0 19 16"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M18.656 0.873402C18.6396 0.809075 18.607 0.750022 18.5613 0.701905C18.5156 0.653788 18.4583 0.618221 18.3949 0.598611C18.1584 0.551847 17.9137 0.568917 17.6859 0.648071C17.6859 0.648071 1.92666 6.31427 1.02534 6.94079C0.830241 7.07544 0.767056 7.15513 0.734081 7.24581C0.57745 7.69372 1.06382 7.89156 1.06382 7.89156L5.12524 9.21331C5.19294 9.22985 5.26363 9.22985 5.33133 9.21331C6.25463 8.628 14.6275 3.34103 15.1111 3.16791C15.1881 3.14592 15.2431 3.16791 15.2293 3.22561C15.0342 3.9016 7.76323 10.3702 7.76323 10.3702C7.74488 10.3931 7.72923 10.4179 7.71653 10.4444L7.33732 14.4756C7.33732 14.4756 7.17792 15.7094 8.41448 14.4756C9.28282 13.6045 10.1264 12.8763 10.5496 12.5218C11.9456 13.4836 13.4487 14.5525 14.0972 15.1103C14.2063 15.2157 14.3356 15.2979 14.4772 15.3522C14.6188 15.4065 14.77 15.4317 14.9215 15.4263C15.5371 15.4044 15.7102 14.7284 15.7102 14.7284C15.7102 14.7284 18.5817 3.16791 18.6779 1.62083C18.6779 1.46695 18.6999 1.37077 18.7027 1.26635C18.7055 1.13383 18.6898 1.00156 18.656 0.873402Z"
                  fill="currentColor"
                />
              </svg>
            </a>
          </div>
        </div>
          </div>
          <nav class="footer__nav">
            <div class="footer__nav-section">
              <h4 class="footer__nav-title">Сервисы</h4>
              <ul class="footer__nav-list">
                <li><a href="#" class="footer__nav-link">Права</a></li>
                <li><a href="#" class="footer__nav-link">Визы</a></li>
                <li><a href="#" class="footer__nav-link">ВНЖ</a></li>
                <li><a href="#" class="footer__nav-link">Гражданство</a></li>
              </ul>
            </div>
            <div class="footer__nav-section">
              <h4 class="footer__nav-title">Навигация</h4>
              <ul class="footer__nav-list">
                <li>
                  <a href="#" class="footer__nav-link"
                    >Преимущества сотрудничества с Move Visa</a
                  >
                </li>
                <li><a href="#" class="footer__nav-link">Наши услуги</a></li>
                <li><a href="#" class="footer__nav-link">Наша команда</a></li>
                <li>
                  <a href="#" class="footer__nav-link">Нас рекомендуют</a>
                </li>
                <li><a href="./our-cases.php" class="footer__nav-link">Отзывы</a></li>
                <li>
                  <a href="#" class="footer__nav-link"
                    >Часто задаваемые вопросы</a
                  >
                </li>
                <li><a href="#" class="footer__nav-link">Наши партнеры</a></li>
              </ul>
            </div>
            <div class="footer__nav-section">
              <h4 class="footer__nav-title">О компании</h4>
              <ul class="footer__nav-list">
                <li><a href="#" class="footer__nav-link">О нас</a></li>
                <li><a href="#" class="footer__nav-link">Контакты</a></li>
                <li><a href="#" class="footer__nav-link">Блог</a></li>
              </ul>
            </div>
          </nav>
          <div class="footer__subscribe">
            <h4 class="footer__subscribe-title">Subscribe</h4>
            <form class="footer__subscribe-form">
              <input
                type="email"
                class="footer__subscribe-input"
                placeholder="Email address"
              />
              <button type="submit" class="footer__subscribe-button">→</button>
            </form>
            <p class="footer__subscribe-text">
              “Lorem ipsum dolor sit amet consectetur eget maecenas sapien fusce
              egestas risus purus suspendisse turpis volutpat onare.”
            </p>
          </div>
        </div>
        <div class="footer__bottom">
          <div class="header__contact--left">
            <div class="header__email--footer">
              <img src="./img/icons/email-white.svg" alt="Email" />
              <a href="mailto:movewise@gmail.com">movewise@gmail.com</a>
            </div>
            <div class="header__phone--footer">
              <img src="./img/icons/phone-white.svg" alt="Phone" />
              <a href="tel:+0250000000">+025 (00) 000 00 00</a>
            </div>
          </div>
          <div class="header__contact--right">
            <a href=""
              ><svg
                class="icon"
                width="10"
                height="18"
                viewBox="0 0 10 18"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M8.79325 8.99833H6.3228V18H2.95216V8.99833H0.705078V5.89776H2.95216V4.07409C2.95216 1.53362 3.63895 0 6.6195 0H9.10664V3.10391H7.55301C6.39613 3.10391 6.32611 3.54399 6.32611 4.34081V5.89443H9.12664L8.79325 8.99833Z"
                  fill="currentColor"
                />
              </svg>
            </a>
            <a href="">
              <svg
                class="icon"
                width="19"
                height="18"
                viewBox="0 0 19 18"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M5.88267 0H13.9493C15.2663 0.000882984 16.5291 0.524439 17.4603 1.45568C18.3916 2.38692 18.9151 3.6497 18.916 4.96667V13.0333C18.9142 14.35 18.3904 15.6123 17.4594 16.5433C16.5283 17.4744 15.266 17.9982 13.9493 18H5.88267C4.56597 17.9982 3.30371 17.4744 2.37266 16.5433C1.44161 15.6123 0.917779 14.35 0.916016 13.0333V4.96667C0.917779 3.64997 1.44161 2.3877 2.37266 1.45665C3.30371 0.525604 4.56597 0.00176383 5.88267 0ZM16.3313 15.4153C16.9631 14.7835 17.3184 13.9268 17.3193 13.0333V4.96667C17.3193 4.07289 16.9643 3.21571 16.3323 2.58372C15.7003 1.95172 14.8431 1.59667 13.9493 1.59667H5.88267C4.98916 1.59755 4.13252 1.95288 3.50071 2.58469C2.86891 3.2165 2.51356 4.07316 2.51267 4.96667V13.0333C2.51444 13.9266 2.87005 14.7827 3.50167 15.4143C4.13328 16.046 4.98943 16.4016 5.88267 16.4033H13.9493C14.8428 16.4024 15.6995 16.0471 16.3313 15.4153ZM14.7494 3.00667C14.4394 3.00755 14.1423 3.1311 13.9231 3.35033C13.7038 3.56956 13.5803 3.86664 13.5794 4.17667C13.5798 4.36883 13.6274 4.55795 13.7182 4.72732C13.809 4.89669 13.9401 5.04109 14.0999 5.14777C14.2597 5.25445 14.4434 5.32012 14.6346 5.33898C14.8258 5.35783 15.0188 5.3293 15.1963 5.2559C15.3739 5.1825 15.5307 5.06648 15.6528 4.91811C15.7749 4.76973 15.8586 4.59357 15.8965 4.40518C15.9343 4.21678 15.9252 4.02197 15.8699 3.83793C15.8146 3.6539 15.7149 3.48632 15.5794 3.35001C15.359 3.13031 15.0606 3.00686 14.7494 3.00667ZM9.91604 4.36003C8.99834 4.36003 8.10125 4.63216 7.3382 5.142C6.57516 5.65185 5.98043 6.37652 5.62924 7.22437C5.27805 8.07222 5.18617 9.00517 5.3652 9.90524C5.54424 10.8053 5.98614 11.6321 6.63506 12.281C7.28397 12.9299 8.11076 13.3718 9.01083 13.5509C9.9109 13.7299 10.8438 13.638 11.6917 13.2868C12.5395 12.9356 13.2642 12.3409 13.7741 11.5779C14.2839 10.8148 14.556 9.91773 14.556 9.00002C14.5552 7.76969 14.066 6.59 13.196 5.72003C12.3261 4.85005 11.1464 4.36091 9.91604 4.36003ZM9.91604 12.0267C9.31399 12.0267 8.72545 11.8481 8.2249 11.5136C7.72436 11.179 7.3343 10.7035 7.10405 10.1472C6.87381 9.59093 6.81373 8.97885 6.93142 8.38841C7.04912 7.79797 7.33931 7.2557 7.76526 6.83022C8.19122 6.40473 8.7338 6.11515 9.32437 5.9981C9.91494 5.88105 10.527 5.94179 11.083 6.17264C11.639 6.4035 12.1141 6.79409 12.4481 7.295C12.7821 7.79591 12.96 8.38463 12.9594 8.98669C12.9607 9.38719 12.8829 9.78401 12.7306 10.1544C12.5782 10.5248 12.3543 10.8615 12.0715 11.1451C11.7888 11.4288 11.4529 11.6538 11.083 11.8074C10.7131 11.961 10.3165 12.04 9.91604 12.04V12.0267Z"
                  fill="currentColor"
                />
              </svg>
            </a>
            <a href=""
              ><svg
                class="icon"
                width="19"
                height="18"
                viewBox="0 0 19 18"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M11.4546 7.56493L17.9307 0H16.4157L10.7553 6.56604L6.21039 0.00333035H0.91626L7.78863 10.0089L0.91626 18H2.52783L8.48455 11.0411L13.2626 18H18.6532L11.4546 7.56493ZM14.0384 16.7614L6.86965 6.39956L3.28367 1.20533H5.54779L7.94182 4.69478L16.216 16.7481H14.0384V16.7614Z"
                  fill="currentColor"
                />
              </svg>
            </a>
            <a href="">
              <svg
                class="icon"
                width="19"
                height="18"
                viewBox="0 0 19 18"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M13.1349 2.15784C12.1055 1.65172 10.9736 1.38901 9.82654 1.39H9.8232C8.49472 1.39014 7.19022 1.74393 6.0437 2.41503C4.89719 3.08613 3.94998 4.05035 3.2994 5.20863C2.64882 6.36691 2.31832 7.67751 2.34184 9.00578C2.36535 10.3341 2.74202 11.6321 3.43319 12.7667L3.76652 13.3333L3.54655 13.9567L2.87988 15.8833L5.02319 15.2433L5.59318 15.07L6.1132 15.3667C7.10851 15.9368 8.22159 16.2706 9.36641 16.3421C10.5112 16.4136 11.6572 16.221 12.7157 15.7791C13.7742 15.3373 14.717 14.658 15.4712 13.7937C16.2254 12.9295 16.7709 11.9034 17.0654 10.7948C17.36 9.68625 17.3957 8.52478 17.1699 7.40017C16.9441 6.27555 16.4628 5.2179 15.7631 4.30892C15.0635 3.39994 14.1642 2.66396 13.1349 2.15784ZM5.34013 1.21523C6.70008 0.419283 8.24745 -0.000165736 9.8232 5.40132e-07H9.82654C11.1864 -0.000473905 12.5282 0.311618 13.7483 0.912171C14.9684 1.51272 16.0341 2.38567 16.8632 3.4636C17.6922 4.54152 18.2625 5.79558 18.5298 7.12892C18.7972 8.46226 18.7545 9.83921 18.405 11.1534C18.0556 12.4676 17.4087 13.684 16.5145 14.7085C15.6202 15.7329 14.5025 16.5382 13.2475 17.062C11.9926 17.5858 10.634 17.8142 9.27677 17.7294C7.91953 17.6447 6.59994 17.2491 5.41988 16.5733L0.653198 18L2.24654 13.4933C1.42611 12.148 0.97871 10.6085 0.950358 9.03298C0.922007 7.45749 1.31371 5.90286 2.0852 4.52889C2.8567 3.15492 3.98018 2.01118 5.34013 1.21523ZM8.03296 11.0833C9.24629 12.1433 11.7063 13.2167 12.8829 13.1433C12.8829 13.1433 14.5863 11.8567 14.5496 11.27C14.5129 10.6833 12.6396 9.02335 12.0863 9.65001C11.8747 9.88967 11.7499 10.1235 11.6434 10.3229C11.4714 10.645 11.3473 10.8774 10.9829 10.9C10.3929 10.9367 9.75961 10.3867 9.14294 9.83335C9.13358 9.82494 9.12421 9.81654 9.11484 9.80814C8.50728 9.2631 7.89573 8.71449 7.85962 8.14001C7.83695 7.77934 8.05385 7.6251 8.35275 7.41257C8.53727 7.28136 8.75303 7.12794 8.96297 6.89001C9.51297 6.26668 7.65294 4.61335 7.05294 4.65001C6.45294 4.68668 5.38627 6.52335 5.38627 6.52335C5.4596 7.69668 6.81962 10.0233 8.03296 11.0833Z"
                  fill="currentColor"
                />
              </svg>
            </a>
            <a href="">
              <svg
                class="icon"
                width="19"
                height="16"
                viewBox="0 0 19 16"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M18.656 0.873402C18.6396 0.809075 18.607 0.750022 18.5613 0.701905C18.5156 0.653788 18.4583 0.618221 18.3949 0.598611C18.1584 0.551847 17.9137 0.568917 17.6859 0.648071C17.6859 0.648071 1.92666 6.31427 1.02534 6.94079C0.830241 7.07544 0.767056 7.15513 0.734081 7.24581C0.57745 7.69372 1.06382 7.89156 1.06382 7.89156L5.12524 9.21331C5.19294 9.22985 5.26363 9.22985 5.33133 9.21331C6.25463 8.628 14.6275 3.34103 15.1111 3.16791C15.1881 3.14592 15.2431 3.16791 15.2293 3.22561C15.0342 3.9016 7.76323 10.3702 7.76323 10.3702C7.74488 10.3931 7.72923 10.4179 7.71653 10.4444L7.33732 14.4756C7.33732 14.4756 7.17792 15.7094 8.41448 14.4756C9.28282 13.6045 10.1264 12.8763 10.5496 12.5218C11.9456 13.4836 13.4487 14.5525 14.0972 15.1103C14.2063 15.2157 14.3356 15.2979 14.4772 15.3522C14.6188 15.4065 14.77 15.4317 14.9215 15.4263C15.5371 15.4044 15.7102 14.7284 15.7102 14.7284C15.7102 14.7284 18.5817 3.16791 18.6779 1.62083C18.6779 1.46695 18.6999 1.37077 18.7027 1.26635C18.7055 1.13383 18.6898 1.00156 18.656 0.873402Z"
                  fill="currentColor"
                />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </footer>
    <div class="overlay" id="overlay"></div>
    <div class="modal" id="modal">
      <div class="modal__content">
        <h3 class="modal__title">Контактная форма</h3>
        <form
          class="modal__form form _main-form contact-form freg thin rounded"
          id="main-form"
          method="post"
        ></form>
      </div>
    </div>

    <script src="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
"></script>
    <script src="loadAssets.js?v=3444371"></script>

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
  document.addEventListener( 'DOMContentLoaded', function() {
    var splide = new Splide( '#splide1', { 
      breakpoints: {
        1024: {
          type: "loop",
          perPage: 1,
      }
      },
      type: "slide",
       perPage: 3,
      gap: "30px",
      pagination: false,
      arrows: false,
      drag: true,
      autoplay: true,
      interval: 3000,} );
    splide.mount();
  } );
</script>
  <script>
  document.addEventListener( 'DOMContentLoaded', function() {
    var splide = new Splide( '#splide2', { 
      breakpoints: {
        1024: {
          type: "loop",
          perPage: 1,
      }
      }, 
      type: "slide",
       perPage: 3,
      padding: "5rem",
      gap: "30px",
      pagination: false,
      arrows: false,
      drag: true,
      autoplay: true,
      interval: 3000,} );
    splide.mount();
  } );
</script>
  </body>
</html>
