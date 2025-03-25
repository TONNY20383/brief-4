<?php
require '../config/config.php';
require '../models/mod_con.php';

    // Récupérer la liste des utilisateurs
$stm = $pdo->prepare("SELECT id, login_time, logout_time FROM sessions WHERE user_id = :user_id");
$stm->execute(array(":user_id"=> $_SESSION["user_id"]));
$sessions = $stm->fetchAll();
?>