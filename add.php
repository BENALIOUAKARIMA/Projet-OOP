<?php
include('conect.php');
// if (isset($_POST['submit'])) {
//     echo ("hello");
// }
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

<body style="background: linear-gradient(to right, #8e9eab, #eef2f3);">
    <form class="w-75 mx-auto" style="border-radius: 10px; box-shadow: 0px 0px 5px black; background-color:white;" method="POST">
        <h4 class="mt-4 ms-5 fw-bold pt-3 mb-3" style="color:  #4CA1AF; font-family: 'Pacifico', cursive;">ADD NEW CONTACT</h4>
        <div>
            <label for="name" class="form-label ms-5 fw-bold">Name</label>
            <input type="name" name="name" class="form-control  w-75 ms-5" required>
        </div>
        <div class="mb-3 mt-3">
            <label for="number" class="form-label ms-5 fw-bold">Phone</label>
            <input type="number" name="email" class="form-control w-75 ms-5" required>
        </div>
        <div>
            <label for="adresse" class="form-label ms-5 fw-bold">Adresse</label>
            <input type="email" name="adresse" class="form-control w-75 ms-5" required>
        </div>
        <button type="submit" name="submit" class="btn btn-primary mt-4 ms-5 mb-3 fw-bold w-25" style="background-color:  #4CA1AF;">Save</button>
    </form>


</body>

</html>