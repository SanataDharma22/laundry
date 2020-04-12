<?php 
require '../functions.php';
$outlet = query("SELECT * FROM tb_outlet");
// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
  
    // cek apakah tombol submit berhasil ditambahkan atau tidak
  if (tambah_owner($_POST) > 0) {
    echo "<script>
    alert('Data berhasil ditambahkan');
    document.location.href = 'data_owner.php';
    </script>";
  } else {

    echo "<script>
    alert('Data gagal ditambahkan');
    document.location.href = 'data_owner.php';
    </script>";
  }
}
?>                     
<di
<?php require 'layouts/header.php'; ?>
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <div class="card">
              <div class="card-header">
                Tambah Data Kasir
               </div>
              <div class="card-body">
                <form method="post" action="" autocomplete="off">
        <div class='form-group'>
                    <label for='cname' class='control-label'>Nama Lengkap</label>
                    <div>
                      <input type='text' class='form-control' name='nama' placeholder='Masukan Nama Karyawan' required>
                    </div>
                  </div>

                  <div class='form-group'>
                    <label for='cname' class='control-label'>Username</label>
                    <div>
                      <input type='text' class='form-control' name='username' placeholder='Masukan Username' required>
                    </div>
                  </div>


                  <div class='form-group'>
                    <label for='cname' class='control-label'>Password</label>
                    <div>
                      <input type='password' class='form-control' name='password' placeholder='Masukan Password' required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="cname" class="control-label"> Outlet</label>
                    <div>
                      <select  class="form-control" name="id_outlet" onchange="changeValue(this.value)">
                        <option value="0">-- Pilih  Outlet --</option>
                        <?php foreach($outlet as $o) : ?>
                          <option value="<?php echo $o["id"]  ?>"><?php echo $o["nama"] ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
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