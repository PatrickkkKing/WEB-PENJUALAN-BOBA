<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sistem</title>

    <link rel="shortcut icon" href="layouts/assets/img/iconboba.png" type="image/x-icon">
    <link rel="stylesheet" href="layouts/assets/css/stylelogin.css">
</head>
<body>

    <div class="loginsistem">
        <h2>Login</h2>

        <form action= "login_proses.php" method="post">
            <table>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="user_name" id=""></td>
                </tr>

                <tr>
                    <td>Password</td>
                    <td><input type="text" name="user_password" id=""></td>
                </tr>

                <tr>
                    <td></td>
                    <td><input type="submit" name="btn_login" value="LOGIN"></td>
                </tr>

            </table>
            
        </form>
    </div>
</body>
</html>