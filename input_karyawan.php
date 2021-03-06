<?php
    session_start();
    error_reporting(0);
    if(empty($_SESSION['id'])){
        header('location:login.php?error_login=1');
    }
?>
<?php include 'partials/header.php';?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <br/>  
              <div class="panel panel-default">
                  <div class="panel-heading">
                  Form Karyawan
                  </div>
                  <div class="panel-body">
                      <form method="post" action="model/do_insert_ck.php" enctype="multipart/form-data">
                          <?php if (!empty($_GET['error_msg'])): ?>
                              <div class="alert alert-danger">
                                  <?= $_GET['error_msg']; ?>
                              </div>
                          <?php endif ?>
                          <div class="form-group">
                              <label for="nama">Nama Karyawan</label>
                              <input type="text" class="form-control" id="nama" name="nama">
                          </div>
                          <div class="form-group">
                              <label for="ttl">Tanggal / Bulan / Tahun Lahir</label>
                              <input type="date" class="form-control" id="ttl"/ name="ttl">
                          </div>
                          <div class="form-group">
                              <button class="btn btn-primary">Simpan</button>
                          </div>
                      </form>
                  </div>
              </div>
            </div>
        </div>
        </div>
    </div>
</div>
<?php include 'partials/footer.php';?>