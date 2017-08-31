<?php
/**
 * npkagro Theme Customizer
 *
 * @package npkagro
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function npkagro_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'npkagro_customize_register' );

function control_custom_header_settings ($wp_customize){
    /**
     * Adding custom Banner
     */
    $wp_customize->add_section('header_section', array(
        'title' => 'Настройки заглавия сайта'
    ));

    $wp_customize->add_setting('banner_other');

    //banner in all pages except front

    $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'banner_other', array(
        'label' => 'Баннер в заглавии страниц',
        'section' => 'header_section',
        'settings' => 'banner_other',
        'width' => '2500',
        'height' => '856'
        )));
    /**
     * Adding custom Logo
     */
    $wp_customize->add_setting('logo');

    //banner in all pages except front

    $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'logo', array(
        'label' => 'Логотип',
        'section' => 'header_section',
        'settings' => 'logo',
        'width' => '432',
        'height' => '160'
    )));
    /**
     * Adding custom Logo WITH BG
     */
    $wp_customize->add_setting('logo_bg');

    //banner in all pages except front

    $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'logo_bg', array(
        'label' => 'Логотип c фоном',
        'section' => 'header_section',
        'settings' => 'logo_bg',
        'width' => '135',
        'height' => '50'
    )));

    /**
     * Adding custom Navigation Links Color
     */

    $wp_customize->add_setting('navigation_links_color', array(
        'default' => '#282c59',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'navigation_links_color', array(
        'label' => __('Цвет ссылок главного Меню', 'npkagro'),
        'section' => 'header_section',
        'settings' => 'navigation_links_color',
    ) ) );

    /**
     * Adding custom Home Page Background
     */
    $wp_customize->add_section('front_page', array(
        'title' => 'Настройки главной страницы'
    ));
    $wp_customize->add_setting('background_front');

    $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'background_front', array(
        'label' => 'Фоновое изображение на главной странице',
        'section' => 'front_page',
        'settings' => 'background_front',
        'width' => '2000',
        'height' => '1500'
    )));

    /**
     * Set color to content on front
     */
    $wp_customize->add_setting('front_content_color', array(
        'default' => '#282c59',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'front_content_color', array(
        'label' => __('Цвет текста главнй страницы', 'npkagro'),
        'section' => 'front_page',
        'settings' => 'front_content_color',
    ) ) );

    /**
     * Adding custom Information to Front-Page
     */
    $wp_customize->add_setting('information_front');

    $wp_customize->add_control('information_front',
        array(
            'label' => 'Введите заглавие',
            'section' => 'front_page',
            'type' => 'text',
        )
    );

    /**
     * Adding custom Information to Footer
     */

    $wp_customize->add_section('footer_section', array(
        'title' => 'Настройки подвала сайта'
    ));

    $wp_customize->add_setting('contacts_footer');

    $wp_customize->add_control('contacts_footer',
        array(
            'label' => 'Введите заголовок секции Контакты',
            'section' => 'footer_section',
            'type' => 'text',
        )
    );

    //Adding google maps

    $wp_customize->add_setting('how_to_footer');

    $wp_customize->add_control('how_to_footer',
        array(
            'label' => 'Введите заголовок секции Карты',
            'section' => 'footer_section',
            'type' => 'text',
        )
    );

    $wp_customize->add_setting('maps_footer');

    $wp_customize->add_control('maps_footer',
        array(
            'label' => 'Введите в поле ссылку с гугл карт',
            'section' => 'footer_section',
            'type' => 'text',
        )
    );

    // Text color
    $wp_customize->add_setting('text_footer', array(
        'default' => '#666666',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_footer', array(
        'label' => __('Цвет текста подвала', 'npkagro'),
        'section' => 'footer_section',
        'settings' => 'text_footer',
    ) ) );

    // Headers color
    $wp_customize->add_setting('headers_footer', array(
        'default' => '#40809b',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'headers_footer', array(
        'label' => __('Цвет заголовков в подвале', 'npkagro'),
        'section' => 'footer_section',
        'settings' => 'headers_footer',
    ) ) );

    // Headers border color
    $wp_customize->add_setting('headers_border_footer', array(
        'default' => '#cbd4d6',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'headers_border_footer', array(
        'label' => __('Цвет нижней линий под заголовками в подвале', 'npkagro'),
        'section' => 'footer_section',
        'settings' => 'headers_border_footer',
    ) ) );

    //BG color
    $wp_customize->add_setting('background_footer', array(
        'default' => '#ffffff',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'background_footer', array(
        'label' => __('Цвет фона подвала', 'npkagro'),
        'section' => 'footer_section',
        'settings' => 'background_footer',
    ) ) );

    //BG to Copyrights
    $wp_customize->add_setting('background_footer_copy');

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'background_footer_copy', array(
        'label' => __('Цвет секции копирайт', 'npkagro'),
        'section' => 'footer_section',
        'settings' => 'background_footer_copy',
    ) ) );

    //Copyrights text color
    $wp_customize->add_setting('text_footer_copy', array(
        'default' => '#666666',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_footer_copy', array(
        'label' => __('Цвет текста в Copyright', 'npkagro'),
        'section' => 'footer_section',
        'settings' => 'text_footer_copy',
    ) ) );

    /**
     * Site-main BG-color
     */

    $wp_customize->add_section('site_main_config', array(
        'title'=>'Настройки контента страниц',
    ));

    $wp_customize->add_setting('site_main_content_color', array(
        'default' => '#ffffff',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'site_main_content_color', array(
        'label' => __('Цвет фона страниц', 'npkagro'),
        'section' => 'site_main_config',
        'settings' => 'site_main_content_color',
    ) ) );

    /**
     * Site-main Headers color
     */

    $wp_customize->add_setting('site_main_header_color', array(
        'default' => '#000000',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'site_main_header_color', array(
        'label' => __('Цвет заголовка на страницах', 'npkagro'),
        'section' => 'site_main_config',
        'settings' => 'site_main_header_color',
    ) ) );

    /**
     * Site-main Products List color
     */

    $wp_customize->add_setting('site_main_product_list_color', array(
        'default' => '#000000',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'site_main_product_list_color', array(
        'label' => __('Цвет списка продуктов', 'npkagro'),
        'section' => 'site_main_config',
        'settings' => 'site_main_product_list_color',
    ) ) );

    /**
     * Site-main Products List bg color
     */
    $wp_customize->add_setting('site_main_product_list_background_color', array(
        'default' => '#ffffff',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'site_main_product_list_background_color', array(
        'label' => __('Цвет фона списка продуктов', 'npkagro'),
        'section' => 'site_main_config',
        'settings' => 'site_main_product_list_background_color',
    ) ) );
    /**
     * Site-main Products Title color
     */
    $wp_customize->add_setting('site_main_product_title_color', array(
        'default' => '#ffffff',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'site_main_product_title_color', array(
        'label' => __('Цвет заголовка списка продуктов', 'npkagro'),
        'section' => 'site_main_config',
        'settings' => 'site_main_product_title_color',
    ) ) );


}
add_action( 'customize_register', 'control_custom_header_settings' );

