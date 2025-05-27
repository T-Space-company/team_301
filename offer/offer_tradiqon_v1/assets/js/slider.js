document.addEventListener("DOMContentLoaded", function () {
  if (window.innerWidth > 1024) return;

  const track = document.querySelector(".tes");
  const slides = document.querySelectorAll(".tes .element");
  let currentIndex = 0;
  let isDragging = false;
  let startX = 0;

  function goToSlide(index) {
    currentIndex = (index + slides.length) % slides.length;
    const offset = -currentIndex * 100;
    track.style.transform = `translateX(${offset}%)`;
  }

  setInterval(() => {
    goToSlide(currentIndex + 1);
  }, 5000);

  track.addEventListener("touchstart", (e) => {
    isDragging = true;
    startX = e.touches[0].clientX;
  });

  track.addEventListener("touchmove", (e) => {
    if (!isDragging) return;
    const deltaX = e.touches[0].clientX - startX;
    if (Math.abs(deltaX) > 50) {
      goToSlide(currentIndex + (deltaX < 0 ? 1 : -1));
      isDragging = false;
    }
  });

  track.addEventListener("touchend", () => {
    isDragging = false;
  });

  goToSlide(0);
});
