<?php 
	include '../inc/config.php';

	$proses = $_GET['proses'];
	if($proses == 'tkategori')
	{
		$kategori->input($_POST['kategori']);
		echo "<script>alert('Data tersimpan')</script>";
        echo "<script>window.location='dashboard.php?m=kategori'</script>";
	}
	elseif($proses == 'ekategori')
	{
		$kategori->update($_POST['idk'],$_POST['kategori']);
		echo "<script>alert('Data telah di ubah')</script>";
        echo "<script>window.location='dashboard.php?m=kategori'</script>";
	}
	else if($proses == 'hkategori')
	{
		$kategori->hapus($_GET['idk']);
		echo "<script>alert('Data terhapus')</script>";
        echo "<script>window.location='dashboard.php?m=kategori'</script>";
	}
	else if($proses == 'tberita')
	{
		$berita->input($_POST['judul'],$_POST['kategori'],$_POST['isi'],$_FILES['gambar']);
		echo "<script>alert('Data tersimpan')</script>";
        echo "<script>window.location='dashboard.php?m=berita'</script>";
	}
	else if($proses == 'hberita')
	{
		$berita->hapus($_GET['idb']);
		echo "<script>alert('Data terhapus')</script>";
        echo "<script>window.location='dashboard.php?m=berita'</script>";
	}
	else if($proses == 'eberita')
	{
		$berita->update(
			$_POST['idb'],
			$_POST['kategori'],
			$_POST['judul'],
			$_POST['isi'],
			$_FILES['gambar']);
		echo "<script>alert('Data Telah di ubah')</script>";
        echo "<script>window.location='dashboard.php?m=berita'</script>";
	}
 ?>