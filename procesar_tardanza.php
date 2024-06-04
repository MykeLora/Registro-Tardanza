<?php


date_default_timezone_set('America/Santo_Domingo');
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $matricula = $_POST['matricula'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $curso = $_POST['curso'];
    $motivo = $_POST['motivo'];
    $fecha = date('Y-m-d H:i:s');

    if(!file_exists('tardanzas')){
        mkdir('tardanzas', 0777, true);
    }

    $estudiante = array(
        'matricula' => $matricula,
        'nombre' => $nombre,
        'apellido' => $apellido,
        'curso' => $curso,
        'motivo' => $motivo,
        'fecha' => $fecha
    );

    $estudiante_json = json_encode($estudiante);

    $estudiantebyMatricula = 'tardanzas/matricula_'. $matricula .'.json';

    file_put_contents($estudiantebyMatricula, $estudiante_json);

    header('Location: index.php');
    exit();

}

?>