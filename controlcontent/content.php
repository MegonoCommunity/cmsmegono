<?php 
	$modul = @$_GET['m'];
	$aksi = @$_GET['aksi'];
	//ini modul kategori
 		if($modul== 'kategori')
 		{
 			if($aksi == '')
 			{
 				include 'modul/kategori/kategori.php';
				
 			} 
 			else if($aksi == 'tambahkategori')
 			{
 				include 'modul/kategori/kategori_tambah.php';
				
 			}
 			else if($aksi == 'editkategori')
 			{
 				include 'modul/kategori/kategori_edit.php';
 			}

 		} 
 		// ini modul posting
 		else if($modul == 'berita')
 		{
 			if($aksi == '')
 			{
				include 'modul/posting/berita.php';
 			}
 			else if($aksi == 'tambahberita')
 			{
 				include 'modul/posting/berita_tambah.php';
 			}
 			else if($aksi == 'editberita')
 			{
 				include 'modul/posting/berita_edit.php';
 			}
 			
 		} 
 		else if($modul == 'komentar')
 		{
 			if ($aksi == '')
 			{
 				include 'komentar.php';
 			}
 		}
 		else 
 		{
			include 'profil-dashboard.php';
		} 
 ?>