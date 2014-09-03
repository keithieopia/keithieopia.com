var THEME_NAME = $('#theme-name').text();

// Load Link Labeler
loadresource('content/themes/' + THEME_NAME + '/js/label-links.js');

// -=[ LAZY LOADER ]===============================================================================================-
console.log('INFO: Lazy loading JS & CSS based on elements in page...');

// Tooltip Popups
if ($('.tooltip-text').length != 0) {
    loadresource('content/themes/' + THEME_NAME + '/css/tooltip.css');
    loadresource('content/themes/' + THEME_NAME + '/js/tooltip.js');
}

// Back to Top of Page
if ($('#go-to-top').length != 0) {
    loadresource('content/themes/' + THEME_NAME + '/css/go-to-top.css');
    loadresource('content/themes/' + THEME_NAME + '/js/go-to-top.js');
}

// Random Quote Rotator
if ($('#random-quote').length != 0) {
    loadresource('content/themes/' + THEME_NAME + '/css/rand-quote.css');
    loadresource('content/themes/' + THEME_NAME + '/js/rand-quote.js');
}

// FAQ Answer Hider / Shower 
if ($('.faq').length != 0) {
    loadresource('content/themes/' + THEME_NAME + '/css/faq.css');
    loadresource('content/themes/' + THEME_NAME + '/js/faq.js');
}

// Source Code Highlighter
if ($('pre code').length != 0) {
    loadresource('content/themes/' + THEME_NAME + '/css/highlight/tomorrow-night.css');
    loadresource('content/themes/' + THEME_NAME + '/js/highlight.js');

    $('pre code').each(function(i, e) { hljs.highlightBlock(e) });
}
