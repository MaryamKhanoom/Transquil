<?php

/*

* The header for our

*/


?>

<!doctype html>
<html lang="<?php language_attributes(); ?>">

<head>
    <!-- Required meta tags -->

    <meta charset=<?php bloginfo('charset'); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">

<!--        <title>--><?php //echo get_bloginfo('name') ?><!--</title>-->

<!--   Bootstrap CSS -->
<!--    <link rel="stylesheet" type="text/css"  href="--><?php //echo get_stylesheet_uri();?><!--">-->
<!--    <link rel="stylesheet" type="text/css" href="--><?php //echo get_template_directory_uri(); ?><!--/Css/bootstrap.min.css" >-->
<!--   Fontawesome -->
<!--    <link rel="stylesheet" type="text/css" href="--><?php //echo get_template_directory_uri(); ?><!--/Css/fontawesome-free-5.15.3-web/css/all.min.css">-->
<!--    Custom CSS -->
<!--    <link rel="stylesheet" type="text/css" href="--><?php //echo get_template_directory_uri(); ?><!--/style.css " >-->
  <?php wp_head(); ?>
</head>

<body   <?php body_class();?>>

    <header>
        <nav class="navbar navbar-light  bg-light  px-3  navbar-expand-md ">

        <!--        <nav class="navbar  navbar-expand-md navbar-light d-flex bg-light">-->
  <!-- لینک پایین عنوان سایت را دارد و با کلیک روی آن بخود صحفه اصلی برمی گردد -->
            <a href="<?php echo esc_url(home_url()); ?>" class="navbar-brand"><?php echo get_bloginfo('name') ?></a>
<!--            <a href=""  class="navbar-brand">Transquil spa</a>-->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon "></span>
            </button>

<!--            <div class="collapse navbar-collapse justify-content-end " id="navbarNav">-->
<!---->
<!--                <ul class="navbar-nav">-->
<!--                    <li class="nav-item active">-->
<!--                        <a class="nav-link active" href="--><?php //echo esc_url(home_url()); ?><!--">home</a>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link" href="--><?php //echo get_template_directory_uri(); ?><!--">Blog</a>-->
<!--                    </li>-->
<!--                </ul>-->

                <?php  wp_nav_menu(array(
                    'theme_location'  => 'primary',
                    'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
                    'container'       => 'div',
                    'container_class' => 'collapse navbar-collapse justify-content-end',
                    'container_id'    => 'navbarNav',
                    'menu_class'      => 'navbar-nav',
                    'add_li_class'    => 'px-3',
                    'fallback_cb'     => '',
//                   'walker'      => new WP_Bootstrap_Navwalker(),
                ) );
////
//////                ?>
<!--            </div>-->


        </nav>

        <section class="container-fluid">
            <div class="row position-relative  align-items-center d-flex justify-content-center">
                <img src="<?php  echo get_template_directory_uri(); ?>/Images/lake.jpg"  alt="lake background" class="header-img">
                <div class="position-absolute feature-bg">
                    <p class="feature-text text-center"><?php  featuretxt();?> </p>
                </div>
            </div>


        </section>


    </header>

<?php //echo get_template_directory_uri()."/Images/Lake.jpg";?>
<!--    /* function-->
<!--    language_attributes();-->
<!--*/-->

<!--    esc_url  کاراکتر های اضافه را از توی آدرس پاگ می کند-->