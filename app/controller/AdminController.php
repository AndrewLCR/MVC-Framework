<?php

class AdminController extends Controller {

    private $admin_model = NULL;

    public function __construct() {
        parent::__construct();
        $this->admin_model = new AdminModel();
    }

    public function index() {
        
        $filas = $this->admin_model->ObtenerFilas();

        $view = new View('admin');
        $view->titulo = 'Cube CMS Administration';
        $view->mensaje = 'Ingrese sus datos';
        $view->filas = $filas;

        echo $view->display();
    }

}

?>
