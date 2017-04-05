<?php
include_once('global/inc/header.php');
?>
    <?php
        while (have_posts()) : the_post();
    ?>
    <header class="intro-header" style="background-image: url('<?php bloginfo('template_url'); ?>/global/img/post-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1><?php the_title(); ?></h1>
                        <h2 class="subheading"><?php echo get_the_excerpt(); ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </article>
    <?php endwhile; ?>
    <hr>
<?php
include_once('global/inc/footer.php');
?>
