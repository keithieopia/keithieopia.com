<?php

function get_page_info(){
    global $c;

    // Get the raw data for the page
    $c['page']['content'] = parse_markdown(display_theme(file_get_contents($c['page']['file'])));

    // Generate & set page title
    $c['page']['title'] = gen_page_title($c['page']['id']);
    $c['page']['desc']  = "";
    $c['page']['ctime'] = filemtime($c['page']['file']);
    $c['page']['mtime'] = "";

    // Add to metainfo
    $meta = array('id'    => $c['page']['id'],
                  'title' => $c['page']['title'],
                  'desc'  => "",
                  'ctime' => $c['page']['ctime'],
                  'mtime' => "",
                  'hash'  => $c['page']['hash']);
}

function gen_page_title($text){
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

?>
