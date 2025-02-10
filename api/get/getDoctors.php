<?php
include 'C:\xampp\htdocs\WEB_FINAL\api\database.php';

$registros_por_pagina_D = 5;

$sql_total_D = "SELECT COUNT(*) AS total FROM doctores";
$stmt_total_D = $db->prepare($sql_total_D);
$stmt_total_D->execute();

$total_registros_D = $stmt_total_D->fetch(PDO::FETCH_ASSOC)['total'];
$total_paginas_D = ceil($total_registros_D / $registros_por_pagina_D);

$pagina_actual_D = isset($_GET['page']) && is_numeric($_GET['page']) ? intval($_GET['page']) : 1;
$pagina_actual_D = max(1, min($pagina_actual_D, $total_paginas_D));

$offset_D = ($pagina_actual_D - 1) * $registros_por_pagina_D;

$sql_D = "SELECT * FROM doctores LIMIT :limit Offset :offset";
$stmt_D = $db->prepare($sql_D);
$stmt_D->bindParam(':limit', $registros_por_pagina_D, PDO::PARAM_INT);
$stmt_D->bindParam(':offset', $offset_D, PDO::PARAM_INT);
$stmt_D->execute();
$doctores = $stmt_D->fetchAll(PDO::FETCH_ASSOC);

$all_D = $db->query('SELECT * FROM doctores');
$allDoctors = $all_D->fetchAll();
