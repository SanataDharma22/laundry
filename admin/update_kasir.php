<?php 
require '../functions.php';
$id = $_GET["id"];
$user = query("SELECT * FROM tb_user WHERE id = '$id'")[0]; 
$outlet = query("SELECT * FROM tb_outlet");

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
  
    // cek apakah tombol submit berhasil diUpdatekan atau tidak
  if (update_kasir($_POST) > 0) {
    echo "<script>
    alert('Data berhasil diupdate');
    document.location.href = 'data_kasir.php';
    </script>";
  } else {

    echo "<script>
    alert('Data gagal diupdate');
    document.location.href = 'data_kasir.php';
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
                 <input type="hidden" name="id" value="<?php echo $id ?>">
                  <input type="hidden" name="password" value="<?php echo $user["password"]; ?>">
                  <div class='form-group'>
                    <label for='cname' class='control-label'>Nama Lengkap</label>
                    <div>
                      <input type='text' class='form-control' name='nama' value="<?php echo $user["nama"] ?>" placeholder='Masukan Nama Karyawan' required>
                    </div>
                  </div>

                  <div class='form-group'>
                    <label for='cname' class='control-label'>Username</label>
                    <div>
                      <input type='text' class='form-control' name='username' value="<?php echo $user["username"] ?>" placeholder='Masukan Username' required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="cname" class="control-label"> Outlet</label>
                    <div>
                      <select  class="form-control" name="id_outlet" onchange="changeValue(this.value)">
                        <option value="0">-- Pilih  Outlet --</option>
                        <?php foreach($outlet as $o) : ?>
                          <?php if($o["id"] === $user["id_outlet"]) : ?>
                            <option value="<?php echo $o["id"]  ?>" selected><?php echo $o["nama"] ?></option>
                            <?php else: ?>
                              <option value="<?php echo $o["id"]  ?>"><?php echo $o["nama"] ?></option>
                            <?php endif; ?>
                          <?php endforeach; ?>
                        </select>
                      </div>
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