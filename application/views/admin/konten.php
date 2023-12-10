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
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
          Tambah Konten
        </button>
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Masukkan Data Konten</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="<?= base_url('admin/konten/simpan') ?>" method="post" enctype='multipart/form-data'>
                <div class="modal-body">
                  <div class="mb-3">
                    <label class="col-sm-3 col-form-label">Judul</label>
                    <input type="text" class="form-control" name="judul" required>
                  </div>
                  <div class="mb-3">
                    <label class="col-sm-3 col-form-label">Kategori</label>
                    <select name="id_kategori" class="form-control">
                      <?php foreach ($kategori as $pp) { ?>
                        <option value="<?= $pp['id_kategori']; ?>"><?= $pp['nama_kategori']; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label class="col-sm-3 col-form-label">Keterangan</label>
                    <textarea name="keterangan" class="form-control"></textarea>
                  </div>
                  <div class="mb-3">
                    <label class="col-sm-3 col-form-label">Foto</label>
                    <input type="file" name="foto" class="form-control" accept="image/png, image/jpeg">
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
        <h3 class="mb-4">Konten</h3>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Judul</th>
                <th scope="col">Kategori Konten</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Kreator</th>
                <th scope="col">Foto</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
              foreach ($konten as $pp) { ?>
                <tr>
                  <th scope="row"><?= $no; ?></th>
                  <td><?= $pp['judul']; ?></td>
                  <td><?= $pp['nama_kategori']; ?></td>
                  <td><?= $pp['tanggal']; ?></td>
                  <td><?= $pp['username']; ?></td>
                  <td><a href="<?= base_url("assets/upload/konten/") . $pp['foto']; ?>" target="_blank">
                      <span class="icon-search"></span>Lihat foto
                    </a>
                  </td>
                  <td>
                    <a class="btn btn-square btn-danger m-2 " onClick="return confirm('Are You Sure About This?')" href="<?= base_url('admin/konten/hapus/' . $pp['foto']) ?>">
                      <span class="mdi mdi-delete"></span></a>
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal3<?= $no; ?>">
                      <span class="mdi mdi-pencil"></span> </button>

                    <div class="modal fade" id="exampleModal3<?= $no; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-xl">
                        <form action="<?= base_url('admin/konten/update2') ?>" method="post" enctype="multipart/form-data">

                          <input type="hidden" name="nama_foto" value="<?= $pp['foto']; ?>">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Edit Data "<?= $pp['judul']; ?>"</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Judul</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" name="judul" value="<?= $pp['judul'] ?>" required>
                                </div>
                              </div>
                              <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Kategori</label>
                                <div class="col-sm-9">
                                  <select name="id_kategori" class="form-control">
                                    <?php foreach ($kategori as $pp) { ?>
                                      <option value="<?= $pp['id_kategori']; ?>"><?= $pp['nama_kategori']; ?></option>
                                    <?php } ?>
                                  </select>
                                </div>
                              </div>
                              <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Keterangan</label>
                                <div class="col-sm-9">
                                  <textarea name="keterangan" class="form-control"></textarea>
                                </div>
                              </div>
                              <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Foto</label>
                                <div class="col-sm-9">
                                  <input type="file" name="foto" class="form-control" accept="image/png, image/jpeg">
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