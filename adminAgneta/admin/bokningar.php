<?php session_start(); ?>
<!doctype html>
<html>

<head>

 <meta charset="utf-8" />
 <title>Textadmin</title>

<style>
 	
 	hr {
 		width 90%;
 	}

 	

</style>


</head>

<body>
<a href="bildadmin.php">Gå till Bildadmin</a>
<a href="textadmin.php">Gå till Textadmin</a>

<br />
<br />

<?php

 if( isset($_POST['password']) ){ 
            if($_POST['password'] == "tjohoo"){ 
                $_SESSION['inloggad'] = TRUE; 
            }
        }

 if( isset($_POST['logout']) ){ 
            $_SESSION['inloggad'] = FALSE; 
        }


 if(!isset($_SESSION['inloggad']) || $_SESSION['inloggad'] != TRUE){   //om inte inloggad slutar resten av sidan
 echo "Du är inte inloggad.";

 echo "<br />Åter till inloggning -> ";
 echo "<a href='index.html'>Logga in</a>";
 exit();
}


$db = mysqli_connect('localhost', 'root', '', 'gettexter');
mysqli_query($db, "SET NAMES utf8");

if (!$db) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}
//var_dump($db);

echo "<form method='post'>
        <input type='submit' value='Logga ut' name='logout'>
      </form><br />";


?>


    <?php
        $query = "SELECT * FROM bokningstabell ORDER BY startdatum DESC";
        $result = mysqli_query($db, $query);

        
   echo '<table>';


//while ($row = mysqli_fetch_array($result)) {
echo '<tr><th>ID</th><th>Startdatum</th><th>Slutdatum</th><th>RumsNr.</th><th>Förnamn</th><th>Efternamn</th><th>Antal</th><th>Önskemål</th></tr>';
    
    while($row = mysqli_fetch_assoc($result)){
        echo '<tr>';
        echo '<td>'.$row['id'].'</td>';
        echo '<td>'.$row['startdatum'].'</td>';
        echo '<td>'.'&nbsp&nbsp&nbsp'.$row['slutdatum'].'</td>';
        echo '<td>'.'&nbsp&nbsp&nbsp'.$row['rumsNr'].'</td>';
        echo '<td>'.$row['fornamn'].'</td>';
        echo '<td>'.'&nbsp&nbsp&nbsp'.$row['efternamn'].'</td>';
        echo '<td>'.'&nbsp&nbsp&nbsp'.$row['antalPers'].'</td>';
        echo '<td>'.$row['onskemal'].'</td>';
        echo '</tr>';
        //echo '<br />';
 }

 echo '</table>';


    ?>


                          



</body>
</html>