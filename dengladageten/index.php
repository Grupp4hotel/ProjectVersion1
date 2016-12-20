
<!DOCTYPE html>
<html lang="sv">
<head>
	<title> Glada Geten | Hem</title>
	<meta charset="utf-8" />
	<link href="https://fonts.googleapis.com/css?family=Days+One|Russo+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Prociono" rel="stylesheet">

	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="css/slide.css">
	<link rel="stylesheet" type="text/css" href="css/load.css">
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


<div class="se-pre-con"></div>
	<header class="mainHeader">
	<center><a class="logo" href="index.php">GLADA GETEN</a>
	<h2>BED & BREAKFAST<h2></center>
	<br>
			<nav>
				<ul>
					<li class="active"><a href="index.php">HEM</a></li>
					<li><a href="bokning.php">BOKA</a></li>
					<li><a href="aktiviteter.php">AKTIVITETER</a></li>
					<li><a href="galleri.php">GALLERI</a></li>
					<li><a href="omoss.php">OM GLADA GETEN</a></li>
					<li><a href="kontakt.php">KONTAKT</a></li>
				</ul>
			</nav>
	</header>





	<div class="mainContent">
	<br>
	
	<h4><span>Välkommen till den Glada Geten</span></h4>
		<div class="content"><br>
		
<div id="quickSearch">
        <form id="snabbsok" method="post">

            <label class="sokfs" for="fromDate">Ankomst: </label>
            <input type="text" id="fromDate" name="fromDate" placeholder="åååå-mm-dd"/>

            <label class="sokfs" for="untilDate">Avresa: </label>
            <input type="text" id="untilDate" name="untilDate" placeholder="åååå-mm-dd"/>

            <label class="sokfs" for="antPers">Pers x: </label>
            <input type="number" min="1" max="3" id="antPers" name="antPers" />

            <input id="sokKnapp" type="submit" name="sokKnapp" value="Sök" />

<?php


if(isset($_POST['sokKnapp'])){ 

	$start = $_POST['fromDate'];
	$stopp = $_POST['untilDate'];


	$bokadeRum = "SELECT rumsNr FROM bokningstabell WHERE (startdatum <= '$start' AND slutdatum > '$start') OR (startdatum < '$stopp' AND slutdatum >= '$stopp') OR (startdatum < '$stopp' AND slutdatum > '$start')"; 

$result = mysqli_query($db, $bokadeRum);

$tagna = array();

while ($row = mysqli_fetch_assoc($result)) {
	array_push($tagna, $row['rumsNr']);
	//echo "{$row['rumsNr']}";
}

//test för att se om alla finns med
// foreach($tagna as $rum) {
// 	echo "taget: ";
//     echo $rum, '<br />';
// }



$lediga = array(1, 2, 3, 4, 5, 6, 7, 8);

$lediga = array_diff($lediga, $tagna);
//print_r($alla);

// foreach($lediga as $rum) {
// 	echo "ledigt: ";
//     echo $rum; 
//     echo '<br />';
// }


$antalLediga = count($lediga);
//echo $antalLediga;

	
echo "<br />";

if ($antalLediga < 1 || $antalLediga == NULL) {
	echo '<p class="gomtext">Det finns inga lediga rum under den angivna perioden</p>';
}
else {
	echo '<p class="gomtext">Det finns lediga rum, gå vidare till bokningen.</p>'.'<input id="searchLink" type="submit" name="bokaKnapp" onclick="mySubmit();" value="Boka" />';
	}

}

?>
		</form>

		
</div>
            

        

    </div>

