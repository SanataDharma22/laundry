<?php 
require '../functions.php';
$outlet = query("SELECT * FROM tb_outlet");
$paket = query("SELECT * FROM tb_paket");
$rand = rand(10,50000000);
$member = query("SELECT * FROM tb_member");

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
  
    // cek apakah tombol submit berhasil ditambahkan atau tidak
  if (tambah_tranksaksi($_POST) > 0) {
    echo "<script>
    alert('Data berhasil ditambahkan');
    document.location.href = 'transaksi.php';
    </script>";
  } else {

    echo "<script>
    alert('Data gagal ditambahkan');
    document.location.href = 'transaksi.php';
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
                Tambah Transaksi
               </div>
              <div class="card-body">
                <form method="post" action="" autocomplete="off">
      <input type="hidden" name="id_user" value="<?php echo $_SESSION["user"]["id"]; ?>">
                                <div class="form-group">
                                    <label for="cname" class="control-label">Paket Laundry</label>
                                    <div>
                                      <select  class="form-control" name="id_outlet" onchange="changeValue(this.value)">
                                        <option value="0">-- Pilih  Outlet --</option>
                                        <?php foreach($outlet as $o) : ?>
                                            <option value="<?php echo $o["id"]  ?>"><?php echo $o["nama"] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            

                            <div class="form-group">
                                <label for="cname" class="control-label">Kode Invoice</label>
                                <div>
                                    <input type="text" class="form-control" name="kode_invoice" required value="LA-<?php echo $rand; ?>" readonly>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="cname" class="control-label">Pilih Member</label>
                                <div>
                                    <select  class="form-control" name="id_member" onchange="changeValue(this.value)">
                                        <option value="0">-- Pilih Member --</option>
                                        <?php foreach($member as $p) : ?>
                                            <option value="<?php echo $p["id"] ?>"><?php echo $p["nama"] ?></option>   
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="cname" class="control-label">Batas Waktu</label>
                                <div>
                                    <input type="datetime" class="form-control" name="batas_waktu" value="<?php date_default_timezone_set('Asia/Jakarta'); $waktu = date("Y-m-d H:i:s"); echo $waktu; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="cname" class="control-label">Paket</label>
                                <div>
                                    <select  class="form-control" name="harga" onchange="changeValue(this.value)">
                                        <option value="0">-- Pilih  Paket --</option>
                                        <?php foreach($paket as $o) : ?>
                                            <option value="<?php echo $o["harga"]  ?>"><?php echo $o["nama_paket"] ?> - <?php echo $o["jenis"] ?></option>
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