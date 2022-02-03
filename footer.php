 <footer class="text-off-white">

                <div class="footer-top">
                	<div class="container">
                    	<div class="row wow bounceInLeft" data-wow-delay="0.4s">

                            <div class="col-sm-6 col-md-4">
                            	<h4>Useful Links</h4>
                            </div>

                        	<div class="col-sm-6 col-md-4" style="z-index: 100000000">
                                <h4>Subscribe</h4>
                            	<div id="footer_signup">
                                    <div id="email">
<?php if ( is_active_sidebar( 'subscribe-form' ) ) { ?>
<?php dynamic_sidebar( 'subscribe-form' );
} else {


 ?>


                                        <form id="subscribe" method="POST">
                                            <input type="text" placeholder="Enter email address" name="email" id="address" data-validate="validate(required, email)"  />
                                            <button type="submit">Submit</button>
                                            <span id="result" class="section-description"></span>
                                        </form>
<?php } ?>

                                    </div>
                                </div>

                            </div>

                <div class="footer">
                    <div class="container text-center wow fadeIn" data-wow-delay="0.4s">

                        <p class="copyright">
<?php if ( is_active_sidebar( 'copyright' ) ) { ?>
<?php dynamic_sidebar( 'copyright' );
} else {


 ?>

                        Copyright &copy; Deontay Stroud 2022, I own all rights to the work showcased on this website.
                         <?php } ?></a></p>
                    </div>
                </div>

            </footer>


            <a href="#" class="scrolltotop"><i class="fa fa-arrow-up"></i></a>

        </div>





		<script src="<?php echo get_template_directory_uri(); ?>/inc/jquery/jquery-1.11.1.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/inc/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/inc/owl-carousel/js/owl.carousel.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/inc/stellar/js/jquery.stellar.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/inc/animations/js/wow.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/inc/waypoints.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/inc/isotope.pkgd.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/inc/classie.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/inc/jquery.easing.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/inc/jquery.counterup.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/inc/smoothscroll.js"></script>


		<script src="<?php echo get_template_directory_uri(); ?>/js/theme.js"></script>

    </body>


</html>