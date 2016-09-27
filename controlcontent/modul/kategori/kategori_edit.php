<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Kategori <small>Ubah kategori</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-home"></i> Kategori
            </li>
        </ol>
    </div>
</div> 
<form method="POST" action="proses.php?proses=ekategori">
<?php 
    foreach ($kategori->edit($_GET['idk']) as $data) {
?>
  <div class="form-group">
    <label for="exampleInputEmail1">Kategori</label>
    <input type="hidden" class="form-control" name="idk" value="<?php echo $data['id_kategori'];?>">
    <input type="text" class="form-control" name="kategori" value="<?php echo $data['kategori'];?>">
  </div>
    <input type="submit" name="save" class="btn btn-default" value="Update">
<?php
    }
 ?>
</form>
