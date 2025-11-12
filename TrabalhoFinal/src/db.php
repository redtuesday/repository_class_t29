<?php

/**
 * Responsável pela conexão com o banco de dados PostgreSQL.
 * Cria um objeto PDO reutilizável em todo o sistema.
 */

require_once __DIR__ . '/../config.php';

try {
    $pdo = new PDO(
        "pgsql:host=" . DB_HOST . ";dbname=" . DB_NAME,
        DB_USER,
        DB_PASS,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
} catch (PDOException $e) {
    die("Erro ao conectar ao banco: " . $e->getMessage());
}

?>
