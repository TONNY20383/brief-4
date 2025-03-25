<?php
    require '../config/config.php';
    if (isset($_POST["modifier"])) {
        echo "<script>window.location.href = '../views/update_user.php';</script>";
    }
?>