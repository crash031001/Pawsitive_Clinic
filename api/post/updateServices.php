<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  include '../database.php';

  $servicio_id = $_POST['servicio_id']; // ID del servicio a modificar
  $nombre = $_POST['nombre'];
  $detalles = $_POST['detalles'];
  $costo = $_POST['costo'];
  $fecha = $_POST['fecha'];
  $doctor_id = $_POST['id_doctor'];
  $mascota_id = $_POST['id_mascota'];


  // ----- Actualizar en la tabla servicios -----
  $sql = "UPDATE servicios SET
            nombre_servicio = '$nombre',
            detalle = '$detalles',
            costo = '$costo',
            fecha = '$fecha',
            doctor_id = '$doctor_id',
            mascota_id = '$mascota_id'
          WHERE id = '$servicio_id'";

  try {
    $db->query($sql);
    header('Location: ../../views/servicios.php');
  } catch (Throwable $th) {
    echo $th->getMessage();
  }
}
