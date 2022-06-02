<?php
require "db.php";
require "libs/dadata.php";
include "findelement.php";
include "distance.php";

$data = $_POST;
$token = "9d73f28773e4d4b8b4595ef831d45b0532ea6bf7";
$secret = "2db57c4bf885349d4f342858fb8e1de2faf7d81f";

$trips = R::find("trips");

//Проверяем параметры отображения
function trip($trips)
{
    $token = "9d73f28773e4d4b8b4595ef831d45b0532ea6bf7";
    $dadata = new Dadata($token, null);
    $dadata->init();
    $filter = array();
    // Проверяем расстояние, чтоб оно было меньше 1.5км от точек поиска до точек маршрута
    foreach ($trips as $item) {

        $fieldsOne = array("query" => $item->start, "count" => 1, "locations" => array("city" => "Ростов-на-Дону"));
        $resultOne = $dadata->suggest("address", $fieldsOne);
        $fieldsTwo = array("query" => $item->end, "count" => 1, "locations" => array("city" => "Ростов-на-Дону"));
        $resultTwo = $dadata->suggest("address", $fieldsTwo);


        $d1 = distance($resultOne["suggestions"][0]["data"]["geo_lat"], $resultOne["suggestions"][0]["data"]["geo_lon"], $_SESSION['last_search']->start_lat, $_SESSION['last_search']->start_lon);
        $d2 = distance($resultTwo["suggestions"][0]["data"]["geo_lat"], $resultTwo["suggestions"][0]["data"]["geo_lon"], $_SESSION['last_search']->end_lat, $_SESSION['last_search']->end_lon);

        if ($d1 < 1500 && $d2 < 1500) {
            array_push($filter, $item);
        }

    }
    $dadata->close();

    $result = array();
    //Проверяем дату
    foreach ($filter as $item)
    {
        $date1 =new DateTime($item->data);

        $date2 = $_SESSION['last_search']->date;
        if ($date1->format('Y-m-d')==$date2){
            array_push($result,$item);
        }
    }

    return $result;

}

if (isset($data['find'])) {
//Ищем поездку

    $dadata = new Dadata($token, null);
    $dadata->init();

    //находим адреса и всю информацию по ним
    $fieldsOne = array("query" => $data['start'], "count" => 1, "locations" => array("city" => "Ростов-на-Дону"));
    $resultOne = $dadata->suggest("address", $fieldsOne);
    $fieldsTwo = array("query" => $data['end'], "count" => 1, "locations" => array("city" => "Ростов-на-Дону"));
    $resultTwo = $dadata->suggest("address", $fieldsTwo);

    $find = R::findOne('finds', 'id = ?', array($_SESSION['last_search']->id));

    //Извлекаем широту и долготу
    $find->startLat = $resultOne["suggestions"][0]["data"]["geo_lat"];
    $find->startLon = $resultOne["suggestions"][0]["data"]["geo_lon"];
    $find->endLat = $resultTwo["suggestions"][0]["data"]["geo_lat"];
    $find->endLon = $resultTwo["suggestions"][0]["data"]["geo_lon"];
    $find->date = $data['date'];
    $dadata->close();
    R::store($find);
    unset($_SESSION['last_search']);
    $_SESSION['last_search'] = $find;


}
$result = array();
if(isset($data['filter'])){
    $el = trip($trips);
    foreach ($el as $item){
        if(($data['animal'] == null && $item->animal == "0" || $data['animal'] == "on" && $item->animal == "1")
            && ($data['seats'] == null && $item->seats == "0" || $data['seats'] == "on" && $item->seats == "1")
            && ($data['baby'] == null && $item->baby == "0" || $data['baby'] == "on" && $item->baby == "1")
            && ($data['smoke'] == null && $item->smoke == "0" || $data['smoke'] == "on" && $item->smoke == "1")
            && ($data['gender'] == $item->gender )
        ){
        array_push($result,$item);
        }
    }
}
else
{
    $result=trip($trips);
}

if (isset($data['booking'])) {

    $passenger = R::dispense('passengers');
    $passenger->tripid = $data['booking'];
    $passenger->passid = $_SESSION['logged_user']->id;
    R::store($passenger);
}

?>

<!DOCTYPE html>
<html lang="en" style="--bs-body-bg: #f7f7fc;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Find - Companion</title>
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


