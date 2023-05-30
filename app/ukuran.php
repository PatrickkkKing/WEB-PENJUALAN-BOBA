<?php

namespace App;
use Inc\Koneksi as Koneksi;

class ukuran extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_ukuran";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }

    public function simpan()
    {
        $ukuran_boba = $_POST['ukuran_boba'];
        $keterangan = $_POST['keterangan'];

        $sql = "INSERT INTO tb_ukuran (ukuran_boba, keterangan) VALUES (:ukuran_boba, :keterangan)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":ukuran_boba", $ukuran_boba);
        $stmt->bindParam(":keterangan", $keterangan);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_ukuran WHERE ukuran_id=:ukuran_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":ukuran_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $cat_name = $_POST['ukuran_boba'];
        $cat_text = $_POST['keterangan'];
        $ukuran_id = $_POST['ukuran_id'];

        $sql = "UPDATE tb_ukuran SET ukuran_boba=:ukuran_boba, keterangan=:keterangan WHERE ukuran_id=:ukuran_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":ukuran_boba", $ukuran_boba);
        $stmt->bindParam(":keterangan", $keterangan);
        $stmt->bindParam(":ukuran_id", $ukuran_id);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_ukuran WHERE ukuran_id=:ukuran_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":ukuran_id", $id);
        $stmt->execute();

    }

}