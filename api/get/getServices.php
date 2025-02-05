<?php
include '../database.php';
$sql = "SELECT * FROM servicios;";
$query = $db->query($sql);
$servicios = [];

if ($query) {
  while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    $servicios[] = $row;
  }
}

header('Content-Type: application/json');
echo json_encode($servicios);
