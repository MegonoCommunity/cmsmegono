	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Kategori <small></small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-home"></i> Kategori
                </li>
            </ol>
        </div>
    </div> 
	<a href="?m=kategori&aksi=tambahkategori"><button type="button" class="btn btn-success tambah"><i class="fa fa-plus"> Tambah</i></button></a>
	<br class="clear">
	<table class="table table-hover table-bordered">
			<tr>
				<th>No</th>
				<th>Nama Kategori</th>
				<th>Aksi</th>
			</tr>
			<tr>
				<?php 
					$no =1;
					foreach ($kategori->tampil_kategori() as $data) {
				?>
					<tr>
						<td><?php echo $no?></td>
						<td><?php echo $data['kategori']?></td>
						<td align="center" width="140"> 
							<a href="?m=kategori&aksi=editkategori&idk=<?php echo $data['id_kategori']?>"><button type="button" class="btn btn-primary aksi"><i class="fa fa-edit">Edit</i></button></a>
							<a onclick="return confirm('Anda yakin ingin menghapus??')" href="proses.php?proses=hkategori&idk=<?php echo $data['id_kategori']?>"
								><button type="button" class="btn btn-danger aksi"><i class="fa fa-remove">Hapus</i></button></a>
						</td>
					</tr>
				<?php
				$no++;
					}
				 ?>
			</tr>

	</table>
