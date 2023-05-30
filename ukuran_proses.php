<?php

require_once "inc/Koneksi.php";
require_once "app/ukuran.php";

$kat = new App\ukuran();

if (isset($_POST['btn_simpan'])) {
    $kat->simpan();
    header("location:menu.php?hal=ukuran_tampil");
}

if (isset($_POST['btn_update'])) {
    $kat->update();
    header("location:menu.php?hal=ukuran_tampil");
}