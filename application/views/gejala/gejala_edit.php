<div class="row">
	<div class="col-md-12">
		<h3>Edit Data</h3>
		<form action="<?php echo site_url() ?>/gejala/edit" method="POST">
			<input type="hidden" name="id" value="<?php echo $gejala['id'] ?> ">
			<table class="table table-striped table-responsive" >
				<tr>
					<td>Masukkan Kode Gejala</td>
					<td><input type="text" class="form-control" name="kd_gejala" value="<?php echo $gejala['kd_gejala'] ?>"></td>
				</tr>
				<tr>
					<td>Masukkan Gejala</td>
					<td><input type="text" class="form-control" name="gejala" value="<?php echo $gejala['gejala'] ?>"></td>
				</tr>

			</table>
			<button type="submit" name="submit" class="btn btn-primary btn-sm">Edit</button>
			<a href="<?php echo site_url()?>/gejala" class="btn btn-danger btn-sm" >Batal</a>
		</form>
	</div>
</div>