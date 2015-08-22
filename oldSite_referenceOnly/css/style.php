<?php
    header("Content-type: text/css; charset: UTF-8");
	
	//$accent_color="#00ccff";
	$accent_color = "#68b7e9";
	$highlight_color="#a8d1ff";
?>

* {
	padding: 0;
	margin: 0;
	outline:none;
}

::selection {
	background: <?php echo($highlight_color); ?>; /* Safari */
	}
::-moz-selection {
	background: <?php echo($highlight_color); ?>; /* Firefox */
}

html, body {
	color: #fff;
	font-size: 90%;
	font-family: Trebuchet, Arial, sans-serif;
}

html {
	background: #000;
}

body {
	background: #1c1c1c;
}

.horizbar {
	width: 100%;
	clear: both;
	position: relative;
	text-align: center;
	min-width: 660px;
}

.horizbar2 {
	width: 95%;
	margin: 0 auto;
	position: relative;
	text-align: left;
}

#header{
	background: #000;
	/*border-bottom: 1px solid #333;*/
}

#headerlogo {
	padding-top: 20px;
	padding-bottom: 20px;
	float: left;
}

#header a, #headerlogo a {
	color: #fff;
	text-decoration: none;
}

#headersearch {
	float: right;
	padding-top: 20px;
	padding-bottom: 20px;
	text-align: right;
	position: relative;
}

#headersearch a {
	color: #666;
	text-decoration: none;
}

#headersearch a:hover {
	color: #ccc;
}

.searchinput {
	height: 30px;
	background: #666;
	border: none;
	width: 300px;
	text-align: left;
	padding-left: 8px;
	padding-right: 8px;
	position: relative;
	outline: none;
}

.searchinput:focus {
	background: #aaa;
	color: #000;
}

.searchbutton {
	height: 30px;
	background: #666;
	border: none;
	margin-left: 3px;
	color: #fff;
	padding-left: 8px;
	padding-right: 8px;
	cursor: hand; 
	cursor: pointer;
	font-weight: bold;
	position: relative;
}

.searchbutton:hover, #meat .searchbutton:hover {
	background: #fff;
	color: #000;
}

#meat {
	margin-top: 45px;
	margin-bottom: 30px;
}

h1, h2, h3, h4, #meat p {
	max-width: 60em;
}

#meat input, #meat textarea {
	background: #333;
	border: none;
	text-align: left;
	padding: 4px;
	color: #fff;
	margin-right: 40px;
	font-weight: bold;
}

.searchinput:focus, #meat input:focus, #meat textarea:focus {
	transition-property: background;
  	transition-duration: 0.5s;
   	transition-timing-function: ease-in;
   	transition-delay: 0.0s;
}

#meat input:focus, #meat textarea:focus {
	background: #999;
	outline: none;
	color: #000;
	font-weight: bold;
}

/*#meat input:hover {
	background: #aaa;
	color: #000;
	font-weight: bold;
}*/

.webform {
	/*width: 100%;*/
}

.webformleft{
	padding-right: 10px;
	vertical-align: top;
}

.webformright {
	width: 210px;
}

textarea {
	font-family: Trebuchet, Arial, sans-serif;
}

.recordSeparator {
	width: 100%;
	padding-top: 10px;
	padding-bottom: 10px;
	border-bottom: 1px solid #333;
	border-top: 1px solid #333;
	font-size: 18px;
	position: relative;
	clear: both;
	margin-bottom: 20px;
}

.leftcol {
	float: left;
}

.rightcol {
	float: right;
}

.slideleft {
	margin-bottom: 30px;
}

.slideright {
	margin-bottom: 30px;
	margin-left: 20px;
}

.slideinfopanel {
	background: #222;
	margin-bottom: 20px;
	padding: 8px;
}

.leftmain {
	float: left;
	/*width: 40%;*/
	/*margin-right: 380px;*/
	padding-bottom: 40px;
}

.rightmain {
	display: none;
	/*float: right;
	width: 58%;
	width: 380px;
	text-align: right;*/
}

