var content = require("./modules/content.js");

$(document).on('ready', function(){
	$("#ss-submit").on('click', function(e){
		content.submit();
	});
});

