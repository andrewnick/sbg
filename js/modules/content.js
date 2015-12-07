module.exports = {
	submit: function() {
		var name = $('#name').val();
		var email = $('#email').val();
		var data = {"entry.992613588": name, "entry.262281734": email };

		$.ajax({
			url: "https://docs.google.com/forms/d/1fJlJAqs0uE10V1XrQNnDtDxjohZX1-gFJtzgyoTE7Co/formResponse",
			type: "POST",
			data: data,
			dataType: "xml",
			statusCode: {
				0: () => {
					this.successMessage();
				},
				200: () => {
					this.successMessage();
				}
			}
		});
	},
	successMessage: function() {
		$('form').removeClass('join-form-show');
		$('.join-message').addClass('join-message-show');
	}
};