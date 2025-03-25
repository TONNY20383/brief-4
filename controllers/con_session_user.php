<?php
require '../config/config.php';
    // Récupérer la liste des utilisateurs
    $stmt = $pdo->query("SELECT * FROM users ");
    $users = $stmt->fetchAll();
?>