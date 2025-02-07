<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Как Стать Миллионером</title>
    <link rel="stylesheet" href="./assets/css/styles.css" />
    <link
      rel="shortcut icon"
      href="./assets/img/logo.png"
      type="image/x-icon"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
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
    <div id="thanks-screen" class="quiz-container active">
      <img src="./assets/img/logo.png" alt="Logo" class="quiz-img" />
      <div class="quiz-block">
        <div class="quiz-logos">
          <img src="./assets/img/mf.svg" alt="Logo" class="quiz-logo" />
          <img src="./assets/img/sb.svg" alt="Logo" class="quiz-logo" />
        </div>
        <p class="quiz-heading">Ваша заявка успешно отправлена!</p>
        <p class="quiz-text">
          Ожидайте звонка от нашего менеджера в ближайшее время
        </p>
      </div>
      <div class="testimonials">
        <h2 class="testimonials-heading">Отзывы</h2>
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
                    Проект от Минфина и Сбербанка изменил мою жизнь! Я начал
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
                    сложностей. Проект от Минфина и Сбербанка справился с этим
                    на 100%! Программа сама работает, а я просто наслаждаюсь
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
                    проект от Минфина и Сбербанка реально изменил мою жизнь!
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
                    это лучшее решение! Проект от Минфина и Сбербанка позволил
                    мне начать пассивно зарабатывать, а недавно я даже смогла
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
                    мечту, а теперь проект от Минфина и Сбербанка делает это за
                    меня! Доход приходит сам, а я наконец-то могу позволить себе
                    жить так, как хочу.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        new Splide("#testimonials-slider", {
          type: "slide",
          perPage: 1,
          perMove: 1,
          autoplay: false,
          focus: "center",
          interval: 3000,
          gap: 10,
          pagination: false,
          arrows: true,
          speed: 300,
        }).mount();
      });
    </script>
  </body>
</html>
