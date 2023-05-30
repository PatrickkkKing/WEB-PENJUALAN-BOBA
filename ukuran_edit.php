<?php

$id = $_GET['id'];
$kat = new App\ukuran();

$row = $kat->edit($id);
?>

<h2>Edit Ukuran Boba</h2>

<form action="ukuran_proses.php" method="post">
    <input type="hidden" name="ukuran_id" value="<?php echo $row['ukuran_id']; ?>">
    <table>
        <tr>
            <td>UKURAN BOBA</td>
            <td><input type="text" name="ukuran_boba" value="<?php echo $row['ukuran_boba']; ?>"></td>
        </tr>
        <tr>
            <td>KETERANGAN</td>
            <td><textarea name="keterangan" id="" cols="30" rows="10"><?php echo $row['keterangan']; ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>