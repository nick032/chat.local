<?php
class Router
{
    private static $routes = array();
    private static $params = array();
    private static $requestedUrl = '';
    /*
     * Добавление маршрута
     */
    public static function addRoute($route, $distination = null)
    {
        if($distination != null && !is_array($route)){
            $route = array($route => $distination);
        }
        self::$routes = array_merge(self::$routes, $route);
    }
    /*
     * Разделяем url на части
     * */
    public static function splitUrl($url)
    {
        return preg_split('/\//', $url, -1, PREG_SPLIT_NO_EMPTY);
    }
    /*
     * Обработка полученного url
     * */
    public static function dispatch($requstedUrl = null)
    {
        /*
         * Если requested не передан берем его из REQUEST_URI
         * */
        if($requestedUrl === null){
            $uri = reset(explode('?', $_SERVER['REQUEST_URI']));
            //$requestedUrl = urldecode(rtrim($uri, '/'));
            $requestedUrl = urldecode($uri);
        }
        self::$requestedUrl = $requestedUrl;
        /*
         * Если url и маршрут полностью совпадает
         * */
        if(isset(self::$routes[$requestedUrl])){
            self::$params = self::splitUrl(self::$routes[$requestedUrl]);
            return self::executeAction();
        }
        foreach(self::$routes as $route => $uri){
            //Заменем WildCards на регулярное ввыражение
            if(strpos($route, ':') !== false){
                $route = str_replace(':any', '()', str_replace(':num', '([0-9]+|)', $route));
            }
            echo $route . " - ". $requestedUrl . "<br>";
            if(preg_match('#^'.$route.'$#i', $requestedUrl)){
                echo 1;
                if(strpos($uri, '$') !== false && strpos($route, '(') !== false){
                    $uri = preg_replace('#^'.$route.'$#', $uri, $requestedUrl);
                }
                self::$params = self::splitUrl($uri);
                break; //URL обработан
            }
        }
        return self::executeAction();
    }
    public static function executeAction()
    {
        $controller = isset(self::$params[0]) ? self::$params[0] : 'MainController';
        $action = isset(self::$params[1]) ? self::$params[1] : 'Index';
        $params = array_slice(self::$params, 2);
        return call_user_func_array(array($controller, $action), $params);
    }
}