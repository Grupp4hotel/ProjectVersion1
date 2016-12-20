<?php

session_start();
include('includes/config.php');
include('includes/db.php');

if(isset($_POST['register'])){
$_SESSION['name'] = $_POST['name'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['password'] = $_POST['password'];
$_SESSION['confirm_password'] = $_POST['confirm_password'];

function isUnique($email) {
$query = "select * from users where email= '$email'";
global $db;

$result = $db->query($query);

if($result->num_rows > 0){
return false;
}

else return true;

}


if(strlen($_POST['name']) < 3) {
header("Location:register.php?err=".urlencode("The name must be atleast 5 characters"));
exit();
}

else if(strlen($_POST['password']) < 5 ){
  header("Location:register.php?err=".urlencode("The password should be atleast 5 characters"));
  exit();

}

else if ($_POST['password'] != $_POST['confirm_password']) {

  header("Location:register.php?err=".urlencode("The password doesnt match"));
  exit();

}


else if(strlen($_POST['confirm_password']) < 5 ){

  header("Location:register.php?err=".urlencode("The password doesnt match"));
  exit();

}

else if(!isUnique($_POST['email'])){
  header("Location:register.php?err=".urlencode("This email already exists .. Please use another one"));
  exit();
}


else {
$name = mysqli_real_escape_string($db, $_POST['name']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$password = mysqli_real_escape_string($db, $_POST['password']);
$token = bin2hex(openssl_random_pseudo_bytes(32));

$query = "insert into users (name,email,password,token) values ('$name','$email','$password','$token')";

$db->query($query);


$message= "Hi $name! Account created , here is the activation link : http://localhost/registration/activate.php?token=$token";

mail($email , 'Activate account' , $message , 'from: prasanth.joseph@student.kyh.se');
header("Location: index.php$success=" .urlencode("Activation Email sent!"));
exit;

}


}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Registration Page for Glada Geten</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">


  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Glada Geten</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Login</a></li>
            <li class="active"><a href="Register.php">Register</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <form action="register.php" method="post" style="margin-top:35px;">
        <h2>Register Here</h2>
<?php if (isset($_GET['err'])) {?>

        <div class="alert alert-danger">
          <?php echo $_GET['err'];?>
        </div>
<?php } ?>

        <hr />
        <div class="form-group">
          <label>Name</label>
          <input type="text" name="name" class="form-control" placeholder="Name" value="<?php echo @$_SESSION['name']; ?>" required>
        </div>


        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo @$_SESSION['email']; ?>" required>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo @$_SESSION['password']; ?>" required>
        </div>

        <div class="form-group">
          <label>Confirm Password</label>
          <input type="password" name="confirm_password" class="form-control" placeholder="Password" value="<?php echo @$_SESSION['confirm_password']; ?>" required>
        </div>



        <button type="submit" name="register" class="btn btn-default">Register</button>
      </form>



    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="js/bootstrap.js"></script>

  </body>
</html>
