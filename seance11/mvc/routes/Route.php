<?php
class Route {
    private static $routes = [];

    public static function get($url, $controller){
        self::$routes[]=['url' =>$url, 'controller' => $controller, 'method' => 'GET'];
    }

    public static function post($url, $controller){
        self::$routes[]=['url' =>$url, 'controller' => $controller, 'method' => 'POST'];
    }


    public static function dispatch(){
       // print_r($_SERVER);

        $url = $_SERVER['REQUEST_URI'];
        $method = $_SERVER['REQUEST_METHOD'];
        
        foreach(self::$routes as $route){

            // echo $route['method'];
            // echo "<br>";
            // echo $method;
            // die();
            if(BASE.$route['url'] == $url && $route['method'] == $method){
                $controllerSegments = explode('@', $route['controller']);
                //print_r($controllerSegments);
                $controllerName = $controllerSegments[0];
                $methodName = $controllerSegments[1];

                $controllerInstance = new $controllerName();
                if($method == 'GET'){
                    $controllerInstance->$methodName();
                }
                return;
            }

        }
        http_response_code(404);
        echo "404 Page not found!";
    }
}