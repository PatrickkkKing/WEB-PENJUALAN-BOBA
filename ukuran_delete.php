<?php

$id = $_GET['id'];

$kat = new App\ukuran();
$rows = $kat->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="menu.php?=ukuran_tampil">Kembali</a>
</div>