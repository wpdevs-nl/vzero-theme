/*
 * Place any JavaScript/CSS code that needs to be run on the footer here.
 */
console.log('footer scripts loaded');

jQuery(document).ready(function() {
    jQuery('.toggle-nav').click(function(e) {
        jQuery('.main-nav').toggleClass('open');

        e.preventDefault();
    });

});