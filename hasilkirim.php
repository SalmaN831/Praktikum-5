<?php
    //jika klik button reset maka inputan akan dihapus
    if (empty($_POST['nama'])){
        header("Location:kosong.php");
    //jika klik button kirim
    } else {
        echo "<center>Nama :".$_POST['nama']."</center><br>";
        //output : nama
    }
?>