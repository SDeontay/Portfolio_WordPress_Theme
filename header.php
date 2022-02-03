<html lang="en-US">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Deontay S. Portfolio</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/inc/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/inc/animations/css/animate.min.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/inc/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/inc/owl-carousel/css/owl.carousel.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/inc/owl-carousel/css/owl.theme.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

<?php wp_head(); ?>

	</head>

    <body data-spy="scroll" data-target="#main-navbar">
       

<div class="page-loader"></div>
    	<div class="body">

            <header id="header" class="header-main">


                <nav id="main-navbar" class="navbar navbar-default navbar-fixed-top" role="navigation">
                  <div class="container">
                    <div class="navbar-header">
                    	<?php if ( has_custom_logo() ) { ?>
                    	<a class="navbar-brand" href="<?php echo get_home_url(); ?>">  <?php //the_custom_logo(); ?>
<img src="<?php echo esc_url( wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' )[0] ); ?>
"  style="width:180px; height:45px; overflow: hidden;">
                    	 </a>
                    	<?php } ?>
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                    </div>


                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    	<?php
if ( has_nav_menu( 'primary' ) ){
$defaults = array(
    'menu_class'      => 'primary-menu nav navbar-nav navbar-right',
    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
);

wp_nav_menu( $defaults );
}
else {
?>
                         <ul class="nav navbar-nav navbar-right">
                            <li><a class="page-scroll" href="<?php echo get_home_url(); ?>">Home</a></li>
                            <li><a class="page-scroll" href="<?php echo get_home_url(); ?>/#about-section">About</a></li>
                            <li><a class="page-scroll" href="<?php echo get_home_url(); ?>/#portfolio-section">Work</a></li>
                            <li><a class="page-scroll" href="<?php echo get_home_url(); ?>/#team-section">Meet Me</a></li>
                            <li><a class="page-scroll" href="<?php echo get_home_url(); ?>/#contact-section">Contact</a></li>
                        </ul> 

                    <?php } ?>
                    </div>
                  </div>
                </nav>


            </header>
