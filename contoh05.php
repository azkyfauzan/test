<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>contoh 5</title>
</head>
<body>
     <?php
     $nama_barang = "buku";
     $jumlah = 4;
     $harga = 4000;
     $total = $harga*$jumlah;
     $diskon = 0.1 * $total;
     $total = $total - $diskon;
     echo "Nama barang: $nama_barang<br>";
     echo "jumlah beli:$jumlah<br>";
     echo "Harga barang:$harga<br>";
     echo "Diskon:$diskon<br>";
     echo "Total bayar:$total<br>";


?>
     
</body>
</html>