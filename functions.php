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
    $theme_args = wp_get_theme();
    $meta = get_option('ovantis_admin_notice');
    $name = $theme_args->__get('Name');
    $current_screen = get_current_screen();

    if(!$meta) {
        if(is_network_admin() || !current_user_can('manage_options')) return;
        if($current_screen->base != 'appearance_page_ovantis-guide-page') {
            ?>
            <div class="notice notice-success ovantis-pro-promotion is-dismissible" style="border-left: 4px solid #2271b1; padding: 15px 20px; position: relative;">
                <style>
                    .ovantis-pro-promotion {
                        background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
                        border-radius: 8px;
                        margin: 15px 0;
                        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
                    }
                    .ovantis-pro-promotion h1 {
                        color: #1e293b;
                        margin: 10px 0 15px;
                        font-size: 24px;
                        font-weight: 700;
                    }
                    .ovantis-pro-promotion p {
                        font-size: 16px;
                        line-height: 1.6;
                        margin-bottom: 15px;
                        color: #475569;
                    }
                    .ovantis-pro-promotion .stars {
                        font-size: 22px;
                        color: #f59e0b;
                        margin-bottom: 5px;
                    }
                    .ovantis-pro-promotion .features-list {
                        display: grid;
                        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                        gap: 12px;
                        margin: 15px 0;
                    }
                    .ovantis-pro-promotion .feature-item {
                        display: flex;
                        align-items: center;
                        font-size: 14px;
                    }
                    .ovantis-pro-promotion .feature-icon {
                        color: #10b981;
                        margin-right: 8px;
                        font-weight: bold;
                    }
                    .ovantis-pro-promotion .cta-buttons {
                        display: flex;
                        gap: 10px;
                        margin-top: 20px;
                        flex-wrap: wrap;
                    }
                    .ovantis-pro-promotion .button-primary {
                        background: #10b981;
                        border-color: #10b981;
                        padding: 10px 20px;
                        font-weight: 600;
                        border-radius: 4px;
                        box-shadow: 0 2px 5px rgba(16, 185, 129, 0.3);
                    }
                    .ovantis-pro-promotion .button-primary:hover {
                        background: #059669;
                        border-color: #059669;
                        transform: translateY(-1px);
                        box-shadow: 0 4px 8px rgba(16, 185, 129, 0.4);
                    }
                    @media (max-width: 768px) {
                        .ovantis-pro-promotion .features-list {
                            grid-template-columns: 1fr;
                        }
                        .ovantis-pro-promotion .cta-buttons {
                            flex-direction: column;
                        }
                    }
                </style>
                
                <div class="stars">⭐⭐⭐⭐⭐</div>
                
                <h1><?php esc_html_e('Unlock the Full Power of Ovantis!', 'ovantis'); ?></h1>
                
                <p>You're using the <strong>free version</strong> of Ovantis. Upgrade to <strong>Ovantis PRO</strong> and unlock exclusive features that will transform your website!</p>
                
                <div class="features-list">
                    <div class="feature-item">
                        <span class="feature-icon">✓</span>
                        <span>Advanced customization options</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✓</span>
                        <span>Premium blocks and templates</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✓</span>
                        <span>Priority customer support</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✓</span>
                        <span>Regular updates and new features</span>
                    </div>
                </div>
                
                <div class="cta-buttons">
                    <a class="button button-primary" href="<?php echo esc_url( OVANTIS_BUY_NOW ); ?>" target="_blank">
                        <?php esc_html_e('Upgrade to PRO Now', 'ovantis'); ?>
                    </a>
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
