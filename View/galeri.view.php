<?php
class GaleriView extends GaleriController
{
    public function show()
    {
        $galeries = $this->getAll();

        foreach ($galeries as $galeri) {
?>
            <tr>
                <td><?php echo $galeri['id'] ?></td>
                <td class="image-cell"><img src="<?php echo $galeri['nama_foto'] ?>" alt=""></td>
                <td><?php echo $galeri['informasi_foto'] ?></td>
                <td><?php echo $galeri['tanggal_foto'] ?></td>
            </tr>
        <?php
        }
    }

    public function find()
    {
        $galeries = $this->getOne();

        if (empty($galeries)) {
            return;
        }

        foreach ($galeries as $galeri) {
        ?>
            <div class="imageFind">
                <td class="image-cell"><img src="<?php echo $galeri['nama_foto'] ?>" alt=""></td>
                <div class="details">
                    <p>No : <?php echo $galeri['id'] ?></p>
                    <h3> Informasi Foto : <?php echo $galeri['informasi_foto'] ?></h3>
                    <p>Tanggal Foto : <?php echo $galeri['tanggal_foto'] ?></p>
                </div>
            </div>

<?php
        }
    }
}
?>