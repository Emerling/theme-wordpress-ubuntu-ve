<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
 
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--  Bootstrap CSS -->
    <?php wp_head(); ?>
</head>

<body>
    <header>

        <!--
barra de navegacion oscura
-->

        <div id="navbar" class="container-fluid navbar-dark font-weight-lighter"
            style="background-color: #262626;color:#fff; height: 35px ">
            <div class="container nav-fill w-100">
                <nav class="navbar navbar-expand-lg navClass" style="top:-15px">
                    <a class="navbar-left" href="https://canonical.com/"><img src="<?php bloginfo( 'template_url' ); ?>/images/canonical-logo-peq.png"></a>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php bloginfo( 'url' ); ?>/wp-login.php">Ingresar</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>


        <!-- barra  menus Bootstrap -->


        <nav class="navbar navbar-expand-lg navbar-dark font-weight-light" style="background-color: #333">
            <div class="container">
                <a class="navbar-left" style="margin-top: -8px; height:52px" href="<?php bloginfo( 'url' ); ?>"><img
                        src="<?php bloginfo( 'template_url' ); ?>/images/logo-ubuntu-ve.png"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>



                <?php
wp_nav_menu( array(
    'theme_location'  => 'primary',
    'depth'           => 2, // 1 = sin dropdowns, 2 = con dropdowns.
    'container'       => 'div',
    'container_class' => 'collapse navbar-collapse',
    'container_id'    => 'navbarSupportedContent',
    'menu_class'      => 'navbar-nav mx-auto',
    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
    'walker'          => new WP_Bootstrap_Navwalker(),
) );

              ?>

        
                <?php get_search_form(); ?>
               
            </div>

        </nav>
        </div>
    </header>
    <body <?php body_class(); ?>>
    