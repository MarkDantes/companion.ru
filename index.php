<?php
require "db.php"
?>

<!DOCTYPE html>
<html lang="en" style="--bs-body-bg: #f7f7fc;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Companion</title>
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

<body style="/*background: url(&quot;design.jpg&quot;);*/background-position: 0 -60px;">
    <nav class="navbar navbar-light navbar-expand-md fixed-top navbar-shrink py-3" id="mainNav" style="color: var(--bs-indigo);font-family: Poppins, sans-serif;--bs-body-bg: #F7F7FC;background: #f7f7fc;">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="index.php" ><img class="img-fluid" src="assets/img/logo/logo.png" width="200" height="40" loading="eager"></a>
            <hr><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1" style="width: 450px;margin-right: 100px;--bs-primary: #5f2eea;--bs-primary-rgb: 95,46,234;--bs-body-font-weight: black;">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link fw-bolder" aria-expanded="false" data-bs-toggle="dropdown" href="#" style="--bs-body-font-weight: normal;font-family: Poppins, sans-serif;font-weight: bold;color: #160141;"><i class="la la-location-arrow" style="margin-bottom: 0px;margin-right: 5px;transform: rotate(45deg);font-weight: bold;"></i>Город&nbsp;</a>
                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Москва</a><a class="dropdown-item" href="#">Санкт-Петербург</a><a class="dropdown-item" href="#">Новосибирск</a><a class="dropdown-item" href="#">Екатеринбург</a><a class="dropdown-item" href="#">Казань</a><a class="dropdown-item" href="#">Нижний Новгород</a><a class="dropdown-item" href="#">Челябинск</a><a class="dropdown-item" href="#">Омск</a><a class="dropdown-item" href="#">Ростов-на-Дону</a><a class="dropdown-item" href="#">Самара</a><a class="dropdown-item" href="#">Уфа</a><a class="dropdown-item" href="#">Красноярск</a><a class="dropdown-item" href="#">Воронеж</a><a class="dropdown-item" href="#">Пермь</a><a class="dropdown-item" href="#">Волгоград</a></div>
                    </li>
                    <li class="nav-item"><a class="nav-link fw-bolder active" href="index.php" style="color: rgb(22,1,65);font-weight: bold;--bs-body-font-weight: normal;">Найти</a></li>
                    <li class="nav-item"><a class="nav-link fw-bolder" href="create.php" style="color: rgb(22,1,65);font-weight: bold;font-family: Poppins, sans-serif;--bs-body-font-weight: normal;">Создать</a></li>
                    <li class="nav-item"><a class="nav-link active fw-bolder" href="contacts.php" style="color: rgb(22,1,65);--bs-body-font-weight: normal;font-weight: bold;font-family: Poppins, sans-serif;">О проекте</a></li>
                </ul><div class="dropdown">
                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="assets/img/avatars/avatar.jpg" alt="mdo" width="48" height="48" class="rounded-circle">
                </a>
                <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1" style="">
                    <li><a class="dropdown-item" href="profile.php">Профиль</a></li>
                    <li><a class="dropdown-item" href="history.php">Истории</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="index.php">Выйти</a></li>
                </ul>
            </div>
            </div>
        </div>
    </nav>
    <section class="position-relative py-4 py-xl-5" style="margin-top: 60px;font-family: Poppins, sans-serif;">
        <div class="container position-relative">
            <div class="row">
                <div class="col d-flex d-xl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center" style="border-radius: 32px;box-shadow: 0px 8px 16px rgba(17,17,17,0.04);--bs-body-bg: var(--bs-white);--bs-primary: #5f2eea;--bs-primary-rgb: 95,46,234;background: var(--bs-white);height: 630.4px;"><iframe allowfullscreen="" frameborder="0" src="https://www.google.com/maps/embed/v1/directions?key=AIzaSyDEFhtUdMNKUqHGRJ3fy5Rk4Zj1TAmV6CU&amp;origin=%D0%A0%D0%BE%D1%81%D1%82%D0%BE%D0%B2-%D0%BD%D0%B0-%D0%94%D0%BE%D0%BD%D1%83%2C+%D0%BD%D0%BE%D0%B2%D0%BE%D0%BB%D0%B5%D1%81%D0%BD%D0%B0%D1%8F+1&amp;destination=%D0%A0%D0%BE%D1%81%D1%82%D0%BE%D0%B2-%D0%BD%D0%B0-%D0%B4%D0%BE%D0%BD%D1%83%2C+%D0%B2%D1%8F%D1%82%D1%81%D0%BA%D0%B0%D1%8F+114&amp;zoom=12" width="100%" height="100%" style="--bs-primary: #5f2eea;--bs-primary-rgb: 95,46,234;border-radius: 32px;margin-top: 0 ;margin-bottom: 0px;height: 600px;"></iframe></div>
                <div class="col-md-6 col-xl-4 col-xxl-4 d-flex justify-content-center align-items-center m-auto justify-content-sm-center align-items-xl-center justify-content-xxl-center align-items-xxl-center">
                    <form class="d-flex flex-column justify-content-center align-items-center align-content-center m-auto p-3 p-xl-4" style="--bs-primary: #5f2eea;--bs-primary-rgb: 95,46,234;margin-top: 0px;" data-bss-redirect-url="find.php">
                        <div class="input-group justify-content-center align-items-center align-content-center" style="--bs-primary: #ffffff;--bs-primary-rgb: 255,255,255;width: 325px;height: 57px;border-top-right-radius: 16px;border-bottom-right-radius: 16px;margin-top: 20px;margin-bottom: 0px;"><span class="d-flex input-group-text" style="--bs-primary: #ffffff;--bs-primary-rgb: 255,255,255;background: #ffffff;border-top-color: #14142b;border-bottom-color: #14142b;border-left-color: #14142b;height: 46.8px;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" style="width: 24px;height: 24px;">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2721 10.2721C16.2721 12.4813 14.4813 14.2721 12.2721 14.2721C10.063 14.2721 8.27214 12.4813 8.27214 10.2721C8.27214 8.06298 10.063 6.27212 12.2721 6.27212C14.4813 6.27212 16.2721 8.06298 16.2721 10.2721ZM14.2721 10.2721C14.2721 11.3767 13.3767 12.2721 12.2721 12.2721C11.1676 12.2721 10.2721 11.3767 10.2721 10.2721C10.2721 9.16755 11.1676 8.27212 12.2721 8.27212C13.3767 8.27212 14.2721 9.16755 14.2721 10.2721Z" fill="currentColor"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.79417 16.5183C2.19424 13.0909 2.05438 7.39409 5.48178 3.79417C8.90918 0.194243 14.6059 0.054383 18.2059 3.48178C21.8058 6.90918 21.9457 12.6059 18.5183 16.2059L12.3124 22.7241L5.79417 16.5183ZM17.0698 14.8268L12.243 19.8965L7.17324 15.0698C4.3733 12.404 4.26452 7.97318 6.93028 5.17324C9.59603 2.3733 14.0268 2.26452 16.8268 4.93028C19.6267 7.59603 19.7355 12.0268 17.0698 14.8268Z" fill="currentColor"></path>
                                </svg></span><input class="form-control" type="text" style="border-top-color: #14142b;border-right-color: #ffffff;border-bottom-color: #14142b;border-left-color: #ffffff;" placeholder="Откуда" required=""><button class="btn btn-primary" type="button" style="background: #ffffff;border-top-right-radius: 16px;border-bottom-right-radius: 16px;border-top-color: #14142b;border-right-color: #14142b;border-bottom-color: #14142b;border-left-color: #ffffff;padding-left: 30px;height: 46.8px;"> <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" style="width: 24px;height: 24px;color: #A0A3BD;">
                                    <path d="M6.2253 4.81108C5.83477 4.42056 5.20161 4.42056 4.81108 4.81108C4.42056 5.20161 4.42056 5.83477 4.81108 6.2253L10.5858 12L4.81114 17.7747C4.42062 18.1652 4.42062 18.7984 4.81114 19.1889C5.20167 19.5794 5.83483 19.5794 6.22535 19.1889L12 13.4142L17.7747 19.1889C18.1652 19.5794 18.7984 19.5794 19.1889 19.1889C19.5794 18.7984 19.5794 18.1652 19.1889 17.7747L13.4142 12L19.189 6.2253C19.5795 5.83477 19.5795 5.20161 19.189 4.81108C18.7985 4.42056 18.1653 4.42056 17.7748 4.81108L12 10.5858L6.2253 4.81108Z" fill="currentColor"></path>
                                </svg></button></div>
                        <div class="input-group justify-content-center align-items-center align-content-center" style="--bs-primary: #ffffff;--bs-primary-rgb: 255,255,255;width: 325px;height: 57px;margin-top: 20px;margin-bottom: 0px;"><span class="input-group-text" style="background: #ffffff;border-top-color: #14142b;border-bottom-color: #14142b;border-left-color: #14142b;height: 46.8px;"><i class="material-icons" style="width: 24px;height: 24px;">location_on</i></span><input class="form-control" type="text" style="border-top-color: #14142b;border-right-color: #ffffff;border-bottom-color: #14142b;border-left-color: #ffffff;height: 46.8px;" placeholder="Куда" required=""><button class="btn btn-primary" type="button" style="background: #ffffff;border-top-right-radius: 16px;border-bottom-right-radius: 16px;border-top-color: #14142b;border-right-color: #14142b;border-bottom-color: #14142b;border-left-color: #ffffff;height: 46.8px;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" style="width: 24px;height: 24px;color: #A0A3BD;">
                                    <path d="M6.2253 4.81108C5.83477 4.42056 5.20161 4.42056 4.81108 4.81108C4.42056 5.20161 4.42056 5.83477 4.81108 6.2253L10.5858 12L4.81114 17.7747C4.42062 18.1652 4.42062 18.7984 4.81114 19.1889C5.20167 19.5794 5.83483 19.5794 6.22535 19.1889L12 13.4142L17.7747 19.1889C18.1652 19.5794 18.7984 19.5794 19.1889 19.1889C19.5794 18.7984 19.5794 18.1652 19.1889 17.7747L13.4142 12L19.189 6.2253C19.5795 5.83477 19.5795 5.20161 19.189 4.81108C18.7985 4.42056 18.1653 4.42056 17.7748 4.81108L12 10.5858L6.2253 4.81108Z" fill="currentColor"></path>
                                </svg> </button></div><input class="form-control" type="date" required="" style="width: 325px;height: 46.8px;margin-top: 20px;border-color: #14142b;border-bottom-color: #14142b;padding-right: 30px;padding-left: 107px;font-family: Poppins, sans-serif;"><button class="btn btn-primary d-xxl-flex justify-content-xxl-center align-items-xxl-center" type="submit" style="--bs-primary: #5f2eea;--bs-primary-rgb: 95,46,234;width: 200px;height: 65px;margin-left: 0px;background: #5f2eea;border-radius: 16px;margin-top: 40px;">Найти</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
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