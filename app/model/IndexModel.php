<?php

class IndexModel extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function obtenerFilas() {
        $filas = $this->db->QueryArray("");
        return $filas;
    }

    public function insertarFilas($formulario) {
        $datos["campo1"] = MySQL::SQLValue($formulario['campo1']);
        $datos["campo2"] = MySQL::SQLValue($formulario['campo2']);
        $this->db->InsertRow("tabla_demo", $datos);
    }

    public function actualizarFilas($formulario) {
        $datos["campo1"] = MySQL::SQLValue($formulario['campo1']);
        $filtro["id"] = $formulario['id'];
        $this->db->UpdateRows("tabla_demo", $datos, $filtro);
    }

    public function obtenerFila($id) {
        $fila = $this->db->QuerySingleRow("");
        return $fila;
    }

}

?>