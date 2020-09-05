<h5 class='font-weight-normal' style="color:#e95420">Comentarios... <br><?php comments_number('sin comentarios.', 'un comentario.', '% comentarios.'); ?></h5>
<hr>

<?php comment_form(); ?>

<?php
wp_list_comments(array(
    'callback' => function ($comment, $args, $depth) { ?>
    <div class="media font-weight-light">

        <div class='mr-2'>

            <?php
            if ($args['avatar_size'] != 0) {
                echo get_avatar($comment, $args['avatar_size']);
            }
            ?>

        </div>

        <div class="media-body  ">
            <h6 class="mt-0 font-weight-light">
                <?php
                printf(__('<cite>%s</cite> <span>dice:</span>'), get_comment_author_link());
                ?>

            </h6>

            <?php
            if ($comment->comment_approved == '0') { ?>
                <em><?php _e('Su comentario está en espera de aprobación.'); ?></em><br /><?php
                                                                                        } ?>

            <div class='bg-light mt-2 mb-4'>

                <?php comment_text(); ?>

                <span>
                    <?php
                    comment_reply_link(array_merge($args, array('reply_text' => 'Responder | ', 'depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
                </span>

                <span>
                    <?php
                    edit_comment_link(__('Editar'), '  ', ''); ?>

                </span>




            </div><hr>

        <?php } 

));
        ?>

        </div> 
    </div>
    