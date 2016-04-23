$(document).ready(function (){
	$('#random-quote').load('content/themes/default/php/quote.php');
	
	var refresh = setInterval(function(){
		console.log('INFO: Refreshing random quote div...');

		$('#random-quote').load('content/themes/default/php/quote.php', 'data', function(){
			$(this).hide().fadeIn('slow');
		});
	
	}, 12000); // every 8 seconds
});
