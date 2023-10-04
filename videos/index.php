<!--
FUENTE WEB
SUSCRÍBETE Y ESPERA MAS CONTENIDO!!!
-->



<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
	</head>
<body>
<a href="logout.php"><button class="btn1" style="
    margin-left: 10px;
    margin-top: 10px;
    margin-bottom: 10px;
	color: white;
    background: #31708f;
    border: none;
    height: 37px;
    border-radius: 6px;
	font-family: 'Quicksand', sans-serif;
">Cerrar sesión</button></a>
	<nav class="navbar navbar-default">
		
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary" style="font-family: 'Quicksand', sans-serif;">Subir videos a ACADEMIA DE PORTEROS</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#form_modal" style="font-family: 'Quicksand', sans-serif; background:#31708f;"><span class="glyphicon glyphicon-plus"></span> Agregar Video</button>
		<br /><br />
		<hr style="border-top:3px solid #ccc;"/>
		<?php
			require 'conn.php';
			
			$query = mysqli_query($conn, "SELECT * FROM `video` ORDER BY `video_id` ASC") or die(mysqli_error());
			while($fetch = mysqli_fetch_array($query)){
		?>
		<div class="col-md-12">
			<div class="col-md-4" style="word-wrap:break-word; font-family: 'Quicksand', sans-serif;">
				<br />
				<h4>Nombre del Video:</h4>
				<h5 class="text-primary"><?php echo $fetch['video_name']?></h5>
				<br />
				<h4>Descripcion:</h4>
				<h5 class="text-primary"><?php echo $fetch['descripcion']?></h5>				
			</div>
			<div class="col-md-8">
				<video width="100%" height="240" controls>
					<source src="<?php echo $fetch['location']?>">
				</video>
			</div>
			<br style="clear:both;"/>
			<hr style="border-top:1px groovy #000;"/>
		</div>
		<?php
			}
		?>
	</div>
	<div class="modal fade" id="form_modal" aria-hidden="true">
		<div class="modal-dialog">
			<form action="save_video.php" method="POST" enctype="multipart/form-data">
				<div class="modal-content">
					<div class="modal-body">
						<div class="col-md-3"></div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Archivo de Video</label>
								<input type="file" name="video" class="form-control-file"/>
							</div>


  							<div class="form-group">
    							<label >Descripción</label>
    							<input type="text" name="descripcion" class="form-control-file"/>
  							</div>							
						</div>
					</div>
					<div style="clear:both;"></div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cerrar</button>
						<button name="save" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>