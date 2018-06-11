<h3>Penyakit List</h3>
<a href="<?php echo site_url()?>/Penyakit/create">Tambah data</a>
<table border="2" cellspacing="0" cellpadding="0">
	<tr>
		<th>id</th>
		<th>Kode Penyakit</th>
		<th>Nama Penyakit</th>
		<th>Aksi</th>
	</tr>
	<?php foreach ($penyakit_data as $data): ?>
		
	<tr>
		<td><?php echo $data['id'] ?></td>
		<td><?php echo $data['kd_penyakit'] ?></td>
		<td><?php echo $data['nm_penyakit'] ?></td>
		<td>
			<a href="#">Edit</a>
			<a href="#">Hapus</a>
		</td>
	</tr>
	<?php endforeach ?>
</table>