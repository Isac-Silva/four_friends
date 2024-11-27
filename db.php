<?php

$db_name = "fourfriends";
$db_host = "localhost";
$db_user = "root";
$db_pass = "";

try {
    // Configuração correta do DSN
    $conn = new PDO("mysql:dbname=" . $db_name . ";host=" . $db_host, $db_user, $db_pass);

    // Habilitar erros do PDO
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}
