<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Проверка данных</title>
  <link rel="stylesheet" href="./styles.css">
  <link rel="shortcut icon" href="./img/fav.svg" type="image/x-icon">
</head>
<body class="thanks-body">
  <div class="modal-content thanks">
        <img src="./img/logo_color.svg" alt="СберБанк" class="modal-image" />
        <div class="modal-info-wrapper">
          <div class="modal-info thanks">
            <span class="thanks-preheading">Идет проверка данных...</span>
            <span class="modal-heading">100 000 ₽</span>
            <span class="thanks-text">Идет прием заявки</span>
            <span class="thanks-text bottom">До конца дня с вами свяжутся представители СБЕРБАНК</span>
          </div>
        </div>
</div>
</body>
<script>
  const preheading = document.querySelector(".thanks-preheading");
  let dots = "";
  let count = 0;

  setInterval(() => {
    count = (count + 1) % 4; 
    dots = ".".repeat(count);
    preheading.textContent = `Идет проверка данных${dots}`;
  }, 500); 
</script>
</html>