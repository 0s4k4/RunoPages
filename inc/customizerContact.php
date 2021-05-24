<?php
/**
 * w3layouts Theme ContactUS page Customizer
 *
 * @package w3layouts
 */

$w3layouts_Contact_settings=new w3layouts_Contact_customizer_settings();

class w3layouts_Contact_customizer_settings {
  // Get our default values
  // private $defaults;

  public function __construct() {
    // add_action( 'customize_register', array( $this, 'w3layouts_about_cust_register' ) );
    add_action('customize_register', array($this, 'w3layouts_Contactpage_panels'));



  }

  public function w3layouts_Contactpage_panels($wp_customize) {
    /**
     * Add our Header & Navigation Panel
     */
    $wp_customize->add_panel('ContactPage_panel',
      array('title'=> __('Contact Page Customize', 'w3layouts'),
        'priority'=> 30,
        'description'=> esc_html__('add and update Contact Page data.', 'w3layouts')));

    $wp_customize->add_section('ContactPageBannerSection',
      array('title'=> __('Section 1 Contact Banner Section', 'w3layouts'),
        'description'=> esc_html__('', 'w3layouts'),
        'panel'=> 'ContactPage_panel'
      ));

    $wp_customize->add_section('ContactPageSection',
      array('title'=> __('Contact Page Section', 'w3layouts'),
        'description'=> esc_html__('', 'w3layouts'),
        'panel'=> 'ContactPage_panel'
      ));

    $wp_customize->add_section('ContactPageForm',
      array('title'=> __('Contact Page Form', 'w3layouts'),
        'description'=> esc_html__('', 'w3layouts'),
        'panel'=> 'ContactPage_panel'
      ));

    $wp_customize->add_section('ContactPageMap',
      array('title'=> __('Contact Page Map', 'w3layouts'),
        'description'=> esc_html__('', 'w3layouts'),
        'panel'=> 'ContactPage_panel'
      ));




    /** ContactPage Banner section starts **/

    $wp_customize->add_setting('ContactPageBannerBgImage',
      array('default'=> '',
        'transport'=> 'refresh',
        'sanitize_callback'=> 'absint'
      ));

    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'ContactPageBannerBgImage',
        array('label'=> __('ContactPage Banner Bg Image'),
          'description'=> esc_html__(''),
          'section'=> 'ContactPageBannerSection',
          'flex_width'=> false, // Optional. Default: false
          'flex_height'=> true, // Optional. Default: false
          'width'=> 1760, // Optional. Default: 150
          'height'=> 900, // Optional. Default: 150
          'button_labels'=> array( // Optional.
            'select'=> __('Select Image'),
            'change'=> __('Change Image'),
            'remove'=> __('Remove'),
            'default'=> __('Default'),
            'placeholder'=> __('No image selected'),
            'frame_title'=> __('Select Image'),
            'frame_button'=> __('Choose Image'),
          ))));
    $wp_customize->selective_refresh->add_partial('ContactPageBannerBgImage', array('selector'=> 'div.ContactPageBannerImage', // You can also select a css class
      ));

    /** ContactPage Banner section ends **/



    /** Contact page full section starts **/

    $wp_customize->add_setting('ContactPageRequired',
      array('default'=> 1,
        'transport'=> 'refresh',
        'sanitize_callback'=> 'skyrocket_switch_sanitization'
      ));
    $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'ContactPageRequired',
        array('label'=> __('ContactUs Section required', 'w3layouts'),
          'section'=> 'ContactPageSection',
          'settings'=> 'ContactPageRequired',
          'priority'=> 1)));
    $wp_customize->selective_refresh->add_partial('ContactPageRequired', array('selector'=> 'div.ContactSection', // You can also select a css class
      ));


    /** Contactpage Details Required **/

    $wp_customize->add_setting('ContactDetailsRequired',
      array('default'=> 1,
        'transport'=> 'refresh',
        'sanitize_callback'=> 'skyrocket_switch_sanitization'
      ));
    $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'ContactDetailsRequired',
        array('label'=> __('Contact Details Required', 'w3layouts'),
          'section'=> 'ContactPageSection',
          'settings'=> 'ContactDetailsRequired'
        )));

    $wp_customize->add_setting('ContactDetailsTitle1', array('default'=> 'Get in touch',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactDetailsTitle1',
        array('label'=> __('Contact Details Title 1', 'w3layouts'),
          'section'=> 'ContactPageSection',
          'settings'=> 'ContactDetailsTitle1',
        )));

    $wp_customize->add_setting('ContactDetailsTitle2', array('default'=> "Find Us",
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactDetailsTitle2',
        array('label'=> __('Contact Details Title 2', 'w3layouts'),
          'section'=> 'ContactPageSection',
          'settings'=> 'ContactDetailsTitle2',
        )));

    $wp_customize->add_setting('ContactDetailsContent', array('default'=> 'Start working with Us that can provide everything you need to
generate awareness,
        drive traffic,
        connect. <br> We guarantee that you’ll be able to have any issue resolved within 24 hours.',
'transport'=> 'refresh',
      ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactDetailsContent',
        array('label'=> __('Contact Details Content', 'w3layouts'),
          'section'=> 'ContactPageSection',
          'type'=> 'textarea',
          'input_attrs'=> array('class'=> 'my-custom-class',
            'style'=> 'border: 1px solid #999',
            'placeholder'=> __('Enter message...', 'w3layouts'),
          ),
        )));

    $wp_customize->add_setting('ContactPageNumberRequired',
      array('default'=> 1,
        'transport'=> 'refresh',
        'sanitize_callback'=> 'skyrocket_switch_sanitization'
      ));

    $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'ContactPageNumberRequired',
        array('label'=> __('Contact Number required', 'w3layouts'),
          'section'=> 'ContactPageSection',
          'settings'=> 'ContactPageNumberRequired'
        )));

    $wp_customize->add_setting('ContactPhoneTitle', array('default'=> "Phone number",
        'transport'=> 'refresh',
      ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactPhoneTitle',
        array('label'=> __('Contact Phone number Title', 'w3layouts'),
          'section'=> 'ContactPageSection',
          'settings'=> 'ContactPhoneTitle'
        )));

    $wp_customize->add_setting('ContactNumber', array('default'=> '+(21) 255 088 4943',
        'transport'=> 'refresh',
      ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactNumber',
        array('label'=> __('Contact Number', 'w3layouts'),
          'section'=> 'ContactPageSection',
          'settings'=> 'ContactNumber'
        )));

    $wp_customize->add_setting('ContactNumberUrl', array('default'=> 'tel:+(21) 255 088 4943',
        'transport'=> 'refresh',
      ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactNumberUrl',
        array('label'=> __('Contact Number URL', 'w3layouts'),
          'section'=> 'ContactPageSection',
          'settings'=> 'ContactNumberUrl'
        )));

    $wp_customize->add_setting('ContactPageEmailRequired',
      array('default'=> 1,
        'transport'=> 'refresh',
        'sanitize_callback'=> 'skyrocket_switch_sanitization'
      ));
    $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'ContactPageEmailRequired',
        array('label'=> __('ContactUs Email required', 'w3layouts'),
          'section'=> 'ContactPageSection',
          'settings'=> 'ContactPageEmailRequired'
        )));

    $wp_customize->add_setting('ContactEmailTitle', array('default'=> "Send Email",
        'transport'=> 'refresh',
      ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactEmailTitle',
        array('label'=> __('Contact Email Title', 'w3layouts'),
          'section'=> 'ContactPageSection',
          'settings'=> 'ContactEmailTitle'
        )));

    $wp_customize->add_setting('ContactMailtxt', array('default'=> 'advisory@mail.com',
        'transport'=> 'refresh',
      ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactMailtxt',
        array('label'=> __('Contact MailID', 'w3layouts'),
          'section'=> 'ContactPageSection',
          'settings'=> 'ContactMailtxt'
        )));

    $wp_customize->add_setting('ContactMailUrl', array('default'=> 'advisory@mail.com',
        'transport'=> 'refresh',
      ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactMailUrl',
        array('label'=> __('Contact MailID URL', 'w3layouts'),
          'section'=> 'ContactPageSection',
          'settings'=> 'ContactMailUrl'
        )));

    $wp_customize->add_setting('ContactPageAddressRequired',
      array('default'=> 1,
        'transport'=> 'refresh',
        'sanitize_callback'=> 'skyrocket_switch_sanitization'
      ));

    $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'ContactPageAddressRequired',
        array('label'=> __('Contact Address required', 'w3layouts'),
          'section'=> 'ContactPageSection',
          'settings'=> 'ContactPageAddressRequired'
        )));

    $wp_customize->add_setting('ContactAddressTitle', array('default'=> "Office Address",
        'transport'=> 'refresh',
      ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactAddressTitle',
        array('label'=> __('Contact Address Title', 'w3layouts'),
          'section'=> 'ContactPageSection',
          'settings'=> 'ContactAddressTitle'
        )));

    $wp_customize->add_setting('ContactAddress', array('default'=> 'Address here, 434 Trainer Honey street, London, UK - 62617.',
        'transport'=> 'refresh',
      ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactAddress',
        array('label'=> __('Contact Address', 'w3layouts'),
          'section'=> 'ContactPageSection',
          'type'=> 'textarea',
          'input_attrs'=> array('class'=> 'my-custom-class',
            'style'=> 'border: 1px solid #999',
            'placeholder'=> __('Enter message...', 'w3layouts'),
          ),
        )));



    /** Contactpage Form Required **/

    $wp_customize->add_setting('ContactPageFormRequired',
      array('default'=> 1,
        'transport'=> 'refresh',
        'sanitize_callback'=> 'skyrocket_switch_sanitization'
      ));
    $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'ContactPageFormRequired',
        array('label'=> __('Contactpage Form Required', 'w3layouts'),
          'section'=> 'ContactPageForm',
          'settings'=> 'ContactPageFormRequired'
        )));
        $wp_customize->selective_refresh->add_partial('ContactPageFormRequired', array('selector'=> 'div.ContactPageForm', // You can also select a css class
          ));

    $wp_customize->add_setting('ContactFormTitle1', array('default'=> "Contact Us",
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactFormTitle1',
        array('label'=> __('Contact Form Title 1', 'w3layouts'),
          'section'=> 'ContactPageForm',
          'settings'=> 'ContactFormTitle1',
        )));

    $wp_customize->add_setting('ContactFormTitle2', array('default'=> "Fill out the form.",
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactFormTitle2',
        array('label'=> __('Contact Form Title 2', 'w3layouts'),
          'section'=> 'ContactPageForm',
          'settings'=> 'ContactFormTitle2',
        )));

    $wp_customize->add_setting('ContactFormContent', array('default'=> 'Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio
consectetur adipisicing.',
'transport'=> 'refresh',
      ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactFormContent',
        array('label'=> __('Contact Form Content', 'w3layouts'),
          'section'=> 'ContactPageForm',
          'type'=> 'textarea',
          'input_attrs'=> array('class'=> 'my-custom-class',
            'style'=> 'border: 1px solid #999',
            'placeholder'=> __('Enter message...', 'w3layouts'),
          ),
        )));



    $wp_customize->add_setting('ContactToEmail', array('default'=> 'contact@email-me.com',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactToEmail',
        array('label'=> __('Contact email address', 'w3layouts'),
          'section'=> 'ContactPageForm',
          'description'=> __('Who should receive email when contact form submitted Eg: contact@email-me.com'),
          'settings'=> 'ContactToEmail'
        )));

    $wp_customize->add_setting('ContactPageFormURL', array('default'=> 'https://app.hoverforms.com/SubmitForm/w3layouts',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactPageFormURL',
        array('label'=> __('Form Action URL', 'w3layouts'),
          'section'=> 'ContactPageForm',
          'settings'=> 'ContactPageFormURL',
        )));

    $wp_customize->add_setting('ContactPageFormName', array('default'=> 'w3lName',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactPageFormName',
        array('label'=> __('Name field Name', 'w3layouts'),
          'section'=> 'ContactPageForm',
          'settings'=> 'ContactPageFormName',
        )));

    $wp_customize->add_setting('ContactPageFormNameplaceholder', array('default'=> 'Name',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactPageFormNameplaceholder',
        array('label'=> __('Name field Placeholder', 'w3layouts'),
          'section'=> 'ContactPageForm',
          'settings'=> 'ContactPageFormNameplaceholder',
        )));


    $wp_customize->add_setting('ContactPageFormEmail', array('default'=> 'w3lSender',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactPageFormEmail',
        array('label'=> __('Email field Name', 'w3layouts'),
          'section'=> 'ContactPageForm',
          'settings'=> 'ContactPageFormEmail',
        )));

    $wp_customize->add_setting('ContactPageFormEmailplaceholder', array('default'=> 'Email',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactPageFormEmailplaceholder',
        array('label'=> __('Email field Placeholder', 'w3layouts'),
          'section'=> 'ContactPageForm',
          'settings'=> 'ContactPageFormEmailplaceholder',
        )));

    $wp_customize->add_setting('ContactPageFormSubject', array('default'=> 'w3lSubject',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactPageFormSubject',
        array('label'=> __('Subject field Name', 'w3layouts'),
          'section'=> 'ContactPageForm',
          'settings'=> 'ContactPageFormSubject',

        )));
    $wp_customize->add_setting('ContactPageFormSubjectplaceholder', array('default'=> 'Subject',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactPageFormSubjectplaceholder',
        array('label'=> __('Subject field Placeholder', 'w3layouts'),
          'section'=> 'ContactPageForm',
          'settings'=> 'ContactPageFormSubjectplaceholder',
        )));

    $wp_customize->add_setting('ContactPageFormMessage', array('default'=> 'w3lMessage',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactPageFormMessage',
        array('label'=> __('Message field Name', 'w3layouts'),
          'section'=> 'ContactPageForm',
          'settings'=> 'ContactPageFormMessage',
        )));

    $wp_customize->add_setting('ContactPageFormMessageplaceholder', array('default'=> 'Message',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactPageFormMessageplaceholder',
        array('label'=> __('Message field Placeholder', 'w3layouts'),
          'section'=> 'ContactPageForm',
          'settings'=> 'ContactPageFormMessageplaceholder',
        )));

    $wp_customize->add_setting('ContactPageFormBtn', array('default'=> 'Send Message',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactPageFormBtn',
        array('label'=> __('Button Name', 'w3layouts'),
          'section'=> 'ContactPageForm',
          'settings'=> 'ContactPageFormBtn',
        )));

    /** Contactpage Form Required **/



    // Contact Page top & bottom  textarea

    $wp_customize->add_setting('ContactPageTopArea', array('default'=> '',
        'transport'=> 'refresh',
      ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactPageTopArea',
        array('label'=> __('Contact Top', 'w3layouts'),
          'section'=> 'ContactPageSection',
          'type'=> 'textarea',
          'input_attrs'=> array('class'=> 'my-custom-class',
            'style'=> 'border: 1px solid #999',
            'placeholder'=> __('Enter message...', 'w3layouts'),
          ),
        )));

    $wp_customize->add_setting('ContactPageBottomArea', array('default'=> '',
        'transport'=> 'refresh',
      ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactPageBottomArea',
        array('label'=> __('Contact Bottom', 'w3layouts'),
          'section'=> 'ContactPageSection',
          'type'=> 'textarea',
          'input_attrs'=> array('class'=> 'my-custom-class',
            'style'=> 'border: 1px solid #999',
            'placeholder'=> __('Enter message...', 'w3layouts'),
          ),
        )));

    // Contact Page top & bottom  textarea

    /** Contact page full section ends **/



    /** Contact page Map starts **/

    $wp_customize->add_setting('ContactPageMapRequired',
      array('default'=> 1,
        'transport'=> 'refresh',
        'sanitize_callback'=> 'skyrocket_switch_sanitization'
      ));
    $wp_customize->add_control(new Skyrocket_Toggle_Switch_Custom_control($wp_customize, 'ContactPageMapRequired',
        array('label'=> __('Contact Map required', 'w3layouts'),
          'section'=> 'ContactPageMap',
          'settings'=> 'ContactPageMapRequired'
        )));
    $wp_customize->selective_refresh->add_partial('ContactPageMapRequired', array('selector'=> 'div.ContactPageMap', // You can also select a css class
      ));

    $wp_customize->add_setting('ContactPageMapURL', array('default'=> 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2spl!4v1562654563739!5m2!1sen!2spl',
        'transport'=> 'refresh', ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactPageMapURL',
        array('label'=> __('Map URL', 'w3layouts'),
          'section'=> 'ContactPageMap',
          'settings'=> 'ContactPageMapURL',
        )));

    // Contact Page Map top & bottom  textarea

    $wp_customize->add_setting('ContactPageMapTopArea', array('default'=> '',
        'transport'=> 'refresh',
      ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactPageMapTopArea',
        array('label'=> __('Contact Map Top', 'w3layouts'),
          'section'=> 'ContactPageMap',
          'type'=> 'textarea',
          'input_attrs'=> array('class'=> 'my-custom-class',
            'style'=> 'border: 1px solid #999',
            'placeholder'=> __('Enter message...', 'w3layouts'),
          ),
        )));

    $wp_customize->add_setting('ContactPageMapBottomArea', array('default'=> '',
        'transport'=> 'refresh',
      ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,
        'ContactPageMapBottomArea',
        array('label'=> __('Contact Map Bottom', 'w3layouts'),
          'section'=> 'ContactPageMap',
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