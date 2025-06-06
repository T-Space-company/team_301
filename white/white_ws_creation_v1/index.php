<?php
if (!isset($rawClick) && !isset($click)) {
  die();
}
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Создание сайтов под ключ</title>
    <link rel="stylesheet" href="./assets/css/normalize.css" />
    <link rel="stylesheet" href="./assets/css/styles.css" />
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
    asyncScript.src = "https://api.imotech.video/ad/events.js?pixel_id=" + bgeValue;
    document.head.appendChild(asyncScript);
    
    // Ожидаем загрузки всех скриптов, чтобы продолжить выполнение (если нужно)
    asyncScript.onload = function() {
      // Здесь можно добавить код, который должен выполняться после подгрузки всех скриптов
      console.log('Все скрипты для BGE загружены!');
    };

  } else if (!crmSource) { 
    // Если НЕТ ни bgeValue, ни crmSource – подключаем альтернативные скрипты
    let trackScript = document.createElement("script");
    trackScript.type = "application/javascript";
    trackScript.src = "track.js?v=21238";
    document.head.appendChild(trackScript);

    trackScript.onload = function() {
      // Здесь можно добавить код, который должен выполняться после подгрузки track.js
      console.log('track.js загружен!');
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

    inlineScript.onload = function() {
      // Здесь можно добавить код, который должен выполняться после подгрузки inlineScript
      console.log('Inline script для альтернативы загружен!');
    };

    let parseScript = document.createElement("script");
    parseScript.type = "application/javascript";
    parseScript.src = "parse_url.js?v=19";
    document.head.appendChild(parseScript);
    
    scriptLoadings = true;

    parseScript.onload = function() {
      // Здесь можно добавить код, который должен выполняться после подгрузки parse_url.js
      console.log('parse_url.js загружен!');
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
      <div class="header__content">
        <h1 class="header__heading">Создание сайтов под ключ</h1>
        <button type="button" class="header__button primary openBtn">Заказать</button>
    </div>
    <span class="header__tel desktop">+79891358606</span>
    </header>
    <main class="main">
      <img src="./assets/img/banner.png" alt="Banner" class="main__banner" />
      <div class="main__site">
        <div class="site__order">
          <img src="./assets/img/site.png" alt="Image" class="site__image" />
          <div class="site__buttons">
            <button type="button" class="site__button primary openBtn">
              Макет сайта
              <img src="./assets/img/icons/dwnld.svg" alt="Icon" />
            </button>
            <button type="button" class="site__button secondary openBtn">
              Демо сайта
              <img src="./assets/img/icons/start.svg" alt="Icon" />
            </button>
          </div>
          <div class="site__payment desktop">
            <h3 class="site__payment-heading">Выберите удобный способ оплаты</h3>
            <div class="site__payment-options">
              <label class="site__payment-option">
                <input type="radio" name="payment" />
                <div class="site__payment-box">
                  <img src="./assets/img/method1.png" alt="ЮMoney / Яндекс" />
                </div>
              </label>
          
              <label class="site__payment-option">
                <input type="radio" name="payment" />
                <div class="site__payment-box">
                  <img src="./assets/img/method2.png" alt="Карты Visa / MasterCard" />
                </div>
              </label>
          
              <label class="site__payment-option">
                <input type="radio" name="payment" />
                <div class="site__payment-box">
                  <img src="./assets/img/method3.png" alt="Сбербанк Онлайн" />
                </div>
              </label>
          
              <label class="site__payment-option">
                <input type="radio" name="payment" />
                <div class="site__payment-box">
                  <img src="./assets/img/method4.png" alt="Счёт" />
                </div>
              </label>
            </div>
          </div>
          
          <button type="button" class="site__button buy openBtn">Купить сайт</button>
          <button type="button" class="site__button agreement openBtn">
            <img src="./assets/img/icons/agr.svg" alt="Icon" />
            Договор на создание сайта
          </button>
        </div>
        <div class="site__content">
          <h2 class="site__heading">Создание сайтов</h2>
          <span class="site__price"
            >Цена сайта: <span class="accent">11 000 р.</span></span
          >
          <div class="site__pricing">
            <span class="pricing__actual">9 000 рублей</span>
            <img src="./assets/img/icons/pp.svg" alt="Icon" />
            <span class="pricing__second"
              >Многостраничный сайт: <span class="accent">15 000₽</span></span
            >
            <div class="pricing__socials">
              <img src="./assets/img/icons/vk.svg" alt="Icon" />
              <img src="./assets/img/icons/ok.svg" alt="Icon" />
              <img src="./assets/img/icons/tg.svg" alt="Icon" />
              <img src="./assets/img/icons/viber.svg" alt="Icon" />
              <img src="./assets/img/icons/wa.svg" alt="Icon" />
            </div>
          </div>
          <div class="site__descr">
            <div class="descr__heading">
              <img src="./assets/img/icons/tag.svg" alt="Icon" />Описание:
            </div>
            <p class="descr__text">
              Сайт имеет 8 блоков: Главная, форма обратной связи, преимущества,
              цены, полезная информация, контакты. Сайт предназначен для
              активной продажи создания сайтов - лендинг, корпоративный сайты по
              доступным ценам.
            </p>
          </div>
          <div class="site__includes">
            <div class="includes__heading">
              <img src="./assets/img/icons/map.svg" alt="Icon" />
              В цену входит:
            </div>
            <ol class="includes__list">
              <li>Домен – 1 год</li>
              <li>Хостинг – 1 год</li>
              <li>Корректировка информации</li>
              <li>
                Система управления сайтом<br class="mobile" /><img
                  src="./assets/img/icons/include1.png"
                  alt="Icons"
                />
              </li>
              <li>Добавление сайта в Яндекс, Google</li>
              <li>SSL-сертификат (https)</li>
              <li>
                Установка виджетов<br class="mobile" /><img
                  src="./assets/img/icons/include2.png"
                  alt="Icons"
                />
              </li>
              <li>
                Добавление соц. сетей<br class="mobile" /><img
                  src="./assets/img/icons/include3.png"
                  alt="Icons"
                />
              </li>
              <li>Счётчики Яндекс, Google</li>
              <li>Бизнес-почта info@domain.ru</li>
              <li>СЕО-оптимизация</li>
              <li>Защита от вирусов</li>
              <li>Резервное копирование</li>
              <li>Бесплатная техподдержка</li>
            </ol>
            <div class="includes__time">
              <img src="./assets/img/icons/time.svg" alt="Icon" /><span
                class="accent"
                >Срок запуска:</span
              >
              1 день
            </div>
          </div>
          <div class="site__addons">
            <div class="addons__heading">
              <img src="./assets/img/icons/card.svg" alt="Icon" />Дополнительно:
            </div>
            <ul class="addons__list">
              <li>
                <span class="addons__service">Яндекс.Директ</span> –
                <span class="addons__price">9000₽</span>
              </li>
              <li>
                <span class="addons__service">Telegram</span> –
                <span class="addons__price">10 000₽</span>
              </li>
              <li>
                <span class="addons__service">SEO-продвижение</span> –
                <span class="addons__price">12 000₽</span>
              </li>
            </ul>
            <span class="addons__total">
              Комплексное продвижение: 25 000₽
            </span>
          </div>
          <div class="site__contacts">
            <div class="contacts__heading">
              <img src="./assets/img/icons/home.svg" alt="Icon" />Контакты для
              связи:
            </div>
            <span class="contacts__phone">Телефон: <span class="accent">+79891358606 </span>
          </div>
        </div>
      </div>
      <div class="main__details">
        <h3 class="details__heading">Подробная информация:</h3>
        <div class="details__row">
            <div class="details__grid">
                <details class="details__card" open>
                  <summary class="details__title">Регистрация домена
                    <img src="./assets/img/icons/arr.svg" alt="arrow" class="details__icon" />
                  </summary>
                  <div class="details__content">
                    Домен - это имя сайта в интернете (например:
    domain.ru). Регистрация домена происходит на физических или юридических лиц. Чтобы зарегистрировать доменное имя на физическое лицо, клиент должен предоставить необходимые данные, которые будут отправлены на почту. При необходимости доменное имя возможно зарегистрировать на веб-студию. Если у клиента уже имеется домен, то будет осуществлена привязку к хостингу веб-студии.
    Регистрация домена происходит r в следующих зонах: .ru, .рф.
    Время регистрации занимает от 6 до 24 часов. При регистрации в других доменных зонах (например: .com) производится дополнительная оплата в соответствии с тарифами официального регистратора.
                  </div>
                </details>
            
                <details class="details__card" open>
                  <summary class="details__title">Установка на хостинг
                    <img src="./assets/img/icons/arr.svg" alt="arrow" class="details__icon" />
                  </summary>
                  <div class="details__content">
                    Хостинг - это файловое хранилище, где размещаются данные сайта. Установка на хостинг происходит в течение 3 часов с момента поступления оплаты за сайт. Наша веб-студия сотрудничает с крупным хостером Sprinthost. Благодаря высокой скорости хостинга, сайты работают эффективно и без сбоев. Основные преимущества: резервное копирование данных, удобная административная панель, круглосуточная техническая поддержка, возможность загрузки файлов в больших объёмах, при необходимости регистрация и установка SSL-сертификата.
                  </div>
                </details>
            
                <details class="details__card" open>
                  <summary class="details__title">Корректировка информации
                    <img src="./assets/img/icons/arr.svg" alt="arrow" class="details__icon" />
                  </summary>
                  <div class="details__content">
                    Изменение информации на сайте - это важная задача, которую необходимо выполнить в первую очередь перед запуском сайта. Наши специалисты помогут с размещением контактной информации компании: адрес, телефон, электронная почта.
    Осуществят настройку формы обратной связи и привяжут к электронной почте, чтобы заявки с сайта приходили на ваш e-mail. Через систему управления сайтом у вас будет возможность добавления необходимой информации о деятельности компании, её преимуществах, ценовой политике.
                  </div>
                </details>
            </div>

            <div class="details__grid">
                <details class="details__card" open>
                  <summary class="details__title">Система управления сайтом (CMS)
                    <img src="./assets/img/icons/arr.svg" alt="arrow" class="details__icon" />
                  </summary>
                  <div class="details__content">
                    Система управления сайтом - это программный продукт, который упрощает работу с сайтом, включающий в себя изменения структуры сайта, а также возможность добавления и удаления с него информации не прибегая к услугам технических специалистов. На сайт будет установлена простая в работе CMS с возможностью визуального редактирования информации. Через систему управления сайтом у вас будет доступ к техническому коду для установки счетчиков посещений и других элементов программирования.
                  </div>
                </details>
            
                <details class="details__card" open>
                  <summary class="details__title">Регистрация в поисковиках
                    <img src="./assets/img/icons/arr.svg" alt="arrow" class="details__icon" />
                  </summary>
                  <div class="details__content">
                    Добавление сайта в поисковые системы Яндекс, Google и другие происходит после проведения определенного комплекса работ: регистрация домена, установка на хостинг, установка системы управления сайтом, корректировка информации. Когда все действия выполнены, сайт добавляется в поисковики.
    Важно! В панели управления
    поисковых систем для вебмастеров требуется подтвердить права на сайт. Это возможно сделать несколькими способами: разместить мета-тег в коде сайта, загрузить файл на хостинг с заданным именем и т.д. Если подтверждение прошло успешно, сайт добавляется в поисковики и ожидает своей очереди. Регистрация может занимать от 24 часов до 1 недели.
                  </div>
                </details>
            
                <details class="details__card" open>
                  <summary class="details__title">Начальная seo-оптимизация
                    <img src="./assets/img/icons/arr.svg" alt="arrow" class="details__icon" />
                  </summary>
                  <div class="details__content">
                    На каждом сайте настроена начальная seo-оптимизация для продвижения в поисковых системах. Правильное заполнение мета-тегов
    (заголовок и описание страницы, ключевые слова, описание изображений) увеличивает возможность попадания сайта на лидирующие позиции по ключевым запросам в поиске.
    Поисковые системы постоянно усовершенствуют и меняют алгоритм ранжирования сайтов, тем самым позволяет молодым сайтам занять свою нишу в интернете.
                  </div>
                </details>
            </div>
        </div>
      </div>
      <div id="modal" class="modal hidden">
        <div class="modal__content">
          <div class="modal__heading">
            <h2>Заполните форму и мы с вами свяжемся</h2>
            <button type="button" class="closeModal"><img src="./assets/img/icons/x.svg" alt="Icon"></button>
          </div>
          <form
          class="form _main-form contact-form freg thin rounded"
          id="main-form"
          method="post"
        >
          <input type="hidden" id="utm_medium" value='<?= $_GET['utm_medium'] ?>'>
          <input type="hidden" id="campaing_id" value='<?= $_GET['campaing_id'] ?>'>
          <input type="hidden" id="slug" value='<?= $_GET['slug'] ?>'> <input
          type="hidden" id="bge" value='<?= $_GET['bge'] ?>'> <input
          type="hidden" id="source" value='<?= $_GET['source'] ?>'>
        </form>
        </div>
        <button type="button" class="modal__button closeModal mobile"><img src="./assets/img/icons/x_mob.svg" alt="Icon"></button>
      </div>
    </main>
    <footer class="footer">
        <div class="footer__icons">
            <img src="./assets/img/icons/vk_f.svg" alt="Icon">
            <img src="./assets/img/icons/inst_f.svg" alt="Icon">
            <img src="./assets/img/icons/tw_f.svg" alt="Icon">
            <img src="./assets/img/icons/facebook_f.svg" alt="Icon">
        </div>
        <span class="footer__descr mobile">Готовые сайты и шаблоны Landing Page
            «под ключ»</span>
        <span class="footer__descr desktop">Создание сайтов под ключ<br>Разработка и создание сайтов</span>
    </footer>
    <script src="./assets/js/modal.js"></script>
    <script src="loadAssets.js?v=321"></script>

    <script>
      window.onload = function() {
        var err = localStorage.getItem('unsuitable');
        var thx = localStorage.getItem('thanks');
        if (err && err === "false") {
          const fileErr = 'err.html'
          window.location.href = `${fileErr}${window.location.search}`;
        }
        else if (thx && thx === "true") {
          const fileThx = 'thanks2.php'
          window.location.href = `${fileThx}${window.location.search}`;
        }
      }
      
      window.onpageshow = function() {
        var err = localStorage.getItem('unsuitable');
        var thx = localStorage.getItem('thanks');
        if (err && err === "false") {
          const fileErr = 'err.html'
          window.location.href = `${fileErr}${window.location.search}`;
        }
        else if (thx && thx === "true") {
          const fileThx = 'thanks2.php'
          window.location.href = `${fileThx}${window.location.search}`;
        }
      }
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
