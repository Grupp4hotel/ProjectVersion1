
<!DOCTYPE html>
<html lang="en">
<head>
	<title> Glada Geten | Boka</title>
	<meta charset="utf-8" />
	<link href="https://fonts.googleapis.com/css?family=Days+One|Russo+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Prociono" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">


	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="css/load.css">
	<link rel="stylesheet" type="text/css" href="css/form.css">
	<link rel="stylesheet" type="text/css" href="css/button.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
	<script src="js/load.js"></script>



	<!--för Datepicker-->
    <link href="https://code.jquery.com/ui/1.11.4/themes/le-frog/jquery-ui.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

</head>


<body class="body">

<?php

$db = mysqli_connect('gettexter-219314.mysql.binero.se', '219314_sy54698', 'gl@dag3ten', '219314-gettexter');
mysqli_query($db, "SET NAMES utf8");

if (!$db) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}

?>

<script>     //tar datum från första sidan

        window.onload = loadSavedDates;

        function loadSavedDates() {

                var bokningsStart = localStorage.getItem("snabbsok");
                var hämtadData = JSON.parse(bokningsStart);

                console.log(hämtadData);

            //i bokning
            var inDatum = document.getElementById("inDatum");
            var utDatum = document.getElementById("utDatum");
            var numPpl = document.getElementById("numPpl");

            inDatum.value = hämtadData[0];
            utDatum.value = hämtadData[1];
            numPpl.value = hämtadData[2];

        }

    </script>


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
						<form id="f0rm" method="post">
							<label></label><br><input class="input" type="text" name="fornamn" placeholder="Förnamn"><br>
							<label></label><br><input class="input" type="text" name="efternamn" placeholder="Efternamn"><br>
							<label></label><br><input class="input" type="text" name="inDatum" placeholder="Incheckning" id="inDatum"><br>
							<label></label><br><input class="input" type="text" name="utDatum" placeholder="Utcheckning" id="utDatum"><br>
							<label>Personer</label><br>
							<select class="s3lect" id="numPpl" name="numPpl">
								<option class="opti0n" value="blank"></option>
								<option class="opti0n" value="1">1</option>
								<option class="opti0n" value="2">2</option>
								<option class="opti0n" value="3">3</option></select><br>
							<label for="comments">Övriga önskemål</label><br>
							<textarea name="comments" class="textarea"></textarea><br>
							<input class="knapp" type="submit" name="bokningsKnapp" value="Boka" /><br>


<?php


if(isset($_POST['bokningsKnapp'])){ 

	$start = $_POST['inDatum'];
	$stopp = $_POST['utDatum'];


	$bokadeRum = "SELECT rumsNr FROM bokningstabell WHERE (startdatum <= '$start' AND slutdatum > '$start') OR (startdatum < '$stopp' AND slutdatum >= '$stopp') OR (startdatum < '$stopp' AND slutdatum > '$start')"; 

$result = mysqli_query($db, $bokadeRum);

$tagna = array();

while ($row = mysqli_fetch_assoc($result)) {
	array_push($tagna, $row['rumsNr']);
	//echo "{$row['rumsNr']}";
//}
}

//test för att se om alla finns med
// foreach($tagna as $rum) {
// 	echo "taget: ";
//     echo $rum, '<br />';
// }

	$lediga = array(1, 2, 3, 4, 5, 6, 7, 8);

	$lediga = array_values(array_diff($lediga, $tagna));
//print_r($alla);

// foreach($lediga as $rum) {
// 	echo "ledigt: ";
//     echo $rum; 
//     echo '<br />';
// }

	$antalLediga = count($lediga);
	//echo $antalLediga;

	//
	if ($antalLediga < 1 || $antalLediga == NULL) {
		echo "<script type='text/javascript'>alert('Det finns inga lediga rum under den angivna perioden. Försök igen!');</script>";
		//echo '<p>Det finns inga lediga rum under den angivna perioden. Försök igen!"<p>';
		exit();
	}
	else {
		//ta ledigt rum
		$ledigtRum = $lediga[0];

        //boka
		$fornamn = $_POST['fornamn'];
		$efternamn = $_POST['efternamn'];
		$rumsNr = $lediga[0];
		$antPers = $_POST['numPpl'];
		$onskemal = $_POST['comments'];


	$q = "INSERT INTO bokningstabell (startdatum, slutdatum, rumsNr, fornamn, efternamn, antalPers, onskemal) VALUES ('$start', '$stopp', '$rumsNr', '$fornamn', '$efternamn', '$antPers', '$onskemal')";

	mysqli_query($db, $q);

	echo "<script type='text/javascript'>alert('Du har nu bokat rum på Den Glada Geten! Välkommen!');</script>";
	//echo '<p>Du har nu bokat rum på Den Glada Geten! Välkommen!<p>';
		}
}

?>


</form>

<script>
 //datepicker: begränsa datum
        $.datepicker.setDefaults({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'dd-mm-yy'
        });
        $('#inDatum').datepicker({ dateFormat: 'yy-mm-dd',
            minDate: '+0',
            onSelect: function (dateStr) {
                var min = $(this).datepicker('getDate') || new Date(); // Selected date or today if none
                var max = new Date(min.getTime());
                max.setMonth(max.getMonth() + 36); // Add 3 years

                var min2 = new Date(min.getTime());
                min2.setDate(min2.getDate() + 1);

                $('#utDatum').datepicker('option', { minDate: min2, maxDate: max });
            }
        });
        $('#utDatum').datepicker({ dateFormat: 'yy-mm-dd',
            minDate: '+0',
            maxDate: '+1m',
            onSelect: function (dateStr) {
                var max = $(this).datepicker('getDate'); // Selected date or null if none
                $('#inDatum').datepicker('option', { maxDate: max });
            }
        });

        //Få datumet från första kalendern att synas i andra
var first = true;

document.getElementById("inDatum").addEventListener("change", overfor);

function overfor() {
    var datum1 = document.getElementById("inDatum").value;
    var datum2 = document.getElementById("utDatum");  
    
    if (first) 
    {
        datum2.value = datum1;
        first = false;
    }  
}
</script>







					</content>

				</article>
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
