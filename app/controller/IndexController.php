<?php

class IndexController extends Controller {

    private $index_model = NULL;

    public function __construct() {
        parent::__construct();
        $this->index_model = new IndexModel();
    }

    public function index() {
        $filas = $this->index_model->obtenerFilas();

        $view = new View('index');
        $view->titulo = 'Cube CMS';
        $view->mensaje = 'DEMO VIEW ANDRES';
        $view->filas = $filas;

        echo $view->display();
    }

}