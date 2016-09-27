<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Berita <small>Tambah Berita</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-newspaper-o"></i> Berita
            </li>
        </ol>
    </div>
</div> 
<form method="POST" action="proses.php?proses=tberita" enctype="multipart/form-data">
  <div class="form-group">
    <label >Judul</label>
    <input type="text" class="form-control" name="judul" placeholder="Isi judul">
  </div>
  <!-- Pilih Kategori -->
  <div class="form-group">
    <label >Kategori</label>
    <select name="kategori" class="form-control">
        <option value="">Pilih Kategori</option>
        <?php 
            include 'class_kategori.php';
            foreach ($kategori->tampil_kategori() as $data) 
            {
        ?>
        <option value="<?php echo $data['id_kategori'] ?>"><?php echo $data['kategori']?></option>
        <?php
            }
        ?>
    </select>
  </div>
  <div class="form-group">
    <label>Isi</label>
    <textarea name="isi" class="form-control" rows="10"></textarea>
  </div>
  <div class="form-group">
    <label>Gambar</label>
    <input type="file" class="form-control" name="gambar">
  </div>
  <input type="submit" name="save" class="btn btn-success" value="Tambah">
</form>
