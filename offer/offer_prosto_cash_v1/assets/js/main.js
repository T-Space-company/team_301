document.addEventListener("DOMContentLoaded", () => {
  const body = document.querySelector("body");
  const slider = document.querySelector(".main__people");
  const scrollbar = document.querySelector(".scrollbar");
  const scrollbarThumb = document.querySelector(".scrollbar-thumb");
  const quiz1 = document.getElementById("modal-1");
  const quiz1Button = document.getElementById("modal-btn-1");
  const quiz2 = document.getElementById("modal-2");
  const quiz2Button = document.getElementById("modal-btn-2");
  const form = document.getElementById("modal-form");
  const chooseButton = document.getElementById("choose-btn");
  const professionals = document.querySelectorAll(".card__photo");

  function saveAnswer(question, answer) {
    let answers = JSON.parse(localStorage.getItem("answers")) || [];
    answers.push(`${question}: ${answer}`);
    localStorage.setItem("answers", JSON.stringify(answers));
  }

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

  const openQuiz = () => {
    quiz1.classList.remove("hidden");
    body.style.overflow = "hidden";
  };

  professionals.forEach((item) => {
    item.addEventListener("click", openQuiz);
  });

  chooseButton.addEventListener("click", openQuiz);

  quiz1Button.addEventListener("click", () => {
    saveAnswer("Вам исполнился 21 год?", "Да");
    quiz1.classList.add("hidden");
    quiz2.classList.remove("hidden");
  });

  quiz2Button.addEventListener("click", () => {
    saveAnswer("Вы являетесь гражданином РФ?", "Да");
    quiz2.classList.add("hidden");
    form.classList.remove("hidden");
  });
});
