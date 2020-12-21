<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once "DataBase-master/autoload.php"; //Подключаем библиотеки
require_once "simple-api-master/autoload.php";

use DigitalStars\DataBase\DB;
use DigitalStars\SimpleAPI;

header('Access-Control-Expose-Headers: Access-Control-Allow-Origin', false);
header('Access-Control-Allow-Origin: *', false);
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept', false);
header('Access-Control-Allow-Credentials: true');

$db_type = 'mysql';
$db_name = 'learner18';
$login = 'learner18';
$pass = 'fJheLGhOCgYdPBfuKEF3';
$ip = 'localhost';

$db = new DB("mysql:host=localhost;dbname=$db_name", $login, $pass,
    [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'",
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);

session_start();
$api = new SimpleAPI();
switch ($api->module) {
    case 'auth':
        $data = $api->params(['login', 'password']);
        $api->answer['auth'] = ($data['login'] == 'admin' && $data['password'] == 'admin');
        $row = $db->getById('users', ['login' => $data['login'], 'password' => $data['password']]);
        if($row!==false){
            $_SESSION['auth']=true;
            //$_SESSION['stay']=1;
            $_SESSION['login']=$data['login'];
            header('Location:http://learner18.creativityprojectcenter.ru/index.php');
        }
        else{
            $_SESSION['not_log']=1;
            header('Location:http://learner18.creativityprojectcenter.ru/auth.php');
        }
        break;
    case 'reg':
        $data = $api->params(['login', 'password']);
        $row = $db->getById('users', ['login' => $data['login']]);
        if($row==false){
            $db->insert('users', ['login' => $data['login'], 'password' => $data['password']]);
            $_SESSION['auth']=true;
            $_SESSION['login']=$data['login'];
            //$_SESSION['stay']=1;
            header('Location:http://learner18.creativityprojectcenter.ru/index.php');
        }
        else{
            $_SESSION['not_reg']=1;
            header('Location:http://learner18.creativityprojectcenter.ru/reg.php');
        }
        break;
}