<?php
	
    // --- [ For Development Only, Remove Later ] ----------------------
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
	// -----------------------------------------------------------------
	
    include 'inc/markdown.php';
	include 'inc/functions.php';
    include 'inc/config.php';
    
	$c['version']     = gitVersion();
    $c['year']        = date('Y');
	$c['runtime']     = microtime(TRUE); 
	
	
	// Directory Traversal Security
	foreach ($_GET as $get){
		if ($get != NULL && !preg_match('/^[0-9a-zA-Z_.-]+$/', $get)) {
			die('Where you trying to do something naughty?');
		}
	}	

?>
