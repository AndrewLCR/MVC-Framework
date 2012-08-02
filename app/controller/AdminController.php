<?php

class AdminController extends Controller {

    private $admin_model = NULL;

    public function __construct() {
        parent::__construct();
        $this->admin_model = new AdminModel();
    }

    public function index() {

        echo "estoy en admin";
    }

}

?>
