<?php
session_start();
session_destroy();

include '../../../backend/import.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="1; URL=../profile/" >
    <?php echo import_styling(['default', 'text-models', 'navbar']) ?>
    <title>taigo.dev - redirecting...</title>
</head>
<body>
<nav>
    <ul>
        <li><a class="nav">You are being logged out...</li>
    </ul>
</nav>
</body>
</html>