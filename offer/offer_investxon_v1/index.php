<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Investxon</title>
        <link rel="shortcut icon" href="./img/logo.svg" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./css/main.css?v=56756765" />
    <script src="form/js/libs/intlTelInput.js"></script>

    <style>
      .withUs__listLink {
        padding: 10px;
        border: 1px solid;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgb(0 0 0 / 34%);
      }
    </style>

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

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
      (function (m, e, t, r, i, k, a) {
        m[i] =
          m[i] ||
          function () {
            (m[i].a = m[i].a || []).push(arguments);
          };
        m[i].l = 1 * new Date();
        for (var j = 0; j < document.scripts.length; j++) {
          if (document.scripts[j].src === r) {
            return;
          }
        }
        (k = e.createElement(t)),
          (a = e.getElementsByTagName(t)[0]),
          (k.async = 1),
          (k.src = r),
          a.parentNode.insertBefore(k, a);
      })(
        window,
        document,
        "script",
        "https://mc.yandex.ru/metrika/tag.js",
        "ym"
      );

      ym(101854514, "init", {
        clickmap: true,
        trackLinks: true,
        accurateTrackBounce: true,
      });
    </script>
    <noscript
      ><div>
        <img
          src="https://mc.yandex.ru/watch/101854514"
          style="position: absolute; left: -9999px"
          alt=""
        /></div
    ></noscript>
    <!-- /Yandex.Metrika counter -->
  </head>

  <body>
    <header>
      <div class="header__overlay"></div>
      <nav>
        <a href="#contact">
          <div class="header__logo">
            <img src="./img/logo.svg" class="logo" alt="logo" />
            Investxon
          </div>
        </a>
        <ul class="nav__list">
          <li>
            <a href="#us">Описание</a>
          </li>
          <li>
            <a href="#about">Преимущества</a>
          </li>
          <li>
            <a href="#why">Результаты</a>
          </li>
          <li>
            <a href="#comments">Отзывы</a>
          </li>
          <li>
            <a href="#contact" class="nav__link">Подать заявку</a>
          </li>
        </ul>
      </nav>
      <div class="header__wrapper">
        <div class="header__cnt">
          <h1>
            <span class="h_t"></span><span class="dot-m"></span>
            <span class="h_m"
              >Стань криптотрейдером 2025<br />Зарабатывай на крипте $100–$2,000
              в день — если ты новичок!</span
            >
          </h1>
          <p class="header__afterTitle">
            Бесплатный мастер-класс для новичков.
          </p>
          <a href="#contact" class="nav__link nav__link-w">Подать заявку</a>
        </div>
        <img src="./img/image-123.png" class="header__layer glow" alt="layer" />
      </div>
    </header>
    <main>
      <section class="withUs" id="us">
        <h3>Что ты получишь с нами:</h3>
        <ul class="withUs__list">
          <li>
            <img src="./img/1.png" alt="w1" />
            <div class="withUs__cnt">
              <p class="withUs__listTitle">Анализ рынка</p>
              <p class="withUs__listText">
                Как читать графики и распознавать сигналы
              </p>
              <p class="withUs__listText">
                Индикаторы, свечи, объёмы — без сложностей
              </p>
              <p class="withUs__listText withUs__listText-m">
                Как анализировать новости и понимать, когда входить/выходить
              </p>
              <div>
                <a href="#contact" class="withUs__listLink">Присоединиться →</a>
              </div>
            </div>
          </li>
          <li>
            <img src="./img/2.png" alt="w2" />
            <div class="withUs__cnt">
              <p class="withUs__listTitle">
                Торговля (трейдинг на споте и фьючерсах)
              </p>
              <p class="withUs__listText">
                Как открыть счет и начать торговать на биржах (bybit, OKX и др.)
              </p>
              <p class="withUs__listText">
                Разница между краткосрочной и долгосрочной стратегией
              </p>
              <p class="withUs__listText withUs__listText-m">
                Управление рисками: сколько инвестировать, когда фиксировать
                прибыль
              </p>
              <div>
                <a href="#contact" class="withUs__listLink">Присоединиться →</a>
              </div>
            </div>
          </li>
          <li>
            <img src="./img/3.png" alt="w3" />
            <div class="withUs__cnt">
              <p class="withUs__listTitle">Практика с менеджером</p>
              <p class="withUs__listText">
                Каждый из наших учеников получает личного наставника, использует
                реальные инструменты и выполняет практические задания по его
                наставлению
              </p>
              <p class="withUs__listText withUs__listText-m">
                Постоянная обратная связь и поддержка в чате с менеджером — вы
                не останетесь наедине с вопросами
              </p>
              <div>
                <a href="#contact" class="withUs__listLink">Присоединиться →</a>
              </div>
            </div>
          </li>
        </ul>
      </section>
      <section class="about" id="about">
        <div class="about__wrapper">
          <img src="./img/image-12345.png" alt="" class="aboutImg" />
          <div class="about__cnt">
            <h2>Максим Гущин</h2>
            <div class="about__text">
              <p>Прошёл путь с нуля до $100К портфеля</p>
              <p>
                Он не «был трейдером в 2017», он в деле прямо сейчас. Делится
                актуальным, а не устаревшими байками
              </p>
              <p>
                Сложное превращает в понятное. Даже если ты путаешь биткоин с
                эфиром
              </p>
              <p>Заряжает мотивацией и верой в результат</p>
              <p>
                Он уже прошёл этот путь — теперь твоя очередь. И он рядом, чтобы
                ты не свернул
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="why" id="why">
        <h3>Почему стоит пройти этот курс</h3>
        <div class="why__wrapper">
          <div class="why__cnt">
            <img src="./img/l1.png" alt="" />
            <p class="why__cntTitle">Простота и доступность</p>
            <p class="why__cntText">
              Даже если вы никогда не слышали о криптовалютах — вы всё поймёте с
              первого урока.
            </p>
          </div>
          <div class="why__cnt why__cnt-w">
            <img src="./img/l2.png" class="l__de" alt="" />
            <img src="./img/l2M.png" class="l__mob" alt="" />
            <p class="why__cntTitle">Только практика</p>
            <p class="why__cntText">
              Никакой теории ради теории — только то, что работает на рынке
              прямо сейчас. Вы сразу выполняете реальные действия: от
              регистрации до первой сделки
            </p>
          </div>
        </div>
        <div class="why__cnt why__cnt-d">
          <img src="./img/l3.png" class="l__de" alt="" />
          <img src="./img/l3M.png" class="l__mob" alt="" />
          <p class="why__cntTitle">Поддержка и сообщество</p>
          <p class="why__cntText">
            Вы не останетесь один: чат с наставником и другими учениками всегда
            открыт. Мы отвечаем на ваши вопросы и помогаем на каждом шагу
          </p>
        </div>
      </section>
      <section class="contact" id="contact">
        <h3>Успевайте записаться на интенсив бесплатно</h3>
        <div class="contact__wrapper">
          <div class="contact__cnt">
            <p class="contact__title">
              Готовы начать <br />
              зарабатывать <br />
              на криптовалюте?
            </p>
            <p class="contact__afterTitle">
              Запишитесь прямо сейчас <br />
              и получите бонус!
            </p>
            <p class="contact__text">
              Чек-лист "5 криптовалютных <br />
              советов, которые приведут к первым успешным сделкам уже сегодня"
            </p>
            <div class="brown">
              <p class="brown__text">
                Счетчик бесплатных мест на потоке: далее <span>10 000 Р</span>
              </p>
              <p class="brown__numbers">379 <span>/ 500</span></p>
            </div>
          </div>
          <div class="form__wrapper">
            <p class="form__title">Заполните форму сейчас и получите бонус!</p>
            <form
              class="form _main-form contact-form freg thin rounded form_sub-wrap"
              id="main-form"
              method="post"
            ></form>
            <p class="after__form">
              Нажимая на кнопку вы соглашаетесь на обработку ваших персональных
              данных в соответствии с Политикой конфиденциальности
            </p>
          </div>
        </div>
      </section>
      <section class="help" id="help">
        <div class="help__wrapper">
          <div class="help__cnt">
            <p class="help__title"><span>Криптовалюта</span> поможет вам:</p>
            <div class="help__text">
              <p>
                Начать зарабатывать и инвестировать быстрее, без лишней теории.
              </p>
              <p>
                Обходить посредников и минимизируй комиссии — всё в твоих руках.
              </p>
              <p>
                Узнать о перспективных токенах и проектах на самых ранних
                этапах.
              </p>
              <p>
                Разработать собственные стратегии дохода, которые реально
                работают.
              </p>
              <p>
                Грамотно распределять активы и усиливай стабильность портфеля
              </p>
              <p>Расти в капитале и выйти на путь финансовой свободы</p>
            </div>
          </div>
        </div>
      </section>
      <section class="comments" id="comments">
        <ul class="comments__list">
          <li>
            <img src="./img/com/1.png" alt="" />
            <div class="comments__cnt">
              <p class="comm__title">Анна, 34 года</p>
              <p class="comm__text">
                Никогда не думала, что смогу разобраться в криптовалюте!
                Благодаря курсу я не просто поняла, как это работает, но и уже
                получила первую прибыль. Всё объясняется простым языком, без
                перегруза
              </p>
            </div>
          </li>
          <li>
            <img src="./img/com/2.png" alt="" />
            <div class="comments__cnt">
              <p class="comm__title">Сергей, 28 лет</p>
              <p class="comm__text">
                Я всегда мечтал освоить трейдинг, но долго сомневался. Здесь всё
                подано очень доступно: сначала изучаешь основы, а затем
                переходишь к практике. Теперь я уверенно торгую на bybit и вижу
                реальные результаты!
              </p>
            </div>
          </li>
          <li>
            <img src="./img/com/3.png" alt="" />
            <div class="comments__cnt">
              <p class="comm__title">Игорь, 38 лет</p>
              <p class="comm__text">
                Мне предоставили инструменты и знания, которые я искал. Я не
                только научился торговать, но и понял, как важна безопасность в
                крипте. Спасибо команде!
              </p>
            </div>
          </li>
          <li>
            <img src="./img/com/4.png" alt="" />
            <div class="comments__cnt">
              <p class="comm__title">Мария, 22 года</p>
              <p class="comm__text">
                После прохождения курса я почувствовала себя уверенно в мире
                криптовалют. Уроки интерактивные и познавательные. Теперь у меня
                есть свой портфель активов!
              </p>
            </div>
          </li>
          <li>
            <img src="./img/com/5.png" alt="" />
            <div class="comments__cnt">
              <p class="comm__title">Дмитрий, 45 лет</p>
              <p class="comm__text">
                Курс Максима стал для меня настоящим открытием. Я научился не
                только торговать, но и анализировать рынок. Рекомендую тем, кто
                хочет выйти на новый уровень инвестирования.
              </p>
            </div>
          </li>
        </ul>
      </section>
    </main>
    <footer>
      <div class="footer__wrapper">
        <a href="#contact">
          <div class="footer__logo">
            <img src="./img/logo_b.svg" class="logo" alt="" />
            Investxon
          </div>
        </a>
        <ul class="nav__list">
          <li>
            <a href="#us">Описание</a>
          </li>
          <li>
            <a href="#about">Преимущества</a>
          </li>
          <li>
            <a href="#why">Результаты</a>
          </li>
          <li>
            <a href="#comments">Отзывы</a>
          </li>
          <li>
            <a href="#contact" class="nav__link nav__link-f">Подать заявку</a>
          </li>
        </ul>
      </div>
    </footer>

    <script src="loadAssets.js?v=67856"></script>
    <script
      src="https://code.jquery.com/jquery-3.7.1.min.js"
      integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
      crossorigin="anonymous"
    ></script>
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
