<?php
include '../database.php';
$sql = "SELECT * FROM mascotas;";
$query = $db->query($sql);
$mascotas = [];

if ($query) {
  while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    $mascotas[] = $row;
  }
}

header('Content-Type: application/json');
echo json_encode($mascotas);
