<html>
    <head>
        <title> Pemrograman PHP dengan Array </title>
    </head>
    <body>
        <?php
            $nama[] = "Salma"; //membuat array berisi teks "Salma"
            $nama[] = "Nur"; //membuat array berisi teks "Nur"
            $nama[] = "Aini"; //membuat array berisi teks "Aini"
            echo $nama[1] . $nama[2] . $nama[0]; 
            //output : NurAiniSalma
            echo "<br>";
        ?>
    </body>
</html>