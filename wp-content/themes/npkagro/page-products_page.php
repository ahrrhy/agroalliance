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
        <main id="main" class="site-main container-fluid" role="main">

            <div class="container">
                <?php
                the_title( '<h1 class="entry-title">', '</h1>' );
                ?>
                <div class="row">

                    <section class="col-xs-12 col-md-3 products-section">


                        <?php
                        $terms = get_terms( array(
                            'taxonomy' => 'providers',
                        ));
                        foreach( $terms as $term ){
                            echo '<h3>' . $term->name . '</h3> ';

                            $tax_name = $term->name;
                            $args = array(
                                'post_type' => 'products',
                                'providers' => $tax_name,
                                'orderby' => 'name',
                                'order' => 'ASC',
                            );
                            $tax_query = new WP_Query($args);  ?>
                            <ul class="list-unstyled">
                            <?php
                            while ($tax_query->have_posts() ) : $tax_query->the_post(); ?>
                                <li>
                                    <h5>
                                        <a href="<?php echo get_permalink(); ?>"><?php the_title();?></a>
                                    </h5>
                                </li>
                            <?php endwhile; ?>
                            </ul>
                            <?php wp_reset_postdata(); ?>
                            <?php
                        }
                        ?>

                    </section>
                    <section class="content col-xs-12 col-md-9">
                        
                            <div class="row">

                                <?php
                                while ( have_posts() ) : the_post();

                                    get_template_part( 'template-parts/content', 'page' );

                                    // If comments are open or we have at least one comment, load up the comment template.
                                    if ( comments_open() || get_comments_number() ) :
                                        comments_template();
                                    endif;

                                endwhile; // End of the loop.
                                ?>


                            </div>

                    </section>



                </div>
            </div>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
