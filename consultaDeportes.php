<!DOCTYPE html>
<html lang="en">

<?php require("header.html");?>

<body>

	<?php 
		//include "conexion.php";
		//$conn=conectar();
		
		include("navbar.php");?>
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<?php include("mainmenu.php");?>
			<!-- end: Main Menu -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.php">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Deportes</a>					
					<i class="icon-angle-right"></i>
					<a href="#">Consulta</a>					
				</li>
			</ul>

			<div class="row-fluid">	
				<div class="form-horizontal span4">				
					<div class="control-group">
						<label class="control-label" for="selectRango">Listar</label>
						<div class="controls">
							<select id="selectRango" data-rel="chosen" style="width:70px;">
								<option value="5" >5</option>
								<option value="10" >10</option>
								<option value="20" selected>20</option>
								<option value="50" >50</option>
								<option value="1000" >Todo</option>
							</select>
							</br>	
							<button type="button" class="btn btn-primary" id="buscar">Buscar</button>
						</div>
					</div>					
				</div>
			</div>
			</br>				
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white list"></i><span class="break"></span>Deportes</h2>
					</div>

					<div class="box-content" >
						<div> 
							<button type="button" class="btn btn-primary icon-print" id="imp"></button>
							<button type="button" class="btn btn-primary icon-arrow-down" id="exc"></button></br>
						</div> 
						<div id="tablaDeporte"> 
						</div> 						           
					</div>
				</div><!--/span-->			
			</div><!--/row-->
			</br>				
			
			</div><!--/.fluid-container-->
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<?php include("footer.html");?>
	
</body>
	<script  type="text/javascript"> 
		$(function () {						
		
			$("#buscar").click(function(){
				$("#tablaDeporte").load("tablas/ConsultaDeporte.php",{rango:$("#selectRango").val()}, function(){});							
			});
			
		});
	</script>
</html>