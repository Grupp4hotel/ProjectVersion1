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

<p>
    <?php
        $query = "SELECT * FROM bokningstabell";
        $result = mysqli_query($db, $query);




        while($row = mysql_fetch_assoc($result))
{
   echo $row['name']." ";
   echo $row['email']." ";
}


    ?>
</p>

<h2><?php
                            $query = "SELECT * FROM texter WHERE ID = 1";
                            $result = mysqli_query($db, $query);
                            $ord = mysqli_fetch_assoc($result);
                            echo $ord['Rubrik']; 
                            ?></h2>
                            <p><?php
                            echo $ord['text'];
                            ?></p>



</body>
</html>