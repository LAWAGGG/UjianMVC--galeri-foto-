<?php 
    class GaleriView extends GaleriController{
        public function show(){
            $galeries = $this->getAll();

            foreach($galeries as $galeri){
                ?>
                    <tr>
                        <td><?php echo $galeri['nama_foto'] ?></td>
                        <td><?php echo $galeri['informasi_foto'] ?></td>
                        <td><?php echo $galeri['tanggal_foto'] ?></td>
                    </tr>
                <?php
            }
        }

         public function find(){
            $galeries = $this->getOne();

            if(empty($galeries)){
                return;
            }

            foreach($galeries as $galeri){
                ?>
                    <tr>
                        <td><?php echo $galeri['nama_foto'] ?></td>
                        <td><?php echo $galeri['informasi_foto'] ?></td>
                        <td><?php echo $galeri['tanggal_foto'] ?></td>
                    </tr>
                <?php
            }
        }
    }
?>