<?php

class Socio extends classPersona{
    
    
    var $nro_socio;
    var $fecha_nac;
    var $fecha_alta;
    var $fecha_baja;
    var $id_tipo_socio;
    var $id_tipo_cuota;
    var $id_deporte;
    var $descuento;
    var $estado;
    var $user;
    var $pass;
    
    function __construct($nro_socio, $fecha_nac, $fecha_alta, $fecha_baja, $id_tipo_socio, $id_tipo_cuota, $id_deporte, $descuento, $estado, $user, $pass) {
    parent::_contruct($id_persona, $nombre, $apellido, $telefono_fijo, $telefono_movil, $ciudad, $provincia, $mail, $id_tipo_persona,$nro_socio, $fecha_nac, $fecha_alta, $fecha_baja, $id_tipo_socio, $id_tipo_cuota, $id_deporte, $descuento, $estado, $user, $pass); 
    
        $this->nro_socio = $nro_socio;
        $this->fecha_nac = $fecha_nac;
        $this->fecha_alta = $fecha_alta;
        $this->fecha_baja = $fecha_baja;
        $this->id_tipo_socio = $id_tipo_socio;
        $this->id_tipo_cuota = $id_tipo_cuota;
        $this->id_deporte = $id_deporte;
        $this->descuento = $descuento;
        $this->estado = $estado;
        $this->user = $user;
        $this->pass = $pass;
    }

    public function getNro_socio() {
        return $this->nro_socio;
    }

    public function getFecha_nac() {
        return $this->fecha_nac;
    }

    public function getFecha_alta() {
        return $this->fecha_alta;
    }

    public function getFecha_baja() {
        return $this->fecha_baja;
    }

    public function getId_tipo_socio() {
        return $this->id_tipo_socio;
    }

    public function getId_tipo_cuota() {
        return $this->id_tipo_cuota;
    }

    public function getId_deporte() {
        return $this->id_deporte;
    }

    public function getDescuento() {
        return $this->descuento;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function getUser() {
        return $this->user;
    }

    public function getPass() {
        return $this->pass;
    }

    public function setNro_socio($nro_socio) {
        $this->nro_socio = $nro_socio;
    }

    public function setFecha_nac($fecha_nac) {
        $this->fecha_nac = $fecha_nac;
    }

    public function setFecha_alta($fecha_alta) {
        $this->fecha_alta = $fecha_alta;
    }

    public function setFecha_baja($fecha_baja) {
        $this->fecha_baja = $fecha_baja;
    }

    public function setId_tipo_socio($id_tipo_socio) {
        $this->id_tipo_socio = $id_tipo_socio;
    }

    public function setId_tipo_cuota($id_tipo_cuota) {
        $this->id_tipo_cuota = $id_tipo_cuota;
    }

    public function setId_deporte($id_deporte) {
        $this->id_deporte = $id_deporte;
    }

    public function setDescuento($descuento) {
        $this->descuento = $descuento;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }

    public function setUser($user) {
        $this->user = $user;
    }

    public function setPass($pass) {
        $this->pass = $pass;
    }
   
   public function guardarSocio(){
    $conexion = new Conexion();
      if($this->id_persona != 0) /*Modifica*/ {
       /*  $consulta = $conexion->prepare('UPDATE ' . self::TABLA .' SET  = descripcion = :deporte_nombre WHERE id_deporte = :id');
         $consulta->bindParam(':deporte_nombre', $this->deporte_nombre);
         $consulta->bindParam(':id_deporte', $this->id_deporte);
         $consulta->execute();*/
     }else /*Inserta*/ {
         $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA .' ( nombre,apellido,telefono_movil,telefono_fijo,fecha_nac,mail,user,pass) VALUES(:nombre, :apellido,:telefono_movil, :telefono_fijo,:fecha_nac, :mail,:user, :pass)');
         $consulta->bindParam( ':nombre',$this->nombre);
         $consulta->bindParam( ':apellido',$this->apellido);
         $consulta->bindParam( ':telefono_fijo', $this->telefono_fijo);
         $consulta->bindParam( ':telefono_movil',$this->telefono_movil);
         $consulta->bindParam( ':mail',$this->mail);
         $consulta->bindParam( ':fecha_nac',$this->fecha_nac);
         //$consulta->bindParam( ':ciudad',$this->ciudad);
        // $consulta->bindParam( ':provincia',$this->provincia);
         $consulta->bindParam( ':mail',$this->mail);
         $consulta->bindParam( ':user',$this->user);
         $consulta->bindParam( ':pass',$this->pass);
         $consulta->execute();
         $this->id = $conexion->lastInsertId();
      }
      $conexion = null;
   }


   
}

?>
