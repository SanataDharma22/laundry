<?php 
require '../functions.php';
$paket = query("SELECT * FROM tb_paket");
?>
<?php require 'layouts/header.php'; ?>
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                Data Paket
              </div>
              <div class="card-body">
               <p align='left'><a class='btn btn-primary' href='tambahPaket.php'><i class='icon-plus'></i>Tambah Paket Laundry</a></p>
                       <table id='datatable' class='table table-hover'>
          <thead>
           <tr>
            <th><i class='icon-time'></i> No</th>
            <th><i class='icon-time'></i> Jenis</th>
            <th><i class='icon-signal'></i> Harga/Kg</th>
            <th><i class='icon-chevron-right'></i> Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no=1; ?>
          <?php foreach($paket as $p) : ?>
            <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $p["jenis"]; ?></td>
              <td>Rp.<?php echo number_format($p["harga"],0,',','.'); ?></td>
              <td><a class='btn btn-primary' href="update_paket.php?id=<?php echo $p["id"]; ?>"><i class='icon-edit'></i>Edit</a>
               <a class='btn btn-danger' href="hapus_paket.php?id=<?php echo $p["id"]; ?>" onClick="return confirm('Anda yakin ingin menghapus ini?');"><i class='icon-trash'></i>Hapus</td>
               <?php endforeach; ?>

             </tr>
           </tbody>
         </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php require 'layouts/footer.php'; ?>