// Load Link Labeler
loadresource('content/themes/default/js/label-links.js');

// Load Piwik Stats
loadresource('content/themes/default/js/piwik.js');

// -=[ LAZY LOADER ]===============================================================================================-
console.log('INFO: Lazy loading JS & CSS based on elements in page...');

// Tooltip Popups
if ($('.tooltip-text').length != 0) {
    loadresource('content/themes/default/css/tooltip.css');
    loadresource('content/themes/default/js/tooltip.js');
}

// FAQ Answer Hider / Shower
if ($('.faq').length != 0) {
    loadresource('content/themes/default/css/faq.css');
    loadresource('content/themes/default/js/faq.js');
}

// Source Code Highlighter
if ($('pre code').length != 0) {
    loadresource('content/themes/default/css/highlight/tomorrow-night.css');
    loadresource('content/themes/default/js/highlight.js');

    $('pre code').each(function(i, e) { hljs.highlightBlock(e) });
}
