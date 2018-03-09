<?php

  class Usuario
  {

    private $db;

    public function __construct()
    {
      $this->db = new Base;
    }

    public function obtenerUsuarios()
    {
      $this->db->consulta("SELECT * FROM usuarios");
      $resultados = $this->db->registros();
      return $resultados;
    }

    public function agregarUsuario($datos)
    {
      $this->db->consulta("INSERT INTO usuarios (nombre_usuario, correo_usuario, telefono_usuario) VALUES (:nombre, :correo, :telefono)");
      //vinculamos los valores
      $this->db->vincular(':nombre', $datos['nombre']);
      $this->db->vincular(':correo', $datos['correo']);
      $this->db->vincular(':telefono', $datos['telefono']);
      //ejecutar
      if ($this->db->ejecutar())
      {
        return true;
      }
      else
      {
        return false;
      }
      $resultados = $this->db->registros();;
    }

  }

?>
