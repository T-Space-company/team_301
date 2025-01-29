document.addEventListener("DOMContentLoaded", () => {
  const scrollButton = document.querySelector(".scroll-top-button");
  const section = document.querySelector(".section__addons");
  const buttons = document.querySelector(".buttons-container");

  function scrollToTop() {
    window.scrollTo({ top: 0, behavior: "smooth" });
  }

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          buttons.classList.add("visible");
        } else {
          buttons.classList.remove("visible");
        }
      });
    },
    {
      threshold: 0.1,
    }
  );

  observer.observe(section);

  scrollButton.addEventListener("click", scrollToTop);
});
