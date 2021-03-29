<html>
    <head>
    </head>
    <body>
        <!-- membuat form yang mengkoneksikan dengan file post_tugas3.php -->
        <form method="POST" action="post_tugas3.php"> 
            <h2> Masukan Biodata Anda: </h2> 
            <table width="600"  cellpadding="2" cellspacing="2">  
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
                    <!-- output : Tempat dan Tanggal Lahir -->
                    <td width="130">Tempat dan Tanggal Lahir</td>
                    <!-- membuat inputan ttl -->
                    <td><input type="text" name="ttl"></td> 
                </tr>
                <tr>
                    <!-- output : Pendidikan -->
                    <td width="130">Pendidikan</td> 
                    <!-- membuat inputan pendidikan -->
                    <td><input type="text" name="pendidikan"></td> 
                </tr>
                <tr>
                    <!-- output : Alamat -->
                    <td width="130">Alamat</td>
                    <!-- membuat inputan alamat -->
                    <td><input type="text" name="alamat"></td>
                </tr>
                <tr>
                    <!-- output : Hobi -->
                    <td width="130">Hobi</td>
                    <!-- membuat inputan hobi -->
                    <td><input type="text" name="hobi"></td>
                </tr>
                <tr>
                    <td>
                        <!-- membuat button submit untuk login -->
                        <input type="submit" name="btnLogin" value="Kirim"> 
                        <!-- membuat reset untuk menghapus inputan -->
                        <input type="reset" name="reset" value="Reset"> 
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>