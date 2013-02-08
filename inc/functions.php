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


?>
