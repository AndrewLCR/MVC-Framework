<?php

class Dispatcher {

    public static function dispatch() {

        $url = explode('/', trim(current(explode('?', getenv('REQUEST_URI'))), '/'));

        $siteRoot = "Cube";
        if (in_array($siteRoot, $url)) {

            $siteRootKey = key($url);
            $url_parts_count = count($url);
            //echo $siteRootKey;

            for ($i = $siteRootKey; $i > $url_parts_count; $i++) {

                $cont = $i++;
            }
        }

        $controller = !empty($url[$cont]) ? ucfirst($url[$cont]) . 'Controller' : 'IndexController';
        echo $controller;
        $method = !empty($url[1]) ? $url[1] : 'index';

        $arg = !empty($url[2]) ? $url[2] : NULL;

        $cont = new $controller;

        $cont->$method($arg);
    }

}

?>