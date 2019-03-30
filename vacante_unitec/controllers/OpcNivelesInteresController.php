<?php
require_once 'models/opc_niveles_interes.php';

class opcnivelesinteresController{

    public function opcnivelesinteres()
    {
        var_dump($_POST);
        
        $response =[];
        if(isset($_POST)){

            $opcNivelInteres = new NivelesInteres;
            $opcNivelInteres->setIdNivelIntereses($_POST['opc']);
            //$opcNivelInteres->setIdNivelIntereses(2);

            $res =  $opcNivelInteres ->getEspecificNivelIntereses();    
            
            $response = $res;
        }

         return json_encode($response);
        //require_once 'views/usuario/index.php';
    }

}

?>