<?php
require "db.php";
include "element.php";

if (!isset($_SESSION['logged_user'])) {
    header("Location: /login.php");
}


$data = $_POST;
$user = R::findOne('users', 'id = ?', array($_SESSION['logged_user']->id));
$tripsDriver = R::find("trips", "driver = ?", array($user->person));
$tripsPassenger = R::find("trips", "passenger = ?", array($user->person));

if (isset($data['delete'])) {
    $trip = R::load('trips', $data['delete']);
    R::trash($trip);

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>History - Companion</title>
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

<body style="--bs-body-bg: #f7f7fc;">
<!--Header-->
<?php include("includes/header.php"); ?>

<section class="py-5 mt-5" style="--bs-body-bg: #f7f7fc;background: #f7f7fc;">
    <div class="container py-5">
        <div class="row d-flex d-xl-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center align-items-xl-center"
             style="--bs-primary: #5f2eea;--bs-primary-rgb: 95,46,234;">
            <div class="col-xl-11 offset-xl-0 d-flex d-xl-flex flex-column align-items-center align-items-sm-center align-items-xl-center"
                 style="--bs-body-bg: #f7f7fc;background: #ffffff;width: 480px;border-radius: 32px;font-family: Poppins, sans-serif;box-shadow: 0px 8px 16px rgba(17,17,17,0.04);padding: 0px;">
                <div class="d-flex justify-content-xl-center align-items-xl-start"
                     style="height: 55px;margin-bottom: 19px;margin-top: 25px;background: rgba(54,162,177,0);--bs-body-font-weight: 900;font-family: Poppins, sans-serif;">
                    <div class="d-flex flex-column justify-content-xxl-end"><a href="profile.php"
                                                                               style="margin-left: 0px;margin-right: 100px;font-size: 32px;font-family: Poppins, sans-serif;transform-style: preserve-3d;font-weight: bold;color: #14142b;width: 150px;height: 50px;">Профиль</a>
                    </div>
                    <div class="d-flex flex-column justify-content-xxl-center align-items-xxl-start"><a
                                href="history.php"
                                style="font-size: 32px;transform-style: preserve-3d;font-weight: bold;color: #14142b;">История</a>
                        <hr style="margin: 0px;margin-top: 0px;width: 80px;height: 3px;color: #5f2eea;margin-bottom: 0px;margin-left: 34px;border-radius: 2px;">
                    </div>
                </div>

                <!--Elements-->
                <?php printElement($tripsDriver);  ?>

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