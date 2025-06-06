<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>БКС</title>
    <link rel="stylesheet" href="./styles/styles.css" />
    <link href="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
" rel="stylesheet">

    <script src="./modal.js"></script>
    <script src="./slider.js"></script>
    <script src="./main.js"></script>
    <script src="jquery-3.6.1.min.js"></script>

    <script>
      window.bgdataLayer = window.bgdataLayer || [];

      function bge() {
          bgdataLayer.push(arguments);
      }
      bge('init', '<?= $_GET['bge'] ?>');
    </script>
    <script
      async
      src="https://api.imotech.video/ad/events.js?pixel_id=<?= $_GET['bge'] ?>"
    ></script>

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
    <header class="section header">
      <div class="header__logo">
        <a href="#"><img src="./img/logo.svg" alt="БКС" /></a>
      </div>
      <div class="header__content">
        <div class="header__menu-wrapper">
          <nav class="header__menu">
            <ul class="header__list">
              <li class="header__item"><a href="#main-section-form">Офисы</a></li>
              <li class="header__item"><a href="#main-section-form">О нас</a></li>
              <li class="header__item">
                <a href="#main-section-form">Проекты БКС</a
                ><img src="./img/icons/arrow_menu.svg" alt="Arrow" />
              </li>
            </ul>
          </nav>
        </div>
        <div class="header__entry">
          <button type="button" id="sign-in-button" class="header__login">
            <img src="./img/icons/login.svg" alt="Логин" />Войти
          </button>
          <button type="button" id="button-form" class="header__signup">
            Открыть счет<img src="./img/icons/star.svg" alt="Счёт" />
          </button>
        </div>
      </div>
    </header>
    <main class="main">
      <section class="section strategy">
        <div class="strategy__content">
          <div class="strategy__left">
            <div class="strategy__text_wrapper">
              <h1>Стратегия на 2025 год</h1>
              <p>Рекордные ставки принесут рекордные доходы</p>
              <button type="button">
                <a href="#main-section-form">
                  Читать<img src="./img/icons/arrow_btn.svg" alt="Arrow" />
                </a>
              </button>
            </div>
            <div class="strategy__menu">
              <div class="menu__item"><span>С Новым годом!</span></div>
              <div class="menu__item active">
                <span>Стратегия на 2025</span>
              </div>
              <div class="menu__item"><span>Новогоднее шоу БКС</span></div>
              <div class="menu__item"><span>БКС Профит</span></div>
              <div class="menu__item"><span>Обучение</span></div>
            </div>
          </div>
          <div id="strategy-slider" class="splide">
  <div class="splide__track">
    <div class="splide__list strategy__right">
      <div class="splide__slide strategy__feature">
        <div class="strategy__feature-title">
          <h3 class="strategy__feature-heading">Удобные тарифы</h3>
          <div class="strategy__feature-btn">
            <img src="./img/icons/arrow_feature.svg" alt="" />
          </div>
        </div>
        <p class="strategy__feature-value">от 0%</p>
        <span class="strategy__feature-description">
          Удобные условия для начинающих и активных инвесторов
        </span>
      </div>

      <div class="splide__slide strategy__feature">
        <div class="strategy__feature-title">
          <h3 class="strategy__feature-heading">Тысячи возможностей</h3>
          <div class="strategy__feature-btn">
            <img src="./img/icons/arrow_feature.svg" alt="" />
          </div>
        </div>
        <p class="strategy__feature-value">20 000+</p>
        <span class="strategy__feature-description">
          Акции и облигации со всего мира, ПИФы, стратегии, готовые решения
        </span>
      </div>

      <div class="splide__slide strategy__feature">
        <div class="strategy__feature-title">
          <h3 class="strategy__feature-heading">Бесплатное обучение</h3>
          <div class="strategy__feature-btn">
            <img src="./img/icons/arrow_feature.svg" alt="" />
          </div>
        </div>
        <p class="strategy__feature-value">50+</p>
        <span class="strategy__feature-description">
          Более 50 бесплатных обучающих курсов и статей
        </span>
      </div>

      <div class="splide__slide strategy__feature">
        <div class="strategy__feature-title">
          <h3 class="strategy__feature-heading">Всегда онлайн</h3>
          <div class="strategy__feature-btn">
            <img src="./img/icons/arrow_feature.svg" alt="" />
          </div>
        </div>
        <p class="strategy__feature-value">24/7</p>
        <span class="strategy__feature-description">
          Инвестиции и аналитика у вас под рукой
        </span>
      </div>
    </div>
  </div>
