// Pasted from http://stackoverflow.com/questions/2397370/how-to-change-the-link-color-of-the-current-page-with-css, needs modification. Use to style current link in Nav Bar

<script type="text/javascript">

function getCurrentLinkFrom(links){

    var curPage = document.URL;
    curPage = curPage.substr(curPage.lastIndexOf("/")) ;

    links.each(function(){
        var linkPage = $(this).attr("href");
        linkPage = linkPage.substr(linkPage.lastIndexOf("/"));
        if (curPage == linkPage){
            return $(this);
        }
    });
};

$(document).ready(function(){
    var currentLink = getCurrentLinkFrom($("navbar a"));
    currentLink.addClass("current_link") ;
});
</script>