var $=jQuery.noConflict();var formSubmitted="false";jQuery(document).ready(function(e){function t(t,n){formSubmitted="true";var r=e("#"+t).serialize();e.post(e("#"+t).attr("action"),r,function(n){e("#"+t).hide();e("#formSuccessMessageWrap").fadeIn(500)})}function n(n,r){e(".formValidationError").hide();e(".fieldHasError").removeClass("fieldHasError");e("#"+n+" .requiredField").each(function(i){if(e(this).val()==""||e(this).val()==e(this).attr("data-dummy")){e(this).val(e(this).attr("data-dummy"));e(this).focus();e(this).addClass("fieldHasError");e("#"+e(this).attr("id")+"Error").fadeIn(300);return false}if(e(this).hasClass("requiredEmailField")){var s=/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;var o="#"+e(this).attr("id");if(!s.test(e(o).val())){e(o).focus();e(o).addClass("fieldHasError");e(o+"Error2").fadeIn(300);return false}}if(formSubmitted=="false"&&i==e("#"+n+" .requiredField").length-1){t(n,r)}})}e("#formSuccessMessageWrap").hide(0);e(".formValidationError").fadeOut(0);e('input[type="text"], input[type="password"], textarea').focus(function(){if(e(this).val()==e(this).attr("data-dummy")){e(this).val("")}});e("input, textarea").blur(function(){if(e(this).val()==""){e(this).val(e(this).attr("data-dummy"))}});e("#contactSubmitButton").click(function(){n(e(this).attr("data-formId"));return false})})