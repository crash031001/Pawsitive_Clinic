<?php
include 'C:\xampp\htdocs\WEB_FINAL\api\get\getServices.php';
include 'C:\xampp\htdocs\WEB_FINAL\api\get\getPets.php';
include 'C:\xampp\htdocs\WEB_FINAL\api\get\getDoctors.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Servicios | Pawsitive</title>

  <link rel="stylesheet" href="../bootstrap-5.3.3-dist/css/bootstrap.css">
  <link rel="stylesheet" href="../css/tables.css">
</head>

<body>
  <a href="../index.html" class="back d-flex align-items-center text-decoration-none">
    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="#247F70" class="bi bi-arrow-left me-2" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
    </svg>
    <span class="fw-bold"></span>
  </a>
  <span class="header mt-5 text-light fw-bold">Servicios
    <a href="../forms/addServicio.php"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-plus-square-fill icon add" viewBox="0 0 16 16">
        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0" />
      </svg></a>
  </span>
  <table>
    <thead>
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Detalles</th>
        <th scope="col">Costo</th>
        <th scope="col">Fecha</th>
        <th scope="col">Doctor</th>
        <th scope="col">Mascota</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($servicios as $serv) {
        $masc = '';
        $dr = '';
        $mascID = '';
        $docID = '';
        foreach ($allPets as $pet) {
          if ($pet['id'] == $serv['mascota_id']) {
            $masc = $pet['nombre'];
            $mascID = $pet['id'];
          }
        };
        foreach ($allDoctors as $doc) {
          if ($doc['id'] == $serv['doctor_id']) {
            $dr = $doc['nombre_apellido'];
            $docID = $doc['id'];
          }
        };
      ?>
        <tr>
          <td><?php echo $serv['nombre_servicio'] ?></td>
          <td><?php echo $serv['detalle'] ?></td>
          <td><?php echo $serv['costo'] ?></td>
          <td><?php echo $serv['fecha'] ?></td>
          <td><?php echo $dr ?></td>
          <td><?php echo $masc ?></td>
          <td>
            <!-- EDITAR SERVICIO -->
            <a class="text-light text-decoration-none" href=<?php echo str_replace(' ', '%20', '../forms/editService.php?nombre=' . $serv['nombre_servicio'] . '&detalle=' . $serv['detalle'] . '&costo=' . $serv['costo'] . '&fecha=' . $serv['fecha'] . '&servicio_id=' . $serv['id'] . '&mascota_id=' . $mascID . '&doctor_id=' . $docID) ?> >
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-pencil-fill mx-1 icon" viewBox="0 0 16 16">
                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z" />
              </svg>
            </a>
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-file-earmark-x-fill mx-1 icon" viewBox="0 0 16 16">
              <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M6.854 7.146 8 8.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 9l1.147 1.146a.5.5 0 0 1-.708.708L8 9.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 9 6.146 7.854a.5.5 0 1 1 .708-.708" />
            </svg>
            </td>
          </tr>
        </tbody>
        <?php } ?>
      </table>
      <nav aria-label="Paginación">
          <ul class="pagination mt-5">
              <li class="page-item <?php echo $pagina_actual_S <= 1 ? 'disabled' : ''; ?>">
                  <a class="page-link" href="?page=<?php echo $pagina_actual_S - 1; ?>">Anterior</a>
              </li>
              <?php for ($i = 1; $i <= $total_paginas_S; $i++): ?>
                  <li class="page-item <?php echo $i == $pagina_actual_S ? 'active' : ''; ?>">
                      <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                  </li>
              <?php endfor; ?>
              <li class="page-item <?php echo $pagina_actual_S >= $total_paginas_S ? 'disabled' : ''; ?>">
                  <a class="page-link" href="?page=<?php echo $pagina_actual_S + 1; ?>">Siguiente</a>
              </li>
          </ul>
    </nav>
    <form method="post" class="mod">
        <div class="window rounded-2 shadow">
        <span class="encab d-flex justify-content-between align-items-center"><span>Alerta!</span>
        <svg xmlns="http://www.w3.org/2000/svg" class="mod-icon" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 87 79"><title>Sin título-1</title><g style="isolation:isolate"><g id="Capa_1" data-name="Capa 1"><image width="64" height="53" transform="translate(11 26)" xlink:href="data:image/png;base64,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" style="opacity:0.8;mix-blend-mode:multiply"/><path d="M692.59,394.8a17.45,17.45,0,0,1,4.39-4.95c1.5-1.18,4.81-4.3,8.83-11.3,5.53-9.61,14.38-5.78,14.38-5.78s3.32,1,9.7,11.23a34.35,34.35,0,0,0,6.73,7.06c4.33,3.32,4.68,12,4.25,12.85-.33.67-.4,5.44-5.17,7.94a10.53,10.53,0,0,1-7.68.72c-3.18-.85-8.7-2.19-12.34-2.19a37.27,37.27,0,0,0-10.28,2,11,11,0,0,1-10.85-2.19,12,12,0,0,1-3.12-4.77A12.15,12.15,0,0,1,692.59,394.8Z" transform="translate(-674 -341)" style="fill:#22968b"/><image width="30" height="33" transform="translate(0 20)" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAhCAYAAADOHBvaAAAACXBIWXMAAAsSAAALEgHS3X78AAAFiElEQVRIS8WXTW4bSRKF34ssVhYptWSpRaOn2y2oB7PSlhfgJXRKXUIX8NLajqGR2w3TkCxZJCvrJ94sikVTtgnJmAYmAAL8SeYXERnxIouS8P+w7KkFJNm/3bJEAKAfjIDb1q+AnE6nNpvNLKXEV69eMaVEAIgx6vr6WjFGjcdjH4/HOj8/d+B5TnwD3gS+ffs229nZyQDkeZ6HqqpCURQEADNTSsmrqmr39/frpmmasiyb09PT9vz83J+CPwL30MlkEuq6zouiKCSNyrLcybIsAhi4u63WSlJjZqlt22WMcenuyzzPqxhjfXFx4eiC/64DX4NtMpmEsiwjyZ0Qwn4I4VDSgaRdSQVWdWFmLYAKwELSvaQ7d7/L8/y+ruvlYDCoXr9+3W6Dr8EkOZ1Ow83NTRwOh7tlWR6Z2T8k/QbgVwAHAHYADFb/bQCUAO4lfQTwwcz+IjlLKd0CeCiKIm2Db4Lt5OQkf/ny5U5K6WczO5b0T5J/SPodwCGAUQ8m2UpKAB4AfCT5XtKVpCt3f5/n+ceyLD/3cEm+Cc5Wm/TVm0kahRAO3f23FfRfkl6Z2QtJQwABXWs5gBrAguTPkl5IGpHMsywLADAajZRS0nQ6TauaWEe97uPZbGYAcnffcfdDAL9K+l3SK5K/SNoDkAMwYN0yLYAkaQfAiGQOIEhC0zRtCKEJIbQpJT87OxPJdbX3YB4fH/Pdu3eZu0cz23X3A5KHq0j2zGwkKevB6IRDJHNJObojCEB3DAAqSWWWZamqqury8rJFlyVsgrFcLhljtKZpBpIiuvMckRyuNs7wJc29SZKhc6Z3qJVUkVy4+72kz2a2KIqiRpeh9hE4pUR3p5kFSdlGFBlJWwG+ls3+c7/PTwBqkgtJnwB8aJrmg7t/Gg6Hi+l0WnF12L2XAAB3pyRK6kE9bJtOY+P3jGQEsCvpAMARySMA+yGEoaTBqo4AfEnP/2pE15oZgEhySHJX0h7JYQghlmUZjo+P10H8XWCg60oCCO6eo3OgAJA3TZPFGG25XK4z92gsmpnQVauTdHRV2H/3pEkiOgcMXSFmJIOZmbuvJxuwEXGMUWamtm1dUotOEnvFEclnwfHlzK2vFUl090d1sgYPh0OllDzLsgarHgSQzKxC58CzI3+OrcXg6upKRVG0bdsmSUuS95IeJC0BJJINfiDtT9k64vF47CTrtm2XAO7UTZyPJG8BPKgbCM+BP6qT1Uur+llbBnTyQ1KTyaSJMS4l3dV1/YHdxHmBL1Opd3QttRt7iaS7u6+yU6M7skZSm2WZYozfDgkAXpZlUxTF0szuzOyvVR+O1KlYWK37iWRc9eymuDi6jFSro1qgm1xJUp1S8qOjo++CcXp62l5fX1dlWX4mOXP3At1E6qEtgFrSLoCIx9rt6jT6XtInSTcAbt39IYSQqqpqrq6u1se0Bq/S7dPptJ7P54sY4y3JzN2DJEhqSVbsdPgA3QAZqJNWAWhJLt39E8lrkv+R9KeZ3ZjZHEA1Ho+/nU6b8MlkUi0Wi4eiKNg0DcxsE/oJwBGAzaiBLhMLkjcr6L9Jvmvb9ibLssV8Pm/evHmznsdbr7f9pQ/AbozxQNLY3X8B8JKd+O8BWF/+0BXTHMAtgD9JvnP390VRfFwulw+Hh4fp4uKi3Qr+Gl7XdT4YDIZVVe2Z2T7JfZJ76Co9d/c+4oZkSfKB5G3btjdt295Jmn/v3vWsJ4mU0qCqqtzMhimlYQhh6O6RZKZOn2FmDqBumiYVRTEnuSjLstx2zd0KXi8geXZ2ZpeXl6EoiizLsuzu7m6Q53mIMVqvwWVZKs/ztqqqFkA1n8+bk5OTZtvF/kkwsI4eZ2dnNpvN+JxnqR96kniO9U5g+61EwNMPbj8M/rvsvyeo6jlCmerEAAAAAElFTkSuQmCC" style="opacity:0.8;mix-blend-mode:multiply"/><ellipse cx="688" cy="376.5" rx="8.37" ry="11" transform="translate(-770.11 19.14) rotate(-27.49)" style="fill:#22968b"/><image width="30" height="37" transform="translate(16)" xlink:href="data:image/png;base64,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" style="opacity:0.8;mix-blend-mode:multiply"/><ellipse cx="704" cy="358.5" rx="8.76" ry="12.67" transform="translate(-736.6 -173.46) rotate(-13)" style="fill:#22968b"/><image width="30" height="37" transform="translate(39)" xlink:href="data:image/png;base64,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" style="opacity:0.8;mix-blend-mode:multiply"/><ellipse cx="727" cy="358.5" rx="12.65" ry="8.78" transform="translate(-453.15 650.64) rotate(-77.61)" style="fill:#22968b"/><image width="30" height="34" transform="translate(57 20)" xlink:href="data:image/png;base64,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" style="opacity:0.8;mix-blend-mode:multiply"/><ellipse cx="745" cy="377" rx="11.38" ry="8.51" transform="translate(-564.55 577.51) rotate(-67.27)" style="fill:#22968b"/></g></g></svg>
          </span>
            <hr>
                <p>Desea eliminar este elemento?</p>
                <div class="d-flex justify-content-around">
                    <button type="submit" id="accept">Confirmar</button>
                    <button id="cancel">Cancelar</button>
                </div>
        </div>
    </form>
      <script src="../bootstrap-5.3.3-dist/js/bootstrap.js"></script>
      </div>
    </div>
  </form>
  <script src="../bootstrap-5.3.3-dist/js/bootstrap.js"></script>
  </div>
  <svg id="Capa" class="esquina" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 252.77 216.77">
    <defs>
      <style>
        .cls-1 {
          fill: #fff;
        }

        .cls-2 {
          fill: #22968b;
        }
      </style>
    </defs>
    <title>Sin título-1</title>
    <polygon class="cls-1" points="0 216.77 252.77 216.77 252.77 0 0 216.77" />
    <path class="cls-2" d="M464.05-189.59s11.09-10.67,14.39-17.78,14.43-7,18.17-1.83,7.6,11.09,15,18.51,4.79,17.15,4.79,17.15-3.27,10.94-14.95,7.82-14.36-3.86-25.06-.2-17.44-5.27-16.9-12.26A20.49,20.49,0,0,1,464.05-189.59Z" transform="translate(-304.53 352.17)" />
    <path class="cls-2" d="M467.23-221.33s-7.09-14.66,4-20.33c0,0,11.34-3.56,14.37,14,0,0,.83,9.48-5.33,12.61C480.27-215,472.6-211,467.23-221.33Z" transform="translate(-304.53 352.17)" />
    <path class="cls-2" d="M491.05-225.41s0-16.55,12.66-16.82c0,0,11.95,1.75,6.93,19.18,0,0-3.43,9-10.45,9.18C500.19-213.87,491.4-213.6,491.05-225.41Z" transform="translate(-304.53 352.17)" />
    <path class="cls-2" d="M510.68-208.22s2.76-15.06,14.84-12.15c0,0,11.06,4.59,3.4,19.21,0,0-4.77,7.37-11.46,5.73C517.46-195.43,509.05-197.38,510.68-208.22Z" transform="translate(-304.53 352.17)" />
    <path class="cls-2" d="M448.44-200.23s-8.8-12.53,1.75-19.1c0,0,11-4.67,16.07,11.05,0,0,1.91,8.56-3.95,12.19C462.31-196.09,455-191.47,448.44-200.23Z" transform="translate(-304.53 352.17)" />
  </svg>
</body>

</html>