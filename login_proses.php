<?php

$koneksi = new PDO("mysql:host=localhost;dbname=project4", "root", "");
 
if (isset($_POST['btn_login'])) {

    $user_name = $_POST['user_name'];
    $user_password = $_POST['user_password'];

    $sql = "SELECT * FROM tb_user 
    WHERE user_name=:user_name AND user_password=:user_password";

    $stmt = $koneksi->prepare($sql);
    $stmt->bindParam(":user_name", $user_name);
    $stmt->bindParam(":user_password", $user_password);
    $stmt->execute();

    $result = $stmt->fetch();

    if (!empty($result)) {
        header("location:login.php");
    } else {
        header("location:menu.php"); 
    }
}