</div>

        </div>
      </section>
      <section class="section offers-form">
        <div class="offers-form__img">
          <img src="./img/phone.png" alt="Phone" />
        </div>
        <div class="offers-form__main">
          <form
            class="form _main-form contact-form freg thin rounded"
            id="main-form"
            method="post"
          >
            <div class="text-block-6">
              <h2 class="form-heading" id="main-form__heading">Премиальные предложения</h2>
            </div>
            <input type="hidden" id="utm_medium" value='<?= $_GET['utm_medium'] ?>'>
            <input type="hidden" id="campaing_id" value='<?= $_GET['campaing_id'] ?>'>
            <input type="hidden" id="slug" value='<?= $_GET['slug'] ?>'> <input
            type="hidden" id="bge" value='<?= $_GET['bge'] ?>'> <input
            type="hidden" id="source" value='<?= $_GET['source'] ?>'>
          </form>
        </div>
      </section>
      <section class="section products">
        <div class="products__heading">
          <h2>Популярные продукты</h2>
          <div class="products__types">
            <div class="products__type active">Акции</div>
            <div class="products__type">ПИФы</div>
            <div class="products__type">Инвестиции</div>
            <div class="products__type">Облигации</div>
          </div>
        </div>
  <div id="products-slider" class="splide products__charts">
  <div class="splide__track products__track">
    <div class="splide__list products__list">
      <div class="splide__slide">
        <img src="./img/chart1.png" alt="Т-Технологии" />
      </div>
      <div class="splide__slide">
        <img src="./img/chart2.png" alt="Сбербанк" />
      </div>
      <div class="splide__slide">
        <img src="./img/chart3.png" alt="Газпром" />
      </div>
    </div>
  </div>
