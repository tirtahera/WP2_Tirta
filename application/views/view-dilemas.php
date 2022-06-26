<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<title>Form Input Data Siswa</title>
</head>
<body>
	<center>
		<?php //echo validation_errors();
		?>
		<form> action ="<?= base_url();?>dilemas/cetak" method="post">

			<table>
				<tr>
					<th colspan="3">Form Input Data Siswa</th>
				</tr>
				<tr>
					<th colspan="3">
						<hr>
					</th>
				</tr>
				<tr>
					<th>Nama Siswa</th>
					<th>:</th>
					<th><input type="text" name="name" placeholder="Input nama siswa" maxlength="10">
						<?= form_error('nama', '<small system="color:red">', '</small>'); ?></th>
				</tr>
				<tr>
					th>NIS</th>
					<th>:</th>
					<th><input type="text" name="nis" placeholder="Input nis" maxlength="50">
						<?= form_error('nis', '<small system="color:red">', '</small>'); ?></th>
				</tr>
				<tr>
					th>Kelas</th>
					<th>:</th>
					<th><input type="text" name="kelas" placeholder="Input kelas" maxlength="50">
						<?= form_error('kelas', '<small system="color:red">', '</small>'); ?></th>
				</tr>
				<tr>
					<th>Tanggal Lahir</th>
					<th>:</th>
					<th><input type="text" name="tanggal" placeholder="Input tanggal" maxlength="50">
						<?= form_error('tanggal', '<small system="color:red">', '</small>'); ?></th>
				</tr>
				<tr>
					<th>Tempat Lahir</th>
					<th>:</th>
					<th><input type="text" name="tempat" placeholder="Input tempat" maxlength="50">
						<?= form_error('tempat', '<small system="color:red">', '</small>'); ?></th>
				</tr>
				<tr>
					<th>Alamat</th>
					<th>:</th>
					<th><input type="text" name="alamat" placeholder="Input alamat" maxlength="50">
						<?= form_error('alamat', '<small system="color:red">', '</small>'); ?></th>
				</tr>
				<tr><td>Jenis Kelamin</td><td>:</td><td><input type="radio" name="jk" id="jk" value="Laki-Laki">Laki-Laki <input type="radio" value="Perempuan">Perempuan</td></tr>
				<tr>
					<th>Agama</th>
					<th>:</th>
					<th><select name="agama" id="agama">
							<option value="">Pilih Agama</option> 
							<option value="Islam">Islam</option>
							<option value="Kristen">Kristen</option>
							<option value="Katolik">Katolik</option>
							<option value="Buddha">Buddha</option>
							<option value="Hindu">Hindu</option>
							<option value="Protestan">Protestan</option>
							<option value="Khonghucu">Khonghucu</option>
						</select>
					</th>
				</tr>
				<tr>
					<th colspan="3"><input type="submit" value="SUBMIT"></th>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>