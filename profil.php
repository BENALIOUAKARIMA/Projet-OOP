<?php
  require_once 'operation.php';

  $clt = new Clt();

  $id = $_SESSION["id"];

  if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $adresse = $_POST["adresse"];

    if ($clt->Insert($name,$phone,$email,$adresse,$id)) {
      echo "<script>
      Swal.fire(
          'Success!',
          'You clicked the button!',
          'success'
      );              
      </script>";
    }else {
      echo "<script>
      Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'User already exist!',
      }) ;   
      </script>";
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

  <!-- Modal -->
  <div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="w-75 mx-auto" style="border-radius: 10px; box-shadow: 0px 0px 5px black; background-color:white;" method="POST">
            <h4 class="mt-4 ms-5 fw-bold pt-3 mb-3" style="color:  #2c3e50; font-family: 'Pacifico', cursive;">ADD NEW CONTACT</h4>
            <div>
              <label for="name" class="form-label ms-5 fw-bold">Name</label>
              <input type="name" name="name" class="form-control  w-75 ms-5" required>
            </div>
            <div class="mb-3 mt-3">
              <label for="phone" class="form-label ms-5 fw-bold">Phone</label>
              <input type="number" name="phone" class="form-control w-75 ms-5" required>
            </div>
            <div>
              <label for="email" class="form-label ms-5 fw-bold">Email</label>
              <input type="email" name="email" class="form-control w-75 ms-5" required>
            </div>
            <div>
              <label for="adresse" class="form-label ms-5 fw-bold">Adresse</label>
              <input type="text" name="adresse" class="form-control w-75 ms-5" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary mt-4 ms-5 mb-3 fw-bold w-25" style="background-color: #2c3e50;">Save</button>
          </form>
        </div>

      </div>
    </div>
  </div>
  <nav class="navbar navbar-light" style=" background-color:#2c3e50;">
    <div class="container-fluid">
      <a class="navbar-brand" style="color: white;">Contact Liste</a>
      <form class="d-flex">
        <a href="./Contactliste.php" style="text-decoration: none; color:white; margin-right:50px;">Contact List</a>
        <a href="./login.php" style="text-decoration: none; color:white; ">Logout</a>
      </form>
    </div>
  </nav>
  <h1 class="animate__animated animate__heartBeat text-center" style="color: #2c3e50;font-family: 'Pacifico', cursive; margin-top:70px;">Your Profile</h1>
  <div class="card text-center mx-auto mt-5" style="width: 30%;">
    <img src="img/lp.png" class="card-img-top" alt="photo">
    <div class="card-body">
      <h5 class="card-title" style="color: #2c3e50;font-family: 'Pacifico', cursive;">Welcome !!</h5>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item fw-bold" style="color: #636FA4;">Username : <?php echo $_SESSION['name']; ?></li>
      <li class="list-group-item fw-bold" style="color: #636FA4;">Sign Up Date : <?php //echo $row['date']; ?></li>
      <li class="list-group-item fw-bold" style="color: #636FA4;">Last Login : </li>
    </ul>
    <div class="card-body">
      <button type="button" class="btn" style="background:#2c3e50; color:white;" data-bs-toggle="modal" data-bs-target="#add">ADD New Contact</button>

    </div>
  </div>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>