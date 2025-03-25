<?php
    require 'header.php';
    require 'footer.php';
    require '../controllers/con_user.php';
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

        <h1 class="font-bold text-2xl">Bienvenue <?= $_SESSION['nom']; ?></h1>
        <div class="">
        <table class="w-full border-collapse border border-gray-300">
            <tr class="bflex justify-between bg-gray-200">
                <th class="border border-gray-300 p-2">id</th>
                <th class="border border-gray-300 p-2">Entrée</th>
                <th class="border border-gray-300 p-2">Sortie</th>
            </tr>

            <?php foreach ($sessions as $session) :?>
            <tr>
                <td class="border border-gray-300 p-2"><?= htmlspecialchars($session['id']);?></td>
                <td class="border border-gray-300 p-2"><?= htmlspecialchars($session['login_time']);?></td>
                <td class="border border-gray-300 p-2"><?= htmlspecialchars($session['logout_time']);?></td>
            </tr>
            <?php endforeach;?>
        </table>
        </div>
        <form action="#" method="get">
            <input type="hidden" value="" name="logout">
            <input type="submit" name="sub" value="Deconnexion" id="sub" class="border-1 border-blue-600 w-32 rounded-md px-2 py-1 mt-20 mx-auto">
        </form>

        

</body>
</html>