<script>
        $.datepicker.setDefaults({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'dd-mm-yy'
        });
        $('#fromDate').datepicker({ dateFormat: 'yy-mm-dd',
            minDate: '+0',
            onSelect: function (dateStr) {
                var min = $(this).datepicker('getDate') || new Date(); // Selected date or today if none
                var max = new Date(min.getTime());
                max.setMonth(max.getMonth() + 36); // Add 3 years

                var min2 = new Date(min.getTime());
                min2.setDate(min2.getDate() + 1);

                $('#untilDate').datepicker('option', { minDate: min2, maxDate: max });
            }
        });
        $('#untilDate').datepicker({ dateFormat: 'yy-mm-dd',
            minDate: '+0',
            maxDate: '+1m',
            onSelect: function (dateStr) {
                var max = $(this).datepicker('getDate'); // Selected date or null if none
                $('#fromDate').datepicker('option', { maxDate: max });
            }
        });

         //-----------------------------Överför till bokningssidan---------------

        document.getElementById("sokKnapp").addEventListener("click", tillBokning);

        function tillBokning() {

            //i snabbsök
            var datumFran = document.getElementById("fromDate").value;
            var datumTill = document.getElementById("untilDate").value;
            var antalPers = document.getElementById("antPers").value;

            var overforData = [];

            overforData.push(datumFran);
            overforData.push(datumTill);
            overforData.push(antalPers);



            var bokningsStart = JSON.stringify(overforData);
            localStorage.setItem("snabbsok", bokningsStart);     
        }

        function mySubmit() {
            window.open("bokning.php");
        }
    </script>




       <style>
        input{width:20%; padding:1%;}
       
        </style>
           
			 <!--<input id="fromDate" name="date" type="date" placeholder="åååå-mm-dd">
            
			<input id="untilDate" name="date" type="date" placeholder="åååå-mm-dd">
            
            <input type="number" min="1" max="3" id="antPers" placeholder="antal" style="padding:1.15%"/>

            <button id="searchLink" type="button"><a id="tillBokning" target="_blank" href="bokning.html">Boka</a></button>
            
			<script>
        	$('input[type="date"], input[type="datetime"], input[type="datetime-local"], input[type="month"], input[type="time"], input[type="week"]').each(function() {
    var el = this, type = $(el).attr('type');
    if ($(el).val() == '') $(el).attr('type', 'text');
    $(el).focus(function() {
        $(el).attr('type', type);
        el.click();
    });
    $(el).blur(function() {
        if ($(el).val() == '') $(el).attr('type', 'text');
    });
});
        </script>
        </form>-->
        
    </div>
				<article class="topcontent">


					<content>
						<img src="img/22.jpg" width="100%" />
						<h2><?php
							$query = "SELECT * FROM texter WHERE ID = 7";
    						$result = mysqli_query($db, $query);
    						$ord = mysqli_fetch_assoc($result);
    						echo $ord['Rubrik']; 
							?></h2>
							<p><?php
   							echo $ord['text'];
   							?></p>

						<div class="basicBox">
  							<p>Läs mer</p>
  							<a href="omoss.php"> <svg width="130" height="65" viewBox="0 0 130 65" xmlns="http://www.w3.org/2000/svg">
    						<rect x='0' y='0' fill='none' width='130' height='65'/>
  							</svg></a>
						</div>


					</content>

				</article>

				<article class="bottomcontent">

					<content>
						<img src="img/5.jpg" width="100%" />
						<h2><?php
							$query = "SELECT * FROM texter WHERE ID = 8";
    						$result = mysqli_query($db, $query);
    						$ord = mysqli_fetch_assoc($result);
    						echo $ord['Rubrik']; 
							?></h2>
							<p><?php
   							echo $ord['text'];
   							?></p>
						<div class="basicBox">
  							<p>Läs mer</p>
  							<a href="aktiviteter.html"> <svg width="130" height="65" viewBox="0 0 130 65" xmlns="http://www.w3.org/2000/svg">
    						<rect x='0' y='0' fill='none' width='130' height='65'/>
  							</svg></a>
						</div>

					</content>

				</article>
				
				<!--  <article class="midcontent">
					<content>
					<img src="img/2.jpg" width="100%"/>
					</content>
				</article>

				<article class="midcontent2">
					<content>
					<h2>Kvalité på riktigt</h2>
					<p>&#9733;&#9733;&#9733;&#9733;&#9733; Sedan 2005</p>
					<br>
					<div class="basicBox">
  							<p>Läs mer</p>
  							<a href="omoss.html"> <svg width="130" height="65" viewBox="0 0 130 65" xmlns="http://www.w3.org/2000/svg">
    						<rect x='0' y='0' fill='none' width='130' height='65'/>
  							</svg></a>
						</div>
					</content>
				</article> -->

				<article class="erbjuder">
					<content>
						<h3>Vi erbjuder </h3>
					</content>
				</article>
				<article class="side1">
					<content>
						<img src="img/24.jpg" width="100%" />
						<h2><?php
							$query = "SELECT * FROM texter WHERE ID = 9";
    						$result = mysqli_query($db, $query);
    						$ord = mysqli_fetch_assoc($result);
    						echo $ord['Rubrik']; 
							?></h2>

						<div class="basicBox">
  							<p>Läs mer</p>
  							<a href="aktiviteter.html"> <svg width="130" height="65" viewBox="0 0 130 65" xmlns="http://www.w3.org/2000/svg">
    						<rect x='0' y='0' fill='none' width='130' height='65'/>
  							</svg></a>
						</div>

					</content>
				</article>
				<article class="side2">
					<content>
						<img src="img/12.jpg" width="100%" />
						<h2><?php
							$query = "SELECT * FROM texter WHERE ID = 10";
    						$result = mysqli_query($db, $query);
    						$ord = mysqli_fetch_assoc($result);
    						echo $ord['Rubrik']; 
							?></h2>

						<div class="basicBox">
  							<p>Läs mer</p>
  							<a href="aktiviteter.html"> <svg width="130" height="65" viewBox="0 0 130 65" xmlns="http://www.w3.org/2000/svg">
    						<rect x='0' y='0' fill='none' width='130' height='65'/>
  							</svg></a>
						</div>
					</content>
				</article>
				<article class="side3">
					<content>
						<img src="img/28.jpg" width="100%" />
						<h2><?php
							$query = "SELECT * FROM texter WHERE ID = 11";
    						$result = mysqli_query($db, $query);
    						$ord = mysqli_fetch_assoc($result);
    						echo $ord['Rubrik']; 
							?></h2>
						<div class="basicBox">
  							<p>Läs mer</p>
  							<a href="aktiviteter.html"> <svg width="130" height="65" viewBox="0 0 130 65" xmlns="http://www.w3.org/2000/svg">
    						<rect x='0' y='0' fill='none' width='130' height='65'/>
  							</svg></a>
						</div>
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





<script>

//===========Snabbsök=============

//-----------------Få datumet från första kalendern att synas i andra-------------------
var first = true;

document.getElementById("fromDate").addEventListener("change", overfor);

function overfor() {
    var datum1 = document.getElementById("fromDate").value;
    var datum2 = document.getElementById("untilDate");  
    
    if (first) 
    {
        datum2.value = datum1;
        first = false;
    }  
}

</script>

</body>
</html>
