<?php

require  "./libs/rb.php";

R::setup('mysql:host=127.0.0.1:3306;dbname=companion', 'root', 'root');

session_start();

if (!R::testConnection())
{
    echo "error";
}