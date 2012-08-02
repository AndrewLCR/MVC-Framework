<?php

class Dispatcher {

    public static function dispatch() {

        //REMOTO
        $url = REQUEST_URI;

        if ($_SERVER['HTTP_HOST'] == "localhost") {

            $localUrl = REQUEST_URI;
            $localDir = trim($url, '/');
            $var = str_replace($localDir, '', $url);
            $request_url = explode('/', $var);

            print_r($request_url);

            $url = explode('/', $request_url);
            //array_shift($url);

            $controller = !empty($url[0]) ? ucfirst($url[0]) . 'Controller' : 'IndexController';

            $method = !empty($url[1]) ? $url[1] : 'index';

            $arg = !empty($url[2]) ? $url[2] : NULL;

            $cont = new $controller;

            $cont->$method($arg);
        }
    }

}

?>