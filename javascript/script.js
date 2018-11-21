$(".question1") .click(function () {
	$(".answer1") . slideToggle();
});

$(".question2") .click(function () {
	$(".answer2") .slideToggle();
});


$(".question3") .click(function () {
	$(".answer3") . slideToggle();
});

$(".question4") .click(function () {
	$(".answer4") .slideToggle();
});


$(".question5") .click(function () {
	$(".answer5") . slideToggle();
});

$(".question6") .click(function () {
	$(".answer6") .slideToggle();
});


$(".question7") .click(function () {
	$(".answer7") . slideToggle();
});

$(".question8") .click(function () {
	$(".answer8") .slideToggle();
});

$(".question9") .click(function () {
	$(".answer9") . slideToggle();
});

$(".question10") .click(function () {
	$(".answer10") .slideToggle();
});




var loginUser = document.forms.logonForm;


function checkUsername() {
       if (loginUser.user.value ==="" || loginUser.user.value===null) {

        loginUser.user.style.borderColor = "red";
       }else{

        loginUser.user.style.borderColor = "green";
       }
}


function checkPassword() {
	if (loginUser.pass.value === "" || loginUser.pass.value === null) {

		loginUser.pass.style.borderColor = "red";
	}else{

		loginUser.pass.style.borderColor = "green";
	}
}

loginUser.user.addEventListener("blur", checkUsername, false);
loginUser.pass.addEventListener("blur", checkPassword, false);




var userRegistration = document.forms.userRegister;

function checkLastname() {
	
	if (userRegistration.lname.value ==="" || userRegistration.lname.value=== null) {

		userRegistration.lname.style.borderColor= "red";
		
	}else{

				userRegistration.lname.style.borderColor= "green";

	}
}


userRegistration.lname.addEventListener("blur", checkLastname, false);

