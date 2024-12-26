document.addEventListener("DOMContentLoaded", function () {
  const body = document.querySelector("body");

  const notifications = [
    { img: "./images/Pic-0.png", city: "Москвы" },
    { img: "./images/Pic-1.png", city: "Новосибирска" },
    { img: "./images/Pic-2.png", city: "Санкт-Петербурга" },
    { img: "./images/Pic-3.png", city: "Екатеринбурга" },
    { img: "./images/Pic-4.png", city: "Казани" },
    { img: "./images/Pic-5.png", city: "Челябинска" },
    { img: "./images/Pic-6.png", city: "Москвы" },
    { img: "./images/Pic-7.png", city: "Сочи" },
    { img: "./images/Pic-8.png", city: "Ростова-на-Дону" },
    { img: "./images/Pic-9.png", city: "Санкт-Петербурга" },
  ];

  function createNotification(img, city) {
    const notification = document.createElement("div");
    notification.classList.add("notification");

    const avatar = document.createElement("img");
    avatar.setAttribute("src", img);
    avatar.classList.add("notification-avatar");
    notification.appendChild(avatar);

    const messageP = document.createElement("p");
    messageP.classList.add("notification-text");
    messageP.textContent = `Пользователь из ${city} только что присоеденился к программе`;
    notification.appendChild(messageP);

    notification.style.transform = "translateX(100%)";

    body.appendChild(notification);

    setTimeout(() => {
      notification.style.transition = "transform 0.5s ease-in-out";
      notification.style.transform = "translateX(0)";
    }, 1500);

    setTimeout(() => {
      notification.style.transform = "translateX(100%)";

      setTimeout(() => notification.remove(), 500);
    }, 3000 + 500);
  }

  function scheduleNotifications(index = 0) {
    if (index >= notifications.length) return;

    const { img, city } = notifications[index];
    createNotification(img, city);

    setTimeout(() => {
      scheduleNotifications(index + 1);
    }, 4500);
  }
  scheduleNotifications();
});
