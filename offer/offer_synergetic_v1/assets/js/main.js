document.addEventListener("DOMContentLoaded", function () {
  const detailsElements = document.querySelectorAll("details");
  const body = document.querySelector("body");
  const modal = document.getElementById("modal");
  const formButtons = document.querySelectorAll(".form-button");

  formButtons.forEach((btn) => {
    btn.addEventListener("click", () => {
      modal.classList.remove("hidden");
      body.style.overflow = "hidden";
    });
  });

  window.addEventListener("click", (event) => {
    if (event.target === modal) {
      modal.classList.add("hidden");
      body.style.overflow = "auto";
    }
  });

  detailsElements.forEach((detail) => {
    const summary = detail.querySelector("summary");
    const content = detail.querySelector(".details-content");

    summary.addEventListener("click", function (event) {
      event.preventDefault();

      let padding = window.innerWidth <= 1024 ? 42 : 64;

      if (!detail.open) {
        content.style.display = "block";
        let height = content.scrollHeight + padding + "px";
        content.style.maxHeight = height;

        setTimeout(() => {
          detail.open = true;
        }, 100);
      } else {
        content.style.maxHeight = "0px";

        setTimeout(() => {
          detail.open = false;
          content.style.display = "none";
        }, 100);
      }
    });
  });
});
