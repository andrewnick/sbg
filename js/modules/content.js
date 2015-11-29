module.exports = {
	submit: function() {
		name = $('#name').val();
		email = $('#email').val();
		data = {"entry.213563141": name, "entry.502934245": email };
		console.log(name);
		// $.ajax({
		// 	url: "https://docs.google.com/forms/d/1dXI2wYacbPfKSC7LdbJfXvHSG4Un7B_G8r5rw7pToHI/formResponse",
		// 	type: "POST",
		// 	dataType: "xml",
		// 	statusCode: {
		// 		0: () => {
		// 			console.log('This worked');
		// 		}
		// 	}
		// });
	}
};