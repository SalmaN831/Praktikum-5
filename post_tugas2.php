<?php 
    //jika diklik reset maka inputan akan dihapus
    if (empty($_POST['nama']) || (empty($_POST['email']))) { 
        header("location:redirect.php");
    //jika diklik login
    } else { 
        echo " Nama :".$_POST['nama']."<br>"; 
        //output : inputan nama
        echo " Email :".$_POST['email']."<br>"; 
        //output : inputan email
        date_default_timezone_set('Asia/Jakarta'); 
        echo date('H:i:s a, l-d-m-Y'); 
        //output berupa tanggal dan waktu login
    }
?>