<?php

namespace App;
use Inc\Koneksi as Koneksi;

class pesanan extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_pesanan";
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
        $name_pesanan = $_POST['name_pesanan'];
        $ukuran_pesanan = $_POST['ukuran_pesanan'];
        $harga_pesanan = $_POST['harga_pesanan'];

        $sql = "INSERT INTO tb_pesanan (name_pesanan, ukuran_pesanan, harga_pesanan) VALUES (:name_pesanan, :ukuran_pesanan, :harga_pesanan)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":name_pesanan", $name_pesanan);
        $stmt->bindParam(":ukuran_pesanan", $ukuran_pesanan);
        $stmt->bindParam(":harga_pesanan", $harga_pesanan);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_pesanan WHERE id_pesanan=:id_pesanan";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_pesanan", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $name_pesanan = $_POST['name_pesanan'];
        $ukuran_pesanan = $_POST['ukuran_pesanan'];
        $harga_pesanan = $_POST['harga_pesanan'];

        $sql = "UPDATE tb_pesanan SET name_pesanan=:name_pesanan, ukuran_pesanan=:ukuran_pesanan, harga_pesanan=:harga_pesanan WHERE id_pesanan=:id_pesanan";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":name_pesanan", $name_pesanan);
        $stmt->bindParam(":ukuran_pesanan", $ukuran_pesanan);
        $stmt->bindParam(":harga_pesanan", $harga_pesanan);
        $stmt->bindParam(":id_pesanan", $id_pesanan);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_pesanan WHERE id_pesanan=:id_pesanan";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_pesanan", $id);
        $stmt->execute();

    }

}