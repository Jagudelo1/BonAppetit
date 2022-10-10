<?php

require 'config.php';

$columns = ['Documento','Nombres','Apellidos','Celular','Fecha','Usuario','Contrasena'];
$columnsWhere = ['Documento','Nombres','Apellidos'];
$table = "clientes";

$campo = isset($_POST['campo']) ? $conn->real_escape_string($_POST['campo']) : null;

$where = '';

if ($campo != null) {
    $where = "WHERE (";

    $cont = count($columnsWhere);
    for ($i = 0; $i < $cont; $i++) {
        $where .= $columnsWhere[$i] . " LIKE '%" . $campo . "%' OR ";
    }
    $where = substr_replace($where, "", -3);
    $where .= ")";
}


$sql = "SELECT " . implode(", ", $columns) . "
FROM $table
$where ";
$resultado = $conn->query($sql);
$num_rows = $resultado->num_rows;

$html = '';

if($num_rows > 0){
    while ($row = $resultado->fetch_assoc()) {
        $html .= '<tr>';
        $html .= '<td>'.$row['Documento'].'</td>';
        $html .= '<td>'.$row['Nombres'].'</td>';
        $html .= '<td>'.$row['Apellidos'].'</td>';
        $html .= '<td>'.$row['Celular'].'</td>';
        $html .= '<td>'.$row['Fecha'].'</td>';
        $html .= '<td>'.$row['Usuario'].'</td>';
        $html .= '<td>'.$row['Contrasena'].'</td>';
        $html .= '<td><a href=""><span class="material-icons-sharp">edit</span></a></td>';
        $html .= '<td><a href=""><span class="material-icons-sharp" style="color: red;">delete</span></a></td>';
        $html .= '</tr>';
    }
} else {
    $html .= '<tr>';
    $html .= '<td colspan="7">Sin resultados</td>';
    $html .= '</tr>';
}

echo json_encode($html, JSON_UNESCAPED_UNICODE);