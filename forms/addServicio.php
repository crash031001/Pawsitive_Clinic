<?php
include 'C:\xampp\htdocs\WEB_FINAL\api\get\getPets.php';
include 'C:\xampp\htdocs\WEB_FINAL\api\get\getDoctors.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Añadir Servicio | Pawsitive</title>

  <link rel="stylesheet" href="../css/add.css">
  <link rel="stylesheet" href="../bootstrap-5.3.3-dist/css/bootstrap.css">
</head>

<body>
  <div class="content">
    <section class="welcome">
      <span class="clinic fw-bold">Pawsitive Clinic</span>
    </section>
    <section class="form position-relative">
      <div class="data-form">
        <h2 class="fw-bold text-light header mb-4 text-center">Añadir Servicio</h2>
        <form action="../api/post/createServices.php" id="create" method="post" class="fs-4">
          <div class="d-flex flex-column">
            <label for="inputNombre" class="fw-bold text-light">Nombre</label>
            <input class="p-3 inps" type="text" placeholder="Ej. Vacunación" name="nombre" id="nombre">
          </div>
          <div class="row row-cols-md-2">
            <div class="d-flex flex-column">
              <label for="inputDireccion" class="fw-bold text-light">Fecha</label>
              <input class="p-3 inps" type="text"placeholder="Ej. 2022-12-04 (AA-MM-DD)" name="fecha" id="fecha"></input>
            </div>
            <div class="d-flex flex-column">
              <label for="inputZona " class="fw-bold text-light">Costo</label>
              <input class="p-3 inps" type="number" placeholder="Ej. 140.00" name="costo" id="costo">
            </div>
          </div>
          <div class="row row-cols-md-2">
            <div class="d-flex flex-column">
              <label for="selectDr" class="fw-bold text-light ">Doctor</label>
              <select name="id_doctor" id="selectDr" class="p-3 inps">
                <?php foreach ($allDoctors as $doc) { ?>
                  <option value=<?php echo $doc['id'] ?>><?php echo $doc['nombre_apellido'] ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="d-flex flex-column">
              <label for="inputTelefono" class="fw-bold text-light ">Mascota</label>
              <select name="id_mascota" class="p-3 inps">
                <?php foreach ($allPets as $pet) { ?>
                  <option value=<?php echo $pet['id'] ?>><?php echo $pet['nombre'] ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="d-flex flex-column">
            <label for="inputDireccion" class="fw-bold text-light">Detalles</label>
            <textarea class="p-3 inps" type="text" placeholder="Ej. Aplicación de vacunas necesarias" name="detalles" id="detalles"></textarea>
          </div>
          <ul id="errors" class="mt-2">
          </ul>
      </div>
      </form>
      <div class="botones d-flex justify-content-center w-100 p-5">
        <button class="btns" id="aceptarbtn">Aceptar</button>
        <a class="btns text-decoration-none" href="../views/servicios.php" id="cancelarbtn">Cancelar</a>
      </div>
    </section>
  </div>
  <script src="./js/addService.js"></script>
</body>

</html>