<?php 
require '../functions.php';
$transaksi = query("SELECT * FROM tb_transaksi");
?>
<?php require 'layouts/header.php'; ?>
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
               Laporan
              </div>
              <div class="card-body">
          <table id='datatable' class='table table-hover'>
            <thead>
              <tr>
                <th><i class='icon-terminal'></i> No</th>
                <th><i class='icon-signal'></i> Tgl. Transaksi</th>
                <th><i class='icon-signal'></i> Status</th>
                <th><i class='icon-signal'></i> Batas Waktu</th>
                <th><i class='icon-signal'></i> Status Order</th>
                <th><i class='icon-signal'></i> Total</th>
                <th><i class='icon-signal'></i> Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $nomor=1; ?>
              <?php foreach($transaksi as $t) : ?>
               <tr>
                 <td><?php echo $nomor++; ?></b></td>

                 <td><?php echo $t["tgl"]; ?></td>
                 <td><div class="btn btn-success"><?php echo $t["dibayar"]; ?></div></td>
                 <td><?php echo $t["batas_waktu"] ?></td>
                 <td><div class="btn btn-info"><?php echo $t["status"]; ?></div></td>
                 <td>Rp.<?php echo number_format($t["total"],0,',','.'); ?></td>
                   <td>
                  <a class='btn btn-primary' target="_blank"  href="cetak.php?id=<?php echo $t["id"]; ?>"><i class='icon-edit'></i>Cetak</a>
                </td>

                  </tr>
                <?php endforeach; ?>
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