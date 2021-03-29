<html>
    <head>
        <title></title>
    </head>
    <body>
        <!-- membuat form yang mengkoneksikan dengan file post_login.php -->
        <form method="POST" action="post_login.php">
            <!-- membuat tabel -->
            <table width="400" align="center" cellpadding="2" cellspacing="2">
                <tr>
                    <!-- output : Nama -->
                    <td width="130">Nama </td>
                    <!-- membuat inputan nama -->
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <!-- output : Email -->
                    <td width="130">Email</td>
                    <!-- membuat inputan email -->
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>
                        <!-- membuat button login untuk login -->
                        <input type="submit" name="btnLogin" value="Login">
                        <!-- membuat reset untuk menghapus inputan -->
                        <input type="reset" name="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>