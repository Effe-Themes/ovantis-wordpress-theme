<?php
if ( ! function_exists( 'ovantis_setup' ) ) :
function ovantis_setup() {
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'editor-styles' );
}
endif;
add_action( 'after_setup_theme', 'ovantis_setup' );

function ovantis_theme_setup() {
    load_theme_textdomain( 'ovantis', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'ovantis_theme_setup' );

function ovantis_enqueue_styles_and_scripts() {
    $theme_version = wp_get_theme()->get( 'Version' );

    wp_enqueue_style( 'ovantis-normalize-css', get_template_directory_uri() . '/assets/css/normalize.css', array(), '1.0' );
    wp_enqueue_style( 'ovantis-blocks-style', get_template_directory_uri() . '/assets/css/block.css', array(), '1.0' );
    wp_enqueue_style( 'ovantis-style-css', get_stylesheet_uri(), array(), $theme_version );

    wp_enqueue_script( 'ovantis-custom-script', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'ovantis_enqueue_styles_and_scripts' );

require_once get_template_directory() . '/inc/core/init.php';
require get_template_directory() . '/inc/customizer.php';

if ( class_exists( 'WP_Customize_Section' ) ) {
    class Ovantis_Upsell_Section extends WP_Customize_Section {
        public $type = 'ovantis-upsell';
        public $button_text = '';
        public $url = '';
        public $background = '';
        public $text_color = '';

        protected function render() {
            $background = ! empty( $this->background ) ? esc_attr( $this->background ) : '#037e74';
            $text_color = ! empty( $this->text_color ) ? esc_attr( $this->text_color ) : '#fff';
            ?>
            <li id="accordion-section-<?php echo esc_attr( $this->id ); ?>" class="ovantis_upsell_section accordion-section control-section control-section-<?php echo esc_attr( $this->id ); ?> cannot-expand">
                <h3 class="accordion-section-title" style="border: 0; color:#fff; background:<?php echo esc_attr( $background ); ?>;">
                    <?php echo esc_html( $this->title ); ?>
                    <a href="<?php echo esc_url( $this->url ); ?>" class="button button-secondary alignright" target="_blank" style="margin-top: -4px;"><?php echo esc_html( $this->button_text ); ?></a>
                </h3>
            </li>
            <?php
        }
    }
}

require get_template_directory() . '/inc/get-started/get-started.php';

function ovantis_admin_notice() { 
    global $pagenow;
    $theme_args      = wp_get_theme();
    $meta            = get_option( 'ovantis_admin_notice' );
    $name            = $theme_args->__get( 'Name' );
    $current_screen  = get_current_screen();

    if ( ! $meta ) {
        if ( is_network_admin() || ! current_user_can( 'manage_options' ) ) return;
        if ( $current_screen->base != 'appearance_page_ovantis-guide-page' ) {
            ?>
            <div class="notice notice-success is-dismissible">
                <p>⭐⭐⭐⭐⭐</p>
                <h1><?php esc_html_e('Thanks for choosing Ovantis!', 'ovantis'); ?></h1>
                <p>Unlock exclusive features, advanced customization options, and premium support to take your site to the next level. Get started today and experience the full potential of the <b>Ovantis PRO</b>!</p>
                <div style="display: flex;">
                    <p>
                        <a class="button button-primary customize load-customize hide-if-no-customize" href="<?php echo esc_url( admin_url( 'themes.php?page=ovantis-guide-page' ) ); ?>"><?php esc_html_e('Get Started', 'ovantis'); ?></a>
                    </p>
                    <p><a href="?ovantis-dismissed" class="button button-secondary"><?php echo esc_html('Dismiss', 'ovantis'); ?></a></p>
                </div>
            </div>
            <?php
        }
    }
}
add_action( 'admin_notices', 'ovantis_admin_notice' );

function ovantis_notice_dismissed() {
    if ( isset( $_GET['ovantis-dismissed'] ) )
        update_option( 'ovantis_admin_notice', true );
}
add_action( 'admin_init', 'ovantis_notice_dismissed' );

if ( ! function_exists( 'ovantis_update_admin_notice' ) ) :
function ovantis_update_admin_notice() {
    if ( isset( $_GET['ovantis_admin_notice'] ) && $_GET['ovantis_admin_notice'] == '1' ) {
        update_option( 'ovantis_admin_notice', true );
    }
}
endif;
add_action( 'admin_init', 'ovantis_update_admin_notice' );

add_action( 'after_switch_theme', 'ovantis_getstart_setup_options' );
function ovantis_getstart_setup_options () {
    update_option( 'ovantis_admin_notice', false );
}

// Link constants without translations
define('OVANTIS_BUY_NOW', 'https://effethemes.com/themes/ovantis-wordpress-theme/');
define('OVANTIS_PRO_DEMO', 'https://preview.effethemes.com/ovantis-wordpress-theme/');
define('OVANTIS_REVIEW', 'https://wordpress.org/support/theme/ovantis/reviews/#new-post');
define('OVANTIS_SUPPORT', 'https://wordpress.org/support/theme/ovantis');
