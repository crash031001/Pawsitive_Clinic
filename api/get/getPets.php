<?php
include 'C:\xampp\htdocs\WEB_FINAL\api\database.php';


$registros_por_pagina = 5;

$sql_total = "SELECT COUNT(*) AS total FROM mascotas";
$stmt_total = $db->prepare($sql_total);
$stmt_total->execute();

$total_registros = $stmt_total->fetch(PDO::FETCH_ASSOC)['total'];
$total_paginas = ceil($total_registros / $registros_por_pagina);

$pagina_actual = isset($_GET['page']) && is_numeric($_GET['page']) ? intval($_GET['page']) : 1;
$pagina_actual = max(1, min($pagina_actual, $total_paginas));

$offset = ($pagina_actual - 1) * $registros_por_pagina;

$sql = "SELECT * FROM mascotas LIMIT :limit OFFSET :offset";
$stmt = $db->prepare($sql);
$stmt->bindParam(':limit', $registros_por_pagina, PDO::PARAM_INT);
$stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();
$mascotas = $stmt->fetchAll(PDO::FETCH_ASSOC);

$al = $db->query('SELECT * FROM mascotas');
$allPets = $al->fetchAll();
