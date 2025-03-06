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

    let isDragging = false;
    let startX, scrollLeft;

    // Перемещение по кнопкам
    const scrollStep = 186; // Ширина карточки + gap (170px + 16px)
    let scrollAmount = 0;

    nextBtn.addEventListener("click", () => {
      if (scrollAmount < slider.scrollWidth - slider.clientWidth) {
        scrollAmount += scrollStep;
        slider.scrollTo({
          left: scrollAmount,
          behavior: "smooth",
        });
      }
    });

    prevBtn.addEventListener("click", () => {
      if (scrollAmount > 0) {
        scrollAmount -= scrollStep;
        slider.scrollTo({
          left: scrollAmount,
          behavior: "smooth",
        });
      }
    });

    // Drag (перетаскивание)
    slider.addEventListener("mousedown", (e) => {
      isDragging = true;
      startX = e.pageX - slider.offsetLeft;
      scrollLeft = slider.scrollLeft;
      slider.style.cursor = "grabbing";
    });

    slider.addEventListener("mouseleave", () => {
      isDragging = false;
      slider.style.cursor = "grab";
    });

    slider.addEventListener("mouseup", () => {
      isDragging = false;
      slider.style.cursor = "grab";
    });

    slider.addEventListener("mousemove", (e) => {
      if (!isDragging) return;
      e.preventDefault();
      const x = e.pageX - slider.offsetLeft;
      const walk = (x - startX) * 1.5; // Ускоряем движение
      slider.scrollLeft = scrollLeft - walk;
    });

    // Touch (свайпы для мобильных)
    slider.addEventListener("touchstart", (e) => {
      isDragging = true;
      startX = e.touches[0].pageX - slider.offsetLeft;
      scrollLeft = slider.scrollLeft;
    });

    slider.addEventListener("touchend", () => {
      isDragging = false;
    });

    slider.addEventListener("touchmove", (e) => {
      if (!isDragging) return;
      const x = e.touches[0].pageX - slider.offsetLeft;
      const walk = (x - startX) * 1.5;
      slider.scrollLeft = scrollLeft - walk;
    });
  });
});
