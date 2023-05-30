<?php

$kat = new App\ukuran;
$rows = $kat->tampil();

?>

<h2>Ukuran Boba</h2>

<a href="menu.php?hal=ukuran_input" class="btn">Add Ukuran Boba</a>

<table>
    <tr>
        <th>NO</th>
        <th>UKURAN BOBA</th>
        <th>KETERANGAN</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['ukuran_id']; ?></td>
        <td><?php echo $row['ukuran_boba']; ?></td>
        <td><?php echo $row['keterangan']; ?></td>
        <td><a href="menu.php?hal=ukuran_edit&id=<?php echo $row['ukuran_id']; ?>" class="btn">Edit</a></td>
        <td><a href="menu.php?hal=ukuran_delete&id=<?php echo $row['ukuran_id']; ?>" class="btn">Delete</a></td>
    </tr>
    <?php } ?>
</table>
