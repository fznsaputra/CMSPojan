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
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
  </nav>

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
      <div class="col-sm-12 col-xl-6">
        <?php foreach ($user as $pp) { ?>
          <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Form Edit User</h6>
            <form action="<?= base_url('admin/user/update') ?>" method="post">
              <div class="mb-3">
                <label class="col-sm-2 col-form-label">Username</label>
                  <input type="text" class="form-control" name="username" value="<?= $pp['username'] ?>" readonly>
                
              </div>
              <div class="mb-3">
                <label class="col-sm-2 col-form-label">Nama</label>
                  <input type="text" class="form-control" name="nama" value="<?= $pp['nama'] ?>">
                
              </div>
              <div class="mb-3">
                <label class="col-sm-2 col-form-label">Level</label>
                  <select name="level" class="form-control">
                    <option value="User" <?php if ($pp['level'] == 'User') {
                                            echo "selected";
                                          } ?>>User</option>
                    <option value="Admin" <?php if ($pp['level'] == 'Admin') {
                                            echo "selected";
                                          } ?>>Admin</option>
                  </select>
                
              </div>
              <input type="hidden" name="id_user" value="<?= $pp['id_user'] ?>">
              <button type="submit" class="btn btn-primary">Simpan</button>
              <button class="btn btn-danger" href="<?= base_url('admin/user') ?>">Batal</button>
            </form>
          </div>
      </div>
    <?php } ?>
    <!-- main-panel ends -->
    </div>
  </div>
  <?php require_once('_footer.php'); ?>
</body>

</html>