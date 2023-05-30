<?php

require_once "inc/Koneksi.php";
require_once "app/pesanan.php";

$kat = new App\pesanan();

if (isset($_POST['btn_simpan'])) {
    $kat->simpan();
    header("location:menu.php?hal=pesanan_tampil");
}

if (isset($_POST['btn_update'])) {
    $kat->update();
    header("location:menu.php?hal=pesanan_tampil");
}