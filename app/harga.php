<?php

namespace App;
use Inc\Koneksi as Koneksi;

class harga extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_harga";
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
        $name_boba = $_POST['name_boba'];
        $ukuran_boba = $_POST['ukuran_boba'];
        $harga_boba = $_POST['harga_boba'];

        $sql = "INSERT INTO tb_harga (name_boba, ukuran_boba, harga_boba) VALUES (:name_boba, :ukuran_boba, :harga_boba)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":name_boba", $name_boba);
        $stmt->bindParam(":ukuran_boba", $ukuran_boba);
        $stmt->bindParam(":harga_boba", $harga_boba);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_harga WHERE harga_id=:harga_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":harga_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $name_boba = $_POST['name_boba'];
        $ukuran_boba = $_POST['ukuran_boba'];
        $harga_boba = $_POST['harga_boba'];

        $sql = "UPDATE tb_harga SET name_boba=:name_boba, ukuran_boba=:ukuran_boba, harga_boba=:harga_boba WHERE harga_id=:harga_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":name_boba", $name_boba);
        $stmt->bindParam(":ukuran_boba", $ukuran_boba);
        $stmt->bindParam(":harga_boba", $harga_boba);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_harga WHERE harga_id=:harga_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":harga_id", $id);
        $stmt->execute();

    }

}