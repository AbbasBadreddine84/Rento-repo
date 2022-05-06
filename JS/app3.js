document.getElementById("pname").addEventListener("blur", validateProductName);
document.getElementById("plocation").addEventListener("blur", validatePLocation);
document.getElementById("ptextarea").addEventListener("keyup", validateptextarea);
document.getElementById("pselectType").addEventListener("blur", validatepselectType);
document.getElementById("pimage").addEventListener("blur", validatepimage);
document.getElementById("sqaureft").addEventListener("blur", validatepsquare);
document.getElementById("paddress").addEventListener("blur", validatepaddress);
document.getElementById("pbedroom").addEventListener("blur", validatepbedroom);
document.getElementById("pkitchen").addEventListener("blur", validatepkitchen);
document.getElementById("plivingromm").addEventListener("blur", validateplivingromm);
document.getElementById("pbathroom").addEventListener("blur", validatepbathroom);








const pselectType = document.getElementById("pselectType");
const pimage = document.getElementById("pimage");

const reSpaces = /^\S*$/;

function validateProductName() {
    const pname = document.getElementById("pname");
    if (pname.value == "") {
        pname.classList.remove("is-valid");
        pname.classList.add("is-invalid");
        return false;
    }
    if (reSpaces.test(pname.value)) {
        pname.classList.remove("is-invalid");
        pname.classList.add("is-valid");
        return true;
    } else {
        pname.classList.remove("is-valid");
        pname.classList.add("is-invalid");
        return false;
    }
}

function validatePLocation(e) {
    const plocation = document.getElementById("plocation");
    if (plocation.value === "" || plocation.value == null) {
        plocation.classList.add("is-invalid");
        plocation.classList.remove("is-valid");
        return false;
    } else {
        plocation.classList.add("is-valid");
        plocation.classList.remove("is-invalid");
        return true;
    }
}

function validateptextarea() {
    const description = document.getElementById("ptextarea");
    const Descriptioncharacter = document.getElementById("Descriptioncharacter");
    const MAX_CHARS = 220;

    description.addEventListener("input", () => {
        const remaining = MAX_CHARS - description.value.length;
        Descriptioncharacter.textContent = `${remaining} characters remaining`;

    });
}

function validatepselectType() {
    const pselectType = document.getElementById("pselectType");

    if (pselectType.value) {
        pselectType.classList.add("is-valid");
        pselectType.classList.remove("is-invalid");
        return true;
    } else {
        pselectType.classList.remove("is-valid");
        pselectType.classList.add("is-invalid");
        return false;
    }
}

function validatepimage() {
    const pimage = document.getElementById("pimage");
    const reg = /\.(gif|jpe?g|tiff?|png|webp|bmp)$/i;
    if (reg.test(pimage.value) && reg.test(pimage.value)) {
        pimage.classList.add("is-valid");
        pimage.classList.remove("is-invalid");
        return true;
    } else {
        pimage.classList.remove("is-valid");
        pimage.classList.add("is-invalid");
        return false;
    }
}


function validatepsquare() {
    const sqaureft = document.getElementById("sqaureft");
    if (sqaureft.value == "") {
        sqaureft.classList.remove("is-valid");
        sqaureft.classList.add("is-invalid");
        return false;
    }
    if (sqaureft.value < 1000) {
        sqaureft.classList.remove("is-valid");
        sqaureft.classList.add("is-invalid");
        return false;
    }
    if (sqaureft.value >= 1000) {
        sqaureft.classList.add("is-valid");
        sqaureft.classList.remove("is-invalid");
        return false;
    }
}



function validatepaddress(){
       const paddress = document.getElementById("paddress");
       if (paddress.value === "" || paddress.value == null) {
         paddress.classList.add("is-invalid");
         paddress.classList.remove("is-valid");
         return false;
       } else {
         paddress.classList.add("is-valid");
         paddress.classList.remove("is-invalid");
         return true;
       }

}

function validatepbedroom() {
  const pbedroom = document.getElementById("pbedroom");
  if (pbedroom.value == "") {
    pbedroom.classList.remove("is-valid");
    pbedroom.classList.add("is-invalid");
    return false;
  }
  if (pbedroom.value < 2) {
    pbedroom.classList.remove("is-valid");
    pbedroom.classList.add("is-invalid");
    return false;
  }
  if (pbedroom.value >= 3) {
    pbedroom.classList.add("is-valid");
    pbedroom.classList.remove("is-invalid");
    return false;
  }
}

function validatepkitchen(){
  const pkitchen = document.getElementById("pkitchen");
   if (pkitchen.value == "") {
     pkitchen.classList.remove("is-valid");
     pkitchen.classList.add("is-invalid");
     return false;
   }
   if (pkitchen.value <= 1) {
     pkitchen.classList.remove("is-valid");
     pkitchen.classList.add("is-invalid");
     return false;
   }
   if (pkitchen.value >= 2) {
     pkitchen.classList.add("is-valid");
     pkitchen.classList.remove("is-invalid");
     return false;
   }

}
function validateplivingromm() {
  const plivingromm = document.getElementById("plivingromm");
   if (plivingromm.value == "") {
     plivingromm.classList.remove("is-valid");
     plivingromm.classList.add("is-invalid");
     return false;
   }
   if (plivingromm.value <= 2) {
     plivingromm.classList.remove("is-valid");
     plivingromm.classList.add("is-invalid");
     return false;
   }
   if (plivingromm.value >= 3) {
     plivingromm.classList.add("is-valid");
     plivingromm.classList.remove("is-invalid");
     return false;
   }
}
function validatepbathroom() {
  const pbathroom = document.getElementById("pbathroom");
   if (pbathroom.value == "") {
     pbathroom.classList.remove("is-valid");
     pbathroom.classList.add("is-invalid");
     return false;
   }
   if (pbathroom.value <= 2) {
     pbathroom.classList.remove("is-valid");
     pbathroom.classList.add("is-invalid");
     return false;
   }
   if (pbathroom.value >= 3) {
     pbathroom.classList.add("is-valid");
     pbathroom.classList.remove("is-invalid");
     return false;
   }
}




(function () {
    const forms = document.querySelectorAll(".needs-validation");

    for (let form of forms) {
        form.addEventListener(
            "submit",
            function (e) {
                if (
                  !form.checkValidity() ||
                  !validateProductName() ||
                  !validatePLocation() ||
                  !validateptextarea() ||
                  !validatepselectType() ||
                  !validatepimage() ||
                  !validatepsquare() ||
                  !validatepaddress() ||
                  !validatepbedroom() ||
                  !validatepkitchen() ||
                  !validateplivingromm()||
                  !validatepbathroom()

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