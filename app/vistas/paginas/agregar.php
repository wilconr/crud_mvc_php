
<?php require RUTA_APP . '/vistas/include/header.php'; ?>

  <br>

  <div class="container">
    <div class="card">
      <div class="card-header">
        <a class="float-left" href="<?php echo RUTA_URL; ?>/paginas" class="btn" role="button"><i class="fa fa-backward"> Volver</i></a>
        <h2 class="text-center">Agregar Usuario</h2>
      </div>
      <div class="card-body">
        <form action="<?php echo RUTA_URL; ?>/paginas/agregar" method="POST">
          <div class="form-group">
            <label for="nombre">Nombre: <sub>*</sub></label>
            <input type="text" class="form-control" name="nombre" id="Nombre" aria-describedby="NombreAyuda" placeholder="Nombre">
            <small id="NombreAyuda" class="form-text text-muted">Escriba su nombre completo</small>
          </div>
          <div class="form-group">
            <label for="correo">Correo: <sub>*</sub></label>
            <input type="email" class="form-control" name="correo" id="Correo" aria-describedby="CorreoAyuda" placeholder="Correo">
            <small id="CorreoAyuda" class="form-text text-muted">Escriba un correo valido</small>
          </div>
          <div class="form-group">
            <label for="telefono">Telefono: <sub>*</sub></label>
            <input type="text" class="form-control" name="telefono" id="Telefono" aria-describedby="TelefonoAyuda" placeholder="Telefono">
            <small id="TelefonoAyuda" class="form-text text-muted">Escriba su telefono completo</small>
          </div>
          <button type="submit" class="btn btn-success">Agregar Usuario</button>
        </form>
      </div>
    </div>
  </div>

  <br>
<?php require RUTA_APP . '/vistas/include/footer.php'; ?>
