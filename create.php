<?php
require "db.php";

if (!isset($_SESSION['logged_user'])) {
    header("Location: /login.php");
}

if($_SESSION['logged_user']->car == null)
{
    header("Location: /profile.php");
}

$data = $_POST;
$user = R::findOne('users', 'id = ?', array($_SESSION['logged_user']->id));

//Проверяем существует ли переменная create
if (isset($data['create'])) {
//Cоздаём поездку

    $trip = R::dispense('trips');
    $trip->driver = $user->person;
    $trip->avatar = $user->avatar;
    $trip->phone = $user->phone;
    $trip->car = $user->car;
    $trip->start = $data['start'];
    $trip->end = $data['end'];
    $trip->stops = $data['stops'];
    $trip->data = $data['data'];
    $trip->price = $data['price'];
    $trip->passenger=null;


    //filter
    if (isset($_POST['animal']) == true) {
        $trip->animal = true;
    } else {
        $trip->animal = false;
    }
    if (isset($_POST['seats']) == true) {
        $trip->seats = true;
    } else {
        $trip->seats = false;
    }

    if (isset($_POST['baby']) == true) {
        $trip->baby = true;
    } else {
        $trip->baby = false;
    }
    if (isset($_POST['smoke']) == true) {
        $trip->smoke = true;
    } else {
        $trip->smoke = false;
    }

    R::store($trip);

    header('Location: /history.php');


}


?>

<!DOCTYPE html>
<html lang="ru" style="--bs-body-bg: #f7f7fc;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Create - Companion</title>
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

