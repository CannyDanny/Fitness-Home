<?php
/**
 * Created by PhpStorm.
 * User: Danny
 * Date: 30/01/2018
 * Time: 16:09
 */

?>
<?php get_header(); ?>
    <div class="row">
        <div class="col-sm-12 blog-main">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) :
                    the_post(); ?>
                    <div class="blog-post">
                        <h2 class="blog-post-title">
                                <?php the_title(); ?>

                        </h2>
                        <?php the_content(); ?>
                    </div><!-- /.blog-post -->
                <?php endwhile; ?>
            <?php else : ?>
                <p><?php __('No Posts Found'); ?></p>
            <?php endif; ?>
        </div><!-- /.blog-main -->

    </div><!-- /.row -->

    </div><!-- /.container -->

<?php get_footer(); ?>