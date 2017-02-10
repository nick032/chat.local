<?php

class AuthController
{
    public function index(){
        echo "Авторизация";
    }
    public function logout(){
        session_start();
        session_destroy();
        //header("Location: /");
    }
}