.clipButtonClass {
	margin-top: 10px;
	width:100%; 
	height: 30px; 
	background: #333; 
	font-weight: bold;
	position: relative;
	padding: 8px;
	text-align: center;
}

#clipButton {
}

#clipButton.zeroclipboard-is-hover {
	background: #00c6ff;
	color: #000;
}

#footer, .footerright {
	background: #000;
	padding-top: 20px;
	padding-bottom: 20px;
	color: #666;
	border-top: 1px solid #333;
	clear: both;
}

.footerleft{
	float: left;
	display: block;
}

.footerright {
	border-top: 1px solid #333;
	text-align: right;
}

.tilethumbcontainer {
	height: 200px;
	line-height: 200px;
	position: relative;
	float: left;
	margin-right: 15px;
	margin-bottom: 30px;
}

#fadingAlert {
	z-index: 3;
	position: absolute;
	top: 0px;
	left: 0px;
	width: 100%;
	height: 100%;
	text-align: center;
	font-size: 18px;
	background: #000;
	color: #fff;
	display: none;
}

.vcenter25 {
	position: absolute;
	width: 100%;
	top: 25%;
}


.tilethumb {
	min-height:50px;
	max-width:100%; max-height:100%;
	vertical-align: middle;
}

.imghover {
	z-index: 2;
	background: #1c1c1c;
	color: #fff;
	position: absolute;
	top: 0px;
	left: 0px;
	width: 100%;
	height: 100%;
	opacity: 0; /* Standard: FF gt 1.5, Opera, Safari, CSS3 */
	filter: alpha(opacity=0); /* IE lt 8 */
	-ms-filter: "alpha(opacity=0)"; /* IE 8 */
	-khtml-opacity: 0; /* Safari 1.x */
	-moz-opacity: 0; /* FF lt 1.5, Netscape */
	overflow: none;
	line-height: 100%;
	padding-bottom: 5px;
	/*display: none;*/
	display: block;
}

.tilethumbcontainer:hover .imghover {
	/*display: block;*/
	opacity: .80; /* Standard: FF gt 1.5, Opera, Safari, CSS3 */
	filter: alpha(opacity=80); /* IE lt 8 */
	-ms-filter: "alpha(opacity=80)"; /* IE 8 */
	-khtml-opacity: .80; /* Safari 1.x */
	-moz-opacity: .80; /* FF lt 1.5, Netscape */
	transition: all 0.1s linear;
	-webkit-transition: all 0.3s ease;
	-moz-transition: all 0.3s ease;
	-o-transition: all 0.3s ease;
	-ms-transition: all 0.3s ease;
}

.imghovertext{
	padding: 15px;
}

.tabledefault {
	border: none;
}

.tabledefault td {
	padding-right: 8px;
}

.tablesecondary {
	color: #444;
}

.alignright{
	text-align: right;
}

h3 {
	margin: 0;
	padding: 0;
}

h4 {
	color: <?php echo($accent_color); ?>;
	font-size: 110%;
	margin-bottom: 5px;
}

p {
	padding-bottom: 10px;
}

img {
	border: 0px;
}

a {
	text-decoration: none;
	color: <?php echo($accent_color); ?>;
}

a:hover {
	background: <?php echo($accent_color); ?>;
	color: #000;
}

.greytext{
	color: #666;
}

.smalltext {
	font-size: 85%;
	display: inline;
}

.highlight {
	font-weight: bold;
	background: #CCC;
	color: #000;
}

.clear {
	clear: both;
}

.hidden {
	display: none;
}

/*Navigation menu*/

#navbar {
	border-top: 1px solid #333;
	border-bottom: 1px solid #333;
}

#navcontainer ul {
	padding-left: 0;
	margin-left: 0;
	color: White;
	float: left;
	width: 100%;
	font-family: arial, helvetica, sans-serif;
}

#navcontainer ul li { 
	display: inline; 
}

#navcontainer ul li a {
	padding: 0.4em 1em;
	color: White;
	text-decoration: none;
	float: left;
	border-right: 1px solid #000;
}

#navcontainer ul li a:hover {
	background-color: <?php echo($accent_color); ?>;
	color: #000;
}

