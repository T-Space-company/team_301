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
    <title>Финансовый рост</title>
    <link rel="stylesheet" href="./assets/css/styles.css" />
    <link
      rel="shortcut icon"
      href="./assets/img/icons/logo.svg"
      type="image/x-icon"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <link
      href="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
"
      rel="stylesheet"
    />
    <script src="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
"></script>

    <script src="form/js/libs/intlTelInput.js"></script>

    <script type="application/javascript" src="track.js?v=21238"></script>

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

    <script type="application/javascript" src="parse_url.js?v=19"></script>

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
      <div class="header__logo">
        <img src="./assets/img/icons/logo.svg" alt="Logo" />
        <span>Финансовый Рост</span>
      </div>
      <nav class="header__nav">
        <ul class="header__menu">
          <li class="header__menu-item"><a href="#course">О курсе</a></li>
          <li class="header__menu-item"><a href="#success">Успехи</a></li>
          <li class="header__menu-item accent">
            <a href="#testimonials">Отзывы</a>
          </li>
        </ul>
      </nav>
      <button class="header__button form-button" type="button">
        Оставить заявку
      </button>
    </header>
    <main class="main">
      <section class="section hero">
        <div class="hero__content">
          <h1 class="hero__heading">
            Как сохранить капитал и создать финансовую подушку?
          </h1>
          <p class="hero__text">
            Простые и доступные инструменты для управления финансами, которые
            помогут вам достичь финансовой независимости и обеспечить стабильный
            доход
          </p>
          <button class="hero__button form-button" type="button">
            Оставить Заявку
          </button>
        </div>
        <div class="hero__image">
          <img src="./assets/img/hero_img.png" alt="Image" />
        </div>
      </section>
      <section class="section revenue">
        <h2 class="revenue__heading">Рассчитайте свой пассивный доход</h2>
        <div class="revenue__content">
          <div class="revenue__options">
            <span class="revenue__options-heading"
              >Сколько вы зарабатываете?</span
            >
            <div class="revenue__items">
              <div class="revenue__items--top">
                <button class="revenue__item first" type="button">
                  от 20 000 ₽
                </button>
                <button class="revenue__item second active" type="button">
                  от 50 000 ₽
                </button>
              </div>
              <div class="revenue__items--bottom">
                <button class="revenue__item third" type="button">
                  от 100 000 ₽
                </button>
                <button class="revenue__item fourth" type="button">
                  от 200 000 ₽
                </button>
              </div>
            </div>
          </div>
          <div class="revenue__profit">
            <p class="revenue__profit-heading">Ваш пассивный доход составит:</p>
            <span class="revenue__profit-sum">от 30 000 ₽</span>
          </div>
        </div>
      </section>
      <section class="section controls">
        <div class="controls__image">
          <img src="./assets/img/controls_img.png" alt="Image" />
        </div>
        <div class="controls__content">
          <span class="controls__preheading">Управление финансами</span>
          <h2 class="controls__heading">Почему важно управлять финансами?</h2>
          <p class="controls__text">
            Без финансовой подушки вы уязвимы перед непредвиденными расходами и
            кризисами
          </p>
          <button class="hero__button form-button" type="button">
            Оставить заявку
          </button>
        </div>
      </section>
      <section class="section course" id="course">
        <div class="course__head">
          <span class="course__preheading">О курсе</span>
          <h2 class="course__heading">Что вы узнаете на курсе?</h2>
        </div>
        <div class="course__items">
          <div class="course__item">
            <div class="course__item-img"></div>
            <span class="course__item-heading"
              >Основы финансовой грамотности</span
            >
            <p class="course__item-descr">
              Изучите ключевые принципы управления личными финансами и создания
              стабильного дохода
            </p>
          </div>
          <div class="course__item">
            <div class="course__item-img second"></div>
            <span class="course__item-heading"
              >Защита и сохранение капитала</span
            >
            <p class="course__item-descr">
              Освойте стратегии защиты ваших активов и создания надежной
              финансовой подушки
            </p>
          </div>
          <div class="course__item">
            <div class="course__item-img third"></div>
            <span class="course__item-heading"
              >Создание финансовой подушки</span
            >
            <p class="course__item-descr">
              Изучите ключевые принципы управления личными финансами и создания
              стабильного дохода
            </p>
          </div>
        </div>
      </section>
      <section class="section success" id="success">
        <div class="course__head">
          <span class="course__preheading">Успехи</span>
          <h2 class="course__heading">Наши успехи и истории учеников</h2>
        </div>
        <div class="course__items success">
          <div class="course__item">
            <div class="course__item-img"></div>
            <span class="success__item-heading">1237</span>
            <p class="success__item-descr">Довольные ученики</p>
          </div>
          <div class="course__item">
            <div class="course__item-img second"></div>
            <span class="success__item-heading">48 659 ₽</span>
            <p class="success__item-descr">Средняя финансовая подушка</p>
          </div>
          <div class="course__item">
            <div class="course__item-img third"></div>
            <span class="success__item-heading">+183%</span>
            <p class="success__item-descr">
              Средний рост дохода наших выпускников
            </p>
          </div>
        </div>
      </section>
      <section class="section testimonials" id="testimonials">
        <div class="course__head">
          <span class="course__preheading">Отзывы</span>
          <h2 class="course__heading">Что наши выпускники говорят о нас</h2>
        </div>
        <div id="testimonials-slider" class="splide">
          <div class="splide__track">
            <div class="splide__list">
              <div class="splide__slide">
                <div class="testimonials-item">
                  <div class="testimonials-info">
                    <img src="./assets/img/avatars/avatar-1.png" alt="Avatar" />
                    <div class="testimonials-details">
                      <span class="testimonials-name">Евгений Виноградов</span>
                      <span class="testimonials-age">47 лет, Москва</span>
                    </div>
                  </div>
                  <p class="testimonials-text">
                    Проект от Финансового Роста изменил мою жизнь! Я начал
                    получать стабильный пассивный доход, практически ничего не
                    делая. Теперь могу больше времени уделять семье и своим
                    увлечениям
                  </p>
                </div>
              </div>

              <div class="splide__slide">
                <div class="testimonials-item">
                  <div class="testimonials-info">
                    <img src="./assets/img/avatars/avatar-2.png" alt="Avatar" />
                    <div class="testimonials-details">
                      <span class="testimonials-name">Алиса Филатова</span>
                      <span class="testimonials-age">72 года, Тверь</span>
                    </div>
                  </div>
                  <p class="testimonials-text">
                    Долгое время искала способ получать дополнительный доход без
                    сложностей. Проект от Финансового Роста справился с этим на
                    100%! Программа сама работает, а я просто наслаждаюсь
                    результатом!
                  </p>
                </div>
              </div>

              <div class="splide__slide">
                <div class="testimonials-item third">
                  <div class="testimonials-info">
                    <img src="./assets/img/avatars/avatar-3.png" alt="Avatar" />
                    <div class="testimonials-details">
                      <span class="testimonials-name">Игорь Смирнов</span>
                      <span class="testimonials-age">45 лет, Казань</span>
                    </div>
                  </div>
                  <p class="testimonials-text">
                    Сначала не верил, что можно зарабатывать так легко, но
                    проект от Финансового Роста реально изменил мою жизнь!
                    Теперь деньги работают на меня, а не наоборот!
                  </p>
                </div>
              </div>

              <div class="splide__slide">
                <div class="testimonials-item">
                  <div class="testimonials-info">
                    <img src="./assets/img/avatars/avatar-4.png" alt="Avatar" />
                    <div class="testimonials-details">
                      <span class="testimonials-name">Мария Ковальчук</span>
                      <span class="testimonials-age">65 лет, Астрахань</span>
                    </div>
                  </div>
                  <p class="testimonials-text">
                    Я долго сомневалась, но решила попробовать. Теперь понимаю –
                    это лучшее решение! Проект от Финансового Роста позволил мне
                    начать пассивно зарабатывать, а недавно я даже смогла
                    позволить себе новую квартиру!
                  </p>
                </div>
              </div>

              <div class="splide__slide">
                <div class="testimonials-item">
                  <div class="testimonials-info">
                    <img src="./assets/img/avatars/avatar-5.png" alt="Avatar" />
                    <div class="testimonials-details">
                      <span class="testimonials-name">Фарид Джурагов</span>
                      <span class="testimonials-age">51 год, Томск</span>
                    </div>
                  </div>
                  <p class="testimonials-text">
                    Раньше приходилось много работать, чтобы откладывать на
                    мечту, а теперь проект от Финансового Роста делает это за
                    меня! Доход приходит сам, а я наконец-то могу позволить себе
                    жить так, как хочу.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer class="footer">
      <div class="footer__wrapper">
        <div class="footer__top">
          <div class="footer__top--left">
            <div class="footer__logo">
              <img src="./assets/img/icons/logo_footer.svg" alt="Logo" />
              <span class="footer__logo-text">Финансовый Рост</span>
            </div>
            <p class="footer__text">
              ООО «Финансовый Рост» <br />зарегистрирована 10.03.2005 г. по
              адресу г. Москва, вн.тер.г. Муниципальный округ Головинский, б-р
              Кронштадтский, д. 3а стр. 1. <br />ОГРН 1057746395079 <br />ИНН
              7743553167 <br />Юридический адрес: г. Москва, вн.тер.г.
              Муниципальный округ Головинский, б-р Кронштадтский, д. 3а стр. 1.
            </p>
          </div>
          <div class="footer__top--right">
            <div class="footer__contacts">
              <span>Контакты</span>
              <div class="footer__contact">
                <a href="tel:+7(524) 333 6565">(524) 333 6565</a>
                <a href="mailto:fin_rost@mail.ru">Fin_rost@mail.ru</a>
              </div>
            </div>
            <div class="footer__buttons">
              <img src="./assets/img/icons/whatsapp.png" alt="Whatsapp" />
              <img src="./assets/img/icons/x.png" alt="X" />
              <img src="./assets/img/icons/facebook.png" alt="Facebook" />
              <img src="./assets/img/icons/youtube.png" alt="Youtube" />
            </div>
          </div>
        </div>
        <div class="footer__bottom">
          <span>© 2025 Финансовый Рост</span>
          <span>Политика конфиденциальности</span>
        </div>
      </div>
    </footer>
    <div id="modal" class="modal hidden">
      <div class="modal-content">
        <form class="form _main-form contact-form" id="main-form" method="post">
          <h2 class="form-heading">Пройдите регистрацию для начала работы</h2>
        </form>
      </div>
    </div>
    <script src="./assets/js/main.js"></script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        new Splide("#testimonials-slider", {
          type: "slide",
          perPage: 2.5,
          perMove: 1,
          autoplay: true,
          rewind: true,
          focus: "center",
          interval: 3000,
          gap: 40,
          pagination: false,
          arrows: true,
          speed: 300,
          breakpoints: {
            1240: {
              perPage: 2,
              gap: 20,
            },
            890: {
              perPage: 2,
              gap: 20,
              focus: "left",
            },
            600: {
              perPage: 1.5,
              gap: 120,
              focus: "left",
            },
          },
        }).mount();
      });
    </script>

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
