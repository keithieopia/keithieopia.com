<?php

	include 'inc/bootstrap.php';

	if (!isset($_GET['p'])) $_GET['p'] = 'index';


    switch ($_GET['p']){
        
        case 'newpost':
            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == TRUE){
                
                if (isset($_POST['filename']) && isset($_POST['content'])){

                    $file = './text/'. $_POST['filename'] .'.md';
                    
                    if (file_exists($file)) {
                        $_SESSION['error'] = 'Sorry, that filename already exists.';
                        header('Location: ./?p=admin');
                        die();                        
                    }
                    

                    $f = fopen($file, "w");
                    fwrite($f, $_POST['content']);
                    fclose($f);
                    
                    $_SESSION['success'] = 'Post added successfully.';
                    header('Location: ./?p=admin');
                    die();
                }
                else {
                    $_SESSION['error'] = 'You must fill out all the fields.';
                    header('Location: ./?p=admin');
                    die();                    
                }
            }
            else {
                $_SESSION['error'] = 'You must be logged in to see that page.';                
                header('Location: ./?p=login');
                die();
            }

            break;
        
        case 'admin':
            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == TRUE){
                $c['content'] = file_get_contents('html/newpost.html');
            }
            else {
                $_SESSION['error'] = 'You must be logged in to see that page.';
                header('Location: ./?p=login');
                die();
            }
            
            break;

        case 'credits':
            $c['content'] = file_get_contents('html/credits.html');
            break;
        
        case 'logout':
            
            session_unset();
            session_destroy();
            $_SESSION = array();

            session_start();
            session_regenerate_id(true); 
    
            $_SESSION['success'] = 'You have successfully logged out!';
            header('Location: ./?p=login');
            die(); 
                            
            break;
            
        case 'login':
        
            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == TRUE){
                
                header('Location: ./?p=admin');
                die();                
            }
            else {
                if (isset($_POST['username']) && isset($_POST['password'])){
                
                    if ($_POST['username'] == $c['username'] &&
                        md5($_POST['password']) == $c['password']){
                        
                        session_regenerate_id(true); 
                        
                        $_SESSION['username'] = $_POST['username'];
                        $_SESSION['loggedin'] = TRUE;
                    
                        header('Location: ./?p=admin');
                        die();
                    }
                    else {
                        $_SESSION['error'] = 'Bad username or password!';
                    }
                    
                }
            
                $c['content'] = file_get_contents('html/login.html');
            }
            
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
    
    
    // Message handling
    if (isset($_SESSION['error'])){
        $c['message'] = '<div class="error">'. $_SESSION['error'] .'</div>';
        unset($_SESSION['error']);
    }
    if (isset($_SESSION['success'])){
        $c['message'] = '<div class="success">'. $_SESSION['success'] .'</div>';
        unset($_SESSION['success']);
    }
    
    
    
	$c['runtime'] = round(((microtime(TRUE) - $c['runtime']) * 1000), 3);
    $c['peakram'] = humanFilesize(memory_get_peak_usage(TRUE));

	$c['template'] = file_get_contents('html/default.html');
    
    $c['content'] = parseVars($c['content'], $c);
	echo parseVars($c['template'], $c);
	
?>
