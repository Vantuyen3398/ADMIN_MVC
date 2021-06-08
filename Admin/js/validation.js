//validate đăng kí user
$().ready(function() {
	$("#registration").validate({
		onfocusout: false,
		onkeyup: false,
		onclick: false,
		rules: {
			"name": {
				required: true,
				minlength: 5
			},
			"password": {
				required: true,
				minlength: 8
			},
			"username": {
				required: true,
				minlength: 5
			},
			"email": {
				required: true,
				email: true
			}
		},
		messages: {
			"name": {
				required: "Required name !",
				minlength: "Please enter at least 5 characters !"
			},
			"password": {
				required: "Required password !",
				minlength: "Please enter at least 8 characters !"
			},
			"username": {
				required: "Required username !",
				minlength: "Please enter at least 8 characters !"
			},
			"email": {
				required: "Required email !",
				email: "Email not valid !"
			}
		}
	});
});

//validate login
$().ready(function() {
	$("#login").validate({
		onfocusout: false,
		onkeyup: false,
		onclick: false,
		rules: {
			"username": {
				required: true
			},
			"password": {
				required: true
			}
		},
		messages: {
			"username": {
				required: "Required name !"
			},
			"password": {
				required: "Required password !"
			}
		}
	});
});

//validate add product
$().ready(function() {
	$("#product").validate({
		onfocusout: false,
		onkeyup: false,
		onclick: false,
		rules: {
			"name": {
				required: true
			},
			"price": {
				required: true,
				number: true,
				maxlength: 255
			},
			"image": {
				required: true
			}
		},
		messages: {
			"name": {
				required: "Required name !"
			},
			"price": {
				required: "Required price !",
				number: "Price not valid",
				maxlength: "Please enter at least 255 characters !"
			},
			"image": {
				required: "Required image !"
			}
		}
	});
});

//validate update product
$().ready(function() {
	$("#updateproduct").validate({
		onfocusout: false,
		onkeyup: false,
		onclick: false,
		rules: {
			"name": {
				required: true
			},
			"price": {
				required: true,
				number: true,
				maxlength: 255
			},
			"image": {
				required: true
			}
		},
		messages: {
			"name": {
				required: "Required name !"
			},
			"price": {
				required: "Required price !",
				number: "Price not valid",
				maxlength: "Please enter at least 255 characters !"
			},
			"image": {
				required: "Required image !"
			}
		}
	});
});