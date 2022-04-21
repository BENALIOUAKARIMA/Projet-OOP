<?php
include('conect.php');
$login = new Login();
if (isset($_POST['name']) && isset($_POST['password'])) {
    $result = $login->login( $_POST["name"], $_POST["password"]);
    if ($result == 1) {
        $_SESSION["login"] = true;
        $_SESSION ["id"] = $login->idUser();
        $_SESSION ["name"] = $login->name();
        $_SESSION['id_contact']=$login->login($_POST['id_contact'],'');
        $_SESSION ["email"] = $login->email();
        $_SESSION ["password"] = $login->password();
        header("location: profil.php");
    }elseif ($result == 10) {
        echo
        "<script>alert ('Wrog Password');</script>";
    }elseif ($result == 100) {
        echo
        "<script>alert ('User Not Enregistred');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log IN</title>
    <!-- css -->
    <link rel="stylesheet" href="./login.css">
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
    <!-- js -->
    <!-- <script src="validation.js"></script> -->
    <script>
        function test() {
            if (document.getElementById('name').value == "" || document.getElementById('password').value == "" || document.getElementById('confirm').value == "") {
                //    if input est vide
                alert("Remplire les chemps");
            }
        }
    </script>

</head>

<body>
    <?php
    include('nav.php');
    ?>
    <section class="login py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <img src="img/Login.jpg" class="img-fluid" alt="photo">
                </div>
                <div class="col-lg-7 text-center py-5 ">
                    <h1 style="color: #2c3e50;">Welcome Users</h1>
                    <form action="" class="h-auto" method="POST">
                    <div class=" mt-3">
                            <input id="name" type="text" name="name" class="form-control mt-2 " id="floatingPassword" placeholder="Enter your name" required>
                        </div>
                        <div class=" mt-3">
                            <input id="password" type="password" name="password" class="form-control mt-2 " id="floatingPassword" placeholder="Enter your Password" required>
                        </div>
                        <div class="form-row pt-3">
                            <div class="offset-1 col-lg-10">
                                <button type="submit" name="submit" class="btn w-50" style="background-color:#3498db; border: none;outline: none;border-radius: 60px;  box-shadow: -1px 1px 30px -11px rgba(0,0,0,0.75); color:white;" onClick="javascript:test();">Log In</button>
                                <p class="mt-3 pb-3 text-muted">Need an account?<a href="signup.php" style="text-decoration: none;"> Sign Up Here</a></p>

                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </section>
</body>

</html>