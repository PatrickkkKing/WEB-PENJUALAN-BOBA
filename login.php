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

<div class="loginstyle">
        <div class="loginstyle1">
            <img src="layouts/assets/img/iconboba.png" alt="">
            <h3> Login To SI BOBA</h3>
        </div>

        <form action= "login_proses.php" method="post">
            <table class="loginstyle2">
                <tr>
                    <td class="text1">Username or Email Address</td>
                </tr>

                <tr>
                    <td class="block1"><input type="text" name="user_name" id=""></td>
                </tr>

                <tr>
                    <td class="text1">Password</td>
                </tr>
                
                <tr">
                    <td class="block1"><input type="password" name="user_password" id=""></td>
                </tr>

                <tr>
                    <td class="block2"><input type="submit" name="btn_login" value="Login"></td>
                </tr>

            </table>
            
        </form>
    </div>

    <div class="logologin">
        <div class="logologin1">
            <div class="logologin2">
                <a href="https://github.com/PatrickkkKing" target="_blank" rel="noopener noreferrer"><img src="layouts/assets/img/githublogo.png" alt=""></a>
                <h4>GitHub</h4>
            </div>
            <div class="logologin2">
                <a href="mailto:muklasputra222@gmail.com" target="_blank" rel="noopener noreferrer"><img src="layouts/assets/img/gmaillogo.png" alt=""></a>
                <h4>Email</h4>
            </div>
            <div class="logologin2">
                <a href="https://instagram.com/muklas_gilbert" target="_blank" rel="noopener noreferrer"><img src="layouts/assets/img/instagramlogo.png" alt=""></a>
                <h4>Instagram</h4>
            </div>
            <div class="logologin2">
                <a href="http://facebook.com/muklas.a.putra.988" target="_blank" rel="noopener noreferrer"><img src="layouts/assets/img/fblogo.png" alt=""></a>
                <h4>Facebook</h4>
            </div>
        </div>
    </div>
</body>
</html>