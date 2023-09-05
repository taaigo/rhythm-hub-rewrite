<?php
session_start();
include '../../../backend/import.php';
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../js/validateCredentials.js"></script>

    <?php echo import_styling(['default', 'navbar', 'text-models']); ?>
</head>
<body>
<?php include '../../elements/navbar.php' ?>
<div class="container">
    <div class="text_page-title">You have to be logged in to access this page...</div>
</div>
</body>
</html>