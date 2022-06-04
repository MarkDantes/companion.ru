<?php
require "db.php";

require "libs/dadata.php";

include "distance.php";


$data = $_POST;

$token = "9d73f28773e4d4b8b4595ef831d45b0532ea6bf7";
$secret = "2db57c4bf885349d4f342858fb8e1de2faf7d81f";

$city = "Ростов-на-Дону";
if (!isset($_SESSION['city'])) {
    $_SESSION['city'] = "Москва";
}
if (isset($data['city'])) {
    $city = $data['city'];
    $_SESSION['city'] = $data['city'];
}

if (isset($data['find'])) {
//Ищем поездку

    unset($_SESSION['last_search']);

    $dadata = new Dadata($token, null);
    $dadata->init();
    //Запрос к API для нахождения адреса в городе, выбранным пользователем
    $fieldsOne = array("query" => $data['start'], "count" => 1, "locations" => array("city" => $_SESSION['city']));
    $resultOne = $dadata->suggest("address", $fieldsOne);
    $fieldsTwo = array("query" => $data['end'], "count" => 1, "locations" => array("city" => $_SESSION['city']));
    $resultTwo = $dadata->suggest("address", $fieldsTwo);

    //Сохраняем в базу запросов поиска
    $find = R::dispense('finds');
    $find->startLat = $resultOne["suggestions"][0]["data"]["geo_lat"];
    $find->startLon = $resultOne["suggestions"][0]["data"]["geo_lon"];
    $find->endLat = $resultTwo["suggestions"][0]["data"]["geo_lat"];
    $find->endLon = $resultTwo["suggestions"][0]["data"]["geo_lon"];
    $find->date = $data['date'];
    $dadata->close();
    R::store($find);

    $_SESSION['last_search'] = $find;
    header('Location: /find.php');

}

?>
<!DOCTYPE html>
<html lang="ru" style="--bs-body-bg: #f7f7fc;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Companion</title>
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

