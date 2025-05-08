document.querySelectorAll(".ticker-content").forEach((content) => {
  const clone = content.cloneNode(true);
  clone.classList.add("clone");
  clone.querySelectorAll("span").forEach((el) => {
    content.appendChild(el.cloneNode(true));
  });
});
