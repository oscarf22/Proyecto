<?php
require_once 'Conexion.php';
class Deporte{
	
	var $id_deporte;
    var $deporte_nombre;
	const TABLA = 'deportes';


     function __construct($id_deporte, $deporte_nombre){

     	$this->id_deporte = $id_deporte;
        $this->deporte_nombre = $deporte_nombre;
     }

     	public function getid_deporte() {
        return $this->id_deporte;
    }

    
    public function setDeporte_nombre($deporte_nombre) {
        $this->deporte_nombre = $deporte_nombre;
    }

    public function getDeporte_nombre(){
        return $this->deporte_nombre;
    }

	 public function guardar(){
      $conexion = new Conexion();
      if($this->id_deporte != 0) /*Modifica*/ {
         $consulta = $conexion->prepare('UPDATE ' . self::TABLA .' SET  = descripcion = :deporte_nombre WHERE id = :id');
         $consulta->bindParam(':deporte_nombre', $this->deporte_nombre);
         $consulta->bindParam(':id_deporte', $this->id_deporte);
         $consulta->execute();
      }else /*Inserta*/ {
         $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA .' (descripcion) VALUES(:deporte_nombre)');
         $consulta->bindParam(':deporte_nombre', $this->deporte_nombre);
         $consulta->execute();
         $this->id = $conexion->lastInsertId();
      }
     // $conexion = null;
   }

   public function listarDeportes(){
      $conexion= new Conexion();
      $lista = $conexion->prepare('select descripcion ' . self::TABLA .' from deportes');
      $lista->execute();
      $registros = $lista->fetchAll();
      return $registros;
      $conexion = null;

   /* $sql="select first($rango) * from deportes"; 
    $result=mysql_query($sql, $conexion);*/
  }
     
  


	
}

?>