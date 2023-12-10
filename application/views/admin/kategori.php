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
      <div id="menghilang" >
                <?php echo $this->session->flashdata('alert', true); ?>
          </div>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
          Tambah Kategori
        </button>
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Masukkan Data Kategori Konten</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="<?= base_url('admin/kategori/simpan') ?>" method="post">
                <div class="modal-body">
                  <div class="mb-3">
                    <label class="col-sm-5 col-form-label">Nama Kategori</label>
                      <input type="text" class="form-control" name="nama_kategori">
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
        <h3 class="mb-4">Kategori Konten</h3>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Kategori Konten</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
              foreach ($kategori as $pp) { ?>
                <tr>
                  <th scope="row"><?= $no; ?></th>
                  <td><?= $pp['nama_kategori']; ?></td>
                  <td>
                    <a class="btn btn-square btn-danger m-2" onClick="return confirm('Are You Sure About This?')" href="<?= base_url('admin/kategori/hapus/' . $pp['id_kategori']) ?>">
                      Hapus</a>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1<?= $no; ?>  ">
                      Edit </button>
                    <div class="modal fade" id="exampleModal1<?= $no; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">

                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Kategori</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>

                          <form action="<?= base_url('admin/kategori/update') ?>" method="post">
                          <input type="hidden" name="id_kategori" value="<?= $pp['id_kategori']; ?>">
                            <div class="modal-body">
                              <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Nama Kategori</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" name="nama_kategori" value="<?= $pp['nama_kategori'] ?>">
                                </div>
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