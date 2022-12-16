<!DOCTYPE html>
<html>
<head>
<title>Input Data Ke Database dengan PHP</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="judul">
        <h1>LAYANAN SERVICE MOTOR</h1>
        <h3>jl. majapahit no.56 Kota Madiun</h3>
    </div>
    <br/>
        <a href="index.php">Lihat Semua Data</a>
    <br/>
        <h3>Input data baru</h3>
<form action="input-aksi.php" method="post">
    <table>
        <tr>
        <td>No Plat</td>
        <td><input type="text" name="no_plat"></td>
        </tr>
        <tr>
        <td>Tanggal</td>
        <td><input type="text" name="tanggal"></td>
        </tr>
        <tr>
        <td>Nama</td>
        <td><input type="text" name="nama"></td>
        </tr>
        <tr>
        <td>Type / Tahun</td>
        <td><input type="text" name="type_tahun"></td>
        </tr>
        <tr>
        <td>Alamat</td>
        <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
        <td>Layanan</td>
        <td><input type="text" name="layanan"></td>
        </tr>
        <tr>
        <td>Biaya</td>
        <td><input type="text" name="biaya"></td>
        </tr>
        <tr>
        <td></td>
        <td><input type="submit" value="Simpan"></td>
        </tr>
    </table>
</form>
</body>
</html>