function $(id){
	var element = document.getElementById(id);
	if ( element == null )
		alert ( 'Programmer error: ' + id + ' does not exist.' );
	return element;
}

function checkFormReg() {
	
	if($('fname').value == "") {
		$('confirmMessageFirstName').innerHTML = "Please enter your first name";
		return false;
	}
	
	if($('lname').value == "") {
		$('confirmMessageLastName').innerHTML = "Please enter your last name";
		return false;
	}
	
	if($('login').value == "") {
		$('confirmMessageUser').innerHTML = "Please enter a username";
		return false;
	}
	
	var str = $('email').value;
    if (str.search(/@[a-zA-Z0-9]+\.(com|ca|org)$/i) == -1 || str == "") {
		$('confirmMessageEmail').innerHTML = "Please enter a valid email";
		return false;
	}
	
	if($('password').value == "") {
		$('confirmMessagePass').innerHTML = "Please enter a password";
		return false;
	}
	
	if($('password').value.length < 6) {
		$('confirmMessagePass').innerHTML = "Passwords must be 6 characters or more";
		return false;
	}
	
	if ($('password').value != $('cpassword').value) {
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
	if($('loginUser').value == "") {
		$('confirmMessageUserSignIn').innerHTML = "Please enter your username";
		return false;
	}
	
	if($('loginPassword').value == "") {
		$('confirmMessagePassSignIn').innerHTML = "Please enter your password";
		return false;
	}
}