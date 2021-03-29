<?php
    //mengkoneksikan dengan file inc.php
    include "inc.php";
    echo $angka; //output : 90
    echo "<br>";
    if ($angka==100){
        echo "Memuaskan"; //output : Memuaskan
    } elseif ($angka<100&&$angka>=85){
        echo "Sangat Baik"; //output : Sangat Baik
    } elseif ($angka<85&&$angka>=70){
        echo "Baik"; //output : Baik
    } elseif ($angka<70&&$angka>=55){
        echo "Cukup"; //output : Cukup
    } elseif ($angka<55&&$angka>=0){
        echo "Kurang"; //output : Kurang
    }
?>