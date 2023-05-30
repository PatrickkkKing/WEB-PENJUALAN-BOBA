<?php

$id = $_GET['id'];

$kat = new App\Kategori();
$rows = $kat->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="menu.php?=kat_tampil">Kembali</a>
</div>