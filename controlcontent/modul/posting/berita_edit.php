<?php  
$detail_berita = $berita->edit($_GET['idb']);
print_r($detail_berita);
?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Berita <small>Edit Berita</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-newspaper-o"></i> Berita
            </li>
        </ol>
    </div>
</div> 
<form method="POST" action="proses.php?proses=eberita" enctype="multipart/form-data">
  <div class="form-group">
    <label >Judul</label>
    <input type="hidden" class="form-control" name="idb" value="<?php echo $detail_berita['id_berita'];?>">
    <input type="text" class="form-control" name="judul" placeholder="Isi judul" value="<?php echo $detail_berita['judul']?>">
  </div>
  <!-- Pilih Kategori -->
  <div class="form-group">
    <label >Kategori</label>
    <select name="kategori" class="form-control">
        <option value="">Pilih Kategori</option>
        <?php
            foreach ($kategori->tampil_kategori() as $data) 
            {
              //jika id_kategori sama dengan id pada table berita
              if($detail_berita['id_kategori'] == $data['id_kategori']  )
              {
        ?>
        <option selected value="<?php echo $data['id_kategori'] ?>"><?php echo $data['kategori']?></option>
          <?php 
              } //tutup if
              else
              {
          ?>
          <option value="<?php echo $data['id_kategori'] ?>"><?php echo $data['kategori']?></option>
        <?php
              } //tutup else
            } //tutup foreach
        ?>
    </select>
  </div>
  <div class="form-group">
    <label>Isi</label>
    <textarea name="isi" class="form-control" rows="10"><?php echo $detail_berita['isi']?></textarea>
  </div>
  <div class="form-group">
    <label>Gambar</label>
    <br>
        <img class="thumbnail" src="gambar_berita/<?php echo $detail_berita['gambar']?>" width="150" height="200" name="gambar">
    <input type="file" class="form-control" name="gambar">
  </div>
  <input type="submit" name="save" class="btn btn-success" value="Simpan">
</form>
