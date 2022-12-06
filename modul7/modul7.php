<html>
<head><title>Tugas String dan Tanggal</title>
<body>
<form method="post">
	Masukkan Nama, Email dan Password <br>
	Default Nama = belajar, Email = test@gmail.com dan Password = madiun <br>
	Isian data :<br>
	Nama :<INPUT TYPE=TEXT NAME=nama><br>
	Email :<INPUT TYPE=TEXT NAME=email><br>
	Password :<INPUT TYPE=PASSWORD NAME=password><br>
	<input type="hidden" name="tanggal" value="<?php echo date("d-m-Y"); ?>">
	<INPUT TYPE=SUBMIT NAME ="Cek" VALUE="Cek"><br>
</form>

<?php

	$tanggal = $email ="";
	if (isset($_POST['Cek']))
	{
		$tanggal = $_POST["tanggal"];
		print("Tanggal Sekarang : ").$tanggal;	
		print("<br>\n");
	}

	if (empty($_POST["$email"]))
	{
		print("Harap mengisi email <br>\n");
	}
	else
	{
		if (ereg("test@gmail.com", $email))
		{
			print("Alamat email $email valid<br>\n");
		}
		else
		{
			print("Alamat email $email tidak valid<br>\n");
		}
	}
		if (isset($password))
		{
			$nama = "belajar";
			$pass_valid = crypt("madiun", $nama);
			$enkripsi = crypt($password, $nama);
			if ($pass_valid == $enkripsi)
				print("Password valid");
			else
				print("Password salah");
		}
?>
</body>
</html>