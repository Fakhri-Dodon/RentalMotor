<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Rental Don's</title>
</head>
<body>
	<center>
		<h1>Penyewaan Motor Don's</h1>
		<form method="post" action="">
			<table>
				<tr>
					<td for="nama" style="border: none;">Masukan Nama Anda :</td>
					<td>
						<input type="text" name="nama">
					</td>
				</tr>
				<tr>
					<td for="lama" style="border: none;">Masukan Lama Peminjaman :</td>
					<td>
						<input type="number" name="lama">
					</td>
				</tr>
				<tr>
					<td for="jenis">Masukan Jenis :</td>
					<td>
						<select name="jenis" id="apa" required style="width: 100%;">
							<option disabled selected>----------pilih jenis----------</option>
							<option value="Beat">Beat</option>
							<option value="RxKing">Rx King</option>
							<option value="Zx25R">Zx25R</option>
							<option value="Vario">Vario</option>
							<option value="Vesmet">Vesmet</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><button name="kirim" style="width: 195%;">Sewa</button></td>
				</tr>
			</table>		
		</form>
	</center>
</body>
</html>

<?php

include 'proses.php';
$proses = new sewa();
$proses->setHarga(60000, 120000, 250000, 80000, 100000);
if (isset($_POST['kirim'])) {
	$proses->waktu = $_POST['lama'];
	$proses->jenis = $_POST['jenis'];
	echo "<br>";
	$proses->hargaSewa();
	$proses->cetakStruck();
}

?>