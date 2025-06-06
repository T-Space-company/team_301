<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Freedom24</title>
    <link rel="stylesheet" href="./styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
      rel="stylesheet"
    />
    <link rel="shortcut icon" href="./img/icons/icon.png" type="image/x-icon" />
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
    <header class="header">
      <div class="header__content">
        <div class="header__left">
          <div class="header_logo">
            <a href="./index.php"
              ><img src="./img/logo.svg" alt="Freedom 24"
            /></a>
          </div>
          <ul class="header_menu">
            <li class="header_menu-list" style="display: none">
              <a href="">Сервисы</a>
            </li>
            <li class="header_menu-list"><a href="https://freedom24.com/anketa/price">Тарифы</a></li>
            <li class="header_menu-list"><a href="https://freedom24.com/about">О нас</a></li>
          </ul>
        </div>
        <div class="header__right">
          <div class="header__buttons">
            <!-- <button type="button" class="button--secondary">
              <a href="">Войти</a>
            </button> -->
            <button type="button" class="button--primary">
              <a href="#form">Открыть счет</a>
            </button>
          </div>
          <button class="header_button-lang">
            <a href="./index_eng.php">РУС</a></button>
          <!-- <img src="./img/icons/menu.svg" alt="Menu" /> -->
        </div>
      </div>
    </header>
    <main class="main">
      <section class="section hero">
        <div class="hero__wrapper">
          <div class="hero__left">
            <h1>
              Инвестиции <br />
              для каждого
            </h1>
            <div class="hero__text">
              <span>Инвестируйте в акции и ETF.</span>
              <span
                >Инвестируйте в ценные бумаги на крупнейших биржах и
                приумножайте сбережения на D-счете.</span
              >
              <span>Хеджируйте позиции при помощи опционов.</span>
            </div>
            <button class="button--primary hero__btn">
              <a href="#form">Открыть счет</a>
            </button>
            <img
              src="./img/trustpilot.svg"
              alt="Reviews"
              class="hero__review"
            />
          </div>
          <div class="hero__right">
            <img src="./img/hero.png" alt="Cover" class="img-container" />
          </div>
        </div>
      </section>
      <section class="section second">
        <div class="second__wrapper">
          <img
            src="./img/subhero.png"
            alt="Fast & Easy"
            class="img-container second__img"
          />
          <div class="second__text">
            <h2>Быстро и удобно</h2>
            <p>
              Откройте инвестиционный счет за 10 минут. Пополните счет
              банковским переводом без комиссии или мгновенно — банковской
              картой.
            </p>
          </div>
        </div>
      </section>
      <section class="section third">
        <div class="third__wrapper">
          <div class="third__content">
            <h2>1 000 000 инструментов</h2>
            <p>
              Инвестируйте в акции, ETF, облигации, фьючерсы и опционы на акции
              на крупнейших биржах США, Европы и Азии.
            </p>
            <button class="button--primary third__btn">
              <a href="#form">Подробнее</a>
            </button>
          </div>
          <div class="third__image">
            <img
              src="./img/subhero-2.png"
              alt="Laptop"
              class="img-container third__img"
            />
          </div>
        </div>
      </section>
      <section class="section fourth">
        <div class="fourth__wrapper">
          <div class="fourth__image">
            <img
              src="./img/subhero-3.png"
              alt="Partner"
              class="img-container fourth__img"
            />
          </div>
          <div class="fourth__content">
            <h2>Станьте партнером <br />Freedom24</h2>
            <p class="fourth__text">
              Приглашайте друзей или подписчиков и повышайте стоимость своего
              портфеля.
            </p>
            <button class="button--primary fourth__btn">
              <a href="#form">Подробнее</a>
            </button>
          </div>
        </div>
      </section>
      <section class="section fifth">
        <div class="fifth__wrapper">
          <div class="fifth__content">
            <h2>
              Максимизируйте сбережения с нашими непревзойденными
              высокодоходными планами
            </h2>
            <p>
              Получите 4.3% в долларах и 2.86% в евро в год на ваш остаток
              денежных средств. Выше любой другой альтернативы на рынке*.
            </p>
            <button class="button--primary fifth__btn">
              <a href="#form">Подробнее о D-счете</a>
            </button>
            <span>*по данным наших исследований</span>
          </div>
          <div>
            <img
              src="./img/subhero-4.png"
              alt="People"
              class="img-container fifth__img"
            />
          </div>
        </div>
      </section>
      <section class="section sixth">
        <div class="sixth__wrapper">
          <div>
            <img
              src="./img/subhero-5.png"
              alt="Phone"
              class="img-container sixth__img"
            />
          </div>
          <div class="sixth__content">
            <h2>Удобная торговая платформа</h2>
            <p>
              На веб-платформе и в мобильных приложениях от Freedom24 есть все
              необходимое для успешных инвестиций.
            </p>
            <p class="sixth__text">
              Всегда под рукой — актуальная информация о счете, аналитические
              инструменты и мощная торговая система, собранные вместе для
              обеспечения всех типов биржевых поручения, включая лимитные и
              стоп-приказы.
            </p>
            <button class="button--primary sixth__btn">
              <a href="#form">Открыть счет</a>
            </button>
          </div>
        </div>
      </section>
      <section class="section form__section" id="form">
        <div class="form__section_wrapper">
          <div class="form__section__img">
            <img src="./img/subhero-6.png" alt="Trading account" />
          </div>
          <div class="form__section__content_wrapper">
            <div class="form__section__content" >
              <h2>Откройте торговый счет</h2>
              <p>
                Доступ к основным фондовым биржам в США, Европе и Азии для
                инвестиций в акции, ETF, облигации и опционы на акции.
                Отмеченные наградами инвестиционные рекомендации и
                образовательные курсы, разработанные экспертами фондового рынка.
              </p>
              <form
                class="form _main-form contact-form freg thin rounded"
                id="main-form"
                method="post"
              >
                <input type="hidden" id="utm_medium" value='<?= $_GET['utm_medium'] ?>'>
                <input type="hidden" id="campaing_id" value='<?= $_GET['campaing_id'] ?>'>
                <input type="hidden" id="slug" value='<?= $_GET['slug'] ?>'>
                <input type="hidden" id="bge" value='<?= $_GET['bge'] ?>'>
                <input type="hidden" id="source" value='<?= $_GET['source'] ?>'>
              </form>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer class="footer">
      <div class="footer__top">
        <div class="footer__top__wrapper">
          <div class="footer__top--left">
            <div class="footer__top--left__block">
              <span>ПРОДУКТЫ</span>
              <ul>
                <li><a href="#form">D-счет</a></li>
                <li><a href="#form">Акции и ETFs</a></li>
                <li><a href="#form">Инвестидеи</a></li>
                <li><a href="#form">Партнерская программа</a></li>
                <li><a href="#form">White label</a></li>
                <li><a href="#form">Freedom Academy</a></li>
              </ul>
            </div>
            <div class="footer__top--left__block">
              <span>КОМПАНИЯ</span>
              <ul>
                <li><a href="https://freedom24.com/about">О нас</a></li>
                <li><a href="https://freedom24.com/esg">Социальные проекты</a></li>
                <li><a href="https://freedom24.com/anketa/price">Тарифы</a></li>
                <li><a href="https://freedom24.com/faq">FAQ</a></li>
                <li><a href="https://freedom24.com/news">Что нового</a></li>
                <li><a href="https://freedom24.com/api-fix-connection">API / FIX подключение</a></li>
                <li><a href="https://freedom24.com/feedback">Предложить улучшения</a></li>
              </ul>
            </div>
            <div class="footer__top--left__block">
              <span>ДОКУМЕНТЫ</span>
              <ul>
                <li><a href="https://www.cysec.gov.cy/en-GB/entities/investment-firms/cypriot/73116/">Лицензии</a></li>
                <li><a>Official data</a></li>
                <li><a href="https://freedom24.com/download/documents/450/Appendix_7_Privacy_Policy_31102024">Privacy Policy</a></li>
                <li><a>Privacy settings</a></li>
                <li><a href="https://freedom24.com/download/documents/83/Data_Protection_Notice">Data protection notice</a></li>
                <li><a href="https://freedom24.com/download/documents/449/General_Terms_of_Business_31102024">General Terms of Business</a></li>
                <li><a href="https://freedomfinance.eu/documents?_gl=1*7olowt*_gcl_au*NDczMzE1OTY2LjE3MzUwMjg3MzE.*FPAU*NDczMzE1OTY2LjE3MzUwMjg3MzE.*_ga*MTMyODk5NzM1OS4xNzM1MDI4NzMx*_ga_M19QP7JY69*MTczNTEzODYyNS44LjEuMTczNTEzOTUyMS4wLjAuMTEyMDExODc2OQ..*_fplc*c05INUM5amd6aUZwUFcyV1dlOHpRelMyQkROQUhIQUJrQXRvMmc5S0xqdmFwNXVoa04lMkJQbnBTRDFZTUxkSHRWRzZZMSUyQkJUbXROWDRWVDNrQ1hlOGRUS1o4amRsbTNZOHFRJTJGZ3IlMkJTeXJ1OFVxTzE0SHVkRzZBVWJyZ2ZnRWclM0QlM0Q.">Comprehensive list of legal documents</a></li>
              </ul>
            </div>
          </div>
          <div class="footer__top--right">
            <div class="footer__top--right__block">
              <span>МОБИЛЬНЫЕ ПРИЛОЖЕНИЯ</span>
              <div>
                <a href="https://play.google.com/store/apps/details?id=com.tradernet.freedom24app"
                  ><img src="./img/googleplay.svg" alt="GooglePlay"
                /></a>
                <a href="https://apps.apple.com/us/app/freedom24-by-freedom-finance/id1498916771?mt=8"><img src="./img/appstore.svg" alt="AppStore" /></a>
                <a href="https://appgallery.huawei.com/app/C103893791"
                  ><img src="./img/appgallery.svg" alt="AppGallery"
                /></a>
              </div>
            </div>
            <div class="footer__top--right__block">
              <span>СПОСОБЫ ОПЛАТЫ</span>
              <div>
                <a href=""
                  ><img src="./img/mastercard.svg" alt="Mastercard"
                /></a>
                <a href=""><img src="./img/visa.svg" alt="Visa" /></a>
                <a href=""><img src="./img/bank.svg" alt="Bank" /></a>
              </div>
            </div>
          </div>
        </div>
        <div class="footer__top_rewards">
          <span>НАШИ НАГРАДЫ</span>
          <div class="rewards">
            <img src="./img/rewards/1.png" alt="Reward" />
            <img src="./img/rewards/2.png" alt="Reward" />
            <img src="./img/rewards/3.png" alt="Reward" />
            <img src="./img/rewards/4.png" alt="Reward" />
            <img src="./img/rewards/5.png" alt="Reward" />
            <img src="./img/rewards/6.png" alt="Reward" />
            <img src="./img/rewards/7.png" alt="Reward" />
            <img src="./img/rewards/8.png" alt="Reward" />
            <img src="./img/rewards/9.png" alt="Reward" />
            <img src="./img/rewards/10.png" alt="Reward" />
          </div>
        </div>
      </div>
      <div class="footer__center">
        <div class="footer__center__wrapper">
          <div class="footer__center--left">
            <div class="footer__center_badges">
              <img src="./img/badges/1.svg" alt="Badge" />
              <img src="./img/badges/2.svg" alt="Badge" />
              <img src="./img/badges/3.svg" alt="Badge" />
              <img src="./img/badges/4.svg" alt="Badge" />
            </div>
            <p>
              Информационно-аналитические услуги и материалы предоставляются
              Freedom Finance Europe Ltd в рамках оказания указанных услуг и не
              являются самостоятельным видом деятельности. Компания оставляет за
              собой право отказать в оказании услуг лицам, не удовлетворяющим
              предъявляемым к клиентам условиям или в отношении которых
              установлен запрет/ограничения на оказание таких услуг в
              соответствии с законодательством Европейского союза. Также
              ограничения могут быть наложены внутренними процедурами и
              контролем Freedom Finance Europe Ltd.
            </p>
            <p>
              Freedom Finance Europe Ltd оказывает финансовые услуги на
              территории Европейского Союза в соответствии с лицензией CIF
              275/15 на все необходимые компании виды деятельности,
              предоставленной Кипрской комиссией по ценным бумагам и биржам
              (CySEC) 20.05.2015. Отказ от ответственности: Дополнительная
              информация предоставляется по запросу. Инвестиции в ценные бумаги
              и другие финансовые инструменты всегда сопряжены с риском потери
              капитала, Клиент должен сам сообщить об этом, в том числе
              ознакомиться с Уведомлением о раскрытии информации о рисках.
              Мнения и оценки составляют наше суждение на дату данного материала
              и могут быть изменены без предварительного уведомления. Комиссии,
              сборы или другие расходы могут уменьшить финансовый результат от
              Ваших вложений. Показатели доходности в прошлом не гарантируют
              доходности в будущем. Этот материал не предназначен в качестве
              предложения или ходатайства о покупке или продаже какого-либо
              финансового инструмента. Представленные здесь мнения и
              рекомендации не учитывают индивидуальных обстоятельств, целей или
              потребностей клиента и не представляют собой инвестиционную
              консультационную услугу. Получатель этого отчета должен принять
              свои собственные независимые решения в отношении любых ценных
              бумаг или финансовых инструментов, упомянутых в данном документе.
              Информация была получена из источников, которые Freedom Finance
              Europe Ltd считает надежными; ее филиалы и / или дочерние компании
              (совместно именуемые Freedom Finance) не гарантируют ее полноты
              или точности, за исключением случаев раскрытия информации,
              относящейся к Freedom Finance и / или ее филиалам/агентам и
              взаимодействия аналитика с эмитентом, который является предметом
              исследования. Все цены являются ориентировочными по состоянию на
              закрытие рынка для обсуждаемых ценных бумаг, если не указано иное.
            </p>
            <p>
              Доступ к этому сайту возможен по всему миру. Однако ни один из
              продуктов и услуг, упомянутых на этом сайте, не доступен для
              клиентов, проживающих в странах, где предоставление таких
              продуктов и услуг нарушает применимое законодательство.
              Ответственность за соблюдение всех применимых законов и правил
              лежит на любом клиенте, использующем или запрашивающем продукт или
              услугу.
            </p>
            <p>
              Во избежание сомнений, вся информация на данном сайте не
              адресована и не предназначена для использования лицами гражданства
              или резиденства США (как определено в Правиле 902 Положения S,
              принятого в соответствии с Законом США о ценных бумагах 1933
              года).
            </p>
          </div>
          <div class="footer__center--right">
            <div class="footer__center_country">
              <div class="footer__center_country--left">
                <img src="./img/icons/eu.png" alt="EU" />
                <span>Головной офис Европа</span>
              </div>
              <img
                src="./img/icons/arrow.svg"
                alt="Arrow"
                class="footer__center_arrow"
              />
            </div>
            <div class="footer__center_text">
              <span>ГОЛОВНОЙ ОФИС ЕВРОПА</span>
              <span
                >Christaki Kranou 20, Freedom Tower, 5th Floor, Germasogeia,
                Limassol 4041 Cyprus</span
              >
            </div>
          </div>
        </div>
      </div>
      <div class="footer__bottom">
        <div class="footer__bottom__wrapper">
          <div class="footer__bottom_text">
            <span>© 2024 Freedom24 - Все права защищены</span>
          </div>
          <div class="footer__bottom_socials">
            <a href="https://www.youtube.com/@freedom24eu"><img src="./img/icons/youtube.svg" alt="Youtube" /></a>
            <a href="https://www.instagram.com/freedom24eu"><img src="./img/icons/instagram.svg" alt="Instagram" /></a>
            <a href="https://www.facebook.com/freedom24eu"><img src="./img/icons/facebook.svg" alt="Facebook" /></a>
            <a href="https://www.linkedin.com/company/freedom24eu"><img src="./img/icons/linkedin.svg" alt="Linkedin" /></a>
          </div>
        </div>
      </div>
    </footer>
    <script src="loadAssets.js?v=34443719"></script>

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
