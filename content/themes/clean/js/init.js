// -=[ LAZY LOADER ]===============================================================================================-
console.log('INFO: Lazy loading JS & CSS based on elements in page...');

// Source Code Highlighter
if ($('pre code').length != 0) {
    loadresource('content/themes/clean/css/highlight/tomorrow-night.css');
    loadresource('content/themes/clean/js/highlight.js');

    $('pre code').each(function(i, e) { hljs.highlightBlock(e) });
}


if ($('.faq').length != 0) {
    loadresource('content/themes/clean/css/faq.css');
    loadresource('content/themes/clean/js/faq.js');
}
