<?php  
if ($_SERVER['REQUEST_METHOD'] == 'POST') {  
  include '../database.php';  
  
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
  
  
  
  // ----- Insertar en la tabla servicios -----  
  $sql = "INSERT INTO mascotas (nombre, tipo, color, edad, sexo, cliente_id) VALUES ('$nombre', '$tipo','$color', '$edad', '$sexo', '$cliente_id')";  
  
  try {  
    $db->query($sql);  
    echo "mascota registrado correctamente.";  
  } catch (Throwable $th) {  
    echo $th->getMessage();  
  }  
}  
?>