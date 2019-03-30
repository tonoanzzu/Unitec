<?php
require_once 'models/estado_civil.php';
class usuarioController{

    public function getContent()
    {
        # code...
        $estadoCivil = new EstadoCivil;
        return $estadoCivil->getJsonAll();
    }
}