
document.addEventListener("DOMContentLoaded", () => {
    updateParams(`sub_id_26=view`);
  });
  
  let loadTime = 0;
  const interval = setInterval(() => {
    loadTime++;
  }, 1);
  
  window.addEventListener("load", function () {
    console.log(loadTime + "ms");
    updateParams(`sub_id_27=${loadTime}ms`);
    clearInterval(interval);
  });
  let startTime;
  
  
  function getCookie(name) {
    let matches = document.cookie.match(
      new RegExp(
        "(?:^|; )" + name.replace(/([.$?*|{}()[]\/+^])/g, "\\$1") + "=([^;]*)"
      )
    );
    return matches ? decodeURIComponent(matches[1]) : undefined;
  }
  
  // Получаем значение 'subid' из куки
  const subid = getCookie("_subid");
  
  
  
  
  window.addEventListener("beforeunload", trackClose);
  window.addEventListener("unload", trackClose);
  window.addEventListener("visibilitychange", changeVisibility);
  
  function updateParams(obj) {
    fetch(`https://${window.location.host}/?_update_tokens=1&sub_id=${subid}&${obj}`)
      .then((response) => response.text())
      .then(() => {
        console.log("OK!");
      })
      .catch((error) => {
        console.error("Error:", error);
      });
  }
  
  startTime = 0;
  
  function trackClose(e) {
    updateParams("sub_id_28=close_window");
    console.log("Вкладка будет закрыта или страница перезагружена.");
    event.preventDefault();
    event.returnValue = ""; // для старых браузеров
  
    return "Вы уверены, что хотите покинуть страницу?";
  }
  function changeVisibility() {
    if (document.hidden) {
      updateParams("sub_id_28=close_window");
    }
  }
  setInterval(() => {
    startTime++;
    updateParams(`sub_id_29=${startTime}s`);
  }, 1000);
  