document.addEventListener("DOMContentLoaded", () => {
  const slider = document.querySelector(".main__people");
  const scrollbar = document.querySelector(".scrollbar");
  const scrollbarThumb = document.querySelector(".scrollbar-thumb");

  function isMobile() {
    return window.innerWidth < 1024;
  }

  function updateScrollBar() {
    if (!isMobile()) {
      scrollbar.style.display = "none";
      return;
    } else {
      scrollbar.style.display = "block";
    }

    const scrollbarWidth = scrollbar.clientWidth;
    const thumbWidth = scrollbarThumb.clientWidth;
    const maxThumbMove = scrollbarWidth - thumbWidth;
    const maxScroll = slider.scrollWidth - slider.clientWidth;

    slider.addEventListener("scroll", () => {
      const scrollLeft = slider.scrollLeft;
      const thumbPosition = (scrollLeft / maxScroll) * maxThumbMove;
      scrollbarThumb.style.transform = `translateX(${thumbPosition}px)`;
    });

    let isDragging = false;
    let startX, startThumbLeft, startScrollLeft;

    function startDrag(e) {
      if (!isMobile()) return;
      isDragging = true;
      startX = e.touches ? e.touches[0].clientX : e.clientX;
      startThumbLeft =
        scrollbarThumb.getBoundingClientRect().left -
        scrollbar.getBoundingClientRect().left;
      startScrollLeft = slider.scrollLeft;
      document.body.style.userSelect = "none";
    }

    function moveDrag(e) {
      if (!isDragging || !isMobile()) return;

      const clientX = e.touches ? e.touches[0].clientX : e.clientX;
      const deltaX = clientX - startX;
      let newLeft = startThumbLeft + deltaX;

      newLeft = Math.max(0, Math.min(maxThumbMove, newLeft));
      scrollbarThumb.style.transform = `translateX(${newLeft}px)`;

      const scrollPosition = (newLeft / maxThumbMove) * maxScroll;
      slider.scrollLeft = scrollPosition;
    }

    function stopDrag() {
      isDragging = false;
      document.body.style.userSelect = "";
    }

    scrollbarThumb.addEventListener("mousedown", startDrag);
    document.addEventListener("mousemove", moveDrag);
    document.addEventListener("mouseup", stopDrag);

    scrollbarThumb.addEventListener("touchstart", startDrag, { passive: true });
    document.addEventListener("touchmove", moveDrag, { passive: false });
    document.addEventListener("touchend", stopDrag);
  }

  updateScrollBar();
  window.addEventListener("resize", updateScrollBar);
});
