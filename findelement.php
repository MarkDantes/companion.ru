<?php

function countPassenger($item){
    $passengers = array();
    $count =0;
    $passengers = R::findAll('passengers', 'tripid = ?', array($item->id));
    foreach ($passengers as $it)
    {
        $count++;
    }

    return $count;
}

function printPassengers($passengers)
{

}

function printElementFind($trip)
{
    foreach ($trip as $item) {
        echo '<div class="d-flex flex-row justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center justify-content-xxl-center align-items-xxl-center"
     style="margin-bottom: 30px;box-shadow: 5px 5px 2px rgba(0,0,0,0.25);border-radius: 32px;font-family: Poppins, sans-serif;height: 115px;background: #ffffff;">
    <div class="text-center d-flex flex-column flex-wrap align-items-sm-center justify-content-xl-center justify-content-xxl-start"
         style="margin-bottom: 0px;margin-top: 0px;margin-right: 40px;"><img class="rounded-circle d-flex d-xl-flex"
                                                                             src="assets/img/avatars/' . $item->avatar . '"
                                                                             width="60px" height="60px"
                                                                             style="background-color: rgb(255,255,255);padding: 2px;width: 48px;height: 48px;margin: 0px;margin-left: 0px;"/>
        <p style="font-size: 12px;margin: 0px;margin-top: 0px;margin-left: 20px;"></p><input
                class="d-flex d-xl-flex flex-shrink-1" type="text"
                style="border-style: none;color: #6e7191;font-family: Poppins, sans-serif;width: 110px;height: 30px;"
                placeholder="Имя Фамилия" value="' . $item->driver . '" autocomplete="on" inputmode="latin-name"
                readonly/>
    </div>
    <div class="d-flex d-xxl-flex flex-row flex-wrap align-items-xxl-center"
         style="margin: 10px;margin-top: 10px;font-family: Poppins, sans-serif;margin-bottom: 0px;margin-right: 40px;">
        <input type="text" value="' . $item->start . '" autocomplete="on" readonly
               style="border-style: none;font-weight: bold;width: 123.6px;"/><i class="la la-long-arrow-right"
                                                                                style="margin-left: 9px;margin-right: 10px;width: 24px;height: 24px;color: #5f2eea;margin-top: 6px;"></i><input
                class="flex-shrink-1" type="text" value="'.$item->end.'"
                style="border-style: none;font-weight: bold;width: 128.6px;" readonly/></div>
    <div class="d-flex flex-column" style="margin-right: 30px;"><input class="d-flex d-xxl-flex" type="text" readonly
                                                                       style="color: #14142b;width: 77px;height: 30px;font-size: 24px;font-weight: bold;margin-bottom: 3px;border-style: none;"
                                                                       value="' . $item->price . '₽"/><input
                class="d-flex" type="text" readonly
                style="color: #6e7191;height: 30px;width: 112px;font-family: Poppins, sans-serif;font-size: 18px;font-weight: bold;border-style: none;"
                value="'.$item->data.'"/></div>
    <button class="btn btn-primary d-flex justify-content-center align-items-center justify-content-xxl-center align-items-xxl-center"
            type="button"
            style="border-width: 3px;border-color: #5f2eea;background: #ffffff;width: 55px;height: 55px;border-radius: 80px;color: #5f2eea;font-size: 25px;padding: 0px;padding-top: 0px;"
            data-bs-target="#modal-3-'.$item->id.'" data-bs-toggle="modal">&gt;
    </button>

     <div class="modal fade" role="dialog" tabindex="-1" id="modal-3-'.$item->id.'">
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
                                                <input type="text" value="'.$item->start.'" autocomplete="on" readonly=""
                                                       style="border-style: none;font-weight: bold;width: 123.6px;"><i
                                                        class="la la-long-arrow-right"
                                                        style="margin-left: 9px;margin-right: 10px;width: 24px;height: 24px;color: #5f2eea;margin-top: 6px;"></i><input
                                                        class="flex-shrink-1" type="text" value="'.$item->end.'"
                                                        style="border-style: none;font-weight: bold;width: 128.6px;"
                                                        readonly=""></div>
                                            <div class="d-flex flex-column align-items-sm-center align-items-md-center align-items-lg-center align-items-xl-center align-items-xxl-center"
                                                 style="margin-top: 10px;margin-right: 0px;">
                                                <div class="text-center d-flex flex-row align-items-sm-center align-items-md-center justify-content-xl-start justify-content-xxl-start"
                                                     style="margin-bottom: 0px;margin-top: 0px;margin-right: 0px;"><img
                                                            class="rounded-circle d-flex d-xl-flex"
                                                            src="assets/img/avatars/'.$item->avatar.'" width="60px"
                                                            height="60px"
                                                            style="background-color: rgb(255,255,255);padding: 2px;width: 48px;height: 48px;margin: 0px;margin-left: 0px;">
                                                    <p style="font-size: 12px;margin: 0px;margin-top: 0px;margin-left: 20px;"></p>
                                                    <input class="d-flex d-xl-flex flex-shrink-1" type="text"
                                                           style="border-style: none;color: #6e7191;font-family: Poppins, sans-serif;width: 150px;height: 30px;"
                                                           placeholder="Имя Фамилия" value="'.$item->driver.'" autocomplete="on"
                                                            readonly="">
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
                                                                                placeholder="Машина" value="'.$item->car.'" readonly=""
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
                                                            placeholder="Телефон" value ="'.$item->phone.'" readonly="">
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
                                                                                  value="'.$item->price.'₽"><input class="d-flex"
                                                                                                       type="text"
                                                                                                       readonly=""
                                                                                                       style="color: #6e7191;height: 30px;width: 191px;font-family: Poppins, sans-serif;font-size: 18px;font-weight: bold;border-style: none;margin-left: 20px;"
                                                                                                       value="'.$item->data.'">
                                            </div>
                                            <div class="d-flex flex-column align-items-center align-items-sm-center align-items-md-center align-items-lg-center align-items-xl-center justify-content-xxl-center align-items-xxl-center"
                                                 style="background: #eff0f6;padding: 15px;padding-bottom: 15px;padding-left: 20px;border-radius: 32px;">
                                                <input type="text" readonly="" autocomplete="on"
                                                       style="border-style: none;background: rgba(255,255,255,0);margin-top: 0px;width: 170.6px;color: #6f6c90;font-weight: bold;"
                                                       '.(($item->animal >0)? 'value="Можно с животными"' : 'value="Нельзя с животными"').'><input type="text"
                                                                                        '.(($item->seats >0)? 'value="Сзади 2 места"' : 'value="Сзади 3 места"').'
                                                                                        readonly="" autocomplete="on"
                                                                                        style="border-style: none;background: rgba(255,255,255,0);margin-top: 5px;width: 170.6px;color: #6f6c90;font-weight: bold;"><input
                                                        type="text" '.(($item->baby >0)? 'value="Есть детское кресло"' : 'value="Нет детского кресла"').' readonly=""
                                                        style="border-style: none;background: rgba(255,255,255,0);margin-top: 5px;width: 170.6px;color: #6f6c90;font-weight: bold;"
                                                        autocomplete="on"><input type="text" '.(($item->smoke >0)? 'value="Можно курить"' : 'value="Курить нельзя"').'
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
                                                            readonly="" '.(($item->seats >0)? 'value="Занято: '.countPassenger($item).'/2 ' : 'value="Занято: '.countPassenger($item).'/3 "').'
                                                            class="btn btn-primary d-xl-flex align-items-xl-center justify-content-xxl-center"
                                                            role="button"
                                                            style="background: #eff0f6;border-top-right-radius: 16px;border-bottom-right-radius: 16px;height: 24px;padding: 0px;margin-left: 0px;width: 24px;border-style: none;border-top-color: #14142b;border-right-color: #14142b;border-bottom-color: #14142b;border-left-color: #ffffff;font-weight: bold;"
                                                            data-bs-target="#modal-2-'.$item->id.'" data-bs-toggle="modal"
                                                            href="#modal-2-'.$item->id.'"><i class="la la-info-circle"
                                                                               style="color: #14142b;font-weight: bold;"></i>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer d-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center justify-content-xxl-center align-items-xxl-center">
                                    <form action="find.php" method="post">
                                    <button class="btn btn-primary" type="submit" name="booking" '.(((countPassenger($item) == 2 && $item->seats==1 ||countPassenger($item) == 3 && $item->seats==0) || !isset($_SESSION['logged_user']) || $_SESSION['logged_user']->person == $item->driver ) ? 'disabled' : '' ).' value="'.$item->id.'"
                                            style="background: #5f2eea;width: 200px;height: 55px;">Забронировать
                                    </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <!--<div class="modal fade" role="dialog" tabindex="-1" id="modal-2-'.$item->id.'">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Пассажиры</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                Passenger
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
                    </div>-->
                </div>';
    }
}

?>


