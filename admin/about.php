<h2>Detail Information</h2>

<div class="table-responsive">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Deskripsi</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $nomor=1; ?>
			<?php $ambil=$koneksi->query("SELECT * FROM about"); ?>
			<?php while ($pecah = $ambil->fetch_assoc()) {?>
				<tr>
					<td><?php echo $nomor; ?></td>
					<td><?php echo $pecah['deskripsi']; ?></td>

					<td>
						<a href="" class="btn btn-info fa fa-edit" title="ubah"></a><br>
						<a href="index.php?halaman=hapusabout&id=<?php echo $pecah['id_about']; ?>" class="btn btn-danger fa fa-trash-o" title="hapus"></a>
					</td>
				</tr>
				<?php $nomor++ ?>
			<?php } ?>
		</tbody>

	</table>
	<a href="index.php?halaman=tambahabout" class="btn btn-primary">Tambah Informasi</a>
</div>