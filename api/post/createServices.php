<?php  
if ($_SERVER['REQUEST_METHOD'] == 'POST') {  
  include '../database.php';  
  
  $nombre = $_POST['nombre'];  
  $detalles = $_POST['detalles'];  
  $costo = $_POST['costo'];  
  $fecha = $_POST['fecha'];  
  $id_doctor = $_POST['id_doctor'];  
  $id_mascota = $_POST['id_mascota'];

  $sql = "INSERT INTO servicios (nombre_servicio, detalle, costo, fecha, doctor_id, mascota_id) VALUES ('$nombre', '$detalles', '$costo', '$fecha', '$id_doctor', '$id_mascota')";  
  
  try {  
    $db->query($sql);  
    header ('Location: ../../views/servicios.php');
  } catch (Throwable $th) {  
    echo $th->getMessage();  
  }  
}  
?>


