document.addEventListener("DOMContentLoaded", () => {
  const agreeBtn = document.getElementById("cookie-btn");

  function acceptCookies() {
    document.getElementById("cookie-banner").style.display = "none";
  }

  window.onload = function () {
    document.getElementById("cookie-banner").style.display = "flex";
  };

  agreeBtn.addEventListener("click", acceptCookies);
});
