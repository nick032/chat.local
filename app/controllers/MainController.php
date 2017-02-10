<?php
class MainController
{
    public function index()
    {
        //session_start();
        echo "Главный контроллер<br>";
        if(checkIssetEmpty($_SESSION['userName'])){
            echo "C возвращением " . $_SESSION['userName'] . "<br>";
            echo "<a href='/auth/logout'>Выйти</a>";
        }else{
            //header("Location: /auth");
        }
    }
}