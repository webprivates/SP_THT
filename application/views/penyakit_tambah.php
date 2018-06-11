<h3>Tambah Data</h3>
<form action="<?php echo site_url() ?>/Penyakit/create" method="POST">
	<table>
		<tr>
			<td>Masukkan Kode Penyakit</td>
			<td><input type="text" name="kd_penyakit"></td>
		</tr>
		<tr>
			<td>Masukkan Nama Penyakit</td>
			<td><input type="text" name="nm_penyakit"></td>
		</tr>

	</table>
	<button type="submit" name="submit">Simpan</button>
</form>