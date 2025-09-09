<?php
class GaleriModel extends Connect
{
    protected $nama_foto;
    protected $informasi_foto;
    protected $tanggal_foto;

    public function findAll()
    {
        $result = $this->connect()->query("SELECT * FROM galeri");
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }
    }

    public function findOne($id)
    {
        $result = $this->connect()->query("SELECT * FROM galeri WHERE id = '$id'");
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }
    }
}
