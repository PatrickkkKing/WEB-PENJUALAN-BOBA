<?php

require_once "inc/Koneksi.php";
require_once "app/harga.php";

$kat = new App\harga();

if (isset($_POST['btn_simpan'])) {
    $kat->simpan();
    header("location:menu.php?hal=harga_tampil");
}

if (isset($_POST['btn_update'])) {
    $kat->update();
    header("location:menu.php?hal=harga_tampil");
}