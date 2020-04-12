<?php 
require '../functions.php';
$id = $_GET["id"];
$outlet = query("SELECT * FROM tb_outlet WHERE id = '$id'")[0];
if(isset($_POST["submit"])){
  if(updateOutlet($_POST) > 0){
    echo "<script>
    alert('Data berhasil diupdate');
    document.location.href = 'dataOutlet.php';
    </script>";
  }else{
        echo "<script>
    alert('Data gagal diupdate');
    document.location.href = 'dataOutlet.php';
    </script>";
  }
}
?>
<?php require 'layouts/header.php'; ?>
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <div class="card">
              <div class="card-header">
                Update Data Outlet
               </div>
              <div class="card-body">
                <form method="post" action="" autocomplete="off">
                  <input type="hidden" name="id_outlet" value="<?php echo $outlet["id"]; ?>">
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" value="<?php echo $outlet["nama"]; ?>">
                  </div>
                  <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control" value="<?php echo $outlet["alamat"]; ?>">
                  </div>
                  <div class="form-group">
                    <label>No.Tlp</label>
                    <input type="text" name="tlp" class="form-control" value="<?php echo $outlet["tlp"]; ?>">
                  </div>
                  <button class="btn btn-primary" name="submit" type="submit">Update Data</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php require 'layouts/footer.php'; ?>