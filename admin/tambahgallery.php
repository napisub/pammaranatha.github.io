<h2>Tambah Gallery</h2>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama</label>
		<input type="text" class="form-control" name="namagallery" required>
	</div>
	<div class="form-group">
		<label>Foto/Video</label>
		<input type="file" class="form-control" name="file" required>
	</div>
	<div class="form-group">
		<label>Deskripsi</label>
		<textarea class="form-control" name="deskripsi" required></textarea>
	</div>
	<button class="btn btn-primary" name="simpan">Simpan</button>
</form>

<?php 
if (isset($_POST['simpan'])) 
{
	// code...
	$nama = $_FILES['file']['name'];
	$lokasi = $_FILES['file']['tmp_name'];
	move_uploaded_file($lokasi, "../img/projects/".$nama);
	$koneksi->query("INSERT INTO gallery
		(nama_gallery,file,deskripsi)
		VALUES('$_POST[namagallery]','$nama','$_POST[deskripsi]')");

	echo "<div class='alert alert-success'>Data Tersimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=gallery'>";
}
?>


