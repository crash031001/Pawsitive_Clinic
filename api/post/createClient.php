<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  include '../database.php';
  $nombre = $_POST['nombre'];
  $zona = $_POST['zona'];
  $dir = $_POST['dir'];
  $tel = $_POST['tel'];

  $sql = "INSERT INTO clientes (nombre_apellido,zona,direccion,telefono) VALUES('$nombre','$zona','$dir','$tel';)";


  try {
    $db->query($sql);
  } catch (\Throwable $th) {
    echo $th->getMessage();
  }
}
