<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>menghitung luas segitiga</title>
</head>
<body>
     <?php
     // soal pertama
     $a = 12;
     $t = 8;
     define("judul","luas segitiga");
     echo "<h1>".judul."</h1>";
     echo "<br> alas: $a <br>";
     echo "tinggi: $t <br>";
     $luas=0.5*$a*$t;
     echo "luas segitiga: $luas";

     ?>
     
</body>
</html>