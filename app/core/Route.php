<?php
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
        $controller = 'MainController';
        foreach(self::$routes as $route => $dist){
            if($route === $uri){
                $controller = $dist;
                break;
            }
        }
        return call_user_func_array(array($controller, 'index'), [1]);
    }
}