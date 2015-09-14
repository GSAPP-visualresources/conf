<?php 
include('header.php'); 
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Resource Detail</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>
        
<?php
$img_id=$_GET["img_id"];

$findCommand =& $fm->newFindCommand('AllInfo');
$findCommand->addFindCriterion('Filename', $img_id);
$result = $findCommand->execute();
$records = $result->getRecords();
foreach ($records as $record) 
	?>
	   	<div class="pages">
	   		<div class="pageLeft">
                <div class="pageContent noscroll"><!--added noscroll class to prevent scrolling behind overlay-->
                    <div class="label"><div class="labelText">Images</div></div>
                    <div class="displayBlock">
                        <div class="inner">
                        <img src="assets/bakerHouse.jpg">
                        <div class="displayContentHover">
                            <ul>
                                <li>Alvar Aalto</li>
                                <li>Baker House</li>
                                <li>1932&mdash;1934</li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <div class="displayBlock">
                        <div class="inner">
                        <img src="assets/elevation_mairea.jpg">
                        <div class="displayContentHover">
                            <ul>
                                <li>Alvar Aalto</li>
                                <li>Baker House</li>
                                <li>1932&mdash;1934</li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <div class="displayBlock">
                        <div class="inner">
                        <img src="assets/HCC_aalto.jpg">
                        <div class="displayContentHover">
                            <ul>
                                <li>Alvar Aalto</li>
                                <li>Baker House</li>
                                <li>1932&mdash;1934</li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <div class="displayBlock">
                        <div class="inner">
                        <img src="assets/mairea_interior.jpg">
                        <div class="displayContentHover">
                            <ul>
                                <li>Alvar Aalto</li>
                                <li>Baker House</li>
                                <li>1932&mdash;1934</li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <div class="displayBlock">
                        <div class="inner">
                        <img src="assets/Paimio_Sanatorium2.jpg">
                        <div class="displayContentHover">
                            <ul>
                                <li>Alvar Aalto</li>
                                <li>Baker House</li>
                                <li>1932&mdash;1934</li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <div class="displayBlock">
                        <div class="inner">
                        <img src="assets/SaynatsaloTownHall4.jpg">
                        <div class="displayContentHover">
                            <ul>
                                <li>Alvar Aalto</li>
                                <li>Baker House</li>
                                <li>1932&mdash;1934</li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <div class="displayBlock">
                        <div class="inner">
                        <img src="assets/Villa_Mairea.jpg">
                        <div class="displayContentHover">
                            <ul>
                                <li>Alvar Aalto</li>
                                <li>Baker House</li>
                                <li>1932&mdash;1934</li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <div class="displayBlock">
                        <div class="inner">
                        <img src="assets/VIPlibrary.jpg">
                        <div class="displayContentHover">
                            <ul>
                                <li>Alvar Aalto</li>
                                <li>Baker House</li>
                                <li>1932&mdash;1934</li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <div class="displayBlock">
                        <div class="inner">
                        <img src="assets/bakerHouse.jpg">
                        <div class="displayContentHover">
                            <ul>
                                <li>Alvar Aalto</li>
                                <li>Baker House</li>
                                <li>1932&mdash;1934</li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <div class="displayBlock">
                        <div class="inner">
                        <img src="assets/elevation_mairea.jpg">
                        <div class="displayContentHover">
                            <ul>
                                <li>Alvar Aalto</li>
                                <li>Baker House</li>
                                <li>1932&mdash;1934</li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <div class="displayBlock">
                        <div class="inner">
                        <img src="assets/HCC_aalto.jpg">
                        <div class="displayContentHover">
                            <ul>
                                <li>Alvar Aalto</li>
                                <li>Baker House</li>
                                <li>1932&mdash;1934</li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <div class="displayBlock">
                        <div class="inner">
                        <img src="assets/mairea_interior.jpg">
                        <div class="displayContentHover">
                            <ul>
                                <li>Alvar Aalto</li>
                                <li>Baker House</li>
                                <li>1932&mdash;1934</li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <div class="displayBlock">
                        <div class="inner">
                        <img src="assets/Paimio_Sanatorium2.jpg">
                        <div class="displayContentHover">
                            <ul>
                                <li>Alvar Aalto</li>
                                <li>Baker House</li>
                                <li>1932&mdash;1934</li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <div class="displayBlock">
                        <div class="inner">
                        <img src="assets/SaynatsaloTownHall4.jpg">
                        <div class="displayContentHover">
                            <ul>
                                <li>Alvar Aalto</li>
                                <li>Baker House</li>
                                <li>1932&mdash;1934</li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <div class="displayBlock">
                        <div class="inner">
                        <img src="assets/Villa_Mairea.jpg">
                        <div class="displayContentHover">
                            <ul>
                                <li>Alvar Aalto</li>
                                <li>Baker House</li>
                                <li>1932&mdash;1934</li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <div class="displayBlock">
                        <div class="inner">
                        <img src="assets/VIPlibrary.jpg">
                        <div class="displayContentHover">
                            <ul>
                                <li>Alvar Aalto</li>
                                <li>Baker House</li>
                                <li>1932&mdash;1934</li>
                            </ul>
                        </div>
                        </div>
                    </div>



                    <div class="selectedItem">
                        <div class="itemInfo">
                            <div class="itemInfoText">
                                <span>Resource 10294.0002</span><br>
                                Alvar Aalto <br>
                                Paimio Sanitorium <br>
                                1929&mdash;1932 <br>
                            </div>
                        </div>                    

                    </div>
                    
                </div>
            </div>
            <div class="pageRight">
                <div class="pageContent">
                    <div class="label"><div class="labelText"></div></div>
                    <div class="resourceDetail">
                    <figure>
                    <?php
                        if($record->getField('Source_Type')=='Video') {
		echo '<img class="tilethumb" src="img/videoicon.png">';
	} else {
		$projectionFilepath=fmDisplayFieldResult('Filepath_Projection',$record);
		echo '<img class="tilethumb" src="img/thumbnails/'.basename($record->getField('Filepath_Thumbnail')).'">';
		include('includes/clipsection.php');
	}
	?>
                        <figcaption>To download this image copy this <a href="">link</a> <br> into a  new browser window. </figcaption>
                    </figure>
                    
                        <div class="workInformation">
                            <div class="centerText">Work Information</div>                    
                                <table class="workTable">
                                    <tr>
                                        <td>Architect</td>
                                        <td>Alvar Aalto</td>
                                    </tr>
                                    <tr>
                                        <td>Project Name</td>
                                        <td>Paimio Sanitorium</td>
                                    </tr>
                                    <tr>
                                        <td>Dates</td>
                                        <td>1929&mdash;1932</td>
                                    </tr>
                                    <tr>
                                        <td>Location</td>
                                        <td>Paimio, Finland</td>
                                    </tr>
                                </table>

                            </div>
                            <div class="resourceInformation">
                                <div class="centerText">Resource Information</div>
                                <table class="workTable">
                                    <tr>
                                        <td>Description</td>
                                        <td>Stair Detail</td>
                                    </tr>
                                    <tr>
                                        <td>Subject</td>
                                        <td>Institutional</td>
                                    </tr>
                                    <tr>
                                        <td>Serial</td>
                                        <td>10294.0002</td>
                                    </tr>
                                    <tr>
                                        <td>File Location</td>
                                        <td>Frampton</td>
                                    </tr>
                                    <tr>
                                        <td>Image Type</td>
                                        <td>Photo</td>
                                    </tr>
                                    <tr>
                                        <td>Image Subtype</td>
                                        <td>Detail</td>
                                    </tr>
                                    <tr>
                                        <td>Source</td>
                                        <td>Book</td>
                                    </tr>
                                    <tr>
                                        <td>ArtStor Status</td>
                                        <td>Included</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>