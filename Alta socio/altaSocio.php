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
					<i class="icon-home"></i> <!-- Home/Deportes/alta que aparece abajo del logo en el navegador  -->
					<a href="index.php">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Socios</a>					
					<i class="icon-angle-right"></i>
					<a href="#">Alta</a>					
				</li>
			</ul>

			<div class="box-content">
				
				<form class="form-horizontal" method="POST" action="Insertar/insertarSocio.php">
     			
     				<div class="form-group">
				        <label class="control-label col-xs-3 "><strong>Nombre:</strong></label>
				        <div class="col-xs-9">
				            <input type="text"  name= "nombre"class="form-control input-lg" placeholder="Nombre">
				        </div>
				    </div>
				    <div class="form-group">
				    	<br>
				        <label class="control-label col-xs-3"><strong>Apellido:</strong></label>
				        <div class="col-xs-9">
				            <input type="text" name="apellido"class="form-control input-lg" placeholder="Apellido">
				        </div>
				    </div>
				    
				    <div class="form-group">
				    	<br>
				        <label class="control-label col-xs-3" ><strong>Telefono Movil:</strong></label>
				        <div class="col-xs-9">
				            <input type="text" name="telefono_movil" class="form-control input-lg" placeholder="Telefono Movil">
				        </div>
				    </div>
				    <div class="form-group">
				    	<br>
				        <label class="control-label col-xs-3" ><strong>Telefono Fijo:</strong></label>
				        <div class="col-xs-9">
				            <input type="tel" name="telefono_fijo" class="form-control input-lg" placeholder="Telefono Fijo">
				        </div>
				    </div>
				    <div class="form-group">
				    	<br>
				        <label class="control-label col-xs-3" ><strong>Fecha Nacimiento:</strong></label>
				        <div class="col-xs-9">
				    	<input type="date" name="fecha_Nac">
				    </div>
				    	<div class="form-group">
				    		<br>
				        <label class="control-label col-xs-3"><strong>Genero:</strong></label>
				        <div class="col-xs-2">
				            <label class="radio-inline">
				                <input type="radio" name="genderRadios" value="male"> Maculino
				            </label>
				        </div>
				        <div class="col-xs-2">
				            <label class="radio-inline">
				                <input type="radio" name="genderRadios" value="female"> Femenino
				            </label>
				        </div>
				    </div>
				   <div class="form-group">
				    	<br>
				        <label class="control-label col-xs-3" ><strong>E-Mail:</strong></label>
				        <div class="col-xs-9">
				            <input type="text" name="mail" class="form-control input-lg" placeholder="E-Mail">
				        </div>
				    </div>
				    <div class="form-group">
				    	<br>
				        <label class="control-label col-xs-3" ><strong>Contraseña:</strong></label>
				        <div class="col-xs-9">
				            <input type="text" name="pass" class="form-control input-lg" placeholder="Contraseña">
				        </div>
				    </div>
				    <div class="form-group">
				    	<br>
				        <label class="control-label col-xs-3" ><strong> Confirmar Contraseña:</strong></label>
				        <div class="col-xs-9">
				            <input type="text" name="confirma_pass" class="form-control input-lg" placeholder="Confirmar Contraseña">
				        </div>
				    </div>
				    <div class="form-group">
				    	<br>
				        <label class="control-label col-xs-3" ><strong>Ciudad:</strong></label>
				        <div class="col-xs-9">
				        	<select name="Ciudad" size="1">    
							       <option value="Mar del Plata" selected="selected">Mar del Plata</option>
							       <option value="Villa Gesell">Gesell</option>
							       <option value="Madariaga">Madariaga</option>
							        <option value="Balcarce">Balacarce</option>
						</select>
				      
				    </div>
				    <div class="form-group">
				    	<br>
				        <div class="col-xs-offset-3 col-xs-9">
				            <input type="submit" class="btn btn-primary" value="Enviar">
				            <input type="reset" class="btn btn-default" value="Limpiar">
				        </div>
				    </div>
				    
				</form>

			</div>
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<?php include("footer.html");?>
	
</body>
</html>