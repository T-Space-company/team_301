document.addEventListener("DOMContentLoaded", function () {
  const main = document.querySelector("main");

  const hour1 = document.getElementById("hour1");
  const hour2 = document.getElementById("hour2");
  const minute1 = document.getElementById("minute1");
  const minute2 = document.getElementById("minute2");
  const second1 = document.getElementById("second1");
  const second2 = document.getElementById("second2");

  const sumInput = document.getElementById("sum");
  const profitOutput = document.getElementById("profit");
  const timeSelect = document.getElementById("time");

  const notifications = [
    { img: "./img/Pic-0.png", city: "Москвы" },
    { img: "./img/Pic-1.png", city: "Новосибирска" },
    { img: "./img/Pic-2.png", city: "Санкт-Петербурга" },
    { img: "./img/Pic-3.png", city: "Екатеринбурга" },
    { img: "./img/Pic-4.png", city: "Казани" },
    { img: "./img/Pic-5.png", city: "Челябинска" },
    { img: "./img/Pic-6.png", city: "Москвы" },
    { img: "./img/Pic-7.png", city: "Сочи" },
    { img: "./img/Pic-8.png", city: "Ростова-на-Дону" },
    { img: "./img/Pic-9.png", city: "Санкт-Петербурга" },
  ];

  function updateTimer() {
    let hours = parseInt(hour1.textContent + hour2.textContent);
    let minutes = parseInt(minute1.textContent + minute2.textContent);
    let seconds = parseInt(second1.textContent + second2.textContent);

    if (seconds > 0) {
      seconds -= 1;
    } else {
      if (minutes > 0) {
        minutes -= 1;
        seconds = 59;
      } else if (hours > 0) {
        hours -= 1;
        minutes = 59;
        seconds = 59;
      } else {
        clearInterval(timerInterval);
        return;
      }
    }

    const hoursStr = String(hours).padStart(2, "0");
    const minutesStr = String(minutes).padStart(2, "0");
    const secondsStr = String(seconds).padStart(2, "0");

    hour1.textContent = hoursStr[0];
    hour2.textContent = hoursStr[1];
    minute1.textContent = minutesStr[0];
    minute2.textContent = minutesStr[1];
    second1.textContent = secondsStr[0];
    second2.textContent = secondsStr[1];
  }

  function updateProfit() {
    let sumValue = parseFloat(sumInput.value) || 0;
    if (sumValue < 10000) {
      sumValue = 10000;
    } else if (sumValue > 1000000) {
      sumValue = 1000000;
    }
    const profit = calculateProfit(sumValue);
    profitOutput.textContent = `${Math.round(profit)} ₽`;
  }

  function calculateProfit(sum) {
    const selectedValue = parseInt(timeSelect.value, 10);
    const rate = 4;
    let result = 0;
    switch (selectedValue) {
      case 1:
        result = sum * rate;
        break;
      case 3:
        result = sum * rate * 1.4;
        break;
      case 6:
        result = sum * rate * 1.8;
        break;
      case 12:
        result = sum * rate * 2.2;
        break;
      default:
        console.error("Invalid time selected");
    }
    return result;
  }

  function createNotification(img, city) {
    const notification = document.createElement("div");
    notification.classList.add("notification");

    const avatar = document.createElement("img");
    avatar.setAttribute("src", img);
    avatar.classList.add("notification-avatar");
    notification.appendChild(avatar);

    const messageP = document.createElement("p");
    messageP.classList.add("notification-text");
    messageP.textContent = `Пользователь из ${city} только что оставил заявку`;
    notification.appendChild(messageP);

    notification.style.transform = "translateX(100%)";

    main.appendChild(notification);

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

  sumInput.addEventListener("blur", updateProfit);
  timeSelect.addEventListener("change", updateProfit);

  const timerInterval = setInterval(updateTimer, 1000);

  sumInput.addEventListener("blur", () => {
    const min = parseInt(sumInput.min, 10);
    const max = parseInt(sumInput.max, 10);
    let value = parseInt(sumInput.value, 10);

    if (value < min) {
      sumInput.value = min;
      alert("Минимально допустимая сумма - 10000₽");
    } else if (value > max) {
      sumInput.value = max;
      alert("Максимально допустимая сумма - 1000000₽");
    }
  });
});
