<?php
    require 'header.php';
    require 'footer.php';
    require '../models/mod_ins.php';
    require '../controllers/con_session_admin.php';
    require '../controllers/con_session_user.php';
    require '../models/mod_upd_user.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Document</title>
</head>
<body class="font-sans">
        <div class="flex justify-between bg-gray-300 py-3">
            <h3 class="w-1/3" id="add">Ajouter un client</h3>
            <h3 class="w-1/3 text-center" id="list">Liste des clients</h3>
            <h3 class="w-1/3 text-right" id="conn">Liste des connexions</h3>
        </div>
        
        <table class="w-full border-collapse border border-gray-300"  id="tb_user">
            <tr class="bg-gray-200">
                <th class="border border-gray-300 p-2">id</th>
                <th class="border border-gray-300 p-2">Nom</th>
                <th class="border border-gray-300 p-2">E-mail</th>
                <th class="border border-gray-300 p-2">Mot de passe</th>
                <th class="border border-gray-300 p-2">Statut</th>
                <th class="border border-gray-300 py-2 px-3">Action</th>
                <th class="border border-gray-300 p-2">Date d'inscription</th>


            </tr>

            <?php foreach ($users as $user) :?>
            <tr>
                <td class="border border-gray-300 p-2"><?= htmlspecialchars($user['id']);?></td>
                <td class="border border-gray-300 p-2"><?= htmlspecialchars($user['username']);?></td>
                <td class="border border-gray-300 p-2"><?= htmlspecialchars($user['email']);?></td>
                <td class="border border-gray-300 p-2"><?= htmlspecialchars($user['password']);?></td>
                <td class="border border-gray-300 p-2">
                    <a href="../models/mod_status1.php?id=<?= $user['id']; ?>"><img src=<?= "../assets/image/ok_16px.png" ?> alt="" class="inline justify-between w-5 h-5" onclick="" name="ok"></a>
                    <a href="../models/mod_status.php?id=<?= $user['id']; ?>"><img src=<?= "../assets/image/unavailable_16px.png" ?> alt="" class="inline justify-between w-5 h-5" name="unvailable"></a>
                </td>
                <td class="border border-gray-300 p-2">
                    <a href="update_user.php?id=<?= $user['id']; ?>"><img src=<?= "../assets/image/edit_file_24px.png" ?> alt="" class="inline justify-between w-6 h-6"></a>
                    <a href="../models/mod_delete_user.php?id=<?= $user['id']; ?>"><img src=<?= "../assets/image/add_trash_24px.png" ?> alt="" class="inline justify-between w-6 h-6"></a>
                </td>
                <td class="border border-gray-300 p-2"><?= date('Y-m-d H:i:s', strtotime($user['created_at']));?> </td>
            </tr>
            <?php endforeach;?>
        </table>

        <table class=" w-full border-collapse border border-gray-300 " id="tb_sess">
            <tr class="bg-gray-200">
                <th class="border border-gray-300 p-2">id</th>
                <th class="border border-gray-300 p-2">User</th>
                <th class="border border-gray-300 p-2">Entrée</th>
                <th class="border border-gray-300 p-2">Sortie</th>
            </tr>

            <?php foreach ($sessions as $session) :?>
            <tr>
                <td class="border border-gray-300 p-2"><?= htmlspecialchars($session['id']);?></td>
                <td class="border border-gray-300 p-2"><?= htmlspecialchars($session['username']);?></td>
                <td class="border border-gray-300 p-2"><?= htmlspecialchars($session['login_time']);?></td>
                <td class="border border-gray-300 p-2"><?= htmlspecialchars($session['logout_time']);?></td>
            </tr>
            <?php endforeach;?>
        </table>

        <script src="../assets/js/index.js"></script>
        <?php require 'inscription.php'; ?>
</body>
</html>