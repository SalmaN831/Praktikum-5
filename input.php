<html>
    <head>
        <title></title>
    </head>
    <body>
        <!-- membuat form yang mengoneksikan dengan hasilkirim.php -->
        <form method="POST" action="hasilkirim.php">
            <!-- membuat tabel -->
            <table width="400" align="center" cellpadding="2" cellspacing="2">
                <tr>
                    <!-- output : Nama -->
                    <td width="130">Nama</td>
                    <!-- membuat textbox untuk menginput nama -->
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="btnLogin" value="Kirim"></td>
                        <input type="reset" name="reset" value="Reset"></td>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>