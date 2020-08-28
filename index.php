<?php get_header(); ?>
  <!--
  banner ancho de encabezado
  -->

  <div class="jumbotron-fluid  p-4 p-md-5 text-white " style="background-image: url(<?php bloginfo( 'template_url' ); ?>/images/desktop-banner2.png);min-height: 560px">
    <div class="col-md-6 px-0">
      <h1 class="font-weight-lighter">Ubuntu para equipos de escritorios</h1>
      <p class="lead my-3 font-weight-lighter">El sistema operativo de código abierto Ubuntu alimenta a millones de PC y portátiles en todo el mundo.
      </p>
      <p><a href="https://ubuntu.com/desktop#download-content" class="btn btn-lg font-weight-lighter" style="background-color:#0c721b; color:#fff">Descargue Ubuntu&raquo;</a></p>
      <p class="lead mb-0"><a href="https://ubuntu.com/desktop#download-content" class="text-white font-weight-lighter">Eche un vistazo ></a></p>
    </div>
  </div>
  <!--fin dal banner -->

  <div class="container ">

    <!--
    ultimas entradas del blog
    -->

    <h6 style="text-align: center; color:#0066cc">Últimas Entradas del Blog</h6>

    <div class="card-deck">
      <div class="row">



      <?php
 global $post;

$last_posts = get_posts(array('posts_per_page' => 4));

foreach ( $last_posts as $post ) :
 setup_postdata( $post );?>


<div class="col-lg-3">
  <div class="card-body">
    <h5 class="card-title"><a style="color:#000" href="<?php the_permalink( $post ) ?>"><?php the_title(); ?></a></h5>
    <p class="card-text"><?php the_excerpt(); ?></p>
    <a href="<?php the_permalink(); ?>" class="card-link">Leer más...</a>
  </div>
  <div class="card-footer">
    Autor: <?php the_author(); ?> <br> Fecha: <?php the_time('F, j, Y'); ?>
  </div>
</div>

<?php endforeach;
 wp_reset_postdata();
?>


