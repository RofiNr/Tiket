<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan-Tiket-Online</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="box-log">
        <h1 class="title">LOGIN</h1>
        <form action= "cek-login.php" method= "post">
            <table  class="khusus">
                <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td><input type="text" name="user" required= 
                    ""></input></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="password" name="pass" required= 
                    ""></input></td>
                </tr>
                <tr>
                    <td colspan ="3" ><input type="submit"class ="
                    submit kanan" value="Masuk"  required= ""></input></td>
                </tr>
            </table>
        </form>
</body>
</html>