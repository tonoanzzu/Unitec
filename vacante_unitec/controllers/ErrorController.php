<?php

class errorController{

    public function index()
    {
        # code...
        echo '<br><br><br><br><h1>La pagina que buscas no existe</h1> <br><br><br><a href="'.base_url.'/usuario/index"> regresar </a>';
    }

    public function errorInserto(){
        echo '<br><br><br><br><h1>No se pudo realizar el registro, puede que exista un usuario con el mismo correo. Intenta con otro correo</h1> <br><br><br><a href="'.base_url.'/usuario/index"> regresar </a>';

    }

    public function errorInsertoRepetido(){
        echo '<br><br><br><br><h1>Ya existe un registro con este correo</h1> <br><br><br><a href="'.base_url.'/usuario/index"> regresar </a>';

    }

    public function errorLogin(){
        echo '<br><br><br><br><h1>Credenciales incorrectas, vuelve a intentarlo.</h1><br><br><br><a href="'.base_url.'/usuario/index"> regresar </a>';

    }


}