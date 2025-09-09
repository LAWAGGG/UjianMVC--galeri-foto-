<?php 
    include 'Connect.php';
    include './Model/galeri.model.php';
    include './Controller/galeri.controller.php';
    include './View/galeri.view.php';
    $galeri  = new GaleriView()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $galeri->show() ?>
    <?php $galeri->find() ?>
</body>
</html>