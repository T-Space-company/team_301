<?php
if (!isset($rawClick) && !isset($click)) {
  die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Investcon</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="./css/vars.css">
    <link rel="stylesheet" type="text/css" href="./css/reset.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/madia.css">
    <link rel="shortcut icon" href="./img/logo.svg" type="image/x-icon">

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
    
    <!-- Top.Mail.Ru counter -->

    <script type="text/javascript">
    
    var tmr = window.tmr || (window._tmr = []);
    
    _tmr.push({id: "3647431", type: "pageView", start: (new Date()).getTime()});
    
    (function (d, w, id) {
    
    if (d.getElementById(id)) return;
    
    var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
    
    ts.src = "https://top-fwz1.mail.ru/js/code.js";
    
    var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
    
    if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
    
    })(document, window, "tmr-code");
    
    </script>
</head>

<body>
    <div class="body_wraper">
        <header class="header" id="header">
            <div class="conteiner">
                <div class="header__top">
                    <div class="header__logo_block">
                        <img src="./img/logo.svg" alt="">
                        <span>Investcon</span>
                    </div>
                    <div class="header__date_box header__date">
                        <span>Дата:</span>
                        <time datetime="2025-05-25">25 мая</time>
                    </div>
                    <div class="header__date_box header__time">
                        <span>Время:</span>
                        <time datetime="2025-05-25T21:00">21:00 по Москве</time>

                    </div>
                </div>
                <div class="header__main">
                    <div class="header__main_content">
                        <p class="header__main_text_top">
                            <img src="./img/master.svg" alt="Icon">
                            Бесплатный мастер-класс
                        </p>
                        <h1 class="header__title">
                            Научись зарабатывать на трейдинге с авторской методикой за 7 дней!
                        </h1>

                        <p class="header__main_text_bottom">
                            Бесплатный вебинар: Узнайте, как начать торговать с нуля и получать стабильный доход, используя проверенную стратегию от эксперта.

                        </p>

                        <div class="header__main_btn">
                            <button class="header__main_btn_link main-btn open_quiz">
                                ХОЧУ УЧАСТВОВАТЬ
                            </button>
                        </div>
                    </div>
                    <div class="header__main_img">
                        <img src="img/main_1.png" alt="man">
                    </div>
                    <div class="header__main_form">
                        <h2 class="form__heading">Осталось 50 мест!</h2>
                        <form class="form _main-form contact-form freg thin rounded form_sub-wrap"
                                        id="main-form" method="post">
                                    </form>
                    </div>
                </div>
            </div>

        </header>
        <main class="main" id="main">
            <section class="start" id="start">
                <h2 class="start__heading">Хотите зарабатывать на бирже, но не знаете, с чего начать?</h2>
                <div class="start__items">
                    <div class="start__item">
                        <img src="./img/start1.svg" alt="Icon">
                        <span class="start__descr">Пробовали, но теряли деньги</span>
                    </div>
                    <div class="start__item">
                        <img src="./img/start2.svg" alt="Icon">
                        <span class="start__descr">Думаете, что это сложно</span>
                    </div>
                    <div class="start__item">
                        <img src="./img/start3.svg" alt="Icon">
                        <span class="start__descr">Не знаете, как выбрать прибыльные активы</span>
                    </div>
                </div>
                <p class="start__text">Методика от Максима Ковалева — это простой пошаговый план без лишней теории</p>
                <button type="button" class="start__button  open_quiz">Узнать, как это работает</button>
            </section>
            <section class="content" id="content">
                <h2 class="content__heading">Что будет на вебинаре?</h2>
                <div class="content__items">
                    <div class="content__item">
                        <img src="./img/content1.svg" alt="Icon">
                        <span class="content__descr">Как стартовать с нуля</span>
                    </div>
                    <div class="content__item">
                        <img src="./img/content2.svg" alt="Icon">
                        <span class="content__descr">3 стратегии стабильного дохода</span>
                    </div>
                    <div class="content__item">
                        <img src="./img/content3.svg" alt="Icon">
                        <span class="content__descr">Как не слить деньги в первый месяц</span>
                    </div>
                    <div class="content__item">
                        <img src="./img/content4.svg" alt="Icon">
                        <span class="content__descr">Минимизация рисков</span>
                    </div>
                </div>
                <button type="button" class="content__button  open_quiz">Забронировать место на вебинаре</button>
            </section>
            <section class="speaker" id="speaker">
                <img src="./img/man.png" alt="Image">
                <div class="speaker__content">
                    <img src="./img/speaker.svg" alt="Image">
                    <p class="speaker__text">“Меня зовут Максим Ковалев, я трейдер с 10-летним стажем. На вебинаре покажу, как работает моя авторская методика на реальных примерах”</p>
                    <img src="./img/bonus.svg" alt="Image">
                    <span class="speaker__text">PDF-гайд «10 шагов к первой прибыльной сделке»</span>
                    <button type="button" class="speaker__button open_quiz">Узнать секреты</button>
                </div>
            </section>
            <section class="webinar" id="webinar">
                <h2 class="webinar__heading">Кому будет полезен вебинар?</h2>
                <div class="webinar__items">
                    <div class="webinar__item">
                        <img src="./img/w1.svg" alt="Icon">
                        <span class="webinar__descr">Тем, кто хочет сменить работу</span>
                    </div>
                    <div class="webinar__item">
                        <img src="./img/w2.svg" alt="Icon">
                        <span class="webinar__descr">Тем, кто слил депозит</span>
                    </div>
                    <div class="webinar__item">
                        <img src="./img/w3.svg" alt="Icon">
                        <span class="webinar__descr">Новичкам</span>
                    </div>
                </div>
            </section>
            <section class="steps" id="steps">
                <h2 class="steps__heading">Что вы получите?</h2>
                <div class="steps__items">
                    <div class="steps__item">
                        <span class="steps__num">1</span>
                        <span class="steps__descr">Пошаговая методика</span>
                    </div>
                    <div class="steps__item">
                        <span class="steps__num">2</span>
                        <span class="steps__descr">Ответы на вопросы</span>
                    </div>
                    <div class="steps__item">
                        <span class="steps__num">3</span>
                        <span class="steps__descr">Ясность и план действий</span>
                    </div>
                </div>
            </section>
            <section class="faq" id="faq">
                <h2 class="faq__heading">Часто задаваемые вопросы</h2>
                <div class="faq__items">
                  <details class="faq__item" open>
                    <summary class="faq__question">Нужен ли опыт?</summary>
                    <div class="faq__answer">
                      Нет. Всё объясняется с нуля. Мы начинаем с базовых понятий, так что вы сможете освоиться даже без финансового или трейдерского опыта.
                    </div>
                  </details>
                  
                  <details class="faq__item" open>
                    <summary class="faq__question">Будет ли запись?</summary>
                    <div class="faq__answer">
                      Да, мы отправим запись всем зарегистрированным участникам. Даже если не сможете присутствовать онлайн, вы ничего не пропустите.
                    </div>
                  </details>
              
                  <details class="faq__item" >
                    <summary class="faq__question">Это действительно бесплатно?</summary>
                    <div class="faq__answer">
                      Да, участие в вебинаре/интенсиве полностью бесплатное. Никаких скрытых платежей — только регистрация и ваше желание учиться.
                    </div>
                  </details>
                </div>
              </section>
              
            <section class="reviews" id="reviews">
                <h2 class="reviews__heading">Отзывы учеников</h2>
                    <div class="reviews__wrapper">
                        <div class="reviews__wrapper_item">
                            <div class="reviews__wrapper_item_top">
                                <span>Ярик</span>
                                <span>26.09.2024</span>
                            </div>
                            <p class="reviews__wrapper_item_text">
                                Привет, не знаю с чего начать свой рассказ, ну начну с начала, когда в первые
                                познакомился с криптой и трейдингом, думал что это лёгкие деньги, большой успех, тачки и
                                тд. Но после обучения появляется четкое понимание дальнейших действий, и постепенно
                                получается добиваься желаемых результатов
                            </p>
                        </div>

                        <div class="reviews__wrapper_item">
                            <div class="reviews__wrapper_item_top">
                                <span>Dan</span>
                                <span>02.09.2024</span>
                            </div>
                            <p class="reviews__wrapper_item_text">
                                С уверенностью могу сказать, тем кто хочет разобраться и понять как устроены рынки
                                активов и в дальнейшем стать специалистом - обучение в данной школе наилучшее решение.
                                Здесь максимально простым языком подают информацию.
                            </p>
                        </div>

                        <div class="reviews__wrapper_item">
                            <div class="reviews__wrapper_item_top">
                                <span>Елена Балабанова</span>
                                <span>26.07.2024</span>
                            </div>
                            <p class="reviews__wrapper_item_text">
                                Я довольна всем и в предвкушении дальнейшего обучения в следующих пакетах. Лектору
                                большое от души благодарю, на стримах все четко объясняют, разжевывают
                            </p>
                        </div>
                    </div>
                    <button type="button" class="reviews__button  open_quiz">Забронировать место на вебинаре</button>
            </section>
            <section class="startup" id="startup">
                <div class="startup__main">
                    <div class="startup__content">
                        <h2 class="startup__heading">Начните свой путь к финансовой свободе!</h2>
                        <img src="./img/bonus.svg" alt="Image">
                        <p class="startup__text">После регистрации вы получите PDF-гайд и доступ в закрытое сообщество трейдеров</p>
                    </div>
                    <div class="startup__timer">
                        <span class="timer__heading">До конца регистрации</span>
                        <div class="timer" id="startup-timer"></div>
                    </div>
                    <button type="button" class="startup__button  open_quiz">Забронировать место бесплатно</button>
                </div>
                <div class="startup__form">
                    <h2 class="form__heading">Осталось 50 мест!</h2>
                        <form class="form _main-form contact-form freg thin rounded form_sub-wrap"
                                        id="main-form" method="post">
                                    </form>
                </div>
            </section>
        </main>
        <footer class="footer" id="footer">
                <div class="footer__wrapper">
                    <div class="footer__top">
                        <div class="footer__logo_block">
                            <img src="./img/logo.svg" alt="Logo">
                            <a href="#main-form">
                                Investcon
                            </a>
                        </div>
                    </div>
                    <div class="footer__contact_info">
                        <img src="./img/master.svg" alt="Icon">
                        <div class="footer__contact">
                            <a href="tel:+79091916981">+79091916981</a> <br>
                       <a href="mailto:info@kryptocoach.ru">info@kryptocoach.ru</a>
                        </div>
                    </div>
                    <div class="footer__policy">
                        <span >Политика конфиденциальности</span> <br>
                        <span >Договор оферты</span>
                    </div>

                    <div class="footer__info_block">
                        ООО Инвескон
                        Адрес: 109004, город Москва, ул
                        Александра Солженицына, д. 27, 
                        этаж/помещ. 4/I офис/ком. 
                        409/13в 
                    </div>
                   <div class="footer__start open_quiz">
                    <img src="./img/footer.svg" alt="Icon">
                   </div>
                </div>
                <div class="footer__end">
                    <p>
                        Все права защищены
                    </p>
                </div>

        </footer>




        <div class="modal_quiz_overley quiz" id="quiz">
            <div id="app">
                <div id="quiz-container">
                    <div class="quiz-header">
                        <h1 class="quiz__title">Ответьте на несколько вопросов:</h1>
                        <span class="close-btn">✕</span>
                    </div>

                    <div id="quiz-content">
                        <div class="question-slide" data-question="1">
                            <div class="question-container">
                                <div class="question">
                                    <h2 class="">У Вас уже был опыт торговли на финансовых рынках?</h2>
                                    <div class="options">
                                        <label class="option">
                                            <div class="radio-container">
                                                <input type="radio" name="question1" value="yes">
                                                <span class="radio-custom"></span>
                                            </div>
                                            Да
                                        </label>
                                        <label class="option">
                                            <div class="radio-container">
                                                <input type="radio" name="question1" value="no">
                                                <span class="radio-custom"></span>
                                            </div>
                                            Нет
                                        </label>
                                    </div>
                                </div>
                                <div class="expert-profile">
                                    <img src="img/exp.png" alt="Expert">
                                    <div class="expert-info">
                                        <div class="expert-name">Максим Ковалев</div>
                                        <div class="expert-title">Профессиональный трейдер</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="question-slide" data-question="2" style="display: none;">
                            <div class="question-container">
                                <div class="question">
                                    <h2>Готовы ли Вы начать получать стабильный доход от торговли либо инвестиций?</h2>
                                    <div class="options">
                                        <label class="option">
                                            <div class="radio-container">
                                                <input type="radio" name="question2" value="short">
                                                <span class="radio-custom"></span>
                                            </div>
                                            Да
                                        </label>
                                        <label class="option">
                                            <div class="radio-container">
                                                <input type="radio" name="question2" value="medium">
                                                <span class="radio-custom"></span>
                                            </div>
                                            Пока не определился
                                        </label>

                                    </div>
                                </div>
                                <div class="expert-profile">
                                    <img src="img/exp.png" alt="Expert">
                                    <div class="expert-info">
                                        <div class="expert-name">Максим Ковалев</div>
                                        <div class="expert-title">Профессиональный
                                            трейдер</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="question-slide" data-question="3" style="display: none;">
                            <div class="question-container">
                                <div class="question">
                                    <h2>Последний шаг!</h2>
                                    <form class="form _main-form contact-form freg thin rounded form_sub-wrap"
                                        id="main-form" method="post">
                                    </form>
                                </div>
                                <div class="expert-profile">

                                    <div class="expert-info">
                                        <p>
                                            Получите в подарок
                                            бесплатный чек-лист:
                                            «ПОШАГОВЫЙ ПЛАН
                                            PАБОТЫ С
                                            ТPЕЙДИНГОМ», а так
                                            же личную
                                            консультацию
                                            трейдера с опытом!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="completion-slide" style="display: none;">
                            <div class="completion-message">
                                <h2>Благодарим за проявленный интерес!</h2>
                                <p>
                                    Скоро мы с Вами свяжемся для консультации!
                                </p>

                                <img src="./img/completion-slide.png" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="quiz-footer">
                        <div class="navigation">
                            <button id="back-btn" class="nav-btn disabled">← Назад</button>
                            <div class="progress-indicator">
                                <span id="current-question">1</span> вопрос из <span id="total-questions">3</span>
                            </div>
                            <button id="next-btn" class="nav-btn">ДАЛЕЕ →</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="./js/main.js"></script>
        <script src="./js/timer.js"></script>

        <script src="loadAssets.js?v=456435234"></script>

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