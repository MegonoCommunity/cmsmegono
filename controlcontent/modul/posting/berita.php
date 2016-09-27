	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Berita <small></small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-newspaper-o"></i> Berita
                </li>
            </ol>
        </div>
    </div> 
	<a href="?m=berita&aksi=tambahberita"><button type="button" class="btn btn-success tambah"><i class="fa fa-plus"> Tambah</i></button></a>
	<br class="clear">
	<table class="table table-hover table-bordered">
			<tr>
				<th>No</th>
				<th>Kategori</th>
				<th>Judul</th>
				<th>Isi</th>
				<th>Tanggal</th>
				<th>Gambar</th>
				<th>Aksi</th>
			</tr>
			<tr>
				<?php 
					$no=1;
					$ambil = $berita->tampil_berita();
					foreach ($ambil as $berita) 
					{
				?>
					<tr>
						<td><?php echo $no?></td>
						<td><?php echo $berita['kategori']?></td>
						<td><?php echo $berita['judul']?></td>
						<td><?php echo $berita['isi']?></td>
						<td><?php echo $berita['tgl']?></td>
						<td><?php echo $berita['gambar']?></td>
						<td align="center" width="140"> 
							<a href="?m=berita&aksi=editberita&idb=<?php echo $berita['id_berita']?>"><button type="button" class="btn btn-primary aksi"><i class="fa fa-edit">Edit</i></button></a>
							<a onclick="return confirm('Anda yakin ingin menghapus??')" href="proses.php?proses=hberita&idb=<?php echo $berita['id_berita']?>"
								><button type="button" class="btn btn-danger aksi"><i class="fa fa-remove">Hapus</i></button></a>
						</td>
					</tr> 
				<?php 
					$no++;
					} 
				?>
			</tr>
	</table>