<?php  
if ($_SERVER['REQUEST_METHOD'] == 'POST') {  
  include '../database.php'; 
   
  $nombre = $_POST['nombre_apellido'];  
  $id = $_POST['id'];  
  
  $sql = "DELETE FROM doctores WHERE nombre_apellido = '$nombre' AND id = '$id';";  
  
  try {  
    $db->query($sql);  
  } catch (Throwable $th) {  
    echo $th->getMessage();  
  }  
}  
?>
