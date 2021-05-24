<?php
/**
 * w3layouts Theme About page Customizer
 *
 * @package w3layouts
 */

$w3layouts_About_settings=new w3layouts_About_customizer_settings();

class w3layouts_About_customizer_settings {
    // Get our default values
    // private $defaults;

    public function __construct() {
        // add_action( 'customize_register', array( $this, 'w3layouts_about_cust_register' ) );
        add_action('customize_register', array($this, 'w3layouts_AboutPage_panels'));



    }

    public function w3layouts_AboutPage_panels($wp_customize) {
        /**
 		 * Add our Header & Navigation Panel
 		 */
        $wp_customize->add_panel('AboutPage_panel',
            array('title'=> __('About Page Customize', 'w3layouts'),
                'priority'=> 30,
                'description'=> esc_html__('add and update AboutPage data.', 'w3layouts')));

        $wp_customize->add_section('AllPagesBreadcrumbs',
            array('title'=> __('Breadcrumbs Required', 'w3layouts'),
                'description'=> esc_html__('', 'w3layouts'),
                'panel'=> 'AboutPage_panel'
            ));

        $wp_customize->add_section('AboutPageBannerSection',
            array('title'=> __('Section 1 About Banner', 'w3layouts'),
                'description'=> esc_html__('', 'w3layouts'),
                'panel'=> 'AboutPage_panel'
            ));

        $wp_customize->add_section('AboutPageAboutSection',
            array('title'=> __('Section 2 About', 'w3layouts'),
                'description'=> esc_html__('', 'w3layouts'),
                'panel'=> 'AboutPage_panel'
            ));

        $wp_customize->add_section('AboutPageServicesSection',
            array('title'=> __('Section 3 Services', 'w3layouts'),
                'description'=> esc_html__('', 'w3layouts'),
                'panel'=> 'AboutPage_panel'
            ));

        $wp_customize->add_section('AboutPageSkillsSection',
            array('title'=> __('Section 4 Skills', 'w3layouts'),
                'description'=> esc_html__('', 'w3layouts'),
                'panel'=> 'AboutPage_panel'
            ));

        $wp_customize->add_section('AboutPageCoverSection',
            array('title'=> __('Section 5 Cover', 'w3layouts'),
                'description'=> esc_html__('', 'w3layouts'),
                'panel'=> 'AboutPage_panel'
            ));

        $wp_customize->add_section('AboutPageTeamSection',
            array('title'=> __('Section 6 Team', 'w3layouts'),
                'description'=> esc_html__('', 'w3layouts'),
                'panel'=> 'AboutPage_panel'
            ));





        /** All pages breadcrumbs section starts **/
        $wp_customize->add_setting('BreadcrumbsRequired',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'BreadcrumbsRequired',
                array('label'=> __('Breadcrumbs Required', 'w3layouts'),
                    'section'=> 'AllPagesBreadcrumbs',
                    'settings'=> 'BreadcrumbsRequired',
                    'priority'=> 1)));
        $wp_customize->selective_refresh->add_partial('BreadcrumbsRequired', array('selector'=> 'ul.AllBreadcrumbs', // You can also select a css class
            ));
        /** All pages breadcrumbs section ends **/


        /** AboutPage Banner section starts **/

