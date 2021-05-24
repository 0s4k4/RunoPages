<?php
/**
 * w3layouts Theme HomePage Customizer
 *
 * @package w3layouts
 */



$w3layouts_settings=new w3layouts_customizer_settings();

class w3layouts_customizer_settings {
	// Get our default values
	private $defaults;

	public function __construct() {
		// Get our Customizer defaults
		// $this->defaults = skyrocket_generate_defaults();

		// add_action( 'customize_register', array( $this, 'skyrocket_register_sample_custom_controls' ) );

		// Register our sample default controls
		add_action('customize_register', array($this, 'w3layouts_cust_register'));
		// add_action( 'customize_register', array( $this, 'skyrocket_add_customizer_panels' ) );
		add_action('customize_register', array($this, 'w3layouts_HomePage_panels'));



	}

	public function w3layouts_HomePage_panels($wp_customize) {
		/**
		 * Add our Header & Navigation Panel
		 */
		$wp_customize->add_panel('HomePage_panel',
			array('title'=> __('HomePage Customize', 'skyrocket'),
				'priority'=> 30,
				'description'=> esc_html__('add and update HomePage data.', 'skyrocket')));

		$wp_customize->add_section('HomePageHeroHeaderSection',
			array('title'=> __('HomePage Section 1 Hero Header', 'w3layouts'),
				'description'=> esc_html__('', 'w3layouts'),
				'panel'=> 'HomePage_panel'
			));

		$wp_customize->add_section('HomePageAboutSection',
			array('title'=> __('HomePage Section 2 About', 'w3layouts'),
				'description'=> esc_html__('', 'w3layouts'),
				'panel'=> 'HomePage_panel'
			));

		$wp_customize->add_section('HomePageServicesSection',
			array('title'=> __('HomePage Section 3 Services', 'w3layouts'),
				'description'=> esc_html__('', 'w3layouts'),
				'panel'=> 'HomePage_panel'
			));

		$wp_customize->add_section('HomePageCWPSection',
			array('title'=> __('HomePage Section 4 Content with Photo', 'w3layouts'),
				'description'=> esc_html__('', 'w3layouts'),
				'panel'=> 'HomePage_panel'
			));

		$wp_customize->add_section('HomePageStatsSection',
			array('title'=> __('HomePage Section 5 Stats', 'w3layouts'),
				'description'=> esc_html__('', 'w3layouts'),
				'panel'=> 'HomePage_panel'
			));

		$wp_customize->add_section('HomePageBlogGridsSection',
			array('title'=> __('HomePage Section 6 Blog Grids', 'w3layouts'),
				'description'=> esc_html__('', 'w3layouts'),
				'panel'=> 'HomePage_panel'
			));

		$wp_customize->add_section('HomePageCoverSection',
			array('title'=> __('HomePage Section 7 Cover', 'w3layouts'),
				'description'=> esc_html__('', 'w3layouts'),
				'panel'=> 'HomePage_panel'
			));

		$wp_customize->add_section('HomePageTestimonialsSection',
			array('title'=> __('HomePage Section 8 Testimonials', 'w3layouts'),
				'description'=> esc_html__('', 'w3layouts'),
				'panel'=> 'HomePage_panel'
			));





		/** HomePage Hero Header section starts **/

		$wp_customize->add_setting('HomePageHeroHeaderBgImage',
			array('default'=> '',
				'transport'=> 'refresh',
				'sanitize_callback'=> 'absint'
			));

		$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'HomePageHeroHeaderBgImage',
				array('label'=> __('Hero Header Bg Image'),
					'description'=> esc_html__(''),
					'section'=> 'HomePageHeroHeaderSection',
					'flex_width'=> false, // Optional. Default: false
					'flex_height'=> true, // Optional. Default: false
					'width'=> 1920, // Optional. Default: 150
					'height'=> 1279, // Optional. Default: 150
					'button_labels'=> array( // Optional.
						'select'=> __('Select Image'),
						'change'=> __('Change Image'),
						'remove'=> __('Remove'),
						'default'=> __('Default'),
						'placeholder'=> __('No image selected'),
						'frame_title'=> __('Select Image'),
						'frame_button'=> __('Choose Image'),
					))));

		$wp_customize->add_setting('HomePageHeroHeaderRequired',
			array('default'=> 1,
				'transport'=> 'refresh',
				'sanitize_callback'=> 'skyrocket_switch_sanitization'
			));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'HomePageHeroHeaderRequired',
				array('label'=> __('Homepage Hero Header Section Required', 'w3layouts'),
					'section'=> 'HomePageHeroHeaderSection',
					'settings'=> 'HomePageHeroHeaderRequired',
					'priority'=> 1)));

		$wp_customize->selective_refresh->add_partial('HomePageHeroHeaderRequired', array('selector'=> 'div.HomePageHeroHeader', // You can also select a css class
			));

		$wp_customize->add_setting('HomePageHeroHeaderTitleWord1', array('default'=> "Keeping",
				'transport'=> 'refresh',
			));

		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageHeroHeaderTitleWord1',
				array('label'=> __('Hero Header Title Word 1', 'w3layouts'),
					'section'=> 'HomePageHeroHeaderSection',
					'settings'=> 'HomePageHeroHeaderTitleWord1',
				)));

		$wp_customize->add_setting('HomePageHeroHeaderTitleTypingWords', array('default'=> "You in",
				'transport'=> 'refresh',
			));

		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageHeroHeaderTitleTypingWords',
				array('label'=> __('Hero Header Title Typing Words', 'w3layouts'),
					'section'=> 'HomePageHeroHeaderSection',
					'settings'=> 'HomePageHeroHeaderTitleTypingWords',
				)));

		$wp_customize->add_setting('HomePageHeroHeaderTitleLine2and3', array('default'=> "Touch with Your Customers.",
				'transport'=> 'refresh',
			));

		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageHeroHeaderTitleLine2and3',
				array('label'=> __('Hero Header Title Line 2 and 3', 'w3layouts'),
					'section'=> 'HomePageHeroHeaderSection',
					'settings'=> 'HomePageHeroHeaderTitleLine2and3',
				)));

		$wp_customize->add_setting('HomePageHeroHeaderpara', array('default'=> 'Modern Approach to Every New Project',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageHeroHeaderpara',
				array('label'=> __('Hero Header Content', 'w3layouts'),
					'section'=> 'HomePageHeroHeaderSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));

		$wp_customize->add_setting('HomePageHeroHeaderReadMoreBtnURL', array('default'=> 'about#url',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageHeroHeaderReadMoreBtnURL',
				array('label'=> __('Button 1 URL', 'w3layouts'),
					'section'=> 'HomePageHeroHeaderSection',
					'settings'=> 'HomePageHeroHeaderReadMoreBtnURL'
				)));

		$wp_customize->add_setting('HomePageHeroHeaderReadMoreBtnTxt', array('default'=> 'Read More',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageHeroHeaderReadMoreBtnTxt',
				array('label'=> __('Button 1 Text', 'w3layouts'),
					'section'=> 'HomePageHeroHeaderSection',
					'settings'=> 'HomePageHeroHeaderReadMoreBtnTxt'
				)));

		$wp_customize->add_setting('HomePageHeroHeaderContactBtnURL', array('default'=> 'contact#url',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageHeroHeaderContactBtnURL',
				array('label'=> __('Button 2 URL', 'w3layouts'),
					'section'=> 'HomePageHeroHeaderSection',
					'settings'=> 'HomePageHeroHeaderContactBtnURL'
				)));

		$wp_customize->add_setting('HomePageHeroHeaderContactBtnTxt', array('default'=> 'Contact Us',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageHeroHeaderContactBtnTxt',
				array('label'=> __('Button 2 Text', 'w3layouts'),
					'section'=> 'HomePageHeroHeaderSection',
					'settings'=> 'HomePageHeroHeaderContactBtnTxt'
				)));

		$wp_customize->add_setting('HomePageHeroHeaderPopupVideoUrl', array('default'=> 'https://player.vimeo.com/video/326582338',
				'transport'=> 'refresh', ));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageHeroHeaderPopupVideoUrl',
				array('label'=> __('Popup Video URL. YouTube or something smilar', 'w3layouts'),
					'section'=> 'HomePageHeroHeaderSection',
					'settings'=> 'HomePageHeroHeaderPopupVideoUrl'
				)));

		// HomePage Hero Header section top & bottom area textarea

		// $wp_customize->add_setting('HomePageHeroHeaderTopArea', array('default'=> '',
		// 		'transport'=> 'refresh',
		// 	));
		// $wp_customize->add_control(new WP_Customize_Control($wp_customize,
		// 		'HomePageHeroHeaderTopArea',
		// 		array('label'=> __('Hero Header Top', 'w3layouts'),
		// 			'section'=> 'HomePageHeroHeaderSection',
		// 			'type'=> 'textarea',
		// 			'input_attrs'=> array('class'=> 'my-custom-class',
		// 				'style'=> 'border: 1px solid #999',
		// 				'placeholder'=> __('Enter message...', 'w3layouts'),
		// 			),
		// 		)));

		$wp_customize->add_setting('HomePageHeroHeaderBottomArea', array('default'=> '',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageHeroHeaderBottomArea',
				array('label'=> __('Hero Header Bottom', 'w3layouts'),
					'section'=> 'HomePageHeroHeaderSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));

		// HomePage Hero Header section top & bottom area textarea

		/** HomePage Hero Header section ends **/






		/** HomePage About Section starts **/

		$wp_customize->add_setting('HomePageAboutSectionRequired',
			array('default'=> 1,
				'transport'=> 'refresh',
				'sanitize_callback'=> 'skyrocket_switch_sanitization'
			));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'HomePageAboutSectionRequired',
				array('label'=> __('HomePage About Section Required', 'w3layouts'),
					'section'=> 'HomePageAboutSection',
					'settings'=> 'HomePageAboutSectionRequired',
					'priority'=> 1)));

		$wp_customize->selective_refresh->add_partial('HomePageAboutSectionRequired', array('selector'=> 'div.HomePageAbout', // You can also select a css class
			));

		$wp_customize->add_setting('HomePageAboutLeftTitle', array('default'=> "We found our creative space that is open for you.",
				'transport'=> 'refresh',
			));

		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageAboutLeftTitle',
				array('label'=> __('HomePage About Left Title', 'w3layouts'),
					'section'=> 'HomePageAboutSection',
					'settings'=> 'HomePageAboutLeftTitle',
				)));

		$wp_customize->add_setting('HomePageAboutRightContent', array('default'=> "Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet elit. Non quae, fugiat nihil ad. Lorem ipsum dolor sit amet. Lorem ipsum init dolor sit, amet elit. Dolor ipsum non velit, culpa !Lorem ipsum init dolor sit",
'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageAboutRightContent',
				array('label'=> __('HomePage About Right Para', 'w3layouts'),
					'section'=> 'HomePageAboutSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));

		// HomePage About top & bottom area textarea

		$wp_customize->add_setting('HomePageAboutSectionTopArea', array('default'=> '',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageAboutSectionTopArea',
				array('label'=> __('HomePage About Top', 'w3layouts'),
					'section'=> 'HomePageAboutSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));

		$wp_customize->add_setting('HomePageAboutSectionBottomArea', array('default'=> '',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageAboutSectionBottomArea',
				array('label'=> __('HomePage About Bottom', 'w3layouts'),
					'section'=> 'HomePageAboutSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));
		// HomePage About top & bottom area textarea

		/** HomePage About Section ends **/






		/** HomePage Services section starts **/

		$wp_customize->add_setting('HomePageServicesRequired',
			array('default'=> 1,
				'transport'=> 'refresh',
				'sanitize_callback'=> 'skyrocket_switch_sanitization'
			));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'HomePageServicesRequired',
				array('label'=> __('HomePage Services Section Required', 'w3layouts'),
					'section'=> 'HomePageServicesSection',
					'settings'=> 'HomePageServicesRequired',
					'priority'=> 1)));

		$wp_customize->selective_refresh->add_partial('HomePageServicesRequired', array('selector'=> 'div.HomePageServices', // You can also select a css class
			));


		// service 1 grid starts
		$wp_customize->add_setting('HomePageService1Required',
			array('default'=> 1,
				'transport'=> 'refresh',
				'sanitize_callback'=> 'skyrocket_switch_sanitization'
			));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'HomePageService1Required',
				array('label'=> __('HomePage Service 1 Required', 'w3layouts'),
					'section'=> 'HomePageServicesSection',
					'settings'=> 'HomePageService1Required'
				)));

		$wp_customize->add_setting('HomePageService1Icon', array('default'=> 'fa fa-video-camera',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageService1Icon',
				array('label'=> __('HomePage Service 1 Icon', 'w3layouts'),
					'section'=> 'HomePageServicesSection',
					'settings'=> 'HomePageService1Icon'
				)));

		$wp_customize->add_setting('HomePageService1Url', array('default'=> '#url',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageService1Url',
				array('label'=> __('HomePage Service 1 Title URL', 'w3layouts'),
					'section'=> 'HomePageServicesSection',
					'settings'=> 'HomePageService1Url'
				)));

		$wp_customize->add_setting('HomePageService1Title', array('default'=> "Consulting",
				'transport'=> 'refresh',
			));

		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageService1Title',
				array('label'=> __('HomePage Service 1 Title', 'w3layouts'),
					'section'=> 'HomePageServicesSection',
					'settings'=> 'HomePageService1Title',
				)));

		$wp_customize->add_setting('HomePageService1Content', array('default'=> 'Lorem ipsum viverra feugiat. Pellen tesque libero ut justo.',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageService1Content',
				array('label'=> __('HomePage Service 1 Content', 'w3layouts'),
					'section'=> 'HomePageServicesSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));

		// service 1 grid ends


		// service 2 grid starts
		$wp_customize->add_setting('HomePageService2Required',
			array('default'=> 1,
				'transport'=> 'refresh',
				'sanitize_callback'=> 'skyrocket_switch_sanitization'
			));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'HomePageService2Required',
				array('label'=> __('HomePage Service 2 Required', 'w3layouts'),
					'section'=> 'HomePageServicesSection',
					'settings'=> 'HomePageService2Required'
				)));

		$wp_customize->add_setting('HomePageService2Icon', array('default'=> 'fa fa-tasks',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageService2Icon',
				array('label'=> __('HomePage Service 2 Icon', 'w3layouts'),
					'section'=> 'HomePageServicesSection',
					'settings'=> 'HomePageService2Icon'
				)));

		$wp_customize->add_setting('HomePageService2Url', array('default'=> '#url',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageService2Url',
				array('label'=> __('HomePage Service 2 Title URL', 'w3layouts'),
					'section'=> 'HomePageServicesSection',
					'settings'=> 'HomePageService2Url'
				)));

		$wp_customize->add_setting('HomePageService2Title', array('default'=> "Approach",
				'transport'=> 'refresh',
			));

		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageService2Title',
				array('label'=> __('HomePage Service 2 Title', 'w3layouts'),
					'section'=> 'HomePageServicesSection',
					'settings'=> 'HomePageService2Title',
				)));

		$wp_customize->add_setting('HomePageService2Content', array('default'=> 'Lorem ipsum viverra feugiat. Pellen tesque libero ut justo.',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageService2Content',
				array('label'=> __('HomePage Service 2 Content', 'w3layouts'),
					'section'=> 'HomePageServicesSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));

		// service 2 grid ends


		// service 3 grid starts
		$wp_customize->add_setting('HomePageService3Required',
			array('default'=> 1,
				'transport'=> 'refresh',
				'sanitize_callback'=> 'skyrocket_switch_sanitization'
			));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'HomePageService3Required',
				array('label'=> __('HomePage Service 3 Required', 'w3layouts'),
					'section'=> 'HomePageServicesSection',
					'settings'=> 'HomePageService3Required'
				)));

		$wp_customize->add_setting('HomePageService3Icon', array('default'=> 'fa fa-pencil-square-o',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageService3Icon',
				array('label'=> __('HomePage Service 3 Icon', 'w3layouts'),
					'section'=> 'HomePageServicesSection',
					'settings'=> 'HomePageService3Icon'
				)));

		$wp_customize->add_setting('HomePageService3Url', array('default'=> '#url',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageService3Url',
				array('label'=> __('HomePage Service 3 Title URL', 'w3layouts'),
					'section'=> 'HomePageServicesSection',
					'settings'=> 'HomePageService3Url'
				)));

		$wp_customize->add_setting('HomePageService3Title', array('default'=> "Management",
				'transport'=> 'refresh',
			));

		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageService3Title',
				array('label'=> __('HomePage Service 3 Title', 'w3layouts'),
					'section'=> 'HomePageServicesSection',
					'settings'=> 'HomePageService3Title',
				)));

		$wp_customize->add_setting('HomePageService3Content', array('default'=> 'Lorem ipsum viverra feugiat. Pellen tesque libero ut justo.',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageService3Content',
				array('label'=> __('HomePage Service 3 Content', 'w3layouts'),
					'section'=> 'HomePageServicesSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));

		// service 3 grid ends


		// service 4 grid starts
		$wp_customize->add_setting('HomePageService4Required',
			array('default'=> 1,
				'transport'=> 'refresh',
				'sanitize_callback'=> 'skyrocket_switch_sanitization'
			));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'HomePageService4Required',
				array('label'=> __('HomePage Service 4 Required', 'w3layouts'),
					'section'=> 'HomePageServicesSection',
					'settings'=> 'HomePageService4Required'
				)));

		$wp_customize->add_setting('HomePageService4Icon', array('default'=> 'fa fa-users',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageService4Icon',
				array('label'=> __('HomePage Service 4 Icon', 'w3layouts'),
					'section'=> 'HomePageServicesSection',
					'settings'=> 'HomePageService4Icon'
				)));

		$wp_customize->add_setting('HomePageService4Url', array('default'=> '#url',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageService4Url',
				array('label'=> __('HomePage Service 4 Title URL', 'w3layouts'),
					'section'=> 'HomePageServicesSection',
					'settings'=> 'HomePageService4Url'
				)));

		$wp_customize->add_setting('HomePageService4Title', array('default'=> "Market Research",
				'transport'=> 'refresh',
			));

		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageService4Title',
				array('label'=> __('HomePage Service 4 Title', 'w3layouts'),
					'section'=> 'HomePageServicesSection',
					'settings'=> 'HomePageService4Title',
				)));

		$wp_customize->add_setting('HomePageService4Content', array('default'=> 'Lorem ipsum viverra feugiat. Pellen tesque libero ut justo.',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageService4Content',
				array('label'=> __('HomePage Service 4 Content', 'w3layouts'),
					'section'=> 'HomePageServicesSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));

		// service 4 grid ends

		$wp_customize->add_setting('HomePageServicesTitle', array('default'=> "We found our creative space that is open for you.",
				'transport'=> 'refresh',
			));

		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageServicesTitle',
				array('label'=> __('HomePage Services Title', 'w3layouts'),
					'section'=> 'HomePageServicesSection',
					'settings'=> 'HomePageServicesTitle',
				)));

		$wp_customize->add_setting('HomePageServicesContent', array('default'=> "Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
		ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet
		elit. Non quae, fugiat nihil ad. Lorem ipsum dolor sit amet. Lorem ipsum init
		dolor sit, amet elit. Dolor ipsum non velit, culpa!",
'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageServicesContent',
				array('label'=> __('HomePage Services Para', 'w3layouts'),
					'section'=> 'HomePageServicesSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));

		$wp_customize->add_setting('HomePageServicesButtonUrl', array('default'=> '#url',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageServicesButtonUrl',
				array('label'=> __('HomePage Services Button URL', 'w3layouts'),
					'section'=> 'HomePageServicesSection',
					'settings'=> 'HomePageServicesButtonUrl'
				)));

		$wp_customize->add_setting('HomePageServicesButtonTxt', array('default'=> "Read More",
				'transport'=> 'refresh',
			));

		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageServicesButtonTxt',
				array('label'=> __('HomePage Services Button Text', 'w3layouts'),
					'section'=> 'HomePageServicesSection',
					'settings'=> 'HomePageServicesButtonTxt',
				)));

		// HomePage Services top & bottom area textarea

		$wp_customize->add_setting('HomePageServicesTopArea', array('default'=> '',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageServicesTopArea',
				array('label'=> __('HomePage Services Top', 'w3layouts'),
					'section'=> 'HomePageServicesSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));

		$wp_customize->add_setting('HomePageServicesBottomArea', array('default'=> '',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageServicesBottomArea',
				array('label'=> __('HomePage Services Bottom', 'w3layouts'),
					'section'=> 'HomePageServicesSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));
		// HomePage Services top & bottom area textarea

		/** HomePage Services section ends **/






		/** HomePage Content with Photo Section starts **/

		$wp_customize->add_setting('HomePageCWPSectionRequired',
			array('default'=> 1,
				'transport'=> 'refresh',
				'sanitize_callback'=> 'skyrocket_switch_sanitization'
			));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'HomePageCWPSectionRequired',
				array('label'=> __('HomePage Content with Photo Section Required', 'w3layouts'),
					'section'=> 'HomePageCWPSection',
					'settings'=> 'HomePageCWPSectionRequired',
					'priority'=> 1)));

		$wp_customize->add_setting('HomePageCWPImage1',
			array('default'=> '',
				'transport'=> 'refresh',
				'sanitize_callback'=> 'absint'
			));

		$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'HomePageCWPImage1',
				array('label'=> __('HomePage CWP Image 1'),
					'description'=> esc_html__(''),
					'section'=> 'HomePageCWPSection',
					'flex_width'=> false, // Optional. Default: false
					'flex_height'=> true, // Optional. Default: false
					'width'=> 300, // Optional. Default: 150
					'height'=> 400, // Optional. Default: 150
					'button_labels'=> array( // Optional.
						'select'=> __('Select Image'),
						'change'=> __('Change Image'),
						'remove'=> __('Remove'),
						'default'=> __('Default'),
						'placeholder'=> __('No image selected'),
						'frame_title'=> __('Select Image'),
						'frame_button'=> __('Choose Image'),
					))));

		$wp_customize->add_setting('HomePageCWPImage2',
			array('default'=> '',
				'transport'=> 'refresh',
				'sanitize_callback'=> 'absint'
			));

		$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'HomePageCWPImage2',
				array('label'=> __('HomePage CWP Image 2'),
					'description'=> esc_html__(''),
					'section'=> 'HomePageCWPSection',
					'flex_width'=> false, // Optional. Default: false
					'flex_height'=> true, // Optional. Default: false
					'width'=> 300, // Optional. Default: 150
					'height'=> 400, // Optional. Default: 150
					'button_labels'=> array( // Optional.
						'select'=> __('Select Image'),
						'change'=> __('Change Image'),
						'remove'=> __('Remove'),
						'default'=> __('Default'),
						'placeholder'=> __('No image selected'),
						'frame_title'=> __('Select Image'),
						'frame_button'=> __('Choose Image'),
					))));

		$wp_customize->selective_refresh->add_partial('HomePageCWPSectionRequired', array('selector'=> 'div.HomePageCWP', // You can also select a css class
			));

		$wp_customize->add_setting('HomePageCWPTitle', array('default'=> "We Work for Your Incredible Success",
				'transport'=> 'refresh',
			));

		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageCWPTitle',
				array('label'=> __('HomePage CWP Title', 'w3layouts'),
					'section'=> 'HomePageCWPSection',
					'settings'=> 'HomePageCWPTitle',
				)));

		$wp_customize->add_setting('HomePageCWPContent', array('default'=> "Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet.",
'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageCWPContent',
				array('label'=> __('HomePage CWP Para', 'w3layouts'),
					'section'=> 'HomePageCWPSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));

		$wp_customize->add_setting('HomePageCWPFeature1Required',
			array('default'=> 1,
				'transport'=> 'refresh',
				'sanitize_callback'=> 'skyrocket_switch_sanitization'
			));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'HomePageCWPFeature1Required',
				array('label'=> __('HomePage Content with Photo Feature 1 Required', 'w3layouts'),
					'section'=> 'HomePageCWPSection',
					'settings'=> 'HomePageCWPFeature1Required'
				)));

		$wp_customize->add_setting('HomePageCWPF1Title', array('default'=> "Our Mission",
				'transport'=> 'refresh',
			));

		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageCWPF1Title',
				array('label'=> __('HomePage CWP Feature 1 Title', 'w3layouts'),
					'section'=> 'HomePageCWPSection',
					'settings'=> 'HomePageCWPF1Title',
				)));

		$wp_customize->add_setting('HomePageCWPFeature1Content', array('default'=> "Pellen tesque libero ut justo,
ultrices in ligula.",
'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageCWPFeature1Content',
				array('label'=> __('HomePage CWP Feature 1 Para', 'w3layouts'),
					'section'=> 'HomePageCWPSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));

		$wp_customize->add_setting('HomePageCWPFeature2Required',
			array('default'=> 1,
				'transport'=> 'refresh',
				'sanitize_callback'=> 'skyrocket_switch_sanitization'
			));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'HomePageCWPFeature2Required',
				array('label'=> __('HomePage Content with Photo Feature 2 Required', 'w3layouts'),
					'section'=> 'HomePageCWPSection',
					'settings'=> 'HomePageCWPFeature2Required'
				)));

		$wp_customize->add_setting('HomePageCWPF2Title', array('default'=> "Our Vision",
				'transport'=> 'refresh',
			));

		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageCWPF2Title',
				array('label'=> __('HomePage CWP Feature 2 Title', 'w3layouts'),
					'section'=> 'HomePageCWPSection',
					'settings'=> 'HomePageCWPF2Title',
				)));

		$wp_customize->add_setting('HomePageCWPFeature2Content', array('default'=> "Pellen tesque libero ut justo,
ultrices in ligula.",
'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageCWPFeature2Content',
				array('label'=> __('HomePage CWP Feature 2 Para', 'w3layouts'),
					'section'=> 'HomePageCWPSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));

				// HomePage Content with Photo Section top & bottom area textarea
		
				$wp_customize->add_setting('HomePageCWPSectionTopArea', array('default'=> '',
						'transport'=> 'refresh',
					));
				$wp_customize->add_control(new WP_Customize_Control($wp_customize,
						'HomePageCWPSectionTopArea',
						array('label'=> __('HomePage Content with Photo Top', 'w3layouts'),
							'section'=> 'HomePageCWPSection',
							'type'=> 'textarea',
							'input_attrs'=> array('class'=> 'my-custom-class',
								'style'=> 'border: 1px solid #999',
								'placeholder'=> __('Enter message...', 'w3layouts'),
							),
						)));
		
				$wp_customize->add_setting('HomePageCWPSectionBottomArea', array('default'=> '',
						'transport'=> 'refresh',
					));
				$wp_customize->add_control(new WP_Customize_Control($wp_customize,
						'HomePageCWPSectionBottomArea',
						array('label'=> __('HomePage Content with Photo Bottom', 'w3layouts'),
							'section'=> 'HomePageCWPSection',
							'type'=> 'textarea',
							'input_attrs'=> array('class'=> 'my-custom-class',
								'style'=> 'border: 1px solid #999',
								'placeholder'=> __('Enter message...', 'w3layouts'),
							),
						)));
				// HomePage Content with Photo Section top & bottom area textarea

		/** HomePage Content with Photo Section ends **/





		/** Homepage stats section starts **/

		$wp_customize->add_setting('HomePageStatsRequired',
			array('default'=> 1,
				'transport'=> 'refresh',
				'sanitize_callback'=> 'skyrocket_switch_sanitization'
			));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'HomePageStatsRequired',
				array('label'=> __('Homepage Stats Section Required', 'w3layouts'),
					'section'=> 'HomePageStatsSection',
					'settings'=> 'HomePageStatsRequired',
					'priority'=> 1)));

		$wp_customize->selective_refresh->add_partial('HomePageStatsRequired', array('selector'=> 'div.HomePageStats', // You can also select a css class
			));

		// stats grid 1
		$wp_customize->add_setting('HomePageStatsGrid1Required',
			array('default'=> 1,
				'transport'=> 'refresh',
				'sanitize_callback'=> 'skyrocket_switch_sanitization'
			));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'HomePageStatsGrid1Required',
				array('label'=> __('Homepage Stats1 Required', 'w3layouts'),
					'section'=> 'HomePageStatsSection',
					'settings'=> 'HomePageStatsGrid1Required',
					'priority'=> 1)));

		$wp_customize->add_setting('HomePageStats1Icon', array('default'=> 'fa fa-clone',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageStats1Icon',
				array('label'=> __('Stats 1 Icon', 'w3layouts'),
					'section'=> 'HomePageStatsSection',
					'settings'=> 'HomePageStats1Icon'
				)));


		$wp_customize->add_setting('HomePageStats1Number', array('default'=> "15100",
				'transport'=> 'refresh',
			));

		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageStats1Number',
				array('label'=> __('Stats1 Number', 'w3layouts'),
					'section'=> 'HomePageStatsSection',
					'settings'=> 'HomePageStats1Number'
				)));

		$wp_customize->add_setting('HomePageStats1Desc', array('default'=> 'Total Projects',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageStats1Desc',
				array('label'=> __('Stats1 Content', 'w3layouts'),
					'section'=> 'HomePageStatsSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));

		// stats grid 1


		// stats grid 2
		$wp_customize->add_setting('HomePageStatsGrid2Required',
			array('default'=> 1,
				'transport'=> 'refresh',
				'sanitize_callback'=> 'skyrocket_switch_sanitization'
			));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'HomePageStatsGrid2Required',
				array('label'=> __('Homepage Stats2 Required', 'w3layouts'),
					'section'=> 'HomePageStatsSection',
					'settings'=> 'HomePageStatsGrid2Required'
				)));

		$wp_customize->add_setting('HomePageStats2Icon', array('default'=> 'fa fa-video-camera',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageStats2Icon',
				array('label'=> __('Stats 2 Icon', 'w3layouts'),
					'section'=> 'HomePageStatsSection',
					'settings'=> 'HomePageStats2Icon'
				)));


		$wp_customize->add_setting('HomePageStats2Number', array('default'=> "19256",
				'transport'=> 'refresh',
			));

		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageStats2Number',
				array('label'=> __('Stats2 Number', 'w3layouts'),
					'section'=> 'HomePageStatsSection',
					'settings'=> 'HomePageStats2Number'
				)));

		$wp_customize->add_setting('HomePageStats2Desc', array('default'=> 'Conferences',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageStats2Desc',
				array('label'=> __('Stats2 Content', 'w3layouts'),
					'section'=> 'HomePageStatsSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));

		// stats grid 2


		// stats grid 3
		$wp_customize->add_setting('HomePageStatsGrid3Required',
			array('default'=> 1,
				'transport'=> 'refresh',
				'sanitize_callback'=> 'skyrocket_switch_sanitization'
			));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'HomePageStatsGrid3Required',
				array('label'=> __('Homepage Stats3 Required', 'w3layouts'),
					'section'=> 'HomePageStatsSection',
					'settings'=> 'HomePageStatsGrid3Required'
				)));

		$wp_customize->add_setting('HomePageStats3Icon', array('default'=> 'fa fa-smile-o',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageStats3Icon',
				array('label'=> __('Stats 3 Icon', 'w3layouts'),
					'section'=> 'HomePageStatsSection',
					'settings'=> 'HomePageStats3Icon'
				)));


		$wp_customize->add_setting('HomePageStats3Number', array('default'=> "12100",
				'transport'=> 'refresh',
			));

		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageStats3Number',
				array('label'=> __('Stats3 Number', 'w3layouts'),
					'section'=> 'HomePageStatsSection',
					'settings'=> 'HomePageStats3Number'
				)));

		$wp_customize->add_setting('HomePageStats3Desc', array('default'=> 'Happy Clients',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageStats3Desc',
				array('label'=> __('Stats3 Content', 'w3layouts'),
					'section'=> 'HomePageStatsSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));

		// stats grid 3


		// stats grid 4
		$wp_customize->add_setting('HomePageStatsGrid4Required',
			array('default'=> 1,
				'transport'=> 'refresh',
				'sanitize_callback'=> 'skyrocket_switch_sanitization'
			));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'HomePageStatsGrid4Required',
				array('label'=> __('Homepage Stats4 Required', 'w3layouts'),
					'section'=> 'HomePageStatsSection',
					'settings'=> 'HomePageStatsGrid4Required'
				)));

		$wp_customize->add_setting('HomePageStats4Icon', array('default'=> 'fa fa-users',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageStats4Icon',
				array('label'=> __('Stats 4 Icon', 'w3layouts'),
					'section'=> 'HomePageStatsSection',
					'settings'=> 'HomePageStats4Icon'
				)));


		$wp_customize->add_setting('HomePageStats4Number', array('default'=> "2560",
				'transport'=> 'refresh',
			));

		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageStats4Number',
				array('label'=> __('Stats4 Number', 'w3layouts'),
					'section'=> 'HomePageStatsSection',
					'settings'=> 'HomePageStats4Number'
				)));

		$wp_customize->add_setting('HomePageStats4Desc', array('default'=> 'Satisfied
Partners',
'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageStats4Desc',
				array('label'=> __('Stats4 Content', 'w3layouts'),
					'section'=> 'HomePageStatsSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));

		// stats grid 4

		// Home Page Stats Section top & bottom  textarea

		$wp_customize->add_setting('HomePageStatsTopArea', array('default'=> '',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageStatsTopArea',
				array('label'=> __('Stats Top', 'w3layouts'),
					'section'=> 'HomePageStatsSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));

		$wp_customize->add_setting('HomePageStatsBottomArea', array('default'=> '',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageStatsBottomArea',
				array('label'=> __('Stats Bottom', 'w3layouts'),
					'section'=> 'HomePageStatsSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));

		// Home Page Stats Section top & bottom  textarea

		/** Homepage stats section ends **/




		/** Homepage Blog Grids section starts **/

		$wp_customize->add_setting('HomePageBlogGridsRequired',
			array('default'=> 1,
				'transport'=> 'refresh',
				'sanitize_callback'=> 'skyrocket_switch_sanitization'
			));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'HomePageBlogGridsRequired',
				array('label'=> __('Homepage Blog Grids Section Required', 'w3layouts'),
					'section'=> 'HomePageBlogGridsSection',
					'settings'=> 'HomePageBlogGridsRequired',
					'priority'=> 1)));

		$wp_customize->selective_refresh->add_partial('HomePageBlogGridsRequired', array('selector'=> 'div.HomePageBlogGrids', // You can also select a css class
			));

		$wp_customize->add_setting('HomePageBlogGridsTitle1', array('default'=> "Blog Posts",
				'transport'=> 'refresh',
			));

		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageBlogGridsTitle1',
				array('label'=> __('HomePage Blog Grids Title1', 'w3layouts'),
					'section'=> 'HomePageBlogGridsSection',
					'settings'=> 'HomePageBlogGridsTitle1'
				)));

		$wp_customize->add_setting('HomePageBlogGridsTitle2', array('default'=> "Take Charge Of Your Life",
				'transport'=> 'refresh',
			));

		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageBlogGridsTitle2',
				array('label'=> __('HomePage Blog Grids Title2', 'w3layouts'),
					'section'=> 'HomePageBlogGridsSection',
					'settings'=> 'HomePageBlogGridsTitle2'
				)));

		$wp_customize->add_setting('HomePageBlogGridsReadMoreBtnRequired',
			array('default'=> 1,
				'transport'=> 'refresh',
				'sanitize_callback'=> 'skyrocket_switch_sanitization'
			));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'HomePageBlogGridsReadMoreBtnRequired',
				array('label'=> __('Homepage Blog Grids Button Required', 'w3layouts'),
					'section'=> 'HomePageBlogGridsSection',
					'settings'=> 'HomePageBlogGridsReadMoreBtnRequired'
				)));

		$wp_customize->add_setting('HomePageBlogGridsButtonUrl', array('default'=> '/blog',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageBlogGridsButtonUrl',
				array('label'=> __('Homepage Blog Grids Button URL', 'w3layouts'),
					'section'=> 'HomePageBlogGridsSection',
					'settings'=> 'HomePageBlogGridsButtonUrl'
				)));


		$wp_customize->add_setting('HomePageBlogGridsButtontxt', array('default'=> 'Read More',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageBlogGridsButtontxt',
				array('label'=> __('Homepage Blog Grids Button Text', 'w3layouts'),
					'section'=> 'HomePageBlogGridsSection',
					'settings'=> 'HomePageBlogGridsButtontxt'
				)));

		// Home Page Blog Grids Section top & bottom  textarea

		$wp_customize->add_setting('HomePageBlogGridsTopArea', array('default'=> '',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageBlogGridsTopArea',
				array('label'=> __('Blog Grids Top', 'w3layouts'),
					'section'=> 'HomePageBlogGridsSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));

		$wp_customize->add_setting('HomePageBlogGridsBottomArea', array('default'=> '',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageBlogGridsBottomArea',
				array('label'=> __('Blog Grids Bottom', 'w3layouts'),
					'section'=> 'HomePageBlogGridsSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));

		// Home Page Blog Grids Section top & bottom  textarea

		/** Homepage Blog Grids section ends **/







		/** HomePage Cover section starts **/

		$wp_customize->add_setting('HomePageCoverRequired',
			array('default'=> 1,
				'transport'=> 'refresh',
				'sanitize_callback'=> 'skyrocket_switch_sanitization'
			));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'HomePageCoverRequired',
				array('label'=> __('HomePage Cover Section Required', 'w3layouts'),
					'section'=> 'HomePageCoverSection',
					'settings'=> 'HomePageCoverRequired',
					'priority'=> 1)));

		$wp_customize->selective_refresh->add_partial('HomePageCoverRequired', array('selector'=> 'div.HomePageCover', // You can also select a css class
			));

		$wp_customize->add_setting('HomePageCoverBgImage',
			array('default'=> '',
				'transport'=> 'refresh',
				'sanitize_callback'=> 'absint'
			));

		$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'HomePageCoverBgImage',
				array('label'=> __('HomePage Cover Bg Image'),
					'description'=> esc_html__(''),
					'section'=> 'HomePageCoverSection',
					'flex_width'=> false, // Optional. Default: false
					'flex_height'=> true, // Optional. Default: false
					'width'=> 1920, // Optional. Default: 150
					'height'=> 1080, // Optional. Default: 150
					'button_labels'=> array( // Optional.
						'select'=> __('Select Image'),
						'change'=> __('Change Image'),
						'remove'=> __('Remove'),
						'default'=> __('Default'),
						'placeholder'=> __('No image selected'),
						'frame_title'=> __('Select Image'),
						'frame_button'=> __('Choose Image'),
					))));

		$wp_customize->add_setting('HomePageCoverTitle1', array('default'=> "Strategy is at the
Heart of What We Do.",
'transport'=> 'refresh',
			));

		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageCoverTitle1',
				array('label'=> __('HomePage Cover Title 1', 'w3layouts'),
					'section'=> 'HomePageCoverSection',
					'settings'=> 'HomePageCoverTitle1',
				)));

		$wp_customize->add_setting('HomePageCoverContent', array('default'=> 'Lorem ipsum viverra feugiat. Pellen tesque libero ut justo, ultrices in
ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet elit.',
'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageCoverContent',
				array('label'=> __('HomePage Cover Content', 'w3layouts'),
					'section'=> 'HomePageCoverSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));

		$wp_customize->add_setting('HomePageCoverReadMoreButtontxt', array('default'=> 'Read More',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageCoverReadMoreButtontxt',
				array('label'=> __('Read More Button Text', 'w3layouts'),
					'section'=> 'HomePageCoverSection',
					'settings'=> 'HomePageCoverReadMoreButtontxt'
				)));

		$wp_customize->add_setting('HomePageCoverReadMoreButtonUrl', array('default'=> 'about#url',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageCoverReadMoreButtonUrl',
				array('label'=> __('Read More Button URL', 'w3layouts'),
					'section'=> 'HomePageCoverSection',
					'settings'=> 'HomePageCoverReadMoreButtonUrl'
				)));


		$wp_customize->add_setting('HomePageCoverContactButtontxt', array('default'=> 'Contact Us',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageCoverContactButtontxt',
				array('label'=> __('Contact Button Text', 'w3layouts'),
					'section'=> 'HomePageCoverSection',
					'settings'=> 'HomePageCoverContactButtontxt'
				)));

		$wp_customize->add_setting('HomePageCoverContactButtonUrl', array('default'=> 'contact#url',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageCoverContactButtonUrl',
				array('label'=> __('Contact Button URL', 'w3layouts'),
					'section'=> 'HomePageCoverSection',
					'settings'=> 'HomePageCoverContactButtonUrl'
				)));

		// HomePage Cover Section top & bottom  textarea

		$wp_customize->add_setting('HomePageCoverTopArea', array('default'=> '',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageCoverTopArea',
				array('label'=> __('Cover Top', 'w3layouts'),
					'section'=> 'HomePageCoverSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));

		$wp_customize->add_setting('HomePageCoverBottomArea', array('default'=> '',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageCoverBottomArea',
				array('label'=> __('Cover Bottom', 'w3layouts'),
					'section'=> 'HomePageCoverSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));

		// HomePage Cover Section top & bottom  textarea

		/** HomePage Cover section ends **/






		/** HomePage Testimonials starts **/

		$wp_customize->add_setting('HomePageTestimonialsRequired',
			array('default'=> 1,
				'transport'=> 'refresh',
				'sanitize_callback'=> 'skyrocket_switch_sanitization'
			));
		$wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'HomePageTestimonialsRequired',
				array('label'=> __('HomePage Testimonials Required', 'w3layouts'),
					'section'=> 'HomePageTestimonialsSection',
					'settings'=> 'HomePageTestimonialsRequired',
					'priority'=> 1)));
		$wp_customize->selective_refresh->add_partial('HomePageTestimonialsRequired', array('selector'=> 'div.HomePageTestimonials', // You can also select a css class
			));

		$wp_customize->add_setting('HomePageTestimonialsTitle1', array('default'=> "Testimonials",
				'transport'=> 'refresh',
			));

		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageTestimonialsTitle1',
				array('label'=> __('HomePage Testimonials Title 1', 'w3layouts'),
					'section'=> 'HomePageTestimonialsSection',
					'settings'=> 'HomePageTestimonialsTitle1',
				)));

		$wp_customize->add_setting('HomePageTestimonialsTitle2', array('default'=> "What People Say",
				'transport'=> 'refresh',
			));

		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageTestimonialsTitle2',
				array('label'=> __('HomePage Testimonials Title 2', 'w3layouts'),
					'section'=> 'HomePageTestimonialsSection',
					'settings'=> 'HomePageTestimonialsTitle2',
				)));


		// client 1

		$wp_customize->add_setting('HomePageTestimonialsMessage1', array('default'=> 'Lorem ipsum dolor sit amet int consectetur adipisicing elit. Velita beatae
		laudantium Quas minima sunt natus tempore, maiores aliquid modi felis vitae
		facere aperiam sequi optio lacinia id ipsum non velit, culpa.
		voluptate rem ullam dolore nisi est quasi, doloribus tempora.',
'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageTestimonialsMessage1',
				array('label'=> __('Client 1 Message', 'w3layouts'),
					'section'=> 'HomePageTestimonialsSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));

		$wp_customize->add_setting('HomePageTestimonialsClient1Name', array('default'=> 'Gloria Parker',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageTestimonialsClient1Name',
				array('label'=> __('Client 1 Name', 'w3layouts'),
					'section'=> 'HomePageTestimonialsSection',
					'settings'=> 'HomePageTestimonialsClient1Name'
				)));

		$wp_customize->add_setting('HomePageTestimonialsClient1Designation', array('default'=> 'Client Of Company',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageTestimonialsClient1Designation',
				array('label'=> __('Client 1 Designation', 'w3layouts'),
					'section'=> 'HomePageTestimonialsSection',
					'settings'=> 'HomePageTestimonialsClient1Designation'
				)));
		// client 1

		// client 2

		$wp_customize->add_setting('HomePageTestimonialsMessage2', array('default'=> 'Lorem ipsum dolor sit amet int consectetur adipisicing elit. Velita beatae
		laudantium Quas minima sunt natus tempore, maiores aliquid modi felis vitae
		facere aperiam sequi optio lacinia id ipsum non velit, culpa.
		voluptate rem ullam dolore nisi est quasi, doloribus tempora.',
'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageTestimonialsMessage2',
				array('label'=> __('Client 2 Message', 'w3layouts'),
					'section'=> 'HomePageTestimonialsSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));

		$wp_customize->add_setting('HomePageTestimonialsClient2Name', array('default'=> 'Tommy sakura',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageTestimonialsClient2Name',
				array('label'=> __('Client 2 Name', 'w3layouts'),
					'section'=> 'HomePageTestimonialsSection',
					'settings'=> 'HomePageTestimonialsClient2Name'
				)));

		$wp_customize->add_setting('HomePageTestimonialsClient2Designation', array('default'=> 'Client Of Company',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageTestimonialsClient2Designation',
				array('label'=> __('Client 2 Designation', 'w3layouts'),
					'section'=> 'HomePageTestimonialsSection',
					'settings'=> 'HomePageTestimonialsClient2Designation'
				)));
		// client 2

		// client 3

		$wp_customize->add_setting('HomePageTestimonialsMessage3', array('default'=> 'Lorem ipsum dolor sit amet int consectetur adipisicing elit. Velita beatae
		laudantium Quas minima sunt natus tempore, maiores aliquid modi felis vitae
		facere aperiam sequi optio lacinia id ipsum non velit, culpa.
		voluptate rem ullam dolore nisi est quasi, doloribus tempora.',
'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageTestimonialsMessage3',
				array('label'=> __('Client 3 Message', 'w3layouts'),
					'section'=> 'HomePageTestimonialsSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));

		$wp_customize->add_setting('HomePageTestimonialsClient3Name', array('default'=> 'Bruce Bailey',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageTestimonialsClient3Name',
				array('label'=> __('Client 3 Name', 'w3layouts'),
					'section'=> 'HomePageTestimonialsSection',
					'settings'=> 'HomePageTestimonialsClient3Name'
				)));

		$wp_customize->add_setting('HomePageTestimonialsClient3Designation', array('default'=> 'Client Of Company',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageTestimonialsClient3Designation',
				array('label'=> __('Client 3 Designation', 'w3layouts'),
					'section'=> 'HomePageTestimonialsSection',
					'settings'=> 'HomePageTestimonialsClient3Designation'
				)));
		// client 3

		// client 4

		$wp_customize->add_setting('HomePageTestimonialsMessage4', array('default'=> 'Lorem ipsum dolor sit amet int consectetur adipisicing elit. Velita beatae
		laudantium Quas minima sunt natus tempore, maiores aliquid modi felis vitae
		facere aperiam sequi optio lacinia id ipsum non velit, culpa.
		voluptate rem ullam dolore nisi est quasi, doloribus tempora.',
'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageTestimonialsMessage4',
				array('label'=> __('Client 4 Message', 'w3layouts'),
					'section'=> 'HomePageTestimonialsSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));

		$wp_customize->add_setting('HomePageTestimonialsClient4Name', array('default'=> 'Ruth Edwards',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageTestimonialsClient4Name',
				array('label'=> __('Client 4 Name', 'w3layouts'),
					'section'=> 'HomePageTestimonialsSection',
					'settings'=> 'HomePageTestimonialsClient4Name'
				)));

		$wp_customize->add_setting('HomePageTestimonialsClient4Designation', array('default'=> 'Client Of Company',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageTestimonialsClient4Designation',
				array('label'=> __('Client 4 Designation', 'w3layouts'),
					'section'=> 'HomePageTestimonialsSection',
					'settings'=> 'HomePageTestimonialsClient4Designation'
				)));
		// client 4

		// HomePage Testimonials top & bottom  area textarea

		$wp_customize->add_setting('HomePageTestimonialsTopArea', array('default'=> '',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageTestimonialsTopArea',
				array('label'=> __('Testimonials Top', 'w3layouts'),
					'section'=> 'HomePageTestimonialsSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));

		$wp_customize->add_setting('HomePageTestimonialsBottomArea', array('default'=> '',
				'transport'=> 'refresh',
			));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize,
				'HomePageTestimonialsBottomArea',
				array('label'=> __('Testimonials Bottom', 'w3layouts'),
					'section'=> 'HomePageTestimonialsSection',
					'type'=> 'textarea',
					'input_attrs'=> array('class'=> 'my-custom-class',
						'style'=> 'border: 1px solid #999',
						'placeholder'=> __('Enter message...', 'w3layouts'),
					),
				)));
		// HomePage Testimonials top & bottom  area textarea

		/** HomePage Testimonials ends **/



	}

	public function w3layouts_cust_register($wp_customize) {}



}