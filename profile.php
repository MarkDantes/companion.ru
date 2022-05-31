<?php
require "db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Product - Companion</title>
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

<body style="--bs-body-bg: #f7f7fc;">
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
    <section class="py-5 mt-5" style="--bs-body-bg: #f7f7fc;background: #f7f7fc;">
        <div class="container py-5">
            <div class="row d-flex d-xl-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center align-items-xl-center">
                <div class="col-xl-11 offset-xl-0 d-flex d-xl-flex flex-column align-items-center align-items-sm-center align-items-xl-center" style="--bs-body-bg: #f7f7fc;background: #ffffff;width: 480px;height: 920px;border-radius: 32px;font-family: Poppins, sans-serif;box-shadow: 0px 8px 16px rgba(17,17,17,0.04);padding: 0px;">
                    <div class="d-flex justify-content-xl-center align-items-xl-start" style="height: 55px;margin-bottom: 19px;margin-top: 25px;background: rgba(54,162,177,0);--bs-body-font-weight: 900;font-family: Poppins, sans-serif;">
                        <div class="d-flex flex-column justify-content-xxl-end"><a href="profile.php" style="margin-left: 0px;margin-right: 100px;font-size: 32px;font-family: Poppins, sans-serif;transform-style: preserve-3d;font-weight: bold;color: #14142b;width: 150px;height: 50px;">Профиль</a>
                            <hr style="margin-top: 0px;width: 80px;height: 3px;color: #5f2eea;margin-bottom: 0px;margin-left: 34px;border-radius: 2px;">
                        </div>
                        <div class="d-flex flex-column justify-content-xxl-center align-items-xxl-start"><a href="history.php" style="font-size: 32px;transform-style: preserve-3d;font-weight: bold;color: #14142b;">История</a></div>
                    </div>
                    <form class="d-flex flex-column align-items-center align-items-xxl-center" data-bss-redirect-url="index.php">
                        <div class="text-center d-flex flex-row align-items-center align-items-sm-center align-items-md-center align-items-lg-center justify-content-xl-start align-items-xl-center" style="margin-bottom: 0px;margin-top: 0px;margin-right: 80px;"><img class="rounded-circle d-flex d-xl-flex" src="assets/img/avatars/avatar.jpg" width="60px" height="60px" style="background-color: rgb(255,255,255);padding: 2px;width: 48px;height: 48px;margin: 0px;margin-left: 0px;">
                            <p style="font-size: 12px;margin: 0px;margin-top: 0px;margin-left: 20px;"></p><input class="form-control d-flex d-xl-flex flex-shrink-1" type="text" style="border-style: none;color: #6e7191;font-family: Poppins, sans-serif;width: 150px;height: 30px;" placeholder="Имя Фамилия" autocomplete="on" inputmode="latin-name"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" style="margin-bottom: 7px;width: 24px;height: 24px;">
                                <path d="M15.2322 5.23223L18.7677 8.76777M16.7322 3.73223C17.7085 2.75592 19.2914 2.75592 20.2677 3.73223C21.244 4.70854 21.244 6.29146 20.2677 7.26777L6.5 21.0355H3V17.4644L16.7322 3.73223Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>
                        <div class="input-group d-flex d-xl-flex align-content-center" style="--bs-primary: #ffffff;--bs-primary-rgb: 255,255,255;width: 325px;height: 57px;margin-top: 30px;margin-bottom: 0px;background: rgba(239,240,246,0);"><span class="d-flex d-xl-flex flex-row justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-xl-center align-items-xl-center input-group-text" style="background: #eff0f6;height: 70px;width: 45px;padding-top: 16.6px;padding-right: 13px;padding-left: 25px;border-style: none;border-top-color: #14142b;border-bottom-color: #14142b;border-left-color: #14142b;"><i class="fas fa-mobile-alt d-lg-flex align-items-lg-center" style="width: 24px;height: 24px;"></i></span><input class="form-control" type="number" style="height: 70px;background: #eff0f6;border-style: none;border-top-color: #14142b;border-right-color: #ffffff;border-bottom-color: #14142b;border-left-color: #ffffff;" placeholder="Телефон" required=""><button class="btn btn-primary d-xl-flex align-items-xl-center" type="button" style="background: #eff0f6;border-top-right-radius: 16px;border-bottom-right-radius: 16px;height: 70px;padding: 0px;margin-left: 0px;width: 47px;border-style: none;border-top-color: #14142b;border-right-color: #14142b;border-bottom-color: #14142b;border-left-color: #ffffff;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" class="d-lg-flex align-items-lg-center" style="width: 24px;height: 24px;color: #14142b;margin-left: 9px;padding-right: 0px;">
                                    <path d="M15.2322 5.23223L18.7677 8.76777M16.7322 3.73223C17.7085 2.75592 19.2914 2.75592 20.2677 3.73223C21.244 4.70854 21.244 6.29146 20.2677 7.26777L6.5 21.0355H3V17.4644L16.7322 3.73223Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg> </button></div>
                        <div class="input-group d-flex d-xl-flex align-content-center" style="--bs-primary: #ffffff;--bs-primary-rgb: 255,255,255;width: 325px;height: 57px;margin-top: 30px;margin-bottom: 0px;background: rgba(239,240,246,0);"><span class="d-flex d-xl-flex flex-row justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-xl-center align-items-xl-center input-group-text" style="background: #eff0f6;height: 70px;width: 45px;padding-top: 16.6px;padding-right: 13px;padding-left: 25px;border-style: none;border-top-color: #14142b;border-bottom-color: #14142b;border-left-color: #14142b;"><i class="far fa-envelope d-flex align-items-center" style="width: 24px;height: 24px;"></i></span><input class="form-control" type="email" style="height: 70px;background: #eff0f6;border-style: none;border-top-color: #14142b;border-right-color: #ffffff;border-bottom-color: #14142b;border-left-color: #ffffff;" placeholder="Email" required=""><button class="btn btn-primary d-xl-flex align-items-xl-center" type="button" style="background: #eff0f6;border-top-right-radius: 16px;border-bottom-right-radius: 16px;height: 70px;padding: 0px;margin-left: 0px;width: 47px;border-style: none;border-top-color: #14142b;border-right-color: #14142b;border-bottom-color: #14142b;border-left-color: #ffffff;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" class="d-lg-flex align-items-lg-center" style="width: 24px;height: 24px;color: #14142b;margin-left: 9px;padding-right: 0px;">
                                    <path d="M15.2322 5.23223L18.7677 8.76777M16.7322 3.73223C17.7085 2.75592 19.2914 2.75592 20.2677 3.73223C21.244 4.70854 21.244 6.29146 20.2677 7.26777L6.5 21.0355H3V17.4644L16.7322 3.73223Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg> </button></div>
                        <div class="input-group d-flex d-xl-flex align-content-center" style="--bs-primary: #ffffff;--bs-primary-rgb: 255,255,255;width: 325px;height: 57px;margin-top: 30px;margin-bottom: 0px;background: rgba(239,240,246,0);border-color: rgb(45, 45, 45);"><span class="d-flex d-xl-flex flex-row align-items-lg-center justify-content-xl-center align-items-xl-center input-group-text" style="background: #ffffff;height: 70px;width: 45px;padding-top: 16.6px;padding-right: 0px;padding-left: 25px;border-width: 2px;border-color: #5f2eea;border-right-style: none;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-car d-lg-flex justify-content-lg-center align-items-lg-end" style="width: 24px;height: 24px;margin-left: -7px;padding-top: 0px;padding-right: 0px;">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="7" cy="17" r="2"></circle>
                                    <circle cx="17" cy="17" r="2"></circle>
                                    <path d="M5 17h-2v-6l2-5h9l4 5h1a2 2 0 0 1 2 2v4h-2m-4 0h-6m-6 -6h15m-6 0v-5"></path>
                                </svg></span><input class="form-control d-lg-flex" type="text" style="height: 70px;background: #ffffff;border-width: 2px;border-color: #5f2eea;border-top-color: #5F2EEA;border-right-style: none;border-right-color: rgb(255,255,255);border-bottom-color: #5F2EEA;border-left-style: none;border-left-color: rgba(255,255,255,0);" placeholder="Машина"><button class="btn btn-primary d-xl-flex align-items-xl-center" type="button" style="background: #ffffff;border-top-right-radius: 16px;border-bottom-right-radius: 16px;height: 70px;padding: 0px;margin-left: 0px;width: 47px;border-width: 2px;border-color: #5f2eea;border-top-color: #5F2EEA;border-right-color: #5F2EEA;border-bottom-color: #5F2EEA;border-left-style: none;border-left-color: #ffffff;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" class="d-lg-flex align-items-lg-center" style="width: 24px;height: 24px;color: #a0a3bd;margin-left: 9px;padding-right: 0px;">
                                    <path d="M6 18L18 6M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg> </button></div>
                        <div class="d-flex flex-row" style="margin-top: 30px;">
                            <div class="form-check d-flex align-items-center justify-content-xl-start align-items-xl-center" style="margin-right: 25px;background: #eff0f6;width: 152px;height: 60px;font-family: Poppins, sans-serif;border-radius: 16px;margin-bottom: 0px;"><input class="form-check-input" type="radio" id="formCheck-1" style="margin-left: -5px;margin-right: 6px;margin-top: 0px;"><label class="form-check-label" for="formCheck-1" style="color: #14142b;font-weight: bold;">Женщина</label></div>
                            <div class="form-check d-flex align-items-center justify-content-xl-start align-items-xl-center" style="margin-right: 0px;background: #eff0f6;width: 152px;height: 60px;font-family: Poppins, sans-serif;border-radius: 16px;margin-bottom: 0px;"><input class="form-check-input" type="radio" id="formCheck-2" style="margin-left: -5px;margin-right: 6px;margin-top: 0px;"><label class="form-check-label" for="formCheck-2" style="color: #14142b;font-weight: bold;">Мужчина</label></div>
                        </div>
                        <p style="margin-top: 30px;margin-bottom: 0px;margin-right: 180px;font-family: Poppins, sans-serif;font-weight: bold;color: #6e7191;">Изменить пароль</p>
                        <div class="input-group d-flex d-xl-flex align-content-center" style="--bs-primary: #ffffff;--bs-primary-rgb: 255,255,255;width: 325px;height: 57px;margin-top: 30px;margin-bottom: 0px;background: rgba(239,240,246,0);border-color: rgb(45, 45, 45);"><span class="d-flex d-xl-flex flex-row align-items-lg-center justify-content-xl-center align-items-xl-center input-group-text" style="background: #ffffff;height: 70px;width: 45px;padding-top: 16.6px;padding-right: 0px;padding-left: 25px;border-width: 2px;border-color: #5f2eea;border-right-style: none;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-eye d-lg-flex justify-content-lg-center align-items-lg-end" style="width: 24px;height: 24px;margin-left: -7px;padding-top: 0px;padding-right: 0px;">
                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path>
                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"></path>
                                </svg></span><input class="form-control" type="password" style="height: 70px;background: #ffffff;border-width: 2px;border-color: #5f2eea;border-top-color: #5F2EEA;border-right-style: none;border-right-color: rgb(255,255,255);border-bottom-color: #5F2EEA;border-left-style: none;border-left-color: rgba(255,255,255,0);" placeholder="Пароль"><button class="btn btn-primary d-flex d-sm-flex d-md-flex d-xl-flex align-items-center align-items-sm-center align-items-md-center align-items-xl-center" type="button" style="background: #ffffff;border-top-right-radius: 16px;border-bottom-right-radius: 16px;height: 70px;padding: 0px;margin-left: 0px;width: 47px;border-width: 2px;border-color: #5f2eea;border-top-color: #5F2EEA;border-right-color: #5F2EEA;border-bottom-color: #5F2EEA;border-left-style: none;border-left-color: #ffffff;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" class="d-lg-flex align-items-lg-center" style="width: 24px;height: 24px;color: #a0a3bd;margin-left: 9px;padding-right: 0px;">
                                    <path d="M6 18L18 6M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg> </button></div>
                        <div class="input-group d-flex d-xl-flex align-content-center" style="--bs-primary: #ffffff;--bs-primary-rgb: 255,255,255;width: 325px;height: 57px;margin-top: 30px;margin-bottom: 0px;background: rgba(239,240,246,0);border-color: rgb(45, 45, 45);"><span class="d-flex d-xl-flex flex-row align-items-lg-center justify-content-xl-center align-items-xl-center input-group-text" style="background: #ffffff;height: 70px;width: 45px;padding-top: 16.6px;padding-right: 0px;padding-left: 25px;border-width: 2px;border-color: #5f2eea;border-right-style: none;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-eye d-lg-flex justify-content-lg-center align-items-lg-end" style="width: 24px;height: 24px;margin-left: -7px;padding-top: 0px;padding-right: 0px;">
                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path>
                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"></path>
                                </svg></span><input class="form-control" type="password" style="height: 70px;background: #ffffff;border-width: 2px;border-color: #5f2eea;border-top-color: #5F2EEA;border-right-style: none;border-right-color: rgb(255,255,255);border-bottom-color: #5F2EEA;border-left-style: none;border-left-color: rgba(255,255,255,0);" placeholder="Новый пароль"><button class="btn btn-primary d-flex d-sm-flex d-md-flex d-xl-flex align-items-center align-items-sm-center align-items-md-center align-items-xl-center" type="button" style="background: #ffffff;border-top-right-radius: 16px;border-bottom-right-radius: 16px;height: 70px;padding: 0px;margin-left: 0px;width: 47px;border-width: 2px;border-color: #5f2eea;border-top-color: #5F2EEA;border-right-color: #5F2EEA;border-bottom-color: #5F2EEA;border-left-style: none;border-left-color: #ffffff;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" class="d-lg-flex align-items-lg-center" style="width: 24px;height: 24px;color: #a0a3bd;margin-left: 9px;padding-right: 0px;">
                                    <path d="M6 18L18 6M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg> </button></div><button class="btn btn-primary" type="submit" style="margin-top: 50px;background: #5f2eea;width: 296px;height: 64px;border-radius: 40px;padding: 0px;padding-left: 0px;padding-bottom: 1px;">Сохранить</button>
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