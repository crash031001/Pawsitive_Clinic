<?php
include 'C:\xampp\htdocs\WEB_FINAL\api\get\getClients.php';
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
<body>
  <a href="../index.html" class="back d-flex align-items-center text-decoration-none">
    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="#247F70" class="bi bi-arrow-left me-2" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
</svg>
<span class="fw-bold"></span>
</a>
  <span class="header mt-5 text-light fw-bold">Clientes
  <a href="../forms/addCliente.html"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-plus-square-fill icon add" viewBox="0 0 16 16">
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0"/>
</svg></a>
  </span>
  <table>
        <thead>
          <tr>
            <th scope="col">Nombre y Apellidos</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Dirección</th>
            <th scope="col">Cargo</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php  foreach($clientes as $client): ?>
          <tr>
            <td><?php echo $client['nombre_apellido'] ?></td>
            <td><?php echo $client['telefono'] ?></td>
            <td><?php echo $client['direccion'] ?></td>
            <td><?php echo $client['zona'] ?></td>
            <td align="end" >
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-pencil-fill mx-1 icon" viewBox="0 0 16 16">
              <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z"/>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-file-earmark-x-fill mx-1 icon" viewBox="0 0 16 16">
              <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M6.854 7.146 8 8.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 9l1.147 1.146a.5.5 0 0 1-.708.708L8 9.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 9 6.146 7.854a.5.5 0 1 1 .708-.708"/>
            </svg>
            </td>
          </tr>
        </tbody>
        <?php endforeach; ?>
      </table>
      <nav aria-label="Paginación">
          <ul class="pagination mt-5">
              <li class="page-item <?php echo $pagina_actual <= 1 ? 'disabled' : ''; ?>">
                  <a class="page-link" href="?page=<?php echo $pagina_actual - 1; ?>">Anterior</a>
              </li>
              <?php for ($i = 1; $i <= $total_paginas; $i++): ?>
                  <li class="page-item <?php echo $i == $pagina_actual ? 'active' : ''; ?>">
                      <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                  </li>
              <?php endfor; ?>
              <li class="page-item <?php echo $pagina_actual >= $total_paginas ? 'disabled' : ''; ?>">
                  <a class="page-link" href="?page=<?php echo $pagina_actual + 1; ?>">Siguiente</a>
              </li>
          </ul>
    </nav>
    <form method="post" class="mod">
        <div class="window rounded-2 shadow">
            <span class="encab">Alerta!</span>
            <hr>
                <p>Desea eliminar este elemento?</p>
                <div class="d-flex justify-content-around">
                    <button type="submit" id="accept">Confirmar</button>
                    <button id="cancel">Cancelar</button>
                </div>
        </div>
    </form>
      <script src="../bootstrap-5.3.3-dist/js/bootstrap.js"></script>
      <svg id="Capa" class="esquina" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 252.77 216.77"><defs><style>.cls-1{fill:#fff;}.cls-2{fill:#22968b;}</style></defs><title>Sin título-1</title><polygon class="cls-1" points="0 216.77 252.77 216.77 252.77 0 0 216.77"/><path class="cls-2" d="M464.05-189.59s11.09-10.67,14.39-17.78,14.43-7,18.17-1.83,7.6,11.09,15,18.51,4.79,17.15,4.79,17.15-3.27,10.94-14.95,7.82-14.36-3.86-25.06-.2-17.44-5.27-16.9-12.26A20.49,20.49,0,0,1,464.05-189.59Z" transform="translate(-304.53 352.17)"/><path class="cls-2" d="M467.23-221.33s-7.09-14.66,4-20.33c0,0,11.34-3.56,14.37,14,0,0,.83,9.48-5.33,12.61C480.27-215,472.6-211,467.23-221.33Z" transform="translate(-304.53 352.17)"/><path class="cls-2" d="M491.05-225.41s0-16.55,12.66-16.82c0,0,11.95,1.75,6.93,19.18,0,0-3.43,9-10.45,9.18C500.19-213.87,491.4-213.6,491.05-225.41Z" transform="translate(-304.53 352.17)"/><path class="cls-2" d="M510.68-208.22s2.76-15.06,14.84-12.15c0,0,11.06,4.59,3.4,19.21,0,0-4.77,7.37-11.46,5.73C517.46-195.43,509.05-197.38,510.68-208.22Z" transform="translate(-304.53 352.17)"/><path class="cls-2" d="M448.44-200.23s-8.8-12.53,1.75-19.1c0,0,11-4.67,16.07,11.05,0,0,1.91,8.56-3.95,12.19C462.31-196.09,455-191.47,448.44-200.23Z" transform="translate(-304.53 352.17)"/></svg>
</body>
</html>