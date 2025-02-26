document.addEventListener("DOMContentLoaded", () => {
  const supportButton = document.getElementById("support-button");

  window.addEventListener("scroll", function () {
    if (window.scrollY > 200) {
      supportButton.classList.add("show");
    } else {
      supportButton.classList.remove("show");
    }
  });

  function updateImages() {
    const images = document.querySelectorAll(".responsive-img");
    const isMobile = window.matchMedia("(max-width: 1024px)").matches;

    images.forEach((img) => {
      img.src = isMobile ? img.dataset.mobile : img.dataset.desktop;
    });
  }

  updateImages();

  window.addEventListener("resize", updateImages);
});
