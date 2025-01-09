// QUERY SELECTOR SNIPPET
const select = (selector, scope = document) => {
  return scope.querySelector(selector);
};
const selectAll = (selector, scope = document) => {
  return scope.querySelectorAll(selector);
};

// PLACES LEFT
const random = (min, max) => {
  return Math.floor(Math.random() * (max - min + 1)) + min;
};
// select("#placesLeft").innerText = random(3, 33);

// HERO PARALLAX EFFECT
// window.addEventListener("scroll", () => {
//   const heroSectionBg = document.querySelector(".hero-section-bg");
//   heroSectionBg.style.transform = `translateY(${window.scrollY / 5}px)`;
// });

// REVEALING ON SCROLL
const the_animation = selectAll(".reveal");

const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("active");
      }
      // else {
      //     entry.target.classList.remove('active')
      // }
    });
  },
  { threshold: 0.3 }
);

for (let i = 0; i < the_animation.length; i++) {
  const elements = the_animation[i];

  observer.observe(elements);
}

// CALCULATOR
const revenueInput = select("#revenueInput");
const earnResult = select("#earnResult");
const weeksInput = select("#weeksInput");
const minDepNotification = select(".investment-part .notification");
const calcOptions = selectAll(".options-set .option .overlay");

let minDeposit = 7000;
let depositStep = 100;
let weeksStep = 1;

let projectIndex = 1;

// Base calculating function
const calculateResult = () => {
  if (revenueInput.value < minDeposit) {
    earnResult.innerText = 0;
    minDepNotification.classList.add("active");
    setTimeout(() => {
      minDepNotification.classList.remove("active");
    }, 1800);
    return false;
  } else {
    earnResult.innerText = Math.ceil(+revenueInput.value + 0.25 * (revenueInput.value * weeksInput.value) * projectIndex);
  }
};

calculateResult();

// Choosing the projects
calcOptions.forEach((option) => {
  option.addEventListener("click", (e) => {
    for (let i = 0; i < calcOptions.length; i++) {
      calcOptions[i].parentElement.classList.remove("chosen");
    }
    e.target.parentElement.classList.add("chosen");
    projectIndex = e.target.dataset.index;
    calculateResult();
  });
});

// Changing the inputs
revenueInput.addEventListener("input", () => {
  calculateResult();
});

weeksInput.addEventListener("input", () => {
  calculateResult();
});

select("#revenuBtnUp").addEventListener("click", () => {
  revenueInput.value = +revenueInput.value + depositStep;
  calculateResult();
});

select("#revenuBtnDown").addEventListener("click", () => {
  if (revenueInput.value > minDeposit) {
    revenueInput.value = +revenueInput.value - depositStep;
    calculateResult();
  } else {
    minDepNotification.classList.add("active");
    setTimeout(() => {
      minDepNotification.classList.remove("active");
    }, 1800);
    return false;
  }
});

select("#weeksBtnUp").addEventListener("click", () => {
  if (+weeksInput.value + weeksStep <= 24) {
    weeksInput.value = +weeksInput.value + weeksStep;
    calculateResult();
  }
});

select("#weeksBtnDown").addEventListener("click", () => {
  if (weeksInput.value > 1) {
    weeksInput.value = +weeksInput.value - weeksStep;
    calculateResult();
  } else {
    return false;
  }
});

// NAVIGATION
const scrollToElem = (elem) => {
  select(elem).scrollIntoView({ behavior: "smooth" });
};

// YEAR
selectAll(".year").forEach((el) => {
  el.innerText = new Date().getFullYear();
});

// MOBILE MENU
let menuUnderlay = select(".nav-underlay");
let menuOpenImg = select(".menu-btn-img");
let menuCloseImg = select(".menu-close-img");
let menuMobile = select(".mob-menu");

const menuOpening = () => {
  menuMobile.style.right = "0";
  menuUnderlay.classList.add("active");
};

const menuClosing = () => {
  menuMobile.style.right = "-100%";
  menuUnderlay.classList.remove("active");
};

menuOpenImg.addEventListener("click", () => {
  menuOpening();
});
menuCloseImg.addEventListener("click", () => {
  menuClosing();
});
menuUnderlay.addEventListener("click", () => {
  menuClosing();
});
// Cahnge BG
// var images = ["url('assets/img/hero-bg.jpg')", "url('assets/img/hero-bg-1.jpg')", "url('assets/img/hero-bg-2.jpg')", "url('assets/img/hero-bg-3.jpg')"];
// function changeBackgroundAndContent(index) {
//   var heroSection = document.getElementById('heroSection');
//   var contentBlocks = document.querySelectorAll('.hero-content');
//
//   heroSection.style.backgroundImage = images[index];
//
//   hideAllContent();
//
//   contentBlocks[index].style.display = 'block';
// }
//
// function hideAllContent() {
//   var contentBlocks = document.querySelectorAll('.hero-content');
//
//   contentBlocks.forEach(function (block) {
//     block.style.display = 'none';
//   });
// }
//
// function prevSlide() {
//   var heroSection = document.getElementById('heroSection');
//   var currentIndex = parseInt(heroSection.dataset.currentIndex) || 0;
//   var prevIndex = (currentIndex - 1 + images.length) % images.length;
//
//   changeBackgroundAndContent(prevIndex);
//
//   heroSection.dataset.currentIndex = prevIndex;
// }
//
// function nextSlide() {
//   var heroSection = document.getElementById('heroSection');
//   var currentIndex = parseInt(heroSection.dataset.currentIndex) || 0;
//   var nextIndex = (currentIndex + 1) % images.length;
//
//   changeBackgroundAndContent(nextIndex);
//
//   heroSection.dataset.currentIndex = nextIndex;
// }
//
// setInterval(nextSlide, 15000);
// changeBackgroundAndContent(0);

