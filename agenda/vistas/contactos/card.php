
	<table class="table table-dark" collapse	>
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombres</th>
				<th>Apellidos</th>
				<th>Telefono</th>
				<th>Correo</th>
				<th colspan="5">Opciones</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach (Contacto::mostrar() as $fila) { ?>
				<tr>
					<td><?= $fila[0] ?></td>
					<td><?= $fila[1] ?></td>
					<td><?= $fila[2] ?></td>
					<td><?= $fila[3] ?></td>
					<td><?= $fila[4] ?></td>
					<td>
						<a class="btn btn-warning" href="editar.php?id=<?=base64_encode($fila[0])?>">Editar</a>
					</td>
					<td>
						<a class="btn btn-danger" href="../../controladores/Contactos.php?accion=Eliminar&id=<?=base64_encode($fila[0])?>" onclick="return confirm('¿Desea eliminar?')">Eliminar</a>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>

    
    <?php foreach (Contacto::mostrar() as $fila2) {?>
    <div class="container">
                <div class="card" style="width: 15rem;">
                    <img src="https://www.insidemathematics.org/sites/default/files/2019-10/610-6104451_image-placeholder-png-user-profile-placeholder-image-png.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <input type="hidden" name="id" value="<?= $fila2[0] ?>"/>
                        <td><?= $fila2[1] ?></td>

					<td><?= $fila2[3] ?></td>
					<td><?= $fila2[4] ?></td>
                        
                        <a class="btn btn-danger" href="../../controladores/Contactos.php?accion=Eliminar&id=<?=base64_encode($fila2[0])?>" onclick="return confirm('¿Desea eliminar?')">Eliminar</a>
                    </div>
                </div>  
    </div>
    <?php }?>


    <!-- Modal -->
<div class="modal fade" id="insertarContacto" tabindex="-1" aria-labelledby="insertarContactoLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="insertarContactoLabel">Registrar Contacto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <h6>Datos del Contacto</h6>
      <form action="../../controladores/Contactos.php" method="post">
        <div class="form-group">
		    <input name="nombres" class="form-control" placeholder="Nombres" required autofocus />
        </div>
        <div class="form-group">
		    <input name="apellidos" class="form-control" placeholder="Apellidos" required autofocus />
        </div>
        <div class="form-group">
		    <input name="telefono" class="form-control" placeholder="Telefono" required autofocus />
        </div>
        <div class="form-group">
		    <input name="correo" class="form-control" type="email" placeholder="Correo" required autofocus />
        </div>
        
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button name="accion" type="submit" class="btn btn-primary" value="Insertar">Guardar Contacto</button>
      </div>
	</form>
      </div>
    </div>
  </div>
</div>