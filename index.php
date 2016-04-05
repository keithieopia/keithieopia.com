<?php

include 'inc/init.php';

// Prevent errors if ?p= isn't set
$c['page']['id'] = (empty($_GET['p'])) ? 'index' : $_GET['p'];

switch ($c['page']['id']) {
    case 'css':
        $content = trim(file_get_contents('content/themes/'. $c['site']['theme'] .'/css/style.css'));
        $content = win2unix($content);

        if (isset($_GET['display']) && $_GET['display'] == TRUE) {
            header('Content-Type: text/html');
            echo minify_code($content, 'css', TRUE);
        }
        else {
            /*
            $expires = gmdate("D, d M Y H:i:s", time() + $c['cache']['css']);

            ob_start ('ob_gzhandler');
            header('Expires: ' . $expires . ' GMT');
            header('Cache-Control: must-revalidate');
            */
            header('Content-Type: text/css; charset: UTF-8');
            echo '/* This style sheet has been minified. To view the original source add &display=TRUE to the URL */';
            echo "\n\n";
            echo minify_code($content, 'css');
        }
        break;

    case 'js':
        $js = array('inc/js/modernizr.js', 'inc/js/init.js');

        $content = '';
        foreach ($js as $file) {
            $content .= trim(file_get_contents($file));
        }

        $content = win2unix($content);

        if (isset($_GET['display']) && $_GET['display'] == TRUE) {
            header('Content-Type: text/html');
            echo minify_code($content, 'js', TRUE);
        }
        else {
            header('Content-Type: text/javascript');
            echo '/* This style sheet has been minified. To view the original source add &display=TRUE to the URL */';
            echo "\n\n";
            echo minify_code($content, 'js');
        }
        break;

    default:
        if (array_search($c['page']['id'] . '.php', ls_dir('content/php/', 'php')) !== FALSE) {
            ob_start();
            include 'content/php/' . $c['page']['id'] . '.php';
            $c['page']['content'] = ob_get_contents();
            ob_end_clean();
        }
        elseif (array_search($c['page']['id'] . '.md', ls_dir('content/pages/', 'md')) !== FALSE) {
            $c['page']['content'] = parse_markdown(file_get_contents('content/pages/' . $c['page']['id'] . '.md'));
        }

        // Unknown page
        else {
            header('HTTP/1.0 404 Not Found');
            $c['page']['id']   = '404';
            $c['page']['content'] = parse_markdown(file_get_contents('content/pages/404.md'));
        }

        echo display();
}


?>
