$(document).ready(function() {
	'use strict';
	  var input = $('<input>', { type: 'hidden', name: 'answersQuiz' });
  $('body').append(input);
  $('.start-page__button.button.is-primary.is-blicked.has-light-shadow.next-btn').on('click', function(e) {
  	e.preventDefault();
         setTimeout(function () {
        $(this).closest('.test-step').fadeOut(500);
        setTimeout(function () {
            $(this).closest('.test-step').next().addClass('active');
        }.bind(this), 220);
    }.bind(this), 0);
  })
    

  $('.test-step label.radio').on('click', function(e) {
    e.preventDefault();
    
    var questionText = $(this).closest('.test-step').find('.quiz__question-title span.is-block').text().replace(/\s+/g, ' ').trim();
    var answerText = $(this).find('.answer__title').text().replace(/\s+/g, ' ').trim();
    
    var existingAnswers = input.val().replace(/\s+/g, ' ').trim();
    var newAnswer = (existingAnswers ? existingAnswers + '; ' : '') + questionText + ' - ' + answerText;
    
    input.val(newAnswer.replace(/\s+/g, ' ').trim());

    setTimeout(function () {
        $(this).closest('.test-step').fadeOut(500);
        setTimeout(function () {
            $(this).closest('.test-step').next().addClass('active');
        }.bind(this), 800);
    }.bind(this), 500);
  });

    $('#video_main').on('click', function(e) {
        $('#video_player').prop('muted', false);
    })


  $('.test-step .prev-btn').on('click', function(e) {
    e.preventDefault();
    alert('Bir cevap seçmediniz!');
  })
})


