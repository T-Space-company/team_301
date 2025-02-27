export default function startModalFlow() {
  let currentModalIndex = 1;
  const totalModals = 6;
  let answers = [];

  function saveAnswer(question, answer) {
    answers.push(`${question}: ${answer}`);
    localStorage.setItem("answers", JSON.stringify(answers));
  }

  function showModal(index) {
    document.querySelectorAll(".modal").forEach((modal) => {
      modal.classList.add("hidden");
    });
    const modal = document.getElementById(`modal-${index}`);
    if (modal) {
      modal.classList.remove("hidden");
    }
  }

  function handleNextModal(event, nextIndex, question, answer) {
    event.preventDefault();

    // Save only answers for modal-1, modal-2, and modal-6
    if (
      currentModalIndex === 1 ||
      currentModalIndex === 2 ||
      currentModalIndex === 6
    ) {
      saveAnswer(question, answer);
    }

    document
      .getElementById(`modal-${currentModalIndex}`)
      .classList.add("hidden");
    currentModalIndex = nextIndex;

    if (currentModalIndex <= totalModals) {
      showModal(currentModalIndex);
    } else {
      showModal("form");
    }
  }

  document
    .querySelector("#modal-1 .modal__button--yes")
    ?.addEventListener("click", (event) => {
      handleNextModal(event, 2, "Вы гражданин РФ?", "Да");
    });

  document
    .querySelector("#modal-1 .modal__button--no a")
    ?.addEventListener("click", (event) => {
      event.stopPropagation();
    });

  document
    .querySelector("#modal-2 .modal__button--18 a")
    ?.addEventListener("click", (event) => {
      event.stopPropagation();
    });

  document
    .querySelectorAll("#modal-2 .modal__button--second:not(.modal__button--18)")
    ?.forEach((button) => {
      button.addEventListener("click", (event) => {
        handleNextModal(
          event,
          3,
          "Выберите ваш возраст",
          button.innerText.trim()
        );
      });
    });

  document
    .querySelectorAll("#modal-3 .modal__button--third")
    ?.forEach((button) => {
      button.addEventListener("click", (event) => {
        handleNextModal(event, 4);
      });
    });

  document
    .querySelectorAll("#modal-4 .modal__button--fourth")
    ?.forEach((button) => {
      button.addEventListener("click", (event) => {
        handleNextModal(event, 5);
      });
    });

  document
    .querySelectorAll("#modal-5 .modal__button--fifth")
    ?.forEach((button) => {
      button.addEventListener("click", (event) => {
        handleNextModal(event, 6);
      });
    });

  document
    .querySelectorAll("#modal-6 .modal__button--sixth")
    ?.forEach((button) => {
      button.addEventListener("click", (event) => {
        handleNextModal(
          event,
          "form",
          "Какую сумму инвестиций вы готовы рассмотреть для стабильного пассивного дохода?",
          button.innerText.trim()
        );
      });
    });

  showModal(1);
}
