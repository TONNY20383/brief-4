<?php
    require 'header.php';
    require 'footer.php';
    require '../config/config.php';
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
    <form action="#" method="post" class="border-blue-300 border-2 h-auto w-96  px-7 py-6 space-y-5 mx-auto mt-32 rounded-md">
        <div class="space-x-16">
            <label for="">nom</label>
            <input type="text" name="nom" id="" class="border-slate-400 border-1 h-8 w-54 rounded-md" value="<?= $user['username'];?>">
        </div>
        <div class="space-x-14">
            <label for="">email</label>
            <input type="email" name="email" id="" class="border-slate-400 border-1 h-8 w-54 rounded-md" value="<?= $user['email'];?>">
        </div>
        <div class="space-x-16">
            <label for="">Role</label>
            <select name="choix" id=""  class="border-slate-400 border-1 h-8 w-54 rounded-md" value="<?= $user['role_id'];?>">
                <option value="Admin">Admin</option>
                <option value="User">User</option>
                <option value="Other">Other</option>
            </select>
        </div>
        <button type="submit" name="update" class="border-green-400 border-1 rounded-md w-full hover:bg-gray-400 text-center py-2">Envoyer</button>
    </form>
</body>
</html>