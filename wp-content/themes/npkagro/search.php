<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package yatsyuk
 */

get_header(); ?>

	<section id="primary" class="content-area container-fluid">
        <div class="container">
            <div class="row">

                <main id="main" class="site-main col-sm-9" role="main">

                    <?php
                    if ( have_posts() ) : ?>

                        <header class="page-header">
                            <h1 class="page-title"><?php printf( esc_html__( 'Результати пошуку для "%s":', 'yatsyuk' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                        </header><!-- .page-header -->

                        <?php
                        /* Start the Loop */
                        while ( have_posts() ) : the_post();

                            /**
                             * Run the loop for the search to output the results.
                             * If you want to overload this in a child theme then include a file
                             * called content-search.php and that will be used instead.
                             */
                            get_template_part( 'template-parts/content', 'search' );

                        endwhile;

                        the_posts_navigation();

                    else :

                        get_template_part( 'template-parts/content', 'none' );

                    endif; ?>

                </main><!-- #main -->
                <?php get_sidebar(); ?>
            </div>
        </div>
	</section><!-- #primary -->

<?php

get_footer();