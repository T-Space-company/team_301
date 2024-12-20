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
  "form.css?v=15",
  "intlTelInput.css",
  "modal-error.css"
];


jsFiles = [
  // "libs/jquery-3.6.0.min.js",
  "libs/intlTelInput.js",
  "libs/utils.js",
  "libs/jquery.maskedinput.js",  
  "main-form.js?v=113193121322",
  "libphonenumber-js.min.js"
];

// Загрузка всех CSS файлов
cssFiles.forEach((filename) => {
  loadCSS(filename);
});

// Загрузка всех JS файлов
jsFiles.forEach((filename) => {
  loadJSModule(filename);
});