function control_customize_css() {

    global $post;
    if ( $post->post_name == home ) { ?>
        <style type="text/css">
            body{
                background: url("<?php echo wp_get_attachment_url(get_theme_mod('background_front')); ?>") center/cover no-repeat scroll;
            }
            @media screen and (min-width: 768px){
                body{
                    background: url("<?php echo wp_get_attachment_url(get_theme_mod('background_front')); ?>") left top/cover no-repeat scroll;
                }
            }
        </style>
        <?php
    } ?>
    <style type="text/css">
        .front-header{
            background: url("<?php echo wp_get_attachment_url(get_theme_mod('banner_front')); ?>") center/cover no-repeat;
        }
        .other-header{
            background: url("<?php echo wp_get_attachment_url(get_theme_mod('banner_other')); ?>") center/cover no-repeat;
        }
        .navbar .navbar-nav a, .navbar-light .site-title, .site-description, .phone-wrapper, .page-title{
            color: <?php echo get_theme_mod('navigation_links_color'); ?> ;
        }
        .front-content{
            color: <?php echo get_theme_mod('front_content_color'); ?> ;

        }
        <?php if ($post->post_name != home){ ?>

            #primary{
                background-color: <?php echo get_theme_mod('site_main_content_color'); ?> ;
            }

        <?php }; ?>
        .site-main .entry-title{
            color: <?php echo get_theme_mod('site_main_header_color'); ?> ;
        }
        .site-footer{
            background-color: <?php echo get_theme_mod('background_footer'); ?> ;
        }
        .site-footer .copyright{
            background: <?php echo get_theme_mod('background_footer_copy'); ?>;
        }
        .site-footer .contact-info-header{
            color: <?php echo get_theme_mod('headers_footer'); ?> ;
        }
        .site-footer .contact-info, .site-footer .services-cat-section{
            color: <?php echo get_theme_mod('text_footer'); ?> ;
        }

        .site-footer .copyright, .site-footer .copyright a{
            color: <?php echo get_theme_mod('text_footer_copy'); ?>;
        }
        .products-section li{
            color: <?php echo get_theme_mod('site_main_product_list_color'); ?>;
        }
        .products-section{
            background: <?php echo get_theme_mod('site_main_product_list_background_color'); ?>;
        }
        .products-section h3{
            color: <?php echo get_theme_mod('site_main_product_title_color'); ?>;
        }
    </style>

<?php }

add_action('wp_head', 'control_customize_css');

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function npkagro_customize_preview_js() {
	wp_enqueue_script( 'npkagro_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'npkagro_customize_preview_js' );
