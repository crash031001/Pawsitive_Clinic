<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
  include '../database.php'; 

  // Asegúrate de que el formulario incluya el ID del doctor
  $doctor_id = $_POST['doctor_id']; 
  $nombre = $_POST['nombre']; 
  $cargo = $_POST['cargo']; 
  $dir = $_POST['dir']; 
  $tel = $_POST['tel']; 

  // Consulta SQL para actualizar el doctor
  $sql = "UPDATE doctores SET 
            nombre_apellido = '$nombre', 
            cargo = '$cargo', 
            direccion = '$dir', 
            telefono = '$tel' 
          WHERE id = '$doctor_id';"; 

  try { 
    $db->query($sql); 
    echo "Doctor actualizado correctamente."; 
  } catch (Throwable $th) { 
    echo $th->getMessage(); 
  } 
}  
?>
