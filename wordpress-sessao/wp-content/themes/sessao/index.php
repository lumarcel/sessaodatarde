<?php
include_once('global/inc/header.php');
?>
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('<?php bloginfo('template_url'); ?>/global/img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Mini Curso</h1>
                        <hr class="small">
                        <span class="subheading">Tema de Exemplo do Mini Curso</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-preview">
                        <h2 class="post-title">
                            <?php 
                                $post = get_post(6);
                                echo $post->post_title;
                            ?>
                        </h2>
                        <h3 class="post-subtitle">
                            <?php 
                                echo $post->post_content;
                            ?>
                        </h3>
                </div>
            </div>
        </div>
    </div>

    <hr>
<?php
include_once('global/inc/footer.php');
?>