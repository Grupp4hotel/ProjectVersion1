
<!DOCTYPE html>
<html lang="en">
<head>
	<title> Glada Geten | Om oss </title>
	<meta charset="utf-8" />
	<link href="https://fonts.googleapis.com/css?family=Days+One|Russo+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Prociono" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="css/load.css">
	<link rel="stylesheet" type="text/css" href="css/button.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
	<script src="js/load.js"></script>

</head>


<body class="body">

<?php

$db = mysqli_connect('localhost', 'root', '', 'gettexter');
mysqli_query($db, "SET NAMES utf8");

if (!$db) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}

?>

<div class="se-pre-con"></div>
	<header class="mainHeader">
	<center><a class="logo" href="index.php">GLADA GETEN</a>
	<h2>BED & BREAKFAST<h2></center>
	<br>
		<nav>
			<ul>
				<li><a href="index.php">HEM</a></li>
				<li><a href="bokning.php">BOKA</a></li>
				<li><a href="aktiviteter.php">AKTIVITETER</a></li>
				<li><a href="galleri.php">GALLERI</a></li>
				<li class="active"><a href="omoss.php">OM GLADA GETEN</a></li>
				<li><a href="kontakt.php">KONTAKT</a></li>
			</ul>
		</nav>
	</header>

	<div class="mainContent">
	<br>
	<h4><span>Om Oss</span></h4>
		<div class="content">
				<article class="topcontent">

					
					<content>
						<img src="img/7.jpg" width="100%">
						<h2><?php
							$query = "SELECT * FROM texter WHERE ID = 13";
    						$result = mysqli_query($db, $query);
    						$ord = mysqli_fetch_assoc($result);
    						echo $ord['Rubrik']; 
							?></h2>
							<p><?php
   							echo $ord['text'];
   							?></p>
					</content>
				</article>

				<article class="bottomcontent">
					<content>
						<img src="img/gösta.jpg" width="100%">
						<h2><?php
							$query = "SELECT * FROM texter WHERE ID = 14";
    						$result = mysqli_query($db, $query);
    						$ord = mysqli_fetch_assoc($result);
    						echo $ord['Rubrik']; 
							?></h2>
							<p><?php
   							echo $ord['text'];
   							?></p>
					</content>
		</div>
	</div>

	<footer class="mainFooter">
		<h4></h4>
		<br>
		<div class="besok">
		<h2>Besök oss på plats</h2>

		<p>Glada getenvägen 40</p>
		<p>111 22 Stockholm</p>
		</div>

		<div class="kontakt">
		<h2>Kontakta oss</h2>

		<p>kontakt@g4hotell.se</p>
		<p>08-111 222 333</p>
		</div>
		<div class="karta">
			<div class="basicBox">
  							<p>Hitta hit</p>
  							<a href="kontakt.php"> <svg width="130" height="65" viewBox="0 0 130 65" xmlns="http://www.w3.org/2000/svg">
    						<rect x='0' y='0' fill='none' width='130' height='65'/>
  							</svg></a>
						</div>
		</div>
	</footer>

</body>
</html>
