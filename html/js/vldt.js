/*
<form name=blah onSubmit="return check_form();">
<input type=text name=name> * required
<input type=text name=email> * required
<input type=text name=phone>
</form>
<script>
function check_form() {
	if (chk_text('Your Name', document.blah.name, true))
	if (chk_email('Your Email', document.blah.email, true))
	if (chk_num('Phone Number', document.blah.phone, true))
	if (chk_email_match("Email confirmation does not match", document.blah.email, document.blah.confirmemail))
		return true;
	return false;
}
</script>
*/

function chk_email (name, id, req) {
	if (id.value != '' || req) {
		var badwords = /asdf|asshole|fuck|porno|shit|abuse|suck/i;
		if (badwords.test(id.value)) {
			alert('Please enter valid value: ' + name);
			id.focus();
			return false;
		} else {
			var pat = /^[^\@]+\@[^\.]+\.\S+$/;
			if (!pat.test(id.value)) {
				if (id.value == '') {
					alert('Please enter: ' + name);
				} else {
					alert('Please re-enter: ' + name);
				}
				id.focus();
				return false;
			}
		}
	}
	return true;
}

function chk_email_match (name, id1, id2) {

	if ( id1.value == id2.value ) {
	
		return true;
	
	} else {
	
		alert('Error: ' + name);
			
		id2.focus();
		
		return false;
		
	}
}

function chk_filled (name, id, req) {
	if (id.value != '' || req) {
		var pat = /^\s*$/;
		if (pat.test(id.value)) {
			if (id.value == '') {
				alert('Please enter: ' + name);
			} else {
				alert('Please re-enter: ' + name);
			}
			id.focus();
			return false;
		}
	}
	return true;
}

function chk_filled_len (name, id, length, req) {
	if (id.value != '' || req) {
		var pat1 = /^\s*$/;
		if (pat1.test(id.value) || id.value.length != length) {
			if (id.value == '') {
				alert('Please enter: ' + name);
			} else {
				alert('Please re-enter: ' + name);
			}
			id.focus();
			return false;
		}
	}
	return true;
}

function chk_text (name, id, req) {
	if (id.value != '' || req) {
		var pat1 = /^\s*$/;
//		var pat2 = /^\d+$/;
//		if (pat1.test(id.value) || pat2.test(id.value)) {
		if (pat1.test(id.value)) {
			if (id.value == '') {
				alert('Please enter: ' + name);
			} else {
				alert('Please re-enter: ' + name);
			}
			id.focus();
			return false;
		}
	}
	return true;
}

function chk_text_len (name, id, length, req) {
	if (id.value != '' || req) {
		var pat1 = /^\s*$/;
		var pat2 = /^\d+$/;
		if (pat1.test(id.value) || pat2.test(id.value) || id.value.length != length) {
			if (id.value == '') {
				alert('Please enter: ' + name);
			} else {
				alert('Please re-enter: ' + name);
			}
			id.focus();
			return false;
		}
	}
	return true;
}

function chk_text_min_len (name, id, min_length, req) {
	if (id.value != '' || req) {
		var pat1 = /^\s*$/;
		var pat2 = /^\d+$/;
		if (pat1.test(id.value) || pat2.test(id.value) || id.value.length < min_length) {
			if (id.value == '') {
				alert('Please enter: ' + name);
			} else {
				alert('Please re-enter: ' + name);
			}
			id.focus();
			return false;
		}
	}
	return true;
}

function chk_num (name, id, req) {
	if ((id.value != '' && id.value != '0') || req) {
		var pat = /^\d+$/;
		if (!pat.test(id.value)) {
			if (id.value == '') {
				alert('Please enter numeric value: ' + name);
			} else {
				alert('Please re-enter numeric value: ' + name);
			}
			id.focus();
			return false;
		}
	}
	return true;
}

function chk_num_len (name, id, length, req) {
	if ((id.value != '' && id.value != '0') || req) {
		var pat = /^\d+$/;
		if (!pat.test(id.value) || id.value.length != length) {
			if (id.value == '') {
				alert('Please enter numeric value: ' + name);
			} else {
				alert('Please re-enter numeric value: ' + name);
			}
			id.focus();
			return false;
		}
	}
	return true;
}

// add by chen to accomodate canadian zips
function chk_zip (id, req) {
	if (id.value != '' || req) {
		if (id.value.length < 5) {
//		if (id.value.length != 5 && id.value.length != 7) {
			alert('Please enter valid zip/postal code.');
			id.focus();
			return false;
		}
	}
	return true;
}

function chk_money (name, id, req) {
	if ((id.value != '' && id.value != '0' && id.value != '0.00') || req) {
		var pat = /^\d+(\.\d\d?)?$/;
		if (!pat.test(id.value)) {
			if (id.value == '') {
				alert('Please enter monetary value: ' + name);
			} else {
				alert('Please re-enter monetary value: ' + name);
			}
			id.focus();
			return false;
		}
	}
	return true;
}

function chk_rate (name, id, req) {
	if ((id.value != '' && id.value != '0' && id.value != '0.00') || req) {
		var pat = /^\d\d?(\.\d\d?)?$/;
		if (!pat.test(id.value)) {
			if (id.value == '') {
				alert('Please enter rate value: ' + name);
			} else {
				alert('Please re-enter rate value: ' + name);
			}
			id.focus();
			return false;
		}
	}
	return true;
}

function chk_selected (name, id) {
	var pat = /^\s*$/;
	var val = '';
	for (var i = 0; i < id.options.length; i++) {
		if (id.options[i].selected) {
			val = id.options[i].value;
		}
	}
	if (pat.test(val)) {
		alert('Please select: ' + name);
		id.focus();
		return false;
	}
	return true;
}

function chk_checked (name, id) {
	if (!id.checked) {
		alert('Please check box: ' + name);
		id.focus();
		return false;
	}
	return true;
}

function chk_radio (name, id) {
	var checked = false;
	for (var i = 0; i < id.length; i++) {
		if (id[i].checked) {
			checked = true;
		}
	}
	if (!checked) {
		alert('Please check one: ' + name);
		id[0].focus();
		return false;
	}
	return true;
}

function chk_phone (name, pre, last) {
	var pat = /^(0000000|1111111|2222222|3333333|4444444|5555555|6666666|7777777|8888888|9999999)$/;
	if (pat.test(pre.value + last.value)) {
		alert('Please enter valid value: ' + name);
		pre.focus();
		return false;
	}
	return true;
}

function chk_single_phone (name, id, req) {
	id.value = id.value.replace(/\D/g, '');
	return chk_num_len(name, id, 10, req);
}

function chk_time_len (name, id1, id2, req) {
	if ((id1.value != '' && id1.value != '0') || (id2.value != '' && id2.value != '0') || req) {
		var num1 = 0;
		var num2 = 0;
		var pat = /^\d+$/;
		if (pat.test(id1.value)) {
			num1 = parseInt(id1.value);
		}
		if (pat.test(id2.value)) {
			num2 = parseInt(id2.value);
		}
		if (num1 + (num2 * 12) <= 0) {
			alert('Please Enter: ' + name);
			id2.focus();
			return false;
		}
	}
	return true;
}