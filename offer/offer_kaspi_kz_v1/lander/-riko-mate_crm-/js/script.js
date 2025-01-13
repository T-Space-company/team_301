// function scrollToBottom() {
//    var chat = document.querySelector('.chat');
//    chat.scrollTo({
//       top: chat.scrollHeight,
//       behavior: 'smooth'
//    });
// }

// $("[data-number='1']").css('display', 'flex');
// setTimeout(() => {
//    $('#one').css('display', 'block');
//    scrollToBottom()
// }, 1000);
// setTimeout(() => {
//    $('#one').next().css('display', 'block');
//    scrollToBottom()
// }, 2000);
// setTimeout(() => {
//    $('#one').next().next().css('display', 'block');
//    scrollToBottom()
// }, 3000);
// setTimeout(() => {
//    $('#one').next().next().next().css('display', 'block');
//    $('#one').next().next().next().next().css('display', 'block');
//    scrollToBottom()
// }, 4000);
// $('.answer-btn-0').on('click', function () {
//    $(this).parent().parent().next().css('display', 'flex');
//    $(this).parent().parent().next().children().text($(this).text());
//    $(this).parent().parent().next().children().css('display', 'block');
//    scrollToBottom()
//    if ($(this).attr('data-normi') == 'false') {
//       $(this).parent().parent().next().next().css('display', 'flex');
//       $(this).parent().parent().next().next().children('.false_one').css('display', 'flex');
//       $(this).parent().parent().next().next().children('.false_one').children().css('display', 'flex');
//       $(this).next().attr('data-normi', 'false');
//       $(this).prev().attr('data-normi', 'false');
//       scrollToBottom()
//    }
//    else {
//       $(this).parent().parent().next().next().css('display', 'flex');
//       $(this).parent().parent().next().next().children('.true_one').css('display', 'block');
//       $(this).parent().parent().next().next().children('.true_one').children().css('display', 'flex');
//       scrollToBottom()
//    }

// });
// $('.answer-btn-1').on('click', function () {
//    $(this).parent().parent().parent().next().css('display', 'flex');
//    $(this).parent().parent().parent().next().children().text($(this).text());
//    $(this).parent().parent().parent().next().children().css('display', 'block');
//    if ($(this).attr('data-norm') == 'false') {
//       $(this).parent().parent().parent().next().next().css('display', 'flex');
//       $(this).parent().parent().parent().next().next().children('.false_one').css('display', 'flex');
//       $(this).parent().parent().parent().next().next().children('.false_one').children().css('display', 'flex');
//       $(this).next().attr('data-norm', 'false');
//       $(this).next().next().attr('data-norm', 'false');
//       $(this).next().next().next().attr('data-norm', 'false');
//       $(this).next().next().next().next().attr('data-norm', 'false');
//       $(this).prev().attr('data-norm', 'false');
//       scrollToBottom()
//    }
//    else {
//       $(this).parent().parent().parent().next().next().css('display', 'flex');
//       $(this).parent().parent().parent().next().next().children('.true_one').css('display', 'block');
//       $(this).parent().parent().parent().next().next().children('.true_one').children().css('display', 'flex');
//       scrollToBottom()
//    }
// });
// $('.answer-btn-2').on('click', function () {
//    $(this).parent().parent().parent().next().css('display', 'flex');
//    $(this).parent().parent().parent().next().children().text($(this).text());
//    $(this).parent().parent().parent().next().children().css('display', 'block');
//    $(this).parent().parent().parent().next().next().css('display', 'flex');
//    $(this).parent().parent().parent().next().next().children('.true_one').css('display', 'block');
//    $(this).parent().parent().parent().next().next().children('.true_one').children().css('display', 'flex');
//    scrollToBottom()
// });
// $('.answer-btn-3').on('click', function () {
//    $(this).parent().parent().parent().next().css('display', 'flex');
//    $(this).parent().parent().parent().next().children().text($(this).text());
//    $(this).parent().parent().parent().next().children().css('display', 'block');
//    $(this).parent().parent().parent().next().next().css('display', 'flex');
//    $(this).parent().parent().parent().next().next().children('.true_one').css('display', 'block');
//    $(this).parent().parent().parent().next().next().children('.true_one').children().css('display', 'flex');
//    scrollToBottom()
// });
// $('.answer-btn-4').on('click', function () {
//    $(this).parent().parent().parent().next().css('display', 'flex');
//    $(this).parent().parent().parent().next().children().text($(this).text());
//    $(this).parent().parent().parent().next().children().css('display', 'block');
//    $(this).parent().parent().parent().next().next().css('display', 'flex');
//    $(this).parent().parent().parent().next().next().children('.true_one').css('display', 'block');
//    $(this).parent().parent().parent().next().next().children('.true_one').children().css('display', 'flex');
//    scrollToBottom()
// });
// $('.answer-btn-5').on('click', function () {
//    $(this).parent().parent().parent().next().css('display', 'flex');
//    $(this).parent().parent().parent().next().children().text($(this).text());
//    $(this).parent().parent().parent().next().children().css('display', 'block');
//    $(this).parent().parent().parent().next().next().css('display', 'flex');
//    $(this).parent().parent().parent().next().next().children('.true_one').css('display', 'block');
//    $(this).parent().parent().parent().next().next().children('.true_one').children().css('display', 'flex');
//    scrollToBottom()
// });
// $('.answer-btn-6').on('click', function () {
//    $(this).parent().parent().parent().next().css('display', 'flex');
//    $(this).parent().parent().parent().next().children().text($(this).text());
//    $(this).parent().parent().parent().next().children().css('display', 'block');
//    $(this).parent().parent().parent().next().next().css('display', 'flex');
//    $(this).parent().parent().parent().next().next().children('.true_one').css('display', 'block');
//    $(this).parent().parent().parent().next().next().children('.true_one').children().css('display', 'flex');
//    scrollToBottom()
// });

