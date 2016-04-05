<?php

function display(){
    global $c;

    // Generate the page title
    $c['page']['title'] = generate_title($c['page']['id']);

    // Parse the template
    $template = file_get_contents('content/themes/' . $c['site']['theme'] . '/template.html');

    preg_match_all("|\{\{ (.*) \}\}|U", $template, $matches, PREG_SET_ORDER);
    $matches = better_array_unique($matches);

    foreach ($matches as $match){
        $search  = (string) $match[0];
        $found   = (string) $match[1];
        $replace = FALSE;

        $action = explode('_', $found);
        switch (strtolower($action[0])) {
            case 'inc':
                $file = 'content/php/' . str_replace('inc_', '', $found) . '.php';

                if (file_exists($file)){
                    ob_start();
                    include $file;
                    $replace = ob_get_contents();
                    ob_end_clean();
                }
                break;

            case 'func':
                $function = str_replace('func_', '', $found);

                if (function_exists($function)) {
                    $replace = $function();
                }
                break;

            default:
                if (sizeof($action) == 1) {
                    if (isset($c[$found])){
                        $replace = $c[$found];
                    }
                }
                else {
                    $parent = $action[0];
                    $child  = $action[1];

                    if (isset($c[$parent][$child])){
                        if ($parent == 'site' && $child == 'email') {
                            if ($c['security']['protect-email'] == TRUE) {
                                $replace = encode_email($c['site']['email']);
                            }
                        }
                        else {
                            $replace = $c[$parent][$child];
                        }
                    }
                }
        }

        if ($replace === FALSE){
            $replace = 'ERROR: unknown template variable: ' . $found;
        }

        $template = str_replace($search, $replace, $template);
    }

    return $template;
}

function navigation() {
    $nav = parse_ini_file('content/nav.ini', TRUE);
    $current_page = (isset($_GET['p']) ? $_GET['p'] : 'home');

    $output = '<ul>';
    foreach ($nav as $item => $link) {
        $here = FALSE;

        if (substr($link['href'], 0, 4) != 'http') {
            if ($link['href'] == $current_page) $here = TRUE;

            $link['href'] = './?p=' . $link['href'];
        }

        $output .= '<li><a href="' . $link['href'] . '"' .
                    ($here ? ' class="here"' : '') .
                  '" title="' .
                  (empty($link['hover']) ? '' : $link['hover']) .
                  '">' . $item . '</a></li>';
    }
    $output .= '</ul>';

    return $output;
}

function generate_title($text){
    $dont_capitalize = array('a', 'an', 'and', 'at', 'but', 'by', 'down', 'for', 'in', 'nor', 'on', 'or', 'over',
                             'so', 'the', 'to', 'with', 'yet');

    $title = explode('-', $text);

    foreach ($title as &$word) {
        if (array_search($word, $dont_capitalize) === FALSE){
            $word = ucfirst($word);
        }
    }

    // First and last word always are capitalized
    $title[0] = ucfirst($title[0]);
    $title[count($title) - 1] = ucfirst($title[count($title) - 1]);

    return implode(' ', $title);
}

function parse_markdown($markdown){
    // Parse Markdown content
    include_once 'inc/libs/parsedown.php';
    $parsedown = new Parsedown();
    return $parsedown->text($markdown);
}

function get_runtime() {
    global $c;

    return round(microtime(TRUE) - $c['timer']['start'], 3, PHP_ROUND_HALF_UP) . ' &micro;s';
}

function get_memory() {
    return convert_bytes(memory_get_peak_usage());
}

?>
