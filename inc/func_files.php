<?php

function read_tdb($file) {
    $lines = explode("\n", trim(file_get_contents($file)));

    foreach ($lines as &$line) {
        $line = explode('|', $line);
    }

    return $lines;
}

function minify_code($source, $extension, $stats = FALSE){
    $source   = win2unix($source);
    $source   = str_replace("\t", '    ', $source);

    switch ($extension) {
        case 'html':
            $minified = preg_replace('/<!--[\s\S]*?-->/m', '', $source);
            break;
        case 'css':
            $minified = preg_replace('/\/\*[\s\S]*?\*\//m', '', $source);
            $minified = trim_lines($minified);
            $minified = str_replace("\n", "\t", $minified);
            break;
        case 'js':
            $minified = preg_replace('/\/\*[\s\S]*?\*\//m', '', $source);
            $minified = trim_lines($minified);
            break;
        default:
            $minified = $source;
    }

    return $minified;
}

function ls_dir($dir, $allowed = '*'){
    $files = scandir($dir);

    if (is_array($allowed) == FALSE){
        $extension = $allowed;
        $allowed = array($extension);
    }

    foreach ($files as $file){
        if ($file == '.' || $file == '..'){
             unset($files[$file]);
        }
        else if ($allowed[0] != '*'){
            if ( in_array(pathinfo($file, PATHINFO_EXTENSION), $allowed) == FALSE){
                unset($files[$file]);
            }
        }
    }

    return $files;
}

function count_files($dir){
    $i = 0;

    if ($handle = opendir($dir)) {
        while (($file = readdir($handle)) !== false){
            if (!in_array($file, array('.', '..')) && !is_dir($dir.$file))
                $i++;
        }
    }

    return $i;
}

?>
