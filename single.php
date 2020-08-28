<?php get_header(); ?>

<div class="container ">

  <!--
     entrada del blog
    -->

  <div class="card-deck">
    <div class="row">

      <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
          <div class="col-md-8">
            <h3><a style="color:#000"><?php the_title(); ?></a></h3>

            Autor: <?php the_author(); ?> <br> Fecha: <?php the_time('F, j, Y'); ?>
            <?php if (has_post_thumbnail()) {
              the_post_thumbnail('post-thumbnails', array('class' => 'img-fluid mb-3'));
            }
            ?>

            <?php the_content(); ?>

           
          </div>
          <!--            /* barra lateral derecha */ -->

          <?php get_sidebar(); ?>


    </div>

<?php endwhile;
      endif;  ?>



<!-- // paginacion -->
<div class="card-body" style="color:#dd4814">
<nav>
    <?php echo paginate_links(); ?>
  </nav>
</div>
  </div>

</div>
<!--
    fin de la entradas del Blog
    -->


</div>
<div class="container">
  <?php get_sidebar(); ?>

</div>

<div class="container-fluid ">



</div>
<br>
<?php get_footer(); ?>