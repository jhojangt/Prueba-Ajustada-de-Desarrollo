<?php require RUTA_APP . '/vistas/inc/header.php' ?>
<a href="<?php echo RUTA_URL;?>/paginas" class="btn btn-light"><i class="fa fa-backward"></i>volver</a>
<div class="card-body bg-light mt-5">
	<h2>
		Borrar Tarea
	</h2>
	<form action="<?php echo RUTA_URL;?>/paginas/borrar/<?php echo $datos['id']?>" method="POST">
		<div class="form-group">
			<label for="nombre_Tarea">Nombre Tarea <sup>*</sup></label>
			<input type="text" name="nombre_Tarea" class="form-control form-control-lg" disabled value="<?php echo $datos['nombre_Tarea']?>">
		</div>
		<div class="form-group">
			<label for="fecha_Inicio_tarea">Fecha Inicio<sup>*</sup></label>
	        <input type="text" class="form-control"  name="fecha_Inicio_tarea" disabled="disabled" id="fecha_Inicio_tarea"  value="<?php echo $datos['fecha_Inicio_tarea']?>"/>	                
       </div>
       <div class="form-group">
			<label for="fecha_fin_tarea">Fecha Fin<sup>*</sup></label>
	        <input type="text" class="form-control"  name="fecha_fin_tarea" disabled="disabled" id="fecha_fin_tarea" value="<?php echo $datos['fecha_fin_tarea']?>"/>
       </div>
		<div class="form-group">
			<label for="comentarios">Comentario <sup>*</sup></label>
			<textarea  name="comentarios" class="form-control form-control-lg"disabled ><?php echo $datos['comentarios']?></textarea>
		</div>
		<input type="submit" class="btn btn-success" value="Borrar Usuario">
	</form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php' ?>
