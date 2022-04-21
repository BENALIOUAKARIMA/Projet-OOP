<?php
require_once 'operation.php';

$clt = new Clt();

$id = $_SESSION["id"];
$sql = $clt->Affiche($id);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liste Contact</title>
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
        <a href="profil.php" style="text-decoration: none; color:gray; margin-right:50px; color:white;">Profile</a>
        <a href="login.php" style="text-decoration: none; color:gray; color:white; ">Login</a>
      </form>
    </div>
  </nav>

  <h1 class="animate__animated animate__heartBeat text-center" style="color: #2c3e50;font-family: 'Pacifico', cursive; margin-top:70px;">Contact Liste</h1>
  <table class="table mt-5">
    <table class="border-top" id="visuel">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">name</th>
            <th scope="col">phone</th>
            <th scope="col">email</th>
            <th scope="col">adresse</th>
            <th scope="col">edit or delete</th>
          </tr>
        </thead>
        <tbody>
          <?php
          while ($data = mysqli_fetch_assoc($sql)) {

          ?>
            <tr>
              <td><?php echo $data['name'] ?></td>
              <td><?php echo $data['phone'] ?></td>
              <td><?php echo $data['email'] ?></td>
              <td><?php echo $data['adresse'] ?></td>
              <td>
                <a  href="update.php?id=<?php echo $data['id'] ?>"><button type='button' class='btn btn-secondary'>Edit</button></a>
                <a  href="delete.php?id=<?php echo $data['id'] ?>"><button type='button' class='btn btn-danger'>Delet</button></a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>

</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>