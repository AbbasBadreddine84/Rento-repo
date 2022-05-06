document.getElementById("usernameProfile").addEventListener("blur", validateusername);

document.getElementById("password").addEventListener("blur", validatepassword);

document.getElementById("email").addEventListener("blur", validateemail);

document.getElementById("FirstName").addEventListener("blur",validateFirstName);

document.getElementById("LastName").addEventListener("blur",validateLastName);

document.getElementById("PhoneNumber").addEventListener("blur", validatePhoneNumber);

document.getElementById("address").addEventListener("blur", validateaddress);

document.getElementById("Nationality").addEventListener("blur", validateNationality);


const reSpaces = /^\S*$/;
function validateusername(){

    const usernameProfile = document.getElementById("usernameProfile");
    if (usernameProfile.value == "") {
        usernameProfile.classList.remove("is-valid");
        usernameProfile.classList.add("is-invalid");
        return false;
    }
    if (reSpaces.test(usernameProfile.value)) {
        usernameProfile.classList.remove("is-invalid");
        usernameProfile.classList.add("is-valid");
        return true;
    } else {
        usernameProfile.classList.remove("is-valid");
        usernameProfile.classList.add("is-invalid");
        return false;
    }

}

function validatepassword(){
    const password=document.getElementById("password")
 const repassword = /(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{8,})(?=.*[!@#$%^&*])/;
if (repassword.test(password.value) && reSpaces.test(password.value)) {
  password.classList.remove("is-invalid");
  password.classList.add("is-valid");
  return true;
} else {
  password.classList.add("is-invalid");
  password.classList.remove("is-valid");

  return false;
}

}

function validateemail(){
const email=document.getElementById("email")
  const remail = /^([a-zA-Z0-9_\-?\.?]){3,}@([a-zA-Z]){3,}\.([a-zA-Z]){2,5}$/;

  if (reSpaces.test(email.value) && remail.test(email.value)) {
    email.classList.remove("is-invalid");
    email.classList.add("is-valid");
    return true;
  } else {
    email.classList.add("is-invalid");
    email.classList.remove("is-valid");

    return false;
  }

}



function validateFirstName() {
  const FirstName = document.getElementById("FirstName");
  if (FirstName.value == "") {
    FirstName.classList.remove("is-valid");
    FirstName.classList.add("is-invalid");
    return false;
  }
  if (FirstName.value.length > 15) {
    FirstName.classList.remove("is-valid");
    FirstName.classList.add("is-invalid");
    return false;
  } else {
    FirstName.classList.remove("is-invalid");
    FirstName.classList.add("is-valid");
    return true;
  }
}
function validateLastName() {
  const LastName = document.getElementById("LastName");
  if (LastName.value == "") {
    LastName.classList.remove("is-valid");
    LastName.classList.add("is-invalid");
    return false;
  }
  if (LastName.value.length > 15) {
    LastName.classList.remove("is-valid");
    LastName.classList.add("is-invalid");
    return false;
  } else {
    LastName.classList.remove("is-invalid");
    LastName.classList.add("is-valid");
    return true;
  }
}
function validatePhoneNumber() {
  const PhoneNumber = document.getElementById("PhoneNumber");
  const phoneno = /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
      if (phoneno.test(PhoneNumber.value)) {
        PhoneNumber.classList.remove("is-invalid");
        PhoneNumber.classList.add("is-valid");
        return true;
      } else {
        PhoneNumber.classList.remove("is-valid");
        PhoneNumber.classList.add("is-invalid");
        return false;
      }
}

function validateaddress(){
  const address = document.getElementById("address");
 if (address.value == "") {
   address.classList.remove("is-valid");
   address.classList.add("is-invalid");
   return false;
 }else{
      address.classList.add("is-valid");
      address.classList.remove("is-invalid");
      return true;
 }  
}
function validateNationality() {
  const Nationality = document.getElementById("Nationality");
  if (Nationality.value == "") {
    Nationality.classList.remove("is-valid");
    Nationality.classList.add("is-invalid");
    return false;
  } else {
    Nationality.classList.add("is-valid");
    Nationality.classList.remove("is-invalid");
    return true;
  }
}

(function () {
  const forms = document.getElementById("needs-validation");

  for (let form of forms) {
    form.addEventListener(
      "submit",
      function (e) {
        if (
          !form.checkValidity() ||
          !validateusername() ||
          !validatepassword() ||
          !validateemail() ||
          !validateFirstName() ||
          !validateLastName() ||
          !validatePhoneNumber() ||
          !validateaddress() ||
          !validateNationality()
        ) {
          e.preventDefault();
          e.stopPropagation();
        } else {
          form.classList.add("was-validated");
        }
      },
      false
    );
  }
})();