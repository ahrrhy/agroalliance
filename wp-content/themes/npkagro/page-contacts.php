<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package yatsyuk
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main container-fluid <?php if (is_page('price')){ echo 'price'; } ?>" role="main">

            <div class="container">
                <?php
                the_title( '<h1 class="entry-title">', '</h1>' );
                ?>
                <div class="row">

                    <?php
                    while ( have_posts() ) : the_post();

                        get_template_part( 'template-parts/content', 'page' );


                    endwhile; // End of the loop.
                    ?>


                </div>
            </div>


        </main><!-- #main -->
    </div><!-- #primary -->




<?php
get_footer();
