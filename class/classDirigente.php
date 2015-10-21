<?php

class Dirigente extends Socio{
    
    var $id_cargo;
    var $id_periodo;
    
    
    function __construct($nro_socio, $fecha_nac, $fecha_alta, $fecha_baja, $id_tipo_socio, $id_tipo_cuota, $id_deporte, $descuento, $estado, $user, $pass,$id_cargo, $id_periodo) {
        parent::__construct($nro_socio, $fecha_nac, $fecha_alta, $fecha_baja, $id_tipo_socio, $id_tipo_cuota, $id_deporte, $descuento, $estado, $user, $pass);
        $this->id_cargo = $id_cargo;
        $this->id_periodo = $id_periodo;
    }
    public function getId_cargo() {
        return $this->id_cargo;
    }

    public function getId_periodo() {
        return $this->id_periodo;
    }

    public function setId_cargo($id_cargo) {
        $this->id_cargo = $id_cargo;
    }

    public function setId_periodo($id_periodo) {
        $this->id_periodo = $id_periodo;
    }


}
?>