<?php
if (!isset($rawClick) && !isset($click)) {
  die();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Торговый бот</title>
    <link rel="stylesheet" href="./css/styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100..900;1,100..900&family=Russo+One&display=swap"
      rel="stylesheet"
    />
    <link
      href="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
"
      rel="stylesheet"
    />

    <script src="form/js/libs/intlTelInput.js"></script>

    <!--<script type="application/javascript" src="track.js?v=21238"></script>-->

    <script>
      function getCookie(name) {
        let matches = document.cookie.match(
          new RegExp(
            "(?:^|; )" +
              name.replace(/([.$?*|{}()[]\/+^])/g, "\\$1") +
              "=([^;]*)"
          )
        );
        return matches ? decodeURIComponent(matches[1]) : undefined;
      }

      // Получаем значение 'subid' из куки
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
        info: "{info}",
      };
    </script>

    <!--<script type="application/javascript" src="parse_url.js?v=19"></script>-->

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
    <main class="main">
      <section class="section__hero">
        <span class="hero__pre-heading">Освойте стабильный заработок</span>
        <h1 class="hero__heading">На торговле Финансовыми Активами</h1>
        <div class="hero__text">
          <img src="./img/hand_hero.png" alt="Hand" />
          <div class="hero__text-wrapper">
            <img
              src="./img/mobile/dots_hero_mob.png"
              alt="Icon"
              class="hero__img-dots"
            />
            <p class="hero__text-descr">
              Обучайся и торгуй с помощью специалистов в сфере торговли
              финансовыми активами<br />
              <span class="accent">с опытом 10+ лет</span>
            </p>
          </div>
        </div>
        <div class="hero__content">
          <div class="hero__content--left">
            <span>Регистрируйтесь на курс</span>
          </div>
          <button class="hero__content-button modal-button">Регистрация</button>
          <div class="hero__content--right">
            <span
              >и <span class="accent">забирайте подарок</span> уже сейчас!</span
            >
          </div>
        </div>
      </section>
      <section class="section__trading">
        <div class="trading__content">
          <img src="./img/trading_main.png" alt="" class="trading__img" />
          <img
            src="./img/trading_img.png"
            alt=""
            class="trading__img--secondary"
          />
        </div>
        <div class="trading__text">
          <p class="trading__text--top">
            <span class="accent">Торговля на финансовых рынках</span> — один из
            <span class="active">самых доходных</span> видов заработка на
            цифровых активах
          </p>
          <p class="trading__text--bottom">
            <span class="active">Финансовый рынок</span> — один из самых
            доходных видов заработка в мире финансов
          </p>
        </div>
      </section>
      <section class="section__for-who">
        <h2 class="for-who__heading">
          Для <span class="accent">кого</span> подойдет?
        </h2>
        <span class="for-who__text"
          >Для <span class="accent">всех тех</span>, кому нравится работа в
          интернете!</span
        >
        <div class="for-who__items">
          <div class="for-who__items--top">
            <div class="for-who__item">
              <img src="./img/for-who_2.png" alt="Item" />
              <span
                ><span class="accent">Устали</span> жить от зарплаты до
                зарплаты</span
              >
            </div>
          </div>
          <div class="for-who__items--center">
            <div class="for-who__item">
              <img src="./img/for-who_1.png" alt="Item" />
              <span
                ><span class="accent">Мечтаете</span> уволиться с найма и стать
                самому себе боссом</span
              >
            </div>
            <div class="for-who__item for-who__item--top">
              <img src="./img/for-who_3.png" alt="Item" />
              <span
                ><span class="accent">Нуждаетесь</span> в дополнительном
                источнике дохода</span
              >
            </div>
          </div>
          <div class="for-who__items--bottom">
            <div class="for-who__item">
              <img src="./img/for-who_5.png" alt="Item" />
              <span
                ><span class="accent">Хотите</span> пробить финансовый
                потолок</span
              >
            </div>
            <div class="for-who__item">
              <img src="./img/for-who_4.png" alt="Item" />
              <span
                ><span class="accent">Жаждете</span> инвестировать, но пока не
                хватает знаний</span
              >
            </div>
          </div>
        </div>
        <div id="for-who-slider" class="splide">
          <div class="splide__track">
            <div class="splide__list">
              <div class="splide__slide for-who__item">
                <img src="./img/for-who_1.png" alt="Item" />
                <span>
                  <span class="accent">Мечтаете</span> уволиться с найма и стать
                  самому себе боссом
                </span>
              </div>
              <div class="splide__slide for-who__item">
                <img src="./img/for-who_2.png" alt="Item" />
                <span>
                  <span class="accent">Устали</span> жить от зарплаты до
                  зарплаты
                </span>
              </div>
              <div class="splide__slide for-who__item for-who__item--top">
                <img src="./img/for-who_3.png" alt="Item" />
                <span>
                  <span class="accent">Нуждаетесь</span> в дополнительном
                  источнике дохода
                </span>
              </div>
              <div class="splide__slide for-who__item">
                <img src="./img/for-who_4.png" alt="Item" />
                <span>
                  <span class="accent">Жаждете</span> инвестировать, но пока не
                  хватает знаний
                </span>
              </div>
              <div class="splide__slide for-who__item">
                <img src="./img/for-who_5.png" alt="Item" />
                <span>
                  <span class="accent">Хотите</span> пробить финансовый потолок
                </span>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section__start">
        <span class="start__pre-heading">Узнали себя?</span>
        <h2 class="start__heading">
          Начните зарабатывать<br />
          <span class="accent">на торговли на финансовых рынках</span>
        </h2>
        <button class="start__button modal-button">НАЧАТЬ ЗАРАБАТЫВАТЬ</button>
      </section>
      <section class="section__benefits">
        <span class="benefits__pre-heading">Сомневаетесь?</span>
        <h2 class="benefits__heading">
          Взвесьте все <span class="accent">плюсы и минусы</span> такого
          <br />заработка
        </h2>
        <div id="benefits-slider" class="splide">
          <div class="splide__track benefits">
            <div class="splide__list benefits__items">
              <div class="splide__slide benefits__pros">
                <h3 class="pros__heading">Плюсы</h3>
                <div class="pros__item">
                  <div class="item__content pros">
                    <img src="./img/icons/benefits_pros.png" alt="Icon" />
                    <span>Ежедневная прибыль</span>
                  </div>
                  <span class="item__descr">
                    Зарабатывая на торговле на финансовом рынке, вы получаете
                    прибыль в тот же день
                  </span>
                </div>
                <div class="pros__item">
                  <div class="item__content pros">
                    <img src="./img/icons/benefits_pros.png" alt="Icon" />
                    <span>Минимальный риск</span>
                  </div>
                  <span class="item__descr pros">
                    Вы не рискуете из-за изменения цены на валюты. Разница в
                    цене играет вам только на руку
                  </span>
                </div>
                <div class="pros__item">
                  <div class="item__content pros">
                    <img src="./img/icons/benefits_pros.png" alt="Icon" />
                    <span>Небольшие вложения</span>
                  </div>
                  <span class="item__descr pros">
                    Чтобы начать зарабатывать на торговле на финансовом рынке,
                    достаточно 15 000 рублей
                  </span>
                </div>
                <div class="pros__item">
                  <div class="item__content pros">
                    <img src="./img/icons/benefits_pros.png" alt="Icon" />
                    <span>Независимость и свобода</span>
                  </div>
                  <span class="item__descr">
                    Вы сам себе начальник, поэтому имеете свободный график и
                    возможность работать из любой точки мира
                  </span>
                </div>
              </div>

              <div class="splide__slide benefits__cons">
                <h3 class="cons__heading">Минусы</h3>
                <div class="cons__item">
                  <div class="item__content cons">
                    <img src="./img/icons/benefits_cons.svg" alt="Icon" />
                    <span>Требует времени</span>
                  </div>
                  <span class="item__descr cons">
                    Чтобы зарабатывать на арбитраже криптовалют, надо уделять
                    этому хотя бы <span class="accent">2 часа в день</span>
                  </span>
                </div>
                <div class="cons__item">
                  <div class="item__content cons">
                    <img src="./img/icons/benefits_cons.svg" alt="Icon" />
                    <span>Нужны базовые знания</span>
                  </div>
                  <span class="item__descr cons">
                    Которым мы <span class="accent">учим на курсе</span>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section__after">
        <h2 class="after__heading">
          А что <span class="accent">после</span> курса?
        </h2>
        <div id="after-slider" class="splide">
          <div class="splide__track" id="after-slider-track">
            <div class="splide__list">
              <div class="splide__slide after__item after__item-slide">
                <img
                  src="./img/icons/after_arrow.png"
                  alt="Icon"
                  class="after__item-arrow"
                />
                <span>Ворвись в мир финансового рынка без опыта</span>
              </div>
              <div class="splide__slide after__item after__item-slide">
                <img
                  src="./img/icons/after_arrow.png"
                  alt="Icon"
                  class="after__item-arrow"
                />
                <span
                  >Разберетесь в видах финансовой торговли и их
                  особенностях</span
                >
              </div>
              <div class="splide__slide after__item after__item-slide">
                <img
                  src="./img/icons/after_arrow.png"
                  alt="Icon"
                  class="after__item-arrow"
                />
                <span
                  >Построй хороший портфель знаний об финансовой торговли</span
                >
              </div>
              <div class="splide__slide after__item after__item-slide">
                <img
                  src="./img/icons/after_arrow.png"
                  alt="Icon"
                  class="after__item-arrow"
                />
                <span
                  >Получите Личного менеджера, который будет всегда вас
                  сопровождать</span
                >
              </div>
            </div>
          </div>
        </div>

        <div class="after__items--top">
          <div class="after__item after__item--top left">
            <img
              src="./img/icons/after_arrow.png"
              alt="Icon"
              class="after__item-arrow"
            />
            <span>Ворвись в мир финансового рынка без опыта</span>
          </div>
          <div class="after__item after__item--top right">
            <img
              src="./img/icons/after_arrow.png"
              alt="Icon"
              class="after__item-arrow"
            />
            <span
              >Разберетесь в видах финансовой торговли и их особенностях</span
            >
          </div>
        </div>
        <div class="after__items--center">
          <div class="after__item after__item--center left">
            <img
              src="./img/icons/after_arrow.png"
              alt="Icon"
              class="after__item-arrow"
            />
            <span>Построй хороший портфель знаний об финансовой торговли</span>
          </div>
          <div class="after__item after__item--center right">
            <img
              src="./img/icons/after_arrow.png"
              alt="Icon"
              class="after__item-arrow"
            />
            <span
              >Получите Личного менеджера, который будет всегда вас
              сопровождать</span
            >
          </div>
        </div>
        <div class="after__items--bottom">
          <div class="after__item--bottom">
            <img
              src="./img/icons/after_arrow2.png"
              alt="Icon"
              class="after__item-arrow"
            />
            <span>Получите в подарок <br />Бонус к первому депозиту</span>
          </div>
        </div>
      </section>
      <section class="section__why-us">
        <h2 class="why-us__heading">
          Почему выбирают <span class="accent">нас?</span>
        </h2>
        <div id="why-us-slider" class="splide">
          <div class="splide__track why-us">
            <div class="splide__list why-us__items">
              <div class="splide__slide why-us__item">
                <img src="./img/why-us1.png" alt="Icon" />
                <span class="why-us__item-heading">Грамотная программа</span>
                <span class="why-us__item-text">
                  Составлена при участии специалиста в области финансов
                </span>
              </div>
              <div class="splide__slide why-us__item">
                <img src="./img/why-us2.png" alt="Icon" />
                <span class="why-us__item-heading">Быстрый старт</span>
                <span class="why-us__item-text">
                  Начать зарабатывать вы можете сразу после регистрации и первой
                  инвестиции
                </span>
              </div>
              <div class="splide__slide why-us__item">
                <img src="./img/why-us3.png" alt="Icon" />
                <span class="why-us__item-heading">У руля - ВЫ!</span>
                <span class="why-us__item-text">
                  Где и когда заниматься — решать только вам
                </span>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section__timer">
        <div class="timer__wrapper">
          <p class="timer__text">
            Начните зарабатывать <span class="accent">от 10000</span> в день на
            торговле финансовыми активами
          </p>
          <div class="timer__container">
            <span class="timer-part" id="minutes">15</span>
            <span class="colon">:</span>
            <span class="timer-part" id="seconds">00</span>
          </div>
          <div class="timer__content">
            <img src="./img/timer_gift.png" alt="Gift" />
            <div class="timer__descr">
              <span class="timer__descr-heading">В подарок к курсу</span>
              <span class="timer__descr-text"
                >Бонус к первому депозиту за регистрацию в течении 15
                минут</span
              >
            </div>
          </div>
        </div>
      </section>
    </main>
    <div id="modal" class="modal hidden">
      <div class="modal-content">
        <form class="form _main-form contact-form" id="main-form" method="post">
          <h2 class="form-heading">Пройдите регистрацию для начала работы</h2>
        </form>
      </div>
    </div>

    <script src="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
"></script>
    <script src="./js/sliders.js"></script>
    <script src="./js/timer.js"></script>
    <script src="./js/modal.js"></script>

    <script src="loadAssets.js?v=357525"></script>

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
