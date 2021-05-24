<?php
/**
 * w3layouts Theme Customizer
 *
 * @package w3layouts
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function w3layouts_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'w3layouts_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'w3layouts_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'w3layouts_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function w3layouts_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function w3layouts_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function w3layouts_customize_preview_js() {
	wp_enqueue_script( 'w3layouts-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'w3layouts_customize_preview_js' );

if ( class_exists( 'WP_Customize_Control' ) ) {

class Text_Editor_Custom_Control extends WP_Customize_Control
{
    public $type = 'textarea';
    /**
    ** Render the content on the theme customizer page
    */
    public function render_content() { ?>
        <label>
          <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
          <?php

            $settings = array(
              'media_buttons' => false,
							'editor_height' => 100, // In pixels, takes precedence and has no default value
    					'textarea_rows' => 10,
							'wpautop' => true,
					    'textarea_rows' => get_option('default_post_edit_rows', 10),
					    'tabindex' => '',
					    'editor_css' => '',
					    'editor_class' => '',
					    'teeny' => true,
					    'dfw' => true,
					    'tinymce' => array(
					     'theme_advanced_buttons1' => 'bold,italic,underline'
					    ),
					    'quicktags' => false
              );
            $this->filter_editor_setting_link();
            wp_editor($this->value(), $this->id, $settings );
          ?>
        </label>
    <?php
        do_action('admin_footer');
        do_action('admin_print_footer_scripts');
    }

    private function filter_editor_setting_link() {
        add_filter( 'the_editor', function( $output ) { return preg_replace( '/<textarea/', '<textarea ' . $this->get_link(), $output, 1 ); } );
    }
}

}
