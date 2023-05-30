<?php

$kat = new App\harga;
$rows = $kat->tampil();

?>

<h2>Harga Boba</h2>

<a href="menu.php?hal=harga_input" class="btn">Add Harga</a>

<table>
    <tr>
        <th>NO</th>
        <th>NAMA BOBA</th>
        <th>UKURAN</th>
        <th>HARGA</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['harga_id']; ?></td>
        <td><?php echo $row['name_boba']; ?></td>
        <td><?php echo $row['ukuran_boba']; ?></td>
        <td><?php echo $row['harga_boba']; ?></td>
        <td><a href="menu.php?hal=harga_edit&id=<?php echo $row['harga_id']; ?>" class="btn">Edit</a></td>
        <td><a href="menu.php?hal=harga_delete&id=<?php echo $row['harga_id']; ?>" class="btn">Delete</a></td>
    </tr>
    <?php } ?>
</table>
