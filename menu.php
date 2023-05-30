<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>SI BOBA</title>

      <link rel="shortcut icon" href="layouts/assets/img/iconboba.png" type="image/x-icon">
      <link rel="stylesheet" href="layouts/assets/css/style.css">
</head>

<body>

      <aside>

            <header>
                  <img src="layouts/assets/img/logoboba.png" class="brand">
                  <div class="user">Admin</div>
            </header>

            <nav>
                  <ul>
                        <li>
                              <a href="menu.php">
                                    <img class="icon" src="layouts/assets/img/menu.png" alt=""> Home
                              </a>
                        </li>
                        <li>
                              <a href="menu.php?hal=kat_tampil">
                                    <img class="icon" src="layouts/assets/img/menu.png" alt=""> Category
                              </a>
                        </li>
                        <li>
                              <a href="menu.php?hal=harga_tampil">
                                    <img class="icon" src="layouts/assets/img/menu.png" alt=""> Harga
                              </a>
                        </li>
                        <li>
                              <a href="menu.php?hal=ukuran_tampil">
                                    <img class="icon" src="layouts/assets/img/menu.png" alt=""> Ukuran
                              </a>
                        </li>
                        <li>
                              <a href="menu.php?hal=pesanan_tampil">
                                    <img class="icon" src="layouts/assets/img/menu.png" alt=""> Pesanan
                              </a>
                        </li>
                        <li>
                              <a href="index.php">
                                    <img class="icon" src="layouts/assets/img/menu.png" alt=""> Logout
                              </a>
                        </li>
                  </ul>
            </nav>

      </aside>

      <main>
            <article>
                  <?php

                  require_once "vendor/autoload.php";
                  require_once "inc/Koneksi.php";

                  if (isset($_GET['hal'])) {
                        require $_GET['hal'] . ".php";
                  } else {
                        require "main.php";
                  }
                  ?>
            </article>

            <footer>
                  Copyright &copy; 2023. Designed by Putra, M.A.
            </footer>
      </main>

</body>

</html>