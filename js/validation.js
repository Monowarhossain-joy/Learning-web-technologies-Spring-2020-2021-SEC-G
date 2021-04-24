
function Validation(){
    let uname=document.getElementById('username').value;
    let email=document.getElementById('email').value;
    let password=document.getElementById('password').value;
    let repass=document.getElementById('repass').value;
    let gender=document.getElementById('gender');
    let dob=document.getElementById('dob').value;

    unameCheck();emailCheck();passwordCheck();genderCheck();dobCheck();
	
 function unameCheck(){
            if(uname=="") {
                document.getElementById('msg1').innerHTML="----**Name Field cannot be empty";
				return false;
            } 
        } 
    function emailCheck(){
        if(email==""){
            document.getElementById('msg2').innerHTML="----**Email Field cannot be empty";
			return false;
        }
		
    }
    function passwordCheck(){
        if(password==""){
            document.getElementById('msg3').innerHTML="----**Password Field cannot be empty";
			return false;
        }
		
        if(repass==""){
            document.getElementById('msg4').innerHTML="----**Confirm_pass cannot be empty";
			return false;
        }
        else{
            if(password!=repass){
                document.getElementById('msg4').innerHTML="----**Please check your password and confirm password";
			
            }
			
        }
    }
    function genderCheck(){
        if(gender.checked==""){
            document.getElementById('msg5').innerHTML="----**Gender cannot be empty";
			return false;
			
        }
		
    }

    function dobCheck(){
        if(dob==""){
            document.getElementById('msg6').innerHTML="----**Date of Birth cannot be empty";
			return false;
        }
		
    }
	


}

