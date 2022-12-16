<!DOCTYPE html>
<html>
<head>
<title>Input Data Ke Database dengan PHP</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="judul">
        <h1>DAFTAR ANGGOTA PERPUS KOTA MADIUN</h1>
        <h3>www.perpuskotamadiun.ac.id</h3>
    </div>
    <br/>
        <a href="index.php">Lihat Semua Data</a>
    <br/>
        <h3>Input data baru</h3>
<form action="input-aksi.php" method="post">
    <table>
        <tr>
        <td>No ID</td>
        <td><input type="text" name="no_id"></td>
        </tr>
        <tr>
        <td>Nama Lengkap</td>
        <td><input type="text" name="nama_lengkap"></td>
        </tr>
        <tr>
        <td>Jenis Kelamin</td>
        <td><input type="text" name="jenis_kelamin"></td>
        </tr>
        <tr>
        <td>TTL</td>
        <td><input type="text" name="tempattgl_lahir"></td>
        </tr>
        <tr>
        <td>Asal Kota</td>
        <td><input type="text" name="asal_kota"></td>
        </tr>
        <tr>
        <td>Pendidikan Terakhir</td>
        <td><input type="text" name="pendidikan_terakhir"></td>
        </tr>
        <tr>
        <td>No Telepon</td>
        <td><input type="text" name="no_telp"></td>
        </tr>
        <tr>
        <td>Alamat</td>
        <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
        <td></td>
        <td><input type="submit" value="Simpan"></td>
        </tr>
    </table>
</form>
</body>
</html>