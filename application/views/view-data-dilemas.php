<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<title>Form Data Siswa</title>
</head>
<body>
	<center>
			<table>
				<tr>
					<th colspan="3">Form Data Siswa</th>
				</tr>
				<tr>
					<th colspan="3">
						<hr>
					</th>
				</tr>
				<tr>
					<th>Nama Siswa</th>
					<th>:</th>
					<th><?= $nama;?>
					</th>
				</tr>
				<tr>
					<th>NIS</th>
					<th>:</th>
					<th><?= $nis;?>
					</th>
				</tr>
				<tr>
					<th>Kelas</th>
					<th>:</th>
					<th><?= $kelas;?>
					</th>
				</tr>
				<tr>
					<th>Tanggal Lahir</th>
					<th>:</th>
					<th><?= $tanggal;?>
					</th>
				</tr>
				<tr>
					<th>Tempat Lahir</th>
					<th>:</th>
					<th><?= $tempat;?>
					</th>
				</tr>
				<tr>
					<th>Alamat</th>
					<th>:</th>
					<th><?= $alamat;?>
					</th>
				</tr>
				<tr>
					<th>Jenis Kelamin</th>
					<th>:</th>
					<th><?= $jk;?>
					</th>
				</tr>
				<tr>
					<th>Agama</th>
					<th>:</th>
					<th><?= $agama;?>
					</th>
				</tr>
				<tr>
					<th colspan="3"><a href="?= base_url() ; ?>dilemas" title="kembali">kembali</a></th>
				</tr>
			</table>

		</center>
</body>
</html>