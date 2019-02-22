<?php require RUTA_APP . '/vistas/inc/header.php' ?>
<table class="table">
	<thead>
		<tr>
			<th>Id</th>
			<th>Nombre</th>
			<th>Fecha Inicio</th>
			<th>Fecha Fin</th>
			<th>Comentarios</th>
			<th>Acciones</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($datos['usuarios'] as $tarea) { ?>
			<tr>
				<td> <?php echo $tarea->id?></td>
				<td> <?php echo $tarea->nombre_Tarea?></td>
				<td> <?php echo $tarea->fecha_Inicio_tarea?></td>
				<td> <?php echo $tarea->fecha_fin_tarea?></td>
				<td> <?php echo $tarea->comentarios?></td>
				<td>
					<a href="<?php echo RUTA_URL;?>/paginas/editar/<?php echo $tarea->id?>">Editar</a>
				</td>
				<td>
					<a href="<?php echo RUTA_URL;?>/paginas/borrar/<?php echo $tarea->id?>">Borrar</a>
				</td>
			</tr>
		<?php }?>
	</tbody>
</table>
<?php require RUTA_APP . '/vistas/inc/footer.php' ?>
