<?php
include 'C:\xampp\htdocs\WEB_FINAL\api\database.php';
$sql = "SELECT * FROM doctores;";
$query = $db->query($sql);
$registros_por_pagina = 5;
$doctores = [];

$sql_total = "SELECT COUNT(*) AS total FROM doctores";
$stmt_total = $db->prepare($sql_total);
$stmt_total->execute();

$total_registros = $stmt_total->fetch(PDO::FETCH_ASSOC)['total'];
$total_paginas = ceil($total_registros / $registros_por_pagina);

// 3. Determinar la página actual
$pagina_actual = isset($_GET['page']) && is_numeric($_GET['page']) ? intval($_GET['page']) : 1;
$pagina_actual = max(1, min($pagina_actual, $total_paginas));

// 4. Calcular el desplazamiento (offset)
$offset = ($pagina_actual - 1) * $registros_por_pagina;

// 5. Consultar la base de datos con LIMIT y OFFSET
$sql = "SELECT * FROM doctores LIMIT :limit OFFSET :offset";
$stmt = $db->prepare($sql);
$stmt->bindParam(':limit', $registros_por_pagina, PDO::PARAM_INT);
$stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();
$doctores = $stmt->fetchAll(PDO::FETCH_ASSOC);