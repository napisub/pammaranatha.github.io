<h2>Data Gallery</h2>

<div class="table-responsive">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Gallery</th>
				<th>File</th>
				<th>Deskripsi</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $nomor=1; ?>
			<?php $ambil=$koneksi->query("SELECT * FROM gallery"); ?>
			<?php while ($pecah = $ambil->fetch_assoc()) {?>
				<tr>
					<td><?php echo $nomor; ?></td>
					<td><?php echo $pecah['nama_gallery']; ?></td>
					<td>
						<img src="../img/projects/<?php echo $pecah['file']; ?>" width="100">
					</td>
					<td><?php echo $pecah['deskripsi']; ?></td>
					<td>
						<a href="" class="btn btn-info fa fa-edit" title="ubah"></a><br>
						<a href="index.php?halaman=hapusgallery&id=<?php echo $pecah['id_gallery']; ?>" class="btn btn-danger fa fa-trash-o" title="hapus"></a>
					</td>
				</tr>
				<?php $nomor++ ?>
			<?php } ?>
		</tbody>

	</table>
	<a href="index.php?halaman=tambahgallery" class="btn btn-primary">Tambah Gallery</a>
</div>