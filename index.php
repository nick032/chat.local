<?php
//Let's begin
require_once('app/db.php');
require_once("config.php");
require_once("app/Router.php");


//$sql = "SELECT name, email FROM users WHERE name = :name";
//$data = DB::prepare($sql)->execute(['name'=>'nick'])->fetchAll();
//print_r($data);
#1 Проверка авторизован ли пользователь

session_start();
Router::addRoute('/contacts/:any', 'MainController/$1');
Router::dispatch();
exit();

if(checkIssetEmpty($_SESSION['userName'])){
    if(checkIssetEmpty($_GET['exit'])) {

        $sql = "DELETE FROM users WHERE name = ? AND session_id = ?";
        DB::prepare($sql)->execute([$_SESSION['userName'], session_id()]);
        session_destroy();
        header('Location: /');
    }
    $userName = $_SESSION['userName'];
    echo "Привет $userName <a href='/?exit=1'>Выйти</a>";
}else {
    if(checkIssetEmpty($_POST['userName'])) {
        $login = htmlspecialchars(trim($_POST['userName']));
        $_SESSION['userName'] = $login;
        $psid = session_id();
        $time = date("Y:m:d H:m:s");
        $sql = "INSERT INTO users (name, email, session_id, timestamp) VALUES(?, 'nick032@mail', ?, ?)";
        DB::prepare($sql)->execute([$login, $psid, $time]);
        header("Location: /");
    }
    else {
        include("public/login.php");
    }
}





function checkIssetEmpty($var) {
    if(!isset($var) || empty($var))
        return false;
    else
        return true;
}



