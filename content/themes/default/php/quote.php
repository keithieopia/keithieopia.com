<?php
	include '../../../../inc/func_files.php';
	include '../../../../inc/func_strarr.php';
		
    $quotes = read_flatfile('./quotes.dat');
    $quote  = better_array_rand($quotes);


	echo '<div class="quote-content">' . $quote['quote'] . '</div>';
	
	if (isset($quote['author'])) {
		echo '<div class="quote-author">' . $quote['author'] . '</div>';
	}
      
	if (isset($quote['source'])) {      
        echo '<div class="quote-source">' . $quote['source'] . '</div>';
	}
?>
