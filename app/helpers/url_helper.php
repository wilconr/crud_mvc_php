<?php
  //para redireccinar pagina
  function redireccionar($pagina)
  {
    header('location: ' . RUTA_URL . $pagina);
  }
?>
