<?php
require "db.php";
/*$connect = new PDO('mysql:host=127.0.0.1:3306;dbname=companion', 'root', 'root');
if(!$connect)
    echo  'failed'; */
$data = $_POST;
$read = false;
//Проверяем существует ли переменная signup
if (isset($data['signup'])) {
//Регистрация
    $errors = array();
    $read = true;
    if (trim($data['email']) == '') {
        $errors[] = 'Введите email!';
    }
    if ($data['password'] == '') {
        $errors[] = 'Введите password!';
    }

    if (R::count('users', 'email = ?', array($data['email'])) > 0) {
        $errors[] = 'Такой пользователь уже зарегистрирован!';
    }
    if (empty($errors)) {
        $user = R::dispense('users');
        $user->email = $data['email'];
        $user->password = password_hash($data['password'], PASSWORD_DEFAULT);
        $user->avatar = "avatar.jpg";
        $user->person = null;
        $user->phone = null;
        $user->car =null;
        $user->gender=null;
        R::store($user);
        header('Location: /profile.php');
        $_SESSION['logged_user'] = $user;
    }

}
?>


<!DOCTYPE html>
<html lang="en"
      style="--bs-body-bg: #F7F7FC;--bs-primary: #5F2EEA;--bs-primary-rgb: 95,46,234;font-family: Poppins, sans-serif;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Sign up - Companion</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/line-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="assets/css/Navbar-Centered-Brand.css">
    <link rel="stylesheet" href="assets/css/Toggle-Switch-2.css">
</head>

<body style="color: var(--bs-indigo);">

<!-- Header -->
<?php include("includes/header.php"); ?>
<!-- Registration -->
<section class="py-5 mt-5">
    <div class="container py-5" style="--bs-primary: #5F2EEA;--bs-primary-rgb: 95,46,234;--bs-body-bg: #F3EFFF;">
        <div class="row d-flex justify-content-center"
             style="--bs-body-bg: #F3EFFF;--bs-primary: #5F2EEA;--bs-primary-rgb: 95,46,234;">
            <div class="col-md-6 col-xl-4">
                <div class="card">
                    <div class="card-body text-center d-flex flex-column align-items-center"
                         style="border-color: #5f2eea;font-family: Poppins, sans-serif;box-shadow: 0px 8px 16px rgba(17,17,17,0.04);border-radius: 32px;font-size: 18px;">
                        <h2 class="fw-bold" style="color: #14142b;font-family: Poppins, sans-serif;margin-top: 35px;">
                            Регистрация</h2>
                        <form action="./signup.php" method="post">
                            <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email"
                                                     style="margin-top: 30px;height: 64px;" required autocomplete="on"
                                                     inputmode="email"></div>
                            <div class="mb-3"><input class="form-control" type="password" name="password"
                                                     placeholder="Password"
                                                     style="margin-top: 30px;width: 325px;height: 64px;" required
                                                     autocomplete="on"></div>
                            <div class="mb-3">
                                <button class="btn btn-primary shadow d-block w-100" type="submit" name="signup"
                                        style="background: #5f2eea;font-family: Poppins, sans-serif;margin-top: 30px;width: 319px;height: 64px;border-radius: 16px;">
                                    Регистрация
                                </button>
                            </div>
                            <p class="text-muted">Уже зарегистрированы?&nbsp;<a href="login.php">Вход</a></p>
                        </form>
                        <?php if (!empty($errors)) {
                            echo '<div class="alert alert-warning beautiful" role="alert">
    <div><strong>Внимание!</strong>' . array_shift($errors) . ' </div>
</div>
                                ';
                        } else {
                            if ($read) {
                                echo '<div class="alert alert-warning beautiful" role="alert" style="background-color: #F3FDFA;  color:#00966D;">
    <div><strong>Регистрация прошла успешно!</strong></div>
</div>';
                            }
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>

<!--Footer-->
<?php include("includes/footer.php"); ?>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/smart-forms.min.js"></script>
<script src="assets/js/bold-and-bright.js"></script>
</body>

</html>