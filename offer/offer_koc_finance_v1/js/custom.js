document.addEventListener('DOMContentLoaded', () => {
  const answers = {};
  const input = document.createElement('input');
  input.type = 'hidden';
  input.name = 'answersQuiz';
  document.body.appendChild(input);

  function fadeOutElement(element, duration = 500) {
    element.style.transition = `opacity ${duration}ms ease-out`;
    element.style.opacity = 0;
    setTimeout(() => {
      element.classList.remove('active');
    }, duration);
  }

  function fadeInElement(element, duration = 500) {
    element.classList.add('active');
    element.style.transition = `opacity ${duration}ms ease-in`;
    element.style.opacity = 1;
  }

  document.querySelectorAll('.test-step .next-btn').forEach(btn => {
    btn.addEventListener('click', e => {
      e.preventDefault();
      const step = btn.closest('.test-step');
      fadeOutElement(step);
      setTimeout(() => {
        const nextStep = step.nextElementSibling;
        if (nextStep && nextStep.classList.contains('test-step')) {
          fadeInElement(nextStep);
        }
      }, 500);
    });
  });

  document.querySelectorAll('.test-step .answer-btn').forEach(btn => {
    btn.addEventListener('click', e => {
      const inputElement = btn.querySelector('input[type="radio"]');
      if (inputElement) { 
        inputElement.checked = true; 
        document.querySelectorAll(`input[name="${inputElement.name}"]`).forEach(radio => {
          if (radio !== inputElement) {
            radio.checked = false;
          }
        });
 
        const questionText = btn.closest('.test-step').querySelector('.quiz__question-title span.is-block').textContent.trim().replace(/\s+/g, ' ');
        const answerText = btn.querySelector('.control-label .answer__title').textContent.trim().replace(/\s+/g, ' ');
 
        answers[questionText] = answerText;
 
        const newAnswer = Object.entries(answers)
          .map(([question, answer]) => `${question} - ${answer}`)
          .join('; ');

        input.value = newAnswer;
 
        fadeOutElement(btn.closest('.test-step'));
        setTimeout(() => {
          const nextStep = btn.closest('.test-step').nextElementSibling;
          if (nextStep && nextStep.classList.contains('test-step')) {
            fadeInElement(nextStep);
          }
        }, 500);
      }
    });
  });

  document.querySelectorAll('.test-step .prev-btn').forEach(btn => {
    btn.addEventListener('click', e => {
      e.preventDefault();
      const step = btn.closest('.test-step');
      fadeOutElement(step);
      setTimeout(() => {
        const prevStep = step.previousElementSibling;
        if (prevStep && prevStep.classList.contains('test-step')) {
          fadeInElement(prevStep);
        }
      }, 500);
    });
  });

  document.getElementById('start-menu').addEventListener('click', e => {
    e.preventDefault();
    const step = e.target.closest('.test-step');
    fadeOutElement(step);
    setTimeout(() => {
      const nextStep = step.nextElementSibling;
      if (nextStep && nextStep.classList.contains('test-step')) {
        fadeInElement(nextStep);
      }
    }, 500);
  });
});
