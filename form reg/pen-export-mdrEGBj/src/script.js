$(document).ready(function(){
	    /////////login form 
    $('.sign-up-toggle').click(function(){
        $('#sign-up').show().siblings().hide();
    });
    $('.login-toggle').click(function(){
        $('#log-in').show().siblings().hide();
    });
    $('.forget-toggle').click(function(){
        $('#forget-password').show().siblings().hide();
    });
	
	///////////// valid check
$(".submit-validation").click(function() {
  //Fetch form to apply custom Bootstrap validation
  var form = $(".valid-check")
  console.log(form.prop('id')); //test to ensure calling form correctly
  // console.log($('#fileInput')[0].files[0]);
  if (form[0].checkValidity() === false) {
    event.preventDefault()
    event.stopPropagation()
  }
  form.addClass('was-validated')
});
})