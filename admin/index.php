<?php 
require '../functions.php';
$outlet = query("SELECT * FROM tb_outlet");
?>
<?php require 'layouts/header.php'; ?>
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                Dashboard
              </div>
              <div class="card-body">
                <h4 class="text-center">Selamat Datang <?php echo $_SESSION["user"]["role"]; ?></h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php require 'layouts/footer.php'; ?>