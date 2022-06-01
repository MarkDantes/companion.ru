<?php
require "db.php";
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
                <form class="d-flex flex-row align-content-center flex-wrap align-items-sm-center align-items-md-center align-items-lg-center justify-content-xxl-center p-3 p-xl-4"
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
                    <div class="input-group justify-content-center align-items-center align-content-center flex-wrap m-auto"
                         style="--bs-primary: #ffffff;--bs-primary-rgb: 255,255,255;width: 300px;height: 55px;margin: 0px;margin-top: 0px;margin-bottom: 0px;font-family: Poppins, sans-serif;margin-left: 0px;">
                        <span class="input-group-text"
                              style="background: #ffffff;border-top-color: #14142b;border-bottom-color: #14142b;border-left-color: #14142b;height: 46.8px;"><i
                                    class="material-icons"
                                    style="width: 24px;height: 24px;">location_on</i></span><input class="form-control"
                                                                                                   type="text"
                                                                                                   style="border-top-color: #14142b;border-right-color: #ffffff;border-bottom-color: #14142b;border-left-color: #ffffff;height: 46.8px;"
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
                    <input class="form-control d-xxl-flex flex-wrap m-auto" type="date" required=""
                           style="width: 300px;height: 55px;margin-top: 0px;border-color: #14142b;border-bottom-color: #14142b;padding-right: 30px;padding-left: 31px;font-family: Poppins, sans-serif;margin-bottom: 0px;margin-right: 10px;margin-left: 0px;">
                    <button class="btn btn-primary d-flex d-xxl-flex justify-content-center align-items-center m-auto justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-xxl-center align-items-xxl-center"
                            type="submit"
                            style="--bs-primary: #5f2eea;--bs-primary-rgb: 95,46,234;width: 200px;height: 50px;background: #5f2eea;border-radius: 16px;margin: -33px;">
                        Найти
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- -->
    <div class="container">
        <div class="row d-md-flex justify-content-md-center">
            <div class="col-lg-8 col-xl-9 col-xxl-9 d-flex flex-column">
                <div class="d-flex flex-row justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center justify-content-xxl-center align-items-xxl-center"
                     style="box-shadow: 5px 5px 2px rgba(0,0,0,0.25);border-radius: 32px;font-family: Poppins, sans-serif;height: 115px;background: #ffffff;">
                    <div class="text-center d-flex flex-column flex-wrap align-items-sm-center justify-content-xl-center justify-content-xxl-start"
                         style="margin-bottom: 0px;margin-top: 0px;margin-right: 40px;"><img
                                class="rounded-circle d-flex d-xl-flex" src="assets/img/avatars/avatar.jpg" width="60px"
                                height="60px"
                                style="background-color: rgb(255,255,255);padding: 2px;width: 48px;height: 48px;margin: 0px;margin-left: 0px;">
                        <p style="font-size: 12px;margin: 0px;margin-top: 0px;margin-left: 20px;"></p><input
                                class="d-flex d-xl-flex flex-shrink-1" type="text"
                                style="border-style: none;color: #6e7191;font-family: Poppins, sans-serif;width: 110px;height: 30px;"
                                placeholder="Имя Фамилия" autocomplete="on" inputmode="latin-name" readonly="">
                    </div>
                    <div class="d-flex d-xxl-flex flex-row flex-wrap align-items-xxl-center"
                         style="margin: 10px;margin-top: 10px;font-family: Poppins, sans-serif;margin-bottom: 0px;margin-right: 40px;">
                        <input type="text" value="Вятская 114" autocomplete="on" readonly=""
                               style="border-style: none;font-weight: bold;width: 123.6px;"><i
                                class="la la-long-arrow-right"
                                style="margin-left: 9px;margin-right: 10px;width: 24px;height: 24px;color: #5f2eea;margin-top: 6px;"></i><input
                                class="flex-shrink-1" type="text" value="Новолесная 1"
                                style="border-style: none;font-weight: bold;width: 128.6px;" readonly=""></div>
                    <div class="d-flex flex-column" style="margin-right: 30px;"><input class="d-flex d-xxl-flex"
                                                                                       type="text" readonly=""
                                                                                       style="color: #14142b;width: 77px;height: 30px;font-size: 24px;font-weight: bold;margin-bottom: 3px;border-style: none;"
                                                                                       value="355 ₽"><input
                                class="d-flex" type="text" readonly=""
                                style="color: #6e7191;height: 30px;width: 112px;font-family: Poppins, sans-serif;font-size: 18px;font-weight: bold;border-style: none;"
                                value="23 Февраля"></div>
                    <button class="btn btn-primary d-flex justify-content-center align-items-center justify-content-xxl-center align-items-xxl-center"
                            type="button"
                            style="border-width: 3px;border-color: #5f2eea;background: #ffffff;width: 55px;height: 55px;border-radius: 80px;color: #5f2eea;font-size: 25px;padding: 0px;padding-top: 0px;"
                            data-bs-target="#modal-3" data-bs-toggle="modal">&gt;
                    </button>
                    <!--Modal window with information about trip for history-->
                    <div class="modal fade" role="dialog" tabindex="-1" id="modal-1">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title"
                                        style="color: #14142b;font-size: 32px;font-weight: bold;font-family: Poppins, sans-serif;">
                                        Детали поездки</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body d-flex d-xxl-flex flex-column align-items-xxl-center">
                                    <iframe allowfullscreen="" frameborder="0" loading="lazy"
                                            src="https://www.google.com/maps/embed/v1/directions?key=AIzaSyDEFhtUdMNKUqHGRJ3fy5Rk4Zj1TAmV6CU&amp;origin=%D0%92%D1%8F%D1%82%D1%81%D0%BA%D0%B0%D1%8F+114&amp;destination=%D0%9D%D0%BE%D0%B2%D0%BE%D0%BB%D0%B5%D1%81%D0%BD%D0%B0%D1%8F+1&amp;zoom=12"
                                            width="100%" height="400" style="border-radius: 32px;"></iframe>
                                    <div class="row d-flex flex-row justify-content-xl-center" style="margin: 0px;">
                                        <div class="col-md-12 col-lg-6 col-xl-5 col-xxl-7 offset-xl-0 offset-xxl-0 d-flex d-xxl-flex flex-column align-items-center align-items-sm-center align-items-md-center align-items-xxl-center"
                                             style="margin-bottom: 10px;">
                                            <div class="d-flex d-xxl-flex flex-row align-items-xxl-center"
                                                 style="margin: 10px;margin-top: 10px;font-family: Poppins, sans-serif;margin-bottom: 0px;margin-right: 0px;">
                                                <input type="text" value="Вятская 114" autocomplete="on" readonly=""
                                                       style="border-style: none;font-weight: bold;width: 123.6px;"><i
                                                        class="la la-long-arrow-right"
                                                        style="margin-left: 9px;margin-right: 10px;width: 24px;height: 24px;color: #5f2eea;margin-top: 6px;"></i><input
                                                        class="flex-shrink-1" type="text" value="Новолесная 1"
                                                        style="border-style: none;font-weight: bold;width: 128.6px;"
                                                        readonly=""></div>
                                            <div class="d-flex flex-column align-items-sm-center align-items-md-center align-items-lg-center align-items-xl-center align-items-xxl-center"
                                                 style="margin-top: 10px;margin-right: 0px;">
                                                <div class="text-center d-flex flex-row align-items-sm-center align-items-md-center justify-content-xl-start justify-content-xxl-start"
                                                     style="margin-bottom: 0px;margin-top: 0px;margin-right: 0px;"><img
                                                            class="rounded-circle d-flex d-xl-flex"
                                                            src="assets/img/avatars/avatar.jpg" width="60px"
                                                            height="60px"
                                                            style="background-color: rgb(255,255,255);padding: 2px;width: 48px;height: 48px;margin: 0px;margin-left: 0px;">
                                                    <p style="font-size: 12px;margin: 0px;margin-top: 0px;margin-left: 20px;"></p>
                                                    <input class="d-flex d-xl-flex flex-shrink-1" type="text"
                                                           style="border-style: none;color: #6e7191;font-family: Poppins, sans-serif;width: 150px;height: 30px;"
                                                           placeholder="Имя Фамилия" autocomplete="on"
                                                           inputmode="latin-name" readonly="">
                                                </div>
                                                <div class="input-group d-flex d-xl-flex align-content-center"
                                                     style="--bs-primary: #ffffff;--bs-primary-rgb: 255,255,255;width: 325px;height: 57px;margin-top: 30px;margin-bottom: 0px;background: rgba(239,240,246,0);border-color: rgb(45, 45, 45);"><span
                                                            class="d-flex d-xl-flex flex-row align-items-lg-center justify-content-xl-center align-items-xl-center input-group-text"
                                                            style="background: #ffffff;height: 70px;width: 45px;padding-top: 16.6px;padding-right: 0px;padding-left: 25px;border-width: 2px;border-color: #5f2eea;border-right-style: none;"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="1em"
                                                                height="1em" viewBox="0 0 24 24" stroke-width="2"
                                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                                class="icon icon-tabler icon-tabler-car d-lg-flex justify-content-lg-center align-items-lg-end"
                                                                style="width: 24px;height: 24px;margin-left: -7px;padding-top: 0px;padding-right: 0px;">
                                                                <path stroke="none" d="M0 0h24v24H0z"
                                                                      fill="none"></path>
                                                                <circle cx="7" cy="17" r="2"></circle>
                                                                <circle cx="17" cy="17" r="2"></circle>
                                                                <path d="M5 17h-2v-6l2-5h9l4 5h1a2 2 0 0 1 2 2v4h-2m-4 0h-6m-6 -6h15m-6 0v-5"></path>
                                                            </svg></span><input class="form-control d-lg-flex"
                                                                                type="text"
                                                                                style="height: 70px;background: #ffffff;border-width: 2px;border-color: #5f2eea;border-top-color: #5F2EEA;border-right-style: none;border-right-color: rgb(255,255,255);border-bottom-color: #5F2EEA;border-left-style: none;border-left-color: rgba(255,255,255,0);"
                                                                                placeholder="Машина" readonly=""
                                                                                autocomplete="on">
                                                    <button class="btn btn-primary disabled d-xl-flex align-items-xl-center"
                                                            type="button"
                                                            style="background: #ffffff;border-top-right-radius: 16px;border-bottom-right-radius: 16px;height: 70px;padding: 0px;margin-left: 0px;width: 47px;border-width: 2px;border-color: #5f2eea;border-top-color: #5F2EEA;border-right-color: #5F2EEA;border-bottom-color: #5F2EEA;border-left-style: none;border-left-color: #ffffff;"
                                                            disabled=""></button>
                                                </div>
                                                <div class="input-group d-flex d-xl-flex align-content-center"
                                                     style="--bs-primary: #ffffff;--bs-primary-rgb: 255,255,255;width: 325px;height: 57px;margin-top: 30px;margin-bottom: 0px;background: rgba(239,240,246,0);">
                                                    <span class="d-flex d-xl-flex flex-row justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-xl-center align-items-xl-center input-group-text"
                                                          style="background: #eff0f6;height: 70px;width: 45px;padding-top: 16.6px;padding-right: 13px;padding-left: 25px;border-style: none;border-top-color: #14142b;border-bottom-color: #14142b;border-left-color: #14142b;"><i
                                                                class="fas fa-mobile-alt d-lg-flex align-items-lg-center"
                                                                style="width: 24px;height: 24px;"></i></span><input
                                                            class="form-control" type="number"
                                                            style="height: 70px;background: #eff0f6;border-style: none;border-top-color: #14142b;border-right-color: #ffffff;border-bottom-color: #14142b;border-left-color: #ffffff;"
                                                            placeholder="Телефон" readonly="">
                                                    <button class="btn btn-primary disabled d-xl-flex align-items-xl-center"
                                                            type="button"
                                                            style="background: #eff0f6;border-top-right-radius: 16px;border-bottom-right-radius: 16px;height: 70px;padding: 0px;margin-left: 0px;width: 47px;border-style: none;border-top-color: #14142b;border-right-color: #14142b;border-bottom-color: #14142b;border-left-color: #ffffff;"
                                                            disabled=""></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-xl-6 col-xxl-5 d-flex d-xl-flex d-xxl-flex flex-column align-items-center align-items-xxl-center">
                                            <div class="d-flex flex-column align-items-center align-items-sm-center align-items-md-center align-items-lg-center"
                                                 style="margin-top: 10px;"><input class="d-flex d-xxl-flex" type="text"
                                                                                  readonly=""
                                                                                  style="color: #14142b;width: 77px;height: 30px;font-size: 24px;font-weight: bold;margin-bottom: 3px;border-style: none;"
                                                                                  value="355 ₽"><input class="d-flex"
                                                                                                       type="text"
                                                                                                       readonly=""
                                                                                                       style="color: #6e7191;height: 30px;width: 191px;font-family: Poppins, sans-serif;font-size: 18px;font-weight: bold;border-style: none;margin-left: 20px;"
                                                                                                       value="15:30, 23 Февраля">
                                            </div>
                                            <div class="d-flex flex-column align-items-center align-items-sm-center align-items-md-center align-items-lg-center align-items-xl-center justify-content-xxl-center align-items-xxl-center"
                                                 style="background: #eff0f6;padding: 15px;padding-bottom: 15px;padding-left: 20px;border-radius: 32px;">
                                                <input type="text" readonly="" autocomplete="on"
                                                       style="border-style: none;background: rgba(255,255,255,0);margin-top: 0px;width: 170.6px;color: #6f6c90;font-weight: bold;"
                                                       value="Можно с животными"><input type="text"
                                                                                        value="Сзади 2 места"
                                                                                        readonly="" autocomplete="on"
                                                                                        style="border-style: none;background: rgba(255,255,255,0);margin-top: 5px;width: 170.6px;color: #6f6c90;font-weight: bold;"><input
                                                        type="text" value="Есть детское кресло" readonly=""
                                                        style="border-style: none;background: rgba(255,255,255,0);margin-top: 5px;width: 170.6px;color: #6f6c90;font-weight: bold;"
                                                        autocomplete="on"><input type="text" value="Курить нельзя"
                                                                                 readonly="" autocomplete="on"
                                                                                 style="border-style: none;background: rgba(255,255,255,0);margin-top: 5px;width: 170.6px;color: #6f6c90;font-weight: bold;">
                                                <p style="margin-bottom: 0px;margin-top: 12px;margin-right: 124px;font-weight: bold;font-family: Poppins, sans-serif;"></p>
                                                <div class="input-group d-flex d-xl-flex flex-row align-content-center justify-content-xxl-center align-items-xxl-center"
                                                     style="--bs-primary: #ffffff;--bs-primary-rgb: 255,255,255;margin-top: 0px;margin-bottom: 0px;background: rgba(239,240,246,0);height: 44px;width: 202.575px;">
                                                    <span class="d-flex d-xl-flex flex-row justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-xl-center align-items-xl-center justify-content-xxl-center input-group-text"
                                                          style="background: #eff0f6;padding: 9.6px 13px 9.6px;border-style: none;border-top-color: #14142b;border-bottom-color: #14142b;border-left-color: #14142b;width: 35px;"><i
                                                                class="la la-user d-lg-flex align-items-lg-center justify-content-xxl-center"
                                                                style="height: 24px;font-weight: bold;width: 24px;padding-left: 7px;padding-top: 2px;"></i></span><input
                                                            class="form-control d-flex d-xxl-flex flex-wrap justify-content-xxl-start align-items-xxl-center"
                                                            type="text"
                                                            style="background: #eff0f6;border-style: none;border-top-color: #14142b;border-right-color: #ffffff;border-bottom-color: #14142b;border-left-color: #ffffff;padding-right: 0px;padding-bottom: 7.6px;padding-top: 8.6px;color: #6f6c90;font-weight: bold;width: 107px;"
                                                            readonly="" value="Занято: 2/3 "><a
                                                            class="btn btn-primary d-xl-flex align-items-xl-center justify-content-xxl-center"
                                                            role="button"
                                                            style="background: #eff0f6;border-top-right-radius: 16px;border-bottom-right-radius: 16px;height: 24px;padding: 0px;margin-left: 0px;width: 24px;border-style: none;border-top-color: #14142b;border-right-color: #14142b;border-bottom-color: #14142b;border-left-color: #ffffff;font-weight: bold;"
                                                            data-bs-target="#modal-2" data-bs-toggle="modal"
                                                            href="#modal-2"><i class="la la-info-circle"
                                                                               style="color: #14142b;font-weight: bold;"></i>
                                                    </a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer d-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center justify-content-xxl-center align-items-xxl-center">
                                    <button class="btn btn-primary" type="button"
                                            style="background: #5f2eea;width: 200px;height: 55px;">Удалить
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Modal window with information about passengers on the trip-->
                    <div class="modal fade" role="dialog" tabindex="-1" id="modal-2">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Пассажиры</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="text-center d-flex flex-row align-items-sm-center align-items-md-center justify-content-xl-start justify-content-xxl-start"
                                         style="margin-bottom: 0px;margin-top: 0px;margin-right: 0px;"><img
                                                class="rounded-circle d-flex d-xl-flex"
                                                src="assets/img/avatars/avatar.jpg" width="60px" height="60px"
                                                style="background-color: rgb(255,255,255);padding: 2px;width: 48px;height: 48px;margin: 0px;margin-left: 0px;">
                                        <p style="font-size: 12px;margin: 0px;margin-top: 0px;margin-left: 20px;"></p>
                                        <input class="d-flex d-xl-flex flex-shrink-1" type="text"
                                               style="border-style: none;color: #6e7191;font-family: Poppins, sans-serif;width: 150px;height: 30px;"
                                               placeholder="Имя Фамилия" autocomplete="on" inputmode="latin-name"
                                               readonly="">
                                    </div>
                                </div>
                                <div class="modal-footer"></div>
                            </div>
                        </div>
                    </div>

                    <!--Modal window with information about trip for booking-->
                    <div class="modal fade" role="dialog" tabindex="-1" id="modal-3">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title"
                                        style="color: #14142b;font-size: 32px;font-weight: bold;font-family: Poppins, sans-serif;">
                                        Детали поездки</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body d-flex d-xxl-flex flex-column align-items-xxl-center">
                                    <iframe allowfullscreen="" frameborder="0" loading="lazy"
                                            src="https://www.google.com/maps/embed/v1/directions?key=AIzaSyDEFhtUdMNKUqHGRJ3fy5Rk4Zj1TAmV6CU&amp;origin=%D0%92%D1%8F%D1%82%D1%81%D0%BA%D0%B0%D1%8F+114&amp;destination=%D0%9D%D0%BE%D0%B2%D0%BE%D0%BB%D0%B5%D1%81%D0%BD%D0%B0%D1%8F+1&amp;zoom=12"
                                            width="100%" height="400" style="border-radius: 32px;"></iframe>
                                    <div class="row d-flex flex-row justify-content-xl-center" style="margin: 0px;">
                                        <div class="col-md-12 col-lg-6 col-xl-5 col-xxl-7 offset-xl-0 offset-xxl-0 d-flex d-xxl-flex flex-column align-items-center align-items-sm-center align-items-md-center align-items-xxl-center"
                                             style="margin-bottom: 10px;">
                                            <div class="d-flex d-xxl-flex flex-row align-items-xxl-center"
                                                 style="margin: 10px;margin-top: 10px;font-family: Poppins, sans-serif;margin-bottom: 0px;margin-right: 0px;">
                                                <input type="text" value="Вятская 114" autocomplete="on" readonly=""
                                                       style="border-style: none;font-weight: bold;width: 123.6px;"><i
                                                        class="la la-long-arrow-right"
                                                        style="margin-left: 9px;margin-right: 10px;width: 24px;height: 24px;color: #5f2eea;margin-top: 6px;"></i><input
                                                        class="flex-shrink-1" type="text" value="Новолесная 1"
                                                        style="border-style: none;font-weight: bold;width: 128.6px;"
                                                        readonly=""></div>
                                            <div class="d-flex flex-column align-items-sm-center align-items-md-center align-items-lg-center align-items-xl-center align-items-xxl-center"
                                                 style="margin-top: 10px;margin-right: 0px;">
                                                <div class="text-center d-flex flex-row align-items-sm-center align-items-md-center justify-content-xl-start justify-content-xxl-start"
                                                     style="margin-bottom: 0px;margin-top: 0px;margin-right: 0px;"><img
                                                            class="rounded-circle d-flex d-xl-flex"
                                                            src="assets/img/avatars/avatar.jpg" width="60px"
                                                            height="60px"
                                                            style="background-color: rgb(255,255,255);padding: 2px;width: 48px;height: 48px;margin: 0px;margin-left: 0px;">
                                                    <p style="font-size: 12px;margin: 0px;margin-top: 0px;margin-left: 20px;"></p>
                                                    <input class="d-flex d-xl-flex flex-shrink-1" type="text"
                                                           style="border-style: none;color: #6e7191;font-family: Poppins, sans-serif;width: 150px;height: 30px;"
                                                           placeholder="Имя Фамилия" autocomplete="on"
                                                           inputmode="latin-name" readonly="">
                                                </div>
                                                <div class="input-group d-flex d-xl-flex align-content-center"
                                                     style="--bs-primary: #ffffff;--bs-primary-rgb: 255,255,255;width: 325px;height: 57px;margin-top: 30px;margin-bottom: 0px;background: rgba(239,240,246,0);border-color: rgb(45, 45, 45);"><span
                                                            class="d-flex d-xl-flex flex-row align-items-lg-center justify-content-xl-center align-items-xl-center input-group-text"
                                                            style="background: #ffffff;height: 70px;width: 45px;padding-top: 16.6px;padding-right: 0px;padding-left: 25px;border-width: 2px;border-color: #5f2eea;border-right-style: none;"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="1em"
                                                                height="1em" viewBox="0 0 24 24" stroke-width="2"
                                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                                class="icon icon-tabler icon-tabler-car d-lg-flex justify-content-lg-center align-items-lg-end"
                                                                style="width: 24px;height: 24px;margin-left: -7px;padding-top: 0px;padding-right: 0px;">
                                                                <path stroke="none" d="M0 0h24v24H0z"
                                                                      fill="none"></path>
                                                                <circle cx="7" cy="17" r="2"></circle>
                                                                <circle cx="17" cy="17" r="2"></circle>
                                                                <path d="M5 17h-2v-6l2-5h9l4 5h1a2 2 0 0 1 2 2v4h-2m-4 0h-6m-6 -6h15m-6 0v-5"></path>
                                                            </svg></span><input class="form-control d-lg-flex"
                                                                                type="text"
                                                                                style="height: 70px;background: #ffffff;border-width: 2px;border-color: #5f2eea;border-top-color: #5F2EEA;border-right-style: none;border-right-color: rgb(255,255,255);border-bottom-color: #5F2EEA;border-left-style: none;border-left-color: rgba(255,255,255,0);"
                                                                                placeholder="Машина" readonly=""
                                                                                autocomplete="on">
                                                    <button class="btn btn-primary disabled d-xl-flex align-items-xl-center"
                                                            type="button"
                                                            style="background: #ffffff;border-top-right-radius: 16px;border-bottom-right-radius: 16px;height: 70px;padding: 0px;margin-left: 0px;width: 47px;border-width: 2px;border-color: #5f2eea;border-top-color: #5F2EEA;border-right-color: #5F2EEA;border-bottom-color: #5F2EEA;border-left-style: none;border-left-color: #ffffff;"
                                                            disabled=""></button>
                                                </div>
                                                <div class="input-group d-flex d-xl-flex align-content-center"
                                                     style="--bs-primary: #ffffff;--bs-primary-rgb: 255,255,255;width: 325px;height: 57px;margin-top: 30px;margin-bottom: 0px;background: rgba(239,240,246,0);">
                                                    <span class="d-flex d-xl-flex flex-row justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-xl-center align-items-xl-center input-group-text"
                                                          style="background: #eff0f6;height: 70px;width: 45px;padding-top: 16.6px;padding-right: 13px;padding-left: 25px;border-style: none;border-top-color: #14142b;border-bottom-color: #14142b;border-left-color: #14142b;"><i
                                                                class="fas fa-mobile-alt d-lg-flex align-items-lg-center"
                                                                style="width: 24px;height: 24px;"></i></span><input
                                                            class="form-control" type="number"
                                                            style="height: 70px;background: #eff0f6;border-style: none;border-top-color: #14142b;border-right-color: #ffffff;border-bottom-color: #14142b;border-left-color: #ffffff;"
                                                            placeholder="Телефон" readonly="">
                                                    <button class="btn btn-primary disabled d-xl-flex align-items-xl-center"
                                                            type="button"
                                                            style="background: #eff0f6;border-top-right-radius: 16px;border-bottom-right-radius: 16px;height: 70px;padding: 0px;margin-left: 0px;width: 47px;border-style: none;border-top-color: #14142b;border-right-color: #14142b;border-bottom-color: #14142b;border-left-color: #ffffff;"
                                                            disabled=""></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-xl-6 col-xxl-5 d-flex d-xl-flex d-xxl-flex flex-column align-items-center align-items-xxl-center">
                                            <div class="d-flex flex-column align-items-center align-items-sm-center align-items-md-center align-items-lg-center"
                                                 style="margin-top: 10px;"><input class="d-flex d-xxl-flex" type="text"
                                                                                  readonly=""
                                                                                  style="color: #14142b;width: 77px;height: 30px;font-size: 24px;font-weight: bold;margin-bottom: 3px;border-style: none;"
                                                                                  value="355 ₽"><input class="d-flex"
                                                                                                       type="text"
                                                                                                       readonly=""
                                                                                                       style="color: #6e7191;height: 30px;width: 191px;font-family: Poppins, sans-serif;font-size: 18px;font-weight: bold;border-style: none;margin-left: 20px;"
                                                                                                       value="15:30, 23 Февраля">
                                            </div>
                                            <div class="d-flex flex-column align-items-center align-items-sm-center align-items-md-center align-items-lg-center align-items-xl-center justify-content-xxl-center align-items-xxl-center"
                                                 style="background: #eff0f6;padding: 15px;padding-bottom: 15px;padding-left: 20px;border-radius: 32px;">
                                                <input type="text" readonly="" autocomplete="on"
                                                       style="border-style: none;background: rgba(255,255,255,0);margin-top: 0px;width: 170.6px;color: #6f6c90;font-weight: bold;"
                                                       value="Можно с животными"><input type="text"
                                                                                        value="Сзади 2 места"
                                                                                        readonly="" autocomplete="on"
                                                                                        style="border-style: none;background: rgba(255,255,255,0);margin-top: 5px;width: 170.6px;color: #6f6c90;font-weight: bold;"><input
                                                        type="text" value="Есть детское кресло" readonly=""
                                                        style="border-style: none;background: rgba(255,255,255,0);margin-top: 5px;width: 170.6px;color: #6f6c90;font-weight: bold;"
                                                        autocomplete="on"><input type="text" value="Курить нельзя"
                                                                                 readonly="" autocomplete="on"
                                                                                 style="border-style: none;background: rgba(255,255,255,0);margin-top: 5px;width: 170.6px;color: #6f6c90;font-weight: bold;">
                                                <p style="margin-bottom: 0px;margin-top: 12px;margin-right: 124px;font-weight: bold;font-family: Poppins, sans-serif;"></p>
                                                <div class="input-group d-flex d-xl-flex flex-row align-content-center justify-content-xxl-center align-items-xxl-center"
                                                     style="--bs-primary: #ffffff;--bs-primary-rgb: 255,255,255;margin-top: 0px;margin-bottom: 0px;background: rgba(239,240,246,0);height: 44px;width: 202.575px;">
                                                    <span class="d-flex d-xl-flex flex-row justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-xl-center align-items-xl-center justify-content-xxl-center input-group-text"
                                                          style="background: #eff0f6;padding: 9.6px 13px 9.6px;border-style: none;border-top-color: #14142b;border-bottom-color: #14142b;border-left-color: #14142b;width: 35px;"><i
                                                                class="la la-user d-lg-flex align-items-lg-center justify-content-xxl-center"
                                                                style="height: 24px;font-weight: bold;width: 24px;padding-left: 7px;padding-top: 2px;"></i></span><input
                                                            class="form-control d-flex d-xxl-flex flex-wrap justify-content-xxl-start align-items-xxl-center"
                                                            type="text"
                                                            style="background: #eff0f6;border-style: none;border-top-color: #14142b;border-right-color: #ffffff;border-bottom-color: #14142b;border-left-color: #ffffff;padding-right: 0px;padding-bottom: 7.6px;padding-top: 8.6px;color: #6f6c90;font-weight: bold;width: 107px;"
                                                            readonly="" value="Занято: 2/3 "><a
                                                            class="btn btn-primary d-xl-flex align-items-xl-center justify-content-xxl-center"
                                                            role="button"
                                                            style="background: #eff0f6;border-top-right-radius: 16px;border-bottom-right-radius: 16px;height: 24px;padding: 0px;margin-left: 0px;width: 24px;border-style: none;border-top-color: #14142b;border-right-color: #14142b;border-bottom-color: #14142b;border-left-color: #ffffff;font-weight: bold;"
                                                            data-bs-target="#modal-2" data-bs-toggle="modal"
                                                            href="#modal-2"><i class="la la-info-circle"
                                                                               style="color: #14142b;font-weight: bold;"></i>
                                                    </a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer d-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center justify-content-xxl-center align-items-xxl-center">
                                    <button class="btn btn-primary" type="button"
                                            style="background: #5f2eea;width: 200px;height: 55px;">Забронировать
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-lg-4 col-xl-3 col-xxl-3 d-flex justify-content-center flex-wrap justify-content-sm-center">
                <div class="d-flex flex-column justify-content-xxl-center align-items-xxl-center"
                     style="margin-top: 0px;margin-bottom: 30px;width: 300px;">
                    <div class="d-flex d-xxl-flex flex-row flex-grow-0 align-items-center justify-content-xxl-center align-items-xxl-center"
                         style="width: 285px;height: 65px;margin-top: 30px;margin-left: 0px;background: #eff0f6;border-radius: 16px;--bs-primary: #5f2eea;--bs-primary-rgb: 95,46,234;">
                        <label class="form-label d-flex d-xxl-flex"
                               style="margin-right: 15px;font-family: Poppins, sans-serif;font-size: 18px;color: #6e7191;font-weight: bold;margin-left: 10px;margin-top: 5px;">Можно
                            с животными</label><label class="switch">
                            <input type="checkbox">
                            <span class="slider round"></span>
                        </label></div>

                    <div class="d-flex d-xxl-flex align-items-center justify-content-xxl-center align-items-xxl-center"
                         style="width: 285px;height: 65px;margin-top: 30px;margin-left: 0px;background: #eff0f6;border-radius: 16px;--bs-primary: #5f2eea;--bs-primary-rgb: 95,46,234;">
                        <label class="form-label d-xxl-flex"
                               style="margin-right: 73px;font-family: Poppins, sans-serif;font-size: 18px;color: #6e7191;font-weight: bold;margin-left: 10px;margin-top: 5px;">Сзади
                            2 места</label><label class="switch">
                            <input type="checkbox">
                            <span class="slider round"></span>
                        </label></div>

                    <div class="d-flex d-xxl-flex align-items-center justify-content-xxl-center align-items-xxl-center"
                         style="width: 285px;height: 65px;margin-top: 30px;margin-left: 0px;background: #eff0f6;border-radius: 16px;--bs-primary: #5f2eea;--bs-primary-rgb: 95,46,234;">
                        <label class="form-label d-xxl-flex"
                               style="margin-right: 61px;font-family: Poppins, sans-serif;font-size: 18px;color: #6e7191;font-weight: bold;margin-left: 10px;margin-top: 5px;">Детское
                            кресло</label><label class="switch">
                            <input type="checkbox">
                            <span class="slider round"></span>
                        </label></div>

                    <div class="d-flex d-xxl-flex align-items-center justify-content-xxl-center align-items-xxl-center"
                         style="width: 285px;height: 65px;margin-top: 30px;margin-left: 0px;background: #eff0f6;border-radius: 16px;--bs-primary: #5f2eea;--bs-primary-rgb: 95,46,234;">
                        <label class="form-label d-xxl-flex"
                               style="margin-right: 39px;font-family: Poppins, sans-serif;font-size: 18px;color: #6e7191;font-weight: bold;margin-left: 10px;margin-top: 5px;">Курение
                            в салоне</label><label class="switch">
                            <input type="checkbox">
                            <span class="slider round"></span>
                        </label></div>

                </div>
                <div class="d-flex flex-row" style="margin-top: 5px;">
                    <div class="form-check d-flex align-items-center justify-content-xl-start align-items-xl-center"
                         style="margin-right: 5px;background: #eff0f6;width: 152px;height: 60px;font-family: Poppins, sans-serif;border-radius: 16px;margin-bottom: 0px;">
                        <input class="form-check-input" type="radio" id="formCheck-1"
                               style="margin-left: -5px;margin-right: 6px;margin-top: 0px;"><label
                                class="form-check-label" for="formCheck-1" style="color: #6e7191;font-weight: bold;">Женщина</label>
                    </div>
                    <div class="form-check d-flex align-items-center justify-content-xl-start align-items-xl-center"
                         style="margin-right: 0px;background: #eff0f6;width: 152px;height: 60px;font-family: Poppins, sans-serif;border-radius: 16px;margin-bottom: 0px;">
                        <input class="form-check-input" type="radio" id="formCheck-2"
                               style="margin-left: -5px;margin-right: 6px;margin-top: 0px;"><label
                                class="form-check-label" for="formCheck-2" style="color: #6e7191;font-weight: bold;">Мужчина</label>
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