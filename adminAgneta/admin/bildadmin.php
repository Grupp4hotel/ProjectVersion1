<?php session_start(); ?>


<!doctype html>
<html>

<head>

 <meta charset="utf-8" />
 <title>Bildadmin</title>

 	
 <style>
 	img {
 		width:22%;
 	}		

</style>


</head>

<body>

<a href="textadmin.php">Gå till Textadmin</a>
<a href="bokningar.php">Gå till inkomna bokningar</a>

<br />
<br />



<?php

$db = mysqli_connect('localhost', 'root', '', 'gettexter');
mysqli_query($db, "SET NAMES utf8");


//lägg till
if(isset($_POST['update'])){ 
	$foto = $_FILES['nyBild']['name'];
	move_uploaded_file($_FILES['nyBild']['tmp_name'], 'C:\xampp\htdocs\ProjectVersion1\adminAgneta\galleri\\' . $foto);
	
	$q = "INSERT INTO bilder (vag) values ('galleri/$foto')";	
	$result = mysqli_query($db, $q);
    }

//ta bort
if (isset($_POST['tagbort'])){
    $sudda = $_POST['bort'];
    $q2 = "DELETE FROM bilder WHERE id = $sudda";
    mysqli_query($db, $q2);
}


//inloggning och session
if( isset($_POST['password']) ){ 
            if($_POST['password'] == "tjohoo"){ 
                $_SESSION['inloggad'] = TRUE; 
            }
        }

 if( isset($_POST['logout']) ){ 
            $_SESSION['inloggad'] = FALSE; 
        }






//om inte inloggad
 if(!isset($_SESSION['inloggad']) || $_SESSION['inloggad'] != TRUE){   //om inte inloggad slutar resten av sidan
 echo "Du är inte inloggad";

 echo "<br />Åter till inloggning -> ";
 echo "<a href='index.html'>Logga in</a>";
 exit();
}


if (!$db) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}


echo "<form method='post'>
        <input type='submit' value='Logga ut' name='logout'>
      </form><br />";


?>


<h2>Dessa bilder finns i galleriet:</h2>



<?php



		$query = "SELECT * FROM bilder";
    	$result = mysqli_query($db, $query);

    while ($bild = mysqli_fetch_assoc($result) ) {
    	
        
        echo $bild['id'];
        echo '<br />';
        echo '<img src="http://127.0.0.1/ProjectVersion1/adminAgneta/'.$bild['vag'].'"/>';
        echo '<br />';
	}

?>

<br />
<p>Lägg till en bild!</p>

<form method='post' enctype="multipart/form-data">
    <input type='file' name='nyBild'>
    <input type='submit' value='Skicka' name='update'>
</form>

<br />

<p>Tag bort en bild! Skriv in den siffra som står ovanför bilden (bildens id):</p>

<form method='post'>
    <input type='text' name='bort'>
    <input type='submit' value='Skicka' name='tagbort'>
</form>

<br />
<br />

</body>
</html>