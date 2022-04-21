<?php 
	include("pls-dont-access.php");
?>
<html>
    <head>
	<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="static/style.css">
	<link rel="icon" type="image/x-icon" href="favicon.jpg">
    </head>
    <body>
	<div class="menu">
	    <a href="index.php?lang=en">English</a>
	    <a href="index.php?lang=vi" >Vietnamese</a>
	</div>
<?php
if(!isset($_GET['lang']) || (strpos($_GET['lang'],"php")!== false) || ($_GET['lang']=="index.php")) {
   echo" <img src='./img1.webp'><p><b>Please don't hack into this vulnerable site :)</br></p>";
}
else {
	echo "<p>";
	include($_GET['lang']. ".php");
	echo "</p>";
}
?>
</body>
</html>