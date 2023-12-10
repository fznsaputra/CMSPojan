<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My CMS</title>

    <?php require_once('_css.php'); ?>

</head>

<body>
    <!-- Page Preloder -->


    <!-- Humberger Begin -->
    <?php require_once('_burger.php'); ?>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <?php require_once('_header.php'); ?>

    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <!-- Hero Section Begin -->
    
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->


    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
        <?php $no = 1;foreach ($caraousel as $cal) { ?>
            <div class="carousel-item <?php if ($no == 1) { echo 'active';} ?>">
                <img class="d-block w-100" src="<?= base_url("assets/upload/caraousel/") . $cal['foto']; ?>" >
            </div>
            <?php $no++;} ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    
        <!-- Breadcrumb Section End -->

        <!-- Blog Section Begin -->
        <section class="blog spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-5">
                        <div class="blog__sidebar">
                            
                            <div class="blog__sidebar__item">
                                <h4>Recent Post</h4>
                                <?php foreach ( $recent as $kon) {?>
                                <div class="blog__sidebar__recent">
                                    <a href="<?= base_url('user/dashboard/artikel/').$kon['slug']?>" class="blog__sidebar__recent__item">
                                        <div class="blog__sidebar__recent__item__pic">
                                            <img style="width: 120px;" src="<?= base_url("assets/upload/konten/") . $kon['foto']; ?>">
                                        </div>
                                        <div class="blog__sidebar__recent__item__text">
                                            <h6><?= $kon['judul']?></h6>
                                            <span class="fa fa-calendar-o"> <?= $kon['tanggal']?></span>
                                        </div>
                                    </a>
                                </div>
                                </br>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <div class="row">
                        <?php foreach ( $konten as $kon) {?>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="blog__item">
                                    <div class="blog__item__pic">
                                        <img src="<?= base_url("assets/upload/konten/") . $kon['foto']; ?>">
                                    </div>
                                    <div class="blog__item__text">
                                        <ul>
                                            <li><i class="fa fa-calendar-o"></i> <?= $kon['tanggal']?></li>
                                            <li><i class="fa fa-comment-o"></i> <?= $kon['nama_kategori']?></li>
                                        </ul>
                                        <h5><a href="#"><?= $kon['judul']?></a></h5>
                                       
                                        <a href="<?= base_url('user/dashboard/artikel/').$kon['slug']?>" class="blog__btn">Baca Selengkapnya <span class="arrow_right"></span></a>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <div class="col-lg-12">
                                <div class="product__pagination blog__pagination">
                                    <a href="#">1</a>   
                                    <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>My Gallery</h2>
                    </div>
                </div>
            </div>
            <div class="row">
            <?php foreach ( $galeri as $kon) {?>

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="<?= base_url("assets/upload/galeri/") . $kon['foto']; ?>">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-comment-o"></i> <?= $kon['judul']?></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <div class="blog__item__text mx-auto">
                    <a href="<?= base_url('user/dashboard/galeri')?>" class="blog__btn">Lihat Selengkapnya <span class="arrow_right"></span></a>
                </div>

            </div>
        </div>
    </section>
        <!-- Blog Section End -->
        <!-- Blog Section End -->

        <!-- Blog Section End -->

        <!-- Footer Section Begin -->
        <?php require_once('_footer.php'); ?>

        <!-- Footer Section End -->

        <!-- Js Plugins -->
        <?php require_once('_js.php'); ?>




</body>

</html>