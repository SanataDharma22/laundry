<?php 
require '../functions.php';
$pengguna = query("SELECT * FROM tb_user WHERE role = 'kasir'");
?>
<?php require 'layouts/header.php'; ?>
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                Data Kasir
              </div>
              <div class="card-body">
                <p align='left'><a class='btn btn-primary' href='tambah_kasir.php'><i class='icon-plus'></i>Tambah Kasir</a></p>
         <table id='datatable' class='table table-hover'>
              <thead>
                <tr>
                  <th><i class='icon-terminal'></i> No.</th>
                  <th><i class='icon-terminal'></i> Nama</th>
                  <th><i class='icon-terminal'></i> Username</th>
                  <th><i class='icon-chevron-right'></i> Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $nomor=1; ?>
                <?php foreach($pengguna as $s) : ?>
                  <tr>
                    <td><?php echo $nomor++; ?></td>
                    <td><?php echo $s["nama"] ?></td>
                    <td><?php echo $s["username"]; ?></td>
                    <td><a class='btn btn-primary' href="update_kasir.php?id=<?php echo $s["id"]; ?>"><i class='icon-edit'></i>Edit</a>
                      <a href="hapus_kasir.php?id=<?php echo $s["id"]; ?>" class='btn btn-danger' onclick="return confirm('Anda yakin ingin menghapus ini?');"><i class='icon-trash'></i>Hapus</td>

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