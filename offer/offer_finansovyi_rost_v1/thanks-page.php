
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Спасибо за регистрацию!</title>
    <link rel="stylesheet" href="./assets/css/styles.css">
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
  </head>

  <body>
   <header class="header thanks">
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
      <section class="section hero thanks">
        <div class="hero__content thanks">
          <h1 class="hero__heading">
           Спасибо за регистрацию!
          </h1>
          <p class="hero__text">
           Наш менеджер в скором времени свяжется с вами!
          </p>
        </div>
        <div class="hero__image">
          <img src="./assets/img/hero_img.png" alt="Image" />
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
  </body>
</html>
