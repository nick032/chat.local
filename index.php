<?php
error_reporting(E_STRICT);
require_once("config.php");
require_once("app/lib/functions.php");
//$sql = "SELECT name, email FROM users WHERE name = :name";
//$data = DB::prepare($sql)->execute(['name'=>'nick'])->fetchAll();
//print_r($data);
#1 Проверка авторизован ли пользователь
//print_r(preg_match('#^/contacts/()|(.+)$#i', "/contacts/12"));
echo "<br>";
Router::addRoute('/contacts/:any/:any', 'ContactsController/$1/$2');
Router::addRoute('/auth/:any', 'AuthController/$1');
Router::dispatch();

