<?php  
if ($_SERVER['REQUEST_METHOD'] == 'POST') {  
  include '../database.php';  
  
  $nombre = $_POST['nombre'];  
  $edad = $_POST['edad'];  
  $tipo = $_POST['tipo'];  
  $color = $_POST['color'];  
  $sexo = $_POST['sexo'];  
  $id_cliente = $_POST['id_cliente'];  
  
  $sql = "INSERT INTO mascotas (nombre, tipo, color, edad, sexo, cliente_id) VALUES ('$nombre', '$tipo','$color', '$edad', '$sexo', '$id_cliente')";  
  
  try {  
    $db->query($sql);  
    header ('Location: ../../views/mascotas.php');
  } catch (Throwable $th) {  
    echo $th->getMessage();  
  }  
}  
?>