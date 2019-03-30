<?php
require_once 'models/usuario.php';
require_once 'models/estado_civil.php';
require_once 'models/genero.php';
require_once 'models/niveles_interes.php';
class usuarioController{

    public function index()
    {
               
        require_once 'views/usuario/index.php';
    }

    public function registro()
    {
        $estadoCivil = new EstadoCivil;
        $valuesestadoCivil= $estadoCivil->getJsonAll();
        $genero = new Genero;
        $valuesGenero= $genero->getJsonAll();
        $nivelInteres = new NivelesInteres;
        $valuesNivelInteres= $nivelInteres->getJsonAll();
        //var_dump($valuesestadoCivil);

        require_once 'views/usuario/registro.php';
    }

    public function panel()
    {
        # code...
        //echo "Controlador Usuarios, accion index";
        require_once 'views/usuario/panel.php';
    }

    public function save()
    {
        if(isset($_POST)){
            //var_dump($_POST);
            $usuario = new Usuario;
            $usuario->setNombres($_POST['nombres']);
            $usuario->setApellido_p($_POST['apellido_p']);
            $usuario->setApellido_m($_POST['apellido_m']);
            $usuario->setGenero($_POST['genero']);
            $usuario->setEdad($_POST['edad']);
            $usuario->setEstado_civil($_POST['estado_civil']);
            $usuario->setEmail($_POST['email']);
            $usuario->setPassword($_POST['password']);
            $usuario->setNivel_intereses($_POST['nivel_intereses']);
            $usuario->setOpc_nivel_interes($_POST['opc_nivel_interes']);
            $usuario->setEstatus(1);
            $usuario->setEstatus_logico(1);            

            $save= $usuario->save();
            var_dump($save);
            error_log($save["result"], 3,'log.log' );
            //die();

                       
            if($save["result"]){
                                
                $usuario->setId($save["id"]);
                //echo "Registro completo";
                $_SESSION['nombreUser']= $_POST['nombres'] . ' '.$_POST['apellido_p'] . ' '.$_POST['apellido_m'] ;
                header("Location:".base_url.'usuario/panel');
                //require_once 'views/usuario/panel.php';
            }else{
                echo "Registro Fallido";
                //session_unset();
                header("Location:".base_url.'error/errorInserto');
            }
            //var_dump($usuario);
        }else{
            session_unset();
            header("Location:".base_url.'error/errorInserto');
        }
        

    }




    public function login(){

        if(isset($_POST)){

            $usuario = new Usuario();
            $usuario->setEmail($_POST['email']);
            $usuario->setPassword($_POST['password']);
            $identity = $usuario->login();

           if ($identity && is_object($identity)) {
            $_SESSION['nombreUser']= $identity->nombres .' ' .$identity->apellido_p .' '.$identity->apellido_m;
            header("Location:".base_url.'usuario/panel');
           }else{
            header("Location:".base_url.'error/errorLogin');
           }

        }

        
    }


    public function logout(){
        session_destroy();
        header("Location:".base_url);
    }


    

}