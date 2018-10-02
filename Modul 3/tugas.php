<html>
<head><title>Program Penjumlahan</title><head>
<body>
<form method='POST' action='tugas.php'>
<p>Nilai A adalah <input type='text' name='A' size='20'></p>
<p>Nilai B adalah <input type='text' name='B' size='20'></p>
<p><input type='submit' value='Jumlahkan' name='submit'></p>
</form>

<?php
error_reporting (E_ALL ^ E_NOTICE);
$pertama = $_POST['A'];
$kedua = $_POST['B'];
$submit = $_POST['submit'];
$jumlh = $pertama+$kedua;
if($submit){
	echo"Nilai A adalah $pertama <br>";
	echo"Nilai B adalah $kedua <br>";
	echo"Jadi Nilai A ditambah Nilai B adalah $jumlh";
}
?>
</body>
</html>