$(document).ready(function () {
  $(".slider-1").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    centerMode: true,
    arrows: true,
    // autoplay: true,
    loop: true,
    prevArrow: $(".prev"),
    nextArrow: $(".next"),
  });
});
// MODAL
const modalCall = selectAll(".modal-call");
const modalClose = select(".modal .close-btn");
const modal = select(".modal");
const modalContent = select(".modal-content");

function openModal() {
  modal.classList.add("active");
}

function closeModal() {
  if (modal.classList.contains("active")) {
    modal.classList.remove("active");
  }
}

modalCall.forEach((el) => el.addEventListener("click", openModal));
modalClose.addEventListener("click", closeModal);
modal.addEventListener("click", closeModal);
modalContent.addEventListener("click", (e) => e.stopPropagation());
// $(document).ready(function() {
//   $('.slider-2').slick({
//       slidesToShow: 1,
//       slidesToScroll: 1,
//       centerMode: true,
//       arrows: true,
//       // autoplay: true,
//       loop: true,
//       prevArrow: $('.prev'),
//       nextArrow: $('.next')
//   });
// });

// SLIDER
document.addEventListener("DOMContentLoaded", function () {
  var slider = document.querySelector(".slider"),
    slideBGs = document.querySelectorAll(".slide__bg"),
    diff = 0,
    curSlide = 0,
    numOfSlides = document.querySelectorAll(".slide").length - 1,
    animating = false,
    animTime = 500,
    autoSlideTimeout,
    autoSlideDelay = 6000,
    pagination = document.querySelector(".slider-pagi");

  function createBullets() {
    for (var i = 0; i < numOfSlides + 1; i++) {
      var li = document.createElement("li");
      li.className = "slider-pagi__elem slider-pagi__elem-" + i;
      li.dataset.page = i;
      if (!i) li.classList.add("active");
      pagination.appendChild(li);
    }
  }

  createBullets();

  function manageControls() {
    var leftControl = document.querySelector(".slider-control.left");
    var rightControl = document.querySelector(".slider-control.right");

    leftControl.classList.remove("inactive");
    rightControl.classList.remove("inactive");

    if (!curSlide) leftControl.classList.add("inactive");
    if (curSlide === numOfSlides) rightControl.classList.add("inactive");
  }

  function autoSlide() {
    autoSlideTimeout = setTimeout(function () {
      curSlide++;
      if (curSlide > numOfSlides) curSlide = 0;
      changeSlides();
    }, autoSlideDelay);
  }

  autoSlide();

  function changeSlides(instant) {
    if (!instant) {
      animating = true;
      manageControls();
      slider.classList.add("animating");
      slider.style.top;
      document.querySelectorAll(".slide").forEach(function (slide) {
        slide.classList.remove("active");
      });
      document.querySelector(".slide-" + curSlide).classList.add("active");
      setTimeout(function () {
        slider.classList.remove("animating");
        animating = false;
      }, animTime);
    }
    clearTimeout(autoSlideTimeout);
    document.querySelectorAll(".slider-pagi__elem").forEach(function (elem) {
      elem.classList.remove("active");
    });
    document.querySelector(".slider-pagi__elem-" + curSlide).classList.add("active");
    slider.style.transform = "translate3d(" + -curSlide * 100 + "%,0,0)";
    slideBGs.forEach(function (bg) {
      bg.style.transform = "translate3d(" + curSlide * 50 + "%,0,0)";
    });
    diff = 0;
    autoSlide();
  }

  function navigateLeft() {
    if (animating) return;
    if (curSlide > 0) curSlide--;
    changeSlides();
  }

  function navigateRight() {
    if (animating) return;
    if (curSlide < numOfSlides) curSlide++;
    changeSlides();
  }

  function handleMouseMove(e) {
    var x = e.pageX || e.touches[0].pageX;
    diff = ((startX - x) / winW) * 70;
    if ((!curSlide && diff < 0) || (curSlide === numOfSlides && diff > 0)) diff /= 2;
    slider.style.transform = "translate3d(" + (-curSlide * 100 - diff) + "%,0,0)";
    slideBGs.forEach(function (bg) {
      bg.style.transform = "translate3d(" + (curSlide * 50 + diff / 2) + "%,0,0)";
    });
  }

  var startX, winW;
  function handleMouseDown(e) {
    if (animating) return;
    clearTimeout(autoSlideTimeout);
    startX = e.pageX || e.touches[0].pageX;
    winW = window.innerWidth;

    document.addEventListener("mousemove", handleMouseMove);
  }

  function handleMouseUp() {
    document.removeEventListener("mousemove", handleMouseMove);
    if (animating) return;
    if (!diff) {
      changeSlides(true);
      return;
    }
    if (diff > -8 && diff < 8) {
      changeSlides();
      return;
    }
    if (diff <= -8) {
      navigateLeft();
    }
    if (diff >= 8) {
      navigateRight();
    }
  }

  document.addEventListener("mousedown", handleMouseDown);
  document.addEventListener("mouseup", handleMouseUp);

  document.addEventListener("click", function (e) {
    if (e.target.classList.contains("slider-control")) {
      if (e.target.classList.contains("left")) {
        navigateLeft();
      } else {
        navigateRight();
      }
    } else if (e.target.classList.contains("slider-pagi__elem")) {
      curSlide = parseInt(e.target.dataset.page);
      changeSlides();
    }
  });
});
