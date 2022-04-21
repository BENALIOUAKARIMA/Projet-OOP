<?php
  require_once 'operation.php';

  $clt = new Clt();

  $id = $_GET["id"];
  $get = $clt->getData($id);

  if (isset($_POST["update"])) {

    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $adresse = $_POST["adresse"];

    if ($clt->updateData($name,$phone,$email,$adresse,$id)) {
        echo '<div class="alert alert-success"> Your Record Has Been Saved :) </div>';
        header("location: contactliste.php");
        exit();
    }else {
        echo '<div class="alert alert-danger"> Failed </div>';
    }
  }
?>







<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
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

<body>
<nav class="navbar navbar-light" style=" background-color:#2c3e50;">
    <div class="container-fluid">
      <a class="navbar-brand" style="color: white;">Contact Liste</a>
      <form class="d-flex">
        <a href="./Contactliste.php" style="text-decoration: none; color:gray; margin-right:50px;">Contact List</a>
        <a href="./login.php" style="text-decoration: none; color:gray; ">Logout</a>
      </form>
    </div>
  </nav>
          <form class="w-75 mx-auto" style="border-radius: 10px; box-shadow: 0px 0px 5px black; background-color:white;" method="POST">
            <h4 class="mt-4 ms-5 fw-bold pt-3 mb-3" style="color:  #2c3e50; font-family: 'Pacifico', cursive;">Update</h4>
            <div>
              <label for="name" class="form-label ms-5 fw-bold">Name</label>
              <input type="name" name="name" class="form-control  w-75 ms-5" value="<?php echo $get['name'] ?>" required>
            </div>
            <div class="mb-3 mt-3">
              <label for="phone" class="form-label ms-5 fw-bold">Phone</label>
              <input type="number" name="phone" class="form-control w-75 ms-5" value="<?php echo $get['phone'] ?>" required>
            </div>
            <div>
              <label for="email" class="form-label ms-5 fw-bold">email</label>
              <input type="email" name="email" class="form-control w-75 ms-5" value="<?php echo $get['email'] ?>" required>
            </div>
            <div>
              <label for="adresse" class="form-label ms-5 fw-bold">Adresse</label>
              <input type="text" name="adresse" class="form-control w-75 ms-5"  value="<?php echo $get['adresse'] ?>" required>
            </div>
            <button type="submit" name="update" class="btn btn-primary mt-4 ms-5 mb-3 fw-bold w-25" style="background-color: #2c3e50;">Save</button>
          </form>
        </div>


  
</body>

</html>