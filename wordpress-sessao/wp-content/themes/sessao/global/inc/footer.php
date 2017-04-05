    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a href="<?php echo get_post_meta(10, 'twitter', TRUE); ?>">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo get_post_meta(10, 'facebook', TRUE); ?>">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo get_post_meta(10, 'github', TRUE); ?>">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-muted">Copyright &copy; IFBA 2017</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="<?php bloginfo('template_url'); ?>/global/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php bloginfo('template_url'); ?>/global/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php bloginfo('template_url'); ?>/global/js/jqBootstrapValidation.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/global/js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="<?php bloginfo('template_url'); ?>/global/js/clean-blog.min.js"></script>

</body>

</html>