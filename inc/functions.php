<?php

function parseVars($content, $vars){
	// Replace {{ varible }} in HTML files with a PHP variable 
    preg_match_all('|\{\{ (.*) \}\}|U', $content, $array);

    foreach($array[1] as $match){
        $key = strtolower($match);

        if (isset($vars[$key])){
            $content = str_replace('{{ ' . $match . ' }}', $vars[$key], $content);
        }
    }
    
    return $content;
}


function gitVersion(){
	
	if (is_dir('.git')){
		$version = shell_exec('git describe --tags');
		
		if (!$version){
			$version = 'unknown';
		}
		else {
			
			$version = explode('-', $version);
 
			if (isset($version[2])){
				$commit = trim(substr($version[2], 1, 6));
				$version = $version[0] . ' (' . $commit . ')';
			}
			else {
				$version = $version[0];
			}
		}
	}
	else {
		$version = 'unknown';
	}
	
	return $version;
}

function humanFilesize($size) {
/** 
 * humanFilesize()
 * 	   AUTHOR:  vdbuilder <http://www.vdstudios.net/>
 * 	   URL:     http://stackoverflow.com/questions/5501427/php-filesize-
 * 					   mb-kb-conversion 
 * 	   LICENSE: Creative Commons [CC BY-SA 3.0]
 * 	   DESC:    Converts a filesize in bytes into readable form with the 
 * 				correct units of size.
 */
 
    $units = explode(' ', 'B KB MB GB TB PB');
    for ($i = 0; $size > 1024; $i++) {
        $size /= 1024;
    }
 
    return round($size, 2) . ' ' . $units[$i];
}


?>
