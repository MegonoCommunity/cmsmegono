<?php 
    include 'class_kategori.php';
 ?>
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
<form method="POST" action="proses.php?proses=edit">
<?php 
    foreach ($kategori->edit($_GET['id']) as $data) {
?>
  <div class="form-group">
    <label for="exampleInputEmail1">Kategori</label>
    <input type="hidden" class="form-control" name="id" value="<?php echo $data['id'];?>">
    <input type="text" class="form-control" name="nm_kategori" value="<?php echo $data['nm_kategori'];?>">
  </div>
    <input type="submit" name="save" class="btn btn-default" value="Update">
<?php
    }
 ?>
</form>
