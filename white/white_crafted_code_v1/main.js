document.addEventListener("DOMContentLoaded", () => {
  const form = document.querySelector(".main__section-form");
  const firstNameInput = document.getElementById("firstName");
  const emailInput = document.getElementById("email");
  const phoneInput = document.getElementById("phone");

  form.addEventListener("submit", (event) => {
    let isValid = true;

    [firstNameInput, emailInput, phoneInput].forEach((input) => {
      input.classList.remove("error");
    });

    const nameRegex = /^[A-Za-zА-Яа-я]{3,10}$/;
    if (!nameRegex.test(firstNameInput.value.trim())) {
      isValid = false;
      firstNameInput.classList.add("error");
      alert(
        "Имя должно содержать только буквы и быть длиной от 3 до 10 символов."
      );
    }

    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(emailInput.value.trim())) {
      isValid = false;
      emailInput.classList.add("error");
      alert("Введите корректный email. Пример: example@example.com");
    }

    const phoneRegex = /^\+\d{1}\s\d{3}\s\d{3}-\d{2}-\d{2}$/;
    if (!phoneRegex.test(phoneInput.value.trim())) {
      isValid = false;
      phoneInput.classList.add("error");
      alert("Введите корректный номер телефона. Пример: +7 902 284-22-79");
    }

    if (!isValid) {
      event.preventDefault();
    }
  });
});
