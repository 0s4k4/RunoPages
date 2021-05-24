<?php
/**
 * w3layouts Theme Header Customizer
 *
 * @package w3layouts
 */

$w3layouts_Header_settings=new w3layouts_Header_customizer_settings();

class w3layouts_Header_customizer_settings {
	// Get our default values
	// private $defaults;

	public function __construct() {
		// add_action( 'customize_register', array( $this, 'w3layouts_about_cust_register' ) );
		add_action('customize_register', array($this, 'w3layouts_Header_panels'));

	}

	public function w3layouts_Header_panels($wp_customize) {
		$wp_customize->add_panel('Header_panel',
			array('title'=> __('Header Customize', 'w3layouts'),
				'priority'=> 30,
				'description'=> esc_html__('add and update Header data.', 'w3layouts')));

		$wp_customize->add_section('HeaderLogoType',
			array('title'=> __('Header Logo Settings', 'w3layouts'),
				'description'=> esc_html__('', 'w3layouts'),
				'panel'=> 'Header_panel'
			));

		$wp_customize->add_section('HeaderSearch',
			array('title'=> __('Header Search Popup', 'w3layouts'),
				'description'=> esc_html__('', 'w3layouts'),
				'panel'=> 'Header_panel'
			));

		$wp_customize->add_section('HeaderQuoteButton',
			array('title'=> __('Header Quote Button', 'w3layouts'),
				'description'=> esc_html__('', 'w3layouts'),
				'panel'=> 'Header_panel'
			));

		$wp_customize->add_section('HeaderDarkLight',
			array('title'=> __('Dark and Light Mode', 'w3layouts'),
				'description'=> esc_html__('', 'w3layouts'),
				'panel'=> 'Header_panel'
			));



		/** Header Logo section **/
		$wp_customize->add_setting('HeaderImageLogo',
			array('default'=> 0,
				'transport'=> 'refresh',
				'sanitize_callback'=> 'skyrocket_switch_sanitization'
			));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'HeaderImageLogo',
				array('label'=> __('Image Logo Required', 'w3layouts'),
					'section'=> 'HeaderLogoType',
					'settings'=> 'HeaderImageLogo',
					'priority'=> 1)));
		$wp_customize->selective_refresh->add_partial('HeaderImageLogo', array('selector'=> 'div.w3HeaderLogoEd', // You can also select a css class
			));

		/** Text Logo header section **/

		$wp_customize->add_setting('w3layoutsHeaderlogoText', array('default'=> '<span class="hny-log">A</span>dvisory',
				'transport'=> 'refresh', ));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'w3layoutsHeaderlogoText',
				array('label'=> __('Logo text', 'w3layouts'),
					'section'=> 'HeaderLogoType',
					'settings'=> 'w3layoutsHeaderlogoText',
					'priority'=> 1)));






		/** Header Search **/
		$wp_customize->add_setting('HeaderSearchRequired',
			array('default'=> 1,
				'transport'=> 'refresh',
				'sanitize_callback'=> 'skyrocket_switch_sanitization'
			));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'HeaderSearchRequired',
				array('label'=> __('Header Search Required', 'w3layouts'),
					'section'=> 'HeaderSearch',
					'settings'=> 'HeaderSearchRequired',
					'priority'=> 1)));
		$wp_customize->selective_refresh->add_partial('HeaderSearchRequired', array('selector'=> 'div.HeaderSearch', // You can also select a css class
			));

		// $wp_customize->add_setting('SearchFormUrl', array('default'=> 'https://app.hoverforms.com/Search/Submit/',
		// 		'transport'=> 'refresh',
		// 	));
		// $wp_customize->add_control(new WP_Customize_Control($wp_customize,
		// 		'SearchFormUrl',
		// 		array('label'=> __('form submit URL like Mailchimp or HoverForms', 'w3layouts'),
		// 			'section'=> 'HeaderSearch',
		// 			'settings'=> 'SearchFormUrl'
		// 		)));

		// $wp_customize->add_setting('HeaderSearchInput', array('default'=> 'Search',
		// 		'transport'=> 'refresh',
		// 	));
		// $wp_customize->add_control(new WP_Customize_Control($wp_customize,
		// 		'HeaderSearchInput',
		// 		array('label'=> __('Search input field value', 'w3layouts'),
		// 			'section'=> 'HeaderSearch',
		// 			'settings'=> 'HeaderSearchInput'
		// 		)));

		$wp_customize->add_setting('HeaderSearchPlaceHolder', array('default'=> 'Enter Keyword',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HeaderSearchPlaceHolder',
				array('label'=> __('Search input placeholder value', 'w3layouts'),
					'section'=> 'HeaderSearch',
					'settings'=> 'HeaderSearchPlaceHolder'
				)));



		/** toggle switch for light and dark theme **/

		$wp_customize->add_setting('DarkandLightModeRequired',
			array('default'=> 1,
				'transport'=> 'refresh',
				'sanitize_callback'=> 'skyrocket_switch_sanitization'
			));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'DarkandLightModeRequired',
				array('label'=> __('Dark and Light Mode Required', 'w3layouts'),
					'section'=> 'HeaderDarkLight',
					'settings'=> 'DarkandLightModeRequired',
					'priority'=> 1)));
		$wp_customize->selective_refresh->add_partial('DarkandLightModeRequired', array('selector'=> 'div.DarkandLight', // You can also select a css class
			));
		/** toggle switch for light and dark theme **/
	}

}