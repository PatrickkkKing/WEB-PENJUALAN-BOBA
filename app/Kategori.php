<?php

namespace App;
use Inc\Koneksi as Koneksi;

class Kategori extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_category";
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
        $cat_name = $_POST['cat_name'];
        $cat_text = $_POST['cat_text'];

        $sql = "INSERT INTO tb_category (cat_name, cat_text) VALUES (:cat_name, :cat_text)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":cat_name", $cat_name);
        $stmt->bindParam(":cat_text", $cat_text);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_category WHERE cat_id=:cat_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":cat_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $cat_name = $_POST['cat_name'];
        $cat_text = $_POST['cat_text'];
        $cat_id = $_POST['cat_id'];

        $sql = "UPDATE tb_category SET cat_name=:cat_name, cat_text=:cat_text WHERE cat_id=:cat_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":cat_name", $cat_name);
        $stmt->bindParam(":cat_text", $cat_text);
        $stmt->bindParam(":cat_id", $cat_id);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_category WHERE cat_id=:cat_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":cat_id", $id);
        $stmt->execute();

    }

}