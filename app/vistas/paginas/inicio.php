
<?php require RUTA_APP . '/vistas/include/header.php'; ?>

  <br>
  <div class="container">
    <table class="table table-hover">
      <thead class="thead-dark">
        <tr>
          <th>Id</th>
          <th>Nombre</th>
          <th>Email</th>
          <th>Telefono</th>
          <th>Acciones</th>
          <th></th>
        </tr>
      </thead>

      <tbody>

        <?php foreach ($datos['usuarios'] as $usuario): ?>

        <tr>
          <td><?php echo $usuario->id_usuario; ?></td>
          <td><?php echo $usuario->nombre_usuario; ?></td>
          <td><?php echo $usuario->correo_usuario; ?></td>
          <td><?php echo $usuario->telefono_usuario; ?></td>
          <td><a href="<?php echo RUTA_URL; ?>paginas/editar/<?php echo $usuario->id_usuario; ?>">Editar</a></td>
          <td><a href="<?php echo RUTA_URL; ?>paginas/eliminar/<?php echo $usuario->id_usuario; ?>">Eliminar</a></td>
        </tr>

        <?php endforeach; ?>

      </tbody>
    </table>
  </div>

<?php require RUTA_APP . '/vistas/include/footer.php'; ?>
