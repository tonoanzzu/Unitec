<?php
//require_once '';
class Usuario{
    
private $id;
private $nombres;
private $apellido_p;
private $apellido_m;
private $genero;
private $edad;
private $estado_civil;
private $email;
private $password;
private $nivel_intereses;
private $opc_nivel_interes;
private $estatus;
private $estatus_logico;
private $db;

public function __construct(){
    $this->db = Database::connect();
}

	function getId() {
		return $this->id;
	}

	function setId($id) {
		$this->id = $id;
	}

	function getNombres() {
		return $this->nombres;
	}

	function setNombres($nombres) {
		$this->nombres = $nombres;
	}

	function getApellido_p() {
		return $this->apellido_p;
	}

	function setApellido_p($apellido_p) {
		$this->apellido_p = $apellido_p;
	}

	function getApellido_m() {
		return $this->apellido_m;
	}

	function setApellido_m($apellido_m) {
		$this->apellido_m = $apellido_m;
	}

	function getGenero() {
		return $this->genero;
	}

	function setGenero($genero) {
		$this->genero = $genero;
	}

	function getEdad() {
		return $this->edad;
	}

	function setEdad($edad) {
		$this->edad = $edad;
	}

	function getEstado_civil() {
		return $this->estado_civil;
	}

	function setEstado_civil($estado_civil) {
		$this->estado_civil = $estado_civil;
	}

	function getEmail() {
		return $this->email;
	}

	function setEmail($email) {
		$this->email = $email;
	}

	function getPassword() {
		return $this->password;
	}

	function setPassword($password) {
		$this->password = $password;
	}

	function getNivel_intereses() {
		return $this->nivel_intereses;
	}

	function setNivel_intereses($nivel_intereses) {
		$this->nivel_intereses = $nivel_intereses;
	}

	function getOpc_nivel_interes() {
		return $this->opc_nivel_interes;
	}

	function setOpc_nivel_interes($opc_nivel_interes) {
		$this->opc_nivel_interes = $opc_nivel_interes;
	}

	function getEstatus() {
		return $this->estatus;
	}

	function setEstatus($estatus) {
		$this->estatus = $estatus;
	}

	function getEstatus_logico() {
		return $this->estatus_logico;
	}

	function setEstatus_logico($estatus_logico) {
		$this->estatus_logico = $estatus_logico;
    }
    
    public function save(){
        $sql= "insert into usuarios values (null,'{$this->getNombres()}','{$this->getApellido_p()}','{$this->getApellido_m()}','{$this->getGenero()}','{$this->getEdad()}','{$this->getEstado_civil()}','{$this->getEmail()}', '{$this->getPassword()}','{$this->getNivel_intereses()}','{$this->getOpc_nivel_interes()}', '{$this->getEstatus()}', '{$this->getEstatus_logico()}')";
        $save = $this->db->query($sql);
        $id = $this->db->insert_id;
        $result = false;
        if($save){
            $result=true;
            $response['id']=$id;
            $response['result']=$result;
        }else{
            $response['id']=null;
            $response['result']=$result;
        }

        return $response;
    }

    public function login(){
        $result = false;
        $email= $this->email;
        $password= $this->password;
        $sql="SELECT * FROM usuarios WHERE email = '$email' and password='$password' limit 1 ";
        
        $login= $this->db->query($sql);

        if($login && $login->num_rows == 1){
            $usuario = $login->fetch_object();            
            $result= $usuario;
        }

        return $result;




    }






}