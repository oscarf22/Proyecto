<?php 
	$nombre = $_POST["nombre"];   
	$apellido = $_POST["apellido"];
	$telefono_movil = $_POST["telefono_movil"];
	$telefono_fijo = $_POST["telefono_fijo"];
	//$fecha_nac = $_POST["fecha_nac"];
	$mail = $_POST["mail"];
	$user = $_POST["pass"];
	//if (isset($_POST["sport"]) and $_POST["sport"]!=''){ $deporte=$_POST[""];}
	//echo $deporte;
	
	require_once '../class/classSocio.php';
	$socio = new Socio(0,$nombre,$apellido,$telefono_movil,$telefono_fijo,$mail,$user);
	$socio->guardarSocio();
	echo $socio->getnombre() . ' se ha guardado correctamente con el id: ' . $nombre->getid_persona();
	

	
?> 