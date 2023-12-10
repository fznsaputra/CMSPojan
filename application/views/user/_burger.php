<div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
        </div>
        
        <div class="humberger__menu__widget">
            
            <div class="header__top__right__auth">
            <a href="<?= base_url('lojin/logout')?>" onClick="return confirm('Rill kah?')"><i class="fa fa-user"></i> Log In</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                    <li><a href="<?= base_url('user/dashboard')?>">Home</a></li>
                            <li><a href="#">Konten</a>
                                <ul class="header__menu__dropdown">
                                <?php foreach ( $kategori as $kate) {?>
                                <li><a href="<?= base_url('user/dashboard/kategori/'. $kate['id_kategori'])?>"><?= $kate['nama_kategori']?></a></li>
                            <?php } ?>
                                </ul>
                            </li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
                <a href="<?= $konfig->facebook; ?>"><i class="fa fa-facebook"></i></a>
                <a href="<?= $konfig->instagram; ?>"><i class="fa fa-instagram"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> fauzansaputra195@gmail.com</li>
                <li>Web CMS Fauzan</li>
            </ul>
        </div>
    </div>