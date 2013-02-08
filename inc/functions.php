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

?>
