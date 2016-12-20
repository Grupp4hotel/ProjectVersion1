<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> Glada Geten | Galleri</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
	<script src="js/load.js"></script>

	<!--Fancybox-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" 		   href="js/fancyBox/source/jquery.fancybox.css" type="text/css" media="screen" />
	<script type="text/javascript" src="js/fancyBox/source/jquery.fancybox.pack.js"></script>
	<!-- Done-->
	<link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Prociono" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">


	<link href="https://fonts.googleapis.com/css?family=Days+One|Russo+One" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="css/load.css">
	<link rel="stylesheet" type="text/css" href="css/button.css">
	
</head>

<body class="body">


<?php
$db = mysqli_connect('gettexter-219314.mysql.binero.se', '219314_sy54698', 'gl@dag3ten', '219314-gettexter');

if (!$db) {
    die('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
}

if(isset($_POST['update'])){ 
	$foto = $_FILES['nyBild']['name'];
	move_uploaded_file($_FILES['nyBild']['tmp_name'], 'agnetaaxelsson.se/dengladageten/galleri/' . $foto);
	
	$q = "INSERT INTO bilder (vag) values ('galleri/$foto')";	
	$result = mysqli_query($db, $q);
    }

?>


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


		<?php



		$query = "SELECT * FROM bilder";
    	$result = mysqli_query($db, $query);

        while ($bild = mysqli_fetch_assoc($result) ) {
    	      
        $bilden = $bild['vag'];


        //Här ligger bilderna
        echo '<a class="fancybox" rel="group" href="'.$bilden.'"><img src="http://127.0.0.1/ProjectVersion1/adminAgneta/'.$bilden.'" alt="" /></a>';

	}

?>
			

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