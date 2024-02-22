document.addEventListener('DOMContentLoaded', function () {
  const form = document.querySelector('#main-form');
  // const submitBtn = document.querySelector('.submit-btn');
  
  function validateForm() {
    let formData = {};
    // consultationType
    const radios = document.getElementsByName('consultationType');
    let radiosValue;
    for (let i = 0; i < radios.length; i++) {
      if (radios[i].checked) {
        radiosValue = radios[i].value;
        console.log(radiosValue);
        break;
      }
    }

    // requestType
    const checkboxes = document.getElementsByName('requestType[]');
    let checkboxesValues = [];
    for (let i = 0; i < checkboxes.length; i++) {
      if (checkboxes[i].checked) {
        checkboxesValues.push(checkboxes[i].value);
        console.log(checkboxesValues);
        return checkboxesValues;
      }
    }

    // dateOfBirth
    const dateOfBirth = document.getElementsByName('dateOfBirth');
    const dateOfBirthValue = dateOfBirth.value;

    
    
    formData.consultationType = radiosValue;
    formData.question = checkboxesValues;
    formData.birthDate = dateOfBirthValue;

    console.log(formData);
    validateForm();
  }

  function submitForm() {
    form.onsubmit = function(e) {
      e.preventDefault();
      validateForm();
    }
  }
  submitForm();
});

