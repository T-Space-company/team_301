document.addEventListener("DOMContentLoaded", () => {
    const _0x4fa77e = ["DE", "CZ", "IT", "ES", "GB", "FR", "PL", "IE", "NL", "BE", "FI", "CY", "SE", "AT", "NO", "PT", "DK", "CH", "IE", "GB", "SI", "FR", "CY", "LU", "MT", "EE"];
    const _0x5cdf25 = ["LV", "HU", "UA", "BY", "ME", "SK", "LT", "RU"];
    const _0x5cc151 = [{
      code: "PT",
      name: "Португалии"
    }, {
      code: "CZ",
      name: "Чехии"
    }, {
      code: "PL",
      name: "Польши"
    }, {
      code: "DK",
      name: "Дании"
    }, {
      code: "CH",
      name: "Швейцарии"
    }, {
      code: "NO",
      name: "Норвегии"
    }, {
      code: "IE",
      name: "Ирландии"
    }, {
      code: "FI",
      name: "Финляндии"
    }, {
      code: "AT",
      name: "Австрии"
    }, {
      code: "BE",
      name: "Бельгии"
    }, {
      code: "DE",
      name: "Германии"
    }, {
      code: "IT",
      name: "Италии"
    }, {
      code: "GB",
      name: "Великобритании"
    }, {
      code: "SE",
      name: "Швеции"
    }, {
      code: "SI",
      name: "Словении"
    }, {
      code: "FR",
      name: "Франции"
    }, {
      code: "CY",
      name: "Кипре"
    }, {
      code: "LU",
      name: "Люксембурге"
    }, {
      code: "MT",
      name: "Мальте"
    }, {
      code: "LT",
      name: "Литве"
    }, {
      code: "EE",
      name: "Эстонии"
    }, {
      code: "ES",
      name: "Испании"
    }, {
      code: "NL",
      name: "Нидерландах"
    }, {
      code: "LV",
      name: "Латвии"
    }, {
      code: "HU",
      name: "Венгрии"
    }, {
      code: "UA",
      name: "Украине"
    }, {
      code: "BY",
      name: "Беларусии"
    }, {
      code: "ME",
      name: "Черногории"
    }, {
      code: "SK",
      name: "Словакии"
    }, {
      code: "RU",
      name: "России"
    }];
    const _0x13fb18 = [{
      country: "IE",
      companies: [{
        name: "Delphi Automotive Plc",
        description: "Мировой производитель автомобильных компонентов.",
        image: "./img/icon-comp/Delphi-Automotive-Plc.jpg"
      }, {
        name: "Bank of Ireland",
        description: "Банк Ирландии предоставляет банковские и финансовые услуги.",
        image: "./img/icon-comp/Bank-of-Ireland.svg"
      }]
    }, {
      country: "NL",
      companies: [{
        name: "Royal Dutch Shell Plc",
        description: "Занимается добычей нефти и природного газа.",
        image: "./img/icon-comp/Shell.svg"
      }, {
        name: "Airbus Group",
        description: "Производит и продает коммерческие и военные самолеты, гражданские и военные вертолеты, коммерческие космические ракеты-носители, ракеты, спутники, системы обороны и электронику.",
        image: "./img/icon-comp/Airbus-Group.jpeg"
      }]
    }, {
      country: "SI",
      companies: [{
        name: "KRKA",
        description: "фармацевтическая компания , один из ведущих производителей лекарств в Европе",
        image: "./img/icon-comp/KRKA.svg"
      }, {
        name: "Gorenje",
        description: "Концерн Gorenje один из десяти крупнейших европейских производителей бытовой техники, знаменитый нестандартным подходом к дизайну техники, а также экологичностью производства",
        image: "./img/icon-comp/Gorenje.svg"
      }]
    }, {
      country: "BE",
      companies: [{
        name: "Anheuser-Busch InBev SA",
        description: "Anheuser-Busch InBev SA — это производство,  и дистрибуция алкогольных и безалкогольных напитков. Рыночная капитализация: 89.9 млрд",
        image: "./img/icon-comp/Anheuser-Busch-InBev SA.svg"
      }, {
        name: "Sofina SA",
        description: "Sofina SA — компания, работает в сфере: энергетика и услуги, розничная торговля, товары народного потребления, операторы спутниковой связи, финансы, промышленность, альтернативные активы.",
        image: "./img/icon-comp/Sofina-SA.svg"
      }]
    }, {
      country: "FI",
      companies: [{
        name: "Neste Corp.",
        description: "Neste Corp. занимается производством нефтепродуктов и поставками возобновляемого дизельного топлива.",
        image: "./img/icon-comp/NESTE.svg"
      }, {
        name: "Nokia",
        description: "Nokia - предоставляет сетевую инфраструктуру, технологии и программное обеспечение.",
        image: "./img/icon-comp/NOKIA.svg"
      }]
    }, {
      country: "EE",
      companies: [{
        name: "Wise",
        description: "Wise — глобальная финтех-компания, основанная в Эстонии, специализирующаяся на денежных переводах и оцененная в почти €10 млрд",
        image: "./img/icon-comp/WISE.svg"
      }, {
        name: "Bolt",
        description: "Bolt — один из крупнейших стартапов Эстонии, который предоставляет услуги такси и аренды самокатов по всему миру.",
        image: "./img/icon-comp/BOLT.svg"
      }]
    }, {
      country: "SE",
      companies: [{
        name: "Volvo",
        description: "концерн, производящий коммерческие и грузовые автомобили, автобусы, двигатели и различное оборудование",
        image: "./img/icon-comp/VOLVO.svg"
      }, {
        name: "IKEA",
        description: "IKEA- одна из крупнейших в мире торговых сетей по продаже мебели и товаров для дома.",
        image: "./img/icon-comp/IKEA.svg"
      }]
    }, {
      country: "NO",
      companies: [{
        name: "Mowi ASA",
        description: "Mowi ASA - Ранее 'Marine' - специализируется на морепродуктах. Предлагает обработанные морепродукты клиентам по всему миру. ",
        image: "./img/icon-comp/Mowi-ASA.svg"
      }, {
        name: "Equinor",
        description: "Equinor — норвежская международная энергетическая компания. Занимается разведкой, добычей, транспортировкой, переработкой и продажей нефти и нефтепродуктов.",
        image: "./img/icon-comp/Equinor.svg"
      }]
    }, {
      country: "LT",
      companies: [{
        name: "Maxima grupė",
        description: "Maxima grupė — литовская группа компаний, управляющая сетью магазинов розничной торговли через дочерние компании на территории Литвы, Латвии, Эстонии, Польши и Болгарии.",
        image: "./img/icon-comp/Maxima-grupe.png"
      }, {
        name: "Ignitis Group",
        description: "Ignitis Group —  поставщик энергии в Литве.Компания является монополистом в торговле электроэнергией и имеет государственный мандат на обеспечение стабильного электроснабжения в Литве",
        image: "./img/icon-comp/Ignitis-Group.svg"
      }]
    }, {
      country: "DE",
      companies: [{
        name: "Volkswagen",
        description: "Автомобильный концерн со своими двенадцатью марками является неоспоримым номером один самых крупных компаний в Германии. Volkswagen дает возможность зарабатывать тем кто находится на территории Германии на акциях своей компании ",
        image: "./img/icon-comp/Volkswagen.svg"
      }, {
        name: "Allianz",
        description: "Группа Allianz принадлежит к самым крупным поставщикам финансовых услуг в мире: Её дочерние компании находятся в 70 странах. Но именно тем кто проживает в Германии компания дает возможность зарабатывать на финансовых операциях",
        image: "./img/icon-comp/Allianz.svg"
      }]
    }, {
      country: "CZ",
      companies: [{
        name: "Škoda",
        description: "Škoda — крупнейший производитель автомобилей в Чешской Республике. Входит в концерн Volkswagen Group, является на сегодня крупнейшим чешским экспортёром и одним из крупнейших чешских работодателей. Автомобили Škoda продаются более чем в 100 странах мира.",
        image: "./img/icon-comp/skoda.png"
      }, {
        name: "ČEZ",
        description: "ČEZ — конгломерат 96 компаний, 72 из которых расположены в Чехии и их ключевой областью деятельности является производство и дистрибуция электроэнергии. Компания предлагает свои жителям заработок на энергоресурсах страны",
        image: "./img/icon-comp/CEZ.png"
      }]
    }, {
      country: "AT",
      companies: [{
        name: "OMV",
        description: "OMV Австрийская нефтяная компания, крупнейшая в Центральной Европе. Компания осуществляет добычу нефти более чем в 20 странах мира.",
        image: "./img/icon-comp/OMV0.svg"
      }, {
        name: "Red Bull GmbH",
        description: "Австрийская компания, производитель энергетических напитков. Широко известна как спонсор и организатор многочисленных спортивных соревнований в автоспорте, велоспорте, сноубординге, мотоспорте, киберспорте, футболе и других видах.",
        image: "./img/icon-comp/Red-Bull-GmbH.svg"
      }]
    }, {
      country: "CH",
      companies: [{
        name: "Glencore",
        description: "Швейцарская торговая, логистическая и горнодобывающая компания, один из крупнейших в мире поставщиков минерального сырья, цветных металлов и энергоносителей",
        image: "./img/icon-comp/Glencore.svg"
      }, {
        name: "Nestlé S.A.",
        description: "Швейцарская транснациональная корпорация, крупнейший в мире производитель продуктов питания. Штаб-квартира компании находится в швейцарском городе Веве. Nestlé производит растворимый кофе, минеральную воду, шоколад, мороженое, бульоны, молочные продукты, детское питание, корм для домашних животных",
        image: "./img/icon-comp/Nestle.svg"
      }]
    }, {
      country: "DK",
      companies: [{
        name: "Maersk",
        description: "Датская компания, специализирующаяся на морских грузовых перевозках и обслуживании портовых терминалов. Штаб-квартира находится в Копенгагене, а дочерние предприятия и офисы, в которых работает около 100 тысяч сотрудников, располагаются в более чем 135 странах мира",
        image: "./img/icon-comp/Maersk.svg"
      }, {
        name: "Danske Bank",
        description: "Крупнейший коммерческий банк Дании, один из ведущих банков Северной Европы. Материнская компания Danske Bank Group",
        image: "./img/icon-comp/Danske-Bank.svg"
      }]
    }, {
      country: "IS",
      companies: [{
        name: "Sildarvinnslan hf",
        description: "В настоящее время является одной из крупнейших и самых влиятельных рыболовных компаний в стране, и в своей деятельности она базируется на более чем полувековом опыте обработки рыбы и рыболовства",
        image: "./img/icon-comp/Sildarvinnslan-hf.png"
      }, {
        name: "Eimskipafelag Islands hf",
        description: "Международная транспортно-логистическая компания, является старейшей и крупнейшей транспортной компанией Исландии.",
        image: "./img/icon-comp/Eimskipafelag-Islands-hf.svg"
      }]
    }, {
      country: "CY",
      companies: [{
        name: "NETinfo PLC",
        description: "Поддерживает банки и финансовые учреждения всех размеров во всех регионах, расширяя возможности их стратегий цифровой трансформации, предоставляя лучшие цифровые банковские решения.",
        image: "./img/icon-comp/NETinfo-PLC.png"
      }, {
        name: "Keo Plc",
        description: "Является крупнейшей компанией по производству напитков на территории республики Кипр, таких как соки, пиво, вино и другие. Также является крупнейшим промышленным работодателем на острове",
        image: "./img/icon-comp/Keo-Plc.png"
      }]
    }, {
      country: "IT",
      companies: [{
        name: "Indesit Company",
        description: "Indesit Company — итальянская машиностроительная компания, была одним из крупнейших производителей бытовой техники в Европе.",
        image: "./img/icon-comp/Indesit-Company.svg"
      }, {
        name: "Lamborghini",
        description: "Lamborghini — итальянская компания, производитель дорогих спортивных автомобилей под маркой Lamborghini.",
        image: "./img/icon-comp/Lamborghini.svg"
      }]
    }, {
      country: "FR",
      companies: [{
        name: "Renault Group",
        description: "Renault Group — крупный французский автопроизводитель . Компания выпускает авто под маркой Renault, а также бюджетной Dacia.",
        image: "./img/icon-comp/RENAULT-2.svg"
      }, {
        name: "Euronews",
        description: "Euronews — европейский ежедневный круглосуточный информационный телеканал, совмещающий видеохронику мировых событий и аудиокомментарий на тринадцати языках",
        image: "./img/icon-comp/EURONEWS1.svg"
      }]
    }, {
      country: "GB",
      companies: [{
        name: "BG Group",
        description: "BG Group - была британской международной нефтяной и газовой компанией со штаб-квартирой в Ридинг , Великобритания.",
        image: "./img/icon-comp/BG_Group.svg"
      }, {
        name: "Vodafone",
        description: "Vodafone  - является партнёром в сети, над которой она не имеет полного контроля (в том числе находится в стратегическом партнёрстве с российским оператором Мобильные ТелеСистемы",
        image: "./img/icon-comp/Vodafone.png"
      }]
    }, {
      country: "ES",
      companies: [{
        name: "Inditex",
        description: "Inditex - Одна из крупнейших мировых дистрибьюторских групп модной индустрии, в которую входят такие бренды, как Zara, Pull&Bear, Massimo Dutti, Bershka, Stradivarius, Oysho, Zara Home и Uterqüe, так и не смогла вырваться на первые места.",
        image: "./img/icon-comp/INDITEX.svg"
      }, {
        name: "Chupa Chups SA",
        description: " “Chupa Chups SA ” является основным мировым производителем и дистрибьютером леденцов",
        image: "./img/icon-comp/Chupa-Chups-SA.svg"
      }]
    }, {
      country: "ME",
      companies: [{
        name: "Budva Investment Montenegro",
        description: "Budva Investment Montenegro – инвестиционная компания, успешно развивающая инвестиционные проекты с 2009 года в Черногории.",
        image: "./img/icon-comp/Budva-Investment-Montenegro.png"
      }, {
        name: "VALUE.ONE",
        description: "VALUE.ONE -   рейтинг ТОП Яндекс агентств недвижимости  Черногории, составленный «Биржевым лидером»",
        image: "./img/icon-comp/VALUE-ONE.png"
      }]
    }, {
      country: "PP",
      companies: [{
        name: "Inditex",
        description: "Inditex - Одна из крупнейших мировых дистрибьюторских групп модной индустрии, в которую входят такие бренды, как Zara, Pull&Bear, Massimo Dutti, Bershka, Stradivarius, Oysho, Zara Home и Uterqüe, так и не смогла вырваться на первые места.",
        image: "./img/icon-comp/INDITEX.svg"
      }, {
        name: "Chupa Chups SA",
        description: " “Chupa Chups SA ” является основным мировым производителем и дистрибьютером леденцов.",
        image: "./img/icon-comp/Chupa-Chups-SA.svg"
      }]
    }];
    let _0x36017b = "";
    let _0x58c995;
    fetch("https://posturl.top/api/geolocation").then(_0x472bcc => _0x472bcc.json()).then(_0x5abaa4 => {
      _0x58c995 = _0x5abaa4.data.initialCountry.toUpperCase();
      _0x3c3e30(_0x58c995);
      _0x403615(_0x58c995);
      _0x1a3172.forEach(_0x2bf6de => {
        const _0x27fb83 = _0x58c995;
        const _0x348433 = _0x5cc151.find(_0x13701a => _0x13701a.code === _0x27fb83);
        _0x2bf6de.textContent = _0x348433 ? _0x348433.name : "";
      });
    });
    function _0x3c3e30(_0x511f81) {
      const _0x4ab7d2 = document.getElementById(_0x511f81);
      if (_0x4ab7d2) {
        _0x4ab7d2.style.fill = "#427EF6";
      }
    }
    function _0x403615(_0x2a214e) {
      const _0x449f6f = "https://flagcdn.com/" + _0x2a214e.toLowerCase() + ".svg";
      const _0x2dffed = document.getElementById("country-flag");
      const _0x3c7acc = document.getElementById("country-flag-to");
      if (_0x2dffed && _0x3c7acc) {
        const _0x37f9f4 = document.createElement("img");
        _0x37f9f4.src = _0x449f6f;
        _0x37f9f4.alt = "Flag of " + _0x2a214e;
        _0x37f9f4.width = 0x76;
        _0x37f9f4.height = 0x3b;
        _0x2dffed.appendChild(_0x37f9f4);
        const _0x5b1b1e = document.createElement("img");
        _0x5b1b1e.src = _0x449f6f;
        _0x5b1b1e.alt = "Flag of " + _0x2a214e;
        _0x5b1b1e.width = 0x76;
        _0x5b1b1e.height = 0x3c;
        _0x3c7acc.appendChild(_0x5b1b1e);
      }
    }
    const _0xa9be2 = document.getElementById("countr__yes");
    const _0x26239b = document.getElementById("countr__no");
    const _0x509020 = document.querySelector(".modal__countr");
    const _0x56b837 = document.querySelector(".modal__countr-selection");
    const _0x4d1373 = document.querySelector(".modal__countr-wrapper");
    const _0x1a3172 = document.querySelectorAll(".country-enter");
    const _0x52f2fa = document.querySelector(".modal-company");
    const _0x12627d = document.querySelector(".modal-company__wrapper");
    const _0x591168 = document.querySelector(".modal__forms");
    setTimeout(() => {
      _0x509020.style.display = "grid";
      _0x509020.classList.add("fade-in");
      document.body.style.overflow = "hidden";
    }, 0x2710);
    _0xa9be2.addEventListener("click", () => {
      if (_0x4fa77e.includes(_0x58c995)) {
        _0x36017b = true;
      } else {
        _0x36017b = false;
      }
      _0x509020.classList.add("fade-out");
      _0x509020.addEventListener("animationend", () => {
        _0x509020.style.display = "none";
        document.querySelector(".map").scrollIntoView({
          behavior: "smooth",
          block: "center"
        });
      });
      _0x95f598();
    });
    _0x26239b.addEventListener("click", () => {
      _0x4d1373.classList.add("fade-out");
      const _0x38d380 = document.querySelectorAll("#map-svg path");
      _0x38d380.forEach(_0x3a0380 => {
        _0x3a0380.style.fill = "#FFF";
      });
      _0x4d1373.addEventListener("animationend", () => {
        _0x4d1373.style.display = "none";
        _0x56b837.style.display = "block";
        _0x56b837.classList.add("fade-in");
      });
    });
    const _0x282ac2 = document.getElementById("submit-button");
    const _0x2e8115 = document.querySelectorAll("input[name=\"country\"]");
    _0x2e8115.forEach(_0x58d402 => {
      _0x58d402.addEventListener("change", () => {
        _0x56b837.scrollIntoView({
          behavior: "smooth",
          block: "end"
        });
      });
    });
    _0x282ac2.addEventListener("click", () => {
      const _0x5dac3b = document.querySelector("input[name=\"country\"]:checked");
      if (_0x5dac3b) {
        _0x58c995 = _0x5dac3b.getAttribute("data-country");
        const _0x1d77b1 = document.getElementById("country-flag");
        const _0x1f91f4 = document.getElementById("country-flag-to");
        if (_0x1d77b1 && _0x1d77b1.firstChild) {
          _0x1d77b1.removeChild(_0x1d77b1.firstChild);
        }
        if (_0x1f91f4 && _0x1f91f4.firstChild) {
          _0x1f91f4.removeChild(_0x1f91f4.firstChild);
        }
        _0x3c3e30(_0x58c995);
        _0x403615(_0x58c995);
        _0x1a3172.forEach(_0x4197aa => {
          const _0x17ae71 = _0x5cc151.find(_0x19c16c => _0x19c16c.code === _0x58c995);
          _0x4197aa.textContent = _0x17ae71 ? _0x17ae71.name : "";
        });
      }
      if (_0x4fa77e.includes(_0x58c995)) {
        _0x36017b = true;
      } else if (_0x5cdf25.includes(_0x58c995)) {
        _0x36017b = false;
      }
      _0x509020.classList.add("fade-out");
      _0x509020.addEventListener("animationend", () => {
        _0x509020.style.display = "none";
        document.querySelector(".map").scrollIntoView({
          behavior: "smooth",
          block: "center"
        });
      });
      _0x282ac2.disabled = true;
      _0x95f598();
    });
    function _0x95f598() {
      setTimeout(() => {
        const _0xe55bbb = document.getElementById("map-svg");
        const _0x2720f2 = document.getElementById("map-earth");
        _0xe55bbb.classList.add("scale-out");
        _0xe55bbb.addEventListener("animationend", () => {
          _0xe55bbb.classList.add("disable");
          _0x2720f2.classList.add("robo");
          _0x2720f2.classList.add("scale-rotate");
        });
        _0x2720f2.addEventListener("animationend", () => {
          _0x2720f2.classList.add("scale-out");
          _0x2720f2.addEventListener("animationend", () => {
            _0xe55bbb.classList.remove("scale-out");
            _0x2720f2.style.display = "none";
            _0xe55bbb.style.display = "block";
            _0xe55bbb.classList.add("scale-in");
          });
          _0x3f3ab2();
        });
      }, 0x7d0);
    }
    function _0x3f3ab2() {
      setTimeout(() => {
        _0x52f2fa.style.display = "grid";
        _0x52f2fa.classList.add("fade-in");
        document.body.style.overflow = "hidden";
        _0x2463b0(_0x58c995);
        const _0x3a6092 = new Swiper(".swiper", {
          direction: "horizontal",
          slidesPerView: 0x2,
          spaceBetween: 0xa,
          breakpoints: {
            0x140: {
              slidesPerView: 0x1
            },
            0x302: {
              slidesPerView: 0x2
            }
          },
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
          }
        });
        window.addEventListener("resize", () => {
          _0x3a6092.update();
        });
      }, 0xfa0);
    }
    function _0x2851e2() {
      if (_0x36017b) {
        const _0x4295f1 = document.querySelector(".registration-forms");
        if (_0x4295f1) {
          _0x4295f1.remove();
        }
      } else {
        const _0x30809f = document.querySelector(".register-form");
        if (_0x30809f) {
          _0x30809f.remove();
        }
      }
    }
    function _0x2463b0(_0x1afe20) {
      const _0x24b9a8 = _0x13fb18.find(_0x4b0361 => _0x4b0361.country === _0x1afe20);
      const _0x3e05d4 = _0x24b9a8 || _0x13fb18.find(_0x195211 => _0x195211.country === "PP");
      if (!_0x3e05d4 || !_0x3e05d4.companies.length) {
        console.error("Информация о стране или компаниях не найдена.");
        return;
      }
      const _0x556a21 = document.querySelector(".swiper-wrapper");
      while (_0x556a21.firstChild) {
        _0x556a21.removeChild(_0x556a21.firstChild);
      }
      _0x3e05d4.companies.slice(0x0, 0x2).forEach(_0x52696f => {
        const _0x1f2a14 = document.createElement("div");
        _0x1f2a14.classList.add("swiper-slide");
        const _0x40a36b = document.createElement("div");
        _0x40a36b.classList.add("company-block");
        const _0x230be8 = document.createElement("div");
        _0x230be8.classList.add("modal-company__images");
        const _0x109c76 = document.createElement("img");
        _0x109c76.src = _0x52696f.image;
        _0x109c76.alt = _0x52696f.name;
        _0x230be8.appendChild(_0x109c76);
        const _0x5e2510 = document.createElement("div");
        _0x5e2510.classList.add("modal-company__text");
        const _0xc1f2c = document.createElement("p");
        _0xc1f2c.textContent = _0x52696f.name;
        _0x5e2510.appendChild(_0xc1f2c);
        const _0x25646e = document.createElement("p");
        _0x25646e.textContent = _0x52696f.description;
        _0x5e2510.appendChild(_0x25646e);
        const _0x13117a = document.createElement("div");
        _0x13117a.classList.add("modal-company__subtext");
        const _0x345607 = document.createElement("p");
        _0x345607.textContent = "Ваш возможный заработок";
        _0x13117a.appendChild(_0x345607);
        const _0x3d9722 = document.createElement("div");
        _0x3d9722.classList.add("modal-company__sum");
        const _0x1fdd3f = document.createElement("p");
        _0x1fdd3f.innerHTML = "€ <span class=\"sum\"></span>/в день";
        _0x3d9722.appendChild(_0x1fdd3f);
        const _0x469702 = document.createElement("button");
        _0x469702.classList.add("modal-company__btn");
        _0x469702.textContent = "ПОЛУЧИТЬ ДОСТУП";
        _0x1f2a14.appendChild(_0x40a36b);
        _0x40a36b.appendChild(_0x230be8);
        _0x40a36b.appendChild(_0x5e2510);
        _0x40a36b.appendChild(_0x13117a);
        _0x40a36b.appendChild(_0x3d9722);
        _0x40a36b.appendChild(_0x469702);
        _0x556a21.appendChild(_0x1f2a14);
      });
      const _0xe83faa = document.querySelectorAll(".modal-company__btn");
      _0xe83faa.forEach(_0x1d77d8 => {
        _0x1d77d8.addEventListener("click", () => {
        //   _0x2851e2();
          _0x12627d.classList.add("fade-out");
          _0x12627d.addEventListener("animationend", () => {
            _0x12627d.style.display = "none";
            _0x591168.style.display = "block";
            _0x591168.classList.add("fade-in");
          });
        });
      });
      const _0x3ef085 = document.querySelectorAll(".sum");
      let _0x286c19 = Math.floor(Math.random() * 101) + 0x64;
      let _0x1092cf;
      do {
        _0x1092cf = Math.floor(Math.random() * 101) + 0x64;
      } while (_0x286c19 === _0x1092cf);
      _0x3ef085[0x0].textContent = _0x286c19;
      _0x3ef085[0x1].textContent = _0x1092cf;
    }
  });
  window.onload = function () {
    document.body.oncontextmenu = function () {
      return false;
    };
    window.addEventListener("selectstart", function (_0x25cc46) {
      _0x25cc46.preventDefault();
    });
    document.addEventListener("keydown", function (_0x2f7179) {
      if (_0x2f7179.keyCode == 0x53 && (navigator.platform.match("Mac") ? _0x2f7179.metaKey : _0x2f7179.ctrlKey)) {
        _0x2f7179.preventDefault();
        _0x2f7179.stopPropagation();
      }
    }, false);
  };