<?php

class Controller {

    protected $session = NULL;
    protected $response = NULL;

    public function __construct() {
        $this->session = Session::getInstance();
        $this->response = Response::getInstance();
    }

}

?>