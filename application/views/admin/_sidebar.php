<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/dashboard') ?>">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <?php if ($this->session->userdata('level') == "Admin") { ?>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/kategori') ?>">
                    <i class="menu-icon mdi mdi-file-document"></i>
                    <span class="menu-title">Kategori Konten</span>
                </a>
            </li>
        <?php } ?>
        <?php if ($this->session->userdata('level') == "Admin") { ?>

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/konfigurasi') ?>">
                <i class="menu-icon mdi mdi-file-document"></i>
                <span class="menu-title">Konfigurasi</span>
            </a>
        </li>
        <?php } ?>

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/konten') ?>">
                <i class="menu-icon mdi mdi-file-document"></i>
                <span class="menu-title">Konten</span>
            </a>
        </li>
        <?php if ($this->session->userdata('level') == "Admin") { ?>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/caraousel') ?>">
                    <i class="menu-icon mdi mdi-file-document"></i>
                    <span class="menu-title">Carousel</span>
                </a>
            </li>
        <?php } ?>

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/galeri') ?>">
                <i class="menu-icon mdi mdi-file-document"></i>
                <span class="menu-title">Galeri</span>
            </a>
        </li>

        <?php if ($this->session->userdata('level') == "Admin") { ?>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/user') ?>">
                    <i class="menu-icon mdi mdi-account-circle-outline"></i>
                    <span class="menu-title">User</span>
                </a>
            </li>
        <?php } ?>
        <li class="nav-item">
                <a class="nav-link" href="<?= base_url('lojin/logout') ?>" onClick="return confirm('Yakin?')">
                    <i class="menu-icon mdi mdi-account-circle-outline"></i>
                    <span class="menu-title">Log Out</span>
                </a>
            </li>
    </ul>
</nav>