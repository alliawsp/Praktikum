<!DOCTYPE html>
<html>
<head>
<title>Input Data Ke Database dengan PHP</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="judul">
        <h1>LAYANAN KLINIK SEHAT ADITAPA</h1>
        <h3>jl. genggong no.87 Kota Madiun, No Telpon 081234567891</h3>
    </div>
    <br/>
        <a href="index.php">Lihat Semua Data</a>
    <br/>
        <h3>Input data baru</h3>
<form action="input-aksi.php" method="post">
    <table>
        <tr>
        <td>No Antrian</td>
        <td><input type="text" name="no_antrian"></td>
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
        <td>Jenis Kelamin</td>
        <td><input type="text" name="jenis_kelamin"></td>
        </tr>
        <tr>
        <td>Usia</td>
        <td><input type="text" name="usia"></td>
        </tr>
        <tr>
        <td>Alamat</td>
        <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
        <td>Gejala</td>
        <td><input type="text" name="gejala"></td>
        </tr>
        <tr>
        <td></td>
        <td><input type="submit" value="Simpan"></td>
        </tr>
    </table>
</form>
</body>
</html>