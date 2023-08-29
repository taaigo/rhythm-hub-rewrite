<?php
session_start();
include '../../../backend/import.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo import_styling(['default', 'text-models', 'navbar']) ?>
    <title>taigo.dev</title>
</head>
<body>
    <?php include '../../elements/navbar.php' ?>

    <div class="container">
    </div>
</body>
</html>