<!--
fin de las ultimas entradas del Blog
paginacion
-->
      </div>

    </div>



    <br>
    <button type="button" class="btn btn-outline-dark">Visite nuestro Blog</button>
    <br><br><br>
  </div>
  <div class="container-fluid ">

    <div class="row">
      <div class="col border bg-light">
        <br>

        <h2 class="font-weight-lighter" style="text-align: center">Ubuntu es un sistema operativo de software de código abierto que se ejecuta <br>desde el escritorio hasta la nube y todas sus cosas conectadas a Internet.
        </h2>
        <br><br>
        <div class="container">
          <div class="card-deck">
            <div class="card text-center" style="background-color: rgba(245, 245, 245, 0.4);border:0 ">

              <img src="<?php bloginfo( 'template_url' ); ?>/images/cloud2.png" class="mx-auto">
              <div class="card-footer" style="background-color: rgba(245, 245, 245, 0.4);border:0 ">
                <br>
                <a class="stretched-link" style="color:#666666" href="#">Nube</a>

              </div>
            </div>
            <div class="card text-center" style="background-color: rgba(245, 245, 245, 0.4);border:0 ">

              <img src="<?php bloginfo( 'template_url' ); ?>/images/server2.png" class="mx-auto">
              <div class="card-footer" style="background-color: rgba(245, 245, 245, 0.4);border:0 ">
                <br>
                <a class="stretched-link" style="color:#666666" href="#">Servidor</a>
              </div>
            </div>
            <div class="card text-center" style="background-color: rgba(245, 245, 245, 0.4);border:0 ">

              <img src="<?php bloginfo( 'template_url' ); ?>/images/containers2.png" class="mx-auto">
              <div class="card-footer" style="background-color: rgba(245, 245, 245, 0.4);border:0 ">
                <br>
                <a class="stretched-link" style="color:#666666" href="#">Contenedores</a>
              </div>
            </div>

            <div class="card text-center" style="background-color: rgba(245, 245, 245, 0.4);border:0 ">

              <img src="<?php bloginfo( 'template_url' ); ?>/images/desktop2.png" class="mx-auto">
              <div class="card-footer" style="background-color: rgba(245, 245, 245, 0.4);border:0 ">
                <br>
                <a class="stretched-link" style="color:#666666" href="#">Escritorio</a>
              </div>
            </div>
            <div class="card text-center" style="background-color: rgba(245, 245, 245, 0.4);border:0 ">

              <img src="<?php bloginfo( 'template_url' ); ?>/images/iot2.png" class="mx-auto">
              <div class="card-footer" style="background-color: rgba(245, 245, 245, 0.4);border:0 ">
                <br>
                <a class="stretched-link" style="color:#666666;" href="#">IdC</a>
              </div>
            </div>
          </div>
          <br><br>

        </div>
      </div>
    </div>
  </div>
  <br><br><br>
  <div class="container">

    <div class="row">
      <div class="col-lg-6">
        <img src="<?php bloginfo( 'template_url' ); ?>/images/openstack-hero.jpg" class="img-fluid">
        <br><br>
      </div>
      <div class="col-lg-6">
        <h2 class="font-weight-lighter" style="text-align: left"> <a href="#">El sistema operativo más popular del mundo en nubes públicas y nubes OpenStack ›</a></h2>
        <br><br>
        <h5 class="font-weight-light">
          <p>Obtenga más información sobre el software de construcción en la nube, las herramientas y los paquetes de servicios de Ubuntu.</p>
        </h5>
      </div>
    </div>
  </div>
  <br><br><br>

  <div class="container-fluid ">

    <div class="row">
      <div class="col border bg-light">
        <br>
        <bri><br>

          <div class="container">

            <div class="row">
              <div class="col-lg-6">
                <h2 class="font-weight-lighter" style="text-align: left"> <a href="#">La forma más rápida de pasar del desarrollo a la producción en IoT ›</a></h2>
                <br><br>
                <h5 class="font-weight-light">
                  <p>Obtenga información sobre cómo Ubuntu Core y los Snaps pueden ayudarlo a construir y conectar dispositivos.</p>
                </h5>
                <br><br>
              </div>
              <div class="col-lg-6">
                <img src="<?php bloginfo( 'template_url' ); ?>/images/dron-iot.jpg" class="img-fluid">

                <br><br>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>

  <br><br><br>
  <div class="container">

    <div class="row">
      <div class="col-lg-6">
        <img src="<?php bloginfo( 'template_url' ); ?>/images/contenedor.jpg" class="img-fluid">
        <br><br>
      </div>
      <div class="col-lg-6">
        <h2 class="font-weight-lighter" style="text-align: left"> <a href="#">La plataforma número uno para contenedores ›</a></h2>
        <br><br>
        <h5 class="font-weight-light">
          <p>Desde LXD hasta Kubernetes y Docker, Ubuntu puede ejecutar sus contenedores a escala.</p>
        </h5>
      </div>
    </div>
  </div>
  <br><br><br>

  <div class="container-fluid ">

    <div class="row">
      <div class="col border bg-light">
        <br><br><br>

        <div class="container">

          <div class="row">
            <div class="col-lg-6">
              <h2 class="font-weight-lighter" style="text-align: left"> <a href="#">Ubuntu, rápido, seguro y sencillo, impulsa a millones de PC en todo el mundo ›</a></h2>
              <br><br>
              <h5 class="font-weight-light">
                <p>Descargue la última versión de Ubuntu, para PC de escritorio y portátiles.</p>
              </h5>
              <br><br>
            </div>
            <div class="col-lg-6">
              <img src="<?php bloginfo( 'template_url' ); ?>/images/laptop.jpg" class="img-fluid">
              <br><br><br>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br><br><br>
  <div class="container">

    <div class="row">

      <div class="col-lg-2 d-flex align-items-center" style="background-color:#3b69e2">
        <img src="<?php bloginfo( 'template_url' ); ?>/images/k8s.png" class="d-none d-sm-none d-md-block">

      </div>

      <div class="col-lg-3 border-right border-white  " style="border-width: 15px !important; background-color:#3b69e2; color:#fff">
        <br><br>
        <h2 class="font-weight-lighter " style="text-align: left"> <a href="#">
            <a style="color:#ffffff" href="#">Vea nuestros seminarios web de Kubernetes ›</a>
          </a>
        </h2>
        <h5 class="font-weight-light">
          <br>
          <p>Una serie de seminarios web bajo demanda para obtener más información sobre Charmed Kubernetes.</p>
        </h5>
      </div>
      <div class="col-lg-3" style="background-color:#da2643; color:#fff">
        <br><br>
        <h2 class="font-weight-lighter" style="text-align: left"> <a href="#">
            <a style="color:#ffffff" href="#">¿Aumentan los costos de OpenStack? ›</a>
          </a></h2>
        <br>
        <h5 class="font-weight-light">
          <p>Descubra cómo la subcontratación de operaciones de OpenStack puede acelerar el proceso de implementación de la nube privada y ayudar a reducir los costos.</p>
        </h5>
      </div>
      <div class="col-lg-2 d-flex align-items-center" style="background-color:#da2643">
        <img src="<?php bloginfo( 'template_url' ); ?>/images/openstacklogo.png" class="d-none d-sm-none d-md-block"> </div>
    </div>
    <br><br><br>
  </div>
  <div class="container-fluid">

    <div class="row">
      <div class="col border bg-light">
        <br><br><br>

        <div class="container">


          <div class="row justify-content-center">
            <div class="col col-md-2">

              <a style="color:#000000" href="#"><small><b>OpenStack</b></small></a><br>
              <a style="color:#000000" href="#"><small>Qué es OpenStack</small></a><br>
              <a style="color:#000000" href="#"><small>Características</small></a><br>
              <a style="color:#000000" href="#"><small>Administración</small></a><br>
              <a style="color:#000000" href="#"><small>Asesoría</small></a><br>
              <a style="color:#000000" href="#"><small>Calculador TCO</small></a><br>
              <a style="color:#000000" href="#"><small>Instalar</small></a><br>
              <br>
              <a style="color:#000000" href="#"><small><b>Precio</b></small></a><br>
              <a style="color:#000000" href="#"><small>Soporte</small></a><br>
              <a style="color:#000000" href="#"><small>Asesoría</small></a><br>
              <a style="color:#000000" href="#"><small>Dispositivos</small></a><br>

            </div>

            <div class="col col-md-2">
              <a style="color:#000000" href="#"><small><b>Kubernetes</b></small></a><br>
              <a style="color:#000000" href="#"><small>Qué es Kubernetes</small></a><br>
              <a style="color:#000000" href="#"><small>Características</small></a><br>
              <a style="color:#000000" href="#"><small>Administración</small></a><br>
              <a style="color:#000000" href="#"><small>Calculador TCO</small></a><br>
              <a style="color:#000000" href="#"><small>Instalar</small></a><br>
              <a style="color:#000000" href="#"><small>Documentos</small></a><br>
              <a style="color:#000000" href="#"><small>Apss</small></a><br>
              <br>
              <a style="color:#000000" href="#"><small><b>Kubeflow</b></small></a><br>
              <a style="color:#000000" href="#"><small>Qué es Kubeflow</small></a><br>
              <a style="color:#000000" href="#"><small>Características</small></a><br>
              <a style="color:#000000" href="#"><small>Instalar</small></a><br>
              <a style="color:#000000" href="#"><small>Asesoría</small></a><br>


            </div>
            <div class="col col-md-2">

              <a style="color:#000000" href="#"><small><b>Escritorio</b></small></a><br>
              <a style="color:#000000" href="#"><small>Características</small></a><br>
              <a style="color:#000000" href="#"><small>Organizaciones</small></a><br>
              <a style="color:#000000" href="#"><small>Desarrolladores</small></a><br>
              <a style="color:#000000" href="#"><small>Patrocinantes</small></a><br>
              <a style="color:#000000" href="#"><small>Estadísticas</small></a><br>
              <br>
              <a style="color:#000000" href="#"><small><b>IdC (IoT)</b></small></a><br>
              <a style="color:#000000" href="#"><small>Señalización digital</small></a><br>
              <a style="color:#000000" href="#"><small>Robótica</small></a><br>
              <a style="color:#000000" href="#"><small>Gateways</small></a><br>
              <a style="color:#000000" href="#"><small>Tienda de Apps</small></a><br>
              <a style="color:#000000" href="#"><small>Linux Integrado</small></a><br>
              <a style="color:#000000" href="#"><small>Automotor</small></a><br>
              <a style="color:#000000" href="#"><small>Redes</small></a><br>

            </div>

            <div class="col col-md-2">
              <a style="color:#000000" href="#"><small><b>Servidor</b></small></a><br>
              <a style="color:#000000" href="#"><small>Hyperescala</small></a><br>
              <a style="color:#000000" href="#"><small>Documentos</small></a><br>
              <br>
              <a style="color:#000000" href="#"><small><b>Soporte</b></small></a><br>
              <a style="color:#000000" href="#"><small>Soporte comunitario</small></a><br>
              <a style="color:#000000" href="#"><small>Mant.Seg.Ext.</small></a><br>
              <a style="color:#000000" href="#"><small>Livepatch</small></a><br>
              <br>
              <a style="color:#000000" href="#"><small><b>Seguridad</b></small></a><br>
              <a style="color:#000000" href="#"><small>Certificaciones</small></a><br>
              <a style="color:#000000" href="#"><small>Noticias</small></a><br>
              <a style="color:#000000" href="#"><small>OVAL</small></a><br>
              <br>
              <a style="color:#000000" href="#"><small><b>Administración</b></small></a><br>
              <a style="color:#000000" href="#"><small>Kafka</a></small><br>

            </div>

            <div class="col col-md-2">
              <a style="color:#000000" href="#"><small><b>Descargas</b></small></a><br>
              <a style="color:#000000" href="#"><small>Nube</small></a><br>
              <a style="color:#000000" href="#"><small>IdC (IoT)</small></a><br>
              <a style="color:#000000" href="#"><small>Raspberry Pi</small></a><br>
              <a style="color:#000000" href="#"><small>Servidor</small></a><br>
              <a style="color:#000000" href="#"><small>Escritorio</small></a><br>
              <a style="color:#000000" href="#"><small>Descargas alternativas</small></a><br>
              <a style="color:#000000" href="#"><small>Sabores de Ubuntu</small></a><br>
              <br>
              <a style="color:#000000" href="#"><small><b>Aparato</b></small></a><br>
              <a style="color:#000000" href="#"><small>Acerca de</small></a><br>
              <a style="color:#000000" href="#"><small>Portafolio</small></a><br>
              <a style="color:#000000" href="#"><small>Comunidad</small></a><br>
              <a style="color:#000000" href="#"><small>Hardware</small></a><br>
              <a style="color:#000000" href="#"><small>Maquinas virtuales</small></a><br>


            </div>

            <div class="col col-md-2">
              <a style="color:#000000" href="#"><small><b>Sectores</b></small></a><br>
              <a style="color:#000000" href="#"><small>TeleCo</small></a><br>
              <a style="color:#000000" href="#"><small>Finanzas</small></a><br>
              <br>
              <a style="color:#000000" href="#"><small><b>Nube Pública</b></small></a><br>
              <a style="color:#000000" href="#"><small>Contenedores</small></a><br>
              <a style="color:#000000" href="#"><small>Nucleo</small></a><br>
              <a style="color:#000000" href="#"><small>tutoriales</small></a><br>
            </div>
          </div>
          <br><br>

        </div>
      </div>
    </div>
  </div>
  <br>
<?php get_footer(); ?>
