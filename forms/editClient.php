<!DOCTYPE html>
<html lang="en">
<?php
$CLIENT_ID = $_GET['id'];
$CLIENT_NOMBRE = $_GET['nombre'];
$CLIENT_TEL = $_GET['tel'];
$CLIENT_ZONA = $_GET['zona'];
$CLIENT_DIR = $_GET['dir'];


?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Cliente | Pawsitive</title>

  <link rel="stylesheet" href="../bootstrap-5.3.3-dist/css/bootstrap.css">
  <link rel="stylesheet" href="../css/add.css">
</head>

<body>
  <div class="content">
    <section class="welcome">
      <span class="clinic fw-bold">Pawsitive Clinic</span>
    </section>
    <section class="form position-relative">
      <div class="data-form">
        <h2 class="fw-bold text-light header mb-4 text-center">Editar Cliente</h2>
        <form action="../api/post/updateClient.php" id="create" method="post" class="fs-4">
          <div class="d-flex flex-column">
            <label for="inputNombre" class="fw-bold text-light">Nombre y Apellidos</label>
            <input class="p-3 inps" value="<?php echo $CLIENT_NOMBRE ?>" type="text" name="nombre" placeholder="Ej. Paco Diaz Hurtado" id="inputNombre">
          </div>
          <div class="row row-cols-md-2">
            <div class="d-flex flex-column">
              <label for="inputTelefono" class="fw-bold text-light ">Telefono</label>
              <input class="p-3 inps" type="text" name="tel" placeholder="Ej. +53 56419170" id="inputTelefono"
                value="<?php echo $CLIENT_TEL ?>">
            </div>
            <div class="d-flex flex-column">
              <label for="inputZona " class="fw-bold text-light">Zona</label>
              <input class="p-3 inps" type="text" name="zona" placeholder="Ej. Sta Clara" id="inputZona"
                value="<?php echo $CLIENT_ZONA ?>">
            </div>
          </div>
          <div class="d-flex flex-column">
            <label for="inputDireccion" class="fw-bold text-light">Direccion</label>
            <textarea class="p-3 inps " type="text" name="dir" placeholder="Ej. Calle 3ra entre 2da y 1era" id="inputDireccion"><?php echo $CLIENT_DIR ?></textarea>
          </div>
          <ul id="errors" class="mt-2">
          </ul>
      </div>
      <input type="hidden" value="<?php echo $CLIENT_ID  ?>" name="cliente_id">
      </form>
      <div class="botones d-flex justify-content-center w-100 p-5">
        <button class="btns" id="aceptarbtn">Aceptar</button>
        <a href="../views/clientes.php" class="btns text-decoration-none" id="cancelarbtn">Cancelar</a>
      </div>
    </section>
  </div>
  <script src="./js/addCliente.js"></script>
</body>

</html>