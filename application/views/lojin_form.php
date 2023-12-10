<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin2 </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?= base_url('assets/admin_warung/template/') ?>vendors/feather/feather.css">
  <link rel="stylesheet" href="<?= base_url('assets/admin_warung/template/') ?>vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/admin_warung/template/') ?>vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?= base_url('assets/admin_warung/template/') ?>vendors/typicons/typicons.css">
  <link rel="stylesheet" href="<?= base_url('assets/admin_warung/template/') ?>vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="<?= base_url('assets/admin_warung/template/') ?>vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url('assets/admin_warung/template/') ?>css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= base_url('assets/admin_warung/template/') ?>images/favicon.png" />
</head>

<body>
  <div class="row align-items-center justify-content-center h-100" style="margin-top: 100px;">
    <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
      <div id="menghilang" style="margin-top: 10px;">
        <?php echo $this->session->flashdata('alert', true); ?>
      </div>
      <div class="card mb-4">


        <div class="card-header d-flex justify-content-between align-items-center">
          <a href="<?= base_url('user/dashboard') ?>" style="text-decoration: none;" class="text-dark"><h5 class="mb-0">Login Cuy</h5></a>
        <small class="text-muted float-end">Isi Datamu</small>
        </div>
        <div class="card-body">
          <form action="<?= base_url('lojin/login') ?>" method="post">
            <div class="mb-2">
              <label class="form-label" for="basic-icon-default-fullname">Username</label>
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                <input type="text" name="username" class="form-control" id="basic-icon-default-fullname" placeholder="Username anda" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2">
              </div>
            </div>
            <div class="mb-2">
              <label class="form-label" for="basic-icon-default-company">Password</label>
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-buildings"></i></span>
                <input type="password" name="password" id="basic-icon-default-company" class="form-control" placeholder="Password anda" aria-label="ACME Inc." aria-describedby="basic-icon-default-company2">
              </div>
            </div>

        </div>
        <button type="submit" class="btn btn-primary py-1 mb-3" style="margin-left:25px; width:100px;">Lojin</button>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?= base_url('assets/admin_warung/template/') ?>vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?= base_url('assets/admin_warung/template/') ?>vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?= base_url('assets/admin_warung/template/') ?>js/off-canvas.js"></script>
    <script src="<?= base_url('assets/admin_warung/template/') ?>js/hoverable-collapse.js"></script>
    <script src="<?= base_url('assets/admin_warung/template/') ?>js/template.js"></script>
    <script src="<?= base_url('assets/admin_warung/template/') ?>js/settings.js"></script>
    <script src="<?= base_url('assets/admin_warung/template/') ?>js/todolist.js"></script>
    <!-- endinject -->
</body>

</html>