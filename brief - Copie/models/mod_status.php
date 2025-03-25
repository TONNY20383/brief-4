<?php
    require '../config/config.php';
    
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $statut = 'inactive';
        $stmt = $pdo->prepare("UPDATE users SET status = :statut WHERE id = :id");
        if ($stmt->execute(array(":statut"=> $statut, ":id"=> $id))) {
            echo "<script>alert('Utilisateur supprimé !'); window.location.href = window.location.href = '../views/liste_session_admin.php';</script>";
        } else {
            echo "<script>alert('Erreur lors de la suppression.');</script>";
        }
    }
?>