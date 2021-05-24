<?php
/**
 * w3layouts Theme Services page Customizer
 *
 * @package w3layouts
 */

$w3layouts_Services_settings=new w3layouts_Services_customizer_settings();

class w3layouts_Services_customizer_settings {
    // Get our default values
    // private $defaults;

    public function __construct() {
        // add_action( 'customize_register', array( $this, 'w3layouts_services_cust_register' ) );
        add_action('customize_register', array($this, 'w3layouts_Servicespage_panels'));

    }

    public function w3layouts_Servicespage_panels($wp_customize) {
        /**
 		 * Add our Header & Navigation Panel
 		 */
        $wp_customize->add_panel('ServicesPage_panel',
            array('title'=> __('Services Page Customize', 'w3layouts'),
                'priority'=> 30,
                'description'=> esc_html__('add and update Servicespage data.', 'w3layouts')));

        $wp_customize->add_section('ServicesPageBannerSection',
            array('title'=> __('Section 1 Services Banner', 'w3layouts'),
                'description'=> esc_html__('', 'w3layouts'),
                'panel'=> 'ServicesPage_panel'
            ));

        $wp_customize->add_section('ServicesPageServicesSection',
            array('title'=> __('Section 2 Services', 'w3layouts'),
                'description'=> esc_html__('', 'w3layouts'),
                'panel'=> 'ServicesPage_panel'
            ));






        /** Servicespage Banner section starts **/

        $wp_customize->add_setting('ServicesPageBannerBgImage',
            array('default'=> '',
                'transport'=> 'refresh',
                'sanitize_callback'=> 'absint'
            ));

        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'ServicesPageBannerBgImage',
                array('label'=> __('Servicespage Banner Bg Image'),
                    'description'=> esc_html__(''),
                    'section'=> 'ServicesPageBannerSection',
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
        $wp_customize->selective_refresh->add_partial('ServicesPageBannerBgImage', array('selector'=> 'div.ServicesPageBannerImage', // You can also select a css class
            ));

        /** Servicespage Banner section ends **/




        /** ServicesPage Services section starts **/

        $wp_customize->add_setting('ServicesPageServicesRequired',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'ServicesPageServicesRequired',
                array('label'=> __('ServicesPage Services Section Required', 'w3layouts'),
                    'section'=> 'ServicesPageServicesSection',
                    'settings'=> 'ServicesPageServicesRequired',
                    'priority'=> 1)));

        $wp_customize->selective_refresh->add_partial('ServicesPageServicesRequired', array('selector'=> 'div.ServicesPageServices', // You can also select a css class
            ));

        $wp_customize->add_setting('ServicesPageServicesTitle1', array('default'=> 'What We Do',
                'transport'=> 'refresh', ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'ServicesPageServicesTitle1',
                array('label'=> __('Services Main Title 1', 'w3layouts'),
                    'section'=> 'ServicesPageServicesSection',
                    'settings'=> 'ServicesPageServicesTitle1'
                )));

        $wp_customize->add_setting('ServicesPageServicesTitle2', array('default'=> 'Our Services',
                'transport'=> 'refresh', ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'ServicesPageServicesTitle2',
                array('label'=> __('Services Main Title 2', 'w3layouts'),
                    'section'=> 'ServicesPageServicesSection',
                    'settings'=> 'ServicesPageServicesTitle2'
                )));

        $wp_customize->add_setting('ServicesPageServicesContent', array('default'=> 'Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio
consectetur adipisicing.Nunc id ipsum fringilla, gravida felis vitae.',
'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'ServicesPageServicesContent',
                array('label'=> __('Services Main Content', 'w3layouts'),
                    'section'=> 'ServicesPageServicesSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));


        // service 1 grid starts

        $wp_customize->add_setting('ServicesPageService1Required',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'ServicesPageService1Required',
                array('label'=> __('ServicesPage Service 1 Required', 'w3layouts'),
                    'section'=> 'ServicesPageServicesSection',
                    'settings'=> 'ServicesPageService1Required'
                )));

        $wp_customize->add_setting('ServicesPageService1BgImage',
            array('default'=> '',
                'transport'=> 'refresh',
                'sanitize_callback'=> 'absint'
            ));

        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'ServicesPageService1BgImage',
                array('label'=> __('Servicespage Service 1 Bg Image'),
                    'description'=> esc_html__(''),
                    'section'=> 'ServicesPageServicesSection',
                    'flex_width'=> false, // Optional. Default: false
                    'flex_height'=> true, // Optional. Default: false
                    'width'=> 640, // Optional. Default: 150
                    'height'=> 426, // Optional. Default: 150
                    'button_labels'=> array( // Optional.
                        'select'=> __('Select Image'),
                        'change'=> __('Change Image'),
                        'remove'=> __('Remove'),
                        'default'=> __('Default'),
                        'placeholder'=> __('No image selected'),
                        'frame_title'=> __('Select Image'),
                        'frame_button'=> __('Choose Image'),
                    ))));

        $wp_customize->add_setting('ServicesPageService1Icon', array('default'=> 'fa fa-linode',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'ServicesPageService1Icon',
                array('label'=> __('ServicesPage Service 1 Icon', 'w3layouts'),
                    'section'=> 'ServicesPageServicesSection',
                    'settings'=> 'ServicesPageService1Icon'
                )));

        $wp_customize->add_setting('ServicesPageService1Url', array('default'=> '#url',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'ServicesPageService1Url',
                array('label'=> __('ServicesPage Service 1 URL', 'w3layouts'),
                    'section'=> 'ServicesPageServicesSection',
                    'settings'=> 'ServicesPageService1Url'
                )));

        $wp_customize->add_setting('ServicesPageService1Title', array('default'=> "Advanced<br> Analytic",
                'transport'=> 'refresh',
            ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'ServicesPageService1Title',
                array('label'=> __('ServicesPage Service 1 Title', 'w3layouts'),
                    'section'=> 'ServicesPageServicesSection',
                    'settings'=> 'ServicesPageService1Title',
                )));

        // service 1 grid ends


        // service 2 grid starts

        $wp_customize->add_setting('ServicesPageService2Required',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'ServicesPageService2Required',
                array('label'=> __('ServicesPage Service 2 Required', 'w3layouts'),
                    'section'=> 'ServicesPageServicesSection',
                    'settings'=> 'ServicesPageService2Required'
                )));

