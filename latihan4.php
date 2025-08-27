<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Menghitung luas menggunakan define</title>
</head>
<body>
     <?php
     $r = 10;
     define("judul","luas lingkaran");
     define("phi",3.14);
     echo "<br> jari-jari: $r <br>";
     $luas=phi*$r*$r;
     echo "luas lingkaran: $luas";


?>
     
</body>
</html>