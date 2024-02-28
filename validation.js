document.addEventListener('DOMContentLoaded', function () {
  const form = document.querySelector('#main-form');
  form.addEventListener('submit', formSend);

  let object = {
    consultationType: '',
    question: {
      types: [],
      comment: '',
    },
    birthDate: '',
    birthTime: {
      isKnown: '',
      sureTime: '',
      startTime: '',
      endTime: '',
      events: [],
    },
    birthPlace: '',
    contact: ''
  };

  async function formSend(e) {
    e.preventDefault();
    let error = formValidate(form);

    if (error === 0) {
      createObject();
      let json = JSON.stringify(object);
      showSuccessPopup();

      var xhr = new XMLHttpRequest();

      //open the request
      xhr.open('POST', 'http://a24044-83a6.v.d-f.pw/app')
      xhr.setRequestHeader("Content-Type", "application/json");

      //send the json
      xhr.send(json);

      xhr.onreadystatechange = function () {
        if (xhr.readyState == XMLHttpRequest.DONE) {
          form.reset(); //reset form after AJAX success or do something else
        }
      }
      formRemoveError(input);
      //Fail the onsubmit to avoid page refresh.
      return false;
    } else {
      console.log('error');
    }
  }

  function formValidate(form) {
    let error = 0;
    let formReq = document.querySelectorAll('._req');
    const checkboxes = document.querySelectorAll('input[name="requestType[]"]:checked');
    const exactBirthTime = document.querySelector('input[name="exactBirthTime"]');
    const beginInterval = document.querySelector('input[name="beginInterval"]');
    const endInterval = document.querySelector('input[name="endInterval"]');
    const events = document.querySelector('#rectificationFields').querySelectorAll('.event');

    for (let i = 0; i < formReq.length; i++) {
      const input = formReq[i];
      formRemoveError(input);

      if (input.getAttribute('name') === 'birthTimeOption' && input.checked && input.value === 'exact' && exactBirthTime.value === '') {
        formAddError(input);
        error++;
      } else if (input.getAttribute('name') === 'birthTimeOption' && input.checked && input.value === 'approximate') {
        if (beginInterval.value === '' || endInterval.value === '') {
          formAddError(input);
          input.closest('.inputs-group').querySelector('.error-message').textContent = 'Пожалуйста, укажите начало и конец временного промежутка, в который вы родились';
          error++;
        }
      } else if (input.getAttribute('name') === 'birthTimeOption' && input.checked && input.value === 'unknown') {
        events.forEach((el) => {
          let eventDescription = el.querySelector('input[name="eventDescription[]"]');
          let eventDate = el.querySelector('input[name="eventDate[]"]');
          if (eventDescription.value === '' && eventDate.value !== '') {
            formAddError(input);
            input.closest('.inputs-group').querySelector('.error-message').textContent = 'Пожалуйста, опишите событие вашей жизни в поле "Описание события"';
            error++;
          }
        })
      } else if (input.getAttribute('name') === 'agreement' && input.checked === false) {
        formAddError(input);
        error++;
      } else if (checkboxes.length < 1) {
        formAddError(input);
        error++;
      } else if (input.value === '') {
        formAddError(input);
        error++;
      }
    }
    return error;
  }

  function formAddError(input) {
    input.closest('.inputs-group').classList.add('_error');
    input.classList.add('_error');
  }

  function formRemoveError(input) {
    input.parentElement.classList.remove('_error');
    input.classList.remove('_error');
  }

  function createObject() {
    object.consultationType = document.querySelector('input[name="consultationType"]:checked').value;
    object.birthDate = document.querySelector('input[name="dateOfBirth"]').value;
    object.birthPlace = document.querySelector('input[name="birthPlace"]').value;
    object.contact = document.querySelector('input[name="contact"]').value;

    document.querySelectorAll('input[name="requestType[]"]:checked').forEach((input) => {
      object.question.types.push(input.value);
    })

    if (document.querySelector('textarea[name="comment"]').value !== '') {
      object.question.comment = document.querySelector('textarea[name="comment"]').value;
    } else {
      delete object.question.comment;
    }

    const rectificationFields = document.querySelector('#rectificationFields');
    const events = rectificationFields.querySelectorAll('.event');

    if (document.querySelector('input[name="birthTimeOption"]:checked').value === 'exact') {
      object.birthTime.isKnown = 'sureKhown';
      object.birthTime.sureTime = document.querySelector('input[name="exactBirthTime"]').value;
      delete object.birthTime.startTime;
      delete object.birthTime.endTime;
      delete object.birthTime.events;
    } else if (document.querySelector('input[name="birthTimeOption"]:checked').value === 'approximate') {
      object.birthTime.isKnown = 'approximately';
      object.birthTime.startTime = document.querySelector('input[name="beginInterval"]').value;
      object.birthTime.endTime = document.querySelector('input[name="endInterval"]').value;
      delete object.birthTime.sureTime;
      events.forEach((el) => {
        if (el.querySelector('input[name="eventDescription[]"]').value !== '') {
          for (let i = 0; i < events.length; i++) {
            let newEvent = {};
            newEvent.date = events[i].querySelector('input[name="eventDate[]"]').value;
            newEvent.description = events[i].querySelector('input[name="eventDescription[]"]').value;
            object.birthTime.events.push(newEvent);
          }
        } else {
          delete object.birthTime.events;
        }
      })
    } else {
      object.birthTime.isKnown = 'unknown';
      delete object.birthTime.sureTime;
      delete object.birthTime.startTime;
      delete object.birthTime.endTime;
      for (let i = 0; i < events.length; i++) {
        let newEvent = {};
        newEvent.date = events[i].querySelector('input[name="eventDate[]"]').value;
        newEvent.description = events[i].querySelector('input[name="eventDescription[]"]').value;
        object.birthTime.events.push(newEvent);
      }
    }
  }

  function showSuccessPopup() {
    const successPopup = document.querySelector('#successPopup');
    successPopup.classList.add('active');
  };
})