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
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="App">
        <div class="tableShow">
            <div>
                <h2 class="title">Get All Galeri</h2>
            </div>
            <table>
                <thead>
                    <tr>
                        <td>No.</td>
                        <td>Nama Foto</td>
                        <td>Informasi Foto</td>
                        <td>Tanggal_foto</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $galeri->show() ?>
                </tbody>
            </table>
        </div>
        <div class="tableFind">
            <div>
                <h2>Show Galeri (id)</h2>
            </div>
            <?php $galeri->find() ?>
        </div>
      
    </div>
</body>

</html>