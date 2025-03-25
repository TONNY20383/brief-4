<?php
require '../config/config.php';
    // Récupérer la liste des utilisateurs
$stmt = $pdo->query("SELECT sessions.id, users.username, sessions.login_time, sessions.logout_time
                        FROM sessions
                        INNER JOIN users ON sessions.user_id = users.id; ");


$sessions = $stmt->fetchAll();
?>