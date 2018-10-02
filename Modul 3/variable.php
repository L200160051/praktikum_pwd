<HTML>
<HEAD><TITLE>VARIABLE</TITLE></HEAD>
<BODY>
<h1>Buku tamu</h1>
<form method='post' action='variable.php'>
<p>nama :<input type='text' name='nama' size='20'></p>
<p>E-mail :<input type='text' name='email' size='20'></p>
<p>komentar:<textarea name='komentar' cols='30' rows='3'></textarea></p>
<p><input type='submit' value='Kirim' name='submit'></p>
</form>
<?php
error_reporting (E_ALL ^ E_NOTICE);
$nama = $_POST['nama'];
$email = $_POST['email'];
$komentar = $_POST['komentar'];
$submit = $_POST['submit'];
if ($submit) {
	echo"</br>nama : $nama";
	echo"</br>E-mail : $email";
	echo"</br>komentar : $komentar";
}
?>
</BODY>
<HTML>