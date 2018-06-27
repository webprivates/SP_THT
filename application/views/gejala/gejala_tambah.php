<div class="row">
	<div class="col-md-12">
		<h3>Tambah Data</h3>
		<form action="<?php echo site_url() ?>/gejala/create" method="POST">
			<table class="table table-striped table-responsive">			
				<tr>
					<td>Masukkan Kode Gejala</td>
					<td><input type="text" class="form-control" name="kd_pgejala"></td>
				</tr>
				<tr>
					<td>Masukkan Gejala</td>
					<td><input type="text" class="form-control" name="ngejala"></td>
				</tr>

			</table>
			<button type="submit" name="submit" class="btn btn-primary">Simpan</button>
			<a href="<?php echo site_url()?>/pgejalaa" class="btn btn-danger">Batal</a>
		</form>
	</div>
</div>