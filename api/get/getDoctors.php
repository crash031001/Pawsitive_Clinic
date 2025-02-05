<?php
include '../database.php';
$sql = "SELECT * FROM doctores;";
$query = $db->query($sql);
$doctores = [];

if ($query) {
  while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    $doctores[] = $row;
  }
}

header('Content-Type: application/json');
echo json_encode($doctores);
