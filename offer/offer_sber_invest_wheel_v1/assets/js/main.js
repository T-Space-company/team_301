document.addEventListener("DOMContentLoaded", () => {
  const wheel = document.querySelector(".main__wheel");
  const wheelContent = document.querySelector(".wheel__segments");
  const wheelBtn = document.querySelector(".wheel__button");
  const segments = document.querySelectorAll(".segment");
  const totalSegments = segments.length;
  const degreesPerSegment = 360 / totalSegments;

  wheel.classList.add("wheel__animated");
  segments.forEach((segment, index) => {
    segment.addEventListener("click", () => {
      wheelBtn.classList.add("active");
      wheel.classList.remove("wheel__animated");
      segments.forEach((s) => s.classList.remove("active"));
      segment.classList.add("active");

      const rotateToTop = 360 - index * degreesPerSegment;
      wheelContent.style.transform = `rotate(${rotateToTop}deg)`;
    });
  });

  wheelBtn.addEventListener("click", () => {
    if (
      wheelBtn.classList.contains("active") &&
      Array.from(segments).some((s) => s.classList.contains("active"))
    ) {
      console.log(true);
    }
    return;
  });
});
