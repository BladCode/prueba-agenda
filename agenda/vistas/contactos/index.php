<?php require_once '../../modelos/Contacto.php' ?>

<!DOCTYPE html>
  <html lang="es">
  <head>
	  <meta charset="UTF-8" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">	
      <title>Contactos</title>
  </head>
  <body>
    <div class="container">
      <div class="form-group">
        <h1 class="text-center">Lista de Contactos</h1>
      </div>
    </div>
    <div class="container">
      <div class="form-group">
        <a href="insertar.php" class="btn btn-link">Registrar Nuevo Contacto</a>
      </div>
    </div>
    <div class="container">
      <table class="table" collapse	>
        <thead>
          <tr>
            <th>ID</th>
            <th>Telefono</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Observaciones</th>
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
                <a class="btn btn-light" href="editar.php?id=<?=base64_encode($fila[0])?>">Editar</a>
              </td>
              <td>
                <a class="btn btn-dark" href="../../controladores/Contactos.php?accion=Eliminar&id=<?=base64_encode($fila[0])?>" onclick="return confirm('¿Desea eliminar?')">Eliminar</a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>