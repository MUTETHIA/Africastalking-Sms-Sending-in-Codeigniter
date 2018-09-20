
$(document).ready(function () {
    //customized methods
    jQuery.validator.addMethod("validEmail", function (value, element) {
        if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(value)) {
            return true;
        } else {
            return false;
        };
    }, "Enter a valid email address!");

    //SECTION A: Applicant's Personal Details.
    $("#register").validate({
        rules:{
            fname:{
                required:true,
                lettersonly:true
            },

            mname:{
                lettersonly:true
            },

            lname:{
                required:true,
                lettersonly:true
            },

             username:{
                required:true
            },
            password:{
                required:true
            },
            country:{
                required:true
            }
        },

        messages:{
            fname:{
                required: "Enter your first name!",
                lettersonly: "Name should contains letters only!"
            },

            lname:{
                required: "Enter your last name!",
                lettersonly: "Name should contains letters only!"
            },
            password: "Please enter the password!",
            username: "Username Field required!",

            country: "Select country!"
        }
    });



    //Registration Form
    $("#myForm4").validate({
        rules:{
            fname:{
                required:true,
                lettersonly:true
            },

            mname:{
                lettersonly:true
            },

            lname:{
                required:true,
                lettersonly:true
            },

            email:{
                required:true,
                email:true,
                validEmail:true
            },

            password1:{
                required:true
            },

            password2:{
                required:true,
                equalTo:"#password1"
            },

            oldPwd:{
                required:true
            }
        },

        messages:{
            fname:{
                required: "Enter your first name!",
                lettersonly: "Name should contains letters only!"
            },

            lname:{
                required: "Enter your last name!",
                lettersonly: "Name should contains letters only!"
            },
            mname: "Name should contains letters only!",

            email:{
                required:"Enter your email address!",
                email:"Enter a valid email address!"
            },
            password1:"Enter your password!",
            password2:{
                required:"Confirm your password!",
                equalTo:"Passwords should match!"
            },
            oldPwd: "Enter your current password!"
        }
    });


});