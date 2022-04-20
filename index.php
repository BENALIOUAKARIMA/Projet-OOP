<?php
include("conect.php");
// $con = new connection();
// echo $con->connect();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SIGN IN</title>
  <!-- cdn alert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <!-- CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- animate css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <!-- ecriture -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@700&family=Pacifico&family=Raleway:wght@300&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>

<body style="text-align: center; background: linear-gradient(to right,#8e9eab,#eef2f3);">
  <?php
  include('nav.php') ?>
  <h1 style="margin-top: 100px; color: #2c3e50; font-family: 'Pacifico', cursive;" class=" animate__animated animate__heartBeat  animate__infinite text-center">Welcome,To the Contact Liste</h1>
  <div class="btn" style="margin-top: 50px;">
    <h3 style=" font-family: 'Pacifico', cursive;">Choose <a href="signup.php" style="color: #4CA1AF; font-family: 'Pacifico', cursive;">Sign Up</a> Or <a href="login.php" style="color: #4CA1AF; font-family: 'Pacifico', cursive;">LogIn</a></h3>
  </div>
</body>

</html>