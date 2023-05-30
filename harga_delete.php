<?php

$id = $_GET['id'];

$kat = new App\harga();
$rows = $kat->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="menu.php?=harga_tampil">Kembali</a>
</div>