<?php
$NOMBRE = $_GET['nombre'];
$TEL = $_GET['tel'];
$DIR = $_GET['dir'];
$CARGO = $_GET['cargo'];
$ID = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Doctor | Pawsitive</title>

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
        <h2 class="fw-bold text-light header mb-4 text-center">Editar Doctor</h2>
        <form action="../api/post/updateDoctor.php" id="create" method="post" class="fs-4">
          <div class="d-flex flex-column">
            <label for="inputNombre" class="fw-bold text-light">Nombre y Apellidos</label>
            <input value="<?php echo $NOMBRE  ?>" class="p-3 inps" type="text" placeholder="Ej. Dr. Paco Diaz Hurtado" name="nombre" id="nombre">
          </div>
          <div class="row row-cols-md-2">
            <div class="d-flex flex-column">
              <label for="inputTelefono" class="fw-bold text-light ">Telefono</label>
              <input class="p-3 inps" type="text" placeholder="Ej. +53 56419170" name="tel" id="telefono"
                value="<?php echo $TEL  ?>">
            </div>
            <div class="d-flex flex-column">
              <label for="inputZona " class="fw-bold text-light">Cargo</label>
              <input class="p-3 inps" type="text" placeholder="Ej. Cirujano Veterinario" name="cargo" id="cargo"
                value="<?php echo $CARGO  ?>">
            </div>
          </div>
          <div class="d-flex flex-column">
            <input type="text" name="doctor_id" value=<?php echo $ID ?> hidden>
            <label for="inputDireccion" class="fw-bold text-light">Direccion</label>
            <textarea class="p-3 inps" type="text"
              placeholder="Ej. Calle 3ra entre 2da y 1era" name="dir" id="direccion"><?php echo $DIR  ?></textarea>
          </div>
          <ul id="errors" class="mt-2">
          </ul>
      </div>
      </form>
      <div class="botones d-flex justify-content-center w-100 p-5">
        <button class="btns" id="aceptarbtn">Aceptar</button>
        <a class="btns text-decoration-none" href="../views/doctores.php" id="cancelarbtn">Cancelar</a>
      </div>
    </section>
  </div>
  <script src="./js/addDoctor.js"></script>
</body>

</html>