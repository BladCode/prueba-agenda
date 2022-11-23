<?php

require_once '../modelos/Contacto.php';

$accion = $_POST['accion'] ?? $_GET['accion'] ?? '';

if($accion != '') {
    $contacto = new Contacto();

    switch($accion) {
        case 'Insertar':
            $contacto->telefono = $_POST['telefono'];
            $contacto->nombre = $_POST['nombre'];
            $contacto->tipo = $_POST['tipo'];
            $contacto->observaciones = $_POST['observaciones'];
            $contacto->insertarC();
            break;
        case 'Editar':
            $contacto->id = base64_decode($_POST['id']);
            $contacto->telefono = $_POST['telefono'];
            $contacto->nombre = $_POST['nombre'];
            $contacto->tipo = $_POST['tipo'];
            $contacto->observaciones = $_POST['observaciones'];
            $contacto->modificar();
            break;
        case 'Eliminar':
            $contacto->id = base64_decode($_GET['id']);
            $contacto->eliminar();
            break;
    }
}

header('Location: ../vistas/contactos');
