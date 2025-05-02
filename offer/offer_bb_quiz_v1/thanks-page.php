<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Спасибо за регистрацию!</title>
    <link rel="stylesheet" href="./assets/css/normalize.css" />
    <link rel="stylesheet" href="./assets/css/styles.css" />
    <link rel="stylesheet" href="./assets/css/calc.css">
    <link rel="shortcut icon" href="./assets/img/fav.svg" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <header class="header">
      <img src="./assets/img/logo.png" alt="Logo" />
    </header>
    <main class="main thanks">
      <div class="screen main__thanks">
        <div class="modal__content thanks">
          <div class="thanks__heading-wrapper">
            <h2 class="thanks__heading">Спасибо за регистрацию!</h2>
            <span class="thanks__text">Ожидайте звонка в ближайшее время</span>
            <span class="thanks__text accent"
              >Не пропустите звонок - без подтверждения бонус аннулируется</span
            >
          </div>
          <div class="thanks__code">
            <span class="code__text">Ваш код для бонуса в 50USD₮</span>
            <span class="code__num">1Ah320</span>
          </div>
        </div>
        <span class="thanks__guarantee"
          >Мы гарантируем безопасность и сохранность Ваших данных</span
        >
        <div class="calculator__wrapper">
          <h2 class="calculator__heading">Расчитайте свою прибыль</h2>
          <div class="calculator">
      <div class="section">
        <div class="label">Сумма инвестиций</div>
        <div class="value" id="investmentValue">300 000 ₽</div>
        <input type="range" id="investmentRange" min="12000" max="500000" value="300000" step="1000" />
        <div class="range-labels">
          <span>12 000</span>
          <span>500 000</span>
        </div>
      </div>
  
      <div class="section">
        <div class="label">Срок</div>
        <div class="value" id="durationValue">3 месяца</div>
        <input type="range" id="durationRange" min="1" max="6" value="3" step="1" />
        <div class="range-labels">
          <span>Месяц</span>
          <span>6 месяцев</span>
        </div>
      </div>
  
      <div class="result">
        <div class="result-title">ПРИБЫЛЬ</div>
        <div class="result-value" id="profitValue">927 000 ₽</div>
      </div>
    </div>
        </div>
        <div class="main-thankyou__testimonials">
                    <h2 class="testimonials__heading">Никогда не останавливайтесь, будьте с Bybit</h2>
          <div class="testimonials__stats">
          <div class="stats-block">
  <div class="stat-item large">
    <div class="stat-value">$25,902,976,513</div>
    <div class="stat-label">Торговый объём, 24Ч (USD)</div>
  </div>
  <div class="stats-row">
    <div class="stat-item">
      <div class="stat-value">69M+</div>
      <div class="stat-label">Зарегистрированных пользователей</div>
    </div>
    <div class="divider"></div>
    <div class="stat-item">
      <div class="stat-value">160</div>
      <div class="stat-label">Поддерживаемые страны/регионы</div>
    </div>
  </div>
  <div class="stat-item">
    <div class="stat-value">1889</div>
    <div class="stat-label">Токенов в листинге</div>
  </div>
