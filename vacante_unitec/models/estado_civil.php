<?php

class EstadoCivil{

    private $id;
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

	function getNombre() {
		return $this->$nombre;
	}

	function setNombre($nombre) {
		$this->nombre = $nombre;
    }

    function getJsonAll(){

        $sql= "SELECT * FROM cat_edo_civil;";
               
        $res= $this->db->query($sql);
        $response=[];

        while ($fila = $res->fetch_assoc()) {
            
            $temp = array('id'=>$fila["id"],'nombre'=> $fila["nombre"] );
            array_push($response, $temp);
        }

        return $response;


    }
    


    
    

}
