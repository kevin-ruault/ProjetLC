// backend/config/database.php

<?php

$host = "localhost";
$db_name = "projet_lc";
$username = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception) {
    echo "Erreur de connexion à la base de données : " . $exception->getMessage();
}