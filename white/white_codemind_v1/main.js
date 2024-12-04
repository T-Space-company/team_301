document.addEventListener("DOMContentLoaded", () => {
  const button = document.querySelector(".section-hero__button");
  const modal = document.querySelector(".modal");
  const faqItems = document.querySelectorAll(".section-faq__item");
  const faqButtons = document.querySelectorAll(".section-faq__button");

  console.log();

  function openModal() {
    modal.classList.add("visible");
    document.body.style.overflow = "hidden";
  }

  function closeModal() {
    if (modal.classList.contains("visible")) {
      modal.classList.remove("visible");
      document.body.style.overflow = "";
    } else {
      return;
    }
  }

  button.addEventListener("click", openModal);

  modal.addEventListener("click", (event) => {
    if (
      modal.classList.contains("visible") &&
      event.target === event.currentTarget
    ) {
      closeModal();
    }
  });

  faqItems.forEach((faqItem) => {
    const textContent = faqItem.querySelector(".section-faq__item_text");

    if (textContent) {
      textContent.addEventListener("click", () => {
        faqItem.removeAttribute("open");
      });
    }
  });

  faqButtons.forEach((faqButton) => {
    faqButton.addEventListener("click", () => {
      const parentFaqItem = faqButton.closest(".section-faq__item");
      if (parentFaqItem) {
        parentFaqItem.setAttribute("open", "");
      }
    });
  });
});
