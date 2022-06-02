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
                                style="margin-bottom: 0px;margin-right: 5px;transform: rotate(45deg);font-weight: bold;"></i>Город: <?php echo $_SESSION['city']?></a>
                    <div class="dropdown-menu">
                        <form action="index.php" method="post"
                              class="d-flex d-xxl-flex flex-column justify-content-xxl-center">
                            <button class="btn btn-primary" type="submit" name="city"value="Москва"
                                    style="background: #ffffff;color: #14142b;border-style: none;">Москва
                            </button>
                            <button class="btn btn-primary" type="submit" name="city"value="Санкт-Петербург"
                                    style="background: #ffffff;color: #14142b;border-style: none;">Санкт-Петербург
                            </button>
                            <button class="btn btn-primary" type="submit" name="city"value="Воронеж"
                                    style="background: #ffffff;color: #14142b;border-style: none;">Воронеж
                            </button>
                            <button class="btn btn-primary" type="submit" name="city"value="Нижний Новгород"
                                    style="background: #ffffff;color: #14142b;border-style: none;">Нижний Новгород
                            </button>
                            <button class="btn btn-primary" type="submit" name="city"value="Ростов-на-Дону"
                                    style="background: #ffffff;color: #14142b;border-style: none;">Ростов-на-Дону
                            </button>
                            <button class="btn btn-primary" type="submit" name="city"value="Омск"
                                    style="background: #ffffff;color: #14142b;border-style: none;">Омск
                            </button>
                            <button class="btn btn-primary" type="submit" name="city"value="Новосибирск"
                                    style="background: #ffffff;color: #14142b;border-style: none;">Новосибирск
                            </button>
                            <button class="btn btn-primary" type="submit" name="city"value="Екатеринбург"
                                    style="background: #ffffff;color: #14142b;border-style: none;">Екатеринбург
                            </button>
                            <button class="btn btn-primary" type="submit" name="city"value="Красноярск"
                                    style="background: #ffffff;color: #14142b;border-style: none;">Красноярск
                            </button>
                            <button class="btn btn-primary" type="submit" name="city"value="Казань"
                                    style="background: #ffffff;color: #14142b;border-style: none;">Казань
                            </button>
                            <button class="btn btn-primary" type="submit" name="city"value="Пермь"
                                    style="background: #ffffff;color: #14142b;border-style: none;">Пермь
                            </button>
                            <button class="btn btn-primary" type="submit" name="city"value="Челябинск"
                                    style="background: #ffffff;color: #14142b;border-style: none;">Челябинск
                            </button>
                            <button class="btn btn-primary" type="submit" name="city"value="Самара"
                                    style="background: #ffffff;color: #14142b;border-style: none;">Самара
                            </button>
                            <button class="btn btn-primary" type="submit" name="city"value="Уфа"
                                    style="background: #ffffff;color: #14142b;border-style: none;">Уфа
                            </button>
                            <button class="btn btn-primary" type="submit" name="city" value="Новосибирск"
                                    style="background: #ffffff;color: #14142b;border-style: none;">Новосибирск
                            </button>
                            <button class="btn btn-primary" type="submit" name="city" value="Краснодар"
                                    style="background: #ffffff;color: #14142b;border-style: none;">Краснодар
                            </button>
                        </form>
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
