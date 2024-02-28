document.getElementById('main-form').addEventListener('submit', submitForm);

const myForm = document.querySelector('#main-form');
let isValid = false;
let valid1;
let valid2;
let valid3;
let valid4;
let valid5;

function submitForm(event) {

  // Отменяем стандартное поведение браузера с отправкой формы
  event.preventDefault();

  // запускаем валидацию
  validateForm();

  // проверяем валидна ли форма
  if (!isValid) {
    console.log('not sent');
    validateForm();
  } else {
    // отправляем форму
    // myForm.submit();
    console.log('sent');

    // очищаем форму
    myForm.reset();

  }
}

function showErrorAlert(el) {
  el.scrollIntoView();
  el.querySelector('.error-message').classList.add('active');
}

function hideErrorAlert(el) {
  el.querySelector('.error-message').classList.remove('active');
}

function validateForm() {
  // Тип консультации не валидируем, т.к. по умолчанию всегда выбран 1 пункт, юзер может его поменять, но не может отменить

  // Тип запроса

  const checkboxes = document.querySelectorAll('input[name="requestType[]"]:checked');
  const checkboxesAlert = document.querySelector('#checkboxesAlert');

  if (checkboxes.length < 1) {
    showErrorAlert(checkboxesAlert);

  } else {
    hideErrorAlert(checkboxesAlert);
    valid1 = true;
  }

  // Комментарий не валидируем, он не обязателен

  // Дата рождения

  const dateOfBirth = document.querySelector('input[name="dateOfBirth"]');
  const dateOfBirthAlert = document.querySelector('#dateOfBirthAlert');

  if (!dateOfBirth.value) {
    showErrorAlert(dateOfBirthAlert);
  } else {
    hideErrorAlert(dateOfBirthAlert);
    valid2 = true;
  }

  // Время рождения

  // Место рождения

  const birthPlace = document.querySelector('input[name="birthPlace"]');
  const birthPlaceAlert = document.querySelector('#birthPlaceAlert');

  if (!birthPlace.value) {
    showErrorAlert(birthPlaceAlert);
  } else {
    hideErrorAlert(birthPlaceAlert);
    valid3 = true;
  }

  // Контакты

  const contact = document.querySelector('input[name="contact"]');
  const contactAlert = document.querySelector('#contactAlert');

  if (!contact.value) {
    showErrorAlert(contactAlert);
  } else {
    hideErrorAlert(contactAlert);
    valid4 = true;
  }

  // Согласие на обработку персональных данных

  const agreement = document.querySelector('input[name="agreement"]');
  const agreementAlert = document.querySelector('#agreementAlert');

  if (!agreement.checked) {
    showErrorAlert(agreementAlert);
  } else {
    hideErrorAlert(agreementAlert);
    valid5 = true;
  }

  if (valid1 && valid2 && valid3 && valid4 && valid5) {
    isValid = true;
  }
}
