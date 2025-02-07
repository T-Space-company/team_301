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
    <title>Патриот Инвестиции</title>
    <link
      rel="shortcut icon"
      href="./assets/img/icons/favicon.svg"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="./assets/css/styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
      rel="stylesheet"
    />

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
      <div class="header__wrapper">
        <img
          src="./assets/img/icons/logo.svg"
          alt="Logo"
          class="header__logo"
        />
        <nav class="header__nav">
          <ul class="header__menu">
            <li class="header__menu-item"><a href="#start">Начинающие</a></li>
            <li class="header__menu-item"><a href="#materials">Опытные</a></li>
            <li class="header__menu-item accent">
              <img
                src="./assets/img/icons/professionals.svg"
                alt="Icon"
              /><a href="#access">Профессионалы</a>
            </li>
          </ul>
        </nav>
        <button class="header__button register form-button" type="button">
          Регистрация
        </button>
      </div>
    </header>
    <main class="main">
      <section class="section hero">
        <div class="hero__wrapper">
          <div class="hero__content">
            <h1 class="hero__heading">Инвестиции для всех</h1>
            <p class="hero__text">
              Инвестируйте на любом уровне — будучи начинающим, опытным или
              профессиональным инвестором. С «ПАТРИОТ» вы сможете уверенно
              пройти путь от первых шагов до продвинутых решений, двигаясь к
              своим целям в комфортном темпе
            </p>
            <button class="hero__button register form-button" type="button">
              Регистрация
            </button>
          </div>
          <div class="hero__form" id="form-main">
            <form
              class="form _main-form contact-form"
              id="main-form"
              method="post"
            >
              <h2 class="form-heading">
                Пройдите регистрацию для начала работы
              </h2>
            </form>
          </div>
        </div>
      </section>
      <section class="section start" id="start">
        <div class="start__badge">
          <span class="start__badge-text">Для начинающих</span>
        </div>

        <h2 class="start__heading">Быстрый старт</h2>
        <p class="start__description">
          Сделайте первые шаги с базовыми инструментами, которые не требуют
          особых навыков
        </p>

        <ul class="start__list">
          <li class="start__list-item active"><button type="button">Открытие счета</button></li>
          <li class="start__list-item"><button type="button">Популярные бумаги</button></li>
          <li class="start__list-item"><button type="button">AI-скринер</button></li>
        </ul>

        <img
          src="./assets/img/mobile/start_mob.png"
          alt="Image"
          class="start__image"
        />
        <div class="start__content">
          <div class="start__content-wrapper">
            <div class="start__content-text-wrapper">
              <p class="start__content-heading">
                Откройте брокерский счет онлайн всего за 3 минуты
              </p>
              <p class="start__content-text">
                Понадобится только фотография документа, удостоверяющего
                личность, и российский номер телефона для получения
                СМС-сообщения
              </p>
            </div>
            <button class="start__button register form-button">
              Открыть счет
            </button>
          </div>
        </div>
      </section>

      <section class="section members">
        <img src="./assets/img/icons/members_warning.svg" alt="Image">
        <h2 class="members__heading">
          Для участников СВО, а также для родственников участников СВО-
          специальное предложение:
        </h2>
        <ul class="members__list">
          <li class="members__list-item">ВИП-Менеджер</li>
          <li class="members__list-item">Комиссия 0% на вывод</li>
          <li class="members__list-item">
            И много других специальных предложений
          </li>
        </ul>
        <button class="members__button register form-button">
          Регистрация
        </button>
        <h2 class="members__heading">
          Наша платформа благодарна каждому участнику СВО за их вклад в победу
          нашей СТРАНЫ и от себя мы делаем вам специальное предложение
        </h2>
        <img src="./assets/img/icons/members_warning.svg" alt="Image">
      </section>
      <section class="section partners">
      <div class="partners__text">
        <h2 class="partners__heading">Партнеры</h2>
        <p class="partners__descr">Проект работает при поддержке:</p>
      </div>
      <div class="partners__logo">
        <img src="./assets/img/icons/partners_psb.png" alt="ПСБ">
        <img src="./assets/img/icons/partners_vtb.svg" alt="ВТБ">
      </div>
      </section>
      <section class="section materials" id="materials">
        <div class="members__badge">
          <span class="members__badge-text">Для опытных</span>
        </div>
        <h3 class="materials__heading">Продвигайтесь вперед</h3>
        <p class="materials__text">
          Получите доступ к технологичным продуктам и полезным материалам,
          которые помогут лучше освоиться на рынке и усовершенствовать свои
          навыки
        </p>
        <div class="materials__section top">
          <div class="materials__item left">
            <p class="materials__item-heading">
              Повторяйте сделки за опытными инвесторами
            </p>
            <p class="materials__item-text">
              Сэкономьте время на анализе рынка и минимизируйте вероятность
              ошибки — подключайтесь к стратегиям автоследования от опытных
              инвесторов, и все сделки авторов будут автоматически дублироваться
              на вашем счете
            </p>
            
          </div>
          <div class="materials__group">
            <div class="materials__item top">
              <p class="materials__item-heading">
                45+ онлайн-курсов для обучения
              </p>
              <ul class="materials__item-list">
                <li>Быстрый старт</li>
                <li>Как собрать инвестиционный портфель?</li>
                <li>Ключ к трейдингу</li>
              </ul>
              
            </div>
            <div class="materials__item right">
              <div class="materials__text-wrapper">
                <p class="materials__item-heading">
                  Аналитика 365 дней в году 
                </p>
                <p class="materials__item-text">
                  Подпишитесь на ежедневные инвестидеи и обзоры рынков
                  от проверенных экспертов
                </p>
              </div>
              <div class="materials__item-buttons">
                <button class="materials__item-btn register form-button" type="button">
              Регистрация
            </button>
              </div>
            </div>
          </div>
        </div>

        <div class="materials__section bottom">
          <div class="materials__item bottom">
            <div class="materials__text-wrapper">
              <p class="materials__item-heading">
                Торгуйте без риска и вложений
              </p>
              <p class="materials__item-text left">
                Совершенствуйте свои навыки на практике с помощью демосчета
                и бесплатного депозита 400 000 ₽
              </p>
            </div>
            
          </div>
          <div class="materials__item bottom right">
            <div class="materials__text-wrapper">
              <p class="materials__item-heading">Переходите на новый уровень</p>
              <p class="materials__item-text">
                Получите доступ к иностранным ценным бумагам на мировых биржах и
                более продвинутым инструментам с помощью статуса
                квалифицированного инвестора
              </p>
            </div>
           
          </div>
        </div>
      </section>
      <section class="section stocks">
        <img
          src="./assets/img/mobile/stocks_mob.png"
          alt="Image"
          class="stocks__image"
        />
        <div class="stocks__content">
          <div class="stocks__content-wrapper">
            <div class="stocks__content-text-wrapper">
              <p class="stocks__content-heading">
                Акции: зарабатывайте на росте и дивидендах
              </p>
              <p class="stocks__content-text">
                250+ эмитентов: станьте акционером российских компаний —
                и получайте двойную выгоду за счет роста стоимости котировок и
                выплаты дивидендов
              </p>
            </div>
            <button class="start__button register form-button">
              Регистрация
            </button>
          </div>
        </div>
      </section>
      <section class="section opportunities">
        <h3 class="opportunities__heading">Ещё больше возможностей</h3>
        <p class="opportunities__text">
          Применяйте более продвинутые продукты и инструменты для решения
          комплексных инвестиционных задач
        </p>
        <div class="opportunities__top">
          <div class="opportunities__item left">
            <div class="materials__text-wrapper">
              <p class="materials__item-heading">
                Персональное сопровождение на ежедневной основе
              </p>
              <p class="materials__item-text">
                Ваш личный консультант поможет собрать портфель и управлять им,
                проведет анализ текущих активов и предложит рекомендации
                по улучшению портфеля
              </p>
            </div>
            
          </div>
          <div class="materials__group">
            <div class="opportunities__item right">
              <div class="materials__text-wrapper">
                <p class="materials__item-heading">
                  Trade API для автоматизированной торговли
                </p>
                <p class="materials__item-text">
                  Прямой доступ к биржам без использования систем брокера.
                  Идеально для алготрейдинга
                </p>
              </div>
              
            </div>
            <div class="opportunities__item bottom left">
            <div class="materials__text-wrapper">
              <p class="materials__item-heading">
                Инвестиции с защитой капитала до 100%
              </p>
              <p class="materials__item-text">
                Готовый продукт с прогнозируемым результатом и защитой от
                рыночных колебаний
              </p>
            </div>
            
          </div>
          </div>
        </div>
        
      </section>
      <section class="section access" id="access">
        <div class="access__badge">
          <span class="access__badge-text">Для профессионалов</span>
        </div>

        <h2 class="access__heading">Полный доступ</h2>
        <p class="access__description">
          Используйте самые передовые технологии для максимальной эффективности
          ваших инвестиций
        </p>

        <ul class="start__list">
          <li class="start__list-item active"><button type="button">Cегрегированный счет</button></li>
          <li class="start__list-item"><button type="button">Опционы РФ</button></li>
        </ul>

        <img
          src="./assets/img/mobile/access_mob.png"
          alt="Image"
          class="access__image"
        />
        <div class="start__content access">
          <div class="start__content-wrapper">
            <div class="start__content-text-wrapper">
              <p class="start__content-heading">
                Счет для торговли на русских биржах
              </p>
              <p class="start__content-text">
                Получите прямой доступ к биржам РФ  и торгуйте отечественными ценными бумагами. Активы надежно хранятся у отечественного кастодиана
              </p>
            </div>
            <div class="access__button-wrapper">
              <button class="access__button register form-button">
                Регистрация
              </button>
            </div>
          </div>
        </div>
      </section>
    </main>
    <div id="modal" class="modal hidden">
      <div class="modal-content">
        <button class="modal-close" aria-label="Close modal"><img src="./assets/img/icons/close.svg" alt=""></button>
        <form class="form _main-form contact-form" id="main-form" method="post">
          <h2 class="form-heading">Пройдите регистрацию для начала работы</h2>
        </form>
      </div>
    </div>
    <script src="./assets/js/main.js"></script>
    <script src="loadAssets.js?v=373232325"></script>

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
