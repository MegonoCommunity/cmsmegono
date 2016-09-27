<?php 
	include '../../class_kategori.php';

	$proses = $_GET['proses'];
	if($proses == 'tambah')
	{
		$kategori->input($_POST['nm_kategori']);
		echo "<script>alert('Data tersimpan')</script>";
        echo "<script>window.location='../../dashboard.php?m=kategori'</script>";
	}elseif($proses == 'edit'){
		$kategori->update($_POST['id'],$_POST['nm_kategori']);
		echo "<script>alert('Data telah di ubah')</script>";
        echo "<script>window.location='../../dashboard.php?m=kategori'</script>";
	}else if($proses == 'hapus')
	{
		$kategori->hapus($_GET['id']);
		echo "<script>alert('Data terhapus')</script>";
        echo "<script>window.location='../../dashboard.php?m=kategori'</script>";
	}
 ?>