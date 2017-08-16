$(document).ready(function(){
    $("#t1").show();
    $("#st").addClass('resp-tab-active');

    $("#st").click(function(){
        $("#t1").show();
        $("#t2").hide();
        $("#st").addClass('resp-tab-active');
          $("#cp").removeClass('resp-tab-active');

    });
    $("#cp").click(function(){
    	 $("#t1").hide();
        $("#t2").show();
         $("#cp").addClass('resp-tab-active');
          $("#st").removeClass('resp-tab-active');
       
    });
});

/*
function validate(){

	 
    var x = document.form.email.value;
    var p = document.form.password.value; 
    var at = x.indexOf("@");
    var dot = x.lastIndexOf(".");
    var status = false;
  	if (at<1 ||  dot+2>=x.length || dot<at+2 || x==null || x == "" ) {
        
        document.getElementById("error_email").innerHTML="* Not a valid email";
       	status = false;

       }

    else{
      document.getElementById("error_email").innerHTML="* valid email";
      status = true;
    }

   if(  p == "" || p.length<7 ){
      
    	document.getElementById("error_pass").innerHTML="* Password must contain minimun 7 value";
   		status =false;
    }

    else{
      document.getElementById("error_pass").innerHTML="* valid password";
      status =true;
    }


   
return status;
    
}
*/