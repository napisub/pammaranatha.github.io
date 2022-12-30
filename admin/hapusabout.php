<?php 

$ambil = $koneksi->query("SELECT * FROM about WHERE id_about='$_GET[id]'");

$koneksi->query("DELETE FROM about WHERE id_about='$_GET[id]'");

echo "<script>alert('About Terhapus');</script>";
echo "<script>location='index.php?halaman=about';</script>";
?>