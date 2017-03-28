<?php
class LoginController extends Controller
{
    protected static $errors = [];
    public static function index()
    {
        if(!empty($_POST['login']) && self::validateForm())
        {
            self::register();
        }
        $params['errors'] = self::$errors;
        parent::render('login', $params);
    }

    public static function register()
    {
        $name = validate_form_field($_POST['name']);
        $pass = validate_form_field($_POST['pass']);
        if(!User::checkUser($name)){
            User::register($name, $pass, Session::getSID());
        }else{
            self::$errors[] = "Поьзователь с таким именем уже существует";
        }
        return;
    }

    protected static function validateForm()
    {
        return true;
    }
}