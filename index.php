<?php
error_reporting(E_ALL);
//Let's begin
require_once("config.php");
require_once("app/lib/functions.php");
//$sql = "SELECT name, email FROM users WHERE name = :name";
//$data = DB::prepare($sql)->execute(['name'=>'nick'])->fetch();
//print_r($data);
#1 Проверка авторизован ли пользователь
//print_r(preg_match('#^/auth/(.+)#i', "/auth/"));
//echo "<br>";
//Router::addRoute('/contacts/:any', 'MainController/$1');
//Router::addRoute('/auth/:any', 'AuthController/$1');
//Router::dispatch();

Route::addRoute('/chat', 'ChatController');
Route::addRoute('/login', 'LoginController');
Route::addRoute('/logout', 'LogoutController');
Route::dispatch();
class Route
{
    protected static $routes = [];

    public static function addRoute($route, $controller)
    {
        self::$routes = array_merge(self::$routes, [$route => $controller]);
    }
    public static function dispatch()
    {
        $uri = $_SERVER['REQUEST_URI'];
        $controller = null;
        foreach(self::$routes as $route => $contr){
            if($route == $uri){
                $controller = $contr;
                break;
            }
        }
        if(!$controller) $controller = 'MainController';
        return call_user_func_array(array($controller, 'index'), [1]);
    }
}