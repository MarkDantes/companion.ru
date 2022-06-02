<?php

require "./libs/rb.php";

R::setup('mysql:host=127.0.0.1:3306;dbname=companion', 'root', 'root');

session_start();

if (!R::testConnection()) {
    echo "error";
}

function avatarSecurity($avatar)
{
    $name = $avatar['name'];
    $type = $avatar['type'];
    $size = $avatar['size'];

    $blacklist = array('.php', '.js', '.html');
    foreach ($blacklist as $row) {
        if (preg_match("/$row\$/i", $name)) {
            return false;
        }
    }

    if (($type != "image/png") && ($type != "image/jpg") && ($type != "image/jpeg")) {
        return false;
    }
    //7MB and less
    if ($size > 7 * 1024 * 1024) {
        return false;
    }
    return true;
}