        $wp_customize->add_setting('AboutPageBannerBgImage',
            array('default'=> '',
                'transport'=> 'refresh',
                'sanitize_callback'=> 'absint'
            ));

        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'AboutPageBannerBgImage',
                array('label'=> __('AboutPage Banner Bg Image'),
                    'description'=> esc_html__(''),
                    'section'=> 'AboutPageBannerSection',
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
        $wp_customize->selective_refresh->add_partial('AboutPageBannerBgImage', array('selector'=> 'div.AboutPageBannerImage', // You can also select a css class
            ));

        /** AboutPage Banner section ends **/





        /** AboutPage About Section starts **/

        $wp_customize->add_setting('AboutPageAboutImage',
            array('default'=> '',
                'transport'=> 'refresh',
                'sanitize_callback'=> 'absint'
            ));

        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'AboutPageAboutImage',
                array('label'=> __('About image'),
                    'description'=> esc_html__(''),
                    'section'=> 'AboutPageAboutSection',
                    'flex_width'=> false, // Optional. Default: false
                    'flex_height'=> true, // Optional. Default: false
                    'width'=> 640, // Optional. Default: 150
                    'height'=> 427, // Optional. Default: 150
                    'button_labels'=> array( // Optional.
                        'select'=> __('Select Image'),
                        'change'=> __('Change Image'),
                        'remove'=> __('Remove'),
                        'default'=> __('Default'),
                        'placeholder'=> __('No image selected'),
                        'frame_title'=> __('Select Image'),
                        'frame_button'=> __('Choose Image'),
                    ))));

        $wp_customize->add_setting('AboutPageAboutRequired',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageAboutRequired',
                array('label'=> __('AboutPage About Section Required', 'w3layouts'),
                    'section'=> 'AboutPageAboutSection',
                    'settings'=> 'AboutPageAboutRequired',
                    'priority'=> 1)));

        $wp_customize->selective_refresh->add_partial('AboutPageAboutRequired', array('selector'=> 'div.AboutPageAbout', // You can also select a css class
            ));

        $wp_customize->add_setting('AboutPageAboutTitle1', array('default'=> "About Us",
                'transport'=> 'refresh',
            ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageAboutTitle1',
                array('label'=> __('About Title 1', 'w3layouts'),
                    'section'=> 'AboutPageAboutSection',
                    'settings'=> 'AboutPageAboutTitle1'
                )));

        $wp_customize->add_setting('AboutPageAboutTitle2', array('default'=> "We Work for Your Incredible Success",
                'transport'=> 'refresh',
            ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageAboutTitle2',
                array('label'=> __('About Title 2', 'w3layouts'),
                    'section'=> 'AboutPageAboutSection',
                    'settings'=> 'AboutPageAboutTitle2'
                )));

        $wp_customize->add_setting('AboutPageAboutpara', array('default'=> 'Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio
consectetur adipisicing.Nunc id ipsum fringilla, gravida felis vitae. lacinia id, sunt in culpa quis lacinia. Lorem ipsum dolor, sit amet init elit. Eos,
                debitis. Quas minima sunt natus tempore, maiores aliquid modi felis vitae facere aperiam sequi optio lacinia id ipsum.',
'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageAboutpara',
                array('label'=> __('About Content', 'w3layouts'),
                    'section'=> 'AboutPageAboutSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        $wp_customize->add_setting('AboutPageAboutBtnUrl', array('default'=> '#url',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageAboutBtnUrl',
                array('label'=> __('AboutPage About Button URL', 'w3layouts'),
                    'section'=> 'AboutPageAboutSection',
                    'settings'=> 'AboutPageAboutBtnUrl'
                )));

        $wp_customize->add_setting('AboutPageAboutBtnTxt', array('default'=> "Read More",
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageAboutBtnTxt',
                array('label'=> __('AboutPage About Button Text', 'w3layouts'),
                    'section'=> 'AboutPageAboutSection',
                    'settings'=> 'AboutPageAboutBtnTxt',
                )));

        // AboutPage About Section top & bottom  textarea

        $wp_customize->add_setting('AboutPageAboutTopArea', array('default'=> '',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageAboutTopArea',
                array('label'=> __('About Top', 'w3layouts'),
                    'section'=> 'AboutPageAboutSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        $wp_customize->add_setting('AboutPageAboutBottomArea', array('default'=> '',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageAboutBottomArea',
                array('label'=> __('About Bottom', 'w3layouts'),
                    'section'=> 'AboutPageAboutSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        // AboutPage About Section top & bottom  textarea

        /** AboutPage About Section ends **/





        /** AboutPage Services section starts **/

        $wp_customize->add_setting('AboutPageServicesRequired',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageServicesRequired',
                array('label'=> __('AboutPage Services Section Required', 'w3layouts'),
                    'section'=> 'AboutPageServicesSection',
                    'settings'=> 'AboutPageServicesRequired',
                    'priority'=> 1)));

        $wp_customize->selective_refresh->add_partial('AboutPageServicesRequired', array('selector'=> 'div.AboutPageServices', // You can also select a css class
            ));


        // service 1 grid starts
        $wp_customize->add_setting('AboutPageService1Required',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageService1Required',
                array('label'=> __('AboutPage Service 1 Required', 'w3layouts'),
                    'section'=> 'AboutPageServicesSection',
                    'settings'=> 'AboutPageService1Required'
                )));

        $wp_customize->add_setting('AboutPageService1Icon', array('default'=> 'fa fa-sitemap',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageService1Icon',
                array('label'=> __('AboutPage Service 1 Icon', 'w3layouts'),
                    'section'=> 'AboutPageServicesSection',
                    'settings'=> 'AboutPageService1Icon'
                )));

        $wp_customize->add_setting('AboutPageService1Title', array('default'=> "Organization",
                'transport'=> 'refresh',
            ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageService1Title',
                array('label'=> __('AboutPage Service 1 Title', 'w3layouts'),
                    'section'=> 'AboutPageServicesSection',
                    'settings'=> 'AboutPageService1Title',
                )));

        $wp_customize->add_setting('AboutPageService1Url', array('default'=> '#url',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageService1Url',
                array('label'=> __('AboutPage Service 1 Title URL', 'w3layouts'),
                    'section'=> 'AboutPageServicesSection',
                    'settings'=> 'AboutPageService1Url'
                )));

        $wp_customize->add_setting('AboutPageService1Content', array('default'=> 'Lorem ipsum dolor sit amet,Ea sed illum facere aperiam sequi optio consec
adipisicing elit.',
'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageService1Content',
                array('label'=> __('AboutPage Service 1 Content', 'w3layouts'),
                    'section'=> 'AboutPageServicesSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        // service 1 grid ends


        // service 2 grid starts
        $wp_customize->add_setting('AboutPageService2Required',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageService2Required',
                array('label'=> __('AboutPage Service 2 Required', 'w3layouts'),
                    'section'=> 'AboutPageServicesSection',
                    'settings'=> 'AboutPageService2Required'
                )));

        $wp_customize->add_setting('AboutPageService2Icon', array('default'=> 'fa fa-bar-chart',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageService2Icon',
                array('label'=> __('AboutPage Service 2 Icon', 'w3layouts'),
                    'section'=> 'AboutPageServicesSection',
                    'settings'=> 'AboutPageService2Icon'
                )));

        $wp_customize->add_setting('AboutPageService2Title', array('default'=> "Marketing",
                'transport'=> 'refresh',
            ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageService2Title',
                array('label'=> __('AboutPage Service 2 Title', 'w3layouts'),
                    'section'=> 'AboutPageServicesSection',
                    'settings'=> 'AboutPageService2Title',
                )));

        $wp_customize->add_setting('AboutPageService2Url', array('default'=> '#url',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageService2Url',
                array('label'=> __('AboutPage Service 2 Title URL', 'w3layouts'),
                    'section'=> 'AboutPageServicesSection',
                    'settings'=> 'AboutPageService2Url'
                )));

        $wp_customize->add_setting('AboutPageService2Content', array('default'=> 'Lorem ipsum dolor sit amet,Ea sed illum facere aperiam sequi optio consec
adipisicing elit.',
'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageService2Content',
                array('label'=> __('AboutPage Service 2 Content', 'w3layouts'),
                    'section'=> 'AboutPageServicesSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        // service 2 grid ends


        // service 3 grid starts
        $wp_customize->add_setting('AboutPageService3Required',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageService3Required',
                array('label'=> __('AboutPage Service 3 Required', 'w3layouts'),
                    'section'=> 'AboutPageServicesSection',
                    'settings'=> 'AboutPageService3Required'
                )));

        $wp_customize->add_setting('AboutPageService3Icon', array('default'=> 'fa fa-thumbs-o-up',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageService3Icon',
                array('label'=> __('AboutPage Service 3 Icon', 'w3layouts'),
                    'section'=> 'AboutPageServicesSection',
                    'settings'=> 'AboutPageService3Icon'
                )));

        $wp_customize->add_setting('AboutPageService3Title', array('default'=> "Improvement",
                'transport'=> 'refresh',
            ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageService3Title',
                array('label'=> __('AboutPage Service 3 Title', 'w3layouts'),
                    'section'=> 'AboutPageServicesSection',
                    'settings'=> 'AboutPageService3Title',
                )));

        $wp_customize->add_setting('AboutPageService3Url', array('default'=> '#url',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageService3Url',
                array('label'=> __('AboutPage Service 3 Title URL', 'w3layouts'),
                    'section'=> 'AboutPageServicesSection',
                    'settings'=> 'AboutPageService3Url'
                )));

        $wp_customize->add_setting('AboutPageService3Content', array('default'=> 'Lorem ipsum dolor sit amet,Ea sed illum facere aperiam sequi optio consec
adipisicing elit.',
'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageService3Content',
                array('label'=> __('AboutPage Service 3 Content', 'w3layouts'),
                    'section'=> 'AboutPageServicesSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        // service 3 grid ends


        $wp_customize->add_setting('AboutPageServicesImage',
            array('default'=> '',
                'transport'=> 'refresh',
                'sanitize_callback'=> 'absint'
            ));

        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'AboutPageServicesImage',
                array('label'=> __('About Services image'),
                    'description'=> esc_html__(''),
                    'section'=> 'AboutPageServicesSection',
                    'flex_width'=> false, // Optional. Default: false
                    'flex_height'=> true, // Optional. Default: false
                    'width'=> 400, // Optional. Default: 150
                    'height'=> 800, // Optional. Default: 150
                    'button_labels'=> array( // Optional.
                        'select'=> __('Select Image'),
                        'change'=> __('Change Image'),
                        'remove'=> __('Remove'),
                        'default'=> __('Default'),
                        'placeholder'=> __('No image selected'),
                        'frame_title'=> __('Select Image'),
                        'frame_button'=> __('Choose Image'),
                    ))));


        // service 4 grid starts
        $wp_customize->add_setting('AboutPageService4Required',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageService4Required',
                array('label'=> __('AboutPage Service 4 Required', 'w3layouts'),
                    'section'=> 'AboutPageServicesSection',
                    'settings'=> 'AboutPageService4Required'
                )));

        $wp_customize->add_setting('AboutPageService4Icon', array('default'=> 'fa fa-object-group',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageService4Icon',
                array('label'=> __('AboutPage Service 4 Icon', 'w3layouts'),
                    'section'=> 'AboutPageServicesSection',
                    'settings'=> 'AboutPageService4Icon'
                )));

        $wp_customize->add_setting('AboutPageService4Title', array('default'=> "Sustainability",
                'transport'=> 'refresh',
            ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageService4Title',
                array('label'=> __('AboutPage Service 4 Title', 'w3layouts'),
                    'section'=> 'AboutPageServicesSection',
                    'settings'=> 'AboutPageService4Title',
                )));

        $wp_customize->add_setting('AboutPageService4Url', array('default'=> '#url',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageService4Url',
                array('label'=> __('AboutPage Service 4 Title URL', 'w3layouts'),
                    'section'=> 'AboutPageServicesSection',
                    'settings'=> 'AboutPageService4Url'
                )));

        $wp_customize->add_setting('AboutPageService4Content', array('default'=> 'Lorem ipsum dolor sit amet,Ea sed illum facere aperiam sequi optio consec
adipisicing elit.',
'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageService4Content',
                array('label'=> __('AboutPage Service 4 Content', 'w3layouts'),
                    'section'=> 'AboutPageServicesSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        // service 4 grid ends


        // service 5 grid starts
        $wp_customize->add_setting('AboutPageService5Required',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageService5Required',
                array('label'=> __('AboutPage Service 5 Required', 'w3layouts'),
                    'section'=> 'AboutPageServicesSection',
                    'settings'=> 'AboutPageService5Required'
                )));

        $wp_customize->add_setting('AboutPageService5Icon', array('default'=> 'fa fa-bullseye',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageService5Icon',
                array('label'=> __('AboutPage Service 5 Icon', 'w3layouts'),
                    'section'=> 'AboutPageServicesSection',
                    'settings'=> 'AboutPageService5Icon'
                )));

        $wp_customize->add_setting('AboutPageService5Title', array('default'=> "Customer Strategy",
                'transport'=> 'refresh',
            ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageService5Title',
                array('label'=> __('AboutPage Service 5 Title', 'w3layouts'),
                    'section'=> 'AboutPageServicesSection',
                    'settings'=> 'AboutPageService5Title',
                )));

        $wp_customize->add_setting('AboutPageService5Url', array('default'=> '#url',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageService5Url',
                array('label'=> __('AboutPage Service 5 Title URL', 'w3layouts'),
                    'section'=> 'AboutPageServicesSection',
                    'settings'=> 'AboutPageService5Url'
                )));

        $wp_customize->add_setting('AboutPageService5Content', array('default'=> 'Lorem ipsum dolor sit amet,Ea sed illum facere aperiam sequi optio consec
adipisicing elit.',
'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageService5Content',
                array('label'=> __('AboutPage Service 5 Content', 'w3layouts'),
                    'section'=> 'AboutPageServicesSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        // service 5 grid ends


        // service 6 grid starts
        $wp_customize->add_setting('AboutPageService6Required',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageService6Required',
                array('label'=> __('AboutPage Service 6 Required', 'w3layouts'),
                    'section'=> 'AboutPageServicesSection',
                    'settings'=> 'AboutPageService6Required'
                )));

        $wp_customize->add_setting('AboutPageService6Icon', array('default'=> 'fa fa-flask',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageService6Icon',
                array('label'=> __('AboutPage Service 6 Icon', 'w3layouts'),
                    'section'=> 'AboutPageServicesSection',
                    'settings'=> 'AboutPageService6Icon'
                )));

        $wp_customize->add_setting('AboutPageService6Title', array('default'=> "Transformation",
                'transport'=> 'refresh',
            ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageService6Title',
                array('label'=> __('AboutPage Service 6 Title', 'w3layouts'),
                    'section'=> 'AboutPageServicesSection',
                    'settings'=> 'AboutPageService6Title',
                )));

        $wp_customize->add_setting('AboutPageService6Url', array('default'=> '#url',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageService6Url',
                array('label'=> __('AboutPage Service 6 Title URL', 'w3layouts'),
                    'section'=> 'AboutPageServicesSection',
                    'settings'=> 'AboutPageService6Url'
                )));

        $wp_customize->add_setting('AboutPageService6Content', array('default'=> 'Lorem ipsum dolor sit amet,Ea sed illum facere aperiam sequi optio consec
adipisicing elit.',
'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageService6Content',
                array('label'=> __('AboutPage Service 6 Content', 'w3layouts'),
                    'section'=> 'AboutPageServicesSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        // service 6 grid ends


        // AboutPage Services top & bottom area textarea

        $wp_customize->add_setting('AboutPageServicesTopArea', array('default'=> '',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageServicesTopArea',
                array('label'=> __('AboutPage Services Top', 'w3layouts'),
                    'section'=> 'AboutPageServicesSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        $wp_customize->add_setting('AboutPageServicesBottomArea', array('default'=> '',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageServicesBottomArea',
                array('label'=> __('AboutPage Services Bottom', 'w3layouts'),
                    'section'=> 'AboutPageServicesSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));
        // AboutPage Services top & bottom area textarea

        /** AboutPage Services section ends **/






        /** AboutPage Skills starts **/

        $wp_customize->add_setting('AboutPageSkillsRequired',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageSkillsRequired',
                array('label'=> __('AboutPage Skills Required', 'w3layouts'),
                    'section'=> 'AboutPageSkillsSection',
                    'settings'=> 'AboutPageSkillsRequired',
                    'priority'=> 1)));
        $wp_customize->selective_refresh->add_partial('AboutPageSkillsRequired', array('selector'=> 'div.AboutPageSkills', // You can also select a css class
            ));


        $wp_customize->add_setting('AboutPageSkillsTitle', array('default'=> 'Strategy is at the Heart of What We Do',
                'transport'=> 'refresh', ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageSkillsTitle',
                array('label'=> __('Skills Title', 'w3layouts'),
                    'section'=> 'AboutPageSkillsSection',
                    'settings'=> 'AboutPageSkillsTitle'
                )));

        $wp_customize->add_setting('AboutPageSkillsDisc', array('default'=> 'Lorem ipsum viverra feugiat. Pellen tesque libero ut justo, ultrices in
ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet elit.',
'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageSkillsDisc',
                array('label'=> __('Skills Right Para', 'w3layouts'),
                    'section'=> 'AboutPageSkillsSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));


        $wp_customize->add_setting('AboutPageSkill1Title', array('default'=> 'Digital Strategy',
                'transport'=> 'refresh', ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageSkill1Title',
                array('label'=> __('Skill 1 Title', 'w3layouts'),
                    'section'=> 'AboutPageSkillsSection',
                    'settings'=> 'AboutPageSkill1Title'
                )));

        $wp_customize->add_setting('AboutPageSkill2Title', array('default'=> 'Financial Services',
                'transport'=> 'refresh', ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageSkill2Title',
                array('label'=> __('Skill 2 Title', 'w3layouts'),
                    'section'=> 'AboutPageSkillsSection',
                    'settings'=> 'AboutPageSkill2Title'
                )));

        $wp_customize->add_setting('AboutPageSkill3Title', array('default'=> 'Counsalting',
                'transport'=> 'refresh', ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageSkill3Title',
                array('label'=> __('Skill 3 Title', 'w3layouts'),
                    'section'=> 'AboutPageSkillsSection',
                    'settings'=> 'AboutPageSkill3Title'
                )));

        $wp_customize->add_setting('AboutPageSkillImage',
            array('default'=> '',
                'transport'=> 'refresh',
                'sanitize_callback'=> 'absint'
            ));

        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'AboutPageSkillImage',
                array('label'=> __('AboutPage Skill Image'),
                    'description'=> esc_html__(''),
                    'section'=> 'AboutPageSkillsSection',
                    'flex_width'=> false, // Optional. Default: false
                    'flex_height'=> true, // Optional. Default: false
                    'width'=> 640, // Optional. Default: 150
                    'height'=> 427, // Optional. Default: 150
                    'button_labels'=> array( // Optional.
                        'select'=> __('Select Image'),
                        'change'=> __('Change Image'),
                        'remove'=> __('Remove'),
                        'default'=> __('Default'),
                        'placeholder'=> __('No image selected'),
                        'frame_title'=> __('Select Image'),
                        'frame_button'=> __('Choose Image'),
                    ))));

        // AboutPage Skills top & bottom area textarea

        $wp_customize->add_setting('AboutPageSkillsTopArea', array('default'=> '',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageSkillsTopArea',
                array('label'=> __('Skills Top', 'w3layouts'),
                    'section'=> 'AboutPageSkillsSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        $wp_customize->add_setting('AboutPageSkillsBottomArea', array('default'=> '',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageSkillsBottomArea',
                array('label'=> __('Skills Bottom', 'w3layouts'),
                    'section'=> 'AboutPageSkillsSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));
        // AboutPage Skills top & bottom  area textarea

        /** AboutPage Skills ends **/






        /** AboutPage Cover section starts **/

        $wp_customize->add_setting('AboutPageCoverRequired',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageCoverRequired',
                array('label'=> __('AboutPage Cover Section Required', 'w3layouts'),
                    'section'=> 'AboutPageCoverSection',
                    'settings'=> 'AboutPageCoverRequired',
                    'priority'=> 1)));

        $wp_customize->selective_refresh->add_partial('AboutPageCoverRequired', array('selector'=> 'div.AboutPageCover', // You can also select a css class
            ));

        $wp_customize->add_setting('AboutPageCoverBgImage',
            array('default'=> '',
                'transport'=> 'refresh',
                'sanitize_callback'=> 'absint'
            ));

        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'AboutPageCoverBgImage',
                array('label'=> __('AboutPage Cover Bg Image'),
                    'description'=> esc_html__(''),
                    'section'=> 'AboutPageCoverSection',
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

        $wp_customize->add_setting('AboutPageCoverTitle', array('default'=> "Start Your Journey to Better Business",
                'transport'=> 'refresh',
            ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageCoverTitle',
                array('label'=> __('AboutPage Cover Title', 'w3layouts'),
                    'section'=> 'AboutPageCoverSection',
                    'settings'=> 'AboutPageCoverTitle',
                )));

        $wp_customize->add_setting('AboutPageCoverGetStartedButtontxt', array('default'=> 'Get Started Today',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageCoverGetStartedButtontxt',
                array('label'=> __('Get Started Button Text', 'w3layouts'),
                    'section'=> 'AboutPageCoverSection',
                    'settings'=> 'AboutPageCoverGetStartedButtontxt'
                )));

        $wp_customize->add_setting('AboutPageCoverGetStartedButtonUrl', array('default'=> 'about#url',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageCoverGetStartedButtonUrl',
                array('label'=> __('Get Started Button URL', 'w3layouts'),
                    'section'=> 'AboutPageCoverSection',
                    'settings'=> 'AboutPageCoverGetStartedButtonUrl'
                )));


        // AboutPage Cover Section top & bottom  textarea

        $wp_customize->add_setting('AboutPageCoverTopArea', array('default'=> '',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageCoverTopArea',
                array('label'=> __('Cover Top', 'w3layouts'),
                    'section'=> 'AboutPageCoverSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        $wp_customize->add_setting('AboutPageCoverBottomArea', array('default'=> '',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageCoverBottomArea',
                array('label'=> __('Cover Bottom', 'w3layouts'),
                    'section'=> 'AboutPageCoverSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        // AboutPage Cover Section top & bottom  textarea

        /** AboutPage Cover section ends **/







        /** AboutPage Team starts **/

        $wp_customize->add_setting('AboutPageTeamRequired',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageTeamRequired',
                array('label'=> __('AboutPage Team Required', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeamRequired',
                    'priority'=> 1)));
        $wp_customize->selective_refresh->add_partial('AboutPageTeamRequired', array('selector'=> 'div.AboutPageTeam', // You can also select a css class
            ));

        $wp_customize->add_setting('AboutPageTeamTitle1', array('default'=> 'Strongest Team',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTeamTitle1',
                array('label'=> __('Team Title 1', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeamTitle1'
                )));

        $wp_customize->add_setting('AboutPageTeamTitle2', array('default'=> 'Meet our team',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTeamTitle2',
                array('label'=> __('Team Title 2', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeamTitle2'
                )));


        // Team 1
        $wp_customize->add_setting('AboutPageTeam1Required',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageTeam1Required',
                array('label'=> __('Team 1 Required', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam1Required'
                )));

        $wp_customize->add_setting('AboutPageTeam1Image',
            array('default'=> '',
                'transport'=> 'refresh',
                'sanitize_callback'=> 'absint'
            ));

        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'AboutPageTeam1Image',
                array('label'=> __('Team 1 image'),
                    'description'=> esc_html__(''),
                    'section'=> 'AboutPageTeamSection',
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

        $wp_customize->add_setting('AboutPageTeam1Title', array('default'=> 'Daniel jacobs',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTeam1Title',
                array('label'=> __('Team 1 Name', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam1Title'
                )));

        $wp_customize->add_setting('AboutPageTeam1TitleUrl', array('default'=> '#url',
                'transport'=> 'refresh', ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTeam1TitleUrl',
                array('label'=> __('Team 1 Title URL', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam1TitleUrl'
                )));

        $wp_customize->add_setting('AboutPageTeam1Designation', array('default'=> 'Markrting Officer',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTeam1Designation',
                array('label'=> __('Team 1 Designation', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam1Designation'
                )));

        $wp_customize->add_setting('AboutPageTeam1SocialFacebook',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageTeam1SocialFacebook',
                array('label'=> __('Team 1 Facebook Required', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam1SocialFacebook'
                )));

        $wp_customize->add_setting('AboutPageTeam1SocialFacebookURL', array('default'=> 'https://www.facebook.com/w3layouts/',
                'transport'=> 'refresh', ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTeam1SocialFacebookURL',
                array('label'=> __('Team 1 FaceBook URL', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam1SocialFacebookURL'
                )));

        $wp_customize->add_setting('AboutPageTeam1SocialTwitter',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageTeam1SocialTwitter',
                array('label'=> __('Team 1 Twitter Required', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam1SocialTwitter'
                )));

        $wp_customize->add_setting('AboutPageTeam1SocialTwitterURL', array('default'=> 'https://twitter.com/W3layouts',
                'transport'=> 'refresh', ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTeam1SocialTwitterURL',
                array('label'=> __('Team 1 Twitter URL', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam1SocialTwitterURL'
                )));

        $wp_customize->add_setting('AboutPageTeam1SocialInstagram',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageTeam1SocialInstagram',
                array('label'=> __('Team 1 Instagram Required', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam1SocialInstagram'
                )));

        $wp_customize->add_setting('AboutPageTeam1SocialInstagramURL', array('default'=> 'https://www.instagram.com/w3layouts_/',
                'transport'=> 'refresh', ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTeam1SocialInstagramURL',
                array('label'=> __('Team 1 Instagram URL', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam1SocialInstagramURL'
                )));
        // Team 1


        // Team 2
        $wp_customize->add_setting('AboutPageTeam2Required',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageTeam2Required',
                array('label'=> __('Team 2 Required', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam2Required'
                )));

        $wp_customize->add_setting('AboutPageTeam2Image',
            array('default'=> '',
                'transport'=> 'refresh',
                'sanitize_callback'=> 'absint'
            ));

        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'AboutPageTeam2Image',
                array('label'=> __('Team 2 image'),
                    'description'=> esc_html__(''),
                    'section'=> 'AboutPageTeamSection',
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

        $wp_customize->add_setting('AboutPageTeam2Title', array('default'=> 'Claire Daniel',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTeam2Title',
                array('label'=> __('Team 2 Name', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam2Title'
                )));

        $wp_customize->add_setting('AboutPageTeam2TitleUrl', array('default'=> '#url',
                'transport'=> 'refresh', ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTeam2TitleUrl',
                array('label'=> __('Team 2 Title URL', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam2TitleUrl'
                )));

        $wp_customize->add_setting('AboutPageTeam2Designation', array('default'=> 'Customer Officer',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTeam2Designation',
                array('label'=> __('Team 2 Designation', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam2Designation'
                )));

        $wp_customize->add_setting('AboutPageTeam2SocialFacebook',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageTeam2SocialFacebook',
                array('label'=> __('Team 2 Facebook Required', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam2SocialFacebook'
                )));

        $wp_customize->add_setting('AboutPageTeam2SocialFacebookURL', array('default'=> 'https://www.facebook.com/w3layouts/',
                'transport'=> 'refresh', ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTeam2SocialFacebookURL',
                array('label'=> __('Team 2 FaceBook URL', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam2SocialFacebookURL'
                )));

        $wp_customize->add_setting('AboutPageTeam2SocialTwitter',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageTeam2SocialTwitter',
                array('label'=> __('Team 2 Twitter Required', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam2SocialTwitter'
                )));

        $wp_customize->add_setting('AboutPageTeam2SocialTwitterURL', array('default'=> 'https://twitter.com/W3layouts',
                'transport'=> 'refresh', ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTeam2SocialTwitterURL',
                array('label'=> __('Team 2 Twitter URL', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam2SocialTwitterURL'
                )));

        $wp_customize->add_setting('AboutPageTeam2SocialInstagram',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageTeam2SocialInstagram',
                array('label'=> __('Team 2 Instagram Required', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam2SocialInstagram'
                )));

        $wp_customize->add_setting('AboutPageTeam2SocialInstagramURL', array('default'=> 'https://www.instagram.com/w3layouts_/',
                'transport'=> 'refresh', ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTeam2SocialInstagramURL',
                array('label'=> __('Team 2 Instagram URL', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam2SocialInstagramURL'
                )));
        // Team 2


        // Team 3
        $wp_customize->add_setting('AboutPageTeam3Required',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageTeam3Required',
                array('label'=> __('Team 3 Required', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam3Required'
                )));

        $wp_customize->add_setting('AboutPageTeam3Image',
            array('default'=> '',
                'transport'=> 'refresh',
                'sanitize_callback'=> 'absint'
            ));

        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'AboutPageTeam3Image',
                array('label'=> __('Team 3 image'),
                    'description'=> esc_html__(''),
                    'section'=> 'AboutPageTeamSection',
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

        $wp_customize->add_setting('AboutPageTeam3Title', array('default'=> 'Daniel Hunt',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTeam3Title',
                array('label'=> __('Team 3 Name', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam3Title'
                )));

        $wp_customize->add_setting('AboutPageTeam3TitleUrl', array('default'=> '#url',
                'transport'=> 'refresh', ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTeam3TitleUrl',
                array('label'=> __('Team 3 Title URL', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam3TitleUrl'
                )));

        $wp_customize->add_setting('AboutPageTeam3Designation', array('default'=> 'Excutive Officer',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTeam3Designation',
                array('label'=> __('Team 3 Designation', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam3Designation'
                )));

        $wp_customize->add_setting('AboutPageTeam3SocialFacebook',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageTeam3SocialFacebook',
                array('label'=> __('Team 3 Facebook Required', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam3SocialFacebook'
                )));

        $wp_customize->add_setting('AboutPageTeam3SocialFacebookURL', array('default'=> 'https://www.facebook.com/w3layouts/',
                'transport'=> 'refresh', ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTeam3SocialFacebookURL',
                array('label'=> __('Team 3 FaceBook URL', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam3SocialFacebookURL'
                )));

        $wp_customize->add_setting('AboutPageTeam3SocialTwitter',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageTeam3SocialTwitter',
                array('label'=> __('Team 3 Twitter Required', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam3SocialTwitter'
                )));

        $wp_customize->add_setting('AboutPageTeam3SocialTwitterURL', array('default'=> 'https://twitter.com/W3layouts',
                'transport'=> 'refresh', ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTeam3SocialTwitterURL',
                array('label'=> __('Team 3 Twitter URL', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam3SocialTwitterURL'
                )));

        $wp_customize->add_setting('AboutPageTeam3SocialInstagram',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageTeam3SocialInstagram',
                array('label'=> __('Team 3 Instagram Required', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam3SocialInstagram'
                )));

        $wp_customize->add_setting('AboutPageTeam3SocialInstagramURL', array('default'=> 'https://www.instagram.com/w3layouts_/',
                'transport'=> 'refresh', ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTeam3SocialInstagramURL',
                array('label'=> __('Team 3 Instagram URL', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam3SocialInstagramURL'
                )));
        // Team 3


        // Team 4
        $wp_customize->add_setting('AboutPageTeam4Required',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageTeam4Required',
                array('label'=> __('Team 4 Required', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam4Required'
                )));

        $wp_customize->add_setting('AboutPageTeam4Image',
            array('default'=> '',
                'transport'=> 'refresh',
                'sanitize_callback'=> 'absint'
            ));

        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'AboutPageTeam4Image',
                array('label'=> __('Team 4 image'),
                    'description'=> esc_html__(''),
                    'section'=> 'AboutPageTeamSection',
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

        $wp_customize->add_setting('AboutPageTeam4Title', array('default'=> 'Kelli Grant',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTeam4Title',
                array('label'=> __('Team 4 Name', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam4Title'
                )));

        $wp_customize->add_setting('AboutPageTeam4TitleUrl', array('default'=> '#url',
                'transport'=> 'refresh', ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTeam4TitleUrl',
                array('label'=> __('Team 4 Title URL', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam4TitleUrl'
                )));

        $wp_customize->add_setting('AboutPageTeam4Designation', array('default'=> 'Chef
Excutive Officer',
'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTeam4Designation',
                array('label'=> __('Team 4 Designation', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam4Designation'
                )));

        $wp_customize->add_setting('AboutPageTeam4SocialFacebook',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageTeam4SocialFacebook',
                array('label'=> __('Team 4 Facebook Required', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam4SocialFacebook'
                )));

        $wp_customize->add_setting('AboutPageTeam4SocialFacebookURL', array('default'=> 'https://www.facebook.com/w3layouts/',
                'transport'=> 'refresh', ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTeam4SocialFacebookURL',
                array('label'=> __('Team 4 FaceBook URL', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam4SocialFacebookURL'
                )));

        $wp_customize->add_setting('AboutPageTeam4SocialTwitter',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageTeam4SocialTwitter',
                array('label'=> __('Team 4 Twitter Required', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam4SocialTwitter'
                )));

        $wp_customize->add_setting('AboutPageTeam4SocialTwitterURL', array('default'=> 'https://twitter.com/W3layouts',
                'transport'=> 'refresh', ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTeam4SocialTwitterURL',
                array('label'=> __('Team 4 Twitter URL', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam4SocialTwitterURL'
                )));

        $wp_customize->add_setting('AboutPageTeam4SocialInstagram',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'AboutPageTeam4SocialInstagram',
                array('label'=> __('Team 4 Instagram Required', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam4SocialInstagram'
                )));

        $wp_customize->add_setting('AboutPageTeam4SocialInstagramURL', array('default'=> 'https://www.instagram.com/w3layouts_/',
                'transport'=> 'refresh', ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTeam4SocialInstagramURL',
                array('label'=> __('Team 4 Instagram URL', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'settings'=> 'AboutPageTeam4SocialInstagramURL'
                )));
        // Team 4

        // AboutPage Team top & bottom  area textarea

        $wp_customize->add_setting('AboutPageTeamTopArea', array('default'=> '',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTeamTopArea',
                array('label'=> __('Team Top', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        $wp_customize->add_setting('AboutPageTeamBottomArea', array('default'=> '',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'AboutPageTeamBottomArea',
                array('label'=> __('Team Bottom', 'w3layouts'),
                    'section'=> 'AboutPageTeamSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));
        // AboutPage Team top & bottom  area textarea


        /** AboutPage Team ends **/



    }

}