<?php
class LoginController extends Controller
{
    public static function index()
    {
        echo "Авторизация - контроллер";
        $params = ['title' => 'Hello world', 'number' => 12];
        parent::render('login', $params);
    }
}