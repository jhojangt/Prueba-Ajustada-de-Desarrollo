<?php require RUTA_APP . '/vistas/inc/header.php' ?>
<a href="<?php echo RUTA_URL;?>/paginas" class="btn btn-light"><i class="fa fa-backward"></i>volver</a>
<div class="card-body bg-light mt-5">
	<h2>
		Editar Tarea
	</h2>
	<form action="<?php echo RUTA_URL;?>/paginas/editar/<?php echo $datos['id']?>" method="POST">
		<div class="form-group">
			<label for="nombre_Tarea">Nombre Tarea <sup>*</sup></label>
			<input type="text" name="nombre_Tarea" class="form-control form-control-lg" value="<?php echo $datos['nombre_Tarea']?>">
		</div>
		<div class="form-group">
			<label for="fecha_Inicio_tarea">Fecha Inicio<sup>*</sup></label>
			<div class="input-group date" id="datetimepickerFechaIni" data-target-input="nearest">
	                <input type="text" class="form-control datetimepicker-input"  name="fecha_Inicio_tarea" id="fecha_Inicio_tarea" data-target="#datetimepickerFechaIni" value="<?php echo $datos['fecha_Inicio_tarea']?>"/>
	                <div class="input-group-append" data-target="#datetimepickerFechaIni" data-toggle="datetimepicker">
	                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
	                </div>
	       </div>
       </div>
       <div class="form-group">
			<label for="fecha_fin_tarea">Fecha Fin<sup>*</sup></label>
			<div class="input-group date" id="datetimepickerFechaFin" data-target-input="nearest">
	                <input type="text" class="form-control datetimepicker-input"  name="fecha_fin_tarea" id="fecha_fin_tarea" data-target="#datetimepickerFechaFin" value="<?php echo $datos['fecha_fin_tarea']?>"/>
	                <div class="input-group-append" data-target="#datetimepickerFechaFin" data-toggle="datetimepicker">
	                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
	                </div>
	       </div>
       </div>
		<div class="form-group">
			<label for="comentarios">Comentario <sup>*</sup></label>
			<textarea  name="comentarios" class="form-control form-control-lg"><?php echo $datos['comentarios']?></textarea>>
		</div>
		<input type="submit" name="btn btn-success" value="editar tarea">
	</form>
</div>
<?php require RUTA_APP . '/vistas/inc/footer.php' ?>
