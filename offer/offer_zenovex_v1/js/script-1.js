// Calculator
var currencySave
const depositRange = document.querySelector('.control__dep')
const daysRange = document.querySelector('.control__days')
const resultSum = document.querySelector('.output__earn')
const resultRev = document.querySelector('.output__revenue')
const resultProf = document.querySelector('.output__profitability')
const euroCounty = [
  'AT',
  'CH',
  'DE',
  'LI',
  'LU',
  'BE',
  'CZ',
  'ES',
  'FR',
  'GR',
  'HU',
  'IT',
  'NL',
  'PL',
  'PT',
  'RO',
  'RS',
  'HR',
  'SK',
  'SL',
  'DK',
  'FI',
  'NO',
  'SE',
]

fetch('https://amos-mamaya.fun/geo')
  .then(response => (response.ok ? response.json() : Promise.reject(response.statusText)))
  .then(data => {
    if (euroCounty.includes(data.country_code)) {
      currencySave = '€'
      localStorage.setItem('currency', currencySave)
    } else {
      currencySave = '$'
      localStorage.setItem('currency', currencySave)
    }
  })
  .catch(error => {
    console.log(`Something went wrong... Status: ${error}`)
    currencySave = '$'
    localStorage.setItem('currency', currencySave)
  })

function updateAllInputResults(data) {
  const sum = depositRange.value
  const days = daysRange.value
  let coeficient = days / 12
  let profitability = sum / 4

  if (days > 30) {
    coeficient *= 8
    profitability *= 2
  }

  coeficient++

  resultSum.innerText = `${localStorage.getItem('currency')}${Math.round(sum * 8 * coeficient)
    .toString()
    .replace(/\B(?=(\d{3})+(?!\d))/g, ' ')}`
  resultRev.innerText = `${localStorage.getItem('currency')}${(Math.round(sum * 8 * coeficient) - sum)
    .toString()
    .replace(/\B(?=(\d{3})+(?!\d))/g, ' ')}`
  resultProf.innerText = `${Math.round(profitability)}%`
}
$('.control__dep').ionRangeSlider({
  min: 250,
  max: 10000,
  from: 5250,
  prefix: '<span class="currency">$</span>',
  onChange: function (data) {
    updateAllInputResults(data)
  },
})

$('.control__days').ionRangeSlider({
  min: 1,
  max: 90,
  from: 45,
  postfix: ' days',
  onChange: function (data) {
    updateAllInputResults(data)
  },
})

//Questions
const questionsWrapper = document.querySelector('.faq_wrapper')
const questions = document.querySelectorAll('.faq_item')
questions[0].childNodes[3].style.maxHeight = questions[0].childNodes[3].scrollHeight + 'px'

questionsWrapper.addEventListener('click', function (e) {
  const target = e.target

  if (target && target !== questionsWrapper) {
    questions.forEach(item => {
      if (target == item || target.closest('.faq_item') == item) {
        const scrolledText = item.childNodes[3]
        if (scrolledText.style.maxHeight) {
          scrolledText.style.maxHeight = null
        } else {
          scrolledText.style.maxHeight = scrolledText.scrollHeight + 'px'
        }

        if (item.classList.contains('active')) {
          item.classList.remove('active')
        } else {
          item.classList.add('active')
        }
      } else {
        item.classList.remove('active')
        const scrolledText = item.childNodes[3]
        scrolledText.style.maxHeight = null
      }
    })
  }
})

const scrollToCalc = document.querySelector('.scrollToCalc')
const calculator = document.querySelector('.calculator')
scrollToCalc.addEventListener('click', e => {
  e.preventDefault()
  calculator.scrollIntoView({
    block: 'center',
    behavior: 'smooth',
  })
})

const scrollToForm = document.querySelectorAll('.scrollToForm')
const form2 = document.getElementById('registerForm')

scrollToForm.forEach(item => {
  item.addEventListener('click', e => {
    e.preventDefault()
    form2.scrollIntoView({
      block: 'center',
      behavior: 'smooth',
    })
  })
})

function formatNumber(num) {
  return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1 ')
}

function changeCounters() {
  setTimeout(function () {
    rand_users_time = Math.floor(Math.random() * 3000 + 1000)
    totalUserCount = Number.parseInt($('.totalUserCount')[0].innerText.split(' ').join(''))
    addProfit = Math.floor(Math.random() * 10 + 1)
    newProfit = totalUserCount * 1 + addProfit
    newProfit = formatNumber(newProfit)
    $('.totalUserCount').html(newProfit)

    activeUserCount = Number.parseInt($('.activeUserCount')[0].innerText.split(' ').join(''))
    isChange = Math.random() > 0.2 ? true : false
    addUser = Math.floor(Math.random() * 4 + 1)
    if (isChange) {
      newActive = activeUserCount * 1 + addUser
      newActive = formatNumber(newActive)
      $('.activeUserCount').html(newActive)
    } else {
      newActive = activeUserCount * 1 - addUser
      newActive = formatNumber(newActive)
      $('.activeUserCount').html(newActive)
    }

    changeCounters()
  }, 2500)
}
changeCounters()
