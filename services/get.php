<?php

include 'db.php';

   // Endpoint para obtener todas las personas
   if (isset($_GET['id'])) {
    // Endpoint para obtener una persona por ID
    $id = $_GET['id'];
    $sql = "SELECT * FROM afiliados WHERE id_afiliado = $id";
} else {
    $sql = "SELECT * FROM afiliados";
}

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $afiliados = [];
    while ($row = $result->fetch_assoc()) {
        $afiliados[] = $row;
    }
    echo json_encode($afiliados);//convierte el array en formato json
} else {
    echo json_encode(array());
} 

// $sql = "SELECT * FROM afiliados";

// $result = $conn->query($sql);

// if($result->num_rows > 0){
//     $afiliados= [];
//     while ($row = $result->fetch_assoc()) {
//         $afiliados[] = $row;
//     }
//     echo json_encode($afiliados);
// }else{
//     echo json_encode(array());
// }


?>