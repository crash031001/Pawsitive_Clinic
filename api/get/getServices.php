<?php
include 'C:\xampp\htdocs\WEB_FINAL\api\database.php';


$registros_por_pagina_S = 5;

$sql_total_S = "SELECT COUNT(*) AS total FROM servicios";
$stmt_total_S = $db->prepare($sql_total_S);
$stmt_total_S->execute();

$total_registros_S = $stmt_total_S->fetch(PDO::FETCH_ASSOC)['total'];
$total_paginas_S = ceil($total_registros_S / $registros_por_pagina_S);

$pagina_actual_S = isset($_GET['page']) && is_numeric($_GET['page']) ? intval($_GET['page']) : 1;
$pagina_actual_S = max(1, min($pagina_actual_S, $total_paginas_S));

$offset_S = ($pagina_actual_S - 1) * $registros_por_pagina_S;

$sql_S = "SELECT * FROM servicios LIMIT :limit Offset :offset";
$stmt_S = $db->prepare($sql_S);
$stmt_S->bindParam(':limit', $registros_por_pagina_S, PDO::PARAM_INT);
$stmt_S->bindParam(':offset', $offset_S, PDO::PARAM_INT);
$stmt_S->execute();
$servicios = $stmt_S->fetchAll(PDO::FETCH_ASSOC);
