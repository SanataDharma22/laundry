<?php 

require 'layouts/header.php';
require '../functions.php';

$outlet = query("SELECT * FROM tb_outlet");
$jenis = ["kiloan","selimut","kaos","cuci_kering","boneka"];

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    
    // cek apakah tombol submit berhasil ditambahkan atau tidak
    if (tambah_paket($_POST) > 0) {
        echo "<script>
        alert('Data berhasil ditambahkan');
        document.location.href = 'dataPaket.php';
        </script>";
    } else {

        echo "<script>
        alert('Data gagal ditambahkan');
        document.location.href = 'dataPaket.php';
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
                Tambah Data Paket
               </div>
              <div class="card-body">
                <form method="post" action="" autocomplete="off">
                    <div class="form-group">
                    <label for="cname" class="control-label col-lg-2"> Outlet</label>
                    
                    <select  class="form-control" name="id_outlet" onchange="changeValue(this.value)">
                        <option value="0">-- Pilih  Outlet --</option>
                        <?php foreach($outlet as $o) : ?>
                            <option value="<?php echo $o["id"]  ?>"><?php echo $o["nama"] ?></option>
                        <?php endforeach; ?>
                    </select>
                    
                </div>
                <div class="form-group">
                   <label>Jenis</label>
                   
                   <select  class="form-control" name="jenis" onchange="changeValue(this.value)">
                    <option value="0">-- Pilih  Jenis --</option>
                    <?php foreach($jenis as $j) : ?>
                        <option value="<?php echo $j  ?>"><?php echo $j ?></option>
                    <?php endforeach; ?>
                </select>
                
            </div>  
            <div class="form-group">
               <label>Nama Paket</label>
               <div class="span9"><input class="form-control" placeholder="Masukan Nama Paket"  type="text" name="nama_paket" /></div>
           </div>                   
           <div class="form-group">
               <label>Harga/Kg</label>
               <div class="span9"><input class="form-control" size="16" type="number" placeholder="Masukan Harga Laundry" name="harga" /></div>
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