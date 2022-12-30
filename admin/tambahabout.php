<h2>Tambah Information</h2>

<form method="post" enctype="multipart/form-data">
	
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
	//$nama = $_FILES['file']['name'];
	//$lokasi = $_FILES['file']['tmp_name'];
	//move_uploaded_file($lokasi, "../img/projects/".$nama);
	$koneksi->query("INSERT INTO about
		(deskripsi)
		VALUES('$_POST[deskripsi]')");

	echo "<div class='alert alert-success'>Data Tersimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=about'>";
}
?>


