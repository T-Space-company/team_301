document.addEventListener("DOMContentLoaded", () => {
  const sliders = document.querySelectorAll(".partners__articles");

  sliders.forEach((slider) => {
    const container = slider.closest(".article__partners");
    const prevBtn = container.querySelector(
      ".partners__arrows .arrow:first-child"
    );
    const nextBtn = container.querySelector(
      ".partners__arrows .arrow:last-child"
    );

    let isDown = false;
    let startX, startScrollLeft;

    nextBtn.addEventListener("click", () => {
      slider.scrollBy({ left: 200, behavior: "smooth" });
    });

    prevBtn.addEventListener("click", () => {
      slider.scrollBy({ left: -200, behavior: "smooth" });
    });

    const startDrag = (e) => {
      isDown = true;
      startX = e.touches ? e.touches[0].pageX : e.pageX;
      startScrollLeft = slider.scrollLeft;
      slider.style.scrollBehavior = "auto";
    };

    const moveDrag = (e) => {
      if (!isDown) return;
      if (e.cancelable) e.preventDefault();
      const x = e.touches ? e.touches[0].pageX : e.pageX;
      const walk = startX - x;
      slider.scrollLeft = startScrollLeft + walk;
    };

    const stopDrag = () => {
      isDown = false;
      slider.style.scrollBehavior = "smooth";
    };

    slider.addEventListener("mousedown", startDrag);
    slider.addEventListener("mousemove", moveDrag);
    slider.addEventListener("mouseup", stopDrag);
    slider.addEventListener("mouseleave", stopDrag);

    slider.addEventListener("touchstart", startDrag, { passive: false });
    slider.addEventListener("touchmove", moveDrag, { passive: false });
    slider.addEventListener("touchend", stopDrag);
  });

  const footerSliders = document.querySelectorAll(
    ".footer__links--top, .footer__links--bottom"
  );

  footerSliders.forEach((footerSlider) => {
    let isDown = false;
    let startX, startScrollLeft;

    const startDrag = (e) => {
      isDown = true;
      startX = e.touches ? e.touches[0].pageX : e.pageX;
      startScrollLeft = footerSlider.scrollLeft;
      footerSlider.style.scrollBehavior = "auto";
    };

    const moveDrag = (e) => {
      if (!isDown) return;
      if (e.cancelable) e.preventDefault();
      const x = e.touches ? e.touches[0].pageX : e.pageX;
      const walk = startX - x;
      footerSlider.scrollLeft = startScrollLeft + walk;
    };

    const stopDrag = () => {
      isDown = false;
      footerSlider.style.scrollBehavior = "smooth";
    };

    footerSlider.addEventListener("mousedown", startDrag);
    footerSlider.addEventListener("mousemove", moveDrag);
    footerSlider.addEventListener("mouseup", stopDrag);
    footerSlider.addEventListener("mouseleave", stopDrag);

    footerSlider.addEventListener("touchstart", startDrag, { passive: false });
    footerSlider.addEventListener("touchmove", moveDrag, { passive: false });
    footerSlider.addEventListener("touchend", stopDrag);
  });

  const socialsSlider = document.querySelector(".footer__socials");

  let isDown = false;
  let startX, startScrollLeft;

  const startDrag = (e) => {
    isDown = true;
    startX = e.touches ? e.touches[0].pageX : e.pageX;
    startScrollLeft = socialsSlider.scrollLeft;
    socialsSlider.style.scrollBehavior = "auto";
  };

  const moveDrag = (e) => {
    if (!isDown) return;
    if (e.cancelable) e.preventDefault();
    const x = e.touches ? e.touches[0].pageX : e.pageX;
    const walk = startX - x;
    socialsSlider.scrollLeft = startScrollLeft + walk;
  };

  const stopDrag = () => {
    isDown = false;
    socialsSlider.style.scrollBehavior = "smooth";
  };

  socialsSlider.addEventListener("mousedown", startDrag);
  socialsSlider.addEventListener("mousemove", moveDrag);
  socialsSlider.addEventListener("mouseup", stopDrag);
  socialsSlider.addEventListener("mouseleave", stopDrag);

  socialsSlider.addEventListener("touchstart", startDrag, { passive: false });
  socialsSlider.addEventListener("touchmove", moveDrag, { passive: false });
  socialsSlider.addEventListener("touchend", stopDrag);
});
