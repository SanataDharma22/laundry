<?php 
require '../functions.php';
$outlet = query("SELECT * FROM tb_outlet");
if(isset($_POST["submit"])){
  if(tambahOutlet($_POST) > 0){
    echo "<script>
    alert('Data berhasil ditambah');
    document.location.href = 'dataOutlet.php';
    </script>";
  }else{
        echo "<script>
    alert('Data gagal ditambah');
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
                Tambah Data Outlet
               </div>
              <div class="card-body">
                <form method="post" action="" autocomplete="off">
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>No.Tlp</label>
                    <input type="text" name="tlp" class="form-control">
                  </div>
                  <button class="btn btn-primary" name="submit" type="submit">Tambah Data</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php require 'layouts/footer.php'; ?>