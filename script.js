document.addEventListener('DOMContentLoaded', function () {
  function toggleBirthTimeFields() {
    const exactTimeFields = document.getElementById('exactTimeFields');
    const approximateTimeFields = document.getElementById('approximateTimeFields');
    const rectificationFields = document.getElementById('rectificationFields');

    const birthTimeOption = document.querySelector('input[name="birthTimeOption"]:checked').value;

    exactTimeFields.style.display = birthTimeOption === 'exact' ? 'block' : 'none';
    approximateTimeFields.style.display = birthTimeOption === 'approximate' ? 'flex' : 'none';
    rectificationFields.style.display = birthTimeOption === 'approximate' || birthTimeOption === 'unknown' ? 'block' : 'none';
    // rectificationFields.style.display = birthTimeOption === 'unknown' ? 'block' : 'none';
  }

  const birthTimeOptions = document.querySelectorAll('input[name="birthTimeOption"]');
  birthTimeOptions.forEach(option => option.addEventListener('change', toggleBirthTimeFields));

  toggleBirthTimeFields(); // вызов функции при загрузке страницы
});

document.addEventListener('DOMContentLoaded', function () {
  // Функция для добавления события
  function addEventField() {
    const eventList = document.getElementById('eventList');
    const eventCount = eventList.getElementsByClassName('event').length;
    if (eventCount < 20) {
      const newEvent = document.createElement('div');
      newEvent.classList.add('event'); // Добавление класса 'event'
      newEvent.innerHTML = `
    <div class="form-group">
      <h3 class="form-title">Описание события</h3>
      <input type="text" class="form-control" name="eventDescription[]">
    </div>
    <div class="form-group">
      <h3 class="form-title">Дата события</h3>
      <input type="date" class="form-control" name="eventDate[]">
    </div>
    <button type="button" class="btn btn-danger removeEvent">Удалить</button>
`;
      eventList.appendChild(newEvent);
    }
  }


  // Функция для удаления события
  function removeEventField(event) {
    if (event.target.classList.contains('removeEvent')) {
      const eventItem = event.target.parentElement;
      eventItem.remove();
    }
  }

  // Обработчик для добавления событий
  const addEventButton = document.getElementById('addEventButton');
  addEventButton.addEventListener('click', function () {
    addEventField();
  });

  // Обработчик для удаления событий
  const eventList = document.getElementById('eventList');
  eventList.addEventListener('click', function (event) {
    removeEventField(event);
  });

  // Инициализация первого события
  addEventField();
});

document.addEventListener('DOMContentLoaded', function () {
  const swiper = document.querySelector('#swiper');
  const initSwiper = () => {
    // eslint-disable-next-line
    new Swiper('#swiper', {
      navigation: {
        nextEl: '.swiper__button--next',
        prevEl: '.swiper__button--prev',
      },
      loop: false,
      slidesPerView: '3',
      spaceBetween: 20,
    });
  };

  initSwiper();
});

document.addEventListener('DOMContentLoaded', function () {
  function showButton() {
    const toTopBtn = document.querySelector('.to-top-btn');
    window.addEventListener('scroll', function () {
      const coeff = window.scrollY / 1000;
      if (window.scrollY <= 700) {
        toTopBtn.style.opacity = coeff;
      } else {
        toTopBtn.style.opacity = 0.7;
      }
    });
  }

  showButton();
});