</div>
        <button type="button" class="products__button">
          <a href="#main-section-form">
            Подобрать решение<img src="./img/icons/arrow_btn.svg" alt="Arrow" />
          </a>
        </button>
      </section>
      <section class="section education">
        <div class="education__left">
          <h2 class="education__heading">Обучение для новичков</h2>
          <div class="education__items">
            <details class="education__item" open>
              <summary class="education__summary">
                <span class="education__icon"></span>
                Изучите инвестиции с нуля
              </summary>
              <p class="education__content">
                Дадим базовые знания, чтобы начать инвестировать, и будем
                сопровождать на всех этапах.
              </p>
            </details>

            <details class="education__item">
              <summary class="education__summary">
                <span class="education__icon"></span>
                Короткие актуальные курсы
              </summary>
              <p class="education__content">
                Узнайте самые важные аспекты инвестиций за короткое время.
              </p>
            </details>

            <details class="education__item">
              <summary class="education__summary">
                <span class="education__icon"></span>
                Теория и практика
              </summary>
              <p class="education__content">
                Совмещайте теоретические знания с практическими рекомендациями.
              </p>
            </details>

            <details class="education__item">
              <summary class="education__summary">
                <span class="education__icon"></span>
                Бесплатный пожизненный доступ
              </summary>
              <p class="education__content">
                Получите бесплатный доступ к материалам на всё время.
              </p>
            </details>
          </div>
          <button type="button" class="education__button">
            <a href="#main-section-form">Начать учиться<img src="./img/icons/arrow_btn.svg" alt="Arrow" /></a>
          </button>
        </div>
        <div class="education__right">
          <img src="./img/education.png" alt="Обучение" />
        </div>
      </section>
      <section class="section offers">
        <h2>Премиальные предложения</h2>
        <div class="offers__content">
          <div class="offers__left">
            <div class="offers__content--left">
              <div class="offers__img">
                <img src="./img/icons/crown.png" alt="Crown" />
              </div>
              <div class="offers__text">
                <span class="offers__title">БКС Ультима</span>
                <span class="offers__descr"
                  >Персональное банковское обслуживание для состоятельных
                  клиентов</span
                >
              </div>
            </div>
            <ul class="offers__list">
              <li>
                <img src="./img/icons/ultima_arrow.svg" alt="Arrow" />Банковские
                услуги с обширными привилегиями
              </li>
              <li>
                <img
                  src="./img/icons/ultima_arrow.svg"
                  alt="Arrow"
                />Инвестиционные услуги с бутиковым подходом
              </li>
              <li>
                <img src="./img/icons/ultima_arrow.svg" alt="Arrow" />Управление
                стилем жизни
              </li>
            </ul>
            <button type="button" class="offers__button"><a href="#main-section-form">Подробнее</a></button>
          </div>
          <div class="offers__right">
            <div class="offers__content--right">
              <div class="offers__img">
                <img src="./img/icons/case.png" alt="Crown" />
              </div>
              <div class="offers__text">
                <span class="offers__title">Персональный брокер</span>
                <span class="offers__descr"
                  >Ведение вашего инвестиционного портфеля экспертом БКС</span
                >
              </div>
            </div>
            <ul class="offers__list">
              <li>
                <img src="./img/icons/personal_arrow.svg" alt="Arrow" />Подбор
                инвестиционных решений под ваши цели
              </li>
              <li>
                <img
                  src="./img/icons/personal_arrow.svg"
                  alt="Arrow"
                />Профессиональная аналитика по рынку
              </li>
              <li>
                <img
                  src="./img/icons/personal_arrow.svg"
                  alt="Arrow"
                />Бесплатный аудит вашего портфеля
              </li>
            </ul>
            <button type="button" class="offers__button"><a href="#main-section-form">Подробнее</a></button>
          </div>
        </div>
      </section>
      <section class="section invest">
        <h2 class="invest__heading">Инвестируйте с нами</h2>
        <div id="invest-slider" class="splide">
  <div class="splide__track">
    <div class="splide__list invest__items">
      <div class="splide__slide invest__item">
        <img src="./img/invest1.png" alt="" />
        <h3>29 лет активной работы</h3>
        <p>Какой бы ни была ситуация на финансовом рынке</p>
      </div>
      <div class="splide__slide invest__item">
        <img src="./img/invest2.png" alt="Рейтинг" />
        <h3>Рейтинг AАА|RU.IV|</h3>
        <p>Присвоен Национальным рейтинговым агентством</p>
      </div>
      <div class="splide__slide invest__item">
        <img src="./img/invest3.png" alt="Клиенты" />
        <h3>Более 1 млн клиентов</h3>
        <p>Доверяют нам и используют наши сервисы</p>
      </div>
      <div class="splide__slide invest__item">
        <img src="./img/invest4.png" alt="Брокер" />
        <h3>Лицензированный брокер</h3>
        <p>Обладаем всеми необходимыми документами</p>
      </div>
    </div>
  </div>
