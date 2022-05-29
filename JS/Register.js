$(document).ready(function () {
  $("submit").click(function (event) {
    event.preventDefault();
    var FirstName = $("#FirstName").val();
    var LastName = $("#LastName").val();
    var username = $("#username").val();
    var email = $("#email").val();
    var password = $("#password").val();
    var region = $("#region").val();
      var phonenumber = $("#phonenumber").val();
      var role = $("#role").val();
    $.ajax({
      type: "POST",
      url: "Reg.php",
      dataType: "json",
      data: {
        FirstName: FirstName,
        LastName: LastName,
        username: username,
        email: email,
        password: password,
        region: region,
        phonenumber: phonenumber,
        role: role,
      },
      success: function (result) {},
    });


    

  });
});

