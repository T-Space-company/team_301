// Функция для динамической загрузки CSS файлов
function loadCSS(filename) {
  const link = document.createElement("link");
  link.rel = "stylesheet";
  link.type = "text/css";
  link.href = `form/css/${filename}`;
  document.head.appendChild(link);
}

// Функция для динамической загрузки JS модулей
function loadJSModule(filename) {
  const script = document.createElement("script");
  script.type = "module";
  script.src = `form/js/${filename}`;
  document.body.appendChild(script);
}

// Массив с именами CSS файлов для загрузки
const cssFiles = [
  "all.min.css",
  "flags.css",
  "form.css",
  "intlTelInput.css",
  "modal-error.css"
];


jsFiles = [
  "main-form.js?v=45646"
];


// Загрузка всех CSS файлов
cssFiles.forEach((filename) => {
  loadCSS(filename);
});

// Загрузка всех JS файлов
jsFiles.forEach((filename) => {
  loadJSModule(filename);
});