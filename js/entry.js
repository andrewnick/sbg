var content = require("./modules/content.js");

$(window).load(function(){

	console.log('content');

	$("#ss-submit").on('click', function(e){
		console.log('click');
		content.submit();
	});
});

