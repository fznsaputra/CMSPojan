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
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Masukkan Data Konfigurasi</h5>
          </div>
          <form action="<?= base_url('admin/konfigurasi/update') ?>" method="post">
            <div class="modal-body">
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Judul Website</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="judul" value="<?= $konfig->judul_website; ?>">
                </div>
              </div>
              <!-- <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Foto</label>
                <div class="col-sm-9">
                  <input type="file" name="foto" class="form-control" accept="image/png, image/jpeg" value="<?= $konfig->foto; ?>">
                </div>
              </div> -->
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Profile</label>
                <div class="col-sm-9">
                  <textarea name="profil_web" class="form-control"><?= $konfig->profil_website; ?></textarea>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Facebook</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="facebook" value="<?= $konfig->facebook; ?>">
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Instagram</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="instagram" value="<?= $konfig->instagram; ?>">
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="email" value="<?= $konfig->email; ?>">
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label"> Nomer Whatsapp</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="no_wa" value="<?= $konfig->no_wa; ?>">
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Alamat</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="alamat" value="<?= $konfig->alamat; ?>">
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
              <button type="submit" class="btn btn-primary">Gass</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- main-panel ends -->
  </div>
  </div>
  <?php require_once('_footer.php'); ?>
</body>

</html>