<?php
	include 'inc/markdown.php';
	include 'inc/functions.php';
	include 'inc/config.php';


	if (!isset($_GET['p'])) $_GET['p'] = 'index';

	$file = 'text/'. $_GET['p'] .'.text';
			
	if(file_exists($file)){
		$c['content'] = Markdown(file_get_contents($file));
	}
	else {
		header('HTTP/1.0 404 Not Found');
		die('404 Not Found');
	}
	
	$c['runtime'] = round(((microtime(TRUE) - $c['runtime']) * 1000), 3);
    $c['peakram'] = humanFilesize(memory_get_peak_usage(TRUE));

	$c['template'] = file_get_contents('html/default.html');
	echo parseVars($c['template'], $c);
	
?>
