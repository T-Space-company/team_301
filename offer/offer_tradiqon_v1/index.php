<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <title>Tradiqon</title>
    <link rel="stylesheet" href="./assets/css/globals.css" />
    <link rel="stylesheet" href="./assets/css/styleguide.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link
      rel="shortcut icon"
      href="./assets/img/icons/logo.svg"
      type="image/x-icon"
    />

    <script src="form/js/libs/intlTelInput.js"></script>

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
    <div class="desktop">
      <div class="header" id="home">
        <div class="frame">
          <div class="fi">
            <div class="layer">
              <div class="overlap-group">
                <img src="./assets/img/icons/logo.svg" alt="Logo" />
              </div>
            </div>
          </div>
          <div class="text-wrapper">Tradiqon</div>
        </div>
        <div class="navbar desk">
          <a href="#home" class="div">Главная</a>
          <a href="#start" class="text-wrapper-2">Кому подойдет</a>
          <a href="#speaker" class="text-wrapper-2">Структура</a>
          <a href="#webinar" class="text-wrapper-2">Что получите</a>
          <a href="#faq" class="text-wrapper-2">FAQ</a>
          <a href="#reg" class="text-wrapper-2">Регистрация</a>
        </div>
        <button type="button" class="mob-menu mobile">
          <img src="./assets/img/icons/btgr.svg" />
        </button>
        <div class="mobile-menu" id="mobileMenu">
          <div class="menu-header">
            <div class="frame">
              <div class="fi">
                <div class="layer">
                  <div class="overlap-group">
                    <img src="./assets/img/icons/logo.svg" alt="Logo" />
                  </div>
                </div>
              </div>
              <div class="text-wrapper">Tradiqon</div>
            </div>
            <button type="button" class="close-menu" id="closeMenu">×</button>
          </div>
          <nav class="menu-links">
            <a href="#home" class="text-wrapper-2">Главная</a>
            <a href="#start" class="text-wrapper-2">Кому подойдёт</a>
            <a href="#speaker" class="text-wrapper-2">Структура</a>
            <a href="#webinar" class="text-wrapper-2">Что получите</a>
            <a href="#faq" class="text-wrapper-2">FAQ</a>
            <a href="#reg" class="text-wrapper-2">Регистрация</a>
          </nav>
        </div>
      </div>
      <div class="block">
        <div class="frame-2">
          <div class="frame-3">
            <div class="frame-4">
              <div class="heading">Стань трейдером нового поколения:</div>
              <p class="p">Уникальный подход 2025 года</p>
            </div>
            <p class="heading-2">
              Трейдинг с нуля без страха: узнай, как стабильно зарабатывать с
              проверенной методикой
            </p>
          </div>
          <form
            class="frame-5 form _main-form contact-form freg thin rounded form_sub-wrap"
            id="main-form"
            method="post"
          >
            <div class="heading-3">Осталось 17 мест</div>
          </form>
        </div>
      </div>
      <div class="block-2" id="start">
        <div class="frame-10">
          <div class="header-2">
            <p class="text-wrapper-6">
              Хотите зарабатывать на бирже, но не знаете, с чего начать?
            </p>
          </div>
          <div class="heading-8">Курс поможет вам:</div>
        </div>
        <div class="bento-container">
          <div class="row">
            <div class="frame-11">
              <div class="line-wrapper">
                <img class="line" src="./assets/img/icons/line.svg" />
              </div>
              <p class="text-wrapper-7">
                Изучить основы торговли — Начнете с ознакомления с базовыми
                понятиями, такими как акции, облигации, валюты и другие
                финансовые инструменты
              </p>
            </div>
            <div class="frame-11">
              <img class="img" src="./assets/img/icons/lines.svg" />
              <p class="text-wrapper-8">
                Выбрать подходящую платформу — Исследовать различные биржевые
                платформы и выбрать ту, которая соответствует вашим потребностям
                и уровню опыта
              </p>
            </div>
          </div>
          <div class="row">
            <div class="frame-11">
              <img class="vector-2" src="./assets/img/icons/demo.svg" />
              <p class="text-wrapper-8">
                Начать практику на демо-счетах, чтобы понять, как работает
                торговля, без риска потерять реальные деньги
              </p>
            </div>
            <div class="frame-11">
              <div class="overlap-group-wrapper">
                <div class="overlap-group-2">
                  <img src="./assets/img/icons/bs.svg" />
                </div>
              </div>
              <p class="text-wrapper-8">
                Разработать стратегию — Определите свою стратегию, будь то
                долгосрочная или краткосрочная торговля, и придерживайтесь ее
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="block-3" id="speaker">
        <div class="text">
          <div class="a-bold-headline-that">О спикере</div>
          <p class="text-wrapper-9">
            Меня зовут Максим Ковалев, на вебинаре я продемонстрирую, как моя
            уникальная методика работает на практике, используя реальные примеры
          </p>
          <div class="frame-12">
            <a href="#reg" class="heading-7">Узнать секреты</a>
          </div>
        </div>
        <div class="image-2"></div>
      </div>
      <div class="block-4" id="webinar">
        <div class="text-wrapper-10">Что будет на вебинаре</div>
        <div class="icon-section">
          <div class="icon-information">
            <div class="icon-container"></div>
            <div class="text-wrapper-11">Как стартовать с нуля</div>
          </div>
          <div class="icon-information">
            <div class="icon-container-2"></div>
            <div class="text-wrapper-11">3 стратегии стабильного дохода</div>
          </div>
          <div class="icon-information">
            <div class="icon-container-3"></div>
            <p class="text-wrapper-12">Как не слить деньги в первый месяц</p>
          </div>
          <div class="icon-information">
            <div class="icon-container-4"></div>
            <div class="text-wrapper-11">Минимизация рисков</div>
          </div>
        </div>
      </div>
      <div class="block-5" id="faq">
        <div class="text-wrapper-13">Часто задаваемые вопросы</div>
        <div class="div-3">
          <div class="card">
            <div class="heading-9">Нужен ли опыт?</div>
            <img
              class="img-2"
              src="https://c.animaapp.com/mb56iw47WclffO/img/chevron-up.svg"
            />
          </div>
          <div class="card-2">
            <div class="container-2">
              <div class="heading-10">Будет ли запись?</div>
            </div>
            <div class="sub-container">
              <p class="heading-10">
                Да, мы отправим запись всем зарегистрированным участникам. Даже
                если не сможете присутствовать онлайн, вы ничего не пропустите.
              </p>
              <img
                class="img-2"
                src="https://c.animaapp.com/mb56iw47WclffO/img/chevron-up-2.svg"
              />
            </div>
          </div>
          <div class="card">
            <div class="heading-9">Это действительно бесплатно?</div>
            <img
              class="img-2"
              src="https://c.animaapp.com/mb56iw47WclffO/img/chevron-up.svg"
            />
          </div>
        </div>
      </div>
      <div class="div-3">
        <div class="div-3">
          <div class="frame-13">
            <div class="text-wrapper-14">Отзывы учеников</div>
          </div>
          <div class="tes-wrapper">
            <div class="slider-container">
              <div class="tes">
                <div class="element">
                  <div class="frame-14">
                    <img
                      class="image-3"
                      src="https://c.animaapp.com/mb56iw47WclffO/img/-.svg"
                    />
                    <p class="text-wrapper-15">
                      Привет! Не знаю, с чего начать свой рассказ… Начну
                      сначала: когда впервые познакомился <br />с криптой и<br />трейдингом,
                      думал, что это лёгкие деньги, быстрый<br />успех и всё
                      просто. <br />Но после обучения появляется<br />чёткое
                      понимание дальнейших действий, <br />и постепенно<br />начинаешь
                      достигать желаемых результатов.
                    </p>
                  </div>
                  <div class="frame-15">
                    <div class="text-wrapper-16">Александр Иванов</div>
                  </div>
                </div>
                <div class="element">
                  <div class="frame-14">
                    <img
                      class="image-3"
                      src="https://c.animaapp.com/mb56iw47WclffO/img/-.svg"
                    />
                    <p class="text-wrapper-15">
                      С уверенностью могу сказать: тем, кто хочет<br />разобраться
                      и понять, как устроены рынки активов и в дальнейшем стать
                      специалистом — обучение в данной<br />школе лучшее
                      решение. Здесь максимально просто и<br />понятно подают
                      информацию.
                    </p>
                  </div>
                  <div class="frame-16">
                    <div class="text-wrapper-16">Дмитрий Смирнов</div>
                  </div>
                </div>
                <div class="element">
                  <div class="frame-14">
                    <img
                      class="image-3"
                      src="https://c.animaapp.com/mb56iw47WclffO/img/-.svg"
                    />
                    <p class="text-wrapper-15">
                      Я довольна всем <br />и с нетерпением жду продолжения<br />обучения
                      в следующем пакете. Лектору большое<br />спасибо — на
                      стримах всё объясняется чётко <br />и доступно, простым
                      языком.
                    </p>
                  </div>
                  <div class="frame-16">
                    <div class="text-wrapper-16">Елена Балабанова</div>
                  </div>
                </div>
                <div class="element">
                  <div class="frame-14">
                    <img
                      class="image-3"
                      src="https://c.animaapp.com/mb56iw47WclffO/img/-.svg"
                    />
                    <p class="text-wrapper-15">
                      Здравствуйте! Позвольте поделиться своим опытом. Когда я
                      впервые столкнулся <br />с миром криптовалют <br />и
                      трейдинга, мне казалось, что это легкий путь к богатству.
                      Однако, после прохождения курса, я осознал, что успех
                      требует знаний <br />и стратегии. Постепенно я начал
                      понимать, как действовать, <br />и результаты не заставили
                      себя ждать.
                    </p>
                  </div>
                  <div class="frame-15">
                    <div class="text-wrapper-16">Игорь Лебедев</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="frame-wrapper" id="reg">
        <div class="frame-17">
          <div class="frame-18">
            <div class="frame-19">
              <p class="heading-11">
                Положите начало своему пути к финансовой независимости!
              </p>
              <p class="heading-12">Уникальный подход 2025 года</p>
            </div>
            <div class="frame-20">
              <div class="frame-21">
                <div class="text-wrapper-17">23</div>
                <div class="text-wrapper-17">:</div>
                <div class="text-wrapper-18">50</div>
                <div class="text-wrapper-18">:</div>
                <div class="text-wrapper-18">50</div>
              </div>
              <div class="frame-22">
                <div class="text-wrapper-2">Часов</div>
                <div class="div">минут</div>
                <div class="div">секунд</div>
              </div>
            </div>
          </div>
          <form
            class="frame-5 form _main-form contact-form freg thin rounded form_sub-wrap"
            id="main-form"
            method="post"
          >
            <div class="heading-3">Осталось 17 мест</div>
          </form>
        </div>
      </div>
      <div class="footer">
        <div class="frame">
          <div class="fi">
            <div class="layer">
              <div class="overlap-group">
                <img src="./assets/img/icons/logo-f.svg" alt="Logo" />
              </div>
            </div>
          </div>
          <div class="text-wrapper-19">Tradiqon</div>
        </div>
        <p class="link">
          <span class="text-wrapper-20"
            >+79091916981<br />info@Tradiqon.ru</span
          >
        </p>
        <a class="text-wrapper-21" href="./agreement.html" target="_blank"
          >Договор оферты</a
        >
        <a class="text-wrapper-21" href="./policy.html" target="_blank"
          >Политика конфиденциальности</a
        >
        <div class="social-links">
          <img class="img-2" src="./assets/img/icons/inst.svg" />
          <img class="img-2" src="./assets/img/icons/in.svg" />
          <img class="img-2" src="./assets/img/icons/x.svg" />
        </div>
      </div>
    </div>
    <div id="question1" class="modal">
      <div class="modal-content">
        <h2 class="question-header">
          Был ли у вас опыт торговли на финансовых рынках?
        </h2>
        <div class="question-buttons">
          <button class="question-button" type="button">Да</button>
          <button class="question-button" type="button">Нет</button>
        </div>
      </div>
    </div>
    <div id="question2" class="modal hidden">
      <div class="modal-content">
        <h2 class="question-header">
          Готовы ли вы тратить по 1 часу в день на обучение?
        </h2>
        <div class="question-buttons">
          <button class="question-button" type="button">Да</button>
          <button class="question-button" type="button">Нет</button>
        </div>
      </div>
    </div>
    <div id="question3" class="modal hidden">
      <div class="modal-content">
        <h2 class="question-header">Какой финансовый результат вас устроит?</h2>
        <div class="question-buttons vertical">
          <button class="question-button" type="button">10 000₽</button>
          <button class="question-button" type="button">50 000₽</button>
          <button class="question-button" type="button">100 000₽</button>
        </div>
      </div>
    </div>
    <script src="./assets/js/faq.js"></script>
    <script src="./assets/js/timer.js"></script>
    <script src="./assets/js/slider.js"></script>
    <script src="./assets/js/mobmenu.js"></script>
    <script src="./assets/js/modal.js"></script>

    <script src="loadAssets.js?v=67856"></script>

    <script type="application/javascript">
      $(document).on("click", 'a[href^="#"]', function (event) {
        event.preventDefault();

        $("html, body").animate(
          {
            scrollTop: $($.attr(this, "href")).offset().top,
          },
          500
        );
      });

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
          const fileThx = "thanks-page.php";
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
          const fileThx = "thanks-page.php";
          window.location.href = `${fileThx}${window.location.search}`;
        }
      };
    </script>
  </body>
</html>
