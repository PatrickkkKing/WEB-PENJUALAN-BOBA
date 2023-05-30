<?php

$id = $_GET['id'];
$kat = new App\Kategori();

$row = $kat->edit($id);
?>

<h2>Edit Category</h2>

<form action="kat_proses.php" method="post">
    <input type="hidden" name="cat_id" value="<?php echo $row['cat_id']; ?>">
    <table>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="cat_name" value="<?php echo $row['cat_name']; ?>"></td>
        </tr>
        <tr>
            <td>KETERANGAN</td>
            <td><textarea name="cat_text" id="" cols="30" rows="10"><?php echo $row['cat_text']; ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>