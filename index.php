<?php

	include 'inc/bootstrap.php';

	if (!isset($_GET['p'])) $_GET['p'] = 'index';


    switch ($_GET['p']){

        case 'credits':
            $c['content'] = file_get_contents('html/credits.html');
            break;
        
        case 'login':
            $c['content'] = file_get_contents('html/login.html');
            break;
            
        default: 
            
            $file = 'text/'. $_GET['p'] .'.md';
			
            if(file_exists($file)){
                $c['content'] = Markdown(file_get_contents($file));
            }
            else {
                header('HTTP/1.0 404 Not Found');
                $c['content'] = file_get_contents('html/404.html');
            }
    }
    
    
	$c['runtime'] = round(((microtime(TRUE) - $c['runtime']) * 1000), 3);
    $c['peakram'] = humanFilesize(memory_get_peak_usage(TRUE));

	$c['template'] = file_get_contents('html/default.html');
	echo parseVars($c['template'], $c);
	
?>
