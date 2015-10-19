<?php
        
class Persona{
    
    var $id_persona;
    var $nombre;
    var $apellido;
    var $telefono_fijo;
    var $telefono_movil;
    var $ciudad;
    var $provincia;
    var $mail;
    var $id_tipo_persona;
    
    
       function __construct(dfsdzzz) {
        $this->id_persona = $id_persona;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->telefono_fijo = $telefono_fijo;
        $this->telefono_movil = $telefono_movil;
        $this->ciudad = $ciudad;
        $this->provincia = $provincia;
        $this->mail = $mail;
        $this->id_tipo_persona = $id_tipo_persona;
        
       }
    public function getId_persona() {
        return $this->id_persona;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getTelefono_fijo() {
        return $this->telefono_fijo;
    }

    public function getTelefono_movil() {
        return $this->telefono_movil;
    }

    public function getCiudad() {
        return $this->ciudad;
    }

    public function getProvincia() {
        return $this->provincia;
    }

    public function getMail() {
        return $this->mail;
    }

    public function getId_tipo_persona() {
        return $this->id_tipo_persona;
    }

    public function setId_persona($id_persona) {
        $this->id_persona = $id_persona;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function setTelefono_fijo($telefono_fijo) {
        $this->telefono_fijo = $telefono_fijo;
    }

    public function setTelefono_movil($telefono_movil) {
        $this->telefono_movil = $telefono_movil;
    }

    public function setCiudad($ciudad) {
        $this->ciudad = $ciudad;
    }

    public function setProvincia($provincia) {
        $this->provincia = $provincia;
    }

    public function setMail($mail) {
        $this->mail = $mail;
    }

    public function setId_tipo_persona($id_tipo_persona) {
        $this->id_tipo_persona = $id_tipo_persona;
    }

     
        
  
    }

    
    
    


?>