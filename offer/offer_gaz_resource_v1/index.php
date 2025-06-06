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
    <title>Газ Ресурс</title>
    <link rel="stylesheet" href="./assets/css/normalize.css" />
    <link rel="stylesheet" href="./assets/css/styles.css" />
    <link
      rel="shortcut icon"
      href="./assets/img/icons/logo.svg"
      type="image/x-icon"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />

    <script src="form/js/libs/intlTelInput.js"></script>

    <script>
      let scriptLoadings = false;
      // Функция для получения значения параметра из URL
      function getUrlParam(name) {
        const urlParams = new URLSearchParams(window.location.search);
        return urlParams.get(name);
      }

      // Проверяем наличие параметров
      const bgeValue = getUrlParam("bge");
      const crmSource = getUrlParam("crm_source");

      if (bgeValue) {
        // Если есть только bgeValue – подключаем скрипты для bge
        let inlineScript = document.createElement("script");
        inlineScript.innerHTML = `
      window.bgdataLayer = window.bgdataLayer || [];
      function bge() { bgdataLayer.push(arguments); }
      bge('init', '${bgeValue}');
    `;
        document.head.appendChild(inlineScript);

        // Подключаем второй скрипт для bge
        let asyncScript = document.createElement("script");
        asyncScript.src =
          "https://api.imotech.video/ad/events.js?pixel_id=" + bgeValue;
        document.head.appendChild(asyncScript);

        // Ожидаем загрузки всех скриптов, чтобы продолжить выполнение (если нужно)
        asyncScript.onload = function () {
          // Здесь можно добавить код, который должен выполняться после подгрузки всех скриптов
          console.log("Все скрипты для BGE загружены!");
        };
      } else if (!crmSource) {
        // Если НЕТ ни bgeValue, ни crmSource – подключаем альтернативные скрипты
        let trackScript = document.createElement("script");
        trackScript.type = "application/javascript";
        trackScript.src = "track.js?v=21238";
        document.head.appendChild(trackScript);

        trackScript.onload = function () {
          // Здесь можно добавить код, который должен выполняться после подгрузки track.js
          console.log("track.js загружен!");
          window.removeEventListener("beforeunload", trackClose);
        };

        let inlineScript = document.createElement("script");
        inlineScript.innerHTML = `
      function getCookie(name) {
        let matches = document.cookie.match(
          new RegExp("(?:^|; )" + name.replace(/([.$?*|{}()[]\\/+^])/g, "\\$1") + "=([^;]*)")
        );
        return matches ? decodeURIComponent(matches[1]) : undefined;
      }

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
        info: "{info}"
      };
    `;
        document.head.appendChild(inlineScript);

        inlineScript.onload = function () {
          // Здесь можно добавить код, который должен выполняться после подгрузки inlineScript
          console.log("Inline script для альтернативы загружен!");
        };

        let parseScript = document.createElement("script");
        parseScript.type = "application/javascript";
        parseScript.src = "parse_url.js?v=19";
        document.head.appendChild(parseScript);

        scriptLoadings = true;

        parseScript.onload = function () {
          // Здесь можно добавить код, который должен выполняться после подгрузки parse_url.js
          console.log("parse_url.js загружен!");
        };
      }
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
      <div class="header__logo">
        <img src="./assets/img/icons/logo.svg" alt="Logo" />
        <div class="logo__title">
          <span class="accent">ГАЗ</span>
          <span>Ресурс</span>
        </div>
      </div>
      <nav class="header__nav desktop">
        <a href="#">Главная</a>
        <a href="#users">Топ участников</a>
        <a href="#access">Как получить доступ?</a>
        <a href="#calc">Калькулятор</a>
        <a href="#info">О проекте</a>
      </nav>
      <button type="button" class="header__menu mobile">
        <img src="./assets/img/icons/burger.svg" alt="Меню" />
      </button>
    </header>
    <div class="mobile-menu" id="mobileMenu">
      <div class="mobile-menu__inner">
        <div class="mobile-menu__top">
          <div class="mobile-menu__logo">
            <img src="./assets/img/icons/logo_m.svg" alt="Logo" />
            <div class="mobile-menu__brand">
              <span class="mobile-menu__brand-main">ГАЗ</span><br />
              <span class="mobile-menu__brand-sub">Ресурс</span>
            </div>
          </div>
          <button class="mobile-menu__close" id="mobileMenuClose">✕</button>
        </div>

        <nav class="mobile-menu__nav">
          <a href="#">Главная</a>
          <a href="#users">Топ участников</a>
          <a href="#access">Как получить доступ?</a>
          <a href="#calc">Калькулятор</a>
          <a href="#info">О проекте</a>
        </nav>
      </div>
    </div>
    <div class="mobile-menu__overlay" id="mobileMenuOverlay"></div>

    <main class="main">
      <section class="section hero">
        <div class="hero__title">
          <div class="hero__title-wrap">
            <h2 class="hero__heading">
              ГАЗ ресурс - приносит прибыль россиянам
            </h2>
            <span class="hero__descr"
              >Россияне получили возможность перепродавать газ заграницу по
              специальным ценам! Закупочные цены на 30% ниже для граждан
              РФ</span
            >
          </div>
          <div class="hero__form desktop">
            <form
              class="form _main-form contact-form freg thin rounded"
              id="main-form"
              method="post"
            >
              <div class="text-block-6">
                <h3 class="form-heading" style="text-align: center">
                  Начни зарабатывать на ресурсах СВОЕЙ СТРАНЫ!
                </h3>
              </div>
              <input type="hidden" id="utm_medium" value='<?= $_GET['utm_medium'] ?>'>
              <input type="hidden" id="campaing_id" value='<?= $_GET['campaing_id'] ?>'>
              <input type="hidden" id="slug" value='<?= $_GET['slug'] ?>'>
              <input type="hidden" id="bge" value='<?= $_GET['bge'] ?>'> <input
              type="hidden" id="source" value='<?= $_GET['source'] ?>'>
            </form>
          </div>
        </div>
        <div class="hero__content">
          <video
            src="./assets/img/vid.mp4"
            class="hero__video"
            controls
            autoplay
            muted
          ></video>
          <details class="hero__info" id="info">
            <summary class="info__summary">
              <img
                src="./assets/img/icons/info.svg"
                alt="Инфо"
                class="info__icon"
              />
              <span class="info__title"
                >Проект Федерального Положения, ст. 10 проекта ФЗ «О недрах»
                :</span
              >
              <img src="./assets/img/icons/arrow.svg" class="info__arrow" />
            </summary>
            <p class="info__content">
              Сроки пользования участками недр<br />
              Участки недр предоставляются в пользование на определенный срок
              или без ограничения срока. На определенный срок участки недр
              предоставляются в пользование для: геологического изучения - на
              срок до 5 лет;<br />
              добычи полезных ископаемых - на срок отработки месторождения
              полезных ископаемых, исчисляемый исходя из технико-экономического
              обоснования разработки месторождения полезных ископаемых,
              обеспечивающего рациональное использование и охрану недр; добычи
              подземных вод - на срок до 25 лет;<br />
              добычи полезных ископаемых на основании предоставления
              краткосрочного права пользования участками недр в соответствии со
              статьей 21.1. настоящего Закона - на срок до 1 года. <br />
              Без ограничения срока могут быть предоставлены участки недр для
              строительства и эксплуатации подземных сооружений, не связанных с
              добычей полезных ископаемых, строительства и эксплуатации
              подземных сооружений, связанных с захоронением отходов,
              строительства и эксплуатации нефте- и газохранилищ, a также для
              образования особо охраняемых геологических объектов и иных целей.
              <br />
              Срок пользования участком недр может быть продлен по инициативе
              пользователя недр при выполнении им оговоренных в лицензии на
              пользование участком недр условий и необходимости завершения
              разработки месторождения полезных ископаемых или выполнения
              ликвидационных мероприятий. <br />
              Порядок продления срока пользования участком недр на условиях
              соглашения о разделе продукции определяется указанным соглашением.
              Сроки пользования участками недр исчисляются с момента
              государственной регистрации лицензий на пользование этими
              участками недр. <br />
            </p>
          </details>
        </div>
        <div class="hero__form mobile">
          <form
            class="form _main-form contact-form freg thin rounded"
            id="main-form"
            method="post"
          >
            <div class="text-block-6">
              <h3 class="form-heading" style="text-align: center">
                Начни зарабатывать на ресурсах СВОЕЙ СТРАНЫ!
              </h3>
            </div>
            <input type="hidden" id="utm_medium" value='<?= $_GET['utm_medium'] ?>'>
            <input type="hidden" id="campaing_id" value='<?= $_GET['campaing_id'] ?>'>
            <input type="hidden" id="slug" value='<?= $_GET['slug'] ?>'> <input
            type="hidden" id="bge" value='<?= $_GET['bge'] ?>'> <input
            type="hidden" id="source" value='<?= $_GET['source'] ?>'>
          </form>
        </div>
      </section>
      <section class="section users" id="users">
        <h2 class="users__heading">
          ТОП 10 - Самых активных участников платформы
        </h2>
        <ol class="users__list">
          <li class="users__item">
            <div class="users__info">
              <span>1.</span>
              <img src="./assets/img/users/u1.png" alt="Светлана" />
              <span class="users__name">Светлана</span>
            </div>
            <div class="users__bar">
              <div class="fill" style="width: 100%"></div>
            </div>
            <span class="users__amount">10.2 млн. ₽</span>
          </li>
          <li class="users__item">
            <div class="users__info">
              <span>2.</span>
              <img src="./assets/img/users/u2.png" alt="Артем" />
              <span class="users__name">Артем</span>
            </div>
            <div class="users__bar">
              <div class="fill" style="width: 76%"></div>
            </div>
            <span class="users__amount">7.8 млн. ₽</span>
          </li>
          <li class="users__item">
            <div class="users__info">
              <span>3.</span>
              <img src="./assets/img/users/u3.png" alt="Елена" />
              <span class="users__name">Елена</span>
            </div>
            <div class="users__bar">
              <div class="fill" style="width: 71%"></div>
            </div>
            <span class="users__amount">7.2 млн. ₽</span>
          </li>
          <li class="users__item">
            <div class="users__info">
              <span>4.</span>
              <img src="./assets/img/users/u4.png" alt="Антонина" />
              <span class="users__name">Антонина</span>
            </div>
            <div class="users__bar">
              <div class="fill" style="width: 68%"></div>
            </div>
            <span class="users__amount">6.9 млн. ₽</span>
          </li>
          <li class="users__item">
            <div class="users__info">
              <span>5.</span>
              <img src="./assets/img/users/u5.png" alt="Игнат" />
              <span class="users__name">Игнат</span>
            </div>
            <div class="users__bar">
              <div class="fill" style="width: 62%"></div>
            </div>
            <span class="users__amount">6.3 млн. ₽</span>
          </li>
          <li class="users__item">
            <div class="users__info">
              <span>6.</span>
              <img src="./assets/img/users/u6.png" alt="Андрей" />
              <span class="users__name">Андрей</span>
            </div>
            <div class="users__bar">
              <div class="fill" style="width: 53%"></div>
            </div>
            <span class="users__amount">5.4 млн. ₽</span>
          </li>
          <li class="users__item">
            <div class="users__info">
              <span>7.</span>
              <img src="./assets/img/users/u7.png" alt="Ангелина" />
              <span class="users__name">Ангелина</span>
            </div>
            <div class="users__bar">
              <div class="fill" style="width: 40%"></div>
            </div>
            <span class="users__amount">4.1 млн. ₽</span>
          </li>
          <li class="users__item">
            <div class="users__info">
              <span>8.</span>
              <img src="./assets/img/users/u8.png" alt="Карина" />
              <span class="users__name">Карина</span>
            </div>
            <div class="users__bar">
              <div class="fill" style="width: 27%"></div>
            </div>
            <span class="users__amount">2.8 млн. ₽</span>
          </li>
          <li class="users__item">
            <div class="users__info">
              <span>9.</span>
              <img src="./assets/img/users/u9.png" alt="Ольга" />
              <span class="users__name">Ольга</span>
            </div>
            <div class="users__bar">
              <div class="fill" style="width: 21%"></div>
            </div>
            <span class="users__amount">2.2 млн. ₽</span>
          </li>
          <li class="users__item">
            <div class="users__info">
              <span>10.</span>
              <img src="./assets/img/users/u10.png" alt="Арсен" />
              <span class="users__name">Арсен</span>
            </div>
            <div class="users__bar">
              <div class="fill" style="width: 13%"></div>
            </div>
            <span class="users__amount">2.8 млн. ₽</span>
          </li>
        </ol>
      </section>
      <section class="section access" id="access">
        <div class="access__content">
          <h2 class="access__heading">
            Как получить доступ к официальным газовым активам
          </h2>
          <div class="access__list">
            <div class="access__point">
              <img src="./assets/img/icons/access-1.svg" alt="Icon" />
              <div class="access__info">
                <span>1.</span>
                <p>Оставить контактные данные на данном сайте</p>
              </div>
            </div>
            <div class="access__point">
              <img src="./assets/img/icons/access-2.svg" alt="Icon" />
              <div class="access__info">
                <span>2.</span>
                <p>
                  Дождаться звонка-подтверждения от менеджера и завершить
                  регистрацию 
                </p>
              </div>
            </div>
            <div class="access__point">
              <img src="./assets/img/icons/access-3.svg" alt="Icon" />
              <div class="access__info">
                <span>3.</span>
                <p>
                  Легкий старт с минимальными вложениями от 9 500 ₽,  идите к
                  доходу в сопровождении Профессионалов — первый результат уже в
                  течении 2-ух дней!
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="access__image">
          <img src="./assets/img/access.png" alt="Image" />
        </div>
      </section>
      <section class="section calc" id="calc">
        <h2 class="calc__heading">С какой суммы лучше всего начать?</h2>
        <span class="calc__descr"
          >Воспользуйтесь нашим калькулятором, чтобы спрогнозировать свою
          прибыль от проекта</span
        >
        <div class="calc__wrapper">
          <div class="calc__form">
            <div class="calc__input-wrapper">
              <div class="calc__form-header">
                <label for="rangeInput">Стартовый капитал</label>
                <output id="amountDisplay" class="calc__amount"
                  >15 000 ₽</output
                >
              </div>
              <input
                type="range"
                class="calc__range"
                id="rangeInput"
                min="10000"
                max="150000"
                step="5000"
                value="15000"
              />
              <p class="calc__hint">
                Выберите сумму инвестиции в слайдере, чтобы моментально
                рассчитать будущую прибыль
              </p>
            </div>
            <div class="calc__approx">
              Предполагаемая прибыль:
              <img class="calc__result-icon" src="./assets/img/icons/rub.svg" />
            </div>
            <div class="calc__result">
              <div class="calc__result-row">
                <span>Через месяц:</span>
                <span id="monthResult" class="calc__result-value"
                  >₽ 150 000</span
                >
              </div>
              <div class="calc__result-row">
                <span>Через год:</span>
                <span id="yearResult" class="calc__result-value"
                  >₽ 1 80000</span
                >
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section bottom mobile">
        <div class="bottom__form">
          <form
            class="form _main-form contact-form freg thin rounded"
            id="main-form"
            method="post"
          >
            <div class="text-block-6">
              <h3 class="form-heading" style="text-align: center">
                Начни зарабатывать на ресурсах СВОЕЙ СТРАНЫ!
              </h3>
            </div>
            <input type="hidden" id="utm_medium" value='<?= $_GET['utm_medium'] ?>'>
            <input type="hidden" id="campaing_id" value='<?= $_GET['campaing_id'] ?>'>
            <input type="hidden" id="slug" value='<?= $_GET['slug'] ?>'> <input
            type="hidden" id="bge" value='<?= $_GET['bge'] ?>'> <input
            type="hidden" id="source" value='<?= $_GET['source'] ?>'>
          </form>
        </div>
      </section>
    </main>

    <!--------- QUESTION 1 --------->
    <div id="modal-1" class="modal hidden">
      <div class="modal__content">
        <p class="modal__question">Вам более 25 лет?</p>
        <div class="modal__actions">
          <a class="modal__button--first" href="err.html">Нет</a>
          <button class="modal__button--first yes">Да</button>
        </div>
      </div>
    </div>
    <!--------- QUESTION 2 --------->
    <div id="modal-2" class="modal hidden">
      <div class="modal__content">
        <p class="modal__question">
          Вы являетесь гражданином или резидентом Российской Федерации?
        </p>
        <div class="modal__actions">
          <a class="modal__button--second" href="err.html">Нет</a>
          <button class="modal__button--second yes">Да</button>
        </div>
      </div>
    </div>
    <!--------- QUESTION 3 --------->
    <div id="modal-3" class="modal hidden">
      <div class="modal__content">
        <p class="modal__question">Есть ли у вас проблемы с банками?*</p>
        <div class="modal__actions">
          <button class="modal__button--third yes">Нет</button>
          <a class="modal__button--third" href="err.html">Да</a>
        </div>
        <span class="modal__additional"
          ><span class="accent"
            >** Данный вопрос необходим, чтобы мы могли обеспечить корректный
            вывод средств.</span
          ></span
        >
      </div>
    </div>

    <script src="./assets/js/calc.js"></script>
    <script src="./assets/js/menu.js"></script>
    <script src="./assets/js/modal.js"></script>
    <script src="loadAssets.js?v=321"></script>

    <script>
      window.onload = function () {
        var err = localStorage.getItem("unsuitable");
        var thx = localStorage.getItem("thanks");
        if (err && err === "false") {
          const fileErr = "err.html";
          window.location.href = `${fileErr}${window.location.search}`;
        } else if (thx && thx === "true") {
          const fileThx = "thanks2.php";
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
          const fileThx = "thanks2.php";
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
  </body>
</html>
