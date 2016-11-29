
<!DOCTYPE html>
<html lang="en">
<head>
	<title> Glada Geten | Galleri</title>
	<?php include "includes/head.php";?>

	<!--Fancybox-->
	<link rel="stylesheet" 		   href="js/fancyBox/source/jquery.fancybox.css" type="text/css" media="screen" />
	<script type="text/javascript" src="js/fancyBox/source/jquery.fancybox.pack.js"></script>
	<!-- Done-->

</head>

<body class="body">
<div class="se-pre-con"></div>
	<header class="mainHeader">
	<center><a class="logo" href="index.php" <h1>GLADA GETEN</h1></a>
	<h2>BED & BREAKFAST<h2></center>
	<br>
		<nav>
			<ul>
				<li><a href="index.php">HEM</a></li>
				<li><a href="bokning.php">BOKA</a></li>
				<li><a href="aktiviteter.php">AKTIVITETER</a></li>
				<li class="active"><a href="galleri.php">GALLERI</a></li>
				<li><a href="omoss.php">OM GLADA GETEN</a></li>
				<li><a href="kontakt.php">KONTAKT</a></li>
			</ul>
		</nav>
	</header>

	<!-- Galleri -->
	<br>
	<h4><span>Galleri</span></h4>
	<br>
	<style>
		.gal{
		padding-top:5%;
		padding-left:3%;

	}
		.gal img{

			width:24%;
		}
			@media only screen and (min-width : 150px) and (max-width : 780px){
				.gal{width:100%; }
				.gal img{width:22%; }
			}


	</style>
		<div class="gal">
			<a class="fancybox" rel="group" href="img/18.jpg"><img src="img/18.jpg" alt="" /></a>
			<a class="fancybox" rel="group" href="img/2.jpg"><img src="img/2.jpg" alt="" /></a>
			<a class="fancybox" rel="group" href="img/3.jpg"><img src="img/3.jpg" alt="" /></a>
			<a class="fancybox" rel="group" href="img/4.jpg"><img src="img/4.jpg" alt="" /></a>
			<a class="fancybox" rel="group" href="img/5.jpg"><img src="img/5.jpg" alt="" /></a>
			<a class="fancybox" rel="group" href="img/6.jpg"><img src="img/6.jpg" alt="" /></a>
			<a class="fancybox" rel="group" href="img/20.jpg"><img src="img/20.jpg" alt="" /></a>
			<a class="fancybox" rel="group" href="img/23.jpg"><img src="img/23.jpg" alt="" /></a>

				<script>
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
</script>
		</div>
		<!-- Galleri slut -->




	<footer class="mainFooter">
		<h4></h4>
		<br>
		<div class="besök">
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