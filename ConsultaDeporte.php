<?php 
	
	$rango = 20;

	if (isset($_POST["rango"]) and $_POST["rango"]!=''){ $rango=$_POST["rango"];}
	
	require_once '../class/classDeporte.php';
	$deporte = new Deporte($id,$nombre);
	$deporte->listarDeporte();


	
	//$sql="select first($rango) * from deportes"; 
	//$result=mysql_query($sql, $conexion); 
	
	$cabecera = '<table class="table table-striped table-bordered bootstrap-datatable datatable" >
		<thead >
		<tr >
			<th>Deporte</th>
		</tr>
		</thead>   
		<tbody>';
		
	$footer = "</tbody>
			</table>";
			
	$tabladeporte='';
	
	while ($row=@mysql_fetch_array($deporte)) { 
	$tabladeporte = $tabladeporte.' <tr> <td style="width:300px;font-size:90%">'.$row->descripcion.'</td>
			</tr>';		
    } 
	
	$tabladeporte = $cabecera.$tabladeporte.$footer;
	
	@mysql_close($conexion); 
?> 
	


		  
