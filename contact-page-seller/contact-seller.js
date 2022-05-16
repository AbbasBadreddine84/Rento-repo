
document.querySelector('#cb1').addEventListener('blur', validatecheckbox);
document.querySelector('#cb2').addEventListener('blur', validatecheckbox);


function validatecheckbox(e) {

  const cb1 = document.querySelector('#cb1');
  const cb2 = document.querySelector('#cb2');


  if (cb1.checked == true && cb2.checked == true) {
    cb1.classList.remove('is-invalid');
    cb1.classList.add('is-valid');
    cb2.classList.remove('is-invalid');
    cb2.classList.add('is-valid');
    return true;
  } else {
    cb1.classList.remove('is-valid');
    cb1.classList.add('is-invalid');
    cb2.classList.remove('is-valid');
    cb2.classList.add('is-invalid');
    return false;
  }
}

document.querySelector('#cb1').addEventListener('blur', validatecheckbox);
document.querySelector('#cb2').addEventListener('blur', validatecheckbox);


function validateradio(e) {

  const paywithcard = document.querySelector('#paywithcard');
  const paywithbankaccount = document.querySelector('#paywithbankaccount');


  if (cb1.checked == true || cb2.checked == true) {
    paywithcard.classList.remove('is-invalid');
    paywithcard.classList.add('is-valid');
    paywithbankaccount.classList.remove('is-invalid');
    paywithbankaccount.classList.add('is-valid');
    return true;
  } else {
    paywithcard.classList.remove('is-valid');
    paywithcard.classList.add('is-invalid');
    paywithbankaccount.classList.remove('is-valid');
    paywithbankaccount.classList.add('is-invalid');
    return false;
  }
}


function showbank(shown, hiden, radio) {
  if (document.getElementById(radio).checked == true) {
    document.getElementById(shown).style.display = "block";
    document.getElementById(hiden).style.display = "none";
    document.getElementById("cardNumber").required = false;
    document.getElementById("expirationDate").required = false;
    document.getElementById("cardHolder").required = false;
    document.getElementById("cvc").required = false;
  }
}

function showcard(shown, hiden, radio) {
  if (document.getElementById(radio).checked == true) {
    document.getElementById(shown).style.display = "block";
    document.getElementById(hiden).style.display = "none";
    document.getElementById("cardNumber").required = true;
    document.getElementById("expirationDate").required = true;
    document.getElementById("cardHolder").required = true;
    document.getElementById("cvc").required = true;

  }
}



document.querySelector('#firstname').addEventListener('blur', validateFirstname);
const reSpaces = /^\S*$/;
const reNumChars = /^[a-zA-Z ]{3,30}$/;

function validateFirstname(e) {

  const firstName = document.querySelector('#firstname');

  if (reSpaces.test(firstName.value) && (reNumChars.test(firstName.value))) {
    firstName.classList.remove('is-invalid');
    firstName.classList.add('is-valid');
    return true;
  } else {
    firstName.classList.remove('is-valid');
    firstName.classList.add('is-invalid');
    return false;
  }
}


document.querySelector('#lastname').addEventListener('blur', validatelastname);


function validatelastname(e) {

  const lastName = document.querySelector('#lastname');

  if (reSpaces.test(lastName.value) && (reNumChars.test(lastName.value))) {
    lastName.classList.remove('is-invalid');
    lastName.classList.add('is-valid');
    return true;
  } else {
    lastName.classList.remove('is-valid');
    lastName.classList.add('is-invalid');
    return false;
  }
}

document.querySelector('#surname').addEventListener('blur', validatesurname);


function validatesurname(e) {

  const surname = document.querySelector('#surname');

  if (reSpaces.test(surname.value) && (reNumChars.test(surname.value))) {
    surname.classList.remove('is-invalid');
    surname.classList.add('is-valid');
    return true;
  } else {
    surname.classList.remove('is-valid');
    surname.classList.add('is-invalid');
    return false;
  }
}

document.querySelector('#adress').addEventListener('blur', validateadress);


function validateadress(e) {

  const adress = document.querySelector('#adress');

  if ((reNumChars.test(adress.value))) {
    adress.classList.remove('is-invalid');
    adress.classList.add('is-valid');
    return true;
  } else {
    adress.classList.remove('is-valid');
    adress.classList.add('is-invalid');
    return false;
  }
}


document.querySelector('#postalcode').addEventListener('blur', validatepostalcode);


function validatepostalcode(e) {

  const postalcode = document.querySelector('#postalcode');
  const postcode_regex = /[A-Z]{1,2}[0-9][0-9A-Z]?\s?[0-9][A-Z]{2}/g;

  if (postcode_regex.test(postalcode.value)) {
    postalcode.classList.remove('is-invalid');
    postalcode.classList.add('is-valid');
    return true;
  } else {
    postalcode.classList.remove('is-valid');
    postalcode.classList.add('is-invalid');
    return false;
  }
}


document.querySelector('#city').addEventListener('blur', validatecity);


function validatecity(e) {

  const city = document.querySelector('#city');

  if ((reNumChars.test(city.value))) {
    city.classList.remove('is-invalid');
    city.classList.add('is-valid');
    return true;
  } else {
    city.classList.remove('is-valid');
    city.classList.add('is-invalid');
    return false;
  }
}


document.querySelector('#county').addEventListener('blur', validatecounty);


function validatecounty(e) {

  const county = document.querySelector('#county');

  if ((reNumChars.test(county.value))) {
    county.classList.remove('is-invalid');
    county.classList.add('is-valid');
    return true;
  } else {
    county.classList.remove('is-valid');
    county.classList.add('is-invalid');
    return false;
  }
}


document.querySelector('#country').addEventListener('blur', validatecountry);


function validatecountry(e) {

  const country = document.querySelector('#country');

  if ((reNumChars.test(country.value))) {
    country.classList.remove('is-invalid');
    country.classList.add('is-valid');
    return true;
  } else {
    country.classList.remove('is-valid');
    country.classList.add('is-invalid');
    return false;
  }
}

document.querySelector('#email').addEventListener('blur', validateEmail);

function validateEmail(e) {
  const email = document.querySelector('#email');
  const re = /^([a-zA-Z0-9_\-?\.?]){3,}@([a-zA-Z]){3,}\.([a-zA-Z]){2,5}$/;

  if (reSpaces.test(email.value) && re.test(email.value)) {
    email.classList.remove('is-invalid');
    email.classList.add('is-valid');

    return true;
  } else {
    email.classList.add('is-invalid');
    email.classList.remove('is-valid');

    return false;
  }
}


document.querySelector('#phonenumber').addEventListener('blur', validatephonenumber);


function validatephonenumber(e) {
  const phoneenumber = /^(?=.*\d).{8,}$/;
  const phonenumber = document.querySelector('#phonenumber');

  if ((phoneenumber.test(phonenumber.value))) {
    phonenumber.classList.remove('is-invalid');
    phonenumber.classList.add('is-valid');
    return true;
  } else {
    phonenumber.classList.remove('is-valid');
    phonenumber.classList.add('is-invalid');
    return false;
  }
}








// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation');

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (
          !validateFirstname() ||
          !validatelastname() ||
          !validatesurname() ||
          !validateadress() ||
          !validatecity() ||
          !validatecounty() ||
          !validatecountry() ||
          !validatephonenumber() ||
          !validatecheckbox() ||
          !validateradio() ||
          !validatepostalcode() ||
          !validateEmail()
        ) {
          event.preventDefault()
          event.stopPropagation()
        }
        else {
          form.classList.add('was-validated')

        }

      }, false)
    })
})();























































