<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
                <span class="icon-menu"></span>
            </button>
        </div>
        <div>
            <a class="navbar-brand brand-logo" href="<?= base_url() ?>">
            <img src="<?= base_url('assets/warungV2/') ?>img/cms3.png" alt="logo">
        </a>
            <a class="navbar-brand brand-logo-mini" href="index.html">
                <img src="<?= base_url('assets/admin_warung/template/') ?>images/logo-mini.svg" alt="logo" />
            </a>
        </div>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-top">
        <ul class="navbar-nav"> 
            
            <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
                <h1 class="welcome-text">Selamat Pagi, <span class="text-black fw-bold"><?= $this->session->userdata('nama');?></span></h1>
                <h3 class="welcome-sub-text">Anda Keren </h3>
                
            </li>
        </ul>
        
        <ul class="navbar-nav ms-auto">

            <li class="nav-item d-none d-lg-block">
                <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
                    <span class="input-group-addon input-group-prepend border-right">
                        <span class="icon-calendar input-group-text calendar-icon"></span>
                    </span>
                    <input type="text" class="form-control">
                </div>
            </li>
            <li class="nav-item">
                <form class="search-form" action="#">
                    <i class="icon-search"></i>
                    <input type="search" class="form-control" placeholder="Search Here" title="Search here">
                </form>
            </li>

            <!-- <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="<?= base_url('assets/sneat')?>/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                                <img class="img-xs rounded-circle" src="<?= base_url('assets/admin_warung/template/') ?>images/faces/face8.jpg" alt="Profile image"> </a>
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block"><?= $this->session->userdata('nama');?></span>
                            <small class="text-muted"><?= $this->session->userdata('level') ?></small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
            
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="<?= base_url('lojin/logout')?>" onClick="return confirm('Yakin Bang?')">
                         
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li> -->

            <!-- <li class="nav-item dropdown d-none d-lg-block user-dropdown">
                <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    <img class="img-xs rounded-circle" src="<?= base_url('assets/admin_warung/template/') ?>images/faces/face8.jpg" alt="Profile image"> </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" id="UserDropdown" aria-labelledby="UserDropdown" data-bs-toggle="dropdown">
                    <div class="dropdown-header text-center">
                        <img class="img-md rounded-circle" src="<?= base_url('assets/admin_warung/template/') ?>images/faces/face8.jpg" alt="Profile image">
                        <p class="mb-1 mt-3 font-weight-semibold"><?= $this->session->userdata('nama');?></p>
                        <p class="fw-light text-muted mb-0">allenmoreno@gmail.com</p>
                    </div>
                    <a href="<?= base_url('lojin/logout')?>" class="dropdown-item" onClick="return confirm('Yakin Bang?')"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
                </div>
            </li> -->
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>