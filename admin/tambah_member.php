<?php 
require '../functions.php';
$outlet = query("SELECT * FROM tb_outlet");
// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
  
    // cek apakah tombol submit berhasil ditambahkan atau tidak
  if (tambah_customer($_POST) > 0) {
    echo "<script>
    alert('Data berhasil ditambahkan');
    document.location.href = 'member.php';
    </script>";
  } else {

    echo "<script>
    alert('Data gagal ditambahkan');
    document.location.href = 'member.php';
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
                Tambah Data Member
               </div>
              <div class="card-body">
                <form method="post" action="" autocomplete="off">
                  <div class='form-group'>
               <label for='cname' class='control-label'>Nama Lengkap</label>
               <div>
                <input type='text' class='form-control' name='nama' placeholder='Masukan Nama Member' required>
              </div>
            </div>

            <div class='form-group'>
             <label for='cname' class='control-label'>Alamat Lengkap</label>
             <div>
              <textarea class='form-control' id='ccomment' name='alamat' required='' aria-required='true' placeholder='Alamat Member'></textarea>
            </div>
          </div>


          <div class='form-group'>
           <label for='cname' class='control-label'>Telepon</label>
           <div>
            <input type='number' class='form-control' name='tlp' placeholder='Masukan No. Telepon' required>
          </div>
        </div>

        <div class='form-group'>
         <label for='cname' class='control-label'>Gender</label>
         <div>
          <select class='form-control' name='gender'>
            <option value='L'>Laki laki</option>
            <option value='P'>Perempuan</option>
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