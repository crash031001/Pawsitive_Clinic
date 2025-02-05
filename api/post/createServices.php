<?php  
if ($_SERVER['REQUEST_METHOD'] == 'POST') {  
  include '../database.php';  
  
  $nombre = $_POST['nombre'];  
  $detalles = $_POST['detalles'];  
  $costo = $_POST['costo'];  
  $fecha = $_POST['fecha'];  
  $nombre_doctor = $_POST['nombre_doctor'];  
  $nombre_mascota = $_POST['nombre_mascota'];  
  
  // ----- Obtener doctor_id -----  
  $sql_doctor = "SELECT id FROM doctores WHERE nombre = '$nombre_doctor'";  
  $result_doctor = $db->query($sql_doctor);  
  $row_doctor = $result_doctor->fetch(PDO::FETCH_ASSOC);  
  $doctor_id = $row_doctor['id']; // Cambié 'doctor_id' a 'id'  
  
  
  // ----- Obtener mascota_id -----  
  $sql_mascota = "SELECT id FROM mascotas WHERE nombre = '$nombre_mascota'";  
  $result_mascota = $db->query($sql_mascota);  
  $row_mascota = $result_mascota->fetch(PDO::FETCH_ASSOC);  
  $mascota_id = $row_mascota['id']; // Cambié 'mascota_id' a 'id'  
  
  
  // ----- Insertar en la tabla servicios -----  
  $sql = "INSERT INTO servicios (nombre_servicio, detalle, costo, fecha, doctor_id, mascota_id) VALUES ('$nombre', '$detalles', '$costo', '$fecha', '$doctor_id', '$mascota_id')";  
  
  try {  
    $db->query($sql);  
    echo "Servicio registrado correctamente.";  
  } catch (Throwable $th) {  
    echo $th->getMessage();  
  }  
}  
?>


