<?php
    require '../config/config.php';
    
    // le code vérifie si l'URL contient un paramètre id passé via la méthode GET
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$id]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);


        if (isset($_POST['update'])) {
            $new_username = trim($_POST['nom']);
            $new_email = trim($_POST['email']);
            $new_choice = trim($_POST['choix']);
        
            if (!empty($new_username) && !empty($new_email) && !empty($new_choice)) {
                $stmt = $pdo->prepare("UPDATE users SET username = :username, email = :email, role_id = :role_id WHERE id = :id");
                if ($stmt->execute([":username" => $new_username, ":email" => $new_email, ":role_id" => $new_choice, ":id" => $id])) {
                    echo "<script>alert('Utilisateur mis à jour !'); window.location.href = '../views/liste_session_admin.php';</script>";
                } else {
                    echo "<script>alert('Erreur lors de la mise à jour.');</script>";
                }
            }
        }
    
    
        if (!$user) {
            die("Utilisateur non trouvé !");
        }
    }
    

    
?>