<?php


class Router
{
    private $routes = null;
    private static $_instance = null;

    private function __construct()
    {
        $this->routes = array();
    }

    public static function getInstance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new Router();
        }
        return self::$_instance;
    }

    public function get($pattern, $callback)
    {
        $this->set('GET', $pattern, $callback);
    }

    public function post($pattern, $callback)
    {
        $this->set('POST', $pattern, $callback);
    }

    private function set($type, $pattern, $callback)
    {
        $pattern = $this->constructPattern($pattern);
        $this->routes[$type][$pattern] = $callback;
    }

    public function process($method, $uri)
    {
        if (!in_array($method, array('GET', 'POST'))) {
            throw new Exception("Request method should be GET or POST");
        }
        // Выполнение роутинга
        // Используем роуты $routes['GET'] или $routes['POST']  в зависимости от метода HTTP.
        $active_routes = $this-> routes[$method];
        // Для всех роутов

        foreach ($active_routes as $pattern => $callback) {
        // Если REQUEST_URI соответствует шаблону - вызываем функцию

            if (preg_match_all("/$pattern/", $uri, $matches) !== 0) {
            // вызываем callback
                $posable_attribute = array();
                if(preg_match_all('/\d+/',$uri,$match)){
                    foreach ($match as $value) {
                        $posable_attribute[] = array_pop($value);
                    }
                 }
                 call_user_func_array($callback, $posable_attribute);


                // выходим из цикла
                break;
            }
            $matches = array();
        }
    }

    private function constructPattern($pattern)
    {
        $pattern = str_replace('/', '\/', $pattern);
        preg_match_all("/(?<=:)[a-zA-Z0-9]+/", $pattern, $matches);
        foreach ($matches[0] as $value) {
            $pattern = str_replace(":$value", '\d+', $pattern);
        }
        $pattern = "^$pattern$";
        return $pattern;
    }
}