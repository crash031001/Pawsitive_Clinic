<?php
include 'C:\xampp\htdocs\WEB_FINAL\api\database.php';
$registros_por_pagina_C = 5;
$sql_total_C = "SELECT COUNT(*) AS total FROM clientes";
$stmt_total_C = $db->prepare($sql_total_C);
$stmt_total_C->execute();

$total_registros_C = $stmt_total_C->fetch(PDO::FETCH_ASSOC)['total'];
$total_paginas_C = ceil($total_registros_C / $registros_por_pagina_C);

$pagina_actual_C = isset($_GET['page']) && is_numeric($_GET['page']) ? intval($_GET['page']) : 1;
$pagina_actual_C = max(1, min($pagina_actual_C, $total_paginas_C));

$offset_C = ($pagina_actual_C - 1) * $registros_por_pagina_C;

$sql_C = "SELECT * FROM clientes LIMIT :limit Offset :offset";
$stmt_C = $db->prepare($sql_C);
$stmt_C->bindParam(':limit', $registros_por_pagina_C, PDO::PARAM_INT);
$stmt_C->bindParam(':offset', $offset_C, PDO::PARAM_INT);
$stmt_C->execute();
$clientes = $stmt_C->fetchAll(PDO::FETCH_ASSOC);

$all_C = $db->query('SELECT * FROM clientes');
$allClients = $all_C->fetchAll();
