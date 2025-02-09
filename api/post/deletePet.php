<?php   
if ($_SERVER['REQUEST_METHOD'] == 'POST') {   
  include '../database.php';   
   
  $nombre = $_POST['nombre'];   
  $id = $_POST['id'];   
   
    
  $sql = "DELETE FROM mascotas WHERE nombre = '$nombre' AND id = '$id';";   
   
  try {   
    $db->query($sql);     
  } catch (Throwable $th) {   
    echo $th->getMessage();   
  }   
}   
?>