</div>

        <div class="invest__trust">
          <div class="invest__trust-content">
            <img
              class="invest__trust-icon"
              src="./img/icons/safe.svg"
              alt="Trust"
            />
            <span class="invest__trust-text">
              Доверьтесь профессионалам: БКС — лучший брокер для розничных
              инвесторов по версии Investfunds.
            </span>
          </div>
          <button class="invest__trust-button"><a href="#main-section-form">Открыть счет</a></button>
        </div>
      </section>
      <section class="section invest-start">
        <h2 class="invest-start__heading">Начать инвестировать легко</h2>
        <div class="invest-start__items">
          <div class="invest-start__item">
            <img src="./img/icons/docs.svg" alt="Documents" />
            <h3>1. Откройте счет</h3>
            <span>на сайте или в приложении за 3 минуты</span>
          </div>
          <div class="invest-start__item">
            <img src="./img/icons/money.svg" alt="Deposit" />
            <h3>2. Пополните счет</h3>
            <span>с карты любого российского банка без комиссии</span>
          </div>
          <div class="invest-start__item">
            <img src="./img/icons/arrow.svg" alt="Arrow" />
            <h3>3. Достигайте целей</h3>
            <span>с решениями от БКС, которые подходят именно вам</span>
          </div>
        </div>
        <div class="invest-start__form" id="main-section-form">
          <form
            class="form _main-form contact-form freg thin rounded"
            id="main-form main-form--second"
            method="post"
          >
            <div class="text-block-6">
              <h2 class="form-heading" style="text-align: center">
                Начните инвестировать
              </h2>
            </div>
            <input type="hidden" id="utm_medium" value='<?= $_GET['utm_medium'] ?>'>
            <input type="hidden" id="campaing_id" value='<?= $_GET['campaing_id'] ?>'>
            <input type="hidden" id="slug" value='<?= $_GET['slug'] ?>'> <input
            type="hidden" id="bge" value='<?= $_GET['bge'] ?>'> <input
            type="hidden" id="source" value='<?= $_GET['source'] ?>'>
          </form>
        </div>
      </section>
      <section class="section news">
        <div class="news__content">
          <span class="news__heading"
            >Эксклюзивная аналитика, свежие новости и обзоры рынков</span
          >
          <span class="news__text"
            >Всегда доступны в приложении и личном кабинете. Нужно просто
            открыть счет</span
          >
          <button class="news__button"><a href="#main-section-form">Открыть доступ</a></button>
        </div>
        <img src="./img/news.png" alt="Новости" />
      </section>
      <section class="section licenses">
        <h2 class="licenses__heading">Наши лицензии</h2>
        <div id="licenses-slider" class="splide">
  <div class="splide__track">
    <div class="splide__list licenses__items">
      <div class="splide__slide">
        <img src="./img/license1.png" class="license" alt="Лицензия 1" />
      </div>
      <div class="splide__slide">
        <img src="./img/license2.png" class="license" alt="Лицензия 2" />
      </div>
      <div class="splide__slide">
        <img src="./img/license3.png" class="license" alt="Лицензия 3" />
      </div>
      <div class="splide__slide">
        <img src="./img/license4.png" class="license" alt="Лицензия 4" />
      </div>
    </div>
  </div>
