/**
 * 
 */
var loginShowing = false;
var registerShowing = false;
function changeLogin(){
	if(!loginShowing && !registerShowing){
		document.getElementById("loginForm").style.display = 'inline-block';
		loginShowing = true;
	}
	else if (!loginShowing && registerShowing){

		document.getElementById("registerForm").style.display = 'none';
		document.getElementById("loginForm").style.display = 'inline-block';
		registerShowing = false;
		loginShowing = true;
	}
	else{
		document.getElementById("loginForm").style.display = 'none';
		loginShowing = false;
	}

}

function changeRegister(){
	if(!loginShowing && !registerShowing){
		document.getElementById("registerForm").style.display = 'inline-block';
		registerShowing = true;
	}
	else if (!registerShowing && loginShowing){

		document.getElementById("loginForm").style.display = 'none';
		document.getElementById("registerForm").style.display = 'inline-block';
		loginShowing = false;
		registerShowing = true;
	}
	else{
		document.getElementById("registerForm").style.display = 'none';
		registerShowing = false;
	}

}

function validateLoginSubmission(){
}

function validateRegisterSubmission(){

}