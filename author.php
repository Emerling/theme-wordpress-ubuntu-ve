<?php get_header(); ?>
<!-- variables del autor-->

<?php
if(isset($_GET['author_name'])) :
$curauth = get_userdatabylogin($author_name);
else :
$curauth = get_userdata(intval($author));
endif;
?>

<div class="container font-weight-light">
    <div class="title">
        <h3 class="mt-5  font-weight-light">Autor:</span></h3>
    </div>

    <div class="row">



        <div class="row cards" style="width: auto; margin: auto auto;">
            <div class="card card-profile">
                <div class="card-header card-header-image mx-auto d-block">

                    <?php echo get_avatar($curauth->ID, $size = '150'); ?>

                    <div class="card-title">
                        @<?php echo $curauth->nickname; ?>
                    </div>

                </div>
                <div class="card-body ">
                    <h6 class="card-category" style="color:#77216F"><span><?php echo $curauth->first_name; ?>
                            <?php echo $curauth->last_name; ?></h6>

                    <p class="card-description">
                        <?php echo $curauth->user_description; ?>
                    </p>
                    <hr>
                    <div class='mx-auto'>
                        <!-- The Loop -->
                        <p>Últimas entradas del autor:</p>
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="post">
                            <h6 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark"
                                    title="Enlace a <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h6>

                        </div>

                        <?php endwhile; else: ?>
                        <p><?php _e('No existen entradas por este autor.'); ?></p>

                        <?php endif; ?>
                    </div>
                    <hr>
                    <a class='font-weight-bold' href="mailto:<?php the_author_email(); ?>">Click para enviar un correo</a>


                    <div class="card-footer h-100  d-flex justify-content-center align-items-center" style='background-color:#111'>
                        <a class="launchpad" href="<?php echo $curauth->launchpad; ?>"><img
                                src="<?php bloginfo('template_url'); ?>/images/launchpad.png" HSPACE="5"class="img-fluid">  </a>
                        <a class="wiki" href="<?php echo $curauth->wiki; ?>"><img
                                src="<?php bloginfo('template_url'); ?>/images/wiki.png" HSPACE="5" class="img-fluid">  </a>
                        <a class="twitter" href="<?php echo $curauth->twitter; ?>"><img
                                src="<?php bloginfo('template_url'); ?>/images/twitter.png"HSPACE="5"  class="img-fluid">  </a>
                        <a class="facebook" href="<?php echo $curauth->facebook; ?>"><img
                                src="<?php bloginfo('template_url'); ?>/images/facebook.png" HSPACE="5" class="img-fluid">  </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<hr>
<?php get_footer(); ?>