</div>

      </section>
    </main>
    <footer class="footer">
      <div class="footer__top">
        <p>
          ООО «Компания БКС» <br />
          Лицензия No 154-04434-100000 от 10.01.2001 на осуществление брокерской
          деятельности. <br />Выдана ФСФР. Без ограничения срока действия.
        </p>
      </div>
      <div class="footer__main">
        <span
          >С информацией об ООО «Компания БКС» можно ознакомиться
          <a href="#main-section-form"><span class="footer__link">по ссылке</span></a>
          </span>
        <span
          >Информация на данной странице сайта не является индивидуальной
          инвестиционной рекомендацией, и финансовые инструменты либо операции,
          упомянутые на данной странице сайта, могут не соответствовать вашему
          инвестиционному профилю, финансовому положению, опыту инвестиций,
          инвестиционным целям. 0% за покупку ценных бумаг, драгметаллов и юаней
          на тарифе Инвестор. Клиент дополнительно несет расходы по уплате
          биржевых сборов и иных расходов, установленных договором
          с ООО «Компания БКС». Более подробно с условиями данного тарифного
          плана вы можете ознакомиться в приложении № 11 к регламенту оказания
          услуг на рынке ценных бумаг ООО «Компания БКС»:
          <a href="#main-section-form"><span class="footer__link">bcs.ru</span></a>
        </span>
        <span
          >НРА подтвердило некредитный рейтинг надежности и качества услуг ООО
          «Компания БКС» по национальной рейтинговой шкале инвестиционных
          компаний для Российской Федерации на уровне «AАА|ru.iv|», прогноз
          «Стабильный» 28.04.2023. Доступно
          <a href="#main-section-form"><span class="footer__link">на сайте</span></a>
        </span>
        <span
          >ООО «Компания БКС» стало победителем премии Frank Invest & Insurance
          Award в номинации «Лучшая УК для розничного инвестора» в 2023 году:
          <a href="#main-section-form"><span class="footer__link">https://frankmedia.ru</span></a>
        </span>
        <span
          >ООО «Компания БКС» стало победителем премии Investment Leaders Award
          в номинации «Advisory — лучшая услуга по управлению активами для
          состоятельных клиентов» в 2023 году:
          <a href="#main-section-form"><span class="footer__link">https://investfunds.ru</span></a>
        </span>
        <span
          >Данная информация не является индивидуальной инвестиционной
          рекомендацией, и финансовые инструменты либо операции, упомянутые
          в данном материале, могут не соответствовать вашему инвестиционному
          профилю, финансовому положению, опыту инвестиций, инвестиционным
          целям. Определение соответствия финансового инструмента либо операции
          инвестиционным целям, инвестиционному горизонту и толерантности
          к риску является задачей инвестора. ООО «Компания БКС» не несет
          ответственности за возможные убытки инвестора в случае совершения
          операций либо инвестирования в финансовые инструменты, упомянутые
          в настоящем материале, и не рекомендует использовать указанную
          информацию в качестве единственного источника информации при принятии
          инвестиционного решения.</span
        >
        <span
          >Данные являются биржевой информацией, обладателем (собственником)
          которой является ПАО Московская Биржа. Распространение, трансляция или
          иное предоставление биржевой информации третьим лицам возможно
          исключительно в порядке и на условиях, предусмотренных порядком
          использования биржевой информации, предоставляемой ПАО Московская
          Биржа.</span
        >
        <span
          >ООО «Компания БКС» стало победителем премии Investment Leaders Award
          в номинации
          <span class="footer__link"
            >«Лучшее приложение для инвестиций» по итогам 2023 года</span
          ></span
        >
      </div>
      <div class="footer__bottom">
        <span>ООО «Компания БКС» <br />© 1995 — 2025.</span>
        <span
          >Любое использование материалов <br />сайта без разрешения
          запрещено</span
        >
      </div>
        <button class="footer__toggle-button">Свернуть</button>

    </footer>
    <div id="modal" class="modal">
      <button class="modal-close" id="button-close"><img src="./img/icons/close_btn.png" alt="Close"></button>
      <div class="modal-content">
        <div class="offers-form__img">
          <img src="./img/phone.png" alt="Phone" />
        </div>
        <div class="offers-form__main">
          <form
            class="form _main-form contact-form freg thin rounded"
            id="main-form"
            method="post"
          >
            <div class="text-block-6">
              <h2 class="modal-form__heading">Премиальные предложения</h2>
            </div>
            <input type="hidden" id="utm_medium" value='<?= $_GET['utm_medium'] ?>'>
            <input type="hidden" id="campaing_id" value='<?= $_GET['campaing_id'] ?>'>
            <input type="hidden" id="slug" value='<?= $_GET['slug'] ?>'> <input
            type="hidden" id="bge" value='<?= $_GET['bge'] ?>'> <input
            type="hidden" id="source" value='<?= $_GET['source'] ?>'>
          </form>
      </div>
    </div>

    <script src="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
"></script>



    <script src="loadAssets.js?v=3444371"></script>

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
