<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
  include '../database.php'; 

  // Asegúrate de que el formulario incluya el ID del cliente
  $cliente_id = $_POST['cliente_id']; 
  $nombre = $_POST['nombre']; 
  $zona = $_POST['zona']; 
  $dir = $_POST['dir']; 
  $tel = $_POST['tel']; 

  // Consulta SQL para actualizar el cliente
  $sql = "UPDATE clientes SET 
            nombre_apellido = '$nombre', 
            zona = '$zona', 
            direccion = '$dir', 
            telefono = '$tel' 
          WHERE id = '$cliente_id';"; 

  try { 
    $db->query($sql); 
    echo "Cliente actualizado correctamente."; 
  } catch (Throwable $th) { 
    echo $th->getMessage(); 
  } 
}  
?>
