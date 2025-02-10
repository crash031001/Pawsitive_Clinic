<?php
include 'C:\xampp\htdocs\WEB_FINAL\api\get\getClients.php';
$MASC_NOMBRE = $_GET['nombre'];
$MASC_TIPO = $_GET['tipo'];
$MASC_COLOR = $_GET['color'];
$MASC_EDAD = $_GET['edad'];
$MASC_SEXO = $_GET['sexo'];
$MASC_ID = $_GET['mascota_id'];
$CLIENTE = $_GET['cliente_id']


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Mascota | Pawsitive</title>
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
        <h2 class="fw-bold text-light header mb-4 text-center">Editar Mascota</h2>
        <form action="../api/post/updatePet.php" id="create" method="post" class="fs-4">
          <div class="d-flex flex-column">
            <label for="nombre" class="fw-bold text-light">Nombre</label>
            <input class="p-3 inps" type="text" placeholder="Ej. Toby" name="nombre" id="nombre"
              value="<?php echo $MASC_NOMBRE ?>">
          </div>
          <div class="row row-cols-md-2">
            <div class="d-flex flex-column">
              <label for="tipo" class="fw-bold text-light ">Tipo</label>
              <input class="p-3 inps" type="text" placeholder="Ej. Perro" name="tipo" id="tipo"
                value="<?php echo $MASC_TIPO ?>">
            </div>
            <div class="d-flex flex-column">
              <label for="color " class="fw-bold text-light">Color</label>
              <input class="p-3 inps" type="text" placeholder="Ej. Negro" name="color" id="color"
                value="<?php echo $MASC_COLOR ?>">
            </div>
          </div>
          <div class="row row-cols-md-2">
            <div class="d-flex flex-column">
              <label for="sexo" class="fw-bold text-light ">Sexo</label>
              <select class="p-3 inps" placeholder="Ej. Perro" name="sexo" id="sexo">
                <option <?php echo $MASC_SEXO == 'hembra' ? 'selected' : '' ?> value="hembra">Hembra</option>
                <option <?php echo $MASC_SEXO == 'macho' ? 'selected' : '' ?> value="macho">Macho</option>
              </select>
            </div>
            <div class="d-flex flex-column">
              <label for="edad " class="fw-bold text-light">Edad</label>
              <input class="p-3 inps" type="number" placeholder="Ej. 6 (En meses)" name="edad" id="edad"
                value="<?php echo $MASC_EDAD ?>">
            </div>
            <div class="d-flex flex-column">
              <label for="edad " class="fw-bold text-light">Cliente</label>
              <select class="p-3 inps" name="id_cliente" id="edad">
                <?php foreach ($allClients as $client) { ?>
                  <option <?php echo $CLIENTE == $client['id'] ? 'selected' : '' ?> value=<?php echo $client['id'] ?>><?php echo $client['nombre_apellido'] ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <ul id="errors" class="mt-2">
          </ul>
      </div>
      <input hidden name="mascota_id" value="<?php echo $MASC_ID ?>">
      </form>
      <div class="botones d-flex justify-content-center w-100 p-5">
        <button class="btns" id="aceptarbtn">Aceptar</button>
        <a class="btns text-decoration-none" href="../views/mascotas.php" id="cancelarbtn">Cancelar</a>
      </div>
    </section>
  </div>
  <script src="./js/addMascota.js"></script>
</body>

</html>