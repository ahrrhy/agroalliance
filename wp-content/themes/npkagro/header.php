<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package yatsyuk
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" <?php language_attributes(); ?>>
    <meta name="keywords" content="npkagroalliance, купить удобрения, азотные, фосфорные, калийные, купить удобрения Черкассы" />
    <meta name="description" content="npkagroalliance, купить удобрения, азотные, фосфорные, калийные, купить удобрения Черкассы, npk-agroalliance, npk, agroalliance">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <script>
        function insertNavBrand() {
            var container = $('#navbarNavAltMarkup'),
                element = "<a class='brand-logo-link' href='<?php echo get_home_url(); ?>'><img class='brand-logo' src='' alt='logo'></a>";
            container.prepend(element);
            $('.brand-logo').attr('src', '<?php echo wp_get_attachment_url(get_theme_mod("logo_bg")); ?>');
        }
        <?php
        $bg_logo = get_theme_mod("logo_bg");
        if ($bg_logo){ ?>
        $(document).ready(function () {
            insertNavBrand();
        });

        <?php } ?>



    </script>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'yatsyuk' ); ?></a>

	<header id="masthead" class="site-header container-fluid <?php if(is_front_page()){
	    echo "front-header";
    }else echo "other-header"; ?>" role="banner">

            <div class="row justify-content-center">

                <nav class="navbar navbar-toggleable-md navbar-light row justify-content-between">

                    <div class="col-12" id="menu-wrap">


                            <?php
                                if ($bg_logo){
                                    wp_nav_menu( array(
                                            'menu'              => 'menu-1',
                                            'theme_location'    => 'primary',
                                            'depth'             => 2,
                                            'container'         => 'div',
                                            'container_class'   => 'container collapse navbar-collapse justify-content-between',
                                            'container_id'      => 'navbarNavAltMarkup',
                                            'menu_class'        => 'navbar-nav align-items-center',
                                            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                            'walker'            => new WP_Bootstrap_Navwalker())
                                    );
                                }else{
                                    wp_nav_menu( array(
                                            'menu'              => 'menu-1',
                                            'theme_location'    => 'primary',
                                            'depth'             => 2,
                                            'container'         => 'div',
                                            'container_class'   => 'container collapse navbar-collapse justify-content-end',
                                            'container_id'      => 'navbarNavAltMarkup',
                                            'menu_class'        => 'navbar-nav align-items-center',
                                            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                            'walker'            => new WP_Bootstrap_Navwalker())
                                    );
                                }
                            ?>


                    </div>



                        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                </nav>
                <h1 class="site-title navbar-brand col-12 text-center">
                    <span class="hide"><?php bloginfo( 'name' ); ?></span>
                    <span class="logo-wrap"><img src="<?php echo wp_get_attachment_url(get_theme_mod('logo')); ?>" alt="logo"></span>
                </h1>

        </div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">

