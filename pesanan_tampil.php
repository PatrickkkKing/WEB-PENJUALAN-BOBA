<?php

$kat = new App\pesanan;
$rows = $kat->tampil();

?>

<h2>Daftar Pesanan</h2>

<a href="menu.php?hal=pesanan_input" class="btn">Add Pesanan</a>

<table>
    <tr>
        <th>NO</th>
        <th>NAMA PESANAN</th>
        <th>UKURAN BOBA</th>
        <th>HARGA BOBA</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['id_pesanan']; ?></td>
        <td><?php echo $row['name_pesanan']; ?></td>
        <td><?php echo $row['ukuran_pesanan']; ?></td>
        <td><?php echo $row['harga_pesanan']; ?></td>
        <td><a href="menu.php?hal=pesanan_edit&id=<?php echo $row['id_pesanan']; ?>" class="btn">Edit</a></td>
        <td><a href="menu.php?hal=pesanan_delete&id=<?php echo $row['id_pesanan']; ?>" class="btn">Delete</a></td>
    </tr>
    <?php } ?>
</table>
