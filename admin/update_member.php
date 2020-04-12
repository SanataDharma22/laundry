<?php 

require 'layouts/header.php';
require '../functions.php';

$id = $_GET["id"];
$member = query("SELECT * FROM tb_member WHERE id = '$id'")[0];
$gender = ['L','P'];

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
  
    // cek apakah tombol submit berhasil diupdate atau tidak
  if (update_member($_POST) > 0) {
    echo "<script>
    alert('Data berhasil diupdate');
    document.location.href = 'data_member.php';
    </script>";
  } else {

    echo "<script>
    alert('Data gagal diupdate');
    document.location.href = 'data_member.php';
    </script>";
  }
}
?>   
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <div class="card">
              <div class="card-header">
                Update Data Paket
               </div>
              <div class="card-body">
                <form method="post" action="" autocomplete="off">
                <input type="hidden" name="id" value="<?php echo $member["id"]; ?>">

                <div class='form-group'>
                  <label for='cname' class='control-label'>Nama Lengkap</label>
                  <div>
                    <input type='text' class='form-control' name="nama" placeholder='Masukan Nama Outlet' value="<?php echo $member["nama"] ?>" required>
                  </div>
                </div>


                <div class='form-group'>
                  <label for='cname' class='control-label'>Alamat Lengkap</label>
                  <div>
                    <textarea class='form-control' id='ccomment' name="alamat" required aria-required='true' placeholder='Alamat Outlet'><?php echo $member["alamat"]; ?></textarea>
                  </div>
                </div>

                <div class='form-group'>
                 <label for='cname' class='control-label'>Gender</label>
                 <div>
                  <select class='form-control' name='gender'>
                    <option>Pilih Kelamin</option>
                    <?php foreach($gender as $g) : ?>
                      <?php if($g === $member["jenis_kelamin"]) : ?>
                        <option value='<?php echo $g ?>' selected><?php echo $g ?></option>
                        <?php else: ?>
                          <option value='<?php echo $g ?>'><?php echo $g ?></option>
                        <?php endif; ?>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>


                <div class='form-group'>
                  <label for='cname' class='control-label'>Telepon</label>
                  <div>
                    <input type='number' class='form-control' name="tlp" placeholder='Masukan No. Telepon' value="<?php echo $member["tlp"] ?>" required>
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