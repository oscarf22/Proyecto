<?php

class Deporte{
	
	var $id_deporte;
    var $deporte_nombre;


     function __construct($id_deporte, $deporte_nombre){

     	$this->id_deporte = $id_deporte;
        $this->deporte_nombre = $deporte_nombre;
     }

     	public function getid_deporte() {
        return $this->id_deporte;
    }

    public function getid_deporte() {
        return $this->id_deporte;
    }

    public function setDeporte_nombre($deporte_nombre) {
        $this->deporte_nombre = $deporte_nombre;
    }

    public function setDeporte_nombre($deporte_nombre) {
        $this->deporte_nombre = $deporte_nombre;
    }


	
}

?>