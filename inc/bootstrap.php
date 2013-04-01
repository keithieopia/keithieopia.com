<?php
	
    // --- [ For Development Only, Remove Later ] ----------------------
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
	// -----------------------------------------------------------------
	
    session_start();
    
    include 'inc/markdown.php';
	include 'inc/functions.php';
    include 'inc/config.php';
    
    $c['message']     = '';
	$c['version']     = gitVersion();
    $c['year']        = date('Y');
	$c['runtime']     = microtime(TRUE); 
	
	
	// Directory Traversal Security
	foreach ($_GET as $get){
		if ($get != NULL && !preg_match('/^[0-9a-zA-Z_.-]+$/', $get)) {
            
            header('HTTP/1.0 403 Forbidden');
			die('<h1>Forbidden</h1>
                 <p>
                    You have angered the web server. Pray you do not anger 
                    it further.
                 </p>
                ');
		}
	}	

?>
