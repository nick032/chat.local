<?php
class MainController
{
    public static function index()
    {
        //session_start();
        echo "Главный контроллер<br>";
        if(checkIssetEmpty($_SESSION['userName'])){
            echo "C возвращением " . $_SESSION['userName'] . "<br>";
            echo "<a href='/auth/logout'>Выйти</a>";
        }else{
        }
    }
}