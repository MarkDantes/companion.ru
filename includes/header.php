<nav class="navbar navbar-light navbar-expand-md fixed-top navbar-shrink py-3" id="mainNav"
     style="color: var(--bs-indigo);font-family: Poppins, sans-serif;--bs-body-bg: #F7F7FC;background: #f7f7fc;">
    <div class="container"><a class="navbar-brand d-flex align-items-center" href="index.php"><img class="img-fluid"
                                                                                                   src="assets/img/logo/logo.png"
                                                                                                   width="200"
                                                                                                   height="40"
                                                                                                   loading="eager"></a>
        <hr>
        <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span
                    class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1"
             style="width: 450px;margin-right: 100px;--bs-primary: #5f2eea;--bs-primary-rgb: 95,46,234;--bs-body-font-weight: black;">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item dropdown"><a class="dropdown-toggle nav-link fw-bolder" aria-expanded="false"
                                                 data-bs-toggle="dropdown" href="#"
                                                 style="--bs-body-font-weight: normal;font-family: Poppins, sans-serif;font-weight: bold;color: #160141;"><i
                                class="la la-location-arrow"
                                style="margin-bottom: 0px;margin-right: 5px;transform: rotate(45deg);font-weight: bold;"></i>Город&nbsp;</a>
                    <div class="dropdown-menu"><a class="dropdown-item" href="#">Москва</a>
                        <a class="dropdown-item" href="#">Санкт-Петербург</a>
                        <a class="dropdown-item" href="#">Новосибирск</a>
                        <a class="dropdown-item" href="#"
                        >Екатеринбург</a>
                        <a class="dropdown-item" href="#">Казань</a>
                        <a class="dropdown-item" href="#">Нижний
                            Новгород</a>
                        <a class="dropdown-item" href="#">Челябинск</a>
                        <a class="dropdown-item" href="#">Омск</a>
                        <a class="dropdown-item" href="#">Ростов-на-Дону</a>
                        <a class="dropdown-item" href="#">Самара</a>
                        <a class="dropdown-item" href="#">Уфа</a>
                        <a class="dropdown-item" href="#">Красноярск</a>
                        <a class="dropdown-item" href="#">Воронеж</a>
                        <a class="dropdown-item" href="#">Пермь</a>
                        <a class="dropdown-item" href="#">Волгоград</a>
                        <a class="dropdown-item" href="#">Краснодар</a>
                    </div>

                </li>
                <li class="nav-item"><a class="nav-link fw-bolder" href="index.php"
                                        style="color: rgb(22,1,65);font-weight: bold;--bs-body-font-weight: normal;">Найти</a>
                </li>
                <li class="nav-item"><a class="nav-link fw-bolder" href="create.php"
                                        style="color: rgb(22,1,65);font-weight: bold;font-family: Poppins, sans-serif;--bs-body-font-weight: normal;">Создать</a>
                </li>
                <li class="nav-item"><a class="nav-link active fw-bolder" href="contacts.php"
                                        style="color: rgb(22,1,65);--bs-body-font-weight: normal;font-weight: bold;font-family: Poppins, sans-serif;">О
                        проекте</a></li>
            </ul>
            <div class="dropdown">
                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1"
                   data-bs-toggle="dropdown" aria-expanded="false"> <?php if (isset($_SESSION['logged_user'])) : ?>
                        <img src="assets/img/avatars/<?php echo R::findOne('users', 'id = ?', array($_SESSION['logged_user']->id))->avatar; ?>"
                             alt="mdo" width="48" height="48" class="rounded-circle">
                    <?php else: ?>
                        <img src="assets/img/avatars/avatar.jpg" alt="mdo" width="48" height="48"
                             class="rounded-circle">
                    <?php endif; ?>

                </a>
                <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1" style="">
                    <?php if (isset($_SESSION['logged_user'])) : ?>
                        <li><a class="dropdown-item" href="profile.php">Профиль</a></li>
                        <li><a class="dropdown-item" href="history.php">Истории</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="exit.php">Выйти</a></li>
                    <?php else : ?>
                        <li><a class="dropdown-item" href="login.php">Вход</a></li>
                        <li><a class="dropdown-item" href="signup.php">Регистрация</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</nav>
