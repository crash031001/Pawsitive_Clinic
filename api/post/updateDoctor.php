<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  include '../database.php';

  $doctor_id = $_POST['doctor_id'];
  $nombre = $_POST['nombre'];
  $cargo = $_POST['cargo'];
  $dir = $_POST['dir'];
  $tel = $_POST['tel'];


  $sql = "UPDATE doctores SET
            nombre_apellido = '$nombre',
            cargo = '$cargo',
            direccion = '$dir',
            telefono = '$tel'
          WHERE id = '$doctor_id';";

  try {
    $db->query($sql);
    header ('Location: ../../views/doctores.php');
  } catch (Throwable $th) {
    echo $th->getMessage();
  }
}
