
function hide() {
    if ((document.getElementById("validationFormCheck2").checked == true) || (document.getElementById("validationFormCheck3").checked == true)) {
        document.getElementById('others-hiden').style.display = 'none';
        document.getElementById("validationTextarea").required = false;
    }
}

function show(shown, hide, rad) {


    if (document.getElementById(rad).checked == true) {

        document.getElementById(shown).style.display = 'block';
        document.getElementById(hide).style.display = 'block';
        document.getElementById("validationTextarea").required = true;

    }

}

function switchVisible(shown, hide, btn) {

    var btnName = document.getElementById(btn);
    var str = btn;
    var replaced = str.replace(/\D/g, '');

    for (var i = 1; i <= 13; i++) {
        if (i == replaced) {
            document.getElementById('edit' + i).disabled = false;
        } else {
            document.getElementById('edit' + i).disabled = true;
        }

    }

    if (document.getElementById(shown)) {

        if (document.getElementById(shown).style.display == 'none') {
            document.getElementById(shown).style.display = 'block';
            document.getElementById(hide).style.display = 'none';
            btnName.innerHTML = "Edit";
            for (var i = 1; i <= 13; i++) {
                document.getElementById('edit' + i).disabled = false;
                
            }
        }
        else {
            document.getElementById(shown).style.display = 'none';
            document.getElementById(hide).style.display = 'block';
            btnName.innerHTML = "X";

        }
    }
}




function hasBlankSpaces(str) {
    return str.match(/^\s+$/) !== null;
}





// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {

                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')

            }, false)
        })
})()


document.querySelector('#firstName').addEventListener('blur', validateFirstname);
document.querySelector('#lastName').addEventListener('blur', validateLastName);


const reNumChars = /^[a-zA-Z ]{3,30}$/;
const reSpaces = /^\S*$/;
const reZip = /\d{5}/;
const Revisa = /^(?:4[0-9]{12}(?:[0-9]{3})?)$/;
const reCardHolder = /(?<! )[-a-zA-Z' ]{2,26}/;
const ReCVC = /^[0-9]{3,4}$/;
const reDate = /(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[13-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})/;


// Firstname validation
function validateFirstname(e) {

    const firstName = document.querySelector('#firstName');
    if ((reSpaces.test(firstName.value)) && (reNumChars.test(firstName.value))) {
        firstName.classList.remove('is-invalid');
        firstName.classList.add('is-valid');
        return true;
    } else {
        firstName.classList.remove('is-valid');
        firstName.classList.add('is-invalid');

        return false;
    }
}

// Lastname validation

function validateLastName(e) {

    const lastName = document.querySelector('#lastName');
    if ((reSpaces.test(lastName.value)) && (reNumChars.test(lastName.value))) {
        lastName.classList.remove('is-invalid');
        lastName.classList.add('is-valid');
        return true;
    } else {
        lastName.classList.remove('is-valid');
        lastName.classList.add('is-invalid');
        return false;
    }
}



// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('#name-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {

                if (
                    ((!validateFirstname()))
                    || ((!validateLastName()))
                ) {
                    event.preventDefault()
                    event.stopPropagation()

                } else {
                    form.classList.add('was-validated')
                }



            }, false)
        })
})();













// Display Name validation
document.querySelector('#displayName').addEventListener('blur', validateDisplayName);

function validateDisplayName(e) {

    const displayName = document.querySelector('#displayName');
    if ((reNumChars.test(displayName.value))) {
        displayName.classList.remove('is-invalid');
        displayName.classList.add('is-valid');
        return true;
    } else {
        displayName.classList.remove('is-valid');
        displayName.classList.add('is-invalid');
        return false;
    }
}


// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('#validate-dipslayName')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {

                if (
                    !validateDisplayName()
                ) {
                    event.preventDefault()
                    event.stopPropagation()

                } else {
                    form.classList.add('was-validated')
                }



            }, false)
        })
})();













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



// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('#email-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {

                if (
                    ((!validateEmail()))
                ) {
                    event.preventDefault()
                    event.stopPropagation()

                } else {
                    form.classList.add('was-validated')
                }



            }, false)
        })
})();




document.querySelector('#city').addEventListener('blur', validateCity);
document.querySelector('#zip').addEventListener('blur', validateZip);
document.querySelector('#countries2').addEventListener('blur', validateCountry);

// City validation
function validateCity(e) {

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

// zip validation

function validateZip(e) {

    const zip = document.querySelector('#zip');
    if ((reZip.test(zip.value))) {
        zip.classList.remove('is-invalid');
        zip.classList.add('is-valid');
        return true;
    } else {
        zip.classList.remove('is-valid');
        zip.classList.add('is-invalid');
        return false;
    }
}

//validate country:
function validateCountry(e) {

    const countries2 = document.querySelector('#countries2');

    if (countries2.value !== 'please select') {
        countries2.classList.remove('is-invalid');
        countries2.classList.add('is-valid');
        return true;
    } else {
        countries2.classList.remove('is-valid');
        countries2.classList.add('is-invalid');
        return false;
    }
}


(function () {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('#address-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {

                if (
                    ((!validateCountry()))
                    || ((!validateCity()))
                    || ((!validateZip()))

                ) {
                    event.preventDefault()
                    event.stopPropagation()

                } else {
                    form.classList.add('was-validated')
                }



            }, false)
        })
})();








// visa card holder namer validation

document.querySelector('#cardHolder').addEventListener('blur', validateardHolderName);

function validateardHolderName(e) {

    const cardHolder = document.querySelector('#cardHolder');
    if ((reCardHolder.test(cardHolder.value))) {
        cardHolder.classList.remove('is-invalid');
        cardHolder.classList.add('is-valid');
        return true;
    } else {
        cardHolder.classList.remove('is-valid');
        cardHolder.classList.add('is-invalid');
        return false;
    }
}


// visa card validation

document.querySelector('#cardNumber').addEventListener('blur', validateVisaCard);

function validateVisaCard(e) {

    const cardNumber = document.querySelector('#cardNumber');
    if ((Revisa.test(cardNumber.value))) {
        cardNumber.classList.remove('is-invalid');
        cardNumber.classList.add('is-valid');
        return true;
    } else {
        cardNumber.classList.remove('is-valid');
        cardNumber.classList.add('is-invalid');
        return false;
    }
}




//validate Date:

document.querySelector('#expirationDate').addEventListener('blur', validateExpirationDate);

function validateExpirationDate(e) {

    const expirationDate = document.querySelector('#expirationDate');
    // Create a new Date that converts the input date
    var dob = new Date(expirationDate.value);

    // Extract pieces of the date:
    var month = dob.getMonth() + 1; // months start counting from zero!
    var day = dob.getDate();
    var year = dob.getFullYear();

    var exdate = day + "/" + month + "/" + year;

    if (reDate.test(exdate)) {
        expirationDate.classList.remove('is-invalid');
        expirationDate.classList.add('is-valid');
        return true;
    } else {
        expirationDate.classList.remove('is-valid');
        expirationDate.classList.add('is-invalid');
        return false;
    }
}

// visa card holder namer validation

document.querySelector('#cvc').addEventListener('blur', validateCVC);

function validateCVC(e) {

    const cvc = document.querySelector('#cvc');
    if ((ReCVC.test(cvc.value))) {
        cvc.classList.remove('is-invalid');
        cvc.classList.add('is-valid');
        return true;
    } else {
        cvc.classList.remove('is-valid');
        cvc.classList.add('is-invalid');
        return false;
    }
}



// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('#payment-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {

                if (
                    ((!validateardHolderName()))
                    || ((!validateVisaCard()))
                    || ((!validateExpirationDate()))
                    || ((!validateCVC()))
                ) {
                    event.preventDefault()
                    event.stopPropagation()

                } else {
                    form.classList.add('was-validated')
                }



            }, false)
        })
})();
