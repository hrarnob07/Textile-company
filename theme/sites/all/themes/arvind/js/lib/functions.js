$(document).ready(function() {
  jQuery('a.thank-you-close').click(function(){
    jQuery('.popupwrap').fadeOut();
    $("#webform-client-form-19").submit();
  });
    // request a visit
  $("#webform-client-form-19 #edit-submitted-phone-no").keyup(function(e){
    $(this).val( $(this).val().replace(/[^0-9]+/g, '') );
  });
  
  $('#webform-client-form-19 #edit-submitted-first-name, #webform-client-form-19 #edit-submitted-last-name').keyup(function(e) {
    $(this).val( $(this).val().replace(/[^ 'A-Za-z]+/g, '') );
  });
    
  $( "a.btnsave" ).on( "click", function() {
        $("#webform-client-form-19 input[type=submit]").trigger( "click" );
    });

    $("#webform-client-form-19 input[type=submit]").click(function(e) {
      e.preventDefault();
      var flag = true;
      // console.log('test');

        // var general_enquiry  = $("#webform-client-form-19 #edit-submitted-general-enquiry");
        // var department       = $("#webform-client-form-19 #edit-submitted-department");
        var first_name       = $("#webform-client-form-19 #edit-submitted-first-name");
        var last_name        = $("#webform-client-form-19 #edit-submitted-last-name");
        var phone_no         = $("#webform-client-form-19 #edit-submitted-phone-no");
        var email            = $("#webform-client-form-19 input[type=email]");
       

      
        if(first_name.val() == ''){
          jQuery(first_name).closest('.form-item').addClass('error');
          jQuery(first_name).siblings('.formError').text("Please enter the name");
          // alert("Please enter the name");
          flag = false;
          return false;
        }else{
          jQuery(first_name).closest('.form-item').removeClass('error');
          jQuery(first_name).siblings('.formError').text("");
        }        
        if(last_name.val() == ''){
          jQuery(last_name).closest('.form-item').addClass('error');
          jQuery(last_name).siblings('.formError').text("Please enter the Last Name");
          // alert("Please enter the Last Name");
          flag = false;
          return false;
        }else{
          jQuery(last_name).closest('.form-item').removeClass('error');
          jQuery(last_name).siblings('.formError').text("");
        }
        if(phone_no.val() == ''){
          jQuery(phone_no).closest('.form-item').addClass('error');
          jQuery(phone_no).siblings('.formError').text("Please enter the Phone Number");
          // alert("Please enter the Phone Number");
          flag = false;
          return false;
        }else{
          jQuery(phone_no).closest('.form-item').removeClass('error');
          jQuery(phone_no).siblings('.formError').text("");
        }
        if(email.val() == ''){
          jQuery(email).closest('.form-item').addClass('error');
          jQuery(email).siblings('.formError').text("Please enter email address");
          // alert("Please enter email address");
          flag = false;
          return false;
        }else{
          var emailInputValid = isEmail(email.val());
          if(emailInputValid){
            // $("form#webform-client-form-19").submit();
            jQuery(email).closest('.form-item').removeClass('error');
            jQuery(email).siblings('.formError').text("");
          }else{
            jQuery(email).closest('.form-item').addClass('error');
            jQuery(email).siblings('.formError').text("The email address entered is invalid");
            // alert("The email address entered is invalid");
            flag = false;
            return false;
          }
        }
               
        if(flag){
          jQuery('.form-item').removeClass('error');
          jQuery('.formError').text("");
          jQuery('.popupwrap h2.hclass').text('Thank You');
          jQuery('.popupwrap h4').text('For submitting the form. We will get back to you shortly.');
          jQuery('.popupwrap').fadeIn();
        }
        return false;
       
    });

  });
function isEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}