<?php
include_once('global/inc/header.php');
?>
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('<?php bloginfo('template_url'); ?>/global/img/post-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1>Página de Noticias</h1>
                        <h2 class="subheading">Página com a listagem de notícias.</h2>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <?php while (have_posts()) : the_post(); ?>
                    <div class="post-preview">
                        <a href="<?php the_permalink(); ?>">
                            <h2 class="post-title">
                                <?php the_title(); ?>
                            </h2>
                            <h3 class="post-subtitle">
                                <?php echo get_the_excerpt(); ?>
                            </h3>
                        </a>
                    </div>
                    <hr>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
    <hr>
<?php
include_once('global/inc/footer.php');
?>
