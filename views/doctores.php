<?php
include 'C:\xampp\htdocs\WEB_FINAL\api\get\getDoctors.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap-5.3.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../css/tables.css">
</head>
<body class="bg-green">
  <span class="header mt-5 text-light fs fw-bold">Doctores
  <a href="../forms/addDoctor.html"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-plus-square-fill icon add" viewBox="0 0 16 16">
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0"/>
</svg></a>
  </span>
  <table class="w-50">
        <thead>
          <tr>
            <th class="bg-green " scope="col">Nombre y Apellidos</th>
            <th class="bg-green " scope="col">Teléfono</th>
            <th class="bg-green " scope="col">Dirección</th>
            <th class="bg-green " scope="col">Cargo</th>
            <th class="bg-green " scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php  foreach($doctores as $doc): ?>
          <tr>
            <td><?php echo $doc['nombre_apellido'] ?></td>
            <td><?php echo $doc['telefono'] ?></td>
            <td><?php echo $doc['direccion'] ?></td>
            <td><?php echo $doc['cargo'] ?></td>
            <td>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill mx-1 icon" viewBox="0 0 16 16">
              <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z"/>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-x-fill mx-1 icon" viewBox="0 0 16 16">
              <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M6.854 7.146 8 8.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 9l1.147 1.146a.5.5 0 0 1-.708.708L8 9.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 9 6.146 7.854a.5.5 0 1 1 .708-.708"/>
            </svg>
            </td>
          </tr>
        </tbody>
        <?php endforeach; ?>
      </table>
      <script src="../bootstrap-5.3.3-dist/js/bootstrap.js"></script>
      
      
</body>
</html>