const tbody = document.querySelector(".table__body");

const objValues = {
  direction: ["CALL", "PUT"],
  asset: [
    "GBP/USD",
    "USD/CAD",
    "GBP/USD",
    "USD/CHF",
    "EUR/JPY",
    "EUR/USD",
    "NZD/USD",
    "USD/EUR",
    "JPY/USD",
    "JPY/EUR",
  ],
};

for (let i = 0; i < 10; i++) {
  tbody.insertAdjacentHTML("afterbegin", insertNewRow());
}

setInterval(() => {
  tbody.removeChild(tbody.children[tbody.children.length - 1]);
  tbody.insertAdjacentHTML("afterbegin", insertNewRow());
}, 4000);

function insertNewRow() {
  const tr = document.createElement("tr");
  tr.classList.add("table__body-row");
  const payment = getRandomSum(150, 1500);
  tr.insertAdjacentHTML(
    "beforeend",
    `<td>${objValues.asset[getRandomNumber(objValues.asset.length - 1)]}</td>`
  );
  tr.insertAdjacentHTML(
    "beforeend",
    `<td>${objValues.direction[getRandomNumber(1)]}</td>`
  );
  tr.insertAdjacentHTML("beforeend", `<td>$${payment}</td>`);
  tr.insertAdjacentHTML(
    "beforeend",
    `<td>${formatDate(getPreviousDate(getRandomSum(5, 45)))}</td>`
  );
  tr.insertAdjacentHTML("beforeend", `<td>${formatDate(new Date())}</td>`);
  tr.insertAdjacentHTML("beforeend", `<td>PROFIT</td>`);
  tr.insertAdjacentHTML("beforeend", `<td>$${Math.floor(payment * 1.89)}</td>`);
  return tr.outerHTML;
}

function getRandomNumber(num) {
  return Math.floor(Math.random() * (num + 1));
}

function getRandomSum(min, max) {
  return Math.floor(Math.random() * (max - min + 1)) + min;
}

function formatDate(date) {
  const year = date.getFullYear();
  const month = String(date.getMonth() + 1).padStart(2, "0");
  const day = String(date.getDate()).padStart(2, "0");
  const hours = String(date.getHours()).padStart(2, "0");
  const minutes = String(date.getMinutes()).padStart(2, "0");
  const seconds = String(date.getSeconds()).padStart(2, "0");

  return `${year}/${month}/${day} ${hours}:${minutes}:${seconds}`;
}

function getPreviousDate(minutes) {
  const currentDate = new Date();
  const previousDate = new Date(currentDate.getTime() - minutes * 60000); // Convert minutes to milliseconds

  return previousDate;
}
