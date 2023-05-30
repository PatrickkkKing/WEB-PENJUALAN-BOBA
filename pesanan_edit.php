<?php

$id = $_GET['id'];
$kat = new App\pesanan();

$row = $kat->edit($id);
?>

<h2>Edit Pesanan</h2>

<form action="pesanan_proses.php" method="post">
    <input type="hidden" name="id_pesanan" value="<?php echo $row['id_pesanan']; ?>">
    <table>
        <tr>
            <td>NAMA PESANAN</td>
            <td><input type="text" name="name_pesanan" value="<?php echo $row['name_pesanan']; ?>"></td>
        </tr>
        <tr>
            <td>UKURAN BOBA</td>
            <td><input type="text" name="ukuran_pesanan" value="<?php echo $row['ukuran_pesanan']; ?>"></td>
        </tr>
        <tr>
            <td>HARGA BOBA</td>
            <td><input type="text" name="harga_pesanan" value="<?php echo $row['harga_pesanan']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>