<section class="position-relative py-4 py-xl-5" style="margin-top: 60px;font-family: Poppins, sans-serif;">
    <div class="container position-relative">
        <div class="row">
            <div class="col d-flex d-xl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center"
                 style="border-radius: 32px;box-shadow: 0px 8px 16px rgba(17,17,17,0.04);--bs-body-bg: var(--bs-white);--bs-primary: #5f2eea;--bs-primary-rgb: 95,46,234;background: var(--bs-white);height: 630.4px;">

                <!--Map-->
                <?php if (!isset($data['find'])) : ?>
                    <iframe allowfullscreen frameborder="0"
                            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDEFhtUdMNKUqHGRJ3fy5Rk4Zj1TAmV6CU&q=<?php echo $_SESSION['city'] ?>&zoom=12"
                            width="100%" height="100%"
                            style="--bs-primary: #5f2eea;--bs-primary-rgb: 95,46,234;border-radius: 32px;margin-top: 0;margin-bottom: 0px;height: 600px;"></iframe>
                <?php else: ?>
                    <iframe allowfullscreen frameborder="0"
                            src="https://www.google.com/maps/embed/v1/directions?key=AIzaSyDEFhtUdMNKUqHGRJ3fy5Rk4Zj1TAmV6CU&origin=<?php echo $_SESSION['last_search']->start_lat ?>,<?php echo $_SESSION['last_search']->start_lon ?>&destination=<?php echo $_SESSION['last_search']->end_lat ?>,<?php echo $_SESSION['last_search']->end_lon ?>&zoom=12&mode=driving"
                            width="100%" height="100%"
                            style="--bs-primary: #5f2eea;--bs-primary-rgb: 95,46,234;border-radius: 32px;margin-top: 0;margin-bottom: 0px;height: 600px;"></iframe>
                <?php endif; ?>
            </div>
            <div class="col-md-6 col-xl-4 col-xxl-4 d-flex justify-content-center align-items-center m-auto justify-content-sm-center align-items-xl-center justify-content-xxl-center align-items-xxl-center">

                <!--Form with navigation-->
                <form action="index.php" method="post"
                      class="d-flex flex-column justify-content-center align-items-center align-content-center m-auto p-3 p-xl-4"
                      style="--bs-primary: #5f2eea;--bs-primary-rgb: 95,46,234;margin-top: 0px;"
                      data-bss-redirect-url="find.php">

                    <!--Start position-->
                    <div class="input-group justify-content-center align-items-center align-content-center"
                         style="--bs-primary: #ffffff;--bs-primary-rgb: 255,255,255;width: 325px;height: 57px;border-top-right-radius: 16px;border-bottom-right-radius: 16px;margin-top: 20px;margin-bottom: 0px;"><span
                                class="d-flex input-group-text"
                                style="--bs-primary: #ffffff;--bs-primary-rgb: 255,255,255;background: #ffffff;border-top-color: #14142b;border-bottom-color: #14142b;border-left-color: #14142b;height: 46.8px;"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                    fill="none" style="width: 24px;height: 24px;">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M16.2721 10.2721C16.2721 12.4813 14.4813 14.2721 12.2721 14.2721C10.063 14.2721 8.27214 12.4813 8.27214 10.2721C8.27214 8.06298 10.063 6.27212 12.2721 6.27212C14.4813 6.27212 16.2721 8.06298 16.2721 10.2721ZM14.2721 10.2721C14.2721 11.3767 13.3767 12.2721 12.2721 12.2721C11.1676 12.2721 10.2721 11.3767 10.2721 10.2721C10.2721 9.16755 11.1676 8.27212 12.2721 8.27212C13.3767 8.27212 14.2721 9.16755 14.2721 10.2721Z"
                                          fill="currentColor"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M5.79417 16.5183C2.19424 13.0909 2.05438 7.39409 5.48178 3.79417C8.90918 0.194243 14.6059 0.054383 18.2059 3.48178C21.8058 6.90918 21.9457 12.6059 18.5183 16.2059L12.3124 22.7241L5.79417 16.5183ZM17.0698 14.8268L12.243 19.8965L7.17324 15.0698C4.3733 12.404 4.26452 7.97318 6.93028 5.17324C9.59603 2.3733 14.0268 2.26452 16.8268 4.93028C19.6267 7.59603 19.7355 12.0268 17.0698 14.8268Z"
                                          fill="currentColor"></path>
                                </svg></span><input class="form-control" type="text"
                                                    style="border-top-color: #14142b;border-right-color: #ffffff;border-bottom-color: #14142b;border-left-color: #ffffff;"
                                                    id="start"
                                                    name="start"
                                                    placeholder="Откуда" required="">
                        <button class="btn btn-primary" type="button"
                                style="background: #ffffff;border-top-right-radius: 16px;border-bottom-right-radius: 16px;border-top-color: #14142b;border-right-color: #14142b;border-bottom-color: #14142b;border-left-color: #ffffff;padding-left: 30px;height: 46.8px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                 fill="none" style="width: 24px;height: 24px;color: #A0A3BD;">
                                <path d="M6.2253 4.81108C5.83477 4.42056 5.20161 4.42056 4.81108 4.81108C4.42056 5.20161 4.42056 5.83477 4.81108 6.2253L10.5858 12L4.81114 17.7747C4.42062 18.1652 4.42062 18.7984 4.81114 19.1889C5.20167 19.5794 5.83483 19.5794 6.22535 19.1889L12 13.4142L17.7747 19.1889C18.1652 19.5794 18.7984 19.5794 19.1889 19.1889C19.5794 18.7984 19.5794 18.1652 19.1889 17.7747L13.4142 12L19.189 6.2253C19.5795 5.83477 19.5795 5.20161 19.189 4.81108C18.7985 4.42056 18.1653 4.42056 17.7748 4.81108L12 10.5858L6.2253 4.81108Z"
                                      fill="currentColor"></path>
                            </svg>
                        </button>
                    </div>

                    <!--End position-->
                    <div class="input-group justify-content-center align-items-center align-content-center"
                         style="--bs-primary: #ffffff;--bs-primary-rgb: 255,255,255;width: 325px;height: 57px;margin-top: 20px;margin-bottom: 0px;">
                        <span class="input-group-text"
                              style="background: #ffffff;border-top-color: #14142b;border-bottom-color: #14142b;border-left-color: #14142b;height: 46.8px;"><i
                                    class="material-icons"
                                    style="width: 24px;height: 24px;">location_on</i></span><input class="form-control"
                                                                                                   type="text"
                                                                                                   style="border-top-color: #14142b;border-right-color: #ffffff;border-bottom-color: #14142b;border-left-color: #ffffff;height: 46.8px;"
                                                                                                   name="end" ;
                                                                                                   placeholder="Куда"
                                                                                                   required="">
                        <button class="btn btn-primary" type="button"
                                style="background: #ffffff;border-top-right-radius: 16px;border-bottom-right-radius: 16px;border-top-color: #14142b;border-right-color: #14142b;border-bottom-color: #14142b;border-left-color: #ffffff;height: 46.8px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                 fill="none" style="width: 24px;height: 24px;color: #A0A3BD;">
                                <path d="M6.2253 4.81108C5.83477 4.42056 5.20161 4.42056 4.81108 4.81108C4.42056 5.20161 4.42056 5.83477 4.81108 6.2253L10.5858 12L4.81114 17.7747C4.42062 18.1652 4.42062 18.7984 4.81114 19.1889C5.20167 19.5794 5.83483 19.5794 6.22535 19.1889L12 13.4142L17.7747 19.1889C18.1652 19.5794 18.7984 19.5794 19.1889 19.1889C19.5794 18.7984 19.5794 18.1652 19.1889 17.7747L13.4142 12L19.189 6.2253C19.5795 5.83477 19.5795 5.20161 19.189 4.81108C18.7985 4.42056 18.1653 4.42056 17.7748 4.81108L12 10.5858L6.2253 4.81108Z"
                                      fill="currentColor"></path>
                            </svg>
                        </button>
                    </div>
                    <input class="form-control" type="date" name="date" required=""
                           style="width: 325px;height: 46.8px;margin-top: 20px;border-color: #14142b;border-bottom-color: #14142b;padding-right: 30px;padding-left: 107px;font-family: Poppins, sans-serif;">
                    <button class="btn btn-primary d-xxl-flex justify-content-xxl-center align-items-xxl-center"
                            type="submit" name="find"
                            style="--bs-primary: #5f2eea;--bs-primary-rgb: 95,46,234;width: 200px;height: 65px;margin-left: 0px;background: #5f2eea;border-radius: 16px;margin-top: 40px;">
                        Найти
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
<script src="assets/js/smart-forms.min.js"></script>
<script src="assets/js/bold-and-bright.js"></script>


</body>

</html>