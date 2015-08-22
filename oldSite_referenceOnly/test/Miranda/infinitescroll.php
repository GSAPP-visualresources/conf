<head>


<script>
var contentHeight = 800;
var pageHeight = document.documentElement.clientHeight;
var scrollPosition;
var n = 10;
var xmlhttp;
 
function putImages(){
     
    if (xmlhttp.readyState==4)
      {
          if(xmlhttp.responseText){
             var resp = xmlhttp.responseText.replace("\r\n", ""); 
             var files = resp.split(";");
              var j = 0;
              for(i=0; i<files.length; i++){
                  if(files[i] != ""){
                     document.getElementById("container").innerHTML += '<a href="img/'+files[i]+'"><img src="thumb/'+files[i]+'" /></a>';
                     j++;
                   
                     if(j == 3 || j == 6)
                          document.getElementById("container").innerHTML += '';
                      else if(j == 9){
                          document.getElementById("container").innerHTML += '<p>'+(n-1)+" Images Displayed | <a href='#header'>top</a></p><hr />";
                          j = 0;
                      }
                  }
              }
          }
      }
}
         
         
function scroll(){
     
    if(navigator.appName == "Microsoft Internet Explorer")
        scrollPosition = document.documentElement.scrollTop;
    else
        scrollPosition = window.pageYOffset;        
     
    if((contentHeight - pageHeight - scrollPosition) < 500){
                 
        if(window.XMLHttpRequest)
            xmlhttp = new XMLHttpRequest();
        else
            if(window.ActiveXObject)
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            else
                alert ("Bummer! Your browser does not support XMLHTTP!");         
           
        var url="infinitescroll.php?n="+n;
         
        xmlhttp.open("GET",url,true);
        xmlhttp.send();
         
        n += 9;
        xmlhttp.onreadystatechange=putImages;       
        contentHeight += 800;       
    }
}
 
</script>

</head>
<body onload="setInterval('scroll();', 250);">
    <div id="header">Web Gallery | Infinite Scroll</div>
    <div id="container">   
        <a href="img/1.jpg"><img src="thumb/1.jpg" /></a>    
        <a href="img/2.jpg"><img src="thumb/2.jpg" /></a>    
        <a href="img/3.jpg"><img src="thumb/3.jpg" /></a>
        <a href="img/4.jpg"><img src="thumb/4.jpg" /></a>    
        <a href="img/5.jpg"><img src="thumb/5.jpg" /></a>    
        <a href="img/6.jpg"><img src="thumb/6.jpg" /></a>
        <a href="img/7.jpg"><img src="thumb/7.jpg" /></a>   
        <a href="img/8.jpg"><img src="thumb/8.jpg" /></a>    
        <a href="img/9.jpg"><img src="thumb/9.jpg" /></a>    
         
        <p>9 Images Displayed | <a href="#header">top</a></p>
        <hr />
    </div>
	


</body>