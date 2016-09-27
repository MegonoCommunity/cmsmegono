<?php 
	// ini kelass koneksi database
class database{
	public $host = "localhost";
	public $user = "root";
	public $pass = "";
	public $db   = "latihancms";

	function koneksi(){
		mysql_connect($this->host,$this->user,$this->pass)or die("koneksi ke MySQL gagal");
		mysql_select_db($this->db)or die("Database tidak ada");
	}
}
// kelas login
class login{
	public function cek_login($username,$password){
			$password = md5($password);
			$data = mysql_query("SELECT * FROM user WHERE username='$username' AND password='$password' AND aktif='Y'");
			$hitung = mysql_num_rows($data);
			$d = mysql_fetch_array($data);
			if($hitung > 0){
				session_start();
				$_SESSION['login'] = true;
				$_SESSION['username'] = $d['username'];
				$_SESSION['nama'] = $d['nama_lengkap'];
				return true;
							
			}else{
				return false;

			}
	}
}
 //   ini kelas berita
class berita
	{
		function tampil_berita()
		{
			$data = mysql_query("SELECT * FROM berita b join kategori k on b.id_kategori=k.id_kategori");
			if(mysql_num_rows($data) > 0)
			{
				while($x = mysql_fetch_assoc($data))
					$hasil[] = $x;
				return $hasil;
			}
			else
			{
				echo 'berita kosong';
			}
		}


		function input($judul, $kategori, $isi, $gambar)
		{
			//setting gambar dulu agar bisa masuk ke database dengan nama gambar
			$namagambar = $gambar['name'];
			//setting pengambilan lokasi file gambar
			$lokasigambar = $gambar['tmp_name'];
			//setting  tempat folder penyimpanan gambar
			move_uploaded_file($lokasigambar, "gambar_berita/$namagambar");
			//menggambil tanggal hari upload
			$hari = date('Y-m-d');
			mysql_query("INSERT INTO berita (judul,id_kategori,isi,tgl,gambar) VALUES('$judul','$kategori','$isi','$hari','$namagambar')");
		}

		function hapus($idb)
		{
			mysql_query("DELETE FROM berita WHERE id_berita='$idb'");
		}

		function edit($idb)
		{
			$data = mysql_query("SELECT * FROM berita WHERE id_berita='$idb'");
			return mysql_fetch_assoc($data);
		}

		function update($idb, $kategori, $judul, $isi, $gambar)
		{

			if($gambar['error']==0)
			{
				
			//setting gambar dulu agar bisa masuk ke database dengan nama gambar
				$namagambar = $gambar['name'];

				$lokasigambar = $gambar['tmp_name'];

				move_uploaded_file($lokasigambar, "gambar_berita/$namagambar");
				//menjalankan query update dengan edit gambar
				unlink(realpath($gambar,"gambar_berita/$namagambar"));

				mysql_query("UPDATE berita SET id_kategori='$kategori', judul='$judul', isi='$isi', gambar='$namagambar' WHERE id_berita='$idb' ");
			}
			else
			{
				//menjalankan query updata tanpa menggubah gambar
				mysql_query("UPDATE berita SET id_kategori='$kategori', judul='$judul',  isi='$isi' WHERE id_berita='$idb'");
			}
			
		}
	}

class kategori
{

	function tampil_kategori(){
		$data = mysql_query("SELECT * FROM kategori");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

	function input($kategori){
		mysql_query("INSERT INTO kategori VALUES('','$kategori')");
	}

	function edit($idk){
		$data = mysql_query("SELECT * FROM kategori WHERE id_kategori='$idk'");
		while($x = mysql_fetch_array($data)){
			$hasil[] = $x;
		}
		return $hasil;
	}

	function update($idk,$kategori){
		mysql_query("UPDATE kategori SET kategori='$kategori' WHERE id_kategori='$idk'");
	}

	function hapus($idk){
		mysql_query("DELETE FROM kategori WHERE id_kategori='$idk'");
	}
}

$db = new database();
$db->koneksi();
$berita = new berita();
$kategori = new kategori();
 ?>