
<!DOCTYPE html>
<html lang="en">
<head>
	<title> Glada Geten | Galleri</title>
	<?php include "includes/head.php";?>
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
	}
		.gal img{

			width:45%;
			padding-left:3%;
			padding-bottom:2%;
		}
	</style>
		<div class="gal">
			<a class="fancybox" rel="group" href="img/kitchen.jpg"><img src="img/kitchen.jpg" alt="" /></a>
			<a class="fancybox" rel="group" href="img/beach.jpg"><img src="img/beach.jpg" alt="" /></a>
			<a class="fancybox" rel="group" href="img/goatman.jpg"><img src="img/goatman.jpg" alt="" /></a>
			<a class="fancybox" rel="group" href="img/kitchen.jpg"><img src="img/kitchen.jpg" alt="" /></a>
			<a class="fancybox" rel="group" href="img/beach.jpg"><img src="img/beach.jpg" alt="" /></a>
			<a class="fancybox" rel="group" href="img/goatman.jpg"><img src="img/goatman.jpg" alt="" /></a>

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