<section class="d-flex flex-column flex-grow-0 align-self-start flex-nowrap py-5 mt-5" style="--bs-body-bg: #f7f7fc;">
    <div class="container" style="box-shadow: 5px 8px 16px rgba(17,17,17,0.04);">
        <div class="row d-flex flex-column"
             style="box-shadow: 0px 8px 16px rgba(17,17,17,0.04);border-color: rgb(45, 45, 45);--bs-body-bg: #ffffff;background: #ffffff;border-radius: 32px;">
            <div class="col d-flex d-md-flex flex-column justify-content-center align-items-center m-auto justify-content-sm-center align-items-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center justify-content-xxl-center">

                <!--form with trip's settings-->
                <form action="create.php" method="post"
                      class="d-flex flex-column justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-xl-center align-items-xl-center"
                      style="margin-left: 0px;margin-bottom: 35px;border-right-color: #ffffff;border-left-color: #ffffff;font-family: Poppins, sans-serif;font-size: 18px;margin-top: 15px;">
                    <div class="row">
                        <div class="col d-flex d-md-flex flex-column justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center">

                            <!--Start position-->
                            <div class="input-group justify-content-center align-items-center align-content-center"
                                 style="--bs-primary: #ffffff;--bs-primary-rgb: 255,255,255;width: 325px;height: 57px;border-top-right-radius: 16px;border-bottom-right-radius: 16px;margin-top: 30px;margin-bottom: 0px;"><span
                                        class="d-flex input-group-text"
                                        style="--bs-primary: #ffffff;--bs-primary-rgb: 255,255,255;background: #ffffff;border-top-color: #14142b;border-bottom-color: #14142b;border-left-color: #14142b;height: 46.8px;"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            viewBox="0 0 24 24" fill="none" style="width: 24px;height: 24px;">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M16.2721 10.2721C16.2721 12.4813 14.4813 14.2721 12.2721 14.2721C10.063 14.2721 8.27214 12.4813 8.27214 10.2721C8.27214 8.06298 10.063 6.27212 12.2721 6.27212C14.4813 6.27212 16.2721 8.06298 16.2721 10.2721ZM14.2721 10.2721C14.2721 11.3767 13.3767 12.2721 12.2721 12.2721C11.1676 12.2721 10.2721 11.3767 10.2721 10.2721C10.2721 9.16755 11.1676 8.27212 12.2721 8.27212C13.3767 8.27212 14.2721 9.16755 14.2721 10.2721Z"
                                              fill="currentColor"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M5.79417 16.5183C2.19424 13.0909 2.05438 7.39409 5.48178 3.79417C8.90918 0.194243 14.6059 0.054383 18.2059 3.48178C21.8058 6.90918 21.9457 12.6059 18.5183 16.2059L12.3124 22.7241L5.79417 16.5183ZM17.0698 14.8268L12.243 19.8965L7.17324 15.0698C4.3733 12.404 4.26452 7.97318 6.93028 5.17324C9.59603 2.3733 14.0268 2.26452 16.8268 4.93028C19.6267 7.59603 19.7355 12.0268 17.0698 14.8268Z"
                                              fill="currentColor"></path>
                                    </svg></span><input class="form-control" type="text" name="start"
                                                        style="border-top-color: #14142b;border-right-color: #ffffff;border-bottom-color: #14142b;border-left-color: #ffffff;"
                                                        placeholder="Откуда" required/>
                                <button class="btn btn-primary" type="button"
                                        style="background: #ffffff;border-top-right-radius: 16px;border-bottom-right-radius: 16px;border-top-color: #14142b;border-right-color: #14142b;border-bottom-color: #14142b;border-left-color: #ffffff;padding-left: 30px;height: 46.8px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                         fill="none"
                                         style="width: 24px;height: 24px;color: #A0A3BD;margin-right: -6px;">
                                        <path d="M6.2253 4.81108C5.83477 4.42056 5.20161 4.42056 4.81108 4.81108C4.42056 5.20161 4.42056 5.83477 4.81108 6.2253L10.5858 12L4.81114 17.7747C4.42062 18.1652 4.42062 18.7984 4.81114 19.1889C5.20167 19.5794 5.83483 19.5794 6.22535 19.1889L12 13.4142L17.7747 19.1889C18.1652 19.5794 18.7984 19.5794 19.1889 19.1889C19.5794 18.7984 19.5794 18.1652 19.1889 17.7747L13.4142 12L19.189 6.2253C19.5795 5.83477 19.5795 5.20161 19.189 4.81108C18.7985 4.42056 18.1653 4.42056 17.7748 4.81108L12 10.5858L6.2253 4.81108Z"
                                              fill="currentColor"></path>
                                    </svg>
                                </button>
                            </div>


                            <!--End position-->
                            <div class="input-group justify-content-center align-items-center align-content-center"
                                 style="--bs-primary: #ffffff;--bs-primary-rgb: 255,255,255;width: 325px;height: 57px;margin-top: 30px;margin-bottom: 0px;">
                                <span class="input-group-text"
                                      style="background: #ffffff;border-top-color: #14142b;border-bottom-color: #14142b;border-left-color: #14142b;height: 46.8px;"><i
                                            class="material-icons"
                                            style="width: 24px;height: 24px;">location_on</i></span><input
                                        class="form-control" type="text"
                                        style="border-top-color: #14142b;border-right-color: #ffffff;border-bottom-color: #14142b;border-left-color: #ffffff;height: 46.8px;"
                                        placeholder="Куда" name="end" required/>
                                <button class="btn btn-primary" type="button"
                                        style="background: #ffffff;border-top-right-radius: 16px;border-bottom-right-radius: 16px;border-top-color: #14142b;border-right-color: #14142b;border-bottom-color: #14142b;border-left-color: #ffffff;height: 46.8px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                         fill="none"
                                         style="width: 24px;height: 24px;color: #A0A3BD;margin-right: -6px;">
                                        <path d="M6.2253 4.81108C5.83477 4.42056 5.20161 4.42056 4.81108 4.81108C4.42056 5.20161 4.42056 5.83477 4.81108 6.2253L10.5858 12L4.81114 17.7747C4.42062 18.1652 4.42062 18.7984 4.81114 19.1889C5.20167 19.5794 5.83483 19.5794 6.22535 19.1889L12 13.4142L17.7747 19.1889C18.1652 19.5794 18.7984 19.5794 19.1889 19.1889C19.5794 18.7984 19.5794 18.1652 19.1889 17.7747L13.4142 12L19.189 6.2253C19.5795 5.83477 19.5795 5.20161 19.189 4.81108C18.7985 4.42056 18.1653 4.42056 17.7748 4.81108L12 10.5858L6.2253 4.81108Z"
                                              fill="currentColor"></path>
                                    </svg>
                                </button>
                            </div>


                            <!--Data time-->
                            <input class="form-control" type="datetime-local" name="data" required
                                   style="width: 325px;height: 55px;margin-top: 30px;border-color: #14142b;border-bottom-color: #14142b;padding-right: 30px;padding-left: 107px;font-family: Poppins, sans-serif;"/>

                            <!--Price-->
                            <div class="input-group justify-content-center align-items-center align-content-center"
                                 style="width: 325px;height: 57px;margin-top: 30px;margin-bottom: 0px;"><span
                                        class="input-group-text"
                                        style="background: #ffffff;border-top-color: #14142b;border-bottom-color: #14142b;border-left-color: #14142b;height: 46.8px;"><i
                                            class="fas fa-ruble-sign"
                                            style="width: 24px;height: 24px;margin-top: 3px;"></i></span><input
                                        class="form-control" type="text"
                                        style="border-top-color: #14142b;border-right-color: #ffffff;border-bottom-color: #14142b;border-left-color: #ffffff;height: 46.8px;"
                                        required name="price" placeholder="Стоимость"/>
                                <button class="btn btn-primary" type="button"
                                        style="background: #ffffff;border-top-right-radius: 16px;border-bottom-right-radius: 16px;border-top-color: #14142b;border-right-color: #14142b;border-bottom-color: #14142b;border-left-color: #ffffff;height: 46.8px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                         fill="none"
                                         style="width: 24px;height: 24px;color: #A0A3BD;margin-right: -6px;">
                                        <path d="M6.2253 4.81108C5.83477 4.42056 5.20161 4.42056 4.81108 4.81108C4.42056 5.20161 4.42056 5.83477 4.81108 6.2253L10.5858 12L4.81114 17.7747C4.42062 18.1652 4.42062 18.7984 4.81114 19.1889C5.20167 19.5794 5.83483 19.5794 6.22535 19.1889L12 13.4142L17.7747 19.1889C18.1652 19.5794 18.7984 19.5794 19.1889 19.1889C19.5794 18.7984 19.5794 18.1652 19.1889 17.7747L13.4142 12L19.189 6.2253C19.5795 5.83477 19.5795 5.20161 19.189 4.81108C18.7985 4.42056 18.1653 4.42056 17.7748 4.81108L12 10.5858L6.2253 4.81108Z"
                                              fill="currentColor"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <!--Filter-->
                        <div class="col d-sm-flex d-md-flex justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center">
                            <div class="d-flex flex-column justify-content-center align-items-start"
                                 style="margin-top: 0px;margin-bottom: 30px;width: 425px;">

                                <!--animals-->
                                <div class="d-flex d-xxl-flex flex-row flex-grow-0 align-items-center justify-content-xxl-center align-items-xxl-center"
                                     style="width: 285px;height: 65px;margin-top: 30px;margin-left: 65px;background: #eff0f6;border-radius: 16px;--bs-primary: #5f2eea;--bs-primary-rgb: 95,46,234;">
                                    <label class="form-label d-flex d-xxl-flex"
                                           style="margin-right: 15px;font-family: Poppins, sans-serif;font-size: 18px;color: #6e7191;font-weight: bold;margin-left: 10px;margin-top: 5px;">Можно
                                        с животными</label><label class="switch"><input name="animal"
                                                                                        type="checkbox"/><span
                                                class="slider round"></span></label></div>

                                <!--2 seats-->
                                <div class="d-flex d-xxl-flex align-items-center justify-content-xxl-center align-items-xxl-center"
                                     style="width: 285px;height: 65px;margin-top: 30px;margin-left: 65px;background: #eff0f6;border-radius: 16px;--bs-primary: #5f2eea;--bs-primary-rgb: 95,46,234;">
                                    <label class="form-label d-xxl-flex"
                                           style="margin-right: 73px;font-family: Poppins, sans-serif;font-size: 18px;color: #6e7191;font-weight: bold;margin-left: 10px;margin-top: 5px;">Сзади
                                        2 места</label><label class="switch"><input name="seats" type="checkbox"/><span
                                                class="slider round"></span></label></div>
                                <!--baby seat -->
                                <div class="d-flex d-xxl-flex align-items-center justify-content-xxl-center align-items-xxl-center"
                                     style="width: 285px;height: 65px;margin-top: 30px;margin-left: 65px;background: #eff0f6;border-radius: 16px;--bs-primary: #5f2eea;--bs-primary-rgb: 95,46,234;">
                                    <label class="form-label d-xxl-flex"
                                           style="margin-right: 61px;font-family: Poppins, sans-serif;font-size: 18px;color: #6e7191;font-weight: bold;margin-left: 10px;margin-top: 5px;">Детское
                                        кресло</label><label class="switch"><input name="baby" type="checkbox"/><span
                                                class="slider round"></span></label></div>
                                <!--Smoke-->
                                <div class="d-flex d-xxl-flex align-items-center justify-content-xxl-center align-items-xxl-center"
                                     style="width: 285px;height: 65px;margin-top: 30px;margin-left: 65px;background: #eff0f6;border-radius: 16px;--bs-primary: #5f2eea;--bs-primary-rgb: 95,46,234;">
                                    <label class="form-label d-xxl-flex"
                                           style="margin-right: 39px;font-family: Poppins, sans-serif;font-size: 18px;color: #6e7191;font-weight: bold;margin-left: 10px;margin-top: 5px;">Курение
                                        в салоне</label><label class="switch"><input name="smoke" type="checkbox"/><span
                                                class="slider round"></span></label></div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit" name="create"
                            style="width: 250px;height: 65px;background: #5f2eea;border-radius: 16px;margin-left: 0px;margin-top: 30px;margin-bottom: 20px;font-family: Poppins, sans-serif;">
                        Создать поездку
                    </button>
                </form>
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