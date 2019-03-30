<?php

class NivelesInteres{

    private $id;
    private $id_nivel_intereses;
    private $nombre;

    public function __construct(){
        $this->db = Database::connect();
    }

	function getId() {
		return $this->$id;
	}

	function setId($id) {
		$this->id = $id;
    }
    
    function getIdNivelIntereses() {
		return $this->$id_nivel_intereses;
	}

	function setIdNivelIntereses($id_nivel_intereses) {
		$this->id_nivel_intereses = $id_nivel_intereses;
	}

	function getNombre() {
		return $this->$nombre;
	}

	function setNombre($nombre) {
		$this->nombre = $nombre;
    }

    function getEspecificNivelIntereses(){

        $sql= "SELECT * FROM cat_opc_nivel_intereses WHERE id_nivel_intereses = ".$this->id_nivel_intereses.";";
               
        $res= $this->db->query($sql);
        $response=[];

        while ($fila = $res->fetch_assoc()) {
            
            $temp = array('id'=>$fila["id"],'nombre'=> $fila["nombre"] );
            array_push($response, $temp);
        }

        var_dump ($response);

        return $response;


    }
    


    
    

}
