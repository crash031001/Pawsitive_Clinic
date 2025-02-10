<?php   
if ($_SERVER['REQUEST_METHOD'] == 'POST') {   
  include '../database.php';   
 
  $id = $_POST['delete_id'];   
   
    
  $sql = "DELETE FROM mascotas WHERE id = '$id'";   
   
  try {   
    $db->query($sql);
    header ('Location: ../../views/mascotas.php');     
  } catch (Throwable $th) {   
    echo $th->getMessage();   
  }   
}   
?>
