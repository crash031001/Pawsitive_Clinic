<?php
include '../database.php';
$sql = "SELECT * FROM clientes;";
$query = $db->query($sql);
$clientes = [];

if ($query) {
  while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    $clientes[] = $row;
  }
}

header('Content-Type: application/json');
echo json_encode($clientes);
