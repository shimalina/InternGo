function validate(){

    var n = document.form.uname.value;
    var x = document.form.email.value;
    var p = document.form.password.value; 
    var cp = document.form.cpassword.value; 
  
    var birth = document.form.birthday.value;

    var at = x.indexOf("@");
    var dot = x.lastIndexOf(".");
    var namevalid = /^\S*$/;
    var status = false;

   //name  

    if(n="" || n = null){
       document.getElementById("error_name").innerHTML="* Please enter the Username w/o space";
      status =false;
   
    }
    else if(!namevalid.test(n)){
     document.getElementById("error_name").innerHTML="* Username contain only letters";
      status =false;
      
    }

    else{
      document.getElementById("error_name").innerHTML="* Valid Username";
      status =true;
    
    }


    // Email

    if (at<1 ||  dot+2>=x.length || dot<at+2 || x==null || x == "" ) {
        
        document.getElementById("error_email").innerHTML="* Not a valid email";
        status = false;

       }

    else{
      document.getElementById("error_email").innerHTML="* valid email";
      status = true;
    }


// Password

   if(  p == "" || p.length<7 ){
      
      document.getElementById("error_pass").innerHTML="* Password must contain minimun 7 value";
      status =false;
    }

    else{
      document.getElementById("error_pass").innerHTML="* valid password";
      status =true;
    }

// Confirm Password

    if(  cp == "" || cp.length<7 ){
      
      document.getElementById("error_cpass").innerHTML="* Password must contain minimun 7 value";
      status =false;
    }

    else{
      document.getElementById("error_cpass").innerHTML="* valid password";
      status =true;
    }

// Check password

   if(p !=  cp){
     document.getElementById("error_cpass").innerHTML = "emails are not matching, Re-enter";
     status = false;
     }
   

// Gender

    if(document.form.radiobutton[0].checked == false && document.form.radiobutton[1].checked == false){
        document.getElementById("error_gender").innerHTML = "Select your gender";
       status = false;
      }

  // Birth Month , day, year

       if (birth == "") {
        document.form.birthday.focus();
    document.getElementById("error_birth").innerHTML = "Enter birthday";
        status = false;
     }
  
     // Final submission 

if(n != '' && x != '' && p != '' && cp != '' && birth != '' ){
   alert("form submitted successfully");
  }

      
   
return status;
    
}


/*
// When the browser is ready...
  $(function() {

    // Setup form validation on the #register-form element
    $("#register-form").validate({

        // Specify the validation rules
        rules: {
            firstname: "required",
            lastname: "required",
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 5
            },
//agree: "required"
        },

        // Specify the validation error messages
        messages: {
            firstname: "Please enter your first name",
            lastname: "Please enter your last name",
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            },
            email: "Please enter a valid email address",
            //agree: "Please accept our policy"
        },

        submitHandler: function(form) {
            form.submit();
        }
    });

  });

*/