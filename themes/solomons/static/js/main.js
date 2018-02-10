function getWords(str, numWords) {
	return str.split(/\s+/).slice(0,numWords).join(" ");
}

$(document).ready(function() {
	$("p").first().html(function () {
		words = getWords( $(this).text(), 4 );
		return $(this).html().replace(words, "<span class=\"small-caps\">" + words + "</span>"); 
	});
});
