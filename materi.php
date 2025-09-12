<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Materi</title>
    <style>
      .kotak {
        position: absolute;
        padding: 20px;
        background-color: blue;
        width: 900px;
        height: 40px;
        text-align: center;
        position: absolute;
        top: 20px;
        left: 120px;
      }
      .menu {
        position: relative;
        padding: 10px;
        background-color: lightblue;
        width: 90px;
        height: 300px;
        text-align: center;
        top: -1020px;
        left: 40px;
        border-radius: 20px;
        font-family: Arial, helvetica, sans-serif;
      }
      .gmbar {
        position: relative;
        padding: 100px;

        width: 70px;
        height: 80px;
        position: transformX(-50);
        top: -90px;
        left: -80px;
      }
      .badag {
        position: relative;
        padding: 90px;
        background-color: lightblue;
        width: 700px;
        height: 400px;
        position: transformX(-50);
        top: -100px;
        left: 172px;
      }
      .kotak2 {
        position: absolute;
        padding: 20px;
        background-color: aquamarine;
        width: 900px;
        height: 40px;
        top: 200px;
        left: 120px;
        text-align: center;
        font-size: 20px;
      }
    </style>
  </head>
  <body>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQE44aHQEjepFxdourWU4rWwHZPLrIa-JhEKQ&s" width="200px" class="gmbar" />

      <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="badag">
        <h1 style="text-align: left;">Hitung Kubus:</h1>

        <input style="text" Name="sisi">
        <input type="submit" value="TAMPIL"><input type="reset" value="RESET">
      </pre>
      <?php
      $sisi1=0;
      if (isset($_POST['sisi'])){
        $sisi1=$_POST['sisi'];
      }
      $hasil= $sisi1*$sisi1*$sisi1;
      echo "hasil dari perhitungan kubus= $hasil cm3<br>";
      $teks1="Belajar menghitung";
      $teks2="Volume kubus";
      $hasil=$teks1.$teks2;
      echo "$hasil";

      if (!empty($sisi1)){
        echo "nama: $sisi1<br>";
      }
      ?>
      </form>

    <div class="kotak"><p>Materi</p></div>
    <div class="gmbar"></div>
    <div class="menu"><p>Menu</p><br>
    <a href="index.html"><p>home</p></a>
    <a href="materi.php"><p>materi</p></a>
    <a href="profile.php"><p>profile</p></a>
    <a href="sosmed.php"><p>sosmed</p></a>
  </body>
</html>
