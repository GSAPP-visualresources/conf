// Copied from http://stackoverflow.com/questions/2397370/how-to-change-the-link-color-of-the-current-page-with-css, needs modification. Use to style current link in Nav Bar

$(document).ready(function() {
    $("[href]").each(function() {
    if (this.href == window.location.href) {
        $(this).addClass("active");
        }
    });
});