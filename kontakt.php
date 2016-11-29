<!DOCTYPE html>
<html lang="en">

<head>
    <title> Glada Geten | Kontakt</title>
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
                <li><a href="galleri.php">GALLERI</a></li>
                <li><a href="omoss.php">OM GLADA GETEN</a></li>
                <li class="active"><a href="kontakt.php">KONTAKT</a></li>
            </ul>
        </nav>
    </header>

    <div class="mainContent">
        <br>
        <h4><span>Kontakta oss</span></h4>

        <div class="content">
            <article class="topcontent">



                <content>
                    <h2>Kontakta oss</h2>
                    <input class="input" type="text" placeholder="Förnamn">
                    <input class="input" type="text" placeholder="Efternamn">
                    <input class="input" type="text" placeholder="Email">
                    <textarea name="comments2" class="textarea2" placeholder="Ditt meddelande"></textarea>
                     <button class="knapp2" type="submit" value="Submit">Skicka</button>

                </content>
                <style>
                input{width:50%;padding:2%;margin-bottom:3%;font-size:1.5em;}
                textarea{width:50%;padding:2%;font-size:1.5em;}
                .knapp2{width:50%;padding:3%; font-size:1.5em;}

                </style>
            </article>

            <article class="bottomcontent">

                <content>
                    <h2>Hitta oss </h2>
                   <iframe src="http://kartor.eniro.se/m/GlK2G?embed=true&center=65.68769190893039,21.851806640625&zoom=10&layer=map" width="100%" height="300" frameborder="0" style="border:0"></iframe>
                </content>
            </article>
        </div>







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
                <a href="kontakt.php">
                    <svg width="130" height="65" viewBox="0 0 130 65" xmlns="http://www.w3.org/2000/svg">
                        <rect x='0' y='0' fill='none' width='130' height='65' />
                    </svg>
                </a>
            </div>
        </div>
    </footer>

</body>

</html>
