<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  include '../database.php';
  $nombre = $_POST['nombre'];
  $cargo = $_POST['cargo'];
  $dir = $_POST['dir'];
  $tel = $_POST['tel'];

  $sql = "INSERT INTO doctores (nombre_apellido,cargo,direccion,telefono) VALUES('$nombre','$cargo','$dir','$tel')";


  try {
    $db->query($sql);
    header ('Location: ../../views/doctores.php');
  } catch (\Throwable $th) {
    echo $th->getMessage();
  }
}
