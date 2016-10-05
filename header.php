<?php

/**

 * The template for displaying the header

 *

 * Displays all of the head element and everything up until the "site-content" div.

 *

 * @package WordPress 

 * @subpackage Twenty_Fifteen

 * @since Twenty Fifteen 1.0

 */

?><!DOCTYPE html>

<html <?php language_attributes(); ?> class="no-js">

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta name="viewport" content="width=device-width">

	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!--[if lt IE 9]>

	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>

	<![endif]-->

    <meta name="viewport" content="width=device-width, initial-scale=1">

<title>breaking</title>

<!-- Bootstrap -->

<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">

<!-- <link href="css/bootstrap-datepicker.css" rel="stylesheet"> -->

<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/animate.css" rel="stylesheet" media="all">

<!-- font-awesome -->
 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<!-- custom Css -->

<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css" media="all" />

<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" media="all" />

<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'>

<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/skin.css" media="all" />

 

	<?php wp_head(); ?>



</head>



<body <?php body_class(); ?>>

 <section id="header">

    

    <header>   

    

    <!-- top- black Section START -->

      <div class="box-black-top">
         <div class="container">

        <div class="col-md-12">

         

          	<div class="top-header col-md-4"><?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>

				<div class='site-logo'>



<a href="http://snvdev.org/wp/breaking/"><img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'> </a>

</div>

<?php endif; ?></div>

         <div class="clearfix"></div>

         </div>            

                    

        </div>

      </div>

      <!-- top- black Section End -->

      

         

    </header>

    

  </section>

 

 