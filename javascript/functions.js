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

function loadCalender(){

	var calenderList = document.getElementById('CalenderTable').getElementsByTagName('tbody')[0].getElementsByTagName('tr');
	if(calenderList != null){
		for(i=0; i<calenderList.length;i++){
			calenderList[i].innerHTML = getDayName(i); 
		}
	}
	else
	{
		return;
	}


}

function getDayName(x){

	switch(x){
	case 0: return "måndag";
	case 1: return "tisdag";
	case 2: return "onsdag";
	case 3: return "tordsag";
	case 4: return "fredag";
	case 5: return "lördag";
	case 6: return "söndag";
	}

}

function getDaysInMonth(){

	var d = new Date();
	var month = d.getMonth();
	var year = d.getYear();

	var monthStart = new Date(year, month, 1);
	var monthEnd = new Date(year, month + 1, 1);
	var monthLength = (monthEnd - monthStart) / (1000 * 60 * 60 * 24);
	return monthLength;
}