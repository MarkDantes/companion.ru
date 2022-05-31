<?php
require "db.php";

$data = $_POST;
$read = false;
//Проверяем существует ли переменная login
if (isset($data['login'])) {
    $errors = array();
    $read = true;
    $user = R::findOne('users', 'email = ?', array($data['email']));
    if ($user) {
        if (password_verify($data['password'], $user->password)) {
            $_SESSION['logged_user'] = $user;
        } else {
            $errors[] = "Неверно введён пароль!";
        }
    } else {
        $errors[] = "Пользователь с таким email не найден!";
    }

    if (empty($errors)) {
        header('Location: /index.php');
    }

}

?>
<!DOCTYPE html>
<html lang="en" style="color: #5f2eea;--bs-body-bg: #f7f7fc;font-family: Poppins, sans-serif;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Log in - Companion</title>
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

<body>
<!--Header-->
<?php include("includes/header.php"); ?>

<!--Login form-->
<section class="py-5 mt-5" style="--bs-body-bg: #f7f7fc;--bs-primary: #5f2eea;--bs-primary-rgb: 95,46,234;">
    <div class="container py-5" style="--bs-body-bg: #f7f7fc;">
        <div class="row d-flex justify-content-center" style="--bs-primary: #5f2eea;--bs-primary-rgb: 95,46,234;">
            <div class="col-md-6 col-xl-4">
                <div class="card">
                    <div class="card-body text-center d-flex flex-column align-items-center"
                         style="font-size: 18px;border-radius: 32px;box-shadow: 0px 8px 16px rgba(17,17,17,0.04);font-family: Poppins, sans-serif;">
                        <h2 class="fw-bold"
                            style="margin-top: 35px;margin-right: 0px;margin-bottom: 0px;--bs-body-font-weight: 900;">
                            Вход</h2>
                        <form action="login.php" method="post">
                            <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email"
                                                     style="width: 325px;height: 64px;margin-top: 30px;margin-bottom: 0px;"
                                                     required></div>
                            <div class="mb-3"><input class="form-control" type="password" name="password"
                                                     placeholder="Password"
                                                     style="height: 64px;margin-top: 30px;margin-bottom: 0px;" required>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary shadow d-block w-100" name="login" type="submit"
                                        style="color: var(--bs-white);background: #5f2eea;width: 319px;height: 64px;border-radius: 16px;margin-top: 30px;">
                                    Вход
                                </button>
                            </div>
                            <p class="text-muted"><a href="signup.php">Регистрация</a></p>
                        </form>
                        <?php if (!empty($errors)) {
                            echo '<div class="alert alert-warning beautiful" role="alert">
    <div><strong>Внимание!</strong>' . array_shift($errors) . ' </div>
</div>
                                ';
                        } else {
                            if ($read) {
                                echo '<div class="alert alert-warning beautiful" role="alert" style="background-color: #F3FDFA;  color:#00966D;">
    <div><strong>Вы вошли в аккаунт!</strong></div>
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