<?php 
include '../database.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
  $id = $_POST['delete_id']; 

  $sql = "DELETE FROM clientes WHERE id = '$id'"; 

  try { 
    $db->query($sql);
    header ('Location: ../../views/clientes.php');
  } catch (Throwable $th) { 
    echo $th->getMessage(); 
  } 
} 
?>
