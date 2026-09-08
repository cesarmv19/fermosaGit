<?php

include 'db.php';

$data = json_decode(file_get_contents('php://input'), true);
$apellido = $data['afiliado_apellido'];
$nombre = $data['afiliado_nombre'];
$dni = $data['afiliado_dni'];
$domicilio = $data['afiliado_domicilio'];

$sql = "INSERT INTO afiliados (afiliado_apellido, afiliado_nombre, afiliado_dni, afiliado_domicilio) VALUES('$apellido', '$nombre', $dni, '$domicilio')";

if ($conn->query($sql) == TRUE) {
    echo json_encode(array('message' => 'Afiliado creado correctamente'));
}else{
    echo json_encode(array('message' => 'Error al crear afiliado' . $conn->error));
}

?>