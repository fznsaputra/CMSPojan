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
    
    
   
        <!-- Breadcrumb Section End -->

        <!-- Blog Section Begin -->
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
                <div class="col-lg-12">
                                <div class="product__pagination blog__pagination">
                                    <a href="#">1</a>
                                    <a href="#">2</a>
                                    <a href="#">3</a>
                                    <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                                </div>
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