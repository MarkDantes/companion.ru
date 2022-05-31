<?php
require "db.php";
?>

<!DOCTYPE html>
<html lang="en" style="--bs-body-bg: #f7f7fc;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Contacts - Companion</title>
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

<body style="/*background: url(&quot;design.jpg&quot;);*/background-position: 0 -60px;">

<!--Header-->
<?php include("includes/header.php"); ?>

<section class="py-5 mt-5" style="--bs-body-bg: #fff;">
    <div class="container py-5"
         style="font-family: Poppins, sans-serif;--bs-primary: #5f2eea;--bs-primary-rgb: 95,46,234;">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <p class="fw-bold text-success mb-2"></p>
                <h2 class="fw-bold">О проекте</h2>
            </div>
        </div>
        <div class="row d-flex justify-content-center"
             style="border-radius: 32px;box-shadow: 0px 8px 16px rgba(17,17,17,0.04);">
            <div class="col" style="border-radius: 32px;">
                <div class="card-group">
                    <div class="card"><img class="card-img-top w-100 d-block" src="assets/img/people/Saly-1.png">
                        <div class="card-body">
                            <h3 class="card-title">Пассажир</h3>
                            <p class="lead card-text"><br>Проложите свой маршрут и мы постараемся подобрать вам
                                попутчика.<br><br></p><a class="btn btn-primary" role="button" href="index.php"
                                                         style="background: #5f2eea;">Найти</a>
                        </div>
                    </div>
                    <div class="card"><img class="card-img-top w-100 d-block" src="assets/img/people/Saly-43.png">
                        <div class="card-body">
                            <h3 class="card-title">Водитель</h3>
                            <p class="lead card-text"><br>Предложите поездку и, возможно, кому-то окажется с вами по
                                пути.<br><br></p><a class="btn btn-primary" role="button" href="create.php"
                                                    style="background: #5f2eea;">Создать</a>
                        </div>
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
<script src="assets/js/bold-and-bright.js"></script>
</body>

</html>