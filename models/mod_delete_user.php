<?php
require '../config/config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $pdo->prepare("DELETE FROM users WHERE id = ?");
    if ($stmt->execute([$id])) {
        echo "<script>alert('Utilisateur supprimé !'); window.location.href = '../views/liste_session_admin.php';</script>";
    } else {
        echo "<script>alert('Erreur lors de la suppression.');</script>";
    }
}
?>