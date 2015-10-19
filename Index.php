 <?php

 $tamanio_linea = 57;
 $PathPadronRetencion = "padronRetencion.txt";
 $PathPadronPercepcion = "padronPercepcion.txt";

 $regimen = $_GET['reg'];	

 if($regimen == 'R')
 {
  	$lineasPadron = filesize($PathPadronRetencion) / $tamanio_linea;
 }
 else
 {
	$lineasPadron = filesize($PathPadronPercepcion) / $tamanio_linea;	
 }

 
 
  if(!isset($_GET['cuit']))
  {
	echo '!EX_CON_TEXTO!: {![1001]!}{*[Url mal formateada, Ingrese una url del tipo http://localhost/ib?cuit=27235742654]*}';
  }
  else
  {
	$cuit_buscado  = $_GET['cuit'];
	//echo 'Consultando CUIT ' . $cuit_buscado . ' en un padrón de ' . $lineasPadron . ' lineas...<br>';
	  
	if ($cuit_buscado == 0)
	{
		$retencion = "0,00";
		$percepcion = "0,00";
	}
	else
	{

		$encontrado = false;
		$noencontrado = false;
		
		if($regimen == 'R')
		{
			$ar=fopen($PathPadronRetencion,"r") or die("No se pudo abrir el archivo");
		}
		else
		{
			$ar=fopen($PathPadronPercepcion,"r") or die("No se pudo abrir el archivo");
		}
	  
		$izq = 0;
		$der = ($lineasPadron - 1);
		while ((!$encontrado) and ($izq <= $der))
		{
			$centro = round( ($izq + $der) / 2);
			fseek($ar, $tamanio_linea * $centro);
			$linea = fgets($ar);
			$trozos = explode(";", $linea);	
			if ($cuit_buscado == $trozos[4])
			{
				$encontrado = true;
				if($regimen == 'R')
				{
					$retencion = $trozos[8];
					$percepcion = "0,00";
				}
				else
				{
					$percepcion = $trozos[8];
					$retencion = "0,00";
				}	
			}
			else if ($cuit_buscado < $trozos[4])
				$der = $centro - 1;
			else
				$izq = $centro + 1;
		}
	  
		if  ($encontrado == false)
		{
			$percepcion = "8,00";
			$retencion = "4,00";
		}
		fclose($ar);
	}
	  
	//echo "Busqueda terminada.<br>";
	//echo "PERCEPCION=[" . $percepcion . "]<br>";
	//echo "RETENCION=[" . $retencion . "]<br>";
	echo "{&[" . $percepcion . "]&}"; 
	echo "{#[" . $retencion . "]#}"; 


  }


 ?>
