document.addEventListener("DOMContentLoaded", () => {
  const ticker = document.getElementById("ticker");
  const clone = document.getElementById("ticker-clone");

  clone.innerHTML = ticker.innerHTML;
});
