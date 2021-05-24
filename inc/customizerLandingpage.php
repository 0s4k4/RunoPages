<?php
/**
 * w3layouts Theme Single Landing Page Customizer
 *
 * @package w3layouts
 */

$w3layouts_Landing_settings=new w3layouts_Landing_customizer_settings();

class w3layouts_Landing_customizer_settings {
    // Get our default values
    // private $defaults;

    public function __construct() {
        // add_action( 'customize_register', array( $this, 'w3layouts_Landing_cust_register' ) );
        add_action('customize_register', array($this, 'w3layouts_Landingpage_panels'));

    }

    public function w3layouts_Landingpage_panels($wp_customize) {
        /**
 		 * Add our Header & Navigation Panel
 		 */
        $wp_customize->add_panel('LandingPage_panel',
            array('title'=> __('Single Landing Page Customize', 'w3layouts'),
                'priority'=> 30,
                'description'=> esc_html__('add and update Landingpage data.', 'w3layouts')));

        $wp_customize->add_section('LandingPageHeroHeaderSection',
            array('title'=> __('LandingPage Section 1 Hero Header', 'w3layouts'),
                'description'=> esc_html__('', 'w3layouts'),
                'panel'=> 'LandingPage_panel'
            ));

        $wp_customize->add_section('LandingPageAboutSection',
            array('title'=> __('LandingPage Section 2 About', 'w3layouts'),
                'description'=> esc_html__('', 'w3layouts'),
                'panel'=> 'LandingPage_panel'
            ));

        $wp_customize->add_section('LandingPageServicesSection',
            array('title'=> __('LandingPage Section 3 Services', 'w3layouts'),
                'description'=> esc_html__('', 'w3layouts'),
                'panel'=> 'LandingPage_panel'
            ));

        $wp_customize->add_section('LandingPageCWPSection',
            array('title'=> __('LandingPage Section 4 Content with Photo', 'w3layouts'),
                'description'=> esc_html__('', 'w3layouts'),
                'panel'=> 'LandingPage_panel'
            ));

        $wp_customize->add_section('LandingPageStatsSection',
            array('title'=> __('LandingPage Section 5 Stats', 'w3layouts'),
                'description'=> esc_html__('', 'w3layouts'),
                'panel'=> 'LandingPage_panel'
            ));

        $wp_customize->add_section('LandingPageTeamSection',
            array('title'=> __('LandingPage Section 6 Team', 'w3layouts'),
                'description'=> esc_html__('', 'w3layouts'),
                'panel'=> 'LandingPage_panel'
            ));

        $wp_customize->add_section('LandingPageCoverSection',
            array('title'=> __('LandingPage Section 7 Cover', 'w3layouts'),
                'description'=> esc_html__('', 'w3layouts'),
                'panel'=> 'LandingPage_panel'
            ));

        $wp_customize->add_section('LandingPageBlogGridsSection',
            array('title'=> __('LandingPage Section 8 Blog Grids', 'w3layouts'),
                'description'=> esc_html__('', 'w3layouts'),
                'panel'=> 'LandingPage_panel'
            ));

        $wp_customize->add_section('LandingPageCover2Section',
            array('title'=> __('LandingPage Section 9 Cover 2', 'w3layouts'),
                'description'=> esc_html__('', 'w3layouts'),
                'panel'=> 'LandingPage_panel'
            ));

        $wp_customize->add_section('LandingPageTestimonialsSection',
            array('title'=> __('LandingPage Section 10 Testimonials', 'w3layouts'),
                'description'=> esc_html__('', 'w3layouts'),
                'panel'=> 'LandingPage_panel'
            ));

        $wp_customize->add_section('LandingPageContactSection',
            array('title'=> __('LandingPage Section 11 Contact', 'w3layouts'),
                'description'=> esc_html__('', 'w3layouts'),
                'panel'=> 'LandingPage_panel'
            ));

            $wp_customize->add_section('LandingPageContactForm',
              array('title'=> __('LandingPage Section 12 Contact Form', 'w3layouts'),
                'description'=> esc_html__('', 'w3layouts'),
                'panel'=> 'ContactPage_panel'
              ));

        $wp_customize->add_section('LandingPageContactMap',
            array('title'=> __('LandingPage Section 13 Contact map', 'w3layouts'),
                'description'=> esc_html__('', 'w3layouts'),
                'panel'=> 'LandingPage_panel'
            ));





        /** LandingPage Hero Header section starts **/

        $wp_customize->add_setting('LandingPageHeroHeaderBgImage',
            array('default'=> '',
                'transport'=> 'refresh',
                'sanitize_callback'=> 'absint'
            ));

        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'LandingPageHeroHeaderBgImage',
                array('label'=> __('Hero Header Bg Image'),
                    'description'=> esc_html__(''),
                    'section'=> 'LandingPageHeroHeaderSection',
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

        $wp_customize->add_setting('LandingPageHeroHeaderRequired',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageHeroHeaderRequired',
                array('label'=> __('LandingPage Hero Header Section Required', 'w3layouts'),
                    'section'=> 'LandingPageHeroHeaderSection',
                    'settings'=> 'LandingPageHeroHeaderRequired',
                    'priority'=> 1)));

        $wp_customize->selective_refresh->add_partial('LandingPageHeroHeaderRequired', array('selector'=> 'div.LandingPageHeroHeader', // You can also select a css class
            ));

        $wp_customize->add_setting('LandingPageHeroHeaderTitleWord1', array('default'=> "Keeping",
                'transport'=> 'refresh',
            ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageHeroHeaderTitleWord1',
                array('label'=> __('Hero Header Title Word 1', 'w3layouts'),
                    'section'=> 'LandingPageHeroHeaderSection',
                    'settings'=> 'LandingPageHeroHeaderTitleWord1',
                )));

        $wp_customize->add_setting('LandingPageHeroHeaderTitleTypingWords', array('default'=> "You in",
                'transport'=> 'refresh',
            ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageHeroHeaderTitleTypingWords',
                array('label'=> __('Hero Header Title Typing Words', 'w3layouts'),
                    'section'=> 'LandingPageHeroHeaderSection',
                    'settings'=> 'LandingPageHeroHeaderTitleTypingWords',
                )));

        $wp_customize->add_setting('LandingPageHeroHeaderTitleLine2and3', array('default'=> "Touch with Your Customers.",
                'transport'=> 'refresh',
            ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageHeroHeaderTitleLine2and3',
                array('label'=> __('Hero Header Title Line 2 and 3', 'w3layouts'),
                    'section'=> 'LandingPageHeroHeaderSection',
                    'settings'=> 'LandingPageHeroHeaderTitleLine2and3',
                )));

        $wp_customize->add_setting('LandingPageHeroHeaderpara', array('default'=> 'Modern Approach to Every New Project',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageHeroHeaderpara',
                array('label'=> __('Hero Header Content', 'w3layouts'),
                    'section'=> 'LandingPageHeroHeaderSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        $wp_customize->add_setting('LandingPageHeroHeaderReadMoreBtnURL', array('default'=> 'about#url',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageHeroHeaderReadMoreBtnURL',
                array('label'=> __('Button 1 URL', 'w3layouts'),
                    'section'=> 'LandingPageHeroHeaderSection',
                    'settings'=> 'LandingPageHeroHeaderReadMoreBtnURL'
                )));

        $wp_customize->add_setting('LandingPageHeroHeaderReadMoreBtnTxt', array('default'=> 'Read More',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageHeroHeaderReadMoreBtnTxt',
                array('label'=> __('Button 1 Text', 'w3layouts'),
                    'section'=> 'LandingPageHeroHeaderSection',
                    'settings'=> 'LandingPageHeroHeaderReadMoreBtnTxt'
                )));

        $wp_customize->add_setting('LandingPageHeroHeaderContactBtnURL', array('default'=> 'contact#url',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageHeroHeaderContactBtnURL',
                array('label'=> __('Button 2 URL', 'w3layouts'),
                    'section'=> 'LandingPageHeroHeaderSection',
                    'settings'=> 'LandingPageHeroHeaderContactBtnURL'
                )));

        $wp_customize->add_setting('LandingPageHeroHeaderContactBtnTxt', array('default'=> 'Contact Us',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageHeroHeaderContactBtnTxt',
                array('label'=> __('Button 2 Text', 'w3layouts'),
                    'section'=> 'LandingPageHeroHeaderSection',
                    'settings'=> 'LandingPageHeroHeaderContactBtnTxt'
                )));

        $wp_customize->add_setting('LandingPageHeroHeaderPopupVideoUrl', array('default'=> 'https://player.vimeo.com/video/326582338',
                'transport'=> 'refresh', ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageHeroHeaderPopupVideoUrl',
                array('label'=> __('Popup Video URL. YouTube or something smilar', 'w3layouts'),
                    'section'=> 'LandingPageHeroHeaderSection',
                    'settings'=> 'LandingPageHeroHeaderPopupVideoUrl'
                )));

        // LandingPage Hero Header section top & bottom area textarea

        $wp_customize->add_setting('LandingPageHeroHeaderTopArea', array('default'=> '',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageHeroHeaderTopArea',
                array('label'=> __('Hero Header Top', 'w3layouts'),
                    'section'=> 'LandingPageHeroHeaderSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        $wp_customize->add_setting('LandingPageHeroHeaderBottomArea', array('default'=> '',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageHeroHeaderBottomArea',
                array('label'=> __('Hero Header Bottom', 'w3layouts'),
                    'section'=> 'LandingPageHeroHeaderSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        // LandingPage Hero Header section top & bottom area textarea

        /** LandingPage Hero Header section ends **/






        /** LandingPage About Section starts **/

        $wp_customize->add_setting('LandingPageAboutSectionRequired',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageAboutSectionRequired',
                array('label'=> __('LandingPage About Section Required', 'w3layouts'),
                    'section'=> 'LandingPageAboutSection',
                    'settings'=> 'LandingPageAboutSectionRequired',
                    'priority'=> 1)));

        $wp_customize->selective_refresh->add_partial('LandingPageAboutSectionRequired', array('selector'=> 'div.LandingPageAbout', // You can also select a css class
            ));

        $wp_customize->add_setting('LandingPageAboutLeftTitle', array('default'=> "We found our creative space that is open for you.",
                'transport'=> 'refresh',
            ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageAboutLeftTitle',
                array('label'=> __('LandingPage About Left Title', 'w3layouts'),
                    'section'=> 'LandingPageAboutSection',
                    'settings'=> 'LandingPageAboutLeftTitle',
                )));

        $wp_customize->add_setting('LandingPageAboutRightContent', array('default'=> "Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet elit. Non quae, fugiat nihil ad. Lorem ipsum dolor sit amet. Lorem ipsum init dolor sit, amet elit. Dolor ipsum non velit, culpa !Lorem ipsum init dolor sit",
'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageAboutRightContent',
                array('label'=> __('LandingPage About Right Para', 'w3layouts'),
                    'section'=> 'LandingPageAboutSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        // LandingPage About top & bottom area textarea

        $wp_customize->add_setting('LandingPageAboutSectionTopArea', array('default'=> '',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageAboutSectionTopArea',
                array('label'=> __('LandingPage About Top', 'w3layouts'),
                    'section'=> 'LandingPageAboutSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        $wp_customize->add_setting('LandingPageAboutSectionBottomArea', array('default'=> '',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageAboutSectionBottomArea',
                array('label'=> __('LandingPage About Bottom', 'w3layouts'),
                    'section'=> 'LandingPageAboutSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));
        // LandingPage About top & bottom area textarea

        /** LandingPage About Section ends **/






        /** LandingPage Services section starts **/

        $wp_customize->add_setting('LandingPageServicesRequired',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageServicesRequired',
                array('label'=> __('LandingPage Services Section Required', 'w3layouts'),
                    'section'=> 'LandingPageServicesSection',
                    'settings'=> 'LandingPageServicesRequired',
                    'priority'=> 1)));

        $wp_customize->selective_refresh->add_partial('LandingPageServicesRequired', array('selector'=> 'div.LandingPageServices', // You can also select a css class
            ));


        // service 1 grid starts
        $wp_customize->add_setting('LandingPageService1Required',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageService1Required',
                array('label'=> __('LandingPage Service 1 Required', 'w3layouts'),
                    'section'=> 'LandingPageServicesSection',
                    'settings'=> 'LandingPageService1Required'
                )));

        $wp_customize->add_setting('LandingPageService1Icon', array('default'=> 'fa fa-video-camera',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageService1Icon',
                array('label'=> __('LandingPage Service 1 Icon', 'w3layouts'),
                    'section'=> 'LandingPageServicesSection',
                    'settings'=> 'LandingPageService1Icon'
                )));

        $wp_customize->add_setting('LandingPageService1Url', array('default'=> '#url',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageService1Url',
                array('label'=> __('LandingPage Service 1 Title URL', 'w3layouts'),
                    'section'=> 'LandingPageServicesSection',
                    'settings'=> 'LandingPageService1Url'
                )));

        $wp_customize->add_setting('LandingPageService1Title', array('default'=> "Consulting",
                'transport'=> 'refresh',
            ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageService1Title',
                array('label'=> __('LandingPage Service 1 Title', 'w3layouts'),
                    'section'=> 'LandingPageServicesSection',
                    'settings'=> 'LandingPageService1Title',
                )));

        $wp_customize->add_setting('LandingPageService1Content', array('default'=> 'Lorem ipsum viverra feugiat. Pellen tesque libero ut justo.',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageService1Content',
                array('label'=> __('LandingPage Service 1 Content', 'w3layouts'),
                    'section'=> 'LandingPageServicesSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        // service 1 grid ends


        // service 2 grid starts
        $wp_customize->add_setting('LandingPageService2Required',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageService2Required',
                array('label'=> __('LandingPage Service 2 Required', 'w3layouts'),
                    'section'=> 'LandingPageServicesSection',
                    'settings'=> 'LandingPageService2Required'
                )));

        $wp_customize->add_setting('LandingPageService2Icon', array('default'=> 'fa fa-tasks',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageService2Icon',
                array('label'=> __('LandingPage Service 2 Icon', 'w3layouts'),
                    'section'=> 'LandingPageServicesSection',
                    'settings'=> 'LandingPageService2Icon'
                )));

        $wp_customize->add_setting('LandingPageService2Url', array('default'=> '#url',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageService2Url',
                array('label'=> __('LandingPage Service 2 Title URL', 'w3layouts'),
                    'section'=> 'LandingPageServicesSection',
                    'settings'=> 'LandingPageService2Url'
                )));

        $wp_customize->add_setting('LandingPageService2Title', array('default'=> "Approach",
                'transport'=> 'refresh',
            ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageService2Title',
                array('label'=> __('LandingPage Service 2 Title', 'w3layouts'),
                    'section'=> 'LandingPageServicesSection',
                    'settings'=> 'LandingPageService2Title',
                )));

        $wp_customize->add_setting('LandingPageService2Content', array('default'=> 'Lorem ipsum viverra feugiat. Pellen tesque libero ut justo.',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageService2Content',
                array('label'=> __('LandingPage Service 2 Content', 'w3layouts'),
                    'section'=> 'LandingPageServicesSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        // service 2 grid ends


        // service 3 grid starts
        $wp_customize->add_setting('LandingPageService3Required',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageService3Required',
                array('label'=> __('LandingPage Service 3 Required', 'w3layouts'),
                    'section'=> 'LandingPageServicesSection',
                    'settings'=> 'LandingPageService3Required'
                )));

        $wp_customize->add_setting('LandingPageService3Icon', array('default'=> 'fa fa-pencil-square-o',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageService3Icon',
                array('label'=> __('LandingPage Service 3 Icon', 'w3layouts'),
                    'section'=> 'LandingPageServicesSection',
                    'settings'=> 'LandingPageService3Icon'
                )));

        $wp_customize->add_setting('LandingPageService3Url', array('default'=> '#url',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageService3Url',
                array('label'=> __('LandingPage Service 3 Title URL', 'w3layouts'),
                    'section'=> 'LandingPageServicesSection',
                    'settings'=> 'LandingPageService3Url'
                )));

        $wp_customize->add_setting('LandingPageService3Title', array('default'=> "Management",
                'transport'=> 'refresh',
            ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageService3Title',
                array('label'=> __('LandingPage Service 3 Title', 'w3layouts'),
                    'section'=> 'LandingPageServicesSection',
                    'settings'=> 'LandingPageService3Title',
                )));

        $wp_customize->add_setting('LandingPageService3Content', array('default'=> 'Lorem ipsum viverra feugiat. Pellen tesque libero ut justo.',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageService3Content',
                array('label'=> __('LandingPage Service 3 Content', 'w3layouts'),
                    'section'=> 'LandingPageServicesSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        // service 3 grid ends


        // service 4 grid starts
        $wp_customize->add_setting('LandingPageService4Required',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageService4Required',
                array('label'=> __('LandingPage Service 4 Required', 'w3layouts'),
                    'section'=> 'LandingPageServicesSection',
                    'settings'=> 'LandingPageService4Required'
                )));

        $wp_customize->add_setting('LandingPageService4Icon', array('default'=> 'fa fa-users',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageService4Icon',
                array('label'=> __('LandingPage Service 4 Icon', 'w3layouts'),
                    'section'=> 'LandingPageServicesSection',
                    'settings'=> 'LandingPageService4Icon'
                )));

        $wp_customize->add_setting('LandingPageService4Url', array('default'=> '#url',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageService4Url',
                array('label'=> __('LandingPage Service 4 Title URL', 'w3layouts'),
                    'section'=> 'LandingPageServicesSection',
                    'settings'=> 'LandingPageService4Url'
                )));

        $wp_customize->add_setting('LandingPageService4Title', array('default'=> "Market Research",
                'transport'=> 'refresh',
            ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageService4Title',
                array('label'=> __('LandingPage Service 4 Title', 'w3layouts'),
                    'section'=> 'LandingPageServicesSection',
                    'settings'=> 'LandingPageService4Title',
                )));

        $wp_customize->add_setting('LandingPageService4Content', array('default'=> 'Lorem ipsum viverra feugiat. Pellen tesque libero ut justo.',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageService4Content',
                array('label'=> __('LandingPage Service 4 Content', 'w3layouts'),
                    'section'=> 'LandingPageServicesSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        // service 4 grid ends

        $wp_customize->add_setting('LandingPageServicesTitle', array('default'=> "We found our creative space that is open for you.",
                'transport'=> 'refresh',
            ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageServicesTitle',
                array('label'=> __('LandingPage Services Title', 'w3layouts'),
                    'section'=> 'LandingPageServicesSection',
                    'settings'=> 'LandingPageServicesTitle',
                )));

        $wp_customize->add_setting('LandingPageServicesContent', array('default'=> "Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet elit. Non quae, fugiat nihil ad. Lorem ipsum dolor sit amet. Lorem ipsum init dolor sit, amet elit. Dolor ipsum non velit, culpa !",
'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageServicesContent1',
                array('label'=> __('LandingPage Services Para', 'w3layouts'),
                    'section'=> 'LandingPageServicesSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        $wp_customize->add_setting('LandingPageServicesButtonUrl', array('default'=> 'about#url',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageServicesButtonUrl',
                array('label'=> __('LandingPage Services Button URL', 'w3layouts'),
                    'section'=> 'LandingPageServicesSection',
                    'settings'=> 'LandingPageServicesButtonUrl'
                )));

        $wp_customize->add_setting('LandingPageServicesButtonTxt', array('default'=> "Read More",
                'transport'=> 'refresh',
            ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageServicesButtonTxt',
                array('label'=> __('LandingPage Services Button Text', 'w3layouts'),
                    'section'=> 'LandingPageServicesSection',
                    'settings'=> 'LandingPageServicesButtonTxt',
                )));

        // LandingPage Services top & bottom area textarea

        $wp_customize->add_setting('LandingPageServicesTopArea', array('default'=> '',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageServicesTopArea',
                array('label'=> __('LandingPage Services Top', 'w3layouts'),
                    'section'=> 'LandingPageServicesSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        $wp_customize->add_setting('LandingPageServicesBottomArea', array('default'=> '',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageServicesBottomArea',
                array('label'=> __('LandingPage Services Bottom', 'w3layouts'),
                    'section'=> 'LandingPageServicesSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));
        // LandingPage Services top & bottom area textarea

        /** LandingPage Services section ends **/






        /** LandingPage Content with Photo Section starts **/

        $wp_customize->add_setting('LandingPageCWPSectionRequired',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageCWPSectionRequired',
                array('label'=> __('LandingPage Content with Photo Section Required', 'w3layouts'),
                    'section'=> 'LandingPageCWPSection',
                    'settings'=> 'LandingPageCWPSectionRequired',
                    'priority'=> 1)));

        $wp_customize->add_setting('LandingPageCWPImage1',
            array('default'=> '',
                'transport'=> 'refresh',
                'sanitize_callback'=> 'absint'
            ));

        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'LandingPageCWPImage1',
                array('label'=> __('LandingPage CWP Image 1'),
                    'description'=> esc_html__(''),
                    'section'=> 'LandingPageCWPSection',
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

        $wp_customize->add_setting('LandingPageCWPImage2',
            array('default'=> '',
                'transport'=> 'refresh',
                'sanitize_callback'=> 'absint'
            ));

        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'LandingPageCWPImage2',
                array('label'=> __('LandingPage CWP Image 2'),
                    'description'=> esc_html__(''),
                    'section'=> 'LandingPageCWPSection',
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

        $wp_customize->selective_refresh->add_partial('LandingPageCWPSectionRequired', array('selector'=> 'div.LandingPageCWP', // You can also select a css class
            ));

        $wp_customize->add_setting('LandingPageCWPTitle', array('default'=> "We Work for Your Incredible Success",
                'transport'=> 'refresh',
            ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageCWPTitle',
                array('label'=> __('LandingPage CWP Title', 'w3layouts'),
                    'section'=> 'LandingPageCWPSection',
                    'settings'=> 'LandingPageCWPTitle',
                )));

        $wp_customize->add_setting('LandingPageCWPContent', array('default'=> "Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet.",
'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageCWPContent',
                array('label'=> __('LandingPage CWP Para', 'w3layouts'),
                    'section'=> 'LandingPageCWPSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        $wp_customize->add_setting('LandingPageCWPFeature1Required',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageCWPFeature1Required',
                array('label'=> __('LandingPage Content with Photo Feature 1 Required', 'w3layouts'),
                    'section'=> 'LandingPageCWPSection',
                    'settings'=> 'LandingPageCWPFeature1Required'
                )));

        $wp_customize->add_setting('LandingPageCWPF1Title', array('default'=> "Our Mission",
                'transport'=> 'refresh',
            ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageCWPF1Title',
                array('label'=> __('LandingPage CWP Feature 1 Title', 'w3layouts'),
                    'section'=> 'LandingPageCWPSection',
                    'settings'=> 'LandingPageCWPF1Title',
                )));

        $wp_customize->add_setting('LandingPageCWPFeature1Content', array('default'=> "Pellen tesque libero ut justo,
ultrices in ligula.",
'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageCWPFeature1Content',
                array('label'=> __('LandingPage CWP Feature 1 Para', 'w3layouts'),
                    'section'=> 'LandingPageCWPSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        $wp_customize->add_setting('LandingPageCWPFeature2Required',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageCWPFeature2Required',
                array('label'=> __('LandingPage Content with Photo Feature 2 Required', 'w3layouts'),
                    'section'=> 'LandingPageCWPSection',
                    'settings'=> 'LandingPageCWPFeature2Required'
                )));

        $wp_customize->add_setting('LandingPageCWPF2Title', array('default'=> "Our Vision",
                'transport'=> 'refresh',
            ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageCWPF2Title',
                array('label'=> __('LandingPage CWP Feature 2 Title', 'w3layouts'),
                    'section'=> 'LandingPageCWPSection',
                    'settings'=> 'LandingPageCWPF2Title',
                )));

        $wp_customize->add_setting('LandingPageCWPFeature2Content', array('default'=> "Pellen tesque libero ut justo,
ultrices in ligula.",
'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageCWPFeature2Content',
                array('label'=> __('LandingPage CWP Feature 2 Para', 'w3layouts'),
                    'section'=> 'LandingPageCWPSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        /** LandingPage Content with Photo Section ends **/





        /** LandingPage stats section starts **/

        $wp_customize->add_setting('LandingPageStatsRequired',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageStatsRequired',
                array('label'=> __('LandingPage Stats Section Required', 'w3layouts'),
                    'section'=> 'LandingPageStatsSection',
                    'settings'=> 'LandingPageStatsRequired',
                    'priority'=> 1)));

        $wp_customize->selective_refresh->add_partial('LandingPageStatsRequired', array('selector'=> 'div.LandingPageStats', // You can also select a css class
            ));

        // stats grid 1
        $wp_customize->add_setting('LandingPageStatsGrid1Required',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageStatsGrid1Required',
                array('label'=> __('LandingPage Stats1 Required', 'w3layouts'),
                    'section'=> 'LandingPageStatsSection',
                    'settings'=> 'LandingPageStatsGrid1Required',
                    'priority'=> 1)));

        $wp_customize->add_setting('LandingPageStats1Icon', array('default'=> 'fa fa-clone',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageStats1Icon',
                array('label'=> __('Stats 1 Icon', 'w3layouts'),
                    'section'=> 'LandingPageStatsSection',
                    'settings'=> 'LandingPageStats1Icon'
                )));


        $wp_customize->add_setting('LandingPageStats1Number', array('default'=> "15100",
                'transport'=> 'refresh',
            ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageStats1Number',
                array('label'=> __('Stats1 Number', 'w3layouts'),
                    'section'=> 'LandingPageStatsSection',
                    'settings'=> 'LandingPageStats1Number'
                )));

        $wp_customize->add_setting('LandingPageStats1Desc', array('default'=> 'Total Projects',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageStats1Desc',
                array('label'=> __('Stats1 Content', 'w3layouts'),
                    'section'=> 'LandingPageStatsSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        // stats grid 1


        // stats grid 2
        $wp_customize->add_setting('LandingPageStatsGrid2Required',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageStatsGrid2Required',
                array('label'=> __('LandingPage Stats2 Required', 'w3layouts'),
                    'section'=> 'LandingPageStatsSection',
                    'settings'=> 'LandingPageStatsGrid2Required'
                )));

        $wp_customize->add_setting('LandingPageStats2Icon', array('default'=> 'fa fa-video-camera',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageStats2Icon',
                array('label'=> __('Stats 2 Icon', 'w3layouts'),
                    'section'=> 'LandingPageStatsSection',
                    'settings'=> 'LandingPageStats2Icon'
                )));


        $wp_customize->add_setting('LandingPageStats2Number', array('default'=> "19256",
                'transport'=> 'refresh',
            ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageStats2Number',
                array('label'=> __('Stats2 Number', 'w3layouts'),
                    'section'=> 'LandingPageStatsSection',
                    'settings'=> 'LandingPageStats2Number'
                )));

        $wp_customize->add_setting('LandingPageStats2Desc', array('default'=> 'Conferences',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageStats2Desc',
                array('label'=> __('Stats2 Content', 'w3layouts'),
                    'section'=> 'LandingPageStatsSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        // stats grid 2


        // stats grid 3
        $wp_customize->add_setting('LandingPageStatsGrid3Required',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageStatsGrid3Required',
                array('label'=> __('LandingPage Stats3 Required', 'w3layouts'),
                    'section'=> 'LandingPageStatsSection',
                    'settings'=> 'LandingPageStatsGrid3Required'
                )));

        $wp_customize->add_setting('LandingPageStats3Icon', array('default'=> 'fa fa-smile-o',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageStats3Icon',
                array('label'=> __('Stats 3 Icon', 'w3layouts'),
                    'section'=> 'LandingPageStatsSection',
                    'settings'=> 'LandingPageStats3Icon'
                )));


        $wp_customize->add_setting('LandingPageStats3Number', array('default'=> "12100",
                'transport'=> 'refresh',
            ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageStats3Number',
                array('label'=> __('Stats3 Number', 'w3layouts'),
                    'section'=> 'LandingPageStatsSection',
                    'settings'=> 'LandingPageStats3Number'
                )));

        $wp_customize->add_setting('LandingPageStats3Desc', array('default'=> 'Happy Clients',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageStats3Desc',
                array('label'=> __('Stats3 Content', 'w3layouts'),
                    'section'=> 'LandingPageStatsSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        // stats grid 3


        // stats grid 4
        $wp_customize->add_setting('LandingPageStatsGrid4Required',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageStatsGrid4Required',
                array('label'=> __('LandingPage Stats4 Required', 'w3layouts'),
                    'section'=> 'LandingPageStatsSection',
                    'settings'=> 'LandingPageStatsGrid4Required'
                )));

        $wp_customize->add_setting('LandingPageStats4Icon', array('default'=> 'fa fa-users',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageStats4Icon',
                array('label'=> __('Stats 4 Icon', 'w3layouts'),
                    'section'=> 'LandingPageStatsSection',
                    'settings'=> 'LandingPageStats4Icon'
                )));


        $wp_customize->add_setting('LandingPageStats4Number', array('default'=> "2560",
                'transport'=> 'refresh',
            ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageStats4Number',
                array('label'=> __('Stats4 Number', 'w3layouts'),
                    'section'=> 'LandingPageStatsSection',
                    'settings'=> 'LandingPageStats4Number'
                )));

        $wp_customize->add_setting('LandingPageStats4Desc', array('default'=> 'Satisfied
Partners',
'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageStats4Desc',
                array('label'=> __('Stats4 Content', 'w3layouts'),
                    'section'=> 'LandingPageStatsSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        // stats grid 4

        // Home Page Stats Section top & bottom  textarea

        $wp_customize->add_setting('LandingPageStatsTopArea', array('default'=> '',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageStatsTopArea',
                array('label'=> __('Stats Top', 'w3layouts'),
                    'section'=> 'LandingPageStatsSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        $wp_customize->add_setting('LandingPageStatsBottomArea', array('default'=> '',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageStatsBottomArea',
                array('label'=> __('Stats Bottom', 'w3layouts'),
                    'section'=> 'LandingPageStatsSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        // Home Page Stats Section top & bottom  textarea

        /** LandingPage stats section ends **/







        /** LandingPage Team starts **/

        $wp_customize->add_setting('LandingPageTeamRequired',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageTeamRequired',
                array('label'=> __('LandingPage Team Required', 'w3layouts'),
                    'section'=> 'LandingPageTeamSection',
                    'settings'=> 'LandingPageTeamRequired',
                    'priority'=> 1)));
        $wp_customize->selective_refresh->add_partial('LandingPageTeamRequired', array('selector'=> 'div.LandingPageTeam', // You can also select a css class
            ));

        $wp_customize->add_setting('LandingPageTeamTitle1', array('default'=> 'Strongest Team',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageTeamTitle1',
                array('label'=> __('Team Title 1', 'w3layouts'),
                    'section'=> 'LandingPageTeamSection',
                    'settings'=> 'LandingPageTeamTitle1'
                )));

        $wp_customize->add_setting('LandingPageTeamTitle2', array('default'=> 'Meet our team',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageTeamTitle2',
                array('label'=> __('Team Title 2', 'w3layouts'),
                    'section'=> 'LandingPageTeamSection',
                    'settings'=> 'LandingPageTeamTitle2'
                )));


        // Team 1
        $wp_customize->add_setting('LandingPageTeam1Required',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageTeam1Required',
                array('label'=> __('Team 1 Required', 'w3layouts'),
                    'section'=> 'LandingPageTeamSection',
                    'settings'=> 'LandingPageTeam1Required'
                )));

        $wp_customize->add_setting('LandingPageTeam1Image',
            array('default'=> '',
                'transport'=> 'refresh',
                'sanitize_callback'=> 'absint'
            ));

        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'LandingPageTeam1Image',
                array('label'=> __('Team 1 image'),
                    'description'=> esc_html__(''),
                    'section'=> 'LandingPageTeamSection',
                    'flex_width'=> false, // Optional. Default: false
                    'flex_height'=> true, // Optional. Default: false
                    'width'=> 450, // Optional. Default: 150
                    'height'=> 500, // Optional. Default: 150
                    'button_labels'=> array( // Optional.
                        'select'=> __('Select Image'),
                        'change'=> __('Change Image'),
                        'remove'=> __('Remove'),
                        'default'=> __('Default'),
                        'placeholder'=> __('No image selected'),
                        'frame_title'=> __('Select Image'),
                        'frame_button'=> __('Choose Image'),
                    ))));

        $wp_customize->add_setting('LandingPageTeam1Title', array('default'=> 'Daniel jacobs',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageTeam1Title',
                array('label'=> __('Team 1 Name', 'w3layouts'),
                    'section'=> 'LandingPageTeamSection',
                    'settings'=> 'LandingPageTeam1Title'
                )));

        $wp_customize->add_setting('LandingPageTeam1TitleUrl', array('default'=> '#url',
                'transport'=> 'refresh', ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageTeam1TitleUrl',
                array('label'=> __('Team 1 Title URL', 'w3layouts'),
                    'section'=> 'LandingPageTeamSection',
                    'settings'=> 'LandingPageTeam1TitleUrl'
                )));

        $wp_customize->add_setting('LandingPageTeam1Designation', array('default'=> 'Markrting Officer',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageTeam1Designation',
                array('label'=> __('Team 1 Designation', 'w3layouts'),
                    'section'=> 'LandingPageTeamSection',
                    'settings'=> 'LandingPageTeam1Designation'
                )));

        $wp_customize->add_setting('LandingPageTeam1SocialFacebook',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageTeam1SocialFacebook',
                array('label'=> __('Team 1 Facebook Required', 'w3layouts'),
                    'section'=> 'LandingPageTeamSection',
                    'settings'=> 'LandingPageTeam1SocialFacebook'
                )));

        $wp_customize->add_setting('LandingPageTeam1SocialFacebookURL', array('default'=> 'https://www.facebook.com/w3layouts/',
                'transport'=> 'refresh', ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageTeam1SocialFacebookURL',
                array('label'=> __('Team 1 FaceBook URL', 'w3layouts'),
                    'section'=> 'LandingPageTeamSection',
                    'settings'=> 'LandingPageTeam1SocialFacebookURL'
                )));

        $wp_customize->add_setting('LandingPageTeam1SocialTwitter',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageTeam1SocialTwitter',
                array('label'=> __('Team 1 Twitter Required', 'w3layouts'),
                    'section'=> 'LandingPageTeamSection',
                    'settings'=> 'LandingPageTeam1SocialTwitter'
                )));

        $wp_customize->add_setting('LandingPageTeam1SocialTwitterURL', array('default'=> 'https://twitter.com/W3layouts',
                'transport'=> 'refresh', ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageTeam1SocialTwitterURL',
                array('label'=> __('Team 1 Twitter URL', 'w3layouts'),
                    'section'=> 'LandingPageTeamSection',
                    'settings'=> 'LandingPageTeam1SocialTwitterURL'
                )));

        $wp_customize->add_setting('LandingPageTeam1SocialInstagram',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageTeam1SocialInstagram',
                array('label'=> __('Team 1 Instagram Required', 'w3layouts'),
                    'section'=> 'LandingPageTeamSection',
                    'settings'=> 'LandingPageTeam1SocialInstagram'
                )));

        $wp_customize->add_setting('LandingPageTeam1SocialInstagramURL', array('default'=> 'https://www.instagram.com/w3layouts_/',
                'transport'=> 'refresh', ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageTeam1SocialInstagramURL',
                array('label'=> __('Team 1 Instagram URL', 'w3layouts'),
                    'section'=> 'LandingPageTeamSection',
                    'settings'=> 'LandingPageTeam1SocialInstagramURL'
                )));
        // Team 1


        // Team 2
        $wp_customize->add_setting('LandingPageTeam2Required',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageTeam2Required',
                array('label'=> __('Team 2 Required', 'w3layouts'),
                    'section'=> 'LandingPageTeamSection',
                    'settings'=> 'LandingPageTeam2Required'
                )));

        $wp_customize->add_setting('LandingPageTeam2Image',
            array('default'=> '',
                'transport'=> 'refresh',
                'sanitize_callback'=> 'absint'
            ));

        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'LandingPageTeam2Image',
                array('label'=> __('Team 2 image'),
                    'description'=> esc_html__(''),
                    'section'=> 'LandingPageTeamSection',
                    'flex_width'=> false, // Optional. Default: false
                    'flex_height'=> true, // Optional. Default: false
                    'width'=> 450, // Optional. Default: 150
                    'height'=> 500, // Optional. Default: 150
                    'button_labels'=> array( // Optional.
                        'select'=> __('Select Image'),
                        'change'=> __('Change Image'),
                        'remove'=> __('Remove'),
                        'default'=> __('Default'),
                        'placeholder'=> __('No image selected'),
                        'frame_title'=> __('Select Image'),
                        'frame_button'=> __('Choose Image'),
                    ))));

        $wp_customize->add_setting('LandingPageTeam2Title', array('default'=> 'Claire Daniel',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageTeam2Title',
                array('label'=> __('Team 2 Name', 'w3layouts'),
                    'section'=> 'LandingPageTeamSection',
                    'settings'=> 'LandingPageTeam2Title'
                )));

        $wp_customize->add_setting('LandingPageTeam2TitleUrl', array('default'=> '#url',
                'transport'=> 'refresh', ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageTeam2TitleUrl',
                array('label'=> __('Team 2 Title URL', 'w3layouts'),
                    'section'=> 'LandingPageTeamSection',
                    'settings'=> 'LandingPageTeam2TitleUrl'
                )));

        $wp_customize->add_setting('LandingPageTeam2Designation', array('default'=> 'Customer Officer',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageTeam2Designation',
                array('label'=> __('Team 2 Designation', 'w3layouts'),
                    'section'=> 'LandingPageTeamSection',
                    'settings'=> 'LandingPageTeam2Designation'
                )));

        $wp_customize->add_setting('LandingPageTeam2SocialFacebook',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageTeam2SocialFacebook',
                array('label'=> __('Team 2 Facebook Required', 'w3layouts'),
                    'section'=> 'LandingPageTeamSection',
                    'settings'=> 'LandingPageTeam2SocialFacebook'
                )));

        $wp_customize->add_setting('LandingPageTeam2SocialFacebookURL', array('default'=> 'https://www.facebook.com/w3layouts/',
                'transport'=> 'refresh', ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageTeam2SocialFacebookURL',
                array('label'=> __('Team 2 FaceBook URL', 'w3layouts'),
                    'section'=> 'LandingPageTeamSection',
                    'settings'=> 'LandingPageTeam2SocialFacebookURL'
                )));

        $wp_customize->add_setting('LandingPageTeam2SocialTwitter',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageTeam2SocialTwitter',
                array('label'=> __('Team 2 Twitter Required', 'w3layouts'),
                    'section'=> 'LandingPageTeamSection',
                    'settings'=> 'LandingPageTeam2SocialTwitter'
                )));

        $wp_customize->add_setting('LandingPageTeam2SocialTwitterURL', array('default'=> 'https://twitter.com/W3layouts',
                'transport'=> 'refresh', ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageTeam2SocialTwitterURL',
                array('label'=> __('Team 2 Twitter URL', 'w3layouts'),
                    'section'=> 'LandingPageTeamSection',
                    'settings'=> 'LandingPageTeam2SocialTwitterURL'
                )));

        $wp_customize->add_setting('LandingPageTeam2SocialInstagram',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageTeam2SocialInstagram',
                array('label'=> __('Team 2 Instagram Required', 'w3layouts'),
                    'section'=> 'LandingPageTeamSection',
                    'settings'=> 'LandingPageTeam2SocialInstagram'
                )));

        $wp_customize->add_setting('LandingPageTeam2SocialInstagramURL', array('default'=> 'https://www.instagram.com/w3layouts_/',
                'transport'=> 'refresh', ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageTeam2SocialInstagramURL',
                array('label'=> __('Team 2 Instagram URL', 'w3layouts'),
                    'section'=> 'LandingPageTeamSection',
                    'settings'=> 'LandingPageTeam2SocialInstagramURL'
                )));
        // Team 2


        // Team 3
        $wp_customize->add_setting('LandingPageTeam3Required',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageTeam3Required',
                array('label'=> __('Team 3 Required', 'w3layouts'),
                    'section'=> 'LandingPageTeamSection',
                    'settings'=> 'LandingPageTeam3Required'
                )));

        $wp_customize->add_setting('LandingPageTeam3Image',
            array('default'=> '',
                'transport'=> 'refresh',
                'sanitize_callback'=> 'absint'
            ));

        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'LandingPageTeam3Image',
                array('label'=> __('Team 3 image'),
                    'description'=> esc_html__(''),
                    'section'=> 'LandingPageTeamSection',
                    'flex_width'=> false, // Optional. Default: false
                    'flex_height'=> true, // Optional. Default: false
                    'width'=> 450, // Optional. Default: 150
                    'height'=> 500, // Optional. Default: 150
                    'button_labels'=> array( // Optional.
                        'select'=> __('Select Image'),
                        'change'=> __('Change Image'),
                        'remove'=> __('Remove'),
                        'default'=> __('Default'),
                        'placeholder'=> __('No image selected'),
                        'frame_title'=> __('Select Image'),
                        'frame_button'=> __('Choose Image'),
                    ))));

        $wp_customize->add_setting('LandingPageTeam3Title', array('default'=> 'Daniel Hunt',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageTeam3Title',
                array('label'=> __('Team 3 Name', 'w3layouts'),
                    'section'=> 'LandingPageTeamSection',
                    'settings'=> 'LandingPageTeam3Title'
                )));

        $wp_customize->add_setting('LandingPageTeam3TitleUrl', array('default'=> '#url',
                'transport'=> 'refresh', ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageTeam3TitleUrl',
                array('label'=> __('Team 3 Title URL', 'w3layouts'),
                    'section'=> 'LandingPageTeamSection',
                    'settings'=> 'LandingPageTeam3TitleUrl'
                )));

        $wp_customize->add_setting('LandingPageTeam3Designation', array('default'=> 'Excutive Officer',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageTeam3Designation',
                array('label'=> __('Team 3 Designation', 'w3layouts'),
                    'section'=> 'LandingPageTeamSection',
                    'settings'=> 'LandingPageTeam3Designation'
                )));

        $wp_customize->add_setting('LandingPageTeam3SocialFacebook',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageTeam3SocialFacebook',
                array('label'=> __('Team 3 Facebook Required', 'w3layouts'),
                    'section'=> 'LandingPageTeamSection',
                    'settings'=> 'LandingPageTeam3SocialFacebook'
                )));

        $wp_customize->add_setting('LandingPageTeam3SocialFacebookURL', array('default'=> 'https://www.facebook.com/w3layouts/',
                'transport'=> 'refresh', ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageTeam3SocialFacebookURL',
                array('label'=> __('Team 3 FaceBook URL', 'w3layouts'),
                    'section'=> 'LandingPageTeamSection',
                    'settings'=> 'LandingPageTeam3SocialFacebookURL'
                )));

        $wp_customize->add_setting('LandingPageTeam3SocialTwitter',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageTeam3SocialTwitter',
                array('label'=> __('Team 3 Twitter Required', 'w3layouts'),
                    'section'=> 'LandingPageTeamSection',
                    'settings'=> 'LandingPageTeam3SocialTwitter'
                )));

        $wp_customize->add_setting('LandingPageTeam3SocialTwitterURL', array('default'=> 'https://twitter.com/W3layouts',
                'transport'=> 'refresh', ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageTeam3SocialTwitterURL',
                array('label'=> __('Team 3 Twitter URL', 'w3layouts'),
                    'section'=> 'LandingPageTeamSection',
                    'settings'=> 'LandingPageTeam3SocialTwitterURL'
                )));

        $wp_customize->add_setting('LandingPageTeam3SocialInstagram',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageTeam3SocialInstagram',
                array('label'=> __('Team 3 Instagram Required', 'w3layouts'),
                    'section'=> 'LandingPageTeamSection',
                    'settings'=> 'LandingPageTeam3SocialInstagram'
                )));

        $wp_customize->add_setting('LandingPageTeam3SocialInstagramURL', array('default'=> 'https://www.instagram.com/w3layouts_/',
                'transport'=> 'refresh', ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageTeam3SocialInstagramURL',
                array('label'=> __('Team 3 Instagram URL', 'w3layouts'),
                    'section'=> 'LandingPageTeamSection',
                    'settings'=> 'LandingPageTeam3SocialInstagramURL'
                )));
        // Team 3


        // Team 4
        $wp_customize->add_setting('LandingPageTeam4Required',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageTeam4Required',
                array('label'=> __('Team 4 Required', 'w3layouts'),
                    'section'=> 'LandingPageTeamSection',
                    'settings'=> 'LandingPageTeam4Required'
                )));

        $wp_customize->add_setting('LandingPageTeam4Image',
            array('default'=> '',
                'transport'=> 'refresh',
                'sanitize_callback'=> 'absint'
            ));

        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'LandingPageTeam4Image',
                array('label'=> __('Team 4 image'),
                    'description'=> esc_html__(''),
                    'section'=> 'LandingPageTeamSection',
                    'flex_width'=> false, // Optional. Default: false
                    'flex_height'=> true, // Optional. Default: false
                    'width'=> 450, // Optional. Default: 150
                    'height'=> 500, // Optional. Default: 150
                    'button_labels'=> array( // Optional.
                        'select'=> __('Select Image'),
                        'change'=> __('Change Image'),
                        'remove'=> __('Remove'),
                        'default'=> __('Default'),
                        'placeholder'=> __('No image selected'),
                        'frame_title'=> __('Select Image'),
                        'frame_button'=> __('Choose Image'),
                    ))));

        $wp_customize->add_setting('LandingPageTeam4Title', array('default'=> 'Kelli Grant',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageTeam4Title',
                array('label'=> __('Team 4 Name', 'w3layouts'),
                    'section'=> 'LandingPageTeamSection',
                    'settings'=> 'LandingPageTeam4Title'
                )));

        $wp_customize->add_setting('LandingPageTeam4TitleUrl', array('default'=> '#url',
                'transport'=> 'refresh', ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageTeam4TitleUrl',
                array('label'=> __('Team 4 Title URL', 'w3layouts'),
                    'section'=> 'LandingPageTeamSection',
                    'settings'=> 'LandingPageTeam4TitleUrl'
                )));

        $wp_customize->add_setting('LandingPageTeam4Designation', array('default'=> 'Chef
Excutive Officer',
'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageTeam4Designation',
                array('label'=> __('Team 4 Designation', 'w3layouts'),
                    'section'=> 'LandingPageTeamSection',
                    'settings'=> 'LandingPageTeam4Designation'
                )));

        $wp_customize->add_setting('LandingPageTeam4SocialFacebook',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageTeam4SocialFacebook',
                array('label'=> __('Team 4 Facebook Required', 'w3layouts'),
                    'section'=> 'LandingPageTeamSection',
                    'settings'=> 'LandingPageTeam4SocialFacebook'
                )));

        $wp_customize->add_setting('LandingPageTeam4SocialFacebookURL', array('default'=> 'https://www.facebook.com/w3layouts/',
                'transport'=> 'refresh', ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageTeam4SocialFacebookURL',
                array('label'=> __('Team 4 FaceBook URL', 'w3layouts'),
                    'section'=> 'LandingPageTeamSection',
                    'settings'=> 'LandingPageTeam4SocialFacebookURL'
                )));

        $wp_customize->add_setting('LandingPageTeam4SocialTwitter',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageTeam4SocialTwitter',
                array('label'=> __('Team 4 Twitter Required', 'w3layouts'),
                    'section'=> 'LandingPageTeamSection',
                    'settings'=> 'LandingPageTeam4SocialTwitter'
                )));

        $wp_customize->add_setting('LandingPageTeam4SocialTwitterURL', array('default'=> 'https://twitter.com/W3layouts',
                'transport'=> 'refresh', ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageTeam4SocialTwitterURL',
                array('label'=> __('Team 4 Twitter URL', 'w3layouts'),
                    'section'=> 'LandingPageTeamSection',
                    'settings'=> 'LandingPageTeam4SocialTwitterURL'
                )));

        $wp_customize->add_setting('LandingPageTeam4SocialInstagram',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageTeam4SocialInstagram',
                array('label'=> __('Team 4 Instagram Required', 'w3layouts'),
                    'section'=> 'LandingPageTeamSection',
                    'settings'=> 'LandingPageTeam4SocialInstagram'
                )));

        $wp_customize->add_setting('LandingPageTeam4SocialInstagramURL', array('default'=> 'https://www.instagram.com/w3layouts_/',
                'transport'=> 'refresh', ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageTeam4SocialInstagramURL',
                array('label'=> __('Team 4 Instagram URL', 'w3layouts'),
                    'section'=> 'LandingPageTeamSection',
                    'settings'=> 'LandingPageTeam4SocialInstagramURL'
                )));
        // Team 4

        // LandingPage Team top & bottom  area textarea

        $wp_customize->add_setting('LandingPageTeamTopArea', array('default'=> '',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageTeamTopArea',
                array('label'=> __('Team Top', 'w3layouts'),
                    'section'=> 'LandingPageTeamSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        $wp_customize->add_setting('LandingPageTeamBottomArea', array('default'=> '',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageTeamBottomArea',
                array('label'=> __('Team Bottom', 'w3layouts'),
                    'section'=> 'LandingPageTeamSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));
        // LandingPage Team top & bottom  area textarea


        /** LandingPage Team ends **/







        /** LandingPage Cover section starts **/

        $wp_customize->add_setting('LandingPageCoverRequired',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageCoverRequired',
                array('label'=> __('LandingPage Cover Section Required', 'w3layouts'),
                    'section'=> 'LandingPageCoverSection',
                    'settings'=> 'LandingPageCoverRequired',
                    'priority'=> 1)));

        $wp_customize->selective_refresh->add_partial('LandingPageCoverRequired', array('selector'=> 'div.LandingPageCover', // You can also select a css class
            ));

        $wp_customize->add_setting('LandingPageCoverBgImage',
            array('default'=> '',
                'transport'=> 'refresh',
                'sanitize_callback'=> 'absint'
            ));

        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'LandingPageCoverBgImage',
                array('label'=> __('LandingPage Cover Bg Image'),
                    'description'=> esc_html__(''),
                    'section'=> 'LandingPageCoverSection',
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

        $wp_customize->add_setting('LandingPageCoverTitle1', array('default'=> "Strategy is at the
Heart of What We Do.",
'transport'=> 'refresh',
            ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageCoverTitle1',
                array('label'=> __('LandingPage Cover Title 1', 'w3layouts'),
                    'section'=> 'LandingPageCoverSection',
                    'settings'=> 'LandingPageCoverTitle1',
                )));

        $wp_customize->add_setting('LandingPageCoverContent', array('default'=> 'Lorem ipsum viverra feugiat. Pellen tesque libero ut justo, ultrices in
ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet elit.',
'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageCoverContent',
                array('label'=> __('LandingPage Cover Content', 'w3layouts'),
                    'section'=> 'LandingPageCoverSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        $wp_customize->add_setting('LandingPageCoverReadMoreButtontxt', array('default'=> 'Read More',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageCoverReadMoreButtontxt',
                array('label'=> __('Read More Button Text', 'w3layouts'),
                    'section'=> 'LandingPageCoverSection',
                    'settings'=> 'LandingPageCoverReadMoreButtontxt'
                )));

        $wp_customize->add_setting('LandingPageCoverReadMoreButtonUrl', array('default'=> 'about#url',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageCoverReadMoreButtonUrl',
                array('label'=> __('Read More Button URL', 'w3layouts'),
                    'section'=> 'LandingPageCoverSection',
                    'settings'=> 'LandingPageCoverReadMoreButtonUrl'
                )));


        $wp_customize->add_setting('LandingPageCoverContactButtontxt', array('default'=> 'Contact Us',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageCoverContactButtontxt',
                array('label'=> __('Contact Button Text', 'w3layouts'),
                    'section'=> 'LandingPageCoverSection',
                    'settings'=> 'LandingPageCoverContactButtontxt'
                )));

        $wp_customize->add_setting('LandingPageCoverContactButtonUrl', array('default'=> 'contact#url',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageCoverContactButtonUrl',
                array('label'=> __('Contact Button URL', 'w3layouts'),
                    'section'=> 'LandingPageCoverSection',
                    'settings'=> 'LandingPageCoverContactButtonUrl'
                )));

        // LandingPage Cover Section top & bottom  textarea

        $wp_customize->add_setting('LandingPageCoverTopArea', array('default'=> '',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageCoverTopArea',
                array('label'=> __('Cover Top', 'w3layouts'),
                    'section'=> 'LandingPageCoverSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        $wp_customize->add_setting('LandingPageCoverBottomArea', array('default'=> '',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageCoverBottomArea',
                array('label'=> __('Cover Bottom', 'w3layouts'),
                    'section'=> 'LandingPageCoverSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        // LandingPage Cover Section top & bottom  textarea

        /** LandingPage Cover section ends **/




        /** LandingPage Blog Grids section starts **/

        $wp_customize->add_setting('LandingPageBlogGridsRequired',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageBlogGridsRequired',
                array('label'=> __('LandingPage Blog Grids Section Required', 'w3layouts'),
                    'section'=> 'LandingPageBlogGridsSection',
                    'settings'=> 'LandingPageBlogGridsRequired',
                    'priority'=> 1)));

        $wp_customize->selective_refresh->add_partial('LandingPageBlogGridsRequired', array('selector'=> 'div.LandingPageBlogGrids', // You can also select a css class
            ));

        $wp_customize->add_setting('LandingPageBlogGridsTitle1', array('default'=> "Blog Posts",
                'transport'=> 'refresh',
            ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageBlogGridsTitle1',
                array('label'=> __('LandingPage Blog Grids Title1', 'w3layouts'),
                    'section'=> 'LandingPageBlogGridsSection',
                    'settings'=> 'LandingPageBlogGridsTitle1'
                )));

        $wp_customize->add_setting('LandingPageBlogGridsTitle2', array('default'=> "Take Charge Of Your Life",
                'transport'=> 'refresh',
            ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageBlogGridsTitle2',
                array('label'=> __('LandingPage Blog Grids Title2', 'w3layouts'),
                    'section'=> 'LandingPageBlogGridsSection',
                    'settings'=> 'LandingPageBlogGridsTitle2'
                )));

        $wp_customize->add_setting('LandingPageBlogGridsReadMoreBtnRequired',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageBlogGridsReadMoreBtnRequired',
                array('label'=> __('LandingPage Blog Grids Button Required', 'w3layouts'),
                    'section'=> 'LandingPageBlogGridsSection',
                    'settings'=> 'LandingPageBlogGridsReadMoreBtnRequired'
                )));

        $wp_customize->add_setting('LandingPageBlogGridsButtonUrl', array('default'=> '/blog',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageBlogGridsButtonUrl',
                array('label'=> __('LandingPage Blog Grids Button URL', 'w3layouts'),
                    'section'=> 'LandingPageBlogGridsSection',
                    'settings'=> 'LandingPageBlogGridsButtonUrl'
                )));


        $wp_customize->add_setting('LandingPageBlogGridsButtontxt', array('default'=> 'Read More',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageBlogGridsButtontxt',
                array('label'=> __('LandingPage Blog Grids Button Text', 'w3layouts'),
                    'section'=> 'LandingPageBlogGridsSection',
                    'settings'=> 'LandingPageBlogGridsButtontxt'
                )));

        // Home Page Blog Grids Section top & bottom  textarea

        $wp_customize->add_setting('LandingPageBlogGridsTopArea', array('default'=> '',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageBlogGridsTopArea',
                array('label'=> __('Blog Grids Top', 'w3layouts'),
                    'section'=> 'LandingPageBlogGridsSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        $wp_customize->add_setting('LandingPageBlogGridsBottomArea', array('default'=> '',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageBlogGridsBottomArea',
                array('label'=> __('Blog Grids Bottom', 'w3layouts'),
                    'section'=> 'LandingPageBlogGridsSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        // Home Page Blog Grids Section top & bottom  textarea

        /** LandingPage Blog Grids section ends **/






        /** LandingPage Cover section 2 starts **/

        $wp_customize->add_setting('LandingPageCover2Required',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageCover2Required',
                array('label'=> __('LandingPage Cover Section 2 Required', 'w3layouts'),
                    'section'=> 'LandingPageCover2Section',
                    'settings'=> 'LandingPageCover2Required',
                    'priority'=> 1)));

        $wp_customize->selective_refresh->add_partial('LandingPageCover2Required', array('selector'=> 'div.LandingPageCover2', // You can also select a css class
            ));

        $wp_customize->add_setting('LandingPageCover2BgImage',
            array('default'=> '',
                'transport'=> 'refresh',
                'sanitize_callback'=> 'absint'
            ));

        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'LandingPageCover2BgImage',
                array('label'=> __('LandingPage Cover 2 Bg Image'),
                    'description'=> esc_html__(''),
                    'section'=> 'LandingPageCover2Section',
                    'flex_width'=> false, // Optional. Default: false
                    'flex_height'=> true, // Optional. Default: false
                    'width'=> 1920, // Optional. Default: 150
                    'height'=> 840, // Optional. Default: 150
                    'button_labels'=> array( // Optional.
                        'select'=> __('Select Image'),
                        'change'=> __('Change Image'),
                        'remove'=> __('Remove'),
                        'default'=> __('Default'),
                        'placeholder'=> __('No image selected'),
                        'frame_title'=> __('Select Image'),
                        'frame_button'=> __('Choose Image'),
                    ))));

        $wp_customize->add_setting('LandingPageCover2Title', array('default'=> "Start Your Journey to Better Business",
                'transport'=> 'refresh',
            ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageCover2Title',
                array('label'=> __('LandingPage Cover 2 Title', 'w3layouts'),
                    'section'=> 'LandingPageCover2Section',
                    'settings'=> 'LandingPageCover2Title',
                )));

        $wp_customize->add_setting('LandingPageCover2GetStartedButtontxt', array('default'=> 'Get Started Today',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageCover2GetStartedButtontxt',
                array('label'=> __('Get Started Button Text', 'w3layouts'),
                    'section'=> 'LandingPageCover2Section',
                    'settings'=> 'LandingPageCover2GetStartedButtontxt'
                )));

        $wp_customize->add_setting('LandingPageCover2GetStartedButtonUrl', array('default'=> 'about#url',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageCover2GetStartedButtonUrl',
                array('label'=> __('Get Started Button URL', 'w3layouts'),
                    'section'=> 'LandingPageCover2Section',
                    'settings'=> 'LandingPageCover2GetStartedButtonUrl'
                )));


        // LandingPage Cover Section 2 top & bottom  textarea

        $wp_customize->add_setting('LandingPageCover2TopArea', array('default'=> '',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageCover2TopArea',
                array('label'=> __('Cover 2 Top', 'w3layouts'),
                    'section'=> 'LandingPageCover2Section',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        $wp_customize->add_setting('LandingPageCover2BottomArea', array('default'=> '',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageCover2BottomArea',
                array('label'=> __('Cover 2 Bottom', 'w3layouts'),
                    'section'=> 'LandingPageCover2Section',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        // LandingPage Cover Section 2 top & bottom  textarea

        /** LandingPage Cover section 2 ends **/






        /** LandingPage Testimonials starts **/

        $wp_customize->add_setting('LandingPageTestimonialsRequired',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageTestimonialsRequired',
                array('label'=> __('LandingPage Testimonials Required', 'w3layouts'),
                    'section'=> 'LandingPageTestimonialsSection',
                    'settings'=> 'LandingPageTestimonialsRequired',
                    'priority'=> 1)));
        $wp_customize->selective_refresh->add_partial('LandingPageTestimonialsRequired', array('selector'=> 'div.LandingPageTestimonials', // You can also select a css class
            ));

        $wp_customize->add_setting('LandingPageTestimonialsTitle1', array('default'=> "Testimonials",
                'transport'=> 'refresh',
            ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageTestimonialsTitle1',
                array('label'=> __('LandingPage Testimonials Title 1', 'w3layouts'),
                    'section'=> 'LandingPageTestimonialsSection',
                    'settings'=> 'LandingPageTestimonialsTitle1',
                )));

        $wp_customize->add_setting('LandingPageTestimonialsTitle2', array('default'=> "What People Say",
                'transport'=> 'refresh',
            ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageTestimonialsTitle2',
                array('label'=> __('LandingPage Testimonials Title 2', 'w3layouts'),
                    'section'=> 'LandingPageTestimonialsSection',
                    'settings'=> 'LandingPageTestimonialsTitle2',
                )));


        // client 1

        $wp_customize->add_setting('LandingPageTestimonialsMessage1', array('default'=> 'Lorem ipsum dolor sit amet int consectetur adipisicing elit. Velita beatae
laudantium Quas minima sunt natus tempore, maiores aliquid modi felis vitae facere aperiam sequi optio lacinia id ipsum non velit, culpa. voluptate rem ullam dolore nisi est quasi, doloribus tempora.',
'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageTestimonialsMessage1',
                array('label'=> __('Client 1 Message', 'w3layouts'),
                    'section'=> 'LandingPageTestimonialsSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        $wp_customize->add_setting('LandingPageTestimonialsClient1Name', array('default'=> 'Gloria Parker',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageTestimonialsClient1Name',
                array('label'=> __('Client 1 Name', 'w3layouts'),
                    'section'=> 'LandingPageTestimonialsSection',
                    'settings'=> 'LandingPageTestimonialsClient1Name'
                )));

        $wp_customize->add_setting('LandingPageTestimonialsClient1Designation', array('default'=> 'Client Of Company',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageTestimonialsClient1Designation',
                array('label'=> __('Client 1 Designation', 'w3layouts'),
                    'section'=> 'LandingPageTestimonialsSection',
                    'settings'=> 'LandingPageTestimonialsClient1Designation'
                )));
        // client 1

        // client 2

        $wp_customize->add_setting('LandingPageTestimonialsMessage2', array('default'=> 'Lorem ipsum dolor sit amet int consectetur adipisicing elit. Velita beatae
laudantium Quas minima sunt natus tempore, maiores aliquid modi felis vitae facere aperiam sequi optio lacinia id ipsum non velit, culpa. voluptate rem ullam dolore nisi est quasi, doloribus tempora.',
'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageTestimonialsMessage2',
                array('label'=> __('Client 2 Message', 'w3layouts'),
                    'section'=> 'LandingPageTestimonialsSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        $wp_customize->add_setting('LandingPageTestimonialsClient2Name', array('default'=> 'Tommy sakura',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageTestimonialsClient2Name',
                array('label'=> __('Client 2 Name', 'w3layouts'),
                    'section'=> 'LandingPageTestimonialsSection',
                    'settings'=> 'LandingPageTestimonialsClient2Name'
                )));

        $wp_customize->add_setting('LandingPageTestimonialsClient2Designation', array('default'=> 'Client Of Company',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageTestimonialsClient2Designation',
                array('label'=> __('Client 2 Designation', 'w3layouts'),
                    'section'=> 'LandingPageTestimonialsSection',
                    'settings'=> 'LandingPageTestimonialsClient2Designation'
                )));
        // client 2

        // client 3

        $wp_customize->add_setting('LandingPageTestimonialsMessage3', array('default'=> 'Lorem ipsum dolor sit amet int consectetur adipisicing elit. Velita beatae
laudantium Quas minima sunt natus tempore, maiores aliquid modi felis vitae facere aperiam sequi optio lacinia id ipsum non velit, culpa. voluptate rem ullam dolore nisi est quasi, doloribus tempora.',
'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageTestimonialsMessage3',
                array('label'=> __('Client 3 Message', 'w3layouts'),
                    'section'=> 'LandingPageTestimonialsSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        $wp_customize->add_setting('LandingPageTestimonialsClient3Name', array('default'=> 'Bruce Bailey',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageTestimonialsClient3Name',
                array('label'=> __('Client 3 Name', 'w3layouts'),
                    'section'=> 'LandingPageTestimonialsSection',
                    'settings'=> 'LandingPageTestimonialsClient3Name'
                )));

        $wp_customize->add_setting('LandingPageTestimonialsClient3Designation', array('default'=> 'Client Of Company',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageTestimonialsClient3Designation',
                array('label'=> __('Client 3 Designation', 'w3layouts'),
                    'section'=> 'LandingPageTestimonialsSection',
                    'settings'=> 'LandingPageTestimonialsClient3Designation'
                )));
        // client 3

        // client 4

        $wp_customize->add_setting('LandingPageTestimonialsMessage4', array('default'=> 'Lorem ipsum dolor sit amet int consectetur adipisicing elit. Velita beatae
laudantium Quas minima sunt natus tempore, maiores aliquid modi felis vitae facere aperiam sequi optio lacinia id ipsum non velit, culpa. voluptate rem ullam dolore nisi est quasi, doloribus tempora.',
'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageTestimonialsMessage4',
                array('label'=> __('Client 4 Message', 'w3layouts'),
                    'section'=> 'LandingPageTestimonialsSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        $wp_customize->add_setting('LandingPageTestimonialsClient4Name', array('default'=> 'Ruth Edwards',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageTestimonialsClient4Name',
                array('label'=> __('Client 4 Name', 'w3layouts'),
                    'section'=> 'LandingPageTestimonialsSection',
                    'settings'=> 'LandingPageTestimonialsClient4Name'
                )));

        $wp_customize->add_setting('LandingPageTestimonialsClient4Designation', array('default'=> 'Client Of Company',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageTestimonialsClient4Designation',
                array('label'=> __('Client 4 Designation', 'w3layouts'),
                    'section'=> 'LandingPageTestimonialsSection',
                    'settings'=> 'LandingPageTestimonialsClient4Designation'
                )));
        // client 4

        // LandingPage Testimonials top & bottom  area textarea

        $wp_customize->add_setting('LandingPageTestimonialsTopArea', array('default'=> '',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageTestimonialsTopArea',
                array('label'=> __('Testimonials Top', 'w3layouts'),
                    'section'=> 'LandingPageTestimonialsSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        $wp_customize->add_setting('LandingPageTestimonialsBottomArea', array('default'=> '',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'LandingPageTestimonialsBottomArea',
                array('label'=> __('Testimonials Bottom', 'w3layouts'),
                    'section'=> 'LandingPageTestimonialsSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));
        // LandingPage Testimonials top & bottom  area textarea

        /** LandingPage Testimonials ends **/



    /** Contact page full section starts **/

    $wp_customize->add_setting('LandingPageContactRequired',
    array('default'=> 1,
      'transport'=> 'refresh',
      'sanitize_callback'=> 'skyrocket_switch_sanitization'
    ));
  $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageContactRequired',
      array('label'=> __('ContactUs Section required', 'w3layouts'),
        'section'=> 'LandingPageContactSection',
        'settings'=> 'LandingPageContactRequired',
        'priority'=> 1)));
  $wp_customize->selective_refresh->add_partial('LandingPageContactRequired', array('selector'=> 'div.LPContactSection', // You can also select a css class
    ));


    /** LandingPageContact Details Required **/

    $wp_customize->add_setting('LPContactDetailsRequired',
      array('default'=> 1,
        'transport'=> 'refresh',
        'sanitize_callback'=> 'skyrocket_switch_sanitization'
      ));
    $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LPContactDetailsRequired',
        array('label'=> __('Contact Details Required', 'w3layouts'),
          'section'=> 'LandingPageContactSection',
          'settings'=> 'LPContactDetailsRequired'
        )));

  $wp_customize->add_setting('LPContactDetailsTitle1', array('default'=> 'Get in touch',
      'transport'=> 'refresh', ));
  $wp_customize->add_control(new WP_Customize_Control($wp_customize,
      'LPContactDetailsTitle1',
      array('label'=> __('Contact Details Title 1', 'w3layouts'),
        'section'=> 'LandingPageContactSection',
        'settings'=> 'LPContactDetailsTitle1',
      )));

  $wp_customize->add_setting('LPContactDetailsTitle2', array('default'=> "Find Us",
      'transport'=> 'refresh', ));
  $wp_customize->add_control(new WP_Customize_Control($wp_customize,
      'LPContactDetailsTitle2',
      array('label'=> __('Contact Details Title 2', 'w3layouts'),
        'section'=> 'LandingPageContactSection',
        'settings'=> 'LPContactDetailsTitle2',
      )));

  $wp_customize->add_setting('LPContactDetailsContent', array('default'=> 'Start working with Us that can provide everything you need to
generate awareness,
      drive traffic,
      connect. <br> We guarantee that you’ll be able to have any issue resolved within 24 hours.',
'transport'=> 'refresh',
    ));
  $wp_customize->add_control(new WP_Customize_Control($wp_customize,
      'LPContactDetailsContent',
      array('label'=> __('Contact Details Content', 'w3layouts'),
        'section'=> 'LandingPageContactSection',
        'type'=> 'textarea',
        'input_attrs'=> array('class'=> 'my-custom-class',
          'style'=> 'border: 1px solid #999',
          'placeholder'=> __('Enter message...', 'w3layouts'),
        ),
      )));

  $wp_customize->add_setting('LandingPageContactNumberRequired',
    array('default'=> 1,
      'transport'=> 'refresh',
      'sanitize_callback'=> 'skyrocket_switch_sanitization'
    ));

  $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageContactNumberRequired',
      array('label'=> __('Contact Number required', 'w3layouts'),
        'section'=> 'LandingPageContactSection',
        'settings'=> 'LandingPageContactNumberRequired'
      )));

  $wp_customize->add_setting('LPContactPhoneTitle', array('default'=> "Phone number",
      'transport'=> 'refresh',
    ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize,
      'LPContactPhoneTitle',
      array('label'=> __('Contact Phone number Title', 'w3layouts'),
        'section'=> 'LandingPageContactSection',
        'settings'=> 'LPContactPhoneTitle'
      )));

  $wp_customize->add_setting('LPContactNumber', array('default'=> '+(21) 255 088 4943',
      'transport'=> 'refresh',
    ));
  $wp_customize->add_control(new WP_Customize_Control($wp_customize,
      'LPContactNumber',
      array('label'=> __('Contact Number', 'w3layouts'),
        'section'=> 'LandingPageContactSection',
        'settings'=> 'LPContactNumber'
      )));

  $wp_customize->add_setting('LPContactNumberUrl', array('default'=> 'tel:+(21) 255 088 4943',
      'transport'=> 'refresh',
    ));
  $wp_customize->add_control(new WP_Customize_Control($wp_customize,
      'LPContactNumberUrl',
      array('label'=> __('Contact Number URL', 'w3layouts'),
        'section'=> 'LandingPageContactSection',
        'settings'=> 'LPContactNumberUrl'
      )));

  $wp_customize->add_setting('LandingPageContactEmailRequired',
    array('default'=> 1,
      'transport'=> 'refresh',
      'sanitize_callback'=> 'skyrocket_switch_sanitization'
    ));
  $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageContactEmailRequired',
      array('label'=> __('ContactUs Email required', 'w3layouts'),
        'section'=> 'LandingPageContactSection',
        'settings'=> 'LandingPageContactEmailRequired'
      )));

  $wp_customize->add_setting('LPContactEmailTitle', array('default'=> "Send Email",
      'transport'=> 'refresh',
    ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize,
      'LPContactEmailTitle',
      array('label'=> __('Contact Email Title', 'w3layouts'),
        'section'=> 'LandingPageContactSection',
        'settings'=> 'LPContactEmailTitle'
      )));

  $wp_customize->add_setting('LPContactMailtxt', array('default'=> 'advisory@mail.com',
      'transport'=> 'refresh',
    ));
  $wp_customize->add_control(new WP_Customize_Control($wp_customize,
      'LPContactMailtxt',
      array('label'=> __('Contact MailID', 'w3layouts'),
        'section'=> 'LandingPageContactSection',
        'settings'=> 'LPContactMailtxt'
      )));

  $wp_customize->add_setting('LPContactMailUrl', array('default'=> 'advisory@mail.com',
      'transport'=> 'refresh',
    ));
  $wp_customize->add_control(new WP_Customize_Control($wp_customize,
      'LPContactMailUrl',
      array('label'=> __('Contact MailID URL', 'w3layouts'),
        'section'=> 'LandingPageContactSection',
        'settings'=> 'LPContactMailUrl'
      )));

  $wp_customize->add_setting('LandingPageContactAddressRequired',
    array('default'=> 1,
      'transport'=> 'refresh',
      'sanitize_callback'=> 'skyrocket_switch_sanitization'
    ));

  $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageContactAddressRequired',
      array('label'=> __('Contact Address required', 'w3layouts'),
        'section'=> 'LandingPageContactSection',
        'settings'=> 'LandingPageContactAddressRequired'
      )));

  $wp_customize->add_setting('LPContactAddressTitle', array('default'=> "Office Address",
      'transport'=> 'refresh',
    ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize,
      'LPContactAddressTitle',
      array('label'=> __('Contact Address Title', 'w3layouts'),
        'section'=> 'LandingPageContactSection',
        'settings'=> 'LPContactAddressTitle'
      )));

  $wp_customize->add_setting('LPContactAddress', array('default'=> 'Address here, 434 Trainer Honey street, London, UK - 62617.',
      'transport'=> 'refresh',
    ));
  $wp_customize->add_control(new WP_Customize_Control($wp_customize,
      'LPContactAddress',
      array('label'=> __('Contact Address', 'w3layouts'),
        'section'=> 'LandingPageContactSection',
        'type'=> 'textarea',
        'input_attrs'=> array('class'=> 'my-custom-class',
          'style'=> 'border: 1px solid #999',
          'placeholder'=> __('Enter message...', 'w3layouts'),
        ),
      )));



  /** LandingPageContact Form Required **/

  $wp_customize->add_setting('LandingPageContactFormRequired',
    array('default'=> 1,
      'transport'=> 'refresh',
      'sanitize_callback'=> 'skyrocket_switch_sanitization'
    ));
  $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageContactFormRequired',
      array('label'=> __('LandingPageContact Form Required', 'w3layouts'),
        'section'=> 'LandingPageContactForm',
        'settings'=> 'LandingPageContactFormRequired'
      )));
      $wp_customize->selective_refresh->add_partial('LandingPageContactFormRequired', array('selector'=> 'div.LPContactForm', // You can also select a css class
        ));

  $wp_customize->add_setting('LPContactFormTitle1', array('default'=> "Contact Us",
      'transport'=> 'refresh', ));
  $wp_customize->add_control(new WP_Customize_Control($wp_customize,
      'LPContactFormTitle1',
      array('label'=> __('Contact Form Title 1', 'w3layouts'),
        'section'=> 'LandingPageContactForm',
        'settings'=> 'LPContactFormTitle1',
      )));

      $wp_customize->add_setting('LPContactFormTitle2', array('default'=> "Fill out the form.",
          'transport'=> 'refresh', ));
      $wp_customize->add_control(new WP_Customize_Control($wp_customize,
          'LPContactFormTitle2',
          array('label'=> __('Contact Form Title 2', 'w3layouts'),
            'section'=> 'LandingPageContactForm',
            'settings'=> 'LPContactFormTitle2',
          )));

          $wp_customize->add_setting('LPContactFormContent', array('default'=> 'Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio
          consectetur adipisicing.',
      'transport'=> 'refresh',
            ));
          $wp_customize->add_control(new WP_Customize_Control($wp_customize,
              'LPContactFormContent',
              array('label'=> __('Contact Form Content', 'w3layouts'),
                'section'=> 'LandingPageContactForm',
                'type'=> 'textarea',
                'input_attrs'=> array('class'=> 'my-custom-class',
                  'style'=> 'border: 1px solid #999',
                  'placeholder'=> __('Enter message...', 'w3layouts'),
                ),
              )));



              $wp_customize->add_setting('LPContactToEmail', array('default'=> 'contact@email-me.com',
                      'transport'=> 'refresh', ));
              $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                      'LPContactToEmail',
                      array('label'=> __('Contact email address', 'w3layouts'),
                          'section'=> 'LandingPageContactForm',
                          'description'=> __('Who should receive email when contact form submitted Eg: contact@email-me.com'),
                          'settings'=> 'LPContactToEmail'
                      )));

  $wp_customize->add_setting('LandingPageContactFormURL', array('default'=> 'https://app.hoverforms.com/SubmitForm/w3layouts',
      'transport'=> 'refresh', ));
  $wp_customize->add_control(new WP_Customize_Control($wp_customize,
      'LandingPageContactFormURL',
      array('label'=> __('Form Action URL', 'w3layouts'),
        'section'=> 'LandingPageContactForm',
        'settings'=> 'LandingPageContactFormURL',
      )));

  $wp_customize->add_setting('LandingPageContactFormName', array('default'=> 'w3lName',
      'transport'=> 'refresh', ));
  $wp_customize->add_control(new WP_Customize_Control($wp_customize,
      'LandingPageContactFormName',
      array('label'=> __('Name field Name', 'w3layouts'),
        'section'=> 'LandingPageContactForm',
        'settings'=> 'LandingPageContactFormName',
      )));

  $wp_customize->add_setting('LandingPageContactFormNameplaceholder', array('default'=> 'Name',
      'transport'=> 'refresh', ));
  $wp_customize->add_control(new WP_Customize_Control($wp_customize,
      'LandingPageContactFormNameplaceholder',
      array('label'=> __('Name field Placeholder', 'w3layouts'),
        'section'=> 'LandingPageContactForm',
        'settings'=> 'LandingPageContactFormNameplaceholder',
      )));


  $wp_customize->add_setting('LandingPageContactFormEmail', array('default'=> 'w3lSender',
      'transport'=> 'refresh', ));
  $wp_customize->add_control(new WP_Customize_Control($wp_customize,
      'LandingPageContactFormEmail',
      array('label'=> __('Email field Name', 'w3layouts'),
        'section'=> 'LandingPageContactForm',
        'settings'=> 'LandingPageContactFormEmail',
      )));

  $wp_customize->add_setting('LandingPageContactFormEmailplaceholder', array('default'=> 'Email',
      'transport'=> 'refresh', ));
  $wp_customize->add_control(new WP_Customize_Control($wp_customize,
      'LandingPageContactFormEmailplaceholder',
      array('label'=> __('Email field Placeholder', 'w3layouts'),
        'section'=> 'LandingPageContactForm',
        'settings'=> 'LandingPageContactFormEmailplaceholder',
      )));

  $wp_customize->add_setting('LandingPageContactFormSubject', array('default'=> 'w3lSubject',
      'transport'=> 'refresh', ));
  $wp_customize->add_control(new WP_Customize_Control($wp_customize,
      'LandingPageContactFormSubject',
      array('label'=> __('Subject field Name', 'w3layouts'),
        'section'=> 'LandingPageContactForm',
        'settings'=> 'LandingPageContactFormSubject',

      )));
  $wp_customize->add_setting('LandingPageContactFormSubjectplaceholder', array('default'=> 'Subject',
      'transport'=> 'refresh', ));
  $wp_customize->add_control(new WP_Customize_Control($wp_customize,
      'LandingPageContactFormSubjectplaceholder',
      array('label'=> __('Subject field Placeholder', 'w3layouts'),
        'section'=> 'LandingPageContactForm',
        'settings'=> 'LandingPageContactFormSubjectplaceholder',
      )));

  $wp_customize->add_setting('LandingPageContactFormMessage', array('default'=> 'w3lMessage',
      'transport'=> 'refresh', ));
  $wp_customize->add_control(new WP_Customize_Control($wp_customize,
      'LandingPageContactFormMessage',
      array('label'=> __('Message field Name', 'w3layouts'),
        'section'=> 'LandingPageContactForm',
        'settings'=> 'LandingPageContactFormMessage',
      )));

  $wp_customize->add_setting('LandingPageContactFormMessageplaceholder', array('default'=> 'Message',
      'transport'=> 'refresh', ));
  $wp_customize->add_control(new WP_Customize_Control($wp_customize,
      'LandingPageContactFormMessageplaceholder',
      array('label'=> __('Message field Placeholder', 'w3layouts'),
        'section'=> 'LandingPageContactForm',
        'settings'=> 'LandingPageContactFormMessageplaceholder',
      )));

  $wp_customize->add_setting('LandingPageContactFormBtn', array('default'=> 'Send Message',
      'transport'=> 'refresh', ));
  $wp_customize->add_control(new WP_Customize_Control($wp_customize,
      'LandingPageContactFormBtn',
      array('label'=> __('Button Name', 'w3layouts'),
        'section'=> 'LandingPageContactForm',
        'settings'=> 'LandingPageContactFormBtn',
      )));

  /** LandingPageContact Form Required **/



  // Contact Page top & bottom  textarea

  $wp_customize->add_setting('LandingPageContactTopArea', array('default'=> '',
      'transport'=> 'refresh',
    ));
  $wp_customize->add_control(new WP_Customize_Control($wp_customize,
      'LandingPageContactTopArea',
      array('label'=> __('Contact Top', 'w3layouts'),
        'section'=> 'LandingPageContactSection',
        'type'=> 'textarea',
        'input_attrs'=> array('class'=> 'my-custom-class',
          'style'=> 'border: 1px solid #999',
          'placeholder'=> __('Enter message...', 'w3layouts'),
        ),
      )));

  $wp_customize->add_setting('LandingPageContactBottomArea', array('default'=> '',
      'transport'=> 'refresh',
    ));
  $wp_customize->add_control(new WP_Customize_Control($wp_customize,
      'LandingPageContactBottomArea',
      array('label'=> __('Contact Bottom', 'w3layouts'),
        'section'=> 'LandingPageContactSection',
        'type'=> 'textarea',
        'input_attrs'=> array('class'=> 'my-custom-class',
          'style'=> 'border: 1px solid #999',
          'placeholder'=> __('Enter message...', 'w3layouts'),
        ),
      )));

  // Contact Page top & bottom  textarea

  /** Contact page full section ends **/



  /** Contact page Map starts **/

  $wp_customize->add_setting('LandingPageContactMapRequired',
    array('default'=> 1,
      'transport'=> 'refresh',
      'sanitize_callback'=> 'skyrocket_switch_sanitization'
    ));
  $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'LandingPageContactMapRequired',
      array('label'=> __('Contact Map required', 'w3layouts'),
        'section'=> 'LandingPageContactMap',
        'settings'=> 'LandingPageContactMapRequired'
      )));
  $wp_customize->selective_refresh->add_partial('LandingPageContactMapRequired', array('selector'=> 'div.LandingPageContactMap', // You can also select a css class
    ));

  $wp_customize->add_setting('LandingPageContactMapURL', array('default'=> 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2spl!4v1562654563739!5m2!1sen!2spl',
      'transport'=> 'refresh', ));
  $wp_customize->add_control(new WP_Customize_Control($wp_customize,
      'LandingPageContactMapURL',
      array('label'=> __('Map URL', 'w3layouts'),
        'section'=> 'LandingPageContactMap',
        'settings'=> 'LandingPageContactMapURL',
      )));

  // Contact Page Map top & bottom  textarea

  $wp_customize->add_setting('LandingPageContactMapTopArea', array('default'=> '',
      'transport'=> 'refresh',
    ));
  $wp_customize->add_control(new WP_Customize_Control($wp_customize,
      'LandingPageContactMapTopArea',
      array('label'=> __('Contact Map Top', 'w3layouts'),
        'section'=> 'LandingPageContactMap',
        'type'=> 'textarea',
        'input_attrs'=> array('class'=> 'my-custom-class',
          'style'=> 'border: 1px solid #999',
          'placeholder'=> __('Enter message...', 'w3layouts'),
        ),
      )));

  $wp_customize->add_setting('LandingPageContactMapBottomArea', array('default'=> '',
      'transport'=> 'refresh',
    ));
  $wp_customize->add_control(new WP_Customize_Control($wp_customize,
      'LandingPageContactMapBottomArea',
      array('label'=> __('Contact Map Bottom', 'w3layouts'),
        'section'=> 'LandingPageContactMap',
        'type'=> 'textarea',
        'input_attrs'=> array('class'=> 'my-custom-class',
          'style'=> 'border: 1px solid #999',
          'placeholder'=> __('Enter message...', 'w3layouts'),
        ),
      )));

  // Contact Page Map top & bottom  textarea

  /** Contact page Map ends **/





    }

}