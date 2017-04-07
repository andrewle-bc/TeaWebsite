function $(id){
	var element = document.getElementById(id);
	if ( element == null )
		alert ( 'Programmer error: ' + id + ' does not exist.' );
	return element;
}

function checkFormReg() {
	
	if($('firstName').value == "") {
		$('confirmMessageFirstName').innerHTML = "Please enter your first name";
		return false;
	}
	
	if($('lastName').value == "") {
		$('confirmMessageLastName').innerHTML = "Please enter your last name";
		return false;
	}
	
	if($('user').value == "") {
		$('confirmMessageUser').innerHTML = "Please enter a username";
		return false;
	}
	
	var str = $('email').value;
    if (str.search(/@[a-zA-Z0-9]+\.(com|ca|org)$/i) == -1 || str == "") {
		$('confirmMessageEmail').innerHTML = "Please enter a valid email";
		return false;
	}
	
	if($('pass1').value == "") {
		$('confirmMessagePass').innerHTML = "Please enter a password";
		return false;
	}
	
	if($('pass1').value.length < 6) {
		$('confirmMessagePass').innerHTML = "Passwords must be 6 characters or more";
		return false;
	}
	
	if ($('pass1').value != $('pass2').value) {
		$('confirmMessageRepeat').innerHTML = "Passwords do not match!";
		return false;
	}
	
	return true;
}

function checkFormContact() {
	
	if($('name').value == "") {
		$('confirmMessageName').innerHTML = "Please enter your name";
		return false;
	}
	
	var str = $('email').value;
    if (str.search(/\.(com|ca|org)$/i) == -1 || str == "") {
		$('confirmMessageEmail').innerHTML = "Please enter a valid email";
		return false;
	}
	
	if($('subject').value == "") {
		$('confirmMessageSubject').innerHTML = "Please enter a subject";
		return false;
	}
	
	if($('comment').value == "") {
		$('confirmMessageComment').innerHTML = "Tell us what's on your mind!";
		return false;
	}
}

function checkFormSignIn() {
	if($('signInUser').value == "") {
		$('confirmMessageUserSignIn').innerHTML = "Please enter your username";
		return false;
	}
	
	if($('signInPass').value == "") {
		$('confirmMessagePassSignIn').innerHTML = "Please enter your password";
		return false;
	}
}