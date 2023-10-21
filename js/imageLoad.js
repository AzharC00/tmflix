/**
 * JQuery Lazy Plugin
 * AJAX for movie images
 */
$(document).ready(function() {
    $('#series-section .lazy').Lazy({
        appendScroll: $('#series-section'),
        effect: 'fadeIn',
        afterLoad: function(element) {
            console.log('hi');
        },
        onError: function(element) {
            console.log('error loading ' + element.data('src'));
        }
    });
});