</div>

        </div>
        <div class="testimonials__features">
          <div class="feature">
    <div class="icon"><svg viewBox="0 0 40 41" fill="#121214" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M9.69583 31.1704H4.19167C3.53333 31.1704 3 30.6371 3 29.9788V17.7663C3 17.1079 3.53333 16.5746 4.19167 16.5746H8.125C8.12312 16.1182 8.12209 15.9445 8.12152 15.8915C8.29574 4.53283 19.6833 4.49128 19.6833 4.49128C19.7708 4.48712 19.9833 4.48712 20.075 4.49128C20.075 4.49128 31.481 4.52874 31.6372 15.9191C31.6363 15.8559 31.6333 15.7302 31.6333 16.5746H35.5667C36.225 16.5746 36.7583 17.1079 36.7583 17.7663V29.9829C36.7583 30.6413 36.225 31.1746 35.5667 31.1746H30.0667C30.0042 31.1746 29.9417 31.1663 29.8792 31.1538H28.8663V28.1356C28.8693 28.1256 28.8708 28.1204 28.8708 28.1204L28.8625 15.9454C28.7833 11.0371 24.7958 7.29128 19.8792 7.26628C14.9625 7.29128 10.975 11.0371 10.9 15.9454L10.8875 29.9788C10.8875 30.6371 10.3542 31.1704 9.69583 31.1704ZM31.8708 19.3329C31.6042 19.3329 31.3875 19.6621 31.3875 20.0663V27.5871C31.3875 27.9913 31.6042 28.3204 31.8708 28.3204H33.9042C34.1708 28.3204 34.3875 27.9954 34.3875 27.5871V20.0663C34.3875 19.6621 34.1708 19.3329 33.9042 19.3329H31.8708ZM5.85417 19.3329C5.5875 19.3329 5.37083 19.6621 5.37083 20.0663V27.5871C5.37083 27.9913 5.5875 28.3204 5.85417 28.3204H7.88333C8.15 28.3204 8.37083 27.9954 8.37083 27.5871V20.0663C8.37083 19.6621 8.15 19.3329 7.88333 19.3329H5.85417Z" fill="var(--cht-gray-t1-title)"></path><path d="M8.12083 15.9413C8.12083 15.9413 8.12083 15.8269 8.12152 15.8915C8.12127 15.9081 8.12104 15.9247 8.12083 15.9413Z" fill="var(--cht-gray-t1-title)"></path><path d="M23.6354 32.8239C27.2979 33.4406 28.8354 28.1323 28.8354 28.1323C29.3923 28.1323 29.8438 28.5837 29.8438 29.1406V31.1656C29.8438 31.1656 28.2604 34.1531 24.6479 35.4448C24.1812 35.5448 23.7062 35.5031 23.6479 35.5364C23.2979 36.4239 22.4396 37.0573 21.4312 37.0573H17.8813C16.5646 37.0573 15.4979 35.9906 15.4979 34.6739V33.9281C15.4979 32.6114 16.5646 31.5448 17.8813 31.5448H21.7396C22.3729 31.5448 23.3562 31.8948 23.6354 32.8239Z" fill="#F7A600"></path></svg></div>
    <div class="text">
      <h3>Поддержка 24/7 | Сверхбыстрый торговый движок</h3>
    </div>
  </div>

  <div class="feature">
    <div class="icon"><svg viewBox="0 0 40 41" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20.0006 33.1465H15.0006H9.14341C7.24987 33.1465 5.71484 31.6114 5.71484 29.7179V9.43217C5.71484 7.53862 7.24987 6.0036 9.14342 6.0036H30.8577C32.7512 6.0036 34.2863 7.53862 34.2863 9.43217V17.4322" stroke="#121214" stroke-width="2.8" stroke-linecap="round"></path><circle cx="30.7137" cy="28.1467" r="6.42857" stroke="#F7A600" stroke-width="2.8"></circle><path d="M28.666 26.2902V28.1473C28.666 29.0941 29.4335 29.8616 30.3803 29.8616H32.2374" stroke="#F7A600" stroke-width="2.4" stroke-linecap="round"></path><path d="M10.7148 21.718L14.2863 17.4323L19.6604 21.718L27.1434 13.1465" stroke="#121214" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"></path></svg></div>
    <div class="text">
      <h3>Ведущие торговые продукты с превосходной ликвидностью на нашем Едином торговом аккаунте</h3>
      <p>Бессрочные, фьючерсные контракты, опционы, маржинальная торговля, спот</p>
    </div>
  </div>

  <div class="feature">
    <div class="icon"><svg viewBox="0 0 40 41" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14.5 22.2897L14.5 34.2897" stroke="#F7A600" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path><path d="M23.5 8.78943L23.5 34.2894" stroke="#F7A600" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path><path d="M32.5 16.2894L32.5 34.2894" stroke="#F7A600" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path><path d="M37 34.2894H7V7.28943" stroke="#121214" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path></svg></div>
    <div class="text">
      <h3>Удобные торговые инструменты для трейдинга профессионального уровня</h3>
      <p>Earn, копитрейдинг и торговые боты</p>
    </div>
  </div>

  <div class="feature">
    <div class="icon"><svg viewBox="0 0 40 41" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.6457 37.1304L16.7609 32.539H8.18041V24.9944C6.4422 24.9365 3.42639 24.5113 3.33666 22.6795C3.24694 20.8477 5.43291 18.641 6.77864 17.8409C7.11505 12.1728 11.46 1.04056 24.3308 4.61513C29.2071 5.96942 31.7137 8.77506 32.7522 12.0063" stroke="#121214" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path><path d="M18.4023 13.7752H26.3363L31.3014 19.0203H36.6664" stroke="#F7A600" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path><path d="M20.832 27.2932H27.2899L30.7815 23.9842H36.3667" stroke="#F7A600" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path><line x1="17.5879" y1="20.3209" x2="24.3863" y2="20.383" stroke="#F7A600" stroke-width="3" stroke-linecap="round"></line></svg></div>
    <div class="text">
      <h3>Ещё больше крипто возможностей с миром Web3 и криптовалютными платежами</h3>
      <p>Bybit NFT, Bybit Wallet, карта Bybit</p>
    </div>
  </div>

  <div class="feature">
    <div class="icon"><svg viewBox="0 0 40 41" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_11762_6074)"><path d="M24.4643 10.2894H15.5357L13.75 5.60193L17.7679 7.00818L20 2.78943L22.2321 7.00818L26.25 5.60193L24.4643 10.2894Z" fill="#F7A600"></path><path d="M36.7998 22.3578L20.6451 35.9949C20.2725 36.3094 19.7275 36.3094 19.3549 35.9949L3.20018 22.3578C2.80398 22.0233 2.72913 21.4415 3.02776 21.0177L9.40712 11.9635C9.59444 11.6976 9.89936 11.5394 10.2246 11.5394H29.7754C30.1006 11.5394 30.4056 11.6976 30.5929 11.9635L36.9722 21.0177C37.2709 21.4415 37.196 22.0233 36.7998 22.3578Z" stroke="#121214" stroke-width="3" stroke-linecap="round"></path><path d="M13.75 17.7894L19.152 26.4326C19.5437 27.0593 20.4563 27.0593 20.848 26.4326L26.25 17.7894" stroke="#F7A600" stroke-width="3" stroke-linecap="round"></path></g><defs><clipPath id="clip0_11762_6074"><rect y="0.289429" width="40" height="40" rx="16" fill="white"></rect></clipPath></defs></svg></div>
    <div class="text">
      <h3>Bybit VIP | Особые криптопривилегии</h3>
      <p>Скидки на комиссии, сниженные процентные ставки и эксклюзивная APR</p>
    </div>
  </div>
        </div>
      </div>
    </main>
    <script src="./assets/js/calc.js"></script>
  </body>
</html>
