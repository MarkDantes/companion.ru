<?php
require "db.php";
/*$connect = new PDO('mysql:host=127.0.0.1:3306;dbname=companion', 'root', 'root');
if(!$connect)
    echo  'failed'; */
$data = $_POST;
$read = false;
//Проверяем существует ли переменная signup
if (isset($data['signup']))
{
//Регистрация
    $errors = array();
    $read = true;
    if(trim($data['email'])=='')
    {
        $errors[]='Введите email!';
    }
    if($data['password']=='')
    {
        $errors[]='Введите password!';
    }

    if (R::count('users', 'email = ?', array($data['email'])) > 0)
    {
        $errors[]='Такой пользователь уже зарегистрирован!';
    }
    if(empty($errors))
    {
    $user = R::dispense('users');
    $user->email = $data['email'];
    $user->password = password_hash($data['password'], PASSWORD_DEFAULT);
    R::store($user);
    header('Location: /profile.php');
    }

}
?>


<!DOCTYPE html>
<html lang="en" style="--bs-body-bg: #F7F7FC;--bs-primary: #5F2EEA;--bs-primary-rgb: 95,46,234;font-family: Poppins, sans-serif;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Sign up - Companion</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
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
<!-- Header -->
<body style="color: var(--bs-indigo);">
    <nav class="navbar navbar-light navbar-expand-md fixed-top navbar-shrink py-3" id="mainNav" style="color: var(--bs-indigo);font-family: Poppins, sans-serif;--bs-body-bg: #F7F7FC;background: #f7f7fc;">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="index.php" ><img class="img-fluid" src="assets/img/logo/logo.png" width="200" height="40" loading="eager"></a>
            <hr><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1" style="width: 450px;margin-right: 100px;--bs-primary: #5f2eea;--bs-primary-rgb: 95,46,234;--bs-body-font-weight: black;">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link fw-bolder" aria-expanded="false" data-bs-toggle="dropdown" href="#" style="--bs-body-font-weight: normal;font-family: Poppins, sans-serif;font-weight: bold;color: #160141;"><i class="la la-location-arrow" style="margin-bottom: 0px;margin-right: 5px;transform: rotate(45deg);font-weight: bold;"></i>Город&nbsp;</a>
                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Москва</a><a class="dropdown-item" href="#">Санкт-Петербург</a><a class="dropdown-item" href="#">Новосибирск</a><a class="dropdown-item" href="#">Екатеринбург</a><a class="dropdown-item" href="#">Казань</a><a class="dropdown-item" href="#">Нижний Новгород</a><a class="dropdown-item" href="#">Челябинск</a><a class="dropdown-item" href="#">Омск</a><a class="dropdown-item" href="#">Ростов-на-Дону</a><a class="dropdown-item" href="#">Самара</a><a class="dropdown-item" href="#">Уфа</a><a class="dropdown-item" href="#">Красноярск</a><a class="dropdown-item" href="#">Воронеж</a><a class="dropdown-item" href="#">Пермь</a><a class="dropdown-item" href="#">Волгоград</a></div>
                    </li>
                    <li class="nav-item"><a class="nav-link fw-bolder" href="index.php" style="color: rgb(22,1,65);font-weight: bold;--bs-body-font-weight: normal;">Найти</a></li>
                    <li class="nav-item"><a class="nav-link fw-bolder" href="create.php" style="color: rgb(22,1,65);font-weight: bold;font-family: Poppins, sans-serif;--bs-body-font-weight: normal;">Создать</a></li>
                    <li class="nav-item"><a class="nav-link active fw-bolder" href="contacts.php" style="color: rgb(22,1,65);--bs-body-font-weight: normal;font-weight: bold;font-family: Poppins, sans-serif;">О проекте</a></li>

                    <!-- Avatar + Profile -->
                </ul><div class="dropdown">
                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="assets/img/avatars/avatar.jpg" alt="mdo" width="48" height="48" class="rounded-circle">
                </a>
                <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1" style="">
                    <?php if(isset($_SESSION['logged_user'])) : ?>
                        <li><a class="dropdown-item" href="profile.php">Профиль</a></li>
                        <li><a class="dropdown-item" href="history.php">Истории</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="exit.php">Выйти</a></li>
                    <?php else : ?>
                        <li><a class="dropdown-item" href="login.php">Профиль</a></li>
                        <li><a class="dropdown-item" href="login.php">Истории</a></li>
                    <?php endif; ?>
                </ul>
            </div>
            </div>
        </div>
    </nav>
    <!-- Registration -->
    <section class="py-5 mt-5">
        <div class="container py-5" style="--bs-primary: #5F2EEA;--bs-primary-rgb: 95,46,234;--bs-body-bg: #F3EFFF;">
            <div class="row d-flex justify-content-center" style="--bs-body-bg: #F3EFFF;--bs-primary: #5F2EEA;--bs-primary-rgb: 95,46,234;">
                <div class="col-md-6 col-xl-4">
                    <div class="card">
                        <div class="card-body text-center d-flex flex-column align-items-center" style="border-color: #5f2eea;font-family: Poppins, sans-serif;box-shadow: 0px 8px 16px rgba(17,17,17,0.04);border-radius: 32px;font-size: 18px;">
                            <h2 class="fw-bold" style="color: #14142b;font-family: Poppins, sans-serif;margin-top: 35px;">Регистрация</h2>
                            <form action="./signup.php" method="post">
                                <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email" style="margin-top: 30px;height: 64px;" required autocomplete="on" inputmode="email"></div>
                                <div class="mb-3"><input class="form-control" type="password" name="password"  placeholder="Password" style="margin-top: 30px;width: 325px;height: 64px;" required autocomplete="on"></div>
                                <div class="mb-3"><button class="btn btn-primary shadow d-block w-100" type="submit" name="signup" style="background: #5f2eea;font-family: Poppins, sans-serif;margin-top: 30px;width: 319px;height: 64px;border-radius: 16px;">Регистрация</button></div>
                                <p class="text-muted">Уже зарегистрированы?&nbsp;<a href="login.php">Вход</a></p>
                            </form>
                            <?php if (!empty($errors))
                            {
                                echo '<div class="alert alert-warning beautiful" role="alert">
    <div><strong>Внимание!</strong>'.array_shift($errors).' </div>
</div>
                                ';
                            }
                            else
                            { if($read) {
                                echo '<div class="alert alert-warning beautiful" role="alert" style="background-color: #F3FDFA;  color:#00966D;">
    <div><strong>Регистрация прошла успешно!</strong></div>
</div>'; }
                            }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <!--Footer-->
    <footer class="bg-primary-gradient" style="--bs-body-bg: #ffffff;height: 150px;margin-left: 0px;">
        <div class="container py-4 py-lg-5" style="margin: 51px;height: 0px;margin-bottom: 0px;">
            <p class="mb-0" style="font-family: Poppins, sans-serif;font-size: 18px;text-align: center;height: 20px;color: #6f6c90;"><br>&nbsp;Companion ©&nbsp;2022<br><br></p>
            <hr style="margin-top: 0px;margin-bottom: 0px;color: #6f6c90;">
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/smart-forms.min.js"></script>
    <script src="assets/js/bold-and-bright.js"></script>
</body>

</html>