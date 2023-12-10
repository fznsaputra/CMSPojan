<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $judul; ?></title>

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


    <!-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
        <?php $no = 1;
        foreach ($caraousel as $cal) { ?>
            <div class="carousel-item <?php if ($no == 1) {
                                            echo 'active';
                                        } ?>">
                <img class="d-block w-100" src="<?= base_url("assets/upload/caraousel/") . $cal['foto']; ?>" >
            </div>
            <?php $no++;
        } ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div> -->
    <section class="blog-details-hero set-bg" data-setbg="<?= base_url('assets/warungV2/') ?>img/blog/details/details-hero.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog__details__hero__text">
                        <h2><?= $konten->judul; ?></h2>
                        <ul>
                            <li>By <?= $konten->username; ?></li>
                            <li><?= $konten->tanggal; ?></li>
                            <li><?= $konten->nama_kategori; ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Hero End -->

    <!-- Blog Details Section Begin -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row">
            <div class="col-lg-2 col-md-5 order-md-1 order-2">
                        <!-- <div class="blog__sidebar">
                            <div class="blog__sidebar__search">
                                <form action="#">
                                    <input type="text" placeholder="Search...">
                                    <button type="submit"><span class="icon_search"></span></button>
                                </form>
                            </div>
                            <div class="blog__sidebar__item">
                                <h4>Kategori</h4>
                                <ul>
                                    <?php foreach ($kategori as $kate) { ?>
                                    <li><a href="<?= base_url('user/dashboard/kategori') ?>"><?= $kate['nama_kategori'] ?></a></li>
                            <?php } ?>
                                </ul>
                            </div>
                        </div> -->
                </div>
                <div class="col-lg-8 col-md-7 order-md-1 order-1">
                    <div class="blog__details__text">
                        <img class="img-fluid rounded" src="<?= base_url("assets/upload/konten/") . $konten->foto; ?>">
                        <?= $konten->keterangan; ?>

                    </div>

                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Blog Details Section End -->

    <!-- Related Blog Section Begin -->
    
    <!-- Related Blog Section End -->
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