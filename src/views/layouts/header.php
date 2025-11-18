
<?php

require __DIR__.'../../../helpers/functions.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=BASE_PATH?>/output.css">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <title>Mixtape</title>
</head>
<body class="min-h-screen flex flex-col">
    <div class="drawer">
        <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content flex flex-col">
          <!-- Navbar -->
          <?php
            include __DIR__.'/nav-bar.php';
          ?>