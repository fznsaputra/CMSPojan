<header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> fauzansaputra195@gmail.com</li>
                                <li>Web CMS Fauzan</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="<?= $konfig->facebook; ?>"><i class="fa fa-facebook"></i></a>
                                <a href="<?= $konfig->instagram; ?>"><i class="fa fa-instagram"></i></a>
                                <!-- <a href="#"><i class="fa fa-pinterest-p"></i></a> -->
                            </div>
                            <div class="header__top__right__auth">
                                <a href="<?= base_url('lojin/logout')?>" onClick="return confirm('Rill kah?')"><i class="fa fa-user"></i> Log In</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <!-- <a href="./index.html"><img src="<?= base_url('assets/warungV2/')?>img/cms2.png" alt=""></a> -->
                        <h3 class="welcome-sub-text"><?= $konfig->judul_website; ?></h3>
                    </div>
                </div>
                <div class="col-lg-6 " style="margin-left: 125px;">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="<?= base_url('user/dashboard')?>">Home</a></li>
                            <li><a href="#">Konten</a>
                                <ul class="header__menu__dropdown">
                                <?php foreach ( $kategori as $kate) {?>
                                <li><a href="<?= base_url('user/dashboard/kategori/'. $kate['id_kategori'])?>"><?= $kate['nama_kategori']?></a></li>
                            <?php } ?>
                                </ul>
                            </li>
                            <li><a href="<?= base_url('user/dashboard/galeri')?>">Gallery</a></li>

                            
                           
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">

                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="<?= base_url('user/dashboard/search')?>" method="post" >

                                <input type="text" name="search" placeholder="Cari konten yang apa nih?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>