<?php

$id = $_GET['id'];
$kat = new App\harga();

$row = $kat->edit($id);
?>

<h2>Edit Harga</h2>

<form action="harga_proses.php" method="post">
    <input type="hidden" name="harga_id" value="<?php echo $row['harga_id']; ?>">
    <table>
        <tr>
            <td>NAMA BOBA</td>
            <td><input type="text" name="name_boba" value="<?php echo $row['name_boba']; ?>"></td>
        </tr>
        <tr>
            <td>UKURAN BOBA</td>
            <td><input type="text" name="ukuran_boba" value="<?php echo $row['ukuran_boba']; ?>"></td>
        </tr>
        <tr>
            <td>HARGA BOBA</td>
            <td><input type="text" name="harga_boba" value="<?php echo $row['harga_boba']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>