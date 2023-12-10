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
      <div class="bg-light rounded h-100 p-4">
        <div id="menghilang">
          <?php echo $this->session->flashdata('alert', true); ?>
        </div>
        <button type="button" class="btn btn-square btn-primary m-2" data-bs-toggle="modal" data-bs-target="#exampleModal2">
          Tambah User
        </button>
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Masukkan Data User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="<?= base_url('admin/user/simpan') ?>" method="post">
                <div class="modal-body">
                  <div class="mb-3">
                    <label class="col-sm-2 col-form-label">Username</label>
                    <input type="text" class="form-control" name="username">
                  </div>
                  <div class="mb-3">
                    <label class="col-sm-2 col-form-label">Nama</label>
                    <input type="text" class="form-control" name="nama">
                  </div>
                  <div class="mb-3">
                    <label class="col-sm-2 col-form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                  </div>
                  <div class="mb-3">
                    <label class="col-sm-2 col-form-label">Level</label>

                    <select name="level" class="form-control">
                      <option value="User">User</option>
                      <option value="Admin">Admin</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Gass</button>
            </div>
            </form>
          </div>
        </div>
      </div>
      <h3 class="mb-4">Data User</h3>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Username</th>
              <th scope="col">Nama</th>
              <th scope="col">Level</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1;
            foreach ($user as $pp) { ?>
              <tr>
                <th scope="row"><?= $no; ?></th>
                <td><?= $pp['username']; ?></td>
                <td><?= $pp['nama']; ?></td>
                <td><?= $pp['level']; ?></td>
                <td>
                  <a class="btn btn-square btn-danger m-2" onClick="return confirm('Are You Sure About This?')" href="<?= base_url('admin/user/hapus/' . $pp['id_user']) ?>">
                    Hapus</a>
                  <a class="btn btn-square btn-warning m-2" href="<?= base_url('admin/user/edit/' . $pp['id_user']) ?>">
                    Edit</a>
                  <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                      Edit </button>
                    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Masukkan Data</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <form action="<?= base_url('admin/user/update') ?>" method="post">
                            <div class="modal-body">
                              <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" name="username" value="<?= $pp['username'] ?>" readonly>
                                </div>
                              </div>
                              <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" name="nama" value="<?= $pp['nama'] ?>">
                                </div>
                              </div>
                              <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Level</label>
                                <div class="col-sm-10">
                                  <select name="level" class="form-control">
                                    <option value="User" <?php if ($pp['level'] == 'User') {
                                                            echo "selected";
                                                          } ?>>User</option>
                                    <option value="Admin" <?php if ($pp['level'] == 'Admin') {
                                                            echo "selected";
                                                          } ?>>Admin</option>
                                  </select>
                                </div>
                              </div>
                              <input type="hidden" name="id_user" value="<?= $pp['id_user'] ?>">
                              <button type="submit" class="btn btn-primary">Simpan</button>
                              <button class="btn btn-danger" href="<?= base_url('admin/user') ?>">Batal</button>
                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Gass</button>
                        </div>
                        </form>
                      </div>
                    </div> -->
      </div>
      </td>
      </tr>
    <?php $no++;
            } ?>
    </tbody>
    </table>
    </div>
  </div>
  <!-- main-panel ends -->
  </div>
  </div>
  <?php require_once('_footer.php'); ?>
</body>

</html>