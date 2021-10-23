var Login = function() {





    var handleLogin = function() {



        $('.login-form').validate({

            errorElement: 'span', //default input error message container

            errorClass: 'help-block', // default input error message class

            focusInvalid: false, // do not focus the last invalid input

            rules: {

                username: {

                    required: true

                },

                password: {

                    required: true

                },

                remember: {

                    required: false

                }

            },



            messages: {

                username: {

                    required: "Username is required."

                },

                password: {

                    required: "Password is required."

                }

            },



            invalidHandler: function(event, validator) { //display error alert on form submit   

                $('.alert-danger', $('.login-form')).show();

            },



            highlight: function(element) { // hightlight error inputs

                $(element)

                    .closest('.form-group').addClass('has-error'); // set error class to the control group

                },



                success: function(label) {

                    label.closest('.form-group').removeClass('has-error');

                    label.remove();

                },



                errorPlacement: function(error, element) {

                    error.insertAfter(element.closest('.input-icon'));

                },



                submitHandler: function(form) {

                form.submit(); // form validation success, call ajax form submit

                

				// prepare form data

				var login_form_data = {

					username: $('#username').val(),

					password: $('#password').val(), 

                    language : $('#currentLanguage').val()

                }



                console.log(login_form_data);



                $.post(base_url + 'admin/login-submit/', { login_form_data: login_form_data }, function(returnData){

                   console.log(returnData);

                   var finalData = $.parseJSON(returnData);



                   if(finalData.status_type == 'error')

                   {

                      $('.alert-danger span', $('.login-form')).text(finalData.status_msg);

                      $('.alert-danger', $('.login-form')).show();

                      $('.alert-danger', $('.register-form')).hide();

                      $('.alert-success').hide();

                  }

                  else if(finalData.status_type == 'success')

                  {

                      $('.alert-success span').text(finalData.status_msg);

                      $('.alert-success').show();

                      $('.alert-danger', $('.register-form')).hide();

                      $('.alert-danger', $('.login-form')).hide();

                      setTimeout(function(){ 

                         window.location.href = base_url + 'admin/home/sliders';

                     }, 3000);

                  }

              });



            }

        });



        $('.login-form input').keypress(function(e) {

            if (e.which == 13) {

                if ($('.login-form').validate().form()) {

                    $('.login-form').submit(); //form validation success, call ajax form submit

                }

                return false;

            }

        });



        $('.forget-form input').keypress(function(e) {

            if (e.which == 13) {

                if ($('.forget-form').validate().form()) {

                    $('.forget-form').submit();

                }

                return false;

            }

        });



        $('#forget-password').click(function(){

            $('.login-form').hide();

            $('.forget-form').show();

            $('.login-content > p').hide();

            $('.login-content > h1').text('Student Portal - Password Recovery');

        });

        

        $('#back-btn').click(function(){

            $('.login-form').show();

            $('.forget-form').hide();

            $('.login-content > p').show();

            $('.login-content > h1').text('Student Portal - Login');

        });

        

    }



    

    



    return {

        //main function to initiate the module

        init: function() {



            handleLogin();



            
            console.log(base_url);

            

            $('.forget-form').hide();



        }



    };



}();



jQuery(document).ready(function() {

	Login.init();

});