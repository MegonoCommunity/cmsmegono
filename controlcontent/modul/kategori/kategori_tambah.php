<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Kategori <small>Tambah kategori</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-home"></i> Kategori
            </li>
        </ol>
    </div>
</div> 
<form method="POST" action="proses.php?proses=tkategori">
  <div class="form-group">
    <label for="exampleInputEmail1">Kategori</label>
    <input type="text" class="form-control" name="kategori" placeholder="Kategori">
  </div>
  <input type="submit" name="save" class="btn btn-default" value="Tambah">
</form>
