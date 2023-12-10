<footer class="footer spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer__about">
                    <div class="footer__about__logo">
                        <h3 class="welcome-sub-text"><?= $konfig->judul_website; ?></h3>
                    </div>
                    <ul>
                        <li><?= $konfig->profil_website; ?></li>
                    </ul>
                </div>
                <div class="footer__widget">
                    <div class="footer__widget__social">
                        <a href="<?= $konfig->facebook; ?>"><i class="fa fa-facebook"></i></a>
                        <a href="<?= $konfig->instagram; ?>"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12">
                <div class="footer-link-contact">
                    <h4>Contact Me</h4>
                    <ul>
                        <li>
                            <p><i class="fa fa-home"></i> Alamat:<br><?= $konfig->alamat; ?></p>
                        </li>
                        <li>
                            <p><i class="fa fa-phone-square"></i> WhatsApp: <br><a href="tel:+1-888705770"><?= $konfig->no_wa; ?></a></p>
                        </li>
                        <li>
                            <p><i class="fa fa-envelope"></i> Email: <a href="mailto:contactinfo@gmail.com"><?= $konfig->email; ?></a></p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-12">
                <div class="footer-link">
                    <h4>Quick Link</h4>
                    <ul>
                        <li><a href="<?= base_url() ?>">Home</a></li>
                        <?php foreach ($kategori as $kate) { ?>
                             <li><a href="<?= base_url('user/dashboard/kategori') ?>"><?= $kate['nama_kategori'] ?></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-12">
                <div class="footer-link">
                    <h4>Recent Post</h4>
                    <ul>
                    <?php foreach ($recent as $kon) {?>
                        <li><a href="<?= base_url('user/dashboard/artikel/').$kon['slug']?>"><h6><?= $kon['judul']?></h6></a></li>                                            
                                <?php } ?>
                    </ul>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer__copyright">
                    <div class="footer__copyright__text">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All Rights Reserved. © <a href="#"><?= $konfig->judul_website; ?></a> Design By :
            <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                    <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</footer>