        $wp_customize->add_setting('ServicesPageService2BgImage',
            array('default'=> '',
                'transport'=> 'refresh',
                'sanitize_callback'=> 'absint'
            ));

        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'ServicesPageService2BgImage',
                array('label'=> __('Servicespage Service 2 Bg Image'),
                    'description'=> esc_html__(''),
                    'section'=> 'ServicesPageServicesSection',
                    'flex_width'=> false, // Optional. Default: false
                    'flex_height'=> true, // Optional. Default: false
                    'width'=> 640, // Optional. Default: 150
                    'height'=> 426, // Optional. Default: 150
                    'button_labels'=> array( // Optional.
                        'select'=> __('Select Image'),
                        'change'=> __('Change Image'),
                        'remove'=> __('Remove'),
                        'default'=> __('Default'),
                        'placeholder'=> __('No image selected'),
                        'frame_title'=> __('Select Image'),
                        'frame_button'=> __('Choose Image'),
                    ))));

        $wp_customize->add_setting('ServicesPageService2Icon', array('default'=> 'fa fa-thumbs-o-up',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'ServicesPageService2Icon',
                array('label'=> __('ServicesPage Service 2 Icon', 'w3layouts'),
                    'section'=> 'ServicesPageServicesSection',
                    'settings'=> 'ServicesPageService2Icon'
                )));

        $wp_customize->add_setting('ServicesPageService2Url', array('default'=> '#url',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'ServicesPageService2Url',
                array('label'=> __('ServicesPage Service 2 URL', 'w3layouts'),
                    'section'=> 'ServicesPageServicesSection',
                    'settings'=> 'ServicesPageService2Url'
                )));

        $wp_customize->add_setting('ServicesPageService2Title', array('default'=> "New Business<br> Innovation",
                'transport'=> 'refresh',
            ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'ServicesPageService2Title',
                array('label'=> __('ServicesPage Service 2 Title', 'w3layouts'),
                    'section'=> 'ServicesPageServicesSection',
                    'settings'=> 'ServicesPageService2Title',
                )));

        // service 2 grid ends


        // service 3 grid starts

        $wp_customize->add_setting('ServicesPageService3Required',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'ServicesPageService3Required',
                array('label'=> __('ServicesPage Service 3 Required', 'w3layouts'),
                    'section'=> 'ServicesPageServicesSection',
                    'settings'=> 'ServicesPageService3Required'
                )));

        $wp_customize->add_setting('ServicesPageService3BgImage',
            array('default'=> '',
                'transport'=> 'refresh',
                'sanitize_callback'=> 'absint'
            ));

        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'ServicesPageService3BgImage',
                array('label'=> __('Servicespage Service 3 Bg Image'),
                    'description'=> esc_html__(''),
                    'section'=> 'ServicesPageServicesSection',
                    'flex_width'=> false, // Optional. Default: false
                    'flex_height'=> true, // Optional. Default: false
                    'width'=> 640, // Optional. Default: 150
                    'height'=> 426, // Optional. Default: 150
                    'button_labels'=> array( // Optional.
                        'select'=> __('Select Image'),
                        'change'=> __('Change Image'),
                        'remove'=> __('Remove'),
                        'default'=> __('Default'),
                        'placeholder'=> __('No image selected'),
                        'frame_title'=> __('Select Image'),
                        'frame_button'=> __('Choose Image'),
                    ))));

        $wp_customize->add_setting('ServicesPageService3Icon', array('default'=> 'fa fa-money',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'ServicesPageService3Icon',
                array('label'=> __('ServicesPage Service 3 Icon', 'w3layouts'),
                    'section'=> 'ServicesPageServicesSection',
                    'settings'=> 'ServicesPageService3Icon'
                )));

        $wp_customize->add_setting('ServicesPageService3Url', array('default'=> '#url',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'ServicesPageService3Url',
                array('label'=> __('ServicesPage Service 3 URL', 'w3layouts'),
                    'section'=> 'ServicesPageServicesSection',
                    'settings'=> 'ServicesPageService3Url'
                )));

        $wp_customize->add_setting('ServicesPageService3Title', array('default'=> "Corporate<br> Finance",
                'transport'=> 'refresh',
            ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'ServicesPageService3Title',
                array('label'=> __('ServicesPage Service 3 Title', 'w3layouts'),
                    'section'=> 'ServicesPageServicesSection',
                    'settings'=> 'ServicesPageService3Title',
                )));

        // service 3 grid ends


        // service 4 grid starts

        $wp_customize->add_setting('ServicesPageService4Required',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'ServicesPageService4Required',
                array('label'=> __('ServicesPage Service 4 Required', 'w3layouts'),
                    'section'=> 'ServicesPageServicesSection',
                    'settings'=> 'ServicesPageService4Required'
                )));

        $wp_customize->add_setting('ServicesPageService4BgImage',
            array('default'=> '',
                'transport'=> 'refresh',
                'sanitize_callback'=> 'absint'
            ));

        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'ServicesPageService4BgImage',
                array('label'=> __('Servicespage Service 4 Bg Image'),
                    'description'=> esc_html__(''),
                    'section'=> 'ServicesPageServicesSection',
                    'flex_width'=> false, // Optional. Default: false
                    'flex_height'=> true, // Optional. Default: false
                    'width'=> 640, // Optional. Default: 150
                    'height'=> 426, // Optional. Default: 150
                    'button_labels'=> array( // Optional.
                        'select'=> __('Select Image'),
                        'change'=> __('Change Image'),
                        'remove'=> __('Remove'),
                        'default'=> __('Default'),
                        'placeholder'=> __('No image selected'),
                        'frame_title'=> __('Select Image'),
                        'frame_button'=> __('Choose Image'),
                    ))));

        $wp_customize->add_setting('ServicesPageService4Icon', array('default'=> 'fa fa-handshake-o',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'ServicesPageService4Icon',
                array('label'=> __('ServicesPage Service 4 Icon', 'w3layouts'),
                    'section'=> 'ServicesPageServicesSection',
                    'settings'=> 'ServicesPageService4Icon'
                )));

        $wp_customize->add_setting('ServicesPageService4Url', array('default'=> '#url',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'ServicesPageService4Url',
                array('label'=> __('ServicesPage Service 4 URL', 'w3layouts'),
                    'section'=> 'ServicesPageServicesSection',
                    'settings'=> 'ServicesPageService4Url'
                )));

        $wp_customize->add_setting('ServicesPageService4Title', array('default'=> "Partnership<br> System",
                'transport'=> 'refresh',
            ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'ServicesPageService4Title',
                array('label'=> __('ServicesPage Service 4 Title', 'w3layouts'),
                    'section'=> 'ServicesPageServicesSection',
                    'settings'=> 'ServicesPageService4Title',
                )));

        // service 4 grid ends


        // service 5 grid starts

        $wp_customize->add_setting('ServicesPageService5Required',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'ServicesPageService5Required',
                array('label'=> __('ServicesPage Service 5 Required', 'w3layouts'),
                    'section'=> 'ServicesPageServicesSection',
                    'settings'=> 'ServicesPageService5Required'
                )));

        $wp_customize->add_setting('ServicesPageService5BgImage',
            array('default'=> '',
                'transport'=> 'refresh',
                'sanitize_callback'=> 'absint'
            ));

        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'ServicesPageService5BgImage',
                array('label'=> __('Servicespage Service 5 Bg Image'),
                    'description'=> esc_html__(''),
                    'section'=> 'ServicesPageServicesSection',
                    'flex_width'=> false, // Optional. Default: false
                    'flex_height'=> true, // Optional. Default: false
                    'width'=> 640, // Optional. Default: 150
                    'height'=> 426, // Optional. Default: 150
                    'button_labels'=> array( // Optional.
                        'select'=> __('Select Image'),
                        'change'=> __('Change Image'),
                        'remove'=> __('Remove'),
                        'default'=> __('Default'),
                        'placeholder'=> __('No image selected'),
                        'frame_title'=> __('Select Image'),
                        'frame_button'=> __('Choose Image'),
                    ))));

        $wp_customize->add_setting('ServicesPageService5Icon', array('default'=> 'fa fa-bullhorn',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'ServicesPageService5Icon',
                array('label'=> __('ServicesPage Service 5 Icon', 'w3layouts'),
                    'section'=> 'ServicesPageServicesSection',
                    'settings'=> 'ServicesPageService5Icon'
                )));

        $wp_customize->add_setting('ServicesPageService5Url', array('default'=> '#url',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'ServicesPageService5Url',
                array('label'=> __('ServicesPage Service 5 URL', 'w3layouts'),
                    'section'=> 'ServicesPageServicesSection',
                    'settings'=> 'ServicesPageService5Url'
                )));

        $wp_customize->add_setting('ServicesPageService5Title', array('default'=> "Information<br> Technology",
                'transport'=> 'refresh',
            ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'ServicesPageService5Title',
                array('label'=> __('ServicesPage Service 5 Title', 'w3layouts'),
                    'section'=> 'ServicesPageServicesSection',
                    'settings'=> 'ServicesPageService5Title',
                )));

        // service 5 grid ends


        // service 6 grid starts

        $wp_customize->add_setting('ServicesPageService6Required',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'ServicesPageService6Required',
                array('label'=> __('ServicesPage Service 6 Required', 'w3layouts'),
                    'section'=> 'ServicesPageServicesSection',
                    'settings'=> 'ServicesPageService6Required'
                )));

        $wp_customize->add_setting('ServicesPageService6BgImage',
            array('default'=> '',
                'transport'=> 'refresh',
                'sanitize_callback'=> 'absint'
            ));

        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'ServicesPageService6BgImage',
                array('label'=> __('Servicespage Service 6 Bg Image'),
                    'description'=> esc_html__(''),
                    'section'=> 'ServicesPageServicesSection',
                    'flex_width'=> false, // Optional. Default: false
                    'flex_height'=> true, // Optional. Default: false
                    'width'=> 640, // Optional. Default: 150
                    'height'=> 426, // Optional. Default: 150
                    'button_labels'=> array( // Optional.
                        'select'=> __('Select Image'),
                        'change'=> __('Change Image'),
                        'remove'=> __('Remove'),
                        'default'=> __('Default'),
                        'placeholder'=> __('No image selected'),
                        'frame_title'=> __('Select Image'),
                        'frame_button'=> __('Choose Image'),
                    ))));

        $wp_customize->add_setting('ServicesPageService6Icon', array('default'=> 'fa fa-cubes',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'ServicesPageService6Icon',
                array('label'=> __('ServicesPage Service 6 Icon', 'w3layouts'),
                    'section'=> 'ServicesPageServicesSection',
                    'settings'=> 'ServicesPageService6Icon'
                )));

        $wp_customize->add_setting('ServicesPageService6Url', array('default'=> '#url',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'ServicesPageService6Url',
                array('label'=> __('ServicesPage Service 6 URL', 'w3layouts'),
                    'section'=> 'ServicesPageServicesSection',
                    'settings'=> 'ServicesPageService6Url'
                )));

        $wp_customize->add_setting('ServicesPageService6Title', array('default'=> "Recession<br>Strategies",
                'transport'=> 'refresh',
            ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'ServicesPageService6Title',
                array('label'=> __('ServicesPage Service 6 Title', 'w3layouts'),
                    'section'=> 'ServicesPageServicesSection',
                    'settings'=> 'ServicesPageService6Title',
                )));

        $wp_customize->add_setting('ServicesPageBtnRequired',
            array('default'=> 1,
                'transport'=> 'refresh',
                'sanitize_callback'=> 'skyrocket_switch_sanitization'
            ));
        $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'ServicesPageBtnRequired',
                array('label'=> __('ServicesPage Button Required', 'w3layouts'),
                    'section'=> 'ServicesPageServicesSection',
                    'settings'=> 'ServicesPageBtnRequired'
                )));

        $wp_customize->add_setting('ServicesPageReadMoreBtnUrl', array('default'=> '#url',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'ServicesPageReadMoreBtnUrl',
                array('label'=> __('ServicesPage Button URL', 'w3layouts'),
                    'section'=> 'ServicesPageServicesSection',
                    'settings'=> 'ServicesPageReadMoreBtnUrl'
                )));

        $wp_customize->add_setting('ServicesPageReadMoreBtnTxt', array('default'=> "Read More",
                'transport'=> 'refresh',
            ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'ServicesPageReadMoreBtnTxt',
                array('label'=> __('ServicesPage Button Text', 'w3layouts'),
                    'section'=> 'ServicesPageServicesSection',
                    'settings'=> 'ServicesPageReadMoreBtnTxt',
                )));

        // service 6 grid ends


        // ServicesPage Services top & bottom area textarea

        $wp_customize->add_setting('ServicesPageServicesTopArea', array('default'=> '',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'ServicesPageServicesTopArea',
                array('label'=> __('ServicesPage Services Top', 'w3layouts'),
                    'section'=> 'ServicesPageServicesSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));

        $wp_customize->add_setting('ServicesPageServicesBottomArea', array('default'=> '',
                'transport'=> 'refresh',
            ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,
                'ServicesPageServicesBottomArea',
                array('label'=> __('ServicesPage Services Bottom', 'w3layouts'),
                    'section'=> 'ServicesPageServicesSection',
                    'type'=> 'textarea',
                    'input_attrs'=> array('class'=> 'my-custom-class',
                        'style'=> 'border: 1px solid #999',
                        'placeholder'=> __('Enter message...', 'w3layouts'),
                    ),
                )));
        // ServicesPage Services top & bottom area textarea

        /** ServicesPage Services section ends **/




    }

}