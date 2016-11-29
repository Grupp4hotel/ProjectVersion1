
<!DOCTYPE html>
<html lang="en">
<head>
	<title> Glada Geten | Boka</title>
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
				<li class="active"><a href="bokning.php">BOKA</a></li>
				<li><a href="aktiviteter.php">AKTIVITETER</a></li>
				<li><a href="galleri.php">GALLERI</a></li>
				<li><a href="omoss.php">OM GLADA GETEN</a></li>
				<li><a href="kontakt.php">KONTAKT</a></li>
			</ul>
		</nav>
	</header>

	<div class="mainContent">
	<br>
	<h4><span>Boka</span></h4>
		<div class="content">

				<article class="topcontent" style="float:left">

					<h2 style="text-align:left">Information</h2>
					<br>
					<content style="text-align:left; font-size:1.1em; ">
					<h2>Vid bokning av rum får du med följande</h2>
					<p>&#x2714; Härliga sänglinnen i percale, som utlovar en härlig och sval natts sömn.</p>
					<p>&#x2714; Vår alldeles egna handgjorda tvål att använda i badkaret eller duschen!</p>
					<p>&#x2714; Tillgång till gemensam bastu</p>
					<p>&#x2714; Gratis Wifi</p>
					<p>&#x2714; Minibar</p>
					<p>&#x2714; Vattenkokare</p>
					<p>&#x2714; Badlakan</p>
					</content>

				</article>

				<article class="bottomcontent" >


					<h2>Bokningsuppgifter</h2>
					<br>
					<content >
						<form id="f0rm">
							<label></label><br><input class="input" type="text" placeholder="Förnamn"><br>
							<label></label><br><input class="input" type="text" placeholder="Efternamn"><br>
							<label></label><br><input class="input" type="date" placeholder="Incheckning" id="inDatum"><br>
							<label></label><br><input class="input" type="date" placeholder="Utcheckning" id="utDatum"><br>
							<label>Personer</label><br>
							<select class="s3lect" id="numPpl">
							<option class="opti0n" value="blank"></option>
							<option class="opti0n" value="1">1</option>
							<option class="opti0n" value="2">2</option>
							<option class="opti0n" value="3">3</option></select><br>
							<label for="comments">Övriga önskemål</label><br>
							<textarea name="comments" class="textarea"></textarea><br>
							<button class="knapp" type="submit" value="Submit">Hitta lediga rum</button><br>
						</form>
					</content>

				</article>
		</div>

	</div>

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



<script>     //tar datum från första sidan

        överför();

        function överför() {

                var bokningsStart = localStorage.getItem("snabbsök");
                var hämtadData = JSON.parse(bokningsStart);

                //console.log(hämtadData);

            //i bokning
            var inDatum = document.getElementById("inDatum");
            var utDatum = document.getElementById("utDatum");
            var numPpl = document.getElementById("numPpl");

            inDatum.value = hämtadData[0];
            utDatum.value = hämtadData[1];
            numPpl.value = hämtadData[2];

        }
    </script>


</body>
</html>
