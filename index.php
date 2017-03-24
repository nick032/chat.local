<?php
error_reporting(E_ALL);
//Let's begin
require_once("config.php");
require_once("app/lib/functions.php");
require_once("app/web.php");
//$sql = "SELECT name, email FROM users WHERE name = :name";
//$data = DB::prepare($sql)->execute(['name'=>'nick'])->fetch();
//print_r($data);
#1 Проверка авторизован ли пользователь
//print_r(preg_match('#^/auth/(.+)#i', "/auth/"));
//echo "<br>";
//Router::addRoute('/contacts/:any', 'MainController/$1');
//Router::addRoute('/auth/:any', 'AuthController/$1');
//Router::dispatch();
App::start();


