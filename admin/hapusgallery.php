<?php 

$ambil = $koneksi->query("SELECT * FROM gallery WHERE id_gallery='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$filegallery = $pecah['file'];
if (file_exists("../img/projects/$filegallery"))
{
	unlink("../img/projects/$filegallery");
}

$koneksi->query("DELETE FROM gallery WHERE id_gallery='$_GET[id]'");

echo "<script>alert('Gallery Terhapus');</script>";
echo "<script>location='index.php?halaman=gallery';</script>";
?>