document.addEventListener("DOMContentLoaded", function () {
  const pageElement = document.getElementById("page");

  if (pageElement) {
    function scrollToBottom() {
      var chat = document.querySelector(".chat");
      chat.scrollTo({
        top: chat.scrollHeight,
        behavior: "smooth",
      });
    }

    // Показ первого вопроса

    $("[data-number='1']").css("display", "flex");
    setTimeout(() => {
      $("#one").css("display", "block");
      scrollToBottom();
    }, 1000);
    setTimeout(() => {
      $("#one").next().css("display", "block");
      scrollToBottom();
    }, 2000);
    setTimeout(() => {
      $("#one").next().next().css("display", "block");
      scrollToBottom();
    }, 3000);
    setTimeout(() => {
      $("#one").next().next().next().css("display", "block");
      $("#one").next().next().next().next().css("display", "block");
      scrollToBottom();
    }, 4000);

    // Обработчик ответа на первый вопрос
    $(".answer-btn-0").on("click", function () {
      $(this).parent().parent().next().css("display", "flex");
      $(this).parent().parent().next().children().text($(this).text());
      $(this).parent().parent().next().children().css("display", "block");
      scrollToBottom();
      if ($(this).attr("data-norm") == "false") {
        $(this).parent().parent().next().next().css("display", "flex");
        $(this)
          .parent()
          .parent()
          .next()
          .next()
          .children(".false_one")
          .css("display", "flex");
        $(this)
          .parent()
          .parent()
          .next()
          .next()
          .children(".false_one")
          .children()
          .css("display", "flex");
        $(this).next().attr("data-norm", "false");
        $(this).prev().attr("data-norm", "false");
        scrollToBottom();
      } else {
        $(this).parent().parent().next().next().css("display", "flex");
        $(this)
          .parent()
          .parent()
          .next()
          .next()
          .children(".true_one")
          .css("display", "block");
        $(this)
          .parent()
          .parent()
          .next()
          .next()
          .children(".true_one")
          .children()
          .css("display", "flex");
        scrollToBottom();
      }
    });

    // Обработчик ответа на второй вопрос
    $(".answer-btn-1").on("click", function () {
      $(this).parent().parent().parent().next().css("display", "flex");
      $(this).parent().parent().parent().next().children().text($(this).text());
      $(this)
        .parent()
        .parent()
        .parent()
        .next()
        .children()
        .css("display", "block");
      if ($(this).attr("data-norm") == "false") {
        $(this).parent().parent().parent().next().next().css("display", "flex");
        $(this)
          .parent()
          .parent()
          .parent()
          .next()
          .next()
          .children(".false_one")
          .css("display", "flex");
        $(this)
          .parent()
          .parent()
          .parent()
          .next()
          .next()
          .children(".false_one")
          .children()
          .css("display", "flex");
        $(this).next().attr("data-norm", "false");
        $(this).next().next().attr("data-norm", "false");
        $(this).next().next().next().attr("data-norm", "false");
        $(this).next().next().next().next().attr("data-norm", "false");
        $(this).prev().attr("data-norm", "false");
        scrollToBottom();
      } else {
        $(this).parent().parent().parent().next().next().css("display", "flex");
        $(this)
          .parent()
          .parent()
          .parent()
          .next()
          .next()
          .children(".true_one")
          .css("display", "block");
        $(this)
          .parent()
          .parent()
          .parent()
          .next()
          .next()
          .children(".true_one")
          .children()
          .css("display", "flex");
        scrollToBottom();
      }
    });

    // Обработчик ответа на третий вопрос
    $(".answer-btn-2").on("click", function () {
      $(this).parent().parent().parent().next().css("display", "flex");
      $(this).parent().parent().parent().next().children().text($(this).text());
      $(this)
        .parent()
        .parent()
        .parent()
        .next()
        .children()
        .css("display", "block");
      $(this).parent().parent().parent().next().next().css("display", "flex");
      $(this)
        .parent()
        .parent()
        .parent()
        .next()
        .next()
        .children(".true_one")
        .css("display", "block");
      $(this)
        .parent()
        .parent()
        .parent()
        .next()
        .next()
        .children(".true_one")
        .children()
        .css("display", "flex");
      scrollToBottom();
    });

    // Обработчик ответа на четвертый вопрос
    $(".answer-btn-3").on("click", function () {
      $(this).parent().parent().parent().next().css("display", "flex");
      $(this).parent().parent().parent().next().children().text($(this).text());
      $(this)
        .parent()
        .parent()
        .parent()
        .next()
        .children()
        .css("display", "block");
      $(this).parent().parent().parent().next().next().css("display", "flex");
      $(this)
        .parent()
        .parent()
        .parent()
        .next()
        .next()
        .children(".true_one")
        .css("display", "block");
      $(this)
        .parent()
        .parent()
        .parent()
        .next()
        .next()
        .children(".true_one")
        .children()
        .css("display", "flex");
      scrollToBottom();
    });

    // Обработчик ответа на пятый вопрос
    $(".answer-btn-4").on("click", function () {
      $(this).parent().parent().parent().next().css("display", "flex");
      $(this).parent().parent().parent().next().children().text($(this).text());
      $(this)
        .parent()
        .parent()
        .parent()
        .next()
        .children()
        .css("display", "block");
      $(this).parent().parent().parent().next().next().css("display", "flex");
      $(this)
        .parent()
        .parent()
        .parent()
        .next()
        .next()
        .children(".true_one")
        .css("display", "block");
      $(this)
        .parent()
        .parent()
        .parent()
        .next()
        .next()
        .children(".true_one")
        .children()
        .css("display", "flex");
      scrollToBottom();
    });

    // Обработчик ответа на шестой вопрос
    $(".answer-btn-5").on("click", function () {
      $(this).parent().parent().parent().next().css("display", "flex");
      $(this).parent().parent().parent().next().children().text($(this).text());
      $(this)
        .parent()
        .parent()
        .parent()
        .next()
        .children()
        .css("display", "block");
      $(this).parent().parent().parent().next().next().css("display", "flex");
      $(this)
        .parent()
        .parent()
        .parent()
        .next()
        .next()
        .children(".true_one")
        .css("display", "block");
      $(this)
        .parent()
        .parent()
        .parent()
        .next()
        .next()
        .children(".true_one")
        .children()
        .css("display", "flex");
      scrollToBottom();
    });

    // Обработчик ответа на седьмой вопрос
    $(".answer-btn-6").on("click", function () {
      $(this).parent().parent().parent().next().css("display", "flex");
      $(this).parent().parent().parent().next().children().text($(this).text());
      $(this)
        .parent()
        .parent()
        .parent()
        .next()
        .children()
        .css("display", "block");
      $(this).parent().parent().parent().next().next().css("display", "flex");
      $(this)
        .parent()
        .parent()
        .parent()
        .next()
        .next()
        .children(".true_one")
        .css("display", "block");
      $(this)
        .parent()
        .parent()
        .parent()
        .next()
        .next()
        .children(".true_one")
        .children()
        .css("display", "flex");
      scrollToBottom();
    });
  }
});
