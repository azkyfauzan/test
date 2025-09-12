<?php
$nama = "Azky Fauzan";
$email = "azky@gmail.com";
$telepon = "0831-3029-3597";
$alamat = "Cipacing,Jatinangor, Sumedang";
$tanggal_lahir = "26 September 2008";
$jenis_kelamin = "Laki-laki";
$foto = "azky.jpeg";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profil Pengguna</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f0f0f0;
        }
        .profile-card {
            background: #fff;
            padding: 30px;
            max-width: 500px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            margin: auto;
        }
        .profile-card img {
            width: 130px;
            height: 130px;
            border-radius: 50%;
            object-fit: cover;
            display: block;
            margin: 0 auto 20px;
        }
        .profile-card h2 {
            text-align: center;
            margin-bottom: 10px;
        }
        .profile-card table {
            width: 100%;
            font-size: 16px;
        }
        .profile-card table td {
            padding: 8px 0;
        }
        .profile-card table td.label {
            font-weight: bold;
            width: 40%;
            color: #555;
        }
    </style>
</head>
<body>

<div class="profile-card">
    <img src="<?php echo $foto; ?>" alt="Foto Profil">
    <h2><?php echo $nama; ?></h2>
    <table>
        <tr>
            <td class="label">Email</td>
            <td>: <?php echo $email; ?></td>
        </tr>
        <tr>
            <td class="label">Nomor Telepon</td>
            <td>: <?php echo $telepon; ?></td>
        </tr>
        <tr>
            <td class="label">Alamat</td>
            <td>: <?php echo $alamat; ?></td>
        </tr>
        <tr>
