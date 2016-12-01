<!DOCTYPE html>
<html lang="sv">
<head>
	<title> Glada Geten | Hem</title>
	<?php include "includes/head.php";?>
</head>

<body class="body">
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
        <form id="snabbsök" onsubmit="mySubmit()">

            <label class="sökfs" for="fromDate">Ankomst: </label>
            <input type="text" id="fromDate" placeholder="åååå-mm-dd"/>

            <label class="sökfs" for="untilDate">Avresa: </label>
            <input type="text" id="untilDate" placeholder="åååå-mm-dd"/>

            <label class="sökfs" for="antPers">Pers x: </label>
            <input type="number" min="1" max="3" id="antPers" />

            <button id="searchLink" type="submit">Hitta lediga rum</button>

        </form>

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
                $('#untilDate').datepicker('option', { minDate: min, maxDate: max });
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

        document.getElementById("searchLink").addEventListener("click", tillBokning);

        function tillBokning() {

            //i snabbsök
            var datumFrån = document.getElementById("fromDate").value;
            var datumTill = document.getElementById("untilDate").value;
            var antalPers = document.getElementById("antPers").value;

            var överförData = [];

            överförData.push(datumFrån);
            överförData.push(datumTill);
            överförData.push(antalPers);


            var bokningsStart = JSON.stringify(överförData);
            localStorage.setItem("snabbsök", bokningsStart);
        }

        function mySubmit() {
            window.open("bokning.html");
        }
    </script>




       <style>
        input{width:20%; padding:1%;}

        </style>

			 <!--<input id="fromDate" name="date" type="date" placeholder="åååå-mm-dd">

			<input id="untilDate" name="date" type="date" placeholder="åååå-mm-dd">

            <input type="number" min="1" max="3" id="antPers" placeholder="antal" style="padding:1.15%"/>

            <button id="searchLink" type="button"><a id="tillBokning" target="_blank" href="bokning.php">Boka</a></button>

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
						<h2>Välkommen!</h2>
						<p>Den glada geten ligger beläget i det natursköna området Tjärnholmen i Norrbotten. Utöver smakfullt inredda rum finns även aktiveter att boka in under din vistelse. Gården är en gammal släktgård, som 2005 gjordes om till b&b och har sedan dess lockat besökare från hela Sverige och även världen.</p>

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
						<h2>Aktiviter på den Glada Geten</h2>
						<p>På den glada geten har vi två ”husgetter”, Gösta och Selma, som håller till i en liten hage alldeles bredvid gårdshuset. Kring gården finns även trevliga vandringsslingor och vågar min sig på ett dopp i älven kan man boka bastu på den glada geten efter det svalkande doppet.</p>
						<div class="basicBox">
  							<p>Läs mer</p>
  							<a href="aktiviteter.php"> <svg width="130" height="65" viewBox="0 0 130 65" xmlns="http://www.w3.org/2000/svg">
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
  							<a href="omoss.php"> <svg width="130" height="65" viewBox="0 0 130 65" xmlns="http://www.w3.org/2000/svg">
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
						<h2>Passa på att unna dig en avkopplande spabehandling.</h2>

						<div class="basicBox">
  							<p>Läs mer</p>
  							<a href="aktiviteter.php"> <svg width="130" height="65" viewBox="0 0 130 65" xmlns="http://www.w3.org/2000/svg">
    						<rect x='0' y='0' fill='none' width='130' height='65'/>
  							</svg></a>
						</div>

					</content>
				</article>
				<article class="side2">
					<content>
						<img src="img/12.jpg" width="100%" />
						<h2>Julbord – festa loss på den glada getens julbord under hela december månad!</h2>

						<div class="basicBox">
  							<p>Läs mer</p>
  							<a href="aktiviteter.php"> <svg width="130" height="65" viewBox="0 0 130 65" xmlns="http://www.w3.org/2000/svg">
    						<rect x='0' y='0' fill='none' width='130' height='65'/>
  							</svg></a>
						</div>
					</content>
				</article>
				<article class="side3">
					<content>
						<img src="img/28.jpg" width="100%" />
						<h2>Guidad Skotersafari - ta en lång tur i den underbara naturen.</h2>
						<div class="basicBox">
  							<p>Läs mer</p>
  							<a href="aktiviteter.php"> <svg width="130" height="65" viewBox="0 0 130 65" xmlns="http://www.w3.org/2000/svg">
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





<script>

//===========Snabbsök=============

//-----------------Få datumet från första kalendern att synas i andra-------------------
var first = true;

document.getElementById("fromDate").addEventListener("change", överför);

function överför() {
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
