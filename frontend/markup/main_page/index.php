<?php
session_start();
include '../../../backend/import.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '/opt/lampp/htdocs/rhythm-hub/backend/import-head.php'?>
    <?php echo import_styling(['default', 'text-models', 'navbar']) ?>
    <title>taigo.dev - home</title>
</head>
<body>
    <?php include '../../elements/navbar.php' ?>

    <div class="container">
        <div class="text_sub">OUT OF IDEAS</div>
    </div>
</body>
</html>