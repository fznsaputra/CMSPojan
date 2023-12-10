<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin Pojan </title>
  <!-- plugins:css -->
  <?php require_once('_css.php'); ?>

<body>
  <div class="container-scroller">
    <?php require_once('_navbar.php'); ?>
    <div class="container-fluid page-body-wrapper">
      <?php require_once('_set.php'); ?>
    </div>
  </div>

  <?php require_once('_sidebar.php'); ?>

  <!-- partial -->
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-sm-12">
          <div class="home-tab">
            <div class="d-sm-flex align-items-center justify-content-between border-bottom">
              <div>
                <div class="btn-wrapper">
                  <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i> Print</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-12">
      <div id="menghilang" >
                <?php echo $this->session->flashdata('alert', true); ?>
          </div>
        <div class="card">
          <form action="<?= base_url('admin/caraousel/simpan') ?>" method="post" enctype='multipart/form-data'>

            <h5 class="card-header">File input</h5>
            <div class="card-body">
              <div class="mb-3">
                <label class="col-sm-3 col-form-label">Judul</label>
                <input type="text" class="form-control" name="judul" required>
              </div>
              <div class="mb-3">
                <label for="formFile" class="col-sm-3 col-form-label">Pilih Foto dengan ukuran (1:3)</label>
                <input type="file" id="formFile" name="foto" class="form-control" accept="image/png, image/jpeg">
              </div>

            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Gass</button>
            </div>
          </form>
        </div>
      </div>
      <?php foreach ($caraousel as $aa) { ?>
        <div class="col-md-12 mb-3 mt-3">
          <div class="card h-100">
            <img class="card-img-top" src="<?= base_url("assets/upload/caraousel/").$aa['foto']; ?>" target="_blank">
            <div class="card-body">
              <h5 class="card-title"><?= $aa['judul'] ?></h5>
              <a class="btn btn-square btn-danger m-2 " onClick="return confirm('Are You Sure About This?')" href="<?= base_url('admin/caraousel/hapus/' . $aa['foto']) ?>">
                      <span class="mdi mdi-delete"></span></a>            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
  <!-- main-panel ends -->
  </div>
  </div>
  <?php require_once('_footer.php'); ?>
</body>

</html>