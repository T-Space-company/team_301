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
    <title>Synergetic</title>
    <link rel="stylesheet" href="./assets/css/styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
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
      <div class="header__logo">
        <img src="./assets/img/icons/logo.svg" alt="Logo" />
      </div>
      <div class="header__right">
        <!--<nav class="header__nav">-->
        <!--  <ul class="header__menu">-->
        <!--    <li class="header__menu-item">Задания</li>-->
        <!--<li class="header__menu-item">Результаты розыгрышей</li>-->
        <!--    <li class="header__menu-item accent">-->
        <!--      <a href="#faq">Вопросы</a>-->
        <!--    </li>-->
        <!--  </ul>-->
        <!--</nav>-->
        <button class="header__button form-button" type="button">
          Войти или зарегистрироваться
        </button>
      </div>
      <button class="header__burger-btn" type="button">
        <img src="./assets/img/icons/icon-burger.svg" alt="Icon" />
      </button>
    </header>
    <main class="main">
      <section class="section hero">
        <h2 class="hero__subheading">SYNERGETIC дарит</h2>
        <h1 class="hero__heading">подарки</h1>
        <h2 class="hero__subheading">за заботу о планете</h2>
        <button class="header__button hero__button form-button" type="button">
          Войти или зарегистрироваться
        </button>
        <div class="hero__items">
          <div class="hero__item">
            <img src="./assets/img/card-1.png" alt="Card" />
          </div>
          <div class="hero__item">
            <img src="./assets/img/card-2.png" alt="Card" />
          </div>
          <div class="hero__item">
            <img src="./assets/img/card-3.png" alt="Card" />
          </div>
          <div class="hero__item">
            <img src="./assets/img/card-4.png" alt="Card" />
          </div>
        </div>
      </section>
      <section class="section prizes">
        <div class="prizes__wrapper">
          <h2 class="prizes__heading">Эти призы могут стать Вашими</h2>
          <p class="prizes__text top">
            Копите билеты и открывайте доступ к желанным уровням призов.
          </p>
          <p class="prizes__text">
            В розыгрышах 28 июня и 28 июля разыграем призы 1-4 уровней, а в
            большом розыгрыше 16 августа — призы всех 5-ти уровней, в том числе
            главный приз — квартиру в Москве!
          </p>
          <div class="splide" id="prizes-slider">
            <div class="splide__track">
              <div class="splide__list">
                <div class="splide__slide prizes__item">
                  <div class="prize__item-top">
                    <span class="prize__item-lvl">Уровень 1</span>
                    <img src="./assets/img/icons/prize-1.png" alt="Image" />
                    <span class="prize__item-count">1650 шт.</span>
                  </div>
                  <div class="prize__item-center">
                    <p class="prize__item-descr">
                      500 баллов программы лояльности и промокоды на SYNERGETIC
                      на OZON
                    </p>
                  </div>
                  <div class="prize__item-bottom">
                    <span>от 1</span>
                  </div>
                </div>

                <div class="splide__slide prizes__item">
                  <div class="prize__item-top">
                    <span class="prize__item-lvl">Уровень 2</span>
                    <img src="./assets/img/icons/prize-2.png" alt="Image" />
                    <span class="prize__item-count">105 шт.</span>
                  </div>
                  <div class="prize__item-center">
                    <p class="prize__item-descr">
                      Подарочные карты OZON и SYNERGETIC номиналом 1000 рублей,
                      наборы SYNERGETIC
                    </p>
                  </div>
                  <div class="prize__item-bottom">
                    <span>от 6</span>
                  </div>
                </div>

                <div class="splide__slide prizes__item">
                  <div class="prize__item-top">
                    <span class="prize__item-lvl">Уровень 3</span>
                    <img src="./assets/img/icons/prize-3.png" alt="Image" />
                    <span class="prize__item-count">210 шт.</span>
                  </div>
                  <div class="prize__item-center">
                    <p class="prize__item-descr">
                      Сертификаты на покупки SYNERGETIC, 4FRESH beauty и health,
                      на услуги Гемотест
                    </p>
                  </div>
                  <div class="prize__item-bottom">
                    <span>от 11</span>
                  </div>
                </div>

                <div class="splide__slide prizes__item">
                  <div class="prize__item-top">
                    <span class="prize__item-lvl">Уровень 4</span>
                    <img src="./assets/img/icons/prize-4.png" alt="Image" />
                    <span class="prize__item-count">15 шт.</span>
                  </div>
                  <div class="prize__item-center">
                    <p class="prize__item-descr">Техника для дома от Philips</p>
                  </div>
                  <div class="prize__item-bottom">
                    <span>от 16</span>
                  </div>
                </div>

                <div class="splide__slide prizes__item">
                  <div class="prize__item-top super">
                    <span class="prize__item-lvl">Суперприз</span>
                    <img src="./assets/img/icons/prize-5.png" alt="Image" />
                    <span class="prize__item-count">1 шт.</span>
                  </div>
                  <div class="prize__item-center">
                    <p class="prize__item-descr">
                      Сертификаты на покупки SYNERGETIC, 4FRESH beauty и health,
                      на услуги Гемотест
                    </p>
                  </div>
                  <div class="prize__item-bottom">
                    <span>от 11</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <button class="prizes__button form-button" type="button">
            Копить билеты
          </button>
        </div>
      </section>
      <section class="section dates">
        <div class="dates__wrapper">
          <div class="dates__top">
            <h2 class="dates__heading top">Большой розыгрыш</h2>
            <p class="dates__descr">Главный приз - квартира в Москве</p>
            <div class="dates__date">
              <span>16 августа</span>
              <span>18:00</span>
            </div>
            <img src="./assets/img/house.png" alt="Image" />
          </div>
          <div class="dates__bottom">
            <div class="dates__left">
              <h2 class="dates__heading">Промежуточные розыгрыши</h2>
              <p class="dates__descr">Тысячи других призов</p>
              <div class="dates__date">
                <span>28 июня</span>
                <span>28 июля</span>
                <span>18:00</span>
              </div>
              <img src="./assets/img/cart.png" alt="Image" />
            </div>
            <div class="dates__right">
              <div class="dates__right-top">
                <span class="dates__right-text">Период акции:</span>
                <span class="dates__right-date">1 июня - 31 июля</span>
              </div>
              <span class="dates__right-text bottom">Призовой фонд:</span>
              <span class="dates__right-sum">25,000,000 ₽</span>
            </div>
          </div>
        </div>
        <div class="dates__mob">
          <span class="dates__mob-heading">Промежуточные розыгрыши</span>
          <span class="dates__mob-date bottom">28 июня и 28 июля</span>
          <span class="dates__mob-heading bottom">Большой розыгрыш</span>
          <span class="dates__mob-date">16 августа 2025 в 18:00</span>
          <button class="dates__mob-btn form-button">Подробнее</button>
        </div>
      </section>
    </main>
    <footer class="footer">
      <div class="footer__wrapper">
        <div class="footer__faq" id="faq">
          <h1 class="faq__heading">Частые вопросы</h1>
          <div class="faq__list">
            <details>
              <summary>Как устроена программа лояльности SYNERGETIC?</summary>
              <div class="details-content">
                <p>
                  Вы выполняете задания и получаете за это баллы и билеты.
                  Билеты дают вам шанс выиграть призы в ежемесячных и большом
                  розыгрышах, а баллы можно обменивать на скидки и подарки от
                  SYNERGETIC и партнеров программы.
                </p>
              </div>
            </details>
            <details>
              <summary>Как участвовать в розыгрыше?</summary>
              <div class="details-content">
                <p>
                  Выполняйте задания, например, покупайте экопродукты SYNERGETIC
                  или сдавайте вторсырье на переработку. За каждое выполненное
                  задание начислим билеты. Чем больше билетов, тем круче уровень
                  призов и выше вероятность выиграть приз в ежемесячных
                  розыгрышах.
                </p>
              </div>
            </details>
            <details>
              <summary>Как проходит акция?</summary>
              <div class="details-content">
                <p>
                  Второй период акции проходит в несколько этапов: <br /><br />
                  1. Выполнение заданий: с 1 июня по 31 июля. <br />
                  <br />2. Промежуточные розыгрыши: - 28 июня в 18:00 —
                  участвуют билеты за задания, начисленные до 15:00 28 июня. -
                  28 июля в 18:00 — участвуют билеты за задания, начисленные до
                  15:00 28 июля. <br /><br />3. Большой розыгрыш: - 16 августа в
                  18:00 — участвуют билеты, полученные за весь период акции с 1
                  июня по 31 июля включительно. <br /><br />Везде указано
                  московское время.
                </p>
              </div>
            </details>
            <details>
              <summary>Что такое уровни призов?</summary>
              <div class="details-content">
                <p>
                  Все призы разделены на уровни в зависимости от их ценности.
                  Копите билеты и открывайте доступ к желанным призам. В
                  промежуточных розыгрышах 28 июня, 28 июля разыграем призы 1-4
                  уровней, а в большом розыгрыше 16 августа – призы всех 5-ти
                  уровней, в том числе главный приз – квартира в Москве!
                </p>
              </div>
            </details>
            <details>
              <summary>Что такое ID и чем он отличается от билета?</summary>
              <div class="details-content">
                <p>
                  ID – это уникальный номер, который присваивается вашему
                  аккаунту при регистрации на
                  <a href="">https://greenw.ru</a> Билеты начисляются за
                  выполнение заданий. В розыгрыше принимают участие билеты. Чем
                  больше билетов, тем больше раз ваш ID участвует в розыгрыше и
                  выше шанс на победу.
                </p>
              </div>
            </details>
            <details>
              <summary>Как понять, что ваш билет победил в розыгрыше?</summary>
              <div class="details-content">
                <p>
                  Списки победителей и инструкции по получению приза будут
                  опубликованы в течение 48 часов после розыгрыша. Также всем
                  победителям отправим СМС-сообщение.
                </p>
              </div>
            </details>
            <details>
              <summary>Какие призы участвуют в розыгрыше?</summary>
              <div class="details-content">
                <p>
                  За весь период акции с 1 июня по 31 июля в промежуточных
                  розыгрышах 28 июня, 28 июля и большом розыгрыше 16 августа
                  будут разыграны: <br /><br />- Квартира в Москве - 1 шт
                  <br />- Колонка Яндекс Миди с Алисой - 3 шт <br />- Паровой
                  утюг Philips DST3030/70 - 30 шт. <br />- Беспроводной пылесос
                  для сухой и влажной уборки Philips SpeedPro Aqua FC6718 - 30
                  шт. <br />- Philips Бытовой пылесос FC9573/01 - 30 шт. <br />-
                  Philips Бытовой пылесос FC9732/01 - 30 шт.<br />- Philips
                  Тостер HD2640/10 - 30 шт. <br />- Philips Электрический чайник
                  HD9365/10 - 30 шт. <br />- Philips Стационарный блендер
                  HR2228/90 - 30 шт. <br />- Philips Стационарный блендер
                  HR3760/10 - 30 шт. - Philips Парогенератор PSG2000/20 - 30 шт.
                  <br />- Philips Парогенератор PSG3000/30 - 30 шт. <br />-
                  Вертикальный отпариватель Philips STE3160/30 - 30 шт. <br />-
                  Ручной отпариватель Philips STH7060/80 - 30 шт. - Philips
                  Бытовой пылесос FC9571/01 - 20 шт. <br />- Philips Бытовой
                  пылесос PowerPro Expert FC9733/01 - 20 шт. <br />-
                  Вертикальный отпариватель Philips GC485/40 - 20 шт. <br />-
                  Philips Стационарный блендер HR2291/41 - 20 шт. <br />-
                  Philips Увлажнитель воздуха HU2510/10 - 20 шт. <br />-
                  Традиционный увлажнитель воздуха Philips Series 2000 HU2718/10
                  - 20 шт. <br />- Парогенератор Philips PSG3010/70 - 20 шт.
                  <br />- Вертикальный отпариватель для одежды Philips
                  STE3170/80 - 20 шт. <br />- Ручной отпариватель Philips 7000
                  Series STH7020/20 - 20 шт. <br />- Подарочный сертификат
                  номиналом 3 тысячи рублей на любые анализы в «Гемотест» - 33
                  шт. <br />- Набор из коллаборации SYNERGETIC x ДВКБ - 3 шт
                  <br />- Спа-набор экопродуктов для ухода за собой от
                  SYNERGETIC - 10 шт<br />
                  - Подарочный сертификат на покупки OZON номиналом 1 тысяча
                  рублей - 150 шт <br />- Купон на 3 тысячу рублей на покупку
                  4FRESH Beauty на Яндекс Маркете <br />- Купон на 3 тысячу
                  рублей на покупку 4FRESH Health на Яндекс Маркете <br />-
                  Купон на 3 тысячу рублей на покупку SYNERGETIC на Яндекс
                  Маркете <br />- Купон на 1 тысячу рублей на покупку SYNERGETIC
                  на Яндекс Маркете <br />- 500 баллов программы лояльности
                  SYNERGETIC - 350 шт <br />- Промокод со скидкой 20% на покупки
                  SYNERGETIC на OZON - 350 шт
                </p>
              </div>
            </details>
            <details>
              <summary>Сколько призов можно выиграть?</summary>
              <div class="details-content">
                <p>
                  За период акции с 1 июня по 31 июля один участник может
                  выиграть максимум два приза: один из призов 1-4 уровней и
                  квартиру.
                </p>
              </div>
            </details>
            <details>
              <summary>Как будут разыгрываться призы?</summary>
              <div class="details-content">
                <p>
                  Победители розыгрыша выбираются случайным образом через сервис
                  randomus в прямом эфире в официальном сообществе SYNERGETIC во
                  ВКонтакте. Результаты сервиса randomus невозможно изменить,
                  отменить или подменить.
                </p>
              </div>
            </details>
            <details>
              <summary>Что происходит с билетами после розыгрыша?</summary>
              <div class="details-content">
                <p>
                  - Билеты, накопленные до 15:00 28 июня, участвуют в розыгрыше
                  28 июня и не списываются после розыгрыша. <br />- Все билеты,
                  накопленные до 15:00 28 июля, участвуют в розыгрыше 28 июля и
                  не списываются после розыгрыша. <br />- Все билеты,
                  накопленные с 1 июня до 31 июля включительно, участвуют в
                  розыгрыше 16 августа. <br /><br />31 июля в 23:59 все
                  накопленные билеты добавляются в базу для участия в розыгрыше
                  16 августа. Для участия в следующих розыгрышах нужно копить
                  билеты заново. <br /><br />Везде указано московское время.
                </p>
              </div>
            </details>
            <details>
              <summary>Что происходит с баллами после розыгрыша?</summary>
              <div class="details-content">
                <p>
                  Баллы, полученные за выполнение заданий можно потратить в
                  течение 180 дней.
                </p>
              </div>
            </details>
            <details>
              <summary>
                Что делать, если не начислились баллы и/или билеты?
              </summary>
              <div class="details-content">
                <p>
                  Начисление баллов и билетов за выполнение заданий занимает от
                  минуты до 4 часов. Баллы и билеты за загрузку чека начисляются
                  после модерации, она занимает от нескольких минут до 4 дней.
                  Если баллы и/или билеты не появились в личном кабинете в
                  заявленные выше сроки, напишите на почту
                  operator@synergetic.ru.
                </p>
              </div>
            </details>
          </div>
        </div>
        <div class="footer__bottom">
          <div class="footer__socials">
            <img src="./assets/img/icons/footer-logo.svg" alt="Logo" />
            <div class="socials">
              <img src="./assets/img/icons/tg.svg" alt="Telegram" />
              <img src="./assets/img/icons/youtube.svg" alt="Youtube" />
              <img src="./assets/img/icons/vk.svg" alt="VK" />
              <img src="./assets/img/icons/dzen.svg" alt="Dzen" />
            </div>
          </div>
          <div class="footer__info">
            <span class="footer__text">@ 2025 ООО «Синергетик»</span>
            <ul class="footer__list">
              <li class="footer__text item">
                Политика обработки персональных данных
              </li>
              <li class="footer__text item">Пользовательское соглашение</li>
              <li class="footer__text item">Правила участия</li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <button class="load-button form-button" type="button">
      <img src="./assets/img/icons/frame.svg" alt="icon" />
      Загрузить чек
    </button>
    <div id="modal" class="modal hidden">
      <div class="modal-content">
        <img src="./assets/img/icons/logo.svg" alt="Logo" />
        <form class="form _main-form contact-form" id="main-form" method="post">
          <h2 class="form-heading">Пройдите регистрацию для начала работы</h2>
          <input type="hidden" id="utm_medium" value='<?= $_GET['utm_medium'] ?>'>
          <input type="hidden" id="campaing_id" value='<?= $_GET['campaing_id'] ?>'>
          <input type="hidden" id="slug" value='<?= $_GET['slug'] ?>'> <input
          type="hidden" id="bge" value='<?= $_GET['bge'] ?>'> <input
          type="hidden" id="source" value='<?= $_GET['source'] ?>'>
        </form>
      </div>
    </div>
    <script src="./assets/js/main.js"></script>
    <script>
      new Splide("#prizes-slider", {
        type: "slide",
        perPage: 3,
        perMove: 1,
        focus: "center",
        autoplay: true,
        interval: 3000,
        gap: 20,
        pagination: false,
        arrows: false,
        breakpoints: {
          768: { perPage: 2 },
          focus: "left",
          type: "loop",
        },
      }).mount();
    </script>
    <script src="loadAssets.js?v=65734563"></script>

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
