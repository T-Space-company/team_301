document.addEventListener("DOMContentLoaded", () => {
  const startBtn = document.getElementById("chest-button");
  const chests = document.getElementById("chests");
  const modal = document.getElementById("modal");

  function openChests() {
    chests.classList.remove("chests");
    chests.classList.add("open-effect");

    setTimeout(() => {
      chests.src = "./assets/img/open_chests_mob.svg";
      chests.classList.remove("open-effect");
      modal.classList.remove("hidden");
      body.style.overflow = "hidden";
    }, 1500);
  }

  startBtn.addEventListener("click", openChests);
});
