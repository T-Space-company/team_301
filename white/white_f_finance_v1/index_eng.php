<!DOCTYPE html>
<html lang="en">
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
              <a href="">Services</a>
            </li>
            <li class="header_menu-list"><a href="https://freedom24.com/anketa/price">Service Plans</a></li>
            <li class="header_menu-list"><a href="https://freedom24.com/about">About Us</a></li>
          </ul>
        </div>
        <div class="header__right">
          <div class="header__buttons">
            <!-- <button type="button" class="button--secondary">
              <a href="">Sign In</a>
            </button> -->
            <button type="button" class="button--primary">
              <a href="#form">Sign Up</a>
            </button>
          </div>
          <button class="header_button-lang"><a href="./index.php">ENG</a></button>
          <!-- <img src="./img/icons/menu.svg" alt="Menu" /> -->
        </div>
      </div>
    </header>
    <main class="main">
      <section class="section hero">
        <div class="hero__wrapper">
          <div class="hero__left">
            <h1>
              Investments <br />
              for everyone
            </h1>
            <div class="hero__text">
              <span>Invest in stocks and ETFs.</span>
              <span
                >Invest in securities from the biggest stock exchanges and
boost your savings with the D-account.</span
              >
              <span>Hedge your positions with options.</span>
            </div>
            <button class="button--primary hero__btn">
              <a href="#form">Sign Up</a>
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
            <h2>Fast and easy</h2>
            <p>
              Open an investment account in 10 minutes. Top up by bank
transfer without commission or by instant bank card transfer.
            </p>
          </div>
        </div>
      </section>
      <section class="section third">
        <div class="third__wrapper">
          <div class="third__content">
            <h2>1,000,000 instruments</h2>
            <p>
              Invest in stocks, ETFs, bonds, futures and stock options on
major US, European and Asian stock exchanges.
            </p>
            <button class="button--primary third__btn">
              <a href="#form">More</a>
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
            <h2>Become an affiliate of <br />Freedom24</h2>
            <p class="fourth__text">
              Invite your friends or subscribers and increase your portfolio
value.
            </p>
            <button class="button--primary fourth__btn">
              <a href="#form">More</a>
            </button>
          </div>
        </div>
      </section>
      <section class="section fifth">
        <div class="fifth__wrapper">
          <div class="fifth__content">
            <h2>
              Maximise your savings with our
unrivaled high-yield plans
            </h2>
            <p>
              Get 4.3% in US dollars and 2.86% in euro per
annum on your cash balance. Higher than any
other alternative on the market*.
            </p>
            <button class="button--primary fifth__btn" style="width: 300px">
              <a href="#form" >Learn more about the D-account</a>
            </button>
            <span>*based on own research</span>
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
            <h2>Convenient trading platform</h2>
            <p style="margin-top: 20px">
              Freedom24's web platform and mobile apps have everything
you need for successful investments.
            </p>
            <p class="sixth__text" style="margin-top: 32px">
              At your fingertips, up-to-date account information, analytical
tools and a powerful trading system gathered together to
enable all types of stock exchange orders, including limit and
stop orders
            </p>
            <button class="button--primary sixth__btn">
              <a href="#form">Sign Up</a>
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
            <div class="form__section__content">
              <h2>Open a trading account</h2>
              <p>
                Access major US, European and Asian stock exchanges to invest in
stocks, ETFs, bonds, and stock options. Award-winning investment
recommendation and training courses developed by securities market
experts.
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
              <span>PRODUCTS</span>
              <ul>
                <li><a href="#form">D-Account</a></li>
                <li><a href="#form">Stocks and ETFs</a></li>
                <li><a href="#form">Investideas</a></li>
                <li><a href="#form">Affiliate program</a></li>
                <li><a href="#form">White label</a></li>
                <li><a href="#form">Freedom Academy</a></li>
              </ul>
            </div>
            <div class="footer__top--left__block">
              <span>COMPANY SNAPSHOT</span>
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
              <span>DOCUMENTS</span>
              <ul>
                <li><a href="">Licences</a></li>
                <li><a href="">Official data</a></li>
                <li><a href="">Privacy Policy</a></li>
                <li><a href="">Privacy settings</a></li>
                <li><a href="">Data protection notice</a></li>
                <li><a href="">General Terms of Business</a></li>
                <li><a href="">Comprehensive list of legal documents</a></li>
              </ul>
            </div>
          </div>
          <div class="footer__top--right">
            <div class="footer__top--right__block">
              <span>MOBILE APPLICATIONS</span>
              <div>
                <a href=""
                  ><img src="./img/googleplay.svg" alt="GooglePlay"
                /></a>
                <a href=""><img src="./img/appstore.svg" alt="AppStore" /></a>
                <a href=""
                  ><img src="./img/appgallery.svg" alt="AppGallery"
                /></a>
              </div>
            </div>
            <div class="footer__top--right__block">
              <span>PAYMENT METHODS</span>
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
          <span>OUR AWARDS</span>
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
              Information and analytical services and materials are provided by Freedom Finance Europe Ltd as part of the services specified and are not an
independent activity. The Company reserves the right to refuse service to persons not meeting the criteria for clients, or those subject to bans /
restrictions on such services in accordance with the European Union laws. Restrictions may also be imposed by the internal procedures and controls of
Freedom Finance Europe Ltd.
            </p>
            <p>
              Freedom Finance Europe Ltd provides financial services in the European Union in accordance with license CIF 275/15 for all types of activities required
by the company as granted by the Cyprus Securities and Exchange Commission (CySEC) on 20.05.2015. Disclaimer: Additional information is available
upon request. Investing in securities and other financial instruments always involves the risk of capital loss. The client must personally acknowledge this,
including by reading the Risk Disclosure Notice. Opinions and estimates represent our judgments as of the date hereof and are subject to change
without notice. Fees, charges and other expenses may reduce the financial performance of your investment. Past returns do not guarantee future
returns. This material is not intended to be an offer or solicitation to buy or sell any financial instrument. The opinions and recommendations provided
herein do not consider any individual circumstances, goals or needs of the client and do not constitute an investment advisory service. Recipients of this
report must make their own independent decisions in relation to any securities or financial instruments referred to herein. The information has been
obtained from sources that Freedom Finance Europe Ltd believes to be reliable; its affiliates and/or subsidiaries (jointly referred to as Freedom Finance)
do not guarantee completeness or accuracy of such information, save for disclosures related to Freedom Finance and/or its affiliates/agents and
analyst's interactions with the issuer being the subject of research. All prices provided are indicative closing prices for the securities in question, unless
otherwise specified.
            </p>
            <p>
              This website may be accessed worldwide. However, none of the products and services referred to on this website are available to recipients residing in
countries where the provision of such products and services would violate mandatory applicable legislation or regulations. It is the sole responsibility of
any recipient employing or requesting a product or service to comply with all applicable legislation or regulation.
            </p>
            <p>
              For the avoidance of doubt, all information on this website are not addressed to, or intended to be used by U.S. persons (as defined in Rule 902 of
Regulation S promulgated under the U.S. Securities Act of 1933).
            </p>
          </div>
          <div class="footer__center--right">
            <div class="footer__center_country">
              <div class="footer__center_country--left">
                <img src="./img/icons/eu.png" alt="EU" />
                <span>Head office Europe</span>
              </div>
              <img
                src="./img/icons/arrow.svg"
                alt="Arrow"
                class="footer__center_arrow"
              />
            </div>
            <div class="footer__center_text">
              <span>HEAD OFFICE EUROPE</span>
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
            <span>© 2024 Freedom24 - All rights reserved</span>
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
</html>
