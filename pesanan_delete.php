<?php

$id = $_GET['id'];

$kat = new App\pesanan();
$rows = $kat->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="menu.php?=pesanan_tampil">Kembali</a>
</div>