<!-- Form with button-->
<section class="position-relative py-4 py-xl-5" style="margin-top: 60px;font-family: Poppins, sans-serif;">
    <div class="container position-relative">
        <div class="row">
            <div class="col">
                <form action="find.php" method="post"
                      class="d-flex flex-row align-content-center flex-wrap align-items-sm-center align-items-md-center align-items-lg-center justify-content-xxl-center p-3 p-xl-4"
                      style="--bs-primary: #5f2eea;--bs-primary-rgb: 95,46,234;margin: 0px;margin-top: 0px;margin-bottom: 0px;">
                    <div class="input-group justify-content-center align-items-center align-content-center flex-wrap m-auto"
                         style="--bs-primary: #ffffff;--bs-primary-rgb: 255,255,255;width: 300px;height: 55px;border-top-right-radius: 16px;border-bottom-right-radius: 16px;margin: 0px;margin-top: 30px;margin-bottom: 0px;font-family: Poppins, sans-serif;margin-left: 0px;"><span
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
                                                    placeholder="Откуда" name="start" required="">
                        <button class="btn btn-primary"
                                style="background: #ffffff;border-top-right-radius: 16px;border-bottom-right-radius: 16px;border-top-color: #14142b;border-right-color: #14142b;border-bottom-color: #14142b;border-left-color: #ffffff;padding-left: 30px;height: 46.8px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                 fill="none" style="width: 24px;height: 24px;color: #A0A3BD;">
                                <path d="M6.2253 4.81108C5.83477 4.42056 5.20161 4.42056 4.81108 4.81108C4.42056 5.20161 4.42056 5.83477 4.81108 6.2253L10.5858 12L4.81114 17.7747C4.42062 18.1652 4.42062 18.7984 4.81114 19.1889C5.20167 19.5794 5.83483 19.5794 6.22535 19.1889L12 13.4142L17.7747 19.1889C18.1652 19.5794 18.7984 19.5794 19.1889 19.1889C19.5794 18.7984 19.5794 18.1652 19.1889 17.7747L13.4142 12L19.189 6.2253C19.5795 5.83477 19.5795 5.20161 19.189 4.81108C18.7985 4.42056 18.1653 4.42056 17.7748 4.81108L12 10.5858L6.2253 4.81108Z"
                                      fill="currentColor"></path>
                            </svg>
                        </button>
                    </div>


                    <div class="input-group justify-content-center align-items-center align-content-center flex-wrap m-auto"
                         style="--bs-primary: #ffffff;--bs-primary-rgb: 255,255,255;width: 300px;height: 55px;margin: 0px;margin-top: 0px;margin-bottom: 0px;font-family: Poppins, sans-serif;margin-left: 0px;">
                        <span class="input-group-text"
                              style="background: #ffffff;border-top-color: #14142b;border-bottom-color: #14142b;border-left-color: #14142b;height: 46.8px;"><i
                                    class="material-icons"
                                    style="width: 24px;height: 24px;">location_on</i></span><input class="form-control"
                                                                                                   type="text"
                                                                                                   style="border-top-color: #14142b;border-right-color: #ffffff;border-bottom-color: #14142b;border-left-color: #ffffff;height: 46.8px;"
                                                                                                   name="end"
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
                    <input class="form-control d-xxl-flex flex-wrap m-auto" type="date" name="date" required=""
                           style="width: 300px;height: 55px;margin-top: 0px;border-color: #14142b;border-bottom-color: #14142b;padding-right: 30px;padding-left: 31px;font-family: Poppins, sans-serif;margin-bottom: 0px;margin-right: 10px;margin-left: 0px;">
                    <button class="btn btn-primary d-flex d-xxl-flex justify-content-center align-items-center m-auto justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-xxl-center align-items-xxl-center"
                            type="submit" name="find"
                            style="--bs-primary: #5f2eea;--bs-primary-rgb: 95,46,234;width: 200px;height: 50px;background: #5f2eea;border-radius: 16px;margin: -33px;">
                        Найти
                    </button>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row d-md-flex justify-content-md-center">
            <div class="col-lg-8 col-xl-9 col-xxl-9 d-flex flex-column">

                <!--Print all satisfying us elements-->
                <?php printElementFind($result); ?>


            </div>

            <!--Filter-->
            <div class="col-md-5 col-lg-4 col-xl-3 col-xxl-3 d-flex justify-content-center flex-wrap justify-content-sm-center">
                <form class="d-flex flex-column align-items-center align-items-sm-center align-items-md-center align-items-lg-center align-items-xl-center align-items-xxl-center"
                     action="find.php" method="post">

                    <!--animal-->
                    <div class="d-flex d-xxl-flex flex-row flex-grow-0 align-items-center justify-content-xxl-center align-items-xxl-center"
                         style="width: 285px;height: 65px;margin-top: 30px;margin-left: 0px;background: #eff0f6;border-radius: 16px;--bs-primary: #5f2eea;--bs-primary-rgb: 95,46,234;">
                        <label class="form-label d-flex d-xxl-flex"
                               style="margin-right: 15px;font-family: Poppins, sans-serif;font-size: 18px;color: #6e7191;font-weight: bold;margin-left: 10px;margin-top: 5px;">Можно
                            с животными</label><label class="switch"><input name="animal" type="checkbox"/><span
                                    class="slider round"></span></label></div>

                    <!--seats-->
                    <div class="d-flex d-xxl-flex align-items-center justify-content-xxl-center align-items-xxl-center"
                         style="width: 285px;height: 65px;margin-top: 30px;margin-left: 0px;background: #eff0f6;border-radius: 16px;--bs-primary: #5f2eea;--bs-primary-rgb: 95,46,234;">
                        <label class="form-label d-xxl-flex"
                               style="margin-right: 73px;font-family: Poppins, sans-serif;font-size: 18px;color: #6e7191;font-weight: bold;margin-left: 10px;margin-top: 5px;">Сзади
                            2 места</label><label class="switch"><input name="seats" type="checkbox"/><span
                                    class="slider round"></span></label></div>
                    <!--baby-->
                    <div class="d-flex d-xxl-flex align-items-center justify-content-xxl-center align-items-xxl-center"
                         style="width: 285px;height: 65px;margin-top: 30px;margin-left: 0px;background: #eff0f6;border-radius: 16px;--bs-primary: #5f2eea;--bs-primary-rgb: 95,46,234;">
                        <label class="form-label d-xxl-flex"
                               style="margin-right: 61px;font-family: Poppins, sans-serif;font-size: 18px;color: #6e7191;font-weight: bold;margin-left: 10px;margin-top: 5px;">Детское
                            кресло</label><label class="switch"><input name="baby" type="checkbox"/><span
                                    class="slider round"></span></label></div>
                    <!--smoke-->
                    <div class="d-flex d-xxl-flex align-items-center justify-content-xxl-center align-items-xxl-center"
                         style="width: 285px;height: 65px;margin-top: 30px;margin-left: 0px;background: #eff0f6;border-radius: 16px;--bs-primary: #5f2eea;--bs-primary-rgb: 95,46,234;">
                        <label class="form-label d-xxl-flex"
                               style="margin-right: 39px;font-family: Poppins, sans-serif;font-size: 18px;color: #6e7191;font-weight: bold;margin-left: 10px;margin-top: 5px;">Курение
                            в салоне</label><label class="switch"><input name="smoke" type="checkbox"/><span
                                    class="slider round"></span></label></div>

                    <!--gender-->
                    <div class="d-flex flex-row" style="margin-top: 5px;">
                        <div class="form-check d-flex align-items-center justify-content-xl-start align-items-xl-center"
                             style="margin-right: 5px;background: #eff0f6;width: 152px;height: 60px;font-family: Poppins, sans-serif;border-radius: 16px;margin-bottom: 0px;">
                            <input name="gender" value="female" id="formCheck-1" class="form-check-input" type="radio"
                                   style="margin-left: -5px;margin-right: 6px;margin-top: 0px;"/><label
                                    class="form-check-label" for="formCheck-1"
                                    style="color: #6e7191;font-weight: bold;">Женщина</label></div>
                        <div class="form-check d-flex align-items-center justify-content-xl-start align-items-xl-center"
                             style="margin-right: 0px;background: #eff0f6;width: 152px;height: 60px;font-family: Poppins, sans-serif;border-radius: 16px;margin-bottom: 0px;">
                            <input name="gender" value="male" id="formCheck-2" class="form-check-input" type="radio"
                                   style="margin-left: -5px;margin-right: 6px;margin-top: 0px;"/><label
                                    class="form-check-label" for="formCheck-2"
                                    style="color: #6e7191;font-weight: bold;">Мужчина</label></div>
                    </div>
                    <button class="btn btn-primary" type="submit" name="filter"
                            style="width: 150px;margin-top: 15px;margin-bottom: 15px;background: #5f2eea;">Применить
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