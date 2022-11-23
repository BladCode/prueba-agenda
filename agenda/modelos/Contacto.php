<?php
require_once 'Conexion.php';

public class Contacto {
    public $id;
    public $telefono;
    public $nombre;
    public $tipo;
    public $observaciones;
    public $estado;
    private $conexion;

    public function __construct()
    {
        $this->id            = 0;
        $this->telefono      = '';
        $this->nombre        = '';
        $this->tipo          = '';
        $this->observaciones = '';
        $this->estado        = 1;
        $this->conexion      = new Conexion();
    }

    public static function mostrar()
    {
        $conexion = new Conexion();
        $listado  = $conexion->consultar('SELECT id, telefono, nombre, tipo, observaciones FROM contacto where estado = 1');
        $conexion->cerrar();
        return $listado;
    }

    public static function mostrarPorId($id)
    {
        $conexion = new Conexion();
        $listado  = $conexion->consultar("SELECT id, telefono, nombre, tipo, observaciones FROM contacto where id = $id");
        $conexion->cerrar();
        return $listado[0];
    }

    public function insertarC()
    {
        $insert    = "INSERT INTO contacto(telefono, nombre, tipo, observaciones) VALUES ('$this->telefono', '$this->nombre', '$this->tipo', '$this->observaciones')";
        $resultado = $this->conexion->actualizar($insert);
        $this->conexion->cerrar();
        return $resultado;
    }

    public function eliminar()
    {
        $delete    = "UPDATE contacto set estado = 0 where id = $this->id";
        $resultado = $this->conexion->actualizar($delete);
        $this->conexion->cerrar();
        return $resultado;
    }

    public function modificar()
    {
        $update    = "UPDATE contacto set telefono = '$this->telefono', nombre = '$this->nombre', tipo = '$this->tipo', observaciones = '$this->observaciones' where id = $this->id";
        $resultado = $this->conexion->actualizar($update);
        $this->conexion->cerrar();
        return $resultado;
    }
}
