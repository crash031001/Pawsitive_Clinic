<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  include '/Applications/XAMPP/xamppfiles/htdocs/pawsitive/api/database.php';

  // Asegúrate de que el formulario incluya el ID de la mascota
  $mascota_id = $_POST['mascota_id'];
  $nombre = $_POST['nombre'];
  $edad = $_POST['edad'];
  $tipo = $_POST['tipo'];
  $color = $_POST['color'];
  $sexo = $_POST['sexo'];
  $cliente_id = $_POST['id_cliente'];


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
    header('Location: ../../views/mascotas.php');
  } catch (Throwable $th) {
    echo $th->getMessage();
  }
}
