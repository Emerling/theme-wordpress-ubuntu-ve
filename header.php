<!DOCTYPE html>
<html lang="es">

<head>
    <title>Ubuntu Venezuela-Comunidad Oficial</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
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
                    <a class="navbar-left" href="https://canonical.com/"><img
                            src="<?php bloginfo( 'template_url' ); ?>/images/canonical-logo-peq.png"></a>
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
                <a class="navbar-left" style="margin-top: -8px; height:52px" href="https://ubuntu-ve.org/"><img
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

                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar">
                    <button class="btn btn-outline-success my-2 my-sm-0 " type="submit">Buscar</button>
                </form>
            </div>

        </nav>
        </div>
    </header>
    