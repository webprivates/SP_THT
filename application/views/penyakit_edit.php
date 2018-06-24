<h3>Edit Data</h3>
<form action="<?php echo site_url() ?>/Penyakit/edit" method="POST">
	<input type="hidden" name="id" value="<?php echo $Penyakit['id'] ?> ">
	<table>
		<tr>
			<td>Masukkan Kode Penyakit</td>
			<td><input type="text" name="kd_penyakit" value="<?php echo $Penyakit['kd_penyakit'] ?>"></td>
		</tr>
		<tr>
			<td>Masukkan Nama Penyakit</td>
			<td><input type="text" name="nm_penyakit" value="<?php echo $Penyakit['nm_penyakit'] ?>"></td>
		</tr>

	</table>
	<button type="submit" name="submit">Edit</button>
</form>