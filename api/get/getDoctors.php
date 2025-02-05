<?php
include 'C:\xampp\htdocs\WEB_FINAL\api\database.php';
$sql = "SELECT * FROM doctores;";
$query = $db->query($sql);
$doctores = [];
if ($query) {
  while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    $doctores[] = $row;
  }
}