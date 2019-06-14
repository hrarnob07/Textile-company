/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
(function ($) {
    Drupal.behaviors.contact_submit_ajax = {
        attach: function (context, settings) {
            $("#webform-client-form-471 #edit-submitted-mobile-number").keyup(function (e) {
                $(this).val($(this).val().replace(/[^0-9]+/g, ''));
            });
            $('#webform-client-form-471 #edit-submitted-full-name').keyup(function (e) {
                $(this).val($(this).val().replace(/[^ 'A-Za-z]+/g, ''));
            });
            $(".input").keypress(function (e) {
                if (e.which == 13) {
                    e.preventDefault();
                    check_contact_validity();
                }
            });
            $("a.btnsave").click(function (e) {
                check_contact_validity();
            });
            function check_contact_validity() {
                var flag = true;
                var full_name   = $("#webform-client-form-471 #edit-submitted-full-name");
                var deadline    = $("#webform-client-form-471 #edit-submitted-deadline");
                var topic       = $("#webform-client-form-471 #edit-submitted-topic");
                var email       = $("#webform-client-form-471 #edit-submitted-email");
                var phone_no    = $("#webform-client-form-471 #edit-submitted-mobile-number");
                var email       = $("#webform-client-form-471 input[type=email]");
                if (full_name.val() == '') {
                    jQuery(full_name).closest('.form-item').addClass('error');
                    jQuery(full_name).siblings('.formError').text("Please Enter Full name");
                    flag = false;
                    //return false;
                } else {
                    jQuery(full_name).closest('.form-item').removeClass('error');
                    jQuery(full_name).siblings('.formError').text("");
                }
                if (email.val() == '') {
                    jQuery(email).closest('.form-item').addClass('error');
                    jQuery(email).siblings('.formError').text("Please enter email address");
                    flag = false;
                    //return false;
                } else {
                    var emailInputValid = isEmail(email.val());
                    if (emailInputValid) {
                        jQuery(email).closest('.form-item').removeClass('error');
                        jQuery(email).siblings('.formError').text("");
                    } else {
                        jQuery(email).closest('.form-item').addClass('error');
                        jQuery(email).siblings('.formError').text("The email address entered is invalid");
                        flag = false;
                        return false;
                    }
                }
                if (phone_no.val() == '') {
                    jQuery(phone_no).closest('.form-item').addClass('error');
                    jQuery(phone_no).siblings('.formError').text("Please enter the Phone Number");
                    flag = false;
                    //return false;
                } else {
                    jQuery(phone_no).closest('.form-item').removeClass('error');
                    jQuery(phone_no).siblings('.formError').text("");
                }
                if (deadline.val() == '') {
                    jQuery(deadline).closest('.form-item').addClass('error');
                    jQuery(deadline).siblings('.formError').text("Please enter Deadline");
                    flag = false;
                    //return false;
                } else {
                    jQuery(deadline).closest('.form-item').removeClass('error');
                    jQuery(deadline).siblings('.formError').text("");
                }
                if (topic.val() == '') {
                    jQuery(topic).closest('.form-item').addClass('error');
                    jQuery(topic).siblings('.formError').text("Please enter the Topic");
                    flag = false;
                    //return false;
                } else {
                    jQuery(topic).closest('.form-item').removeClass('error');
                    jQuery(topic).siblings('.formError').text("");
                }
                if (flag) {
                    jQuery('.form-item').removeClass('error');
                    jQuery('.formError').text("");
                    $('#edit-submit').click();
                    console.log('Dinesh');
                    // $('#edit-submit').closest('form').find("input[type=text],input[type=email], textarea").val("");
                    $('#edit-submit').closest("form").trigger("reset");
                    jQuery('.popupwrap h2.hclass').text('Thank You');
                    jQuery('.popupwrap h4').text('For submitting the form. We will get back to you shortly.');
                    jQuery('.popupwrap').fadeIn();
                }
                return false;
            }
        }
    }
})(jQuery);