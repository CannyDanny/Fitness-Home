<?php
/**
 * Created by PhpStorm.
 * User: Danny
 * Date: 30/01/2018
 * Time: 16:38
 */
?>

<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
    <?php if (is_active_sidebar('sidebar')) : ?>
        <?php dynamic_sidebar('sidebar') ?>
    <?php endif; ?>
</div>
</div>

<footer class="blog-footer">
    <div class="container">
        <?php if (is_active_sidebar('footer-menu')) : ?>
            <?php dynamic_sidebar('footer-menu'); ?>
        <?php endif; ?>
    </div>

    <div class="social-icons">
        <ul class="social-network social-circle">
            <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
            <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
        </ul>
    </div>

    <p>
        &copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?>
    </p>
</footer>
<?php wp_footer(); ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
</body>
</html>
