<?php   
if ($_SERVER['REQUEST_METHOD'] == 'POST') {   
  include '../database.php';   
   
  $servicio_id = $_POST['servicio_id']; // ID del servicio a modificar
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
    echo "Servicio actualizado correctamente.";   
  } catch (Throwable $th) {   
    echo $th->getMessage();   
  }   
}   
?>  
