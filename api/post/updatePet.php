<?php   
if ($_SERVER['REQUEST_METHOD'] == 'POST') {   
  include '../database.php';   

  // Asegúrate de que el formulario incluya el ID de la mascota
  $mascota_id = $_POST['mascota_id'];   
  $nombre = $_POST['nombre'];   
  $edad = $_POST['edad'];   
  $tipo = $_POST['tipo'];   
  $color = $_POST['color'];   
  $sexo = $_POST['sexo'];   
  $nombre_cliente = $_POST['nombre_cliente'];   

  // ----- Obtener cliente_id -----   
  $sql_cliente = "SELECT id FROM clientes WHERE nombre = '$nombre_cliente'";   
  $result_cliente = $db->query($sql_cliente);   
  $row_cliente = $result_cliente->fetch(PDO::FETCH_ASSOC);   
  $cliente_id = $row_cliente['id'];   

  // ----- Actualizar en la tabla mascotas -----   
  $sql = "UPDATE mascotas SET 
            nombre = '$nombre', 
            tipo = '$tipo', 
            color = '$color', 
            edad = '$edad', 
            sexo = '$sexo', 
            cliente_id = '$cliente_id' 
          WHERE id = '$mascota_id'";   

  try {   
    $db->query($sql);   
    echo "Mascota actualizada correctamente.";   
  } catch (Throwable $th) {   
    echo $th->getMessage();   
  }   
}   
?>
