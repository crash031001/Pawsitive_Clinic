<?php
include 'C:\xampp\htdocs\WEB_FINAL\api\database.php';


$registros_por_pagina_M = 5;

$sql_total_M = "SELECT COUNT(*) AS total FROM mascotas";
$stmt_total_M = $db->prepare($sql_total_M);
$stmt_total_M->execute();
$total_registros_M = $stmt_total_M->fetch(PDO::FETCH_ASSOC)['total'];
$total_paginas_M = ceil($total_registros_M / $registros_por_pagina_M);

$pagina_actual_M = isset($_GET['page']) && is_numeric($_GET['page']) ? intval($_GET['page']) : 1;
$pagina_actual_M = max(1, min($pagina_actual_M, $total_paginas_M));

$offset_M = ($pagina_actual_M - 1) * $registros_por_pagina_M;

$sql_M = "SELECT * FROM mascotas LIMIT :limit Offset :offset";
$stmt_M = $db->prepare($sql_M);
$stmt_M->bindParam(':limit', $registros_por_pagina_M, PDO::PARAM_INT);
$stmt_M->bindParam(':offset', $offset_M, PDO::PARAM_INT);
$stmt_M->execute();
$mascotas = $stmt_M->fetchAll(PDO::FETCH_ASSOC);

$all_M = $db->query('SELECT * FROM mascotas');
$allPets = $all_M->fetchAll();
