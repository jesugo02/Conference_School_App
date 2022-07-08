<?php
require("vendor/autoload.php");

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/../');
$dotenv->load();

function getConnection(){
    $host = "localhost"/*$_ENV["USER_HOST"]*/;
    $dbname = "Conference"/*$_ENV["USER_DBNAME"]*/;
    $username = "root"/*$_ENV["USER_USERNAME"]*/;
    $password = ""/*$_ENV["USER_PWD"]*/;

    $dsn = "mysql:host=$host;dbname=$dbname";

    $connexion = new PDO($dsn, $username, $password);

    return $connexion;
}