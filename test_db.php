<?php
require __DIR__ . '/config.php';
$stmt = $pdo->query('SELECT NOW() AS now_time');
$row = $stmt->fetch();
echo 'DB OK. Hora del servidor: ' . $row['now_time'];
