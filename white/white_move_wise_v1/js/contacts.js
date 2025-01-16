document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("main-form");
  if (form) {
    form.classList.remove("contact__form");
    form.classList.add("contacts-page__form");

    setTimeout(function () {
      const contacts = document.getElementById("form-contacts");
      console.log(contacts);
      if (contacts) {
        contacts.remove();
      }
    }, 100);
  }
});
