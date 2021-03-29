<html>
    <head>
        <title> Konversi Tipe </title>
    </head>
    <body>
        <?php
            $a = 300.4; //menginput nilai pada var a
            echo $a;
            echo "<br>";
            echo "tipe Double : ", doubleval($a), "<br>";
            //output : 300.4
            echo "tipe Integer : ", intval($a), "<br>";
            //output : 300
            echo "tipe String : ", strval($a), "<br>";
            //output : 300.4
        ?>
    </body>
</html>